<?php

namespace App\MessageHandler;

use App\Message\ContentReviewMessage;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class ContentReviewHandler
{
    public function __construct(
        private PostRepository $postRepository,
        private EntityManagerInterface $em,
        private LoggerInterface $logger
    ) {
    }

    public function __invoke(ContentReviewMessage $message): void
    {
        $postId = $message->getPostId();
        $this->logger->info("Handling ContentReviewMessage for Post ID: {$postId}");

        $post = $this->postRepository->find($postId);
        if (!$post) {
            $this->logger->error("Post ID {$postId} not found during async review.");
            return;
        }

        // 1. Simulate Moderation
        $content = strtolower($post->getContent() . ' ' . $post->getTitle());
        $forbiddenWords = ['spam', 'badword', 'viagra'];
        
        foreach ($forbiddenWords as $word) {
            if (str_contains($content, $word)) {
                $this->logger->warning("Post {$postId} flagged for containing: {$word}");
                // In a real app, we might set status to 'hidden' or 'pending_moderation'
                // $post->setStatus('flagged'); 
                // $this->em->flush();
                break;
            }
        }

        // 2. Simulate Indexing (e.g., Meilisearch)
        // MeilisearchService->index($post);
        $this->logger->info("Indexing Post {$postId} to search engine [SIMULATED]");

        // 3. Simulate Notification
        // Notifier->sendToFollowers($post->getAuthor(), ...);
        $this->logger->info("Dispatching push notifications to followers for Post {$postId} [SIMULATED]");
    }
}