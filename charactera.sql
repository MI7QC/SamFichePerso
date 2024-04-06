-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 28, 2023 at 06:02 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fichepersoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `charactera`
--

DROP TABLE IF EXISTS `charactera`;
CREATE TABLE IF NOT EXISTS `charactera` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `avatar` varchar(255) DEFAULT NULL,
  `race` text,
  `class` text,
  `title` text,
  `twitchName` text,
  `xp` int(11) DEFAULT NULL,
  `lvl` int(11) DEFAULT NULL,
  `strength` int(11) DEFAULT NULL,
  `constitution` int(11) DEFAULT NULL,
  `wisdom` int(11) DEFAULT NULL,
  `dexterity` int(11) DEFAULT NULL,
  `intelligence` int(11) DEFAULT NULL,
  `charisma` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `charactera`
--

INSERT INTO `charactera` (`id`, `name`, `avatar`, `race`, `class`, `title`, `twitchName`, `xp`, `lvl`, `strength`, `constitution`, `wisdom`, `dexterity`, `intelligence`, `charisma`) VALUES
(1, 'Basston', 'assets/img/bass.jpg', 'humain', 'barbar', 'le bousier', 'BasstonJr', 100, 2, 2, 3, 2, 3, 1, 1),
(2, 'Sam', 'assets/img/sam.jpg', 'humain', 'unknow', 'le bousier', 'BasstosamtwitnJr', 100, 2, 3, 4, 1, 1, 1, 1),
(3, 'BOB', 'assets/img/bob.jpg', 'humain', 'wizar', 'le bousier', 'bobtwit', 100, 2, 2, 5, 5, 1, 5, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
