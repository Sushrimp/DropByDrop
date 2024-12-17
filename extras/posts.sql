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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

/*
use defaultdb;

INSERT INTO `posts` (`userId`, `title`, `body`, `created_at`, `updated_at`, `image`) VALUES
(1, 'no wayyy i was told to wash my dishes with only 2 liter of water 😭', 're: bruh gud luck 👍😂, re2: bro is cooked ☠️', NULL, NULL, 'a'),
(2, 'i just done the hardest water saving challenge 👍', 're: insane!!!, re2: NO WAYYYY, re3: bro did the impossible ☠️', NULL, NULL, 'a'),
(3, 'dont drink a single drop of water since the morning 😎 (for the ocean ofc)', 're: bro saves the ocean by dismishing himself ☠️, re2: 😭😭😭', NULL, NULL, 'a');
*/
INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'no wayyy i was told to wash my dishes with only 2 liter of water 😭', 're: bruh gud luck 👍😂, re2: bro is cooked ☠️', NULL, NULL),
(2, 'i just done the hardest water saving challenge 👍', 're: insane!!!, re2: NO WAYYYY, re3: bro did the impossible ☠️', NULL, NULL),
(3, 'dont drink a single drop of water since the morning 😎 (for the ocean ofc)', 're: bro saves the ocean by dismishing himself ☠️, re2: 😭😭😭', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
