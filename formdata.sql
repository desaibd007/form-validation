-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 06:53 AM
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
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `formdata`
--

CREATE TABLE `formdata` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `gender` text NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formdata`
--

INSERT INTO `formdata` (`id`, `name`, `address`, `gender`, `mobile`, `dob`, `email`, `password`) VALUES
(9, 'Ashish Akabari', 'surat', 'male', '8980353324', '1995-08-25', 'ashishabari@07gmail.com', '123456'),
(10, 'Bhadresh', 'surat', 'male', '9638590769', '1994-01-11', 'dbhadresh870@gmail.com', '123456'),
(11, 'Arati', 'surat', 'female', '6866968664', '1990-03-01', 'Arati007@gmail.com', '123456'),
(14, 'mohit', 'surat', 'male', '8899776644', '1990-07-25', 'mohit@123gmail.com', '123456'),
(15, 'mehul boghara', 'surat', 'male', '889977665', '1990-08-15', 'mehulbb002@gmil.com', '123456'),
(17, 'anand', 'mumbai', 'male', '9988776655', '1994-09-17', 'anand88@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formdata`
--
ALTER TABLE `formdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formdata`
--
ALTER TABLE `formdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
