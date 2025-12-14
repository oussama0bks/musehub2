<?php

namespace App\MessageHandler;

use App\Message\UserActionMessage;
use App\Service\MeiliSearchService;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;
use Symfony\Component\Mime\Email;
use Psr\Log\LoggerInterface;

#[AsMessageHandler]
class UserActionHandler
{
    public function __construct(
        private UserRepository $userRepository,
        private MeiliSearchService $meiliSearchService,
        private MailerInterface $mailer,
        private EntityManagerInterface $entityManager,
        private LoggerInterface $logger
    ) {
    }

    public function __invoke(UserActionMessage $message): void
    {
        // Re-fetch user to ensure it's managed
        $user = $this->userRepository->find($message->getUserId());

        if (!$user) {
            $this->logger->error(sprintf('User not found for ID %d', $message->getUserId()));
            return;
        }

        switch ($message->getAction()) {
            case UserActionMessage::ACTION_REGISTERED:
                $this->handleRegistration($user);
                break;
            case UserActionMessage::ACTION_PROFILE_UPDATED:
                $this->handleProfileUpdate($user);
                break;
        }
    }

    private function handleRegistration(\App\Entity\User $user): void
    {
        // 1. Send Welcome Email
        $email = (new Email())
            ->from('hello@musehub.com')
            ->to($user->getEmail())
            ->subject('Bienvenue sur MuseHub !')
            ->text(sprintf("Bonjour %s,\n\nBienvenue sur la plateforme MuseHub ! Nous sommes ravis de vous compter parmi nous.\n\nL'équipe MuseHub", $user->getFirstname() ?? $user->getUsername()));

        try {
            $this->mailer->send($email);
            $this->logger->info(sprintf('Welcome email sent to %s', $user->getEmail()));
        } catch (\Exception $e) {
            $this->logger->error(sprintf('Failed to send welcome email to %s: %s', $user->getEmail(), $e->getMessage()));
        }

        // 2. Index in Meilisearch
        $this->meiliSearchService->indexUser($user);

        // 3. Send Internal Welcome Message (Chat)
        $admin = $this->userRepository->findOneByEmail('admin@musehub.com');
        if (!$admin) {
            // Fallback: Try to find ANY admin
            $admins = $this->userRepository->createQueryBuilder('u')
                ->where('u.roles LIKE :role')
                ->setParameter('role', '%ROLE_ADMIN%')
                ->setMaxResults(1)
                ->getQuery()
                ->getResult();
            $admin = $admins[0] ?? null;
        }

        if ($admin) {
            $welcomeMessage = new \App\Entity\Message();
            $welcomeMessage->setSender($admin);
            $welcomeMessage->setRecipient($user);
            $welcomeMessage->setContent(sprintf("Bonjour %s ! Si vous avez des questions ou besoin d'aide, n'hésitez pas à répondre directement à ce message. L'équipe MuseHub est là pour vous.", $user->getFirstname() ?? $user->getUsername()));
            $welcomeMessage->setCreatedAt(new \DateTimeImmutable());
            $welcomeMessage->setIsRead(false); // Unread for the new user

            $this->entityManager->persist($welcomeMessage);
            $this->entityManager->flush();
            
            $this->logger->info(sprintf('Welcome chat message sent to %s from %s', $user->getEmail(), $admin->getEmail()));
        } else {
             $this->logger->warning('No admin found to send welcome chat message.');
        }
    }

    private function handleProfileUpdate(\App\Entity\User $user): void
    {
        // 1. Moderation (Async)
        $this->moderateProfile($user);

        // 2. Re-index in Meilisearch
        $this->meiliSearchService->indexUser($user);

        // 3. Send Notification (Simulated)
        $this->logger->info(sprintf('Notification dispatched for profile update of User ID %d', $user->getId()));
    }

    private function moderateProfile(\App\Entity\User $user): void
    {
        // Simple bad word filter for Bio and Username
        $bannedWords = ['spam', 'fake', 'banned'];
        $content = strtolower(($user->getBio() ?? '') . ' ' . ($user->getUsername() ?? ''));
        
        foreach ($bannedWords as $word) {
            if (str_contains($content, $word)) {
                $this->logger->warning(sprintf('User %d flagged for moderation. Contains banned word: %s', $user->getId(), $word));
                // Logic to flag user or clear bio could go here
                // $user->setIsActive(false);
                // $this->entityManager->flush();
                return;
            }
        }
        
        $this->logger->info(sprintf('User %d passed moderation.', $user->getId()));
    }
}