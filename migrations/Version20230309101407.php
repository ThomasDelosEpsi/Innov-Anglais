<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309101407 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX `primary` ON date_execution');
        $this->addSql('ALTER TABLE date_execution ADD date_excution DATE NOT NULL, DROP id');
        $this->addSql('ALTER TABLE date_execution ADD PRIMARY KEY (date_excution)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX `PRIMARY` ON date_execution');
        $this->addSql('ALTER TABLE date_execution ADD id VARCHAR(255) NOT NULL, DROP date_excution');
        $this->addSql('ALTER TABLE date_execution ADD PRIMARY KEY (id)');
    }
}
