-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 05:52 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `companyuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `companyinfo`
--

CREATE TABLE `companyinfo` (
  `ID` int(4) NOT NULL,
  `CompanyName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companyinfo`
--

INSERT INTO `companyinfo` (`ID`, `CompanyName`, `Password`, `Email`, `Address`) VALUES
(1, 'MORGAN STANLEY', 'bgdjos', 'microsoft@123gmail.com', 'Newyork -USA 400097'),
(2, 'MICROSOFT', 'Micro', 'microsoft@123gmail.com', 'Venezeula -223-040');

-- --------------------------------------------------------

--
-- Table structure for table `companyreq`
--

CREATE TABLE `companyreq` (
  `ID` int(2) NOT NULL,
  `MinCGPA` float NOT NULL,
  `backlogs` int(11) NOT NULL,
  `Company` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companyreq`
--

INSERT INTO `companyreq` (`ID`, `MinCGPA`, `backlogs`, `Company`) VALUES
(1, 5, 1, 'Morgan Stanley'),
(3, 8, 0, 'Microsoft'),
(4, 8.5, 2, 'UBS Max');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companyinfo`
--
ALTER TABLE `companyinfo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `companyreq`
--
ALTER TABLE `companyreq`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companyinfo`
--
ALTER TABLE `companyinfo`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companyreq`
--
ALTER TABLE `companyreq`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
