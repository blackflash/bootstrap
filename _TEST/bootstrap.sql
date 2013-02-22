-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2013 at 03:32 PM
-- Server version: 5.5.18
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bootstrap`
--

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

CREATE TABLE IF NOT EXISTS `questionnaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `questionnaire`
--

INSERT INTO `questionnaire` (`id`, `product_id`, `time`) VALUES
(1, 1, '2013-02-05 05:14:33'),
(2, 1, '2013-02-05 05:14:49'),
(3, 2, '2013-02-05 05:14:50'),
(4, 4, '2013-02-05 05:14:51'),
(5, 3, '2013-02-05 05:14:51'),
(6, 1, '2013-02-05 05:14:52'),
(7, 1, '2013-02-05 05:15:03'),
(8, 3, '2013-02-05 05:22:36'),
(9, 2, '2013-02-05 05:22:38'),
(10, 2, '2013-02-05 05:22:44'),
(11, 4, '2013-02-05 05:22:45'),
(12, 2, '2013-02-05 05:22:57'),
(13, 1, '2013-02-05 05:25:36'),
(14, 2, '2013-02-05 05:25:37'),
(15, 3, '2013-02-05 05:25:38'),
(16, 4, '2013-02-05 05:25:39');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
