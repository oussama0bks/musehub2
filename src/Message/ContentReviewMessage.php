<?php

namespace App\Message;

class ContentReviewMessage
{
    public function __construct(
        private int $postId
    ) {
    }

    public function getPostId(): int
    {
        return $this->postId;
    }
}