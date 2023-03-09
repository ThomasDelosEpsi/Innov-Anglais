<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309103142 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bill ADD user_id INT NOT NULL, ADD subscribe_id INT NOT NULL');
        $this->addSql('ALTER TABLE bill ADD CONSTRAINT FK_7A2119E3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE bill ADD CONSTRAINT FK_7A2119E3C72A4771 FOREIGN KEY (subscribe_id) REFERENCES subscribe (id)');
        $this->addSql('CREATE INDEX IDX_7A2119E3A76ED395 ON bill (user_id)');
        $this->addSql('CREATE INDEX IDX_7A2119E3C72A4771 ON bill (subscribe_id)');
        $this->addSql('ALTER TABLE user ADD company_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649979B1AD6 FOREIGN KEY (company_id) REFERENCES company (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649979B1AD6 ON user (company_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bill DROP FOREIGN KEY FK_7A2119E3A76ED395');
        $this->addSql('ALTER TABLE bill DROP FOREIGN KEY FK_7A2119E3C72A4771');
        $this->addSql('DROP INDEX IDX_7A2119E3A76ED395 ON bill');
        $this->addSql('DROP INDEX IDX_7A2119E3C72A4771 ON bill');
        $this->addSql('ALTER TABLE bill DROP user_id, DROP subscribe_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649979B1AD6');
        $this->addSql('DROP INDEX IDX_8D93D649979B1AD6 ON user');
        $this->addSql('ALTER TABLE user DROP company_id');
    }
}
