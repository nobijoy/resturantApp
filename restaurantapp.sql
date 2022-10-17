-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 11:10 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurantapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutpages`
--

CREATE TABLE `aboutpages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_2_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_2_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_2_short_note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_2_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_3_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_3_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_3_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_4_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_4_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_4_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_5_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_5_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_5_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_6_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_6_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_6_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_7_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_7_short_note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_7_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutpages`
--

INSERT INTO `aboutpages` (`id`, `cover_img`, `title`, `short_note`, `section_2_img`, `section_2_title`, `section_2_short_note`, `section_2_description`, `section_3_img`, `section_3_title`, `section_3_description`, `section_4_img`, `section_4_title`, `section_4_description`, `section_5_img`, `section_5_title`, `section_5_description`, `section_6_img`, `section_6_title`, `section_6_description`, `section_7_title`, `section_7_short_note`, `section_7_description`, `created_at`, `updated_at`) VALUES
(1, '1665573553cover_img.png', 'title', NULL, '1665573553section_2_img.png', 'title', 'note', 'desc', '1665573553section_3_img.png', 'title', 'desc', '1665573553section_4_img.png', 'title', 'desc', '1665573553section_5_img.png', 'title', 'desc', '1665573553section_6_img.png', 'title', 'desc', 'title', 'note', 'desc', '2022-10-12 05:19:13', '2022-10-12 05:27:08');

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `details`, `created_at`, `updated_at`) VALUES
(1, 'title', '<p><b><u>description</u></b></p>', '2022-10-13 02:47:07', '2022-10-16 00:57:23');

-- --------------------------------------------------------

--
-- Table structure for table `app_settings`
--

CREATE TABLE `app_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_nav_bg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_nav_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_nav_scroll_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_bg_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `app_settings`
--

