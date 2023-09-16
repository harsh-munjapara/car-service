-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 07:52 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sid`, `sname`, `image`, `serviceDesc`, `isActive`, `price`) VALUES
(2, 'break repair', '/img/tireRotation.jpg', 'Ensure even tire wear and improve handling with tire rotation.', 1, 75000),
(7, 'oil Change', '/img/oilchange.jpg', 'Themes: base black-tie blitzer cupertino dark-hive dot-luv eggplant excite-bike flick hot-sneaks humanity le-frog mint-choc overcast pepper-grinder redmond smoothness south-street start sunny swanky-purse trontastic ui-darkness ui-lightness vader', 1, 30000),
(8, 'test', '/img/car3.jpg', 'test', 1, 23232);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_request`
--

INSERT INTO `service_request` (`id`, `oname`, `contact`, `address`, `vnumber`, `vname`, `services`, `status`) VALUES
(11, 'sahil@123', 738782, 'hfhkah', '3874837', 'hasjhfah', 'break repair', 2),
(18, 'sahil@123', 82573458, 'test1234', 'GJ05 AI20', 'test', 'break repair,oil Change', 1),
(21, 'sahil@123', 2147483647, 'nbhjbkljhiukj', 'GJ05 AI20', 'swift', 'break repair,oil Change,test,test,hello', 3),
(23, 'meetlo', 2147483647, '12,anmol row house,mota varachha , surat', 'GJ05 AI 2003', 'swift', 'break repair,oil Change', 2),
(24, 'limbu10', 2147483647, '12, ghadpur,surat', 'GJ05 AI 2004', 'supra', 'break repair,oil Change,test,hello', 0),
(25, 'limbu10', 2147483647, '12, ghadpur,suart', 'GJ05 AI 2022', 'camero', 'break repair,oil Change,hello', 0),
(26, 'pandu', 2147483647, '12,abc,xyz,surat', 'GJ05 AI2012', 'abc', 'oil Change', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  `img` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `type`, `img`) VALUES
(1, 'harsh@123', '12345', 'harsh@gmail.com', 'admin', 'nit.jpg'),
(2, 'harit123', '111111', 'hari@gmail.com', 'admin', 'image.jpg'),
(17, 'sahil@123', 'qwert', 'sahil@gmail.com', 'user', 'image.jpg');

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
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `service_request`
--
ALTER TABLE `service_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
