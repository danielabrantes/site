/*
SQLyog Ultimate v8.55 
MySQL - 5.5.8-log : Database - webportalmex
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`webportalmex` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `webportalmex`;

/*Table structure for table `cambio` */

DROP TABLE IF EXISTS `cambio`;

CREATE TABLE `cambio` (
  `idcambio` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `valCambio` varchar(45) NOT NULL,
  `legenda` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idcambio`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `cambio` */

LOCK TABLES `cambio` WRITE;

insert  into `cambio`(`idcambio`,`valCambio`,`legenda`) values (1,'2,3300','portugal->Brasil'),(2,'2,40','Espanha->Brasil'),(3,'2,6600','UK->Brasil'),(4,'2,7600','UK->PORTUGAL');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
