-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 04:56 PM
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
-- Database: `userdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `last_login` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `last_login`, `is_deleted`) VALUES
(1, 'Anjelo', 'Mathews', 'anjelo@gmail.com', '4ae17e0da6b101debc5a96cc97e8a69dcb239daa', '0000-00-00 00:00:00', 0),
(2, 'Kusal', 'Mendis', 'kusal@gmail.com', 'a1ce47e033a9c47abaf8182b49c29c5a0266679a', '0000-00-00 00:00:00', 0),
(3, 'Mahela', 'Jayawardhene', 'mahela@gmail.com', '65cae16dae1803dbe7859cbafdc265b5e93ca05d', '0000-00-00 00:00:00', 0),
(4, 'Kumar', 'Sangakkara', 'kumar@gmail.com', '8517f03d4b61e98b5e14e1613981f3aec492f393', '0000-00-00 00:00:00', 0),
(5, 'Kumar', 'Sangakkara', 'kumar@gmail.com', '8517f03d4b61e98b5e14e1613981f3aec492f393', '0000-00-00 00:00:00', 0),
(6, 'Kumar', 'Sangakkara', 'kumar@gmail.com', '8517f03d4b61e98b5e14e1613981f3aec492f393', '0000-00-00 00:00:00', 0),
(7, 'lahiru', 'thirimanne', 'lahiru@gmail.com', '69da57e37688862d78e5c6a1918f71240309b291', '0000-00-00 00:00:00', 0),
(8, 'David', 'Warner', 'david@gmail.com', 'aa743a0aaec8f7d7a1f01442503957f4d7a2d634', '0000-00-00 00:00:00', 0),
(9, 'Chathura', 'Senanayake', 'chathura@gmail.com', '565b0f81b3e2dbbe675910920273f5607d50686b', '0000-00-00 00:00:00', 0),
(10, 'Ajith', 'Rohana', 'ajith@gmail.com', 'fb3054066a85ab9498fd6eb5a619523e1e144f5f', '0000-00-00 00:00:00', 0),
(11, 'Isuru', 'Udana', 'isuru@gmail.com', '0a465bce2d8a2d647cfedd1729e0f4351ba190dd', '0000-00-00 00:00:00', 0),
(12, 'Amith', 'Withanage', 'amith@gmail.com', '448ff1b0826edc6ad8b1f5abdac2cf7fcf08f8ab', '0000-00-00 00:00:00', 0),
(13, 'Amindu', 'Laknath', 'amindu@gmail.com', '81ca9734773c6d35a35a610fa4b87c78e8a2be81', '0000-00-00 00:00:00', 0),
(14, 'Tin', 'Ton', 'tin@gmail.com', 'f269197686c56c43a35254d877a71994c0b57030', '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
