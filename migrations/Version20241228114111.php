<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241228114111 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE besoins ADD chantier_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE besoins ADD CONSTRAINT FK_713FF711D0C0049D FOREIGN KEY (chantier_id) REFERENCES chantier (id)');
        $this->addSql('CREATE INDEX IDX_713FF711D0C0049D ON besoins (chantier_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE besoins DROP FOREIGN KEY FK_713FF711D0C0049D');
        $this->addSql('DROP INDEX IDX_713FF711D0C0049D ON besoins');
        $this->addSql('ALTER TABLE besoins DROP chantier_id');
    }
}
