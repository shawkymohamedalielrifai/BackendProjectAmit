-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 08:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posts`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `user_id`, `created_at`) VALUES
(13, 'java full stack', 'this is nice', 34, '2022-10-25 20:29:39'),
(16, ';lfmd', 'klfngl', 6, '2022-10-25 22:07:45'),
(19, 'sdfj', 'skldfj', 34, '2022-10-25 23:03:38'),
(20, 'politic', 'about country', 34, '2022-10-26 20:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `catig`
--

CREATE TABLE `catig` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catig`
--

INSERT INTO `catig` (`id`, `category_name`, `post_id`) VALUES
(22, 'c lmcc', 13),
(28, 'ndksnf', 16),
(39, 'sdkv', 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userName`, `email`, `password`, `created_at`) VALUES
(6, 'shakt', 'aliahmed@gmail.com', '', '2022-10-21 00:03:49'),
(34, 'kxjguio', 'shawkymohamedali147@gmail.com', '', '2022-10-23 23:29:19'),
(50, 'root', 'mohamged@gmail.com', '', '2022-10-24 11:00:54'),
(51, 'iwue 32975974\"@', 'mohaed@gmail.com', 'root', '2022-10-24 11:06:14'),
(61, 'shawkyahmed', 'mohamgeahmed47@gmail.com', 'root', '2022-10-25 22:56:46'),
(63, 'shawkyahmed', '', 'root', '2022-10-25 22:58:55'),
(64, 'shawky', 'shawky@gmail.com', '12345', '2022-10-26 20:27:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test` (`user_id`);

--
-- Indexes for table `catig`
--
ALTER TABLE `catig`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `created_at` (`created_at`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `catig`
--
ALTER TABLE `catig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `test` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `catig`
--
ALTER TABLE `catig`
  ADD CONSTRAINT `catig_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `blogs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
