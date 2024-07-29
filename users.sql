-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2024 at 04:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `id` int(255) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'debra', 'alpha', 'mant@gmail.com', 'qwert'),
(2, 'agatha', 'chaula', 'mant@gmail.com', 'qwert'),
(3, 'agata', 'chaula', 'mantaidebra@gmail.co', 'debra 2001'),
(4, 'debra', 'mantai', 'mantaidebra@gmail.co', 'qwert'),
(5, 'qwert', 'trewq', 'qwert@gmail.com', 'qwer'),
(6, 'coca', 'cola', 'coca@gmail.com', 'coca'),
(7, 'fanta', 'coca', 'fanta@gmail.com', 'fanta'),
(8, 'wel', 'come', 'wel@gmail.com', 'wel'),
(9, 'wel', 'come', 'wel@gmail.com', 'wel'),
(10, 'nap', 'kin', 'nap@gmail.com', 'nap'),
(11, 'binti', 'mama', 'mama@gmail.com', 'mama');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `message` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` varchar(11) NOT NULL,
  `exp` int(4) NOT NULL,
  `cvv` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `updated` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `userid`, `subject`, `message`, `status`, `created`, `updated`) VALUES
(1, 0, 'digital marketing', ' i want a subject', 'pending', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(2, 0, 'digital marketing', ' i want a subject', 'pending', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(3, 0, 'dfghjk', 'qwerrty', 'pending', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(4, 0, 'dfghjk', 'qwerrty', 'pending', '2024-07-15 22:18:58.000000', '2024-07-15 22:18:58.000000'),
(5, 0, 'werty', 'qwwertyuiiooopihjhf', 'pending', '2024-07-15 22:19:19.000000', '2024-07-15 22:19:19.000000'),
(6, 0, 'fghjk', 'ertyuikl', 'pending', '2024-07-19 12:30:45.000000', '2024-07-19 12:30:45.000000'),
(7, 0, 'fghjk', 'ertyuikl', 'pending', '2024-07-24 14:23:09.000000', '2024-07-24 14:23:09.000000'),
(8, 0, 'fghjk', 'ertyuikl', 'pending', '2024-07-24 07:43:41.000000', '2024-07-24 07:43:41.000000'),
(9, 0, 'ertyu', 'rtyui', 'pending', '2024-07-26 14:50:54.000000', '2024-07-26 14:50:54.000000'),
(10, 0, 'sdfghj', 'dfghjkl', 'pending', '2024-07-26 15:27:11.000000', '2024-07-26 15:27:11.000000'),
(11, 0, 'qwerty', 'sdfghj', 'pending', '2024-07-26 15:37:51.000000', '2024-07-26 15:37:51.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
