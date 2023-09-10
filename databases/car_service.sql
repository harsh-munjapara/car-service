-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2023 at 05:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `sid` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `serviceDesc` varchar(10000) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sid`, `sname`, `image`, `serviceDesc`, `isActive`, `price`) VALUES
(2, 'break repair', '/img/tireRotation.jpg', 'Ensure even tire wear and improve handling with tire rotation.', 1, 75000),
(7, 'oil Change', '/img/oilchange.jpg', 'Themes: base black-tie blitzer cupertino dark-hive dot-luv eggplant excite-bike flick hot-sneaks humanity le-frog mint-choc overcast pepper-grinder redmond smoothness south-street start sunny swanky-purse trontastic ui-darkness ui-lightness vader', 1, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `service_request`
--

CREATE TABLE `service_request` (
  `id` int(11) NOT NULL,
  `oname` varchar(100) NOT NULL,
  `contact` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `vnumber` varchar(20) NOT NULL,
  `vname` varchar(100) NOT NULL,
  `services` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `service_request`
--

INSERT INTO `service_request` (`id`, `oname`, `contact`, `address`, `vnumber`, `vname`, `services`, `status`) VALUES
(8, 'test', 738782, 'hfhkah', '3874837', 'hasjhfah', 'break repair', 1),
(9, 'test', 738782, 'hfhkah', '3874837', 'hasjhfah', 'break repair', 2),
(10, 'test', 738782, 'hfhkah', '3874837', 'hasjhfah', 'break repair', 3),
(11, 'test', 738782, 'hfhkah', '3874837', 'hasjhfah', 'break repair', 3),
(12, 'sdg', 3423, 'ahsf', '98328', 'hahf', 'break repair,oil Change', 2),
(13, 'sdg', 3423, 'ahsf', '98328', 'hahf', 'break repair,oil Change', 2),
(14, 'sdg', 3423, 'ahsf', '98328', 'hahf', 'break repair,oil Change', 0),
(15, 'harit', 34348529, 'hadihf', '8234823', 'ajifha', 'break repair,oil Change', 0),
(16, 'hadjf', 3, 'dfjkj', 'akfkk', 'dji', 'break repair,oil Change', 0),
(17, 'harit ', 3958208, 'sjsjdoh', '9324hdfjh', 'dk', 'break repair,oil Change', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `type`) VALUES
(1, 'harsh@123', '12345', 'harsh@gmail.com', 'admin'),
(2, 'hari', '111111', 'hari@gmail.com', 'admin'),
(17, 'sahil@123', 'qwert', 'sahil@gmail.com', 'user'),
(19, 'meetlo', '1234', 'meet@gmail.com', 'user'),
(24, 'harit2123', 'harit', 'harit@gamil.com', 'user'),
(28, 'hello1232', '12345', 'harsh@gmail.com', 'user'),
(29, 'qwer1', 'asdfg', 'hello@gmail.com', 'user'),
(31, 'test', '1234', 'test@gmail.comm', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `service_request`
--
ALTER TABLE `service_request`
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
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service_request`
--
ALTER TABLE `service_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
