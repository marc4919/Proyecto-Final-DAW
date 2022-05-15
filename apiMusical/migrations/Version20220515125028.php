<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220515125028 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE musical_participante (musical_id INT NOT NULL, participante_id INT NOT NULL, INDEX IDX_7C8F83DA839489F9 (musical_id), INDEX IDX_7C8F83DAF6F50196 (participante_id), PRIMARY KEY(musical_id, participante_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE musical_participante ADD CONSTRAINT FK_7C8F83DA839489F9 FOREIGN KEY (musical_id) REFERENCES musical (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE musical_participante ADD CONSTRAINT FK_7C8F83DAF6F50196 FOREIGN KEY (participante_id) REFERENCES participante (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE audio ADD musical_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE audio ADD CONSTRAINT FK_187D3695839489F9 FOREIGN KEY (musical_id) REFERENCES musical (id)');
        $this->addSql('CREATE INDEX IDX_187D3695839489F9 ON audio (musical_id)');
        $this->addSql('ALTER TABLE imagen ADD musical_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE imagen ADD CONSTRAINT FK_8319D2B3839489F9 FOREIGN KEY (musical_id) REFERENCES musical (id)');
        $this->addSql('CREATE INDEX IDX_8319D2B3839489F9 ON imagen (musical_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE musical_participante');
        $this->addSql('ALTER TABLE audio DROP FOREIGN KEY FK_187D3695839489F9');
        $this->addSql('DROP INDEX IDX_187D3695839489F9 ON audio');
        $this->addSql('ALTER TABLE audio DROP musical_id');
        $this->addSql('ALTER TABLE imagen DROP FOREIGN KEY FK_8319D2B3839489F9');
        $this->addSql('DROP INDEX IDX_8319D2B3839489F9 ON imagen');
        $this->addSql('ALTER TABLE imagen DROP musical_id');
    }
}
