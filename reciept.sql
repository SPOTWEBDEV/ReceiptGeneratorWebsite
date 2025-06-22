-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2025 at 01:39 AM
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
-- Database: `reciept`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `who` enum('admin','editor') NOT NULL DEFAULT 'editor',
  `status` enum('active','inactive','suspended') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `who`, `status`) VALUES
(1, 'thebest', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin', 'active'),
(2, 'beno', '21232f297a57a5a743894a0e4a801fc3', 'editor', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `deposit_id` varchar(50) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `user`, `deposit_id`, `payment_method_id`, `amount`, `created_at`) VALUES
(1, 2, 'DEP_6856B04E5722B', 3, 12000.00, '2025-06-21 13:14:54'),
(2, 2, 'DEP_6856B05A4D828', 3, 12000.00, '2025-06-21 13:15:06'),
(3, 2, 'DEP_6856B06E6F4FC', 3, 12000.00, '2025-06-21 13:15:26'),
(4, 2, 'DEP_6856B075C1BFA', 3, 12000.00, '2025-06-21 13:15:33'),
(5, 2, 'DEP_6856B07B3ED10', 3, 12000.00, '2025-06-21 13:15:39'),
(6, 2, 'DEP_6856B08173B7A', 3, 12000.00, '2025-06-21 13:15:45'),
(7, 2, 'DEP_6856B0AC97358', 3, 12000.00, '2025-06-21 13:16:28'),
(8, 2, 'DEP_6856B0EB39932', 4, 30000.00, '2025-06-21 13:17:31'),
(9, 2, 'DEP_6856B2880ADE1', 1, 12000.00, '2025-06-21 13:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `method` enum('bank','crypto') NOT NULL,
  `accountorwallet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `type`, `method`, `accountorwallet`) VALUES
(1, 'Access Bank', 'bank', '1234567890'),
(2, 'GTBank', 'bank', '0987654321'),
(3, 'Bitcoin', 'crypto', '1A1zP1...'),
(4, 'Ethereum', 'crypto', '0xABC123...');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sell` tinyint(1) NOT NULL DEFAULT 0,
  `html_contents` varchar(9000) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `user`, `title`, `sell`, `html_contents`, `tags`, `image`) VALUES
(1, 0, 'banking template', 0, '<p>welcome to SPOT BANK </b>', 'receipt , invoice , banking', 'Screenshot (1).png'),
(2, 0, 'car purchase template', 0, '<h1>HUB CAR LIMITED</h1>', 'receipt , invoice , car sell', 'Screenshot (4).png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('active','inactive','banned') DEFAULT 'active',
  `forgotOtp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`, `forgotOtp`) VALUES
(1, 'firstclass', 'firstclass@gmail.com', '$2y$10$W.S9tVQR5yIG4ASu/2RptuDsvK5dmgr9/r3CJ6LEXrLlGZq5.FvEe', 'active', ''),
(4, 'thebest', 'thebest@gmail.com', '$2y$10$0n8KwBNpHS5fUCElxQFaQu9DlKfdOfGAUkUulgTKCAx37kP5PZLS.', 'active', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
