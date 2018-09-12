-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: INTERRUPT
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `mobileNo` int(10) NOT NULL,
  `LogiciansCode` int(1) NOT NULL,
  `PitchPerfect` int(1) NOT NULL,
  `Inquizitive` int(1) NOT NULL,
  `ArtAttack` int(1) NOT NULL,
  `ClashOfCodes` int(1) NOT NULL,
  `TerminalOfSecrets` int(1) NOT NULL,
  `PresentationHub` int(1) NOT NULL,
  `TechnoFair` int(1) NOT NULL,
  `InterruptChallenge` int(1) NOT NULL,
  `PipeThePiper` int(1) NOT NULL,
  `Datafication` int(1) NOT NULL,
  `WorkshopAWS` int(1) NOT NULL,
  PRIMARY KEY (`mobileNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `mobileNo` varchar(10) NOT NULL,
  `password` varchar(60) NOT NULL,
  `college` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rootAccess` int(1) DEFAULT '0',
  PRIMARY KEY (`mobileNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('7358434644','somthing','SVCE','Dhejeshwar S','dhejeshwar30@gmail.com',1),('7397057902','somthing','REC','R. Swathi','swathiradhakrishnan1166@gmail.com',1),('7397252600','somthing','REC','Senthurapandi','senthurapandi.sv.2016.cse@rajalakshmi.edu.in',1),('7530061028','somthing','AMACE','Keerthana m','keerhty250899@gmail.com',1),('8220001110','$2y$10$/kRC5HztndlAWbPIAS3E/.vdulHO1CpIei0ztUYRPFIvZcSWMxsBO','Sri Sairam Engineering College','Vasanth Kumar','vasanthkumar14.99@gmail.com',0),('8428487032','somthing','REC','tamilmani','tamilmani.p.2016.cse@rajalakshmi.edu.in',1),('8939130309','somthing','SVCE','Sudarrshan Krishna','sudarrshankrishna1@gmail.com',1),('8939227284','$2y$10$ToRKawHuphzZzp6b7wr2ZuoHtKFjM4Bm/bn3V8pc09rdHY/fmg3Ta','SVCE','Arjun Aravind','arjun.aravind1998@gmail.com',0),('9445913019','somthing','SVCE','Madhan','madhanbalaji2000@gmail.com',1),('9551609661','somthing','Mepco Schlenk Engineering College','Swaran','swaran18999@gmail.com',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-12 19:06:09
