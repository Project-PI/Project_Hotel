-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2017 at 05:36 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_pi`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `place` varchar(250) NOT NULL,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `suite` varchar(250) NOT NULL,
  `no` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `cuisine` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `place`, `adult`, `children`, `suite`, `no`, `from_date`, `to_date`, `cuisine`) VALUES
(1, 'KH', 4, 2, 'Double Room', 2, '2017-10-22', '2017-10-23', 'multicuisine'),
(2, 'LA', 5, 2, 'Premium Double Room', 3, '2017-12-22', '2018-01-01', 'continental'),
(3, 'FR', 3, 1, 'Premium Double Room', 2, '2017-09-02', '2017-09-07', 'continental'),
(4, 'KH', 5, 4, 'Ocean View Suite', 3, '2017-10-02', '2017-10-03', 'multicuisine'),
(5, 'EN', 2, 0, 'Executive Suite', 1, '2017-09-02', '2017-09-10', 'local'),
(6, 'CN', 2, 0, 'Premium Single Room', 1, '2017-11-17', '2017-11-20', 'local'),
(7, 'CN', 1, 0, 'Single Room', 1, '2017-08-23', '2017-08-25', 'local'),
(8, 'SP', 6, 3, 'Ocean View Suite', 3, '2017-11-06', '2017-11-12', 'continental'),
(9, 'RU', 2, 1, 'Double Room', 1, '2017-07-04', '2017-07-08', 'local'),
(10, 'KR', 4, 2, 'Ocean View Suite', 2, '2018-01-09', '2018-01-15', 'continental'),
(11, 'MM', 4, 3, 'Ocean View Suite', 2, '2017-12-23', '2018-01-01', 'continental'),
(12, 'SG', 3, 2, 'Double Room', 2, '2017-11-19', '2017-11-21', 'multicuisine'),
(13, 'MY', 2, 1, 'Premium Double Room', 1, '2017-10-30', '2017-11-03', 'local'),
(14, 'KH', 7, 5, 'Double Room', 4, '2017-07-27', '2017-07-29', 'multicuisine'),
(15, 'BE', 2, 0, 'Deluxe Suite', 1, '2017-09-24', '2017-10-04', 'continental'),
(16, 'LA', 2, 1, 'Double Room', 1, '2017-10-01', '2017-10-07', 'multicuisine'),
(17, 'PH', 5, 3, 'Deluxe Suite', 3, '2017-09-06', '2017-09-10', 'multicuisine'),
(18, 'PH', 3, 0, 'Double Room', 2, '2017-09-08', '2017-09-11', 'continental'),
(19, 'KH', 5, 3, 'Double Room', 2, '2017-12-24', '2017-12-26', 'multicuisine'),
(20, 'CN', 4, 2, 'Premium Double Room', 2, '2017-12-02', '2017-12-06', 'multicuisine'),
(21, 'FR', 2, 0, 'Premium Single Room', 1, '2017-11-17', '2017-11-20', 'continental'),
(22, 'FR', 4, 1, 'Ocean View Suite', 2, '2017-11-09', '2017-11-13', 'multicuisine'),
(23, 'EN', 2, 0, 'Double Room', 1, '2017-10-30', '2017-11-03', 'local'),
(24, 'US', 4, 3, 'Premium Double Room', 2, '2017-11-09', '2017-11-13', 'continental'),
(25, 'US', 1, 0, 'Single Room', 1, '2017-12-23', '2018-01-01', 'continental'),
(26, 'SP', 3, 0, 'Premium Double Room', 1, '2017-10-22', '2017-10-23', 'continental'),
(27, 'SG', 2, 0, 'Executive Suite', 1, '2017-09-08', '2017-09-11', 'local'),
(28, 'VN', 8, 4, 'Premium Double Room', 4, '2017-11-06', '2017-11-12', 'multicuisine'),
(29, 'CN', 6, 2, 'Presidential Suite', 3, '2017-09-24', '2017-10-04', 'multicuisine'),
(30, 'CN', 5, 3, 'Deluxe Suite', 3, '2017-12-22', '2018-01-01', 'multicuisine'),
(31, 'IN', 7, 1, 'Premium Double Room', 4, '2017-11-06', '2017-11-12', 'multicuisine'),
(32, 'IN', 2, 4, 'Presidential Suite', 1, '2017-09-24', '2017-10-04', 'local'),
(33, 'TH', 3, 2, 'Presidential Suite', 2, '2017-12-23', '2018-01-01', 'multicuisine'),
(34, 'TH', 5, 3, 'Double Room', 2, '2018-01-09', '2018-01-15', 'multicuisine'),
(35, 'LA', 2, 1, 'Double Room', 1, '2017-09-08', '2017-09-11', 'continental'),
(36, 'MM', 5, 3, 'The Penthouse', 2, '2017-12-22', '2018-01-01', 'continental'),
(37, 'MY', 4, 2, 'Executive Suite', 2, '2017-10-22', '2017-10-23', 'continental'),
(38, 'PH', 2, 2, 'Premium Double Room', 1, '2017-10-30', '2017-11-03', 'multicuisine'),
(39, 'PH', 3, 3, 'Executive Suite', 2, '2017-12-27', '2018-01-01', 'multicuisine'),
(40, 'IN', 5, 3, 'Double Room', 3, '2017-12-23', '2018-01-01', 'multicuisine'),
(41, 'SP', 4, 0, 'Premium Double Room', 2, '2017-12-23', '2018-01-01', 'continental'),
(42, 'CN', 2, 0, 'Executive Suite', 1, '2017-10-30', '2017-11-03', 'local'),
(43, 'SG', 3, 0, 'Premium Double Room', 2, '2018-01-09', '2018-01-15', 'continental'),
(44, 'LA', 2, 1, 'Deluxe Suite', 1, '2017-09-02', '2017-09-10', 'continental'),
(45, 'CN', 3, 2, 'Premium Single Room', 3, '2017-12-22', '2018-01-01', 'multicuisine'),
(46, 'CN', 5, 1, 'Double Room', 3, '2017-10-01', '2017-10-07', 'multicuisine'),
(47, 'KH', 7, 4, 'The Penthouse', 4, '2017-09-08', '2017-09-11', 'continental'),
(48, 'KH', 6, 4, 'Double Room', 4, '2017-09-08', '2017-09-11', 'multicuisine'),
(49, 'FR', 1, 0, 'Single Room', 1, '2017-12-23', '2018-01-01', 'continental'),
(50, 'KH', 6, 4, 'The Penthouse', 3, '2017-10-01', '2017-10-07', 'continental');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`) VALUES
(1, 'henng', 'siyen', 'hengsiyen@gmail.com', 12954196, 'hello! can you help me please!!');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `contain` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `contain` text NOT NULL,
  `post_date` date NOT NULL,
  `img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `about_me` text NOT NULL,
  `hash` varchar(100) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `first_name`, `last_name`, `sex`, `password`, `email`, `about_me`, `hash`, `active`) VALUES
(1, 'HENG', 'Siyen', 'Male', '$2y$10$HS/U//NmsDARiqD821y4.ewj/kEtFQeiDvQTyJaOvJGLjOgZSoxqK', 'hengsiyen@gmail.com', 'HEllo', '8d317bdcf4aafcfc22149d77babee96d', 1),
(2, 'Sreymeas', 'NAO', 'Female', '$2y$10$QSKhJuAn1OOzZ3uWIpG.l.UPKfMVYfoOPBMw.qsEG81QRUkjCnzee', 'naosreymeas2@gmail.com', 'sreymeas', 'a64c94baaf368e1840a1324e839230de', 1),
(3, 'CHON', 'Sovanary', 'Female', '$2y$10$NVaZjPrtqVe1MDlPrehRp.NhQLfEV2fBZS5ReipF7ww6O2QQjeNwK', 'chonsovanary2015@gmail.com', 'hi', '37693cfc748049e45d87b8c7d8b9aacd', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
