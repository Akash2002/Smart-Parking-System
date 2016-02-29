-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2016 at 12:20 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techfair`
--

-- --------------------------------------------------------

--
-- Table structure for table `ledcontrol`
--

CREATE TABLE `ledcontrol` (
  `ID` int(11) NOT NULL,
  `Event` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ledPin` int(11) NOT NULL,
  `ledStatus` varchar(11) NOT NULL,
  `brightness` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ledcontrol`
--

INSERT INTO `ledcontrol` (`ID`, `Event`, `ledPin`, `ledStatus`, `brightness`) VALUES
(1, '2016-02-14 16:41:56', 4, 'ledon', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parkinglot`
--

CREATE TABLE `parkinglot` (
  `Id` int(11) NOT NULL,
  `Position` int(11) NOT NULL,
  `Available` int(11) NOT NULL,
  `SensorId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parkinglot`
--

INSERT INTO `parkinglot` (`Id`, `Position`, `Available`, `SensorId`) VALUES
(1, 1, 1, 100),
(3, 2, 1, 200),
(4, 3, 1, 300),
(5, 4, 0, 400),
(6, 5, 1, 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ledcontrol`
--
ALTER TABLE `ledcontrol`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `parkinglot`
--
ALTER TABLE `parkinglot`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ledcontrol`
--
ALTER TABLE `ledcontrol`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `parkinglot`
--
ALTER TABLE `parkinglot`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
