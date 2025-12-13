<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'app_admin_dashboard')]
    public function __construct(
        private \App\Repository\UserRepository $userRepository,
        private \App\Repository\ArtworkRepository $artworkRepository,
        private \App\Repository\EventRepository $eventRepository,
        private \App\Repository\ListingRepository $listingRepository,
        private \App\Repository\PostRepository $postRepository,
        private \App\Repository\TransactionRepository $transactionRepository,
    ) {
    }

    #[Route('/admin/dashboard', name: 'app_admin_dashboard')]
    public function dashboard(): Response
    {
        $stats = [
            'users' => $this->userRepository->count([]),
            'artists' => count($this->userRepository->createQueryBuilder('u')->where('u.roles LIKE :role')->setParameter('role', '%ROLE_ARTIST%')->getQuery()->getResult()),
            'artworks' => $this->artworkRepository->count([]),
            'events' => $this->eventRepository->count([]),
            'listings' => $this->listingRepository->count([]),
            'posts' => $this->postRepository->count([]),
            'revenue' => $this->transactionRepository->getTotalRevenue() ?? 0,
        ];

        return $this->render('admin/dashboard.html.twig', [
            'stats' => $stats,
        ]);
    }

    #[Route('/admin/stats', name: 'admin_stats')]
    public function stats(): Response
    {
        $stats = [
            'users' => $this->userRepository->count([]),
            'artists' => count($this->userRepository->createQueryBuilder('u')->where('u.roles LIKE :role')->setParameter('role', '%ROLE_ARTIST%')->getQuery()->getResult()),
            'artworks' => [
                'total' => $this->artworkRepository->count([]),
                'visible' => $this->artworkRepository->count(['status' => 'visible']),
                'hidden' => $this->artworkRepository->count(['status' => 'hidden']),
            ],
            'events' => $this->eventRepository->count([]),
            'listings' => $this->listingRepository->count([]),
            'posts' => $this->postRepository->count([]),
            'revenue' => $this->transactionRepository->getTotalRevenue() ?? 0,
        ];

        return $this->render('admin/stats.html.twig', [
            'stats' => $stats,
        ]);
    }
}
