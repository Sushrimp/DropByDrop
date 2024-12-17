-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2024 at 08:21 AM
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
-- Database: `wpu_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `challenges`
--

CREATE TABLE `challenges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `challenge` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `challenges`
--

INSERT INTO `challenges` (`id`, `challenge`, `created_at`, `updated_at`) VALUES
(1, 'Don’t waste water—turn off taps when not in use.', NULL, NULL),
(2, 'Finish your drinking water to avoid wasting it.', NULL, NULL),
(3, 'Wash dishes using minimal water; soak them first to use less.', NULL, NULL),
(4, 'Use a bucket or water-efficient method when washing your car.', NULL, NULL),
(5, 'Take shorter showers and avoid letting water run unnecessarily.', NULL, NULL),
(6, 'Carry a reusable water bottle from home to avoid buying plastic ones.', NULL, NULL),
(7, 'Drink all the water you bring to avoid waste.', NULL, NULL),
(8, 'Collect rainwater for gardening or cleaning.', NULL, NULL),
(9, 'Fix leaks in faucets and toilets immediately to avoid water waste.', NULL, NULL),
(10, 'Install water-efficient fixtures, like low-flow showerheads and toilets.', NULL, NULL),
(11, 'Only run the washing machine and dishwasher with full loads.', NULL, NULL),
(12, 'Reuse greywater (like leftover dishwater) for flushing toilets or watering plants.', NULL, NULL),
(13, 'Use a broom instead of hosing down driveways and sidewalks.', NULL, NULL),
(14, 'Take shorter showers to reduce water usage.', NULL, NULL),
(15, 'Water plants in the early morning or late evening to minimize evaporation.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `challenges`
--
ALTER TABLE `challenges`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `challenges`
--
ALTER TABLE `challenges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
