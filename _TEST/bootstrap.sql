-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2013 at 05:23 AM
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
-- Table structure for table `big_data`
--

CREATE TABLE IF NOT EXISTS `big_data` (
  `id` int(11) NOT NULL,
  `field` varchar(5000) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `objectid` varchar(5000) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `phase` varchar(500) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `idx` int(11) NOT NULL,
  `owner` int(11) NOT NULL,
  `bondid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `title`, `description`, `namespace_id`, `is_active`) VALUES
(1, 'apples', 'description for apples\r\n', 3, 1),
(2, 'oranges', 'description for oranges', 3, 1),
(3, 'plastics', 'description for plastics products', 2, 1),
(4, 'default gallery demo', 'description for default gallery', 1, 1),
(5, 'Andrej', 'description to andrej', 12, 1),
(6, 'Skuska title', 'opis skusky len  v kratkosti', 1, 1),
(7, 'teraz', 'tearrrrr', 14, 1),
(8, 'Pomaranče', 'skúška novej galerky', 15, 1);

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
  `ordering` int(10) unsigned NOT NULL,
  `is_active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `namespace_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`photo_id`),
  KEY `gallery_id` (`gallery_id`),
  KEY `namespace_id` (`namespace_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `gallery_photo`
--

INSERT INTO `gallery_photo` (`photo_id`, `gallery_id`, `filename`, `title`, `ordering`, `is_active`, `namespace_id`) VALUES
(1, 1, '4.jpg', 'photo 4', 1, 1, 3),
(2, 1, '7.jpg', 'photo 7', 2, 1, 3),
(3, 2, '8.jpg', 'orange 1', 1, 1, 3),
(4, 2, '9.jpg', 'orange 2', 2, 1, 3),
(36, 6, '36.jpg', 'none', 0, 1, 1),
(37, 6, '37.jpg', 'none', 0, 1, 1),
(38, 6, '38.jpg', 'none', 0, 1, 1),
(53, 7, '53.jpg', 'none', 0, 1, 14),
(56, 7, '56.jpg', 'none', 0, 1, 14),
(69, 8, '57.jpg', 'none', 0, 1, 15),
(70, 8, '70.jpg', 'none', 0, 1, 15),
(71, 8, '71.jpg', 'none', 0, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `title`) VALUES
(1, 'Projekt A'),
(2, 'Projekt B'),
(3, 'Projekt C');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `owner` int(11) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_start` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_finish` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `priority` int(11) NOT NULL,
  `done` tinyint(1) NOT NULL DEFAULT '0',
  `repository_link` varchar(255) NOT NULL,
  `repository_login` varchar(255) NOT NULL,
  `repository_pass` varchar(255) NOT NULL,
  `tos` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `status`, `description`, `owner`, `date_created`, `date_start`, `date_finish`, `priority`, `done`, `repository_link`, `repository_login`, `repository_pass`, `tos`) VALUES
