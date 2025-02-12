<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250211182058 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE inscription_cours ADD cin VARCHAR(8) NOT NULL, ADD email VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AF83D8D1ABE530DA ON inscription_cours (cin)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AF83D8D1E7927C74 ON inscription_cours (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_AF83D8D1ABE530DA ON inscription_cours');
        $this->addSql('DROP INDEX UNIQ_AF83D8D1E7927C74 ON inscription_cours');
        $this->addSql('ALTER TABLE inscription_cours DROP cin, DROP email');
    }
}
