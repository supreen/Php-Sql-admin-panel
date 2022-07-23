-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql212.byetcluster.com
-- Generation Time: Jun 26, 2022 at 10:49 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `
--
CREATE DATABASE IF NOT EXISTS `adminpanel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `adminpanel`;
-- --------------------------------------------------------

--
-- Table structure for table `control`
--

CREATE TABLE `control` (
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--
-- Dumping data for table `control`
--

INSERT INTO `control` (`user`, `pass`, `start`, `end`, `id`) VALUES
('admin', 'password', '0000-00-00', '0000-00-00', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
