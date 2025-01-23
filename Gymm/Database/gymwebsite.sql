-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 01:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `vName` varchar(32) NOT NULL,
  `vEmail` varchar(64) NOT NULL,
  `vMobile` varchar(32) NOT NULL,
  `vMessage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`vName`, `vEmail`, `vMobile`, `vMessage`) VALUES
('Sangram Patil', 'sangrampatil@gmail.com', '986856945', 'whats the price of cardio pkg'),
('Tanmay Patil', 'tanmaypatil8336@gmail.com', '523656622', 'hiii i am tanmay'),
('Shraddha Salokhe', 'shraddha11@gmail.com', '7447669326', 'hiiiii'),
('Prathamesh', 'Prathamesh@gmail.com', '8596523589', 'huuu');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `vName` varchar(32) NOT NULL,
  `vEmail` varchar(64) NOT NULL,
  `vPassword` varchar(32) NOT NULL,
  `vPhone` varchar(32) NOT NULL,
  `vPackage` varchar(64) NOT NULL,
  `vStartdate` varchar(64) NOT NULL,
  `vEnddate` varchar(32) NOT NULL,
  `vTime` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`vName`, `vEmail`, `vPassword`, `vPhone`, `vPackage`, `vStartdate`, `vEnddate`, `vTime`) VALUES
('Sahil Sutar', 'sahilsutar2326@gmail.com', '1234', '7447669326', 'Cardiovascular Training 799', '2023-06-22', '', '6-7 AM'),
('Tanmay balu patil ', 'tanmaypatil8336@gmail.com', 'p1234', '8530718336', 'Strength Training 599', '2023-05-22', '2023-05-30', '6-7 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`vEmail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
