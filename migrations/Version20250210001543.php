<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250210001543 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lecon DROP FOREIGN KEY FK_94E6242E5D34AC32');
        $this->addSql('DROP INDEX IDX_94E6242E5D34AC32 ON lecon');
        $this->addSql('ALTER TABLE lecon CHANGE lecon_formation_id formation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE lecon ADD CONSTRAINT FK_94E6242E5200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
        $this->addSql('CREATE INDEX IDX_94E6242E5200282E ON lecon (formation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lecon DROP FOREIGN KEY FK_94E6242E5200282E');
        $this->addSql('DROP INDEX IDX_94E6242E5200282E ON lecon');
        $this->addSql('ALTER TABLE lecon CHANGE formation_id lecon_formation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE lecon ADD CONSTRAINT FK_94E6242E5D34AC32 FOREIGN KEY (lecon_formation_id) REFERENCES formation (id)');
        $this->addSql('CREATE INDEX IDX_94E6242E5D34AC32 ON lecon (lecon_formation_id)');
    }
}
