-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2013 at 08:44 PM
-- Server version: 5.5.18
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nette`
--

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
(1, 1, '#', 'Aditívna výroba', 'Ponúkame služby v popredného systému na trhu aditívnej technológie – laserové sinterovanie na zariadení EOSINT M280. Zariadenie vyrába vysokokvalitné diely z titánového prášku (Ti64_ zliatina Ti6Al4V) na základe trojrozmerných CAD dát. ', 'Využitie výroby technológiou laserového sinterovania:\n\nVyužitie výroby technológiou laserového sinterovania:\nmedicína a chirurgia\nautomobilový a letecký priemyselnú\nmóda a klenotníctvo ', '0000-00-00 00:00:00', '1.jpg'),
(2, 1, '#', 'Výskum a vývoj', 'Pre zvýšenie výskumného potenciálu v oblasti biomedicínskeho inžinierstva, sú aktivity CEIT-KE zamerané na vývoj a výrobu inteligentného bionického implantátu (IBI) najmodernejšími dostupnými technológiami: ', 'aditívnej výroby – 3D tlač a laserové sinterovanie\ndigitalizácia a úprava medicínskych dát\ntestovanie biokompatibilita osteointegrácie ', '0000-00-00 00:00:00', '2.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
