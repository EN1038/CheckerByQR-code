-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2024 at 07:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `name_checker_by_qr2`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activity_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity_description` text DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `activity_name`, `user_id`, `activity_description`, `status`, `created_at`, `updated_at`) VALUES
(18, 'กิจกรรม', 1, NULL, 'on', '2024-01-08 07:46:53', '2024-01-08 07:46:53'),
(19, 'asdsadsada', 1, NULL, 'on', '2024-01-09 03:23:35', '2024-01-09 03:23:35'),
(20, 'sdfgsdgfs', 1, NULL, 'delete', '2024-01-09 03:24:49', '2024-01-11 08:09:47'),
(21, 'ทดสอบหลายวัน', 1, NULL, 'on', '2024-01-11 04:02:10', '2024-01-11 04:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `activity_day_makers`
--

CREATE TABLE `activity_day_makers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time_start` time DEFAULT NULL,
  `time_expried` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `activity_id` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `round_mode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_day_makers`
--

INSERT INTO `activity_day_makers` (`id`, `form_name`, `date`, `time_start`, `time_expried`, `created_at`, `updated_at`, `activity_id`, `status`, `round_mode`) VALUES
(90, 'Day1 2024:01:08', '2024-01-08', '08:30:00', '16:03:00', '2024-01-08 07:50:31', '2024-01-11 07:52:29', '18', 'on', NULL),
(91, 'Day1 2024:01:09', '2024-01-09', '08:30:00', '16:30:00', '2024-01-09 03:24:16', '2024-01-11 07:52:47', '19', 'on', NULL),
(92, 'Day1 2024:01:09', '2024-01-09', '10:26:00', '10:27:00', '2024-01-09 03:27:15', '2024-01-09 03:27:15', '20', 'on', NULL),
(93, 'Day1 2024:01:11', '2024-01-11', '08:30:00', '16:00:00', '2024-01-11 04:03:35', '2024-01-11 07:36:34', '21', 'on', NULL),
(94, 'Day2 2024:01:12', '2024-01-12', '08:30:00', '16:30:00', '2024-01-11 04:03:36', '2024-01-11 08:53:05', '21', 'delete', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `activity_peoples`
--

CREATE TABLE `activity_peoples` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `activity_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activity_people_registers`
--

CREATE TABLE `activity_people_registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `people_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `activity_id` varchar(255) NOT NULL,
  `date_id` varchar(255) NOT NULL,
  `round_id` varchar(255) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_people_registers`
--

