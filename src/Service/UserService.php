<?php

namespace App\Service;

use App\Entity\User;
use App\Message\UserActionMessage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private UserPasswordHasherInterface $passwordHasher,
        private MessageBusInterface $messageBus
    ) {
    }

    public function registerUser(User $user, string $plainPassword): void
    {
        // Hash password
        $user->setPassword(
            $this->passwordHasher->hashPassword($user, $plainPassword)
        );

        // Persist user
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        // Dispatch async message for welcome email, indexing, etc.
        $this->messageBus->dispatch(new UserActionMessage($user->getId(), UserActionMessage::ACTION_REGISTERED));
    }

    public function updateUserProfile(User $user): void
    {
        // Assume data is already set on the entity by the form
        $this->entityManager->flush();

        // Dispatch async message for moderation, re-indexing, notifications
        $this->messageBus->dispatch(new UserActionMessage($user->getId(), UserActionMessage::ACTION_PROFILE_UPDATED));
    }
}
