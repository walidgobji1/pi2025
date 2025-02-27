<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250227234250 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formation ADD image_name VARCHAR(255) DEFAULT NULL, ADD updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', DROP image');
        $this->addSql('DROP INDEX UNIQ_AF83D8D1E7927C74 ON inscription_cours');
        $this->addSql('DROP INDEX UNIQ_AF83D8D1ABE530DA ON inscription_cours');
        $this->addSql('ALTER TABLE instructeurs CHANGE image image_ins VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE message CHANGE created_at created_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FF624B39D FOREIGN KEY (sender_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FCD53EDB6 FOREIGN KEY (receiver_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE promotion ADD apprenant_id INT DEFAULT NULL, CHANGE inscription_cours_id inscription_cours_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD1C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenants (id)');
        $this->addSql('CREATE INDEX IDX_C11D7DD1C5697D6D ON promotion (apprenant_id)');
        $this->addSql('ALTER TABLE users ADD image VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formation ADD image VARCHAR(255) NOT NULL, DROP image_name, DROP updated_at');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AF83D8D1E7927C74 ON inscription_cours (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AF83D8D1ABE530DA ON inscription_cours (cin)');
        $this->addSql('ALTER TABLE instructeurs CHANGE image_ins image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FF624B39D');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FCD53EDB6');
        $this->addSql('ALTER TABLE message CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD1C5697D6D');
        $this->addSql('DROP INDEX IDX_C11D7DD1C5697D6D ON promotion');
        $this->addSql('ALTER TABLE promotion DROP apprenant_id, CHANGE inscription_cours_id inscription_cours_id INT NOT NULL');
        $this->addSql('ALTER TABLE users DROP image');
    }
}
