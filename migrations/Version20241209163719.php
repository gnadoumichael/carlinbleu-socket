<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241209163719 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE droit (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, pour_id INT DEFAULT NULL, afaire VARCHAR(255) NOT NULL, actions VARCHAR(255) NOT NULL, INDEX IDX_CB7AA751A76ED395 (user_id), INDEX IDX_CB7AA751E1A2A950 (pour_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE droit ADD CONSTRAINT FK_CB7AA751A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE droit ADD CONSTRAINT FK_CB7AA751E1A2A950 FOREIGN KEY (pour_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE droit DROP FOREIGN KEY FK_CB7AA751A76ED395');
        $this->addSql('ALTER TABLE droit DROP FOREIGN KEY FK_CB7AA751E1A2A950');
        $this->addSql('DROP TABLE droit');
    }
}
