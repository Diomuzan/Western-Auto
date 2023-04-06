-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 03:30 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trucks`
--
CREATE DATABASE IF NOT EXISTS `trucks` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `trucks`;

-- --------------------------------------------------------

--
-- Table structure for table `truck_info`
--

DROP TABLE IF EXISTS `truck_info`;
CREATE TABLE `truck_info` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `fuel` varchar(255) NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `truck_info`
--

INSERT DELAYED IGNORE INTO `truck_info` (`id`, `brand`, `model`, `fuel`, `transmission`, `price`) VALUES
(1, 'DAF', 'XG FT ', 'Petrol', 'Automatic', '€130.000,00'),
(2, 'Mercedes', 'Actros', 'Diesel', 'Automatic', '€170.000,00'),
(3, 'Renualt Trucks', 'T', 'Petrol', 'Automatic', '€100.000,00'),
(4, 'Ford ', 'F-Max', 'Petrol', 'Automatic', '€115.000,00'),
(5, 'MAN', 'TGX', 'Diesel', 'Manual', '€109.000,00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
