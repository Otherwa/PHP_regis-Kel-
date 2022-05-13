-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 08:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelkar_forms`
--

-- --------------------------------------------------------

--
-- Table structure for table `activectrlid`
--

CREATE TABLE `activectrlid` (
  `ctrlid` varchar(15) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `division` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activectrlid`
--

INSERT INTO `activectrlid` (`ctrlid`, `cname`, `division`) VALUES
('2020080289', 'TYIT', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(255) NOT NULL,
  `name` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `name`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answerpats`
--

CREATE TABLE `answerpats` (
  `ctrlid` varchar(15) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `tname` varchar(100) NOT NULL,
  `a11` int(1) NOT NULL,
  `a12` int(1) NOT NULL,
  `a13` int(1) NOT NULL,
  `a14` int(1) NOT NULL,
  `a15` int(1) NOT NULL,
  `a16` int(1) NOT NULL,
  `a17` int(1) NOT NULL,
  `a18` int(1) NOT NULL,
  `a19` int(1) NOT NULL,
  `a20` int(1) NOT NULL,
  `a21` int(1) NOT NULL,
  `a22` int(1) NOT NULL,
  `a23` int(1) NOT NULL,
  `a24` int(1) NOT NULL,
  `a25` int(1) NOT NULL,
  `a26` int(1) NOT NULL,
  `a27` int(1) NOT NULL,
  `a28` int(1) NOT NULL,
  `suggession` varchar(500) NOT NULL DEFAULT 'None',
  `division` varchar(1) NOT NULL DEFAULT 'A',
  `sem` varchar(6) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `academic_year` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answerpats`
--

INSERT INTO `answerpats` (`ctrlid`, `cname`, `tname`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `a23`, `a24`, `a25`, `a26`, `a27`, `a28`, `suggession`, `division`, `sem`, `subject`, `academic_year`) VALUES
('2020080289', 'FYIT', 'Mrs Nanda Rupnar ', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 'sugession', 'A', 'I', 'Digital Electronics', '2021-2022'),
('2020080289', 'FYIT', 'Mrs Pournima Bhangale', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 'None', 'A', 'I', 'Imperative Programming', '2021-2022'),
('2020080289', 'FYIT', 'Mrs Pranali Pawar', 7, 7, 1, 1, 2, 3, 4, 5, 6, 7, 1, 2, 3, 4, 5, 6, 7, 7, 'Noice', 'A', 'I', 'Discrete Mathematics', '2021-2022'),
('2020080289', 'SYIT', 'Mrs Mohini Bhole', 1, 2, 3, 4, 5, 6, 7, 7, 5, 2, 5, 7, 4, 6, 4, 6, 4, 6, 'Nice', 'A', 'IV', 'Computer Graphics And Animation', '2021-2022'),
('2020080289', 'SYIT', 'Mrs Mohini Bhole', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 'Noice', 'A', 'IV', 'Embedded Systems', '2021-2022'),
('2020080289', 'SYIT', 'Mrs Mohini Bhole', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 'Noice', 'A', 'IV', 'Software Engineering', '2021-2022');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `cname` varchar(20) NOT NULL,
  `tname` varchar(1000) NOT NULL,
  `division` varchar(1) NOT NULL,
  `sem` varchar(6) NOT NULL,
  `subject1` varchar(100) NOT NULL,
  `subject2` varchar(100) NOT NULL,
  `subject3` varchar(100) NOT NULL,
  `academic_year` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`cname`, `tname`, `division`, `sem`, `subject1`, `subject2`, `subject3`, `academic_year`) VALUES
('FYIT', 'Mrs Pournima Bhangale', 'A', 'I', 'Imperative Programming', '--', '--', '2021-2022'),
('FYIT', 'Mrs Nanda Rupnar ', 'A', 'I', 'Digital Electronics', '--', '--', '2021-2022'),
('FYIT', 'Mrs Vandana Kadam', 'A', 'I', 'Operating Systems', 'Communication Skills', '--', '2021-2022'),
('FYIT', 'Mrs Pranali Pawar', 'A', 'I', 'Discrete Mathematics', '--', '--', '2021-2022'),
('FYIT', 'Mrs Rakhee Rane', 'A', 'I', 'Digital Electronics', '--', '--', '2021-2022'),
('FYIT', 'Mrs Nanda Rupnar', 'A', 'II', 'Object Oriented Programming', '--', '--', '2021-2022'),
('FYIT', 'Mrs Pranali Pawar', 'A', 'II', 'Numerical And Statistical Mathematics', 'Web Programming', '--', '2021-2022'),
('FYIT', 'Mrs Rakhee Rane', 'A', 'II', 'Microprocessor Architecture', 'Green Computing', '--', '2021-2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activectrlid`
--
ALTER TABLE `activectrlid`
  ADD PRIMARY KEY (`ctrlid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `answerpats`
--
ALTER TABLE `answerpats`
  ADD PRIMARY KEY (`ctrlid`,`cname`,`tname`,`sem`,`subject`,`academic_year`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
