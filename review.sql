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
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `srno` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `contactno` int(11) NOT NULL,
  `restaurant` varchar(50) NOT NULL,
  `rating` float NOT NULL,
  `review` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`srno`, `uname`, `contactno`, `restaurant`, `rating`, `review`) VALUES
(34, 'Gaurav Taparia', 2147483647, 'Mojo Pizza', 4, 'Nice restaurant overall'),
(36, 'Ashwini Desai', 2147483647, 'Mojo Pizza', 4, 'Bekar restaurant'),
(41, 'Ashwini', 1231231, 'Starbucks', 4.5, 'Bekar hai bhaut bhai '),
(43, 'Gaurav Taparia', 797729965, 'Mojo Pizza', 4, 'Bekar hai bhai mat jao'),
(45, 'Gaurav Taparia', 2147483647, 'Mojo Pizza', 4, 'yEH DUKH KHATAM KYU NAHI HOTE BHAI '),
(47, 'Dhruvi', 123456789, 'Mojo Pizza', 4, 'I did not get my food.'),
(49, 'Gaurav Taparia', 2147483647, 'Mojo Pizza', 4, 'Very nice service!'),
(51, 'Vanshika ', 2147483647, 'Mad Over Donuts', 4.3, 'Place is nice, but the menu can be more extensive I believe. Plus open one in mira road soon.'),
(53, 'GauravTaparia', 2147483647, 'Sirocco', 4.2, 'Amazing place to spend a quality time at'),
(57, '', 0, '', 0, ''),
(58, 'Gaurav Taparia', 2147483647, 'Stir Fry Grill', 4, 'Very nice food options');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
