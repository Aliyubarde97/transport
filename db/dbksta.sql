-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 08:12 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbksta`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `CPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Surname`, `Phone`, `Gender`, `email`, `Password`, `CPassword`) VALUES
(16, 'aliyu', 'barde', '97973575', 'Male', 'aliyubarde97@gmail.com', '9450e33cd42f9781593a8e8cceadcfae', ''),
(17, 'aliyu', 'Barde', '090876666', 'Male', 'aliyu@gmail.com', '9450e33cd42f9781593a8e8cceadcfae', '');

-- --------------------------------------------------------

--
-- Table structure for table `availablebus`
--

CREATE TABLE `availablebus` (
  `id` int(11) NOT NULL,
  `Home` varchar(20) NOT NULL,
  `Distination` varchar(20) NOT NULL,
  `Date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `Bus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `availablebus`
--

INSERT INTO `availablebus` (`id`, `Home`, `Distination`, `Date`, `Bus`) VALUES
(9, 'katsina', 'jogaq', '2021-08-05 23:00:00.000000', 'kt001'),
(10, 'katsina', 'asba', '2021-08-05 23:00:00.000000', '006');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `booking_passenger` int(11) NOT NULL,
  `booking_bus` int(11) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `booking_status` varchar(20) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_passenger`, `booking_bus`, `booking_date`, `booking_status`) VALUES
(1, 1, 8, '2021-08-11 16:47:22', 'Pending'),
(2, 1, 8, '2021-08-11 16:49:32', 'Pending'),
(3, 1, 8, '2021-08-11 16:52:49', 'Pending'),
(4, 1, 7, '2021-08-11 17:16:05', 'Pending'),
(5, 1, 7, '2021-08-11 17:16:12', 'Pending'),
(6, 1, 7, '2021-08-25 18:06:08', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(11) NOT NULL,
  `Bus_No` varchar(20) NOT NULL,
  `number_seat` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `depart_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `Bus_No`, `number_seat`, `city`, `status`, `depart_time`) VALUES
(3, '10001', 3, 47, 'Available', '07:15:00'),
(7, '10002', 10, 43, 'Available', '10:00:00'),
(8, '10001', 3, 44, 'Available', '11:00:00'),
(9, '10001', 10, 44, 'Available', '17:00:00'),
(10, '10005', 12, 44, 'Available', '07:00:00'),
(11, '10001', 15, 42, 'Not Available', '14:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `Home` varchar(20) NOT NULL,
  `Distination` varchar(20) NOT NULL,
  `Price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `Home`, `Distination`, `Price`) VALUES
(37, 'katsina', 'kano', '800'),
(38, 'kastina', 'abuja', '800'),
(39, 'abuja', 'kano', '5000'),
(40, 'Katsina', 'Sokoto', '3000'),
(42, 'katsina', 'kano', '800'),
(43, 'katsina', 'abuja', '800'),
(44, 'katsina', 'abuja', '5000'),
(45, 'jwjwmwm', 'wwmwwm', '800'),
(46, 'jdjjjddd', 'mmmdd', '90'),
(47, 'Abuja', 'Katsina', '800'),
(48, 'katsina', 'kano', '800');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `id` int(11) NOT NULL,
  `Passenger_name` varchar(100) NOT NULL,
  `Nxt_kin_phone` varchar(11) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `CPassword` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`id`, `Passenger_name`, `Nxt_kin_phone`, `Gender`, `City`, `Date`, `email`, `Password`, `CPassword`) VALUES
(1, 's', '0906868686', 'Male', '', '2021-08-10 18:42:50', 'aliyubarde97@gmail.com', '83055da0b28b8dc9a14e1c83fcbef48c', ''),
(2, 'usman', '0906868686', 'Male', '', '2021-08-03 23:00:00', 'usmam@gmail.com', '9450e33cd42f9781593a8e8cceadcfae', ''),
(3, 'gide sani', '08151213212', 'female', '', '0000-00-00 00:00:00', 'aliyumomir@gmaz.com', 'c2964caac096f26db222cb325aa267cb', ''),
(4, 'aliyu', 'ismail', 'Male', '', '2021-08-06 23:00:00', 'alyu@gmail.com', '9450e33cd42f9781593a8e8cceadcfae', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`email`);

--
-- Indexes for table `availablebus`
--
ALTER TABLE `availablebus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `booking_passenger` (`booking_passenger`),
  ADD KEY `booking_bus` (`booking_bus`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city` (`city`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `availablebus`
--
ALTER TABLE `availablebus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`booking_passenger`) REFERENCES `passenger` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`booking_bus`) REFERENCES `buses` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `buses`
--
ALTER TABLE `buses`
  ADD CONSTRAINT `buses_ibfk_1` FOREIGN KEY (`city`) REFERENCES `city` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
