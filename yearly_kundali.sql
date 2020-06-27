-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 02:15 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yearly kundali`
--

-- --------------------------------------------------------

--
-- Table structure for table `120 years`
--

CREATE TABLE `120 years` (
  `Age` int(15) NOT NULL,
  `1` int(5) NOT NULL,
  `2` int(11) NOT NULL,
  `3` int(11) NOT NULL,
  `4` int(11) NOT NULL,
  `5` int(11) NOT NULL,
  `6` int(11) NOT NULL,
  `7` int(11) NOT NULL,
  `8` int(11) NOT NULL,
  `9` int(11) NOT NULL,
  `10` int(11) NOT NULL,
  `11` int(11) NOT NULL,
  `12` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `120 years`
--

INSERT INTO `120 years` (`Age`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`) VALUES
(1, 1, 9, 10, 3, 5, 2, 11, 7, 6, 12, 4, 8),
(2, 4, 1, 12, 9, 3, 7, 5, 6, 2, 8, 10, 11),
(3, 9, 4, 1, 2, 8, 3, 10, 5, 7, 11, 12, 6),
(4, 3, 8, 4, 1, 10, 9, 6, 11, 5, 7, 2, 12),
(5, 11, 3, 8, 4, 1, 5, 9, 2, 12, 6, 7, 10),
(6, 5, 12, 3, 8, 4, 11, 2, 9, 1, 10, 6, 7),
(7, 7, 6, 9, 5, 12, 4, 1, 10, 11, 2, 8, 3),
(8, 2, 7, 6, 12, 9, 10, 3, 1, 8, 5, 11, 4),
(9, 12, 2, 7, 6, 11, 1, 8, 4, 10, 3, 5, 9),
(10, 10, 11, 2, 7, 6, 12, 4, 8, 3, 1, 9, 5),
(11, 8, 5, 11, 10, 7, 6, 12, 3, 9, 4, 1, 2),
(12, 6, 10, 5, 11, 2, 8, 7, 12, 4, 9, 3, 1),
(13, 1, 5, 10, 8, 11, 6, 7, 2, 12, 3, 9, 4),
(14, 4, 1, 3, 2, 5, 7, 8, 11, 6, 12, 10, 9),
(15, 9, 4, 1, 6, 8, 5, 2, 7, 11, 10, 12, 3),
(16, 3, 9, 4, 1, 12, 8, 6, 5, 2, 7, 11, 10),
(17, 11, 3, 9, 4, 1, 10, 5, 6, 7, 8, 2, 12),
(18, 5, 11, 6, 9, 4, 1, 12, 8, 10, 2, 3, 7),
(19, 7, 10, 11, 3, 9, 4, 1, 12, 8, 5, 6, 2),
(20, 2, 7, 5, 12, 3, 9, 10, 1, 4, 6, 8, 11),
(21, 12, 2, 8, 5, 10, 3, 9, 4, 1, 11, 7, 6),
(22, 10, 12, 2, 7, 6, 11, 3, 9, 5, 1, 4, 8),
(23, 8, 6, 12, 10, 7, 2, 11, 3, 9, 4, 1, 5),
(24, 6, 8, 7, 11, 2, 12, 4, 10, 3, 9, 5, 1),
(25, 1, 6, 10, 3, 2, 8, 7, 4, 11, 5, 12, 9),
(26, 4, 1, 3, 8, 6, 7, 2, 11, 12, 9, 5, 10),
(27, 9, 4, 1, 5, 10, 11, 12, 7, 6, 8, 2, 3),
(28, 3, 9, 4, 1, 11, 5, 6, 8, 7, 2, 10, 12),
(29, 11, 3, 9, 4, 1, 6, 8, 2, 10, 12, 7, 5),
(30, 5, 11, 8, 9, 4, 1, 3, 12, 2, 10, 6, 7),
(31, 7, 5, 11, 12, 9, 4, 1, 10, 8, 6, 3, 2),
(32, 2, 7, 5, 11, 3, 12, 10, 6, 4, 1, 9, 8),
(33, 12, 2, 6, 10, 8, 3, 9, 1, 5, 7, 4, 11),
(34, 10, 12, 2, 7, 5, 9, 11, 3, 1, 4, 8, 6),
(35, 8, 10, 12, 6, 7, 2, 4, 5, 9, 3, 11, 1),
(36, 6, 8, 7, 2, 12, 10, 5, 9, 3, 11, 1, 4),
(37, 1, 3, 10, 6, 9, 12, 7, 5, 11, 2, 4, 8),
(38, 4, 1, 3, 8, 6, 5, 2, 7, 12, 10, 11, 9),
(39, 9, 4, 1, 12, 8, 2, 10, 11, 6, 3, 5, 7),
(40, 3, 9, 4, 1, 11, 8, 6, 12, 2, 5, 7, 10),
(41, 11, 7, 9, 4, 1, 6, 8, 2, 10, 12, 3, 5),
(42, 5, 11, 8, 9, 12, 1, 3, 4, 7, 6, 10, 2),
(43, 7, 5, 11, 2, 3, 4, 1, 10, 8, 9, 12, 6),
(44, 2, 10, 5, 3, 4, 9, 12, 8, 1, 7, 6, 11),
(45, 12, 2, 6, 5, 10, 7, 9, 1, 3, 11, 8, 4),
(46, 10, 12, 2, 7, 5, 3, 11, 6, 4, 8, 9, 1),
(47, 8, 6, 12, 10, 7, 11, 4, 9, 5, 1, 2, 3),
(48, 6, 8, 7, 11, 2, 10, 5, 3, 9, 4, 1, 12),
(49, 1, 7, 10, 6, 12, 2, 8, 4, 11, 9, 3, 5),
(50, 4, 1, 8, 3, 6, 12, 5, 11, 2, 7, 10, 9),
(51, 9, 4, 1, 2, 8, 3, 12, 6, 7, 10, 5, 11),
(52, 3, 9, 4, 1, 11, 7, 2, 12, 5, 8, 6, 10),
(53, 11, 10, 7, 4, 1, 6, 3, 9, 12, 5, 8, 2),
(54, 5, 11, 3, 9, 4, 1, 6, 2, 10, 12, 7, 8),
(55, 7, 5, 11, 8, 3, 9, 1, 10, 6, 4, 2, 12),
(56, 2, 3, 5, 11, 9, 4, 10, 1, 8, 6, 12, 7),
(57, 12, 2, 6, 5, 10, 8, 9, 7, 4, 11, 1, 3),
(58, 10, 12, 2, 7, 5, 11, 4, 8, 3, 1, 9, 6),
(59, 8, 6, 12, 10, 7, 5, 11, 3, 9, 2, 4, 1),
(60, 6, 8, 9, 12, 2, 10, 7, 5, 1, 3, 11, 4),
(61, 1, 11, 10, 6, 12, 2, 4, 7, 8, 9, 5, 3),
(62, 4, 1, 6, 8, 3, 12, 2, 10, 9, 5, 7, 11),
(63, 9, 4, 1, 2, 8, 6, 12, 11, 7, 3, 10, 5),
(64, 3, 9, 4, 1, 6, 8, 7, 12, 5, 2, 11, 10),
(65, 11, 2, 9, 4, 1, 5, 8, 3, 10, 12, 6, 7),
(66, 5, 10, 3, 9, 2, 1, 6, 8, 11, 7, 12, 4),
(67, 7, 5, 11, 3, 10, 4, 1, 9, 12, 6, 8, 2),
(68, 2, 3, 5, 11, 9, 7, 10, 1, 6, 8, 4, 12),
(69, 12, 8, 7, 5, 11, 3, 9, 4, 1, 10, 2, 6),
(70, 10, 12, 2, 7, 5, 11, 3, 6, 4, 1, 9, 8),
(71, 8, 6, 12, 10, 7, 2, 11, 5, 2, 4, 3, 1),
(72, 6, 7, 8, 12, 4, 10, 5, 2, 3, 11, 1, 9),
(73, 1, 4, 10, 6, 12, 11, 7, 8, 2, 12, 9, 3),
(74, 4, 2, 3, 8, 6, 12, 1, 11, 7, 10, 5, 9),
(75, 9, 10, 1, 3, 8, 6, 2, 7, 5, 4, 12, 11),
(76, 3, 9, 6, 1, 2, 8, 5, 12, 11, 7, 10, 4),
(77, 11, 3, 9, 4, 1, 2, 8, 10, 12, 6, 7, 5),
(78, 5, 11, 4, 9, 7, 1, 6, 2, 10, 12, 3, 8),
(79, 7, 5, 11, 2, 9, 4, 12, 6, 3, 1, 8, 10),
(80, 2, 8, 5, 11, 4, 7, 10, 3, 1, 9, 6, 12),
(81, 12, 1, 7, 5, 11, 10, 9, 4, 8, 3, 2, 6),
(82, 10, 12, 2, 7, 5, 3, 4, 9, 6, 8, 11, 1),
(83, 8, 6, 12, 10, 3, 5, 11, 1, 9, 2, 4, 7),
(84, 6, 7, 8, 12, 10, 9, 3, 5, 4, 11, 1, 2),
(85, 1, 3, 10, 6, 12, 2, 8, 11, 5, 4, 9, 7),
(86, 4, 1, 8, 3, 6, 12, 11, 2, 7, 9, 10, 5),
(87, 9, 4, 1, 7, 3, 8, 12, 5, 2, 6, 11, 10),
(88, 3, 9, 4, 1, 8, 10, 2, 7, 12, 5, 6, 11),
(89, 11, 10, 9, 4, 1, 6, 7, 12, 3, 8, 5, 2),
(90, 5, 11, 6, 9, 4, 1, 3, 8, 10, 2, 7, 12),
(91, 7, 5, 11, 2, 10, 4, 6, 9, 8, 3, 12, 1),
(92, 2, 7, 5, 11, 9, 3, 10, 4, 1, 12, 8, 6),
(93, 12, 8, 7, 5, 2, 11, 9, 1, 6, 10, 3, 4),
(94, 10, 12, 2, 8, 11, 5, 4, 6, 9, 7, 1, 3),
(95, 8, 6, 12, 10, 5, 7, 1, 3, 4, 11, 2, 9),
(96, 6, 2, 3, 12, 7, 9, 5, 10, 11, 1, 4, 8),
(97, 1, 9, 10, 6, 12, 2, 7, 5, 3, 4, 8, 11),
(98, 4, 1, 6, 8, 10, 12, 11, 2, 9, 7, 3, 5),
(99, 9, 4, 1, 2, 6, 8, 12, 11, 5, 3, 10, 7),
(100, 3, 10, 8, 1, 2, 7, 6, 12, 2, 9, 11, 4),
(101, 11, 3, 9, 4, 1, 6, 8, 10, 7, 5, 12, 2),
(102, 5, 11, 3, 9, 4, 1, 2, 6, 8, 12, 7, 10),
(103, 7, 5, 11, 3, 9, 4, 1, 8, 12, 10, 2, 6),
(104, 2, 7, 5, 11, 3, 9, 10, 1, 6, 8, 4, 12),
(105, 12, 2, 4, 5, 11, 3, 9, 7, 10, 6, 1, 8),
(106, 10, 12, 2, 7, 8, 5, 3, 9, 4, 11, 6, 1),
(107, 8, 6, 12, 10, 7, 11, 4, 3, 1, 2, 5, 9),
(108, 6, 8, 7, 12, 2, 10, 5, 4, 11, 1, 9, 3),
(109, 1, 9, 10, 6, 12, 2, 7, 11, 5, 3, 4, 8),
(110, 4, 1, 6, 8, 10, 12, 3, 5, 7, 2, 11, 9),
(111, 9, 4, 1, 2, 5, 8, 12, 10, 6, 7, 3, 11),
(112, 3, 10, 8, 9, 11, 7, 4, 1, 2, 12, 6, 5),
(113, 11, 3, 9, 4, 1, 6, 2, 7, 10, 5, 8, 12),
(114, 5, 11, 3, 1, 4, 10, 6, 8, 12, 9, 7, 2),
(115, 7, 5, 11, 3, 9, 4, 1, 12, 8, 10, 2, 6),
(116, 2, 7, 5, 11, 3, 9, 10, 6, 4, 8, 12, 1),
(117, 12, 2, 4, 5, 6, 1, 8, 9, 3, 11, 10, 7),
(118, 10, 12, 2, 7, 8, 11, 9, 3, 1, 6, 5, 4),
(119, 8, 6, 12, 10, 7, 5, 11, 2, 9, 4, 1, 3),
(120, 6, 8, 7, 12, 2, 3, 5, 4, 11, 1, 9, 10);

