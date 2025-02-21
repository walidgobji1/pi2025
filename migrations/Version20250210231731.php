<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250210231731 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE inscription_cours ADD apprenant_id INT DEFAULT NULL, ADD formation_id INT DEFAULT NULL, ADD status VARCHAR(255) NOT NULL, ADD date_inscreption DATETIME NOT NULL, ADD montant DOUBLE PRECISION NOT NULL, ADD type_paiement VARCHAR(255) NOT NULL, ADD nom_apprenant VARCHAR(255) NOT NULL, ADD nom_formation VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE inscription_cours ADD CONSTRAINT FK_AF83D8D1C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id)');
        $this->addSql('ALTER TABLE inscription_cours ADD CONSTRAINT FK_AF83D8D15200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
        $this->addSql('CREATE INDEX IDX_AF83D8D1C5697D6D ON inscription_cours (apprenant_id)');
        $this->addSql('CREATE INDEX IDX_AF83D8D15200282E ON inscription_cours (formation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE inscription_cours DROP FOREIGN KEY FK_AF83D8D1C5697D6D');
        $this->addSql('ALTER TABLE inscription_cours DROP FOREIGN KEY FK_AF83D8D15200282E');
        $this->addSql('DROP INDEX IDX_AF83D8D1C5697D6D ON inscription_cours');
        $this->addSql('DROP INDEX IDX_AF83D8D15200282E ON inscription_cours');
        $this->addSql('ALTER TABLE inscription_cours DROP apprenant_id, DROP formation_id, DROP status, DROP date_inscreption, DROP montant, DROP type_paiement, DROP nom_apprenant, DROP nom_formation');
    }
}
