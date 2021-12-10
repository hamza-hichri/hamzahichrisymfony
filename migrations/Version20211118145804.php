<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211118145804 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE detail_voiture (id INT AUTO_INCREMENT NOT NULL, relation_id INT DEFAULT NULL, modele VARCHAR(255) NOT NULL, nombre_place INT NOT NULL, valeur DOUBLE PRECISION NOT NULL, puissance INT NOT NULL, age INT NOT NULL, UNIQUE INDEX UNIQ_8E2D01DA3256915B (relation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voiture (id INT AUTO_INCREMENT NOT NULL, cin_utilisateur VARCHAR(8) NOT NULL, matricule VARCHAR(11) NOT NULL, marque VARCHAR(255) NOT NULL, carte_grise VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE detail_voiture ADD CONSTRAINT FK_8E2D01DA3256915B FOREIGN KEY (relation_id) REFERENCES voiture (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE detail_voiture DROP FOREIGN KEY FK_8E2D01DA3256915B');
        $this->addSql('DROP TABLE detail_voiture');
        $this->addSql('DROP TABLE voiture');
    }
}
