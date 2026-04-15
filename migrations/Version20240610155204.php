<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240610155204 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fiche (id INT AUTO_INCREMENT NOT NULL, chantier_id INT DEFAULT NULL, journalier_id INT DEFAULT NULL, date DATETIME NOT NULL, heure VARCHAR(255) DEFAULT NULL, prix VARCHAR(255) DEFAULT NULL, avance VARCHAR(255) DEFAULT NULL, INDEX IDX_4C13CC78D0C0049D (chantier_id), INDEX IDX_4C13CC78FE3EAC8F (journalier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE journalier (id INT AUTO_INCREMENT NOT NULL, noms VARCHAR(255) NOT NULL, fonction VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fiche ADD CONSTRAINT FK_4C13CC78D0C0049D FOREIGN KEY (chantier_id) REFERENCES chantier (id)');
        $this->addSql('ALTER TABLE fiche ADD CONSTRAINT FK_4C13CC78FE3EAC8F FOREIGN KEY (journalier_id) REFERENCES journalier (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fiche DROP FOREIGN KEY FK_4C13CC78D0C0049D');
        $this->addSql('ALTER TABLE fiche DROP FOREIGN KEY FK_4C13CC78FE3EAC8F');
        $this->addSql('DROP TABLE fiche');
        $this->addSql('DROP TABLE journalier');
    }
}
