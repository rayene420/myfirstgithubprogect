-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 02:54 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toprent`
--
CREATE DATABASE IF NOT EXISTS `toprent` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `toprent`;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `brand` varchar(30) NOT NULL,
  `model` varchar(40) NOT NULL,
  `year_produced` int(11) NOT NULL,
  `fuel_consumption` double NOT NULL,
  `price_per_hour` double NOT NULL,
  `price_per_day` double NOT NULL,
  `popularity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`brand`, `model`, `year_produced`, `fuel_consumption`, `price_per_hour`, `price_per_day`, `popularity`) VALUES
('Audi', 'A3', 2014, 7.5, 8, 50, 0),
('Audi', 'A5', 2018, 11, 13, 72, 0),
('Audi', 'A6', 2015, 9, 10.5, 65, 0),
('BMW', 'X5', 2008, 10, 12, 70, 0),
('BMW', 'X6', 2016, 10, 14, 75, 1),
('Ferrari', 'F430', 2007, 16, 25, 200, 0),
('Ferrari', '488', 2019, 22, 42, 350, 1),
('Lamborghini', 'Urus', 2018, 16, 19, 215, 0),
('Lamborghini', 'Aventador', 2006, 20, 32, 200, 1),
('Mercedes', 'G500', 2015, 24, 38, 220, 0),
('Porsche', 'Cayenne', 2005, 17, 25, 170, 0),
('Porsche', 'Panamera', 2014, 14, 40, 250, 2),
('Volkswagen', 'Golf V', 2007, 7, 10, 50, 0),
('Volvo', 'S80', 2003, 8.5, 8, 45, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
