-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 16, 2020 at 01:48 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `se_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lang` enum('uz','en') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `lang`) VALUES
(1, 'name', 'uz');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `location` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `organiser` varchar(50) NOT NULL,
  `start_time` varchar(30) NOT NULL,
  `end_time` varchar(30) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `lang` enum('uz','en') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `location`, `title`, `description`, `organiser`, `start_time`, `end_time`, `created_at`, `updated_at`, `lang`) VALUES
(1, 'sinov', 'sinov', 'sinov', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, ''),
(2, 'hbj', 'hjbjhb', '<p>jhbjhbhj</p>', 'hjbhjhj', '11/24/2019', '11/25/2019', 1574323009, 1574323009, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1571401807),
('m130524_201442_init', 1571401811),
('m190124_110200_add_verification_token_column_to_user_table', 1571401811);

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `author` varchar(250) NOT NULL,
  `jounal` varchar(50) NOT NULL,
  `publish_date` varchar(30) NOT NULL,
  `filepath` varchar(50) NOT NULL,
  `created_id` int(11) NOT NULL,
  `update_id` int(11) NOT NULL,
  `type` enum('article','impraeedings','phdthesis','incollection') NOT NULL,
  `lang` enum('uz','en') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`id`, `title`, `author`, `jounal`, `publish_date`, `filepath`, `created_id`, `update_id`, `type`, `lang`) VALUES
(1, 'jhb', 'hjb', 'hjb', '11/17/2019', 'jb', 54, 54, 'phdthesis', 'en'),
(2, 'test', 'test', 'test', '17-Nov-2019', 'test', 54, 54, 'phdthesis', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `short_desk` text NOT NULL,
  `full_desk` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `publish_date` varchar(30) NOT NULL,
  `lang` enum('uz','eng') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `keywords`, `short_desk`, `full_desk`, `author_id`, `created_at`, `updated_at`, `image`, `publish_date`, `lang`) VALUES
(1, 'Post test 1', 'test 1', '<p>Test 1 short desc</p>', '<p>Test 1 full desc</p>', 1, 12312313, 12312313, '/images/mercedes_s500_01.jpg', '25.10.2019', 'eng'),
(3, 'Post test 2', 'test', '<p>test</p>', '<p>test</p>', 54, 5, 5, '/images/1574010346photo_2019-10-24_23-56-25.jpg', '17.11.2019', 'eng'),
(5, 'Post test 3', 'test', '<p>test</p>', '<p>test</p>', 45, 54, 1574324065, '/images/1574324065Screenshot from 2019-11-04 23-51-16.png', '11/12/2019', 'eng');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `full_desk` varchar(250) NOT NULL,
  `short_desk` varchar(250) NOT NULL,
  `lang` enum('uz','en') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `full_desk`, `short_desk`, `lang`) VALUES
(1, 'Loyiha', 'loyiha', 'loyiha', 'uz'),
(2, 'Loyiha2', 'loyiha2', 'loyiha2', 'uz'),
(3, 'Loyiha3', 'loyiha3', 'loyiha3', 'uz'),
(4, 'Loyiha4', 'loyiha4', 'loyiha4', 'uz');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `patronymic` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `surname`, `patronymic`, `position`, `img`, `description`) VALUES
(1, 'Muzaffar', 'Artikov', 'Egamberganovich', 'Katta o\'qituvchi', '', ''),
(2, 'Dilshod', 'Kuryazov', 'Atabayevich', 'Kafedra mudiri', '', ''),
(3, 'Bekmurod', 'Xo\'jamurotov', 'Xo\'jamurot o\'g\'li', 'Assistent o\'qituvchi', '', ''),
(4, 'Firnafas', 'Yusupov', 'sa', 'Dotsent', '/images/1573063028photo_2019-11-06_22-55-59.jpg', '<p>dfdsfs</p>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'adin', 'jelgppH2LUiztakoKCw9Whp7GsB_tVwi', '$2y$13$X5QQ1KcuvZo6UoTTvC/qS.3mYrsIz2LrQxpoBofhvBtIslJ9rvva2', NULL, 'admin@mail.ru', 9, 1571401847, 1571401847, 'bHh7qoy65HOeekgKWf6ThvFwBxeNJPH__1571401847'),
(2, 'admin', 'GO9D8t-acUnFrd8q1SM3LMpr-fn2c6Ii', '$2y$13$yc0ArDgyX8ZHw7w1wkag5O9GYTlB4uKk9AeATdMSgw7hFchZ2RnLG', NULL, 'shxursand1997@gmail.com', 10, 1571401925, 1571401925, 'PihharC0FCV84RqC0xmau08-QtF5eVSr_1571401925');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post_category`
--
ALTER TABLE `post_category`
  ADD CONSTRAINT `post_category_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `post_category_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
