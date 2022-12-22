<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221222092239 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE state (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE to_do_item ADD status_id INT DEFAULT NULL, DROP state');
        $this->addSql('ALTER TABLE to_do_item ADD CONSTRAINT FK_11B395EA6BF700BD FOREIGN KEY (status_id) REFERENCES state (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_11B395EA6BF700BD ON to_do_item (status_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE to_do_item DROP FOREIGN KEY FK_11B395EA6BF700BD');
        $this->addSql('DROP TABLE state');
        $this->addSql('DROP INDEX UNIQ_11B395EA6BF700BD ON to_do_item');
        $this->addSql('ALTER TABLE to_do_item ADD state LONGTEXT NOT NULL, DROP status_id');
    }
}
