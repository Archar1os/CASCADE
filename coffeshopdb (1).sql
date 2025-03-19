-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2025 at 11:43 AM
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
-- Database: `coffeshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `coffee`
--

CREATE TABLE `coffee` (
  `coffee_id` int(11) NOT NULL,
  `coffee_name` varchar(255) NOT NULL,
  `coffee_desc` varchar(255) NOT NULL,
  `coffee_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coffee`
--

INSERT INTO `coffee` (`coffee_id`, `coffee_name`, `coffee_desc`, `coffee_price`) VALUES
(1, 'mocha', '', 49.99),
(2, 'Americano', '', 99),
(3, 'Salted Caramel', '', 129),
(4, 'Caramel Choco', '', 119),
(5, 'Cafe-Chino', '', 109);

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `drinks_id` int(11) NOT NULL,
  `drinks_name` varchar(255) NOT NULL,
  `drinks_desc` varchar(255) NOT NULL,
  `drinks_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`drinks_id`, `drinks_name`, `drinks_desc`, `drinks_price`) VALUES
(1, 'banana smoothie', '', 39.99),
(2, 'Mel-Drizle', '', 109),
(3, 'Macha Foam', '', 129),
(4, 'Macha Chino', '', 109),
(5, 'Berry-Bath', '', 139),
(6, 'Blue Winter', '', 139),
(7, 'Jungle\'s Base', '', 139);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `snacks_id` int(11) DEFAULT NULL,
  `coffee_id` int(11) DEFAULT NULL,
  `drinks_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `snacks_id`, `coffee_id`, `drinks_id`) VALUES
(1, 1, 1, 1),
(2, 1, NULL, NULL),
(3, NULL, 1, NULL),
(4, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE `snacks` (
  `snacks_id` int(11) NOT NULL,
  `snacks_name` varchar(255) NOT NULL,
  `snacks_desc` varchar(255) NOT NULL,
  `snacks_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`snacks_id`, `snacks_name`, `snacks_desc`, `snacks_price`) VALUES
(1, 'cake', '', 79.99),
(2, 'Heavy Breakfast', '', 139),
(3, 'Cheesy Tatoes Balls', '', 99),
(4, 'Cloud Cake', '', 119),
(5, 'Meow-Nat', '', 59);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'Smithd0n', '$2y$10$PnRV34MGNSaTP7reoCiYQ.076hN3QGZhrJcopgvFflsbfLl0CwsBW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coffee`
--
ALTER TABLE `coffee`
  ADD PRIMARY KEY (`coffee_id`);

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`drinks_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `coffee_id` (`coffee_id`),
  ADD KEY `snack_ibfk_1` (`snacks_id`),
  ADD KEY `drinks_ibfk_1` (`drinks_id`);

--
-- Indexes for table `snacks`
--
ALTER TABLE `snacks`
  ADD PRIMARY KEY (`snacks_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `drinks_ibfk_1` FOREIGN KEY (`drinks_id`) REFERENCES `drinks` (`drinks_id`),
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`coffee_id`) REFERENCES `coffee` (`coffee_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
