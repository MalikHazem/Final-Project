-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 أبريل 2022 الساعة 14:47
-- إصدار الخادم: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oceana`
--

-- --------------------------------------------------------

--
-- بنية الجدول `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `failed_jobs`
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
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_29_155800_create_cities_table', 1),
(6, '2022_03_29_164919_create_orders_table', 1),
(7, '2022_03_30_190545_create_users_paintings_table', 1),
(8, '2022_03_30_190729_create_paintings_table', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `painting_id` int(11) NOT NULL,
  `price` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `paintings`
--

CREATE TABLE `paintings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `category` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `paintings`
--

INSERT INTO `paintings` (`id`, `p_name`, `a_name`, `image`, `details`, `price`, `available`, `date`, `category`, `created_at`, `updated_at`) VALUES
(1, 'ahmad', 'irzeqat', 'C:\\Users\\ALYAMEN.PS\\Desktop\\Project\\Project\\public\\images\\5555.jpg', 'gfrgrghjyh\r\nhjhjhjhj\r\njjjjj', '200', 'no', '2022-04-27', 'رسم', NULL, NULL),
(2, 'بيبيب', 'يبيبيب', 'C:\\Users\\ALYAMEN.PS\\Desktop\\Project\\Project\\public\\images\\bmw-m4-gt_1572661152.jpg', 'ببببببببببببب\r\nاتااااااااا\r\nلاىىىىىىى', '500', 'نعم', '2022-04-02', 'طبيعة', NULL, NULL),
(3, 'cccccccccccccc', 'dddddddddddd', '', 'ccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnngggggggggggggggggggggggggggggggggggggggggggggggggggggg', '300', 'no', '2022-04-28', 'طبيعة', NULL, NULL),
(4, 'vvvvvvv', 'ssssssssssss', '', 'rrrrrrrrrrrrrrrrrrrrrrrrrrbbbbbbbbbbbbbbbbbb\r\niiiiiiiiiii\r\njkjkjk\r\nhjhkhj', '500', 'no', '2022-04-06', 'رسم', NULL, NULL),
(5, 'nnnnnnnnn', 'wewwe', '', 'wewewew\r\n;;;\r\nhjhjh\r\nhyuyu\r\n', '400', 'yes', '2022-04-27', 'رسم حر', NULL, NULL),
(6, 'nnnnnnnnnلالالالالا', 'محمحمحم', '', 'لالالالالالالالالالالالالالالالالالا\r\nررررررررررررررر\r\nءءءءءءءءءءءءءء', '500', 'yes', '2022-04-01', 'رسم حر', NULL, NULL),
(7, 'nnnnnnnnn', 'طشطشطشط', '', 'شيسسيسيبسيب', '500', 'no', '2022-04-29', 'رسم حر', NULL, NULL),
(8, 'للللللللل', 'irzeqat', 'public\\images\\bmw-m4-gt_1572661152.jpg', 'لالالالالالالالالالالالالالالابببببببببببببببببببب', '600', 'yes', '2022-04-28', 'طبيعة', NULL, NULL),
(9, 'cccccccccccccc', 'dddddddddddd', '', 'لالاىلاىىلاىلالاوةاتا\r\nاببب\r\n', '7000', 'no', '2022-04-01', 'رسم حر', NULL, NULL),
(10, 'cccccccccccccc', 'irzeqat', '', 'xxxxxxx\r\nm,,,,,,,,,,,\r\n', '600', 'no', '2022-04-09', 'رسم حر', NULL, NULL),
(11, 'vvvvvvv', 'wewwe', '', 'ccccccccccc\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '600', 'yes', '2022-04-24', 'رسم', NULL, NULL),
(12, 'nnnnnnnnn', 'wewwe', '', 'mmmmmmmmmmmmmmmmmmm\r\n\r\n\r\n', '200', 'no', '2022-04-09', 'طبيعة', NULL, NULL),
(13, 'ahmad', 'محمحمحم', '', '\r\n\r\n\r\n\r\n\r\n', '7000', 'no', '2022-04-06', 'طبيعة', NULL, NULL),
(14, 'vvvvvvv', 'irzeqat', '', 'lllllllll\r\nmmmmm\r\nnnnnn\r\n', '600', 'yes', '2022-04-06', 'طبيعة', NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `personal_access_tokens`
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
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `permissions` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `users_paintings`
--

CREATE TABLE `users_paintings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `painting_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
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
-- Indexes for table `paintings`
--
ALTER TABLE `paintings`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_paintings`
--
ALTER TABLE `users_paintings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paintings`
--
ALTER TABLE `paintings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_paintings`
--
ALTER TABLE `users_paintings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
