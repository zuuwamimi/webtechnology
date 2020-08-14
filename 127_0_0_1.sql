-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 11:46 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tour`
--
CREATE DATABASE IF NOT EXISTS `tour` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tour`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(1, 'a1', 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `bookingg`
--

CREATE TABLE IF NOT EXISTS `bookingg` (
  `book_id` int(20) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(200) NOT NULL,
  `dateofbook` date NOT NULL,
  `place_book` varchar(200) NOT NULL,
  `rrr` int(11) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `bookingg`
--

INSERT INTO `bookingg` (`book_id`, `book_name`, `dateofbook`, `place_book`, `rrr`) VALUES
(1, 'hotel', '2020-08-15', 'paje', 2),
(2, 'hotel', '2020-08-16', 'paje', 2),
(3, 'history', '2020-08-15', 'paje', 2),
(4, '', '0000-00-00', '', 0),
(5, 'wwww`', '0000-00-00', '', 0),
(6, '', '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cust_book`
--

CREATE TABLE IF NOT EXISTS `cust_book` (
  `cust_book_id` int(20) NOT NULL,
  `book_id` int(20) NOT NULL,
  `custom_id` int(20) NOT NULL,
  PRIMARY KEY (`cust_book_id`),
  KEY `custom_id` (`custom_id`),
  KEY `cust_book` (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` int(20) NOT NULL AUTO_INCREMENT,
  `first` varchar(200) NOT NULL,
  `last` varchar(200) NOT NULL,
  `pho_no` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `first`, `last`, `pho_no`, `email`, `address`, `gender`, `username`, `password`) VALUES
(1, 'Ali', 'tt', 999999999, 'omar@gmail.com', 'fuoni', 'Male', 'ali', '12345'),
(3, 'kara', 'liy', 998765432, 'omar@gmail.com', 'kwery', 'Female', 'kara1', '1234567'),
(5, 'joy', 'liy', 987654321, 'omar@gmail.com', 'kwerekwe', 'Female', 'joy', 'joy'),
(6, 'ali', 'liy', 9988776, 'omar@gmail.com', 'kwerekwe', 'Male', 'ali', '12');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `pl_id` int(20) NOT NULL,
  `pl_name` varchar(200) NOT NULL,
  `pl_loc` varchar(200) NOT NULL,
  `pl` varchar(200) NOT NULL,
  PRIMARY KEY (`pl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cust_book`
--
ALTER TABLE `cust_book`
  ADD CONSTRAINT `cust_book` FOREIGN KEY (`book_id`) REFERENCES `bookingg` (`book_id`),
  ADD CONSTRAINT `cust_book_ibfk_2` FOREIGN KEY (`custom_id`) REFERENCES `customer` (`cust_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
