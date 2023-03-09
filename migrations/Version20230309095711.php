<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309095711 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE company (id INT AUTO_INCREMENT NOT NULL, name_company VARCHAR(255) NOT NULL, phone_company VARCHAR(255) NOT NULL, mail_company VARCHAR(255) NOT NULL, password_company VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, id_theme_id INT NOT NULL, name_test VARCHAR(255) NOT NULL, company VARCHAR(255) NOT NULL, INDEX IDX_D87F7E0C9D99812 (id_theme_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE theme (id INT AUTO_INCREMENT NOT NULL, name_theme VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT FK_D87F7E0C9D99812 FOREIGN KEY (id_theme_id) REFERENCES theme (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY FK_D87F7E0C9D99812');
        $this->addSql('DROP TABLE company');
        $this->addSql('DROP TABLE test');
        $this->addSql('DROP TABLE theme');
    }
}
