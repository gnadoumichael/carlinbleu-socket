<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231013160851 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE caisse ADD bon_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE caisse ADD CONSTRAINT FK_B2A353C8AD65737C FOREIGN KEY (bon_id) REFERENCES bon (id)');
        $this->addSql('CREATE INDEX IDX_B2A353C8AD65737C ON caisse (bon_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE caisse DROP FOREIGN KEY FK_B2A353C8AD65737C');
        $this->addSql('DROP INDEX IDX_B2A353C8AD65737C ON caisse');
        $this->addSql('ALTER TABLE caisse DROP bon_id');
    }
}
