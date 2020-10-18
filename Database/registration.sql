-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 04:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE `ambulance` (
  `id` int(12) NOT NULL,
  `Ambulance` varchar(255) NOT NULL,
  `ContactNumbers` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ambulance`
--

INSERT INTO `ambulance` (`id`, `Ambulance`, `ContactNumbers`) VALUES
(10, 'Private Ambulance', '018172872366');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `id` int(12) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Age` int(12) NOT NULL,
  `BloodGroup` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`id`, `Name`, `Age`, `BloodGroup`, `Contact`) VALUES
(1, 'Sadia Afrin', 23, 'B+', '01717014948'),
(2, 'Jasmin Jahan Puspo', 23, 'AB+', '01842429020'),
(3, 'Fatema', 23, 'A+', '01775460257'),
(4, 'Mortoza Ali', 53, 'O+', '01747704821'),
(5, 'Anika', 18, 'O+', '01972429020'),
(6, 'Borhan Uddin', 44, 'A+', '01712246504');

-- --------------------------------------------------------

--
-- Table structure for table `dc`
--

CREATE TABLE `dc` (
  `id` int(12) NOT NULL,
  `DiagnosticCenters` varchar(255) NOT NULL,
  `Locations` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dc`
--

INSERT INTO `dc` (`id`, `DiagnosticCenters`, `Locations`) VALUES
(2, 'IBN CINA Diagnostic ', 'Rikabibazar,Sylhet'),
(3, 'Popular Diagnostic', 'Mirboxtula,Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `diagnostic`
--

CREATE TABLE `diagnostic` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diagnostic`
--

INSERT INTO `diagnostic` (`id`) VALUES
(0),
(0),
(0);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(12) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Specialist` varchar(255) NOT NULL,
  `Chamber` varchar(255) NOT NULL,
  `Tim` varchar(255) NOT NULL,
  `Days` varchar(255) NOT NULL,
  `Fees` int(12) NOT NULL,
  `Contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `Name`, `Specialist`, `Chamber`, `Tim`, `Days`, `Fees`, `Contact`) VALUES
(1, 'Dr. Tasmia Zerin', 'MBBS,FCPS', 'Osmani', '10am-2pm', 'Sat-Thurs', 500, '01722558023'),
(2, 'Dr. Md. Rafikujjaman Khan', 'MBBS,FCPS,Cancer Specialist', 'Comfort Medical Services', '5pm-7pm', 'Sun-Tuesday', 500, '01732499000'),
(3, 'Ziaur Rahman', 'MBBS,BCS', '34/B,Stadium Market', '5pm-9pm', 'Sun-Wed', 700, '01712246504'),
(5, 'Mortoza Ali', 'MBBS,BCS', 'Al-Amin Diagnostic', '7pm-9pm', 'Sat-Wed', 500, '01747704821'),
(7, 'Borhan Uddin', 'FCPS', 'Kajolshah', '4.00-6.00', 'Sat-Thru', 600, '01676490156'),
(8, 'Saymol Chandra', 'Medicine', '31/B,Stadium Market', '5.00-9.00', 'Sat-Thru', 700, '01717929977');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'afrin', 'a@gmail.com', '1234'),
(2, 'afrin', 'a@gmail.com', '1234'),
(3, 'Admin', 'b@gmail.com', '1234'),
(4, 'p', 'p@gmail.com', '123'),
(5, 'nirfa', 'iamalooser420@@@', '4321'),
(6, 'sadia', 'afrinsadia139.as@gmail.com', '0863'),
(7, '', '', ''),
(8, 'afrin', 'afrinsadia139.as@gmail.com', '12345'),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ambulance`
--
ALTER TABLE `ambulance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dc`
--
ALTER TABLE `dc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ambulance`
--
ALTER TABLE `ambulance`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bloodbank`
--
ALTER TABLE `bloodbank`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dc`
--
ALTER TABLE `dc`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
