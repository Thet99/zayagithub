-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2018 at 04:35 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zayatdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2018-03-22 23:28:19', '2018-03-22 23:28:19'),
(2, NULL, 1, 'Category 2', 'category-2', '2018-03-22 23:28:19', '2018-03-22 23:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `communities`
--

CREATE TABLE `communities` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caption` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `body` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `communities`
--

INSERT INTO `communities` (`id`, `title`, `caption`, `photo`, `body`, `created_at`, `updated_at`) VALUES
(1, 'community', 'We are community that is:', 'communities/May2018/eimicw02pz9bBpESaYhG.jpg', 'ZAYAT survives through its members. They are the most important aspect of our space.', '2018-05-31 00:30:38', '2018-05-31 00:30:38'),
(2, 'Community', 'Supported', 'communities/May2018/ZNRKKJTyQOe7SBgzn9b7.jpg', 'ZAYAT is one of the event spaces in the Yangon for business workshops and meet-ups.', '2018-05-31 00:33:27', '2018-05-31 00:33:27'),
(3, 'Talent', 'Coordinator', 'communities/May2018/e5wZJ45aYehxrmebD5Oc.jpg', 'ZAYAT members often collaborate on projects and hire each other. A few companies were even founded here.', '2018-05-31 00:34:38', '2018-05-31 00:34:38'),
(4, 'Local', 'Minded', 'communities/May2018/p7PnnD4TvgFvIUGvR4Ef.jpg', 'Supporting for local businesses is at the very heart of what ZAYAT believes in.', '2018-05-31 00:36:07', '2018-05-31 00:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(2, 1, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '', 2),
(3, 1, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, '', 3),
(4, 1, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '', 4),
(5, 1, 'excerpt', 'text_area', 'excerpt', 1, 0, 1, 1, 1, 1, '', 5),
(6, 1, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '', 6),
(7, 1, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(8, 1, 'slug', 'text', 'slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}', 8),
(9, 1, 'meta_description', 'text_area', 'meta_description', 1, 0, 1, 1, 1, 1, '', 9),
(10, 1, 'meta_keywords', 'text_area', 'meta_keywords', 1, 0, 1, 1, 1, 1, '', 10),
(11, 1, 'status', 'select_dropdown', 'status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(12, 1, 'created_at', 'timestamp', 'created_at', 0, 1, 1, 0, 0, 0, '', 12),
(13, 1, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 13),
(14, 2, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(15, 2, 'author_id', 'text', 'author_id', 1, 0, 0, 0, 0, 0, '', 2),
(16, 2, 'title', 'text', 'title', 1, 1, 1, 1, 1, 1, '', 3),
(17, 2, 'excerpt', 'text_area', 'excerpt', 1, 0, 1, 1, 1, 1, '', 4),
(18, 2, 'body', 'rich_text_box', 'body', 1, 0, 1, 1, 1, 1, '', 5),
(19, 2, 'slug', 'text', 'slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"}}', 6),
(20, 2, 'meta_description', 'text', 'meta_description', 1, 0, 1, 1, 1, 1, '', 7),
(21, 2, 'meta_keywords', 'text', 'meta_keywords', 1, 0, 1, 1, 1, 1, '', 8),
(22, 2, 'status', 'select_dropdown', 'status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(23, 2, 'created_at', 'timestamp', 'created_at', 1, 1, 1, 0, 0, 0, '', 10),
(24, 2, 'updated_at', 'timestamp', 'updated_at', 1, 0, 0, 0, 0, 0, '', 11),
(25, 2, 'image', 'image', 'image', 0, 1, 1, 1, 1, 1, '', 12),
(26, 3, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, NULL, 1),
(28, 3, 'email', 'text', 'email', 1, 1, 1, 1, 1, 1, NULL, 4),
(29, 3, 'password', 'password', 'password', 1, 0, 0, 1, 1, 0, NULL, 5),
(30, 3, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"roles\",\"pivot\":\"0\"}', 11),
(31, 3, 'remember_token', 'text', 'remember_token', 0, 0, 0, 0, 0, 0, NULL, 6),
(32, 3, 'created_at', 'timestamp', 'created_at', 0, 1, 1, 0, 0, 0, NULL, 7),
(33, 3, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, NULL, 8),
(34, 3, 'avatar', 'image', 'avatar', 0, 1, 1, 1, 1, 1, NULL, 9),
(35, 5, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(36, 5, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '', 2),
(37, 5, 'created_at', 'timestamp', 'created_at', 0, 0, 0, 0, 0, 0, '', 3),
(38, 5, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 4),
(39, 4, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(40, 4, 'parent_id', 'select_dropdown', 'parent_id', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(41, 4, 'order', 'text', 'order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(42, 4, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '', 4),
(43, 4, 'slug', 'text', 'slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(44, 4, 'created_at', 'timestamp', 'created_at', 0, 0, 1, 0, 0, 0, '', 6),
(45, 4, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 7),
(46, 6, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(47, 6, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(48, 6, 'created_at', 'timestamp', 'created_at', 0, 0, 0, 0, 0, 0, '', 3),
(49, 6, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 4),
(50, 6, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '', 5),
(51, 1, 'seo_title', 'text', 'seo_title', 0, 1, 1, 1, 1, 1, '', 14),
(52, 1, 'featured', 'checkbox', 'featured', 1, 1, 1, 1, 1, 1, '', 15),
(53, 3, 'role_id', 'text', 'role_id', 0, 1, 0, 1, 1, 1, NULL, 10),
(54, 7, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(55, 7, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, NULL, 2),
(56, 7, 'shortnote', 'text_area', 'Shortnote', 0, 1, 1, 1, 1, 1, NULL, 3),
(57, 7, 'detail', 'text_area', 'Detail', 0, 1, 1, 1, 1, 1, NULL, 4),
(58, 7, 'ticket_price', 'text', 'Ticket Price', 0, 1, 1, 1, 1, 1, NULL, 5),
(59, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 6),
(60, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(61, 7, 'deleted_at', 'timestamp', 'Deleted At', 0, 1, 1, 1, 1, 1, NULL, 8),
(62, 8, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(63, 8, 'question', 'text_area', 'Question', 0, 1, 1, 1, 1, 1, NULL, 2),
(64, 8, 'answer', 'text_area', 'Answer', 0, 1, 1, 1, 1, 1, NULL, 3),
(65, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 4),
(66, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 5),
(67, 11, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(68, 11, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, NULL, 2),
(69, 11, 'price', 'text', 'Price', 0, 1, 1, 1, 1, 1, NULL, 3),
(70, 11, 'detail', 'rich_text_box', 'Detail', 0, 1, 1, 1, 1, 1, NULL, 4),
(71, 11, 'service', 'rich_text_box', 'Service', 0, 1, 1, 1, 1, 1, NULL, 5),
(72, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 6),
(73, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(74, 15, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(75, 15, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, NULL, 2),
(76, 15, 'body', 'rich_text_box', 'Body', 0, 1, 1, 1, 1, 1, NULL, 3),
(77, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 4),
(78, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 5),
(79, 16, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(80, 16, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, NULL, 2),
(81, 16, 'icon', 'text', 'Icon', 0, 1, 1, 1, 1, 1, NULL, 3),
(82, 21, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(83, 21, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, NULL, 2),
(84, 21, 'icon', 'text', 'Icon', 0, 1, 1, 1, 1, 1, NULL, 3),
(85, 21, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 4),
(86, 21, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 5),
(89, 22, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(90, 22, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(91, 22, 'des', 'text', 'Des', 1, 1, 1, 1, 1, 1, NULL, 3),
(92, 22, 'created_at', 'checkbox', 'Created At', 1, 1, 1, 1, 1, 1, NULL, 4),
(93, 22, 'update_at', 'checkbox', 'Update At', 1, 1, 1, 1, 1, 1, NULL, 5),
(95, 11, 'membership_id', 'text', 'Membership Id', 1, 1, 1, 1, 1, 1, NULL, 2),
(96, 11, 'plan_belongsto_membership_relationship', 'relationship', 'memberships', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Membership\",\"table\":\"memberships\",\"type\":\"belongsTo\",\"column\":\"membership_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\"}', 8),
(97, 23, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(98, 23, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, NULL, 2),
(99, 23, 'photo', 'image', 'Photo', 0, 1, 1, 1, 1, 1, NULL, 3),
(100, 23, 'des', 'rich_text_box', 'Des', 0, 1, 1, 1, 1, 1, NULL, 4),
(101, 23, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 5),
(102, 23, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 6),
(103, 24, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(104, 24, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, NULL, 2),
(105, 24, 'slug', 'text', 'Slug', 0, 1, 1, 1, 1, 1, NULL, 3),
(106, 24, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 4),
(107, 24, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 5),
(108, 3, 'fname', 'text', 'Fname', 1, 1, 1, 1, 1, 1, NULL, 2),
(109, 3, 'lname', 'text', 'Lname', 1, 1, 1, 1, 1, 1, NULL, 3),
(110, 3, 'mobile', 'text', 'Mobile', 0, 1, 1, 1, 1, 1, NULL, 12),
(111, 3, 'address', 'checkbox', 'Address', 0, 0, 0, 0, 0, 0, NULL, 13),
(112, 3, 'company', 'text', 'Company', 0, 1, 1, 1, 1, 1, NULL, 14),
(113, 3, 'position', 'checkbox', 'Position', 0, 0, 0, 0, 0, 0, NULL, 15),
(114, 3, 'gender', 'checkbox', 'Gender', 0, 0, 0, 0, 0, 0, NULL, 16),
(115, 25, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(116, 25, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, NULL, 2),
(117, 25, 'caption', 'text', 'Caption', 0, 1, 1, 1, 1, 1, NULL, 3),
(118, 25, 'photo', 'image', 'Photo', 0, 1, 1, 1, 1, 1, NULL, 4),
(119, 25, 'body', 'text_area', 'Body', 0, 1, 1, 1, 1, 1, NULL, 5),
(120, 25, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 6),
(121, 25, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `created_at`, `updated_at`) VALUES
(1, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, '2018-03-22 23:28:12', '2018-03-22 23:28:12'),
(2, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, '2018-03-22 23:28:12', '2018-03-22 23:28:12'),
(3, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', NULL, NULL, 1, 0, '2018-03-22 23:28:12', '2018-06-21 04:01:22'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, '2018-03-22 23:28:12', '2018-03-22 23:28:12'),
(5, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, '2018-03-22 23:28:12', '2018-03-22 23:28:12'),
(6, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, '2018-03-22 23:28:12', '2018-03-22 23:28:12'),
(7, 'events', 'events', 'Event', 'Events', NULL, 'App\\Event', NULL, 'Voyager\\EventController', NULL, 1, 0, '2018-03-22 23:41:32', '2018-03-23 02:47:45'),
(8, 'faqs', 'faqs', 'Faq', 'Faqs', NULL, 'App\\Faq', NULL, NULL, NULL, 1, 0, '2018-03-28 21:30:24', '2018-03-28 21:30:24'),
(11, 'plans', 'plans', 'Plan', 'Plans', NULL, 'App\\Plan', NULL, NULL, NULL, 1, 0, '2018-04-02 01:48:21', '2018-04-02 01:48:21'),
(15, 'terms', 'terms', 'Term', 'Terms', NULL, 'App\\Term', NULL, NULL, NULL, 1, 0, '2018-04-05 21:23:37', '2018-04-05 21:23:37'),
(16, 'groups', 'groups', 'Group', 'Groups', NULL, 'App\\Group', NULL, NULL, NULL, 1, 0, '2018-05-14 22:05:14', '2018-05-14 22:05:14'),
(21, 'facilities', 'facilities', 'Facility', 'Facilities', NULL, 'App\\Facility', NULL, NULL, NULL, 1, 0, '2018-05-15 00:01:10', '2018-05-15 00:01:10'),
(22, 'memberships', 'memberships', 'Membership', 'Memberships', NULL, 'App\\Membership', NULL, NULL, NULL, 1, 0, '2018-05-15 02:20:25', '2018-05-15 02:20:25'),
(23, 'locations', 'locations', 'Location', 'Locations', NULL, 'App\\Location', NULL, NULL, NULL, 1, 0, '2018-06-18 10:28:00', '2018-06-18 10:28:00'),
(24, 'positions', 'positions', 'Position', 'Positions', NULL, 'App\\Position', NULL, NULL, NULL, 1, 0, '2018-06-21 01:14:18', '2018-06-21 01:14:18'),
(25, 'communities', 'communities', 'Community', 'Communities', NULL, 'App\\Community', NULL, NULL, NULL, 1, 0, '2018-06-21 04:27:56', '2018-06-21 04:27:56');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contact`
--

CREATE TABLE `emergency_contact` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shortnote` text COLLATE utf8_unicode_ci,
  `detail` text COLLATE utf8_unicode_ci,
  `ticket_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `event_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `shortnote`, `detail`, `ticket_price`, `created_at`, `updated_at`, `deleted_at`, `event_date`) VALUES
(10, 'Success Stories of 1379', 'Success Stories of 1379\r\nSaturday 6 PM - 9 PM\r\n31-3-2018', 'unning a business, no matter what size, isn\'t easy. One thing we\'ve learned at ZAYAT is that founders can come from any type of industry, background or age group. As we all know, Myanmar New Year is around the corner and we thought it would be a great idea for entrepreneurs to come and share/celebrate who beat the odds and launched successful companies in 1379! We would love to see you all. Why should they attend? Simple! - You\'ll make connections - You\'ll learn about your industry and others - You\'ll get some inspiration Last but not the least - You\'ll get to meet our team, enjoy food, drinks and free entertainment. Where? ZAYAT (Co-working Space) No.76/A, South Okkalapa Industrial 1st Street, South Okkalapa Tsp, Yangon Find us on Google Maps: https://goo.gl/maps/47iXxzTJpNL2) Catering by Father\'s Office and drinks provided by Myanmar Beer!', '30', '2018-03-29 02:55:28', '2018-04-06 01:50:34', NULL, '18:03:31:14:48:01'),
(13, '\"Dots behind the Architecture \" Part-4', 'Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, repudiandae.', 'detail', '25', '2018-04-01 22:44:34', '2018-04-06 02:22:19', NULL, '18:04:28:15:22:12'),
(17, '\" Dots behind the Architecture \" Part -2 (Start points of Architects )More video clips are coming', 'Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, repudiandae.', 'detail for detail', '34', '2018-04-01 23:03:34', '2018-04-01 23:03:34', NULL, NULL),
(18, 'Esperado de al do crado', 'lorem ipsum sit amit spinish destodo comodo su de la ate pdo', 'https://www.youtube.com/watch?v=ZC7dsZJl_nE', '124', '2018-04-03 02:09:10', '2018-04-04 22:07:59', NULL, NULL),
(21, 'A Brief about AI', 'Benefits & Risks of Artificial Intelligence - Future of Life', '<p>WHAT IS AI?</p>\r\n<p>From SIRI to self-driving cars, artificial intelligence (AI) is progressing rapidly. While science fiction often portrays AI as robots with human-like characteristics, AI can encompass anything from Google&rsquo;s search algorithms to IBM&rsquo;s Watson to autonomous weapons.</p>\r\n<p>&nbsp;</p>\r\n<p>Artificial intelligence today is properly known as narrow AI (or weak AI), in that it is designed to perform a narrow task (e.g. only facial recognition or only internet searches or only driving a car). However, the long-term goal of many researchers is to create general AI (AGI or strong AI). While narrow AI may outperform humans at whatever its specific task is, like playing chess or solving equations, AGI would outperform humans at nearly every cognitive task.</p>\r\n<p>&nbsp;</p>\r\n<p>WHY RESEARCH AI SAFETY?</p>\r\n<p>In the near term, the goal of keeping AI&rsquo;s impact on society beneficial motivates research in many areas, from economics and law to technical topics such as verification, validity, security and control. Whereas it may be little more than a minor nuisance if your laptop crashes or gets hacked, it becomes all the more important that an AI system does what you want it to do if it controls your car, your airplane, your pacemaker, your automated trading system or your power grid. Another short-term challenge is preventing a devastating arms race in lethal autonomous weapons.</p>\r\n<p>&nbsp;</p>\r\n<p>In the long term, an important question is what will happen if the quest for strong AI succeeds and an AI system becomes better than humans at all cognitive tasks. As pointed out by I.J. Good in 1965, designing smarter AI systems is itself a cognitive task. Such a system could potentially undergo recursive self-improvement, triggering an intelligence explosion leaving human intellect far behind. By inventing revolutionary new technologies, such a superintelligence might help us eradicate war, disease, and poverty, and so the creation of strong AI might be the biggest event in human history. Some experts have expressed concern, though, that it might also be the last, unless we learn to align the goals of the AI with ours before it becomes superintelligent.</p>\r\n<p>&nbsp;</p>\r\n<p>There are some who question whether strong AI will ever be achieved, and others who insist that the creation of superintelligent AI is guaranteed to be beneficial. At FLI we recognize both of these possibilities, but also recognize the potential for an artificial intelligence system to intentionally or unintentionally cause great harm. We believe research today will help us better prepare for and prevent such potentially negative consequences in the future, thus enjoying the benefits of AI while avoiding pitfalls.</p>\r\n<p>&nbsp;</p>\r\n<p>HOW CAN AI BE DANGEROUS?</p>\r\n<p>Most researchers agree that a superintelligent AI is unlikely to exhibit human emotions like love or hate, and that there is no reason to expect AI to become intentionally benevolent or malevolent. Instead, when considering how AI might become a risk, experts think two scenarios most likely:</p>\r\n<p>&nbsp;</p>\r\n<p>The AI is programmed to do something devastating: Autonomous weapons are artificial intelligence systems that are programmed to kill. In the hands of the wrong person, these weapons could easily cause mass casualties. Moreover, an AI arms race could inadvertently lead to an AI war that also results in mass casualties. To avoid being thwarted by the enemy, these weapons would be designed to be extremely difficult to simply &ldquo;turn off,&rdquo; so humans could plausibly lose control of such a situation. This risk is one that&rsquo;s present even with narrow AI, but grows as levels of AI intelligence and autonomy increase.</p>\r\n<p>The AI is programmed to do something beneficial, but it develops a destructive method for achieving its goal: This can happen whenever we fail to fully align the AI&rsquo;s goals with ours, which is strikingly difficult. If you ask an obedient intelligent car to take you to the airport as fast as possible, it might get you there chased by helicopters and covered in vomit, doing not what you wanted but literally what you asked for. If a superintelligent system is tasked with a ambitious geoengineering project, it might wreak havoc with our ecosystem as a side effect, and view human attempts to stop it as a threat to be met.</p>\r\n<p>As these examples illustrate, the concern about advanced AI isn&rsquo;t malevolence but competence. A super-intelligent AI will be extremely good at accomplishing its goals, and if those goals aren&rsquo;t aligned with ours, we have a problem. You&rsquo;re probably not an evil ant-hater who steps on ants out of malice, but if you&rsquo;re in charge of a hydroelectric green energy project and there&rsquo;s an anthill in the region to be flooded, too bad for the ants. A key goal of AI safety research is to never place humanity in the position of those ants.</p>\r\n<p>&nbsp;</p>\r\n<p>WHY THE RECENT INTEREST IN AI SAFETY</p>\r\n<p>Stephen Hawking, Elon Musk, Steve Wozniak, Bill Gates, and many other big names in science and technology have recently expressed concern in the media and via open letters about the risks posed by AI, joined by many leading AI researchers. Why is the subject suddenly in the headlines?</p>\r\n<p>&nbsp;</p>\r\n<p>The idea that the quest for strong AI would ultimately succeed was long thought of as science fiction, centuries or more away. However, thanks to recent breakthroughs, many AI milestones, which experts viewed as decades away merely five years ago, have now been reached, making many experts take seriously the possibility of superintelligence in our lifetime. While some experts still guess that human-level AI is centuries away, most AI researches at the 2015 Puerto Rico Conference guessed that it would happen before 2060. Since it may take decades to complete the required safety research, it is prudent to start it now.</p>\r\n<p>&nbsp;</p>\r\n<p>Because AI has the potential to become more intelligent than any human, we have no surefire way of predicting how it will behave. We can&rsquo;t use past technological developments as much of a basis because we&rsquo;ve never created anything that has the ability to, wittingly or unwittingly, outsmart us. The best example of what we could face may be our own evolution. People now control the planet, not because we&rsquo;re the strongest, fastest or biggest, but because we&rsquo;re the smartest. If we&rsquo;re no longer the smartest, are we assured to remain in control?</p>\r\n<p>&nbsp;</p>\r\n<p>FLI&rsquo;s position is that our civilization will flourish as long as we win the race between the growing power of technology and the wisdom with which we manage it. In the case of AI technology, FLI&rsquo;s position is that the best way to win that race is not to impede the former, but to accelerate the latter, by supporting AI safety research.</p>\r\n<p>&nbsp;</p>\r\n<p>THE TOP MYTHS ABOUT ADVANCED AI</p>\r\n<p>A captivating conversation is taking place about the future of artificial intelligence and what it will/should mean for humanity. There are fascinating controversies where the world&rsquo;s leading experts disagree, such as: AI&rsquo;s future impact on the job market; if/when human-level AI will be developed; whether this will lead to an intelligence explosion; and whether this is something we should welcome or fear. But there are also many examples of of boring pseudo-controversies caused by people misunderstanding and talking past each other. To help ourselves focus on the interesting controversies and open questions &mdash; and not on the misunderstandings &mdash; let&rsquo;s&nbsp; clear up some of the most common myths.</p>\r\n<p>&nbsp;</p>', NULL, '2018-05-04 02:44:24', '2018-05-04 02:44:24', NULL, NULL),
(22, 'Learn AI - Artificial Intelligence Course', 'Artificial Intelligence Course', '<h2 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1.5rem; color: #2e3d49; -webkit-font-smoothing: antialiased; font-size: 2rem; line-height: 3.5rem; font-weight: 300; font-family: \'Open Sans\', sans-serif;\">About this Course</h2>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1.5rem; font-size: 16px; line-height: 1.75rem; color: #525c65; font-family: \'Open Sans\', sans-serif;\">Artificial Intelligence (AI) is a field that has a long history but is still constantly and actively growing and changing. In this course, you&rsquo;ll learn the basics of modern AI as well as some of the representative applications of AI. Along the way, we also hope to excite you about the numerous applications and huge possibilities in the field of AI, which continues to expand human capability beyond our imagination.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1.5rem; font-size: 16px; line-height: 1.75rem; color: #525c65; font-family: \'Open Sans\', sans-serif;\"><span style=\"box-sizing: border-box; font-weight: bolder;\"><em style=\"box-sizing: border-box;\">Note: Parts of this course are featured in the&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; border-bottom: 1px solid #91daee; text-decoration-line: none; color: #525c65; transition: color 0.3s ease; cursor: pointer;\" href=\"https://www.udacity.com/course/machine-learning-engineer-nanodegree--nd009\">Machine Learning Engineer Nanodegree</a>&nbsp;and the&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; border-bottom: 1px solid #91daee; text-decoration-line: none; color: #525c65; transition: color 0.3s ease; cursor: pointer;\" href=\"https://www.udacity.com/course/data-analyst-nanodegree--nd002\">Data Analyst Nanodegree</a>&nbsp;programs. If you are interested in AI, be sure to check out those programs as well</em></span></p>', NULL, '2018-05-04 02:59:18', '2018-05-04 02:59:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event_photos`
--

CREATE TABLE `event_photos` (
  `photo_id` int(10) UNSIGNED NOT NULL,
  `photo_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `forhome` int(11) DEFAULT NULL,
  `movie_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event_photos`
--

INSERT INTO `event_photos` (`photo_id`, `photo_name`, `event_id`, `forhome`, `movie_link`, `created_at`, `updated_at`) VALUES
(16, 'zayat0001_2f2b2.jpg', 12, 0, 'https://www.youtube.com/watch?v=ZC7dsZJl_nE', '2018-03-29 02:55:29', '2018-03-29 02:55:29'),
(17, 'zayat0001_2f2b2.jpg', 12, 1, NULL, '2018-03-30 02:29:30', '2018-03-30 02:29:30'),
(18, 'zayat00002_fccb3.jpg', 10, 1, NULL, '2018-04-01 21:18:19', '2018-04-01 21:18:19'),
(19, 'zayat-02.jpg', 4, 0, NULL, '2018-04-01 21:18:19', '2018-04-01 21:18:19'),
(21, 'zayat00004_55743.jpg', 4, 0, 'blob:https://www.facebook.com/5206de05-d8e1-4a48-b300-80872922ee33', '2018-04-01 22:44:34', '2018-04-01 22:44:34'),
(28, 'zayat00005_addfa.jpg', 19, 1, NULL, '2018-05-04 02:42:10', '2018-05-04 02:42:10'),
(29, 'zayat00006_e820a.jpg', 19, 0, NULL, '2018-05-04 02:42:10', '2018-05-04 02:42:10'),
(30, 'zayat00006_6faa8.jpg', 20, 1, NULL, '2018-05-04 02:43:41', '2018-05-04 02:43:41'),
(31, 'zayat00005_5d44e.jpg', 20, 0, NULL, '2018-05-04 02:43:41', '2018-05-04 02:43:41'),
(38, 'zayat00006_98b29.jpg', 26, 1, NULL, '2018-05-04 03:06:58', '2018-05-04 03:06:58'),
(39, 'zayat00006_d9640.jpg', 27, 1, NULL, '2018-05-04 03:08:31', '2018-05-04 03:08:31'),
(40, 'zayat00006_8065d.jpg', 28, 1, NULL, '2018-05-04 03:09:06', '2018-05-04 03:09:06'),
(41, 'zayat00006_a0a08.jpg', 29, 1, NULL, '2018-05-04 03:10:40', '2018-05-04 03:10:40'),
(42, 'zayat00006_3435c.jpg', 30, 1, NULL, '2018-05-04 03:11:12', '2018-05-04 03:11:12'),
(43, 'zayat00006_b4a52.jpg', 31, 1, NULL, '2018-05-04 03:11:52', '2018-05-04 03:11:52'),
(44, 'zayat00006_13f32.jpg', 32, 1, NULL, '2018-05-04 03:12:42', '2018-05-04 03:12:42'),
(45, 'zayat00006_2b449.jpg', 33, 1, NULL, '2018-05-04 03:13:05', '2018-05-04 03:13:05'),
(46, 'zayat00006_1e056.jpg', 34, 1, NULL, '2018-05-04 03:13:49', '2018-05-04 03:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `title`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Coffee', 'icon-coffee', '2018-05-15 00:01:50', '2018-05-15 00:01:50'),
(2, 'Super-Fast Internet', 'icon-browser', '2018-05-15 00:02:56', '2018-05-15 00:02:56'),
(3, 'Business Class', 'icon-briefcase', '2018-05-15 00:04:29', '2018-05-15 00:04:29'),
(4, 'Printers and scanner', 'icon-printer', '2018-05-15 00:05:00', '2018-05-15 00:54:51'),
(6, 'Projector', 'icon-line-monitor', '2018-05-15 00:07:00', '2018-05-15 00:07:00'),
(8, 'locker', 'icon-lock', '2018-05-15 00:08:52', '2018-05-15 00:08:52'),
(9, 'Parking', 'icon-truck', '2018-05-15 00:08:00', '2018-05-15 00:17:19'),
(10, 'Front Desk Service', 'icon-table', '2018-05-15 00:09:00', '2018-05-15 00:56:02'),
(11, 'Daily cleaning', 'icon-opentable', '2018-05-15 00:09:00', '2018-05-15 00:56:49'),
(12, 'community events', 'icon-eventasaurus', '2018-05-15 00:10:47', '2018-05-15 00:10:47'),
(13, 'Mail and Package handling', 'icon-email', '2018-05-15 00:12:34', '2018-05-15 00:12:34'),
(14, 'Conference room', 'icon-cube', '2018-05-15 00:12:00', '2018-05-15 00:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8_unicode_ci,
  `answer` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'What is co working?', 'Myanmar is undergoing nothing short of a co-working revolution. There are as many different co-working spaces as there are ways to work. At its heart, co-working is about shared space and shared values. It is about collaboration. It is about giving people a helping hand and creating a supportive and welcoming community. In this manner, co-working is for everyone and doesn’t discriminate based on the type of business. Co-working is also about socialising. Businesses deal with people, co-working provides a good environment to develop and maintain social skills which are crucial in the business world.', '2018-03-28 21:35:00', '2018-04-22 20:56:13'),
(2, 'What do I do on my first day?', 'Let us know you are coming please! This way we can put away some time to give you an in-depth tour, answer any questions you may have, run through the housekeeping, and make sure you are connected to the net and comfortable in your new home. Then choose a seat and away you go.', '2018-03-28 21:36:00', '2018-04-22 20:58:42'),
(3, 'Do you hold regular networking events?', 'Events are the most valuable part of ZAYAT. We will have regular main events every two weeks with the focus on current issues and to find the possible remedies for the difficulties we are facing either on personal scale or on global scale.', '2018-03-28 21:36:00', '2018-04-22 20:59:23'),
(4, 'Do you provide equipment?', 'We can certainly help. Fast internet and out event space is also well equipped.', '2018-03-28 21:37:00', '2018-04-22 21:00:49'),
(5, 'Are your events for your members only?', 'Events listed on our website calendar are open to the public. \r\nMembers-only events are private and require an invitation.', '2018-03-28 21:38:00', '2018-04-22 21:01:35'),
(6, 'How do I reserve a meeting room?', 'You can reserve a meeting room by emailing one of the members of our team orstopping by the front desk. Confirmation of your reservation will be emailed to you. Reservations are on a first come, first served basis.', '2018-04-02 01:16:00', '2018-04-22 21:47:46'),
(7, 'Can I use ZAYAT for my work address?', 'Yes you can depends on your membership.', '2018-04-02 01:16:00', '2018-04-22 21:03:07'),
(8, 'What are the business hours?', 'Monday – Friday 	9:00am – 7:00on\r\nSaturday 		9:00am – 1:00pm', '2018-04-02 01:17:00', '2018-04-22 21:06:55'),
(9, 'Where are you located?', 'No. 76/A, 1st Street\r\n8th Qtr, South Okkalapa\r\nIndustrial Zone, Yangon\r\nMyanmar', '2018-04-02 01:17:00', '2018-04-22 21:05:56'),
(10, 'Can I rent space if I am not a member?', 'Yes, you can find information about our rooms and pricing here.', '2018-04-02 01:18:00', '2018-04-22 21:38:25'),
(11, 'Can I have guests?', 'One of the benefits of co-working is a more casual and friendly atmosphere, but in this case, you should think of the ZAYAT as your office: anyone who doesn’t belong in your office during the work day will probably be out of place here.\r\nIf you need to chat with a client, or want to give your friend a tour, by all means do! Just please sign in at the front desk first.\r\nIf you want to have someone from your team come and work with you on a regular basis, they will need a membership.\r\nIf you’re planning a meeting, please reserve a room, or you can convene in the atrium for a short chat to avoid disturbing your fellow co-workers.', '2018-04-02 01:18:00', '2018-04-22 21:39:12'),
(12, 'How do I schedule a tour or a trail day of co working?', 'Tours are between 9am and 5pm, and should be scheduled in advance. \r\nA free day can be used anytime during regular business hours.', '2018-04-22 21:44:42', '2018-04-22 21:44:42'),
(13, 'How do I cancel my membership?', 'Let us know 30 days in advance of your cancellation date.', '2018-04-22 21:45:14', '2018-04-22 21:45:14'),
(14, 'Do you ever void memberships?', 'We listen to our co-workers, and if someone is detracting from the community then we will respectfully try to resolve things. If that doesn’t work then we’ll have to part ways.', '2018-04-22 21:45:45', '2018-04-22 21:45:45'),
(15, 'If I have additional questions, who do I ask?', 'Our Community Manager, Yawai Pann can answer any questions you might have. Her email is Yawai.zayat@zwaregroup.com', '2018-04-22 21:46:16', '2018-04-22 21:46:16');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Web Developer', 'icon-browser', '2018-05-14 23:14:01', '2018-05-14 23:14:15'),
(2, 'Engineering', 'icon-settings', '2018-06-21 21:15:21', '2018-06-21 21:16:57');

-- --------------------------------------------------------

--
-- Table structure for table `imploymentinfo`
--

CREATE TABLE `imploymentinfo` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `business_type` varchar(150) NOT NULL,
  `position` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `des` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `title`, `photo`, `des`, `created_at`, `updated_at`) VALUES
(1, 'LOCATION 1', 'locations/June2018/5qZMf7ate8JUtkn7STS0.jpg', '<p>&nbsp;<span style=\"color: #999999; font-family: Lato, sans-serif;\">No.76/A, 1st Street, South Okkalapa Industrial Zone, South Okkalapa Township, Yangon, Myanmar. </span></p>\r\n<p><span style=\"color: #999999; font-family: Lato, sans-serif;\">+95 1 855 1294</span></p>', '2018-05-30 03:40:30', '2018-06-20 19:59:17'),
(2, 'LOCATION 2', 'locations/June2018/Adptxf2ObXTaccuiYCFm.jpg', '<p>&nbsp;<span style=\"color: #999999; font-family: Lato, sans-serif;\">No.440, Waizayantar Road, South Okkalapa Township, Yangon Myanmar.</span></p>\r\n<p><span style=\"color: #999999; font-family: Lato, sans-serif;\"> +95 1 8565911</span></p>', '2018-05-30 04:06:04', '2018-06-20 19:58:48'),
(3, 'LOCATION 3', 'locations/June2018/eYb3gpppwAsWOFjC037j.jpg', '<p><span style=\"color: #999999; font-family: Lato, sans-serif;\">No.49, 4th Street, South Okkalapa Industrial Zone, South Okkalapa Township, Yangon, Myanmar.</span></p>\r\n<p><span style=\"color: #999999; font-family: Lato, sans-serif;\"> +95 1 8500090</span></p>', '2018-05-30 04:06:54', '2018-06-20 19:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `name`, `des`, `created_at`, `update_at`) VALUES
(1, 'Dedicated Room Membership', 'Create your ideal work environment at one of our permanent desks, storage space included. Dedicated seating for you and your team. Flexible number of seats according to your needs\r\n\r\n', '2018-05-15 14:16:07', '2018-05-15 14:16:07'),
(2, 'Hot Desk Membership', 'Casual or collaborative, quiet or filled with buzz; take a seat in the working environment that suits you best. The ultimate in flexibility - bring your laptop and grab an unallocated seat at any of our locations', '2018-05-15 14:16:07', '2018-05-15 14:16:07');

-- --------------------------------------------------------

--
-- Table structure for table `membership_proposal`
--

CREATE TABLE `membership_proposal` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `membership_name` varchar(255) NOT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `applicant_sign` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2018-03-22 23:28:15', '2018-03-22 23:28:15'),
(2, 'webmaster', '2018-04-23 19:28:18', '2018-04-23 19:28:18'),
(3, 'test', '2018-04-24 19:47:05', '2018-04-24 19:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2018-03-22 23:28:15', '2018-03-22 23:28:15', 'voyager.dashboard', NULL),
(2, 1, 'Medias', '', '_self', 'voyager-images', '#000000', NULL, 7, '2018-03-22 23:28:15', '2018-04-05 22:14:40', 'voyager.media.index', 'null'),
(3, 1, 'Posts', '', '_self', 'voyager-news', '#000000', NULL, 8, '2018-03-22 23:28:15', '2018-04-05 22:15:19', NULL, 'null'),
(4, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 2, '2018-03-22 23:28:15', '2018-04-05 22:11:11', 'voyager.users.index', NULL),
(5, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 10, '2018-03-22 23:28:15', '2018-04-05 22:11:31', 'voyager.categories.index', NULL),
(6, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 9, '2018-03-22 23:28:15', '2018-04-05 22:11:31', 'voyager.pages.index', NULL),
(7, 1, 'Roles', '', '_self', 'voyager-lock', NULL, 8, 2, '2018-03-22 23:28:15', '2018-04-05 22:11:38', 'voyager.roles.index', NULL),
(8, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 11, '2018-03-22 23:28:15', '2018-04-05 22:11:38', NULL, NULL),
(9, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 8, 1, '2018-03-22 23:28:15', '2018-03-22 23:53:52', 'voyager.menus.index', NULL),
(10, 1, 'Database', '', '_self', 'voyager-data', NULL, 8, 3, '2018-03-22 23:28:15', '2018-04-05 22:11:38', 'voyager.database.index', NULL),
(11, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 8, 4, '2018-03-22 23:28:15', '2018-04-05 22:11:38', 'voyager.compass.index', NULL),
(12, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 12, '2018-03-22 23:28:15', '2018-04-05 22:11:38', 'voyager.settings.index', NULL),
(13, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 8, 5, '2018-03-22 23:28:22', '2018-04-05 22:11:38', 'voyager.hooks', NULL),
(14, 1, 'Events', '', '_self', 'voyager-watch', '#000000', NULL, 3, '2018-03-22 23:41:33', '2018-04-05 22:11:11', 'voyager.events.index', 'null'),
(15, 1, 'Faqs', '/admin/faqs', '_self', 'voyager-zoom-in', '#000000', NULL, 5, '2018-03-28 21:30:25', '2018-04-05 22:11:11', NULL, ''),
(16, 1, 'FAQ', '', '_self', NULL, '#000000', NULL, 13, '2018-03-28 21:32:04', '2018-04-05 22:27:27', NULL, ''),
(17, 1, 'Plans', '/admin/plans', '_self', 'voyager-file-text', '#000000', NULL, 4, '2018-04-02 01:48:21', '2018-04-05 22:11:11', NULL, ''),
(18, 1, 'Terms', '/admin/terms', '_self', 'voyager-warning', '#000000', NULL, 6, '2018-04-05 21:23:37', '2018-04-05 22:13:24', NULL, ''),
(19, 2, 'Users', '', '_self', 'voyager-person', '#000000', NULL, 14, '2018-04-23 19:30:58', '2018-04-23 19:43:26', 'voyager.users.index', 'null'),
(20, 2, 'Events', '', '_self', 'voyager-watch', '#000000', NULL, 15, '2018-04-23 19:37:53', '2018-04-23 19:43:54', 'voyager.events.index', 'null'),
(21, 2, 'Plans', '/admin/plans', '_self', 'voyager-file-text', '#000000', NULL, 16, '2018-04-23 19:38:39', '2018-04-23 19:44:26', NULL, ''),
(22, 2, 'Terms', '/admin/terms', '_self', 'voyager-warning', '#000000', NULL, 17, '2018-04-23 19:39:28', '2018-04-23 19:45:01', NULL, ''),
(23, 2, 'Faqs', '/admin/faqs', '_self', 'voyager-zoom-in', '#000000', NULL, 18, '2018-04-23 19:41:00', '2018-04-23 19:41:00', NULL, ''),
(24, 1, 'Groups', '/admin/groups', '_self', NULL, NULL, NULL, 19, '2018-05-14 22:05:14', '2018-05-14 22:05:14', NULL, NULL),
(25, 1, 'Facilities', '/admin/facilities', '_self', NULL, NULL, NULL, 20, '2018-05-15 00:01:11', '2018-05-15 00:01:11', NULL, NULL),
(26, 1, 'Memberships', '/admin/memberships', '_self', NULL, NULL, NULL, 21, '2018-05-15 02:20:25', '2018-05-15 02:20:25', NULL, NULL),
(27, 1, 'Locations', '/admin/locations', '_self', NULL, NULL, NULL, 22, '2018-06-18 10:28:00', '2018-06-18 10:28:00', NULL, NULL),
(28, 1, 'Positions', '/admin/positions', '_self', NULL, NULL, NULL, 23, '2018-06-21 01:14:19', '2018-06-21 01:14:19', NULL, NULL),
(29, 2, 'locations', '', '_self', 'voyager-lighthouse', '#000000', NULL, 24, '2018-06-21 04:15:36', '2018-06-21 04:15:36', 'voyager.locations.index', NULL),
(30, 2, 'communities', 'admin/communities', '_self', 'voyager-people', '#000000', NULL, 25, '2018-06-21 04:17:38', '2018-06-21 04:18:50', NULL, ''),
(31, 2, 'positions', 'admin/positions', '_self', 'voyager-company', '#000000', NULL, 26, '2018-06-21 04:23:22', '2018-06-21 04:23:44', NULL, ''),
(32, 1, 'Communities', '/admin/communities', '_self', NULL, NULL, NULL, 27, '2018-06-21 04:27:56', '2018-06-21 04:27:56', NULL, NULL),
(33, 2, 'memberships', 'admin/memberships', '_self', 'voyager-gift', '#000000', NULL, 28, '2018-06-21 04:32:34', '2018-06-21 04:32:34', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_01_01_000000_create_pages_table', 1),
(6, '2016_01_01_000000_create_posts_table', 1),
(7, '2016_02_15_204651_create_categories_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_11_30_135954_create_permission_table', 1),
(12, '2016_11_30_141208_create_permission_role_table', 1),
(13, '2016_12_26_201236_data_types__add__server_side', 1),
(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(15, '2017_01_14_005015_create_translations_table', 1),
(16, '2017_01_15_000000_add_permission_group_id_to_permissions_table', 1),
(17, '2017_01_15_000000_create_permission_groups_table', 1),
(18, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(19, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(20, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(21, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(22, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(23, '2017_08_05_000000_add_group_to_settings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2018-03-22 23:28:20', '2018-03-22 23:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permission_group_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`, `permission_group_id`) VALUES
(1, 'browse_admin', NULL, '2018-03-22 23:28:15', '2018-03-22 23:28:15', NULL),
(2, 'browse_database', NULL, '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(3, 'browse_media', NULL, '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(4, 'browse_compass', NULL, '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(5, 'browse_menus', 'menus', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(6, 'read_menus', 'menus', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(7, 'edit_menus', 'menus', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(8, 'add_menus', 'menus', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(9, 'delete_menus', 'menus', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(10, 'browse_pages', 'pages', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(11, 'read_pages', 'pages', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(12, 'edit_pages', 'pages', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(13, 'add_pages', 'pages', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(14, 'delete_pages', 'pages', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(15, 'browse_roles', 'roles', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(16, 'read_roles', 'roles', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(17, 'edit_roles', 'roles', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(18, 'add_roles', 'roles', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(19, 'delete_roles', 'roles', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(20, 'browse_users', 'users', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(21, 'read_users', 'users', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(22, 'edit_users', 'users', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(23, 'add_users', 'users', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(24, 'delete_users', 'users', '2018-03-22 23:28:16', '2018-03-22 23:28:16', NULL),
(25, 'browse_posts', 'posts', '2018-03-22 23:28:17', '2018-03-22 23:28:17', NULL),
(26, 'read_posts', 'posts', '2018-03-22 23:28:17', '2018-03-22 23:28:17', NULL),
(27, 'edit_posts', 'posts', '2018-03-22 23:28:17', '2018-03-22 23:28:17', NULL),
(28, 'add_posts', 'posts', '2018-03-22 23:28:17', '2018-03-22 23:28:17', NULL),
(29, 'delete_posts', 'posts', '2018-03-22 23:28:17', '2018-03-22 23:28:17', NULL),
(30, 'browse_categories', 'categories', '2018-03-22 23:28:17', '2018-03-22 23:28:17', NULL),
(31, 'read_categories', 'categories', '2018-03-22 23:28:17', '2018-03-22 23:28:17', NULL),
(32, 'edit_categories', 'categories', '2018-03-22 23:28:17', '2018-03-22 23:28:17', NULL),
(33, 'add_categories', 'categories', '2018-03-22 23:28:17', '2018-03-22 23:28:17', NULL),
(34, 'delete_categories', 'categories', '2018-03-22 23:28:17', '2018-03-22 23:28:17', NULL),
(35, 'browse_settings', 'settings', '2018-03-22 23:28:17', '2018-03-22 23:28:17', NULL),
(36, 'read_settings', 'settings', '2018-03-22 23:28:17', '2018-03-22 23:28:17', NULL),
(37, 'edit_settings', 'settings', '2018-03-22 23:28:17', '2018-03-22 23:28:17', NULL),
(38, 'add_settings', 'settings', '2018-03-22 23:28:17', '2018-03-22 23:28:17', NULL),
(39, 'delete_settings', 'settings', '2018-03-22 23:28:17', '2018-03-22 23:28:17', NULL),
(40, 'browse_hooks', NULL, '2018-03-22 23:28:23', '2018-03-22 23:28:23', NULL),
(41, 'browse_events', 'events', '2018-03-22 23:41:33', '2018-03-22 23:41:33', NULL),
(42, 'read_events', 'events', '2018-03-22 23:41:33', '2018-03-22 23:41:33', NULL),
(43, 'edit_events', 'events', '2018-03-22 23:41:33', '2018-03-22 23:41:33', NULL),
(44, 'add_events', 'events', '2018-03-22 23:41:33', '2018-03-22 23:41:33', NULL),
(45, 'delete_events', 'events', '2018-03-22 23:41:33', '2018-03-22 23:41:33', NULL),
(46, 'browse_faqs', 'faqs', '2018-03-28 21:30:24', '2018-03-28 21:30:24', NULL),
(47, 'read_faqs', 'faqs', '2018-03-28 21:30:24', '2018-03-28 21:30:24', NULL),
(48, 'edit_faqs', 'faqs', '2018-03-28 21:30:24', '2018-03-28 21:30:24', NULL),
(49, 'add_faqs', 'faqs', '2018-03-28 21:30:24', '2018-03-28 21:30:24', NULL),
(50, 'delete_faqs', 'faqs', '2018-03-28 21:30:24', '2018-03-28 21:30:24', NULL),
(51, 'browse_plans', 'plans', '2018-04-02 01:48:21', '2018-04-02 01:48:21', NULL),
(52, 'read_plans', 'plans', '2018-04-02 01:48:21', '2018-04-02 01:48:21', NULL),
(53, 'edit_plans', 'plans', '2018-04-02 01:48:21', '2018-04-02 01:48:21', NULL),
(54, 'add_plans', 'plans', '2018-04-02 01:48:21', '2018-04-02 01:48:21', NULL),
(55, 'delete_plans', 'plans', '2018-04-02 01:48:21', '2018-04-02 01:48:21', NULL),
(56, 'browse_terms', 'terms', '2018-04-05 21:23:37', '2018-04-05 21:23:37', NULL),
(57, 'read_terms', 'terms', '2018-04-05 21:23:37', '2018-04-05 21:23:37', NULL),
(58, 'edit_terms', 'terms', '2018-04-05 21:23:37', '2018-04-05 21:23:37', NULL),
(59, 'add_terms', 'terms', '2018-04-05 21:23:37', '2018-04-05 21:23:37', NULL),
(60, 'delete_terms', 'terms', '2018-04-05 21:23:37', '2018-04-05 21:23:37', NULL),
(61, 'browse_groups', 'groups', '2018-05-14 22:05:14', '2018-05-14 22:05:14', NULL),
(62, 'read_groups', 'groups', '2018-05-14 22:05:14', '2018-05-14 22:05:14', NULL),
(63, 'edit_groups', 'groups', '2018-05-14 22:05:14', '2018-05-14 22:05:14', NULL),
(64, 'add_groups', 'groups', '2018-05-14 22:05:14', '2018-05-14 22:05:14', NULL),
(65, 'delete_groups', 'groups', '2018-05-14 22:05:14', '2018-05-14 22:05:14', NULL),
(66, 'browse_facilities', 'facilities', '2018-05-15 00:01:11', '2018-05-15 00:01:11', NULL),
(67, 'read_facilities', 'facilities', '2018-05-15 00:01:11', '2018-05-15 00:01:11', NULL),
(68, 'edit_facilities', 'facilities', '2018-05-15 00:01:11', '2018-05-15 00:01:11', NULL),
(69, 'add_facilities', 'facilities', '2018-05-15 00:01:11', '2018-05-15 00:01:11', NULL),
(70, 'delete_facilities', 'facilities', '2018-05-15 00:01:11', '2018-05-15 00:01:11', NULL),
(71, 'browse_memberships', 'memberships', '2018-05-15 02:20:25', '2018-05-15 02:20:25', NULL),
(72, 'read_memberships', 'memberships', '2018-05-15 02:20:25', '2018-05-15 02:20:25', NULL),
(73, 'edit_memberships', 'memberships', '2018-05-15 02:20:25', '2018-05-15 02:20:25', NULL),
(74, 'add_memberships', 'memberships', '2018-05-15 02:20:25', '2018-05-15 02:20:25', NULL),
(75, 'delete_memberships', 'memberships', '2018-05-15 02:20:25', '2018-05-15 02:20:25', NULL),
(76, 'browse_locations', 'locations', '2018-06-18 10:28:00', '2018-06-18 10:28:00', NULL),
(77, 'read_locations', 'locations', '2018-06-18 10:28:00', '2018-06-18 10:28:00', NULL),
(78, 'edit_locations', 'locations', '2018-06-18 10:28:00', '2018-06-18 10:28:00', NULL),
(79, 'add_locations', 'locations', '2018-06-18 10:28:00', '2018-06-18 10:28:00', NULL),
(80, 'delete_locations', 'locations', '2018-06-18 10:28:00', '2018-06-18 10:28:00', NULL),
(81, 'browse_positions', 'positions', '2018-06-21 01:14:18', '2018-06-21 01:14:18', NULL),
(82, 'read_positions', 'positions', '2018-06-21 01:14:18', '2018-06-21 01:14:18', NULL),
(83, 'edit_positions', 'positions', '2018-06-21 01:14:18', '2018-06-21 01:14:18', NULL),
(84, 'add_positions', 'positions', '2018-06-21 01:14:18', '2018-06-21 01:14:18', NULL),
(85, 'delete_positions', 'positions', '2018-06-21 01:14:18', '2018-06-21 01:14:18', NULL),
(86, 'browse_communities', 'communities', '2018-06-21 04:27:56', '2018-06-21 04:27:56', NULL),
(87, 'read_communities', 'communities', '2018-06-21 04:27:56', '2018-06-21 04:27:56', NULL),
(88, 'edit_communities', 'communities', '2018-06-21 04:27:56', '2018-06-21 04:27:56', NULL),
(89, 'add_communities', 'communities', '2018-06-21 04:27:56', '2018-06-21 04:27:56', NULL),
(90, 'delete_communities', 'communities', '2018-06-21 04:27:56', '2018-06-21 04:27:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_groups`
--

CREATE TABLE `permission_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1);

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(10) UNSIGNED NOT NULL,
  `membership_id` int(100) NOT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `price` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `service` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `membership_id`, `title`, `price`, `detail`, `service`, `created_at`, `updated_at`) VALUES
(6, 1, 'Dedicated Desk (4-8 person)', '2000', '<div class=\"entry-title\" style=\"box-sizing: border-box; color: #555555; font-family: Lato, sans-serif;\">\r\n<div class=\"entry-cont\" style=\"box-sizing: border-box; color: #555555; font-family: Lato, sans-serif; font-size: 14px; font-weight: 400;\">\r\n<table class=\"table table-responsive table-hover table-stripped\" style=\"box-sizing: border-box; border-collapse: collapse; border-spacing: 0px; max-width: 100%; background-color: transparent; margin-bottom: 20px; width: 600px; overflow-x: auto; min-height: 0.01%;\">\r\n<thead style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<th style=\"box-sizing: border-box; text-align: left; padding: 8px; line-height: 1.42857; vertical-align: bottom; border-top: 0px; border-bottom: 2px solid #dddddd; width: 261px;\">&nbsp;</th>\r\n<th style=\"box-sizing: border-box; text-align: left; padding: 8px; line-height: 1.42857; vertical-align: bottom; border-top: 0px; border-bottom: 2px solid #dddddd; width: 338px;\">&nbsp;</th>\r\n</tr>\r\n</thead>\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 261px;\">Price (USD)</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 338px;\">$2000/month</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 261px;\">Local Rates (MMK)</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 338px;\">2,500,000 Kyats</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 261px;\">Usage Rights</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 338px;\">5 &frac12; days</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 261px;\">Access Hours</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 338px;\">9am &ndash; 7pm</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 261px;\">Printing Credits</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 338px;\">70 pages (FOC)</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 261px;\">Meeting Rooms Credits</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 338px;\">18 hours/month</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 261px;\">Evet Space Usage (Mon-Sat)</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 338px;\">$50/hour</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 261px;\">ZAYAT Event Access</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 338px;\">Yes</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 261px;\">Locker</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 338px;\">$5/month</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; background-color: #f5f5f5;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 261px;\">Mailing Address</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 338px;\">Yes</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>', '<p><span style=\"color: #555555; font-family: Lato, sans-serif;\">Create your ideal work environment at one of our permanent desks, storage space included. Dedicated seating for you and your team. Flexible number of seats according to your needs</span></p>', '2018-05-13 20:29:00', '2018-05-21 02:34:17'),
(8, 1, 'Dedicated Desk (4-6 person)', '1500', '<table class=\"table table-responsive table-hover table-stripped\" style=\"box-sizing: border-box; border-collapse: collapse; border-spacing: 0px; max-width: 100%; background-color: transparent; margin-bottom: 20px; width: 651px; overflow-x: auto; min-height: 0.01%;\">\r\n<thead style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box; height: 33px;\">\r\n<th style=\"box-sizing: border-box; text-align: left; padding: 8px; line-height: 1.42857; vertical-align: bottom; border-top: 0px; border-bottom: 2px solid #dddddd; width: 273px; height: 33px;\">&nbsp;</th>\r\n<th style=\"box-sizing: border-box; text-align: left; padding: 8px; line-height: 1.42857; vertical-align: bottom; border-top: 0px; border-bottom: 2px solid #dddddd; width: 377px; height: 33px;\">&nbsp;</th>\r\n</tr>\r\n</thead>\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box; height: 32px;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 273px; height: 32px;\">Price (USD)</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 377px; height: 32px;\">$1500/month</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; height: 40px;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 273px; height: 40px;\">Local Rates (MMK)</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 377px; height: 40px;\">2,000,000 Kyats</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; height: 32px;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 273px; height: 32px;\">Usage Rights</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 377px; height: 32px;\">5 &frac12; days</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; height: 32px;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 273px; height: 32px;\">Access Hours</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 377px; height: 32px;\">9am-7pm</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; height: 32px;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 273px; height: 32px;\">Printing Credits</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 377px; height: 32px;\">50 pages (FOC)</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; height: 32px;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 273px; height: 32px;\">Meeting Rooms Credits</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 377px; height: 32px;\">16 hours/month</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; height: 32px;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 273px; height: 32px;\">Evet Space Usage (Mon-Sat)</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 377px; height: 32px;\">$50/hour</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; height: 32px;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 273px; height: 32px;\">ZAYAT Event Access</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 377px; height: 32px;\">Yes</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; height: 32px;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 273px; height: 32px;\">Locker</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 377px; height: 32px;\">$5/month</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; background-color: #f5f5f5; height: 32px;\">\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 273px; height: 32px;\">Mailing Address</td>\r\n<td style=\"box-sizing: border-box; padding: 8px; line-height: 1.42857; vertical-align: top; border-top: 1px solid #dddddd; width: 377px; height: 32px;\">Yes</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, '2018-05-15 01:57:00', '2018-05-21 02:34:44'),
(9, 2, 'Full-time Membership', NULL, '<table class=\"table table-border table-stripped table-hover\" style=\"height: 160px;\" width=\"400\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 181px;\">Price (USD)</td>\r\n<td style=\"width: 203px;\">$300</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 181px;\">Local Rates (MMK)</td>\r\n<td style=\"width: 203px;\">400,000Ks</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 181px;\">Usage Rights&nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n<td style=\"width: 203px;\">5 &frac12; days/week</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 181px;\">Access Hours</td>\r\n<td style=\"width: 203px;\">9am-7pm</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 181px;\">Printing Credits</td>\r\n<td style=\"width: 203px;\">10 pages(FOC)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 181px;\">Meeting room credits</td>\r\n<td style=\"width: 203px;\">10 hours/month</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 181px;\">Event space usage(Mon-Sat)</td>\r\n<td style=\"width: 203px;\">$50/hour</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 181px;\">Zayat event access</td>\r\n<td style=\"width: 203px;\">Yes</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 181px;\">Locker</td>\r\n<td style=\"width: 203px;\">Yes</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, '2018-05-15 02:19:00', '2018-05-21 03:12:25'),
(10, 2, 'Part-time Membership', '1500', '<table class=\"table table-border table-hover table-stripped\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 140px;\">Price (USD)</td>\r\n<td style=\"width: 125px;\">150</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 140px;\">Local Rates (MMK)</td>\r\n<td style=\"width: 125px;\">200,000Ks</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 140px;\">Usage Rights</td>\r\n<td style=\"width: 125px;\">3 days/week</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 140px;\">Access Hours</td>\r\n<td style=\"width: 125px;\">9am-7pm</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 140px;\">Printing Credits&nbsp;</td>\r\n<td style=\"width: 125px;\">5 pages(FOC)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 140px;\">Meeting Rooms Credits</td>\r\n<td style=\"width: 125px;\">4 Hours/Month</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 140px;\">Event Space Usage (Mon-Sat)</td>\r\n<td style=\"width: 125px;\">$50/hour</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 140px;\">Zayat Event Acces</td>\r\n<td style=\"width: 125px;\">Yes</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 140px;\">Locker</td>\r\n<td style=\"width: 125px;\">$5/month</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, '2018-05-21 02:51:00', '2018-05-21 03:07:25'),
(11, 2, 'Basic Membership', '20', '<table class=\"table table-border table-stripped table-hover\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 140px;\">Price (USD)</td>\r\n<td style=\"width: 125px;\">20</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 140px;\">Local Rates (MMK)</td>\r\n<td style=\"width: 125px;\">200,00Ks</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 140px;\">Usage Rights</td>\r\n<td style=\"width: 125px;\">1days/Month</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 140px;\">Access Hours</td>\r\n<td style=\"width: 125px;\">9am-7pm</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 140px;\">Printing Credits&nbsp;</td>\r\n<td style=\"width: 125px;\">No</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 140px;\">Meeting Rooms Credits</td>\r\n<td style=\"width: 125px;\">1 Hours/Month</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 140px;\">Event Space Usage (Mon-Sat)</td>\r\n<td style=\"width: 125px;\">$80/hour</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 140px;\">Zayat Event Acces</td>\r\n<td style=\"width: 125px;\">No</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 140px;\">Locker</td>\r\n<td style=\"width: 125px;\">No<br /><br /></td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, '2018-05-21 02:54:00', '2018-05-21 03:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `slug` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'CTO', 'cto', '2018-06-21 01:17:51', '2018-06-21 01:17:51'),
(2, 'CEO', 'ceo', '2018-06-21 01:18:00', '2018-06-21 01:18:43'),
(3, 'MD', 'md', '2018-06-21 01:19:00', '2018-06-21 01:19:16'),
(4, 'Manager', 'mgr', '2018-06-21 01:19:35', '2018-06-21 01:19:35'),
(5, 'Superviser', 'sup', '2018-06-21 01:19:55', '2018-06-21 01:19:55'),
(6, 'Project Manager', 'pm', '2018-06-21 01:20:42', '2018-06-21 01:20:42'),
(7, 'Team Leader', 'tl', '2018-06-21 01:21:05', '2018-06-21 01:21:05'),
(8, 'Captian', 'capt', '2018-06-21 01:21:24', '2018-06-21 01:21:24'),
(9, 'Executive', NULL, '2018-06-21 01:22:24', '2018-06-21 01:22:24'),
(10, 'Assistant Manager', 'assitmgr', '2018-06-21 01:22:41', '2018-06-21 01:22:41'),
(11, 'Personal Assistant', 'pa', '2018-06-21 01:23:07', '2018-06-21 01:23:07');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2018-03-22 23:28:20', '2018-03-22 23:28:20'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2018-03-22 23:28:20', '2018-03-22 23:28:20'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2018-03-22 23:28:20', '2018-03-22 23:28:20'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2018-03-22 23:28:20', '2018-03-22 23:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `resmembers`
--

CREATE TABLE `resmembers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `business_mail` varchar(110) NOT NULL,
  `dob` text,
  `gender` text NOT NULL,
  `passport_id` varchar(255) NOT NULL,
  `addr_c` varchar(255) NOT NULL,
  `addr_m` varchar(100) NOT NULL,
  `mobile_c` varchar(255) NOT NULL,
  `mobile_m` varchar(255) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `position` text,
  `education` varchar(100) DEFAULT NULL,
  `skills` text NOT NULL,
  `companyinfo` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resmembers`
--

INSERT INTO `resmembers` (`id`, `name`, `email`, `business_mail`, `dob`, `gender`, `passport_id`, `addr_c`, `addr_m`, `mobile_c`, `mobile_m`, `profession`, `position`, `education`, `skills`, `companyinfo`, `created_date`, `updated_date`) VALUES
(1, 'User', 'email@homeco.com', 'email@business.com', NULL, 'male', '9933', 'fsad', 'sdf', '09421147735', '09455234510', 'sw', '0', NULL, 'fsda', 'fsaf', '2018-06-21 10:53:43', '2018-06-21 10:53:43'),
(2, 'Testuser', 'email@homeco.com', 'email@business.com', NULL, 'female', '9934', 'dsfsdaf', 'sdfsdf', '09421147735', '09455234510', 'dsf', '0', NULL, 'dsfsda', 'fdsa', '2018-06-21 11:12:48', '2018-06-21 11:12:48'),
(3, 'Testuser', 'email@homeco.com', 'email@business.com', NULL, 'female', '9935', 'dsfsdaf', 'sdfsdf', '09421147735', '09455234510', 'dsf', '0', NULL, 'dsfsda', 'fdsa', '2018-06-21 11:13:09', '2018-06-21 11:13:09'),
(4, 'Testuser2', 'email@homeco.com', 'email@business.com', NULL, 'male', '9936', 'dsfgdfs', 'dfgfdsg', '09421147735', '09455234510', 'dsf', '0', NULL, 'dfgdfg', 'fdgdsfg', '2018-06-21 11:16:09', '2018-06-21 11:16:09'),
(5, 'Testuser3', 'email@homeco.com', 'email@business.com', NULL, 'male', '9937', 'dsfgdfs', 'dfgfdsg', '09421147735', '09455234510', 'dsf', '0', NULL, 'dfgdfg', 'fdgdsfg', '2018-06-21 11:17:16', '2018-06-21 11:17:16'),
(6, 'Testuser4', 'email@homeco.com', 'email@business.com', NULL, 'male', '9938', 'dsfgdfs', 'dfgfdsg', '09421147735', '09455234510', 'dsf', '0', NULL, 'dfgdfg', 'fdgdsfg', '2018-06-21 11:17:33', '2018-06-21 11:17:33'),
(7, 'User1', 'email@myco.com', 'adff@business.com', NULL, 'male', '99334', 'fgdhd', 'dfghd', '09956678685', '09969156 769', 'akfj', '0', NULL, 'dfakljfkaj', 'jdsajf', '2018-06-21 11:39:46', '2018-06-21 11:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2018-03-22 23:28:15', '2018-03-22 23:28:15'),
(2, 'user', 'Normal User', '2018-03-22 23:28:15', '2018-03-22 23:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings/June2018/N9Zf2EjZ0rx6z8zBVGuc.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings/June2018/1.jpg', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'ZAYAT', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to ZAYAT.', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(13, NULL, '<section id=\"content row\" style=\"box-sizing: border-box; color: #555555; font-family: Lato, sans-serif;\">\r\n<div class=\"container clearfix\" style=\"box-sizing: border-box; margin-right: auto; margin-left: auto; padding-left: 15px; padding-right: 15px; width: 1170px;\">\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 30px;\"><span style=\"background-color: transparent; color: #333333; font-family: Raleway, sans-serif; font-size: 20px; letter-spacing: 1px; text-transform: uppercase;\">DEFINITIONS</span></p>\r\n<div class=\"col_one_full\" style=\"box-sizing: border-box;\">\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px;\">In this TOU, the following definitions apply:&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">Fees</strong>&nbsp;means amounts invoiced by us to you for your Membership Fee. It excludes overage fees, late payment fee and actual usage of Services.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">Member</strong>&nbsp;means a person granted Membership by us.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">Our Property</strong>&nbsp;means any furniture, equipment, documents or other property in the Space that is owned or controlled by us.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">Policies</strong>&nbsp;mean any of our codes of conduct, policies and procedures accessible on the website or otherwise made available to you, as added or amended by us from time to time.<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">Services</strong>&nbsp;mean any or all provision from ZAYAT to you such as access to office space, Internet access, office equipment, conference space, knowledge resources, and other services as the ZAYAT may provide from time to time.<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">Space</strong>&nbsp;means the shared co-working space on No.76/A, 1st Street 8th Qtr., South Okkalapa, Industrial Zone, Yangon. Myanmar.<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">Third Party</strong>&nbsp;means any person, entity, company or firm rather than our personnel, and yourself.<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">Your Property</strong>&nbsp;means any equipment, documents, property or possessions that you bring into the Space.<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">Website</strong>&nbsp;means our website located at www.zayat.com.mm</p>\r\n</div>\r\n<div class=\"divider divider-center\" style=\"box-sizing: border-box; position: relative; overflow: hidden; margin: 35px 0px; color: #e5e5e5; width: 1140px; text-align: center;\">&nbsp;</div>\r\n<div class=\"col_one_full\" style=\"box-sizing: border-box;\">\r\n<div class=\"heading-block fancy-title nobottomborder title-bottom-border\" style=\"box-sizing: border-box; border-bottom: none !important; margin-bottom: 30px; position: relative;\">\r\n<h4 style=\"box-sizing: border-box; font-family: Raleway, sans-serif; line-height: 1.5; color: #333333; margin: 0px; font-size: 20px; text-transform: uppercase; letter-spacing: 1px; position: relative; background: transparent; padding: 0px 0px 10px; border-bottom: 2px solid #cf464b;\">THE MEMBERSHIP</h4>\r\n</div>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px;\">This TOU need to be agreed by you before you commence your Membership. If there is anything that you have a doubt to agree with or do not understand any part of this TOU, please contact our Community Manager for clarification.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" />We will endeavor to provide access to the Space to the best of our ability. We value your feedback, and if we are not meeting your expectations please let us know so that we can try to find a way of addressing this.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" />Your Membership is personal to you. You may not transfer your Membership to anyone else.<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" />You agree to comply with your obligations under this TOU, and with any additional obligations contained in any of our Policies. When your membership is accepted and before you use the Space, you will need to attend an induction session which will be conducted by the Community Manager. Information on ZAYAT Policies will be communicated to you during your induction.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" />Your Membership entitles you to access and use the Website. Your login details are personal to you and must not be shared with anyone else. You should take sufficient care in ensuring the security of your login details and contact us immediately if you believe that someone else has access to them or is using them. You must use the Website in accordance with this TOU.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" />Concerning building safety and security protocols, you must follow the reasonable directions of the ZAYAT Community Manager and all directions from ZAYAT staff.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" />ZAYAT reserves the right at all times to disclose any information about you, your participation in and use of the Services as ZAYAT deems necessary to satisfy any applicable law, regulation, legal process or governmental request, or to edit, refuse to post or to remove any information or material in whole or in part in ZAYAT&rsquo;s sole discretion.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /></p>\r\n</div>\r\n<div class=\"divider divider-center\" style=\"box-sizing: border-box; position: relative; overflow: hidden; margin: 35px 0px; color: #e5e5e5; width: 1140px; text-align: center;\">&nbsp;</div>\r\n<div class=\"col_one_full\" style=\"box-sizing: border-box;\">\r\n<div class=\"heading-block fancy-title nobottomborder title-bottom-border\" style=\"box-sizing: border-box; border-bottom: none !important; margin-bottom: 30px; position: relative;\">\r\n<h4 style=\"box-sizing: border-box; font-family: Raleway, sans-serif; line-height: 1.5; color: #333333; margin: 0px; font-size: 20px; text-transform: uppercase; letter-spacing: 1px; position: relative; background: transparent; padding: 0px 0px 10px; border-bottom: 2px solid #cf464b;\">THE SPACE, ACCESS TO INTERNET, THE SERVICES</h4>\r\n</div>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px;\"><strong style=\"box-sizing: border-box;\">3.1</strong>&nbsp;The Space is a shared office and we ask that you consider other Members and use the Space and the Website in a respectful way. Offensive language, threatening behavior, abuse of our staff or other Members and damage to Our Property, or that of another Member, will not be tolerated. We reserve the right to remove offenders from the Space, and suspend or cancel their Membership and access to the Website.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">3.2</strong>&nbsp;The Space is a collaborative workspace, and you may find that you are working in close proximity to individuals or organizations that compete with your business. It is your responsibility to ensure that any obligations you may have regarding proximity and/or confidentiality with respect to such competing organizations and other Members generally are adhered to.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">3.3</strong>&nbsp;You acknowledge that due to the shared nature of the Space, sensitive information may sometimes be overheard, and you agree to respect the right of privacy and confidentiality of other Members in such circumstances.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">3.4</strong>&nbsp;Where your Membership entitles you to access the Space, this is a license to use the Space, and does not give you an exclusive right to any part of the Space. You are responsible for ensuring that the Space meets the needs of your not-for-profit or enterprise. We make no warranties or representations that the Space is suitable for the purpose you intend to use it for.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">3.5</strong>&nbsp;We ensure that Our Property is maintained in a good condition and complies with any applicable legal or other regulatory requirements. It is your responsibility to ensure that Your Property is fit for purpose and is used in a safe manner. You must ensure that any electrical equipment you bring into the Space is inspected and tested.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">3.6</strong>&nbsp;You acknowledge that you will be liable for, and agree to indemnify us for, any damage caused to the Space or Our Property, or for any claim brought against us, by malfunctioning or incorrectly used equipment brought into the Space by you or your guests. This includes, but is not limited to, damage caused by non-compliant electrical equipment or electrical equipment not fit for use in Myanmar.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">3.7</strong>&nbsp;You are responsible for making good or indemnifying us (at our option) for any damage caused to the Space or Our Property by you or your guests (excluding fair wear and tear).&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">3.8</strong>&nbsp;We take all reasonable measures to ensure the Space is a safe and healthy working environment. You are responsible for your own safety (and that of your employees and guests) whilst in the Space. This includes using Our Property and Your Property safely, for the purpose it was intended for, and with a reasonable degree of care.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">3.9</strong>&nbsp;Your Membership entitles you to use the Space as per following schedule.</p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 30px;\">\r\n<li style=\"box-sizing: border-box;\">Mondays to Fridays 9am to 7pm</li>\r\n<li style=\"box-sizing: border-box;\">Saturdays 9am to 1pm</li>\r\n</ul>\r\n<strong style=\"box-sizing: border-box;\">3.10</strong>&nbsp;You will not use the Services for any purpose that is unlawful or prohibited by these terms, conditions and notices. You shall not use the Services in any manner that could damage, disable, overburden, or impair any ZAYAT internet connection, or interfere with any other party&rsquo;s use and enjoyment of any Services. You shall not obtain or attempt to obtain any materials or information through any means not intentionally made available through the Services, nor should you post or download files that you know or should know are illegal or that you have no rights to.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">3.11</strong>&nbsp;You hereby represent and warrant that you have all requisite legal power and authority to enter into and abide by the terms and conditions of this TOU and no further authorization or approval is necessary. You further represent and warrant that your participation in or use of the Services will not conflict with or result in any breach of any license, contract, agreement or other instrument or obligation to which you are a party.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">3.12</strong>&nbsp;You agree that when participating in or using the Services, you will not:\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 30px;\">\r\n<li style=\"box-sizing: border-box;\">use the Services in connection with contests, pyramid schemes, chain letters, junk email, spamming, or any duplicative or unsolicited message (commercial or otherwise);</li>\r\n<li style=\"box-sizing: border-box;\">publish, post, upload, distribute or disseminate any inappropriate, profane, defamatory, obscene, indecent or unlawful topic, name, material or information on notice boards, events or the Space;</li>\r\n<li style=\"box-sizing: border-box;\">upload, or otherwise make available, files that contain images, photographs, software or other material protected by intellectual property laws, including, by way of example, and not as limitation, copyright or trademark laws (or by rights of privacy or publicity) unless you own or control the rights thereto or have received all necessary consent to do the same;</li>\r\n<li style=\"box-sizing: border-box;\">use any material or information, including images or photographs, which are made available through the Services in any manner that infringes any copyright, trademark, patent, trade secret, or other proprietary right of any party;</li>\r\n<li style=\"box-sizing: border-box;\">upload files that contain viruses, Trojan Horses, worms, time bombs, cancelbots, corrupted files, or any other similar software or programs that may damage the operation of others computer or property;</li>\r\n<li style=\"box-sizing: border-box;\">download any file(s) that you know, or reasonably should know, cannot be legally reproduced, displayed, performed, and/or distributed in such manner;</li>\r\n<li style=\"box-sizing: border-box;\">restrict or inhibit any other user from using and enjoying the Services;</li>\r\n<li style=\"box-sizing: border-box;\">harvest or otherwise collect information about others, including email addresses, without the authorization or consent of the disclosing party;</li>\r\n<li style=\"box-sizing: border-box;\">violate any applicable laws or regulations;</li>\r\n<li style=\"box-sizing: border-box;\">create a false identity for the purpose of misleading others.</li>\r\n</ul>\r\n<strong style=\"box-sizing: border-box;\">4.1</strong>&nbsp;We may amend this TOU at any time by providing (1) one month written notice.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">4.2</strong>&nbsp;You may change your personal and billing information and change or cancel your Membership via the Website at any time, in which case:\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 30px;\">\r\n<li style=\"box-sizing: border-box;\">if cancellation effective date is later than 10th of Calendar Month, no refund is claimable for the prepaid Membership Fee.</li>\r\n<li style=\"box-sizing: border-box;\">if cancellation effective date is on or earlier than 10th of Calendar Month, we will refund one half of your Membership Fee for that month.</li>\r\n</ul>\r\n<strong style=\"box-sizing: border-box;\">4.3</strong>&nbsp;We may terminate your Membership with immediate effect if you:\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 30px;\">\r\n<li style=\"box-sizing: border-box;\">breach your obligations in clause 3;</li>\r\n<li style=\"box-sizing: border-box;\">breach any of your other obligations in this TOU and, if such breach is capable of remedy, you do not remedy your breach within 7 days of being notified by us;</li>\r\n<li style=\"box-sizing: border-box;\">fail to pay the Fees more than 14 days from the payment due date;</li>\r\n<li style=\"box-sizing: border-box;\">ail to comply with our Policies, provided that we have given you written notice of such failure and our required remedy, and a reasonable time to rectify the failure.</li>\r\n</ul>\r\nFor such termination due to your fault, we will not refund your prepaid Membership Fee regardless of effective termination date,&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">4.4</strong>We, ZAYAT, reserve the right to cancel your Membership at any time without giving reason. In which case we will determine the suitable refund that will be based on prorated number of days in that month up to the effective cancellation date. <br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">4.5</strong>Termination made under any situation of sub-Clause 4.2, 4.3 or 4.4, you are still liable to pay the outstanding part of the other usage of Services in said month, before the termination effective date.\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px;\">&nbsp;</p>\r\n</div>\r\n<div class=\"divider divider-center\" style=\"box-sizing: border-box; position: relative; overflow: hidden; margin: 35px 0px; color: #e5e5e5; width: 1140px; text-align: center;\">&nbsp;</div>\r\n<div class=\"col_one_full\" style=\"box-sizing: border-box;\">\r\n<div class=\"heading-block fancy-title nobottomborder title-bottom-border\" style=\"box-sizing: border-box; border-bottom: none !important; margin-bottom: 30px; position: relative;\">\r\n<h4 style=\"box-sizing: border-box; font-family: Raleway, sans-serif; line-height: 1.5; color: #333333; margin: 0px; font-size: 20px; text-transform: uppercase; letter-spacing: 1px; position: relative; background: transparent; padding: 0px 0px 10px; border-bottom: 2px solid #cf464b;\">5. MEMBERSHIP FEES</h4>\r\n</div>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px;\"><strong style=\"box-sizing: border-box;\">5.1</strong>&nbsp;The first Membership Fee is payable immediately upon approval of your member registration.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">5.2</strong>If you would like to upgrade or downgrade your membership level, you shall submit a written request for such change. Such request will become effective only upon both parties signature on a revised Membership Form detailing the revised membership level, start date and pricing.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">5.3</strong>&nbsp;The membership entitles Members to use conference rooms, event space for a certain number of hours, and printers, copiers for certain copies per month. You will be responsible for overage fees if you exceed allocated amounts depending on the membership level. We may increase these fees at any time upon email notice or by posting the fees on our website. The current overage fee schedule is listed on ZAYAT website.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">5.4</strong>&nbsp;Invoicing, Billing and Payment schedule are as below.</p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 30px;\">\r\n<li style=\"box-sizing: border-box;\">Monthly invoice will include Membership Fee for the next Calendar month (i.e 1st to end of the month)</li>\r\n<li style=\"box-sizing: border-box;\">Payment is to be made by you, in cash, on or before the last business day of the month (i.e Payment Due Date).</li>\r\n<li style=\"box-sizing: border-box;\">If payment is made later than due date, then late payment fee will be applied as below.\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px;\">\r\n<li style=\"box-sizing: border-box;\">For payment made between 6th and 10th of the month = 10% of the Membership Fee</li>\r\n<li style=\"box-sizing: border-box;\">For payment made on 11th of the month or later = 15% of the Membership Fee</li>\r\n</ul>\r\n</li>\r\n<li style=\"box-sizing: border-box;\">For usage of Services or overage fees, we will be billing you after every event or, in some cases, advance deposit system will apply. Payment shall be made at the time you received such usage related Bills.</li>\r\n</ul>\r\n<strong style=\"box-sizing: border-box;\">5.5</strong>&nbsp;All invoices and bills will be subject to prevailing commercial tax.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">5.6</strong>&nbsp;We may increase membership fees annually during the term of this agreement. Currently, annual fees are set to increase 5% per year effective on each annual renewal. We may also increase late fees and overage fees from time to time. We will notify you at least 30 days in advance of these increase by e-mailing the member and posting these changes on our websites.\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px;\">&nbsp;</p>\r\n</div>\r\n<div class=\"divider divider-center\" style=\"box-sizing: border-box; position: relative; overflow: hidden; margin: 35px 0px; color: #e5e5e5; width: 1140px; text-align: center;\">&nbsp;</div>\r\n<div class=\"col_one_full\" style=\"box-sizing: border-box;\">\r\n<div class=\"heading-block fancy-title nobottomborder title-bottom-border\" style=\"box-sizing: border-box; border-bottom: none !important; margin-bottom: 30px; position: relative;\">\r\n<h4 style=\"box-sizing: border-box; font-family: Raleway, sans-serif; line-height: 1.5; color: #333333; margin: 0px; font-size: 20px; text-transform: uppercase; letter-spacing: 1px; position: relative; background: transparent; padding: 0px 0px 10px; border-bottom: 2px solid #cf464b;\">6. MEETING SPACES AND VENUE HIRE</h4>\r\n</div>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px;\"><strong style=\"box-sizing: border-box;\">6.1</strong>&nbsp;Meeting rooms are available in the Space for use by Members in accordance with our meeting room policy, as may be implemented or amended from time to time.</p>\r\n</div>\r\n<div class=\"divider divider-center\" style=\"box-sizing: border-box; position: relative; overflow: hidden; margin: 35px 0px; color: #e5e5e5; width: 1140px; text-align: center;\">&nbsp;</div>\r\n<div class=\"col_one_full\" style=\"box-sizing: border-box;\">\r\n<div class=\"heading-block fancy-title nobottomborder title-bottom-border\" style=\"box-sizing: border-box; border-bottom: none !important; margin-bottom: 30px; position: relative;\">\r\n<h4 style=\"box-sizing: border-box; font-family: Raleway, sans-serif; line-height: 1.5; color: #333333; margin: 0px; font-size: 20px; text-transform: uppercase; letter-spacing: 1px; position: relative; background: transparent; padding: 0px 0px 10px; border-bottom: 2px solid #cf464b;\">5. MEMBERSHIP FEES</h4>\r\n</div>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px;\"><strong style=\"box-sizing: border-box;\">7.1</strong>&nbsp;FAIR USE BY MEMBERS&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">7.1</strong>We can only provide the Space at no cost if Members use the Space fairly. We believe that using the Space fairly means that you:</p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 30px;\">\r\n<li style=\"box-sizing: border-box;\">Only use the Space for the number of days per month and during the times allocated to your Membership;</li>\r\n<li style=\"box-sizing: border-box;\">Limit the number of guests you bring into the Space. Excluding meeting room bookings and venue hire, we consider that two guests for up to two hours is reasonable. Please understand that to be fair to other Members we may need to limit guest access in peak times. If for whatever reason you need additional guest access please talk to us to see what can be arranged; and</li>\r\n<li style=\"box-sizing: border-box;\">Limit printing to a reasonable amount, in accordance with any policies introduced from time to time by us and communicated to you.</li>\r\n</ul>\r\n<strong style=\"box-sizing: border-box;\">7.2</strong>You must not use the internet access provided for excessive downloads or for any illegal purpose.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">7.3</strong>&nbsp;Continued abuse of the fair use requirements in this clause 7 may result in the suspension or termination of your Membership.\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px;\">&nbsp;</p>\r\n</div>\r\n<div class=\"divider divider-center\" style=\"box-sizing: border-box; position: relative; overflow: hidden; margin: 35px 0px; color: #e5e5e5; width: 1140px; text-align: center;\">&nbsp;</div>\r\n<div class=\"col_one_full\" style=\"box-sizing: border-box;\">\r\n<div class=\"heading-block fancy-title nobottomborder title-bottom-border\" style=\"box-sizing: border-box; border-bottom: none !important; margin-bottom: 30px; position: relative;\">\r\n<h4 style=\"box-sizing: border-box; font-family: Raleway, sans-serif; line-height: 1.5; color: #333333; margin: 0px; font-size: 20px; text-transform: uppercase; letter-spacing: 1px; position: relative; background: transparent; padding: 0px 0px 10px; border-bottom: 2px solid #cf464b;\">8. SECURITY &amp; CONFIDENTIAL INFORMATION</h4>\r\n</div>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px;\"><strong style=\"box-sizing: border-box;\">8.1</strong>&nbsp;We make no representations about the security of our internet connection, and you must take reasonable security measures (i.e. encryption) as are necessary for your business or enterprise.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">8.2</strong>&nbsp;You acknowledge and agree that during your participation in and use of the Services you may exposed to Confidential Information. \"Confidential Information\" shall mean all information, in whole or in part, that is disclosed by ZAYAT or any participant of used of the Services or any employee, affiliate, or agent thereof, that is non-public, confidential or proprietary in nature.&nbsp;<br style=\"box-sizing: border-box;\" />Confidential information also includes, without limitation, information about business, sales, operations, know-how, trade secrets, business affairs, any knowledge gained through examination or observation of or access to the facilities, computer systems and/or books and records of ZAYAT, any analyses, compilations, studies or other documents prepared by ZAYAT or otherwise derived in any manner from the Confidential Information that you are obliged to keep confidential or know or has reason to know should be treated as confidential.&nbsp;<br style=\"box-sizing: border-box;\" />Your participation in and/or use of the Services obligates you to</p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 30px;\">\r\n<li style=\"box-sizing: border-box;\">maintain all Confidential Information in strict confidence;</li>\r\n<li style=\"box-sizing: border-box;\">not to disclose Confidential Information to any third parties;</li>\r\n<li style=\"box-sizing: border-box;\">not to use the Confidential Information in any way directly or indirectly determined to ZAYAT or any participant or user of the Services;</li>\r\n</ul>\r\nAll confidential information remains the sole and exclusive property of ZAYAT or the respective disclosing party. You acknowledge and agree that nothing in this TOU or your participation in or use of the Services will be construed as granting any rights to you, by license or otherwise, in or to any Confidential Information or any patent, copyright or other intellectual property proprietary rights of ZAYAT or any participant or user of the Services.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" />\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px;\">&nbsp;</p>\r\n</div>\r\n<div class=\"divider divider-center\" style=\"box-sizing: border-box; position: relative; overflow: hidden; margin: 35px 0px; color: #e5e5e5; width: 1140px; text-align: center;\">&nbsp;</div>\r\n<div class=\"col_one_full\" style=\"box-sizing: border-box;\">\r\n<div class=\"heading-block fancy-title nobottomborder title-bottom-border\" style=\"box-sizing: border-box; border-bottom: none !important; margin-bottom: 30px; position: relative;\">\r\n<h4 style=\"box-sizing: border-box; font-family: Raleway, sans-serif; line-height: 1.5; color: #333333; margin: 0px; font-size: 20px; text-transform: uppercase; letter-spacing: 1px; position: relative; background: transparent; padding: 0px 0px 10px; border-bottom: 2px solid #cf464b;\">9. LIABILITY AND INSURANCE</h4>\r\n</div>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px;\"><strong style=\"box-sizing: border-box;\">9.1</strong>&nbsp;ZAYAT (we) and Member (you) mutually agreed not to make any claim each other:</p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 30px;\">\r\n<li style=\"box-sizing: border-box;\">for damages to their respective physical property, owned or hired, unless caused by the fault or negligence, especially by wilful misconduct or of criminal nature</li>\r\n<li style=\"box-sizing: border-box;\">for bodily injuries to, disease or death of ZAYAT&rsquo;s personnel or any Member (yourself), regardless of the cause and even if caused by the fault or negligence of either Party, except the cause is by wilful misconduct or of criminal nature.</li>\r\n</ul>\r\n<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">9.2</strong>&nbsp;We shall take full responsibility for direct or consequential loss or damage to property of Third Party and for injuries to, disease or death of Third Party&rsquo;s persons caused by our acts and/or Our Property and/or our personnel.&nbsp;<br style=\"box-sizing: border-box;\" />Confidential information also includes, without limitation, information about business, sales, operations, know-how, trade secrets, business affairs, any knowledge gained through examination or observation of or access to the facilities, computer systems and/or books and records of ZAYAT, any analyses, compilations, studies or other documents prepared by ZAYAT or otherwise derived in any manner from the Confidential Information that you are obliged to keep confidential or know or has reason to know should be treated as confidential.&nbsp;<br style=\"box-sizing: border-box;\" />Your participation in and/or use of the Services obligates you to\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 30px;\">\r\n<li style=\"box-sizing: border-box;\">maintain all Confidential Information in strict confidence;</li>\r\n<li style=\"box-sizing: border-box;\">not to disclose Confidential Information to any third parties;</li>\r\n<li style=\"box-sizing: border-box;\">not to use the Confidential Information in any way directly or indirectly determined to ZAYAT or any participant or user of the Services;</li>\r\n</ul>\r\nAll confidential information remains the sole and exclusive property of ZAYAT or the respective disclosing party. You acknowledge and agree that nothing in this TOU or your participation in or use of the Services will be construed as granting any rights to you, by license or otherwise, in or to any Confidential Information or any patent, copyright or other intellectual property proprietary rights of ZAYAT or any participant or user of the Services.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">9.3</strong>Any cost which you have paid or will pay as a result of an event for which we are liable shall be reimbursed by us to you.<br style=\"box-sizing: border-box;\" />Similarly, any cost which we have paid or will pay as a result of an event for which you are liable shall be reimbursed by you to us.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">9.4</strong>Parties (you and us) shall protect their risks by way of carrying necessary insurance cover.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">9.5</strong>You shall procure Personal Accident Insurance from reputable insurer and present the certificate to us within (7) days from the date you made registration as a Member.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">9.6</strong>&nbsp;You release, and hereby agree to indemnify, defend and save harmless ZAYAT and ZAYAT&rsquo;s subsidiaries (whether or not wholly-owned), affiliates, divisions, and their past, present and future officers, agents, shareholders, members, representatives, employees, successors and assigns, jointly and individually, from and against all claims, liabilities, losses, damages, costs, expenses, judgments, fines and penalties based upon or arising out of your negligent actions, errors and omissions, wilful misconduct and fraud in connection with the participation in or use of the Services. You further agree in the event that you bring a claim or lawsuit in violation of this agreement, you shall be liable for any attorney fees and costs incurred by ZAYAT or its respective officers and agents in connection with the defense of such claim or lawsuit.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><strong style=\"box-sizing: border-box;\">9.7</strong>&nbsp;ZAYAT and/or our personnel are not liable, howsoever caused including their negligence, for any direct, indirect or consequential loss such as your revenue, profit, anticipated profit, use, production, productivity, contracts, business opportunity, downtime, etc.&nbsp;<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" />\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px;\">&nbsp;</p>\r\n</div>\r\n<div class=\"divider divider-center\" style=\"box-sizing: border-box; position: relative; overflow: hidden; margin: 35px 0px; color: #e5e5e5; width: 1140px; text-align: center;\">&nbsp;</div>\r\n<div class=\"col_one_full\" style=\"box-sizing: border-box;\">\r\n<div class=\"heading-block fancy-title nobottomborder title-bottom-border\" style=\"box-sizing: border-box; border-bottom: none !important; margin-bottom: 30px; position: relative;\">\r\n<h4 style=\"box-sizing: border-box; font-family: Raleway, sans-serif; line-height: 1.5; color: #333333; margin: 0px; font-size: 20px; text-transform: uppercase; letter-spacing: 1px; position: relative; background: transparent; padding: 0px 0px 10px; border-bottom: 2px solid #cf464b;\">10. THINGS OUT OF OUR CONTROL</h4>\r\n</div>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px;\">Sometimes events happen that are out of our control. These include things like strikes, lock outs, accidents, war, and fire or the delay or failure in manufacture, production, or supply by third parties of equipment or services. Such events may prevent us from providing you with access to the Space in whole or in part, or may prevent you from performing your obligations under this TOU. In such cases both parties agree that the other party will not be liable for any delay or failure in performing their obligations. Either party may terminate the Membership if the delay or failure continues for a period of 30 days or more.</p>\r\n</div>\r\n<div class=\"divider divider-center\" style=\"box-sizing: border-box; position: relative; overflow: hidden; margin: 35px 0px; color: #e5e5e5; width: 1140px; text-align: center;\">&nbsp;</div>\r\n<div class=\"col_one_full\" style=\"box-sizing: border-box;\">\r\n<div class=\"heading-block fancy-title nobottomborder title-bottom-border\" style=\"box-sizing: border-box; border-bottom: none !important; margin-bottom: 30px; position: relative;\">\r\n<h4 style=\"box-sizing: border-box; font-family: Raleway, sans-serif; line-height: 1.5; color: #333333; margin: 0px; font-size: 20px; text-transform: uppercase; letter-spacing: 1px; position: relative; background: transparent; padding: 0px 0px 10px; border-bottom: 2px solid #cf464b;\">11. PRIVACY</h4>\r\n</div>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px;\">We are committed to maintaining the confidentiality and security of your personal information and managing it in an open and transparent way. We take our obligations very seriously and have implemented practices, procedures and systems to ensure we comply with those laws.</p>\r\n</div>\r\n<div class=\"divider divider-center\" style=\"box-sizing: border-box; position: relative; overflow: hidden; margin: 35px 0px; color: #e5e5e5; width: 1140px; text-align: center;\">&nbsp;</div>\r\n<div class=\"col_one_full\" style=\"box-sizing: border-box;\">\r\n<div class=\"heading-block fancy-title nobottomborder title-bottom-border\" style=\"box-sizing: border-box; border-bottom: none !important; margin-bottom: 30px; position: relative;\">\r\n<h4 style=\"box-sizing: border-box; font-family: Raleway, sans-serif; line-height: 1.5; color: #333333; margin: 0px; font-size: 20px; text-transform: uppercase; letter-spacing: 1px; position: relative; background: transparent; padding: 0px 0px 10px; border-bottom: 2px solid #cf464b;\">12. SEVERABILITY</h4>\r\n</div>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px;\">In the event that any provision or portion of this TOU is determined to be invalid, illegal or unenforceable for any reason, in whole or in part, the remaining provisions of this TOU shall be unaffected thereby and shall remain in full force and effect to the fullest extent permitted by applicable law.</p>\r\n</div>\r\n</div>\r\n</section>', '2018-04-22 19:55:00', '2018-05-21 03:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` text COLLATE utf8mb4_unicode_ci,
  `position` text COLLATE utf8mb4_unicode_ci,
  `gender` tinytext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `fname`, `lname`, `email`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`, `mobile`, `address`, `company`, `position`, `gender`) VALUES
(1, 1, 'Admin', 'Zayat', 'admin@admin.com', 'users/June2018/ntM2RPIIEHWvBXs5aUBE.jpg', '$2y$10$3vXNjhGUPDr/vmLRa4LDLuvplaejUqzzp7uOAlvEDs9rGz9SrCnam', '6B8lHYLd0hYVqekCTT7LyKuJz0OxS2ukRSXzXzr7Di8FhVDNOeQfInu66LYi', '2018-03-22 23:28:20', '2018-06-18 10:37:50', '09421147735', NULL, 'ZAWE GROUP', NULL, NULL),
(30, 1, 'Falcon', 'IT', 'it@falconbreeze.com', 'users/default.png', '$2y$10$FCJQOI4frmeVJ9YEGwBUxeTcvUYVAEqGc3qhZhDlbIfvmt6J75vaW', 'fQ3VxYUUHdSe7ICVIjn58wPZioBjQmH3n8gKFV6WRyIIHEdICMOwM2IYqZF3', '2018-06-18 08:33:24', '2018-06-18 08:33:25', '0942003451', NULL, 'FACCON BREEZE Int, L.td', NULL, NULL),
(32, 2, 'Thet', 'Nyi Htwe', 'thatnyihtwe@gmail.com', 'users/June2018/AP4SglxOfRVKutAqTnSr.jpg', '$2y$10$gfmEyfLeJ3RuhHoXVakoFeW1gL2jSJKK2oDj9Inoqc1ahyXSa065W', 'OzZoWiohrbqqOHmmAGsg1QDFlViPePxzyihpnPmKUNir9CszYO5yMPzRebXI', '2018-06-21 03:54:36', '2018-06-21 04:02:15', '1', '0', '1', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `communities`
--
ALTER TABLE `communities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_photos`
--
ALTER TABLE `event_photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imploymentinfo`
--
ALTER TABLE `imploymentinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_proposal`
--
ALTER TABLE `membership_proposal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_groups`
--
ALTER TABLE `permission_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permission_groups_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `parent_id` (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `resmembers`
--
ALTER TABLE `resmembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `communities`
--
ALTER TABLE `communities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `event_photos`
--
ALTER TABLE `event_photos`
  MODIFY `photo_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `imploymentinfo`
--
ALTER TABLE `imploymentinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `membership_proposal`
--
ALTER TABLE `membership_proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resmembers`
--
ALTER TABLE `resmembers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
