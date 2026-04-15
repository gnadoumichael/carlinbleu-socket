<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230813161508 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql('ALTER TABLE fichier ADD todo_fichiers_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fichier ADD CONSTRAINT FK_9B76551FD5BBBA1F FOREIGN KEY (todo_fichiers_id) REFERENCES todo (id)');
        $this->addSql('CREATE INDEX IDX_9B76551FD5BBBA1F ON fichier (todo_fichiers_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

        $this->addSql('ALTER TABLE fichier DROP FOREIGN KEY FK_9B76551FD5BBBA1F');
        $this->addSql('DROP INDEX IDX_9B76551FD5BBBA1F ON fichier');
        $this->addSql('ALTER TABLE fichier DROP todo_fichiers_id');

    }
}
