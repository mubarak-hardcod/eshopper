-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2023 at 02:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshopper`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Acne', 'Acne', '1', '2023-01-12 18:30:59', '2023-01-12 18:46:13'),
(2, 'Grüne Erde', 'Grüne-Erde', '1', '2023-01-12 18:30:59', '2023-01-18 14:59:49'),
(3, 'Albiro', 'Albiro', '1', '2023-01-12 18:30:59', '2023-01-12 18:46:22'),
(4, 'Ronhill', 'Ronhill', '1', '2023-01-12 18:30:59', '2023-01-12 18:46:25'),
(5, 'Oddmolly', 'Oddmolly', '1', '2023-01-12 18:30:59', '2023-01-12 18:46:30'),
(6, 'Boudestijn', 'Rösch creative culture', '0', '2023-01-12 18:30:59', '2023-01-17 09:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sportswear ', 'Sportswear', '1', '2023-01-12 17:32:41', '2023-01-12 18:46:42'),
(2, 'Mens ', 'Mens', '1', '2023-01-12 17:32:41', '2023-01-12 18:46:46'),
(3, 'Womens ', 'Womens ', '1', '2023-01-12 17:32:41', '2023-01-12 18:46:50'),
(4, 'Kids', 'Kids', '1', '2023-01-12 17:32:41', '2023-01-12 18:46:53'),
(5, 'Fashion', 'Fashion', '1', '2023-01-12 17:32:41', '2023-01-12 18:46:56'),
(6, 'Households', 'Households', '1', '2023-01-12 17:32:41', '2023-01-12 18:47:04'),
(7, 'Interiors', 'Interiors', '1', '2023-01-12 17:32:41', '2023-01-12 18:47:07'),
(8, 'Clothing', 'Clothing', '0', '2023-01-12 17:32:41', '2023-01-12 17:32:41'),
(9, 'Bags', 'Bags', '0', '2023-01-12 17:32:41', '2023-01-12 17:32:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `middle_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) NOT NULL,
  `address_1` varchar(200) NOT NULL,
  `address_2` varchar(200) DEFAULT NULL,
  `country` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `mobile_number` varchar(200) DEFAULT NULL,
  `fax` varchar(200) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `sub_total` varchar(200) NOT NULL,
  `tax` varchar(200) NOT NULL,
  `shipping_fee` varchar(200) NOT NULL,
  `final_total` varchar(200) NOT NULL,
  `payment_option` enum('Cash On Delivery','UPI','Paypal') NOT NULL DEFAULT 'Cash On Delivery',
  `status` enum('Ordered','Cancelled','Dispatched','Delivered') NOT NULL DEFAULT 'Ordered',
  `customer_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `email`, `first_name`, `middle_name`, `last_name`, `address_1`, `address_2`, `country`, `state`, `phone`, `mobile_number`, `fax`, `message`, `sub_total`, `tax`, `shipping_fee`, `final_total`, `payment_option`, `status`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, 'mubarak', 'mubarak@Gmail.com', 'mubarak', NULL, 'thajudeen', '4/22,muslim street,n.pudhukottai,namakkal', NULL, 'Pakistan', 'Pakistan', '7397569661', NULL, NULL, NULL, '3198', '150', 'Free', '3348', 'Cash On Delivery', 'Cancelled', 4, '2023-01-25 05:49:07', '2023-01-25 11:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `order_infos`
--

CREATE TABLE `order_infos` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_infos`
--

INSERT INTO `order_infos` (`id`, `order_id`, `product`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 8, 1, 1999, '2023-01-25 05:49:07', '2023-01-25 05:49:07'),
(2, 1, 13, 1, 1199, '2023-01-25 05:49:07', '2023-01-25 05:49:07');

-- --------------------------------------------------------

--
-- Table structure for table `order_statuses`
--

CREATE TABLE `order_statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_statuses`
--

