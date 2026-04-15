<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241024104925 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE exercices_chantier (exercices_id INT NOT NULL, chantier_id INT NOT NULL, INDEX IDX_BA016ADE192C7251 (exercices_id), INDEX IDX_BA016ADED0C0049D (chantier_id), PRIMARY KEY(exercices_id, chantier_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE exercices_client (exercices_id INT NOT NULL, client_id INT NOT NULL, INDEX IDX_6D15E262192C7251 (exercices_id), INDEX IDX_6D15E26219EB6921 (client_id), PRIMARY KEY(exercices_id, client_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE exercices_chantier ADD CONSTRAINT FK_BA016ADE192C7251 FOREIGN KEY (exercices_id) REFERENCES exercices (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE exercices_chantier ADD CONSTRAINT FK_BA016ADED0C0049D FOREIGN KEY (chantier_id) REFERENCES chantier (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE exercices_client ADD CONSTRAINT FK_6D15E262192C7251 FOREIGN KEY (exercices_id) REFERENCES exercices (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE exercices_client ADD CONSTRAINT FK_6D15E26219EB6921 FOREIGN KEY (client_id) REFERENCES client (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE exercices_chantier DROP FOREIGN KEY FK_BA016ADE192C7251');
        $this->addSql('ALTER TABLE exercices_chantier DROP FOREIGN KEY FK_BA016ADED0C0049D');
        $this->addSql('ALTER TABLE exercices_client DROP FOREIGN KEY FK_6D15E262192C7251');
        $this->addSql('ALTER TABLE exercices_client DROP FOREIGN KEY FK_6D15E26219EB6921');
        $this->addSql('DROP TABLE exercices_chantier');
        $this->addSql('DROP TABLE exercices_client');
    }
}
