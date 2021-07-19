-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 04:30 PM
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
-- Database: `products cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Item_id` int(11) NOT NULL,
  `Item_name` varchar(100) NOT NULL,
  `Item_description` varchar(300) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Item_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Item_id`, `Item_name`, `Item_description`, `Price`, `Quantity`, `Item_code`) VALUES
(1, 'techly laptop ', 'Added new techly (model=1234) laptops ', 85000, 12, 1234),
(3, 'Techly laptop newest', 'Added 10', 55000, 15, 789),
(4, 'Techly laptop 4', 'Added 12', 115000, 18, 678),
(5, 'Techly laptop 3', 'Added 10', 125000, 16, 671),
(6, 'Techly laptop 3', 'Added 10', 125000, 16, 671),
(7, 'Techly laptop 0098', 'Added 10', 125000, 16, 671);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
