-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 08:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogist`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `status`) VALUES
(1, 'Design', 'design', 1),
(2, 'Development', 'development', 1),
(3, 'Technology', 'technology', 1),
(4, 'Food', 'food', 1),
(5, 'Website', 'website', 1),
(7, '565', '565', 1),
(8, 'First Name', 'first-name', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`, `status`) VALUES
(20, 'logo_753.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_catagory` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_slug` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `post_thumbnail` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `user_id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_catagory`, `post_title`, `post_slug`, `post_content`, `created_at`, `update_at`, `post_thumbnail`, `status`, `user_id`) VALUES
(7, 'Technology', 'Quis dolorum soluta ', 'quis dolorum soluta ', 'Libero illo accusant', '2022-01-27 14:47:30', '2022-01-27 14:47:30', 'post_thumb_233908.jpg', 1, NULL),
(8, 'Food', 'Minus et sunt mollit', 'minus et sunt mollit', 'Ab necessitatibus ilAb necessitatibus ilAb necessitatibus il', '2022-01-27 22:04:50', '2022-01-27 22:04:50', 'post_thumb_704972.jpg', 1, NULL),
(9, 'Development', 'In labore consectetu', 'in labore consectetu', 'Quia irure ipsa est', '2022-01-27 23:20:05', '2022-01-27 23:20:05', 'post_thumb_547110.jpg', 1, NULL),
(10, 'Design', 'This is demo', 'this is demo', 'This is demo', '2022-02-02 03:16:00', '2022-02-02 03:16:00', 'post_thumb_733024.png', 1, NULL),
(11, 'First Name', 'Animi quo exercitat', 'animi quo exercitat', 'Cillum cupidatat sun', '2022-07-20 22:46:21', '2022-07-20 22:46:21', 'post_thumb_376820.jpg', 1, NULL),
(12, 'Development', 'Perferendis possimus', 'perferendis possimus', 'Cupidatat voluptate ', '2022-07-20 22:46:43', '2022-07-20 22:46:43', 'post_thumb_371798.png', 1, NULL),
(13, 'Website', 'Adipisci libero inci', 'adipisci libero inci', 'Quo quaerat dolore m', '2022-11-16 01:35:52', '2022-11-16 01:35:52', 'post_thumb_267238.jpg', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
