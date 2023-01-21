-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 01, 2022 at 05:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Table structure for table `AuditGet`
--

DROP TABLE IF EXISTS `AuditGet`;
CREATE TABLE `AuditGet` (
  `Audit_Num` int(11) NOT NULL,
  `Amt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `AuditImplements`
--

DROP TABLE IF EXISTS `AuditImplements`;
CREATE TABLE `AuditImplements` (
  `Audit_Num` int(11) DEFAULT NULL,
  `NAME` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` bigint(225) NOT NULL,
  `age` int(2) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `phone`, `age`, `address`) VALUES
(36372, 'Tiffany Kennedy', 'tk_711@gmail.com', 2367262290, 23, '9298 University Crescent'),
(46667, 'Reynold Ryan', 'rr_191@gmail.com', 2369897826, 27, '3437 Emerald Road'),
(54892, 'Ariel Rodriguez', 'ar_278@gmail.com', 7789276782, 38, '122 Highland Street');

-- --------------------------------------------------------

--
-- Table structure for table `HR`
--

DROP TABLE IF EXISTS `HR`;
CREATE TABLE `HR` (
  `Employee_ID` int(11) NOT NULL,
  `Fiscal_Years` int(11) DEFAULT NULL,
  `Address` char(50) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `PhoneNum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin'),
('AR278', 'Ariel_278');

-- --------------------------------------------------------

--
-- Table structure for table `Manager`
--

DROP TABLE IF EXISTS `Manager`;
CREATE TABLE `Manager` (
  `Employee_ID` int(11) NOT NULL,
  `Department_Name` char(50) DEFAULT NULL,
  `Address` char(50) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `PhoneNum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Monitors`
--

DROP TABLE IF EXISTS `Monitors`;
CREATE TABLE `Monitors` (
  `Employee_ID` int(11) NOT NULL,
  `Reason` char(50) DEFAULT NULL,
  `NoOfHours` int(11) DEFAULT NULL,
  `PhoneNum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payroll_gives_out`
--

DROP TABLE IF EXISTS `payroll_gives_out`;
CREATE TABLE `payroll_gives_out` (
  `stub_num` int(10) DEFAULT NULL,
  `pay_amount` decimal(19,2) DEFAULT NULL,
  `tax_deduction` decimal(19,2) DEFAULT NULL,
  `amount` decimal(19,2) DEFAULT NULL,
  `noofhours` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payroll_gives_out`
--

INSERT INTO `payroll_gives_out` (`stub_num`, `pay_amount`, `tax_deduction`, `amount`, `noofhours`) VALUES
(23452, '877.81', '90.98', '786.83', '10h 16m'),
(34890, '701.07', '51.53', '649.54', '10h 9m');

-- --------------------------------------------------------

--
-- Table structure for table `project_works_on`
--

DROP TABLE IF EXISTS `project_works_on`;
CREATE TABLE `project_works_on` (
  `id` int(10) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `active` varchar(3) DEFAULT NULL,
  `project_id` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_works_on`
--

INSERT INTO `project_works_on` (`id`, `start_date`, `end_date`, `active`, `project_id`) VALUES
(12345, '2022-07-04', '2022-07-19', 'no', 4356785),
(27365, '2019-05-22', '2020-09-19', 'No', 3244359880),
(36372, '2015-11-15', '2023-02-25', 'Yes', 3326349867),
(54892, '2015-01-20', '2020-02-20', 'No', 3190300568);

-- --------------------------------------------------------

--
-- Table structure for table `working_hours`
--

DROP TABLE IF EXISTS `working_hours`;
CREATE TABLE `working_hours` (
  `id` int(10) NOT NULL,
  `clock_in_time` time DEFAULT NULL,
  `clock_out_time` time DEFAULT NULL,
  `noofhours` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `working_hours`
--

INSERT INTO `working_hours` (`id`, `clock_in_time`, `clock_out_time`, `noofhours`) VALUES
(36372, '19:40:00', '17:56:00', '10h 16m'),
(54892, '08:00:00', '18:09:00', '10h 9m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AuditGet`
--
ALTER TABLE `AuditGet`
  ADD PRIMARY KEY (`Audit_Num`);

--
-- Indexes for table `AuditImplements`
--
ALTER TABLE `AuditImplements`
  ADD PRIMARY KEY (`NAME`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `HR`
--
ALTER TABLE `HR`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `Manager`
--
ALTER TABLE `Manager`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `Monitors`
--
ALTER TABLE `Monitors`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `payroll_gives_out`
--
ALTER TABLE `payroll_gives_out`
  ADD PRIMARY KEY (`noofhours`);

--
-- Indexes for table `project_works_on`
--
ALTER TABLE `project_works_on`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `working_hours`
--
ALTER TABLE `working_hours`
  ADD PRIMARY KEY (`id`,`noofhours`),
  ADD KEY `noofhours` (`noofhours`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54893;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `working_hours`
--
ALTER TABLE `working_hours`
  ADD CONSTRAINT `working_hours_ibfk_1` FOREIGN KEY (`id`) REFERENCES `project_works_on` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `working_hours_ibfk_2` FOREIGN KEY (`noofhours`) REFERENCES `payroll_gives_out` (`noofhours`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
