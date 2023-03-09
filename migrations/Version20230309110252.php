<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309110252 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE do_do ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE do_do ADD CONSTRAINT FK_72A97A22A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_72A97A22A76ED395 ON do_do (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE do_do DROP FOREIGN KEY FK_72A97A22A76ED395');
        $this->addSql('DROP INDEX IDX_72A97A22A76ED395 ON do_do');
        $this->addSql('ALTER TABLE do_do DROP user_id');
    }
}
