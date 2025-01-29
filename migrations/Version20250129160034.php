<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250129160034 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F52993988C0FA77');
        $this->addSql('DROP INDEX IDX_F52993988C0FA77 ON `order`');
        $this->addSql('ALTER TABLE `order` ADD amount NUMERIC(10, 2) NOT NULL, DROP order_details_id, DROP oder_details, CHANGE order_date date DATE NOT NULL, CHANGE orders status VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE order_details ADD article_id INT NOT NULL, ADD related_order_id INT NOT NULL, ADD quantity INT NOT NULL, ADD subtotal NUMERIC(10, 2) NOT NULL');
        $this->addSql('ALTER TABLE order_details ADD CONSTRAINT FK_845CA2C17294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE order_details ADD CONSTRAINT FK_845CA2C12B1C2395 FOREIGN KEY (related_order_id) REFERENCES `order` (id)');
        $this->addSql('CREATE INDEX IDX_845CA2C17294869C ON order_details (article_id)');
        $this->addSql('CREATE INDEX IDX_845CA2C12B1C2395 ON order_details (related_order_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` ADD order_details_id INT NOT NULL, ADD oder_details LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', DROP amount, CHANGE status orders VARCHAR(255) NOT NULL, CHANGE date order_date DATE NOT NULL');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F52993988C0FA77 FOREIGN KEY (order_details_id) REFERENCES order_details (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_F52993988C0FA77 ON `order` (order_details_id)');
        $this->addSql('ALTER TABLE order_details DROP FOREIGN KEY FK_845CA2C17294869C');
        $this->addSql('ALTER TABLE order_details DROP FOREIGN KEY FK_845CA2C12B1C2395');
        $this->addSql('DROP INDEX IDX_845CA2C17294869C ON order_details');
        $this->addSql('DROP INDEX IDX_845CA2C12B1C2395 ON order_details');
        $this->addSql('ALTER TABLE order_details DROP article_id, DROP related_order_id, DROP quantity, DROP subtotal');
    }
}
