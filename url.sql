-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 09:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joinus`
--

-- --------------------------------------------------------

--
-- Table structure for table `url`
--

CREATE TABLE `url` (
  `srno` int(11) NOT NULL,
  `page` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `url`
--

INSERT INTO `url` (`srno`, `page`, `location`) VALUES
(1, 'malad', 'malad.php'),
(2, 'goregaon', 'goregaon.php'),
(3, 'mumbai', 'mumbai.php'),
(4, 'kandivali', 'kandivali.php'),
(5, 'borivali', 'borivali.php'),
(6, 'vile parle', 'vp.php'),
(7, 'andheri', 'andheri.php'),
(8, 'bandra', 'bandra.php'),
(9, 'dahisar', 'dahisar.php'),
(10, 'Mad Over Donuts', 'mod.php'),
(11, 'Sirocco', 'sirocco.php'),
(12, 'Mojo Pizza', 'mojopizza.php'),
(13, 'Stir Fry Grill', 'sfg.php'),
(14, '5 Spice', 'spice.php'),
(15, 'Bombay Curry ', 'bc.php'),
(16, 'Candies', 'candies.php'),
(17, 'Shiv Sagar', 'shiv.php'),
(18, 'Tea Villa Cafe', 'tea.php'),
(19, 'Mcdonalds', 'mcd.php'),
(20, 'Starbucks', 'starbucks.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `url`
--
ALTER TABLE `url`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `url`
--
ALTER TABLE `url`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
