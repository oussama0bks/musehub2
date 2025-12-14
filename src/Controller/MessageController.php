<?php

namespace App\Controller;

use App\Entity\Message;
use App\Entity\User;
use App\Repository\MessageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    #[Route('/messages', name: 'app_messages')]
    public function index(MessageRepository $messageRepository): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // Get latest message for each conversation
        $conversations = $messageRepository->findLatestConversations($user);

        return $this->render('message/index.html.twig', [
            'conversations' => $conversations,
        ]);
    }

    #[Route('/messages/conversation/{id}', name: 'app_message_show')]
    public function show(User $otherUser, MessageRepository $messageRepository, EntityManagerInterface $entityManager): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        if (!$currentUser) {
            return $this->redirectToRoute('app_login');
        }

        // Fetch messages between current user and other user
        $messages = $messageRepository->findMessagesBetween($currentUser, $otherUser);

        // Mark unread messages as read
        foreach ($messages as $message) {
            if ($message->getRecipient() === $currentUser && !$message->isRead()) {
                $message->setIsRead(true);
            }
        }
        $entityManager->flush();

        return $this->render('message/show.html.twig', [
            'otherUser' => $otherUser,
            'messages' => $messages,
        ]);
    }

    #[Route('/messages/send/{id}', name: 'app_message_send', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function send(Request $request, User $recipient, EntityManagerInterface $entityManager): Response
    {
        /** @var User $sender */
        $sender = $this->getUser();
        if (!$sender) {
            return $this->redirectToRoute('app_login');
        }

        $content = $request->request->get('content');
        if (!empty($content)) {
            $message = new Message();
            $message->setSender($sender);
            $message->setRecipient($recipient);
            $message->setContent($content);
            
            $entityManager->persist($message);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_message_show', ['id' => $recipient->getId()]);
    }

    #[Route('/messages/send/admin', name: 'app_message_send_admin', methods: ['POST'])]
    public function sendToAdmin(Request $request, \App\Repository\UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        $sender = $this->getUser();
        if (!$sender) {
            return $this->redirectToRoute('app_login');
        }

        $content = $request->request->get('content');
        if (!empty($content)) {
            // Find an Admin
            $admin = $userRepository->findOneByEmail('admin@musehub.com');
            if (!$admin) {
                $admins = $userRepository->createQueryBuilder('u')
                    ->where('u.roles LIKE :role')
                    ->setParameter('role', '%ROLE_ADMIN%')
                    ->setMaxResults(1)
                    ->getQuery()
                    ->getResult();
                $admin = $admins[0] ?? null;
            }

            if ($admin) {
                $message = new Message();
                $message->setSender($sender);
                $message->setRecipient($admin);
                $message->setContent($content);
                $message->setCreatedAt(new \DateTimeImmutable());
                
                $entityManager->persist($message);
                $entityManager->flush();

                $this->addFlash('success', 'Votre message a été envoyé à l\'administration.');
            } else {
                $this->addFlash('error', 'Aucun administrateur disponible pour le moment.');
            }
        }

        return $this->redirectToRoute('app_messages');
    }
}