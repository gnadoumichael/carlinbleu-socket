<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231013151126 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bon ADD fournisseur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bon ADD CONSTRAINT FK_FC7DFD6B670C757F FOREIGN KEY (fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('CREATE INDEX IDX_FC7DFD6B670C757F ON bon (fournisseur_id)');

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bon DROP FOREIGN KEY FK_FC7DFD6B670C757F');
        $this->addSql('DROP INDEX IDX_FC7DFD6B670C757F ON bon');
        $this->addSql('ALTER TABLE bon DROP fournisseur_id');

    }
}
