-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 05:51 PM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentvalidate`
--

CREATE TABLE `studentvalidate` (
  `ID` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `divison` char(1) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `CGPA` double NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `dob` date NOT NULL,
  `backlogs` int(2) NOT NULL,
  `Upload_pdf` text NOT NULL,
  `verified` int(1) NOT NULL DEFAULT 0,
  `Gender` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentvalidate`
--

INSERT INTO `studentvalidate` (`ID`, `roll_no`, `username`, `password`, `Name`, `divison`, `Email`, `Branch`, `CGPA`, `phone_no`, `dob`, `backlogs`, `Upload_pdf`, `verified`, `Gender`) VALUES
(8, 6689, 'priya', 'priya125', 'Priya Shetty', '', 'priya125@gmail.com', 'Computer', 8.8, 0, '1997-08-11', 0, '', 1, 'F'),
(10, 6799, 'Shyam', 'shyam1', 'Shyam Pal', '', 'shyam123@g,ail.com', 'Production', 5.5, 0, '2001-01-12', 2, '', 0, ''),
(5, 6875, 'shaun', 'shaun911', 'Shaun Lopez', '', 'shaun123@gmail.com', 'Production', 6.1, 0, '1995-02-08', 1, '', 0, ''),
(7, 6999, 'rohan', 'rohan06', 'Rohan Rawat', '', 'rohan06@gmail.com', 'Mechanical ', 7.1, 0, '1998-06-08', 0, '', 0, ''),
(9, 8501, 'Neha', 'neha07', 'Neha Roy', '', 'neha07@gmail.com', 'Computer', 6, 0, '2001-11-11', 3, '', 0, ''),
(11, 8855, 'elon', 'spacex', 'Elon Musk', '', 'elonmusk@01gmail.com', 'Computer', 10, 0, '1991-01-08', 0, '', 1, ''),
(1, 8894, 'bhaven', 'bhaven123', 'Bhavendra S Panchal', '', 'bhaven1201@gmail.com', 'Computer', 9.39, 0, '2001-11-21', 0, '', 1, ''),
(3, 8895, 'meet', 'meet1234', 'Meet Parmar', '', 'meetparmar@gmail.com', 'Computer', 5.91, 0, '2000-10-07', 2, '', 0, 'M'),
(2, 8896, 'ronald', 'ron1234', 'Ronald Patrick', 'B', 'abc@gmail.com', 'Production', 9.66, 9834464827, '2000-01-12', 0, 'Resume_April2021.pdf', 1, 'M'),
(28, 8910, 'vivek', 'vivek123', 'Vivek Nakkash', 'A', 'vivek@gmail.com', 'Computers', 9.9, 9823452134, '2021-05-11', 2, 'OfferLetter (1).pdf', 0, ''),
(14, 8914, 'uttam', 'uttam123', 'Uttam Savaliya', 'A', 'uttam@gmail.com', 'Computers', 9.5, 8263846234, '2021-05-06', 0, 'flutter-basics-summary.pdf', 0, '');

--
-- Triggers `studentvalidate`
--
DELIMITER $$
CREATE TRIGGER `olddata_store` BEFORE DELETE ON `studentvalidate` FOR EACH ROW BEGIN
    INSERT INTO old_student_data(ID,roll_no,username,password,Name,Email,dob,branch)
    VALUES(OLD.ID,OLD.roll_no,OLD.username,OLD.password,OLD.Name,OLD.Email,OLD.dob,OLD.Branch);
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentvalidate`
--
ALTER TABLE `studentvalidate`
  ADD PRIMARY KEY (`roll_no`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentvalidate`
--
ALTER TABLE `studentvalidate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
