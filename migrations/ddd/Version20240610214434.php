<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240610214434 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fiche ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fiche ADD CONSTRAINT FK_4C13CC78D0C0049D FOREIGN KEY (chantier_id) REFERENCES chantier (id)');
        $this->addSql('ALTER TABLE fiche ADD CONSTRAINT FK_4C13CC78FE3EAC8F FOREIGN KEY (journalier_id) REFERENCES journalier (id)');
        $this->addSql('ALTER TABLE fiche ADD CONSTRAINT FK_4C13CC78A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_4C13CC78A76ED395 ON fiche (user_id)');
        $this->addSql('ALTER TABLE journalier ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE journalier ADD CONSTRAINT FK_3F09EB7DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_3F09EB7DA76ED395 ON journalier (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fiche DROP FOREIGN KEY FK_4C13CC78D0C0049D');
        $this->addSql('ALTER TABLE fiche DROP FOREIGN KEY FK_4C13CC78FE3EAC8F');
        $this->addSql('ALTER TABLE fiche DROP FOREIGN KEY FK_4C13CC78A76ED395');
        $this->addSql('DROP INDEX IDX_4C13CC78A76ED395 ON fiche');
        $this->addSql('ALTER TABLE fiche DROP user_id');
        $this->addSql('ALTER TABLE journalier DROP FOREIGN KEY FK_3F09EB7DA76ED395');
        $this->addSql('DROP INDEX IDX_3F09EB7DA76ED395 ON journalier');
        $this->addSql('ALTER TABLE journalier DROP user_id');
    }
}
