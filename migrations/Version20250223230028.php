<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250223230028 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE apprenants DROP image');
        $this->addSql('ALTER TABLE instructeurs DROP image');
        $this->addSql('ALTER TABLE users ADD image VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE apprenants ADD image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE instructeurs ADD image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE users DROP image');
    }
}
