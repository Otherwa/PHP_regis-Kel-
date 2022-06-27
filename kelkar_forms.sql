-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql301.epizy.com
-- Generation Time: Jun 27, 2022 at 12:41 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31577921_kelkar_forms`
--

-- --------------------------------------------------------

--
-- Table structure for table `activectrlid`
--

CREATE TABLE `activectrlid` (
  `ctrlid` varchar(15) NOT NULL,
  `name` text NOT NULL,
  `cname` varchar(20) NOT NULL,
  `programme` text NOT NULL,
  `division` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activectrlid`
--

INSERT INTO `activectrlid` (`ctrlid`, `name`, `cname`, `programme`, `division`) VALUES
('2018060625', 'Niranjan Gosavi', 'TYIT', 'Bsc-IT', 'A'),
('2018060712', 'Purva Kekan', 'TYIT', 'Bsc-IT', 'A'),
('2018060739', 'Ayush Shah', 'TYIT', 'Bsc-IT', 'A'),
('2018060747', 'Apurva Masdekar', 'TYIT', 'Bsc-IT', 'A'),
('2018060762', 'Pratham Haram', 'TYIT', 'Bsc-IT', 'A'),
('2018060868', 'Vishal Varma', 'TYIT', 'Bsc-IT', 'A'),
('2018060966', 'Priyanshu Tawde', 'TYIT', 'Bsc-IT', 'A'),
('2018061299', 'Namrata Pagare', 'TYIT', 'Bsc-IT', 'A'),
('2018061379', 'Harshali Ghode', 'TYIT', 'Bsc-IT', 'A'),
('2018062037', 'Prasad Jadhav', 'TYIT', 'Bsc-IT', 'A'),
('2018062080', 'Pratiksha Zhalte', 'TYIT', 'Bsc-IT', 'A'),
('2019060862', 'Gauri Palande', 'SYIT', 'Bsc-IT', 'A'),
('2019060868', 'Steven Thomas', 'SYIT', 'Bsc-IT', 'A'),
('2019060877', 'Kanisha Mokal', 'SYIT', 'Bsc-IT', 'A'),
('2019060938', 'Varun Pawar', 'SYIT', 'Bsc-IT', 'A'),
('2019061029', 'Mayuri Sawant', 'SYIT', 'Bsc-IT', 'A'),
('2019061131', 'Shubham Pol', 'SYIT', 'Bsc-IT', 'A'),
('2019061594', 'Sakshi Sarang', 'SYIT', 'Bsc-IT', 'A'),
('2020080153', 'Siddhi Dound', 'TYIT', 'Bsc-IT', 'A'),
('2020080154', 'Maithili Kasare', 'TYIT', 'Bsc-IT', 'A'),
('2020080155', 'Shikha Das', 'TYIT', 'Bsc-IT', 'A'),
('2020080157', 'Anuja Chalke', 'TYIT', 'Bsc-IT', 'A'),
('2020080158', 'Durvesh More', 'TYIT', 'Bsc-IT', 'A'),
('2020080160', 'Riya Kuckian', 'TYIT', 'Bsc-IT', 'A'),
('2020080161', 'Rekha Gupta', 'TYIT', 'Bsc-IT', 'A'),
('2020080162', 'Prathamesh Kathawate', 'TYIT', 'Bsc-IT', 'A'),
('2020080163', 'Abhishek Mandlik', 'TYIT', 'Bsc-IT', 'A'),
('2020080165', 'Amit Joshi', 'TYIT', 'Bsc-IT', 'A'),
('2020080169', 'Ragini Mallah', 'TYIT', 'Bsc-IT', 'A'),
('2020080170', 'Kinjal Patel', 'TYIT', 'Bsc-IT', 'A'),
('2020080171', 'Namrata Dinkar', 'TYIT', 'Bsc-IT', 'A'),
('2020080173', 'Prerna Kale', 'TYIT', 'Bsc-IT', 'A'),
('2020080174', 'Shravani Pawar', 'TYIT', 'Bsc-IT', 'A'),
('2020080178', 'Sanika Dhaneshwar', 'TYIT', 'Bsc-IT', 'A'),
('2020080253', 'Vijay Mane', 'TYIT', 'Bsc-IT', 'A'),
('2020080257', 'Harshala Sandge', 'TYIT', 'Bsc-IT', 'A'),
('2020080266', 'Vishal Ingale', 'TYIT', 'Bsc-IT', 'A'),
('2020080273', 'Deep Togani', 'TYIT', 'Bsc-IT', 'A'),
('2020080274', 'Aditi Thakore', 'TYIT', 'Bsc-IT', 'A'),
('2020080276', 'Aakash Kakade', 'TYIT', 'Bsc-IT', 'A'),
('2020080287', 'Kshama Shukla', 'TYIT', 'Bsc-IT', 'A'),
('2020080289', 'Atharv Desai', 'TYIT', 'Bsc-IT', 'A'),
('2020080401', 'Tanmay Salgaonkar', 'TYIT', 'Bsc-IT', 'A'),
('2020080445', 'Chetan Ghadi', 'TYIT', 'Bsc-IT', 'A'),
('2020080446', 'Komal Singh', 'TYIT', 'Bsc-IT', 'A'),
('2020080462', 'Surbhi Kunwar', 'TYIT', 'Bsc-IT', 'A'),
('2020080542', 'Prasad Koli', 'TYIT', 'Bsc-IT', 'A'),
('2020080543', 'Kavya Samala', 'TYIT', 'Bsc-IT', 'A'),
('2020090599', 'Neeraj More', 'TYIT', 'Bsc-IT', 'A'),
('2020090602', 'Swaraj Kamble', 'TYIT', 'Bsc-IT', 'A'),
('2020090603', 'Shubham Parab', 'TYIT', 'Bsc-IT', 'A'),
('2020090607', 'Anirudha Karandikar', 'TYIT', 'Bsc-IT', 'A'),
('2020090608', 'Mayuri Kharade', 'TYIT', 'Bsc-IT', 'A'),
('2020090609', 'Rujuta Salvi', 'TYIT', 'Bsc-IT', 'A'),
('2020091734', 'Jhanvi Pawar', 'TYIT', 'Bsc-IT', 'A'),
('2020091735', 'Siddharth Karanjekar', 'TYIT', 'Bsc-IT', 'A'),
('2020091736', 'Tejal Rane', 'TYIT', 'Bsc-IT', 'A'),
('2020101879', 'Divya Rao', 'TYIT', 'Bsc-IT', 'A'),
('2021070007', 'Pushkar Sane', 'TYIT', 'Bsc-IT', 'A'),
('2021070008', 'Atharva Walimbe', 'TYIT', 'Bsc-IT', 'A'),
('2021070009', 'Prathamesh Jadhav', 'TYIT', 'Bsc-IT', 'A'),
('2021070010', 'Anurag Shetty', 'TYIT', 'Bsc-IT', 'A'),
('2021070011', 'Vanshika Shetty', 'TYIT', 'Bsc-IT', 'A'),
('2021070012', 'Anuj Mhatre', 'TYIT', 'Bsc-IT', 'A'),
('2021070014', 'Khushi Saroj', 'TYIT', 'Bsc-IT', 'A'),
('2021070015', 'Sahil Tayade', 'TYIT', 'Bsc-IT', 'A'),
('2021070016', 'Kaivalya Kachale', 'TYIT', 'Bsc-IT', 'A'),
('2021070018', 'Devashish Sule', 'TYIT', 'Bsc-IT', 'A'),
('2021070019', 'Jahanvi Barot', 'TYIT', 'Bsc-IT', 'A'),
('2021080104', 'Vaidehi Kelkar', 'SYIT', 'Bsc-IT', 'A'),
('2021080120', 'Nandana Nair', 'SYIT', 'Bsc-IT', 'A'),
('2021080123', 'Anushka Dalvi', 'SYIT', 'Bsc-IT', 'A'),
('2021080137', 'Sakshi Sataye', 'SYIT', 'Bsc-IT', 'A'),
('2021080140', 'Abhidnya Tapal', 'SYIT', 'Bsc-IT', 'A'),
('2021080144', 'Pratik Kumbhar', 'SYIT', 'Bsc-IT', 'A'),
('2021080200', 'Gaurav Tukrul', 'SYIT', 'Bsc-IT', 'A'),
('2021080210', 'Akshit Gala', 'SYIT', 'Bsc-IT', 'A'),
('2021080289', 'Akshada Kadlak', 'SYIT', 'Bsc-IT', 'A'),
('2021080297', 'Prathamesh Karale', 'SYIT', 'Bsc-IT', 'A'),
('2021080314', 'Aaditya Pal', 'SYIT', 'Bsc-IT', 'A'),
('2021080316', 'Vandana Padhi', 'SYIT', 'Bsc-IT', 'A'),
('2021080317', 'Hrushikesh Shinde', 'SYIT', 'Bsc-IT', 'A'),
('2021080319', 'Tanvi Nimbalkar', 'SYIT', 'Bsc-IT', 'A'),
('2021080416', 'Sristi Shetty', 'SYIT', 'Bsc-IT', 'A'),
('2021080549', 'Sameeksha Kadam', 'SYIT', 'Bsc-IT', 'A'),
('2021090857', 'Omkar Gawade', 'SYIT', 'Bsc-IT', 'A'),
('2021091456', 'Aditi Patil', 'SYIT', 'Bsc-IT', 'A'),
('2021091690', 'Mahesh Shere', 'SYIT', 'Bsc-IT', 'A'),
('2021091963', 'Ruchita Kamble', 'SYIT', 'Bsc-IT', 'A'),
('2021092036', 'Yutika Patil', 'SYIT', 'Bsc-IT', 'A'),
('2021102285', 'Sanskruti Kolatharkar', 'SYIT', 'Bsc-IT', 'A'),
('2021112369', 'Aditi Giri', 'SYIT', 'Bsc-IT', 'A'),
('2021122389', 'Akanksha Joshi', 'SYIT', 'Bsc-IT', 'A');

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

