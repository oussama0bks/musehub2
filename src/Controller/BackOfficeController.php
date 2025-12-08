<?php

namespace App\Controller;

<<<<<<< HEAD
use App\Repository\ArtworkRepository;
use App\Repository\EventRepository;
use App\Repository\ListingRepository;
use App\Repository\PostRepository;
use App\Repository\TransactionRepository;
use App\Repository\UserRepository;
=======
>>>>>>> 776eda0bf4e6f00382b836d54d37240960c5e114
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class BackOfficeController extends AbstractController
{
<<<<<<< HEAD
    public function __construct(
        private UserRepository $userRepository,
        private ArtworkRepository $artworkRepository,
        private EventRepository $eventRepository,
        private ListingRepository $listingRepository,
        private PostRepository $postRepository,
        private TransactionRepository $transactionRepository
    ) {
    }

    #[Route('/', name: 'admin_dashboard')]
    public function dashboard(): Response
    {
        // Statistiques
        $stats = [
            'users' => $this->userRepository->count([]),
            'artists' => count($this->userRepository->createQueryBuilder('u')
                ->where('u.roles LIKE :role')
                ->setParameter('role', '%ROLE_ARTIST%')
                ->getQuery()
                ->getResult()),
            'artworks' => $this->artworkRepository->count([]),
            'events' => $this->eventRepository->count([]),
            'listings' => $this->listingRepository->count([]),
            'posts' => $this->postRepository->count([]),
            'revenue' => $this->transactionRepository->getTotalRevenue(),
        ];

        return $this->render('admin/dashboard.html.twig', [
            'stats' => $stats,
        ]);
=======
    #[Route('/', name: 'admin_dashboard')]
    public function dashboard(): Response
    {
        $templatePath = $this->getParameter('kernel.project_dir') . '/templates/template-admiro/index.html';
        
        if (!file_exists($templatePath)) {
            throw $this->createNotFoundException('Template not found');
        }
        
        $content = file_get_contents($templatePath);
        
        $content = preg_replace('/(href|src)="assets\//', '$1="/BO/assets/', $content);
        $content = preg_replace('/(href|src)="\.\.\/assets\//', '$1="/BO/assets/', $content);
        
        return new Response($content);
>>>>>>> 776eda0bf4e6f00382b836d54d37240960c5e114
    }
}
