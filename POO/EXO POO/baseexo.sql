-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2023 at 11:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baseexo`
--

-- --------------------------------------------------------

--
-- Table structure for table `personnage`
--

CREATE TABLE `personnage` (
  `idPersonnage` int(11) NOT NULL,
  `Pseudo` varchar(50) NOT NULL,
  `Vie` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personnage`
--

INSERT INTO `personnage` (`idPersonnage`, `Pseudo`, `Vie`) VALUES
(4, 'Jordan', 999),
(5, 'Thomas', 100),
(6, 'Aurore', 100),
(7, 'DJquinquin', 100),
(15, 'BDSLeJordan', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personnage`
--
ALTER TABLE `personnage`
  ADD PRIMARY KEY (`idPersonnage`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personnage`
--
ALTER TABLE `personnage`
  MODIFY `idPersonnage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
