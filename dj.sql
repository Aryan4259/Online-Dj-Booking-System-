-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 17, 2024 at 05:58 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dj`
--
CREATE DATABASE IF NOT EXISTS `dj` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dj`;

-- --------------------------------------------------------

--
-- Table structure for table `book_request`
--

CREATE TABLE IF NOT EXISTS `book_request` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nm` varchar(20) NOT NULL,
  `em` varchar(20) NOT NULL,
  `mo` varchar(20) NOT NULL,
  `event` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `es` time NOT NULL,
  `ef` time NOT NULL,
  `vadd` varchar(60) NOT NULL,
  `addinfo` varchar(60) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `book_request`
--

INSERT INTO `book_request` (`id`, `nm`, `em`, `mo`, `event`, `price`, `date`, `es`, `ef`, `vadd`, `addinfo`, `status`) VALUES
(35, 'Aryan Ukani', 'aryan@123', '8488083038', 'Concert', '800', '2024-02-24', '20:03:00', '00:01:00', '97, yamuna darshan soc motavarachha surat', 'in ram lila ground', 'approved'),
(36, 'Aryan Ukani', 'aryan@123', '8488083038', 'Concert', '800', '2024-02-24', '20:03:00', '00:01:00', '97, yamuna darshan soc motavarachha surat', 'in ram lila ground', 'cancel'),
(37, 'Aryan Ukani', 'aryan@123', '8488083038', 'Concert', '800', '2024-02-14', '20:30:00', '23:39:00', 'nvpas', 'lllll', 'approved'),
(38, 'nitin maldev bhai', 'nitin', '9999', 'Wedding Dj', '800', '2024-02-14', '03:33:00', '03:33:00', 'shrikar hostel shahidchock anand', 'at flet', 'approved'),
(39, 'vishnu tejani', 'aryan@123', '8488083038', 'Night club', '800', '2024-02-18', '09:47:00', '03:19:00', '97, yamuna darshan soc, mota varchha, surat', 'dj night at yogichok', 'cancel'),
(40, 'Keval Marakna', 'aryan@123', '8488083038', 'College Dj', '800', '2024-02-22', '20:30:00', '23:30:00', '308, nistha hostel mota bajar', 'hostel dj', 'approved'),
(41, 'krish', 'krish', '9924038093', 'Wedding Dj', '800', '2024-02-14', '18:08:00', '20:08:00', 'shrikar hostel shahidchock anand', 'jgjggvvbjkbjk', 'approved'),
(42, 'krish bhaveshbhai vi', 'krish@123', '1111111111', 'Wedding Dj', '800', '2024-02-13', '21:23:00', '19:25:00', '143, yamuna darshan soc, mota varchha, surat', 'ramlila medan', 'cancel'),
(43, 'keval mukeshbhai', 'keval@123', '9999999999', 'Concert', '800', '2024-02-21', '15:27:00', '19:30:00', 'rajkot, haridarshan soc, nanabajar', 'weeding', 'approved'),
(44, 'aryan', 'aryan@123', '8488083038', 'Religious Dj', '800', '2024-02-29', '22:38:00', '22:38:00', 'bbbbb  nnn nn ', 'vgfytf gf ghjftyd yuf', 'approved'),
(45, 'Ukani Aryan Nileshbh', 'aryan ukani', '4444444444', 'Concert', '800', '2024-02-29', '16:50:00', '16:43:00', '97 XYZ SOC MOTA VARACHHA', 'yyyyyyy', 'approved'),
(46, 'Ukani Aryan Nileshbh', 'aryan ukani', '4444444444', 'Night club', '800', '2024-02-23', '23:28:00', '23:27:00', '97 XYZ SOC MOTA VARACHHA', 'arytrydrtf', 'cancel');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event1` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event1`, `price`) VALUES
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Concert', '800'),
('Night club', '800'),
('Religious Dj', '800'),
('College Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('College Dj', '800'),
('Wedding Dj', '800'),
('College Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Night club', '800'),
('Night club', '800'),
('Night club', '800'),
('Night club', '800'),
('Concert', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Concert', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Night club', '800'),
('Concert', '800'),
('Wedding Dj', '800'),
('Concert', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Concert', '800'),
('Wedding Dj', '800'),
('Night club', '800'),
('College Dj', '800'),
('College Dj', '800'),
('College Dj', '800'),
('Religious Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Concert', '800'),
('Concert', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Concert', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Concert', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Night club', '800'),
('Wedding Dj', '800'),
('Concert', '800'),
('College Dj', '800'),
('Concert', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Concert', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Concert', '800'),
('Wedding Dj', '800'),
('Concert', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Concert', '800'),
('Concert', '800'),
('Religious Dj', '800'),
('Concert', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Concert', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Concert', '800'),
('Concert', '800'),
('Concert', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Night club', '800'),
('Wedding Dj', '800'),
('College Dj', '800'),
('College Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Concert', '800'),
('Concert', '800'),
('Wedding Dj', '800'),
('Concert', '800'),
('Concert', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Wedding Dj', '800'),
('Concert', '800'),
('Religious Dj', '800'),
('Wedding Dj', '800'),
('Concert', '800'),
('Night club', '800');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `un` varchar(20) NOT NULL,
  `mo` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`un`, `mo`, `pwd`) VALUES
('krish', '9924038093', '123'),
('aryan', '123', '123'),
('aryan', '123', '123'),
('aryan', '123', '123'),
('nitin', '9999', '333'),
('aryan@123', '8488083038', '1111'),
('Abhay', '992463689', 'abhay@1234'),
('krish', '9924038093', '123456'),
('krish@123', '1111111111', '123'),
('keval@123', '9999999999', '999'),
('keval', '5555555555', '111'),
('aryan ukani', '4444444444', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
