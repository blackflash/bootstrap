-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2013 at 10:51 PM
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
-- Table structure for table `campaign`
--

CREATE TABLE IF NOT EXISTS `campaign` (
  `campaign_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `status` enum('created','open','closed','done') NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `main_question` varchar(500) NOT NULL,
  `generated_link` varchar(255) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `date_start` timestamp NULL DEFAULT NULL,
  `date_finish` timestamp NULL DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `priority` int(11) DEFAULT NULL,
  `show_title` tinyint(1) DEFAULT '0',
  `show_description` tinyint(1) DEFAULT '0',
  `tos` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`campaign_id`),
  KEY `location_id` (`location_id`),
  KEY `location_id_3` (`location_id`),
  KEY `category_id` (`category_id`),
  KEY `location_id_4` (`location_id`),
  KEY `location_id_5` (`location_id`),
  KEY `location_id_6` (`location_id`),
  KEY `location_id_7` (`location_id`),
  KEY `location_id_2` (`location_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`campaign_id`, `user_id`, `category_id`, `status`, `title`, `description`, `main_question`, `generated_link`, `location_id`, `date_start`, `date_finish`, `created_time`, `priority`, `show_title`, `show_description`, `tos`) VALUES
(1, 0, 5, 'done', 'Kampaň obedových jedál', 'Kampaň zameraná na získanie spätnej väzby v rámci spokojnosti zákazníkov s obedovým menu', 'Ktoré z týchto jedál by ste preferovali v našej obedovej ponuke ?', '', 3, '2013-02-28 23:00:00', '2013-03-04 20:34:00', '2013-03-01 01:17:22', 0, 0, 0, NULL),
(2, 0, 2, 'created', 'Kampaň výberu kozmetiky Avon', 'Kampaň venovaná záujemcom o kozmetiku Avon', 'Ktorý produkt z tejto ponuky by ste si chceli u nás objednať ? ', '', 12, '2013-03-06 23:00:00', '2013-03-02 13:08:00', '2013-03-01 01:20:51', 0, 0, 0, NULL),
(10, 0, 2, 'created', 'Nákup kozmetických výrobkov', 'Krátka kampaň v podaní firmy Avon, na zistenie spotreby určitého druhu produktov Avon', 'Ktorý z týchto kozmetických výrobkov by ste preferovali ? ', '', 4, '2013-03-02 11:59:00', '2013-03-04 23:00:00', '2013-03-02 12:42:20', 50, 1, 1, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `campaign_ps`
--

CREATE TABLE IF NOT EXISTS `campaign_ps` (
  `ps_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ps_id`),
  KEY `category_id` (`category_id`),
  KEY `category_id_2` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `campaign_ps`
--

INSERT INTO `campaign_ps` (`ps_id`, `title`, `description`, `image`, `category_id`) VALUES
(51, 'Anticelulitídna telová emulzia', 'pochádza z Japonska, jej výťažok je bohatý na omega-3 mastné kyseliny, ktoré pomáhajú udržiavať metabolizmus v normálnom stave. Pomáha redukovať celulitídu a predcháza tvorbe tukových buniek v budúcnosti.', '51.jpg', 2),
(52, 'Toaletná voda infividual blue free for him', 'Zažite pocit slobody, dajte vášmu životu smer, aký ste si vždy priali.', '52.jpg', 2),
(53, 'POSILŇUJÚCI GÉL NA NECHTY', 'Posilňujúci gél na nechty so pšeničnými proteínmi a kalciom. Gélové zloženie posilňuje nechty. Vytvára tvrdý, hladký a lesklý povrch. Použitie: Nanášajte pod lak ako spevňujúci podklad a na váš lak na nechty pre spevnenie.', '53.jpg', 2),
(54, 'TOALETNÝ PARFUM PERCEIVE', 'Sebavedomá vôňa, v ktorej sa prelínajú tóny žltej frézie a bieleho korenia s exotickými akordami sladkej hrušky, korenistého klinčeka a zmyselného pižma. Prinesie vám pocit pokoja a harmónie..', '54.jpg', 2),
(55, 'menu 01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor ', '55.jpg', 5),
(59, 'menu 02', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor ', '59.jpg', 5),
(60, 'menu 03', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor ', '60.jpg', 5),
(61, 'menu 04', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor ', '61.jpg', 5),
(62, 'menu 05', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor ', '62.jpg', 5),
(63, 'Karfiol', 'opaženy karfiol s cibuľkou', '63.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `campaign_ps_category`
--

CREATE TABLE IF NOT EXISTS `campaign_ps_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `campaign_ps_category`
--

INSERT INTO `campaign_ps_category` (`category_id`, `title`, `description`) VALUES
(1, 'Servis', 'Hotel Skúška servisy'),
(2, 'Kozmetika', 'Kozmetika Avon'),
(5, 'Dish menu', 'Research about our dish menu'),
(6, 'Bank services', 'Short info about new category :)');

-- --------------------------------------------------------

--
-- Table structure for table `campaign_result`
--

CREATE TABLE IF NOT EXISTS `campaign_result` (
  `campaign_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `campaign_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `ps_id` int(11) DEFAULT NULL,
  `submit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`campaign_result_id`),
  KEY `campaign_id` (`campaign_id`),
  KEY `ps_id` (`ps_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `campaign_result`
--

INSERT INTO `campaign_result` (`campaign_result_id`, `campaign_id`, `user_id`, `ps_id`, `submit_time`, `comment`) VALUES
(2, 10, 0, 51, '2013-03-03 03:38:02', NULL),
(3, 10, 0, 52, '2013-03-03 03:38:08', NULL),
(4, 10, 0, 53, '2013-03-03 03:38:09', NULL),
(5, 10, 0, 54, '2013-03-03 03:38:10', NULL),
(6, 10, 0, 51, '2013-03-03 03:38:11', NULL),
(7, 10, 0, 52, '2013-03-03 03:38:11', NULL),
(8, 10, 0, 53, '2013-03-03 03:38:12', NULL),
(9, 10, 0, 54, '2013-03-03 03:38:12', NULL),
(10, 10, 0, 51, '2013-03-03 03:38:12', NULL),
(11, 10, 0, 52, '2013-03-03 03:38:13', NULL),
(12, 10, 0, 51, '2013-03-03 03:38:13', NULL),
(13, 10, 0, 51, '2013-03-03 03:38:19', NULL),
(14, 10, 0, 51, '2013-03-03 03:38:19', NULL),
(15, 10, 0, 51, '2013-03-03 03:38:19', NULL),
(16, 10, 0, 53, '2013-03-03 03:38:20', NULL),
(17, 10, 0, 52, '2013-03-03 03:38:20', NULL),
(18, 10, 0, 54, '2013-03-03 03:38:21', NULL),
(19, 10, 0, 51, '2013-02-05 03:42:36', NULL),
(20, 1, 0, 60, '2013-03-03 03:43:10', NULL),
(21, 1, 0, 62, '2013-02-05 03:43:11', NULL),
(22, 1, 0, 59, '2013-03-03 03:43:12', NULL),
(23, 1, 0, 55, '2013-03-03 03:43:13', NULL),
(24, 1, 0, 60, '2013-03-03 03:43:14', NULL),
(25, 1, 0, 60, '2013-03-03 03:43:14', NULL),
(26, 1, 0, 61, '2013-03-03 03:43:15', NULL),
(27, 1, 0, 61, '2013-03-03 03:43:16', NULL),
(28, 1, 0, 62, '2013-03-03 03:43:17', NULL),
(29, 1, 0, 55, '2013-03-03 03:43:18', NULL),
(30, 1, 0, 61, '2013-03-03 12:28:37', NULL),
(31, 1, 0, 60, '2013-02-06 12:28:37', NULL),
(32, 1, 0, 55, '2013-03-03 12:28:38', NULL),
(33, 1, 0, 62, '2013-03-03 12:28:40', NULL),
(34, 10, 0, 52, '2013-03-03 14:20:51', NULL),
(35, 10, 0, 53, '2013-03-03 14:20:51', NULL),
(36, 10, 0, 54, '2013-03-03 14:20:52', NULL),
(37, 10, 0, 51, '2013-03-03 20:11:24', NULL),
(38, 10, 0, 53, '2013-03-03 20:11:32', NULL),
(39, 10, 0, 54, '2013-03-03 20:11:33', NULL),
(40, 10, 0, 53, '2013-03-03 20:11:33', NULL),
(41, 10, 0, 54, '2013-03-03 20:11:39', NULL),
(42, 10, 0, 54, '2013-03-03 20:11:40', NULL),
(43, 10, 0, 54, '2013-03-03 20:11:40', NULL),
(44, 2, 0, 51, '2013-03-03 20:47:27', NULL),
(45, 2, 0, 52, '2013-03-03 20:47:34', NULL),
(46, 2, 0, 54, '2013-03-03 20:47:34', NULL),
(47, 2, 0, 53, '2013-03-03 20:47:35', NULL),
(48, 1, 0, 55, '2013-03-03 21:44:22', NULL),
(49, 1, 0, 55, '2013-03-03 21:44:23', NULL),
(50, 1, 0, 55, '2013-03-03 21:44:24', NULL),
(51, 1, 0, 59, '2013-03-03 21:44:30', NULL),
(52, 1, 0, 59, '2013-03-03 21:44:31', NULL),
(53, 1, 0, 55, '2013-03-03 23:19:35', NULL),
(54, 10, 0, 52, '2013-03-17 23:35:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `title`, `description`, `created_time`) VALUES
(1, 'Prague', 'hotels chains in Prague', '2013-03-01 01:07:29'),
(2, 'Košice', 'Pharmacies in Košice', '2013-03-01 01:13:35'),
(5, 'Brno', 'kratky popis brna', '2013-03-01 04:01:02'),
(6, 'Prešov', 'presovka lekaren', '2013-03-01 04:04:31'),
(8, 'Brusel', 'Short info about city or country', '2013-03-04 01:23:51'),
(10, 'Tatranská Lomnica', 'TMR Hotel', '2013-03-27 20:17:59'),
(12, 'Jasná', 'TRM Hotel', '2013-03-27 20:22:18');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `component_compact_news`
--

INSERT INTO `component_compact_news` (`id`, `is_active`, `link`, `title`, `text`, `date`, `image`) VALUES
(2, 1, 'http://www.venture-lab.org/', 'We are part of Stanford project', 'In winter 2012 we became part of Stanford project and thanks to its Startup Boards course we were able to recruit first class Board members and get advice that moved our project well ahead. ', '2013-03-08 23:56:04', '2.jpg'),
(18, 1, 'http://wayra.org/', 'Wayra competition', 'Our project has been selected as one of the 281 startups with highest potential to participate in next evaluation phase.', '2013-03-09 16:38:41', '18.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `component_slider`
--

CREATE TABLE IF NOT EXISTS `component_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `link` varchar(255) DEFAULT '#',
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `paragraph` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `component_slider`
--

INSERT INTO `component_slider` (`id`, `is_active`, `link`, `title`, `text`, `paragraph`, `date`, `image`) VALUES
(1, 1, '#', 'Dynamic feedback', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. ', '0000-00-00 00:00:00', '1.jpg'),
(2, 1, '#', 'Cool looking system', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ', '0000-00-00 00:00:00', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_component`
--

CREATE TABLE IF NOT EXISTS `dashboard_component` (
  `dashboard_component_id` int(11) NOT NULL AUTO_INCREMENT,
  `data_size_x` varchar(255) NOT NULL,
  `data_size_y` varchar(255) NOT NULL,
  `data_col` varchar(255) NOT NULL,
  `data_row` varchar(255) NOT NULL,
  `d_c_params_id` int(11) NOT NULL,
  PRIMARY KEY (`dashboard_component_id`),
  KEY `d_c_params_id` (`d_c_params_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_component_params`
--

CREATE TABLE IF NOT EXISTS `dashboard_component_params` (
  `d_c_params_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `parameter` varchar(255) NOT NULL,
  PRIMARY KEY (`d_c_params_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_settings`
--

CREATE TABLE IF NOT EXISTS `dashboard_settings` (
  `dashboard_id` int(11) NOT NULL AUTO_INCREMENT,
  `dashboard_component_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`dashboard_id`),
  KEY `dashboard_component_id` (`dashboard_component_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `title`, `description`, `namespace_id`, `is_active`) VALUES
(5, 'Andrej', 'description to andrej', 12, 1),
(6, 'Skuska title', 'opis skusky len  v kratkosti', 1, 1),
(7, 'Konferencie', 'tearrrrr', 14, 1),
(8, 'Pomaranče', 'skúška novej galerky', 15, 1),
(10, 'test galerky', 'druha galeria popis', 12, 1),
(11, '', '', 1, 0),
(12, 'Video', 'video description', 16, 1),
(14, 'Name of new gallery', 'short description', 17, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_namespace`
--

CREATE TABLE IF NOT EXISTS `gallery_namespace` (
  `namespace_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`namespace_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

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
(15, 'Moja Nová Galéria'),
(16, 'VIdeo'),
(17, 'New Namespace');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=213 ;

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
(178, 5, '178.jpg', 'none', '', 1, 12, '1', '4'),
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
(199, 10, '199.jpg', 'none', '', 1, 12, '2', '2'),
(202, 10, '200.jpg', 'none', '', 1, 12, '2', '3'),
(203, 10, '203.jpg', 'none', '', 1, 12, '1', '2'),
(204, 10, '204.jpg', 'nazov', 'test obrazka', 1, 12, '1', '1'),
(205, 10, '205.jpg', 'none', '', 1, 12, '1', '3'),
(210, 14, '206.jpg', 'Naruto', 'Shippuden', 1, 17, '1', '3'),
(211, 14, '211.jpg', 'none', '', 1, 17, '1', '2'),
(212, 14, '212.jpg', 'none', '', 1, 17, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_video`
--

CREATE TABLE IF NOT EXISTS `gallery_video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `namespace_id` int(11) NOT NULL,
  `gallery_id` int(11) unsigned DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `link` varchar(2500) DEFAULT NULL,
  `data_col` varchar(11) DEFAULT '1',
  `data_row` varchar(11) DEFAULT '1',
  PRIMARY KEY (`video_id`),
  KEY `namespace_id` (`namespace_id`),
  KEY `namespace_id_2` (`namespace_id`),
  KEY `gallery_id` (`gallery_id`),
  KEY `gallery_id_2` (`gallery_id`),
  KEY `gallery_id_3` (`gallery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `gallery_video`
--

INSERT INTO `gallery_video` (`video_id`, `namespace_id`, `gallery_id`, `title`, `description`, `is_active`, `link`, `data_col`, `data_row`) VALUES
(11, 16, 12, 'asd', 'asd', 1, 'https://vimeo.com/60679161/?autoplay=1', '1', '1'),
(13, 1, 6, 'dsad', 'sasdasda', 1, 'http://vimeo.com/60679161/?autoplay=1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kickstarter`
--

CREATE TABLE IF NOT EXISTS `kickstarter` (
  `name` varchar(86) DEFAULT NULL,
  `author` varchar(41) DEFAULT NULL,
  `description` varchar(151) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `funded` int(5) DEFAULT NULL,
  `pledge` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kickstarter`
--

INSERT INTO `kickstarter` (`name`, `author`, `description`, `location`, `funded`, `pledge`) VALUES
(' ALAS VEGAS: an RPG of bad memories, bad luck & bad blood', ' James Wallis', ' ALAS VEGAS is an RPG miniseries about amnesia, sin, horror and gambling, by ''the godfather of indie-game design''.', ' London, United Kingdom', 330, 9902),
(' Dinosaurs of the Lost Valley', ' Jeff Dee', ' Exquisite dinosaur artwork by Jeff Dee and Talzhemir, and a dinosaur sourcebook for Cavemaster(tm) - the Stone Age RPG!', ' Austin, TX', 37, 755),
(' Trifecta - A Card Game For Two Players', ' Ashley Andersen', ' A game meant to fill a niche lacking in traditional gaming. A simple, portable, two player game with theming suited for everyone.', ' Toronto, Canada', 58, 2901),
(' Dragon Whisperer', ' Erik Dahlman', ' A family card game designed by Richard Borg that explores a rich and vibrant fantasy world created by Albino Dragon.', ' Austin, TX', 188, 9449),
(' 3D printed kits of the Ffestiniog Englands from laser scans.', ' Chris Thorpe from The Flexiscale Company', ' The Ffestiniog Englands are the world''s oldest working narrow gauge engines. We''re laser scanning them to make the most accurate kits.', ' Porthmadog, United Kingdom', 69, 3460),
(' Doppelganger: The Universal Game Piece.', ' Rodney Benesh', ' The Doppelganger is a digital board and role playing game piece. Now you can upload your pictures and personalize your gameplay!', ' Cedar Rapids, IA', 52, 23515),
(' Wizard''s Brew -- Race to create the Elixir of Life!', ' Gryphon and Eagle Games -- Keith Blume', ' An interactive board game by designers Alan R. Moon & Aaron Weissblum involving auctions, a race & beautiful art. What''s not to like?', ' Chicago, IL', 101, 10151),
(' Blasphemous Cocktails', ' Stephen Wollett', ' Horror, Alcohol, Gaming, and more. See what mysteries were inspired by the Cthulhu Mythos and creepy things that crawl in the night.', ' Fawn, PA', 181, 4530),
(' Tabletop Towns.', ' Julian G Hicks', ' A set of practical, high quality, laminated, fold flat, cardboard buildings for use with any 28mm wargame/tabletop roleplaying system.', ' Fishguard, United Kingdom', 130, 7176),
(' The Dice Tower  - 2013', ' Tom Vasel', ' The 9th season of the Dice Tower is around the corner, with more convention coverage, more reviews, more podcasts, more entertainment!', ' Homestead, FL', 346, 69367),
(' Margaret Weis Productions: Cortex Plus Hacker''s Guide', ' Margaret Weis Productions', ' An anthology of ways to use Cortex Plus from MWP''s award-winning Leverage & Smallville RPGs: hacks, settings, and options!', ' Williams Bay, WI', 291, 43775),
(' Zogar''s Gaze', ' Jason Glover', ' Are you ready to explore the depths of Zogar’s dungeon in this frantic press-your-luck card game? Beware, you are not alone...', ' Naperville, IL', 569, 42704),
(' Formula E', ' Springboard ... Powered by Game Salute', ' Elephants push each other down the track, dodging Holy Cows and the fearsome Mouse. It''s Racing in a Whole New Weight Class.', ' Edmonds, WA', 101, 25325),
(' Through the Breach: A Malifaux Roleplaying Game', ' Wyrd Miniatures', ' A story-driven, roleplaying experience set in Wyrd''s world of Malifaux.', ' Kennesaw, GA', 813, 243945),
(' Deluxe Tunnels & Trolls', ' Richard Loomis', ' The team who created the classic role-playing game Tunnels & Trolls comes together again to make the finest edition yet.', ' Phoenix, AZ', 482, 125440),
(' Sorcerer Upgrade', ' Ron Edwards', ' Annotated Sorcerer''s art and printing is funded - now let''s celebrate!', ' Chicago Metropolitan Area, IL', 535, 26792),
(' Polaris - 3 new decks of Vända Playing Cards printed by USPC', ' David Goldklang', ' Custom designed decks of playing cards + woodcut accessories + poker chips', ' San Francisco, CA', 304, 45666),
(' Et Tu? The Murder Mystery Evening Generator', ' James Wright', ' Procedurally generated murder mystery evenings; unlimited homicidal fun for all your friends and family!', ' London, United Kingdom', 104, 8357),
(' Republishing: The World of Synnibarr', ' Raven McCracken', ' Welcome back! This is a project for the new edition of the RPG, The World of Synnibarr. By Raven c.s. McCracken.', ' Seattle, WA', 220, 7710),
(' Hexels:  The completely modular Settlers of Catan game board', ' Tim Walsh', ' Keep your Settlers of Catan game board from falling apart in any layout you can think of.', ' San Francisco, CA', 260, 130084),
(' Tomorrow: an apocalyptic nightmare', ' Conquistador Games', ' You are a world leader in the near-future, forced to depopulate the world to ensure human survival in this cooperative/competitive game', ' Columbus, OH', 445, 66820),
(' Matching Lions Game', ' Sonya Justice', ' Very simple, very fun game about lions, zebras, antelopes, elephants and hippopotamuses. Build a herd of zebras or antelopes to win!', ' Graham, NC', 865, 3030),
(' Guilds of Cadwallon', ' CoolMiniOrNot', ' Quick tactical boardgame set in the City of Thieves! From the legendary Confrontation universe.', ' Atlanta, GA', 2338, 116938),
(' Fate Core', ' Fred Hicks / Evil Hat Productions', ' Characters live at the core of Fate! Fate Core is the latest edition of Evil Hat Productions'' popular Fate roleplaying game system.', ' Hillandale, MD', 14445, 433365),
(' Kingdom Death : Monster', ' Kingdom Death', ' Cooperative board game set in a nightmare-horror world. Fight for your life, scavenge, craft, and band together to survive.', ' Brooklyn, NY', 5856, 2049721),
(' The Guide to Glorantha', ' Rick Meints', ' A two-volume set of 10" x 12" color hardback books containing the geography, history and cultures of Glorantha.', ' Ann Arbor, MI', 714, 260962),
(' Sentinels of the Multiverse: Shattered Timelines', ' GreaterThanGames', ' Shattered Timelines is the third expansion to the cooperative comic book card game Sentinels of the Multiverse!', ' St Louis, MO', 926, 185200),
(' Shadow of the Sun, The Valkyrie Incident, and Stone & Relic', ' smallboxgames', ' 3 new card games from Small Box Games.  Back to our roots - big card games in small boxes with fantastic art and clever card play.', ' Stockbridge, GA', 318, 31837),
(' Gnomes: The Great Sweeping Of Ammowan', ' Robert Burke', ' A storytelling game for families. Create shared memories of the time your family "found gnomes living in the yard".', ' Charlotte, NC', 403, 4030),
(' Trick or Treat Card Game', ' Patrick Leder', ' A rummy-style card game for 2–6 players. Relive your childhood, run around in your favorite costume & collect treats for points.', ' St Paul, MN', 129, 3873),
(' Emergence: A Sci-Fi/Fantasy Roleplaying Game', ' Emergence', ' A pen & paper RPG that blends the best parts of fantasy & sci-fi into a world that is exciting, fresh, and yet strikingly familiar.', ' Chicago, IL', 100, 20098),
(' We Are Dead: Zombie Mall Massacre Board Game', ' Never Peak Games', ' We Are Dead is a zombie themed board game where the players are the zombies. With art from current Simpsons Illustrator, Mike Morris.', ' Fountain Valley, CA', 171, 42790),
(' The Official Settlers of Catan Gaming Board', ' Bill Trammel', ' The Settlers of Catan board we''ve all been waiting for. Portable, affordable, and true to Catan craftsmanship.', ' San Luis Obispo, CA', 1444, 361030),
(' YOU are the Maniac! The Card Game for Horror Fans', ' Mythos Labs', ' YOU are the Maniac! The Horror Movie Card Game. A campy Social Slasher to enjoy with your Twisted Friends.', ' Nevada City, CA', 180, 27000),
(' Democracy: Majority Rules - A Game of Politics & Negotiation', ' Mark Rein-Hagen', ' Manipulate the masses, juke the system, scam the true believers & make the world safe for Democracy & a better place to live!', ' Tbilisi, Georgia', 151, 48468),
(' Mr. Card Game', ' Evertide Games', ' Kingdom of Loathing''s Official Standalone Tabletop Game', ' Los Angeles, CA', 946, 142002),
(' The New Science', ' Conquistador Games', ' Newton, Galileo and other great minds from the Scientific Revolution race toward discoveries in this unique worker placement game.', ' Columbus, OH', 298, 44725),
(' Last Frontier: The Vesuvius Incident & The Artifact -Reprint', ' Andrew Tullsen', ' Print & Play Productions is reprinting Last Frontier with new editions and new art, as well as reprinting The Artifact !', ' Portland, OR', 265, 26546),
(' Lost Valley', ' Pandasaurus Games', ' A game of struggle, survival and the quest for glory amidst the hysteria of the Alaskan Gold Rush', ' Austin, TX', 320, 96120),
(' Jungle Ascent', ' Phillip Kilcrease', ' A crazy, lighthearted battle to the top inspired by 2D arcade platformers! Scale the Cliffs of Frab to claim the Ultimate Treasure!', ' Salt Lake City, UT', 491, 27047),
(' Viticulture: The Strategic Game of Winemaking', ' Jamey Stegmaier', ' Viticulture is a strategic board game that challenges players to create, cultivate, and expand a vineyard in rustic Tuscany.', ' St Louis, MO', 263, 65980),
(' Quarantine Z: A Zombie Survival Card Game', ' Alloyed Creations', ' The Town is under Quarantine. Zombies are everywhere. Supplies are scarce. Can you survive?', ' Seattle, WA', 163, 24515),
(' ''Airborne In Your Pocket'' Board Game', ' Rik Falch', ' A fast-paced game that puts you in the boots of an Allied paratrooper on D-Day! Jump behind enemy lines and infiltrate a German bunker!', ' Atlanta, GA', 340, 102010),
(' Storm Hollow', ' Springboard ... Powered by Game Salute', ' Story Realms encourages friends and family of all ages to play thrilling stories and grand fantasy adventures in about an hour.', ' Eugene, OR', 438, 87757),
(' Mars Needs Mechanics: Steam Engineers Bound for Space', ' Nevermore Games', ' London, 1873: A handful of elite steam engineers vie for a seat on mankind''s first rocket to Mars.', ' Richmond, VA', 151, 45340),
(' Guts Of Glory: The Boardgame!', ' Zach Gage', ' The best thing since sliced bread, if you lived in a post-apocalyptic wasteland with no sliced bread.', ' New York, NY', 164, 41144),
(' GLYPHiTS: Magnetic Pictures with Linguistic Potential', ' Celia Hoffman', ' Create messages and puzzles using this set of hieroglyphic magnets.', ' Los Angeles, CA', 775, 23255),
(' Are You A Werewolf? - Deluxe Edition', ' Looney Labs', ' A boxed set containing all you need to play Are You A Werewolf with fifteen people - in style!', ' College Park, MD', 146, 29300),
(' Fanticide, a Tabletop Fantasy Skirmish Game', ' Alien Dungeon', ' Fanticide is a Fantasy Skirmish Game Written By Rick Priestley, Alessio Cavatore & Andy Chambers Featuring Opposing  Homcidal Warbands.', ' Ellicott City, MD', 173, 17346),
(' Evil Spares None', ' Matthew Akana', ' Evil Spares None is a 2-4 player Cooperative Survival Horror game.  Players are teens in a slasher movie escaping a masked psychopath.', ' Philadelphia, PA', 302, 15102),
(' City of Iron', ' Ryan Laukat', ' A board game of nation-building in a world of magic and machines.', ' Salt Lake City, UT', 149, 44703),
(' Tenra Bansho Zero - An Art and Culture-Rich RPG from Japan', ' Andy Kitkowski', ' A high-action high-drama fantasy RPG originally from Japan! A world of magic and mecha, with rules that emulate a Kabuki play or anime.', ' Raleigh, NC', 1440, 129640),
(' Camden', ' Gamesmith, LLC', ' CAMDEN -- Camden is a market-themed tile laying game designed by James Ernest and illustrated by John Kovalic.', ' Salem, OR', 151, 15169),
(' Hirelings: The Ascent', ' Prolific Games', ' Hirelings: The Ascent  is the Family Game for the Gamer Family! The Heroes have fallen, so pick your Hireling, grab your pack, and RUN!', ' Minneapolis, MN', 117, 23499),
(' Unexploded Cow from Cheapass Games', ' Cheapass Games', ' Cheapass Games returns with "Unexploded Cow," a fast-paced card game about mad cows searching for unexploded bombs.', ' Seattle, WA', 485, 48546),
(' Numenera: A new roleplaying game from Monte Cook', ' Monte Cook', ' Numenera is a brand-new, science fantasy rpg set in the distant future. It focuses on story and ideas over mechanics.', ' Seattle, WA', 2586, 517255),
(' PLAGUE the Card Game', ' Jason Glover', ' Venture forth and let the battle commence, all the while trying to avoid the PLAGUE in this fast-paced trick taking card game!', ' Naperville, IL', 282, 7053),
(' DungeonCraft: Hero versus Guardian', ' C. Aaron Kreader', ' A card game with 2 distinct roles—a Guardian who builds and protects a dungeon and a Hero who explores the dungeon in search of loot!', ' Evanston, IL', 755, 22675),
(' Relic Knights', ' CoolMiniOrNot', ' A brand new science fiction miniatures game full of over the top anime action!', ' Atlanta, GA', 4547, 909537),
(' Prime Wars', ' 3DTotal Games', ' A strategic card battle game for 2 to 4 players, featuring character designs from over 50 top artists.', ' Worcester, United Kingdom', 259, 20727),
(' Heroes of Metro City - A Super-Powered Deck Building Game!', ' 3Some Games, Inc.', ' Be the Hero --  defeat the Archenemy before Metro City is destroyed! Choose your own combination of super-power cards as you play.', ' Bloomington, IL', 134, 64756),
(' The Great Heartland Hauling Co: A card game for 2-4 truckers', ' Dice Hate Me Games', ' Load up, put the hammer down and get ready to haul some cubes across the Heartland for hard-earned cash!', ' Durham, NC', 352, 35218),
(' Evil Baby Orphanage', ' Wyrd Miniatures', ' The world''s foremost time travelling facility for the preventive parenting of evil babies.', ' Placerville, CA', 1975, 108630),
(' War Game Terrain for Table Top Games (farm set)', ' Amy Braat', ' War game terrain  (Farm set - house, barn, windmill, bridges & more for Warhammer 40K, Call of Cthulhu, D&D, RPG, Heroclix)', ' Portage, MI', 888, 2221),
(' PennyGems II, a Pale Imitation', ' Dave Howell', ' PennyGems returns to Kickstarter with new colors. Even more ways to add extra ''cool'' to your tabletop gaming .', ' Seattle, WA', 749, 18737),
(' Pitfalls and Penguins: First Printing', ' Joe Hills', ' Pitfalls and Penguins is a goofy tabletop fantasy RPG that favors improvisational comedy and imagination over simulation.', ' Nashville, TN', 136, 5477),
(' Penny Arcade''s Paint The Line ECG: Red Tide', ' Springboard ... Powered by Game Salute', ' In Penny Arcade''s expandable card game, you engage in fast and furious tabletop tennis battles to battle for your country!', ' Seattle, WA', 300, 9025),
(' The Great Fire of London', ' Pandasaurus Games', ' As London Burns, do you protect your own property or will you stand as the hero of London?  Save the city, or watch it burn.', ' Austin, TX', 217, 65336),
(' Dwarven Adventurers Box Set', ' Stonehaven Miniatures', ' The Dwarven Adventurers Project will produce a set of dwarven hero miniatures for dungeon-crawling, RPGs and 28mm tabletop wargames.', ' Spanish Fork, UT', 10919, 136487),
(' Tooth & Nail: Factions. A new card game from Small Box Games', ' smallboxgames', ' Lead your Faction to victory in this customizable, single purchase card game with simple mechanics and tons of options.', ' Stockbridge, GA', 149, 22421),
(' FANTASTIQA -- A Game of Adventure', ' Gryphon and Eagle Games -- Keith Blume', ' FANTASTIQA is a deck-building board game by Alf Seegert, designer of Trollhalla and The Road to Canterbury, published by Gryphon Games.', ' Chicago, IL', 235, 23580),
(' Do Move Say', ' Peter Vigeant', ' Do Move Say is a party game for ten or more people, in which everyone becomes a character in a wacky (but dangerous) world.', ' New York, NY', 100, 15081),
(' Goalsystem Delves: Dungeon Skirmish Role-Play', ' Scott', ' Goalsystem Delves provides rules and adventures for playing character-driven skirmish miniature games in the dungeon fantasy genre.', ' Pittsburgh, PA', 116, 13440),
(' Quicksilver: The Great Airship Race', ' Split Second Games', ' The perilous racing experience for 2-6 distinguished pilots.  The ambitious debut from Split Second Games.', ' Chicago, IL', 113, 33380),
(' Race to Adventure! A Spirit of the Century™ Board Game', ' Fred Hicks / Evil Hat Productions', ' Race to Adventure!™ is an easy-to-learn, pulp-themed family board game you can play in 20-30 minutes. Suitable for ages 8 & up.', ' Oakland, CA', 130, 52117),
(' Conspiracy X The Conspiracies Sourcebook', ' George Vasilakos', ' Discover the truth behind the conspiracies set in the world of Conspiracy X in this Pen & Paper RPG!', ' Albany, NY', 469, 23488),
(' Sid Sackson Signature Series - Sleuth, Venture and Monad', ' Gryphon and Eagle Games -- Keith Blume', ' A collection of fantastic card games by legendary game designer Sid Sackson.', ' Chicago, IL', 261, 15683),
(' The Duke', ' Catalyst Games', ' An innovative, tile-based strategy game. Summon your court, levy your troops, and seize the field of battle!', ' Seattle, WA', 348, 52256),
(' ACE DETECTIVE:Storytelling Game featuring Black Mask Artwork', ' JASON MAXWELL', ' A Detective game by Richard Launius, featuring color artwork from the grand masters of detective pulp: Black Mask Magazine', ' Lawrenceville, GA', 165, 24789),
(' Tabletop Forge: The Virtual Tabletop for Google+ Hangouts', ' Tabletop Forge', ' Tabletop Forge lets your play tabletop roleplaying games inside of a Google+ Hangout. Includes dice, maps, and great audio/video.', ' St Paul, MN', 888, 44413),
(' Pixel Lincoln: The Deckbuilding Game', ' Springboard ... Powered by Game Salute', ' The 16-Bit President of the United States, starring in his very own deckbuilding game. Get ready for 8-Bit Emancipation!', ' Woodbury, NJ', 824, 41229),
(' Traveller 5th Edition', ' Marc "Traveller" Miller', ' Traveller5 is the ultimate edition of the Traveller science-fiction role-playing game: rules and concepts you never thought possible.', ' Bloomington, IL', 1227, 294628),
(' Sedition Wars: Battle for Alabaster', ' CoolMiniOrNot', ' A Deep Space Horror board game with 50 amazing miniatures from Mike McVey!', ' Atlanta, GA', 4756, 951254),
(' Ace of Spies', ' Albino Dragon', ' Ace of Spies is a card game of set collecting and sneakiness.', ' Austin, TX', 140, 21054),
(' Titans of Industry Board Game', ' Gozer Games', ' This inventive worker placement game set in the 1920s lets you buy factories and businesses, produce goods, and sell them for victory!', ' Chicago, IL', 101, 30388),
(' Hoplomachus - The Lost Cities', ' Josh & Adam Carlson', ' Hoplomachus is a hex and chip board game set in a gladiatorial arena. Use unique units & tactics to overwhelm your opponents.', ' Mora, MN', 169, 25440),
(' Tahiti - board game', ' Minion Games', ' A gateway Euro style pickup and deliver game based on random hex tiles.', ' Milwaukee, WI', 241, 24148),
(' Goblins Drool, Fairies Rule!', ' Springboard ... Powered by Game Salute', ' A card game of rhyme and reason for kids of all ages.', ' Las Vegas, NV', 542, 27127),
(' The Doom That Came To Atlantic City!', ' The Forking Path, Co.', ' A light hearted Lovecraftian game of urban destruction, for two to four players. By Lee Moyer, Keith Baker and Paul Komoda.', ' Portland, OR', 351, 122874),
(' New Fire, the Aztec-inspired RPG', ' Jason Caminsky', ' A tabletop fantasy game inspired by the mythology of the Aztecs, the Maya, and the other civilizations of Precolumbian Mesoamerica.', ' Santa Barbara, CA', 370, 11109),
(' Tammany Hall', ' Pandasaurus Games', ' Tammany Hall is a board game of backstabbing, corruption, temporary alliances and taking power at all costs.', ' Austin, TX', 432, 151483),
(' Disaster Looms!', ' Break From Reality Games', ' Research! Explore! Colonize! Survive! Oh yeah, and save the planet if it is profitable.  A Hex tile space exploration game!', ' Seattle, WA', 300, 75098),
(' Defenders of the Realm: Battlefields by Richard Launius', ' Gryphon and Eagle Games -- Keith Blume', ' A stand-alone fantasy game designed by Richard Launius, set in the artistic world of Larry Elmore.', ' Chicago, IL', 245, 24507),
(' Wrong Chemistry', ' Gamerati', ' The Mad Scientists are out and decided to alter the nature of the elements. Prepare yourself for a Game of Mad Science!', ' Du Pont, WA', 178, 15195),
(' The Reliquary Collection', ' Bibelot Games', ' History at your fingertips: 12 of the best games the world ever forgot. In suede leather pouches, with marble and wood pieces!', ' Phoenix, AZ', 157, 25194),
(' Lost Legacy Card Game', ' Ryan W. Soltis', ' A game of Sorcery and Piracy.  You must be both crafty and cunning to survive in this cut throat world of magic and backstabbing.', ' Chicago, IL', 127, 5082),
(' Kittens in a Blender: The Card Game', ' Redshift Games', ' A dark-whimsical card game suitable for family play yet with enough tongue-in-scheek humor to satisfy any gamer.', ' Seattle, WA', 138, 20802),
(' Puzzle Strike 3rd Edition + Shadows Expansion', ' David Sirlin', ' Puzzle Strike is a deckbuilding game that uses chips instead of cards for easier shuffling. Now with 20 Fantasy Strike characters!', ' San Francisco, CA', 494, 74118),
(' Sentinels of the Multiverse: Infernal Relics & Enhanced Ed.', ' GreaterThanGames', ' Infernal Relics is the second expansion for the cooperative comic-book themed card game Sentinels of the Multiverse!', ' St Louis, MO', 556, 111258),
(' Colossal Cave: The Board Game', ' Arthur O''Dwyer', ' Xyzzy! Brave the perils of Colossal Cave to collect treasure in this card-driven adaptation of the classic 1976 text adventure.', ' Goleta, CA', 185, 14815),
(' Ogre Designer''s Edition', ' Steve Jackson Games', ' 35 years after the first publication of OGRE, we''re coming back with a massive new edition, and YOU can make it better.', ' Austin, TX', 4618, 923680),
(' Serpent''s Tongue - Become Magi', ' christopher gabrielson', ' Use your hardbound Spell Codex  & an actual language to cast 100''s of incantations in CO-OP adventures & PVP  battles.', ' St George, UT', 1083, 195101),
(' Zombicide', ' CoolMiniOrNot', ' Cooperative Zombie survival game with 71 great miniatures!  Take the role of Survivors versus the undead hordes!', ' Atlanta, GA', 3907, 781597),
(' Rithmomachia: Battle of the Numbers - Philosopher''s Game', ' Works, Ltd.', ' Millenium old game of Boëthian harmony and strategy', ' Austin, TX', 432, 16209),
(' StelCon: Infinity', ' Conquest Gaming LLC', ' A game of interstellar exploration and conquest.', ' Tulsa, OK', 109, 10951),
(' Blue Blood Playing Cards', ' Uusi', ' An artful take on the classic playing card deck. Entirely original. Purely enjoyable. 52 cards. 2 Jokers. 1 unforgettable deck.', ' Chicago, IL', 212, 19138),
(' Di Renjie - Deduction Card Game for 2 to 6 Players', ' Ta-Te Wu', ' Di Renjie is a light deduction card game for friends and family, theme based on a famous politician and detective in the Tang Dynasty.', ' Chino Hills, CA', 129, 6471),
(' Knock Down Barns - You Can Always Build Again', ' Greg Burhop', ' Build, destroy and repeat, with blocks made of reclaimed barn wood. Started in the south. Made in Chicago. Enjoyed all over the world.', ' Chicago, IL', 252, 14401),
(' Woe to the Living; the game of classic pulp horror', ' Trevor Cram', ' “Revitalizing art from the pulp era in a haunting horror game that also serves as a standard poker deck.”', ' Salt Lake City, UT', 594, 5940),
(' Escape... from the Temple Curse', ' Queen Games', ' A fast-paced real-time, cooperative dice-driven game of escaping from the cursed Mayan Temple!', ' Dallas, TX', 588, 58841),
(' Zpocalypse: An Epic Zombie Survival Board Game', ' Jeff Gracia: Greenbrier Games', ' Our game combines combat, resource collection, character development and team strategy with the goal of surviving a zombie apocalypse.', ' Marlborough, MA', 1401, 210237),
(' Mobile Frame Zero: Rapid Attack', ' Joshua A.C. Newman', ' An indie tabletop wargame of tiny giant LEGO® robots battling across your  tabletop! by Vincent Baker & Joshua A.C. Newman.', ' Northampton, MA', 916, 82499),
(' Blurble - The Hilarious Word Association Card Game', ' Grant Bernard', ' Blurble - a hilarious fast-paced card game that challenges players to make quick associations.  Can your mind keep up with your mouth?', ' Portland, OR', 126, 18979),
(' Cartoona', ' Robert Burke', ' A creature-building, tile-laying, tabletop game featuring the colorful pop art creatures of Robert Burke.', ' Charlotte, NC', 115, 16107),
(' Building An Elder God', ' Jamie Chambers', ' Help us launch a Cthulhu-themed card game of Lovecraftian construction! Build, blast, or heal your tentacled monstrosity.', ' Atlanta, GA', 168, 15992),
(' Shadow Days - Fantasy, Deckbuilding, Combat & Survival', ' Black Tea Studios', ' Shadow Days is an exciting fantasy, deckbuilding, combat and survival card game from Black Tea Studios. A must-have for any gamer!', ' Columbia, MD', 289, 20271),
(' Tectonic Craft Studios New Line of War Games Terrain', ' ArchyDan', ' Be a part of the new line of wargames terrain that is going to to make captivating and dynamic terrain for our tabletop battles.', ' Troy, NY', 512, 41026),
(' Return of the Deck of the Living Dead', ' BentCastle Workshops', ' Sets of two 60 card zombie themed decks of playing cards. Each deck has the standard 52 plus 2 jokers and 4 grim reapers.', ' Rochester, NY', 289, 27544),
(' The Presidential Game', ' Regina, Russ, Christopher and Hank', ' The Presidential is a strategy game where you try to become the next President of the United States.', ' New York, NY', 109, 38208),
(' Edition Wars, by Gamer Nation Studios', ' Gamer Nation Studios', ' The Edition Wars are in your home town! To prove your edition supreme, you challenge other Gamemasters, each championing their edition', ' Dallas, TX', 201, 15100),
(' Day of the Dead', ' Evan Raisner', ' You are a necromancer summoning a team of undead fighters. Unfortunately for you, so is your opponent.', ' Philadelphia, PA', 176, 8829),
(' Gunship: First Strike!', ' Steve Wood', ' A tactical space combat game that uses Cards, Boards and Dice together in an innovative new way to create epic space battles!', ' Bristow, VA', 997, 84786),
(' Velociraptor! Cannibalism!', ' Board Raptor Games', ' Velociraptor! Cannibalism! is a card game of survival, mutation, and stealing body parts.', ' Philadelphia, PA', 1090, 43619),
(' JammerUp: The Roller Derby Board Game', ' Niki Gallo Hammond', ' An abstract strategy game based on the sport of Roller Derby.', ' New York, NY', 159, 15141),
(' Chicken Caesar - A Game of Plots, Politics and Poultry', ' Nevermore Games', ' Players represent Ancient Roman Rooster families fighting for power & legacy by making deals and backstabbing allies. 3-6 players.', ' Richmond, VA', 203, 40780),
(' Nature of the Beast Card Game - Prairie vs. Polar Set', ' Eye-Level Entertainment', ' Two new armies join the secret animal wars! Will you lead your side to victory or wind up at the bottom of the food chain?', ' Pittsburgh, PA', 153, 15381),
(' Funding the Dream Podcast', ' Richard Bliss', ' Funding the Dream is the Kickstarter Podcast covering all aspects for creating a successful Kickstarter campaign', ' San Jose, CA', 176, 7340),
(' Legacy: Gears of Time', ' Ben Harkins', ' A strategic card game of Time Travel, Technology, and Influence. Build Your Legacy!', ' Minneapolis, MN', 315, 17363),
(' Seven Sisters', ' Wishing Tree Games', ' Seven Sisters is a euro-style worker placement / hand management game for 3-6 players that takes about 60 minutes to play.', ' Lake Geneva, WI', 150, 12000),
(' Farmageddon - The frenetic farming game', ' Phillip Kilcrease', ' Plant and harvest crops for fun and profit! Failing that, steal or blow up your neighbor''s crops instead. That''ll show ''em!', ' Salt Lake City, UT', 505, 25274),
(' AGENTS OF SMERSH - A Spy, Storytelling Board Game', ' JASON MAXWELL', ' Agents of SMERSH - A Storytelling Spy Game Set During the Cold War', ' Lawrenceville, GA', 507, 101507),
(' VivaJava: The Coffee Game', ' Dice Hate Me Games', ' A refreshing blend of Eurostyle flavors for 3 to 8 players.', ' Durham, NC', 373, 56052),
(' Feminist Playing Cards', ' Lynn Casper', ' A deck of playing cards featuring illustrations of influential feminist musicians by 14 feminist artists. A project of Homoground.', ' Wilmington, NC', 107, 12954),
(' Zoneplex - A Board Game Adventure in an Alien Pyramid', ' Shelby Cinca', ' Explore an alien pyramid at the edge of a black hole and face the ethereal creatures within. Only one can win and control the Zonep!ex!', ' Los Angeles, CA', 112, 13459),
(' Genegrafter', ' Erik Dahlman', ' A superhero themed card and dice game designed to be easy to learn but hard to master.', ' San Jose, CA', 584, 14617),
(' For The Win! - Zombies, Pirates, Ninjas, Aliens, and Monkeys', ' Michael Mindes', ' Win this quick tile game with the SUPER COMBO!  Get your zombie, pirate, ninja, alien, and monkey together FOR THE WIN!', ' Tucson, AZ', 207, 31085),
(' Conquest Tactics - A Strategy Card Game of Fantasy Warfare', ' Zeitgeyser LLC', ' Lead your fantasy faction to victory by using Troops, Spells and Equipment to defeat your opponent on the Fire Continent battlefield', ' Washington, DC', 143, 10034),
(' Creative Kitchen, The Game', ' Ted Cheecharoen', ' A deliciously creative board game based on the mystery ingredient box concept. May the most creative “cook” win!', ' Savannah, GA', 113, 3409),
(' Omen: A Reign of War.  Second Edition.', ' smallboxgames', ' Omen: A Reign of War.  Second Edition.  More units, more box, more Omen.  Plus Kickstarter only expansion for 3-4 Players!', ' Atlanta, GA', 137, 34443),
(' Modern Hanafuda', ' Sarah', ' Hanafuda cards, are beautifully illustrated Japanese playing cards that can be used to play a wide variety of games.', ' San Francisco, CA', 209, 12578),
(' Realm Coins', ' Mused Fable', ' Gold, silver, and copper coins with medieval heraldry inspired art to upgrade your tabletop games.', ' Madison, WI', 541, 27098),
(' LangGuini a Card Game!', ' BigRye', ' LangGuini is a card game for 3 or more players. Take word parts on the cards and CREATE A NEW WORD and DEFINE it, with a twist.', ' Woodbury, NJ', 245, 5397),
(' DiceAFARI: A Photo Safari Board Game', ' Chris James - Stratus Games', ' A quick, strategic board game. Roll the dice, select a route to visit, and take a photo; score big points for the best sets of photos!', ' Tucson, AZ', 102, 5130),
(' Faggles to Faggles', ' Bryan Ewsichek', ' A hilarious, outrageous party game for Faggles and Faggle Haggles.', ' Washington, DC', 110, 3855),
(' Caveman Curling - A Game of Stones', ' Gryphon and Eagle Games -- Keith Blume', ' In Caveman Curling each team attempts to “throw” or flick their rocks, one at a time, down the frozen lake.', ' Chicago, IL', 152, 11345),
(' Pizza Theory - The Pizza Toppings Game', ' Gryphon and Eagle Games -- Keith Blume', ' Greg and Brian Powers'' deliciously fun game.  It may be as easy as pi, but can you come out on top?', ' Chicago, IL', 192, 8042),
(' Island Fortress', ' Frost Forge Games', ' Island Fortress is a board game about building a mighty fortress on a harsh and unforgiving island colony.', ' North Andover, MA', 132, 19829),
(' Frontline General: Spearpoint 1943 Map Expansion', ' Collins Epic Wargames', ' This map-based expansion for our WWII card wargame adds gorgeous mounted maps, terrain tiles, new scenarios, and more!', ' Suffolk, VA', 135, 10138),
(' Exile Sun - Multiplayer Conflict... Redefined', ' GameKnightGames', ' Join the Struggle, Unite the Colonies, Escape the Exile Sun. A sci-fi conflict boardgame for 2-6 players.', ' Memphis, TN', 128, 23114),
(' Rise! Break Ground and Make It Yours!', ' Crash Games', ' Rise! A game that truly shapes to the player''s favorite theme. With an ever changing & modifiable board no two games are ever the same!', ' Phoenix, AZ', 116, 17518),
(' Puzzle Me! - A Family-Friendly Board Game', ' Brainstormers_CL', ' Puzzle Me! is a game that can be enjoyed by anyone 6 years old and up.  Build the biggest puzzle you can, but watch out for Karma!', ' Los Angeles, CA', 130, 6501),
(' FrankenDie: The Party Game for the Madly Insane!', ' UniForge Games', ' FrankenDie is a game of dice rolling, frantic dashing to the graveyard, body part gathering and racing to reanimate your creature.', ' Ottawa, Canada', 138, 13127),
(' CPU Wars Volume 1.0 - The Card Game', ' Harry Mylonadis', ' CPU Wars is a trump card game created by geeks for geeks. The purpose of the game is to win by choosing the best CPU spec.', ' London, United Kingdom', 507, 17752),
(' Conspiracy X RPG The Paranormal Sourcebook', ' George Vasilakos', ' Explore the paranormal side of the world of Conspiracy X in this Pen & Paper RPG!', ' Albany, NY', 207, 10354),
(' Help 3 Die Block/Zlurpcast Create the Apes of Wrath FF Team', ' Impact! Miniatures', ' Chance/3DB & Bryan/Zlurpcast love tabletop fantasy football & great apes.  Realizing apes would be great FF players, a dream was born!', ' Indianapolis, IN', 115, 5206),
(' Schlock Mercenary The Board Game', ' Nicholas Vitek', ' Schlock Mercenary:The Board Game is based on the popular web comic by Howard Tayler.  A fast shooter board game with funtastic art.', ' Houston, TX', 328, 82056),
(' Ghost Pirates - a board game of ship to ship tactical action', ' Tim Rodriguez', ' Ghost Pirates is a savage showdown between a two crews of scurvy skirmishers. Make your enemy walk the plank!', ' Brooklyn, NY', 126, 9472),
(' Warparty', ' Mark H. Walker', ' It''s four-player Dungeons and Dragons meets Axis and Allies, on steroids, with a lemon twist.', ' Blue Ridge, VA', 165, 13260),
(' Kings of Air and Steam - a steampunk themed board game', ' Michael Mindes', ' A steampunk themed board game.  Utilize your airship to pick up goods at factories, and then deliver them to cities for money.', ' Tucson, AZ', 417, 41722),
(' Wreck Age: A far-future dystopian post-exodus adventure!', ' Hyacinth Games', ' A dystopian, post-Exodus adventure, where communities vie for resources on 25th century Earth. 28mm tabletop skirmish game and an RPG.', ' Houston, TX', 213, 10674),
(' D-Day Dice Board Game', ' Rik Falch', ' A finalist in 2 prestigious game design contests, D-Day Dice is now ready for commercial production!', ' Atlanta, GA', 1321, 171805),
(' Z-Ward: a survival-horror Parsely game', ' Jared A. Sorensen', ' The seventh and most terrifying game yet in the Parsely series. The goal? Help your sister escape Z-Ward...or die trying.', ' Sunnyside, NY', 769, 7694),
(' Void Vultures', ' Josh Roby', ' Kill Space Monsters, Take Their Space Stuff.  A science fiction dungeon crawl roleplaying game by Josh Roby & Ryan Macklin!', ' North Hollywood, CA', 543, 4077),
(' Survival Camp : Card and Dice Game', ' valerie hope', ' A ''survival of the fittest'' card and die game where players build camps before others to ensure they survive the zombies.', ' Kaysville, UT', 111, 4467),
(' Conspiracy X RPG The Extraterrestrials Sourcebook', ' George Vasilakos', ' Project Bluebook lied to you. THEY are among us, & have been for some time. Help us find the truth with this Pen & Paper RPG sourcebook', ' Albany, NY', 163, 8191),
(' Zong Shi – Earn the right to be named Grand Master Craftsman', ' Gryphon and Eagle Games -- Keith Blume', ' Manage your resources and build greater projects than your rivals and you will become the new Zong Shi - The Grand Master Craftsman!', ' Chicago, IL', 196, 19110),
(' Boardcrafting', ' sjbrown', ' A premium board for playing Settlers of Catan, perhaps the most popular Eurogame.  Laser-cut and etched in wood. Amazing detail.', ' San Francisco, CA', 559, 44721),
(' Bhaloidam: An Indie Tabletop Storytelling Game', ' Corvus Elrod', ' Accessible and intuitive tabletop game platform for the spinning of collaborative, character-driven stories.', ' Portland, OR', 112, 31346),
(' Miskatonic School for Girls Deck Building Game', ' Luke Peterschmidt', ' The Miskatonic School for Girls is the first deck building game where you get to build your opponent''s deck! Plus, it has Cthulhu!', ' Lebanon, PA', 554, 63763),
(' Empires of the Void -  Board Game of Galactic Conquest', ' Ryan Laukat', ' The empires are at war!  Take on the role of one of seven alien races and compete for dominance in a vast, diverse galaxy.', ' Sandy, UT', 239, 35896),
(' CREATURES - the card game.', ' Tyler Panian', ' A creative, strategic, ''survival of the fittest'' card game where players battle it out with wildly unique creatures of their creation.', ' Long Beach, CA', 2246, 56173),
(' Super Showdown! -A game from the golden age of comics', ' Trevor Cram', ' Use Superpowers to recreate the back-and-forth struggle between Hero & Villain as you chase mayhem around the city-grid!', ' Salt Lake City, UT', 1724, 8624),
(' Alien Frontiers: Factions', ' Clever Mojo Games', ' Corporate, political, scientific, and criminal factions have set their sites on Planet Maxwell in this Alien Frontiers expansion.', ' Edmonds, WA', 507, 76078),
(' The Department: Sci-Fi Noir Tabletop Wargame/RPG', ' Joseph Dragovich', ' The Department is the newest Goalsystem game. Players take on the role of  police officers in charge of fighting robot-related crime.', ' Cardiff, United Kingdom', 139, 5315),
(' Sunrise City', ' Clever Mojo Games', ' Whether you''re the City Planner or the Lobbyist, the Lawyer or the Union Boss, you''ve got a role to play in building Sunrise City.', ' Edmonds, WA', 245, 36891),
(' Make Scurvy Dogs: Pirates and Privateers sail the seas!', ' Darren J. Gendron', ' Scury Dogs: Pirates and Privateers is a board game from dern and obsidian, with gorgeous art and fun gameplay.', ' Columbia, MD', 117, 23452),
(' Mystic Empyrean - Create. Discover. Become.', ' David B. Talton Jr.', ' Mystic Empyrean is an ambitious Role-Playing Game that turns all the conventions of a typical RPG on their head.', ' Albuquerque, NM', 335, 10050),
(' Borogove - A Wonderland Card Game!', ' KoryBing', ' Wabe the gimbles, friend! A unique card game based off the nonsense words and imagery of Lewis Carroll''s Alice in Wonderland series.', ' Portland, OR', 546, 30033),
(' Carnival - A deck and dice game.', ' Dice Hate Me Games', ' A deck and dice game for 2-4 players from Dice Hate Me Games.', ' Durham, NC', 688, 34436),
(' Flapjacks & Sasquatches - Now With a Side of Bacon', ' Prolific Games', ' Help us print Flapjacks & Sasquatches 2nd Edition now including the expansion A Side of Bacon and receive great rewards!', ' Minneapolis, MN', 112, 11236),
(' Glory To Rome << Black Box Edition >> Rome Demands BEAUTY!', ' Ed Carter / Amber Ying', ' Rome demands BEAUTY!  Deluxe edition of best selling strategy game, re-imagined with breathtaking elegance and top quality production.', ' Cambridge, MA', 348, 73102),
(' Oh My God! There''s An Axe In My Head - The Board Game', ' Game Company No. 3', ' "Oh My God! There''s An Axe In My Head." The Game of International Diplomacy is a board game of strategy, diplomacy, and absurd humor.', ' Seattle, WA', 143, 22995),
(' Flash Point: Fire Rescue', ' Travis', ' A cooperative game that is fun to play with friends and family.  All the players are on the same team, everyone wins or loses together.', ' Oakland, CA', 1027, 51398),
(' Dragon Valley - The Board Game', ' CW Karstens', ' Divide, Defend, Conquer.  A strategy game where players compete for the king''s favor by defending the kingdom from dragons and orcs.', ' Dallas, TX', 128, 20483),
(' Chronicles Of The Void - A Science Fiction RPG', ' Wedge Smith', ' A Pen&Paper RPG set in an all original far future science fiction universe.', ' Dallas, TX', 167, 15100),
(' Lyssan', ' Sam Brown', ' Lyssan is a board game of strategy, intrigue, and betrayal for two to four players.', ' San Francisco, CA', 158, 31632),
(' White Elephant Card Game', ' Brian Kelley', ' The retro-style White Elephant Card Game simulates the classic holiday gift exchange game. Give White Elephant as a White Elephant!', ' Salt Lake City, UT', 115, 6917),
(' Technoir: high-tech, hard-boiled roleplaying', ' Jeremy Keller', ' Technoir is a high-tech, hard-boiled roleplaying game by Jeremy Keller, the author of Chronica Feudalis.', ' St Paul, MN', 970, 24255),
(' Dice Age - These ain''t your grandpappy''s dice!', ' Tristan V Convert', ' 50% ART, 50% GAME, 100% DICE!', ' Los Angeles, CA', 341, 34134),
(' Startup Fever - The Board Game', ' Louis Perrochon, Meetpoint LLC', ' Euro style indy board game. As a founder, invest wisely, treat your employees well and gain the most users.', ' Mountain View, CA', 299, 30287),
(' A board game of The Canterbury Tales: The Road to Canterbury', ' Gryphon and Eagle Games -- Keith Blume', ' Join the Pardoner''s Guild & help Gryphon Games launch the sin-filleddelightful game, The Road to Canterbury, designed by Alf Seegert.', ' Chicago, IL', 271, 27162),
(' Rolling Freight Board Game', ' APE Gamer', ' Rolling Freight is a game of building rail and shipping routes and selecting the most profitable cargo to carry across those routes.', ' Houston, TX', 117, 21186),
(' Mathematician''s Dice', ' Matt Chisholm', ' Rather than the boring numbers 1 to 6, these dice have the six most important numbers in mathematics on them — i, 0, 1, φ, e and π!', ' San Francisco, CA', 891, 19620),
(' Cards Against Humanity', ' Max Temkin', ' Cards Against Humanity is a free party game for horrible people.', ' Chicago, IL', 389, 15570),
(' 1955: The War of Espionage Board Game', ' Nicholas Vitek', ' 1955 is a two player board game where master spies attempt to use covert operations in an attempt to control the world.', ' Houston, TX', 122, 9202),
(' Eminent Domain: The Next Evolution of Deck Building Games', ' SethJaffee', ' Find and colonize planets, harvest resources for trade and research new technology to build the best Empire!  A "Space Civ-Lite" Game', ' Tucson, AZ', 241, 48378),
(' Mob Ties: The Board Game', ' Nathan Isaac', ' Mob Ties is an abstract strategy and negotiation game for three to six players.  Vote for the Don, elude the Feds, and feed your friends to the pigs!', ' Lexington, KY', 123, 12960),
(' Gaming Paper Adventures', ' Erik Bauer', ' A new mapping system!  100 pages of amazing preprinted map.   Together they make a 7'' x 9'' giant map to use with the Citadel of Pain adventure.', ' Grand Rapids, MI', 327, 11465),
(' Human Contact´a hard SF roleplaying game about humans', ' Joshua A.C. Newman', ' A roleplaying game of true science fiction about what and who we are. Inspired by Iain M. Banks'' Culture and Ursula K. LeGuin''s Ekumen.', ' Northampton, MA', 331, 7960),
(' Lines of Fire: A fantasy battle board game. (Monthly Game Creation Project Sept 2010)', ' Jason Tagmire', ' Lines of Fire: a fast-paced battle game, kicks off my monthly Game Creation Project. Thinking outside of the box, production may now be a possibility.', ' Collingswood, NJ', 152, 535),
(' Early Dark Tabletop Role-Playing Game', ' Calvin Johns', ' We want to print Early Dark, our innovative, all-original role-playing game that takes place outside the typical European-Medieval fantasy setting!  ', ' Austin, TX', 205, 6590),
(' Alien Frontiers: Retro-Future Sci Fi Board Game', ' Clever Mojo Games', ' Deploy your space fleet to the orbital facilities, master alien technologies, and colonize a barren planet in this new board game project.', ' Edmonds, WA', 297, 14885),
(' Happy Birthday, Robot!', ' Daniel Solis', ' A storytelling party game for clever kids, gamer parents, and fun classrooms. Each pledge helps send free games to libraries and schools!', ' Oklahoma City, OK', 288, 3030),
(' Inevitable: dystopian tabletop gaming', ' Dystopian Holdings', ' Violence!  Betrayal!  Laughs!  Evil supercomputers!  "Inevitable" is thegame of a future not much bleaker than our own. 30 copies still available...', ' Boston, MA', 314, 9435),
(' The Gentlemen of the South Sandwiche Islands ', ' James Taylor', ' The Gentlemen of the South Sandwiche Islands is a charming board game that sits nicely at the intersection of art, logic and literature. PreOrder $26-', ' ', 117, 8936),
(' Indie Nerd Board Game, Needs Player Character Miniature Sculpted!  ', ' Kingdom Death', ' pictured here is the character we would like to sculpt as a high quality game miniature - the Forsaker, a man that has abandoned his sanity to face..', ' New York, NY', 116, 1741);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `language_id` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(255) NOT NULL,
  PRIMARY KEY (`language_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`language_id`, `language`) VALUES
(1, 'sk'),
(2, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `language_pack`
--

CREATE TABLE IF NOT EXISTS `language_pack` (
  `language_pack_id` int(11) NOT NULL AUTO_INCREMENT,
  `questionnaire_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(500) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `language_id` int(11) NOT NULL,
  PRIMARY KEY (`language_pack_id`),
  KEY `questionnaire_id` (`questionnaire_id`),
  KEY `language_id` (`language_id`),
  KEY `language_id_2` (`language_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `language_pack`
--

INSERT INTO `language_pack` (`language_pack_id`, `questionnaire_id`, `title`, `text`, `image`, `language_id`) VALUES
(1, 1, 'Začat hodnotiť', 'Vaše postrehy a pripomienky sú pre nás mimoriadne dôležité, a preto by sme Vás chceli požiadať o vyplnenie tohto krátkeho dotazníka spokojnosti.', 'sk.png', 1),
(2, 1, 'Start evaluation', 'Your comments and suggestions are really important to us, thus we would like to ask to fill out this short survey.', 'uk.png', 2);

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
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`location_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `city_id`, `title`, `description`, `created_time`) VALUES
(3, 1, 'Hotel Skúška2', 'Jedinečný hotel ponúka množtvo zážitkov', '2013-03-01 01:14:22'),
(4, 2, 'Lekáreň', 'Lekáreň u Zuzky', '2013-03-01 01:15:19'),
(12, 2, 'Lekáreň Optima', 'Lekáreň Dr.Max v Optime', '2013-03-01 19:21:11'),
(16, 8, 'Bank in Brusel', 'Short campaign about customers satisfaction.', '2013-03-04 01:24:30'),
(17, 10, 'Grandhotel Praha', 'Tatranská Lomnica, Vysoké Tatry', '2013-03-27 20:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
(1, 'Projekt A', 'done', 'projekt A bol vytvoreny na predmet MPV', 0, '2012-11-26 02:41:00', '2012-11-25 23:00:00', '2013-03-02 02:27:00', 0, 0, '', '', '', ''),
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
-- Table structure for table `questionnaire`
--

CREATE TABLE IF NOT EXISTS `questionnaire` (
  `questionnaire_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `general_link` varchar(255) NOT NULL,
  `location_id` int(11) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_start` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_finish` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(30) NOT NULL,
  `tos` tinyint(4) NOT NULL,
  `priority` int(11) NOT NULL,
  `hidden` int(11) DEFAULT '0',
  PRIMARY KEY (`questionnaire_id`),
  KEY `location_id` (`location_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `questionnaire`
--

INSERT INTO `questionnaire` (`questionnaire_id`, `user_id`, `title`, `description`, `general_link`, `location_id`, `created_time`, `date_start`, `date_finish`, `status`, `tos`, `priority`, `hidden`) VALUES
(1, 2, 'TMR Grand Hotel Praha', 'TMR dotaznik Tatranska Lomnica', '', 17, '2013-03-27 22:36:20', '2013-03-28 23:00:00', '2013-03-31 22:00:00', 'created', 1, 50, 0);

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire_category`
--

CREATE TABLE IF NOT EXISTS `questionnaire_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `questionnaire_id` int(11) DEFAULT NULL,
  `main_question_SK` varchar(255) NOT NULL,
  `main_question_EN` varchar(255) NOT NULL,
  `title_SK` varchar(255) NOT NULL,
  `title_EN` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`category_id`),
  KEY `questionnaire_id` (`questionnaire_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `questionnaire_category`
--

INSERT INTO `questionnaire_category` (`category_id`, `questionnaire_id`, `main_question_SK`, `main_question_EN`, `title_SK`, `title_EN`, `description`) VALUES
(2, 1, 'Ako ste boli spokojní s rezervačným oddelením ?', 'How satisfied have you been with reservation experience ?', 'Rezervácie', 'Reservation', NULL),
(3, 1, 'Ako hodnotíte prácu recepcie a príchod do hotela ?', 'How satisfied have you been with front desk experience ?', 'Recepcia', 'Reception', NULL),
(4, 1, 'Ako hodnotíte ubytovanie a kvalitu izieb ?', 'How satisfied have you been with room  experience ?', 'Ubytovanie', 'Accommodation', NULL),
(5, 1, 'Ako hodnotíte prácu reštaurácie ?', 'How satisfied have you been with restaurant experience ?', 'Reštaurácia', 'Restaurant', NULL),
(6, 1, 'Ako hodnotíte wellness hotela ?', 'How satisfied have you been with wellness experience ?', 'Wellness', 'Wellness', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire_question`
--

CREATE TABLE IF NOT EXISTS `questionnaire_question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `text_SK` varchar(255) NOT NULL,
  `text_EN` varchar(255) DEFAULT NULL,
  `hidden` tinyint(1) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`question_id`),
  KEY `category_id` (`category_id`),
  KEY `category_id_2` (`category_id`),
  KEY `category_id_3` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `questionnaire_question`
--

INSERT INTO `questionnaire_question` (`question_id`, `category_id`, `text_SK`, `text_EN`, `hidden`, `time`) VALUES
(2, 2, 'Rýchlosť a profesionalita', 'Speed and professionalism', 0, '2013-03-27 21:38:23'),
(3, 2, 'Presnosť', 'Accuracy of reservation', 0, '2013-03-27 21:38:23'),
(4, 2, 'Ochota pomôcť a priateľskosť', 'Agent willingness to help', 0, '2013-03-27 21:38:23'),
(5, 2, 'Znalosť rezervačného agenta', 'Knowledge of agent', 0, '2013-03-27 21:38:23'),
(6, 3, 'Proces registrácie – check in', 'Check in procedure', 0, '2013-03-27 21:40:08'),
(7, 3, 'Proces odubytovania', 'check out', 0, '2013-03-27 21:40:08'),
(8, 3, 'Ochota pomôcť a priateľskosť', 'Staff friendliness and willingness to help', 0, '2013-03-27 21:40:08'),
(9, 4, 'Čistota izby', 'Cleanliness of room', 0, '2013-03-27 21:48:01'),
(10, 4, 'Vybavenie izby', 'Comfort and functionality of room', 0, '2013-03-27 21:48:01'),
(11, 4, 'Atmosféra v hoteli', 'Hotel ambience', 0, '2013-03-27 21:48:01'),
(12, 4, 'Večerný program', 'Evening entertainment', 0, '2013-03-27 21:48:01'),
(13, 5, 'Atmosféra a dekorácie', 'Ambience and decoration', 0, '2013-03-27 21:50:18'),
(14, 5, 'Raňajkový bufet', 'Breakfast buffet', 0, '2013-03-27 21:50:18'),
(15, 5, 'Kvalita a kreativita večerného menu', 'Quality and creativity of evening menu', 0, '2013-03-27 21:50:18'),
(16, 5, 'Ponuka vína', 'Wine selection', 0, '2013-03-27 21:50:18'),
(17, 5, 'Bar a kaviareň', 'Lobby bar experience', 0, '2013-03-27 21:50:18'),
(18, 5, 'Ochota pomôcť a priateľskosť', 'Staff friendliness and willingness to help', 0, '2013-03-27 21:50:18'),
(19, 6, 'Čistota wellness', 'Cleanliness of wellness area', 0, '2013-03-27 21:53:46'),
(20, 6, 'Dostatok uterákov a plachiet', 'Number of towels and blankets', 0, '2013-03-27 21:53:46'),
(21, 6, 'Ponuka odpočívadiel a oddychových častí', 'Size of resting area', 0, '2013-03-27 21:53:46'),
(22, 6, 'Atmosféra a dekorácie', 'Ambience and decoration', 0, '2013-03-27 21:53:46'),
(23, 6, 'Ponuka masáži a procedúr', 'Selection of treatments', 0, '2013-03-27 21:53:46'),
(24, 6, 'Ochota pomôcť a priateľstkosť', 'Staff friendliness and willingness to help', 0, '2013-03-27 21:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `result_category`
--

CREATE TABLE IF NOT EXISTS `result_category` (
  `r_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `r_questionnaire_id` int(11) NOT NULL,
  PRIMARY KEY (`r_category_id`),
  UNIQUE KEY `r_category_id` (`r_category_id`),
  KEY `r_questionnaire_id` (`r_questionnaire_id`),
  KEY `r_questionnaire_id_2` (`r_questionnaire_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

-- --------------------------------------------------------

--
-- Table structure for table `result_question`
--

CREATE TABLE IF NOT EXISTS `result_question` (
  `r_question_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_questionnaire_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `evaluate_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rate` int(11) DEFAULT '0',
  PRIMARY KEY (`r_question_id`),
  KEY `r_questionnaire_id` (`r_questionnaire_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=116 ;

-- --------------------------------------------------------

--
-- Table structure for table `result_questionnaire`
--

CREATE TABLE IF NOT EXISTS `result_questionnaire` (
  `r_questionnaire_id` int(11) NOT NULL AUTO_INCREMENT,
  `questionnaire_id` int(11) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `language_selected` varchar(5) DEFAULT NULL,
  `room` int(11) DEFAULT NULL,
  `submit_time` timestamp NULL DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  PRIMARY KEY (`r_questionnaire_id`),
  KEY `questionnaire_id` (`questionnaire_id`),
  KEY `questionnaire_id_2` (`questionnaire_id`),
  KEY `questionnaire_id_3` (`questionnaire_id`),
  KEY `questionnaire_id_4` (`questionnaire_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `text`, `created`, `done`, `user_id`, `project_id`, `list_id`) VALUES
(18, 'Galeria -> editacia fotiek', '2013-02-04 02:29:50', 1, 1, 1, 2),
(19, 'Mazanie namespace', '2013-02-04 02:30:02', 0, 1, 1, 2),
(20, 'Mazanie galerii', '2013-02-04 02:30:09', 1, 1, 1, 2),
(21, 'mazanie celej galerie fotiek ( galeria + fotky )', '2013-02-04 02:30:42', 1, 1, 1, 2),
(22, 'Zoradovanie fotiek ( idealne len drag&drop )', '2013-02-04 02:31:18', 1, 1, 1, 2),
(23, 'QUIZ si urob na data analysis\r\n', '2013-02-04 02:34:45', 1, 1, 1, 2),
(25, 'skontrolovat dropbox na add gallery lebo nejak to nejde mozno kvoli tej debilnej kvote ...', '2013-02-08 03:08:39', 1, 1, 1, 2),
(27, 'GIT\r\n', '2013-02-08 23:15:42', 1, 1, 1, 2),
(29, 'Zajaxovat mazanie fotiek v galerii', '2013-02-10 02:03:47', 0, 1, 1, 2),
(30, 'nefunguje disable na fotkach :-) opravit', '2013-02-10 09:39:10', 1, 1, 1, 2),
(31, 'D3 apply and test > make grip with graphs', '2013-02-11 01:07:33', 0, 1, 1, 2),
(32, 'FE -> gallery -> porozdelovat do namespacov', '2013-02-16 03:06:43', 1, 1, 1, 2),
(33, 'po kliknuti na FE zoradit fotky podla gridstera v prettyphoto', '2013-02-16 03:07:07', 1, 1, 1, 2),
(35, 'Error pages create\r\n', '2013-03-01 04:29:42', 0, 1, 1, 2),
(36, 'pridat do zoznamu v kampani aj lokalitu a city :) nasledne nejaky edit dorobit :)', '2013-03-02 04:17:49', 1, 1, 1, 2),
(37, 'maze mi po update obrazky , checkni to', '2013-03-03 02:39:47', 1, 1, 1, 2),
(38, 'PS -> pridat update obrazka ', '2013-03-03 03:48:32', 1, 1, 1, 2),
(39, 'autocrop image -> 600x400 x N ideal size for campaign form', '2013-03-03 15:26:13', 1, 1, 1, 2),
(40, 'nastylovat reupload image file upload', '2013-03-03 23:42:59', 0, 1, 1, 2),
(41, 'new task', '2013-03-04 01:23:13', 1, 1, 1, 2),
(42, 'feedback component\r\n', '2013-03-04 03:39:29', 0, 1, 1, 2),
(43, 'doupravovat FE novinky na responsive :) pripadne to skryt ked je to velke alebo nieco s tym urobit.', '2013-03-10 12:05:59', 0, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_log`
--

CREATE TABLE IF NOT EXISTS `transaction_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `txn_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `name`, `password`, `email`, `description`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, 'admin', 'Andrej Gaspar', '$2a$07$1xw45n5qpsj36aqjks8lqebmeK5Z7wKi3p.v1Wm9q80W6NgrV654S', 'ado.gaspar@gmail.com', 'spravca webu', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2013-03-01 02:48:04'),
(2, 'tmrzahradnik', 'zahradnik', '$2a$07$8rnxkg9zmn3yzz4ovln17euoCwjsxG.QDXDc3sv/p22au9uJ85a/S', 'ado.gaspar@gmail.com', 'CleverFrogs system aplikovany v TMR', 0, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2013-03-27 22:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `premium` int(11) NOT NULL DEFAULT '0',
  `balance` int(11) NOT NULL DEFAULT '0',
  `user_type` enum('user','teacher','admin') COLLATE utf8_bin NOT NULL,
  `project_id` int(11) NOT NULL,
  `birthdate` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `project_id` (`project_id`),
  KEY `project_id_2` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaign`
--
ALTER TABLE `campaign`
  ADD CONSTRAINT `campaign_ibfk_2` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `campaign_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `campaign_ps_category` (`category_id`);

--
-- Constraints for table `campaign_ps`
--
ALTER TABLE `campaign_ps`
  ADD CONSTRAINT `campaign_ps_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `campaign_ps_category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `campaign_result`
--
ALTER TABLE `campaign_result`
  ADD CONSTRAINT `campaign_result_ibfk_3` FOREIGN KEY (`campaign_id`) REFERENCES `campaign` (`campaign_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `campaign_result_ibfk_4` FOREIGN KEY (`ps_id`) REFERENCES `campaign_ps` (`ps_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dashboard_component`
--
ALTER TABLE `dashboard_component`
  ADD CONSTRAINT `dashboard_component_ibfk_1` FOREIGN KEY (`d_c_params_id`) REFERENCES `dashboard_component_params` (`d_c_params_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dashboard_settings`
--
ALTER TABLE `dashboard_settings`
  ADD CONSTRAINT `dashboard_settings_ibfk_1` FOREIGN KEY (`dashboard_component_id`) REFERENCES `dashboard_component` (`dashboard_component_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Constraints for table `gallery_video`
--
ALTER TABLE `gallery_video`
  ADD CONSTRAINT `gallery_video_ibfk_1` FOREIGN KEY (`gallery_id`) REFERENCES `gallery` (`gallery_id`);

--
-- Constraints for table `language_pack`
--
ALTER TABLE `language_pack`
  ADD CONSTRAINT `language_pack_ibfk_1` FOREIGN KEY (`language_id`) REFERENCES `language` (`language_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `language_pack_ibfk_2` FOREIGN KEY (`questionnaire_id`) REFERENCES `questionnaire` (`questionnaire_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD CONSTRAINT `questionnaire_ibfk_2` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `questionnaire_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `questionnaire_category`
--
ALTER TABLE `questionnaire_category`
  ADD CONSTRAINT `questionnaire_category_ibfk_1` FOREIGN KEY (`questionnaire_id`) REFERENCES `questionnaire` (`questionnaire_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `questionnaire_question`
--
ALTER TABLE `questionnaire_question`
  ADD CONSTRAINT `questionnaire_question_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `questionnaire_category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `result_question`
--
ALTER TABLE `result_question`
  ADD CONSTRAINT `result_question_ibfk_1` FOREIGN KEY (`r_questionnaire_id`) REFERENCES `result_questionnaire` (`r_questionnaire_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `result_questionnaire`
--
ALTER TABLE `result_questionnaire`
  ADD CONSTRAINT `result_questionnaire_ibfk_1` FOREIGN KEY (`questionnaire_id`) REFERENCES `questionnaire` (`questionnaire_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`list_id`) REFERENCES `list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
