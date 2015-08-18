-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2015 at 06:40 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nutritrolley_development`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `recipe_categories`
--

CREATE TABLE IF NOT EXISTS `recipe_categories` (
  `recipe_category_id` int(11) NOT NULL,
  `recipe_category_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe_categories`
--

INSERT INTO `recipe_categories` (`recipe_category_id`, `recipe_category_name`) VALUES
(1, 'Budget'),
(2, 'Meal'),
(3, 'Diet'),
(4, 'Theme'),
(5, 'Cuisine');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_table`
--

CREATE TABLE IF NOT EXISTS `recipe_table` (
  `id` int(10) NOT NULL,
  `recipe` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `main_image_1` varchar(255) NOT NULL,
  `main_image_2` varchar(255) NOT NULL,
  `main_image_3` varchar(255) NOT NULL,
  `recipe_category` varchar(255) NOT NULL,
  `no_of_servings` mediumint(255) NOT NULL,
  `preparation_time` mediumint(255) NOT NULL,
  `cooking_time` mediumint(255) NOT NULL,
  `ready_to_eat_in` mediumint(255) NOT NULL,
  `difficulty_level` varchar(255) NOT NULL,
  `ingredients` text NOT NULL,
  `ingredients_excluded` text NOT NULL,
  `directions` text NOT NULL,
  `chefs_notes` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipe_table`
--

INSERT INTO `recipe_table` (`id`, `recipe`, `thumbnail`, `main_image_1`, `main_image_2`, `main_image_3`, `recipe_category`, `no_of_servings`, `preparation_time`, `cooking_time`, `ready_to_eat_in`, `difficulty_level`, `ingredients`, `ingredients_excluded`, `directions`, `chefs_notes`) VALUES
(2, 'chicken ala king', 'Recipe1.jpg', '31401_l.jpg', '31401_l-300x199.jpg', '36124_l.jpg', 'example_value1', 0, 300, 200, 200, 'example_value1', 'chicken ala king', 'chicken ala king', 'chicken ala king', 'chicken ala king'),
(3, 'Thai green curry', 'thai-green-curry-beef-popular-600x765.png', 'thai-green-curry-beef-popular-large.png', 'GreenThaiCurry_Final.png', 'thai_green_curry_with_chicken.png', 'example_value1', 0, 300, 200, 10, 'example_value1', 'This is a thai curry', 'This is a thai curry', 'This is a thai curry', 'This is a thai curry');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'davidcisback@gmail.com', '', NULL, NULL, NULL, 1268889823, 1439730692, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(4, '::1', 'Dcoombes', '$2y$08$dGMeD2rOkPvlX9X4aCsFBeb4YQDZWsOTDWz5SRgX38zVLxq43Ds4S', NULL, 'davidcisback01@gmail.com', NULL, NULL, NULL, NULL, 1439730904, NULL, 1, 'David', 'Coombes', NULL, NULL),
(5, '::1', '', '0', NULL, '', NULL, NULL, NULL, NULL, 1439731095, NULL, 1, '', '', NULL, NULL),
(6, '::1', '', '0', NULL, '', NULL, NULL, NULL, NULL, 1439731176, NULL, 1, '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(5, 4, 2),
(6, 5, 2),
(7, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users_profile_picture`
--

CREATE TABLE IF NOT EXISTS `users_profile_picture` (
  `id` int(11) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_profile_picture`
--

INSERT INTO `users_profile_picture` (`id`, `profile_picture`, `user_id`) VALUES
(1, 'AAEAAQAAAAAAAAL5AAAAJDM1NjM5ODU3LWNkMWUtNDZlZS1iZGYwLTE3MDFjNzA4MWM5Yg.ec1c32.jpg', 4),
(2, '.486006.', 5),
(3, '.7d1f95.', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_body`
--

CREATE TABLE IF NOT EXISTS `user_body` (
  `id` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `year_of_birth` date NOT NULL,
  `current_weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `my_body_fat` int(11) NOT NULL,
  `how_active_am_i` varchar(100) NOT NULL,
  `activity_1` varchar(100) NOT NULL,
  `activity_2` varchar(100) NOT NULL,
  `activity_3` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_location`
--

CREATE TABLE IF NOT EXISTS `user_location` (
  `id` int(11) NOT NULL,
  `select_province` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `suburb` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe_categories`
--
ALTER TABLE `recipe_categories`
  ADD PRIMARY KEY (`recipe_category_id`);

--
-- Indexes for table `recipe_table`
--
ALTER TABLE `recipe_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `users_profile_picture`
--
ALTER TABLE `users_profile_picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_body`
--
ALTER TABLE `user_body`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_location`
--
ALTER TABLE `user_location`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recipe_categories`
--
ALTER TABLE `recipe_categories`
  MODIFY `recipe_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `recipe_table`
--
ALTER TABLE `recipe_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users_profile_picture`
--
ALTER TABLE `users_profile_picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_body`
--
ALTER TABLE `user_body`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_location`
--
ALTER TABLE `user_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
