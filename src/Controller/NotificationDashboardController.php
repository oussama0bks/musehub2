<?php

namespace App\Controller;

use App\Repository\EventNotificationRepository;
use App\Service\NotificationManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/notifications')]
class NotificationDashboardController extends AbstractController
{
    public function __construct(
        private EventNotificationRepository $notificationRepository,
        private NotificationManager $notificationManager
    ) {}

    #[Route('', name: 'admin_notifications_list', methods: ['GET'])]
    public function list(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $notifications = $this->notificationRepository->findBy(
            [],
            ['scheduledAt' => 'DESC'],
            100
        );

        $stats = $this->notificationManager->getStatistics();

        return $this->render('notification/admin_list.html.twig', [
            'notifications' => $notifications,
            'stats' => $stats,
        ]);
    }

    #[Route('/send-pending', name: 'admin_notifications_send_pending', methods: ['POST'])]
    public function sendPending(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if (!$this->isCsrfTokenValid('send_notifications', $this->getRequest()->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('admin_notifications_list');
        }

        try {
            $sentCount = $this->notificationManager->sendPendingNotifications();
            $this->addFlash('success', "$sentCount notification(s) envoyée(s).");
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur : ' . $e->getMessage());
        }

        return $this->redirectToRoute('admin_notifications_list');
    }

    private function getRequest()
    {
        return $this->container->get('request_stack')->getCurrentRequest();
    }
}
