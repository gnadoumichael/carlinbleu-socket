<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230607135338 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chat DROP FOREIGN KEY FK_659DF2AA5A9A237');
        $this->addSql('DROP INDEX UNIQ_659DF2AA5A9A237 ON chat');
        $this->addSql('ALTER TABLE chat CHANGE frome_id replye_chat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE chat ADD CONSTRAINT FK_659DF2AAA0BAC7E1 FOREIGN KEY (replye_chat_id) REFERENCES chat (id)');
        $this->addSql('CREATE INDEX IDX_659DF2AAA0BAC7E1 ON chat (replye_chat_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chat DROP FOREIGN KEY FK_659DF2AAA0BAC7E1');
        $this->addSql('DROP INDEX IDX_659DF2AAA0BAC7E1 ON chat');
        $this->addSql('ALTER TABLE chat CHANGE replye_chat_id frome_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE chat ADD CONSTRAINT FK_659DF2AA5A9A237 FOREIGN KEY (frome_id) REFERENCES chat (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_659DF2AA5A9A237 ON chat (frome_id)');
    }
}
