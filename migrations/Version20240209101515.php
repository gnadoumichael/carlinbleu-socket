<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240209101515 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql('ALTER TABLE chantier ADD contrat VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE facture ADD aarem VARCHAR(50) DEFAULT NULL, ADD aaref VARCHAR(50) DEFAULT NULL, ADD zone VARCHAR(50) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

        $this->addSql('ALTER TABLE chantier DROP contrat');
        $this->addSql('ALTER TABLE facture DROP aarem, DROP aaref, DROP zone');
    }
}
