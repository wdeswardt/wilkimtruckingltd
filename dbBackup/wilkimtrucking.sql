-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2017 at 09:30 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wilkimtrucking`
--
CREATE DATABASE IF NOT EXISTS `wilkimtrucking` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wilkimtrucking`;

-- --------------------------------------------------------

--
-- Table structure for table `companyroles`
--

DROP TABLE IF EXISTS `companyroles`;
CREATE TABLE `companyroles` (
  `roleID` int(11) NOT NULL,
  `shortTitle` varchar(50) NOT NULL,
  `longTitle` varchar(200) NOT NULL,
  `roleDescription` mediumtext NOT NULL,
  `roleResponsibilities` longtext NOT NULL,
  `roleRequirements` longtext NOT NULL,
  `createdBy` int(11) NOT NULL,
  `creationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` int(11) DEFAULT NULL,
  `changeDate` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE `games` (
  `gameID` int(11) NOT NULL,
  `shortTitle` varchar(5) NOT NULL,
  `longTitle` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`gameID`, `shortTitle`, `longTitle`) VALUES
(1, 'ATS', 'American Truck Simulator'),
(2, 'ETS2', 'Euro Truck Simulator 2'),
(3, 'Both', 'American Truck Simulator and Euro Truck Simulator 2');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE `staff` (
  `staffID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(150) NOT NULL,
  `cityID` int(11) NOT NULL,
  `countryID` int(11) NOT NULL,
  `commenceDate` datetime NOT NULL,
  `resignDate` datetime NOT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `changedBy` int(11) DEFAULT NULL,
  `changeDate` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffcredentials`
--

DROP TABLE IF EXISTS `staffcredentials`;
CREATE TABLE `staffcredentials` (
  `UID` int(11) NOT NULL,
  `staffID` int(11) NOT NULL,
  `steam64ID` int(11) NOT NULL,
  `steamUsername` varchar(200) NOT NULL,
  `discordUsername` int(200) DEFAULT NULL,
  `password` int(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffemail`
--

DROP TABLE IF EXISTS `staffemail`;
CREATE TABLE `staffemail` (
  `emailID` int(11) NOT NULL,
  `staffID` int(11) NOT NULL,
  `staffEmailAddress` varchar(255) NOT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `changedBy` int(11) DEFAULT NULL,
  `changeDate` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffpositions`
--

DROP TABLE IF EXISTS `staffpositions`;
CREATE TABLE `staffpositions` (
  `positionID` int(11) NOT NULL,
  `staffID` int(11) NOT NULL,
  `startDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `endDate` datetime NOT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `changedBy` int(11) DEFAULT NULL,
  `changeDate` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

DROP TABLE IF EXISTS `vacancies`;
CREATE TABLE `vacancies` (
  `roleID` int(11) NOT NULL,
  `shortTitle` varchar(50) NOT NULL,
  `longTitle` varchar(200) NOT NULL,
  `roleDescription` mediumtext NOT NULL,
  `roleResponsibilities` longtext NOT NULL,
  `roleRequirements` longtext NOT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `creationDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `publishDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `closeDate` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companyroles`
--
ALTER TABLE `companyroles`
  ADD PRIMARY KEY (`roleID`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gameID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `staffcredentials`
--
ALTER TABLE `staffcredentials`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `staffemail`
--
ALTER TABLE `staffemail`
  ADD PRIMARY KEY (`emailID`);

--
-- Indexes for table `staffpositions`
--
ALTER TABLE `staffpositions`
  ADD PRIMARY KEY (`positionID`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`roleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companyroles`
--
ALTER TABLE `companyroles`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `gameID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staffcredentials`
--
ALTER TABLE `staffcredentials`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staffemail`
--
ALTER TABLE `staffemail`
  MODIFY `emailID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staffpositions`
--
ALTER TABLE `staffpositions`
  MODIFY `positionID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
