-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 05, 2019 at 02:04 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_pappu`
--

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

DROP TABLE IF EXISTS `query`;
CREATE TABLE IF NOT EXISTS `query` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` int(11) NOT NULL,
  `query` varchar(255) DEFAULT NULL,
  `output` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `session_id`, `query`, `output`) VALUES
(1, 660013, 'hii', 'Hi, I\'m Pappu, The Smart Calculator - Pappu<br>How may I help you ?'),
(2, 660013, '', 'Sorry, Pappu got failed'),
(3, 660013, '2+2', '4'),
(4, 660013, '', 'Sorry, Pappu got failed'),
(5, 660013, '', 'Sorry, Pappu got failed'),
(6, 660013, '', 'Sorry, Pappu become clever, pls give some input'),
(7, 660013, '', 'Sorry, Pappu become clever, pls give some input'),
(8, 660013, 'hii', 'Hi, I\'m Pappu, The Smart Calculator - Pappu<br>How may I help you ?'),
(9, 943848, 'hlo', 'Sorry, Pappu got failed'),
(10, 943848, '2/2', '1'),
(11, 943848, '25%4', '1'),
(12, 943848, 'hlo', 'Sorry, Pappu got failed'),
(13, 943848, 'hlo', 'Hi, I\'m Pappu, The Smart Calculator - Pappu<br>How may I help you ?'),
(14, 660013, 'hii', 'Hi, I\'m Pappu, The Smart Calculator - Pappu<br>How may I help you ?'),
(15, 660013, '', 'Sorry, Pappu become clever, pls give some input'),
(16, 660013, 'hlo', 'Hi, I\'m Pappu, The Smart Calculator - Pappu<br>How may I help you ?'),
(17, 660013, '', 'Sorry, Pappu become clever, pls give some input'),
(18, 660013, 'l', 'Sorry, Pappu got failed'),
(19, 660013, '', 'Sorry, Pappu become clever, pls give some input'),
(20, 660013, '', 'Sorry, Pappu become clever, pls give some input'),
(21, 660013, '', 'Sorry, Pappu become clever, pls give some input'),
(22, 660013, '', 'Sorry, Pappu become clever, pls give some input'),
(23, 660013, '', 'Sorry, Pappu become clever, pls give some input'),
(24, 660013, '', 'Sorry, Pappu become clever, pls give some input'),
(25, 660013, '', 'Sorry, Pappu become clever, pls give some input'),
(26, 660013, '', 'Sorry, Pappu become clever, pls give some input');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
