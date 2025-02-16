<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250215212226 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE administrateur (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE apprenant (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, formation_score_id INT DEFAULT NULL, instructeur_id INT DEFAULT NULL, apprenant_id INT DEFAULT NULL, formation_id INT DEFAULT NULL, note DOUBLE PRECISION NOT NULL, commentaire LONGTEXT DEFAULT NULL, date_creation DATETIME NOT NULL, update_date DATETIME DEFAULT NULL, INDEX IDX_8F91ABF0D5795DA0 (formation_score_id), INDEX IDX_8F91ABF025FCA809 (instructeur_id), INDEX IDX_8F91ABF0C5697D6D (apprenant_id), INDEX IDX_8F91ABF05200282E (formation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE discussion (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evaluation (id INT AUTO_INCREMENT NOT NULL, instructor_id INT NOT NULL, score DOUBLE PRECISION NOT NULL, niveau VARCHAR(255) NOT NULL, status TINYINT(1) DEFAULT NULL, date_creation DATETIME NOT NULL, education VARCHAR(255) DEFAULT NULL, years_of_experience INT DEFAULT NULL, skills VARCHAR(255) DEFAULT NULL, certifications VARCHAR(255) DEFAULT NULL, education_weight DOUBLE PRECISION DEFAULT NULL, experience_weight DOUBLE PRECISION DEFAULT NULL, skills_weight DOUBLE PRECISION DEFAULT NULL, certifications_weight DOUBLE PRECISION DEFAULT NULL, INDEX IDX_1323A5758C4FC193 (instructor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation (id INT AUTO_INCREMENT NOT NULL, categorie_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, duree VARCHAR(255) NOT NULL, niveau VARCHAR(255) NOT NULL, date_creation DATE NOT NULL, prix DOUBLE PRECISION NOT NULL, INDEX IDX_404021BFBCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation_score (id INT AUTO_INCREMENT NOT NULL, formation_id INT DEFAULT NULL, nombre_avis INT DEFAULT NULL, note_moyenne DOUBLE PRECISION DEFAULT NULL, classement INT NOT NULL, UNIQUE INDEX UNIQ_4412A9245200282E (formation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscription_cours (id INT AUTO_INCREMENT NOT NULL, apprenant_id INT NOT NULL, formation_id INT NOT NULL, status VARCHAR(255) NOT NULL, date_inscreption DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', montant DOUBLE PRECISION NOT NULL, type_paiement VARCHAR(255) NOT NULL, nom_apprenant VARCHAR(255) NOT NULL, nom_formation VARCHAR(255) NOT NULL, cin VARCHAR(8) NOT NULL, email VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_AF83D8D1ABE530DA (cin), UNIQUE INDEX UNIQ_AF83D8D1E7927C74 (email), INDEX IDX_AF83D8D1C5697D6D (apprenant_id), INDEX IDX_AF83D8D15200282E (formation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE instructeur (id INT AUTO_INCREMENT NOT NULL, cv VARCHAR(255) DEFAULT NULL, niveau VARCHAR(255) DEFAULT NULL, score_evaluation DOUBLE PRECISION DEFAULT NULL, score_avis DOUBLE PRECISION DEFAULT NULL, status TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lecon (id INT AUTO_INCREMENT NOT NULL, formation_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, contenu VARCHAR(255) NOT NULL, date_creation DATE NOT NULL, INDEX IDX_94E6242E5200282E (formation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notification (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0D5795DA0 FOREIGN KEY (formation_score_id) REFERENCES formation_score (id)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF025FCA809 FOREIGN KEY (instructeur_id) REFERENCES instructeur (id)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF05200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A5758C4FC193 FOREIGN KEY (instructor_id) REFERENCES instructeur (id)');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BFBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE formation_score ADD CONSTRAINT FK_4412A9245200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
        $this->addSql('ALTER TABLE inscription_cours ADD CONSTRAINT FK_AF83D8D1C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id)');
        $this->addSql('ALTER TABLE inscription_cours ADD CONSTRAINT FK_AF83D8D15200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
        $this->addSql('ALTER TABLE lecon ADD CONSTRAINT FK_94E6242E5200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0D5795DA0');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF025FCA809');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0C5697D6D');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF05200282E');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A5758C4FC193');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BFBCF5E72D');
        $this->addSql('ALTER TABLE formation_score DROP FOREIGN KEY FK_4412A9245200282E');
        $this->addSql('ALTER TABLE inscription_cours DROP FOREIGN KEY FK_AF83D8D1C5697D6D');
        $this->addSql('ALTER TABLE inscription_cours DROP FOREIGN KEY FK_AF83D8D15200282E');
        $this->addSql('ALTER TABLE lecon DROP FOREIGN KEY FK_94E6242E5200282E');
        $this->addSql('DROP TABLE administrateur');
        $this->addSql('DROP TABLE apprenant');
        $this->addSql('DROP TABLE avis');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE discussion');
        $this->addSql('DROP TABLE evaluation');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE formation');
        $this->addSql('DROP TABLE formation_score');
        $this->addSql('DROP TABLE inscription_cours');
        $this->addSql('DROP TABLE instructeur');
        $this->addSql('DROP TABLE lecon');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE notification');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE promotion');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