(1, 'Projekt A', 'open', 'projekt A bol vytvoreny na predmet MPV', 0, '2012-11-26 02:41:00', '2012-11-25 23:00:00', '2012-12-25 23:00:00', 0, 0, '', '', '', ''),
(2, 'Projekt B', 'open', 'skuska opisu projektu', NULL, '2012-11-27 01:03:34', '2012-11-27 05:00:00', '2012-11-30 22:00:00', 0, 0, '', '', '', ''),
(3, 'Test project', 'open', 'test description', 0, '2012-11-26 10:31:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 0, 'https://github.com/blackflash/TSWP', 'blackflash@centrum.sk', 'Pismenko12', 'on'),
(4, 'projekt 2', 'done', 'aaaaa skuska', 0, '2012-11-26 10:32:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10, 0, 'https://github.com/blackflash/TSWP', 'blackflash@centrum.sk', 'Pismenko12', 'on'),
(5, 'asd', 'open', 'asd', 0, '2012-11-29 23:00:00', '0000-00-00 00:00:00', '2012-11-29 17:57:00', 4, 0, 'das', 'asd', 'ads', 'on'),
(6, 'as', 'open', 'sda', 0, '2012-11-26 11:14:45', '2012-11-24 03:37:00', '2012-12-06 23:00:00', 5, 0, 'dsa', 'asd', 'ads', 'on'),
(7, 'Andrej Gaspar projekt', 'closed', 'asd', 0, '2012-11-26 11:15:25', '2012-11-28 07:30:00', '2012-12-21 09:16:00', 2, 0, 'das', 'dsa', 'das', 'on'),
(8, 'PRoject name', 'open', 'TEst vlozenia projektu', 0, '2012-11-30 07:41:35', '2012-11-07 05:00:00', '2012-11-30 08:00:00', 5, 0, 'https://github.com/blackflash/TSWP', 'blackflash@centrum.sk', 'ads', 'on'),
(9, 'PRoject name', 'open', 'Kratky popis projektu', 0, '2012-11-30 07:54:24', '2012-11-29 23:00:00', '2012-11-30 07:56:00', 5, 0, 'https://github.com/blackflash/TSWP', 'test', 'password', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `done` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  `project_id` int(11) unsigned DEFAULT NULL,
  `list_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order` (`list_id`,`done`,`created`),
  KEY `fk_user` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `text`, `created`, `done`, `user_id`, `project_id`, `list_id`) VALUES
(18, 'Galeria -> editacia fotiek', '2013-02-04 02:29:50', 0, 1, 1, 2),
(19, 'Mazanie namespace', '2013-02-04 02:30:02', 0, 1, 1, 2),
(20, 'Mazanie galerii', '2013-02-04 02:30:09', 0, 1, 1, 2),
(21, 'mazanie celej galerie fotiek ( galeria + fotky )', '2013-02-04 02:30:42', 0, 1, 1, 2),
(22, 'Zoradovanie fotiek ( idealne len drag&drop )', '2013-02-04 02:31:18', 0, 1, 1, 2),
(23, 'QUIZ si urob na data analysis\r\n', '2013-02-04 02:34:45', 0, 1, 1, 2),
(24, 'na konci oddelit vsetko do nejakeho modulu alebo nieco', '2013-02-04 02:35:08', 0, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(4) NOT NULL,
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `password`, `email`, `description`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, 'admin', 'Andrej Gaspar', '$2a$07$4nocce701jq1jlcisgj0zeNsb58WlnU2adrYtlCPohHblghvzhAhq', 'andrej.gaspar@student.tuke.sk', 'spravca webu', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-11-30 00:34:07'),
(2, 'peter', 'Peter Kolumbus', '$2a$07$euva7wb1dhob9ojzdp4tjuRDaoeGJpPuscbytC45Ezu4fFN.OJtGW', 'peter@mojmail.sk', 'zastupca admina', 1, 0, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2012-11-10 00:45:22', '2012-08-31 12:32:09', '2012-11-30 06:17:17'),
(3, 'kamil', 'Kamil Lotsky', '$2a$07$5943a502b989b22e1fe76udHamCevD7lekFrrwLA5AICeL.bP8vnW', 'kamil@centrum.sk', 'student', 1, 0, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2012-11-14 10:32:50', '2012-10-25 00:58:42', '2012-11-30 00:37:57'),
(6, 'john', 'John Doe', 'asddd', 'john.doe@nettuts.com', 'lorem ipsum', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-11-30 00:34:58'),
(7, 'jozef', 'Jozef Mak', 'jozko', 'jozo@skuska.sk', 'asddas', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-11-30 00:38:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_type` enum('user','teacher','admin') COLLATE utf8_bin NOT NULL,
  `project_id` int(11) NOT NULL,
  `birthdate` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_id`, `user_type`, `project_id`, `birthdate`, `gender`) VALUES
(5, 1, 'admin', 1, NULL, NULL),
(6, 2, 'user', 1, '1988', 'male');

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

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`list_id`) REFERENCES `list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
