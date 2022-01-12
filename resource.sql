-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2018 at 01:22 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resource`
--

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `booking_id` int(11) NOT NULL,
  `bookDate` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `status` int(11) NOT NULL,
  `bookedBy` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`booking_id`, `bookDate`, `startTime`, `endTime`, `status`, `bookedBy`, `purpose`, `name`) VALUES
(5, '2018-04-06', '12:00:00', '01:00:00', 0, 'ddfbdfb', 'on', 'abc'),
(6, '2018-04-18', '01:00:00', '02:00:00', 0, 'shubahm', 'Shared Resource 2', 'abc'),
(7, '2018-04-18', '01:00:00', '02:00:00', 0, 'shivam', 'Shared Resource 3', 'abc'),
(9, '2018-04-18', '12:30:00', '01:30:00', 0, 'abc', 'Shared Resource 2', 'abc'),
(10, '2018-04-18', '02:00:00', '03:00:00', 0, 'sraj', 'Shared Resource 3', 'abc'),
(11, '2018-04-18', '03:30:00', '04:30:00', 0, 'sraj', 'Shared Resource 3', 'abc'),
(20, '2018-04-20', '05:30:00', '06:30:00', 0, 'test', 'Shared Resource 2', 'abc'),
(21, '2018-04-20', '01:00:00', '02:00:00', 0, 'qwert', 'Shared Resource 1', 'abc'),
(22, '2018-04-20', '08:30:00', '09:30:00', 0, 'qwertgh', 'Shared Resource 2', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`) VALUES
(1, 'hod', '123', 'admin'),
(2, 'prince', '123', 'admin'),
(3, 'director', '123', 'admin'),
(4, 'teacher1', 'abc', 'staff'),
(5, 'teacher2', 'abc', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
