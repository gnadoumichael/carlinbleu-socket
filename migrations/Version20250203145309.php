<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250203145309 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE valider ADD caisse_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE valider ADD CONSTRAINT FK_22CF285B27B4FEBF FOREIGN KEY (caisse_id) REFERENCES caisse (id)');
        $this->addSql('CREATE INDEX IDX_22CF285B27B4FEBF ON valider (caisse_id)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE valider DROP FOREIGN KEY FK_22CF285B27B4FEBF');
        $this->addSql('DROP INDEX IDX_22CF285B27B4FEBF ON valider');
        $this->addSql('ALTER TABLE valider DROP caisse_id');
    }
}
