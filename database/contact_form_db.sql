-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2025 at 10:37 AM
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
-- Database: `contact_form_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `full_name`, `email`, `phone_number`, `subject`, `message`, `created_at`) VALUES
(1, 'asdf', 'asdfa@gmail.com', 'asdfa', 'asdf', 'asdfa', '2025-09-12 10:16:48'),
(2, 'huzaifa haris', 'huzaifaharis415@gmail.com', '03103244179', 'asdfa', 'sdfasdf', '2025-09-12 10:18:04'),
(3, 'asdfa', 'huzaifaharis415@gmail.com', '03103244179', 'asdfa', 'asdf', '2025-09-12 10:19:48'),
(4, 'Huzaifa Haris', 'huzaifaharis415@gmail.com', '03103244179', 'asdfa', 'asdfasdf', '2025-09-12 10:20:47'),
(5, 'safsad', 'huzaifaharis415@gmail.com', 'sadsf', 'asdfa', 'safas', '2025-09-12 10:26:30'),
(6, 'Huzaifa Haris', 'huzaifaharis415@gmail.com', '03103244179', 'asdf', 'asdfa', '2025-09-12 10:31:50'),
(7, 'asdfa', 'ahmedmujtaba@gmail.com', 'asdfasdf', 'asdfa', 'sadfasdf', '2025-09-12 10:36:06'),
(8, 'Muhammad ali', 'raou3260@gmail.com', '03103333337', 'Shopify Error', 'I wanted to solve my Shopify error occurs when the user pay their bill.', '2025-09-12 15:24:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
ALTER TABLE `messages`
ADD COLUMN `budget` VARCHAR(50) DEFAULT NULL AFTER `subject`;
