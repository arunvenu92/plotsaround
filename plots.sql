-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2016 at 05:04 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `plots`
--

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE IF NOT EXISTS `developer` (
  `dev_id` varchar(10) NOT NULL,
  `dev_name` varchar(50) NOT NULL,
  `builder_name` varchar(50) NOT NULL,
  `image` varchar(20) NOT NULL,
  `progress` varchar(50) NOT NULL,
  `isApproved` tinyint(1) NOT NULL,
  PRIMARY KEY (`dev_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`dev_id`, `dev_name`, `builder_name`, `image`, `progress`, `isApproved`) VALUES
('dakha345', 'Daksha Builders', 'Daksha', './images/daksha.jpg', 'Complete', 1),
('dak_367', 'Daksha Vridha', 'Daksha', './images/p13.jpg', 'In Progress', 1),
('shobha123', 'Shobha Builders', 'Shobha', './images/shobha.jpg', 'InProgress', 1);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `dev_id` varchar(50) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  PRIMARY KEY (`dev_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
