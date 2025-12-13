<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Add Stripe payment support to Transaction entity
 */
final class Version20251213000000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add stripe_session_id column and update status default value for Transaction table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE transaction ADD COLUMN stripe_session_id VARCHAR(255) DEFAULT NULL AFTER status');
        $this->addSql('ALTER TABLE transaction MODIFY status VARCHAR(20) NOT NULL DEFAULT "pending_payment"');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE transaction DROP COLUMN stripe_session_id');
        $this->addSql('ALTER TABLE transaction MODIFY status VARCHAR(20) NOT NULL DEFAULT "paid"');
    }
}
