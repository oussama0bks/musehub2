<?php

namespace App\MessageHandler;

use App\Message\UserActionMessage;
use App\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

#[AsMessageHandler]
class UserActionHandler
{
    public function __construct(
        private UserRepository $userRepository,
        private LoggerInterface $logger,
        private MailerInterface $mailer
    ) {
    }

    public function __invoke(UserActionMessage $message): void
    {
        $userId = $message->getUserId();
        $action = $message->getAction();

        $this->logger->info("Handling UserActionMessage: User ID {$userId}, Action {$action}");

        $user = $this->userRepository->find($userId);
        if (!$user) {
            $this->logger->error("User ID {$userId} not found during async action.");
            return;
        }

        switch ($action) {
            case UserActionMessage::ACTION_REGISTERED:
                $this->handleRegistration($user);
                break;
            case UserActionMessage::ACTION_PROFILE_UPDATED:
                $this->handleProfileUpdate($user);
                break;
            default:
                $this->logger->warning("Unknown action: {$action}");
        }
    }

    private function handleRegistration($user): void
    {
        // 1. Send Welcome Email via Google (Mailer)
        $email = (new Email())
            ->from('amenimakdouli@gmail.com')
            ->to($user->getEmail())
            ->subject('Welcome to MuseHub!')
            ->text('Welcome to the community! Your account has been created.');

        try {
            $this->mailer->send($email);
            $this->logger->info(" [ASYNC] Welcome Email SENT to: " . $user->getEmail());
        } catch (\Throwable $e) {
            $this->logger->error(" [ASYNC] Failed to send email: " . $e->getMessage());
        }

        // 2. Simulate Meilisearch Indexing
        // MeiliSearch->addDocument($user->toArray());
        $this->logger->info(" [ASYNC] Indexing User {$user->getId()} in Meilisearch");
    }

    private function handleProfileUpdate($user): void
    {
        // 1. Simulate Moderation
        $bio = $user->getBio();
        if ($bio && str_contains(strtolower($bio), 'spam')) {
            $this->logger->warning(" [ASYNC] User {$user->getId()} bio flagged for review.");
        } else {
            $this->logger->info(" [ASYNC] User {$user->getId()} bio passed auto-moderation.");
        }
    }
}
