<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250305082814 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE devis ADD suivie_id INT DEFAULT NULL, CHANGE acomrage acomrage DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE devis ADD CONSTRAINT FK_8B27C52B9189D8F FOREIGN KEY (suivie_id) REFERENCES personnel (id)');
        $this->addSql('CREATE INDEX IDX_8B27C52B9189D8F ON devis (suivie_id)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52B9189D8F');
        $this->addSql('DROP INDEX IDX_8B27C52B9189D8F ON devis');
    }
}
