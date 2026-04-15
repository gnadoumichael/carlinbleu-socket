<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241024104700 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql('ALTER TABLE exercices DROP FOREIGN KEY FK_1387EAE1AB014612');
        $this->addSql('ALTER TABLE exercices DROP FOREIGN KEY FK_1387EAE1691F92D8');
        $this->addSql('DROP INDEX IDX_1387EAE1691F92D8 ON exercices');
        $this->addSql('DROP INDEX IDX_1387EAE1AB014612 ON exercices');
        $this->addSql('ALTER TABLE exercices DROP chantiers_id, DROP clients_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE exercices ADD chantiers_id INT DEFAULT NULL, ADD clients_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE exercices ADD CONSTRAINT FK_1387EAE1AB014612 FOREIGN KEY (clients_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE exercices ADD CONSTRAINT FK_1387EAE1691F92D8 FOREIGN KEY (chantiers_id) REFERENCES chantier (id)');
        $this->addSql('CREATE INDEX IDX_1387EAE1691F92D8 ON exercices (chantiers_id)');
        $this->addSql('CREATE INDEX IDX_1387EAE1AB014612 ON exercices (clients_id)');
    }
}
