<?php

namespace App\EventSubscriber;

use App\Service\NotificationManager;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsDoctrineListener;
use Doctrine\ORM\Event\PostPersistEventArgs;
use Doctrine\ORM\Event\PostUpdateEventArgs;
use Doctrine\ORM\Events;
use App\Entity\Participant;

#[AsDoctrineListener(event: Events::postPersist, priority: 500)]
#[AsDoctrineListener(event: Events::postUpdate, priority: 500)]
class ParticipantSubscriber
{
    public function __construct(
        private NotificationManager $notificationManager
    ) {}

    /**
     * Quand un participant s'inscrit, planifier les notifications
     */
    public function postPersist(PostPersistEventArgs $args): void
    {
        $entity = $args->getObject();

        if (!$entity instanceof Participant) {
            return;
        }

        $event = $entity->getEvent();
        $user = $entity->getUser();

        if (!$event || !$user) {
            return;
        }

        // Notification immédiate de confirmation
        $this->notificationManager->scheduleNotification(
            $event,
            $user,
            'event_created',
            new \DateTime(),
            'email'
        );

        // Rappel 24h avant
        $reminder24h = (clone $event->getDateTime())->modify('-24 hours');
        if ($reminder24h > new \DateTime()) {
            $this->notificationManager->scheduleNotification(
                $event,
                $user,
                'reminder_24h',
                $reminder24h
            );
        }

        // Rappel 1h avant
        $reminder1h = (clone $event->getDateTime())->modify('-1 hour');
        if ($reminder1h > new \DateTime()) {
            $this->notificationManager->scheduleNotification(
                $event,
                $user,
                'reminder_1h',
                $reminder1h
            );
        }

        // Persister les notifications
        $args->getObjectManager()->flush();
    }

    /**
     * Quand un événement est mis à jour, notifier les participants
     */
    public function postUpdate(PostUpdateEventArgs $args): void
    {
        $entity = $args->getObject();

        if (!$entity instanceof \App\Entity\Event) {
            return;
        }

        // Vérifier si des champs importants ont changé
        $changeSet = $args->getObjectManager()
            ->getUnitOfWork()
            ->getEntityChangeSet($entity);

        $importantFields = ['title', 'dateTime', 'location', 'description'];
        $hasImportantChanges = false;

        foreach ($importantFields as $field) {
            if (isset($changeSet[$field])) {
                $hasImportantChanges = true;
                break;
            }
        }

        if ($hasImportantChanges) {
            $this->notificationManager->notifyParticipants(
                $entity,
                'event_updated'
            );
        }
    }
}
