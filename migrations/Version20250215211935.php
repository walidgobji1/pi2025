<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250215211935 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis ADD formation_score_id INT DEFAULT NULL, ADD instructeur_id INT DEFAULT NULL, ADD apprenant_id INT DEFAULT NULL, ADD formation_id INT DEFAULT NULL, ADD note DOUBLE PRECISION NOT NULL, ADD commentaire LONGTEXT DEFAULT NULL, ADD date_creation DATETIME NOT NULL, ADD update_date DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0D5795DA0 FOREIGN KEY (formation_score_id) REFERENCES formation_score (id)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF025FCA809 FOREIGN KEY (instructeur_id) REFERENCES instructeur (id)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF05200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
        $this->addSql('CREATE INDEX IDX_8F91ABF0D5795DA0 ON avis (formation_score_id)');
        $this->addSql('CREATE INDEX IDX_8F91ABF025FCA809 ON avis (instructeur_id)');
        $this->addSql('CREATE INDEX IDX_8F91ABF0C5697D6D ON avis (apprenant_id)');
        $this->addSql('CREATE INDEX IDX_8F91ABF05200282E ON avis (formation_id)');
        $this->addSql('ALTER TABLE categorie DROP date_creation');
        $this->addSql('ALTER TABLE evaluation ADD instructor_id INT NOT NULL, ADD score DOUBLE PRECISION NOT NULL, ADD niveau VARCHAR(255) NOT NULL, ADD status TINYINT(1) DEFAULT NULL, ADD date_creation DATETIME NOT NULL, ADD education VARCHAR(255) DEFAULT NULL, ADD years_of_experience INT DEFAULT NULL, ADD skills VARCHAR(255) DEFAULT NULL, ADD certifications VARCHAR(255) DEFAULT NULL, ADD education_weight DOUBLE PRECISION DEFAULT NULL, ADD experience_weight DOUBLE PRECISION DEFAULT NULL, ADD skills_weight DOUBLE PRECISION DEFAULT NULL, ADD certifications_weight DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A5758C4FC193 FOREIGN KEY (instructor_id) REFERENCES instructeur (id)');
        $this->addSql('CREATE INDEX IDX_1323A5758C4FC193 ON evaluation (instructor_id)');
        $this->addSql('ALTER TABLE formation_score ADD formation_id INT DEFAULT NULL, ADD nombre_avis INT DEFAULT NULL, ADD note_moyenne DOUBLE PRECISION DEFAULT NULL, ADD classement INT NOT NULL');
        $this->addSql('ALTER TABLE formation_score ADD CONSTRAINT FK_4412A9245200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4412A9245200282E ON formation_score (formation_id)');
        $this->addSql('ALTER TABLE instructeur ADD cv VARCHAR(255) DEFAULT NULL, ADD niveau VARCHAR(255) DEFAULT NULL, ADD score_evaluation DOUBLE PRECISION DEFAULT NULL, ADD score_avis DOUBLE PRECISION DEFAULT NULL, ADD status TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0D5795DA0');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF025FCA809');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0C5697D6D');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF05200282E');
        $this->addSql('DROP INDEX IDX_8F91ABF0D5795DA0 ON avis');
        $this->addSql('DROP INDEX IDX_8F91ABF025FCA809 ON avis');
        $this->addSql('DROP INDEX IDX_8F91ABF0C5697D6D ON avis');
        $this->addSql('DROP INDEX IDX_8F91ABF05200282E ON avis');
        $this->addSql('ALTER TABLE avis DROP formation_score_id, DROP instructeur_id, DROP apprenant_id, DROP formation_id, DROP note, DROP commentaire, DROP date_creation, DROP update_date');
        $this->addSql('ALTER TABLE categorie ADD date_creation DATE NOT NULL');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A5758C4FC193');
        $this->addSql('DROP INDEX IDX_1323A5758C4FC193 ON evaluation');
        $this->addSql('ALTER TABLE evaluation DROP instructor_id, DROP score, DROP niveau, DROP status, DROP date_creation, DROP education, DROP years_of_experience, DROP skills, DROP certifications, DROP education_weight, DROP experience_weight, DROP skills_weight, DROP certifications_weight');
        $this->addSql('ALTER TABLE formation_score DROP FOREIGN KEY FK_4412A9245200282E');
        $this->addSql('DROP INDEX UNIQ_4412A9245200282E ON formation_score');
        $this->addSql('ALTER TABLE formation_score DROP formation_id, DROP nombre_avis, DROP note_moyenne, DROP classement');
        $this->addSql('ALTER TABLE instructeur DROP cv, DROP niveau, DROP score_evaluation, DROP score_avis, DROP status');
    }
}
