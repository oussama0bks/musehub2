<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Repository\ListingRepository;
use App\Repository\OffreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[Route('/admin/marketplace/offres')]
#[IsGranted('ROLE_ADMIN')]
class OffreDashboardController extends AbstractController
{
    public function __construct(
        private OffreRepository $offreRepository,
        private ListingRepository $listingRepository,
        private EntityManagerInterface $em,
        private ValidatorInterface $validator
    ) {
    }

    #[Route('', name: 'admin_offre_list', methods: ['GET'])]
    public function list(Request $request): Response
    {
        $statut = $request->query->get('statut', 'all');
        $listing = $request->query->get('listing', null);
        
        $qb = $this->offreRepository->createQueryBuilder('o')
            ->orderBy('o.datePropose', 'DESC');

        if ($statut !== 'all' && $statut) {
            $qb->andWhere('o.statut = :statut')
                ->setParameter('statut', $statut);
        }

        if ($listing) {
            $qb->andWhere('o.listing = :listing')
                ->setParameter('listing', $listing);
        }

        $offres = $qb->getQuery()->getResult();
        $listings = $this->listingRepository->findAll();

        // Statistiques
        $stats = [
            'total' => $this->offreRepository->count([]),
            'en_attente' => $this->offreRepository->count(['statut' => 'En attente']),
            'acceptees' => $this->offreRepository->count(['statut' => 'Acceptée']),
            'refusees' => $this->offreRepository->count(['statut' => 'Refusée']),
        ];

        return $this->render('marketplace/admin_offre_list.html.twig', [
            'offres' => $offres,
            'listings' => $listings,
            'statut' => $statut,
            'listing' => $listing,
            'stats' => $stats,
        ]);
    }

    #[Route('/new', name: 'admin_offre_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $offre = new Offre();

        if ($request->isMethod('POST')) {
            if (!$this->isCsrfTokenValid('create_offre_admin', (string)$request->request->get('_token'))) {
                $this->addFlash('error', 'Jeton CSRF invalide.');
                return $this->redirectToRoute('admin_offre_new');
            }

            $listingId = $request->request->get('listing_id');
            $utilisateurId = $request->request->get('utilisateur_id');
            $prixPropose = $request->request->get('prix_propose');
            $statut = $request->request->get('statut', 'En attente');
            $commentaire = $request->request->get('commentaire');

            // Validation via Validator + Assert constraints
            $data = [
                'listing_id' => $listingId,
                'utilisateur_id' => $utilisateurId,
                'prix_propose' => $prixPropose,
                'statut' => $statut,
                'commentaire' => $commentaire,
            ];

            $collectionConstraint = new Assert\Collection([
                'fields' => [
                    'listing_id' => [new Assert\NotBlank(['message' => 'Annonce requise.']), new Assert\Regex(['pattern' => '/^\d+$/', 'message' => 'ID d\'annonce invalide.'])],
                    'utilisateur_id' => [new Assert\NotBlank(['message' => 'Acheteur requis.'])],
                    'prix_propose' => [new Assert\NotBlank(['message' => 'Prix requis.']), new Assert\Regex(['pattern' => '/^\d+(?:[\\.,]\d{1,2})?$/', 'message' => 'Prix invalide.']), new Assert\GreaterThan(['value' => 0, 'message' => 'Le prix doit être positif.'])],
                    'statut' => new Assert\Optional([new Assert\Choice(['choices' => ['En attente', 'Acceptée', 'Refusée'], 'message' => 'Statut invalide.'])]),
                    'commentaire' => new Assert\Optional([new Assert\Length(['max' => 1000, 'maxMessage' => 'Commentaire trop long.'])]),
                ],
                'allowExtraFields' => true,
            ]);

            $violations = $this->validator->validate($data, $collectionConstraint);
            if (count($violations) > 0) {
                $messages = [];
                foreach ($violations as $violation) {
                    $messages[] = $violation->getMessage();
                }
                $this->addFlash('error', implode(' ', array_unique($messages)));
                return $this->redirectToRoute('admin_offre_new');
            }

            $listing = $this->listingRepository->find($listingId);
            if (!$listing) {
                $this->addFlash('error', 'Annonce introuvable.');
                return $this->redirectToRoute('admin_offre_new');
            }

            // Récupérer l'utilisateur par ID ou créer un nouveau
            $userRepository = $this->em->getRepository('App:User');
            $utilisateur = $userRepository->find($utilisateurId);
            if (!$utilisateur) {
                // Essayer de le récupérer par email
                $utilisateur = $userRepository->findOneBy(['email' => $utilisateurId]);
            }
            if (!$utilisateur) {
                $this->addFlash('error', 'Acheteur non trouvé.');
                return $this->redirectToRoute('admin_offre_new');
            }

            $offre->setListing($listing);
            $offre->setUtilisateur($utilisateur);
            $offre->setPrixPropose((string)$prixPropose);
            $offre->setStatut($statut);
            if ($commentaire) {
                $offre->setCommentaire($commentaire);
            }

            $this->em->persist($offre);
            $this->em->flush();

            $this->addFlash('success', 'Offre créée avec succès !');
            return $this->redirectToRoute('admin_offre_list');
        }

