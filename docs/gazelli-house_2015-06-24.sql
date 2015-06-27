# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.19)
# Database: gazelli-house
# Generation Time: 2015-06-24 11:32:14 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table enquiries
# ------------------------------------------------------------

USE `gazelli-house`;

DROP TABLE IF EXISTS `enquiries`;

CREATE TABLE `enquiries` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(256) NOT NULL DEFAULT '',
  `dob` date NOT NULL,
  `address1` varchar(256) NOT NULL DEFAULT '',
  `address2` varchar(256) DEFAULT NULL,
  `city` varchar(256) NOT NULL DEFAULT '',
  `postcode` varchar(256) NOT NULL DEFAULT '',
  `country` varchar(256) NOT NULL DEFAULT '',
  `tel` varchar(256) NOT NULL DEFAULT '',
  `email` varchar(256) NOT NULL DEFAULT '',
  `interests` longtext NOT NULL,
  `literature` tinyint(1) DEFAULT NULL,
  `art` tinyint(1) DEFAULT NULL,
  `languages` tinyint(1) DEFAULT NULL,
  `fashion` tinyint(1) DEFAULT NULL,
  `cosmetics` tinyint(1) DEFAULT NULL,
  `spirituality` tinyint(1) DEFAULT NULL,
  `self_development` tinyint(1) DEFAULT NULL,
  `body_treatments` tinyint(1) DEFAULT NULL,
  `skincare` tinyint(1) DEFAULT NULL,
  `life_coaching` tinyint(1) DEFAULT NULL,
  `facial_treatments` tinyint(1) DEFAULT NULL,
  `alternative_therapies` tinyint(1) DEFAULT NULL,
  `travel` tinyint(1) DEFAULT NULL,
  `ayurveda` tinyint(1) DEFAULT NULL,
  `lifestyle` tinyint(1) DEFAULT NULL,
  `nutrition` tinyint(1) DEFAULT NULL,
  `fitness` tinyint(1) DEFAULT NULL,
  `theatre` tinyint(1) DEFAULT NULL,
  `ballet` tinyint(1) DEFAULT NULL,
  `socialising` tinyint(1) DEFAULT NULL,
  `relaxing` tinyint(1) DEFAULT NULL,
  `film_screenings` tinyint(1) DEFAULT NULL,
  `yoga` tinyint(1) DEFAULT NULL,
  `suggestions` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
