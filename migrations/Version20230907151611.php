<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230907151611 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE forme CHANGE tete_h tete_h DOUBLE PRECISION NOT NULL,
    CHANGE tete_y tete_y DOUBLE PRECISION NOT NULL,
    CHANGE tete_dh tete_dh DOUBLE PRECISION NOT NULL,
    CHANGE tete_dg tete_dg DOUBLE PRECISION NOT NULL,
    CHANGE tete_dd tete_dd DOUBLE PRECISION NOT NULL,
    CHANGE tete_db tete_db DOUBLE PRECISION NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE forme CHANGE tete_h tete_h INT DEFAULT NULL, CHANGE tete_y tete_y INT DEFAULT NULL, CHANGE tete_dh tete_dh INT DEFAULT NULL, CHANGE tete_dg tete_dg INT DEFAULT NULL, CHANGE tete_dd tete_dd INT DEFAULT NULL, CHANGE tete_db tete_db INT DEFAULT NULL');
    }
}
