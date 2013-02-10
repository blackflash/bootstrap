-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 25, 2013 at 12:35 AM
-- Server version: 5.5.18
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tswp`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_namespace`
--

CREATE TABLE IF NOT EXISTS `gallery_namespace` (
  `namespace_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`namespace_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gallery_namespace`
--

INSERT INTO `gallery_namespace` (`namespace_id`, `name`) VALUES
(1, 'default');

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
  PRIMARY KEY (`photo_id`),
  KEY `gallery_id` (`gallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `text`, `created`, `done`, `user_id`, `project_id`, `list_id`) VALUES
(1, 'Provést analýzu', '2011-12-06 11:30:00', 1, 2, NULL, 1),
(2, 'Implementace úkolníčku', '2011-12-06 11:35:50', 1, 3, NULL, 1),
(3, 'Sepsání dokumentace', '2011-12-07 15:23:30', 0, 2, NULL, 1),
(4, 'Opravit chybu #42', '2011-12-10 15:10:40', 0, 3, NULL, 2),
(5, 'Zavolat klientovi', '2011-12-10 16:44:32', 0, 2, NULL, 2),
(6, 'SWOT analýza', '2011-12-12 09:42:31', 1, 2, NULL, 3),
(7, 'Analýza trhu', '2011-12-12 09:53:13', 1, 3, NULL, 3),
(8, 'Opravit chybu #51', '2011-12-12 13:10:05', 0, 3, NULL, 2),
(9, 'Nastavení serveru', '2012-11-29 23:00:00', 0, 2, 1, 1),
(10, 'Benchmark nového stroje', '2011-12-15 10:21:52', 1, 2, NULL, 3),
(12, 'Nastavení serveru', '2012-11-30 07:30:35', 0, 1, 1, 1),
(13, 'asddsa', '2012-11-30 07:31:31', 1, 2, 1, 2),
(14, 'asdsdasda', '2012-11-30 07:31:38', 0, 2, 1, 2);

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
(7, 'jozef', 'Jozef Mak', 'jozko', 'jozo@skuska.sk', 'asddas', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-11-30 00:38:08'),
(9, 'Adriana', 'Andrea Lopatova', '$2a$07$ueg4m4baudnkkwdwbmrdfu6HEVxJdLD5n8quiltqlvtEjeb1DI35O', 'adriana@azet.sk', 'nemam', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-11-30 00:38:18');

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
