<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200922194039 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE technologies (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projects (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, image VARCHAR(255) NOT NULL, repo_url VARCHAR(255) DEFAULT NULL, website_url VARCHAR(255) DEFAULT NULL, createdat DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projects_technologies (projects_id INT NOT NULL, technologies_id INT NOT NULL, INDEX IDX_2590E7421EDE0F55 (projects_id), INDEX IDX_2590E7428F8A14FA (technologies_id), PRIMARY KEY(projects_id, technologies_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE projects_technologies ADD CONSTRAINT FK_2590E7421EDE0F55 FOREIGN KEY (projects_id) REFERENCES projects (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projects_technologies ADD CONSTRAINT FK_2590E7428F8A14FA FOREIGN KEY (technologies_id) REFERENCES technologies (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE projects_technologies DROP FOREIGN KEY FK_2590E7421EDE0F55');
        $this->addSql('ALTER TABLE projects_technologies DROP FOREIGN KEY FK_2590E7428F8A14FA');
        $this->addSql('DROP TABLE projects');
        $this->addSql('DROP TABLE projects_technologies');
        $this->addSql('DROP TABLE technologies');
    }
}