INSERT INTO `app_settings` (`id`, `app_title`, `logo`, `favicon`, `top_nav_bg`, `top_nav_color`, `top_nav_scroll_color`, `primary_color`, `primary_bg_color`, `created_at`, `updated_at`) VALUES
(1, 'Restaurant App', '1665568132favicon.png', '1665568428favicon.png', '#ff0f0f', '#002e18', '#b34d4d', '#f2f2f2', '#2ee7ff', '2022-10-11 03:30:10', '2022-10-12 03:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `title`, `details`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 'Dhaka is an Amazing city', 1, '2022-10-15 05:12:25', '2022-10-15 23:35:24'),
(2, 'Rajshahi', 'Rajshahi is a beautiful place', 0, '2022-10-15 05:34:36', '2022-10-16 00:06:55'),
(3, 'Barishal', 'Most Beautiful City', 1, '2022-10-16 00:07:23', '2022-10-16 00:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `bookingpages`
--

CREATE TABLE `bookingpages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookingpages`
--

INSERT INTO `bookingpages` (`id`, `cover_img`, `title`, `short_note`, `created_at`, `updated_at`) VALUES
(1, '1665576043cover_img.png', 'title', 'note', '2022-10-12 05:58:37', '2022-10-12 06:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `contactpages`
--

CREATE TABLE `contactpages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_care_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recruitment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accounts` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payroll` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactpages`
--

INSERT INTO `contactpages` (`id`, `cover_img`, `title`, `short_note`, `address`, `phone_number`, `customer_care_email`, `recruitment`, `accounts`, `payroll`, `created_at`, `updated_at`) VALUES
(1, '1665575346cover_img.png', 'title', 'note', 'address', '01846434816', 'nobijoy@gmail.com', 'ok', '42543', '111', '2022-10-12 05:48:47', '2022-10-12 05:49:06');

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
-- Table structure for table `homepages`
--

CREATE TABLE `homepages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carousel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_2_img_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_2_img_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_2_img_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_img_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_img_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepages`
--

INSERT INTO `homepages` (`id`, `carousel`, `section_2_img_1`, `section_2_img_2`, `section_2_img_3`, `section_img_3`, `section_img_4`, `created_at`, `updated_at`) VALUES
(1, '16656393191carousel.jpeg,16656393202carousel.jpeg,16656393203carousel.jpg', '1665639155section_2_img_1.png', '1665639329section_2_img_2.png', '1665568407section_2_img_3.png', '1665568415section_img_3.png', '1665568420section_img_4.png', '2022-10-12 03:53:05', '2022-10-12 23:35:29');

-- --------------------------------------------------------

--
-- Table structure for table `lunch_menus`
--

CREATE TABLE `lunch_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lunch_menus`
--

INSERT INTO `lunch_menus` (`id`, `restaurant_id`, `item`, `price`, `created_at`, `updated_at`) VALUES
(2, 1, 'Plain Rice', 35, '2022-10-17 02:59:00', '2022-10-17 02:59:00');

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
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(6, '2022_10_02_105510_create_sessions_table', 2),
(7, '2022_10_11_084441_create_app_settings_table', 3),
(9, '2022_10_12_085243_create_homepages_table', 4),
(10, '2022_10_12_100916_create_restaurantpages_table', 5),
(11, '2022_10_12_103113_create_aboutpages_table', 6),
(12, '2022_10_12_112827_create_contactpages_table', 7),
(13, '2022_10_12_115201_create_bookingpages_table', 8),
(14, '2022_10_13_081709_create_abouts_table', 9),
(16, '2022_10_13_100615_create_areas_table', 10),
(20, '2022_10_16_090917_create_restaurants_table', 11),
(21, '2022_10_17_082957_create_lunch_menus_table', 12);

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
-- Table structure for table `restaurantpages`
--

CREATE TABLE `restaurantpages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurantpages`
--

INSERT INTO `restaurantpages` (`id`, `cover_img`, `title`, `created_at`, `updated_at`) VALUES
(1, '1665570353cover_img.png', 'title', '2022-10-12 04:25:53', '2022-10-12 04:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_card` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinner_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `area_id`, `name`, `cover_img`, `short_note`, `gallery_img`, `menu_card`, `address`, `map`, `email`, `contact_number`, `lunch_time`, `dinner_time`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Le Meridian', '1665983862cover_img.jpg', 'Le Méridien is an upscale, design-focused international hotel brand with a European perspective. It was originally founded by Air France in 1972 and was later based in the United Kingdom. Marriott International now owns the chain', '16659838631gallery_img.webp,16659838632gallery_img.jpg,16659838643gallery_img.jpg,16659838644gallery_img.jpg', '1665997823menucard.pdf', '79/A Commercial Area Airport Rd, Dhaka 1229', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.504973883158!2d90.41603411498298!3d23.836195884547127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c700023fd427%3A0x641522159780e7e2!2sLe%20M%C3%A9ridien%20Dhaka!5e0!3m2!1sen!2sbd!4v1665983701089!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'lemeridian@example.com', '2164654', '1pm - 4pm', '7pm - 10pm', 1, '2022-10-16 23:17:44', '2022-10-17 03:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2nArt7078yOuLzoqIZn6ZBDo4LsOSrgNeV0T5RlM', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiSFFCeno3ZmlXbHVCdFNPdlQwNTJVbGd2V0VvdzV4TVZCb1YyRTFqUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4MC9yZXN0YXVyYW50QXBwL3B1YmxpYy9yZXN0YXVyYW50Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkMzNBYnFYa1NZb0pubEVCeWdmZXV1ZVhmbk11WkRvcTFKci9tTnE2OFA5VWFSTVBJUG1MSXEiO3M6NToicG9wdXAiO2k6MTt9', 1665997823);

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@admin.com', NULL, '$2y$10$33AbqXkSYoJnlEBygfeuueXfnMuZDoq1Jr/mNq68P9UaRMPIPmLIq', NULL, NULL, NULL, NULL, '2022-10-02 05:24:21', '2022-10-02 05:24:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutpages`
--
ALTER TABLE `aboutpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_settings`
--
ALTER TABLE `app_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookingpages`
--
ALTER TABLE `bookingpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactpages`
--
ALTER TABLE `contactpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homepages`
--
ALTER TABLE `homepages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lunch_menus`
--
ALTER TABLE `lunch_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lunch_menus_restaurant_id_foreign` (`restaurant_id`);

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
-- Indexes for table `restaurantpages`
--
ALTER TABLE `restaurantpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurants_area_id_foreign` (`area_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `aboutpages`
--
ALTER TABLE `aboutpages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_settings`
--
ALTER TABLE `app_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bookingpages`
--
ALTER TABLE `bookingpages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactpages`
--
ALTER TABLE `contactpages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homepages`
--
ALTER TABLE `homepages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lunch_menus`
--
ALTER TABLE `lunch_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurantpages`
--
ALTER TABLE `restaurantpages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lunch_menus`
--
ALTER TABLE `lunch_menus`
  ADD CONSTRAINT `lunch_menus_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`);

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
