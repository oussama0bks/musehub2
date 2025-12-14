<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251213235914 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add new entities (ArtworkLike, Catalogue, Message) and update existing tables';
    }

    public function up(Schema $schema): void
    {
        // Create new tables
        $this->addSql('CREATE TABLE artwork_like (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, artwork_id INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_2267CDFDA76ED395 (user_id), INDEX IDX_2267CDFDDB8FFA4 (artwork_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE catalogue (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_59A699F5A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, sender_id INT DEFAULT NULL, recipient_id INT DEFAULT NULL, content LONGTEXT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', is_read TINYINT(1) NOT NULL, deleted_by_sender TINYINT(1) NOT NULL, deleted_by_recipient TINYINT(1) NOT NULL, INDEX IDX_B6BD307FF624B39D (sender_id), INDEX IDX_B6BD307FE92F8F78 (recipient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        
        // Add foreign keys for new tables
        $this->addSql('ALTER TABLE artwork_like ADD CONSTRAINT FK_2267CDFDA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE artwork_like ADD CONSTRAINT FK_2267CDFDDB8FFA4 FOREIGN KEY (artwork_id) REFERENCES artwork (id)');
        $this->addSql('ALTER TABLE catalogue ADD CONSTRAINT FK_59A699F5A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FF624B39D FOREIGN KEY (sender_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FE92F8F78 FOREIGN KEY (recipient_id) REFERENCES user (id)');
        
        // Update existing tables
        $this->addSql('ALTER TABLE artwork CHANGE image_url image_url VARCHAR(255) DEFAULT NULL, CHANGE price price NUMERIC(10, 2) DEFAULT NULL');
        $this->addSql('ALTER TABLE category CHANGE description description LONGTEXT DEFAULT NULL');
        $this->addSql('DROP INDEX IDX_COMMENTER_UUID ON comment');
        $this->addSql('ALTER TABLE comment CHANGE commenter_uuid commenter_uuid VARCHAR(255) NOT NULL, CHANGE content content LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE community CHANGE category category VARCHAR(255) DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE image_url image_url VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY fk_event_event_type');
        $this->addSql('ALTER TABLE event CHANGE description description LONGTEXT DEFAULT NULL, CHANGE date_time date_time DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE is_active is_active TINYINT(1) NOT NULL, CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE latitude latitude DOUBLE PRECISION DEFAULT NULL, CHANGE longitude longitude DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7401B253C FOREIGN KEY (event_type_id) REFERENCES event_type (id)');
        $this->addSql('ALTER TABLE event_type DROP icon, DROP color');
        $this->addSql('ALTER TABLE event_type CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE capacity_type capacity_type VARCHAR(20) NOT NULL, CHANGE requires_payment requires_payment TINYINT(1) NOT NULL, CHANGE certificate_enabled certificate_enabled TINYINT(1) NOT NULL, CHANGE recording_enabled recording_enabled TINYINT(1) NOT NULL, CHANGE allowed_location allowed_location VARCHAR(20) NOT NULL, CHANGE visibility visibility VARCHAR(20) NOT NULL, CHANGE is_active is_active TINYINT(1) NOT NULL, CHANGE sort_order sort_order INT NOT NULL');
        $this->addSql('ALTER TABLE listing CHANGE stock stock INT NOT NULL, CHANGE status status VARCHAR(20) NOT NULL, CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('DROP INDEX IDX_EVENT_UUID ON participant');
        $this->addSql('DROP INDEX IDX_PARTICIPANT_UUID ON participant');
        $this->addSql('ALTER TABLE participant CHANGE status status VARCHAR(20) NOT NULL, CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('DROP INDEX IDX_AUTHOR_UUID ON post');
        $this->addSql('ALTER TABLE post CHANGE author_uuid author_uuid VARCHAR(255) NOT NULL, CHANGE content content LONGTEXT NOT NULL, CHANGE image_url image_url VARCHAR(255) DEFAULT NULL, CHANGE likes_count likes_count INT NOT NULL, CHANGE dislikes_count dislikes_count INT NOT NULL, CHANGE moderation_status moderation_status VARCHAR(255) DEFAULT NULL, CHANGE moderation_details moderation_details JSON DEFAULT NULL');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D12469DE2 FOREIGN KEY (category_id) REFERENCES post_category (id)');
        $this->addSql('CREATE INDEX IDX_5A8A6C8D12469DE2 ON post (category_id)');
        $this->addSql('ALTER TABLE post_category CHANGE icon icon VARCHAR(50) DEFAULT NULL, CHANGE color color VARCHAR(20) DEFAULT NULL');
        $this->addSql('DROP INDEX IDX_BUYER_UUID ON transaction');
        $this->addSql('DROP INDEX IDX_LISTING_UUID ON transaction');
        $this->addSql('ALTER TABLE transaction ADD stripe_session_id VARCHAR(255) DEFAULT NULL, CHANGE date date DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE status status VARCHAR(20) NOT NULL, CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE user ADD first_name VARCHAR(100) DEFAULT NULL, ADD last_name VARCHAR(100) DEFAULT NULL, ADD deleted_at DATETIME DEFAULT NULL, DROP reputation, CHANGE username username VARCHAR(255) DEFAULT NULL, CHANGE roles roles JSON NOT NULL, CHANGE bio bio LONGTEXT DEFAULT NULL, CHANGE avatar_url avatar_url VARCHAR(255) DEFAULT NULL, CHANGE is_active is_active TINYINT(1) NOT NULL, CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE password_reset_token password_reset_token VARCHAR(64) DEFAULT NULL, CHANGE password_reset_requested_at password_reset_requested_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
