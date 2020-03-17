<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200317170755 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE cours ADD type_id INT NOT NULL, DROP type');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CC54C8C93 FOREIGN KEY (type_id) REFERENCES type_cours (id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9CC54C8C93 ON cours (type_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CC54C8C93');
        $this->addSql('DROP INDEX IDX_FDCA8C9CC54C8C93 ON cours');
        $this->addSql('ALTER TABLE cours ADD type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP type_id');
    }
}
