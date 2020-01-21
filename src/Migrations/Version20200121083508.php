<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200121083508 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'1\', \'01\', \'Ain\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'2\', \'02\', \'Aisne\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'3\', \'03\', \'Allier\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'4\', \'04\', \'Alpes-de-Haute-Provence\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'5\', \'05\', \'Hautes-Alpes\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'6\', \'06\', \'Alpes-Maritimes\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'7\', \'07\', \'Ardèche\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'8\', \'08\', \'Ardennes\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'9\', \'09\', \'Ariège\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'10\', \'10\', \'Aube\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'11\', \'11\', \'Aude\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'12\', \'12\', \'Aveyron\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'13\', \'13\', \'Bouches-du-Rhône\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'14\', \'14\', \'Calvados\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'15\', \'15\', \'Cantal\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'16\', \'16\', \'Charente\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'17\', \'17\', \'Charente-Maritime\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'18\', \'18\', \'Cher\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'19\', \'19\', \'Corrèze\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'20\', \'21\', \'Côte-d\' Or \');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'21\', \'22\', \'Côtes-d\' Armor\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'22\', \'23\', \'Creuse\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'23\', \'24\', \'Dordogne\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'24\', \'25\', \'Doubs\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'25\', \'26\', \'Drôme\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'26\', \'27\', \'Eure\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'27\', \'28\', \'Eure-et-Loir\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'28\', \'29\', \'Finistère\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'29\', \'02A\', \'Corse-du-Sud\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'30\', \'02B\', \'Haute-Corse\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'31\', \'30\', \'Gard\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'32\', \'31\', \'Haute-Garonne\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'33\', \'32\', \'Gers\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'34\', \'33\', \'Gironde\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'35\', \'34\', \'Hérault\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'36\', \'35\', \'Ille-et-Vilaine\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'37\', \'36\', \'Indre\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'38\', \'37\', \'Indre-et-Loire\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'39\', \'38\', \'Isère\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'40\', \'39\', \'Jura\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'41\', \'40\', \'Landes\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'42\', \'41\', \'Loir-et-Cher\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'43\', \'42\', \'Loire\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'44\', \'43\', \'Haute-Loire\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'45\', \'44\', \'Loire-Atlantique\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'46\', \'45\', \'Loiret\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'47\', \'46\', \'Lot\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'48\', \'47\', \'Lot-et-Garonne\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'49\', \'48\', \'Lozère\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'50\', \'49\', \'Maine-et-Loire\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'51\', \'50\', \'Manche\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'52\', \'51\', \'Marne\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'53\', \'52\', \'Haute-Marne\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'54\', \'53\', \'Mayenne\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'55\', \'54\', \'Meurthe-et-Moselle\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'56\', \'55\', \'Meuse\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'57\', \'56\', \'Morbihan\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'58\', \'57\', \'Moselle\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'59\', \'58\', \'Nièvre\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'60\', \'59\', \'Nord\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'61\', \'60\', \'Oise\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'62\', \'61\', \'Orne\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'63\', \'62\', \'Pas-de-Calais\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'64\', \'63\', \'Puy-de-Dôme\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'65\', \'64\', \'Pyrénées-Atlantiques\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'66\', \'65\', \'Hautes-Pyrénées\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'67\', \'66\', \'Pyrénées-Orientales\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'68\', \'67\', \'Bas-Rhin\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'69\', \'68\', \'Haut-Rhin\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'70\', \'69\', \'Rhône\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'71\', \'70\', \'Haute-Saône\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'72\', \'71\', \'Saône-et-Loire\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'73\', \'72\', \'Sarthe\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'74\', \'73\', \'Savoie\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'75\', \'74\', \'Haute-Savoie\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'76\', \'75\', \'Paris\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'77\', \'76\', \'Seine-Maritime\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'78\', \'77\', \'Seine-et-Marne\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'79\', \'78\', \'Yvelines\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'80\', \'79\', \'Deux-Sèvres\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'81\', \'80\', \'Somme\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'82\', \'81\', \'Tarn\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'83\', \'82\', \'Tarn-et-Garonne\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'84\', \'83\', \'Var\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'85\', \'84\', \'Vaucluse\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'86\', \'85\', \'Vendée\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'87\', \'86\', \'Vienne\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'88\', \'87\', \'Haute-Vienne\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'89\', \'88\', \'Vosges\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'90\', \'89\', \'Yonne\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'91\', \'90\', \'Territoire de Belfort\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'92\', \'91\', \'Essonne\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'93\', \'92\', \'Hauts-de-Seine\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'94\', \'93\', \'Seine-Saint-Denis\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'95\', \'94\', \'Val-de-Marne\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'96\', \'95\', \'Val-d\' Oise\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'97\', \'971\', \'Guadeloupe\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'98\', \'972\', \'Martinique\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'99\', \'973\', \'Guyane\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'100\', \'974\', \'La Réunion\');
            INSERT INTO `lmco`.`department` (`id`, `code`, `name`) VALUES (\'101\', \'976\', \'Mayotte\');
        ');

        $this->addSql('
            INSERT INTO `lmco`.`duty` (`id`, `name`) VALUES (\'1\', \'Hôte\');
            INSERT INTO `lmco`.`duty` (`id`, `name`) VALUES (\'2\', \'Vendeur\');
        ');

        $this->addSql('
            INSERT INTO `lmco`.`question_category` (`id`, `category`) VALUES (\'1\', \'Général\');
            INSERT INTO `lmco`.`question_category` (`id`, `category`) VALUES (\'2\', \'Fonctionnement du site\');
            INSERT INTO `lmco`.`question_category` (`id`, `category`) VALUES (\'3\', \'Les différents onglets du site\');
        ');

        $this->addSql('INSERT INTO `lmco`.`subscription` (`id`, `one_month, `six_month`, `one_year`) VALUES (\'1\', \'15\', \'10\', \'8\');');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('TRUNCATE TABLE department');
        $this->addSql('TRUNCATE TABLE duty');
        $this->addSql('TRUNCATE TABLE question_category');
        $this->addSql('TRUNCATE TABLE subscription');
    }
}