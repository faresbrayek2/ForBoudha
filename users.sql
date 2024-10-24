-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2024 at 10:11 PM
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
-- Database: `dsibank`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Test User', 'test@example.com', '2024-10-24 16:46:14', '$2y$12$Mnnx8Y3nV6lQBU8AvmLuZO84Hq.ILSnrTDc/hJJK9tRparNNRZKnm', 'ANWMDifIFg', '2024-10-24 16:46:15', '2024-10-24 16:46:15', 'user'),
(2, 'Aubrey Hamilton', 'lekigycik@mailinator.com', NULL, '$2y$12$spc2gu59j.M1pPXklx6WheIjXlDnbknUx.8POt2ZBxBPjxc4FZfOi', 'lZmLrPtA7BVdYuGMP4RG5hyk2EWdbDifTEWjVFps9JHypwkd6u96cohNr66C', '2024-10-24 17:15:50', '2024-10-24 17:15:50', 'admin'),
(4, 'Merritt Hudson', 'byre@mailinator.com', NULL, '$2y$12$AcpQ4UQoCqvVxf/gFSYYp.4f/nJaDeoMDcV9cYd/ftCs018ftSyqG', NULL, '2024-10-24 18:20:08', '2024-10-24 18:20:08', 'user'),
(5, 'Skyler Gilliam', 'hofisavyj@mailinator.com', NULL, '$2y$12$GA4oGc01qmgdRAuZwWziTOpcLAgWYy4d6zSZutD8avqWPl4eD6TcS', NULL, '2024-10-24 18:29:29', '2024-10-24 18:29:29', 'user');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
