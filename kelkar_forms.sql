-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 12:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

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
  `name` text NOT NULL,
  `programme` text NOT NULL,
  `cname` varchar(20) NOT NULL,
  `division` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activectrlid`
--

INSERT INTO `activectrlid` (`ctrlid`, `name`, `programme`, `cname`, `division`) VALUES
('1234567890', 'TEST CAse', 'BAF', 'FYBAF', 'C'),
('2018060625', '', 'Bsc-IT', 'FYIT', 'A'),
('2018060712', 'XYZ', 'Bsc-IT', 'FYIT', 'D'),
('2018060739', '', 'Bsc-IT', 'FYIT', 'A'),
('2018060745', '', 'Bsc-IT', 'FYIT', 'B'),
('2018060747', '', 'Bsc-IT', 'FYIT', 'A'),
('2018060762', '', 'Bsc-IT', 'FYIT', 'A'),
('2018060848', '', 'Bsc-IT', 'FYIT', 'A'),
('2018060868', '', 'Bsc-IT', 'FYIT', 'A'),
('2018060966', '', 'Bsc-IT', 'FYIT', 'A'),
('2018061299', '', 'Bsc-IT', 'FYIT', 'A'),
('2018061379', '', 'Bsc-IT', 'FYIT', 'A'),
('2018062037', '', 'Bsc-IT', 'FYIT', 'A'),
('2018062080', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080153', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080154', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080155', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080157', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080158', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080160', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080161', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080162', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080163', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080165', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080167', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080169', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080170', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080171', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080173', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080174', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080177', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080178', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080253', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080257', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080266', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080273', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080274', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080276', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080287', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080289', 'Atharv Ankush Desai', 'Bsc-IT', 'FYIT', 'A'),
('2020080401', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080445', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080446', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080462', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080471', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080542', '', 'Bsc-IT', 'FYIT', 'A'),
('2020080543', '', 'Bsc-IT', 'FYIT', 'A'),
('2020090599', '', 'Bsc-IT', 'FYIT', 'A'),
('2020090601', '', 'Bsc-IT', 'FYIT', 'A'),
('2020090602', '', 'Bsc-IT', 'FYIT', 'A'),
('2020090603', '', 'Bsc-IT', 'FYIT', 'A'),
('2020090606', '', 'Bsc-IT', 'FYIT', 'A'),
('2020090607', '', 'Bsc-IT', 'FYIT', 'A'),
('2020090608', '', 'Bsc-IT', 'FYIT', 'A'),
('2020090609', '', 'Bsc-IT', 'FYIT', 'A'),
('2020091734', '', 'Bsc-IT', 'FYIT', 'A'),
('2020091735', '', 'Bsc-IT', 'FYIT', 'A'),
('2020091736', '', 'Bsc-IT', 'FYIT', 'A'),
('2020101879', '', 'Bsc-IT', 'FYIT', 'A'),
('2021070007', '', 'Bsc-IT', 'FYIT', 'A'),
('2021070008', '', 'Bsc-IT', 'FYIT', 'A'),
('2021070009', '', 'Bsc-IT', 'FYIT', 'A'),
('2021070010', '', 'Bsc-IT', 'FYIT', 'A'),
('2021070011', '', 'Bsc-IT', 'FYIT', 'A'),
('2021070012', '', 'Bsc-IT', 'FYIT', 'A'),
('2021070014', '', 'Bsc-IT', 'FYIT', 'A'),
('2021070015', '', 'Bsc-IT', 'FYIT', 'A'),
('2021070016', '', 'Bsc-IT', 'FYIT', 'A'),
('2021070018', '', 'Bsc-IT', 'FYIT', 'A'),
('2021070019', '', 'Bsc-IT', 'FYIT', 'A');

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
(1, 'admin', 'admin'),
(2, 'Atharv', 'Gokussj@12345');

-- --------------------------------------------------------

--
-- Table structure for table `answerfac`
--

CREATE TABLE `answerfac` (
  `faculty_name` varchar(20) NOT NULL,
  `year_service` varchar(20) NOT NULL,
  `department` varchar(10) NOT NULL,
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
  `a29` int(1) NOT NULL,
  `a30` int(1) NOT NULL,
  `a31` int(1) NOT NULL,
  `a32` int(1) NOT NULL,
  `a33` int(1) NOT NULL,
  `a34` int(1) NOT NULL,
  `a35` int(1) NOT NULL,
  `suggest1` varchar(100) NOT NULL,
  `suggest2` varchar(100) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `answerpats`
--

CREATE TABLE `answerpats` (
  `ctrlid` varchar(15) NOT NULL,
  `programme` text NOT NULL,
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
  `division` varchar(1) NOT NULL,
  `sem` varchar(6) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `academic_year` varchar(9) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answerpats`
