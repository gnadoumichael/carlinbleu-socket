<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240608105121 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bon ADD preparation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bon ADD CONSTRAINT FK_FC7DFD6B3DD9B8BA FOREIGN KEY (preparation_id) REFERENCES bon (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

        $this->addSql('ALTER TABLE bon DROP FOREIGN KEY FK_FC7DFD6B3DD9B8BA');
        $this->addSql('DROP INDEX IDX_FC7DFD6B3DD9B8BA ON bon');
        $this->addSql('ALTER TABLE bon DROP preparation_id');
    }
}
