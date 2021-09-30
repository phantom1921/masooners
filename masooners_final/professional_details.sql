-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 03:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masoners`
--

-- --------------------------------------------------------

--
-- Table structure for table `professional_details`
--

CREATE TABLE `professional_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professional_details`
--

INSERT INTO `professional_details` (`id`, `business_name`, `phone`, `country`, `created_at`, `updated_at`, `deleted_at`, `category_id`, `user_id`) VALUES
(8, 'xavier tech', '76767867866897', 'pakistan', '2021-08-17 05:08:07', '2021-08-17 05:08:07', NULL, 1, 2),
(9, 'test', '76767867866897', 'pakistan', '2021-08-17 05:50:57', '2021-08-17 05:50:57', NULL, 1, 3),
(10, 'xavier tech', '7676786786635', 'pakistan', '2021-08-21 01:41:49', '2021-08-21 01:51:48', NULL, 1, 4),
(11, 'xavier tech', '923024986060', 'pakistan', '2021-09-08 06:41:32', '2021-09-08 06:41:32', NULL, 1, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `professional_details`
--
ALTER TABLE `professional_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_fk_4607800` (`category_id`),
  ADD KEY `user_fk_4607815` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `professional_details`
--
ALTER TABLE `professional_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `professional_details`
--
ALTER TABLE `professional_details`
  ADD CONSTRAINT `category_fk_4607800` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `user_fk_4607815` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
