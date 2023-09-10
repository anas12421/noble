-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2023 at 06:38 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noble`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `link`, `photo`, `created_at`, `updated_at`) VALUES
(3, 'Trendy & Unique Collection', NULL, 'banner-176.jpg', NULL, NULL),
(4, 'Trendy & Unique Collection', NULL, 'banner-285.jpg', NULL, NULL),
(6, 'Trendy & Unique Collection', NULL, 'banner-693.jpg', NULL, NULL),
(7, 'Trendy & Unique Collection', NULL, 'banner-368.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_logo`, `created_at`, `updated_at`) VALUES
(1, 'Gucci', 'gucci-.png', '2023-08-13 01:52:59', NULL),
(2, 'Jbl', 'jbl-.png', '2023-08-13 01:53:49', NULL),
(3, 'Sony', 'sony-.png', '2023-08-13 01:55:13', NULL),
(4, 'Bengal Meat', 'bengal-meat-.png', '2023-08-13 01:55:24', NULL),
(5, 'Nike', 'nike-.png', '2023-08-13 01:55:46', NULL),
(6, 'Otobi', 'otobi-.png', '2023-08-13 01:57:11', NULL),
(7, 'Sultan Dine', 'sultan-dine-.png', '2023-08-13 01:57:41', '2023-08-19 02:22:02'),
(8, 'Apple', 'apple-.png', '2023-08-13 01:58:37', NULL),
(9, 'Pampers', 'pampers-.png', '2023-08-13 02:00:09', NULL),
(10, 'Diamond World', 'diamond-world-.png', '2023-08-13 02:00:31', NULL),
(11, 'Hello Pets', 'hello-pets-.jpg', '2023-08-13 02:00:40', NULL),
(15, 'Walton', 'walton-.png', '2023-08-18 09:24:53', NULL),
(16, 'Chaldal', 'chaldal-.png', '2023-08-18 09:46:19', NULL),
(17, 'red lebel', 'red-lebel-.jpg', '2023-08-18 09:58:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `icon`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Uncategories', 'uncategories-282.png', NULL, NULL, '2023-08-07 09:45:39'),
(3, 'Furniture', 'furniture-250.png', NULL, NULL, '2023-08-07 09:45:39'),
(4, 'Home Appliences', 'home-appliences-258.png', NULL, NULL, '2023-08-07 09:45:39'),
(5, 'Sport', 'sport-181.png', NULL, '2023-08-06 03:14:17', '2023-08-07 09:45:39'),
(6, 'Food', 'food-299.png', NULL, '2023-08-06 03:14:40', '2023-08-07 09:45:39'),
(7, 'Electronics', 'electronics-102.png', NULL, '2023-08-06 03:14:53', '2023-08-07 09:45:39'),
(8, 'Accessories', 'accessories-194.png', NULL, '2023-08-06 03:15:00', '2023-08-07 09:45:39'),
(9, 'Pet', 'pet-261.png', NULL, '2023-08-06 03:23:54', '2023-08-07 09:45:39'),
(10, 'Goods', 'goods-270.png', NULL, '2023-08-06 03:24:08', '2023-08-07 09:45:39'),
(11, 'Kids', 'kids-200.png', NULL, '2023-08-06 03:24:31', '2023-08-07 09:45:39'),
(18, 'Whoopi Conway', 'whoopi-conway-189.jpg', '2023-08-30', '2023-08-07 09:54:25', '2023-08-30 03:05:22'),
(19, 'Wylie Mckay', 'wylie-mckay-260.jpg', '2023-08-19', '2023-08-07 09:54:31', '2023-08-19 02:22:47'),
(22, 'Kimberley Day', '-115.jpg', '2023-08-09', '2023-08-09 02:00:25', '2023-08-09 02:00:48'),
(23, 'Alana Graham', '-226.jpg', '2023-08-09', '2023-08-09 02:00:41', '2023-08-09 02:00:48'),
(24, 'Drug', '-205.png', NULL, '2023-08-18 09:54:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint UNSIGNED NOT NULL,
  `color_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color_name`, `color_code`, `created_at`, `updated_at`) VALUES
