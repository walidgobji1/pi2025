<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250223163226 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_AF83D8D1E7927C74 ON inscription_cours');
        $this->addSql('DROP INDEX UNIQ_AF83D8D1ABE530DA ON inscription_cours');
        $this->addSql('ALTER TABLE promotion CHANGE inscription_cours_id inscription_cours_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AF83D8D1E7927C74 ON inscription_cours (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AF83D8D1ABE530DA ON inscription_cours (cin)');
        $this->addSql('ALTER TABLE promotion CHANGE inscription_cours_id inscription_cours_id INT NOT NULL');
    }
}
