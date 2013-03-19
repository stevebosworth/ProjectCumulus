# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: mysql2.cloudsites.gearhost.com (MySQL 5.5.23)
# Database: cumulus
# Generation Time: 2013-03-12 04:02:27 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table books
# ------------------------------------------------------------

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `law_id` int(11) NOT NULL,
  `book_num` varchar(4) NOT NULL,
  `book_title` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB;

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;

INSERT INTO `books` (`book_id`, `law_id`, `book_num`, `book_title`)
VALUES
	(1,1,'1','Persons'),
	(2,1,'2','The Family'),
	(3,1,'3','Successions'),
	(4,1,'4','Property'),
	(5,1,'5','Obligations'),
	(6,1,'6','Prior Claims and Hypothecs'),
	(7,1,'7','Evidence'),
	(8,1,'8','Prescriptions'),
	(9,1,'9','Publication of Rights'),
	(10,1,'10','Private International Law');

/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table chapters
# ------------------------------------------------------------

CREATE TABLE `chapters` (
  `ch_id` int(11) NOT NULL AUTO_INCREMENT,
  `ch_num` varchar(45) DEFAULT NULL,
  `ch_title` varchar(45) DEFAULT NULL,
  `title_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ch_id`)
) ENGINE=InnoDB;

LOCK TABLES `chapters` WRITE;
/*!40000 ALTER TABLE `chapters` DISABLE KEYS */;

INSERT INTO `chapters` (`ch_id`, `ch_num`, `ch_title`, `title_id`)
VALUES
	(1,'1','Integrity and the Person',2),
	(2,'2','Respect of children\'s Rights',2),
	(3,'3','Respect of the Reputation and Privacy',2),
	(4,'4','Respect of the Body After Death',2),
	(5,'1','Name',3),
	(6,'2','Domicile and Residence',3),
	(7,'3','Absense and Death',3),
	(8,'4','Resister and Acts of Civil Status',3),
	(9,'1','Majority and Minority',4),
	(10,'2','Tutorship to Minors',4),
	(11,'3','Protective Supervision of Persons of Full Age',4),
	(12,'1','Juridicial Personality',5),
	(13,'2','Provisions Applicable to Certain Legal Person',5),
	(14,'1','Filiation by Blood',8);

/*!40000 ALTER TABLE `chapters` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table divisions
# ------------------------------------------------------------

CREATE TABLE `divisions` (
  `div_id` int(11) NOT NULL AUTO_INCREMENT,
  `div_num` varchar(45) DEFAULT NULL,
  `div_title` varchar(45) DEFAULT NULL,
  `ch_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`div_id`)
) ENGINE=InnoDB;

LOCK TABLES `divisions` WRITE;
/*!40000 ALTER TABLE `divisions` DISABLE KEYS */;

INSERT INTO `divisions` (`div_id`, `div_num`, `div_title`, `ch_id`)
VALUES
	(1,'1','Care',1),
	(2,'1','Confinement in an institution and psychiatric',1),
	(3,'1','Proof of Filiation',14);

/*!40000 ALTER TABLE `divisions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table laws
# ------------------------------------------------------------

CREATE TABLE `laws` (
  `law_id` int(11) NOT NULL AUTO_INCREMENT,
  `law_name` varchar(45) DEFAULT NULL,
  `law_code` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`law_id`)
) ENGINE=InnoDB;

LOCK TABLES `laws` WRITE;
/*!40000 ALTER TABLE `laws` DISABLE KEYS */;

INSERT INTO `laws` (`law_id`, `law_name`, `law_code`)
VALUES
	(1,'Civil Code of Quebec','ccq');

/*!40000 ALTER TABLE `laws` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sections
# ------------------------------------------------------------

CREATE TABLE `sections` (
  `sec_id` int(11) NOT NULL AUTO_INCREMENT,
  `sec_num` int(4) NOT NULL,
  `sec_title` varchar(100) DEFAULT '',
  `sec_txt` varchar(45) NOT NULL,
  `enact_yr` int(4) DEFAULT NULL,
  `enact_bill` varchar(100) DEFAULT NULL,
  `enact_sec` int(5) DEFAULT NULL,
  `law_id` int(11) NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `title_id` int(11) DEFAULT NULL,
  `ch_id` int(11) DEFAULT NULL,
  `div_id` int(11) DEFAULT NULL,
  `sub_div_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`sec_id`),
) ENGINE=InnoDB;



# Dump of table subdivisions
# ------------------------------------------------------------

CREATE TABLE `subdivisions` (
  `sub_div_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_div_num` varchar(45) DEFAULT NULL,
  `sub_div_title` varchar(45) DEFAULT NULL,
  `div_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sub_div_id`)
) ENGINE=InnoDB;

LOCK TABLES `subdivisions` WRITE;
/*!40000 ALTER TABLE `subdivisions` DISABLE KEYS */;

INSERT INTO `subdivisions` (`sub_div_id`, `sub_div_num`, `sub_div_title`, `div_id`)
VALUES
	(1,'1','Title and Possession of Status','8');

/*!40000 ALTER TABLE `subdivisions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table titles
# ------------------------------------------------------------

CREATE TABLE `titles` (
  `title_id` int(11) NOT NULL AUTO_INCREMENT,
  `title_num` decimal(4,1) DEFAULT NULL,
  `title_title` varchar(45) DEFAULT NULL,
  `book_id` int(11) NOT NULL,
  PRIMARY KEY (`title_id`)
) ENGINE=InnoDB;

LOCK TABLES `titles` WRITE;
/*!40000 ALTER TABLE `titles` DISABLE KEYS */;

INSERT INTO `titles` (`title_id`, `title_num`, `title_title`, `book_id`)
VALUES
	(1,1.0,'Enjoyment and Exercise of Civil Rights',1),
	(2,2.0,'Certain Personaility Rights',1),
	(3,3.0,'Certain Particulars Relating to the Status of',1),
	(4,4.0,'Capacity of Persons',1),
	(5,5.0,'Legal Persons',1),
	(6,1.0,'Marriage',2),
	(7,1.1,'Civil Union',2),
	(8,2.0,'Filiation',2),
	(9,1.0,'some title',1);

/*!40000 ALTER TABLE `titles` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
