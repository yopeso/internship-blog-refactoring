<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190325114226 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE link_to (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, profile_picture_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_C51AB7E5A76ED395 (user_id), UNIQUE INDEX UNIQ_C51AB7E5292E8AE2 (profile_picture_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE link_to ADD CONSTRAINT FK_C51AB7E5A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE link_to ADD CONSTRAINT FK_C51AB7E5292E8AE2 FOREIGN KEY (profile_picture_id) REFERENCES profile_picture (id)');
        $this->addSql('ALTER TABLE profile_picture DROP FOREIGN KEY FK_C5659115A76ED395');
        $this->addSql('DROP INDEX UNIQ_C5659115A76ED395 ON profile_picture');
        $this->addSql('ALTER TABLE profile_picture DROP user_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE link_to');
        $this->addSql('ALTER TABLE profile_picture ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE profile_picture ADD CONSTRAINT FK_C5659115A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C5659115A76ED395 ON profile_picture (user_id)');
    }
}