INSERT INTO `activity_people_registers` (`id`, `people_id`, `name`, `last_name`, `status`, `activity_id`, `date_id`, `round_id`, `ip_address`, `created_at`, `updated_at`) VALUES
(21, NULL, 'เริงชัย', 'บุตรม้วย', 'normal', '18', '90', '63', NULL, '2024-01-08 09:00:49', '2024-01-08 09:00:49'),
(22, NULL, 'นาย เริงขัย', 'สลักใจ', 'normal', '19', '91', '64', '10.96.2.217', '2024-01-09 04:19:44', '2024-01-09 04:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `activity_rounde_checkers`
--

CREATE TABLE `activity_rounde_checkers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_id` varchar(255) NOT NULL,
  `activity_id` varchar(255) NOT NULL,
  `rounde_name` varchar(255) NOT NULL,
  `rounde_checker_time_start` time DEFAULT NULL,
  `rounde_checker_time_expried` time DEFAULT NULL,
  `round_end_time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_rounde_checkers`
--

INSERT INTO `activity_rounde_checkers` (`id`, `date_id`, `activity_id`, `rounde_name`, `rounde_checker_time_start`, `rounde_checker_time_expried`, `round_end_time`, `created_at`, `updated_at`, `status`) VALUES
(62, '90', '18', 'รอบ08:30ถึง09:00', '08:30:00', '09:00:00', '13:29:00', '2024-01-08 07:50:31', '2024-01-08 07:50:31', 'on'),
(63, '90', '18', 'รอบ13:30ถึง14:00', '13:30:00', '14:00:00', '16:03:00', '2024-01-08 07:50:31', '2024-01-08 07:50:31', 'on'),
(64, '91', '19', 'เช็คทั้งวัน', '08:30:00', '16:30:00', '16:30:00', '2024-01-09 03:24:16', '2024-01-09 03:24:16', 'on'),
(65, '92', '20', 'เช็คทั้งวัน', '10:26:00', '10:27:00', '10:27:00', '2024-01-09 03:27:15', '2024-01-09 03:27:15', 'on'),
(66, '93', '21', 'เช็คทั้งวัน', '09:30:00', '16:30:00', '16:30:00', '2024-01-11 04:03:36', '2024-01-15 03:23:49', 'on'),
(67, '94', '21', 'เช็คทั้งวัน', '08:30:00', '16:30:00', '16:30:00', '2024-01-11 04:03:36', '2024-01-11 08:53:05', 'delete');

-- --------------------------------------------------------

--
-- Table structure for table `activity_settings`
--

CREATE TABLE `activity_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activity_id` varchar(255) NOT NULL,
  `people_side_mode_id` varchar(255) NOT NULL,
  `list_of_name_mode_id` varchar(255) NOT NULL,
  `round_mode` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_settings`
--

INSERT INTO `activity_settings` (`id`, `activity_id`, `people_side_mode_id`, `list_of_name_mode_id`, `round_mode`, `created_at`, `updated_at`) VALUES
(66, '18', '2', '2', '2', '2024-01-08 07:50:31', '2024-01-08 07:50:31'),
(67, '19', '2', '2', '1', '2024-01-09 03:24:15', '2024-01-09 03:24:16'),
(68, '20', '2', '2', '1', '2024-01-09 03:27:15', '2024-01-09 03:27:15'),
(69, '21', '2', '2', '1', '2024-01-11 04:03:35', '2024-01-11 04:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

CREATE TABLE `agencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Agency_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agencies`
--

INSERT INTO `agencies` (`id`, `Agency_name`, `created_at`, `updated_at`) VALUES
(1, 'คณะวิทยาศาสตร์และเทคโนโลยี', NULL, NULL),
(2, 'คณะครุศาสตร์', NULL, NULL),
(3, 'คณะวิทยาการจัดการ', NULL, NULL),
(4, 'คณะมนุษย์ศาสตร์และสังคมศาสตร์', NULL, NULL),
(5, 'คณะเทคโนโลยีการเกษตรและเทคโนโลยีอุตสาหกรรม', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `checker_forms`
--

CREATE TABLE `checker_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `activity_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list_of_name_modes`
--

CREATE TABLE `list_of_name_modes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mode_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list_of_name_modes`
--

INSERT INTO `list_of_name_modes` (`id`, `mode_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'have_name', 'on', NULL, NULL),
(2, 'not_have_name', 'on', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `major_name` varchar(255) NOT NULL,
  `agency_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`id`, `major_name`, `agency_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'วิทยาการคอพิวเตอร์', '1', 'on', NULL, NULL),
(2, 'มัลติมีเดีย', '1', 'on', NULL, NULL),
(3, 'เทคโนโลยีสารสนเทศ', '1', 'on', NULL, NULL),
(4, 'เคมี', '1', 'on', NULL, NULL),
(5, 'ฟิสิกข์', '1', 'on', NULL, NULL),
(6, 'ครูปฐมวัย', '2', 'on', NULL, NULL),
(7, 'ครูคณิตศาสตร์', '2', 'on', NULL, NULL),
(8, 'ครูศิลปะ', '2', 'on', NULL, NULL),
(9, 'ครูสังคม', '2', 'on', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_08_164804_null_email', 1),
(6, '2023_11_09_154935_create_activities_table', 1),
(7, '2023_11_10_163836_create_activity_peoples_table', 1),
(8, '2023_11_23_065219_create_checker_forms_table', 1),
(9, '2023_12_06_033335_create_agencies_table', 1),
(10, '2023_12_06_052728_create_majors_table', 1),
(11, '2023_12_14_023112_add_side_mode', 2),
(12, '2023_12_14_023313_create_activity_side_modes_table', 2),
(13, '2023_12_14_025647_create_people_side_modes_table', 3),
(14, '2023_12_14_032259_create_list_of_name_modes_table', 4),
(15, '2023_12_14_033328_create_activity_day_makers_table', 5),
(16, '2023_12_14_042121_create_activity_settings_table', 6),
(17, '2023_12_14_042723_add_list_of_name_id', 7),
(18, '2023_12_14_082811_create_activity_rounde_checkers_table', 8),
(19, '2023_12_14_090301_create_rounde_checker_relates_table', 9),
(20, '2023_12_19_063821_add_datetime', 10),
(21, '2023_12_19_064628_add_datetime2', 11),
(22, '2023_12_19_065156_add_datetime3', 12),
(23, '2023_12_19_070347_rename_column', 13),
(24, '2023_12_19_070650_add_date_column', 14),
(25, '2023_12_19_082045_change_timestamp_to_time', 15),
(26, '2023_12_20_063923_add_activity_descript', 16),
(27, '2023_12_21_030907_create_activity_people_input_registers_table', 17),
(28, '2023_12_21_031300_create_activity_people_input_regigter_relates_table', 18),
(29, '2023_12_22_044743_add_activity_id', 19),
(30, '2023_12_22_062945_add_day_id', 20),
(31, '2023_12_22_070627_add_end_time', 21),
(32, '2023_12_22_071019_add_end_time2', 22),
(33, '2023_12_27_030003_add_round_setting', 23),
(34, '2023_12_27_044656_add_activity_id_day_id_round_id', 24),
(35, '2023_12_27_050002_create_activity_people_registers_table', 25),
(36, '2023_12_28_021952_add_activity_id', 26),
(37, '2023_12_28_063634_add_firstname_lastname', 27),
(38, '2023_12_28_142715_add_status', 28),
(39, '2024_01_03_134835_rename_check_to_name', 29),
(40, '2024_01_08_103034_add_round_end_time', 30),
(41, '2024_01_08_103922_chang_round_end_time', 31),
(42, '2024_01_08_104023_add_round_end_time2', 32),
(43, '2024_01_08_152533_add_people_id', 33),
(44, '2024_01_09_103753_add_ip_to_people_register', 34),
(45, '2024_01_11_154846_add_statys', 35),
(46, '2024_01_11_155042_add_status', 36),
(47, '2024_01_11_155148_add_status', 37),
(48, '2024_01_11_155243_add_status', 38),
(49, '2024_01_15_113045_add_round_mode_to_day', 39),
(50, '2024_01_15_113326_add_round_mode_to_day', 40);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `people_side_modes`
--

CREATE TABLE `people_side_modes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `people_side_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people_side_modes`
--

INSERT INTO `people_side_modes` (`id`, `people_side_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'inside', 'on', NULL, NULL),
(2, 'outside', 'on', NULL, NULL),
(3, 'all_side', 'on', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rounde_checker_relates`
--

CREATE TABLE `rounde_checker_relates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activity_id` varchar(255) NOT NULL,
  `activity_day_maker_id` varchar(255) NOT NULL,
  `rounde_checker_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rounde_checker_relates`
--

INSERT INTO `rounde_checker_relates` (`id`, `activity_id`, `activity_day_maker_id`, `rounde_checker_id`, `created_at`, `updated_at`) VALUES
(41, '18', '90', '62', '2024-01-08 07:50:31', '2024-01-08 07:50:31'),
(42, '18', '90', '63', '2024-01-08 07:50:31', '2024-01-08 07:50:31'),
(43, '19', '91', '64', '2024-01-09 03:24:16', '2024-01-09 03:24:16'),
(44, '20', '92', '65', '2024-01-09 03:27:15', '2024-01-09 03:27:15'),
(45, '21', '93', '66', '2024-01-11 04:03:36', '2024-01-11 04:03:36'),
(46, '21', '94', '67', '2024-01-11 04:03:36', '2024-01-11 04:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `student_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'เริงชัย บุตรม้วย', '63113532037', NULL, NULL, '$2y$12$r.1N/Rzu8Ic2.8tgHsopye/0Xwdp9a4Uw7bG/izCIMe2/bTGcBh0S', NULL, NULL, NULL),
(2, 'กมลาส กลิ่นด้วง', '63113532008', NULL, NULL, '$2y$12$Lq808rmYFv7VFghoKIqAXeqG4qRavQ1o.wTsaEewHWHLz2Dx2lSHu', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_day_makers`
--
ALTER TABLE `activity_day_makers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_peoples`
--
ALTER TABLE `activity_peoples`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_people_registers`
--
ALTER TABLE `activity_people_registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_rounde_checkers`
--
ALTER TABLE `activity_rounde_checkers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_settings`
--
ALTER TABLE `activity_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checker_forms`
--
ALTER TABLE `checker_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `list_of_name_modes`
--
ALTER TABLE `list_of_name_modes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `people_side_modes`
--
ALTER TABLE `people_side_modes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rounde_checker_relates`
--
ALTER TABLE `rounde_checker_relates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `activity_day_makers`
--
ALTER TABLE `activity_day_makers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `activity_peoples`
--
ALTER TABLE `activity_peoples`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `activity_people_registers`
--
ALTER TABLE `activity_people_registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `activity_rounde_checkers`
--
ALTER TABLE `activity_rounde_checkers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `activity_settings`
--
ALTER TABLE `activity_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `checker_forms`
--
ALTER TABLE `checker_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list_of_name_modes`
--
ALTER TABLE `list_of_name_modes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `people_side_modes`
--
ALTER TABLE `people_side_modes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rounde_checker_relates`
--
ALTER TABLE `rounde_checker_relates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
