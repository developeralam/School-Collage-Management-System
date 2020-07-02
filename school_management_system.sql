-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 02:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `directors_id` int(10) UNSIGNED NOT NULL,
  `directors_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `derectors_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directors_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directors_quote` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `directors_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `directors_dipogit` int(11) DEFAULT NULL,
  `directors_expence` int(11) DEFAULT NULL,
  `directors_parsent` int(11) DEFAULT NULL,
  `directors_profit` int(11) DEFAULT NULL,
  `directors_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`directors_id`, `directors_name`, `derectors_phone`, `directors_email`, `directors_quote`, `directors_image`, `directors_dipogit`, `directors_expence`, `directors_parsent`, `directors_profit`, `directors_status`, `created_at`, `updated_at`) VALUES
(2, 'Md Sharif Khan', '01706668403', 'mail.sharif@gmail.com', 'School leadership has been identified as another critical element of student success, and subsequently enough resources and training should be provided to our school principals and administrators to allow them to create a strong ecosystem in our schools and support teachers and parents as well', NULL, 210000, NULL, NULL, NULL, 1, '2020-04-24 17:33:17', '2020-04-24 17:33:17'),
(3, 'Md Shafiqul Islam', '01706668403', 'mail.alam.bd@gmail.com', NULL, NULL, 1200, NULL, NULL, NULL, 0, '2020-05-17 11:29:40', '2020-05-17 11:29:40'),
(4, 'Md Mozibur Rahman', '01706668403', 'mail.alam.bd@gmail.com', NULL, NULL, 10000, NULL, NULL, NULL, 0, '2020-05-17 11:30:24', '2020-05-17 11:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `exams_id` int(10) UNSIGNED NOT NULL,
  `exam_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`exams_id`, `exam_name`, `created_at`, `updated_at`) VALUES
