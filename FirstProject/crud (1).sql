-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 12:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`id`, `email`, `token`, `created_at`) VALUES
(16, 'ma@gmail.com', '$2y$12$Xpk/47AYO7RisDGqgrNhfut8oapbNA5OCKU5.l65NFR5a8DX..ywO', '2024-12-18 02:54:44');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` bigint(13) NOT NULL,
  `password` varchar(255) NOT NULL,
  `plan_password` varchar(30) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `update_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `number`, `password`, `plan_password`, `created_at`, `update_at`) VALUES
(57, 'Mahammadali Kadiwala', 'hasn@gmail.com', 93164716, '$2y$12$tbZBEe.GL8J9DJZFYxyswen/4.jJy20fCi7O0yMAwPLQGDkwT7J12', '1222222', '2024-12-20', '2024-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(13) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `number`, `password`, `city`, `created_at`, `updated_at`) VALUES
(19, 'kadiwala 111111', 'ma@gmail.com', '9316471633', '123321', 'mahesana', '2024-12-03', '2024-12-09'),
(23, 'hasan', 'hasan@gmail.com', '9316471633', '662326', 'bharuch', '2024-12-10', '2024-12-09'),
(24, 'kalabe', 'ka@gmail.com', '9316471542', '53757', 'himattnagr', '2024-12-08', '2024-12-09'),
(25, 'abc', 'abc@gmail.com', '9316471633', 'ndvhj34', 'benglur', '2024-12-02', '2024-12-09'),
(26, 'Mahammadali', 'ma@gmail.com', '9316471633', '67863nfe', 'mubie', '2024-12-04', '2024-12-09'),
(27, 'akbar', 'ak@gmail.com', '927363412', '6738bja', 'kalol', '2024-12-10', '2024-12-10'),
(28, 'vajir', 'va@gmail.com', '912343215', '36876gfaf', 'palnpur', '2024-12-13', '2024-12-10'),
(29, 'kasim', 'kasim@gmail.com', '876543456', '3737bn', 'patan', '2024-12-10', '2024-12-10'),
(31, 'Mahammadali Kadiwala', 'ma@gmail.com', '9316471633', '83686bnaa', 'gadhinagr', '2024-12-11', '2024-12-11'),
(32, 'Mahammadali Kadiwala', 'ma@gmail.com', '9316471633', 'uiqtr783', 'ahemdabad', '2024-12-14', '2024-12-14'),
(33, 'Mahammadali Kadiwala', 'ma@gmail.com', '9316471633', '3333', 'siddhpur', '2024-12-14', '2024-12-14'),
(34, 'Mahammadali Kadiwala', 'ma@gmail.com', '9316471633', '12345', 'palnpur', '2024-12-16', '2024-12-16'),
(35, 'sgjdga', 'kgeuge', '478324782', '7364dbsnd', 'guragav', '2024-12-16', '2024-12-16'),
(36, 'sgjdga', 'kgeuge', '478324782', '7364dbsnd', 'guragav', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `password`) VALUES
(1, 'hasanalihfhf', 'ma@gmail.com', '9316471633', '23456789'),
(2, 'hasanali', 'ma@gmail.com', '9316471633', '23456789'),
(3, 'hasanali', 'ma@gmail.com', '9316471633', '23456789'),
(4, 'hasanali', 'ma@gmail.com', '9316471633', '23456789'),
(5, 'hasanali', 'ma@gmail.com', '9316471633', '23456789'),
(6, 'hasanali', 'ma@gmail.com', '9316471633', '23456789'),
(7, 'hasanali', 'ma@gmail.com', '9316471633', '23456789'),
(8, 'akbar', 'ma@gmail.com', '9316471633', '23456789'),
(10, 'mahammad', 'mama@gmail.com', '828312983912', '122112211221');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
