-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2023 at 02:15 PM
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
-- Database: `project_oes`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `create at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `create at`, `update at`) VALUES
(1, 'testing', '2023-10-11 17:28:42', '2023-10-11 17:28:42'),
(2, 'gk', '2023-10-11 17:29:11', '2023-10-11 17:29:11'),
(3, 'mathes', '2023-10-11 17:29:21', '2023-10-11 17:29:21'),
(4, 'mathes', '2023-10-11 17:29:25', '2023-10-11 17:29:25'),
(5, 'science', '2023-10-11 17:29:29', '2023-10-11 17:29:29'),
(6, 'social science', '2023-10-11 17:29:33', '2023-10-11 17:29:33'),
(7, 'mathes', '2023-10-11 17:29:39', '2023-10-11 17:29:39'),
(8, 'mathes', '2023-10-11 17:53:01', '2023-10-11 17:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `questions_name` varchar(255) NOT NULL,
  `option_1` varchar(255) NOT NULL,
  `option_2` varchar(255) NOT NULL,
  `option_3` varchar(255) NOT NULL,
  `option_4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `quiz_id` varchar(10) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questions_name`, `option_1`, `option_2`, `option_3`, `option_4`, `answer`, `quiz_id`, `create_at`, `update_at`) VALUES
(1, 'Who is the father of PHP?', 'Drek Kolkevi', 'Rasmus Lerdorf', 'Willam Makepiece', 'List Barely', 'Rasmus Lerdorf', '1', '2023-10-29 12:49:41', '2023-10-29 12:49:41'),
(2, ' What does PHP stand for?', 'PHP stands for Preprocessor Home Page', ' PHP stands for Pretext Hypertext Processor', 'PHP stands for Hypertext Preprocessor', 'PHP stands for Personal Hyper Processor', 'PHP stands for Hypertext Preprocessor', '1', '2023-10-29 12:50:46', '2023-10-29 12:50:46'),
(3, 'Which of the following is the default file extension of PHP files?', '.php', '.ph', '.xml', '.html', '.php', '1', '2023-10-29 12:52:28', '2023-10-29 12:52:28'),
(4, 'Variable name in PHP starts with -', '! (Exclamation)', '$ (Dollar)', '& (Ampersand)', '# (Hash)', '$ (Dollar)', '1', '2023-10-29 12:57:28', '2023-10-29 12:57:28'),
(5, 'Which of the following is not a variable scope in PHP?', 'Extern', 'Local ', 'Static ', 'Global', 'Extern', '1', '2023-10-29 12:58:33', '2023-10-29 12:58:33'),
(6, 'Which of the following is correct to add a comment in php?', 'a). & …… & ', 'b) .// ……', 'c). /* …… */', 'd). Both (b) and (c)', 'd). Both (b) and (c)', '1', '2023-10-29 13:00:21', '2023-10-29 13:00:21'),
(7, 'Which of the following is used to display the output in PHP?', 'a). echo', 'b). write ', 'c). print ', 'd). Both (a) and (c)', 'd). Both (a) and (c)', '1', '2023-10-29 13:01:49', '2023-10-29 13:01:49'),
(8, 'Which of the following is the use of strlen() function in PHP?', 'The strlen() function returns the type of string', 'The strlen() function returns the length of string', 'The strlen() function returns the value of string', 'The strlen() function returns both value and type of string', 'The strlen() function returns the length of string', '1', '2023-10-29 13:07:15', '2023-10-29 13:07:15'),
(9, 'Which of the following is used for concatenation in PHP?', '+ (plus) ', '* (Asterisk) ', '. (dot) ', 'append()', '. (dot) ', '1', '2023-10-29 13:08:03', '2023-10-29 13:08:03'),
(10, 'Which of the following starts with __ (double underscore) in PHP?', 'Inbuilt constants ', 'User-defined constants ', 'Magic constants ', 'Default constants', 'Magic constants ', '1', '2023-10-29 13:09:39', '2023-10-29 13:09:39'),
(11, 'Which of the following is the use of strpos() function in PHP?', 'The strpos() function is used to search for the spaces in a string  ', 'The strpos() function is used to search for a number in a string', 'The strpos() function is used to search for a character/text in a string ', 'The strpos() function is used to search for a capitalize character in a string', 'The strpos() function is used to search for a character/text in a string ', '1', '2023-10-29 13:11:25', '2023-10-29 13:11:25'),
(12, 'What does PEAR stands for?', 'PHP extension and application repository  ', 'PHP enhancement and application reduce', 'PHP event and application repository ', 'None of the above', 'PHP extension and application repository', '1', '2023-10-29 13:12:40', '2023-10-29 13:12:40'),
(13, ' Which of the following is the correct way to create a function in PHP?', 'Create myFunction()', 'function myFunction()', 'New_function myFunction()', 'None of the above', 'function myFunction()', '1', '2023-10-29 13:15:01', '2023-10-29 13:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `no_questions` int(11) NOT NULL,
  `marks_per_no_questions` int(11) NOT NULL,
  `time` time NOT NULL,
  `is_negative` varchar(10) NOT NULL,
  `neg_mark_per_que` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `create at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `title`, `category_id`, `no_questions`, `marks_per_no_questions`, `time`, `is_negative`, `neg_mark_per_que`, `description`, `create at`, `update at`, `status`) VALUES
(1, 'test', '1', 10, 1, '00:00:10', 'YES', 0.25, 'test', '2023-10-12 17:07:48', '2023-10-12 17:07:48', 0),
(2, 'somthing', '5', 10, 1, '00:00:10', 'NO', 0.75, 'somthing', '2023-10-12 17:12:10', '2023-10-12 17:12:10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roll_id` int(11) NOT NULL DEFAULT 2,
  `create at` timestamp NULL DEFAULT current_timestamp(),
  `update at` timestamp NULL DEFAULT current_timestamp(),
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `email`, `college`, `mob`, `password`, `roll_id`, `create at`, `update at`, `is_deleted`) VALUES
(1, 'shailesh', 'Male', 'sh@gmail.com', 'baou', '9724668513', '25d55ad283aa400af464c76d713c07ad', 1, '2023-10-09 15:57:13', '2023-10-09 15:57:13', 0),
(3, 'ranjeet singh', 'Male', 'ranjit@gmail.com', 'tops technology', '9724668513', '25d55ad283aa400af464c76d713c07ad', 2, '2023-10-09 15:58:34', '2023-10-09 15:58:34', 0),
(4, 'nilesh', 'Male', 'nilesh@mail.com', 'xyz', '972468513', '25d55ad283aa400af464c76d713c07ad', 2, '2023-10-13 17:48:02', '2023-10-13 17:48:02', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
