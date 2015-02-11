-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 11, 2015 at 08:23 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `peak360`
--

-- --------------------------------------------------------

--
-- Table structure for table `class time`
--

CREATE TABLE `class time` (
`id` int(10) NOT NULL,
  `date` date NOT NULL,
  `coach` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movement`
--

CREATE TABLE `movement` (
`id` int(10) NOT NULL,
  `movement_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rankings`
--

CREATE TABLE `rankings` (
`id` int(10) NOT NULL,
  `class_id` int(10) NOT NULL,
  `workout_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`id` int(10) NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` int(10) NOT NULL,
  `height` int(10) NOT NULL,
  `user_weight` int(10) NOT NULL,
  `gender` char(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `password`, `address`, `city`, `state`, `zipcode`, `height`, `user_weight`, `gender`) VALUES
(2, 'clay', 'ewing', '', '110 sw 12th street', 'miami', 'fl', 33130, 70, 140, 'M'),
(3, 'scooby', 'doo', '', 'castle', 'ville', 'fl', 10101, 50, 100, 'M'),
(4, 'Kelsey', 'Kjeldsen', '', '3135 gifford lane', 'Coconut Grove', 'FL', 33133, 61, 125, '');

-- --------------------------------------------------------

--
-- Table structure for table `workouts`
--

CREATE TABLE `workouts` (
  `workout_id` int(10) NOT NULL,
  `workout_time` time NOT NULL,
  `movement_id` int(10) NOT NULL,
  `weights` float NOT NULL,
  `repititions` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `class_id` int(11) NOT NULL,
  `workout_category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class time`
--
ALTER TABLE `class time`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movement`
--
ALTER TABLE `movement`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rankings`
--
ALTER TABLE `rankings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class time`
--
ALTER TABLE `class time`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `movement`
--
ALTER TABLE `movement`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rankings`
--
ALTER TABLE `rankings`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
