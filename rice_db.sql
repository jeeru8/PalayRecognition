-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 10:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rice_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `id` int(11) NOT NULL,
  `username` varchar(199) NOT NULL,
  `password` varchar(199) NOT NULL,
  `confirmpassword` varchar(199) NOT NULL,
  `group_id` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`id`, `username`, `password`, `confirmpassword`, `group_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '0');

-- --------------------------------------------------------

--
-- Table structure for table `upload_photo`
--

CREATE TABLE `upload_photo` (
  `id` int(11) NOT NULL,
  `image` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_photo`
--

INSERT INTO `upload_photo` (`id`, `image`) VALUES
(1, '12.jpg'),
(2, '12.jpg'),
(3, 'user-img-background.jpg'),
(4, 'user-img-background.jpg'),
(5, 'user-img-background.jpg'),
(6, 'user-img-background.jpg'),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, '12.jpg'),
(13, '12.jpg'),
(14, '12.jpg'),
(15, '12.jpg'),
(16, '12.jpg'),
(17, 'user-img-background.jpg'),
(18, 'user-img-background.jpg'),
(19, 'user-img-background.jpg'),
(20, 'user-img-background.jpg'),
(21, '12.jpg'),
(22, '12.jpg'),
(23, '12.jpg'),
(24, '12.jpg'),
(25, 'user-img-background.jpg'),
(26, 'user-img-background.jpg'),
(27, 'user-img-background.jpg'),
(28, 'user-img-background.jpg'),
(29, '12.jpg'),
(30, '12.jpg'),
(31, '12.jpg'),
(32, '12.jpg'),
(33, '12.jpg'),
(34, '12.jpg'),
(35, 'user-img-background.jpg'),
(36, 'user-img-background.jpg'),
(37, 'user-img-background.jpg'),
(38, 'user-img-background.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_photo`
--
ALTER TABLE `upload_photo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upload_photo`
--
ALTER TABLE `upload_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
