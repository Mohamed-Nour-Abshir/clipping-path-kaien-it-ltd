-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 05:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaizen`
--

-- --------------------------------------------------------

--
-- Table structure for table `best_services`
--

CREATE TABLE `best_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `best_services`
--

INSERT INTO `best_services` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Test Best Service', '$120 - $130', '1654924485.webp', '2022-06-10 23:01:23', '2022-06-21 04:55:11'),
(3, 'New Brand Motor Cycle', '$1.30 - $2.00', '1654925310.webp', '2022-06-10 23:28:30', '2022-06-21 04:55:35');

-- --------------------------------------------------------

--
-- Table structure for table `buy_services`
--

CREATE TABLE `buy_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `servicetype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagesno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `needresized` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buy_services`
--

INSERT INTO `buy_services` (`id`, `firstname`, `lastname`, `email`, `phone`, `country`, `servicetype`, `imagesno`, `needresized`, `images`, `instruction`, `created_at`, `updated_at`) VALUES
(11, 'MOHAMEDNUR', 'Abshir', 'mnor32779@gmail.com', '01730931984', 'Bangladesh', 'Clipping Path Service', '100 Images', 'Yes', '1655812849.zip', 'Please I need this service with in two days', '2022-06-21 06:00:49', '2022-06-21 06:00:49');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(5, 'Nour', 'mnor32779@gmail.com', 'MohamedNour', 'sdfhjghjfgfc', '2022-06-11 06:19:48', '2022-06-11 06:19:48'),
(6, 'Nour', 'mnor32779@gmail.com', 'MohamedNour', 'sdfhjghjfgfc', '2022-06-11 06:24:29', '2022-06-11 06:24:29'),
(7, 'MohamedNour', 'mnor32779@gmail.com', 'msdf adan', 'dhjxbv fvnmb', '2022-06-11 06:28:22', '2022-06-11 06:28:22'),
(8, 'MohamedNour', 'mdnourabshir@gmail.com', 'Mohamed Ahmed', 'bvfdhjvhbfvdbcn', '2022-06-11 06:31:46', '2022-06-11 06:31:46'),
(9, 'hgjkg', 'mnor32779@gmail.com', 'dfh', 'drfyth', '2022-06-11 06:32:39', '2022-06-11 06:32:39'),
(10, 'hfcvhg', 'mnor32779@gmail.com', 'ghjfg', 'yfvy', '2022-06-11 06:33:27', '2022-06-11 06:33:27'),
(11, 'MohamedNour', 'mnor32779@gmail.com', 'Mohamed Ahmed', 'hgfyh\n', '2022-06-13 05:58:01', '2022-06-13 05:58:01'),
(12, 'MohamedNour', 'mnor32779@gmail.com', 'Mohamed Ahmed', 'utyg', '2022-06-13 06:17:56', '2022-06-13 06:17:56'),
(13, 'MohamedNour', 'mnor32779@gmail.com', 'ABDIQADIR MUSE', 'sdfedswacvfd', '2022-06-13 06:21:57', '2022-06-13 06:21:57'),
(14, 'MohamedNour', 'mnor32779@gmail.com', 'msdf adan', 'ghjvh\n', '2022-06-13 06:36:01', '2022-06-13 06:36:01'),
(15, 'MohamedNour', 'mnor32779@gmail.com', 'msdf adan', 'ghjvh\n', '2022-06-13 06:43:21', '2022-06-13 06:43:21'),
(17, 'mohamed Nour Abshir', 'appleidnour123@gmail.com', 'cabasho', 'something', '2022-06-15 03:28:02', '2022-06-15 03:28:02'),
(18, 'mohamed Nour Abshir', 'appleidnour123@gmail.com', 'cabasho', 'something', '2022-06-15 03:30:52', '2022-06-15 03:30:52'),
(19, 'Abdi Nur Hashi', 'appleidnour123@gmail.com', 'Wxaan wataa cabasho', 'wax baan yara fahmi wayyy', '2022-06-15 03:36:36', '2022-06-15 03:36:36'),
(20, 'MohamedNour', 'mnor32779@gmail.com', 'Cabasho', 'Lorem20', '2022-06-21 06:15:32', '2022-06-21 06:15:32'),
(21, 'MohamedNour', 'mnor32779@gmail.com', 'Cabasho', 'Lorem', '2022-06-21 06:16:38', '2022-06-21 06:16:38'),
(22, 'MohamedNour', 'mnor32779@gmail.com', 'Cabasho', 'Lorem', '2022-06-21 06:17:39', '2022-06-21 06:17:39'),
(23, 'MohamedNour', 'mnor32779@gmail.com', 'ABDIQADIR MUSE', 'ghnnbvnghn', '2022-06-21 23:34:53', '2022-06-21 23:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'New Course ', 'Unkownn', '1654777137.jpg', '2022-06-09 06:18:57', '2022-06-12 22:44:53'),
(2, 'Web development Course', 'Web development is the building and maintenance of websites it\'s the work that happens..', '1654780625.jpg', '2022-06-09 07:17:05', '2022-06-09 07:17:05');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_06_08_042014_create_sessions_table', 1),
(7, '2022_06_08_084933_create_services_table', 2),
(8, '2022_06_09_114048_create_courses_table', 3),
(9, '2022_06_11_044556_create_best_services_table', 4),
(12, '2022_06_11_054748_create_news_table', 5),
(15, '2022_06_11_085426_create_teams_table', 6),
(16, '2022_06_11_101922_create_contacts_table', 7),
(17, '2022_06_13_070607_create_pricings_table', 8),
(18, '2022_06_15_052810_create_buy_services_table', 9),
(19, '2022_06_20_110516_create_buy_services_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `short_description`, `description`, `image`, `expiry_date`, `created_at`, `updated_at`) VALUES
(1, 'Offer on Clipping Path Service', 'We offer all types of clipping path services at affordable price.', 'We offer all types of clipping path services at affordable price. clipping services include background removal, providing special shapes of objects, editing particular portions as well as preparing layout designs.', '1655894831.webp', '30-08-2022', '2022-06-11 01:16:35', '2022-06-22 04:47:11'),
(2, 'Offer Image Shadow Making', 'To improve appearance of your images, we offer Drop shadow service', 'To improve appearance of your images, we offer Drop shadow service which will give your images a sensational look. We have good mastery of light shadow, reflection shadows and dimensions.', '1655895200.webp', '30-10-2022', '2022-06-11 01:17:50', '2022-06-22 04:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('appleidnour123@gmail.com', '$2y$10$.GXCWGWLGjCMxTT3GBcW.uP/q/UMH9hSpPCEmLxZjA5Et/1l.wG8K', '2022-06-22 02:32:34'),
('mdnourabshir@gmail.com', '$2y$10$3IONVvtVMCCJDThd.tsav.BuRgbkhROPY7ZaBxelTQP3Xe96/ZXrO', '2022-06-22 02:36:49');

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
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `name`, `price`, `duration`, `tags`, `created_at`, `updated_at`) VALUES
(3, 'Digital Marketing', '6000', '2months', 'Learn Digital Marketing ', '2022-06-13 05:52:42', '2022-06-13 05:52:42');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_image`, `service_name`, `service_content`, `created_at`, `updated_at`) VALUES
(18, '1655806413.webp', 'Clipping Path Service', 'We offer all types of clipping path services at affordable price. Our clipping services include background removal, providing special shapes of objects, editing particular portions as well as preparing layout designs.', '2022-06-21 04:13:33', '2022-06-21 04:13:33'),
(19, '1655806454.webp', 'Color Correction Service', 'Our color correction service will ensure that your images are adjusted to the right tonal range. Adjustments will include shadow compensation, saturation, contrast, tint, highlight, vibrancy, clarity and lighting exposure', '2022-06-21 04:14:14', '2022-06-21 04:14:14'),
(20, '1655806486.webp', 'Shadow making Service', 'To improve appearance of your images, we offer Drop shadow service which will give your images a sensational look. We have good mastery of light shadow, reflection shadows and dimensions.', '2022-06-21 04:14:46', '2022-06-21 04:14:46'),
(21, '1655806961.webp', 'Image Masking service', 'Image masking is the process of removing background without touching image. By the help of our image masking service, you will be able to capture images to your preferred background.', '2022-06-21 04:15:12', '2022-06-21 04:22:41'),
(22, '1655806554.webp', 'Ghost Mannequin Service', 'We are expertise on adding neck part of any image by maintaining consistency of the design, shape, size and color. The final image will be up to 100% normal dimensions.', '2022-06-21 04:15:54', '2022-06-21 04:15:54'),
(23, '1655806604.webp', 'Multi Clipping Path', 'Our Multi Clipping path service involves changing color on specified parts while adding extra color effects. This will help you remove specific parts of an object that are too detailed.', '2022-06-21 04:16:44', '2022-06-21 04:16:44'),
(24, '1655806637.webp', 'Photo Retouching Service', 'Photo retouching is an excellent service that will help you touch specific and undesirable parts of your image. The service includes: whitening teeth, removal of red eye, pimples and wrinkles.', '2022-06-21 04:17:17', '2022-06-21 04:17:17'),
(25, '1655806668.webp', 'Car Photo Editing', 'To make car photographs look presentable to your buyers, you’ll need to take advantage of the car image enhancements or Car Pics Editing or Car Photo Editor services that we offer here.', '2022-06-21 04:17:48', '2022-06-21 04:17:48');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
('a4V6cOeDgThrnZZEFD83Bns55UXlzexxFdczuZNh', 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVzJydlhlWmVjbjlCY1Y5Z2tDMEY5Z3ZBcTFoYXozQ0JGeHh3MmlBYSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9uZXdzIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTA7czo4OiJ1c2VydHlwZSI7czoxOiIxIjt9', 1655895207),
('CndvkXwzcPZvJ1Ya68Ajkd9wdKshOF4XSZphdsRp', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoidnFuWkQzRkNQQ1RLTndLZkNtVVhnTTdoWXdZYWJuSVNlS0duYjNTbSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1655902285),
('GWdeax7vs8RQi25pZ3lYnmsanL5yBKU4NIEOZa6C', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUVFNTjN1MElhWjNhWERINVF5bTJXZjFFbHowVEIzY0twQlE3Y2J4VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9uZXdzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1655902284),
('w38NmuZ85vRi0IsCmn1PEw1uoG9dlky6uVGJ95fV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOThMMkJYUWZtM1Y3T0ZuN2hqUmJuc3VucXVUYWtCNVNWcU5EZHhGRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1655902438);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instgram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `title`, `image`, `facebook`, `twitter`, `instgram`, `linkedin`, `created_at`, `updated_at`) VALUES
(3, 'Mohamed Nour Abshir', 'Full Stack Web developer', '1655047044.jpg', NULL, NULL, NULL, NULL, '2022-06-12 09:17:24', '2022-06-12 09:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Zero is for user 1 is for Admin',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(10, 'Nour', 'mnor32779@gmail.com', '1', '01730931984', '2022-06-22 01:14:40', '$2y$10$qyonai8Q0/d2tdj79CNOIuwCJun6vYeyJVyu/WUUqV7LQEF5.gdL.', NULL, NULL, NULL, 'FUbeT0c3rpUUewZhfrSXUg9jpSLKtk7iu6Iu7IuQ5Cbc9pTPnr09RsR8TbPu', NULL, NULL, '2022-06-22 01:14:16', '2022-06-22 02:29:30'),
(12, 'Nour', 'appleidnour123@gmail.com', '0', '01730931984', NULL, '$2y$10$0AFeol48oe1oyLiAfEe2Z.oLeJTViSXyOl/vEzO4UPt73KF/25BuC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-22 02:11:19', '2022-06-22 02:11:19'),
(13, 'Mohamed', 'mdnourabshir@gmail.com', '0', '01730931984', '2022-06-22 02:36:23', '$2y$10$Yc9QmDoz95LnKc.l6jr3OOgI2lMZ2GESYCfBmMIoXWLps73n.r9V.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-22 02:34:25', '2022-06-22 02:36:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `best_services`
--
ALTER TABLE `best_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy_services`
--
ALTER TABLE `buy_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
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
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `best_services`
--
ALTER TABLE `best_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `buy_services`
--
ALTER TABLE `buy_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
