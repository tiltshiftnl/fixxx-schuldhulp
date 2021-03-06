<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180419131520 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE voorlegger ADD budgetbeheer_ontvangen_madi SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD budgetbeheer_ontvangen_gka SMALLINT DEFAULT NULL');
        $this->addSql('UPDATE voorlegger SET budgetbeheer_ontvangen_madi = 0, budgetbeheer_ontvangen_gka = 0');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE voorlegger DROP budgetbeheer_ontvangen_madi');
        $this->addSql('ALTER TABLE voorlegger DROP budgetbeheer_ontvangen_gka');
    }
}
