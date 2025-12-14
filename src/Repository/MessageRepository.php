<?php

namespace App\Repository;

use App\Entity\Message;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Message>
 */
class MessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Message::class);
    }

    /**
     * Finds the latest message for each conversation the user is involved in.
     */
    public function findLatestConversations(\App\Entity\User $user): array
    {
        $conn = $this->getEntityManager()->getConnection();

        // Native SQL to find the latest message ID for each conversation partner
        $sql = '
            SELECT MAX(m.id) as id
            FROM message m
            WHERE m.sender_id = :userId OR m.recipient_id = :userId
            GROUP BY CASE
                WHEN m.sender_id = :userId THEN m.recipient_id
                ELSE m.sender_id
            END
            ORDER BY id DESC
        ';

        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery(['userId' => $user->getId()]);
        $ids = $resultSet->fetchAllAssociative();
        
        $messageIds = array_column($ids, 'id');

        if (empty($messageIds)) {
            return [];
        }

        return $this->createQueryBuilder('m')
            ->where('m.id IN (:ids)')
            ->setParameter('ids', $messageIds)
            ->orderBy('m.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Finds the conversation history between two users.
     */
    public function findMessagesBetween(\App\Entity\User $user1, \App\Entity\User $user2): array
    {
        return $this->createQueryBuilder('m')
            ->where('(m.sender = :user1 AND m.recipient = :user2)')
            ->orWhere('(m.sender = :user2 AND m.recipient = :user1)')
            ->setParameter('user1', $user1)
            ->setParameter('user2', $user2)
            ->orderBy('m.createdAt', 'ASC')
            ->getQuery()
            ->getResult();
    }
}