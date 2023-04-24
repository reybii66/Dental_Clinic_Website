-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2023 at 07:07 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthorganization`
--

-- --------------------------------------------------------

--
-- Table structure for table `admlogindetails`
--

DROP TABLE IF EXISTS `admlogindetails`;
CREATE TABLE IF NOT EXISTS `admlogindetails` (
  `adm_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_password` varchar(30) NOT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1005 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admlogindetails`
--

INSERT INTO `admlogindetails` (`adm_id`, `u_name`, `u_email`, `u_password`) VALUES
(1003, 'Rohan Jacob', 'rohanadm@gmail.com', '12345'),
(1004, 'Abin', 'abin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `drpateint`
--

DROP TABLE IF EXISTS `drpateint`;
CREATE TABLE IF NOT EXISTS `drpateint` (
  `Name` varchar(40) NOT NULL,
  `Age` int(11) NOT NULL,
  `blood_grp` varchar(10) NOT NULL,
  `chcksumry` text NOT NULL,
  `nxtdate` date NOT NULL,
  `mobno` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drpateint`
--

INSERT INTO `drpateint` (`Name`, `Age`, `blood_grp`, `chcksumry`, `nxtdate`, `mobno`) VALUES
('Deborah Sosa', 21, 'AB+', 'hge ie\r\nrewvgrbiwr\r\nejirbvewgr\r\nrve weuiryew\r\n', '2023-01-24', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `drslogindetails`
--

DROP TABLE IF EXISTS `drslogindetails`;
CREATE TABLE IF NOT EXISTS `drslogindetails` (
  `dr_name` varchar(45) NOT NULL,
  `dr_email` varchar(45) NOT NULL,
  `dr_password` varchar(30) NOT NULL,
  `dr_gender` varchar(10) NOT NULL,
  PRIMARY KEY (`dr_email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drslogindetails`
--

INSERT INTO `drslogindetails` (`dr_name`, `dr_email`, `dr_password`, `dr_gender`) VALUES
('admin', 'abin@gmail.com', '123', 'Male'),
('Dr Akash', 'akash123@gmail.com', '1234', 'Male'),
('Dr. Roshan', 'rohanadm@gmail.com', '1234', 'Male'),
('Dr Reybin', 'reybin@gmail.com', '123', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `patienttkn`
--

DROP TABLE IF EXISTS `patienttkn`;
CREATE TABLE IF NOT EXISTS `patienttkn` (
  `pt_name` varchar(60) NOT NULL,
  `pt_age` int(11) NOT NULL,
  `pt_gen` varchar(10) NOT NULL,
  `pt_phn` bigint(20) NOT NULL,
  `pt_addr` varchar(60) NOT NULL,
  `pt_tkn` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patienttkn`
--

INSERT INTO `patienttkn` (`pt_name`, `pt_age`, `pt_gen`, `pt_phn`, `pt_addr`, `pt_tkn`) VALUES
('Rohan Jacob', 21, 'Male', 9961275807, 'Vaniamparambil', 1),
('Rohan Jacob', 21, 'Male', 9951275807, 'Vaniamparambil', 2),
('Rohan Jacob', 21, 'Male', 9951275807, 'Vaniamparambil', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
