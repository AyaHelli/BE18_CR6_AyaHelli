<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230414232433 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE test ADD capacity INT NOT NULL, ADD description LONGTEXT NOT NULL, ADD type VARCHAR(255) NOT NULL, ADD start_date DATETIME NOT NULL, ADD end_date DATETIME NOT NULL, ADD image VARCHAR(255) NOT NULL, ADD zip INT NOT NULL, ADD city VARCHAR(50) NOT NULL, ADD street_name VARCHAR(50) NOT NULL, ADD phone_number VARCHAR(20) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE test DROP capacity, DROP description, DROP type, DROP start_date, DROP end_date, DROP image, DROP zip, DROP city, DROP street_name, DROP phone_number');
    }
}
