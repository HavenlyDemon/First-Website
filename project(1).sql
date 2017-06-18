-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2017 at 10:20 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `name` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `cv` longblob NOT NULL,
  `message` varchar(150) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`name`, `email`, `phone`, `cv`, `message`, `id`) VALUES
('kvish', 'kasdkajsh@gmail.com', '03215200598', 0x494d475f333138302e4a5047, 'bb', 10),
('ahsan', 'ahsanrasul08@gmail.com', '0325846988', 0x494d475f333138302e4a5047, 'yo', 7),
('ahsan', 'ahsanrasul08@gmail.com', '', '', 'yo', 8),
('ahsan', 'ahsanrasul08@gmail.com', '0325846988', 0x494d475f333138302e4a5047, 'bb', 9),
('ahsan', 'ahsanrasul08@gmail.com', '0325846988', 0x494d475f333138302e4a5047, '84', 11),
('ahsan', 'ahsanrasul08@gmail.com', '0321520', 0x494d475f333138302e4a5047, 'agdddg', 12),
('ahsan', 'ahsanrasul08@gmail.com', '0325846988', 0x494d475f333138302e4a5047, 'blaa', 13),
('ahsan', 'ahsanrasul08@gmail.com', '0325846988', 0x494d475f333138302e4a5047, 'dasfsdf', 14),
('ahsan', 'ahsanrasul08@gmail.com', '0325846988', 0x494d475f333138302e4a5047, '21215', 15),
('asdfsadf', 'asdfdsf', 'adfasdf', 0x494d475f333138302e4a5047, 'adfasdf', 16);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mail` varchar(50) NOT NULL,
  `city` text NOT NULL,
  `country` text NOT NULL,
  `msg` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
