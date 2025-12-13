<?php

namespace App\Service;

use App\Entity\Event;
use App\Entity\Participant;
use App\Entity\User;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Psr\Log\LoggerInterface;

class ParticipantNotificationService
{
    public function __construct(
        private MailerInterface $mailer,
        private LoggerInterface $logger
    ) {
    }

    public function sendStatusChangeEmail(Participant $participant, Event $event, User $user, string $newStatus): void
    {
        error_log("=== DÉBUT ENVOI EMAIL ===");
        error_log("To: " . $user->getEmail());
        error_log("Event: " . $event->getTitle());
        error_log("Status: " . $newStatus);
        
        try {
            $email = (new TemplatedEmail())
                ->from(new Address('noreply@musehub.com', 'MuseHub'))
                ->to(new Address($user->getEmail(), $user->getUsername()))
                ->subject($this->getSubject($newStatus, $event->getTitle()))
                ->htmlTemplate('emails/participant_status_change.html.twig')
                ->context([
                    'user' => $user,
                    'event' => $event,
                    'participant' => $participant,
                    'status' => $newStatus,
                    'statusLabel' => $this->getStatusLabel($newStatus),
                    'statusEmoji' => $this->getStatusEmoji($newStatus),
                ]);

            error_log("Email créé, envoi en cours...");
            $this->mailer->send($email);
            error_log("✓ Email envoyé avec succès via mailer->send()");
            
            $this->logger->info('Email de notification envoyé', [
                'user' => $user->getEmail(),
                'event' => $event->getTitle(),
                'status' => $newStatus
            ]);
        } catch (\Exception $e) {
            error_log("✗ ERREUR: " . $e->getMessage());
            error_log("Stack trace: " . $e->getTraceAsString());
            
            $this->logger->error('Erreur lors de l\'envoi de l\'email de notification', [
                'error' => $e->getMessage(),
                'user' => $user->getEmail(),
                'event' => $event->getTitle()
            ]);
            
            throw $e; // Propager l'erreur pour debugging
        }
    }

    private function getSubject(string $status, string $eventTitle): string
    {
        return match ($status) {
            'confirmed' => "✅ Inscription confirmée - {$eventTitle}",
            'rejected' => "❌ Inscription refusée - {$eventTitle}",
            'pending' => "⏳ Inscription en attente - {$eventTitle}",
            default => "Mise à jour de votre inscription - {$eventTitle}",
        };
    }

    private function getStatusLabel(string $status): string
    {
        return match ($status) {
            'confirmed' => 'Confirmée',
            'rejected' => 'Refusée',
            'pending' => 'En attente',
            default => $status,
        };
    }

    private function getStatusEmoji(string $status): string
    {
        return match ($status) {
            'confirmed' => '✅',
            'rejected' => '❌',
            'pending' => '⏳',
            default => '📧',
        };
    }
}
