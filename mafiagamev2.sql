-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 14, 2017 at 09:10 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mafiagamev2`
--

-- --------------------------------------------------------

--
-- Table structure for table `krim`
--

CREATE TABLE `krim` (
  `brukernavn` text NOT NULL,
  `krim1` int(2) NOT NULL,
  `krim2` int(2) NOT NULL,
  `krim3` int(2) NOT NULL,
  `krim4` int(2) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krim`
--

INSERT INTO `krim` (`brukernavn`, `krim1`, `krim2`, `krim3`, `krim4`, `id`) VALUES
('jo', 0, 0, 0, 0, 2),
('jonas', 0, 0, 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `signup_ip` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `account_type` char(1) NOT NULL DEFAULT '1',
  `password` varchar(50) NOT NULL DEFAULT '',
  `money` varchar(20) NOT NULL DEFAULT '1500',
  `exp` varchar(20) NOT NULL DEFAULT '0',
  `rank` char(2) DEFAULT '0',
  `health` char(3) NOT NULL DEFAULT '100',
  `email` varchar(100) NOT NULL,
  `img` text NOT NULL,
  `img_tmp` text NOT NULL,
  `kuler` int(11) NOT NULL,
  `ant_drap` int(6) NOT NULL,
  `vapen` text NOT NULL,
  `bil` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `signup_ip`, `username`, `account_type`, `password`, `money`, `exp`, `rank`, `health`, `email`, `img`, `img_tmp`, `kuler`, `ant_drap`, `vapen`, `bil`) VALUES
(3042, '', 'jo', '1', '674f33841e2309ffdd24c85dc3b999de', '1500', '0', '0', '100', 'jo@jo.jo', '', '', 0, 0, '', ''),
(3043, '', 'jonas', '1', '9c5ddd54107734f7d18335a5245c286b', '1500', '0', '0', '100', 'jonas@jonas.jonas', '', '', 0, 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `krim`
--
ALTER TABLE `krim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `krim`
--
ALTER TABLE `krim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3044;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
