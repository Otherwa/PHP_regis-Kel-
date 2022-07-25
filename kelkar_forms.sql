-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql301.epizy.com
-- Generation Time: Jul 25, 2022 at 05:29 AM
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
('1234567890', 'BAF Test Subject', 'SYBAF', 'BAF', 'A'),
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
('2019061300', 'Pradnya Tagad', 'SYIT', 'Bsc-IT', 'A'),
('2019061594', 'Sakshi Sarang', 'SYIT', 'Bsc-IT', 'A'),
('2019061956', 'Pooja Kambale', 'SYIT', 'Bsc-IT', 'A'),
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
('2020080477', 'Aman Dhattarval ', 'SYIT', 'Bsc-IT', 'A'),
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
('2021080219', 'Balkrishna Parab', 'SYIT', 'Bsc-IT', 'A'),
('2021080289', 'Akshada Kadlak', 'SYIT', 'Bsc-IT', 'A'),
('2021080297', 'Prathamesh Karale', 'SYIT', 'Bsc-IT', 'A'),
('2021080314', 'Aaditya Pal', 'SYIT', 'Bsc-IT', 'A'),
('2021080316', 'Vandana Padhi', 'SYIT', 'Bsc-IT', 'A'),
('2021080317', 'Hrushikesh Shinde', 'SYIT', 'Bsc-IT', 'A'),
('2021080318', 'Sanjana Kamble', 'SYIT', 'Bsc-IT', 'A'),
('2021080319', 'Tanvi Nimbalkar', 'SYIT', 'Bsc-IT', 'A'),
('2021080416', 'Sristi Shetty', 'SYIT', 'Bsc-IT', 'A'),
('2021080500', 'Sanika Chalke', 'SYIT', 'Bsc-IT ', 'A'),
('2021080549', 'Sameeksha Kadam', 'SYIT', 'Bsc-IT', 'A'),
('2021090857', 'Omkar Gawade', 'SYIT', 'Bsc-IT', 'A'),
('2021091456', 'Aditi Patil', 'SYIT', 'Bsc-IT', 'A'),
('2021091690', 'Mahesh Shere', 'SYIT', 'Bsc-IT', 'A'),
('2021091921', 'Aryan Bhagwe', 'SYIT', 'Bsc-IT', 'A'),
('2021091963', 'Ruchita Kamble', 'SYIT', 'Bsc-IT', 'A'),
('2021092036', 'Yutika Patil', 'SYIT', 'Bsc-IT', 'A'),
('2021092198', 'Isha Sawant', 'SYIT', 'Bsc-IT', 'A'),
('2021102285', 'Sanskruti Kolatharkar', 'SYIT', 'Bsc-IT', 'A'),
('2021112369', 'Aditi Giri', 'SYIT', 'Bsc-IT', 'A'),
('2021112382', 'Piyush Rana', 'SYIT', 'Bsc-IT', 'A'),
('2021122389', 'Akanksha Joshi', 'SYIT', 'Bsc-IT', 'A'),
('2022070271', 'Omkar Swant', 'SYIT', 'Bsc-IT ', 'A');

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
('1234567890', 'BAF', 'SYBAF', 'TEst', 5, 1, 5, 3, 4, 4, 4, 5, 6, 3, 5, 4, 5, 4, 4, 5, 4, 4, 'Nice', 'A', 'III', '124', '2021-2022', '2022-07-10 11:48:00'),
('2020080273', 'Bsc-IT', 'TYIT', 'Mrs Pournima Bhangale', 1, 1, 7, 4, 3, 3, 6, 2, 3, 2, 5, 1, 1, 1, 2, 1, 2, 1, '', 'A', 'V', 'Artificial Intelligence', '2021-2022', '2022-07-09 05:00:58'),
('2018060712', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 7, 6, 6, 7, 6, 7, 7, 7, 6, 7, 7, 7, 7, 7, 7, 7, 7, 7, '--', 'A', 'V', 'AWP', '2021-2022', '2022-07-09 05:00:14'),
('2018060739', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, '', 'A', 'V', 'AWP', '2021-2022', '2022-07-09 05:00:09'),
('2018060762', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '...', 'A', 'V', 'AWP', '2021-2022', '2022-06-28 12:09:57'),
('2018060868', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, '', 'A', 'V', 'AWP', '2021-2022', '2022-07-09 05:03:28'),
('2020080153', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 'Orewa siddhi', 'A', 'V', 'AWP', '2021-2022', '2022-07-09 05:00:11'),
('2020080154', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '', 'A', 'V', 'AWP', '2021-2022', '2022-06-28 13:18:06'),
('2020080158', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '', 'A', 'V', 'AWP', '2021-2022', '2022-07-09 04:58:38'),
('2020080161', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '-', 'A', 'V', 'AWP', '2021-2022', '2022-06-28 12:40:49'),
('2020080169', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 5, 4, 4, 5, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 5, 'Xyzdf', 'A', 'V', 'AWP', '2021-2022', '2022-07-09 05:01:54'),
('2020080170', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 6, 6, 7, 7, 7, 7, 7, 7, 6, 6, 6, 7, 7, 6, 6, 7, 5, 6, '', 'A', 'V', 'AWP', '2021-2022', '2022-07-09 05:00:13'),
('2020080274', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '', 'A', 'V', 'AWP', '2021-2022', '2022-07-09 05:03:06'),
('2020080287', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 3, 4, 4, 2, 6, 7, 4, 5, 5, 4, 2, 7, 6, 6, 7, 3, 7, 3, '', 'A', 'V', 'AWP', '2021-2022', '2022-07-24 11:44:55'),
('2020080289', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 5, 6, 7, 5, 5, 6, 5, 7, 7, 3, 5, 3, 7, 5, 4, 7, 7, 5, 'Nice', 'A', 'V', 'AWP', '2021-2022', '2022-06-28 11:58:26'),
('2020080445', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 6, 5, 6, 6, 6, 6, 7, 6, 6, 6, 6, 6, 6, 7, 7, 5, 5, 5, '', 'A', 'V', 'AWP', '2021-2022', '2022-06-28 12:26:20'),
('2020080446', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '.', 'A', 'V', 'AWP', '2021-2022', '2022-07-09 05:00:09'),
('2020080543', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 7, 7, 6, 6, 6, 6, 6, 7, 7, 6, 6, 6, 6, 6, 6, 6, 6, 6, '', 'A', 'V', 'AWP', '2021-2022', '2022-06-28 13:59:02'),
('2020090599', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 6, 6, 6, 6, 6, 6, 7, 6, 7, 6, 6, 6, 6, 6, 6, 6, 7, 6, '', 'A', 'V', 'AWP', '2021-2022', '2022-07-09 05:00:08'),
('2020090608', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 7, 7, 7, 7, 7, 7, 7, 7, 6, 7, 7, 7, 7, 7, 7, 7, 7, 7, '', 'A', 'V', 'AWP', '2021-2022', '2022-07-09 05:00:16'),
('2020090609', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '.', 'A', 'V', 'AWP', '2021-2022', '2022-07-09 05:02:41'),
('2020091734', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 7, 6, 7, 7, 6, 5, 5, 6, 5, 6, 5, 4, 5, 5, 4, 6, 6, 6, '-', 'A', 'V', 'AWP', '2021-2022', '2022-07-09 05:03:23'),
('2020091736', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '-', 'A', 'V', 'AWP', '2021-2022', '2022-07-09 05:02:38'),
('2020101879', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 'â€¦', 'A', 'V', 'AWP', '2021-2022', '2022-07-09 04:58:51'),
('2021070008', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 1, 3, 3, 4, 6, 5, 6, 7, 2, 5, 2, 6, 7, 6, 4, 6, 7, 7, '', 'A', 'V', 'AWP', '2021-2022', '2022-06-28 11:39:25'),
('2021070012', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '', 'A', 'V', 'AWP', '2021-2022', '2022-07-09 05:03:04'),
('2021070018', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 6, 6, 6, 7, 6, 7, 6, 6, 7, 7, 7, 7, 7, 7, 7, 5, 6, 6, '', 'A', 'V', 'AWP', '2021-2022', '2022-06-28 11:37:56'),
('2021070019', 'Bsc-IT', 'TYIT', 'Mrs Nanda Rupnar', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', 'A', 'V', 'AWP', '2021-2022', '2022-07-09 05:00:12'),
('2021080317', 'Bsc-IT', 'SYIT', 'Mrs Vandana Kadam', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Nice', 'A', 'III', 'Computer Networks', '2021-2022', '2022-06-28 13:34:41'),
('2019060868', 'Bsc-IT', 'SYIT', 'Mrs Pournima Bhangale', 5, 5, 4, 5, 4, 5, 5, 4, 5, 4, 5, 5, 5, 4, 5, 5, 4, 4, '', 'A', 'III', 'DBMS', '2021-2022', '2022-06-28 14:53:09'),
('2021080317', 'Bsc-IT', 'SYIT', 'Mrs Pournima Bhangale', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 'Nice', 'A', 'III', 'DBMS', '2021-2022', '2022-06-28 13:33:29'),
('2018060625', 'Bsc-IT', 'TYIT', 'Mrs Pranali Pawar', 5, 5, 4, 4, 6, 4, 5, 5, 5, 4, 4, 3, 6, 5, 4, 4, 4, 4, '', 'A', 'V', 'IOT', '2021-2022', '2022-06-28 12:50:49'),
('2020080289', 'Bsc-IT', 'TYIT', 'Mrs Pranali Pawar', 7, 6, 4, 1, 4, 7, 5, 3, 6, 7, 6, 5, 6, 5, 5, 6, 7, 5, '', 'A', 'V', 'IOT', '2021-2022', '2022-06-29 11:54:29'),
('2020080445', 'Bsc-IT', 'TYIT', 'Mrs Pranali Pawar', 5, 6, 5, 6, 5, 7, 6, 4, 6, 5, 5, 6, 5, 5, 5, 6, 7, 5, '', 'A', 'V', 'IOT', '2021-2022', '2022-06-28 12:21:06'),
('2021070008', 'Bsc-IT', 'TYIT', 'Mrs Pranali Pawar', 2, 5, 6, 5, 7, 4, 5, 4, 6, 5, 7, 6, 6, 7, 7, 6, 6, 4, '', 'A', 'V', 'IOT', '2021-2022', '2022-07-09 05:00:18'),
('2018060712', 'Bsc-IT', 'TYIT', 'Mrs Rakhee Rane', 7, 7, 6, 7, 6, 7, 7, 6, 7, 7, 6, 6, 6, 6, 6, 7, 7, 6, 'No suggestions ', 'A', 'V', 'NGT', '2021-2022', '2022-06-28 12:34:11'),
('2020080153', 'Bsc-IT', 'TYIT', 'Mrs Rakhee Rane', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 'Oraewa Siddhi ', 'A', 'V', 'NGT', '2021-2022', '2022-06-28 12:10:41'),
('2020080274', 'Bsc-IT', 'TYIT', 'Mrs Rakhee Rane', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '', 'A', 'V', 'NGT', '2021-2022', '2022-06-28 12:16:31'),
('2020080287', 'Bsc-IT', 'TYIT', 'Mrs Rakhee Rane', 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 2, 1, 1, 1, 'None', 'A', 'V', 'NGT', '2021-2022', '2022-07-24 06:51:29'),
('2020080289', 'Bsc-IT', 'TYIT', 'Mrs Rakhee Rane', 6, 3, 2, 3, 4, 5, 6, 5, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 'Nice', 'A', 'V', 'NGT', '2021-2022', '2022-06-28 13:09:33'),
('2020080446', 'Bsc-IT', 'TYIT', 'Mrs Rakhee Rane', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '... ', 'A', 'V', 'NGT', '2021-2022', '2022-06-28 13:19:14'),
('2021070007', 'Bsc-IT', 'TYIT', 'Mrs Rakhee Rane', 7, 7, 6, 7, 7, 7, 7, 6, 6, 6, 7, 6, 5, 6, 6, 7, 7, 6, 'Xyz', 'A', 'V', 'NGT', '2021-2022', '2022-06-28 12:14:24'),
('2021070008', 'Bsc-IT', 'TYIT', 'Mrs Rakhee Rane', 2, 3, 4, 5, 6, 7, 5, 7, 6, 4, 3, 6, 6, 6, 5, 1, 2, 4, '', 'A', 'V', 'NGT', '2021-2022', '2022-06-28 11:37:58'),
('2019060862', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 6, 6, 5, 7, 7, 7, 7, 5, 6, 7, 5, 7, 7, 7, 6, 7, 7, 7, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:00:14'),
('2019060877', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 5, 7, 5, 5, 7, 5, 5, 6, 6, 5, 4, 4, 5, 5, 5, 5, 5, 5, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:01:36'),
('2019060938', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 5, 6, 6, 7, 5, 7, 5, 7, 7, 6, 7, 6, 7, 6, 5, 5, 7, 6, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:00:15'),
('2019061029', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 6, 6, 6, 7, 6, 6, 5, 7, 5, 6, 5, 6, 6, 5, 5, 6, 5, 6, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:00:45'),
('2019061131', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:00:04'),
('2019061300', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 6, 6, 5, 4, 6, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 3, 5, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:00:42'),
('2019061594', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 6, 5, 5, 7, 7, 7, 7, 7, 7, 7, 6, 6, 7, 7, 7, 7, 6, 7, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:00:40'),
('2019061956', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 5, 5, 6, 6, 6, 5, 5, 6, 6, 6, 5, 5, 5, 5, 6, 5, 5, 5, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:01:28'),
('2020080477', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 1, 6, 7, 5, 6, 5, 5, 5, 5, 6, 6, 6, 5, 5, 5, 6, 5, 5, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:00:09'),
('2021080104', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 7, 7, 7, 7, 6, 7, 7, 7, 6, 7, 7, 6, 6, 7, 7, 7, 6, 7, 'She is an excellent teacher and as a mentor also she is very good', 'A', 'III', 'Python', '2021-2022', '2022-07-09 04:58:16'),
('2021080120', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 6, 7, 6, 7, 7, 7, 6, 7, 6, 5, 5, 5, 7, 5, 5, 7, 5, 5, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:02:35'),
('2021080123', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 6, 6, 5, 6, 7, 7, 5, 5, 6, 6, 6, 5, 6, 6, 6, 7, 6, 6, 'Keep smiling', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:02:28'),
('2021080137', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 5, 4, 5, 6, 5, 5, 5, 6, 6, 6, 5, 6, 6, 5, 5, 5, 6, 5, 'Keep smiling', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:02:30'),
('2021080140', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 4, 4, 3, 5, 4, 5, 5, 7, 5, 6, 3, 3, 5, 4, 4, 3, 3, 3, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:03:37'),
('2021080144', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 7, 7, 6, 5, 7, 7, 6, 5, 6, 6, 7, 7, 7, 7, 7, 7, 7, 7, 'Keep smiling!', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:06:06'),
('2021080200', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 7, 7, 7, 6, 7, 6, 7, 7, 7, 7, 7, 7, 6, 7, 7, 7, 6, 7, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:00:15'),
('2021080219', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 5, 6, 7, 6, 7, 6, 6, 4, 3, 6, 5, 4, 7, 5, 6, 7, 5, 6, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 04:56:09'),
('2021080314', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 6, 6, 5, 7, 5, 5, 6, 5, 6, 4, 4, 4, 5, 5, 5, 7, 7, 5, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:04:06'),
('2021080316', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 6, 7, 7, 4, 6, 5, 5, 5, 5, 4, 4, 5, 5, 6, 6, 7, 6, 5, 'We want to see u smile more', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:05:45'),
('2021080317', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 7, 6, 7, 5, 6, 6, 7, 5, 5, 5, 6, 7, 5, 7, 6, 5, 5, 5, 'Nicee', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:02:49'),
('2021080318', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 6, 7, 5, 6, 6, 7, 6, 6, 5, 6, 5, 5, 6, 6, 5, 6, 6, 6, 'Nothing ', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:02:21'),
('2021080319', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 5, 4, 4, 7, 7, 7, 7, 7, 7, 7, 7, 7, 6, 7, 7, 7, 7, 7, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:00:22'),
('2021080416', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 6, 6, 6, 7, 7, 7, 7, 7, 7, 7, 6, 6, 7, 7, 7, 7, 6, 7, 'We want to see you smile more! ', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:02:28'),
('2021080500', 'Bsc-IT ', 'SYIT', 'Mrs Nanda Rupnar', 5, 4, 5, 6, 5, 5, 5, 6, 6, 5, 5, 5, 6, 6, 5, 5, 5, 5, 'We want to see you smile more', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:02:27'),
('2021080549', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 5, 7, 6, 6, 5, 5, 6, 6, 5, 6, 5, 6, 6, 5, 6, 6, 6, 6, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:00:12'),
('2021091456', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 6, 6, 6, 7, 7, 6, 5, 6, 5, 5, 5, 5, 6, 5, 6, 7, 6, 6, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:01:39'),
('2021091690', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:00:09'),
('2021091963', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 6, 6, 5, 6, 7, 6, 6, 7, 7, 7, 5, 5, 6, 6, 6, 6, 2, 4, 'Please don\'t be rude at practicals', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:03:02'),
('2021092036', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 6, 7, 6, 7, 6, 6, 6, 5, 6, 6, 6, 5, 6, 6, 5, 7, 6, 5, 'To be litle calm towards students. ', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:00:18'),
('2021092198', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 4, 5, 4, 6, 4, 6, 7, 7, 6, 7, 3, 4, 6, 6, 5, 4, 3, 4, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:01:22'),
('2021102285', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 6, 6, 5, 5, 4, 3, 6, 3, 5, 5, 5, 4, 4, 3, 4, 4, 3, 5, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:01:41'),
('2021112382', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 6, 4, 5, 5, 5, 6, 6, 4, 6, 7, 5, 7, 6, 6, 7, 7, 6, 5, 'Be friendly with students .', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:05:19'),
('2021122389', 'Bsc-IT', 'SYIT', 'Mrs Nanda Rupnar', 6, 7, 5, 5, 7, 5, 5, 7, 6, 5, 4, 6, 5, 5, 5, 5, 5, 5, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:01:38'),
('2022070271', 'Bsc-IT ', 'SYIT', 'Mrs Nanda Rupnar', 5, 5, 5, 6, 5, 5, 3, 5, 4, 5, 5, 5, 5, 3, 5, 4, 4, 6, '', 'A', 'III', 'Python', '2021-2022', '2022-07-09 05:00:08'),
('2018061299', 'Bsc-IT', 'TYIT', 'Mrs Mohini Bhole', 6, 7, 7, 7, 7, 6, 7, 6, 6, 7, 7, 7, 7, 6, 5, 5, 7, 6, '', 'A', 'V', 'Software Project Management', '2021-2022', '2022-06-28 12:19:13'),
('2020080158', 'Bsc-IT', 'TYIT', 'Mrs Mohini Bhole', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, ' ', 'A', 'V', 'Software Project Management', '2021-2022', '2022-06-28 12:13:35'),
('2020080289', 'Bsc-IT', 'TYIT', 'Mrs Mohini Bhole', 7, 7, 3, 6, 3, 6, 6, 6, 5, 3, 1, 7, 7, 4, 6, 7, 5, 4, 'Nice', 'A', 'V', 'Software Project Management', '2021-2022', '2022-07-08 15:13:43'),
('2020091735', 'Bsc-IT', 'TYIT', 'Mrs Mohini Bhole', 6, 5, 5, 6, 4, 6, 5, 6, 5, 5, 6, 6, 5, 6, 6, 5, 6, 6, '', 'A', 'V', 'Software Project Management', '2021-2022', '2022-06-28 12:16:52'),
('2020101879', 'Bsc-IT', 'TYIT', 'Mrs Mohini Bhole', 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 7, 7, 'â€¦â€¦', 'A', 'V', 'Software Project Management', '2021-2022', '2022-06-29 12:10:59');

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
('', 'Apurva Masdekar', 19, 'Male', '2018060747', 'TYIT', 'Bsc-IT', 'A', 6, 6, 7, 6, 6, 5, 7, 4, 6, 6, 5, 6, 6, 7, 6, 6, 7, '2022-06-28 12:44:36'),
('', 'Steven Thomas', 18, 'Male', '2019060868', 'SYIT', 'Bsc-IT', 'A', 3, 3, 2, 3, 4, 4, 4, 3, 4, 3, 4, 4, 4, 4, 5, 4, 5, '2022-06-27 15:01:51'),
('', 'TEST', 18, 'Male', '2020080162', 'FYIT', 'Bsc-IT', 'A', 5, 4, 5, 5, 5, 4, 5, 4, 5, 5, 6, 4, 4, 5, 5, 4, 5, '2022-06-27 05:27:38'),
('', 'Abhishek Mandlik', 19, 'Male', '2020080163', 'TYIT', 'Bsc-IT', 'A', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, '2022-06-28 12:20:50'),
('', 'TEST', 20, 'Female', '2020080177', 'FYIT', 'Bsc-IT', 'A', 6, 6, 7, 6, 6, 6, 6, 6, 6, 6, 6, 6, 5, 6, 7, 7, 7, '2022-06-27 05:29:38'),
('', 'Vishal Ingale', 20, 'Male', '2020080266', 'TYIT', 'Bsc-IT', 'A', 1, 1, 1, 2, 3, 1, 4, 1, 3, 4, 5, 5, 4, 5, 5, 4, 4, '2022-06-28 12:14:48'),
('', 'Kshama Shukla', 18, 'Female', '2020080287', 'TYIT', 'Bsc-IT', 'A', 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2022-07-24 06:52:39'),
('', 'Atharv Ankush Desai', 18, 'Default', '2020080289', 'FYIT', 'BSc-IT', 'A', 1, 5, 4, 5, 5, 4, 6, 5, 4, 5, 5, 5, 5, 5, 6, 7, 5, '2022-06-17 13:32:19'),
('yes', 'Radya Walimbe', 18, 'Male', '2021070008', 'FYIT', 'BSc-IT', 'A', 7, 2, 3, 4, 4, 3, 5, 4, 2, 5, 6, 3, 4, 4, 4, 4, 4, '2022-06-18 04:56:34'),
('', 'Hagarya Sule', 18, 'Male', '2021070018', 'FYIT', 'BSc-IT', 'A', 7, 7, 6, 5, 4, 3, 2, 1, 7, 7, 6, 4, 5, 4, 7, 7, 2, '2022-06-17 15:03:50'),
('', 'Anushka Dalvi', 18, 'Female', '2021080123', 'SYIT', 'Bsc-IT', 'A', 5, 5, 4, 2, 4, 5, 5, 5, 5, 5, 5, 6, 5, 5, 5, 5, 5, '2022-06-27 17:46:01'),
('', 'Abhidnya Tapal', 18, 'Female', '2021080140', 'SYIT', 'Bsc-IT', 'A', 3, 3, 3, 3, 3, 3, 3, 3, 3, 4, 4, 4, 3, 4, 5, 4, 5, '2022-06-28 14:49:21'),
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
(18, 'SYIT', 'Mrs Vandana Kadam', 'A', 'III', 'Computer Networks', 'Embedded Systems And Design', '--', '2021-2022'),
(19, 'SYIT', 'Mrs Nanda Rupnar', 'A', 'III', 'Python', '--', '--', '2021-2022'),
(20, 'SYIT', 'Mrs Mohini Bhole', 'A', 'III', 'Data Structures and Algo', '--', '--', '2021-2022'),
(21, 'TYIT', 'Mrs Pournima Bhangale', 'A', 'V', 'Artificial Intelligence', '--', '--', '2021-2022'),
(22, 'SYBAF', 'TEst', 'A', 'III', '122', '124', '126', '2021-2022');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
