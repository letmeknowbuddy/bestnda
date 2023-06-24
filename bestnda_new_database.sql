-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 08:21 AM
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
-- Database: `best_nda`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_blog`
--

CREATE TABLE `add_blog` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(150) NOT NULL,
  `blog_slug` varchar(150) NOT NULL,
  `slug_id` varchar(255) NOT NULL,
  `meta_title` varchar(200) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `category` varchar(255) NOT NULL,
  `thumbimg` varchar(255) NOT NULL,
  `banner_img` varchar(255) NOT NULL,
  `blog` longtext NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_blog`
--

INSERT INTO `add_blog` (`id`, `blog_title`, `blog_slug`, `slug_id`, `meta_title`, `meta_keywords`, `meta_description`, `u_email`, `u_name`, `user_type`, `category`, `thumbimg`, `banner_img`, `blog`, `status`, `create_at`, `updated_at`) VALUES
(32, 'NDA Coaching', 'nda-coaching', 'nda-coaching28', 'NDA Coaching', 'NDA Coaching', 'NDA Coachingkhhlgjl', 'admin@gmail.com', 'admin', 'Admin', 'NDA', '1686029746.jpg', '1685694203.webp', '<p>The <strong>National Defence Academy</strong> is an iconic institution and hallmark of global excellence in the sphere of military education. Over the years it has emerged as a unique Tri-Services military academy, attracting the best of youth from our nation and also from friendly foreign countries and transforming them into officers and gentlemen. During the la...</p>', 0, '2023-06-02 13:53:23', '2023-06-06 11:05:46'),
(34, 'bsf army marnu', 'bsf-army-marnuqwww', 'bsf-army-marnuqwww74', 'bsf army india', 'bsf indian army', 'bsf army', 'admin@gmail.com', 'Shield Defence', 'Admin', 'NDA', '1686029633.webp', '1686029616.jpg', '<p>best Army training&nbsp;</p>', 0, '2023-06-05 15:51:04', '2023-06-06 11:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `add_catgury`
--

CREATE TABLE `add_catgury` (
  `id` int(11) NOT NULL,
  `Category_Name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `categories` varchar(120) NOT NULL,
  `meta_title` varchar(120) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `baneer_image` varchar(255) NOT NULL,
  `omg_image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `cretated_ad` datetime NOT NULL DEFAULT current_timestamp(),
  `crated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_catgury`
--

INSERT INTO `add_catgury` (`id`, `Category_Name`, `slug`, `categories`, `meta_title`, `meta_keywords`, `meta_description`, `baneer_image`, `omg_image`, `status`, `cretated_ad`, `crated_at`) VALUES
(3, 'Smart Doorbell', 'Smart-Doorbell', 'CDS', 'Smart Home Devices Blog, News & More', 'Smart Home Devices Blog, News & More', 'Smart Home Devices Blog, News & More', '1683553033.jpg', '1683553033.jpg', 0, '2023-05-08 19:07:13', '2023-05-08 19:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `add_page`
--

CREATE TABLE `add_page` (
  `id` int(11) NOT NULL,
  `page_name` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `slug_id` varchar(255) NOT NULL,
  `meta_title` varchar(150) NOT NULL,
  `meta_keyword` varchar(150) NOT NULL,
  `meta_descrption` mediumtext NOT NULL,
  `baneer_image` varchar(150) NOT NULL,
  `omg_image` varchar(150) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `crated_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_page`
--

INSERT INTO `add_page` (`id`, `page_name`, `slug`, `slug_id`, `meta_title`, `meta_keyword`, `meta_descrption`, `baneer_image`, `omg_image`, `status`, `crated_date`, `update_date`) VALUES
(28, 'About Us', 'About-Us', 'About-Us30', 'About US - Best NDA Coaching in Lucknow', 'Best NDA Coaching in Lucknow', 'BNCL is the best NDA Coaching in Lucknow with Highest rate of selection in NDA Exam. Top Faculty and hostel facility available for candidates.', '1686031702.webp', '1686029391.webp', 0, '2023-06-06 10:39:32', '2023-06-06 11:38:22'),
(29, 'Blog', 'Blog', 'Blog100', 'NDA Blog, News, Update - Best NDA Coaching in Lucknow', 'Best NDA Coaching in Lucknow', 'BNCL provides the best NDA Coaching related content and informative blogs. Read the Top NDA blog, News, Update here.', '1686032138.webp', '1686029416.webp', 0, '2023-06-06 10:40:40', '2023-06-06 11:45:38'),
(30, 'Contact Us', 'Contact-Us', 'Contact-Us57', 'Contact Us - Best NDA Coaching in Lucknow', 'Best NDA Coaching in Lucknow', 'Contact BNCL for NDA Coaching in Lucknow. Get short and long term training courses from reputed Defense Force Career Training Academy in Lucknow.', '1686032122.webp', '1686029432.webp', 0, '2023-06-06 10:41:47', '2023-06-06 11:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `add_services`
--

CREATE TABLE `add_services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `services_name` varchar(150) NOT NULL,
  `meta_title` varchar(150) NOT NULL,
  `meta_keyword` varchar(150) NOT NULL,
  `meta_descripstion` varchar(255) NOT NULL,
  `banner_image` mediumtext NOT NULL,
  `omg_image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `crated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_services`
--

INSERT INTO `add_services` (`id`, `service_name`, `slug`, `services_name`, `meta_title`, `meta_keyword`, `meta_descripstion`, `banner_image`, `omg_image`, `status`, `crated_at`, `updated_at`) VALUES
(2, 'Academics', 'Academics', 'Life @ SDC', 'test new', 'test new', 'test new', '1683454856.webp', '1683454856.webp', 0, '2023-05-07 15:50:56', '2023-05-07 15:59:40'),
(3, 'GTO & Outdoor Activities', 'GTO-&-Outdoor-Activities', 'Life @ SDC', 'GTO & Outdoor Activities', 'GTO & Outdoor Activities', 'GTO & Outdoor Activities', '1683454944.webp', '1683454944.webp', 0, '2023-05-07 15:52:24', '2023-05-07 16:00:00'),
(4, 'Physical Training', 'Physical-Training', 'Life @ SDC', 'Physical Training', 'Physical Training', 'Physical Training', '1683455722.jpg', '1683455722.jpg', 0, '2023-05-07 16:05:22', '2023-05-07 16:05:22'),
(5, 'Sports & Games', 'Sports-&-Games', 'Life @ SDC', 'Sports & Games', 'Sports & Games', 'Sports & Games', '1683455880.jpg', '1683455880.jpg', 0, '2023-05-07 16:08:00', '2023-05-07 16:08:00'),
(6, 'Co-curricular', 'Co-curricular', 'Life @ SDC', 'Co-curricular', 'Co-curricular', 'Co-curricular', '1683456016.webp', '1683456016.webp', 0, '2023-05-07 16:10:16', '2023-05-07 16:10:16'),
(10, 'Skybell Doorbell Support', 'Skybell-Doorbell-Support', 'Life @ SDC', 'About Us Smart Devices Help123', 'About Us Smart Devices Help', 'About Us Smart Devices Help', '1683544287.jpg', '1683544287.jpg', 0, '2023-05-08 16:41:27', '2023-05-08 19:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `analytics_update`
--

CREATE TABLE `analytics_update` (
  `id` int(11) NOT NULL,
  `header` text DEFAULT NULL,
  `body` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `analytics_update`
--

INSERT INTO `analytics_update` (`id`, `header`, `body`, `created_at`, `updated_at`) VALUES
(1, '<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-8XK4S31WY1\"></script>', '<script>\r\n  window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments);}\r\n  gtag(\'js\', new Date());\r\n  gtag(\'config\', \'G-8XK4S31WY1\');\r\n</script>', '2021-04-13 22:53:15', '2023-05-24 09:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `bottom_enquiry`
--

CREATE TABLE `bottom_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bottom_enquiry`
--

INSERT INTO `bottom_enquiry` (`id`, `name`, `course`, `city`, `phone`, `created`, `update_at`) VALUES
(3, '86786876876867867', 'NDA', 'uiyiuiuiuiiiiiiiiiiiiii', '5676666666', '2023-06-02 10:24:40', '2023-06-02 10:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `contect`
--

CREATE TABLE `contect` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` mediumtext NOT NULL,
  `massage` mediumtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contect`
--

INSERT INTO `contect` (`id`, `name`, `email`, `phone`, `subject`, `massage`, `created_at`) VALUES
(5, 'mukul', 'mukul@gmail.com', '9997786978', 'this is test', 'demo messege', '2023-05-31 17:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `fees_pay`
--

CREATE TABLE `fees_pay` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `course` varchar(150) NOT NULL,
  `currency` varchar(150) NOT NULL,
  `fess` int(11) NOT NULL,
  `massage` mediumtext NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fees_pay`
--

INSERT INTO `fees_pay` (`id`, `name`, `email`, `phone`, `address`, `course`, `currency`, `fess`, `massage`, `create_at`, `update_at`) VALUES
(1, 'Arvind singh', 'phparvind89@gmail.com', '07895110578', 'noida', 'NDA', 'inr', 52855, 'hii', '2023-05-06 23:15:15', '2023-05-06 23:15:15'),
(4, 'xvxdf', 'shubham.balj@gmail.com', '07895110578', 'dgdfg', 'NDA', 'i', 8554, 'sd', '2023-05-08 14:57:44', '2023-05-08 14:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `online_query`
--

CREATE TABLE `online_query` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `online_query`
--

INSERT INTO `online_query` (`id`, `name`, `email`, `course`, `phone`, `created`, `update_at`) VALUES
(1, 'arvind', 'phparvind89@gmail.com', 'NDA', '7895110578', '2023-05-06 14:02:41', '2023-05-06 13:24:01'),
(2, 'tinku', 'tinku@gmail.com', 'NDA', '7895110578', '2023-05-06 14:02:41', '2023-05-06 13:37:12');

-- --------------------------------------------------------

--
-- Table structure for table `online_register`
--

CREATE TABLE `online_register` (
  `id` int(11) NOT NULL,
  `course` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(155) NOT NULL,
  `date` date NOT NULL,
  `crosspons_address` mediumtext NOT NULL,
  `parmnet_address` mediumtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin_code` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `borad_name` varchar(255) NOT NULL,
  `parentage` varchar(255) NOT NULL,
  `passing_year` varchar(255) NOT NULL,
  `medium` varchar(255) NOT NULL,
  `inr` varchar(20) NOT NULL,
  `fees` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `online_register`
--

INSERT INTO `online_register` (`id`, `course`, `user_name`, `f_name`, `m_name`, `mobile`, `email`, `date`, `crosspons_address`, `parmnet_address`, `city`, `pin_code`, `state`, `qualification`, `borad_name`, `parentage`, `passing_year`, `medium`, `inr`, `fees`, `create_at`, `update`) VALUES
(1, 'SSB Interview', 'Arvind singh', 'yeapal singh', 'anndi devi', '07895110578', 'phparvind89@gmail.com', '2023-05-31', 'noida', 'palling', 'uttrakhand', '246419', 'Andaman and Nicobar Islands', '10th Passed', 'uk borad', '50%', '2016', '45', 'INR', '₹ 5000', '2023-05-06 20:01:57', '2023-05-06 20:01:57'),
(5, 'AFCAT', 'test', 'test', 'test', '9441742935', 'phptset@gmail.com', '2023-05-17', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'uk borad', 'Uttarakhand', '12th Passed', 'uk borad', '50%', '2016', '45', 'INR', '₹ 5000', '2023-05-08 14:21:28', '2023-05-08 14:21:28'),
(6, 'SSB Interview', 'test', 'test', 'test', '07895110578', 'shubham.balj@gmail.com', '2023-05-17', 'dgdfg', 'fdgfdg', 'dfg', '778985', 'Himachal Pradesh', '10th Passed', 'uk borad', '50%', '2054', 'sfdsf', 'INR', '₹ 5000', '2023-05-08 14:56:32', '2023-05-08 14:56:32');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `course` varchar(150) NOT NULL,
  `time_stamp` datetime NOT NULL DEFAULT current_timestamp(),
  `update_time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `phone`, `course`, `time_stamp`, `update_time`) VALUES
(2, 'arvind', '7895110578', 'NDA Foundation', '2023-05-06 11:57:35', '2023-05-06 11:57:35'),
(3, 'tinku', '9411742935', 'SSB Interview', '2023-05-06 12:18:32', '2023-05-06 12:18:32'),
(6, 'anju rana', '07895110578', 'CDS', '2023-05-07 17:56:58', '2023-05-07 17:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(55) NOT NULL,
  `title` varchar(255) NOT NULL,
  `count` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `title`, `count`, `created_at`, `updated_at`) VALUES
(30, 'how to', 9, '2023-05-30 00:02:01', NULL),
(34, 'How to fix Issues', 1, '2023-05-30 01:18:04', NULL),
(36, 'rrr', 7, '2023-05-30 02:03:28', NULL),
(38, 'technology', 17, '2023-05-30 02:16:32', NULL),
(42, 'tech', 73, '2023-05-30 02:39:18', NULL),
(67, 'tec', 1, '2023-05-30 06:44:19', NULL),
(68, 'nda', 4, '2023-05-30 06:48:53', NULL),
(69, 'coaching', 1, '2023-05-30 06:49:04', NULL),
(70, '---nda', 1, '2023-05-30 23:22:08', NULL),
(72, 'tinku', 5, '2023-05-31 01:36:20', NULL),
(73, 'tghj', 1, '2023-05-31 01:37:40', NULL),
(74, 'test', 6, '2023-05-31 01:50:06', NULL),
(75, 'u', 1, '2023-05-31 01:52:56', NULL),
(76, 'ut', 3, '2023-05-31 01:54:27', NULL),
(77, 'tink', 1, '2023-05-31 01:58:22', NULL),
(78, 'rggg', 1, '2023-05-31 02:00:04', NULL),
(79, 'thhh', 2, '2023-05-31 02:00:58', NULL),
(80, 'dgfds', 1, '2023-05-31 02:03:27', NULL),
(81, 'sdfgh', 1, '2023-05-31 02:04:38', NULL),
(82, 'tst', 2, '2023-05-31 02:19:34', NULL),
(83, 'aarr', 1, '2023-05-31 02:20:21', NULL),
(84, 'fdfd', 1, '2023-05-31 02:21:32', NULL),
(85, 'arvind', 2, '2023-05-31 02:25:21', NULL),
(86, 'trfd', 2, '2023-05-31 02:27:22', NULL),
(87, 'arrrrrrr', 1, '2023-05-31 02:31:11', NULL),
(88, 'ggggg', 3, '2023-05-31 02:32:53', NULL),
(89, 'zzzzz', 1, '2023-05-31 02:33:20', NULL),
(90, 'zzazzz', 1, '2023-05-31 02:33:27', NULL),
(91, 'tttt', 7, '2023-05-31 02:35:27', NULL),
(92, 'hello', 38, '2023-05-31 04:12:59', NULL),
(93, 'yello', 8, '2023-05-31 04:34:31', NULL),
(94, 'url', 1, '2023-05-31 04:40:31', NULL),
(95, 'yehksdf', 1, '2023-05-31 04:54:04', NULL),
(96, 'thiss', 1, '2023-05-31 04:54:14', NULL),
(97, 'helllloo', 4, '2023-05-31 04:54:55', NULL),
(98, 'abc', 3, '2023-05-31 04:58:18', NULL),
(99, 'cast', 1, '2023-05-31 05:01:33', NULL),
(100, 'set', 2, '2023-05-31 05:01:51', NULL),
(101, 'get', 4, '2023-05-31 05:04:29', NULL),
(102, 'helll', 1, '2023-05-31 05:06:55', NULL),
(103, 'herss', 1, '2023-05-31 05:07:28', NULL),
(104, 'herso', 2, '2023-05-31 05:07:37', NULL),
(105, 'oojjj', 2, '2023-05-31 05:08:04', NULL),
(106, '', 1, '2023-05-31 05:08:28', NULL),
(107, 'rtwww', 2, '2023-05-31 05:08:36', NULL),
(108, 'djk', 1, '2023-05-31 05:09:06', NULL),
(109, 'ttgg', 1, '2023-05-31 05:09:12', NULL),
(110, 'hewr', 1, '2023-05-31 05:26:14', NULL),
(111, 'ssss', 2, '2023-05-31 05:26:24', NULL),
(112, 'ddddd', 1, '2023-05-31 05:27:11', NULL),
(114, 'oooo', 2, '2023-06-06 00:46:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sidebar_enquiry`
--

CREATE TABLE `sidebar_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sitemaptest`
--

CREATE TABLE `sitemaptest` (
  `id` int(55) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sitemaptest`
--

INSERT INTO `sitemaptest` (`id`, `url`, `description`, `created_at`, `updated_at`) VALUES
(1, 'http://127.0.0.1:8000/admin/sitemap', 'this is admin sitemap', '2023-06-01 10:59:42', '2023-06-01 10:59:49'),
(2, 'http://127.0.0.1:8000/admin/pages', 'admin page url', '2023-05-31 10:59:53', '2023-05-30 11:00:04'),
(3, 'http://127.0.0.1:8000/admin/blogs', 'admin blog page', '2023-05-29 11:00:13', '2023-06-29 11:00:18'),
(4, 'http://127.0.0.1:8000/admin/query', 'query page', '2023-05-28 11:00:23', '2023-05-28 11:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `site_map`
--

CREATE TABLE `site_map` (
  `id` int(55) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `changefre` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `site_map`
--

INSERT INTO `site_map` (`id`, `page_url`, `changefre`, `priority`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(13, 'http://127.0.0.1:8000/', 'weekly', '1.0', 0, NULL, '2023-06-02 06:13:02', '2023-06-02 06:48:58'),
(28, 'http://127.0.0.1:8000/nda-coaching', 'weekly', '0.90', 0, 'nda-coaching28', '2023-06-02 08:23:23', '2023-06-06 05:35:46'),
(31, 'http://127.0.0.1:8000/bsf-army-marnuqwww', 'weekly', '0.90', 0, 'bsf-army-marnuqwww74', '2023-06-05 10:21:04', '2023-06-06 05:33:53'),
(32, 'http://127.0.0.1:8000/About-Us', 'weekly', '0.90', 0, 'About-Us30', '2023-06-06 05:09:32', '2023-06-06 06:08:22'),
(33, 'http://127.0.0.1:8000/Blog', 'weekly', '0.90', 0, 'Blog100', '2023-06-06 05:10:40', '2023-06-06 06:15:38'),
(34, 'http://127.0.0.1:8000/Contact-Us', 'weekly', '0.90', 0, 'Contact-Us57', '2023-06-06 05:11:47', '2023-06-06 06:15:22');

-- --------------------------------------------------------

--
-- Table structure for table `site_update`
--

CREATE TABLE `site_update` (
  `id` int(11) NOT NULL,
  `logo` varchar(512) NOT NULL,
  `footer_logo` varchar(512) DEFAULT NULL,
  `about` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `site_update`
--

INSERT INTO `site_update` (`id`, `logo`, `footer_logo`, `about`, `created_at`, `updated_at`) VALUES
(1, '1684147769.png', '1679559847.webp', 'India’s first largest private defence institute in Lucknow is dedicated to providing top-notch training and resources to help defence aspirants succeed in their pursuit of a career in the Indian Armed Forces.', '2021-04-05 19:27:59', '2023-05-23 04:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `socal_updated`
--

CREATE TABLE `socal_updated` (
  `id` int(11) NOT NULL,
  `Facebook` varchar(150) NOT NULL,
  `twitter` varchar(120) NOT NULL,
  `youtube` varchar(50) NOT NULL,
  `intagram` varchar(120) NOT NULL,
  `linkdan` varchar(120) NOT NULL,
  `printest` varchar(120) NOT NULL,
  `crated_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `socal_updated`
--

INSERT INTO `socal_updated` (`id`, `Facebook`, `twitter`, `youtube`, `intagram`, `linkdan`, `printest`, `crated_date`, `update_date`) VALUES
(1, 'https://www.facebook.com/profile.php?id=100092694738003', 'https://twitter.com/NdaLucknow', 'https://www.youtube.com/@ShieldDefenceCollege', 'https://www.instagram.com/ndacoachinglucknow4', 'https://www.linkedin.com', 'https://in.pinterest.com123', '2023-01-13 11:13:13', '2023-01-13 11:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(155) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(150) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `page_permission` varchar(255) NOT NULL,
  `status` tinytext NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `email_verified_at`, `password`, `role`, `ip_address`, `page_permission`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Shield Defence', 'user', 'admin@gmail.com', NULL, '$2y$10$gGySTh6mE3LeCY.6koGiJumJopopefgmZXm/Qqyu/lON9QRNpUN.W', 'admin', '122.160.44.241', 'updates, pages, blogs, category, services, Contect List, Online Enquery, Call Back, Registaion, users', '0', NULL, '2023-05-10 13:44:40', NULL),
(18, 'mukul', 'rawat', 'mukul@gmail.com', NULL, '$2y$10$C8aO2iNoUOnHWByXeTluV.T9/TgKIF99C0Xna7rWs4IVhZ4DglbtK', 'user', '122.160.44.241', 'pages, blogs, category', '1', NULL, '2023-06-02 13:06:13', NULL),
(19, 'test', 'test', 'test@gmail.com', NULL, '$2y$10$YTCI8YL6CBgwtSsQEZyUru4d5NEWo38Tsn3QYDXsfmn4P3xkKUDqi', 'user', '122.160.44.241', 'updates, pages, blogs', '1', NULL, '2023-06-05 04:48:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `webmaster_update`
--

CREATE TABLE `webmaster_update` (
  `id` int(11) NOT NULL,
  `google` varchar(512) DEFAULT NULL,
  `yandex` varchar(512) DEFAULT NULL,
  `pintrest` varchar(512) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `webmaster_update`
--

INSERT INTO `webmaster_update` (`id`, `google`, `yandex`, `pintrest`, `created_at`, `updated_at`) VALUES
(1, 'MBwiRJcC5YYWspbwJ3tc3-kl5uXo3Gia-kRw2bXtnJw', 'https://www.google.com/', 'https://www.google.com/', '2021-04-05 20:18:36', '2023-05-24 15:09:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_blog`
--
ALTER TABLE `add_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_catgury`
--
ALTER TABLE `add_catgury`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_page`
--
ALTER TABLE `add_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_services`
--
ALTER TABLE `add_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analytics_update`
--
ALTER TABLE `analytics_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bottom_enquiry`
--
ALTER TABLE `bottom_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contect`
--
ALTER TABLE `contect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_pay`
--
ALTER TABLE `fees_pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_query`
--
ALTER TABLE `online_query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_register`
--
ALTER TABLE `online_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebar_enquiry`
--
ALTER TABLE `sidebar_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitemaptest`
--
ALTER TABLE `sitemaptest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_map`
--
ALTER TABLE `site_map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_update`
--
ALTER TABLE `site_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socal_updated`
--
ALTER TABLE `socal_updated`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `webmaster_update`
--
ALTER TABLE `webmaster_update`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_blog`
--
ALTER TABLE `add_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `add_catgury`
--
ALTER TABLE `add_catgury`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_page`
--
ALTER TABLE `add_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `add_services`
--
ALTER TABLE `add_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `analytics_update`
--
ALTER TABLE `analytics_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bottom_enquiry`
--
ALTER TABLE `bottom_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contect`
--
ALTER TABLE `contect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fees_pay`
--
ALTER TABLE `fees_pay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `online_query`
--
ALTER TABLE `online_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `online_register`
--
ALTER TABLE `online_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `sidebar_enquiry`
--
ALTER TABLE `sidebar_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sitemaptest`
--
ALTER TABLE `sitemaptest`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site_map`
--
ALTER TABLE `site_map`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `site_update`
--
ALTER TABLE `site_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socal_updated`
--
ALTER TABLE `socal_updated`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `webmaster_update`
--
ALTER TABLE `webmaster_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
