-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 23, 2013 at 08:37 PM
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
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `gallery_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `description` text,
  `namespace_id` int(10) unsigned NOT NULL DEFAULT '1',
  `is_active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`gallery_id`),
  KEY `namespace` (`namespace_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `title`, `description`, `namespace_id`, `is_active`) VALUES
(5, 'Andrej', 'description to andrej', 12, 1),
(6, 'Skuska title', 'opis skusky len  v kratkosti', 1, 1),
(7, 'Konferencie', 'tearrrrr', 14, 1),
(8, 'Pomaranče', 'skúška novej galerky', 15, 1),
(10, 'test galerky', 'druha galeria popis', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_namespace`
--

CREATE TABLE IF NOT EXISTS `gallery_namespace` (
  `namespace_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`namespace_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `gallery_namespace`
--

INSERT INTO `gallery_namespace` (`namespace_id`, `name`) VALUES
(1, 'default'),
(2, 'products'),
(3, 'fruits'),
(12, 'Ado'),
(13, 'asd'),
(14, 'teraz'),
(15, 'Moja Nová Galéria');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_photo`
--

CREATE TABLE IF NOT EXISTS `gallery_photo` (
  `photo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gallery_id` int(10) unsigned NOT NULL,
  `filename` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(500) DEFAULT 'none',
  `is_active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `namespace_id` int(10) unsigned NOT NULL,
  `data_row` varchar(11) DEFAULT '1',
  `data_col` varchar(11) DEFAULT '1',
  PRIMARY KEY (`photo_id`),
  KEY `gallery_id` (`gallery_id`),
  KEY `namespace_id` (`namespace_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=206 ;

--
-- Dumping data for table `gallery_photo`
--

INSERT INTO `gallery_photo` (`photo_id`, `gallery_id`, `filename`, `title`, `description`, `is_active`, `namespace_id`, `data_row`, `data_col`) VALUES
(36, 6, '36.jpg', 'none', 'none', 1, 1, '1', '3'),
(37, 6, '37.jpg', 'Sasuke', 'Itachi & Sasuke 2', 1, 1, '1', '1'),
(38, 6, '38.jpg', 'none', 'none', 1, 1, '2', '1'),
(53, 7, '53.jpg', 'Itachi', 'Itachi and Sasuke', 1, 14, '1', '1'),
(71, 8, '71.jpg', 'vcielka', 'I believe I can fly', 1, 15, '2', '4'),
(90, 8, '72.jpg', 'none', '', 1, 15, '1', '2'),
(100, 6, '100.jpg', 'none', '', 1, 1, '1', '4'),
(101, 8, '101.jpg', 'katuska', 'som uzasnak', 1, 15, '1', '1'),
(106, 8, '106.jpg', 'none', '', 1, 15, '1', '4'),
(108, 8, '108.jpg', 'none', '', 1, 15, '2', '2'),
(110, 8, '110.jpg', 'none', '', 1, 15, '1', '3'),
(112, 8, '112.jpg', 'none', '', 1, 15, '2', '5'),
(113, 8, '113.jpg', 'none', '', 1, 15, '1', '5'),
(132, 8, '132.jpg', 'none', '', 1, 15, '3', '2'),
(133, 8, '133.jpg', 'none', '', 1, 15, '2', '3'),
(159, 5, '134.jpg', 'none', '', 1, 12, '1', '1'),
(175, 5, '160.jpg', 'none', '', 1, 12, '1', '2'),
(176, 5, '176.jpg', 'none', '', 1, 12, '1', '3'),
(178, 5, '178.jpg', 'none', '', 1, 12, '1', '5'),
(180, 6, '180.jpg', 'none', '', 1, 1, '1', '5'),
(181, 6, '181.jpg', 'none', '', 1, 1, '2', '2'),
(182, 6, '182.jpg', 'none', '', 1, 1, '1', '2'),
(183, 6, '183.jpg', 'none', '', 1, 1, '2', '3'),
(184, 6, '184.jpg', 'none', '', 1, 1, '2', '4'),
(193, 7, '193.jpg', 'none', '', 1, 14, '1', '1'),
(194, 7, '194.jpg', 'none', '', 1, 14, '1', '1'),
(195, 7, '195.jpg', 'none', '', 1, 14, '1', '1'),
(196, 10, '196.jpg', 'none', '', 1, 12, '3', '1'),
(197, 10, '197.jpg', 'none', '', 1, 12, '2', '1'),
(198, 10, '198.jpg', 'none', '', 1, 12, '3', '3'),
(199, 10, '199.jpg', 'none', '', 1, 12, '1', '2'),
(202, 10, '200.jpg', 'none', '', 1, 12, '2', '3'),
(203, 10, '203.jpg', 'none', '', 1, 12, '1', '3'),
(204, 10, '204.jpg', 'nazov', 'test obrazka', 1, 12, '1', '1'),
(205, 10, '205.jpg', 'none', '', 1, 12, '2', '2');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`namespace_id`) REFERENCES `gallery_namespace` (`namespace_id`) ON UPDATE CASCADE;

--
-- Constraints for table `gallery_photo`
--
ALTER TABLE `gallery_photo`
  ADD CONSTRAINT `gallery_photo_ibfk_2` FOREIGN KEY (`gallery_id`) REFERENCES `gallery` (`gallery_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
