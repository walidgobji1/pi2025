<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250221022944 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE apprenants (id INT NOT NULL, nom_apprenant VARCHAR(100) NOT NULL, prenom_apprenant VARCHAR(100) NOT NULL, email_apprenant VARCHAR(255) NOT NULL, niveau_etude INT DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_C71C2982CBE0D905 (email_apprenant), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE instructeurs (id INT NOT NULL, nom_instructeur VARCHAR(100) NOT NULL, prenom_instructeur VARCHAR(100) NOT NULL, email_instructeur VARCHAR(255) NOT NULL, cv VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_246D4568C04CC211 (email_instructeur), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE apprenants ADD CONSTRAINT FK_C71C2982BF396750 FOREIGN KEY (id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE instructeurs ADD CONSTRAINT FK_246D4568BF396750 FOREIGN KEY (id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0C5697D6D');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF025FCA809');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenants (id)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF025FCA809 FOREIGN KEY (instructeur_id) REFERENCES instructeurs (id)');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A5758C4FC193');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A5758C4FC193 FOREIGN KEY (instructor_id) REFERENCES instructeurs (id)');
        $this->addSql('ALTER TABLE inscription_cours DROP FOREIGN KEY FK_AF83D8D1C5697D6D');
        $this->addSql('ALTER TABLE inscription_cours ADD CONSTRAINT FK_AF83D8D1C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenants (id)');
        $this->addSql('DROP INDEX UNIQ_1483A5E9CBE0D905 ON users');
        $this->addSql('DROP INDEX UNIQ_1483A5E9C04CC211 ON users');
        $this->addSql('ALTER TABLE users DROP nom_instructeur, DROP prenom_instructeur, DROP email_instructeur, DROP cv, DROP image, DROP niveau, DROP specialisation, DROP annees_experience, DROP score_evaluation, DROP score_avis, DROP status, DROP nom_apprenant, DROP prenom_apprenant, DROP email_apprenant, DROP niveau_etude');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0C5697D6D');
        $this->addSql('ALTER TABLE inscription_cours DROP FOREIGN KEY FK_AF83D8D1C5697D6D');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF025FCA809');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A5758C4FC193');
        $this->addSql('ALTER TABLE apprenants DROP FOREIGN KEY FK_C71C2982BF396750');
        $this->addSql('ALTER TABLE instructeurs DROP FOREIGN KEY FK_246D4568BF396750');
        $this->addSql('DROP TABLE apprenants');
        $this->addSql('DROP TABLE instructeurs');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF025FCA809');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0C5697D6D');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF025FCA809 FOREIGN KEY (instructeur_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0C5697D6D FOREIGN KEY (apprenant_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A5758C4FC193');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A5758C4FC193 FOREIGN KEY (instructor_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE inscription_cours DROP FOREIGN KEY FK_AF83D8D1C5697D6D');
        $this->addSql('ALTER TABLE inscription_cours ADD CONSTRAINT FK_AF83D8D1C5697D6D FOREIGN KEY (apprenant_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE users ADD nom_instructeur VARCHAR(100) DEFAULT NULL, ADD prenom_instructeur VARCHAR(100) DEFAULT NULL, ADD email_instructeur VARCHAR(255) DEFAULT NULL, ADD cv VARCHAR(255) DEFAULT NULL, ADD image VARCHAR(255) DEFAULT NULL, ADD niveau VARCHAR(255) DEFAULT NULL, ADD specialisation VARCHAR(255) DEFAULT NULL, ADD annees_experience INT DEFAULT NULL, ADD score_evaluation DOUBLE PRECISION DEFAULT NULL, ADD score_avis DOUBLE PRECISION DEFAULT NULL, ADD status TINYINT(1) DEFAULT NULL, ADD nom_apprenant VARCHAR(100) DEFAULT NULL, ADD prenom_apprenant VARCHAR(100) DEFAULT NULL, ADD email_apprenant VARCHAR(255) DEFAULT NULL, ADD niveau_etude INT DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9CBE0D905 ON users (email_apprenant)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9C04CC211 ON users (email_instructeur)');
    }
}
