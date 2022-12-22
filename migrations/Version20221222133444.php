<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221222133444 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE to_do_item ADD state_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE to_do_item ADD CONSTRAINT FK_11B395EA5D83CC1 FOREIGN KEY (state_id) REFERENCES state (id)');
        $this->addSql('CREATE INDEX IDX_11B395EA5D83CC1 ON to_do_item (state_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE to_do_item DROP FOREIGN KEY FK_11B395EA5D83CC1');
        $this->addSql('DROP INDEX IDX_11B395EA5D83CC1 ON to_do_item');
        $this->addSql('ALTER TABLE to_do_item DROP state_id');
    }
}
