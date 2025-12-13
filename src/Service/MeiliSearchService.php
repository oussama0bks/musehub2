<?php

namespace App\Service;

use App\Entity\User;
use Psr\Log\LoggerInterface;

class MeiliSearchService
{
    public function __construct(
        private LoggerInterface $logger
    ) {
    }

    public function indexUser(User $user): void
    {
        // In a real implementation, this would use the Meilisearch client
        // $this->client->index('users')->addDocuments([...]);
        
        // For now, we simulate indexing by logging
        $this->logger->info(sprintf('Simulating Meilisearch indexing for User ID %d (%s)', $user->getId(), $user->getEmail()));
        
        // Simulate network delay
        // usleep(100000); 
    }

    public function removeUser(User $user): void
    {
        $this->logger->info(sprintf('Simulating Meilisearch removal for User ID %d', $user->getId()));
    }
}
