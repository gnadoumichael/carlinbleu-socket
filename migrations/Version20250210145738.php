<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250210145738 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chat_besoin (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, sender_id INT DEFAULT NULL, besoin_id INT DEFAULT NULL, message LONGTEXT NOT NULL, date DATETIME NOT NULL, INDEX IDX_E6C4DF30A76ED395 (user_id), INDEX IDX_E6C4DF30F624B39D (sender_id), INDEX IDX_E6C4DF30FE6EED44 (besoin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE chat_besoin ADD CONSTRAINT FK_E6C4DF30A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE chat_besoin ADD CONSTRAINT FK_E6C4DF30F624B39D FOREIGN KEY (sender_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE chat_besoin ADD CONSTRAINT FK_E6C4DF30FE6EED44 FOREIGN KEY (besoin_id) REFERENCES besoins (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chat_besoin DROP FOREIGN KEY FK_E6C4DF30A76ED395');
        $this->addSql('ALTER TABLE chat_besoin DROP FOREIGN KEY FK_E6C4DF30F624B39D');
        $this->addSql('ALTER TABLE chat_besoin DROP FOREIGN KEY FK_E6C4DF30FE6EED44');
        $this->addSql('DROP TABLE chat_besoin');
    }
}
