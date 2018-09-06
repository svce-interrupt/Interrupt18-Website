-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2018 at 09:44 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interrupt`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

Table structure for table `events`
--

CREATE TABLE `events` (
  `mobileNo` varchar(10) NOT NULL,
  `LogiciansCode` int(1) DEFAULT NULL,
  `PitchPerfect` int(1) DEFAULT NULL,
  `Inquizitive` int(1) DEFAULT NULL,
  `ArtAttack` int(1) DEFAULT NULL,
  `ClashOfCodes` int(1) DEFAULT NULL,
  `TerminalOfSecrets` int(1) DEFAULT NULL,
  `PresentationHub` int(1) DEFAULT NULL,
  `TechnoFair` int(1) DEFAULT NULL,
  `InterruptChallenge` int(1) DEFAULT NULL,
  `PipeThePiper` int(1) DEFAULT NULL,
  `Dataification` int(1) DEFAULT NULL,
  `WorkshopAWS` int(1) DEFAULT NULL,
  `totalpoints` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`mobileNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;