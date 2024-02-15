-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2024 at 04:10 PM
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
-- Database: `aswt`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Imag` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `UserName`, `First_Name`, `Last_Name`, `Pwd`, `Email`, `Imag`) VALUES
(14, 'Kamajo', 'Jonah', 'Kilian', 'ufhgskdfhi', 'kilian@gmail.com', ''),
(15, 'Kamajo', 'Jonah', 'Kilian', '', 'kilian@gmail.com', ''),
(16, 'Kamajo', 'Jonah', 'Kilian', '', 'kilian@gmail.com', ''),
(17, 'Kamajo', 'kh;hkniu', 'Juuni', '', 'kilian@gmail.com', ''),
(18, 'Kamajo', 'kh;hkniu', 'Juuni', '', 'kilian@gmail.com', ''),
(19, 'Kamajo', 'kh;hkniu', 'Juuni', '', 'kilian@gmail.com', ''),
(20, 'Kamajo', 'kh;hkniu', 'Juuni', '', 'kilian@gmail.com', ''),
(21, 'kamanzi', 'Kintu', 'Juuni', 'r97jho', 'mail@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
