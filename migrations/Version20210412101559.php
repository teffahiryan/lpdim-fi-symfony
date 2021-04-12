<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210412101559 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE resultats ADD reponse_id INT NOT NULL, ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE resultats ADD CONSTRAINT FK_55ED9702CF18BB82 FOREIGN KEY (reponse_id) REFERENCES reponses (id)');
        $this->addSql('ALTER TABLE resultats ADD CONSTRAINT FK_55ED9702A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_55ED9702CF18BB82 ON resultats (reponse_id)');
        $this->addSql('CREATE INDEX IDX_55ED9702A76ED395 ON resultats (user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE resultats DROP FOREIGN KEY FK_55ED9702CF18BB82');
        $this->addSql('ALTER TABLE resultats DROP FOREIGN KEY FK_55ED9702A76ED395');
        $this->addSql('DROP INDEX IDX_55ED9702CF18BB82 ON resultats');
        $this->addSql('DROP INDEX IDX_55ED9702A76ED395 ON resultats');
        $this->addSql('ALTER TABLE resultats DROP reponse_id, DROP user_id');
    }
}
