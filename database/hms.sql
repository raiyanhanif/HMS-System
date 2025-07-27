-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 12, 2024 at 11:20 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `hms_admin`
--

DROP TABLE IF EXISTS `hms_admin`;
CREATE TABLE IF NOT EXISTS `hms_admin` (
  `ad_id` int(50) NOT NULL AUTO_INCREMENT,
  `ad_name` varchar(200) NOT NULL,
  `ad_email` varchar(200) NOT NULL,
  `ad_password` varchar(200) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'admin',
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_admin`
--

INSERT INTO `hms_admin` (`ad_id`, `ad_name`, `ad_email`, `ad_password`, `role`) VALUES
(1, 'raiyan', 'nodoliyaraiyan@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `hms_doctors`
--

DROP TABLE IF EXISTS `hms_doctors`;
CREATE TABLE IF NOT EXISTS `hms_doctors` (
  `doc_id` int(50) NOT NULL AUTO_INCREMENT,
  `doc_fname` varchar(200) NOT NULL,
  `doc_lname` varchar(200) NOT NULL,
  `doc_date` varchar(200) NOT NULL,
  `doc_email` varchar(200) NOT NULL,
  `doc_image` varchar(200) NOT NULL,
  `doc_addr` varchar(200) NOT NULL,
  `doc_phone` varchar(200) NOT NULL,
  `doc_department` varchar(200) NOT NULL,
  `doc_specilization` varchar(200) NOT NULL,
  `doc_number` varchar(200) NOT NULL,
  `doc_degree` varchar(200) NOT NULL,
  `doc_expri` varchar(200) NOT NULL,
  `doc_password` varchar(200) NOT NULL,
  `doc_age` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'doctor',
  PRIMARY KEY (`doc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_doctors`
--

INSERT INTO `hms_doctors` (`doc_id`, `doc_fname`, `doc_lname`, `doc_date`, `doc_email`, `doc_image`, `doc_addr`, `doc_phone`, `doc_department`, `doc_specilization`, `doc_number`, `doc_degree`, `doc_expri`, `doc_password`, `doc_age`, `role`) VALUES
(1, '', '', '', 'raiyan@gmail.com', '', '', '', '', '', '', '', '', 'raiyan', '', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `hms_employee`
--

DROP TABLE IF EXISTS `hms_employee`;
CREATE TABLE IF NOT EXISTS `hms_employee` (
  `emp_id` int(50) NOT NULL AUTO_INCREMENT,
  `emp_fname` varchar(200) NOT NULL,
  `emp_lname` varchar(200) NOT NULL,
  `emp_number` varchar(200) NOT NULL,
  `emp_email` varchar(200) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hms_patient`
--

DROP TABLE IF EXISTS `hms_patient`;
CREATE TABLE IF NOT EXISTS `hms_patient` (
  `pat_id` int(50) NOT NULL AUTO_INCREMENT,
  `pat_fname` varchar(200) NOT NULL,
  `pat_lname` varchar(200) NOT NULL,
  `pat_dob` varchar(200) NOT NULL,
  `pat_email` varchar(200) NOT NULL,
  `pat_addr` varchar(200) NOT NULL,
  `pat_phone` varchar(200) NOT NULL,
  `pat_ailment` varchar(200) NOT NULL,
  `pat_type` varchar(200) NOT NULL,
  `pat_number` varchar(200) NOT NULL,
  `pat_password` varchar(200) NOT NULL,
  `pat_record_date` timestamp(4) NOT NULL DEFAULT CURRENT_TIMESTAMP(4) ON UPDATE CURRENT_TIMESTAMP(4),
  PRIMARY KEY (`pat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hms_pharmacy`
--

DROP TABLE IF EXISTS `hms_pharmacy`;
CREATE TABLE IF NOT EXISTS `hms_pharmacy` (
  `phar_id` int(50) NOT NULL AUTO_INCREMENT,
  `phar_name` varchar(200) NOT NULL,
  `phar_bcode` varchar(200) NOT NULL,
  `phar_desc` longtext NOT NULL,
  `phar_qty` varchar(200) NOT NULL,
  `phar_cat` varchar(200) NOT NULL,
  `phar_vendor` varchar(200) NOT NULL,
  PRIMARY KEY (`phar_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hms_pharmacy_category`
--

DROP TABLE IF EXISTS `hms_pharmacy_category`;
CREATE TABLE IF NOT EXISTS `hms_pharmacy_category` (
  `phar_cat_id` int(50) NOT NULL AUTO_INCREMENT,
  `phar_cat_name` varchar(500) NOT NULL,
  `phar_cat_vendor` varchar(500) NOT NULL,
  `phar_cat_desc` longtext NOT NULL,
  PRIMARY KEY (`phar_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hms_prescription`
--

DROP TABLE IF EXISTS `hms_prescription`;
CREATE TABLE IF NOT EXISTS `hms_prescription` (
  `pres_id` int(50) NOT NULL AUTO_INCREMENT,
  `pres_pat_name` varchar(200) NOT NULL,
  `pres_pat_age` varchar(200) NOT NULL,
  `pres_pat_number` varchar(200) NOT NULL,
  `pres_number` varchar(200) NOT NULL,
  `pres_pat_addr` varchar(200) NOT NULL,
  `pres_pat_type` varchar(200) NOT NULL,
  `pres_pat_ailment` varchar(200) NOT NULL,
  `pres_ins` longtext NOT NULL,
  `pres_date` timestamp(4) NOT NULL DEFAULT CURRENT_TIMESTAMP(4) ON UPDATE CURRENT_TIMESTAMP(4),
  PRIMARY KEY (`pres_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
