<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240217122559 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE devis ADD rentabilite_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE devis ADD CONSTRAINT FK_8B27C52B3FADA1E6 FOREIGN KEY (rentabilite_id) REFERENCES devis (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8B27C52B3FADA1E6 ON devis (rentabilite_id)');

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52B3FADA1E6');
        $this->addSql('DROP INDEX UNIQ_8B27C52B3FADA1E6 ON devis');
        $this->addSql('ALTER TABLE devis DROP rentabilite_id');
    }
}
