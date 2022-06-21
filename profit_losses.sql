-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 06:29 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profitloss`
--

-- --------------------------------------------------------

--
-- Table structure for table `profit_losses`
--

CREATE TABLE `profit_losses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Qty` int(11) NOT NULL,
  `Total` bigint(20) NOT NULL,
  `Rate` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profit_losses`
--

INSERT INTO `profit_losses` (`id`, `month_year`, `Qty`, `Total`, `Rate`, `Type`, `created_at`, `updated_at`) VALUES
(1, 'Mar-17', 100, 2000, 20, 1, '2022-06-21 01:41:10', '2022-06-21 01:41:10'),
(2, 'Mar-17', 60, 300, 5, 2, '2022-06-21 01:41:10', '2022-06-21 01:41:10'),
(3, 'Apr-17', 100, 3000, 30, 1, '2022-06-21 01:41:10', '2022-06-21 01:41:10'),
(4, 'Apr-17', 30, 600, 20, 2, '2022-06-21 01:41:10', '2022-06-21 01:41:10'),
(5, 'May-17', 100, 2000, 20, 1, '2022-06-21 01:41:10', '2022-06-21 01:41:10'),
(6, 'May-17', 130, 3250, 25, 2, '2022-06-21 01:41:10', '2022-06-21 01:41:10'),
(7, 'Jun-17', 10, 200, 20, 1, '2022-06-21 01:41:10', '2022-06-21 01:41:10'),
(8, 'Jun-17', 40, 400, 10, 2, '2022-06-21 01:41:10', '2022-06-21 01:41:10'),
(9, 'Jan-18', 100, 1000, 10, 1, '2022-06-21 01:41:10', '2022-06-21 01:41:10'),
(10, 'Jan-18', 100, 1500, 15, 2, '2022-06-21 01:41:10', '2022-06-21 01:41:10'),
(11, 'Feb-18', 50, 500, 10, 1, '2022-06-21 01:41:10', '2022-06-21 01:41:10'),
(12, 'Feb-18', 10, 50, 5, 2, '2022-06-21 01:41:10', '2022-06-21 01:41:10'),
(13, 'Mar-18', 20, 200, 10, 1, '2022-06-21 01:41:10', '2022-06-21 01:41:10'),
(14, 'Mar-18', 50, 1000, 20, 2, '2022-06-21 01:41:10', '2022-06-21 01:41:10'),
(15, 'Oct-18', 50, 750, 15, 2, '2022-06-21 01:41:10', '2022-06-21 01:41:10'),
(16, 'Apr-16', 100, 2000, 20, 1, '2022-06-21 01:41:10', '2022-06-21 01:41:10'),
(17, 'Apr-16', 30, 300, 10, 2, '2022-06-21 01:41:10', '2022-06-21 01:41:10'),
(18, 'Jun-16', 30, 750, 25, 1, '2022-06-21 01:41:10', '2022-06-21 01:41:10'),
(19, 'Jun-16', 20, 400, 20, 2, '2022-06-21 01:41:10', '2022-06-21 01:41:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profit_losses`
--
ALTER TABLE `profit_losses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profit_losses`
--
ALTER TABLE `profit_losses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
