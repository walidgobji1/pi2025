<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250220201346 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE discussion_utilisateur (discussion_id INT NOT NULL, utilisateur_id INT NOT NULL, INDEX IDX_99FB46E1ADED311 (discussion_id), INDEX IDX_99FB46EFB88E14F (utilisateur_id), PRIMARY KEY(discussion_id, utilisateur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE discussion_utilisateur ADD CONSTRAINT FK_99FB46E1ADED311 FOREIGN KEY (discussion_id) REFERENCES discussion (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE discussion_utilisateur ADD CONSTRAINT FK_99FB46EFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE avis ADD formation_score_id INT DEFAULT NULL, ADD instructeur_id INT DEFAULT NULL, ADD apprenant_id INT DEFAULT NULL, ADD formation_id INT DEFAULT NULL, ADD note DOUBLE PRECISION NOT NULL, ADD commentaire LONGTEXT DEFAULT NULL, ADD date_creation DATETIME NOT NULL, ADD update_date DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0D5795DA0 FOREIGN KEY (formation_score_id) REFERENCES formation_score (id)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF025FCA809 FOREIGN KEY (instructeur_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0C5697D6D FOREIGN KEY (apprenant_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF05200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
        $this->addSql('CREATE INDEX IDX_8F91ABF0D5795DA0 ON avis (formation_score_id)');
        $this->addSql('CREATE INDEX IDX_8F91ABF025FCA809 ON avis (instructeur_id)');
        $this->addSql('CREATE INDEX IDX_8F91ABF0C5697D6D ON avis (apprenant_id)');
        $this->addSql('CREATE INDEX IDX_8F91ABF05200282E ON avis (formation_id)');
        $this->addSql('ALTER TABLE categorie DROP date_creation, CHANGE description description VARCHAR(500) NOT NULL');
        $this->addSql('ALTER TABLE evaluation ADD instructor_id INT NOT NULL, ADD score DOUBLE PRECISION NOT NULL, ADD niveau VARCHAR(255) NOT NULL, ADD status TINYINT(1) DEFAULT NULL, ADD date_creation DATETIME NOT NULL, ADD education VARCHAR(255) DEFAULT NULL, ADD years_of_experience INT DEFAULT NULL, ADD skills VARCHAR(255) DEFAULT NULL, ADD certifications VARCHAR(255) DEFAULT NULL, ADD education_weight DOUBLE PRECISION DEFAULT NULL, ADD experience_weight DOUBLE PRECISION DEFAULT NULL, ADD skills_weight DOUBLE PRECISION DEFAULT NULL, ADD certifications_weight DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A5758C4FC193 FOREIGN KEY (instructor_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_1323A5758C4FC193 ON evaluation (instructor_id)');
        $this->addSql('ALTER TABLE evenement ADD titre VARCHAR(255) NOT NULL, ADD date DATE NOT NULL, ADD description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE formation_score ADD formation_id INT DEFAULT NULL, ADD nombre_avis INT DEFAULT NULL, ADD note_moyenne DOUBLE PRECISION DEFAULT NULL, ADD classement INT NOT NULL');
        $this->addSql('ALTER TABLE formation_score ADD CONSTRAINT FK_4412A9245200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4412A9245200282E ON formation_score (formation_id)');
        $this->addSql('ALTER TABLE inscription_cours ADD apprenant_id INT NOT NULL, ADD formation_id INT NOT NULL, ADD promotion_id INT DEFAULT NULL, ADD status VARCHAR(255) NOT NULL, ADD date_inscreption DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD montant DOUBLE PRECISION NOT NULL, ADD type_paiement VARCHAR(255) NOT NULL, ADD nom_apprenant VARCHAR(255) NOT NULL, ADD nom_formation VARCHAR(255) NOT NULL, ADD cin VARCHAR(8) NOT NULL, ADD email VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE inscription_cours ADD CONSTRAINT FK_AF83D8D1C5697D6D FOREIGN KEY (apprenant_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE inscription_cours ADD CONSTRAINT FK_AF83D8D15200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
        $this->addSql('ALTER TABLE inscription_cours ADD CONSTRAINT FK_AF83D8D1139DF194 FOREIGN KEY (promotion_id) REFERENCES promotion (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AF83D8D1ABE530DA ON inscription_cours (cin)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AF83D8D1E7927C74 ON inscription_cours (email)');
        $this->addSql('CREATE INDEX IDX_AF83D8D1C5697D6D ON inscription_cours (apprenant_id)');
        $this->addSql('CREATE INDEX IDX_AF83D8D15200282E ON inscription_cours (formation_id)');
        $this->addSql('CREATE INDEX IDX_AF83D8D1139DF194 ON inscription_cours (promotion_id)');
        $this->addSql('ALTER TABLE lecon ADD pdf_file_name VARCHAR(255) DEFAULT NULL, ADD updated_at DATETIME DEFAULT NULL, CHANGE contenu contenu LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE message ADD discussion_id INT NOT NULL, ADD sender_id INT NOT NULL, ADD receiver_id INT NOT NULL, ADD content LONGTEXT NOT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F1ADED311 FOREIGN KEY (discussion_id) REFERENCES discussion (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FF624B39D FOREIGN KEY (sender_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FCD53EDB6 FOREIGN KEY (receiver_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_B6BD307F1ADED311 ON message (discussion_id)');
        $this->addSql('CREATE INDEX IDX_B6BD307FF624B39D ON message (sender_id)');
        $this->addSql('CREATE INDEX IDX_B6BD307FCD53EDB6 ON message (receiver_id)');
        $this->addSql('ALTER TABLE notification ADD evenement_id INT NOT NULL, ADD titre VARCHAR(255) NOT NULL, ADD contenu VARCHAR(255) NOT NULL, ADD sent_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE notification ADD CONSTRAINT FK_BF5476CAFD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BF5476CAFD02F13 ON notification (evenement_id)');
        $this->addSql('ALTER TABLE promotion ADD inscription_cours_id INT NOT NULL, ADD code_promo VARCHAR(255) NOT NULL, ADD description VARCHAR(255) NOT NULL, ADD remise DOUBLE PRECISION NOT NULL, ADD date_expiration DATETIME NOT NULL');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD1D75A0715 FOREIGN KEY (inscription_cours_id) REFERENCES inscription_cours (id)');
        $this->addSql('CREATE INDEX IDX_C11D7DD1D75A0715 ON promotion (inscription_cours_id)');
        $this->addSql('ALTER TABLE users ADD niveau VARCHAR(255) DEFAULT NULL, ADD score_evaluation DOUBLE PRECISION DEFAULT NULL, ADD score_avis DOUBLE PRECISION DEFAULT NULL, ADD status TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE discussion_utilisateur DROP FOREIGN KEY FK_99FB46E1ADED311');
        $this->addSql('ALTER TABLE discussion_utilisateur DROP FOREIGN KEY FK_99FB46EFB88E14F');
        $this->addSql('DROP TABLE discussion_utilisateur');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0D5795DA0');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF025FCA809');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0C5697D6D');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF05200282E');
        $this->addSql('DROP INDEX IDX_8F91ABF0D5795DA0 ON avis');
        $this->addSql('DROP INDEX IDX_8F91ABF025FCA809 ON avis');
        $this->addSql('DROP INDEX IDX_8F91ABF0C5697D6D ON avis');
        $this->addSql('DROP INDEX IDX_8F91ABF05200282E ON avis');
        $this->addSql('ALTER TABLE avis DROP formation_score_id, DROP instructeur_id, DROP apprenant_id, DROP formation_id, DROP note, DROP commentaire, DROP date_creation, DROP update_date');
        $this->addSql('ALTER TABLE categorie ADD date_creation DATE NOT NULL, CHANGE description description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A5758C4FC193');
        $this->addSql('DROP INDEX IDX_1323A5758C4FC193 ON evaluation');
        $this->addSql('ALTER TABLE evaluation DROP instructor_id, DROP score, DROP niveau, DROP status, DROP date_creation, DROP education, DROP years_of_experience, DROP skills, DROP certifications, DROP education_weight, DROP experience_weight, DROP skills_weight, DROP certifications_weight');
        $this->addSql('ALTER TABLE evenement DROP titre, DROP date, DROP description');
        $this->addSql('ALTER TABLE formation_score DROP FOREIGN KEY FK_4412A9245200282E');
        $this->addSql('DROP INDEX UNIQ_4412A9245200282E ON formation_score');
        $this->addSql('ALTER TABLE formation_score DROP formation_id, DROP nombre_avis, DROP note_moyenne, DROP classement');
        $this->addSql('ALTER TABLE inscription_cours DROP FOREIGN KEY FK_AF83D8D1C5697D6D');
        $this->addSql('ALTER TABLE inscription_cours DROP FOREIGN KEY FK_AF83D8D15200282E');
        $this->addSql('ALTER TABLE inscription_cours DROP FOREIGN KEY FK_AF83D8D1139DF194');
        $this->addSql('DROP INDEX UNIQ_AF83D8D1ABE530DA ON inscription_cours');
        $this->addSql('DROP INDEX UNIQ_AF83D8D1E7927C74 ON inscription_cours');
        $this->addSql('DROP INDEX IDX_AF83D8D1C5697D6D ON inscription_cours');
        $this->addSql('DROP INDEX IDX_AF83D8D15200282E ON inscription_cours');
        $this->addSql('DROP INDEX IDX_AF83D8D1139DF194 ON inscription_cours');
        $this->addSql('ALTER TABLE inscription_cours DROP apprenant_id, DROP formation_id, DROP promotion_id, DROP status, DROP date_inscreption, DROP montant, DROP type_paiement, DROP nom_apprenant, DROP nom_formation, DROP cin, DROP email');
        $this->addSql('ALTER TABLE lecon DROP pdf_file_name, DROP updated_at, CHANGE contenu contenu VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F1ADED311');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FF624B39D');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FCD53EDB6');
        $this->addSql('DROP INDEX IDX_B6BD307F1ADED311 ON message');
        $this->addSql('DROP INDEX IDX_B6BD307FF624B39D ON message');
        $this->addSql('DROP INDEX IDX_B6BD307FCD53EDB6 ON message');
        $this->addSql('ALTER TABLE message DROP discussion_id, DROP sender_id, DROP receiver_id, DROP content, DROP created_at');
        $this->addSql('ALTER TABLE notification DROP FOREIGN KEY FK_BF5476CAFD02F13');
        $this->addSql('DROP INDEX UNIQ_BF5476CAFD02F13 ON notification');
        $this->addSql('ALTER TABLE notification DROP evenement_id, DROP titre, DROP contenu, DROP sent_at');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD1D75A0715');
        $this->addSql('DROP INDEX IDX_C11D7DD1D75A0715 ON promotion');
        $this->addSql('ALTER TABLE promotion DROP inscription_cours_id, DROP code_promo, DROP description, DROP remise, DROP date_expiration');
        $this->addSql('ALTER TABLE users DROP niveau, DROP score_evaluation, DROP score_avis, DROP status');
    }
}
