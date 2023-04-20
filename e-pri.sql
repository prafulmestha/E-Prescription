-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 08:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-pri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin@1234', 1148458757);


-- --------------------------------------------------------
--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngos`
--

INSERT INTO `pharmacy` (`id`, `name`, `email`, `password`, `mobile`, `address`) VALUES
(1, 'Avani', 'avani@gmail.com', 'avani@123', 2147483644, 'sangli'),
(2, 'Ciigma Health Foundation', 'ciigma@gmail.com', 'ciigma@123', 2147483644, 'aurangabad');


--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table ``
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `address`) VALUES
(1, 'praful', 'praful@gmail.com', 'praful@123', 2147483644, 'Bhayandar'),
(2, 'aman', 'aman@gmail.com', 'aman@123', 2147483644, 'worli'); 

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `doctor` (`id`, `name`, `email`, `password`, `mobile`, `address`) VALUES
(1, 'praful', 'praful@gmail.com', 'praful@123', 2147483644, 'Bhayandar'),
(2, 'aman', 'aman@gmail.com', 'aman@123', 2147483644, 'worli'); 




--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngos`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);



--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ngos`
--
ALTER TABLE `pharmacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- SID: SKa08def1d2708cf83ad200f0975fc1d87
-- Secret: lAJysx6E4PpHxKtlAkUkmtQywq2hPrJw










/*Table structure for table `requester` */







/*Table structure for table `medicine` */

DROP TABLE IF EXISTS `medicne`;

CREATE TABLE `medicine` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `medicine` */

INSERT INTO `medicine` (`id`, `name`, `code`) VALUES
(1, 'Paracin 650', '8906001410775'),
(2, 'Pio plus', '0516320007'),
(3, 'hydroquinone cream usp', '18906047226917'),
(4, 'novamox paediatric drops', '8902674000473'),
(5, 'dermadew aloe cream', '8906058357009'),
(6, 'koflet lozenges 10', '8901138502577'),
(7, 'himplasia tablet 30', '8901138507381'),
(8, 'liv 52 tablet', '8901138500665'),
(9, 'gasex tablet', '8901138500672'),
(10, 'lukol tablet', '8901138500726');