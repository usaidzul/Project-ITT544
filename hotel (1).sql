-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 10:25 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookid` int(11) NOT NULL,
  `date` date NOT NULL,
  `days` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `roomid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookid`, `date`, `days`, `id`, `roomid`) VALUES
(1, '2018-01-01', 1, 1, 0),
(2, '2018-01-02', 1, 1, 0),
(3, '2018-01-01', 1, 1, 1),
(4, '2018-01-01', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `paymentid` int(11) NOT NULL,
  `payment_date` datetime NOT NULL,
  `bookid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roomavail`
--

CREATE TABLE `roomavail` (
  `roomNo` int(11) NOT NULL,
  `roomid` int(11) NOT NULL,
  `roomstat` int(11) NOT NULL,
  `roomdesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomavail`
--

INSERT INTO `roomavail` (`roomNo`, `roomid`, `roomstat`, `roomdesc`) VALUES
(1, 1, 1, 'available'),
(2, 2, 1, 'available'),
(3, 3, 2, 'booked'),
(4, 2, 1, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomid` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_price` decimal(3,0) NOT NULL,
  `room_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomid`, `room_type`, `room_price`, `room_desc`) VALUES
(1, 'Superior Twin', '168', '2 single beds'),
(2, 'Superior Deluxe', '200', '1 king size '),
(3, 'Superior Triple', '280', '1 queen size bed 1 single ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `noPhone` varchar(20) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `bookid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `noPhone`, `fName`, `lName`, `email`, `role`, `bookid`) VALUES
(14, '', '1234', '0123456789', 'Ahmad', 'Ali', 'fn@google.com', 1, 1),
(16, '', '1234', '0123456789', 'Ahmad', 'nizar', 'admin@google.com', 1, 1),
(17, '', '1234', '0123456789', 'Ahmad', 'roslan', 'admin11@google.com', 1, 1),
(18, '', '1234', '0123456789', 'Ahmad', 'roslan', 'admin@google.com', 1, 1),
(20, '', '202cb962ac59075b964b07152d234b70', '01234567891', 'Ahmad', 'roslan', 'admin@google.com', 1, 1),
(22, '', '81dc9bdb52d04dc20036dbd8313ed055', '0123456789', 'Ahmad', 'roslan', 'admin@google.com', 1, 1),
(24, '', '698d51a19d8a121ce581499d7b701668', '0123456789', 'Ahmad', 'roslan', 'admin@google.com', 1, 1),
(25, '', '81dc9bdb52d04dc20036dbd8313ed055', '0123456789', 'Ahmad', 'roslan', 'admin@gmail.com', 1, 1),
(26, '', '123', '0123456789', 'Ahmad', 'roslan', 'fn@google.com', 1, 1),
(30, 'afa', '202cb962ac59075b964b07152d234b70', '0123456789', 'Ahmad', 'roslan', 'admin@yahoo.com', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `id` (`id`),
  ADD KEY `room_id` (`roomid`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`paymentid`),
  ADD KEY `book_id` (`bookid`);

--
-- Indexes for table `roomavail`
--
ALTER TABLE `roomavail`
  ADD PRIMARY KEY (`roomNo`),
  ADD KEY `roomid` (`roomid`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`bookid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roomavail`
--
ALTER TABLE `roomavail`
  MODIFY `roomNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `roomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
