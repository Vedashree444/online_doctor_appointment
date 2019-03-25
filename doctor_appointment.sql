-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 06:59 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor_appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('', ''),
('vedashree', 'vedav'),
('', ''),
('vedashree', 'vedav');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

CREATE TABLE `doctor_details` (
  `doctorname` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL,
  `location` varchar(32) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `timing` varchar(10) NOT NULL,
  `age` varchar(2) NOT NULL,
  `fees` varchar(10) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_details`
--

INSERT INTO `doctor_details` (`doctorname`, `email`, `password`, `location`, `catagory`, `phoneno`, `timing`, `age`, `fees`, `experience`, `gender`) VALUES
('aaa', 'bharath14141@gmail.com', 'aaa', 'aaa', 'aaa', '4444', 'ddada', '30', '120', '4', 'male'),
('', 'aaa', 'aaa', '', '', '4444', '', '30', '', '', 'male'),
('', '', '', '', '', '', '', '', '', '', ''),
('aaa', 'zzz', 'zzz', 'aaa', 'aaa', '4444', 'ddada', '30', '120', '4', 'male'),
('veda', 'vedashree', 'vvv', 'aaa', 'dentist', '444', '14:30', '20', '120', '2', 'female'),
('veda', 'vedashrees', 'vvv', 'aaa', 'dentist', '444', '14:30', '20', '120', '2', 'female'),
('abc', 'xyz', 'xyz', 'aaa', 'aaa', '111', '12:45', '35', '120', '5', 'male');

--
-- Triggers `doctor_details`
--
DELIMITER $$
CREATE TRIGGER `insertlog` AFTER INSERT ON `doctor_details` FOR EACH ROW insert into logs values(new.email, 'insert', now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `doctorname` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `feedback` varchar(248) NOT NULL,
  `sat` varchar(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`doctorname`, `email`, `feedback`, `sat`) VALUES
('aaa', 'bharath14141@gmail.com', 'good', 'yes'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('aaa', 'bharath14141@gmail.com', 'bad', 'no'),
('', '', '', ''),
('zzz', 'zzz', 'good', 'yes'),
('zzz', 'zzz', 'good', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `email` varchar(64) NOT NULL,
  `action` varchar(16) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`email`, `action`, `cdate`) VALUES
('vedashrees', 'insert', '2018-11-04 11:47:10'),
('xyz', 'insert', '2018-11-04 12:00:36');

-- --------------------------------------------------------

--
-- Table structure for table `patientdetails`
--

CREATE TABLE `patientdetails` (
  `patientname` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL,
  `age` varchar(8) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `address` varchar(128) NOT NULL,
  `doctorname` varchar(64) DEFAULT NULL,
  `date` varchar(16) DEFAULT NULL,
  `time` varchar(16) DEFAULT NULL,
  `demail` varchar(32) DEFAULT NULL,
  `meet` varchar(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientdetails`
--

INSERT INTO `patientdetails` (`patientname`, `email`, `password`, `age`, `gender`, `phone`, `address`, `doctorname`, `date`, `time`, `demail`, `meet`) VALUES
('bbb', 'aaa', 'aaa', '30', 'male', '4444', 'aaa', 'zzz', '12', '12', 'zzz', 'no'),
('bbb', 'abc', 'aaa', 'dd', 'male', 'adsd', 'aaa', NULL, NULL, NULL, NULL, NULL),
('bbb', 'vedashree44@gmail.com', 'aaa', '30', 'female', '4444', 'aaa', 'zzz', '43', '43', 'zzz', 'yes'),
('', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
('bbb', 'aaab', 'aaab', '30', 'male', '4444', 'aaa', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_details`
--
ALTER TABLE `doctor_details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patientdetails`
--
ALTER TABLE `patientdetails`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
