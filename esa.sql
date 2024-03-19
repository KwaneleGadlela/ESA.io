-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 10:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esa`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `email` varchar(250) NOT NULL,
  `first_name` text NOT NULL,
  `second_name` text NOT NULL,
  `auth` text NOT NULL,
  `passwords` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`email`, `first_name`, `second_name`, `auth`, `passwords`) VALUES
('admin@admin.com', 'admin', 'admin', 'admin', '$2y$10$JU/3Fcngtu1nWo2oMizgNOucRBcFQlE8AvlnRXePJQo08xa4IPkTi'),
('employee@employee.com', 'employee', 'employee', 'employee', '$2y$10$PEKbWlDupQw2G8H/nuhgY.UUC.CCZFADLaIyr013UzWdDZLvP1GDO'),
('ziyanda@esa.com', 'Ziyanda', 'Mavimbela', 'employee', '$2y$10$B4Pn7wyh/LD5DWUGGt.H4OxS3oRGztJH33eSQUwdwgMfGV/gtjE0u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
