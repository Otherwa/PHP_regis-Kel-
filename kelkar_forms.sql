-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 03:48 PM
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
  `cname` varchar(20) NOT NULL,
  `division` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activectrlid`
--

INSERT INTO `activectrlid` (`ctrlid`, `name`, `cname`, `division`) VALUES
('1234567890', 'TEST CAse', 'BAF', 'C'),
('2018060625', '', 'FYIT', 'A'),
('2018060712', 'XYZ', 'FYIT', 'A'),
('2018060739', '', 'FYIT', 'A'),
('2018060745', '', 'FYIT', 'B'),
('2018060747', '', 'FYIT', 'A'),
('2018060762', '', 'FYIT', 'A'),
('2018060848', '', 'FYIT', 'A'),
('2018060868', '', 'FYIT', 'A'),
('2018060966', '', 'FYIT', 'A'),
('2018061299', '', 'FYIT', 'A'),
('2018061379', '', 'FYIT', 'A'),
('2018062037', '', 'FYIT', 'A'),
('2018062080', '', 'FYIT', 'A'),
('2020080153', '', 'FYIT', 'A'),
('2020080154', '', 'FYIT', 'A'),
('2020080155', '', 'FYIT', 'A'),
('2020080157', '', 'FYIT', 'A'),
('2020080158', '', 'FYIT', 'A'),
('2020080160', '', 'FYIT', 'A'),
('2020080161', '', 'FYIT', 'A'),
('2020080162', '', 'FYIT', 'A'),
('2020080163', '', 'FYIT', 'A'),
('2020080165', '', 'FYIT', 'A'),
('2020080167', '', 'FYIT', 'A'),
('2020080169', '', 'FYIT', 'A'),
('2020080170', '', 'FYIT', 'A'),
('2020080171', '', 'FYIT', 'A'),
('2020080173', '', 'FYIT', 'A'),
('2020080174', '', 'FYIT', 'A'),
('2020080177', '', 'FYIT', 'A'),
('2020080178', '', 'FYIT', 'A'),
('2020080253', '', 'FYIT', 'A'),
('2020080257', '', 'FYIT', 'A'),
('2020080266', '', 'FYIT', 'A'),
('2020080273', '', 'FYIT', 'A'),
('2020080274', '', 'FYIT', 'A'),
('2020080276', '', 'FYIT', 'A'),
('2020080287', '', 'FYIT', 'A'),
('2020080289', 'Atharv Ankush Desai', 'FYIT', 'A'),
('2020080401', '', 'FYIT', 'A'),
('2020080445', '', 'FYIT', 'A'),
('2020080446', '', 'FYIT', 'A'),
('2020080462', '', 'FYIT', 'A'),
('2020080471', '', 'FYIT', 'A'),
('2020080542', '', 'FYIT', 'A'),
('2020080543', '', 'FYIT', 'A'),
('2020090599', '', 'FYIT', 'A'),
('2020090601', '', 'FYIT', 'A'),
('2020090602', '', 'FYIT', 'A'),
('2020090603', '', 'FYIT', 'A'),
('2020090606', '', 'FYIT', 'A'),
('2020090607', '', 'FYIT', 'A'),
('2020090608', '', 'FYIT', 'A'),
('2020090609', '', 'FYIT', 'A'),
('2020091734', '', 'FYIT', 'A'),
('2020091735', '', 'FYIT', 'A'),
('2020091736', '', 'FYIT', 'A'),
('2020101879', '', 'FYIT', 'A'),
('2021070007', '', 'FYIT', 'A'),
('2021070008', '', 'FYIT', 'A'),
('2021070009', '', 'FYIT', 'A'),
('2021070010', '', 'FYIT', 'A'),
('2021070011', '', 'FYIT', 'A'),
('2021070012', '', 'FYIT', 'A'),
('2021070014', '', 'FYIT', 'A'),
('2021070015', '', 'FYIT', 'A'),
('2021070016', '', 'FYIT', 'A'),
('2021070018', '', 'FYIT', 'A'),
('2021070019', '', 'FYIT', 'A');

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

INSERT INTO `answerpats` (`ctrlid`, `cname`, `tname`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `a23`, `a24`, `a25`, `a26`, `a27`, `a28`, `suggession`, `division`, `sem`, `subject`, `academic_year`, `Time`) VALUES
('2020080289', 'FYIT', 'Mrs Nanda Rupnar ', 1, 2, 3, 4, 5, 6, 7, 1, 2, 2, 4, 5, 6, 4, 7, 1, 7, 5, '', 'A', 'I', 'Digital Electronics', '2021-2022', '2022-06-17 13:43:10'),
('2020080289', 'FYIT', 'Mrs Pournima Bhangale', 7, 3, 7, 7, 3, 5, 2, 4, 5, 5, 4, 3, 4, 4, 2, 4, 4, 4, 'Nice', 'A', 'I', 'Imperative Programming', '2021-2022', '2022-06-17 12:18:56'),
('2020080289', 'FYIT', 'Mrs Nanda Rupnar ', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, '', 'A', 'II', 'Object Oriented Programming', '2021-2022', '2022-06-17 13:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `answersss`
--

CREATE TABLE `answersss` (
  `confirm` varchar(5) NOT NULL,
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

INSERT INTO `answersss` (`confirm`, `name`, `age`, `gender`, `rollno`, `class`, `programme`, `division`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `a23`, `a24`, `a25`, `a26`, `a27`, `Time`) VALUES
('yes', 'Atharv Desai', 19, 'Male', '1234567890', 'MSc', 'BSc', 'A', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '2022-05-26 05:56:13'),
('', 'Atharv Ankush Desai', 18, 'Default', '2020080289', 'FYIT', 'BSc-IT', 'A', 1, 5, 4, 5, 5, 4, 6, 5, 4, 5, 5, 5, 5, 5, 6, 7, 5, '2022-06-17 13:32:19');

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
('FYIT', 'Mrs Rakhee Rane', 'A', 'II', 'Microprocessor Architecture', 'Green Computing', '--', '2021-2022'),
('BAF', 'Mrs XYZ', 'A', 'I', '--', '--', '--', '2021-2022'),
('BCom', 'Mrs XYZ ', 'A', 'VI', '--', 'subject3', '--', '2021-2022'),
('BCom', 'Mrs xyz b', 'B', 'III', '--', '--', '--', '2021-2022');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
