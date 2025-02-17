<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217015921 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_C11D7DD15C4683B7 ON promotion');
        $this->addSql('ALTER TABLE promotion ADD inscription_cours_id INT NOT NULL');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD1D75A0715 FOREIGN KEY (inscription_cours_id) REFERENCES inscription_cours (id)');
        $this->addSql('CREATE INDEX IDX_C11D7DD1D75A0715 ON promotion (inscription_cours_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD1D75A0715');
        $this->addSql('DROP INDEX IDX_C11D7DD1D75A0715 ON promotion');
        $this->addSql('ALTER TABLE promotion DROP inscription_cours_id');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C11D7DD15C4683B7 ON promotion (code_promo)');
    }
}
