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
INSERT INTO `events` VALUES ('1122334466',0,0,1,1,1,1,1,1,1,0,1,1),('1234567899',1,1,1,1,1,1,1,1,1,1,1,1),('2008200820',1,1,0,0,0,0,0,0,0,0,0,0),('3622559982',1,1,0,0,0,0,0,0,0,0,0,0),('7358434644',0,0,0,0,0,0,0,0,0,0,0,0),('7358438576',0,1,1,0,1,1,0,1,1,0,1,1),('7397057902',0,0,0,0,0,0,0,0,0,0,0,0),('7397252600',0,0,0,0,0,0,0,0,0,0,0,0),('7530061028',0,0,0,0,0,0,0,0,0,0,0,0),('7550287647',1,0,0,0,0,0,0,0,0,0,0,0),('7708026256',1,1,0,0,0,0,1,0,0,0,0,0),('7810087513',0,1,0,1,1,1,0,0,0,0,0,0),('7904083286',0,0,0,0,0,0,1,0,0,0,0,0),('8056038508',1,1,1,1,1,1,0,1,0,1,0,0),('8124849793',0,0,0,0,0,1,1,0,0,0,0,0),('8220001110',0,0,0,0,0,0,0,0,0,0,0,0),('8428487032',1,1,1,1,1,1,1,1,1,1,1,1),('8526953618',0,0,0,0,0,0,1,0,0,0,0,0),('8912347685',0,0,0,0,0,0,0,0,0,0,0,0),('8939130309',0,0,0,0,0,0,0,0,0,0,0,0),('8939227284',0,0,0,0,1,0,1,1,0,0,0,0),('9176869615',0,0,0,0,1,0,0,0,1,0,0,0),('9445878997',1,1,1,1,1,1,0,1,1,1,1,0),('9445913019',0,0,0,0,0,0,0,0,0,0,0,0),('9445937945',1,1,1,0,1,1,0,1,1,1,0,0),('9551609661',0,0,0,0,0,0,0,0,0,0,0,0),('9789689078',0,0,1,0,0,0,0,0,0,0,0,0),('9789942400',1,1,1,1,1,1,0,1,1,1,1,0),('9840876582',0,0,0,1,0,1,0,0,0,0,0,0),('9884010680',1,1,0,0,0,0,0,0,0,0,0,0),('9898989898',0,0,1,0,0,0,0,0,0,0,0,0),('9940155004',0,0,0,0,0,0,0,0,0,0,0,0),('9940261858',1,1,0,1,1,0,1,1,1,0,0,0),('9940413876',1,0,1,0,1,1,0,1,1,1,1,1),('9941207448',1,1,0,0,1,0,0,1,1,1,0,0),('9952916798',1,1,1,0,0,0,0,0,0,0,0,0),('9999988888',0,0,0,0,0,0,0,0,0,0,0,0),('9999999999',1,1,1,1,1,1,1,1,1,1,1,1);
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
INSERT INTO `users` VALUES ('7358434644','somthing','SVCE','Dhejeshwar S','dhejeshwar30@gmail.com',1),('7358438576','$2y$10$4cquY00vpQ2mw2E66IVfNOFKuNx0Ttbwxoz23sBwH1iC8AAP1yzhm','SVCE','Sri Vardhamanan','reaganrewop@gmail.com',0),('7397057902','somthing','Rajalakshmi Engineering College','R. Swathi','swathiradhakrishnan1166@gmail.com',1),('7397252600','somthing','Rajalakshmi Engineering College','Senthurapandi','senthurapandi.sv.2016.cse@rajalakshmi.edu.in',1),('7530061028','somthing','AMACE','Keerthana M','keerhty250899@gmail.com',1),('7550287647','$2y$10$wRAjNzu65yl7Vsfx469RZeGGcss1CY89T3wqSEe4SwEVeMew1dGAS','Sri Sairam Engineering College','Deepcharran','charransachin@gmail.com',0),('7708026256','$2y$10$9JxXzX7uXjwT1pieYSuH.O/2O2wPXKXI6gisaidiyUo3iNBYRFMVS','SVCE','Sathvik','sunnynapa@yahoo.in',0),('7810087513','$2y$10$nMIG3D8IU/RUnauvHxrwtOF0f5v28siY7/EHz.8Y2Vd4g99Aj/mKG','Sri Sairam Engineering College','Adithya Rangaramanan','adiramanan98@gmail.com',0),('7904083286','$2y$10$jkzCSqmUI5864b8I8PdHKuH9tzzuf4vSI8zrPTGWoU9IgPIVoMFKa','Sri Sairam engineering college','A Niveditha','nivedithapadmanaban25@gmail.com',0),('8056038508','$2y$10$9YSEtBhox0DLNJiB.vhCIu37RzI9N2hH3QLzSzWxuiCZ1goYFg2ty','Rajalakshmi Engineering College','Vishalan','vishalan.l.2017.cse@rajalakshmi.edu.in',0),('8124849793','$2y$10$OPcbPVWfy0LmTaeATiay8eLyQmDw/kvANqmxtW9nMJtK6m.ZKr4hS','Mepco Schlenk Engineering College','R Giritharan','giritharan2801@gmail.com',0),('8220001110','$2y$10$/kRC5HztndlAWbPIAS3E/.vdulHO1CpIei0ztUYRPFIvZcSWMxsBO','Sri Sairam Engineering College','Vasanth Kumar','vasanthkumar14.99@gmail.com',0),('8428487032','somthing','Rajalakshmi Engineering College','Tamilmani','tamilmani.p.2016.cse@rajalakshmi.edu.in',1),('8526953618','$2y$10$U8tBRcWdaQ4W0nIXceOYleA.7K4WGH9XhhuqfjWgGiaGoCssmy2DC','Mepco Schlenk Engineering College','Navaneethan S','naveensakthi98@gmail.com',0),('8939130309','somthing','SVCE','Sudarrshan Krishna','sudarrshankrishna1@gmail.com',1),('8939227284','$2y$10$791qyce3V5vhwjj6eqCXCOzvnaWBMmJfFglXk1GYyJpTcUbJ/Ol7i','SVCE','Arjun Aravind','arjun.aravind1998@gmail.com',0),('9176869615','$2y$10$co56K5Hnr0bNzbHT240LDeHKgkx9fX5.Owpg42nnjw1fo9jgoxHm6','SVCE','Madhumitha K','madhumithakannan7@gmail.com',0),('9445878997','$2y$10$yEg4tTcPLaRyWFzMqdXYHeDBL7AjHprjq.XyZLg1mJwQQbalUiRWC','RMK Engineering College','Kirthika','kirthikavijayakumar1212@gmail.com',0),('9445913019','somthing','SVCE','Madhan','madhanbalaji2000@gmail.com',1),('9445937945','$2y$10$LYhiI08jlR4t80q8Z1Ng8OLsJ20LOArX0hUe6x/4gsrKzf8muEpLO','Rajalakshmi Engineering College','R Vishnu','vishnuramesh200@gmail.com',0),('9551609661','somthing','Mepco Schlenk Engineering College','Swaran','swaran18999@gmail.com',1),('9789689078','$2y$10$.cPC2c1ICkoamUDRbBAIFe9TOtIdOpmgoyBIEGNk1hpj7hxNNhpF2','SVCE','Shiva','shivaramganesan0406@gmail.com',0),('9789942400','$2y$10$Gi7ZXhTVjceXalcGZlkmOeqODNLMqKRIlteT7soBCsUWUcubpY6sO','RMK Engineering College','Sreehari P B','sreehari8991@gmail.com',0),('9840876582','$2y$10$7URpGoeH.BPPrNmeXHWaCeZvgAgVnRwNjB9IjVDEdoIUyLyv2chJS','SVCE','Adarsh','adarsh.apple@icloud.com',0),('9940155004','$2y$10$sR88leOnU0h7/qGWwULYludNUUZZ1W7yUDK6mMrdbt8iZy0xdC6YC','SVCE','Adnan Ahmed','adnanahmed348@gmail.com',0),('9940261858','$2y$10$IlQAQEhOZnpjNnpavN8UmeINEi13feDrFP48izIlKhbCiLDJ4EIv6','SVCE ','Aravind ','aravind1998@gmail.com',0),('9940413876','$2y$10$srGNWSWXfe/1HN9qFd/m6ucyCmmSSd/bIcM7k4MM2uCEGxWosTXWK','SVCE','Hariharasubraniam V','hariharvj98@gmail.com',0),('9941207448','$2y$10$ArSBG3u5suimD3TSAUxPgeP6cfy1oHbyqjp43rXwmabxczNLyeD82','Rajalakshmi Engineering College','Vivekan','vivekan.l.2017.cse@rajalakshmi.edu.in',0),('9952916798','$2y$10$bnlXgTh4DgEqlZ.ME44GXO8wgr/05vVmf6n3PPAGnM9hd5jthiA46','SVCE','Sathvik','sunnynapa@yahoo.in',0);
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

-- Dump completed on 2018-09-17  7:46:43
