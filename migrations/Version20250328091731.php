<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250328091731 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql('ALTER TABLE fichier ADD besoins_id INT DEFAULT NULL, CHANGE folde folde VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE fichier ADD CONSTRAINT FK_9B76551F963E5641 FOREIGN KEY (besoins_id) REFERENCES besoins (id)');
        $this->addSql('CREATE INDEX IDX_9B76551F963E5641 ON fichier (besoins_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fichier DROP FOREIGN KEY FK_9B76551F963E5641');
        $this->addSql('DROP INDEX IDX_9B76551F963E5641 ON fichier');
        $this->addSql('ALTER TABLE fichier DROP besoins_id, CHANGE folde folde VARCHAR(255) NOT NULL');
    }
}
