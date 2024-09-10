-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2024 at 12:28 AM
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
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(23) NOT NULL,
  `facebook` text NOT NULL,
  `number` text NOT NULL,
  `userid` int(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `facebook`, `number`, `userid`) VALUES
(1, 'https://www.facebook.com/profile.php?id=100092390717480', '750 4499405', 5);

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `like_id` int(11) NOT NULL,
  `owner_post_id` int(11) NOT NULL,
  `liker_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `like`
--

INSERT INTO `like` (`like_id`, `owner_post_id`, `liker_id`, `post_id`) VALUES
(130, 5, 6, 2),
(131, 5, 6, 3),
(132, 5, 6, 1),
(155, 5, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(44) NOT NULL,
  `des` text NOT NULL,
  `room` int(3) NOT NULL,
  `bath` int(3) NOT NULL,
  `garage` int(3) NOT NULL,
  `date` varchar(20) NOT NULL,
  `price` int(23) NOT NULL,
  `location` varchar(44) NOT NULL DEFAULT 'house.jpg',
  `image` varchar(22) NOT NULL,
  `type` varchar(22) NOT NULL,
  `userid` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `des`, `room`, `bath`, `garage`, `date`, `price`, `location`, `image`, `type`, `userid`) VALUES
(1, 'pathouse', 'is the largest house at the Pritty place\r\nhowever to save you family live please bay this house for yourself\r\n', 2, 1, 1, '22/3/2002', 230000, 'slemaniah', 'house.jpg', 'house', 5),
(2, 'in the highest level of the city', 'lorem10', 2, 1, 1, '22/6/2000', 121800, 'Dhok', 'apartment2.jpg', 'house', 8),
(3, 'cute house from Dhok', 'lorem15', 3, 2, 1, '1/2/1902', 124600, 'Halabja', 'house2.jpg', 'apartment', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(22) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `rule` int(1) NOT NULL DEFAULT 1,
  `photo` varchar(44) NOT NULL DEFAULT 'person.jpg',
  `joined` varchar(22) NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `email`, `password`, `rule`, `photo`, `joined`, `phone`) VALUES
(5, 'ismahel hamza', 'ismahel@gmail.com', '1234', 1, 'person.jpg	', '12/07/24', '07507653409'),
(6, 'shoxan rzgar', 'shoxan@gmail.com', '1234', 1, 'person.jpg	', '12/07/24', '07506348275'),
(7, 'Ismahel shwan', 'ismahelabc@gmail.com', 'Cout<<1', 1, 'person.jpg	', '12/07/24', '07507249265'),
(8, 'ibrahem hamza', 'ibrahem@gmail.com', 'Redirect@2', 1, 'person.jpg	', '12/07/24', '07507263891'),
(9, 'sarah kamaran', 'sarah@gmail.com', 'Sarah@2', 1, 'person.jpg', '12/07/24', '07508927345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
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
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
