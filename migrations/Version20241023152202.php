<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241023152202 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE exercices (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, chantiers_id INT DEFAULT NULL, clients_id INT DEFAULT NULL, exercice VARCHAR(255) NOT NULL, INDEX IDX_1387EAE1A76ED395 (user_id), INDEX IDX_1387EAE1691F92D8 (chantiers_id), INDEX IDX_1387EAE1AB014612 (clients_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE exercices ADD CONSTRAINT FK_1387EAE1A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE exercices ADD CONSTRAINT FK_1387EAE1691F92D8 FOREIGN KEY (chantiers_id) REFERENCES chantier (id)');
        $this->addSql('ALTER TABLE exercices ADD CONSTRAINT FK_1387EAE1AB014612 FOREIGN KEY (clients_id) REFERENCES client (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE exercices DROP FOREIGN KEY FK_1387EAE1A76ED395');
        $this->addSql('ALTER TABLE exercices DROP FOREIGN KEY FK_1387EAE1691F92D8');
        $this->addSql('ALTER TABLE exercices DROP FOREIGN KEY FK_1387EAE1AB014612');
        $this->addSql('DROP TABLE exercices');
    }
}