INSERT INTO `order_statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Ordered', '2023-01-23 13:05:19', '2023-01-23 13:05:19'),
(2, 'Dispatched', '2023-01-23 13:05:19', '2023-01-23 13:05:19'),
(3, 'Delivered', '2023-01-23 13:05:19', '2023-01-23 13:05:19'),
(4, 'Cancelled', '2023-01-23 13:05:19', '2023-01-23 13:05:19');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `sub_category` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `availability` enum('In Stock','Out of Stock') NOT NULL DEFAULT 'In Stock',
  `conditions` enum('New','Refurnished') NOT NULL DEFAULT 'New',
  `status` enum('1','0') DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand`, `category`, `sub_category`, `name`, `slug`, `image`, `price`, `description`, `availability`, `conditions`, `status`, `created_at`, `updated_at`) VALUES
(5, 4, 4, 15, 'kids shirt', 'kids-shirt', 'pexels-victoria-akvarel-1619801(1)_1673953614.jpg', 500, 'colourfull dress and attraction look', 'In Stock', 'New', '1', '2023-01-17 10:45:06', '2023-01-17 11:06:54'),
(6, 4, 4, 15, 'smart dress', 'smart-dress', 'pexels-amy-11307015_1673955744.jpg', 1520, 'smart look very different', 'In Stock', 'New', '1', '2023-01-17 10:46:21', '2023-01-17 11:42:24'),
(7, 4, 4, 16, 'yellow fashion', 'yellow-fashion', 'pexels-victoria-akvarel-1619697_1673955789.jpg', 1599, 'yellow colection', 'In Stock', 'New', '1', '2023-01-17 11:43:09', '2023-01-24 17:12:52'),
(8, 3, 4, 16, 'red look', 'red-look', 'pexels-tuấn-kiệt-jr-1765423_1673955883.jpg', 1999, 'red collection and smart look', 'In Stock', 'New', '1', '2023-01-17 11:44:43', '2023-01-17 11:44:43'),
(9, 4, 4, 16, 'kids shirt', 'kids-shirt', 'pexels-anna-shvets-3771669_1673955978.jpg', 2000, 'light weight dress and summer collection', 'In Stock', 'New', '1', '2023-01-17 11:46:18', '2023-01-17 11:46:18'),
(10, 4, 4, 15, 'shirt and pant', 'shirt-and-pant', 'pexels-nicole-francoise-969373_1673956060.jpg', 5999, 'shirt and pant combo offer all time avilable', 'In Stock', 'New', '1', '2023-01-17 11:47:40', '2023-01-18 15:44:20'),
(11, 4, 4, 15, 'dress-1', 'dress-1', 'pexels-victoria-akvarel-1619697_1673956214.jpg', 2000, 'smart dresses', 'In Stock', 'New', '1', '2023-01-17 11:50:14', '2023-01-18 15:44:00'),
(12, 4, 4, 18, 't-shirt', 't-shirt', 'pexels-natalie-bond-3227263_1673956547.jpg', 3999, 'fashion on all time', 'In Stock', 'New', '1', '2023-01-17 11:55:47', '2023-01-18 15:43:57'),
(13, 4, 4, 18, 'kids t-shirt', 'kids-t-shirt', 'pexels-victoria-akvarel-1650281_1673956603.jpg', 1199, 'summer collection', 'In Stock', 'New', '1', '2023-01-17 11:56:43', '2023-01-17 11:56:43'),
(14, 4, 4, 15, 'white-shirt', 'white-shirt', 'pexels-amy-11307016_1674036434.jpg', 1455, 'most likeble shirt', 'In Stock', 'New', '1', '2023-01-18 10:07:14', '2023-01-18 10:07:14'),
(15, 4, 4, 15, 'black shirt', 'black-shirt', 'pexels-rene-asmussen-1684227_1674036483.jpg', 1555, 'most likeble shirt', 'In Stock', 'New', '1', '2023-01-18 10:08:03', '2023-01-18 10:08:03'),
(16, 5, 4, 15, 'smart shirtss', 'smart-shirtss', 'pexels-victoria-akvarel-1650281_1674036557.jpg', 1666, 'most like shirt', 'In Stock', 'New', '1', '2023-01-18 10:09:17', '2023-01-18 10:11:16'),
(17, 5, 4, 15, 'smart shirts', 'smart-shirts', 'pexels-victoria-akvarel-1650281_1674036664.jpg', 1666, 'most like shirt', 'In Stock', 'New', '1', '2023-01-18 10:11:04', '2023-01-18 10:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categorys`
--

CREATE TABLE `sub_categorys` (
  `id` int(11) NOT NULL,
  `category_name` int(11) NOT NULL DEFAULT 1,
  `name` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_categorys`
--

INSERT INTO `sub_categorys` (`id`, `category_name`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nike ', 'Nike ', '1', '2023-01-13 10:06:17', '2023-01-18 18:45:16'),
(2, 1, 'Under Armour ', 'Under_Armour ', '1', '2023-01-13 10:06:17', '2023-01-18 18:45:21'),
(3, 1, 'Adidas ', 'Adidas ', '1', '2023-01-13 10:06:17', '2023-01-18 19:42:46'),
(4, 1, 'Puma', 'Puma', '1', '2023-01-13 10:06:17', '2023-01-18 19:42:44'),
(5, 1, 'ASICS', 'ASICS', '1', '2023-01-13 10:06:17', '2023-01-18 19:42:41'),
(6, 2, 'shirts', 'shirts', '1', '2023-01-13 10:08:54', '2023-01-18 19:42:37'),
(7, 2, 'tshirts', 'tshirts', '1', '2023-01-13 10:08:54', '2023-01-18 19:42:33'),
(8, 2, 'track pant', 'track pant', '1', '2023-01-13 10:08:54', '2023-01-18 19:42:29'),
(9, 6, 'jean', 'jean', '1', '2023-01-13 10:08:54', '2023-01-18 19:42:21'),
(10, 6, 'night wear', 'night wear', '1', '2023-01-13 10:08:54', '2023-01-18 19:42:19'),
(11, 6, 'tops', 'tops', '1', '2023-01-13 10:10:55', '2023-01-18 19:42:16'),
(12, 6, 'shirts', 'shirts', '1', '2023-01-13 10:10:55', '2023-01-18 19:42:13'),
(13, 5, 'jeans', 'jeans', '1', '2023-01-13 10:10:55', '2023-01-18 19:42:11'),
(14, 5, 'night wear', 'night_wear', '1', '2023-01-13 10:10:55', '2023-01-18 19:42:09'),
(15, 4, 'smart look', 'smart_look', '1', '2023-01-13 10:12:40', '2023-01-18 18:45:28'),
(16, 4, 'shirt & pant', 'shirt_&_pant', '1', '2023-01-13 10:12:40', '2023-01-18 18:45:33'),
(18, 4, 'summer', 'summer', '1', '2023-01-13 09:54:03', '2023-01-18 18:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user11', 'user11@gmail.com', NULL, '$2y$10$UpeYndboD.NlElJsIaUUZemV2XEyPRuNd0fB7eER./ijvoB8mZ5Wu', NULL, '2023-01-18 01:09:09', '2023-01-18 23:04:12'),
(2, 'user2', 'user2@gmail.com', NULL, '$2y$10$nLtrVQmYwxT45SDmyyQmUOs2HxWKdekYoPMbiMA4SHD2AbHFGwh3m', NULL, '2023-01-18 01:47:47', '2023-01-18 01:47:47'),
(3, 'user4', 'users4@gmail.com', NULL, '$2y$10$fpUl/u/L/N3qEaTSatExL.LQxv.jIgri3ZRMwrvIaM.0B8YDUo23K', NULL, '2023-01-18 03:51:34', '2023-01-18 03:51:45'),
(4, 'user1', 'user1@gmail.com', NULL, '$2y$10$aA1ULULGzo0o4y1KEyfWa.oN21IVtlfnNG346aS8QuVlQgsyqCWJK', NULL, '2023-01-19 22:18:34', '2023-01-19 22:18:34'),
(5, 'user3', 'user3@gmail.com', NULL, '$2y$10$Vr/er.9EZq0WlV.aughuouv5tROyJCEZ758AohQQ/Dh.TB4NoHrNO', NULL, '2023-01-24 00:16:08', '2023-01-24 00:16:08'),
(6, 'mubarak', 'mubarak@gmail.com', NULL, '$2y$10$1qcvfBheYiOVSonlsGMGCe8Eqbij43rkko16KNKc5xJMNjXkqGUi6', NULL, '2023-01-24 00:19:55', '2023-01-24 00:19:55'),
(7, 'user6', 'user6@gmail.com', NULL, '$2y$10$97s1SBRcuMEISblvzpU5oO3kCMzdu8oUpRfBMXpLzpi6QEfHY.W8K', NULL, '2023-01-24 00:29:31', '2023-01-24 00:29:31'),
(8, 'user7', 'user@gmal.com', NULL, '$2y$10$3BRj3gkm82erlod1/diCPeitj7hd/JQ/IBVix6j2WsEjWySSF6xYm', NULL, '2023-01-24 00:35:26', '2023-01-24 00:35:26'),
(9, 'user8', 'user8@Gmail.com', NULL, '$2y$10$lmiHv2jw9MlNCierQ0NOje2oDWkosWLpHgcJOxSG3jL35NacTMP5G', NULL, '2023-01-24 00:37:46', '2023-01-24 00:37:46'),
(10, 'user9', 'user9@Gmail.com', NULL, '$2y$10$kgsW.GDOc2zseUMC2j.QduLgX5s8o6ky/mU2PxamfOZV79hIjQ7Ma', NULL, '2023-01-24 00:41:55', '2023-01-24 00:41:55'),
(11, 'user10', 'user@gmail.com', NULL, '$2y$10$ky3bZWlDM2ObkH.c/VaVueGADwQoeLTxHaSxeMD7zmJksrOzoalqS', NULL, '2023-01-24 00:58:32', '2023-01-24 00:58:32'),
(12, 'user12', 'user12@gmail.com', NULL, '$2y$10$bCeuVhp4K6Ap9ba7xrZ0J.plG2QSHWynjzjIm7J.JdaLlWtypk/cK', NULL, '2023-01-24 01:02:41', '2023-01-24 01:02:41'),
(13, 'user13', 'user13@gmail.com', NULL, '$2y$10$gIFTpAbUl1RCOSJdeiHY5eDAcRXFPHOYZNfv.JVjqUgkTVxnGnpGW', NULL, '2023-01-24 01:03:53', '2023-01-24 01:03:53'),
(14, 'aas', 'asas@gmail.com', NULL, '$2y$10$5tons6bm4jn3eCGlw4E1qeWfCiOds0HPLj25zYsAIJmybZXpGkPeC', NULL, '2023-01-24 01:07:26', '2023-01-24 01:07:26'),
(15, 'asdasd', 'asdasd@gmail.com', NULL, '$2y$10$yVTAvvaP.a170GR.frOLfOi5IuHULSx0.uBhuxHBl.8dYU6P0jn0S', NULL, '2023-01-24 01:08:02', '2023-01-24 01:08:02'),
(16, 'user14', 'user14@gmail.com', NULL, '$2y$10$Tp3.6YZwHDgtsu1GG.AUsuzPNWxeAJqJd9Hi1LYWW5meLKc/SyoDK', NULL, '2023-01-24 01:53:18', '2023-01-24 01:53:18'),
(17, 'admin11', 'admin@gmamil.com', NULL, '$2y$10$e.3GIjcAm9RZFWEt1GAnKuw1/UDMUNm67HcKehnQRqVK/iW2D4mb6', NULL, '2023-01-24 02:02:04', '2023-01-24 02:02:04');

-- --------------------------------------------------------

--
-- Table structure for table `whishlists`
--

CREATE TABLE `whishlists` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `whishlists`
--

INSERT INTO `whishlists` (`id`, `product_id`, `customer_id`, `created_at`, `updated_at`) VALUES
(54, 5, 4, '2023-01-25 12:07:20', '2023-01-25 12:07:20'),
(55, 6, 4, '2023-01-25 12:07:20', '2023-01-25 12:07:20'),
(56, 7, 4, '2023-01-25 12:07:21', '2023-01-25 12:07:21'),
(57, 10, 4, '2023-01-25 12:07:23', '2023-01-25 12:07:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `order_infos`
--
ALTER TABLE `order_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_statuses`
--
ALTER TABLE `order_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `sub_categorys`
--
ALTER TABLE `sub_categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whishlists`
--
ALTER TABLE `whishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_infos`
--
ALTER TABLE `order_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sub_categorys`
--
ALTER TABLE `sub_categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `whishlists`
--
ALTER TABLE `whishlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
