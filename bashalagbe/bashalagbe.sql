-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 05:38 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bashalagbe`
--

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `rent_id` int(11) NOT NULL,
  `city` varchar(25) NOT NULL,
  `area` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `rent_fee` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `rooms` int(11) NOT NULL,
  `kitchen` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rent_id`, `city`, `area`, `address`, `rent_fee`, `picture`, `rooms`, `kitchen`, `bathroom`, `user_id`, `date`) VALUES
(13, 'Dhaka', 'Gulshan', 'Gulshan-2', 30000, 'room7.jpg', 4, 2, 2, 5, '2020-11-07'),
(14, 'Dhaka', 'Uttara', 'Sector-11', 20000, 'room5.jpg', 3, 1, 1, 5, '2020-11-07'),
(19, 'Gazipur', 'Rothkhola', '701- east nayanagar, fashertek,vatara Dhaka-1212', 25000, 'room2.jpg', 2, 1, 1, 7, '2020-11-10'),
(20, 'Savar', 'Jaleshwar', 'Liberty Tower', 25000, 'room5.jpg', 3, 2, 1, 5, '2020-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sample`
--

CREATE TABLE `tbl_sample` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `month` varchar(250) NOT NULL,
  `payment` enum('Due','Paid') NOT NULL,
  `bill` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sample`
--

INSERT INTO `tbl_sample` (`id`, `name`, `month`, `payment`, `bill`, `total`) VALUES
(1, 'Ashraful', 'Jan - Oct', 'Paid', 2000, 30000),
(2, 'Ashraful', 'November', 'Due', 1000, 26000),
(3, 'Mehedi', 'Jan - Nov', 'Paid', 1000, 29000),
(4, 'Aminul', 'Aug - Sep', 'Paid', 1000, 32000),
(5, 'Aminul', 'Oct - Nov', 'Due', 1000, 30000),
(6, 'Jahin', 'April - Aug', 'Paid', 1000, 27000),
(7, 'Jahin', 'Sep - Nov', 'Due', 1000, 28000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `user_type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`, `mobile`, `user_type`) VALUES
(5, 'Joy', 'joy@gmail.com', 'joy', 1719344331, '0'),
(7, 'mehedi', 'mehedi@gmail.com', '123', 1623920049, '0'),
(8, 'Aminul', 'aminul@gmail.com', '123', 1623920049, '1'),
(10, 'Zahid', 'zahid@gmail.com', '123', 1719344331, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`rent_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_sample`
--
ALTER TABLE `tbl_sample`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_sample`
--
ALTER TABLE `tbl_sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
