<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Repository\ListingRepository;
use App\Repository\OffreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/marketplace/offres')]
#[IsGranted('ROLE_ADMIN')]
class OffreDashboardController extends AbstractController
{
    public function __construct(
        private OffreRepository $offreRepository,
        private ListingRepository $listingRepository,
        private EntityManagerInterface $em
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
        $offre->setDatePropose(new \DateTime());
        $offre->setStatut('En attente');

        $form = $this->createFormBuilder($offre)
            ->add('listing', EntityType::class, [
                'class' => 'App\Entity\Listing',
                'choice_label' => function($listing) {
                    return sprintf('#%d - %s €', 
                        $listing->getId(),
                        number_format((float)$listing->getPrice(), 2, ',', ' ')
                    );
                },
                'query_builder' => function (ListingRepository $er) {
                    return $er->createQueryBuilder('l')
                        ->where('l.status = :status')
                        ->setParameter('status', 'available')
                        ->orderBy('l.id', 'DESC');
                },
                'placeholder' => 'Sélectionnez une annonce',
                'label' => 'Annonce',
                'required' => true,
                'attr' => ['class' => 'form-select']
            ])
            ->add('utilisateur', EntityType::class, [
                'class' => 'App\Entity\User',
                'choice_label' => 'email',
                'placeholder' => 'Sélectionnez un utilisateur',
                'label' => 'Acheteur',
                'required' => true,
                'attr' => ['class' => 'form-select']
            ])
            ->add('prixPropose', NumberType::class, [
                'label' => 'Prix proposé',
                'required' => true,
                'scale' => 2,
                'html5' => true,
                'attr' => [
                    'class' => 'form-control',
                    'step' => '0.01',
                    'min' => '0',
                    'placeholder' => '0.00',
                    'inputmode' => 'decimal'
                ]
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'En attente' => 'En attente',
                    'Acceptée' => 'Acceptée',
                    'Refusée' => 'Refusée'
                ],
                'attr' => ['class' => 'form-select']
            ])
            ->add('datePropose', DateTimeType::class, [
                'label' => 'Date de l\'offre',
                'widget' => 'single_text',
                'html5' => true,
                'attr' => [
                    'class' => 'form-control',
                    'min' => (new \DateTime())->format('Y-m-d\TH:i')
                ]
            ])
            ->add('commentaire', TextareaType::class, [
                'label' => 'Commentaire',
                'required' => false,
                'attr' => [
                    'class' => 'form-control', 
                    'rows' => 3,
                    'placeholder' => 'Commentaire optionnel...'
                ]
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $this->em->persist($offre);
                $this->em->flush();

                $this->addFlash('success', 'L\'offre a été créée avec succès.');
                return $this->redirectToRoute('admin_offre_list');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de la création de l\'offre: ' . $e->getMessage());
            }
        }

        return $this->render('marketplace/admin_offre_new.html.twig', [
            'form' => $form->createView(),
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

            if (!$prixPropose || !$statut) {
                $this->addFlash('error', 'Prix et statut sont requis.');
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
