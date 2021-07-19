-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 04:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `driversdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `Devices` varchar(50) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Drivers` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `Devices`, `Description`, `Drivers`) VALUES
(9, 'Techly laptop TL0001', 'Updated Driver 1', 'https://www.drivers.com/update/pc-fix-tips/this-site-cant-provide-a-secure-connection-in-chrome/'),
(10, 'Techly laptop TL0002', 'Updated Driver 2', 'https://www.drivers.com/update/pc-fix-tips/this-site-cant-provide-a-secure-connection-in-chrome/'),
(11, 'Techly laptop TL0003', 'Updated Driver 3', 'https://www.drivers.com/update/pc-fix-tips/this-site-cant-provide-a-secure-connection-in-chrome/'),
(12, 'Techly laptop TL0004', 'Updated Driver 4', 'https://www.drivers.com/update/pc-fix-tips/this-site-cant-provide-a-secure-connection-in-chrome/'),
(13, 'Techly laptop TL0005', 'Updated Driver 5', 'https://www.drivers.com/update/pc-fix-tips/this-site-cant-provide-a-secure-connection-in-chrome/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
