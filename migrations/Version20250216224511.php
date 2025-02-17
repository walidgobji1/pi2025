<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250216224511 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE promotion ADD code_promo VARCHAR(255) NOT NULL, ADD description VARCHAR(255) NOT NULL, ADD remise DOUBLE PRECISION NOT NULL, ADD date_expiration DATETIME NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C11D7DD15C4683B7 ON promotion (code_promo)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_C11D7DD15C4683B7 ON promotion');
        $this->addSql('ALTER TABLE promotion DROP code_promo, DROP description, DROP remise, DROP date_expiration');
    }
}
