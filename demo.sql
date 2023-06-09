-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2023 at 09:00 PM
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
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pricing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`uuid`, `code`, `name`, `phone`, `email`, `address`, `birthday`, `pricing`, `brand`, `status`, `created_at`, `updated_at`) VALUES
('15f9fd85-efde-4fef-b530-1c5a2c769a97', 'Co00005', 'محمد', '+201024346011', 'mgalal8866@gmail.com', NULL, '2/3/1991', '1', 'شركة', 1, '2023-04-29 12:36:11', '2023-04-29 12:36:11'),
('a7f3fdb0-9f61-4f04-87bd-858159557010', '32323', 'Mohamed Galal', '12345', 'mgalal8866@gmail.com', NULL, NULL, NULL, '212', 1, '2023-04-29 18:56:41', '2023-04-29 18:56:41'),
('aa33a232-d408-419a-8430-0127016ec2a7', '32323', 'Mohamed Galalsssss', '12345', 'mgalal8866@gmail.com', NULL, NULL, NULL, NULL, 1, '2023-04-29 18:53:55', '2023-04-29 18:53:55'),
('c9281328-c39b-471c-a287-7bf978e22b67', 'Co00003', 'Mohamed Galal', '+201024346011', 'mgalal8866@gmail.com', NULL, '2/3/1990', '2', 'مؤسسة', 2, '2023-04-29 12:29:09', '2023-04-29 12:29:09'),
('eef7fff4-3089-4754-9e1d-9e215c8146b4', 'CO00006', 'mohamed', '+201024346011', 'mgalal8866@gmail.com', NULL, '2/3/1988', '3', 'محل', 1, '2023-04-29 16:29:56', '2023-04-29 16:29:56');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_28_195400_create_customers_table', 2),
(6, '2023_04_28_200124_create_produts_table', 2),
(7, '2023_04_28_202534_create_units_table', 2);

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
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alert_qty` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`uuid`, `name`, `barcode`, `description`, `price`, `main_unit`, `sub_unit`, `per_unit`, `alert_qty`, `created_at`, `updated_at`) VALUES
('0f50f578-1227-4ffc-942b-51f2e93b6cdd', 'خلاط', '32421345', '<p><strong>dssdsd</strong></p>', '553', 'علبة', 'وحده', '1', '10', '2023-04-29 17:54:19', '2023-04-29 17:54:19'),
('3423k-kfksdfksd-34234', 'PC', '3234234', 'TEsT', NULL, 'كرتونة', 'قطعه', '1', '12', NULL, NULL),
('60262ff0-e2c0-47c2-a398-4ad1d1c79d35', 'شاشة', '2523452345', '<p><strong>addadadas</strong></p>', '523', 'كرتونة', 'قطعه', '4', '31', '2023-04-29 17:55:59', '2023-04-29 17:55:59'),
('86b0af0b-e858-4160-9c10-8ae424880f13', 'موبايل', '32463462', '<p class=\"ql-align-center\"><img src=\"data:image/png;base64,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\"></p>', '123', 'قطعة', NULL, '1', '442', '2023-04-29 17:58:59', '2023-04-29 17:58:59');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mohamed', 'admin@gmail.com', NULL, '$2y$10$h4yvWhwBFFa1Zp0VHVmoB.WGuBYQp5TB4zMZdKhR3Nj0lfGwRHnKe', NULL, '2023-04-28 00:05:24', '2023-04-28 00:05:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`uuid`);

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
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`uuid`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