--

INSERT INTO `answerpats` (`ctrlid`, `programme`, `cname`, `tname`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `a23`, `a24`, `a25`, `a26`, `a27`, `a28`, `suggession`, `division`, `sem`, `subject`, `academic_year`, `Time`) VALUES
('1234567890', 'Bsc-IT', 'TYIT', 'Mrs Pournima Bhangale', 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'None', 'A', 'II', 'asdasd', 'asda', '2022-06-28 10:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `answersss`
--

CREATE TABLE `answersss` (
  `name` varchar(30) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `class` varchar(10) NOT NULL,
  `programme` varchar(10) NOT NULL,
  `division` varchar(1) NOT NULL,
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
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answersss`
--

INSERT INTO `answersss` (`name`, `age`, `gender`, `rollno`, `class`, `programme`, `division`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `a23`, `a24`, `a25`, `a26`, `a27`, `Time`) VALUES
('Atharv Ankush Desai', 18, 'Male', '2020080289', 'FYIT', 'Bsc-IT', 'A', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 2, 2, '2022-06-23 11:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `Id` int(11) NOT NULL,
  `programme` text NOT NULL,
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

INSERT INTO `teachers` (`Id`, `programme`, `cname`, `tname`, `division`, `sem`, `subject1`, `subject2`, `subject3`, `academic_year`) VALUES
(1, 'Bsc-IT', 'FYIT', 'Mrs Pournima Bhangale', 'A', 'I', 'Imperative Programming', '--', '--', '2021-2022'),
(2, 'Bsc-IT', 'FYIT', 'Mrs Nanda Rupnar ', 'A', 'I', 'Digital Electronics', '--', '--', '2021-2022'),
(3, 'Bsc-IT', 'FYIT', 'Mrs Vandana Kadam', 'A', 'I', 'Operating Systems', 'Communication Skills', '--', '2021-2022'),
(4, 'Bsc-IT', 'FYIT', 'Mrs Pranali Pawar', 'A', 'I', 'Discrete Mathematics', '--', '--', '2021-2022'),
(5, 'Bsc-IT', 'FYIT', 'Mrs Rakhee Rane', 'A', 'I', 'Digital Electronics', '--', '--', '2021-2022'),
(6, 'Bsc-IT', 'FYIT', 'Mrs Nanda Rupnar', 'A', 'II', 'Object Oriented Programming', '--', '--', '2021-2022'),
(7, 'Bsc-IT', 'FYIT', 'Mrs Pranali Pawar', 'A', 'II', 'Numerical And Statistical Mathematics', 'Web Programming', '--', '2021-2022'),
(8, 'Bsc-IT', 'FYIT', 'Mrs Rakhee Rane', 'A', 'II', 'Microprocessor Architecture', 'Green Computing', '--', '2021-2022'),
(9, 'BAF', 'FYBAF', 'Mrs XYZ', 'A', 'I', '--1212', '--1212', '--1212', '2021-2022'),
(10, 'BAF', 'FYBAF', 'Mrs XYZ ', 'A', 'VI', '--', 'subject3', '--', '2021-2022'),
(11, 'BCom', 'FYBCom', 'Mrs xyz b', 'B', 'III', '--', '--', '--', '2021-2022');

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
  ADD PRIMARY KEY (`academic_year`,`subject`,`sem`,`ctrlid`,`cname`,`tname`);

--
-- Indexes for table `answersss`
--
ALTER TABLE `answersss`
  ADD PRIMARY KEY (`rollno`,`class`,`programme`) USING BTREE;

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
