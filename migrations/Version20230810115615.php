<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230810115615 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql('ALTER TABLE devis ADD garantie VARCHAR(255) DEFAULT NULL, ADD prorata VARCHAR(255) DEFAULT NULL, ADD finition VARCHAR(255) NOT NULL, CHANGE vtva vtva VARCHAR(255) NOT NULL, CHANGE vremise vremise VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE devis DROP garantie, DROP prorata, DROP finition, CHANGE vtva vtva VARCHAR(255) DEFAULT NULL, CHANGE vremise vremise VARCHAR(255) DEFAULT NULL');
    }
}
