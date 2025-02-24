<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250223115639 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF025FCA809 FOREIGN KEY (instructeur_id) REFERENCES instructeurs (id)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenants (id)');
        $this->addSql('ALTER TABLE categorie CHANGE description description VARCHAR(500) NOT NULL');
        $this->addSql('ALTER TABLE discussion ADD sender_id INT NOT NULL, ADD receiver_id INT NOT NULL');
        $this->addSql('ALTER TABLE discussion ADD CONSTRAINT FK_C0B9F90FF624B39D FOREIGN KEY (sender_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE discussion ADD CONSTRAINT FK_C0B9F90FCD53EDB6 FOREIGN KEY (receiver_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_C0B9F90FF624B39D ON discussion (sender_id)');
        $this->addSql('CREATE INDEX IDX_C0B9F90FCD53EDB6 ON discussion (receiver_id)');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A5758C4FC193 FOREIGN KEY (instructor_id) REFERENCES instructeurs (id)');
        $this->addSql('ALTER TABLE evenement ADD titre VARCHAR(255) NOT NULL, ADD date DATE NOT NULL, ADD description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE inscription_cours ADD promotion_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE inscription_cours ADD CONSTRAINT FK_AF83D8D1C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenants (id)');
        $this->addSql('ALTER TABLE inscription_cours ADD CONSTRAINT FK_AF83D8D1139DF194 FOREIGN KEY (promotion_id) REFERENCES promotion (id)');
        $this->addSql('CREATE INDEX IDX_AF83D8D1139DF194 ON inscription_cours (promotion_id)');
        $this->addSql('ALTER TABLE lecon ADD pdf_file_name VARCHAR(255) DEFAULT NULL, ADD updated_at DATETIME DEFAULT NULL, CHANGE contenu contenu LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE message ADD sender_id INT NOT NULL, ADD receiver_id INT NOT NULL, ADD discussion_id INT NOT NULL, ADD content LONGTEXT NOT NULL, ADD created_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FF624B39D FOREIGN KEY (sender_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FCD53EDB6 FOREIGN KEY (receiver_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F1ADED311 FOREIGN KEY (discussion_id) REFERENCES discussion (id)');
        $this->addSql('CREATE INDEX IDX_B6BD307FF624B39D ON message (sender_id)');
        $this->addSql('CREATE INDEX IDX_B6BD307FCD53EDB6 ON message (receiver_id)');
        $this->addSql('CREATE INDEX IDX_B6BD307F1ADED311 ON message (discussion_id)');
        $this->addSql('ALTER TABLE notification ADD evenement_id INT NOT NULL, ADD titre VARCHAR(255) NOT NULL, ADD contenu VARCHAR(255) NOT NULL, ADD sent_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE notification ADD CONSTRAINT FK_BF5476CAFD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BF5476CAFD02F13 ON notification (evenement_id)');
        $this->addSql('ALTER TABLE promotion ADD apprenant_id INT DEFAULT NULL, ADD inscription_cours_id INT NOT NULL, ADD code_promo VARCHAR(255) NOT NULL, ADD description VARCHAR(255) NOT NULL, ADD remise DOUBLE PRECISION NOT NULL, ADD date_expiration DATETIME NOT NULL');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD1C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenants (id)');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD1D75A0715 FOREIGN KEY (inscription_cours_id) REFERENCES inscription_cours (id)');
        $this->addSql('CREATE INDEX IDX_C11D7DD1C5697D6D ON promotion (apprenant_id)');
        $this->addSql('CREATE INDEX IDX_C11D7DD1D75A0715 ON promotion (inscription_cours_id)');
        $this->addSql('ALTER TABLE utilisateur ADD username VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1D1C63B3F85E0677 ON utilisateur (username)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF025FCA809');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0C5697D6D');
        $this->addSql('ALTER TABLE categorie CHANGE description description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE discussion DROP FOREIGN KEY FK_C0B9F90FF624B39D');
        $this->addSql('ALTER TABLE discussion DROP FOREIGN KEY FK_C0B9F90FCD53EDB6');
        $this->addSql('DROP INDEX IDX_C0B9F90FF624B39D ON discussion');
        $this->addSql('DROP INDEX IDX_C0B9F90FCD53EDB6 ON discussion');
        $this->addSql('ALTER TABLE discussion DROP sender_id, DROP receiver_id');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A5758C4FC193');
        $this->addSql('ALTER TABLE evenement DROP titre, DROP date, DROP description');
        $this->addSql('ALTER TABLE inscription_cours DROP FOREIGN KEY FK_AF83D8D1C5697D6D');
        $this->addSql('ALTER TABLE inscription_cours DROP FOREIGN KEY FK_AF83D8D1139DF194');
        $this->addSql('DROP INDEX IDX_AF83D8D1139DF194 ON inscription_cours');
        $this->addSql('ALTER TABLE inscription_cours DROP promotion_id');
        $this->addSql('ALTER TABLE lecon DROP pdf_file_name, DROP updated_at, CHANGE contenu contenu VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FF624B39D');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FCD53EDB6');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F1ADED311');
        $this->addSql('DROP INDEX IDX_B6BD307FF624B39D ON message');
        $this->addSql('DROP INDEX IDX_B6BD307FCD53EDB6 ON message');
        $this->addSql('DROP INDEX IDX_B6BD307F1ADED311 ON message');
        $this->addSql('ALTER TABLE message DROP sender_id, DROP receiver_id, DROP discussion_id, DROP content, DROP created_at');
        $this->addSql('ALTER TABLE notification DROP FOREIGN KEY FK_BF5476CAFD02F13');
        $this->addSql('DROP INDEX UNIQ_BF5476CAFD02F13 ON notification');
        $this->addSql('ALTER TABLE notification DROP evenement_id, DROP titre, DROP contenu, DROP sent_at');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD1C5697D6D');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD1D75A0715');
        $this->addSql('DROP INDEX IDX_C11D7DD1C5697D6D ON promotion');
        $this->addSql('DROP INDEX IDX_C11D7DD1D75A0715 ON promotion');
        $this->addSql('ALTER TABLE promotion DROP apprenant_id, DROP inscription_cours_id, DROP code_promo, DROP description, DROP remise, DROP date_expiration');
        $this->addSql('DROP INDEX UNIQ_1D1C63B3F85E0677 ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur DROP username');
    }
}
