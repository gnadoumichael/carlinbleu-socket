<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231214084357 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD composer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6679540F56 FOREIGN KEY (composer_id) REFERENCES bon (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_23A0E6679540F56 ON article (composer_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6679540F56');
        $this->addSql('DROP INDEX UNIQ_23A0E6679540F56 ON article');
        $this->addSql('ALTER TABLE article DROP composer_id');

    }
}
