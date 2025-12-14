<?php

namespace App\Message;

class UserActionMessage
{
    public const ACTION_REGISTERED = 'REGISTERED';
    public const ACTION_PROFILE_UPDATED = 'PROFILE_UPDATED';

    public function __construct(
        private int $userId,
        private string $action
    ) {
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getAction(): string
    {
        return $this->action;
    }
}