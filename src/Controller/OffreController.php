<?php

namespace App\Controller;

use App\Entity\Listing;
use App\Entity\Offre;
use App\Form\OffreType;
use App\Repository\OffreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/offre', name: 'offre_')]
class OffreController extends AbstractController
{
    public function __construct(
        private OffreRepository $offreRepository,
        private EntityManagerInterface $entityManager,
    ) {
    }

    /**
     * Liste toutes les offres
     */
    #[Route('', name: 'index', methods: ['GET'])]
    public function index(): Response
    {
        $offres = $this->offreRepository->findAll();

        return $this->render('offre/index.html.twig', [
            'offres' => $offres,
        ]);
    }

    /**
     * Affiche les offres pour une annonce spécifique
     */
    #[Route('/listing/{id}', name: 'by_listing', methods: ['GET'])]
    public function byListing(Listing $listing): Response
    {
        $offres = $this->offreRepository->findByListing($listing->getId());

        return $this->render('offre/listing_offres.html.twig', [
            'listing' => $listing,
            'offres' => $offres,
        ]);
    }

    /**
     * Crée une nouvelle offre
     */
    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $offre = new Offre();
        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($offre);
            $this->entityManager->flush();

            $this->addFlash('success', 'Offre créée avec succès !');

            return $this->redirectToRoute('offre_show', ['id' => $offre->getId()]);
        }

        return $this->render('offre/new.html.twig', [
            'form' => $form,
        ]);
    }

    /**
     * Affiche une offre spécifique
     */
    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(Offre $offre): Response
    {
        return $this->render('offre/show.html.twig', [
            'offre' => $offre,
        ]);
    }

    /**
     * Édite une offre existante
     */
    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Offre $offre): Response
    {
        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', 'Offre modifiée avec succès !');

            return $this->redirectToRoute('offre_show', ['id' => $offre->getId()]);
        }

        return $this->render('offre/edit.html.twig', [
            'offre' => $offre,
            'form' => $form,
        ]);
    }

    /**
     * Accepte une offre (change le statut à "Acceptée")
     */
    #[Route('/{id}/accept', name: 'accept', methods: ['POST'])]
    public function accept(Offre $offre): Response
    {
        // Vérifier que c'est bien le propriétaire de l'annonce
        $this->denyAccessUnlessGranted('ROLE_USER');

        $offre->setStatut('Acceptée');
        $this->entityManager->flush();

        $this->addFlash('success', 'Offre acceptée !');

        return $this->redirectToRoute('offre_by_listing', ['id' => $offre->getListing()->getId()]);
    }

    /**
     * Refuse une offre (change le statut à "Refusée")
     */
    #[Route('/{id}/refuse', name: 'refuse', methods: ['POST'])]
    public function refuse(Offre $offre): Response
    {
        // Vérifier que c'est bien le propriétaire de l'annonce
        $this->denyAccessUnlessGranted('ROLE_USER');

        $offre->setStatut('Refusée');
        $this->entityManager->flush();

        $this->addFlash('info', 'Offre refusée.');

        return $this->redirectToRoute('offre_by_listing', ['id' => $offre->getListing()->getId()]);
    }

    /**
     * Supprime une offre
     */
    #[Route('/{id}/delete', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, Offre $offre): Response
    {
        // Vérifier que c'est bien l'utilisateur qui a fait l'offre
        $this->denyAccessUnlessGranted('ROLE_USER');

        if ($this->isCsrfTokenValid('delete' . $offre->getId(), $request->request->get('_token'))) {
            $listingId = $offre->getListing()->getId();
            $this->entityManager->remove($offre);
            $this->entityManager->flush();

            $this->addFlash('success', 'Offre supprimée avec succès !');

            return $this->redirectToRoute('offre_by_listing', ['id' => $listingId]);
        }

        $this->addFlash('error', 'Token CSRF invalide.');

        return $this->redirectToRoute('offre_show', ['id' => $offre->getId()]);
    }

    /**
     * Liste les offres de l'utilisateur connecté
     */
    #[Route('/my-offres', name: 'my_offres', methods: ['GET'])]
    public function myOffres(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $user = $this->getUser();

        $offres = $this->offreRepository->findByUtilisateur($user->getId());

        return $this->render('offre/my_offres.html.twig', [
            'offres' => $offres,
        ]);
    }

    /**
     * Filtre les offres par statut
     */
    #[Route('/by-status/{statut}', name: 'by_status', methods: ['GET'])]
    public function byStatus(string $statut): Response
    {
        $offres = $this->offreRepository->findByStatut($statut);

        return $this->render('offre/by_status.html.twig', [
            'statut' => $statut,
            'offres' => $offres,
        ]);
    }
}
