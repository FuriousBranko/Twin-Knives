-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2019 at 01:17 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twinknives`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idComment` int(11) NOT NULL,
  `codeFK` varchar(6) NOT NULL,
  `comment` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rate` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`idComment`, `codeFK`, `comment`, `time`, `rate`) VALUES
(1, '555555', 'adsss', '2019-01-13 16:49:42', 5),
(2, '333333', 'adasdffff', '2019-01-14 10:04:23', 3),
(3, '444444', 'qqqqq', '2019-01-14 10:05:41', 2),
(4, '222222', 'qwerrrrrr', '2019-01-14 10:05:57', 4);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `information` text NOT NULL,
  `diet` varchar(50) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `price`, `information`, `diet`, `image`) VALUES
(1, 'Aasd', 123, '{\"brasno\":\"250g\",\"Nesto\":\"240g\"}', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `idOrder` int(11) NOT NULL,
  `price` double NOT NULL,
  `amount` int(11) NOT NULL,
  `code` varchar(6) NOT NULL,
  `idUserFK` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `address` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `idFoodFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`idOrder`, `price`, `amount`, `code`, `idUserFK`, `date`, `address`, `status`, `idFoodFK`) VALUES
(1, 50, 1, '555555', 1, '2019-01-13 16:49:05', 'address', 0, 1),
(2, 20, 1, '444444', 7, '2019-01-14 10:00:06', '553355', 0, 1),
(3, 83, 4, '333333', 7, '2019-01-14 10:00:38', '434636', 0, 1),
(4, 44, 53, '222222', 8, '2019-01-14 10:01:10', '4378534', 0, 1),
(5, 4, 3, '111111', 6, '2019-01-14 10:08:55', 'ad33', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activated` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `address`, `phoneNumber`, `password`, `email`, `created`, `activated`) VALUES
(1, 'Radivoje', 'Pupovac', 'Partizanskih Baza 66', '0659345363', '$2y$10$eMm8XelNc2Xb9OHSI/zjHuHU5Q155oZipeY3bdp6ncfJuh5HTcl/C', 'radivoje.pupovac98@gmail.com', '2019-01-07 19:09:42', 0),
(6, 'asdasd', 'asdasd', 'asdasdasd', '12312313232', '$2y$10$KUH5LycroklWtO.RjjpKRe..R2bFux8i2Zf13YdAnl1joru/ayCv2', '12117204@vts.su.ac.rs', '2019-01-07 19:38:07', 0),
(7, 'Branko', 'Sabo', 'Ulcinjska 16', '123456789', '$2y$10$moe0YiAUgrerqWPYRxjTwe/o2ykaZBo3Wa1lSsDCsIUbAMOVvIsVK', 'kkk@kk.k', '2019-01-11 08:49:01', 0),
(8, 'Branko', 'Sabo', 'Ulcinjska 16', '06123456789', '$2y$10$ehv6syCjCkhMIAsk/4lKu.RxB8B7QejXyxF6DvD.Lpo1qU6/JhqtC', 'wolfplayer98@gmail.com', '2019-01-13 23:46:53', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idComment`),
  ADD KEY `codeFK` (`codeFK`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `price` (`price`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idOrder`),
  ADD KEY `id` (`idUserFK`),
  ADD KEY `address` (`address`),
  ADD KEY `price` (`price`),
  ADD KEY `price_2` (`price`),
  ADD KEY `idFoodFK` (`idFoodFK`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD KEY `address` (`address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `idComment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `idOrder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`codeFK`) REFERENCES `order` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`idFoodFK`) REFERENCES `food` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`idUserFK`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
