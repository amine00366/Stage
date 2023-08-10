<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230810165015 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bandes ADD arm_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bandes ADD CONSTRAINT FK_150D0DA7A134FD0F FOREIGN KEY (arm_id) REFERENCES armoire (id)');
        $this->addSql('CREATE INDEX IDX_150D0DA7A134FD0F ON bandes (arm_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bandes DROP FOREIGN KEY FK_150D0DA7A134FD0F');
        $this->addSql('DROP INDEX IDX_150D0DA7A134FD0F ON bandes');
        $this->addSql('ALTER TABLE bandes DROP arm_id');
    }
}
