-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 09:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tours_and_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `paymentlist`
--

CREATE TABLE `paymentlist` (
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `h_m_day` int(30) NOT NULL,
  `package` varchar(30) NOT NULL,
  `amount` int(30) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentlist`
--

INSERT INTO `paymentlist` (`email`, `name`, `h_m_day`, `package`, `amount`, `feedback`, `file`) VALUES
('mim@gmail.com', 'dhaka to sundarban', 3, 'student', 5000, 'good', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