        $listings = $this->listingRepository->findAll();

        return $this->render('marketplace/admin_offre_form.html.twig', [
            'offre' => $offre,
            'listings' => $listings,
            'action' => 'new',
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_offre_edit', methods: ['GET', 'POST'])]
    public function edit(int $id, Request $request): Response
    {
        $offre = $this->offreRepository->find($id);
        if (!$offre) {
            $this->addFlash('error', 'Offre introuvable.');
            return $this->redirectToRoute('admin_offre_list');
        }

        if ($request->isMethod('POST')) {
            if (!$this->isCsrfTokenValid('edit_offre_' . $id, (string)$request->request->get('_token'))) {
                $this->addFlash('error', 'Jeton CSRF invalide.');
                return $this->redirectToRoute('admin_offre_edit', ['id' => $id]);
            }

            $prixPropose = $request->request->get('prix_propose');
            $statut = $request->request->get('statut');
            $commentaire = $request->request->get('commentaire');

            // Validation simple pour l'édition
            $editData = [
                'prix_propose' => $prixPropose,
                'statut' => $statut,
                'commentaire' => $commentaire,
            ];

            $editConstraint = new Assert\Collection([
                'fields' => [
                    'prix_propose' => [new Assert\NotBlank(['message' => 'Prix requis.']), new Assert\Regex(['pattern' => '/^\d+(?:[\\.,]\d{1,2})?$/', 'message' => 'Prix invalide.']), new Assert\GreaterThan(['value' => 0, 'message' => 'Le prix doit être positif.'])],
                    'statut' => [new Assert\NotBlank(['message' => 'Statut requis.']), new Assert\Choice(['choices' => ['En attente', 'Acceptée', 'Refusée'], 'message' => 'Statut invalide.'])],
                    'commentaire' => new Assert\Optional([new Assert\Length(['max' => 1000])]),
                ],
                'allowExtraFields' => true,
            ]);

            $violationsEdit = $this->validator->validate($editData, $editConstraint);
            if (count($violationsEdit) > 0) {
                $messages = [];
                foreach ($violationsEdit as $v) {
                    $messages[] = $v->getMessage();
                }
                $this->addFlash('error', implode(' ', array_unique($messages)));
                return $this->redirectToRoute('admin_offre_edit', ['id' => $id]);
            }

            $offre->setPrixPropose((string)$prixPropose);
            $offre->setStatut($statut);
            $offre->setCommentaire($commentaire ?: null);

            $this->em->flush();
            $this->addFlash('success', 'Offre mise à jour avec succès !');

            return $this->redirectToRoute('admin_offre_list');
        }

        $listings = $this->listingRepository->findAll();

        return $this->render('marketplace/admin_offre_form.html.twig', [
            'offre' => $offre,
            'listings' => $listings,
            'action' => 'edit',
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_offre_delete', methods: ['POST'])]
    public function delete(int $id, Request $request): Response
    {
        $offre = $this->offreRepository->find($id);
        if (!$offre) {
            $this->addFlash('error', 'Offre introuvable.');
            return $this->redirectToRoute('admin_offre_list');
        }

        if (!$this->isCsrfTokenValid('delete_offre_' . $id, (string)$request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('admin_offre_list');
        }

        $this->em->remove($offre);
        $this->em->flush();

        $this->addFlash('success', 'Offre supprimée avec succès !');
        return $this->redirectToRoute('admin_offre_list');
    }

    #[Route('/{id}/accept', name: 'admin_offre_accept', methods: ['POST'])]
    public function accept(int $id, Request $request): Response
    {
        $offre = $this->offreRepository->find($id);
        if (!$offre) {
            $this->addFlash('error', 'Offre introuvable.');
            return $this->redirectToRoute('admin_offre_list');
        }

        if (!$this->isCsrfTokenValid('accept_offre_' . $id, (string)$request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('admin_offre_list');
        }

        $offre->setStatut('Acceptée');
        $this->em->flush();

        $this->addFlash('success', 'Offre acceptée !');
        return $this->redirectToRoute('admin_offre_list');
    }

    #[Route('/{id}/refuse', name: 'admin_offre_refuse', methods: ['POST'])]
    public function refuse(int $id, Request $request): Response
    {
        $offre = $this->offreRepository->find($id);
        if (!$offre) {
            $this->addFlash('error', 'Offre introuvable.');
            return $this->redirectToRoute('admin_offre_list');
        }

        if (!$this->isCsrfTokenValid('refuse_offre_' . $id, (string)$request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('admin_offre_list');
        }

        $offre->setStatut('Refusée');
        $this->em->flush();

        $this->addFlash('info', 'Offre refusée.');
        return $this->redirectToRoute('admin_offre_list');
    }
}
