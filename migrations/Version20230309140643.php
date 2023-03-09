<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309140643 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bill (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, subscribe_id INT NOT NULL, date_bill DATE NOT NULL, INDEX IDX_7A2119E3A76ED395 (user_id), INDEX IDX_7A2119E3C72A4771 (subscribe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name_category VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE company (id INT AUTO_INCREMENT NOT NULL, name_company VARCHAR(255) NOT NULL, phone_company VARCHAR(255) NOT NULL, mail_company VARCHAR(255) NOT NULL, password_company VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE do_do (date_execution DATE NOT NULL, test_id INT NOT NULL, user_id INT NOT NULL, result_test DOUBLE PRECISION NOT NULL, INDEX IDX_72A97A221E5D0459 (test_id), INDEX IDX_72A97A22A76ED395 (user_id), PRIMARY KEY(date_execution, test_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subscribe (id INT AUTO_INCREMENT NOT NULL, type_subscribe VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, id_theme_id INT NOT NULL, id_company_id INT DEFAULT NULL, name_test VARCHAR(255) NOT NULL, INDEX IDX_D87F7E0C9D99812 (id_theme_id), INDEX IDX_D87F7E0C32119A01 (id_company_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE theme (id INT AUTO_INCREMENT NOT NULL, name_theme VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, company_id INT DEFAULT NULL, subscribe_id INT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, sex TINYINT(1) NOT NULL, payment_method INT NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D649979B1AD6 (company_id), INDEX IDX_8D93D649C72A4771 (subscribe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vocabulary (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, name_vocabulary VARCHAR(255) NOT NULL, translate_word VARCHAR(255) NOT NULL, INDEX IDX_9099C97B12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vocabulary_test (vocabulary_id INT NOT NULL, test_id INT NOT NULL, INDEX IDX_839E7720AD0E05F6 (vocabulary_id), INDEX IDX_839E77201E5D0459 (test_id), PRIMARY KEY(vocabulary_id, test_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bill ADD CONSTRAINT FK_7A2119E3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE bill ADD CONSTRAINT FK_7A2119E3C72A4771 FOREIGN KEY (subscribe_id) REFERENCES subscribe (id)');
        $this->addSql('ALTER TABLE do_do ADD CONSTRAINT FK_72A97A221E5D0459 FOREIGN KEY (test_id) REFERENCES test (id)');
        $this->addSql('ALTER TABLE do_do ADD CONSTRAINT FK_72A97A22A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT FK_D87F7E0C9D99812 FOREIGN KEY (id_theme_id) REFERENCES theme (id)');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT FK_D87F7E0C32119A01 FOREIGN KEY (id_company_id) REFERENCES company (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649979B1AD6 FOREIGN KEY (company_id) REFERENCES company (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649C72A4771 FOREIGN KEY (subscribe_id) REFERENCES subscribe (id)');
        $this->addSql('ALTER TABLE vocabulary ADD CONSTRAINT FK_9099C97B12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE vocabulary_test ADD CONSTRAINT FK_839E7720AD0E05F6 FOREIGN KEY (vocabulary_id) REFERENCES vocabulary (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vocabulary_test ADD CONSTRAINT FK_839E77201E5D0459 FOREIGN KEY (test_id) REFERENCES test (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bill DROP FOREIGN KEY FK_7A2119E3A76ED395');
        $this->addSql('ALTER TABLE bill DROP FOREIGN KEY FK_7A2119E3C72A4771');
        $this->addSql('ALTER TABLE do_do DROP FOREIGN KEY FK_72A97A221E5D0459');
        $this->addSql('ALTER TABLE do_do DROP FOREIGN KEY FK_72A97A22A76ED395');
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY FK_D87F7E0C9D99812');
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY FK_D87F7E0C32119A01');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649979B1AD6');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649C72A4771');
        $this->addSql('ALTER TABLE vocabulary DROP FOREIGN KEY FK_9099C97B12469DE2');
        $this->addSql('ALTER TABLE vocabulary_test DROP FOREIGN KEY FK_839E7720AD0E05F6');
        $this->addSql('ALTER TABLE vocabulary_test DROP FOREIGN KEY FK_839E77201E5D0459');
        $this->addSql('DROP TABLE bill');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE company');
        $this->addSql('DROP TABLE do_do');
        $this->addSql('DROP TABLE subscribe');
        $this->addSql('DROP TABLE test');
        $this->addSql('DROP TABLE theme');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE vocabulary');
        $this->addSql('DROP TABLE vocabulary_test');
    }
}
