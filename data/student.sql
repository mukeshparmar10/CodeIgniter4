-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2025 at 01:47 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(5) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_by` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `full_name`, `address`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Ved Parmar', '7-Ratnasagar Park, Saraspur, Ahmedabad-380018', '2025-03-05 07:36:34', '2025-03-05 07:36:34', '2025-03-05 07:36:34', '2025-03-05 07:36:34'),
(3, 'Mukesh Parmar', '1320/86-Trikamlal Chal-1, Saraspur, Ahmedabad-380018', '2025-03-05 07:45:10', '2025-03-05 07:56:31', '2025-03-05 13:15:10', '2025-03-05 13:15:10'),
(4, 'Anita Parmar', 'Saraspur, Ahmedabad', '2025-03-06 08:18:39', '2025-09-30 05:51:20', '2025-03-06 13:48:39', '2025-03-06 13:48:39'),
(7, 'Shruti', 'Bapunagar', '2025-12-24 11:49:35', '2025-12-24 11:49:35', '2025-12-24 11:49:35', '2025-12-24 11:49:35'),
(10, 'Krishna', 'Nikol', '2025-12-24 14:26:54', '2025-12-24 14:26:54', '2025-12-24 14:26:54', '2025-12-24 14:26:54'),
(11, 'Kaushik', 'Bapunagar', '2025-12-24 14:27:34', '2025-12-24 14:27:34', '2025-12-24 14:27:34', '2025-12-24 14:27:34'),
(12, 'Kaushal', 'Nikol', '2025-12-24 14:43:36', '2025-12-24 14:43:36', '2025-12-24 14:43:36', '2025-12-24 14:43:36'),
(16, 'Savita', 'Bapunagar', '2025-12-24 15:47:05', '2025-12-24 15:47:05', '2025-12-24 15:47:05', '2025-12-24 15:47:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
