-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2013 at 09:51 PM
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
-- Table structure for table `component_compact_news`
--

CREATE TABLE IF NOT EXISTS `component_compact_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `link` varchar(255) DEFAULT '#',
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `component_compact_news`
--

INSERT INTO `component_compact_news` (`id`, `is_active`, `link`, `title`, `text`, `date`, `image`) VALUES
(2, 1, 'http://www.venture-lab.org/', 'We are part of Stanford project', 'In winter 2012 we became part of Stanford project and thanks to its Startup Boards course we were able to recruit first class Board members and get advice that moved our project well ahead. ', '2013-03-08 23:56:04', '2.jpg'),
(18, 1, 'http://wayra.org/', 'Wayra competition', 'Our project has been selected as one of the 281 startups with highest potential to participate in next evaluation phase.', '2013-03-09 16:38:41', '18.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
