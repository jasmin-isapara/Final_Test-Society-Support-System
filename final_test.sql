-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 03:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navbar_status` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `navbar_status`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Water', 'Water', 'Any Kind Of  Solve The Water Problem', '1656654832.jpg', 0, 0, 1, '2022-07-01 00:16:49', '2022-07-01 00:23:52'),
(2, 'Electricity', 'Electricity', 'Any Kinds Of Electricity problem Solution', '1656656706.jpeg', 0, 0, 1, '2022-07-01 00:19:10', '2022-07-01 00:55:06'),
(3, 'Gas Line', 'Gas Line', 'Gas Line Problem Solutions', '1656654907.jpeg', 0, 0, 1, '2022-07-01 00:25:07', '2022-07-01 00:25:07'),
(4, 'Polution', 'Polution', 'Polution PRoblem', '1656671834.jpg', 0, 0, 1, '2022-07-01 05:07:14', '2022-07-01 05:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `complain_date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`id`, `category_id`, `name`, `slug`, `description`, `complain_date`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'Water Problem', 'water problem', 'Solve the problem of  water', '2022-07-01', 0, 1, '2022-07-01 03:29:31', '2022-07-01 05:05:18'),
(2, 2, 'Electricity Problem', 'Electricity', 'Electricity problem', '2022-07-01', 0, 1, '2022-07-01 03:40:00', '2022-07-01 05:08:51'),
(4, 3, 'Leakage Gasline', 'gasline', 'Gasline Leakage', '2022-07-01', 0, 1, '2022-07-01 03:54:07', '2022-07-01 05:09:27'),
(5, 4, 'Polution problem', 'problem_polution', 'Polution problem is last five month', '2022-07-01', 0, 1, '2022-07-01 03:57:16', '2022-07-01 05:08:17');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `description`, `created_at`, `updated_at`) VALUES
(1, 'jasmin', 'jasmin.arsenaltech@gmail.com', 'helloo', '2022-07-01 06:46:40', '2022-07-01 06:46:40'),
(2, 'harshil solanki', 'harshil.arsenaltech@gmail.com', 'I have facing the water issue since last 2 month.', '2022-07-01 06:49:43', '2022-07-01 06:49:43'),
(3, 'Shubam Patel', 'shubham@gmail.com', 'water problemm', '2022-07-01 10:39:51', '2022-07-01 10:39:51');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_01_053454_create_categories_table', 2),
(6, '2022_07_01_054200_create_categories_table', 3),
(7, '2022_07_01_083140_create_complains_table', 4),
(9, '2022_07_01_120853_create_contacts_table', 6),
(11, '2022_07_01_105136_create_user_complains_table', 7);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, 1, '$2y$10$3PT2344ZhQFN2.JHLPbBjuAU3qMPYVJkT7MDt7FHKxdwo7EetRjum', NULL, '2022-06-30 23:45:55', '2022-07-01 01:13:26'),
(2, 'Jasmin', 'jasmin.arsenaltech@gmail.com', NULL, 0, '$2y$10$e7TxFSJcmfrq4IWynwESyOwVpOOlpXVDsBptS6lnNQuMMXLmc7hmi', 'lB9H6WroUTtJMFMWPan8bZUoy1qeF9bBDKsQDJCc5zQPPY14k0NYHQI7pPoB', '2022-06-30 23:45:55', '2022-07-01 02:25:25'),
(3, 'Tanvi Patel', 'tanvi@gmail.com', NULL, NULL, '$2y$10$NqV8Lr.FekyxEoT5i7DaN.LqVsmBOBMeCk24ul8IY4UuOJAsHdl7K', NULL, '2022-07-01 02:00:35', '2022-07-01 02:00:35'),
(4, 'Sarthak Dholiya', 'sarthak@gmail.com', NULL, NULL, '$2y$10$u3YNcOr3/WGnfDDIA/1DHOsZDZoAt.R6Itwm3Rr211dhgVITy4Pbi', NULL, '2022-07-03 01:07:49', '2022-07-03 01:07:49'),
(5, 'Meet Desai', 'meet@gmail.com', NULL, NULL, '$2y$10$KAoGyb.x9lt7eKzzEL53K.98z8GPEnntZpXGI6LlMiV.9d5n0PMfW', NULL, '2022-07-03 08:05:37', '2022-07-03 08:05:37');

-- --------------------------------------------------------

--
-- Table structure for table `user_complains`
--

CREATE TABLE `user_complains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_complains`
--

INSERT INTO `user_complains` (`id`, `description`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'dfbgdf', 1, 2, '2022-07-01 08:28:56', '2022-07-01 08:28:56'),
(2, 'last 2 month i have facing this problem', 2, 2, '2022-07-01 10:40:47', '2022-07-01 10:40:47'),
(3, 'cbjhsdhvcsj', 3, 2, '2022-07-01 10:46:25', '2022-07-01 10:46:25'),
(4, 'This is polution problem', 4, 3, '2022-07-01 11:41:53', '2022-07-01 11:41:53'),
(5, 'I have facing this problem last 4 days', 2, 4, '2022-07-03 01:08:37', '2022-07-03 01:08:37'),
(6, 'it is very dangerous issue', 3, 4, '2022-07-03 01:14:12', '2022-07-03 01:14:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `complains_category_id_foreign` (`category_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_complains`
--
ALTER TABLE `user_complains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_complains_user_id_foreign` (`user_id`),
  ADD KEY `user_complains_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_complains`
--
ALTER TABLE `user_complains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complains`
--
ALTER TABLE `complains`
  ADD CONSTRAINT `complains_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_complains`
--
ALTER TABLE `user_complains`
  ADD CONSTRAINT `user_complains_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_complains_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
