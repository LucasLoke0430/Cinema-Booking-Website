-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 04:26 AM
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
-- Database: `movieoom`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'lukasi', '123@gmail.com', '123'),
(2, '', '', ''),
(3, 'Lukasi334', '123@gmail.com', '123'),
(4, 'Lukasi334', '123@gmail.com', '123'),
(5, 'Lukasi334', 'shreya@gmail.com', '123'),
(6, 'Lukasi334', '123@gmail.com', '123'),
(7, 'Lukasi334', 'shreya@gmail.com', '123'),
(8, 'Lukasi334', '123@gmail.com', '123'),
(9, 'Lukasi334', '123@gmail.comwefwef', 'efwefwef'),
(10, 'Lukasi334', '123@gmail.com', 'dfsdfs');

-- --------------------------------------------------------

--
-- Table structure for table `seat_ant`
--

CREATE TABLE `seat_ant` (
  `id` int(11) NOT NULL,
  `seat_id` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(255) NOT NULL,
  `moviename` varchar(255) NOT NULL,
  `paymentmethod` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seat_john`
--

CREATE TABLE `seat_john` (
  `id` int(11) NOT NULL,
  `seat_id` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(255) NOT NULL,
  `moviename` varchar(255) NOT NULL,
  `paymentmethod` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seat_mario`
--

CREATE TABLE `seat_mario` (
  `id` int(11) NOT NULL,
  `seat_id` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(255) NOT NULL,
  `moviename` varchar(255) NOT NULL,
  `paymentmethod` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seat_spider`
--

CREATE TABLE `seat_spider` (
  `id` int(11) NOT NULL,
  `seat_id` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(255) NOT NULL,
  `moviename` varchar(255) NOT NULL,
  `paymentmethod` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat_spider`
--

INSERT INTO `seat_spider` (`id`, `seat_id`, `status`, `username`, `moviename`, `paymentmethod`, `price`, `date`, `time`, `package`) VALUES
(89, 'E-01,E-02', 1, 'hk', 'Spider-Man: Across the Spider-Verse', 'Pay at counter', 60, '2023-08-5', '10:00 AM', 'IMAX'),
(90, 'D-05,E-05', 1, 'hk', 'Spider-Man: Across the Spider-Verse', 'Online', 60, '2023-08-5', '10:00 AM', 'IMAX'),
(91, 'D-05,E-05', 1, 'hk', 'Spider-Man: Across the Spider-Verse', 'Online', 60, '2023-08-5', '10:00 AM', 'IMAX'),
(92, 'D-05,E-05', 1, 'hk', 'Spider-Man: Across the Spider-Verse', 'Online', 60, '2023-08-5', '10:00 AM', 'IMAX');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`, `gender`, `genre`) VALUES
(1, 'lol', 'lol@gmail.com', 167872285, '123', 'male', 'romance'),
(2, 'hk', '123@gmail.com', 167872285, '123', 'male', 'comedy'),
(3, 'hk1', '123@gmail.com', 167872285, '123', 'male', 'action'),
(11, 'lol123', '123@gmail.com', 167872285, '123', 'male', 'action'),
(13, 'wergwe', 'wergwrss@gmail.com', 167872285, '123', 'male', 'action'),
(14, 'zy', 'zy@gmail.com', 12346384, '123', 'male', 'action'),
(16, 'hk1324', 'shreya@gmail.com1324', 167872285, '123', 'male', 'action'),
(17, 'hkjergjwe', 'wrg123@gmail.com', 167872285, '123', 'male', 'action'),
(18, 'hkjergjweerver', 'wreverg123@gmail.com', 1125784932, '123', 'male', 'action'),
(19, 'hkwefwef', '123@gmail.comwefwef', 167872285, '123', 'male', 'action');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_ant`
--
ALTER TABLE `seat_ant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_john`
--
ALTER TABLE `seat_john`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_mario`
--
ALTER TABLE `seat_mario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_spider`
--
ALTER TABLE `seat_spider`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `seat_ant`
--
ALTER TABLE `seat_ant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seat_john`
--
ALTER TABLE `seat_john`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seat_mario`
--
ALTER TABLE `seat_mario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seat_spider`
--
ALTER TABLE `seat_spider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
