-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 04:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rezervacije`
--
CREATE DATABASE IF NOT EXISTS `rezervacije` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `rezervacije`;

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rezervacije`
--

CREATE TABLE IF NOT EXISTS `rezervacije` (
  `sifra` int(11) NOT NULL,
  `destinacijaPolaska` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `destinacijaDolaska` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avioKompanija` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datum` datetime NOT NULL,
  PRIMARY KEY (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rezervacije`
--

INSERT INTO `rezervacije` (`sifra`, `destinacijaPolaska`, `destinacijaDolaska`, `avioKompanija`, `datum`) VALUES
(275, 'Beograd', 'Atina', 'AirSerbia', '2021-12-16 12:30:00'),
(348, 'Beograd', 'Tivat', 'AirSerbia', '2021-12-09 15:50:00'),
(591, 'Beograd', 'Dubai', 'Emirates', '2021-12-22 16:40:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
