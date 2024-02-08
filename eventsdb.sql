-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2024 at 05:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminID` int(11) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminID`, `emailAddress`, `password`) VALUES
(1, 'eesparto@gmail.com', '1'),
(2, 'jasbaet@gmail.com', '2'),
(3, 'lilacgoodrich@gmail.com', '3'),
(4, 'kennethodgien@gmail.com', '4');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `participantID` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `yearCourse` varchar(255) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `studentNumber` varchar(255) NOT NULL,
  `eventReg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`participantID`, `fullName`, `yearCourse`, `emailAddress`, `studentNumber`, `eventReg`) VALUES
(1, 'Erwin Esparto', 'BSIT 3-1', 'eesparto@gmail.com', '2021-00000-BN-0', 'IBITS Week'),
(2, 'Lilac Goodrich', 'BSIT 3-1', 'lilacgoodrich@gmail.com', '2021-00123-BN-0', 'Year-End Party'),
(3, 'Kenneth Odgien', 'BSIT 3-1', 'kennethodgien@gmail.com', '2021-00456-BN-0', 'Year-New Party'),
(4, 'Jaspher Baet', 'BSIT 3-1', 'jaspherbaet@gmail.com', '2021-00789-BN-0', 'Valentines');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`participantID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `participantID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
