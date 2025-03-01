<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250228225600 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE progression (id INT AUTO_INCREMENT NOT NULL, apprenant_id INT NOT NULL, formation_id INT DEFAULT NULL, INDEX IDX_D5B25073C5697D6D (apprenant_id), INDEX IDX_D5B250735200282E (formation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE progression_lecon (progression_id INT NOT NULL, lecon_id INT NOT NULL, INDEX IDX_974209DCAF229C18 (progression_id), INDEX IDX_974209DCEC1308A5 (lecon_id), PRIMARY KEY(progression_id, lecon_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE progression ADD CONSTRAINT FK_D5B25073C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenants (id)');
        $this->addSql('ALTER TABLE progression ADD CONSTRAINT FK_D5B250735200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
        $this->addSql('ALTER TABLE progression_lecon ADD CONSTRAINT FK_974209DCAF229C18 FOREIGN KEY (progression_id) REFERENCES progression (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE progression_lecon ADD CONSTRAINT FK_974209DCEC1308A5 FOREIGN KEY (lecon_id) REFERENCES lecon (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE progression DROP FOREIGN KEY FK_D5B25073C5697D6D');
        $this->addSql('ALTER TABLE progression DROP FOREIGN KEY FK_D5B250735200282E');
        $this->addSql('ALTER TABLE progression_lecon DROP FOREIGN KEY FK_974209DCAF229C18');
        $this->addSql('ALTER TABLE progression_lecon DROP FOREIGN KEY FK_974209DCEC1308A5');
        $this->addSql('DROP TABLE progression');
        $this->addSql('DROP TABLE progression_lecon');
    }
}
