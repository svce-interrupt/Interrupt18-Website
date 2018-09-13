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
  `mobileNo` varchar(11) NOT NULL,
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
INSERT INTO `events` VALUES ('1231231234',0,1,0,0,1,0,0,1,0,0,0,0),('1234512345',0,1,0,0,1,0,0,1,0,0,0,0),('3622559982',1,1,0,0,0,0,0,0,0,0,0,0),('4646464646',0,1,1,1,0,0,0,0,0,0,0,0),('7358434644',0,0,0,0,0,0,0,0,0,0,0,0),('7358438576',0,1,1,0,1,1,0,1,1,0,1,1),('7397057902',0,0,0,0,0,0,0,0,0,0,0,0),('7397252600',0,0,0,0,0,0,0,0,0,0,0,0),('7530061028',0,0,0,0,0,0,0,0,0,0,0,0),('7708026256',1,1,0,0,0,0,0,0,0,0,0,0),('8220001110',0,0,0,0,0,0,0,0,0,0,0,0),('8428487032',0,0,0,0,0,0,0,0,0,0,0,0),('8939130309',0,0,0,0,0,0,0,0,0,0,0,0),('8939227284',1,1,1,1,1,1,1,0,0,0,0,0),('8939227285',0,0,1,1,1,0,0,0,0,0,0,0),('9445913019',0,0,0,0,0,0,0,0,0,0,0,0),('9551609661',0,0,0,0,0,0,0,0,0,0,0,0),('9952916798',1,1,1,0,0,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `mobileNo` varchar(11) NOT NULL,
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
INSERT INTO `users` VALUES ('1231231234','$2y$10$eW47LMRjQ9MIx.PRtPvPfukmWgVq4NOB5Ww8p6QXnuHBaZfyf/aam','1234','Akash Test','akashsara@outlook.com',0),('1234512345','$2y$10$fPQ77EcquVEkZfWVvN94.OSKlYAKluvOjoxL6zP.MKTiah9kNgs9y','1234','Akash Test 2','akashsara@outlook.com',0),('3622559982','$2y$10$C7WGEqrawuUc.8Fx76geZOOvKOU4V4CUtQXke0jXJe0YImHyfBQsC','SVCE','Heusksm','sunnynapa@yahoo.in',0),('4646464646','$2y$10$RxcF1PMPn6mU4Wvq/ivy5O9AGRdGa5pwNC7Ar5hSgJr1lC/MKYdhu','Arjun Aravind','Sachin Tendulkar','arjun_aravind98@yahoo.in',0),('7358434644','somthing','SVCE','Dhejeshwar S','dhejeshwar30@gmail.com',1),('7358438576','$2y$10$4cquY00vpQ2mw2E66IVfNOFKuNx0Ttbwxoz23sBwH1iC8AAP1yzhm','svce','Sri Vardhamanan','reaganrewop@gmail.com',0),('7397057902','somthing','REC','R. Swathi','swathiradhakrishnan1166@gmail.com',1),('7397252600','somthing','REC','Senthurapandi','senthurapandi.sv.2016.cse@rajalakshmi.edu.in',1),('7530061028','somthing','AMACE','Keerthana m','keerhty250899@gmail.com',1),('7708026256','$2y$10$9JxXzX7uXjwT1pieYSuH.O/2O2wPXKXI6gisaidiyUo3iNBYRFMVS','SVCE','Sathvik','sunnynapa@yahoo.in',0),('8220001110','$2y$10$/kRC5HztndlAWbPIAS3E/.vdulHO1CpIei0ztUYRPFIvZcSWMxsBO','Sri Sairam Engineering College','Vasanth Kumar','vasanthkumar14.99@gmail.com',0),('8428487032','somthing','REC','tamilmani','tamilmani.p.2016.cse@rajalakshmi.edu.in',1),('8939130309','somthing','SVCE','Sudarrshan Krishna','sudarrshankrishna1@gmail.com',1),('8939227284','$2y$10$z7mm0SZ6LPj.qxzZjt.5N.rJWNgM1CQxpOOs5gNNgn7A.xJ5aw8xS','SVCE','Karishni','arjun_aravind98@yahoo.in',0),('8939227285','$2y$10$d5agXxPOqi6PYLicgaVX7.Jsp2oMspxS4cLtEnEx1f9CYCtcNSYrm','SVCE','Karishni','arjun_aravind98@yahoo.in',0),('9445913019','somthing','SVCE','Madhan','madhanbalaji2000@gmail.com',1),('9551609661','somthing','Mepco Schlenk Engineering College','Swaran','swaran18999@gmail.com',1),('9952916798','$2y$10$bnlXgTh4DgEqlZ.ME44GXO8wgr/05vVmf6n3PPAGnM9hd5jthiA46','SVCE','Sathvik','sunnynapa@yahoo.in',0);
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

-- Dump completed on 2018-09-13  7:52:33