-- --------------------------------------------------------

--
-- Table structure for table `birth kundali`
--

CREATE TABLE `birth kundali` (
  `House` int(11) NOT NULL,
  `Sun` int(11) NOT NULL,
  `Moon` int(11) NOT NULL,
  `Venus` int(11) NOT NULL,
  `Mars` int(11) NOT NULL,
  `Mercury` int(11) NOT NULL,
  `Jupiter` int(11) NOT NULL,
  `Saturn` int(11) NOT NULL,
  `Rahu` int(11) NOT NULL,
  `Ketu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birth kundali`
--

INSERT INTO `birth kundali` (`House`, `Sun`, `Moon`, `Venus`, `Mars`, `Mercury`, `Jupiter`, `Saturn`, `Rahu`, `Ketu`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `personalinfo`
--

CREATE TABLE `personalinfo` (
  `CustID` int(10) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `TOB` varchar(8) NOT NULL,
  `POB` varchar(50) NOT NULL,
  `Age` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year kundali1`
--

CREATE TABLE `year kundali1` (
  `House` int(11) NOT NULL,
  `Sun` int(11) NOT NULL,
  `Moon` int(11) NOT NULL,
  `Venus` int(11) NOT NULL,
  `Mars` int(11) NOT NULL,
  `Mercury` int(11) NOT NULL,
  `Jupiter` int(11) NOT NULL,
  `Saturn` int(11) NOT NULL,
  `Rahu` int(11) NOT NULL,
  `Ketu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year kundali2`
--

CREATE TABLE `year kundali2` (
  `House` int(11) NOT NULL,
  `Sun` int(11) NOT NULL,
  `Moon` int(11) NOT NULL,
  `Venus` int(11) NOT NULL,
  `Mars` int(11) NOT NULL,
  `Mercury` int(11) NOT NULL,
  `Jupiter` int(11) NOT NULL,
  `Saturn` int(11) NOT NULL,
  `Rahu` int(11) NOT NULL,
  `Ketu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year kundali3`
--

CREATE TABLE `year kundali3` (
  `House` int(11) NOT NULL,
  `Sun` int(11) NOT NULL,
  `Moon` int(11) NOT NULL,
  `Venus` int(11) NOT NULL,
  `Mars` int(11) NOT NULL,
  `Mercury` int(11) NOT NULL,
  `Jupiter` int(11) NOT NULL,
  `Saturn` int(11) NOT NULL,
  `Rahu` int(11) NOT NULL,
  `Ketu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year kundali4`
--

CREATE TABLE `year kundali4` (
  `House` int(11) NOT NULL,
  `Sun` int(11) NOT NULL,
  `Moon` int(11) NOT NULL,
  `Venus` int(11) NOT NULL,
  `Mars` int(11) NOT NULL,
  `Mercury` int(11) NOT NULL,
  `Jupiter` int(11) NOT NULL,
  `Saturn` int(11) NOT NULL,
  `Rahu` int(11) NOT NULL,
  `Ketu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year kundali5`
--

CREATE TABLE `year kundali5` (
  `House` int(11) NOT NULL,
  `Sun` int(11) NOT NULL,
  `Moon` int(11) NOT NULL,
  `Venus` int(11) NOT NULL,
  `Mars` int(11) NOT NULL,
  `Mercury` int(11) NOT NULL,
  `Jupiter` int(11) NOT NULL,
  `Saturn` int(11) NOT NULL,
  `Rahu` int(11) NOT NULL,
  `Ketu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year kundali6`
--

CREATE TABLE `year kundali6` (
  `House` int(11) NOT NULL,
  `Sun` int(11) NOT NULL,
  `Moon` int(11) NOT NULL,
  `Venus` int(11) NOT NULL,
  `Mars` int(11) NOT NULL,
  `Mercury` int(11) NOT NULL,
  `Jupiter` int(11) NOT NULL,
  `Saturn` int(11) NOT NULL,
  `Rahu` int(11) NOT NULL,
  `Ketu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year kundali7`
--

CREATE TABLE `year kundali7` (
  `House` int(11) NOT NULL,
  `Sun` int(11) NOT NULL,
  `Moon` int(11) NOT NULL,
  `Venus` int(11) NOT NULL,
  `Mars` int(11) NOT NULL,
  `Mercury` int(11) NOT NULL,
  `Jupiter` int(11) NOT NULL,
  `Saturn` int(11) NOT NULL,
  `Rahu` int(11) NOT NULL,
  `Ketu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year kundali8`
--

CREATE TABLE `year kundali8` (
  `House` int(11) NOT NULL,
  `Sun` int(11) NOT NULL,
  `Moon` int(11) NOT NULL,
  `Venus` int(11) NOT NULL,
  `Mars` int(11) NOT NULL,
  `Mercury` int(11) NOT NULL,
  `Jupiter` int(11) NOT NULL,
  `Saturn` int(11) NOT NULL,
  `Rahu` int(11) NOT NULL,
  `Ketu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year kundali9`
--

CREATE TABLE `year kundali9` (
  `House` int(11) NOT NULL,
  `Sun` int(11) NOT NULL,
  `Moon` int(11) NOT NULL,
  `Venus` int(11) NOT NULL,
  `Mars` int(11) NOT NULL,
  `Mercury` int(11) NOT NULL,
  `Jupiter` int(11) NOT NULL,
  `Saturn` int(11) NOT NULL,
  `Rahu` int(11) NOT NULL,
  `Ketu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year kundali10`
--

CREATE TABLE `year kundali10` (
  `House` int(11) NOT NULL,
  `Sun` int(11) NOT NULL,
  `Moon` int(11) NOT NULL,
  `Venus` int(11) NOT NULL,
  `Mars` int(11) NOT NULL,
  `Mercury` int(11) NOT NULL,
  `Jupiter` int(11) NOT NULL,
  `Saturn` int(11) NOT NULL,
  `Rahu` int(11) NOT NULL,
  `Ketu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year kundali11`
--

CREATE TABLE `year kundali11` (
  `House` int(11) NOT NULL,
  `Sun` int(11) NOT NULL,
  `Moon` int(11) NOT NULL,
  `Venus` int(11) NOT NULL,
  `Mars` int(11) NOT NULL,
  `Mercury` int(11) NOT NULL,
  `Jupiter` int(11) NOT NULL,
  `Saturn` int(11) NOT NULL,
  `Rahu` int(11) NOT NULL,
  `Ketu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year kundali12`
--

CREATE TABLE `year kundali12` (
  `House` int(11) NOT NULL,
  `Sun` int(11) NOT NULL,
  `Moon` int(11) NOT NULL,
  `Venus` int(11) NOT NULL,
  `Mars` int(11) NOT NULL,
  `Mercury` int(11) NOT NULL,
  `Jupiter` int(11) NOT NULL,
  `Saturn` int(11) NOT NULL,
  `Rahu` int(11) NOT NULL,
  `Ketu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `120 years`
--
ALTER TABLE `120 years`
  ADD PRIMARY KEY (`Age`);

--
-- Indexes for table `birth kundali`
--
ALTER TABLE `birth kundali`
  ADD PRIMARY KEY (`House`);

--
-- Indexes for table `personalinfo`
--
ALTER TABLE `personalinfo`
  ADD PRIMARY KEY (`CustID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `120 years`
--
ALTER TABLE `120 years`
  MODIFY `Age` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `birth kundali`
--
ALTER TABLE `birth kundali`
  MODIFY `House` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personalinfo`
--
ALTER TABLE `personalinfo`
  MODIFY `CustID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
