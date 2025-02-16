<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250215214044 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie DROP date_creation');
        $this->addSql('ALTER TABLE inscription_cours ADD apprenant_id INT NOT NULL, ADD formation_id INT NOT NULL, ADD status VARCHAR(255) NOT NULL, ADD date_inscreption DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD montant DOUBLE PRECISION NOT NULL, ADD type_paiement VARCHAR(255) NOT NULL, ADD nom_apprenant VARCHAR(255) NOT NULL, ADD nom_formation VARCHAR(255) NOT NULL, ADD cin VARCHAR(8) NOT NULL, ADD email VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE inscription_cours ADD CONSTRAINT FK_AF83D8D1C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id)');
        $this->addSql('ALTER TABLE inscription_cours ADD CONSTRAINT FK_AF83D8D15200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AF83D8D1ABE530DA ON inscription_cours (cin)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AF83D8D1E7927C74 ON inscription_cours (email)');
        $this->addSql('CREATE INDEX IDX_AF83D8D1C5697D6D ON inscription_cours (apprenant_id)');
        $this->addSql('CREATE INDEX IDX_AF83D8D15200282E ON inscription_cours (formation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie ADD date_creation DATE NOT NULL');
        $this->addSql('ALTER TABLE inscription_cours DROP FOREIGN KEY FK_AF83D8D1C5697D6D');
        $this->addSql('ALTER TABLE inscription_cours DROP FOREIGN KEY FK_AF83D8D15200282E');
        $this->addSql('DROP INDEX UNIQ_AF83D8D1ABE530DA ON inscription_cours');
        $this->addSql('DROP INDEX UNIQ_AF83D8D1E7927C74 ON inscription_cours');
        $this->addSql('DROP INDEX IDX_AF83D8D1C5697D6D ON inscription_cours');
        $this->addSql('DROP INDEX IDX_AF83D8D15200282E ON inscription_cours');
        $this->addSql('ALTER TABLE inscription_cours DROP apprenant_id, DROP formation_id, DROP status, DROP date_inscreption, DROP montant, DROP type_paiement, DROP nom_apprenant, DROP nom_formation, DROP cin, DROP email');
    }
}
