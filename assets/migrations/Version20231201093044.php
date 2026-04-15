<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231201093044 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE compte (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, sigle VARCHAR(255) NOT NULL, sepadecimal VARCHAR(255) NOT NULL, nbrechiffre INT NOT NULL, sepamille VARCHAR(255) NOT NULL, compte_devis VARCHAR(255) NOT NULL, compte_bon_fournisseur VARCHAR(255) NOT NULL, compte_bon_prestataire VARCHAR(255) NOT NULL, compte_caisse VARCHAR(255) NOT NULL, compte_fournisseur VARCHAR(255) NOT NULL, compte_prestataire VARCHAR(255) NOT NULL, compte_article VARCHAR(255) NOT NULL, compte_decompte VARCHAR(255) NOT NULL, compte_livraison VARCHAR(255) NOT NULL, compte_reglement VARCHAR(255) NOT NULL, compte_materiel VARCHAR(255) NOT NULL, compte_fichier VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_CFF65260A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF65260A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF65260A76ED395');
        $this->addSql('DROP TABLE compte');
    }
}
