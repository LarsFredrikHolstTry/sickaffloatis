-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 10:27 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userip` varchar(50) NOT NULL DEFAULT '',
  `signup_ip` varchar(255) NOT NULL,
  `login_count` varchar(10) NOT NULL DEFAULT '0',
  `login_ip` text NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `account_type` char(1) NOT NULL DEFAULT '1',
  `password` varchar(50) NOT NULL DEFAULT '',
  `money` varchar(20) NOT NULL DEFAULT '1500',
  `exp` varchar(20) NOT NULL DEFAULT '0',
  `rank` char(2) DEFAULT '0',
  `health` char(3) NOT NULL DEFAULT '100',
  `email` varchar(100) NOT NULL,
  `img` text NOT NULL,
  `img_tmp` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userip`, `signup_ip`, `login_count`, `login_ip`, `username`, `account_type`, `password`, `money`, `exp`, `rank`, `health`, `email`, `img`, `img_tmp`) VALUES
(3024, '', '', '0', '', 'netflix', '1', 'ca2ee7f690ca860b1c44766905599057', '1500', '0', '0', '100', 'Lars.fr.97@hotmail.com', '', ''),
(3025, '', '', '0', '', 'Test', '1', '098f6bcd4621d373cade4e832627b4f6', '1500', '0', '0', '100', 'testuser@hotmail.com', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3026;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
