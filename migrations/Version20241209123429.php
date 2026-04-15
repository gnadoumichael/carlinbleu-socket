<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241209123429 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE besoins (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, dobyuser_id INT DEFAULT NULL, besoin LONGTEXT NOT NULL, etat VARCHAR(255) NOT NULL, INDEX IDX_713FF711A76ED395 (user_id), INDEX IDX_713FF71150EE24D9 (dobyuser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE besoins ADD CONSTRAINT FK_713FF711A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE besoins ADD CONSTRAINT FK_713FF71150EE24D9 FOREIGN KEY (dobyuser_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE besoins DROP FOREIGN KEY FK_713FF711A76ED395');
        $this->addSql('ALTER TABLE besoins DROP FOREIGN KEY FK_713FF71150EE24D9');
        $this->addSql('DROP TABLE besoins');
    }
}