(1, 'NA', NULL, '2023-08-27 08:34:43', NULL),
(2, 'Black', '#000000', '2023-08-27 08:37:35', NULL),
(3, 'Red', '#FF0000', '2023-08-27 08:37:52', NULL),
(5, 'Green', '#008000', '2023-08-27 08:39:55', NULL),
(6, 'Blue', '#0000FF', '2023-08-27 08:40:24', NULL),
(7, 'Yellow', '#FFFF00', '2023-08-27 08:40:39', NULL),
(8, 'White', '#FFFFFF', '2023-08-27 08:40:46', NULL),
(9, 'Cyan', '#00FFFF', '2023-08-27 08:41:14', NULL),
(10, 'Magenta', '#FF00FF', '2023-08-27 08:41:25', NULL),
(11, 'Purple', '#800080', '2023-08-27 08:41:39', NULL),
(12, 'Maroon', '#800000', '2023-08-27 08:41:58', NULL),
(13, 'Teal', '#008080', '2023-08-27 08:42:25', NULL),
(15, 'Brown', '#964B00', '2023-09-07 11:02:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `copyrights`
--

CREATE TABLE `copyrights` (
  `id` bigint UNSIGNED NOT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `copyrights`
--

INSERT INTO `copyrights` (`id`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'Copyright © 2023 Themart by wpOceans. All Rights Reserved.', '2023-09-04 07:45:12', '2023-09-04 01:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer1s`
--

CREATE TABLE `footer1s` (
  `id` int UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desp` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer1s`
--

INSERT INTO `footer1s` (`id`, `image`, `desp`, `facebook`, `twitter`, `linkedin`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'logo.png', 'Elit commodo nec urna erat morbi at hac turpis aliquam. In tristique elit nibh turpis. Lacus volutpat ipsum convallis tellus pellentesque etiam.', 'https://www.facebook.com/anas.abdullah12421/', 'https://www.facebook.com/anas.abdullah12421/', 'https://www.facebook.com/anas.abdullah12421/', 'https://www.facebook.com/anas.abdullah12421/', NULL, '2023-09-02 10:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `footer2s`
--

CREATE TABLE `footer2s` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer2s`
--

INSERT INTO `footer2s` (`id`, `email`, `number1`, `number2`, `address`, `created_at`, `updated_at`) VALUES
(1, 'themart@gmail.com', '(208) 555-0112', '(704) 555-0127', '4517 Washington Ave. Manchter, Kentucky 495', NULL, '2023-09-02 10:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `footer3s`
--

CREATE TABLE `footer3s` (
  `id` bigint UNSIGNED NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer3s`
--

INSERT INTO `footer3s` (`id`, `tags`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Men', '#', NULL, NULL),
(2, 'Women', '#', NULL, NULL),
(3, 'Kids', '#', NULL, NULL),
(4, 'Shoe', '#', NULL, NULL),
(5, 'Jewelry', '#', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `footer4s`
--

CREATE TABLE `footer4s` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer4s`
--

INSERT INTO `footer4s` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(5, 'insta_image318.jpg', '2023-09-02 11:21:57', NULL),
(6, 'insta_image332.jpg', '2023-09-02 11:22:09', NULL),
(7, 'insta_image312.jpg', '2023-09-02 11:22:23', NULL),
(8, 'insta_image285.jpg', '2023-09-02 11:23:03', NULL),
(10, 'insta_image132.jpg', '2023-09-02 11:23:36', NULL),
(11, 'insta_image297.jpg', '2023-09-02 11:23:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int NOT NULL,
  `color_id` int NOT NULL,
  `size_id` int NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`id`, `product_id`, `color_id`, `size_id`, `quantity`, `created_at`, `updated_at`) VALUES
(2, 11, 5, 4, 84, '2023-08-27 10:34:03', NULL),
(4, 1, 3, 4, 30, '2023-08-30 03:02:20', '2023-08-30 03:18:00'),
(5, 1, 9, 3, 27, '2023-08-30 03:02:34', '2023-08-30 03:18:16'),
(6, 1, 12, 8, 5, '2023-08-30 03:02:44', NULL),
(7, 3, 2, 27, 10, '2023-09-07 10:42:02', NULL),
(8, 6, 9, 33, 15, '2023-09-07 10:42:43', NULL),
(9, 6, 6, 37, 55, '2023-09-07 10:42:52', NULL),
(11, 2, 3, 13, 11, '2023-09-07 10:57:15', NULL),
(12, 2, 5, 24, 41, '2023-09-07 10:58:12', NULL),
(13, 2, 11, 15, 44, '2023-09-07 10:58:20', NULL),
(14, 3, 11, 32, 14, '2023-09-07 10:58:43', NULL),
(15, 4, 1, 18, 300, '2023-09-07 10:59:00', NULL),
(16, 5, 2, 19, 15, '2023-09-07 10:59:32', NULL),
(17, 5, 11, 19, 47, '2023-09-07 10:59:38', NULL),
(18, 5, 8, 19, 47, '2023-09-07 10:59:58', NULL),
(19, 5, 6, 19, 12, '2023-09-07 11:00:06', NULL),
(20, 7, 1, 21, 11, '2023-09-07 11:00:34', NULL),
(22, 8, 8, 39, 2000, '2023-09-07 11:01:52', NULL),
(23, 8, 15, 40, 1200, '2023-09-07 11:02:54', NULL),
(24, 9, 8, 47, 12, '2023-09-07 11:03:27', NULL),
(25, 9, 8, 43, 22, '2023-09-07 11:03:38', NULL),
(26, 11, 15, 3, 15, '2023-09-07 11:06:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `menu_link`, `created_at`, `updated_at`) VALUES
(1, 'Home', '#', '2023-08-30 10:53:44', NULL),
(2, 'About', '#', '2023-08-30 10:53:59', NULL),
(3, 'Shop', '#', '2023-08-30 10:54:04', NULL),
(4, 'FAQ', '#', '2023-08-30 10:54:12', NULL),
(5, 'Contact', '#', '2023-08-30 10:54:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_06_082755_create_categories_table', 2),
(6, '2023_08_07_160201_create_subcategories_table', 3),
(7, '2023_08_12_161554_create_brands_table', 4),
(8, '2023_08_13_084606_create_products_table', 5),
(9, '2023_08_18_150248_create_product_galleries_table', 6),
(11, '2023_08_27_142305_create_colors_table', 7),
(12, '2023_08_27_144832_create_sizes_table', 8),
(13, '2023_08_27_154357_create_inventories_table', 9),
(14, '2023_08_30_163921_create_menus_table', 10),
(15, '2023_09_01_145239_create_subscribers_table', 11),
(24, '2023_09_02_144506_create_footer1s_table', 12),
(25, '2023_09_02_144511_create_footer2s_table', 12),
(26, '2023_09_02_144517_create_footer3s_table', 12),
(27, '2023_09_02_144521_create_footer4s_table', 12),
(28, '2023_09_04_072925_create_copyrights_table', 13),
(29, '2023_09_04_075632_create_banners_table', 14),
(30, '2023_09_06_074826_create_offer1s_table', 15),
(31, '2023_09_06_074829_create_offer2s_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `offer1s`
--

CREATE TABLE `offer1s` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dis` int NOT NULL,
  `price` int DEFAULT NULL,
  `date` date NOT NULL,
  `photo` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer1s`
--

INSERT INTO `offer1s` (`id`, `title`, `dis`, `price`, `date`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Stylish Coat', 800, 1500, '2023-12-31', 'offer1.jpg', NULL, '2023-09-06 03:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `offer2s`
--

CREATE TABLE `offer2s` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer2s`
--

INSERT INTO `offer2s` (`id`, `title`, `sub_title`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'New Year Sale', 'Up To 70% Off', 'offer2.jpg', NULL, '2023-09-06 03:14:46');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int NOT NULL,
  `subcategory_id` int NOT NULL,
  `brand_id` int DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `discount` int DEFAULT NULL,
  `after_discount` int NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_desp` longtext COLLATE utf8mb4_unicode_ci,
  `addi_desp` longtext COLLATE utf8mb4_unicode_ci,
  `preview` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int DEFAULT NULL,
  `slug` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `price`, `discount`, `after_discount`, `tags`, `short_desp`, `long_desp`, `addi_desp`, `preview`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 3, 'OTOBI Sofa Set-P042 I P060', 375000, 2, 367500, 'sofa,otobi,brand,wood sofa', 'otobi Premium Sofa', '<h2 style=\"margin-top: 15px; margin-bottom: 0.5rem; font-family: Poppins, sans-serif; font-weight: 400; color: rgb(41, 41, 41); font-size: 20px; border-bottom: 1px solid rgb(36, 124, 38);\"><span style=\"transition: all 0.3s ease 0s; color: rgb(36, 124, 38);\">Product Description</span></h2><p style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 16px;\">Product Code: <span style=\"transition: all 0.3s ease 0s; color: red;\">STCP042FF I SSCP060FF I CTCP042WD</span></p><p style=\"margin-right: 0px; margin-bottom: 1rem; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 16px; color: rgb(152, 150, 150);\"></p><p class=\"MsoNormal\" align=\"right\" style=\"margin-right: 0px; margin-bottom: 3.75pt; margin-left: 0px; color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: right; line-height: normal;\"><span style=\"transition: all 0.3s ease 0s; font-size: 10pt; font-family: verdana, sans-serif; color: rgb(51, 51, 51);\">Three Seater: </span><span style=\"font-weight: bolder;\"><span style=\"transition: all 0.3s ease 0s; font-size: 10pt; font-family: verdana, sans-serif; color: rgb(51, 51, 51);\">STCP042FFBK155</span></span><span style=\"transition: all 0.3s ease 0s; font-size: 10pt; font-family: verdana, sans-serif; color: rgb(51, 51, 51);\">| Price: 152,000X1=1,52000</span></p><p class=\"MsoNormal\" align=\"right\" style=\"margin-right: 0px; margin-bottom: 3.75pt; margin-left: 0px; color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: right; line-height: normal;\"><span style=\"transition: all 0.3s ease 0s; font-size: 10pt; font-family: verdana, sans-serif;\"><span style=\"transition: all 0.3s ease 0s; font-size: 10pt; color: rgb(51, 51, 51);\">                                                                       Single Seater: </span><span style=\"font-weight: bolder;\"><span style=\"transition: all 0.3s ease 0s; font-size: 10pt; color: rgb(51, 51, 51);\">SSCP060FFBK155</span></span><span style=\"transition: all 0.3s ease 0s; font-size: 10pt; color: rgb(51, 51, 51);\">|Price:  99,000X2=1,98000</span></span></p><p class=\"MsoNormal\" align=\"right\" style=\"margin-right: 0px; margin-bottom: 3.75pt; margin-left: 0px; color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: right; line-height: normal;\"><span style=\"transition: all 0.3s ease 0s; font-size: 10pt; font-family: verdana, sans-serif;\"><span style=\"transition: all 0.3s ease 0s; font-size: 10pt; color: rgb(51, 51, 51);\">                                                                      Center Table: </span><span style=\"font-weight: bolder;\"><span style=\"transition: all 0.3s ease 0s; font-size: 10pt; color: rgb(51, 51, 51);\">CTCP042WD</span></span><span style=\"transition: all 0.3s ease 0s; font-size: 10pt; color: rgb(51, 51, 51);\">| Price:    25,000X1=25,000</span></span></p>', '<p><span style=\"color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\">• Sofa frame is made of chemically treated and seasoned solid hardwood for protection against borers and is kiln-dried for moisture control.</span><br style=\"color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\"><span style=\"color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\">• Wood grain may vary in construction due to natural ingredients</span><br style=\"color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\"><span style=\"color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\">• Designed to anti-sagging.</span><br style=\"color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\"><span style=\"color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\">• High-quality environment-friendly, durable and Anti-Fungal lacquer finish on frame</span><br style=\"color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\"><span style=\"color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\">• Seat and back upholstery composed with long lasted high density foam and fabrics.</span><br style=\"color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\"><span style=\"color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\">• A layer of poly fill on the seat & back provide extra coziness.</span><br style=\"color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\"><span style=\"color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\">• Fixed product, no assembly needed.</span><br style=\"color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\"><span style=\"color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\">• In-house use only</span><br style=\"color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\"><span style=\"color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\">• Space Required For OTOBI Sofa Set-P042 I P060 : 11’ x 8’ ft.</span><br style=\"color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\"><span style=\"color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\">Warranty: One year against any manufacturing defects</span><br></p>', 'otobi-sofa-set-p042-i-p060-244.jpg', 0, 'otobi-sofa-set-p042-i-p060-244', '2023-08-18 09:23:31', '2023-09-04 02:54:28'),
(2, 4, 3, 15, 'Walton Fan W17OA-MS', 1700, NULL, 1700, 'fan,bangladesi fan,nice,coolfan,walton,brand,rechargeable', 'otobi Premium Sofa', '<p><span style=\"font-family: verdana, geneva, sans-serif;\">- Rechargeable Table Fan (17”)</span><br style=\"font-family: &quot;Titillium Web&quot;;\"><span style=\"font-family: &quot;Titillium Web&quot;;\">-&nbsp;</span><span style=\"font-family: &quot;Titillium Web&quot;;\"><span style=\"font-family: verdana, geneva, sans-serif;\">Long run time battery with overcharge and over discharge protection system.<br>- Switch mode power supply (SMPS) system ; Range: 90V-265V<br>- With or without remote control<br>- High/Low/Natural speed selection<br>- Auto switching between AC to DC<br>- Bright LED night light.</span></span><br></p>', NULL, 'walton-fan-w17oa-ms-116.jpg', 0, 'walton-fan-w17oa-ms-116', '2023-08-18 09:29:18', '2023-09-06 01:51:46'),
(3, 5, 6, 5, 'Nike Tiempo Legend 10 Elite', 150000, 4, 144000, 'nike,brand,footbal,boot,player,juta,chappal,usa', 'otobi Premium Sofa', '<h3 class=\"epdp-headline-md headline-1\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; line-height: 1.3; vertical-align: baseline; color: rgb(17, 17, 17); text-align: center;\">Classic material. Future feel.</h3><div class=\"epdp-headline-sm body-1\" style=\"box-sizing: inherit; margin: 16px 0px 0px; padding: 0px; border: 0px; line-height: 1.6; font-family: &quot;Helvetica Now Text&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(17, 17, 17); text-align: center;\"><p style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Underneath the shimmer, an incredibly soft engineered leather called FlyTouch Plus moulds to your foot like the classic leather Tiempo is known for. But there\'s one thing traditional leather does that FlyTouch Plus doesn\'t do, and that\'s take on water.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><br style=\"box-sizing: inherit;\">In fact, FlyTouch Plus excels in bad weather, staying lightweight on your feet and consistent all match long so you can focus on the goal.</p></div>', '<div class=\"mt8-lg\" style=\"box-sizing: inherit; margin: 32px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: &quot;Helvetica Now Text&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(17, 17, 17);\"><form id=\"buyTools\" class=\"add-to-cart-form nike-buying-tools\" style=\"box-sizing: inherit;\"><div id=\"shippingPickup\" class=\"pt6-sm prl6-sm prl0-lg pb6-sm css-156mjtp\" style=\"box-sizing: inherit; margin: 0px; padding: 24px 0px; border: 0px; font: inherit; vertical-align: baseline;\"><div class=\"css-98mb2u e1hoz4bu0\" style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><div class=\"pickup-header css-1d1ebpj e1hoz4bu1\" style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">Free Pick-up</div><div class=\"pickup-info css-5c71qt e1hoz4bu2\" style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: inline;\"><div class=\"pickup modal-link\" style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: inline;\"><button class=\"pickup link\" style=\"font-size: 16px; border-width: 0px; border-style: initial; border-color: initial; line-height: 1.5; padding: 0px 0px 2px; -webkit-tap-highlight-color: transparent; appearance: none; font-weight: 500; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(17, 17, 17); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; box-shadow: rgb(17, 17, 17) 0px -1px 0px 0px inset; transition: all 0.2s ease 0s;\">Find a Store</button></div></div></div></div></form></div><p><span style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: &quot;Helvetica Now Text&quot;, Helvetica, Arial, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(17, 17, 17);\"></span></p><div class=\"pt6-sm prl6-sm prl0-lg\" style=\"box-sizing: inherit; margin: 0px; padding: 24px 0px 0px; border: 0px; font: inherit; vertical-align: baseline;\"><div class=\"description-preview body-2 css-1pbvugb\" style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font: var(--podium-cds-typography-320-to-959-editorial-body1); vertical-align: baseline;\"><p style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.75; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">Obsessed with perfecting your craft? We design Elite boots for you and the world\'s biggest stars to give you high-level quality, because you demand greatness from yourself and your footwear. Made with revolutionary Nike Gripknit, this boot provides better touch in an intuitive design that helps enhance your precision both when striking and during close control.</p><ul class=\"description-preview__features pt8-sm pb6-sm ncss-list-ul\" style=\"box-sizing: inherit; margin: 0px; padding: 32px 0px 24px; border: 0px; font: inherit; vertical-align: baseline; list-style: none;\"><li class=\"description-preview__color-description ncss-li\" style=\"box-sizing: inherit; margin: 0px 0px 4px 16px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; list-style-type: disc;\">Colour Shown: Bright Crimson/White/University Red/Black</li><li class=\"description-preview__style-color ncss-li\" style=\"box-sizing: inherit; margin: 0px 0px 0px 16px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; list-style-type: disc;\">Style: DC9968-600</li></ul></div></div>', 'nike-tiempo-legend-10-elite-253.jpg', 0, 'nike-tiempo-legend-10-elite-253', '2023-08-18 09:32:07', '2023-09-06 01:51:47'),
(4, 6, 7, 7, 'Basmati Kacchi', 460, NULL, 460, 'nobab,dine,sultan,sultan dine,food,juciy,tender,tasty,bd,bangladesh,biriyani,kutta biriyani', 'otobi Premium Sofa', NULL, NULL, 'basmati-kacchi-184.jpg', 0, 'basmati-kacchi-184', '2023-08-18 09:35:32', '2023-09-04 02:54:30'),
(5, 7, 9, 2, 'JBL LIVE 500BT WIRELESS OVER-EAR HEADPHONE', 9100, 3, 8827, 'jbl,brand,headphone,earphone,airpod,airdot,headspeaker', 'otobi Premium Sofa', '<table class=\"table table-bordered\" style=\"border-spacing: 0px; border-collapse: inherit; border-width: 0px; width: 899px; max-width: 100%; color: rgb(226, 83, 17); font-family: &quot;Noto Sans&quot;; border-style: none !important; border-color: initial !important;\"><thead><tr><td colspan=\"2\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); border-width: 0px 0px 1px; border-top-style: initial; border-top-color: initial; border-right-color: transparent; border-bottom-color: transparent; border-left-color: transparent; line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-right-style: none !important; border-bottom-style: none !important; border-left-style: none !important;\"><span style=\"font-weight: 700;\">Headphone</span></td></tr></thead><tbody><tr><td class=\"attribute-name\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Brand</td><td class=\"attribute-value\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">JBL</td></tr><tr><td class=\"attribute-name\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Frequency Response</td><td class=\"attribute-value\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">18Hz–20kHz</td></tr><tr><td class=\"attribute-name\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Model</td><td class=\"attribute-value\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Live 500BT</td></tr><tr><td class=\"attribute-name\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Sensitivity</td><td class=\"attribute-value\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">108dB</td></tr><tr><td class=\"attribute-name\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Driver Magnet</td><td class=\"attribute-value\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Dynamic</td></tr><tr><td class=\"attribute-name\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Impedance</td><td class=\"attribute-value\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">32 Ohm</td></tr><tr><td class=\"attribute-name\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Power</td><td class=\"attribute-value\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">15 MW</td></tr><tr><td class=\"attribute-name\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Battery</td><td class=\"attribute-value\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Battery Type:Lithium-Ion Polymer Battery<br>Battery Life:33 Hours<br>Charging Time:2 Hours<br></td></tr><tr><td class=\"attribute-name\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Connector</td><td class=\"attribute-value\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Via Bluetooth</td></tr><tr><td class=\"attribute-name\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Driver Diameter</td><td class=\"attribute-value\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">50 Mm</td></tr><tr><td class=\"attribute-name\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Connectivity</td><td class=\"attribute-value\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Bluetooth Profiles A2DP 1.3, AVRCP 1.5, HFP 1.6<br>Bluetooth :4.2<br>Frequency :2.4 GHz (2402 To 2480 MHz)<br>Bluetooth Transmitter Power :15 MW<br>Multipoint Support :Yes<br>Maximum Paired Devices :2<br>NFC :No</td></tr><tr><td class=\"attribute-name\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Microphone</td><td class=\"attribute-value\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Yes</td></tr><tr><td class=\"attribute-name\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Microphone Frequency</td><td class=\"attribute-value\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">18 Hz – 20000 KHz</td></tr><tr><td class=\"attribute-name\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Weight</td><td class=\"attribute-value\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">231.6 Gm</td></tr><tr><td class=\"attribute-name\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Dimension</td><td class=\"attribute-value\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">8.9 X 8.5 X 2.9\"</td></tr><tr><td class=\"attribute-name\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Color</td><td class=\"attribute-value\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Blue</td></tr><tr><td class=\"attribute-name\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Cable Length</td><td class=\"attribute-value\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Charging Cable</td></tr><tr><td class=\"attribute-name\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">Warranty</td><td class=\"attribute-value\" style=\"padding-right: 14px; padding-left: 14px; color: rgb(0, 0, 0); text-transform: capitalize; background: rgba(0, 0, 0, 0); line-height: 1.42857; font-size: 14px; padding-top: 10px !important; padding-bottom: 10px !important; border-color: rgba(159, 166, 189, 0.1) !important; border-right-width: 0px !important; border-bottom-width: 0px !important; border-left-width: 0px !important; vertical-align: top !important;\">No Warranty</td></tr></tbody></table>', '<div class=\"module-item module-item-3 tab-pane\" id=\"blocks--tab-2\" style=\"padding: 0px; background: 0px 0px rgb(242, 243, 248); border-radius: inherit; height: inherit; margin-bottom: 15px; color: rgb(226, 83, 17); font-family: &quot;Noto Sans&quot;;\"><div class=\"block-body expand-block\" style=\"position: relative; height: 589.188px; transition: all 0.1s ease-in-out 0s; display: flex; flex-flow: column wrap; background: rgb(255, 255, 255); padding: 20px; border-width: 0px 0px 1px; border-style: none; border-radius: 5px;\"><div class=\"block-wrapper\" style=\"flex: 1 1 0%; display: flex; flex-direction: column; width: 899px; border-radius: inherit;\"><div class=\"block-content  block-description\" style=\"position: relative; border-radius: inherit; column-count: initial; column-gap: 20px; column-rule-width: 1px; column-rule-style: solid; color: rgb(0, 0, 0); height: auto !important;\"><h2 style=\"line-height: 1.1; color: inherit; margin-right: 0px; margin-left: 0px; font-size: 22px; padding: 0px;\">JBL Live 500BT Wireless Over-Ear Headphone in Bangladesh</h2><p style=\"margin-right: 0px; margin-left: 0px;\">With up to 30 hours of battery life, you can listen to your favorite audio all day with the blue LIVE 500BT Wireless Over-Ear Headphones from JBL. Your favorite music is streamed via Bluetooth wireless technology through 50mm drivers that deliver JBL\'s Signature Sound. Thanks to multi-point technology, you can pair the 500BT over-ear headphones with up to two devices, such as a smartphone, tablet, or laptop, and easily switch between the two when you want.</p><p style=\"margin-right: 0px; margin-left: 0px;\">The over-ear headphones also feature a built-in microphone, letting you make hands-free calls via your smartphone, or interact with your mobile device\'s various digital assistant software programs, such as Google Assistant &amp; Alexa. Use them to send texts, make calls, answer questions, and more; all while your mobile device is safely and conveniently tucked away. Speaking of convenience, the LIVE 500BT headphones features a swivel and fold-flat design that helps to make them more portable and easier to take with you.</p><p style=\"margin-right: 0px; margin-left: 0px;\"><span style=\"font-weight: 700;\">Multi-Point Connection</span></p><p style=\"margin-right: 0px; margin-left: 0px;\">This technology lets you pair the LIVE 500BT headphones with two Bluetooth-compatible devices, so you can quickly and easily switch between the two. No more re-pairing or a separate set of headphones for the second device. For example, while watching a video on your tablet, you can switch to your phone to answer an incoming call, or while playing a mobile game on your phone, you can easily switch to a video conference call on your laptop.</p><p style=\"margin-right: 0px; margin-left: 0px;\"><span style=\"font-weight: 700;\">Ambient Aware &amp; TalkThru</span></p><p style=\"margin-right: 0px; margin-left: 0px;\">The LIVE 500BT wireless headphones make for an ideal solution to your on-the-go audio needs, but when walking around outside, it\'s important to be aware of your surroundings. With the touch of a button you can activate Ambient Aware, which lets more outside noise in so you can hear things like announcements more clearly. With TalkThru mode activated, the music volume is dropped, so you can have a quick conversation with others around you, without taking off your headphones.</p><p style=\"margin-right: 0px; margin-left: 0px;\"><span style=\"font-weight: 700;\">Comfortable Design</span></p><p style=\"margin-right: 0px; margin-left: 0px;\">With all-day battery life, JBL has fitted the LIVE 500BT headphones with a fabric headband and soft ear cushions, which are designed to help make them comfortable to wear for extended periods.</p><p style=\"margin-right: 0px; margin-left: 0px;\"><span style=\"font-weight: 700;\">Go Wired When You Need To</span></p><p style=\"margin-right: 0px; margin-left: 0px;\">If the 500BT\'s battery is running low, you can connect the detachable cable to use them as a traditional set of wired headphones. The cable features an in-line microphone and remote, so you retain the ability to control your audio, make hands-free calls, and interact with your digital assistant.</p></div></div></div></div><div class=\"module-item module-item-4 tab-pane no-expand\" id=\"blocks--tab-3\" style=\"box-sizing: border-box; padding: 0px; background: 0px 0px rgb(242, 243, 248); border-radius: inherit; display: block !important; height: inherit; margin-bottom: 15px; color: rgb(226, 83, 17); font-family: &quot;Noto Sans&quot;; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"block-body expand-block\" style=\"box-sizing: border-box; position: relative; height: 0px; transition: all 0.1s ease-in-out 0s; display: flex; flex-flow: column wrap; background: rgb(255, 255, 255); padding: 0px; border-width: 0px 0px 1px; border-style: none; border-radius: 5px;\"><div class=\"block-wrapper\" style=\"box-sizing: border-box; flex: 1 1 0%; display: flex; flex-direction: column; width: 939px; border-radius: inherit;\"><div class=\"block-content  block-dynamic\" style=\"box-sizing: border-box; position: relative; border-radius: inherit; text-align: left; column-count: initial; column-gap: 20px; column-rule-width: 1px; column-rule-style: solid; height: auto !important;\"></div></div></div></div>', 'jbl-live-500bt-wireless-over-ear-headphone-150.jpg', 0, 'jbl-live-500bt-wireless-over-ear-headphone-150', '2023-08-18 09:39:03', '2023-09-01 08:41:20');
INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `price`, `discount`, `after_discount`, `tags`, `short_desp`, `long_desp`, `addi_desp`, `preview`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(6, 8, 20, 10, 'THE BLOSSOM BONANZA MULTI-STONE NOSEPIN', 22278, 5, 21164, 'diamond,nosepin,rich,kid,bangladesh,diamond world,diamond world nosepin', 'otobi Premium Sofa', '<h3 class=\"product_specification\" style=\"letter-spacing: 0.3px; color: rgb(17, 17, 17); font-family: &quot;Open Sans&quot;, sans-serif; font-weight: 500; line-height: 1.1; margin-bottom: 10px; font-size: 18px; text-transform: uppercase; padding-left: 15px;\">PRODUCT DETAILS</h3><div class=\"col-sm-12 border-right\" style=\"min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 685.375px; font-family: &quot;Open Sans&quot;, sans-serif;\"><div class=\"col-sm-12 noPaddingLeftRight\" style=\"min-height: 1px; float: left; width: 655.375px; padding-right: 0px !important; padding-left: 0px !important;\"><div class=\"col-sm-12 col-xs-12 noPaddingLeftRight\" style=\"min-height: 1px; float: left; width: 655.375px; padding-right: 0px !important; padding-left: 0px !important;\"><div class=\"product_Heading text-bold\" style=\"font-weight: 700; text-transform: uppercase; padding-top: 5px; padding-bottom: 5px;\"><span class=\"side-tab borderFirst\" data-target=\"#tab1\" data-toggle=\"tab\" role=\"tab\" aria-expanded=\"false\" style=\"letter-spacing: 0.3px; color: rgb(44, 52, 59); display: inline-block; padding: 0px 10px 0px 0px; vertical-align: middle;\"><div class=\"panel-heading\" role=\"tab\" id=\"productDetailsHeading\" style=\"padding: 5px 0px; border-bottom: 0px; border-top-left-radius: 3px; border-top-right-radius: 3px;\"><h4 class=\"panel-title InlineBlock\" style=\"letter-spacing: 0.3px; color: inherit; font-family: inherit; line-height: 1.1; font-size: 14px; display: inline-block;\"><a class=\"\" style=\"letter-spacing: 0.3px; color: inherit; cursor: pointer !important; outline: 0px !important;\">PRODUCT INFORMATION</a></h4></div></span></div><div id=\"productDetailsCollapse\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"productDetailsHeading\" style=\"display: block;\"><div class=\"panel-body\" style=\"padding: 0px; color: rgb(83, 11, 32); font-weight: 600;\"><div class=\"product_spe_details noPaddingLeftRight\" style=\"padding-left: 0px !important; padding-right: 0px !important;\"><span class=\"noPaddingLeftRight\" style=\"letter-spacing: 0.3px; color: rgb(44, 52, 59); display: inline-block; padding-top: 0px; padding-bottom: 0px; vertical-align: middle; padding-right: 0px !important; padding-left: 0px !important;\"><h5 class=\"text-upper\" style=\"letter-spacing: 0.3px; color: rgb(0, 0, 0); font-family: inherit; font-weight: 500; line-height: 1.1; margin-top: 10px; margin-bottom: 10px; font-size: 12px; text-transform: uppercase;\">PRODUCT NAME -</h5></span>&nbsp;<span class=\"noPaddingLeftRight\" style=\"letter-spacing: 0.3px; color: rgb(44, 52, 59); display: inline-block; padding-top: 0px; padding-bottom: 0px; vertical-align: middle; padding-right: 0px !important; padding-left: 0px !important;\"><p style=\"letter-spacing: 0.3px; margin-right: 0px; margin-left: 0px; font-size: 13px;\">The Blossom Bonanza Multi-Stone Nosepin</p></span></div><div data-jsv=\"#28_\" class=\"product_spe_details noPaddingLeftRight\" style=\"padding-left: 0px !important; padding-right: 0px !important;\"><span class=\"noPaddingLeftRight\" style=\"letter-spacing: 0.3px; color: rgb(44, 52, 59); display: inline-block; padding-top: 0px; padding-bottom: 0px; vertical-align: middle; padding-right: 0px !important; padding-left: 0px !important;\"><h5 class=\"text-upper\" style=\"letter-spacing: 0.3px; color: rgb(0, 0, 0); font-family: inherit; font-weight: 500; line-height: 1.1; margin-top: 10px; margin-bottom: 10px; font-size: 12px; text-transform: uppercase;\">DESIGN NO -</h5></span>&nbsp;<span class=\"noPaddingLeftRight\" style=\"letter-spacing: 0.3px; color: rgb(44, 52, 59); display: inline-block; padding-top: 0px; padding-bottom: 0px; vertical-align: middle; padding-right: 0px !important; padding-left: 0px !important;\"><p style=\"letter-spacing: 0.3px; margin-right: 0px; margin-left: 0px; font-size: 13px;\">NP33SD1</p></span></div><div data-jsv=\"/28_\" class=\"product_spe_details noPaddingLeftRight\" style=\"padding-left: 0px !important; padding-right: 0px !important;\"><span class=\"noPaddingLeftRight\" style=\"letter-spacing: 0.3px; color: rgb(44, 52, 59); display: inline-block; padding-top: 0px; padding-bottom: 0px; vertical-align: middle; padding-right: 0px !important; padding-left: 0px !important;\"><h5 class=\"text-upper\" style=\"letter-spacing: 0.3px; color: rgb(0, 0, 0); font-family: inherit; font-weight: 500; line-height: 1.1; margin-top: 10px; margin-bottom: 10px; font-size: 12px; text-transform: uppercase;\">PRODUCT CODE -</h5></span>&nbsp;<span class=\"noPaddingLeftRight\" style=\"letter-spacing: 0.3px; color: rgb(44, 52, 59); display: inline-block; padding-top: 0px; padding-bottom: 0px; vertical-align: middle; padding-right: 0px !important; padding-left: 0px !important;\"><p style=\"letter-spacing: 0.3px; margin-right: 0px; margin-left: 0px; font-size: 13px;\">NP33SD1-</p></span></div><table class=\"specificationList table-striped table\" style=\"border-spacing: 0px; background-color: transparent; max-width: 100%; width: 655.375px; margin-bottom: 15px;\"><tbody></tbody></table></div></div></div><div class=\"col-sm-12 col-xs-12 noPaddingLeftRight\" style=\"min-height: 1px; float: left; width: 655.375px; padding-right: 0px !important; padding-left: 0px !important;\"></div></div><div class=\"panel panel-default\" style=\"margin-bottom: 0px; border: none; border-radius: 0px; margin-top: 0px;\"><div class=\"product_Heading text-bold\" style=\"font-weight: 700; text-transform: uppercase; padding-top: 5px; padding-bottom: 5px;\"><span class=\"side-tab\" style=\"letter-spacing: 0.3px; color: rgb(44, 52, 59); display: inline-block; padding: 0px 10px 0px 0px; vertical-align: middle;\"><div class=\"panel-heading\" role=\"tab\" id=\"headingFour\" style=\"padding: 5px 0px; border-bottom: 0px; border-top-left-radius: 3px; border-top-right-radius: 3px;\"><h4 class=\"panel-title InlineBlock\" style=\"letter-spacing: 0.3px; color: inherit; font-family: inherit; line-height: 1.1; font-size: 14px; display: inline-block;\"><a class=\"\" style=\"letter-spacing: 0.3px; color: inherit; cursor: pointer !important; outline: 0px !important;\">PRODUCT SPECIFICATIONS</a></h4></div></span></div><div id=\"collapseTwo\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingFour\" style=\"display: block;\"><div class=\"panel-body\" style=\"padding: 0px; color: rgb(83, 11, 32); font-weight: 600;\"><div data-jsv=\"#31_#32_\" class=\"col-sm-6 col-xs-12 mobileView product_spe_details noPaddingLeftRight\" style=\"min-height: 1px; float: left; width: 327.688px; padding-right: 0px !important; padding-left: 0px !important;\"><span class=\"spec_Tag\" style=\"letter-spacing: 0.3px; color: rgb(0, 0, 0); display: inline-block; padding: 0px; vertical-align: middle; text-transform: uppercase; font-size: 12px; font-weight: 400;\">SIZE</span>&nbsp;<span class=\"spec_Val\" style=\"letter-spacing: 0.3px; color: rgb(0, 0, 0); display: inline-block; padding: 0px 10px; vertical-align: middle; font-size: 12px;\">Free</span></div><table class=\"specificationList table-striped table\" style=\"border-spacing: 0px; background-color: transparent; max-width: 100%; width: 655.375px; margin-bottom: 15px;\"><tbody data-jsv-df=\"\"></tbody></table></div></div></div><div class=\"panel panel-default\" style=\"margin-bottom: 0px; border: none; border-radius: 0px; margin-top: 0px;\"><div class=\"product_Heading text-bold\" style=\"font-weight: 700; text-transform: uppercase; padding-top: 5px; padding-bottom: 5px;\"><span class=\"side-tab\" data-target=\"#tab4\" data-toggle=\"tab\" role=\"tab\" aria-expanded=\"false\" style=\"letter-spacing: 0.3px; color: rgb(44, 52, 59); display: inline-block; padding: 0px 10px 0px 0px; vertical-align: middle;\"><div class=\"panel-heading\" role=\"tab\" id=\"headingFour\" style=\"padding: 5px 0px; border-bottom: 0px; border-top-left-radius: 3px; border-top-right-radius: 3px;\"><h4 class=\"panel-title InlineBlock\" style=\"letter-spacing: 0.3px; color: inherit; font-family: inherit; line-height: 1.1; font-size: 14px; display: inline-block;\"><a class=\"\" style=\"letter-spacing: 0.3px; color: inherit; cursor: pointer !important; outline: 0px !important;\">METAL DETAILS</a></h4></div></span></div><div id=\"collapseThree\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingFour\" style=\"display: block;\"><div class=\"panel-body\" style=\"padding: 0px; color: rgb(83, 11, 32); font-weight: 600;\"><div data-jsv=\"#35_#36_\" class=\"col-sm-6 col-xs-12 mobileView product_spe_details noPaddingLeftRight\" style=\"min-height: 1px; float: left; width: 327.688px; padding-right: 0px !important; padding-left: 0px !important;\"><span class=\"spec_Tag\" style=\"letter-spacing: 0.3px; color: rgb(0, 0, 0); display: inline-block; padding: 0px; vertical-align: middle; text-transform: uppercase; font-size: 12px; font-weight: 400;\">GOLD COLOR</span>&nbsp;<span class=\"spec_Val\" style=\"letter-spacing: 0.3px; color: rgb(0, 0, 0); display: inline-block; padding: 0px 10px; vertical-align: middle; font-size: 12px;\">YG</span></div><div data-jsv=\"/36_#38_\" class=\"col-sm-6 col-xs-12 mobileView product_spe_details noPaddingLeftRight\" style=\"min-height: 1px; float: left; width: 327.688px; padding-right: 0px !important; padding-left: 0px !important;\"><span class=\"spec_Tag\" style=\"letter-spacing: 0.3px; color: rgb(0, 0, 0); display: inline-block; padding: 0px; vertical-align: middle; text-transform: uppercase; font-size: 12px; font-weight: 400;\">GOLD KARAT</span>&nbsp;<span class=\"spec_Val\" style=\"letter-spacing: 0.3px; color: rgb(0, 0, 0); display: inline-block; padding: 0px 10px; vertical-align: middle; font-size: 12px;\">18</span></div><div data-jsv=\"/38_#40_\" class=\"col-sm-6 col-xs-12 mobileView product_spe_details noPaddingLeftRight\" style=\"min-height: 1px; float: left; width: 327.688px; padding-right: 0px !important; padding-left: 0px !important;\"><span class=\"spec_Tag\" style=\"letter-spacing: 0.3px; color: rgb(0, 0, 0); display: inline-block; padding: 0px; vertical-align: middle; text-transform: uppercase; font-size: 12px; font-weight: 400;\">NET WEIGHT</span>&nbsp;<span class=\"spec_Val\" style=\"letter-spacing: 0.3px; color: rgb(0, 0, 0); display: inline-block; padding: 0px 10px; vertical-align: middle; font-size: 12px;\">0.33gm</span></div><div data-jsv=\"/40_/35_#42_\" class=\"col-sm-6 col-xs-12 mobileView product_spe_details noPaddingLeftRight\" style=\"min-height: 1px; float: left; width: 327.688px; padding-right: 0px !important; padding-left: 0px !important;\"><span class=\"spec_Tag\" style=\"letter-spacing: 0.3px; color: rgb(0, 0, 0); display: inline-block; padding: 0px; vertical-align: middle; text-transform: uppercase; font-size: 12px; font-weight: 400;\">GROSS WEIGHT</span>&nbsp;<span class=\"spec_Val\" style=\"letter-spacing: 0.3px; color: rgb(0, 0, 0); display: inline-block; padding: 0px 10px; vertical-align: middle; font-size: 12px;\">0.34gm</span></div><table class=\"specificationList table-striped table metal\" style=\"border-spacing: 0px; background-color: transparent; max-width: 100%; width: 655.375px; margin-bottom: 15px;\"><tbody data-jsv-df=\"\"></tbody></table></div></div></div><div class=\"panel panel-default\" style=\"margin-bottom: 0px; border: none; border-radius: 0px; margin-top: 0px;\"><div class=\"product_Heading text-bold\" style=\"font-weight: 700; text-transform: uppercase; padding-top: 5px; padding-bottom: 5px;\"><span class=\"side-tab\" data-target=\"#tab4\" data-toggle=\"tab\" role=\"tab\" aria-expanded=\"false\" style=\"letter-spacing: 0.3px; color: rgb(44, 52, 59); display: inline-block; padding: 0px 10px 0px 0px; vertical-align: middle;\"><div class=\"panel-heading\" role=\"tab\" id=\"headingFour\" style=\"padding: 5px 0px; border-bottom: 0px; border-top-left-radius: 3px; border-top-right-radius: 3px;\"><h4 class=\"panel-title InlineBlock\" style=\"letter-spacing: 0.3px; color: inherit; font-family: inherit; line-height: 1.1; font-size: 14px; display: inline-block;\"><a class=\"\" style=\"letter-spacing: 0.3px; color: inherit; cursor: pointer !important; outline: 0px !important;\">DIAMOND DETAILS</a></h4></div></span></div><div id=\"collapseFive\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingFour\" style=\"display: block;\"><div class=\"panel-body\" style=\"padding: 0px; color: rgb(83, 11, 32); font-weight: 600;\"><div data-jsv=\"#44_#45_\" class=\"col-sm-12 col-xs-12 mobileView product_spe_details noPaddingLeftRight\" style=\"min-height: 1px; float: left; width: 655.375px; padding-right: 0px !important; padding-left: 0px !important;\"><span class=\"spec_Tag\" style=\"letter-spacing: 0.3px; color: rgb(0, 0, 0); display: inline-block; padding: 0px; vertical-align: middle; text-transform: uppercase; font-size: 12px; font-weight: 400;\">DIAMOND COLOR CLARITY</span>&nbsp;<span class=\"spec_Val\" style=\"letter-spacing: 0.3px; color: rgb(0, 0, 0); display: inline-block; padding: 0px 10px; vertical-align: middle; font-size: 12px;\">VS-SI-H-I</span></div><div data-jsv=\"/45_/44_#47_\" class=\"col-sm-6 col-xs-12 mobileView product_spe_details noPaddingLeftRight\" style=\"min-height: 1px; float: left; width: 327.688px; padding-right: 0px !important; padding-left: 0px !important;\"><span class=\"spec_Tag\" style=\"letter-spacing: 0.3px; color: rgb(0, 0, 0); display: inline-block; padding: 0px; vertical-align: middle; text-transform: uppercase; font-size: 12px; font-weight: 400;\">DIAMOND WEIGHT</span>&nbsp;<span class=\"spec_Val\" style=\"letter-spacing: 0.3px; color: rgb(0, 0, 0); display: inline-block; padding: 0px 10px; vertical-align: middle; font-size: 12px;\">0.06ct</span></div><table class=\"specificationList table-striped table\" style=\"border-spacing: 0px; background-color: transparent; max-width: 100%; width: 655.375px; margin-bottom: 15px;\"><tbody data-jsv-df=\"\"></tbody></table></div></div></div></div><div class=\"col-md-12 col-sm-12\" style=\"min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 685.375px; font-family: &quot;Open Sans&quot;, sans-serif;\"><div class=\"panel panel-default\" id=\"price_section\" style=\"margin-bottom: 0px; border: none; border-radius: 0px; cursor: pointer; margin-top: 0px;\"><div class=\"\"><div class=\"product_Heading text-bold\" style=\"font-weight: 700; text-transform: uppercase; padding-top: 5px; padding-bottom: 5px;\"><span class=\"side-tab\" data-target=\"#tab4\" data-toggle=\"tab\" role=\"tab\" aria-expanded=\"false\" style=\"letter-spacing: 0.3px; color: rgb(44, 52, 59); display: inline-block; padding: 0px 10px 0px 0px; vertical-align: middle;\"><div class=\"panel-heading\" role=\"tab\" id=\"headingFour\" style=\"padding: 5px 0px; border-bottom: 0px; border-top-left-radius: 3px; border-top-right-radius: 3px;\"><h4 class=\"panel-title InlineBlock\" style=\"letter-spacing: 0.3px; color: inherit; font-family: inherit; line-height: 1.1; font-size: 14px; display: inline-block;\"><a class=\"\" style=\"letter-spacing: 0.3px; color: inherit; cursor: pointer !important; outline: 0px !important;\">DELIVERY</a></h4></div></span></div><div id=\"collapseSeven\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingFour\" style=\"display: block;\"><div class=\"panel-body\" style=\"padding: 0px; color: rgb(83, 11, 32); font-weight: 600;\"><div data-jsv=\"#50_\" class=\"col-sm-6 col-xs-12 mobileView product_spe_details noPaddingLeftRight\" style=\"min-height: 1px; float: left; width: 327.688px; padding-right: 0px !important; padding-left: 0px !important;\"><span class=\"spec_Tag\" style=\"letter-spacing: 0.3px; color: rgb(0, 0, 0); display: inline-block; padding: 0px; vertical-align: middle; text-transform: uppercase; font-size: 12px; font-weight: 400;\">DELIVERY IN</span>&nbsp;<span class=\"spec_Val\" style=\"letter-spacing: 0.3px; color: rgb(0, 0, 0); display: inline-block; padding: 0px 10px; vertical-align: middle; font-size: 12px;\">3 - 5 (Working Days)</span></div></div></div></div></div></div>', '<div class=\"CertificateHeading\" style=\"font-family: &quot;Open Sans&quot;, sans-serif; text-align: center;\"><h2 class=\"CertificateHeadingTag\" style=\"letter-spacing: 0.3px; color: gray; font-family: inherit; line-height: 1.1; margin-top: 20px; margin-bottom: 10px; font-size: 30px; text-transform: uppercase;\">JEWELLERY CERTIFICATE</h2></div><div class=\"CertificateHeadingImg\" style=\"width: 333.016px; margin: 0px auto;\"><img class=\"img-responsive\" src=\"https://www.diamondworldltd.com/static/diamondworld/images/certificateIcon.png\" alt=\"Image\" style=\"border: 0px; display: inline-block; max-width: 100%; height: auto; margin: 0px;\"></div><p><a href=\"https://www.diamondworldltd.com/eadmin/web/productCertificate/d02967f9e8c111ed8c4a0242e3cb0695\" target=\"_blank\" class=\"jewelCertificatea\" style=\"letter-spacing: 0.3px; color: rgb(62, 62, 62); font-family: &quot;Open Sans&quot;, sans-serif; background-color: rgb(255, 255, 255); display: block; text-align: center; margin: 0px auto; padding: 10px; cursor: pointer !important; outline: 0px !important;\"></a></p><div class=\"CertificateHeading\" style=\"font-family: &quot;Open Sans&quot;, sans-serif; text-align: center;\"><h4 class=\"CertificateHeadingTagBase\" style=\"letter-spacing: 0.3px; color: gray; font-family: inherit; line-height: 1.1; margin-top: 10px; margin-bottom: 20px; font-size: 23px;\">CERTIFICATE OF AUTHENTICITY</h4></div><div class=\"jewelCertificateguideLines\" style=\"padding: 0px 60px; font-family: &quot;Open Sans&quot;, sans-serif;\"><ul class=\"CertificateguideLines\" style=\"margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important; padding: 0px !important;\"><li style=\"color: gray; font-size: 13px; margin-bottom: 10px; list-style: disc !important;\">Image may differ with actual product\'s layout, color, size &amp; dimension. No claim will be accepted for image mismatch.</li><li style=\"color: gray; font-size: 13px; margin-bottom: 10px; list-style: disc !important;\">The value of a precious stone is determined by its gemological makeup, natural rarity and finished quality. Diamonds and gemstones of similar appearance can have important differences in value. Even experts need powerful analytic tools to detect synthetics, treatments and enhancement processes.</li><li style=\"color: gray; font-size: 13px; margin-bottom: 10px; list-style: disc !important;\">All weights mentioned are estimated and may vary.</li><li style=\"color: gray; font-size: 13px; margin-bottom: 10px; list-style: disc !important;\">Product dimensions mentioned are on approximation closest to the actual size.</li><li style=\"color: gray; font-size: 13px; margin-bottom: 10px; list-style: disc !important;\">Product images are for illustrative purposes only and may differ from the actual product. Due to differences in monitors, colours of products may also appear different to those shown on the site.</li><li style=\"color: gray; font-size: 13px; margin-bottom: 10px; list-style: disc !important;\">The bill is your certificate, please produce the bill for future transactions on all jewellery you purchase.</li><li style=\"color: gray; font-size: 13px; margin-bottom: 10px; list-style: disc !important;\">Diamond solitaires over quarter carat and certain rare gems may additionally have an external laboratory certificate.</li></ul></div>', 'the-blossom-bonanza-multi-stone-nosepin-212.jpg', 0, 'the-blossom-bonanza-multi-stone-nosepin-212', '2023-08-18 09:42:42', '2023-09-04 02:54:30');
INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `price`, `discount`, `after_discount`, `tags`, `short_desp`, `long_desp`, `addi_desp`, `preview`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(7, 9, 13, 11, 'French Dog', 19000, NULL, 19000, 'dog,french,french dog,premium dog,premium pet', 'otobi Premium Sofa', '<h2 style=\"margin: 1em 0px 0.25em; padding: 0px; overflow: hidden; border-bottom: 1px solid rgb(162, 169, 177); font-size: 1.5em; font-weight: normal; font-family: &quot;Linux Libertine&quot;, Georgia, Times, serif; line-height: 1.375;\"><span class=\"mw-headline\" id=\"Taxonomy\">Taxonomy</span></h2><div role=\"note\" class=\"hatnote navigation-not-searchable\" style=\"font-style: italic; padding-left: 1.6em; margin-bottom: 0.5em; color: rgb(32, 33, 34); font-family: sans-serif;\">Further information:&nbsp;<a href=\"https://en.wikipedia.org/wiki/Canis_lupus_dingo#Taxonomic_debate_%E2%80%93_the_domestic_dog,_dingo,_and_New_Guinea_singing_dog\" title=\"Canis lupus dingo\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Canis lupus dingo §&nbsp;Taxonomic debate – the domestic dog, dingo, and New Guinea singing dog</a></div><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif;\">In 1758, the Swedish botanist and zoologist&nbsp;<a href=\"https://en.wikipedia.org/wiki/Carl_Linnaeus\" title=\"Carl Linnaeus\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Carl Linnaeus</a>&nbsp;published in his&nbsp;<i><a href=\"https://en.wikipedia.org/wiki/10th_edition_of_Systema_Naturae\" title=\"10th edition of Systema Naturae\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Systema Naturae</a></i>, the two-word naming of species (<a href=\"https://en.wikipedia.org/wiki/Binomial_nomenclature\" title=\"Binomial nomenclature\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">binomial nomenclature</a>).&nbsp;<i><a href=\"https://en.wikipedia.org/wiki/Canis\" title=\"Canis\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Canis</a></i>&nbsp;is the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Latin\" title=\"Latin\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Latin</a>&nbsp;word meaning \"dog\",<sup id=\"cite_ref-FOOTNOTEWangTedford200858_15-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-FOOTNOTEWangTedford200858-15\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[15]</a></sup>&nbsp;and under this&nbsp;<a href=\"https://en.wikipedia.org/wiki/Genus\" title=\"Genus\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">genus</a>, he listed the domestic dog, the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Wolf\" title=\"Wolf\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">wolf</a>, and the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Golden_jackal\" title=\"Golden jackal\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">golden jackal</a>. He classified the domestic dog as&nbsp;<i>Canis familiaris</i>&nbsp;and, on the next page, classified the grey wolf as&nbsp;<i>Canis lupus</i>.<sup id=\"cite_ref-linnaeus1758_2-1\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-linnaeus1758-2\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[2]</a></sup>&nbsp;Linnaeus considered the dog to be a separate species from the wolf because of its upturning tail (<i>cauda recurvata</i>), which is not found in any other&nbsp;<a href=\"https://en.wikipedia.org/wiki/Canid\" class=\"mw-redirect\" title=\"Canid\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">canid</a>.<sup id=\"cite_ref-Clutton-Brock1995_16-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-Clutton-Brock1995-16\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[16]</a></sup></p><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif;\">In 1999, a study of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Mitochondrial_DNA\" title=\"Mitochondrial DNA\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">mitochondrial DNA</a>&nbsp;(mtDNA) indicated that the domestic dog may have originated from the grey wolf, with the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Dingo\" title=\"Dingo\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">dingo</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/New_Guinea_singing_dog\" title=\"New Guinea singing dog\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">New Guinea singing dog</a>&nbsp;breeds having developed at a time when human communities were more isolated from each other.<sup id=\"cite_ref-wayne1999_17-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-wayne1999-17\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[17]</a></sup>&nbsp;In the third edition of&nbsp;<i><a href=\"https://en.wikipedia.org/wiki/Mammal_Species_of_the_World\" title=\"Mammal Species of the World\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Mammal Species of the World</a></i>&nbsp;published in 2005, the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Mammalogist\" class=\"mw-redirect\" title=\"Mammalogist\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">mammalogist</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/W._Christopher_Wozencraft\" class=\"mw-redirect\" title=\"W. Christopher Wozencraft\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">W. Christopher Wozencraft</a>&nbsp;listed under the wolf&nbsp;<i>Canis lupus</i>&nbsp;its wild subspecies and proposed two additional subspecies, which formed the domestic dog clade:&nbsp;<i>familiaris</i>, as named by Linnaeus in 1758 and,&nbsp;<i>dingo</i>&nbsp;named by Meyer in 1793. Wozencraft included&nbsp;<i>hallstromi</i>&nbsp;(the New Guinea singing dog) as another name (<a href=\"https://en.wikipedia.org/wiki/Junior_synonym\" class=\"mw-redirect\" title=\"Junior synonym\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">junior synonym</a>) for the dingo. Wozencraft referred to the mtDNA study as one of the guides informing his decision.<sup id=\"cite_ref-wozencraft2005_3-1\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-wozencraft2005-3\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[3]</a></sup>&nbsp;Mammalogists have noted the inclusion of&nbsp;<i>familiaris</i>&nbsp;and&nbsp;<i>dingo</i>&nbsp;together under the \"domestic dog\" clade<sup id=\"cite_ref-jackson2017_18-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-jackson2017-18\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[18]</a></sup>&nbsp;with some debating it.<sup id=\"cite_ref-smithC1_19-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-smithC1-19\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[19]</a></sup></p><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif;\">In 2019, a workshop hosted by the&nbsp;<a href=\"https://en.wikipedia.org/wiki/IUCN\" class=\"mw-redirect\" title=\"IUCN\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">IUCN</a>/Species Survival Commission\'s Canid Specialist Group considered the dingo and the New Guinea singing dog to be&nbsp;<a href=\"https://en.wikipedia.org/wiki/Feral_dog\" class=\"mw-redirect\" title=\"Feral dog\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">feral</a>&nbsp;<i>Canis familiaris</i>&nbsp;and therefore did not assess them for the&nbsp;<a href=\"https://en.wikipedia.org/wiki/IUCN_Red_List\" title=\"IUCN Red List\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">IUCN Red List of Threatened Species</a>.<sup id=\"cite_ref-Alvares2019_4-1\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-Alvares2019-4\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[4]</a></sup></p>', '<h2 style=\"margin: 1em 0px 0.25em; padding: 0px; overflow: hidden; border-bottom: 1px solid rgb(162, 169, 177); font-size: 1.5em; font-weight: normal; font-family: &quot;Linux Libertine&quot;, Georgia, Times, serif; line-height: 1.375;\"><span class=\"mw-headline\" id=\"Evolution\">Evolution</span></h2><div role=\"note\" class=\"hatnote navigation-not-searchable\" style=\"font-style: italic; padding-left: 1.6em; margin-bottom: 0.5em; color: rgb(32, 33, 34); font-family: sans-serif;\">Main article:&nbsp;<a href=\"https://en.wikipedia.org/wiki/Evolution_of_the_wolf\" title=\"Evolution of the wolf\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Evolution of the wolf</a></div><figure typeof=\"mw:File/Thumb\" style=\"display: table; text-align: center; border-collapse: collapse; line-height: 0; margin-top: 0.5em; margin-bottom: 1.3em; margin-left: 1.4em; clear: right; float: right; border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgb(200, 204, 209); border-right-color: rgb(200, 204, 209); border-left-color: rgb(200, 204, 209); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; background-color: rgb(248, 249, 250); min-width: 100px; color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://en.wikipedia.org/wiki/File:Brechschere-Hund.jpg\" class=\"mw-file-description\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; display: block; position: relative; border: 0px;\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Brechschere-Hund.jpg/180px-Brechschere-Hund.jpg\" decoding=\"async\" width=\"180\" height=\"270\" class=\"mw-file-element\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Brechschere-Hund.jpg/270px-Brechschere-Hund.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Brechschere-Hund.jpg/360px-Brechschere-Hund.jpg 2x\" data-file-width=\"1600\" data-file-height=\"2400\" style=\"border: 1px solid rgb(200, 204, 209); margin: 3px; background: rgb(255, 255, 255);\"></a><figcaption style=\"display: table-caption; caption-side: bottom; line-height: 1.4em; word-break: break-word; text-align: left; padding: 0px 6px 6px; border-width: 0px 1px 1px; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: rgb(200, 204, 209); border-bottom-color: rgb(200, 204, 209); border-left-color: rgb(200, 204, 209); border-image: initial; border-top-style: initial; border-top-color: initial; font-size: 12.376px;\">Location of a dog\'s&nbsp;<a href=\"https://en.wikipedia.org/wiki/Carnassial\" title=\"Carnassial\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">carnassials</a>; the inside of the 4th upper&nbsp;<a href=\"https://en.wikipedia.org/wiki/Premolar\" title=\"Premolar\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">premolar</a>&nbsp;aligns with the outside of the 1st lower&nbsp;<a href=\"https://en.wikipedia.org/wiki/Molar_(tooth)\" title=\"Molar (tooth)\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">molar</a>, working like scissor blades</figcaption></figure><h3 style=\"margin-top: 0.3em; margin-right: 0px; margin-left: 0px; padding-top: 0.5em; padding-bottom: 0px; overflow: hidden; font-size: 1.2em; line-height: 1.6; font-family: sans-serif;\"><span class=\"mw-headline\" id=\"Domestication\">Domestication</span></h3><div role=\"note\" class=\"hatnote navigation-not-searchable\" style=\"font-style: italic; padding-left: 1.6em; margin-bottom: 0.5em; color: rgb(32, 33, 34); font-family: sans-serif;\">Main article:&nbsp;<a href=\"https://en.wikipedia.org/wiki/Domestication_of_the_dog\" title=\"Domestication of the dog\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Domestication of the dog</a></div><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif;\">The earliest remains generally accepted to be those of a domesticated dog were discovered in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Oberkassel,_Bonn\" title=\"Oberkassel, Bonn\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Bonn-Oberkassel</a>, Germany. Contextual, isotopic, genetic, and morphological evidence shows that this dog was not a local wolf.<sup id=\"cite_ref-Perri2021_20-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-Perri2021-20\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[20]</a></sup>&nbsp;The dog was dated to 14,223 years ago and was found buried along with a man and a woman, all three having been sprayed with red&nbsp;<a href=\"https://en.wikipedia.org/wiki/Hematite\" title=\"Hematite\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">hematite</a>&nbsp;powder and buried under large, thick basalt blocks. The dog had died of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Canine_distemper\" title=\"Canine distemper\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">canine distemper</a>.<sup id=\"cite_ref-janssens2018_21-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-janssens2018-21\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[21]</a></sup>&nbsp;Earlier remains dating back to 30,000 years ago have been described as&nbsp;<a href=\"https://en.wikipedia.org/wiki/Paleolithic_dog\" title=\"Paleolithic dog\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Paleolithic dogs</a>, but their status as dogs or wolves remains debated<sup id=\"cite_ref-Irving-Pease2018_22-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-Irving-Pease2018-22\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[22]</a></sup>&nbsp;because considerable&nbsp;<a href=\"https://en.wikipedia.org/wiki/Morphology_(biology)\" title=\"Morphology (biology)\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">morphological</a>&nbsp;diversity existed among wolves during the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Late_Pleistocene\" title=\"Late Pleistocene\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Late Pleistocene</a>.<sup id=\"cite_ref-Thalmann2018_1-2\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-Thalmann2018-1\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[1]</a></sup></p><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif;\">This timing indicates that the dog was the first species to be domesticated<sup id=\"cite_ref-larson2014_9-1\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-larson2014-9\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[9]</a></sup><sup id=\"cite_ref-freedman2017_8-2\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-freedman2017-8\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[8]</a></sup>&nbsp;in the time of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Hunter%E2%80%93gatherers\" class=\"mw-redirect\" title=\"Hunter–gatherers\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">hunter–gatherers</a>,<sup id=\"cite_ref-Frantz2020_7-2\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-Frantz2020-7\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[7]</a></sup>&nbsp;which predates agriculture.<sup id=\"cite_ref-Thalmann2018_1-3\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-Thalmann2018-1\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[1]</a></sup>&nbsp;<a href=\"https://en.wikipedia.org/wiki/DNA_sequences\" class=\"mw-redirect\" title=\"DNA sequences\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">DNA sequences</a>&nbsp;show that all ancient and modern dogs share a common ancestry and descended from an ancient, extinct wolf population which was distinct from the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Wolf\" title=\"Wolf\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">modern wolf</a>&nbsp;lineage.<sup id=\"cite_ref-Bergström2020_6-1\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-Bergstr%C3%B6m2020-6\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[6]</a></sup><sup id=\"cite_ref-Frantz2020_7-3\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-Frantz2020-7\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[7]</a></sup>&nbsp;Most dogs form a sister group to the remains of a Late&nbsp;<a href=\"https://en.wikipedia.org/wiki/Pleistocene_wolf\" title=\"Pleistocene wolf\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Pleistocene wolf</a>&nbsp;found in the&nbsp;<a href=\"https://en.wikipedia.org/w/index.php?title=Kesslerloch&amp;action=edit&amp;redlink=1\" class=\"new\" title=\"Kesslerloch (page does not exist)\" style=\"color: rgb(215, 51, 51); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Kesslerloch</a><span class=\"noprint\" style=\"font-size: 11.9px;\">&nbsp;[<a href=\"https://de.wikipedia.org/wiki/Kesslerloch\" class=\"extiw\" title=\"de:Kesslerloch\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">de</a>]</span>&nbsp;cave near&nbsp;<a href=\"https://en.wikipedia.org/wiki/Thayngen#Heritage_sites_of_national_significance\" title=\"Thayngen\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Thayngen</a>&nbsp;in the canton of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Schaffhausen\" title=\"Schaffhausen\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Schaffhausen</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Switzerland\" title=\"Switzerland\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Switzerland</a>, which dates to 14,500 years ago. The&nbsp;<a href=\"https://en.wikipedia.org/wiki/Most_recent_common_ancestor\" title=\"Most recent common ancestor\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">most recent common ancestor</a>&nbsp;of both is estimated to be from 32,100 years ago.<sup id=\"cite_ref-thalmann2013_23-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-thalmann2013-23\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[23]</a></sup>&nbsp;This indicates that an extinct Late Pleistocene wolf may have been the ancestor of the dog,<sup id=\"cite_ref-freedman2017_8-3\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-freedman2017-8\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[8]</a></sup><sup id=\"cite_ref-Thalmann2018_1-4\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-Thalmann2018-1\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[1]</a></sup><sup id=\"cite_ref-Lord2020_24-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-Lord2020-24\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[24]</a></sup>&nbsp;with the modern wolf being the dog\'s nearest living relative.<sup id=\"cite_ref-freedman2017_8-4\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-freedman2017-8\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[8]</a></sup></p><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif;\">The dog is a classic example of a domestic animal that likely travelled a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Commensalism\" title=\"Commensalism\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">commensal</a>&nbsp;pathway into domestication.<sup id=\"cite_ref-Irving-Pease2018_22-1\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-Irving-Pease2018-22\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[22]</a></sup><sup id=\"cite_ref-larson2012_25-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-larson2012-25\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[25]</a></sup>&nbsp;The questions of when and where dogs were first domesticated have taxed geneticists and archaeologists for decades.<sup id=\"cite_ref-larson2014_9-2\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-larson2014-9\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[9]</a></sup>&nbsp;Genetic studies suggest a domestication process commencing over 25,000 years ago, in one or several wolf populations in either Europe, the high Arctic, or eastern Asia.<sup id=\"cite_ref-Ostrander2019_10-1\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-Ostrander2019-10\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[10]</a></sup>&nbsp;In 2021, a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Literature_review\" title=\"Literature review\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">literature review</a>&nbsp;of the current evidence&nbsp;<a href=\"https://en.wikipedia.org/wiki/Inference\" title=\"Inference\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">infers</a>&nbsp;that the dog was domesticated in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Siberia\" title=\"Siberia\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Siberia</a>&nbsp;23,000 years ago by&nbsp;<a href=\"https://en.wikipedia.org/wiki/Ancient_North_Siberians\" class=\"mw-redirect\" title=\"Ancient North Siberians\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">ancient North Siberians</a>, then later dispersed eastward into the Americas and westward across Eurasia.<sup id=\"cite_ref-Perri2021_20-1\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-Perri2021-20\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[20]</a></sup></p><h3 style=\"margin-top: 0.3em; margin-right: 0px; margin-left: 0px; padding-top: 0.5em; padding-bottom: 0px; overflow: hidden; font-size: 1.2em; line-height: 1.6; font-family: sans-serif;\"><span class=\"mw-headline\" id=\"Breeds\">Breeds</span></h3><div role=\"note\" class=\"hatnote navigation-not-searchable\" style=\"font-style: italic; padding-left: 1.6em; margin-bottom: 0.5em; color: rgb(32, 33, 34); font-family: sans-serif;\">Main article:&nbsp;<a href=\"https://en.wikipedia.org/wiki/Dog_breed\" title=\"Dog breed\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Dog breed</a></div><div role=\"note\" class=\"hatnote navigation-not-searchable\" style=\"font-style: italic; padding-left: 1.6em; margin-bottom: 0.5em; margin-top: -0.5em; color: rgb(32, 33, 34); font-family: sans-serif;\">Further information:&nbsp;<a href=\"https://en.wikipedia.org/wiki/Dog_type\" title=\"Dog type\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Dog type</a></div><figure class=\"mw-default-size\" typeof=\"mw:File/Thumb\" style=\"display: table; text-align: center; border-collapse: collapse; line-height: 0; margin-top: 0.5em; margin-bottom: 1.3em; margin-left: 1.4em; clear: right; float: right; border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgb(200, 204, 209); border-right-color: rgb(200, 204, 209); border-left-color: rgb(200, 204, 209); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; background-color: rgb(248, 249, 250); min-width: 100px; color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://en.wikipedia.org/wiki/File:Big_and_little_dog.jpg\" class=\"mw-file-description\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; display: block; position: relative; border: 0px;\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Big_and_little_dog.jpg/220px-Big_and_little_dog.jpg\" decoding=\"async\" width=\"220\" height=\"113\" class=\"mw-file-element\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/6/62/Big_and_little_dog.jpg/330px-Big_and_little_dog.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/62/Big_and_little_dog.jpg/440px-Big_and_little_dog.jpg 2x\" data-file-width=\"600\" data-file-height=\"309\" style=\"border: 1px solid rgb(200, 204, 209); margin: 3px; background: rgb(255, 255, 255);\"></a><figcaption style=\"display: table-caption; caption-side: bottom; line-height: 1.4em; word-break: break-word; text-align: left; padding: 0px 6px 6px; border-width: 0px 1px 1px; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: rgb(200, 204, 209); border-bottom-color: rgb(200, 204, 209); border-left-color: rgb(200, 204, 209); border-image: initial; border-top-style: initial; border-top-color: initial; font-size: 12.376px;\">Dog breeds show a huge range of phenotypic variation</figcaption></figure><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif;\">Dogs are the most variable mammal on earth with around 450 globally recognized&nbsp;<a href=\"https://en.wikipedia.org/wiki/Dog_breeds\" class=\"mw-redirect\" title=\"Dog breeds\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">dog breeds</a>.<sup id=\"cite_ref-Ostrander2019_10-2\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-Ostrander2019-10\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[10]</a></sup>&nbsp;In the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Victorian_era\" title=\"Victorian era\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Victorian era</a>, directed human&nbsp;<a href=\"https://en.wikipedia.org/wiki/Selection_(biology)\" class=\"mw-redirect\" title=\"Selection (biology)\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">selection</a>&nbsp;developed the modern&nbsp;<a href=\"https://en.wikipedia.org/wiki/Dog_breeds\" class=\"mw-redirect\" title=\"Dog breeds\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">dog breeds</a>, which resulted in a vast range of phenotypes.<sup id=\"cite_ref-freedman2017_8-5\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-freedman2017-8\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[8]</a></sup>&nbsp;Most breeds were derived from small numbers of founders within the last 200 years,<sup id=\"cite_ref-freedman2017_8-6\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-freedman2017-8\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[8]</a></sup><sup id=\"cite_ref-Ostrander2019_10-3\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-Ostrander2019-10\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[10]</a></sup>&nbsp;and since then dogs have undergone rapid&nbsp;<a href=\"https://en.wikipedia.org/wiki/Phenotypic\" class=\"mw-redirect\" title=\"Phenotypic\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">phenotypic</a>&nbsp;change and were formed into today\'s modern breeds due to&nbsp;<a href=\"https://en.wikipedia.org/wiki/Artificial_selection\" class=\"mw-redirect\" title=\"Artificial selection\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">artificial selection</a>&nbsp;imposed by humans. The skull, body, and limb proportions vary significantly between breeds, with dogs displaying more phenotypic diversity than can be found within the entire order of carnivores. These breeds possess distinct traits related to morphology, which include body size, skull shape, tail phenotype, fur type and colour.<sup id=\"cite_ref-freedman2017_8-7\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-freedman2017-8\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[8]</a></sup>&nbsp;Their behavioural traits include guarding, herding, and hunting,<sup id=\"cite_ref-freedman2017_8-8\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-freedman2017-8\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[8]</a></sup>&nbsp;retrieving, and scent detection. Their personality traits include hypersocial behavior, boldness, and aggression,<sup id=\"cite_ref-Ostrander2019_10-4\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-Ostrander2019-10\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[10]</a></sup>&nbsp;which demonstrates the functional and behavioral diversity of dogs.<sup id=\"cite_ref-freedman2017_8-9\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-freedman2017-8\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[8]</a></sup>&nbsp;As a result, present day dogs are the most abundant carnivore species and are dispersed around the world.<sup id=\"cite_ref-Ostrander2019_10-5\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-Ostrander2019-10\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[10]</a></sup>&nbsp;The most striking example of this dispersal is that of the numerous modern breeds of European lineage during the Victorian era.<sup id=\"cite_ref-Frantz2020_7-4\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Dog#cite_note-Frantz2020-7\" style=\"color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[7]</a></sup></p>', 'french-dog-267.jpg', 0, 'french-dog-267', '2023-08-18 09:45:11', '2023-09-04 02:54:31');
INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `price`, `discount`, `after_discount`, `tags`, `short_desp`, `long_desp`, `addi_desp`, `preview`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(8, 10, 22, 16, 'Karaknath Egg', 12, NULL, 12, 'egg,white egg,chicken egg,chaldal egg,chaldel', 'otobi Premium Sofa', '<h2 class=\"footerLogo\" data-reactid=\".7etwh580pa.b.2.0.0.0.0.2.5.1.0:$4248_Grocery.0.6.0.2.1.0.0\" style=\"-webkit-tap-highlight-color: transparent; margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 24px; font-weight: 400; color: rgb(97, 94, 88); font-family: &quot;segoe ui&quot;, Helvetica, &quot;droid sans&quot;, Arial, &quot;lucida grande&quot;, tahoma, verdana, arial, sans-serif; background-color: rgb(247, 247, 247);\"><img class=\"chaldal_logo\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" alt=\"Chaldal logo\" data-reactid=\".7etwh580pa.b.2.0.0.0.0.2.5.1.0:$4248_Grocery.0.6.0.2.1.0.0.0\" style=\"-webkit-tap-highlight-color: transparent; border: 0px; width: 154px; height: 50px; background-image: url(&quot;https://chaldn.com/asset/Egg.ChaldalWeb.Fabric/Egg.ChaldalWeb/1.0.0+Deploy-Release-306/Default/components/header/Header/images/logo-small.png?q=low&amp;webp=1&amp;alpha=1&quot;); background-repeat: no-repeat;\"></h2><p><span data-reactid=\".7etwh580pa.b.2.0.0.0.0.2.5.1.0:$4248_Grocery.0.6.0.2.1.0.1\" style=\"-webkit-tap-highlight-color: transparent; color: rgb(97, 94, 88); font-family: &quot;segoe ui&quot;, Helvetica, &quot;droid sans&quot;, Arial, &quot;lucida grande&quot;, tahoma, verdana, arial, sans-serif; font-size: 15px; background-color: rgb(247, 247, 247);\">Chaldal.com is an online shop available in Dhaka, Chattogram and Jashore. We believe time is valuable to our fellow residents, and that they should not have to waste hours in traffic, brave bad weather and wait in line just to buy basic necessities like eggs! This is why Chaldal delivers everything you need right at your door-step and at no additional cost.</span><br></p>', NULL, 'karaknath-egg-139.jpg', 0, 'karaknath-egg-139', '2023-08-18 09:48:15', '2023-09-04 02:54:22'),
(9, 11, 21, 9, 'Pampers Swaddlers', 800, 2, 784, 'papmers,baby,feelings,good,comfort baby', 'otobi Premium Sofa', '<div class=\"pbf-list \" style=\"box-sizing: inherit; margin: auto auto 40px; width: 680px; font-family: &quot;Harmonia Sans Std Regular&quot;, Arial, Helvetica, sans-serif; font-size: 16px;\"><div class=\"ProductFeatures__StyledWrapper-sc-1fvd6gk-0 fHxNHG product-features pure\" data-cy=\"product-features\" style=\"box-sizing: inherit;\"><div class=\"pbf-wrapper\" style=\"box-sizing: inherit; padding-left: 0px; padding-right: 0px;\"><div class=\"pbf-box pbf-box--left\" style=\"box-sizing: inherit; box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px 0px; margin-bottom: 24px; max-width: 680px; display: flex; -webkit-box-pack: justify; justify-content: space-between; -webkit-box-align: center; align-items: center;\"><div class=\"pbf-media  \" data-action-detail=\"\" style=\"box-sizing: inherit; overflow: hidden; min-height: 200px; min-width: 278px; position: relative;\"><picture class=\"sc-bcXHqe hXDegz\" style=\"box-sizing: inherit; display: inline-block;\"><img aria-hidden=\"true\" src=\"https://images.ctfassets.net/9wtva4vhlgxb/3YQpPCVyC3KVT4HJGpDQAA/84af04bda169c14938d8f136c10e3c14/D_BENEFITS_Module2_560x400_R.png?w=560&amp;h=400&amp;fm=webp&amp;q=70\" alt=\"BreatheFree Liner(TM) helps soothe and protect baby\'s skin.\" style=\"box-sizing: inherit; display: block; width: auto; animation: 1s ease 0s 1 normal none running fade-in; transform: scale(1); transition: transform 0.3s ease-in-out 0s; position: absolute; top: 0px; left: 0px; min-height: 200px; max-width: 100%; height: auto;\"></picture></div><div class=\"pbf-desc \" style=\"box-sizing: inherit; min-width: 402px;\"><div class=\"pbf-desc--details  \" style=\"box-sizing: inherit; position: relative; padding: 20px 12px 15px 30px;\"><div class=\"title\" style=\"box-sizing: inherit; font-weight: 600; font-stretch: normal; line-height: 1.5; color: var(--indigo); margin-bottom: 4px; letter-spacing: 0.06px; font-family: var(--font-pampers-semi-bold);\"><h3 style=\"box-sizing: inherit; font-size: calc(16px + var(--zoom));\">BreatheFree Liner™</h3></div><p style=\"box-sizing: inherit; font-size: 14px; font-stretch: normal; line-height: 1.43; letter-spacing: 0.05px; color: var(--indigo);\">Wicks away wetness, allowing baby\'s skin to breathe</p></div></div></div></div></div><div class=\"ProductFeatures__StyledWrapper-sc-1fvd6gk-0 fHxNHG product-features pure\" data-cy=\"product-features\" style=\"box-sizing: inherit;\"><div class=\"pbf-wrapper\" style=\"box-sizing: inherit; padding-left: 0px; padding-right: 0px;\"><div class=\"pbf-box pbf-box--left\" style=\"box-sizing: inherit; box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px 0px; margin-bottom: 24px; max-width: 680px; display: flex; -webkit-box-pack: justify; justify-content: space-between; -webkit-box-align: center; align-items: center;\"><div class=\"pbf-media  \" data-action-detail=\"\" style=\"box-sizing: inherit; overflow: hidden; min-height: 200px; min-width: 278px; position: relative;\"><picture class=\"sc-bcXHqe hXDegz\" style=\"box-sizing: inherit; display: inline-block;\"><source srcset=\"https://images.ctfassets.net/9wtva4vhlgxb/7wAT8X34iw2wohzOJq0M3R/ae782ee209b7ca17ea72f6a310658651/swaddlers_benefit1_module3_M_161x148.jpg?fm=webp&amp;q=70\" media=\"(max-width:990px)\" style=\"box-sizing: inherit;\"><source srcset=\"https://images.ctfassets.net/9wtva4vhlgxb/2v8FoSSVJGQnvxoJR7iyOX/3353dbace4c50e3bfb7806b5a38e1646/swaddlers_benefit1_module3_D_280x200.jpg?fm=webp&amp;q=70\" style=\"box-sizing: inherit;\"><img aria-hidden=\"true\" src=\"https://images.ctfassets.net/9wtva4vhlgxb/2v8FoSSVJGQnvxoJR7iyOX/3353dbace4c50e3bfb7806b5a38e1646/swaddlers_benefit1_module3_D_280x200.jpg?w=280&amp;h=200&amp;fm=webp&amp;q=70\" alt=\"Dual Leak-Guard Barriers\" style=\"box-sizing: inherit; display: block; width: auto; animation: 1s ease 0s 1 normal none running fade-in; transform: scale(1); transition: transform 0.3s ease-in-out 0s; position: absolute; top: 0px; left: 0px; min-height: 200px; max-width: 100%; height: auto;\"></picture></div><div class=\"pbf-desc \" style=\"box-sizing: inherit; min-width: 402px;\"><div class=\"pbf-desc--details  \" style=\"box-sizing: inherit; position: relative; padding: 20px 12px 15px 30px;\"><div class=\"title\" style=\"box-sizing: inherit; font-weight: 600; font-stretch: normal; line-height: 1.5; color: var(--indigo); margin-bottom: 4px; letter-spacing: 0.06px; font-family: var(--font-pampers-semi-bold);\"><h3 style=\"box-sizing: inherit; font-size: calc(16px + var(--zoom));\">Dual Leak-Guard Barriers</h3></div><p style=\"box-sizing: inherit; font-size: 14px; font-stretch: normal; line-height: 1.43; letter-spacing: 0.05px; color: var(--indigo);\">Along the leg cuff to help where leaks happen most</p></div></div></div></div></div><div class=\"ProductFeatures__StyledWrapper-sc-1fvd6gk-0 fHxNHG product-features pure\" data-cy=\"product-features\" style=\"box-sizing: inherit;\"><div class=\"pbf-wrapper\" style=\"box-sizing: inherit; padding-left: 0px; padding-right: 0px;\"><div class=\"pbf-box pbf-box--top\" style=\"box-sizing: inherit; box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px 0px; margin-bottom: 24px; max-width: 680px;\"><div class=\"pbf-media  \" data-action-detail=\"\" style=\"box-sizing: inherit; overflow: hidden; max-height: 360px;\"></div><div class=\"pbf-desc \" style=\"box-sizing: inherit; padding: 32px; display: flex;\"><picture class=\"sc-bcXHqe hXDegz\" style=\"box-sizing: inherit; display: inline-block;\"><source srcset=\"https://images.ctfassets.net/9wtva4vhlgxb/4hXcmJczwASK4sVA1HPtRF/a8d9dca832afdf4dc1d3aa44d9310b43/LOCK_AWAY_CHANNELS_D_60x60.png?fm=webp&amp;q=70\" style=\"box-sizing: inherit;\"><img aria-hidden=\"true\" src=\"https://images.ctfassets.net/9wtva4vhlgxb/4hXcmJczwASK4sVA1HPtRF/a8d9dca832afdf4dc1d3aa44d9310b43/LOCK_AWAY_CHANNELS_D_60x60.png?w=60&amp;h=60&amp;fm=webp&amp;q=70\" alt=\"LockAway Channels™\" style=\"box-sizing: inherit; display: block; width: 60px; animation: 1s ease 0s 1 normal none running fade-in; height: 60px; margin-right: 32px;\"></picture><div class=\"pbf-desc--details\" style=\"box-sizing: inherit; position: relative;\"><div class=\"title\" style=\"box-sizing: inherit; font-weight: 600; font-stretch: normal; line-height: 1.5; color: var(--indigo); margin-bottom: 4px; letter-spacing: 0.06px; font-family: var(--font-pampers-semi-bold);\"><h3 style=\"box-sizing: inherit; font-size: calc(16px + var(--zoom));\">LockAway Channels™</h3></div><p style=\"box-sizing: inherit; font-size: 14px; font-stretch: normal; line-height: 1.43; letter-spacing: 0.05px; color: var(--indigo);\">Locks wetness &amp; mess away for dry, healthy skin</p></div></div></div></div></div></div><div class=\"pbf-header\" style=\"box-sizing: inherit; text-align: center; width: auto; margin: auto; min-width: 250px; font-family: &quot;Harmonia Sans Std Regular&quot;, Arial, Helvetica, sans-serif; font-size: 16px;\"><h2 class=\"pbf-header-title font-pampers \" style=\"box-sizing: inherit; font-family: var(--font-pampers),Arial,sans-serif; font-size: calc(36px + var(--zoom)); line-height: 1.07; color: var(--indigo); margin-bottom: 17px; font-weight: normal;\">Comfort</h2><div class=\"pbf-header-subtitle \" style=\"box-sizing: inherit; font-weight: 600; line-height: 1.5; color: var(--indigo); margin-bottom: 22px; letter-spacing: 0.06px; font-family: var(--font-pampers-semi-bold);\">Our softest Swaddlers ever to comfort baby\'s skin</div></div><div class=\"pbf-list \" style=\"box-sizing: inherit; margin: auto auto 40px; width: 680px; font-family: &quot;Harmonia Sans Std Regular&quot;, Arial, Helvetica, sans-serif; font-size: 16px;\"><div class=\"ProductFeatures__StyledWrapper-sc-1fvd6gk-0 fHxNHG product-features pure\" data-cy=\"product-features\" style=\"box-sizing: inherit;\"><div class=\"pbf-wrapper\" style=\"box-sizing: inherit; padding-left: 0px; padding-right: 0px;\"><div class=\"pbf-box pbf-box--top\" style=\"box-sizing: inherit; box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px 0px; margin-bottom: 24px; max-width: 680px;\"><div class=\"pbf-media  \" data-action-detail=\"\" style=\"box-sizing: inherit; overflow: hidden; max-height: 360px;\"></div><div class=\"pbf-desc \" style=\"box-sizing: inherit; padding: 32px; display: flex;\"><picture class=\"sc-bcXHqe hXDegz\" style=\"box-sizing: inherit; display: inline-block;\"><source srcset=\"https://images.ctfassets.net/9wtva4vhlgxb/1bpMJSVVfPtDj0OLtx3cdt/49388468da2d4a8a33fbaf78113387c6/UMBILICAL-CORD-NOTCH_60x60.png?fm=webp&amp;q=70\" style=\"box-sizing: inherit;\"><img aria-hidden=\"true\" src=\"https://images.ctfassets.net/9wtva4vhlgxb/1bpMJSVVfPtDj0OLtx3cdt/49388468da2d4a8a33fbaf78113387c6/UMBILICAL-CORD-NOTCH_60x60.png?w=60&amp;h=60&amp;fm=webp&amp;q=70\" alt=\"Umbilical Cord Notch\" style=\"box-sizing: inherit; display: block; width: 60px; animation: 1s ease 0s 1 normal none running fade-in; height: 60px; margin-right: 32px;\"></picture><div class=\"pbf-desc--details\" style=\"box-sizing: inherit; position: relative;\"><div class=\"title\" style=\"box-sizing: inherit; font-weight: 600; font-stretch: normal; line-height: 1.5; color: var(--indigo); margin-bottom: 4px; letter-spacing: 0.06px; font-family: var(--font-pampers-semi-bold);\"><h3 style=\"box-sizing: inherit; font-size: calc(16px + var(--zoom));\">Umbilical Cord Notch</h3></div><p style=\"box-sizing: inherit; font-size: 14px; font-stretch: normal; line-height: 1.43; letter-spacing: 0.05px; color: var(--indigo);\">Protects your newborn baby\'s belly</p></div></div></div></div></div><div class=\"ProductFeatures__StyledWrapper-sc-1fvd6gk-0 fHxNHG product-features pure\" data-cy=\"product-features\" style=\"box-sizing: inherit;\"><div class=\"pbf-wrapper\" style=\"box-sizing: inherit; padding-left: 0px; padding-right: 0px;\"><div class=\"pbf-box pbf-box--left\" style=\"box-sizing: inherit; box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px 0px; margin-bottom: 24px; max-width: 680px; display: flex; -webkit-box-pack: justify; justify-content: space-between; -webkit-box-align: center; align-items: center;\"><div class=\"pbf-media  \" data-action-detail=\"\" style=\"box-sizing: inherit; overflow: hidden; min-height: 200px; min-width: 278px; position: relative;\"><picture class=\"sc-bcXHqe hXDegz\" style=\"box-sizing: inherit; display: inline-block;\"><source srcset=\"https://images.ctfassets.net/9wtva4vhlgxb/6QupAMojXWRoS5FNoDBPRv/71b4aa20f9f13826f0f1f83a56702629/swaddlers_benefit2_module2_M_161x148.jpg?fm=webp&amp;q=70\" media=\"(max-width:990px)\" style=\"box-sizing: inherit;\"><source srcset=\"https://images.ctfassets.net/9wtva4vhlgxb/60aqmqAz0FaKsJgdNz15dM/7a3531bc6f7990c5b87e98407f23c3d1/swaddlers_benefit2_module2_D_280x200.jpg?fm=webp&amp;q=70\" style=\"box-sizing: inherit;\"><img aria-hidden=\"true\" src=\"https://images.ctfassets.net/9wtva4vhlgxb/60aqmqAz0FaKsJgdNz15dM/7a3531bc6f7990c5b87e98407f23c3d1/swaddlers_benefit2_module2_D_280x200.jpg?w=280&amp;h=200&amp;fm=webp&amp;q=70\" alt=\"Pampers Wetness Indicator\" style=\"box-sizing: inherit; display: block; width: auto; animation: 1s ease 0s 1 normal none running fade-in; transform: scale(1); transition: transform 0.3s ease-in-out 0s; position: absolute; top: 0px; left: 0px; min-height: 200px; max-width: 100%; height: auto;\"></picture></div><div class=\"pbf-desc \" style=\"box-sizing: inherit; min-width: 402px;\"><div class=\"pbf-desc--details  \" style=\"box-sizing: inherit; position: relative; padding: 20px 12px 15px 30px;\"><div class=\"title\" style=\"box-sizing: inherit; font-weight: 600; font-stretch: normal; line-height: 1.5; color: var(--indigo); margin-bottom: 4px; letter-spacing: 0.06px; font-family: var(--font-pampers-semi-bold);\"><h3 style=\"box-sizing: inherit; font-size: calc(16px + var(--zoom));\">Pampers Wetness Indicator</h3></div><p style=\"box-sizing: inherit; font-size: 14px; font-stretch: normal; line-height: 1.43; letter-spacing: 0.05px; color: var(--indigo);\">Shows when your baby\'s wet &amp; might need a change</p></div></div></div></div></div><div class=\"ProductFeatures__StyledWrapper-sc-1fvd6gk-0 fHxNHG product-features pure\" data-cy=\"product-features\" style=\"box-sizing: inherit;\"><div class=\"pbf-wrapper\" style=\"box-sizing: inherit; padding-left: 0px; padding-right: 0px;\"><div class=\"pbf-box pbf-box--left\" style=\"box-sizing: inherit; box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px 0px; margin-bottom: 24px; max-width: 680px; display: flex; -webkit-box-pack: justify; justify-content: space-between; -webkit-box-align: center; align-items: center;\"><div class=\"pbf-media  \" data-action-detail=\"\" style=\"box-sizing: inherit; overflow: hidden; min-height: 200px; min-width: 278px; position: relative;\"><picture class=\"sc-bcXHqe hXDegz\" style=\"box-sizing: inherit; display: inline-block;\"><source srcset=\"https://images.ctfassets.net/9wtva4vhlgxb/6gY49GHZ2f4hmuK38CXb7y/b0c9c0b11a05cd582bf1f1371823cd9d/swaddlers_benefit2_module3_M_161x148.jpg?fm=webp&amp;q=70\" media=\"(max-width:990px)\" style=\"box-sizing: inherit;\"><source srcset=\"https://images.ctfassets.net/9wtva4vhlgxb/71aWZTSliNBPfU41Ra7gzQ/dc483406535d02d62f16c40f9cfa56f0/swaddlers_benefit2_module3_D_280x200.jpg?fm=webp&amp;q=70\" style=\"box-sizing: inherit;\"><img aria-hidden=\"true\" src=\"https://images.ctfassets.net/9wtva4vhlgxb/71aWZTSliNBPfU41Ra7gzQ/dc483406535d02d62f16c40f9cfa56f0/swaddlers_benefit2_module3_D_280x200.jpg?w=280&amp;h=200&amp;fm=webp&amp;q=70\" alt=\"Gentle on Delicate Skin\" style=\"box-sizing: inherit; display: block; width: auto; animation: 1s ease 0s 1 normal none running fade-in; transform: scale(1); transition: transform 0.3s ease-in-out 0s; position: absolute; top: 0px; left: 0px; min-height: 200px; max-width: 100%; height: auto;\"></picture></div><div class=\"pbf-desc \" style=\"box-sizing: inherit; min-width: 402px;\"><div class=\"pbf-desc--details  \" style=\"box-sizing: inherit; position: relative; padding: 20px 12px 15px 30px;\"><div class=\"title\" style=\"box-sizing: inherit; font-weight: 600; font-stretch: normal; line-height: 1.5; color: var(--indigo); margin-bottom: 4px; letter-spacing: 0.06px; font-family: var(--font-pampers-semi-bold);\"><h3 style=\"box-sizing: inherit; font-size: calc(16px + var(--zoom));\">Gentle on Delicate Skin</h3></div><p style=\"box-sizing: inherit; font-size: 14px; font-stretch: normal; line-height: 1.43; letter-spacing: 0.05px; color: var(--indigo);\">Hypoallergenic and 0% parabens &amp; latex*<br style=\"box-sizing: inherit;\">(*natural rubber)</p></div></div></div></div></div><div class=\"ProductFeatures__StyledWrapper-sc-1fvd6gk-0 fHxNHG product-features pure\" data-cy=\"product-features\" style=\"box-sizing: inherit;\"><div class=\"pbf-wrapper\" style=\"box-sizing: inherit; padding-left: 0px; padding-right: 0px;\"><div class=\"pbf-box pbf-box--top\" style=\"box-sizing: inherit; box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px 0px; margin-bottom: 24px; max-width: 680px;\"><div class=\"pbf-media  \" data-action-detail=\"\" style=\"box-sizing: inherit; overflow: hidden; max-height: 360px;\"></div><div class=\"pbf-desc \" style=\"box-sizing: inherit; padding: 32px; display: flex;\"><picture class=\"sc-bcXHqe hXDegz\" style=\"box-sizing: inherit; display: inline-block;\"><source srcset=\"https://images.ctfassets.net/9wtva4vhlgxb/3mP6IX904BUSII6yNjnY8x/aa81684e064a78641b2201da782a3011/SOFT_STRETCHY-SIDES_D_60x60.png?fm=webp&amp;q=70\" style=\"box-sizing: inherit;\"><img aria-hidden=\"true\" src=\"https://images.ctfassets.net/9wtva4vhlgxb/3mP6IX904BUSII6yNjnY8x/aa81684e064a78641b2201da782a3011/SOFT_STRETCHY-SIDES_D_60x60.png?w=60&amp;h=60&amp;fm=webp&amp;q=70\" alt=\"Soft stretchy sides\" style=\"box-sizing: inherit; display: block; width: 60px; animation: 1s ease 0s 1 normal none running fade-in; height: 60px; margin-right: 32px;\"></picture><div class=\"pbf-desc--details\" style=\"box-sizing: inherit; position: relative;\"><div class=\"title\" style=\"box-sizing: inherit; font-weight: 600; font-stretch: normal; line-height: 1.5; color: var(--indigo); margin-bottom: 4px; letter-spacing: 0.06px; font-family: var(--font-pampers-semi-bold);\"><h3 style=\"box-sizing: inherit; font-size: calc(16px + var(--zoom));\">Soft, stretchy sides</h3></div><p style=\"box-sizing: inherit; font-size: 14px; font-stretch: normal; line-height: 1.43; letter-spacing: 0.05px; color: var(--indigo);\">Helps the diaper stay in place, flexing with baby\'s every move</p></div></div></div></div></div></div>', '<div class=\"pbf-header\" style=\"box-sizing: inherit; text-align: center; width: auto; margin: auto; min-width: 250px; font-family: &quot;Harmonia Sans Std Regular&quot;, Arial, Helvetica, sans-serif; font-size: 16px;\"><h2 class=\"pbf-header-title font-pampers \" style=\"box-sizing: inherit; font-family: var(--font-pampers),Arial,sans-serif; font-size: calc(36px + var(--zoom)); line-height: 1.07; color: var(--indigo); margin-bottom: 17px; font-weight: normal;\">Baby\'s Safety First</h2><div class=\"pbf-header-subtitle \" style=\"box-sizing: inherit; font-weight: 600; line-height: 1.5; color: var(--indigo); margin-bottom: 20px; letter-spacing: 0.06px; font-family: var(--font-pampers-semi-bold);\"></div></div><div class=\"pbf-list pbf-list--is-quality-safety\" style=\"box-sizing: inherit; margin: auto auto 40px; max-width: unset; width: 680px; font-family: &quot;Harmonia Sans Std Regular&quot;, Arial, Helvetica, sans-serif; font-size: 16px;\"><div class=\"ProductFeatures__StyledWrapper-sc-1fvd6gk-0 fHxNHG product-features pure\" data-cy=\"product-features\" style=\"box-sizing: inherit;\"><div class=\"pbf-wrapper\" style=\"box-sizing: inherit; padding-left: 0px; padding-right: 0px;\"><div class=\"pbf-box pbf-box--left\" style=\"box-sizing: inherit; box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px 0px; margin-bottom: 24px; max-width: 680px; display: flex; -webkit-box-pack: justify; justify-content: space-between; -webkit-box-align: center; align-items: center; min-height: 200px;\"><div class=\"pbf-media event_button_click pbf-media--is-quality-safety\" data-action-detail=\"ENG_PRODUCTS_OTHER_OTHER_ALL_Dermatologically-tested-and-hypoallergenic-qs-see-more\" style=\"box-sizing: inherit; overflow: hidden; min-height: 200px; min-width: 278px; position: relative;\"><picture class=\"sc-bcXHqe hXDegz\" style=\"box-sizing: inherit; display: inline-block;\"><source srcset=\"https://images.ctfassets.net/9wtva4vhlgxb/1UbP2kYmB9B2vpMEPE8gG1/15647e27cf8c3c71913cd0e5ba05ad7f/M_BENEFITS_Safety_322x296_R.png?fm=webp&amp;q=70\" media=\"(max-width:990px)\" style=\"box-sizing: inherit;\"><source srcset=\"https://images.ctfassets.net/9wtva4vhlgxb/2piBoe7XNHrM8U8dnBX8gg/960576aee0cdb942b95c85a3f1628a24/D_BENEFITS_Safety_560x400_R.png?fm=webp&amp;q=70\" style=\"box-sizing: inherit;\"><img aria-hidden=\"true\" src=\"https://images.ctfassets.net/9wtva4vhlgxb/2piBoe7XNHrM8U8dnBX8gg/960576aee0cdb942b95c85a3f1628a24/D_BENEFITS_Safety_560x400_R.png?w=560&amp;h=400&amp;fm=webp&amp;q=70\" alt=\"Pampers Swaddlers™\" class=\"without-zoom\" style=\"box-sizing: inherit; display: block; width: auto; animation: 1s ease 0s 1 normal none running fade-in; transform: unset; transition: transform 0.3s ease-in-out 0s; position: absolute; top: 0px; left: 0px; min-height: 200px; max-width: 100%; height: auto;\"></picture></div><div class=\"pbf-desc \" style=\"box-sizing: inherit; min-width: 402px;\"><div class=\"pbf-desc--details  pbf-desc--detail_quality\" style=\"box-sizing: inherit; position: relative; padding: 20px 12px 15px 30px;\"><div class=\"pbf-quality event_button_click\" data-action-detail=\"ENG_PRODUCTS_OTHER_OTHER_ALL_Dermatologically-tested-and-hypoallergenic-qs-see-more\" style=\"box-sizing: inherit; position: relative; margin-bottom: 26px;\"><div class=\"title\" style=\"box-sizing: inherit; font-weight: 600; font-stretch: normal; line-height: 1.5; color: var(--indigo); margin-bottom: 4px; letter-spacing: 0.06px; font-family: var(--font-pampers-semi-bold); min-width: 276px;\"><h3 style=\"box-sizing: inherit; font-size: calc(16px + var(--zoom));\">Dermatologically tested and hypoallergenic</h3></div><p style=\"box-sizing: inherit; font-size: 14px; font-stretch: normal; line-height: 1.43; letter-spacing: 0.05px; color: var(--indigo); min-width: 308px;\">To ensure they are gentle against your baby\'s skin</p></div><div class=\"pbf-see-more\" style=\"box-sizing: inherit; position: initial; bottom: 16px; margin-bottom: 29px; padding-top: 1px;\"><a href=\"https://www.pampers.com/en-us/about-us/quality-and-safety/article/our-dedication-to-safety\" target=\"_blank\" class=\"event_button_click\" data-action-detail=\"ENG_PRODUCTS_OTHER_OTHER_ALL_Dermatologically-tested-and-hypoallergenic-qs-see-more\" style=\"box-sizing: inherit; color: var(--teal-dark); font-size: 12px; font-stretch: normal; line-height: normal; letter-spacing: 0.12px;\"><span class=\"label\" style=\"box-sizing: inherit; position: relative;\">See more</span><span class=\"icon-see-more\" style=\"box-sizing: inherit; margin-left: 2px;\">&nbsp;</span></a></div></div></div></div></div></div></div>', 'pampers-swaddlers-152.jpg', 1, 'pampers-swaddlers-152', '2023-08-18 09:52:27', '2023-09-04 02:54:16'),
(10, 24, 31, 17, 'Johnnie Walker Red Label', 23000, 2, 22540, 'red lebel,indian,brand,drink,feelgood,bad water,risky', 'otobi Premium Sofa', '<div id=\"Facts\" class=\"drawer-content\" style=\"color: rgb(153, 153, 153); font-family: lato, arial, sans-serif; font-size: 14.4px;\"><div class=\"drawer-content__content js-drawer__source\"><h2 class=\"product-title product-title--bravo\" style=\"margin-right: 0px; margin-left: 0px; padding: 10px 0px; line-height: 1.4; text-align: center; text-transform: uppercase; font-size: 26px; font-weight: 400; letter-spacing: 0.05em; color: rgb(86, 35, 69);\">FACTS</h2><ul class=\"product-facts\" style=\"margin-right: auto; margin-bottom: 0px; margin-left: auto; padding: 10px; list-style-type: none; display: flex; flex-flow: wrap; justify-content: flex-start; align-items: flex-start; max-width: 768px;\"><li class=\"product-facts__item\" style=\"margin: 0px; padding: 10px; list-style-type: none; width: 249.328px; display: grid; grid-template-columns: 45px 1fr; grid-template-rows: auto 1fr;\"><img src=\"https://www.thewhiskyexchange.com/media/rtwe/assets/application/images/facts/fact--country.svg\" alt=\"Country Icon\" class=\"product-facts__icon\" loading=\"lazy\" width=\"400\" height=\"400\" style=\"display: block; width: 45px; height: auto; padding: 0px 10px; grid-column-end: 2; grid-row: 1 / 3; opacity: 0.6;\"><h3 class=\"product-facts__type\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; line-height: 1; font-size: 12px; font-weight: 400; letter-spacing: 0.02em; grid-column-end: 3; grid-row: 1 / 2; text-transform: uppercase;\">COUNTRY</h3><p class=\"product-facts__data\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: &quot;droid serif&quot;, times, serif; font-size: 18px; font-style: italic; line-height: 1.6; grid-column-end: 3; grid-row: 2 / 3; color: gray;\">Scotland</p></li><li class=\"product-facts__item\" style=\"margin: 0px; padding: 10px; list-style-type: none; width: 249.328px; display: grid; grid-template-columns: 45px 1fr; grid-template-rows: auto 1fr;\"><img src=\"https://www.thewhiskyexchange.com/media/rtwe/assets/application/images/facts/fact--colouring.svg\" alt=\"Colouring Icon\" class=\"product-facts__icon\" loading=\"lazy\" width=\"400\" height=\"400\" style=\"display: block; width: 45px; height: auto; padding: 0px 10px; grid-column-end: 2; grid-row: 1 / 3; opacity: 0.6;\"><h3 class=\"product-facts__type\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; line-height: 1; font-size: 12px; font-weight: 400; letter-spacing: 0.02em; grid-column-end: 3; grid-row: 1 / 2; text-transform: uppercase;\">COLOURING</h3><p class=\"product-facts__data\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-family: &quot;droid serif&quot;, times, serif; font-size: 18px; font-style: italic; line-height: 1.6; grid-column-end: 3; grid-row: 2 / 3; color: gray;\">Yes</p></li></ul></div></div><div id=\"TastingNotes\" class=\"drawer-content\" style=\"color: rgb(153, 153, 153); font-family: lato, arial, sans-serif; font-size: 14.4px;\"><div class=\"drawer-content__content js-drawer__source\"><h2 class=\"product-title product-title--bravo\" style=\"margin-right: 0px; margin-left: 0px; padding: 10px 0px; line-height: 1.4; text-align: center; text-transform: uppercase; font-size: 26px; font-weight: 400; letter-spacing: 0.05em; color: rgb(86, 35, 69);\">TASTING NOTES</h2><ul class=\"product-notes\" style=\"margin-right: auto; margin-bottom: 0px; margin-left: auto; padding: 0px 20px; list-style-type: none; max-width: 768px;\"><li class=\"product-notes__note\" style=\"margin: 0px; padding: 20px 0px; list-style-type: none; border-bottom: 1px solid rgba(0, 0, 0, 0.1);\"><h3 class=\"product-notes__author\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.5; font-size: 16px; font-weight: 400; letter-spacing: 0.02em; color: rgb(86, 35, 69);\">Tasting notes by Billy A</h3><ul class=\"product-notes__list\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; list-style-type: none;\"><li class=\"product-notes__item\" style=\"margin: 0px; padding: 20px 0px; list-style-type: none;\"><h4 class=\"product-notes__title\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.5; font-size: 12px; font-weight: 400; letter-spacing: 0.02em; text-transform: uppercase; color: rgb(86, 35, 69);\">NOSE</h4><p class=\"product-notes__copy\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; display: inline; font-size: 16px; letter-spacing: 0.02em;\">Sour apple, toffee and light spice. Hints of vanilla sponge and caraway.</p></li><li class=\"product-notes__item\" style=\"margin: 0px; padding: 20px 0px; list-style-type: none;\"><h4 class=\"product-notes__title\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.5; font-size: 12px; font-weight: 400; letter-spacing: 0.02em; text-transform: uppercase; color: rgb(86, 35, 69);\">PALATE</h4><p class=\"product-notes__copy\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; display: inline; font-size: 16px; letter-spacing: 0.02em;\">Soft and gentle, with sweet grain, sour apple, vanilla cream and white pepper. Caramel and toffee sweetness develops.</p></li><li class=\"product-notes__item\" style=\"margin: 0px; padding: 20px 0px; list-style-type: none;\"><h4 class=\"product-notes__title\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.5; font-size: 12px; font-weight: 400; letter-spacing: 0.02em; text-transform: uppercase; color: rgb(86, 35, 69);\">FINISH</h4><p class=\"product-notes__copy\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; display: inline; font-size: 16px; letter-spacing: 0.02em;\">Short and sweet, with growing apple skin tannin and a touch of fruit.</p></li></ul></li><li class=\"product-notes__note\" style=\"margin: 0px; padding: 20px 0px; list-style-type: none; border-bottom: none;\"><h3 class=\"product-notes__author\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.5; font-size: 16px; font-weight: 400; letter-spacing: 0.02em; color: rgb(86, 35, 69);\">Producer\'s Tasting Notes</h3><ul class=\"product-notes__list\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; list-style-type: none;\"><li class=\"product-notes__item\" style=\"margin: 0px; padding: 20px 0px; list-style-type: none;\"><h4 class=\"product-notes__title\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.5; font-size: 12px; font-weight: 400; letter-spacing: 0.02em; text-transform: uppercase; color: rgb(86, 35, 69);\">NOSE</h4><p class=\"product-notes__copy\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; display: inline; font-size: 16px; letter-spacing: 0.02em;\">Hints of fresh apple, pear and the spark of zest from the elegant Speyside malts.</p></li><li class=\"product-notes__item\" style=\"margin: 0px; padding: 20px 0px; list-style-type: none;\"><h4 class=\"product-notes__title\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.5; font-size: 12px; font-weight: 400; letter-spacing: 0.02em; text-transform: uppercase; color: rgb(86, 35, 69);\">PALATE</h4><p class=\"product-notes__copy\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; display: inline; font-size: 16px; letter-spacing: 0.02em;\">Fruity sweetness, cinnamon and pepper crackling on the centre of your tongue.</p></li><li class=\"product-notes__item\" style=\"margin: 0px; padding: 20px 0px; list-style-type: none;\"><h4 class=\"product-notes__title\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.5; font-size: 12px; font-weight: 400; letter-spacing: 0.02em; text-transform: uppercase; color: rgb(86, 35, 69);\">FINISH</h4><p class=\"product-notes__copy\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; display: inline; font-size: 16px; letter-spacing: 0.02em;\">A sophisticated, smoky finish - the signature of all Johnnie Walker blends.</p></li></ul></li></ul></div></div>', NULL, 'johnnie-walker-red-label-230.jpg', 1, 'johnnie-walker-red-label-230', '2023-08-18 10:00:24', '2023-09-04 02:54:17'),
(11, 3, 2, NULL, 'OTOBI Executive Table B001', 7700, NULL, 7700, 'table,otobi,brand,wood table', 'otobi Premium Sofa', '<h2 style=\"margin-top: 15px; margin-bottom: 0.5rem; font-family: Poppins, sans-serif; font-weight: 400; color: rgb(41, 41, 41); font-size: 14px; border-bottom: 1px solid rgb(220, 217, 217);\"><span style=\"transition: all 0.3s ease 0s; color: rgb(152, 150, 150);\">Delivery Options</span></h2><p style=\"margin: 15px 0px 5px 15px;\"></p><p style=\"margin: 15px 0px 5px 15px;\">Cash on Delivery Not Available</p><h2 style=\"margin-top: 15px; margin-bottom: 0.5rem; font-family: Poppins, sans-serif; font-weight: 400; color: rgb(41, 41, 41); font-size: 14px; border-bottom: 1px solid rgb(220, 217, 217);\"><span style=\"transition: all 0.3s ease 0s; color: rgb(152, 150, 150);\">Return & Warranty</span></h2><p style=\"margin: 15px 0px 2px 15px;\"></p><p style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 15px; color: rgb(152, 150, 150);\"></p><p><span id=\"ctl00_ContentPlaceHolder1_lblBodyText3\" style=\"transition: all 0.3s ease 0s; color: rgb(146, 146, 146); font-family: Poppins, sans-serif; font-size: 13px;\"></span></p><p style=\"box-sizing: border-box; margin: 15px 0px 5px 15px; font-size: 14px; color: rgb(0, 0, 0);\">Warranty Available</p>', NULL, 'otobi-executive-table-b001-226.jpg', 0, 'otobi-executive-table-b001-226', '2023-08-21 10:04:53', '2023-08-27 21:52:06');

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int NOT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `product_id`, `gallery`, `created_at`, `updated_at`) VALUES
(1, 1, 'otobi-sofa-set-p042-i-p060-285.jpg', '2023-08-18 09:23:31', NULL),
(2, 1, 'otobi-sofa-set-p042-i-p060-229.jpg', '2023-08-18 09:23:31', NULL),
(3, 1, 'otobi-sofa-set-p042-i-p060-178.jpg', '2023-08-18 09:23:31', NULL),
(4, 1, 'otobi-sofa-set-p042-i-p060-186.jpg', '2023-08-18 09:23:31', NULL),
(5, 2, 'walton-fan-w17oa-ms-129.jpg', '2023-08-18 09:29:18', NULL),
(6, 2, 'walton-fan-w17oa-ms-104.jpg', '2023-08-18 09:29:18', NULL),
(7, 2, 'walton-fan-w17oa-ms-128.jpg', '2023-08-18 09:29:18', NULL),
(8, 2, 'walton-fan-w17oa-ms-144.jpg', '2023-08-18 09:29:18', NULL),
(9, 3, 'nike-tiempo-legend-10-elite-211.jpg', '2023-08-18 09:32:07', NULL),
(10, 3, 'nike-tiempo-legend-10-elite-219.jpg', '2023-08-18 09:32:07', NULL),
(11, 3, 'nike-tiempo-legend-10-elite-230.jpg', '2023-08-18 09:32:07', NULL),
(12, 3, 'nike-tiempo-legend-10-elite-234.jpg', '2023-08-18 09:32:07', NULL),
(13, 4, 'basmati-kacchi-260.jpg', '2023-08-18 09:35:33', NULL),
(14, 4, 'basmati-kacchi-287.jpg', '2023-08-18 09:35:33', NULL),
(15, 4, 'basmati-kacchi-249.jpg', '2023-08-18 09:35:33', NULL),
(16, 4, 'basmati-kacchi-266.jpg', '2023-08-18 09:35:33', NULL),
(17, 5, 'jbl-live-500bt-wireless-over-ear-headphone-154.jpg', '2023-08-18 09:39:03', NULL),
(18, 5, 'jbl-live-500bt-wireless-over-ear-headphone-178.jpg', '2023-08-18 09:39:03', NULL),
(19, 5, 'jbl-live-500bt-wireless-over-ear-headphone-134.jpg', '2023-08-18 09:39:03', NULL),
(20, 5, 'jbl-live-500bt-wireless-over-ear-headphone-218.jpg', '2023-08-18 09:39:03', NULL),
(21, 6, 'the-blossom-bonanza-multi-stone-nosepin-186.jpg', '2023-08-18 09:42:42', NULL),
(22, 6, 'the-blossom-bonanza-multi-stone-nosepin-293.jpg', '2023-08-18 09:42:42', NULL),
(23, 6, 'the-blossom-bonanza-multi-stone-nosepin-109.jpg', '2023-08-18 09:42:42', NULL),
(24, 6, 'the-blossom-bonanza-multi-stone-nosepin-101.jpg', '2023-08-18 09:42:42', NULL),
(25, 7, 'french-dog-156.jpg', '2023-08-18 09:45:11', NULL),
(26, 7, 'french-dog-168.jpg', '2023-08-18 09:45:11', NULL),
(27, 7, 'french-dog-280.jpg', '2023-08-18 09:45:11', NULL),
(28, 7, 'french-dog-227.jpg', '2023-08-18 09:45:11', NULL),
(29, 8, 'karaknath-egg-219.jpg', '2023-08-18 09:48:15', NULL),
(30, 8, 'karaknath-egg-143.jpg', '2023-08-18 09:48:15', NULL),
(31, 8, 'karaknath-egg-179.jpg', '2023-08-18 09:48:15', NULL),
(32, 9, 'pampers-swaddlers-166.jpg', '2023-08-18 09:52:27', NULL),
(33, 9, 'pampers-swaddlers-258.jpg', '2023-08-18 09:52:27', NULL),
(34, 9, 'pampers-swaddlers-277.jpg', '2023-08-18 09:52:27', NULL),
(35, 10, 'johnnie-walker-red-label-300.jpg', '2023-08-18 10:00:24', NULL),
(36, 10, 'johnnie-walker-red-label-173.jpg', '2023-08-18 10:00:24', NULL),
(37, 10, 'johnnie-walker-red-label-170.jpg', '2023-08-18 10:00:24', NULL),
(38, 11, 'otobi-executive-table-b001-117.jpg', '2023-08-21 10:04:53', NULL),
(39, 11, 'otobi-executive-table-b001-177.jpg', '2023-08-21 10:04:53', NULL),
(40, 11, 'otobi-executive-table-b001-199.jpg', '2023-08-21 10:04:53', NULL),
(41, 11, 'otobi-executive-table-b001-149.jpg', '2023-08-21 10:04:53', NULL),
(42, 12, 'ciara-franklin-148.jpg', '2023-08-24 03:38:23', NULL),
(43, 12, 'ciara-franklin-294.jpg', '2023-08-24 03:38:23', NULL),
(44, 12, 'ciara-franklin-112.jpg', '2023-08-24 03:38:23', NULL),
(45, 12, 'ciara-franklin-279.jpg', '2023-08-24 03:38:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int DEFAULT NULL,
  `size_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `category_id`, `size_name`, `created_at`, `updated_at`) VALUES
(1, NULL, 'NA', '2023-08-27 08:50:17', NULL),
(2, 3, 'NA', '2023-08-27 08:53:16', NULL),
(3, 3, 'Three-seat sofa', '2023-08-27 08:53:33', NULL),
(4, 3, 'Loveseat', '2023-08-27 08:53:39', NULL),
(5, 3, 'Armchair', '2023-08-27 08:53:44', NULL),
(6, 3, 'Coffee Table', '2023-08-27 08:53:48', NULL),
(7, 3, 'Square end table', '2023-08-27 08:53:54', NULL),
(8, 3, 'Rectangular end table', '2023-08-27 08:54:00', NULL),
(9, 4, 'NA', '2023-08-27 08:56:03', NULL),
(13, 4, '250 WATT', '2023-08-27 08:57:14', NULL),
(14, 4, '650 WATT', '2023-08-27 08:57:17', NULL),
(15, 4, '750 WATT', '2023-08-27 08:57:34', NULL),
(16, 1, 'NA', '2023-08-27 09:37:07', NULL),
(17, 5, 'NA', '2023-08-27 09:37:16', NULL),
(18, 6, 'NA', '2023-08-27 09:37:19', NULL),
(19, 7, 'NA', '2023-08-27 09:37:34', NULL),
(20, 8, 'NA', '2023-08-27 09:37:40', NULL),
(21, 9, 'NA', '2023-08-27 09:37:44', NULL),
(22, 10, 'NA', '2023-08-27 09:37:48', NULL),
(23, 11, 'NA', '2023-08-27 09:37:57', NULL),
(24, 4, '200 mm', '2023-08-27 21:53:51', NULL),
(25, 4, '300 mm', '2023-08-27 21:53:56', NULL),
(26, 4, '400 mm', '2023-08-27 21:54:04', NULL),
(27, 5, 'b', '2023-08-27 21:55:35', NULL),
(28, 5, 'c', '2023-08-27 21:55:39', NULL),
(29, 5, 'd', '2023-08-27 21:55:44', NULL),
(30, 5, 'e', '2023-08-27 21:55:48', NULL),
(31, 5, 'ee', '2023-08-27 21:55:58', NULL),
(32, 5, 'eee', '2023-08-27 21:56:03', NULL),
(33, 8, '.50 carat', '2023-08-27 21:57:26', NULL),
(34, 8, '.75 CARAT', '2023-08-27 21:57:32', NULL),
(35, 8, '1 CARAT', '2023-08-27 21:57:39', NULL),
(36, 8, '1.5 CARAT', '2023-08-27 21:57:48', NULL),
(37, 8, '2 CARAT', '2023-08-27 21:57:54', NULL),
(38, 10, 's', '2023-08-27 21:58:52', NULL),
(39, 10, 'l', '2023-08-27 21:58:55', NULL),
(40, 10, 'm', '2023-08-27 21:59:01', NULL),
(41, 11, 'xl', '2023-08-27 21:59:05', NULL),
(42, 10, 'jumbo', '2023-08-27 21:59:11', NULL),
(43, 11, 'p1', '2023-08-27 22:00:22', NULL),
(44, 11, 'N', '2023-08-27 22:00:28', NULL),
(45, 11, '1', '2023-08-27 22:00:37', NULL),
(46, 11, '2', '2023-08-27 22:00:40', NULL),
(47, 11, '3', '2023-08-27 22:00:46', NULL),
(48, 11, '4', '2023-08-27 22:01:08', NULL),
(49, 11, '5', '2023-08-27 22:01:12', NULL),
(50, 11, '6', '2023-08-27 22:01:16', NULL),
(51, 11, '7', '2023-08-27 22:01:22', NULL),
(54, 24, '200 Ml', '2023-08-30 11:14:51', NULL),
(55, 11, '375 ML', '2023-08-30 11:15:01', NULL),
(56, 24, '750 ML', '2023-08-30 11:15:07', NULL),
(57, 24, '1 L', '2023-08-30 11:15:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int NOT NULL,
  `sub_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `sub_category`, `created_at`, `updated_at`) VALUES
(1, 3, 'Sofa', '2023-08-07 10:24:04', NULL),
(2, 3, 'Table', '2023-08-07 10:24:10', NULL),
(3, 4, 'Fan', '2023-08-07 10:24:24', NULL),
(4, 4, 'Rice cooker', '2023-08-07 10:24:37', NULL),
(5, 5, 'Football', '2023-08-07 10:24:43', NULL),
(6, 5, 'Boot', '2023-08-07 10:25:23', NULL),
(7, 6, 'Kacchi', '2023-08-07 10:25:30', NULL),
(8, 6, 'Borhani', '2023-08-13 01:57:58', '2023-08-13 01:57:58'),
(9, 7, 'Headphone', '2023-08-07 10:25:48', NULL),
(10, 7, 'Mobile', '2023-08-07 10:26:28', NULL),
(11, 8, 'Jwellery', '2023-08-07 10:26:34', NULL),
(13, 9, 'Dog', '2023-08-08 10:03:44', '2023-08-08 10:03:44'),
(14, 9, 'cat', '2023-08-07 10:26:55', NULL),
(20, 8, 'Diamond', '2023-08-08 10:25:16', NULL),
(21, 11, 'Diaper', '2023-08-08 10:25:32', '2023-08-08 10:25:32'),
(22, 10, 'Egg', '2023-08-08 10:25:52', NULL),
(23, 10, 'Flour', '2023-08-09 01:51:53', '2023-08-09 01:51:53'),
(24, 11, 'Feeder', '2023-08-08 10:26:09', NULL),
(25, 21, 'asas', '2023-08-08 10:39:40', NULL),
(26, 21, 'asasasasasa', '2023-08-08 10:39:46', NULL),
(27, 21, 'as', '2023-08-08 10:39:51', NULL),
(30, 24, 'Gaja', '2023-08-18 09:54:57', NULL),
(31, 24, 'Alcohol', '2023-08-18 09:55:42', '2023-08-18 09:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint UNSIGNED NOT NULL,
  `customer_id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `customer_id`, `email`, `created_at`, `updated_at`) VALUES
(1, 1, 'pyjezotysa@mailinator.com', '2023-09-01 09:07:06', NULL),
(2, 1, 'qahikyxiry@mailinator.com', '2023-09-01 09:07:10', NULL),
(3, 1, 'tipixize@mailinator.com', '2023-09-01 09:07:13', NULL),
(5, 1, 'juqozu@mailinator.com', '2023-09-01 09:10:19', NULL),
(6, 1, 'kozyny@mailinator.com', '2023-09-01 09:10:24', NULL),
(7, 1, 'koqa@mailinator.com', '2023-09-01 09:10:26', NULL),
(8, 1, 'nizyl@mailinator.com', '2023-09-01 09:10:30', NULL),
(9, 1, 'rigyzup@mailinator.com', '2023-09-01 09:10:36', NULL),
(10, 1, 'gezo@mailinator.com', '2023-09-01 09:10:41', NULL),
(11, 1, 'tuwy@mailinator.com', '2023-09-01 09:10:46', NULL),
(12, 1, 'xabedetumo@mailinator.com', '2023-09-01 09:10:51', NULL),
(13, 1, 'jywypyr@mailinator.com', '2023-09-01 09:10:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Molly Bailey', 'zuva@mailinator.com', NULL, '$2y$10$1YGpTtjsuT/V/CpCPpFulusYN8fAGYdrWRtEHO7fyee2D.7Uxozx6', NULL, 3, 'Ro2ZG7OqmVaE7LWrchsgCt0zMpC4xaFokRr7pf1kfqSLahOp8wTRwOSQ6WRc', '2023-07-19 22:37:00', '2023-07-19 22:37:00'),
(2, 'Anas Abdullah', 'anas161090@gmail.com', NULL, '$2y$10$3TJNYdWb9ABqZYH/Ii5wKOHX94X9gP.PArGF4k2ck5tRGGS58dpUG', '2.jpg', 100, 'Mbhh9pqjeGFvcuMII7mGvVC259tiO9QExjjUwMWbDQwNd1y4P89PAx2XKdjg', '2023-07-19 23:32:42', '2023-08-18 08:52:44'),
(3, 'Quynn Munoz', 'cimi@mailinator.com', NULL, '$2y$10$JjvP8LSF2mXkSt75ADqL8O66NLbge7sTZHnAFHSRlk/7/Za82M3vu', NULL, 2, NULL, '2023-07-21 10:51:34', '2023-07-21 10:51:34'),
(5, 'Barclay Carpenter', 'rudyc@mailinator.com', NULL, '$2y$10$w8IenNVlyxUoaTlSSiVWRu0CNzP9sZQP7NVHQsOxTGjHq7ZY.sA9q', NULL, 1, 'HfujO778l4vCqcx831mQJHLYyTAT7Ii6VZ0caQPdmCUXdZDFirm2aaeUb9T1', '2023-07-24 03:20:48', '2023-07-24 03:20:48'),
(7, 'Grant Juarez', 'hupapopyx@mailinator.com', NULL, '$2y$10$M1hK1GM5M./kEZGuldLIwOX8mdp.GzLvk0kghJipow/4taj4Q/OGe', NULL, 2, NULL, NULL, NULL),
(9, 'Ina Spears', 'febu@mailinator.com', NULL, '$2y$10$ZRHfiAXtIQjPHlAHJwifQO0U2609Dhz4RWgJqyRmqzH0i76dVPlZe', NULL, 3, NULL, NULL, NULL),
(10, 'Michael Rhodes', 'ryzo@mailinator.com', NULL, '$2y$10$WF4iRYO75u7t4SlwnqJpHOsWTP7uQrpFUVEIGycf9EaLQTNQFJNJq', NULL, 4, NULL, NULL, NULL),
(11, 'Doris Weber', 'wejixasen@mailinator.com', NULL, '$2y$10$z8YI5hexXzf9GxMIvXLKiuu18XjDNleDbXiO9kKqBSJVLGwhZ22GC', NULL, 3, NULL, NULL, NULL),
(12, 'Shana Serrano', 'zapamaqofe@mailinator.com', NULL, '$2y$10$Z4/4wy3mPyBCW3iDbhKuGuqntK7bwBu7baQGXfH82IK6lyNM16RJW', NULL, 0, NULL, NULL, NULL),
(13, 'Clayton Mckee', 'puregu@mailinator.com', NULL, '$2y$10$/Na1uXeAuYfgylIxPQr5oeukAnX85g80N2P6x0o4gRJwwCVdIWiDC', NULL, 2, NULL, NULL, NULL),
(14, 'Jaquelyn Vasquez', 'kuma@mailinator.com', NULL, '$2y$10$aWyc3X55UWGbrOJJemS.weY7Sx4oNFMj5ug2aCcZJ.c1iONsSaXia', NULL, 4, NULL, NULL, NULL),
(15, 'Chanda Wilkins', 'wihakufa@mailinator.com', NULL, '$2y$10$Wjk5GpNv/VjfaHndeOduJe0cTwaefRNamB.PIjUTyuS0u0Lf4634a', NULL, 4, NULL, NULL, NULL),
(16, 'Kermit Anderson', 'veficoton@mailinator.com', NULL, '$2y$10$zdzCUGHnoHNl5KwbgaikO.7kpYalG77EJquclvh9/JMCYRneKQtTC', NULL, 4, NULL, NULL, NULL),
(18, 'Ima Ortega', 'xamoqequxo@mailinator.com', NULL, '$2y$10$ttco9wTSHQiLihuzav3EV.43hRzwt3MGCCHlrreJj4mL7tJ/3Ogb2', NULL, 3, NULL, NULL, NULL),
(19, 'Saimon', 'saimon152166@gmail.com', NULL, '$2y$10$kyx7LwQycIqN06C1NzMYpeUof7Ez.sRFdF4HK.zcnZqkTsDsIV/KG', NULL, 2, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copyrights`
--
ALTER TABLE `copyrights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer1s`
--
ALTER TABLE `footer1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer2s`
--
ALTER TABLE `footer2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer3s`
--
ALTER TABLE `footer3s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer4s`
--
ALTER TABLE `footer4s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer1s`
--
ALTER TABLE `offer1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer2s`
--
ALTER TABLE `offer2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `copyrights`
--
ALTER TABLE `copyrights`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer1s`
--
ALTER TABLE `footer1s`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer2s`
--
ALTER TABLE `footer2s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer3s`
--
ALTER TABLE `footer3s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `footer4s`
--
ALTER TABLE `footer4s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `offer1s`
--
ALTER TABLE `offer1s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offer2s`
--
ALTER TABLE `offer2s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