--
-- Dumping data for table `answerfac`
--

INSERT INTO `answerfac` (`faculty_name`, `year_service`, `department`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `a23`, `a24`, `a25`, `a26`, `a27`, `a28`, `a29`, `a30`, `a31`, `a32`, `a33`, `a34`, `a35`, `suggest1`, `suggest2`, `Time`) VALUES
('Ty-bscit', '3', 'BSc-IT', 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '', '', '2022-06-27 05:29:24'),
('SY-BSC-IT', '2', 'BSc-IT', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'no', 'No', '2022-06-27 14:41:46');

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
('1234567890', 'BAF', 'Mrs XYZ', 1, 5, 6, 3, 3, 3, 3, 4, 6, 4, 5, 4, 5, 5, 4, 5, 3, 4, 'b,', 'A', 'I', 'adsdad', '2021-2022', '2022-06-17 15:46:07'),
('2018060712', 'TYIT', 'Mrs Vandana Kadam', 7, 7, 7, 4, 3, 5, 7, 1, 6, 3, 5, 5, 6, 5, 4, 5, 3, 1, 'nice', 'A', 'I', 'Communication Skills', '2021-2022', '2022-06-21 16:28:46'),
('2020080289', 'TYIT', 'Mrs Vandana Kadam', 7, 3, 5, 3, 4, 4, 3, 5, 3, 5, 4, 5, 4, 5, 3, 6, 4, 6, '', 'A', 'I', 'Communication Skills', '2021-2022', '2022-06-17 13:58:08'),
('2020091735', 'TYIT', 'Mrs Vandana Kadam', 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 'Nope.', 'A', 'I', 'Communication Skills', '2021-2022', '2022-06-27 05:29:27'),
('2021070009', 'TYIT', 'Mrs Vandana Kadam', 7, 7, 7, 6, 4, 6, 4, 4, 6, 5, 6, 5, 6, 5, 5, 6, 5, 6, '', 'A', 'I', 'Communication Skills', '2021-2022', '2022-06-27 05:27:43'),
('2019061594', 'SYIT', 'Mrs Pournima Bhangale', 3, 6, 5, 3, 5, 5, 3, 4, 6, 3, 3, 5, 3, 6, 7, 7, 7, 7, '2', 'A', 'III', 'DBMS', '2021-2022', '2022-06-27 14:37:09'),
('2021080317', 'SYIT', 'Mrs Pournima Bhangale', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 'Nice', 'A', 'III', 'DBMS', '2021-2022', '2022-06-27 14:38:20'),
('2021080549', 'SYIT', 'Mrs Pournima Bhangale', 6, 6, 5, 6, 6, 6, 7, 6, 4, 7, 6, 7, 6, 7, 6, 7, 6, 6, '', 'A', 'III', 'DBMS', '2021-2022', '2022-06-27 15:10:08'),
('2018060745', 'TYIT', 'Mrs Rakhee Rane', 4, 4, 4, 6, 5, 4, 5, 6, 5, 5, 4, 4, 4, 4, 4, 5, 5, 5, 'No suggestion', 'A', 'I', 'Digital Electronics', '2021-2022', '2022-06-27 05:27:39'),
('2018061299', 'TYIT', 'Mrs Nanda Rupnar ', 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 7, 5, '', 'A', 'I', 'Digital Electronics', '2021-2022', '2022-06-27 05:25:57'),
('2018062080', 'TYIT', 'Mrs Nanda Rupnar ', 7, 6, 2, 1, 1, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '.....', 'A', 'I', 'Digital Electronics', '2021-2022', '2022-06-27 05:26:13'),
('2020080155', 'TYIT', 'Mrs Nanda Rupnar ', 7, 6, 6, 5, 6, 5, 6, 5, 6, 6, 7, 5, 5, 5, 5, 5, 5, 4, 'None', 'A', 'I', 'Digital Electronics', '2021-2022', '2022-06-27 05:30:46'),
('2020080170', 'TYIT', 'Mrs Nanda Rupnar ', 7, 7, 5, 6, 7, 5, 6, 7, 6, 6, 5, 6, 5, 5, 5, 5, 6, 5, 'No ', 'A', 'I', 'Digital Electronics', '2021-2022', '2022-06-27 05:25:55'),
('2020080178', 'TYIT', 'Mrs Nanda Rupnar ', 6, 6, 6, 7, 5, 6, 6, 6, 6, 6, 5, 5, 6, 6, 6, 6, 6, 5, 'Nothing', 'A', 'I', 'Digital Electronics', '2021-2022', '2022-06-27 05:26:23'),
('2020080273', 'TYIT', 'Mrs Nanda Rupnar ', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '', 'A', 'I', 'Digital Electronics', '2021-2022', '2022-06-27 05:28:48'),
('2020080274', 'TYIT', 'Mrs Rakhee Rane', 5, 6, 6, 6, 6, 6, 6, 6, 6, 5, 6, 6, 6, 6, 7, 6, 6, 6, '', 'A', 'I', 'Digital Electronics', '2021-2022', '2022-06-27 05:26:42'),
('2020080289', 'TYIT', 'Mrs Nanda Rupnar ', 1, 2, 3, 4, 5, 6, 7, 1, 2, 2, 4, 5, 6, 4, 7, 1, 7, 5, '', 'A', 'I', 'Digital Electronics', '2021-2022', '2022-06-17 13:43:10'),
('2020080289', 'TYIT', 'Mrs Rakhee Rane', 5, 3, 3, 5, 5, 5, 5, 4, 2, 6, 1, 7, 5, 4, 7, 3, 6, 1, '', 'A', 'I', 'Digital Electronics', '2021-2022', '2022-06-17 14:46:17'),
('2020080543', 'TYIT', 'Mrs Nanda Rupnar ', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 6, 6, 7, 7, 7, 7, 5, 6, '', 'A', 'I', 'Digital Electronics', '2021-2022', '2022-06-27 05:28:19'),
('2020091734', 'TYIT', 'Mrs Rakhee Rane', 5, 5, 6, 7, 7, 6, 5, 5, 5, 6, 7, 5, 6, 6, 4, 5, 4, 4, 'Nothing ', 'A', 'I', 'Digital Electronics', '2021-2022', '2022-06-27 05:27:12'),
('2020091736', 'TYIT', 'Mrs Nanda Rupnar ', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '-', 'A', 'I', 'Digital Electronics', '2021-2022', '2022-06-27 05:25:54'),
('2021070007', 'TYIT', 'Mrs Nanda Rupnar ', 6, 5, 7, 3, 6, 5, 7, 7, 6, 5, 7, 5, 6, 7, 5, 6, 7, 6, 'Xyz 123', 'A', 'I', 'Digital Electronics', '2021-2022', '2022-06-24 03:09:50'),
('2021070008', 'TYIT', 'Mrs Nanda Rupnar ', 2, 6, 2, 7, 1, 4, 2, 1, 4, 2, 1, 3, 5, 6, 6, 6, 1, 7, '', 'A', 'I', 'Digital Electronics', '2021-2022', '2022-06-24 03:07:41'),
('2021070018', 'TYIT', 'Mrs Nanda Rupnar ', 6, 6, 5, 6, 7, 7, 7, 7, 6, 6, 4, 5, 6, 6, 6, 4, 5, 5, '', 'B', 'I', 'Digital Electronics', '2021-2022', '2022-06-27 05:27:26'),
('2021070018', 'TYIT', 'Mrs Rakhee Rane', 7, 7, 7, 6, 6, 3, 3, 3, 2, 5, 4, 4, 6, 5, 4, 2, 6, 4, '', 'C', 'I', 'Digital Electronics', '2021-2022', '2022-06-17 14:17:17'),
('2018060739', 'TYIT', 'Mrs Pranali Pawar', 6, 5, 6, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', 'A', 'I', 'Discrete Mathematics', '2021-2022', '2022-06-27 05:26:58'),
('2018060747', 'TYIT', 'Mrs Pranali Pawar', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '', 'A', 'I', 'Discrete Mathematics', '2021-2022', '2022-06-27 05:27:29'),
('2018060848', 'TYIT', 'Mrs Pranali Pawar', 5, 6, 5, 5, 6, 6, 6, 5, 5, 5, 5, 6, 5, 6, 6, 6, 5, 5, '.', 'A', 'I', 'Discrete Mathematics', '2021-2022', '2022-06-27 05:25:30'),
('2018060966', 'TYIT', 'Mrs Pranali Pawar', 6, 7, 7, 7, 7, 7, 7, 7, 6, 7, 6, 7, 6, 7, 7, 7, 7, 7, '', 'A', 'I', 'Discrete Mathematics', '2021-2022', '2022-06-27 05:28:50'),
('2018061379', 'TYIT', 'Mrs Pranali Pawar', 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 5, 6, 6, 6, 6, 6, 6, 6, 'No', 'A', 'I', 'Discrete Mathematics', '2021-2022', '2022-06-27 05:28:14'),
('2020080154', 'TYIT', 'Mrs Pranali Pawar', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '', 'A', 'I', 'Discrete Mathematics', '2021-2022', '2022-06-27 05:28:11'),
('2020080157', 'TYIT', 'Mrs Pranali Pawar', 6, 7, 6, 6, 7, 6, 7, 7, 7, 5, 6, 7, 7, 6, 6, 7, 6, 5, 'No ', 'A', 'I', 'Discrete Mathematics', '2021-2022', '2022-06-27 05:29:18'),
('2020080173', 'TYIT', 'Mrs Pranali Pawar', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'No', 'A', 'I', 'Discrete Mathematics', '2021-2022', '2022-06-27 05:28:05'),
('2020080174', 'TYIT', 'Mrs Pranali Pawar', 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 7, 6, 6, '', 'A', 'I', 'Discrete Mathematics', '2021-2022', '2022-06-27 05:26:51'),
('2020080253', 'TYIT', 'Mrs Pranali Pawar', 7, 6, 7, 6, 7, 6, 6, 7, 6, 7, 6, 7, 6, 7, 7, 6, 7, 6, '', 'A', 'I', 'Discrete Mathematics', '2021-2022', '2022-06-27 05:28:53'),
('2020080276', 'TYIT', 'Mrs Pranali Pawar', 5, 5, 5, 5, 6, 6, 5, 6, 7, 6, 5, 5, 7, 6, 6, 7, 6, 6, '.', 'A', 'I', 'Discrete Mathematics', '2021-2022', '2022-06-27 05:26:07'),
('2020080289', 'TYIT', 'Mrs Pranali Pawar', 5, 7, 1, 4, 2, 2, 3, 4, 5, 6, 7, 6, 6, 7, 7, 6, 5, 7, 'Nice', 'A', 'I', 'Discrete Mathematics', '2021-2022', '2022-06-17 14:06:37'),
('2020080401', 'TYIT', 'Mrs Pranali Pawar', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '.', 'B', 'I', 'Discrete Mathematics', '2021-2022', '2022-06-27 05:26:02'),
('2021070007', 'TYIT', 'Mrs Pranali Pawar', 7, 6, 6, 7, 3, 3, 4, 7, 6, 3, 6, 5, 5, 7, 4, 2, 6, 4, 'Abc xyz', 'A', 'I', 'Discrete Mathematics', '2021-2022', '2022-06-23 04:51:24'),
('2021070018', 'TYIT', 'Mrs Pranali Pawar', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '', 'B', 'I', 'Discrete Mathematics', '2021-2022', '2022-06-17 14:13:51'),
('2021070019', 'TYIT', 'Mrs Pranali Pawar', 5, 5, 4, 5, 4, 6, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', 'A', 'I', 'Discrete Mathematics', '2021-2022', '2022-06-27 05:27:48'),
('1234567890', 'BAF', 'Mrs XYZ', 7, 4, 5, 1, 3, 6, 4, 2, 7, 6, 3, 6, 6, 2, 7, 5, 4, 6, '', 'A', 'I', 'eadasd', '2021-2022', '2022-06-17 15:45:25'),
('2020080289', 'TYIT', 'Mrs Rakhee Rane', 7, 7, 7, 7, 7, 4, 5, 5, 4, 3, 2, 4, 5, 4, 5, 5, 5, 3, '', 'A', 'II', 'Green Computing', '2021-2022', '2022-06-17 16:24:19'),
('2020080446', 'TYIT', 'Mrs Rakhee Rane', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '....', 'A', 'II', 'Green Computing', '2021-2022', '2022-06-27 05:27:24'),
('2018060712', 'TYIT', 'Mrs Pournima Bhangale', 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, '---', 'A', 'I', 'Imperative Programming', '2021-2022', '2022-06-27 05:26:46'),
('2018060739', 'TYIT', 'Mrs Pournima Bhangale', 6, 6, 5, 5, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, '', 'A', 'I', 'Imperative Programming', '2021-2022', '2022-06-23 06:56:30'),
('2018060762', 'TYIT', 'Mrs Pournima Bhangale', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 'No suggestion', 'A', 'I', 'Imperative Programming', '2021-2022', '2022-06-27 05:26:31'),
('2020080153', 'TYIT', 'Mrs Pournima Bhangale', 7, 7, 7, 6, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 'Orewa senku', 'A', 'I', 'Imperative Programming', '2021-2022', '2022-06-27 05:25:41'),
('2020080289', 'TYIT', 'Mrs Pournima Bhangale', 7, 3, 7, 7, 3, 5, 2, 4, 5, 5, 4, 3, 4, 4, 2, 4, 4, 4, 'Nice', 'A', 'I', 'Imperative Programming', '2021-2022', '2022-06-17 12:18:56'),
('2020080445', 'TYIT', 'Mrs Pournima Bhangale', 6, 6, 5, 6, 6, 5, 6, 6, 7, 5, 4, 4, 6, 7, 7, 5, 6, 6, '-', 'A', 'I', 'Imperative Programming', '2021-2022', '2022-06-27 05:25:32'),
('2020090602', 'TYIT', 'Mrs Pournima Bhangale', 6, 6, 6, 6, 6, 7, 7, 7, 6, 6, 6, 7, 6, 7, 7, 7, 7, 7, '-', 'A', 'I', 'Imperative Programming', '2021-2022', '2022-06-27 05:25:54'),
('2020090603', 'TYIT', 'Mrs Pournima Bhangale', 5, 6, 6, 5, 6, 5, 6, 6, 6, 5, 6, 6, 5, 6, 6, 6, 6, 6, '.', 'A', 'I', 'Imperative Programming', '2021-2022', '2022-06-27 05:26:47'),
('2020091735', 'TYIT', 'Mrs Pournima Bhangale', 5, 5, 6, 5, 6, 5, 5, 5, 6, 6, 5, 5, 6, 5, 6, 5, 5, 6, '', 'A', 'I', 'Imperative Programming', '2021-2022', '2022-06-27 05:31:06'),
('2021070007', 'TYIT', 'Mrs Pournima Bhangale', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 'Abc 123', 'A', 'I', 'Imperative Programming', '2021-2022', '2022-06-17 14:17:01'),
('2020080289', 'TYIT', 'Mrs Rakhee Rane', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 6, 4, 5, 3, 2, 1, 'Nice', 'A', 'II', 'Microprocessor Architecture', '2021-2022', '2022-06-17 14:58:09'),
('2020080160', 'TYIT', 'Mrs Pranali Pawar', 5, 5, 6, 6, 5, 7, 6, 6, 5, 5, 6, 6, 6, 6, 6, 5, 5, 6, 'None', 'A', 'II', 'Numerical And Statistical Mathematics', '2021-2022', '2022-06-27 05:26:43'),
('2020080289', 'TYIT', 'Mrs Pranali Pawar', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 'Nice', 'A', 'II', 'Numerical And Statistical Mathematics', '2021-2022', '2022-06-23 14:53:07'),
('2021070008', 'TYIT', 'Mrs Pranali Pawar', 3, 1, 3, 5, 3, 4, 6, 1, 1, 7, 4, 6, 7, 1, 3, 4, 4, 4, '', 'A', 'II', 'Numerical And Statistical Mathematics', '2021-2022', '2022-06-27 05:25:37'),
('2021070011', 'TYIT', 'Mrs Pranali Pawar', 5, 5, 5, 6, 5, 5, 6, 5, 5, 5, 6, 5, 5, 5, 4, 5, 6, 5, '', 'A', 'II', 'Numerical And Statistical Mathematics', '2021-2022', '2022-06-27 05:26:41'),
('2018061299', 'TYIT', 'Mrs Nanda Rupnar ', 6, 6, 6, 6, 6, 5, 7, 7, 6, 6, 7, 7, 7, 7, 5, 5, 6, 5, '', 'A', 'II', 'Object Oriented Programming', '2021-2022', '2022-06-27 14:36:00'),
('2020080161', 'TYIT', 'Mrs Nanda Rupnar ', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '-', 'A', 'II', 'Object Oriented Programming', '2021-2022', '2022-06-27 05:26:26'),
('2020080257', 'TYIT', 'Mrs Nanda Rupnar ', 7, 6, 5, 5, 7, 5, 6, 7, 7, 5, 5, 7, 6, 7, 5, 7, 7, 5, '', 'A', 'II', 'Object Oriented Programming', '2021-2022', '2022-06-27 05:28:04'),
('2020080289', 'TYIT', 'Mrs Nanda Rupnar ', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, '', 'A', 'II', 'Object Oriented Programming', '2021-2022', '2022-06-17 13:44:46'),
('2020080462', 'TYIT', 'Mrs Nanda Rupnar ', 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, '-', 'A', 'II', 'Object Oriented Programming', '2021-2022', '2022-06-27 05:26:48'),
('2021070008', 'TYIT', 'Mrs Nanda Rupnar ', 1, 3, 4, 4, 7, 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, '', 'A', 'II', 'Object Oriented Programming', '2021-2022', '2022-06-17 14:15:46'),
('2021070018', 'TYIT', 'Mrs Nanda Rupnar ', 7, 7, 7, 4, 3, 3, 3, 3, 3, 3, 4, 6, 6, 6, 5, 7, 6, 7, 'Nothing ', 'B', 'II', 'Object Oriented Programming', '2021-2022', '2022-06-27 05:24:34'),
('2018062037', 'TYIT', 'Mrs Vandana Kadam', 6, 6, 6, 6, 7, 6, 5, 5, 5, 5, 6, 5, 6, 6, 5, 5, 6, 5, 'Nothing', 'A', 'I', 'Operating Systems', '2021-2022', '2022-06-27 05:28:06'),
('2020080289', 'TYIT', 'Mrs Vandana Kadam', 7, 7, 7, 5, 4, 2, 4, 4, 4, 5, 4, 6, 7, 2, 3, 4, 7, 5, '', 'B', 'I', 'Operating Systems', '2021-2022', '2022-06-23 14:56:49'),
('2021070010', 'TYIT', 'Mrs Vandana Kadam', 7, 7, 7, 6, 6, 7, 6, 7, 6, 7, 6, 4, 6, 6, 5, 7, 5, 6, 'Good ', 'A', 'I', 'Operating Systems', '2021-2022', '2022-06-27 05:27:57'),
('1234567890', 'BAF', 'Mrs XYZ', 7, 6, 4, 4, 1, 4, 5, 2, 6, 3, 3, 5, 5, 5, 3, 4, 6, 6, 'Nice', 'C', 'I', 'qeqwe', '2021-2022', '2022-06-17 16:12:19'),
('2020080169', 'TYIT', 'Mrs Pranali Pawar', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'Xyzdf', 'A', 'II', 'Web Programming', '2021-2022', '2022-06-27 05:25:17'),
('2020080266', 'TYIT', 'Mrs Pranali Pawar', 6, 6, 5, 5, 2, 5, 4, 5, 4, 5, 4, 3, 4, 4, 5, 4, 4, 3, 'No suggestions ', 'A', 'II', 'Web Programming', '2021-2022', '2022-06-27 05:28:04'),
('2020080289', 'TYIT', 'Mrs Pranali Pawar', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 'aeaed', 'A', 'II', 'Web Programming', '2021-2022', '2022-06-27 10:47:40'),
('2020080162', 'TYIT', 'Mrs Mohini Bhole', 4, 4, 3, 3, 4, 4, 5, 4, 5, 5, 4, 5, 5, 4, 5, 5, 4, 3, '', 'A', 'II', 'XYZ 2 Subject', '2021-2022', '2022-06-27 05:26:41'),
('2020080289', 'TYIT', 'Mrs Mohini Bhole', 7, 6, 6, 3, 6, 4, 7, 5, 3, 6, 3, 5, 5, 4, 4, 5, 4, 4, '', 'A', 'II', 'XYZ 2 Subject', '2021-2022', '2022-06-26 03:07:46'),
('2021070008', 'TYIT', 'Mrs Mohini Bhole', 1, 1, 2, 2, 4, 7, 7, 7, 7, 6, 6, 7, 7, 3, 3, 4, 3, 5, '', 'A', 'II', 'XYZ 2 Subject', '2021-2022', '2022-06-27 05:29:14'),
('2018060739', 'TYIT', 'Mrs Mohini Bhole', 7, 7, 4, 7, 6, 6, 6, 3, 4, 4, 6, 5, 6, 4, 4, 6, 6, 5, 'None', 'A', 'II', 'XYZ Subject', '2021-2022', '2022-06-19 06:07:27'),
('2020080158', 'TYIT', 'Mrs Mohini Bhole', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '', 'A', 'II', 'XYZ Subject', '2021-2022', '2022-06-27 05:25:39'),
('2020080163', 'TYIT', 'Mrs Mohini Bhole', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '', 'A', 'II', 'XYZ Subject', '2021-2022', '2022-06-27 05:29:51'),
('2020080289', 'TYIT', 'Mrs Mohini Bhole', 3, 7, 7, 6, 3, 4, 6, 4, 1, 6, 4, 2, 4, 2, 2, 3, 5, 2, '', 'A', 'II', 'XYZ Subject', '2021-2022', '2022-06-19 05:19:08'),
('2020090608', 'TYIT', 'Mrs Mohini Bhole', 6, 6, 6, 6, 6, 6, 6, 7, 7, 6, 6, 5, 7, 6, 6, 7, 7, 6, '...', 'A', 'II', 'XYZ Subject', '2021-2022', '2022-06-27 05:27:46'),
('2020091735', 'TYIT', 'Mrs Mohini Bhole', 5, 6, 5, 6, 5, 6, 7, 5, 6, 6, 5, 5, 6, 5, 6, 6, 6, 6, '', 'A', 'II', 'XYZ Subject', '2021-2022', '2022-06-27 05:27:16'),
('2020101879', 'TYIT', 'Mrs Mohini Bhole', 6, 7, 6, 6, 6, 7, 6, 6, 6, 6, 6, 6, 6, 6, 6, 7, 6, 7, 'â€¦â€¦', 'A', 'II', 'XYZ Subject', '2021-2022', '2022-06-27 05:27:51'),
('2021070008', 'TYIT', 'Mrs Mohini Bhole', 2, 5, 7, 6, 2, 4, 7, 1, 2, 1, 3, 5, 2, 1, 2, 5, 1, 2, '', 'A', 'II', 'XYZ Subject', '2021-2022', '2022-06-27 05:27:32'),
('2021070012', 'TYIT', 'Mrs Mohini Bhole', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '-', 'A', 'II', 'XYZ Subject', '2021-2022', '2022-06-27 05:26:01'),
('2021070015', 'TYIT', 'Mrs Mohini Bhole', 6, 5, 6, 7, 6, 6, 7, 5, 5, 6, 5, 5, 6, 5, 5, 5, 4, 5, '', 'A', 'II', 'XYZ Subject', '2021-2022', '2022-06-27 05:28:15');

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
('', 'TEST', 19, 'Female', '2018060745', 'FYIT', 'Bsc-IT', 'A', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '2022-06-27 05:29:02'),
('', 'Steven Thomas', 18, 'Male', '2019060868', 'SYIT', 'Bsc-IT', 'A', 3, 3, 2, 3, 4, 4, 4, 3, 4, 3, 4, 4, 4, 4, 5, 4, 5, '2022-06-27 15:01:51'),
('', 'TEST', 18, 'Male', '2020080162', 'FYIT', 'Bsc-IT', 'A', 5, 4, 5, 5, 5, 4, 5, 4, 5, 5, 6, 4, 4, 5, 5, 4, 5, '2022-06-27 05:27:38'),
('', 'TEST', 20, 'Female', '2020080177', 'FYIT', 'Bsc-IT', 'A', 6, 6, 7, 6, 6, 6, 6, 6, 6, 6, 6, 6, 5, 6, 7, 7, 7, '2022-06-27 05:29:38'),
('', 'Atharv Ankush Desai', 18, 'Default', '2020080289', 'FYIT', 'BSc-IT', 'A', 1, 5, 4, 5, 5, 4, 6, 5, 4, 5, 5, 5, 5, 5, 6, 7, 5, '2022-06-17 13:32:19'),
('yes', 'Radya Walimbe', 18, 'Male', '2021070008', 'FYIT', 'BSc-IT', 'A', 7, 2, 3, 4, 4, 3, 5, 4, 2, 5, 6, 3, 4, 4, 4, 4, 4, '2022-06-18 04:56:34'),
('', 'Hagarya Sule', 18, 'Male', '2021070018', 'FYIT', 'BSc-IT', 'A', 7, 7, 6, 5, 4, 3, 2, 1, 7, 7, 6, 4, 5, 4, 7, 7, 2, '2022-06-17 15:03:50'),
('', 'Hrushikesh Shinde', 19, 'Male', '2021080317', 'SYIT', 'Bsc-IT', 'A', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '2022-06-27 14:40:11'),
('', 'Sristi Shetty', 19, 'Female', '2021080416', 'SYIT', 'Bsc-IT', 'A', 4, 5, 4, 5, 4, 4, 4, 5, 4, 4, 5, 6, 6, 5, 3, 4, 6, '2022-06-27 15:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `Id` int(11) NOT NULL,
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

INSERT INTO `teachers` (`Id`, `cname`, `tname`, `division`, `sem`, `subject1`, `subject2`, `subject3`, `academic_year`) VALUES
(13, 'SYIT', 'Mrs Pournima Bhangale', 'A', 'III', 'DBMS', '--', '--', '2021-2022'),
(14, 'TYIT', 'Mrs Mohini Bhole', 'A', 'V', 'Software Project Management', '--', '--', '2021-2022'),
(15, 'TYIT', 'Mrs Nanda Rupnar', 'A', 'V', 'AWP', '--', '--', '2021-2022'),
(16, 'TYIT', 'Mrs Pranali Pawar', 'A', 'V', 'IOT', '--', '--', '2021-2022'),
(17, 'TYIT', 'Mrs Rakhee Rane', 'A', 'V', 'NGT', '--', '--', '2021-2022'),
(18, 'SYIT', 'Mrs Vandana Kadam', 'A', 'III', 'Computer Networks', 'Embedded Systems And Design', '--', '2021-2022');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
