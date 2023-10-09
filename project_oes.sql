-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 06:20 PM
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
(2, 'shiv prajapati', 'Male', 'shiv@gmail.com', 'baou', '8849668513', '25d55ad283aa400af464c76d713c07ad', 2, '2023-10-09 15:58:06', '2023-10-09 15:58:06', 0),
(3, 'ranjeet singh', 'Male', 'ranjit@gmail.com', 'tops technology', '9724668513', '25d55ad283aa400af464c76d713c07ad', 2, '2023-10-09 15:58:34', '2023-10-09 15:58:34', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
