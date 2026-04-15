<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230221225408 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE sousfamille ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sousfamille ADD CONSTRAINT FK_D5FE767A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_D5FE767A76ED395 ON sousfamille (user_id)');

    }

    public function down(Schema $schema): void
    {

        $this->addSql('ALTER TABLE sousfamille DROP FOREIGN KEY FK_D5FE767A76ED395');
        $this->addSql('DROP INDEX IDX_D5FE767A76ED395 ON sousfamille');
        $this->addSql('ALTER TABLE sousfamille DROP user_id');

    }
}
