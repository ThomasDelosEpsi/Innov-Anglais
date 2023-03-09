<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309100431 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE vocabulary_test (vocabulary_id INT NOT NULL, test_id INT NOT NULL, INDEX IDX_839E7720AD0E05F6 (vocabulary_id), INDEX IDX_839E77201E5D0459 (test_id), PRIMARY KEY(vocabulary_id, test_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vocabulary_test ADD CONSTRAINT FK_839E7720AD0E05F6 FOREIGN KEY (vocabulary_id) REFERENCES vocabulary (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vocabulary_test ADD CONSTRAINT FK_839E77201E5D0459 FOREIGN KEY (test_id) REFERENCES test (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE test ADD id_company_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT FK_D87F7E0C32119A01 FOREIGN KEY (id_company_id) REFERENCES company (id)');
        $this->addSql('CREATE INDEX IDX_D87F7E0C32119A01 ON test (id_company_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vocabulary_test DROP FOREIGN KEY FK_839E7720AD0E05F6');
        $this->addSql('ALTER TABLE vocabulary_test DROP FOREIGN KEY FK_839E77201E5D0459');
        $this->addSql('DROP TABLE vocabulary_test');
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY FK_D87F7E0C32119A01');
        $this->addSql('DROP INDEX IDX_D87F7E0C32119A01 ON test');
        $this->addSql('ALTER TABLE test DROP id_company_id');
    }
}
