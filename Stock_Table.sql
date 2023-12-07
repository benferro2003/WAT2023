-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2023 at 11:39 AM
-- Server version: 8.0.35-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c3654717`
--

-- --------------------------------------------------------

--
-- Table structure for table `Stock Table`
--

CREATE TABLE `Stock Table` (
  `StockID` int NOT NULL,
  `StockItem` varchar(20) NOT NULL,
  `StockQuantity` int NOT NULL,
  `StockPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Stock Table`
--

INSERT INTO `Stock Table` (`StockID`, `StockItem`, `StockQuantity`, `StockPrice`) VALUES
(1, 'Cornflakes', 24, 2),
(2, 'Frosties', 56, 2),
(5, 'gummies', 10, 2.45),
(6, 'shreddies', 90, 3.99),
(7, 'Zooomies', 100, 2.29),
(8, 'CrunchyNut', 24, 5.79);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Stock Table`
--
ALTER TABLE `Stock Table`
  ADD PRIMARY KEY (`StockID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Stock Table`
--
ALTER TABLE `Stock Table`
  MODIFY `StockID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
