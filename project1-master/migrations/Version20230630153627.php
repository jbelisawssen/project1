<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230630153627 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE artiste (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, first_name VARCHAR(30) DEFAULT NULL, last_name VARCHAR(30) DEFAULT NULL, date_birth DATETIME NOT NULL)');
        $this->addSql('CREATE TABLE country (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(30) DEFAULT NULL, language VARCHAR(30) DEFAULT NULL)');
        $this->addSql('CREATE TABLE film (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, artist_id INTEGER DEFAULT NULL, country_id INTEGER DEFAULT NULL, title VARCHAR(30) DEFAULT NULL, date DATETIME NOT NULL, gendre VARCHAR(30) DEFAULT NULL, description VARCHAR(250) DEFAULT NULL, CONSTRAINT FK_8244BE22B7970CF8 FOREIGN KEY (artist_id) REFERENCES artiste (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_8244BE22F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_8244BE22B7970CF8 ON film (artist_id)');
        $this->addSql('CREATE INDEX IDX_8244BE22F92F3E70 ON film (country_id)');
        $this->addSql('CREATE TABLE film_user (film_id INTEGER NOT NULL, user_id INTEGER NOT NULL, PRIMARY KEY(film_id, user_id), CONSTRAINT FK_E83C3C4A567F5183 FOREIGN KEY (film_id) REFERENCES film (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_E83C3C4AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_E83C3C4A567F5183 ON film_user (film_id)');
        $this->addSql('CREATE INDEX IDX_E83C3C4AA76ED395 ON film_user (user_id)');
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, first_name VARCHAR(30) DEFAULT NULL, last_name VARCHAR(30) DEFAULT NULL, password VARCHAR(30) DEFAULT NULL, date_birth DATETIME NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE artiste');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE film');
        $this->addSql('DROP TABLE film_user');
        $this->addSql('DROP TABLE user');
    }
}
