-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 04:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cop27-back1`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `comment` text NOT NULL,
  `createdOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `userID`, `comment`, `createdOn`) VALUES
(52, 17, 'السلام عليكم', '2023-01-16 18:24:59'),
(53, 18, 'hello everyone', '2023-01-16 18:27:36');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `commentID` int(11) NOT NULL,
  `comment` text NOT NULL,
  `createdOn` datetime NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `commentID`, `comment`, `createdOn`, `userID`) VALUES
(106, 52, 'وعليكم السلام ورحمة الله وبركاته', '2023-01-16 18:25:52', 18),
(107, 52, 'كيف حالك', '2023-01-16 18:26:11', 18),
(108, 52, 'الحمد لله', '2023-01-16 18:26:35', 17),
(109, 53, 'hello yousif', '2023-01-16 18:28:15', 17),
(110, 53, 'hello ramy', '2023-01-16 18:28:54', 18),
(112, 53, 'how are you ', '2023-01-18 13:13:11', 17),
(113, 53, 'I`m fine thank you ', '2023-01-18 13:14:33', 18),
(114, 53, 'how old are you', '2023-01-18 13:15:26', 17),
(115, 53, 'I have 13 years old', '2023-01-18 13:16:49', 18);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `createdOn`) VALUES
(17, 'ramy', 'ramymosalama0@gmail.com', '$2y$10$Droz23t/F0Sj4mhMCJ.IUOXM0mDclbT6WudxBU2NUyDDWXaxowgdy', '2023-01-11 17:48:17'),
(18, 'yousif', 'yousifmoslama@gmail.com', '$2y$10$i5LuBG6cRdqJay2Xhv/n4OvEDV14.A3lMplJLp7j.mtlnqgttnNii', '2023-01-11 17:52:25'),
(19, 'ali', 'alimoslama@gmail.com', '$2y$10$N87C.akxyr7oST0.gwzCkeo6HR56y1G5X8l5/A1rQpaUiH5CfS7fW', '2023-01-16 14:55:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentID` (`commentID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_ibfk_1` FOREIGN KEY (`commentID`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `replies_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