(1, 'semister1', '2020-03-16 07:52:39', '2020-05-07 11:35:24'),
(2, 'Semister 2', '2020-03-16 07:53:52', '2020-03-16 07:53:52'),
(3, 'Semister 3', '2020-03-16 07:54:09', '2020-03-16 07:54:09'),
(4, 'Semister 4', '2020-03-16 07:54:39', '2020-03-16 07:54:39'),
(5, 'Semister 5', '2020-03-16 07:54:50', '2020-03-16 07:54:50'),
(6, 'Semister 6', '2020-03-16 07:55:00', '2020-03-16 07:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `expences`
--

CREATE TABLE `expences` (
  `expence_id` int(10) UNSIGNED NOT NULL,
  `expence_category_id` int(11) NOT NULL,
  `expence_amount` int(11) NOT NULL,
  `expence_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `expence_date` date NOT NULL,
  `expences_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_withdraw` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expences`
--

INSERT INTO `expences` (`expence_id`, `expence_category_id`, `expence_amount`, `expence_type`, `student_id`, `expence_date`, `expences_description`, `bank_withdraw`, `status`, `created_at`, `updated_at`) VALUES
(7, 3, 200, 'expence', NULL, '2020-05-17', 'Guest Tea Bill', 0, 0, '2020-05-17 22:20:35', '2020-05-17 22:20:35'),
(8, 4, 10000, 'expence', NULL, '2020-05-17', 'Teacher\'s Sallery', 0, 0, '2020-05-17 22:23:13', '2020-05-17 22:23:13'),
(9, 1, 10, 'expence', NULL, '2020-05-17', 'Buy A Marker', 0, 0, '2020-05-17 22:39:58', '2020-05-17 22:39:58'),
(10, 5, 200, 'expence', NULL, '2020-05-17', 'Other\'s Cost', 0, 0, '2020-05-17 22:40:46', '2020-05-17 22:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `expence_categories`
--

CREATE TABLE `expence_categories` (
  `expence_category_id` int(10) UNSIGNED NOT NULL,
  `expence_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expence_cat_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expence_categories`
--

INSERT INTO `expence_categories` (`expence_category_id`, `expence_category`, `expence_cat_description`, `created_at`, `updated_at`) VALUES
(1, 'Buy  Marker', 'Buy 1 dogon marker', '2020-05-09 11:52:04', '2020-05-09 11:52:04'),
(2, 'Bank withdraw', 'Bank Withdraw', '2020-05-09 13:51:13', '2020-05-09 13:51:13'),
(3, 'Admin Cost', 'This is admin Cost', '2020-05-17 14:03:17', '2020-05-17 14:03:17'),
(4, 'Teacher\'s Sallary', 'This category for Teacher\'s Sallary', '2020-05-17 14:03:38', '2020-05-17 14:03:38'),
(5, 'Other\'s', 'This category for Other\'s', '2020-05-17 14:05:19', '2020-05-17 14:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `important_people`
--

CREATE TABLE `important_people` (
  `ip_id` int(10) UNSIGNED NOT NULL,
  `ip_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `important_people`
--

INSERT INTO `important_people` (`ip_id`, `ip_name`, `ip_phone`, `ip_position`, `ip_description`, `ip_address`, `created_at`, `updated_at`) VALUES
(2, 'Advocate Ajmatullah khan', '01706668403', 'Presidant of gazipur mohanagar awami league', 'Member of our school', '20 no word, gazipur city corporation', '2020-04-23 13:09:13', '2020-04-23 13:09:13'),
(3, 'Advocate Ajmatullah khan', '01624219102', 'Presidant of gazipur mohanagar awami league', 'Member of our school', '20no word ,Gazipur city Corporation', '2020-04-23 22:07:13', '2020-04-23 22:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `income_id` int(10) UNSIGNED NOT NULL,
  `income_cat_id` int(11) NOT NULL,
  `income_amount` int(11) NOT NULL,
  `payment_month` int(11) DEFAULT NULL,
  `income_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `income_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `income_date` date NOT NULL,
  `bank_income_amount` int(11) NOT NULL DEFAULT 0,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incomes`
--

INSERT INTO `incomes` (`income_id`, `income_cat_id`, `income_amount`, `payment_month`, `income_type`, `student_id`, `income_description`, `income_date`, `bank_income_amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 1, 'BAnk Dipogit', 0, 'bank Transfer', '2020-05-08', 50, 1, NULL, '2020-05-09 10:19:02'),
(2, 1, 0, 1, NULL, 0, 'Bank Transfer', '2020-05-08', 10, 1, '2020-05-09 10:48:08', '2020-05-09 10:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `income_categories`
--

CREATE TABLE `income_categories` (
  `income_category_id` int(10) UNSIGNED NOT NULL,
  `income_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `income_cat_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `income_categories`
--

INSERT INTO `income_categories` (`income_category_id`, `income_category`, `income_cat_description`, `created_at`, `updated_at`) VALUES
(1, 'Student Fee', NULL, '2020-03-22 22:08:30', '2020-03-22 22:08:30'),
(2, 'Exam Fee', NULL, '2020-03-22 23:54:54', '2020-03-22 23:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `marks_id` int(10) UNSIGNED NOT NULL,
  `marks_class_id` int(11) NOT NULL,
  `section_id` int(11) DEFAULT NULL,
  `semister_id` int(11) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `marks_point` double(8,2) NOT NULL,
  `marks_grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`marks_id`, `marks_class_id`, `section_id`, `semister_id`, `student_id`, `subject_id`, `marks`, `marks_point`, `marks_grade`, `created_at`, `updated_at`) VALUES
(45, 1, 0, 1, 4, 1, 44, 2.00, 'C', NULL, NULL),
(46, 1, 0, 2, 4, 1, 87, 5.00, 'A+', NULL, NULL),
(47, 1, 0, 1, 4, 2, 44, 2.00, 'C', NULL, NULL);

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
(36, '2014_10_12_000000_create_users_table', 1),
(37, '2014_10_12_100000_create_password_resets_table', 1),
(38, '2019_08_19_000000_create_failed_jobs_table', 1),
(41, '2020_03_06_051149_create_student_classes_table', 1),
(42, '2020_03_06_051743_create_subjects_table', 1),
(43, '2020_03_08_030347_create_exams_table', 1),
(46, '2020_03_08_041445_create_income_categories_table', 1),
(54, '2020_03_10_071816_create_marks_table', 2),
(57, '2020_03_05_045642_create_students_table', 4),
(60, '2020_04_22_061319_create_others_table', 6),
(63, '2020_04_22_062014_create_important_people_table', 7),
(65, '2020_04_22_062102_create_outsider_people_table', 8),
(66, '2020_03_10_064844_create_directors_table', 9),
(67, '2020_03_05_171224_create_teachers_table', 10),
(72, '2020_03_08_041235_create_incomes_table', 11),
(73, '2020_03_08_041255_create_expences_table', 12),
(74, '2020_03_08_041506_create_expence_categories_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `outsider_people`
--

CREATE TABLE `outsider_people` (
  `op_id` int(10) UNSIGNED NOT NULL,
  `op_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `op_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `op_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `op_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `outsider_people`
--

INSERT INTO `outsider_people` (`op_id`, `op_name`, `op_phone`, `op_address`, `op_description`, `created_at`, `updated_at`) VALUES
(2, 'Md kamruzzaman', '01624219102', '23no word, gazipur city corporatiion', 'interested to admit her child', '2020-04-23 13:09:47', '2020-04-23 13:09:47');

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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `students_id` int(10) UNSIGNED NOT NULL,
  `class_id` int(11) NOT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_roll` int(11) NOT NULL,
  `education_year` int(11) NOT NULL,
  `student_name_bangali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_name_english` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_birth` date NOT NULL,
  `student_year` int(11) NOT NULL,
  `student_sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name_bangali` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name_english` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_income` int(11) DEFAULT NULL,
  `father_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name_bangali` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name_english` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `past_institute_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `past_institute_class` int(11) DEFAULT NULL,
  `student_village` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_postoffice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_permanent_village` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_permanent_postoffice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_guardian_village` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_guardian_postoffice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_guardian_district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_guardian_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute_car` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `music_interested` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `fee` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`students_id`, `class_id`, `division`, `section`, `student_roll`, `education_year`, `student_name_bangali`, `student_name_english`, `student_birth`, `student_year`, `student_sex`, `student_religion`, `student_nationality`, `father_name_bangali`, `father_name_english`, `father_occupation`, `father_income`, `father_mobile`, `mother_name_bangali`, `mother_name_english`, `past_institute_name`, `past_institute_class`, `student_village`, `student_postoffice`, `student_permanent_village`, `student_permanent_postoffice`, `local_guardian_village`, `local_guardian_postoffice`, `local_guardian_district`, `local_guardian_phone`, `institute_car`, `music_interested`, `student_photo`, `father_photo`, `mother_photo`, `status`, `fee`, `created_at`, `updated_at`) VALUES
(3, 2, NULL, 'A', 1323, 2019, 'Md Fahim', 'Md Fahim', '1999-01-23', 19, 'male', 'islam', 'bangladeshi', 'Md Gias Uddin', 'Md Gias Uddin', 'teacher', 123223, '01706668403', 'Mst Rehana Begum', 'Mst Rehana Begum', NULL, NULL, 'Bonogram', 'bog', 'Bonogram', 'bog', 'hatiab', 'bog', 'Gazipur', '01624219102', 'Yes', 'Yes', NULL, NULL, NULL, NULL, 250, '2020-04-23 21:29:41', '2020-04-23 21:29:41'),
(4, 1, NULL, 'B', 87, 2020, 'Md Fahim', 'Md Fahim', '2020-05-14', 44, 'male', 'islam', 'bangladeshi', 'Md Gias Uddin', 'Md Gias Uddin', 'teacher', 32323523, '01706668403', 'Mst Rehana Begum', 'Mst Rehana Begum', NULL, NULL, 'Bonogram', 'bog', 'Bonogram', 'bog', 'hatiab', 'bog', 'Gazipur', '01624219102', 'Yes', 'No', '1589688158.jpg', '1589687644.jpg', '1589687644.jpg', NULL, 250, '2020-05-06 13:21:30', '2020-05-17 11:02:38'),
(5, 1, NULL, 'A', 34, 323, 'Md Fahim', 'Md Fahim', '2020-05-23', 32, 'male', 'islam', 'bangladeshi', 'Md Gias Uddin', 'Md Gias Uddin', 'teacher', 2323, '01624219102', 'Mst Rehana Begum', 'Mst Rehana Begum', NULL, NULL, 'Bonogram', 'bog', 'Bonogram', 'bog', 'hatiab', 'bog', 'Gazipur', '01624219102', 'Yes', 'Yes', NULL, NULL, NULL, NULL, 250, '2020-05-06 13:55:56', '2020-05-06 13:55:56'),
(6, 1, NULL, 'A', 346456, 4536, 'Md khalil', 'Md khalil', '2020-05-28', 34, 'male', 'islam', 'bangladeshi', 'Md Gias Uddin', 'Md Gias Uddin', 'teacher', 34534, '01624219102', 'Mst Rehana Begum', 'Mst Rehana Begum', NULL, NULL, 'Bonogram', 'bog', 'Bonogram', 'bog', 'hatiab', 'bog', 'Gazipur', '01624219102', 'Yes', 'No', '1588752033.jpg', NULL, NULL, NULL, 250, '2020-05-06 15:00:33', '2020-05-06 15:00:33');

-- --------------------------------------------------------

--
-- Table structure for table `student_classes`
--

CREATE TABLE `student_classes` (
  `classes_id` int(10) UNSIGNED NOT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_classes`
--

INSERT INTO `student_classes` (`classes_id`, `class_name`, `created_at`, `updated_at`) VALUES
(1, 'One', '2020-03-15 20:42:27', '2020-05-08 23:25:50'),
(2, 'Two', '2020-03-15 20:42:34', '2020-03-15 20:42:34'),
(4, 'Three', '2020-03-29 11:01:48', '2020-03-29 11:01:48'),
(5, 'Four', '2020-05-08 23:26:07', '2020-05-08 23:26:07'),
(6, 'Five', '2020-05-08 23:26:16', '2020-05-08 23:26:16'),
(7, 'Six', '2020-05-08 23:26:27', '2020-05-08 23:26:27'),
(8, 'Seven', '2020-05-08 23:26:36', '2020-05-08 23:26:36'),
(9, 'Eight', '2020-05-08 23:26:46', '2020-05-08 23:26:46'),
(10, 'Nine', '2020-05-08 23:26:56', '2020-05-08 23:26:56'),
(11, 'Ten', '2020-05-08 23:27:06', '2020-05-08 23:27:06');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(10) UNSIGNED NOT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `created_at`, `updated_at`) VALUES
(1, 'math', '2020-03-15 20:43:00', '2020-05-09 10:16:37'),
(2, 'Bangla 1st', '2020-03-15 20:43:20', '2020-03-15 20:43:20'),
(3, 'Bangla 2nd', '2020-03-15 20:43:30', '2020-03-15 20:43:30'),
(4, 'English 1st', '2020-03-15 20:43:38', '2020-03-15 20:43:38'),
(5, 'English 2nd', '2020-03-15 20:43:46', '2020-03-15 20:43:46'),
(6, 'Attdance', '2020-03-15 20:43:54', '2020-03-15 20:43:54'),
(7, 'Co Curricular Activities', '2020-03-15 20:44:29', '2020-03-15 20:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teachers_id` int(10) UNSIGNED NOT NULL,
  `teachers_name_bangali` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachers_name_english` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachers_district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachers_village` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachers_postoffice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_maritial_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` int(10) UNSIGNED DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_class` int(10) UNSIGNED DEFAULT NULL,
  `department` int(10) UNSIGNED DEFAULT NULL,
  `sallary` int(11) DEFAULT NULL,
  `status` int(10) UNSIGNED DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teachers_id`, `teachers_name_bangali`, `teachers_name_english`, `teachers_district`, `teachers_village`, `teachers_postoffice`, `teacher_gender`, `teacher_maritial_status`, `email`, `subject`, `phone`, `address`, `teacher_class`, `department`, `sallary`, `status`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Md Kader Molla', 'Md kader Molla', 'Shirajganj', 'Ullapara', 'gcb', 'Male', 'Married', 'kader@gmail.com', NULL, '01706668403', '23no word, Gazipur City Corporation', NULL, NULL, 2342333, 0, '1588782943.jpg', '2020-05-06 23:28:27', '2020-05-06 23:35:44');

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
(3, 'Admin', 'mail.alam.bd@gmail.com', NULL, '$2y$10$yz6XAqzWbNBAtsiQ0ObHpOASvg8xt6lO2V9oP.vUsoXJ7mSxSyPdG', NULL, '2020-07-02 19:27:11', '2020-07-02 19:27:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`directors_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`exams_id`);

--
-- Indexes for table `expences`
--
ALTER TABLE `expences`
  ADD PRIMARY KEY (`expence_id`);

--
-- Indexes for table `expence_categories`
--
ALTER TABLE `expence_categories`
  ADD PRIMARY KEY (`expence_category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `important_people`
--
ALTER TABLE `important_people`
  ADD PRIMARY KEY (`ip_id`);

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`income_id`);

--
-- Indexes for table `income_categories`
--
ALTER TABLE `income_categories`
  ADD PRIMARY KEY (`income_category_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`marks_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outsider_people`
--
ALTER TABLE `outsider_people`
  ADD PRIMARY KEY (`op_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`students_id`);

--
-- Indexes for table `student_classes`
--
ALTER TABLE `student_classes`
  ADD PRIMARY KEY (`classes_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teachers_id`);

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
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `directors_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `exams_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `expences`
--
ALTER TABLE `expences`
  MODIFY `expence_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `expence_categories`
--
ALTER TABLE `expence_categories`
  MODIFY `expence_category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `important_people`
--
ALTER TABLE `important_people`
  MODIFY `ip_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `income_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `income_categories`
--
ALTER TABLE `income_categories`
  MODIFY `income_category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `marks_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `outsider_people`
--
ALTER TABLE `outsider_people`
  MODIFY `op_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `students_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `classes_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teachers_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
