<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230515142559 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chat ADD fichier_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE chat ADD CONSTRAINT FK_659DF2AAF915CFE FOREIGN KEY (fichier_id) REFERENCES fichier (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_659DF2AAF915CFE ON chat (fichier_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chat DROP FOREIGN KEY FK_659DF2AAF915CFE');
        $this->addSql('DROP INDEX UNIQ_659DF2AAF915CFE ON chat');
        $this->addSql('ALTER TABLE chat DROP fichier_id');
    }
}
