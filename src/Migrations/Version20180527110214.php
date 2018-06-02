<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180527110214 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE personal_data (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, name VARCHAR(40) NOT NULL, surname VARCHAR(50) NOT NULL, birthday_date DATE NOT NULL, pesel INT NOT NULL, accept_rodo TINYINT(1) NOT NULL, role VARCHAR(50) NOT NULL, UNIQUE INDEX UNIQ_9CF9F45E9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(50) NOT NULL, password VARCHAR(70) NOT NULL, email VARCHAR(50) DEFAULT NULL, code INT DEFAULT NULL, created_at DATETIME NOT NULL, role VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE private_message (id INT AUTO_INCREMENT NOT NULL, from_user_id INT NOT NULL, to_user_id INT NOT NULL, topic VARCHAR(255) NOT NULL, message_content VARCHAR(9999) NOT NULL, created_at DATETIME NOT NULL, is_viewed TINYINT(1) NOT NULL, viewed_at DATETIME DEFAULT NULL, INDEX IDX_4744FC9B2130303A (from_user_id), INDEX IDX_4744FC9B29F6EE60 (to_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE personal_data ADD CONSTRAINT FK_9CF9F45E9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE private_message ADD CONSTRAINT FK_4744FC9B2130303A FOREIGN KEY (from_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE private_message ADD CONSTRAINT FK_4744FC9B29F6EE60 FOREIGN KEY (to_user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE personal_data DROP FOREIGN KEY FK_9CF9F45E9D86650F');
        $this->addSql('ALTER TABLE private_message DROP FOREIGN KEY FK_4744FC9B2130303A');
        $this->addSql('ALTER TABLE private_message DROP FOREIGN KEY FK_4744FC9B29F6EE60');
        $this->addSql('DROP TABLE personal_data');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE private_message');
    }
}
