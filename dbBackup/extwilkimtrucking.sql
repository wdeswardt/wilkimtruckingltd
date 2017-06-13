-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2017 at 09:29 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `extwilkimtrucking`
--
CREATE DATABASE IF NOT EXISTS `extwilkimtrucking` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `extwilkimtrucking`;

-- --------------------------------------------------------

--
-- Table structure for table `externalapplicantappointments`
--

DROP TABLE IF EXISTS `externalapplicantappointments`;
CREATE TABLE `externalapplicantappointments` (
  `extAppointmentID` int(11) NOT NULL,
  `extApplicantID` int(11) NOT NULL,
  `vacancyID` int(11) NOT NULL,
  `dateAppointed` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `externalapplicantemail`
--

DROP TABLE IF EXISTS `externalapplicantemail`;
CREATE TABLE `externalapplicantemail` (
  `extEmailID` int(11) NOT NULL,
  `extApplicantID` int(11) NOT NULL,
  `extEmail` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `externalapplicantgames`
--

DROP TABLE IF EXISTS `externalapplicantgames`;
CREATE TABLE `externalapplicantgames` (
  `extGameID` int(11) NOT NULL,
  `extUID` int(11) NOT NULL,
  `gameID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `externalapplicantlogin`
--

DROP TABLE IF EXISTS `externalapplicantlogin`;
CREATE TABLE `externalapplicantlogin` (
  `extLoginID` int(11) NOT NULL,
  `extUID` int(11) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `externalapplicants`
--

DROP TABLE IF EXISTS `externalapplicants`;
CREATE TABLE `externalapplicants` (
  `extApplicantID` int(11) NOT NULL,
  `fistName` varchar(50) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `cityID` int(11) NOT NULL,
  `countryID` int(11) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `externalapplicantuserdetails`
--

DROP TABLE IF EXISTS `externalapplicantuserdetails`;
CREATE TABLE `externalapplicantuserdetails` (
  `extUID` int(11) NOT NULL,
  `extApplicantID` int(11) NOT NULL,
  `steam64ID` int(11) NOT NULL,
  `steamUsername` varchar(250) NOT NULL,
  `discordUsername` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `externalvacancies`
--

DROP TABLE IF EXISTS `externalvacancies`;
CREATE TABLE `externalvacancies` (
  `vacancyID` int(6) NOT NULL,
  `shortTitle` varchar(50) NOT NULL,
  `longTitle` varchar(200) NOT NULL,
  `roleDescription` mediumtext NOT NULL,
  `roleResponsibilities` longtext NOT NULL,
  `roleRequirements` longtext NOT NULL,
  `publishDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `closingDate` datetime NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `externalapplicantappointments`
--
ALTER TABLE `externalapplicantappointments`
  ADD PRIMARY KEY (`extAppointmentID`);

--
-- Indexes for table `externalapplicantemail`
--
ALTER TABLE `externalapplicantemail`
  ADD PRIMARY KEY (`extEmailID`);

--
-- Indexes for table `externalapplicantgames`
--
ALTER TABLE `externalapplicantgames`
  ADD PRIMARY KEY (`extGameID`);

--
-- Indexes for table `externalapplicantlogin`
--
ALTER TABLE `externalapplicantlogin`
  ADD PRIMARY KEY (`extLoginID`);

--
-- Indexes for table `externalapplicants`
--
ALTER TABLE `externalapplicants`
  ADD PRIMARY KEY (`extApplicantID`);

--
-- Indexes for table `externalapplicantuserdetails`
--
ALTER TABLE `externalapplicantuserdetails`
  ADD PRIMARY KEY (`extUID`);

--
-- Indexes for table `externalvacancies`
--
ALTER TABLE `externalvacancies`
  ADD PRIMARY KEY (`vacancyID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `externalapplicantappointments`
--
ALTER TABLE `externalapplicantappointments`
  MODIFY `extAppointmentID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `externalapplicantemail`
--
ALTER TABLE `externalapplicantemail`
  MODIFY `extEmailID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `externalapplicantgames`
--
ALTER TABLE `externalapplicantgames`
  MODIFY `extGameID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `externalapplicantlogin`
--
ALTER TABLE `externalapplicantlogin`
  MODIFY `extLoginID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `externalapplicants`
--
ALTER TABLE `externalapplicants`
  MODIFY `extApplicantID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `externalapplicantuserdetails`
--
ALTER TABLE `externalapplicantuserdetails`
  MODIFY `extUID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `externalvacancies`
--
ALTER TABLE `externalvacancies`
  MODIFY `vacancyID` int(6) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
