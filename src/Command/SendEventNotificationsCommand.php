<?php

namespace App\Command;

use App\Service\NotificationManager;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:send-event-notifications',
    description: 'Envoie les notifications d\'événements en attente',
)]
class SendEventNotificationsCommand extends Command
{
    public function __construct(
        private NotificationManager $notificationManager
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $io->title('Envoi des notifications d\'événements');

        try {
            $sentCount = $this->notificationManager->sendPendingNotifications();

            if ($sentCount > 0) {
                $io->success("$sentCount notification(s) envoyée(s) avec succès.");
            } else {
                $io->info('Aucune notification en attente.');
            }

            // Afficher les statistiques
            $stats = $this->notificationManager->getStatistics();
            $io->section('Statistiques');
            $io->table(
                ['Statut', 'Nombre'],
                [
                    ['En attente', $stats['pending']],
                    ['Envoyées', $stats['sent']],
                    ['Échouées', $stats['failed']],
                ]
            );

            return Command::SUCCESS;

        } catch (\Exception $e) {
            $io->error('Erreur lors de l\'envoi des notifications : ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
