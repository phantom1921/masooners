-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 03:39 PM
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
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Home Design & Remodeling', '2021-08-17 05:03:26', '2021-08-17 05:03:26', NULL),
(2, 'sample category', '2021-08-28 07:11:09', '2021-08-28 07:11:09', NULL),
(3, 'test professional', '2021-09-08 06:38:08', '2021-09-08 06:38:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `create_blogs`
--

CREATE TABLE `create_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_contacts`
--

CREATE TABLE `customer_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customerid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_logins`
--

CREATE TABLE `customer_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `idea_category_id` bigint(20) NOT NULL,
  `idea_style_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`, `user_id`, `idea_category_id`, `idea_style_id`) VALUES
(1, 'ahoo', '2021-09-07 09:00:57', '2021-09-07 09:15:08', '2021-09-07 09:15:08', 1, 0, 0),
(2, 'fgdfg', '2021-09-07 09:04:41', '2021-09-07 09:15:05', '2021-09-07 09:15:05', 1, 0, 0),
(3, 'klasjklasf', '2021-09-07 09:07:49', '2021-09-07 09:15:01', '2021-09-07 09:15:01', 1, 2, 1),
(4, 'ljjhjk', '2021-09-07 09:17:47', '2021-09-07 09:17:47', NULL, 1, 2, 2),
(5, 'test', '2021-09-08 06:36:34', '2021-09-08 06:36:34', NULL, 1, 1, 2),
(6, 'klasjklasf', '2021-09-08 06:37:10', '2021-09-08 06:37:10', NULL, 1, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `idea_categories`
--

CREATE TABLE `idea_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `idea_categories`
--

INSERT INTO `idea_categories` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kitchen', '2021-09-07 08:24:51', '2021-09-07 08:24:51', NULL),
(2, 'Bedroom', '2021-09-07 08:31:25', '2021-09-07 08:31:25', NULL),
(3, 'Living', '2021-09-07 08:31:49', '2021-09-07 08:31:49', NULL),
(4, 'Dining', '2021-09-07 08:32:19', '2021-09-07 08:32:19', NULL),
(5, 'Out Door', '2021-09-07 08:33:36', '2021-09-07 08:33:36', NULL),
(6, 'test', '2021-09-08 06:35:46', '2021-09-08 06:35:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `idea_styles`
--

CREATE TABLE `idea_styles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `idea_styles`
--

INSERT INTO `idea_styles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Modern', '2021-09-07 08:45:56', '2021-09-07 08:45:56', NULL),
(2, 'Traditional', '2021-09-07 08:46:08', '2021-09-07 08:46:08', NULL),
(3, 'Industrial', '2021-09-07 08:46:23', '2021-09-07 08:46:23', NULL),
(4, 'Farmhouse', '2021-09-07 08:46:47', '2021-09-07 08:46:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\ProSubCategory', 1, '1f257df4-0dbc-494b-b367-f36ec40666bb', 'image', '611b898562c07_6101162d1be58_Artboard-1', '611b898562c07_6101162d1be58_Artboard-1.jpg', 'image/jpeg', 'public', 'public', 404667, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 1, '2021-08-17 05:03:51', '2021-08-17 05:03:52'),
(3, 'App\\Models\\ProfessionalProfile', 1, '1c221cde-c23e-4c69-b060-319e11f6e510', 'pro_cover', '611b929ee2f68_M_F Logo Mockup (1)', '611b929ee2f68_M_F-Logo-Mockup-(1).jpg', 'image/jpeg', 'public', 'public', 3602315, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 3, '2021-08-17 05:42:56', '2021-08-17 05:42:58'),
(4, 'App\\Models\\ProfessionalProfile', 1, 'fea6d52e-2c7c-48cd-9256-4551f4a9c70a', 'pro_cover', '611b92a6576d8_M_FLogo', '611b92a6576d8_M_FLogo.png', 'image/png', 'public', 'public', 20108, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 4, '2021-08-17 05:42:58', '2021-08-17 05:42:59'),
(5, 'App\\Models\\ProfessionalProfile', 1, '842761b8-aa65-4398-b7e5-d014817a4b8c', 'profile_image', '611b93ede37f4_Artboard 1 (1)', '611b93ede37f4_Artboard-1-(1).jpg', 'image/jpeg', 'public', 'public', 403640, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 5, '2021-08-17 05:48:19', '2021-08-17 05:48:20'),
(6, 'App\\Models\\ProfessionalProfile', 2, '56598ccf-0510-435a-91ca-cbfe04e5abf7', 'profile_image', '611b9f426412c_6101162d1be58_Artboard-1', '611b9f426412c_6101162d1be58_Artboard-1.jpg', 'image/jpeg', 'public', 'public', 404667, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 6, '2021-08-17 06:36:46', '2021-08-17 06:36:47'),
(7, 'App\\Models\\ProfessionalProfile', 2, 'afcdd463-df46-4a05-a36b-7777abc659b0', 'pro_cover', '611b9f48c4e92_M_FLogo', '611b9f48c4e92_M_FLogo.png', 'image/png', 'public', 'public', 20108, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 7, '2021-08-17 06:36:47', '2021-08-17 06:36:47'),
(10, 'App\\Models\\ProfessionalProfile', 5, '296fd5c7-90bb-45e9-9a65-0dc6316786e9', 'profile_image', '6120a16403927_6101162d1be58_Artboard-1 (1)', '6120a16403927_6101162d1be58_Artboard-1-(1).jpg', 'image/jpeg', 'public', 'public', 404667, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 8, '2021-08-21 01:47:09', '2021-08-21 01:47:10'),
(11, 'App\\Models\\ProfessionalProfile', 5, 'f493fc0d-f492-43da-8a7c-686f9eaa3fe0', 'pro_cover', '6120a16b07a9c_6101162d1be58_Artboard-1', '6120a16b07a9c_6101162d1be58_Artboard-1.jpg', 'image/jpeg', 'public', 'public', 404667, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 9, '2021-08-21 01:47:10', '2021-08-21 01:47:11'),
(12, 'App\\Models\\ProSubCategory', 2, '6002015e-0981-4a85-b94c-f905ab6bc45a', 'image', '612a1747b6d39_6101162d1be58_Artboard-1', '612a1747b6d39_6101162d1be58_Artboard-1.jpg', 'image/jpeg', 'public', 'public', 404667, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 10, '2021-08-28 06:00:31', '2021-08-28 06:00:33'),
(13, 'App\\Models\\ProSubCategory', 3, 'd116bd00-e97f-41b5-9913-c873a7315a2c', 'image', '612a28059b937_app developent', '612a28059b937_app-developent.jpg', 'image/jpeg', 'public', 'public', 103930, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 11, '2021-08-28 07:11:53', '2021-08-28 07:11:53'),
(14, 'App\\Models\\IdeaCategory', 1, '0c1f08fb-ae7d-4d1d-a87d-d375f4f7727f', 'image', '613768220136c_kitchen-ideas-calderone-kitchen-006-1583960334', '613768220136c_kitchen-ideas-calderone-kitchen-006-1583960334.jpg', 'image/jpeg', 'public', 'public', 103249, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 12, '2021-09-07 08:24:52', '2021-09-07 08:24:55'),
(15, 'App\\Models\\IdeaCategory', 2, 'dda00a93-a81d-4c61-acc0-1b196c9cef66', 'image', '613769acb1c2c_download', '613769acb1c2c_download.jpg', 'image/jpeg', 'public', 'public', 7529, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 13, '2021-09-07 08:31:25', '2021-09-07 08:31:26'),
(16, 'App\\Models\\IdeaCategory', 3, '79fd58b2-c5e7-4eb1-9735-5f0a337e6a2e', 'image', '613769c4bd61e_living-room-dos-and-donts-2213467-hero-da82a4643bc84d669a0a34f64e60beb1', '613769c4bd61e_living-room-dos-and-donts-2213467-hero-da82a4643bc84d669a0a34f64e60beb1.jpg', 'image/jpeg', 'public', 'public', 278823, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 14, '2021-09-07 08:31:49', '2021-09-07 08:31:51'),
(17, 'App\\Models\\IdeaCategory', 4, '2dfb3369-d1b6-4681-90c8-be77ec189210', 'image', '613769e316871_download (1)', '613769e316871_download-(1).jpg', 'image/jpeg', 'public', 'public', 9919, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 15, '2021-09-07 08:32:20', '2021-09-07 08:32:20'),
(18, 'App\\Models\\IdeaCategory', 5, '1537bb23-3327-4509-bd2d-74737c1bdd7c', 'image', '61376a2f10dc5_outdoor-rooms-2-1490289764', '61376a2f10dc5_outdoor-rooms-2-1490289764.jpg', 'image/jpeg', 'public', 'public', 169135, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 16, '2021-09-07 08:33:36', '2021-09-07 08:33:36'),
(19, 'App\\Models\\Idea', 1, '92bd5f7b-1268-4aaa-b4f1-311e6da826dc', 'image', '6137709540fc3_home-decor-ideas-sfshowcaselivingroom-03-1585257771', '6137709540fc3_home-decor-ideas-sfshowcaselivingroom-03-1585257771.jpg', 'image/jpeg', 'public', 'public', 467964, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 17, '2021-09-07 09:00:57', '2021-09-07 09:00:58'),
(20, 'App\\Models\\Idea', 2, '491e2cec-71c0-4a2b-baa9-5bb74ef6a8ce', 'image', '6137717715e78_kitchen-ideas-calderone-kitchen-006-1583960334', '6137717715e78_kitchen-ideas-calderone-kitchen-006-1583960334.jpg', 'image/jpeg', 'public', 'public', 103249, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 18, '2021-09-07 09:04:41', '2021-09-07 09:04:42'),
(21, 'App\\Models\\Idea', 3, 'f6050277-87d5-44ca-bc4f-c7202de5216d', 'image', '6137723308349_kitchen-ideas-calderone-kitchen-006-1583960334', '6137723308349_kitchen-ideas-calderone-kitchen-006-1583960334.jpg', 'image/jpeg', 'public', 'public', 103249, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 19, '2021-09-07 09:07:49', '2021-09-07 09:07:50'),
(22, 'App\\Models\\Idea', 4, '3e7cfc6c-b78a-448c-93d5-7bcb6584cd75', 'image', '6137748a25c90_home-decor-ideas-sfshowcaselivingroom-03-1585257771', '6137748a25c90_home-decor-ideas-sfshowcaselivingroom-03-1585257771.jpg', 'image/jpeg', 'public', 'public', 467964, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 20, '2021-09-07 09:17:47', '2021-09-07 09:17:48'),
(23, 'App\\Models\\IdeaCategory', 6, 'ea495d0f-fdb1-4e2a-87a2-0d41253cf017', 'image', '6138a011d9e0b_living-room-dos-and-donts-2213467-hero-da82a4643bc84d669a0a34f64e60beb1', '6138a011d9e0b_living-room-dos-and-donts-2213467-hero-da82a4643bc84d669a0a34f64e60beb1.jpg', 'image/jpeg', 'public', 'public', 278823, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 21, '2021-09-08 06:35:47', '2021-09-08 06:35:48'),
(24, 'App\\Models\\Idea', 5, '2671f9bb-06c4-4e72-9329-c47ff5b19e17', 'image', '6138a0409492b_home-decor-ideas-sfshowcaselivingroom-03-1585257771', '6138a0409492b_home-decor-ideas-sfshowcaselivingroom-03-1585257771.jpg', 'image/jpeg', 'public', 'public', 467964, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 22, '2021-09-08 06:36:34', '2021-09-08 06:36:35'),
(25, 'App\\Models\\Idea', 6, '41c11398-4010-4678-a107-6e0702d07bec', 'image', '6138a065ba5cc_download (1)', '6138a065ba5cc_download-(1).jpg', 'image/jpeg', 'public', 'public', 9919, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 23, '2021-09-08 06:37:10', '2021-09-08 06:37:11'),
(26, 'App\\Models\\ProSubCategory', 4, '09690ea2-92f3-4ab8-b664-263950e73554', 'image', '6138a0b100ccb_download', '6138a0b100ccb_download.jpg', 'image/jpeg', 'public', 'public', 7529, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 24, '2021-09-08 06:38:25', '2021-09-08 06:38:26'),
(27, 'App\\Models\\ProfessionalProfile', 6, '3bbec68a-d2f9-4069-a2e4-92ba94b2c48d', 'profile_image', '6138a18126c19_kitchen-ideas-calderone-kitchen-006-1583960334', '6138a18126c19_kitchen-ideas-calderone-kitchen-006-1583960334.jpg', 'image/jpeg', 'public', 'public', 103249, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 25, '2021-09-08 06:42:10', '2021-09-08 06:42:11'),
(28, 'App\\Models\\ProfessionalProfile', 6, 'd82d033a-cdd1-42f3-a515-c0919c5b8e95', 'pro_cover', '6138a18c1da76_download (1)', '6138a18c1da76_download-(1).jpg', 'image/jpeg', 'public', 'public', 9919, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 26, '2021-09-08 06:42:11', '2021-09-08 06:42:12'),
(29, 'App\\Models\\ProfessionalProfile', 6, 'a254ac2c-dacc-4b11-af85-53d90336d36f', 'pro_cover', '6138a18c93ae7_download', '6138a18c93ae7_download.jpg', 'image/jpeg', 'public', 'public', 7529, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 27, '2021-09-08 06:42:12', '2021-09-08 06:42:12'),
(30, 'App\\Models\\ProfessionalProfile', 6, '0846372b-9357-4847-98d9-c191432665b2', 'pro_cover', '6138a18ce88f5_home-decor-ideas-sfshowcaselivingroom-03-1585257771', '6138a18ce88f5_home-decor-ideas-sfshowcaselivingroom-03-1585257771.jpg', 'image/jpeg', 'public', 'public', 467964, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 28, '2021-09-08 06:42:12', '2021-09-08 06:42:13'),
(31, 'App\\Models\\ProfessionalProfile', 6, '35b9e333-ed4e-4fdb-8e44-cd5ed3ce12b9', 'pro_cover', '6138a18d450d9_living-room-dos-and-donts-2213467-hero-da82a4643bc84d669a0a34f64e60beb1', '6138a18d450d9_living-room-dos-and-donts-2213467-hero-da82a4643bc84d669a0a34f64e60beb1.jpg', 'image/jpeg', 'public', 'public', 278823, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 29, '2021-09-08 06:42:13', '2021-09-08 06:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customerid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flow` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2021_08_17_000001_create_media_table', 1),
(3, '2021_08_17_000002_create_ideas_table', 1),
(4, '2021_08_17_000003_create_order_products_table', 1),
(5, '2021_08_17_000004_create_create_blogs_table', 1),
(6, '2021_08_17_000005_create_comments_table', 1),
(7, '2021_08_17_000006_create_profile_comments_table', 1),
(8, '2021_08_17_000007_create_product_comments_table', 1),
(9, '2021_08_17_000008_create_carts_table', 1),
(10, '2021_08_17_000009_create_orders_table', 1),
(11, '2021_08_17_000010_create_wishlists_table', 1),
(12, '2021_08_17_000011_create_idea_styles_table', 1),
(13, '2021_08_17_000012_create_permissions_table', 1),
(14, '2021_08_17_000013_create_customer_logins_table', 1),
(15, '2021_08_17_000014_create_profiles_table', 1),
(16, '2021_08_17_000015_create_customer_contacts_table', 1),
(17, '2021_08_17_000016_create_messages_table', 1),
(18, '2021_08_17_000017_create_idea_categories_table', 1),
(19, '2021_08_17_000018_create_blog_categories_table', 1),
(20, '2021_08_17_000019_create_pro_sub_categories_table', 1),
(21, '2021_08_17_000020_create_categories_table', 1),
(22, '2021_08_17_000021_create_roles_table', 1),
(23, '2021_08_17_000022_create_products_table', 1),
(24, '2021_08_17_000023_create_product_categories_table', 1),
(25, '2021_08_17_000024_create_users_table', 1),
(26, '2021_08_17_000025_create_portfolios_table', 1),
(27, '2021_08_17_000026_create_professional_profiles_table', 1),
(28, '2021_08_17_000027_create_product_sub_categories_table', 1),
(29, '2021_08_17_000028_create_professional_details_table', 1),
(30, '2021_08_17_000029_create_awards_table', 1),
(31, '2021_08_17_000030_create_product_styles_table', 1),
(32, '2021_08_17_000031_create_permission_role_pivot_table', 1),
(33, '2021_08_17_000032_create_role_user_pivot_table', 1),
(34, '2021_08_17_000033_add_relationship_fields_to_product_sub_categories_table', 1),
(35, '2021_08_17_000034_add_relationship_fields_to_ideas_table', 1),
(36, '2021_08_17_000035_add_relationship_fields_to_professional_details_table', 1),
(37, '2021_08_17_000036_add_relationship_fields_to_professional_profiles_table', 1),
(38, '2021_08_17_000037_add_relationship_fields_to_portfolios_table', 1),
(39, '2021_08_17_000038_add_relationship_fields_to_create_blogs_table', 1),
(40, '2021_08_17_000039_add_relationship_fields_to_products_table', 1),
(41, '2021_08_17_000040_add_relationship_fields_to_pro_sub_categories_table', 1),
(42, '2021_08_17_000041_add_approval_fields', 1),
(43, '2021_08_17_000042_create_qa_topics_table', 1),
(44, '2021_08_17_000043_create_qa_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_bill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'professional_access', NULL, NULL, NULL),
(18, 'category_create', NULL, NULL, NULL),
(19, 'category_edit', NULL, NULL, NULL),
(20, 'category_show', NULL, NULL, NULL),
(21, 'category_delete', NULL, NULL, NULL),
(22, 'category_access', NULL, NULL, NULL),
(23, 'product_style_create', NULL, NULL, NULL),
(24, 'product_style_edit', NULL, NULL, NULL),
(25, 'product_style_show', NULL, NULL, NULL),
(26, 'product_style_delete', NULL, NULL, NULL),
(27, 'product_style_access', NULL, NULL, NULL),
(28, 'award_create', NULL, NULL, NULL),
(29, 'award_edit', NULL, NULL, NULL),
(30, 'award_show', NULL, NULL, NULL),
(31, 'award_delete', NULL, NULL, NULL),
(32, 'award_access', NULL, NULL, NULL),
(33, 'professional_detail_create', NULL, NULL, NULL),
(34, 'professional_detail_edit', NULL, NULL, NULL),
(35, 'professional_detail_show', NULL, NULL, NULL),
(36, 'professional_detail_delete', NULL, NULL, NULL),
(37, 'professional_detail_access', NULL, NULL, NULL),
(38, 'professional_profile_create', NULL, NULL, NULL),
(39, 'professional_profile_edit', NULL, NULL, NULL),
(40, 'professional_profile_show', NULL, NULL, NULL),
(41, 'professional_profile_delete', NULL, NULL, NULL),
(42, 'professional_profile_access', NULL, NULL, NULL),
(43, 'portfolio_create', NULL, NULL, NULL),
(44, 'portfolio_edit', NULL, NULL, NULL),
(45, 'portfolio_show', NULL, NULL, NULL),
(46, 'portfolio_delete', NULL, NULL, NULL),
(47, 'portfolio_access', NULL, NULL, NULL),
(48, 'shop_access', NULL, NULL, NULL),
(49, 'product_category_create', NULL, NULL, NULL),
(50, 'product_category_edit', NULL, NULL, NULL),
(51, 'product_category_show', NULL, NULL, NULL),
(52, 'product_category_delete', NULL, NULL, NULL),
(53, 'product_category_access', NULL, NULL, NULL),
(54, 'product_create', NULL, NULL, NULL),
(55, 'product_edit', NULL, NULL, NULL),
(56, 'product_show', NULL, NULL, NULL),
(57, 'product_delete', NULL, NULL, NULL),
(58, 'product_access', NULL, NULL, NULL),
(59, 'product_sub_category_create', NULL, NULL, NULL),
(60, 'product_sub_category_edit', NULL, NULL, NULL),
(61, 'product_sub_category_show', NULL, NULL, NULL),
(62, 'product_sub_category_delete', NULL, NULL, NULL),
(63, 'product_sub_category_access', NULL, NULL, NULL),
(64, 'pro_sub_category_create', NULL, NULL, NULL),
(65, 'pro_sub_category_edit', NULL, NULL, NULL),
(66, 'pro_sub_category_show', NULL, NULL, NULL),
(67, 'pro_sub_category_delete', NULL, NULL, NULL),
(68, 'pro_sub_category_access', NULL, NULL, NULL),
(69, 'blog_access', NULL, NULL, NULL),
(70, 'blog_category_create', NULL, NULL, NULL),
(71, 'blog_category_edit', NULL, NULL, NULL),
(72, 'blog_category_show', NULL, NULL, NULL),
(73, 'blog_category_delete', NULL, NULL, NULL),
(74, 'blog_category_access', NULL, NULL, NULL),
(75, 'create_blog_create', NULL, NULL, NULL),
(76, 'create_blog_edit', NULL, NULL, NULL),
(77, 'create_blog_show', NULL, NULL, NULL),
(78, 'create_blog_delete', NULL, NULL, NULL),
(79, 'create_blog_access', NULL, NULL, NULL),
(80, 'comment_create', NULL, NULL, NULL),
(81, 'comment_edit', NULL, NULL, NULL),
(82, 'comment_show', NULL, NULL, NULL),
(83, 'comment_delete', NULL, NULL, NULL),
(84, 'comment_access', NULL, NULL, NULL),
(85, 'profile_comment_create', NULL, NULL, NULL),
(86, 'profile_comment_edit', NULL, NULL, NULL),
(87, 'profile_comment_show', NULL, NULL, NULL),
(88, 'profile_comment_delete', NULL, NULL, NULL),
(89, 'profile_comment_access', NULL, NULL, NULL),
(90, 'product_comment_create', NULL, NULL, NULL),
(91, 'product_comment_edit', NULL, NULL, NULL),
(92, 'product_comment_show', NULL, NULL, NULL),
(93, 'product_comment_delete', NULL, NULL, NULL),
(94, 'product_comment_access', NULL, NULL, NULL),
(95, 'cart_create', NULL, NULL, NULL),
(96, 'cart_edit', NULL, NULL, NULL),
(97, 'cart_show', NULL, NULL, NULL),
(98, 'cart_delete', NULL, NULL, NULL),
(99, 'cart_access', NULL, NULL, NULL),
(100, 'order_create', NULL, NULL, NULL),
(101, 'order_edit', NULL, NULL, NULL),
(102, 'order_show', NULL, NULL, NULL),
(103, 'order_delete', NULL, NULL, NULL),
(104, 'order_access', NULL, NULL, NULL),
(105, 'order_product_create', NULL, NULL, NULL),
(106, 'order_product_edit', NULL, NULL, NULL),
(107, 'order_product_show', NULL, NULL, NULL),
(108, 'order_product_delete', NULL, NULL, NULL),
(109, 'order_product_access', NULL, NULL, NULL),
(110, 'wishlist_create', NULL, NULL, NULL),
(111, 'wishlist_edit', NULL, NULL, NULL),
(112, 'wishlist_show', NULL, NULL, NULL),
(113, 'wishlist_delete', NULL, NULL, NULL),
(114, 'wishlist_access', NULL, NULL, NULL),
(115, 'customer_login_create', NULL, NULL, NULL),
(116, 'customer_login_edit', NULL, NULL, NULL),
(117, 'customer_login_show', NULL, NULL, NULL),
(118, 'customer_login_delete', NULL, NULL, NULL),
(119, 'customer_login_access', NULL, NULL, NULL),
(120, 'profile_create', NULL, NULL, NULL),
(121, 'profile_edit', NULL, NULL, NULL),
(122, 'profile_show', NULL, NULL, NULL),
(123, 'profile_delete', NULL, NULL, NULL),
(124, 'profile_access', NULL, NULL, NULL),
(125, 'customer_contact_create', NULL, NULL, NULL),
(126, 'customer_contact_edit', NULL, NULL, NULL),
(127, 'customer_contact_show', NULL, NULL, NULL),
(128, 'customer_contact_delete', NULL, NULL, NULL),
(129, 'customer_contact_access', NULL, NULL, NULL),
(130, 'message_create', NULL, NULL, NULL),
(131, 'message_edit', NULL, NULL, NULL),
(132, 'message_show', NULL, NULL, NULL),
(133, 'message_delete', NULL, NULL, NULL),
(134, 'message_access', NULL, NULL, NULL),
(135, 'get_idea_access', NULL, NULL, NULL),
(136, 'idea_category_create', NULL, NULL, NULL),
(137, 'idea_category_edit', NULL, NULL, NULL),
(138, 'idea_category_show', NULL, NULL, NULL),
(139, 'idea_category_delete', NULL, NULL, NULL),
(140, 'idea_category_access', NULL, NULL, NULL),
(141, 'idea_style_create', NULL, NULL, NULL),
(142, 'idea_style_edit', NULL, NULL, NULL),
(143, 'idea_style_show', NULL, NULL, NULL),
(144, 'idea_style_delete', NULL, NULL, NULL),
(145, 'idea_style_access', NULL, NULL, NULL),
(146, 'idea_create', NULL, NULL, NULL),
(147, 'idea_edit', NULL, NULL, NULL),
(148, 'idea_show', NULL, NULL, NULL),
(149, 'idea_delete', NULL, NULL, NULL),
(150, 'idea_access', NULL, NULL, NULL),
(151, 'profile_password_edit', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 35),
(1, 37),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 63),
(1, 64),
(1, 65),
(1, 66),
(1, 67),
(1, 68),
(1, 69),
(1, 70),
(1, 71),
(1, 72),
(1, 73),
(1, 74),
(1, 75),
(1, 76),
(1, 77),
(1, 78),
(1, 79),
(1, 102),
(1, 104),
(1, 135),
(1, 136),
(1, 137),
(1, 138),
(1, 139),
(1, 140),
(1, 141),
(1, 142),
(1, 143),
(1, 144),
(1, 145),
(1, 146),
(1, 147),
(1, 148),
(1, 149),
(1, 150),
(1, 151),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 41),
(2, 42),
(2, 43),
(2, 44),
(2, 45),
(2, 46),
(2, 47),
(2, 120),
(2, 121),
(2, 122),
(2, 123),
(2, 124),
(2, 133),
(2, 134),
(2, 135),
(2, 146),
(2, 147),
(2, 148),
(2, 149),
(2, 150),
(2, 151);

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `approved` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_comments`
--

CREATE TABLE `product_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_styles`
--

CREATE TABLE `product_styles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_styles`
--

INSERT INTO `product_styles` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'sample style', '2021-08-28 07:12:21', '2021-08-28 07:12:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_categories`
--

CREATE TABLE `product_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `professional_profiles`
--

CREATE TABLE `professional_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_about` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professional_profiles`
--

INSERT INTO `professional_profiles` (`id`, `pro_about`, `created_at`, `updated_at`, `deleted_at`, `user_id`) VALUES
(1, '<p>afsd ssfsfb fs&nbsp;</p>', '2021-08-17 05:42:55', '2021-08-17 05:42:55', NULL, 2),
(2, '<p>rtdyty</p>', '2021-08-17 06:36:46', '2021-08-17 06:36:46', NULL, 3),
(5, '<p>ADFDFDF FFD&nbsp;</p>', '2021-08-21 01:47:09', '2021-08-21 01:49:50', NULL, 4),
(6, '<p>kjhkjhjk ojj k</p>', '2021-09-08 06:42:10', '2021-09-08 06:42:10', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile_comments`
--

CREATE TABLE `profile_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pro_sub_categories`
--

CREATE TABLE `pro_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `prof_category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pro_sub_categories`
--

INSERT INTO `pro_sub_categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`, `prof_category_id`) VALUES
(1, 'Architecture', '2021-08-17 05:03:51', '2021-08-17 05:03:51', NULL, 1),
(2, 'beef burger', '2021-08-28 06:00:30', '2021-08-28 06:00:30', NULL, 1),
(3, 'sub category', '2021-08-28 07:11:52', '2021-09-08 03:38:13', NULL, 2),
(4, 'meezan oil', '2021-09-08 06:38:25', '2021-09-08 06:38:25', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `qa_messages`
--

CREATE TABLE `qa_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qa_messages`
--

INSERT INTO `qa_messages` (`id`, `topic_id`, `sender_id`, `read_at`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 'sdgsfgvfg', '2021-08-21 02:30:15', '2021-08-21 02:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `qa_topics`
--

CREATE TABLE `qa_topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qa_topics`
--

INSERT INTO `qa_topics` (`id`, `subject`, `creator_id`, `receiver_id`, `created_at`, `updated_at`) VALUES
(1, 'dssf', 1, 2, '2021-08-21 02:30:15', '2021-08-21 02:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved` tinyint(1) DEFAULT 0,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `approved`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$P0/Xg41CY.ZBD2OzX5D0oOveC0VubO7MOLg72TjEUJU9Fj4knnaX6', 1, NULL, NULL, NULL, NULL),
(2, 'Xavier tech', 'testprofessional@gmail.com', NULL, '$2y$10$TpKQYtb4cE/yjBgKW8QTc.7RMtuRF.WUNFmOA9GT83wGavXLZU7XC', 1, NULL, '2021-08-17 02:47:21', '2021-08-17 02:47:21', NULL),
(3, 'mahzaib mirza', 'lagarbagar@gmail.com', NULL, '$2y$10$VcJlmMYc3Q01pEKZhv/iaeCD1y30yCBbD7AtXvZk2FnIwaw4e7PMO', 1, NULL, '2021-08-17 05:49:59', '2021-08-17 05:50:24', NULL),
(4, 'test2', 'testprofessional1@gmail.com', NULL, '$2y$10$RTTTVV8T/QCB8Wg6aUTeMuarV5IpakO190dMJJNrykSEdIbCdvHAe', 1, NULL, '2021-08-21 01:40:49', '2021-08-28 07:13:44', NULL),
(5, 'testpro', 'testpro@gmail.com', NULL, '$2y$10$sqxAWCis1KgC4/KnDOGbJuHFReZ7nxg3Xhd.fnjqLdMsBCMh6ck7O', 1, NULL, '2021-09-08 06:40:41', '2021-09-08 06:41:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customerid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_blogs`
--
ALTER TABLE `create_blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_fk_4609725` (`category_id`);

--
-- Indexes for table `customer_contacts`
--
ALTER TABLE `customer_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_logins`
--
ALTER TABLE `customer_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk_4649386` (`user_id`);

--
-- Indexes for table `idea_categories`
--
ALTER TABLE `idea_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idea_styles`
--
ALTER TABLE `idea_styles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_4594704` (`role_id`),
  ADD KEY `permission_id_fk_4594704` (`permission_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk_4607869` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_fk_4609559` (`category_id`),
  ADD KEY `sub_category_fk_4609560` (`sub_category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_styles`
--
ALTER TABLE `product_styles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sub_categories`
--
ALTER TABLE `product_sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_fk_4609534` (`category_id`);

--
-- Indexes for table `professional_details`
--
ALTER TABLE `professional_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_fk_4607800` (`category_id`),
  ADD KEY `user_fk_4607815` (`user_id`);

--
-- Indexes for table `professional_profiles`
--
ALTER TABLE `professional_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk_4607843` (`user_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_comments`
--
ALTER TABLE `profile_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_sub_categories`
--
ALTER TABLE `pro_sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prof_category_fk_4609599` (`prof_category_id`);

--
-- Indexes for table `qa_messages`
--
ALTER TABLE `qa_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qa_messages_topic_id_foreign` (`topic_id`),
  ADD KEY `qa_messages_sender_id_foreign` (`sender_id`);

--
-- Indexes for table `qa_topics`
--
ALTER TABLE `qa_topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qa_topics_creator_id_foreign` (`creator_id`),
  ADD KEY `qa_topics_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_4594713` (`user_id`),
  ADD KEY `role_id_fk_4594713` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `create_blogs`
--
ALTER TABLE `create_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_contacts`
--
ALTER TABLE `customer_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_logins`
--
ALTER TABLE `customer_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `idea_categories`
--
ALTER TABLE `idea_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `idea_styles`
--
ALTER TABLE `idea_styles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_styles`
--
ALTER TABLE `product_styles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_sub_categories`
--
ALTER TABLE `product_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professional_details`
--
ALTER TABLE `professional_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `professional_profiles`
--
ALTER TABLE `professional_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile_comments`
--
ALTER TABLE `profile_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pro_sub_categories`
--
ALTER TABLE `pro_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `qa_messages`
--
ALTER TABLE `qa_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qa_topics`
--
ALTER TABLE `qa_topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `create_blogs`
--
ALTER TABLE `create_blogs`
  ADD CONSTRAINT `category_fk_4609725` FOREIGN KEY (`category_id`) REFERENCES `blog_categories` (`id`);

--
-- Constraints for table `ideas`
--
ALTER TABLE `ideas`
  ADD CONSTRAINT `user_fk_4649386` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_4594704` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_4594704` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `user_fk_4607869` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `category_fk_4609559` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`),
  ADD CONSTRAINT `sub_category_fk_4609560` FOREIGN KEY (`sub_category_id`) REFERENCES `product_sub_categories` (`id`);

--
-- Constraints for table `product_sub_categories`
--
ALTER TABLE `product_sub_categories`
  ADD CONSTRAINT `category_fk_4609534` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`);

--
-- Constraints for table `professional_details`
--
ALTER TABLE `professional_details`
  ADD CONSTRAINT `category_fk_4607800` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `user_fk_4607815` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `professional_profiles`
--
ALTER TABLE `professional_profiles`
  ADD CONSTRAINT `user_fk_4607843` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pro_sub_categories`
--
ALTER TABLE `pro_sub_categories`
  ADD CONSTRAINT `prof_category_fk_4609599` FOREIGN KEY (`prof_category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `qa_messages`
--
ALTER TABLE `qa_messages`
  ADD CONSTRAINT `qa_messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `qa_messages_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `qa_topics` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `qa_topics`
--
ALTER TABLE `qa_topics`
  ADD CONSTRAINT `qa_topics_creator_id_foreign` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `qa_topics_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_4594713` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_4594713` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
