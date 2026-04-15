<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260102122119 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE beneficiaire ADD personnel_id INT DEFAULT NULL, ADD fournisseur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE beneficiaire ADD CONSTRAINT FK_B140D8021C109075 FOREIGN KEY (personnel_id) REFERENCES personnel (id)');
        $this->addSql('ALTER TABLE beneficiaire ADD CONSTRAINT FK_B140D802670C757F FOREIGN KEY (fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE beneficiaire ADD CONSTRAINT FK_B140D802A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_B140D8021C109075 ON beneficiaire (personnel_id)');
        $this->addSql('CREATE INDEX IDX_B140D802670C757F ON beneficiaire (fournisseur_id)');


    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs


        $this->addSql('ALTER TABLE beneficiaire DROP FOREIGN KEY FK_B140D8021C109075');
        $this->addSql('ALTER TABLE beneficiaire DROP FOREIGN KEY FK_B140D802670C757F');
        $this->addSql('ALTER TABLE beneficiaire DROP FOREIGN KEY FK_B140D802A76ED395');
        $this->addSql('DROP INDEX IDX_B140D8021C109075 ON beneficiaire');
        $this->addSql('DROP INDEX IDX_B140D802670C757F ON beneficiaire');
        $this->addSql('ALTER TABLE beneficiaire DROP personnel_id, DROP fournisseur_id');

    }
}
