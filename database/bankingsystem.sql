-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2022 at 09:48 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction_record`
--

CREATE TABLE `transaction_record` (
  `id` int(6) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `amount` int(20) NOT NULL,
  `sentdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_record`
--

INSERT INTO `transaction_record` (`id`, `sender`, `receiver`, `amount`, `sentdate`) VALUES
(1, 'brad gibson', 'Shivani Ghodake', 500, '2022-02-12 19:52:49'),
(2, 'Jo Perez', 'brad gibson', 2000, '2022-02-12 19:59:16'),
(3, 'Dipti Shegar', 'brad gibson', 500, '2022-02-12 20:00:56'),
(4, 'Zoey King', 'Susan Hicks', 1000, '2022-02-12 20:01:36'),
(9, 'Namrata Shegar', 'Susan Hicks', 1100, '2022-02-13 13:31:55'),
(10, 'Jo Perez', 'Dipti Shegar', 25, '2022-02-13 13:32:46'),
(11, 'Dipti Shegar', 'Shivani Ghodake', 9525, '2022-02-13 13:33:40'),
(12, 'Shivani Ghodake', 'brad gibson', 2500, '2022-02-13 13:40:31'),
(13, 'Shivani Ghodake', 'Dipti Shegar', 4550, '2022-02-13 13:42:23'),
(14, 'brad gibson', 'Susan Hicks', 2500, '2022-02-13 13:49:36'),
(15, 'Mathew', 'Daisay pitt', 3400, '2022-02-13 13:51:16'),
(16, 'Dipti Shegar', 'Namrata Shegar', 550, '2022-02-13 14:00:40'),
(17, 'Dipti Shegar', 'Susan Hicks', 1000, '2022-02-13 14:01:18'),
(18, 'disha', 'brad gibson', 300, '2022-02-13 14:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Dipti Shegar', 'diptishegar6@gmail.com', 3000),
(5, 'Shivani Ghodake', 'shivanieee@gmail.com', 5975),
(6, 'brad gibson', 'brad.gibson@gmail.com', 2800),
(7, 'Susan Hicks', 'susan.hicks@gmail.com', 6200),
(8, 'Jo Perez', 'jo.perez@gmail.com', 10000),
(9, 'Jeffery Martin', 'jeffery.martin@gmail.com', 3000),
(10, 'Joan Shelton', 'joan.shelton@gmail.com', 4500),
(11, 'Alice Henderson', 'alice.henderson@gmail.com', 7000),
(12, 'Zoey King', 'zoey.king@gmail.com', 5000),
(20, 'Namrata Shegar', 'namarata.sample@gmail.com', 10550),
(21, 'Daisay pitt', 'daisypitt.sample@gmail.com', 15733),
(22, 'Dipti ', '9130dipti@gmail.com', 120000),
(23, 'John carter', 'sample.email@gmail.com', 12999),
(24, 'Mathew', 'sample@gmail.com', 120000),
(25, 'Neha rai', 'dipti@gmail.com', 1200),
(26, 'disha', 'disha@gmail.com', 900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction_record`
--
ALTER TABLE `transaction_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction_record`
--
ALTER TABLE `transaction_record`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
