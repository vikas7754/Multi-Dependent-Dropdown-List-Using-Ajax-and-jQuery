-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 10, 2022 at 08:16 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `country_data`
--

CREATE TABLE `country_data` (
  `id` int(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country_data`
--

INSERT INTO `country_data` (`id`, `country`, `state`, `district`, `city`) VALUES
(1, 'India', 'Uttar Pradesh', 'Shahjahanpur', 'Jalalabad'),
(2, 'India', 'Uttar Pradesh', 'Shahjahanpur', 'Tilhar'),
(3, 'India', 'Uttar Pradesh', 'Shahjahanpur', 'Katra'),
(4, 'India', 'Uttar Pradesh', 'Shahjahanpur', 'Powayan'),
(5, 'India', 'Uttar Pradesh', 'Shahjahanpur', 'Madnapur'),
(6, 'India', 'Uttar Pradesh', 'Shahjahanpur', 'Nigohi'),
(7, 'India', 'Uttar Pradesh', 'Bareilly', 'Faridpur'),
(8, 'India', 'Uttar Pradesh', 'Bareilly', 'Bahedi'),
(9, 'India', 'Uttar Pradesh', 'Bareilly', 'Aonla'),
(10, 'India', 'Delhi', 'Central Delhi', 'Darya Ganj'),
(11, 'India', 'Delhi', 'Central Delhi', 'Pahad Ganj'),
(12, 'India', 'Delhi', 'New Delhi', 'Chanakya Puri'),
(13, 'Pakistan', 'Balochistan', 'Quetta', 'Turbat'),
(14, 'Pakistan', 'Balochistan', 'Quetta', 'Hub'),
(15, 'Pakistan', 'Balochistan', 'Panjgur', 'Paroom'),
(16, 'Pakistan', 'Khyber Pakhtunkhwa', 'Karak', 'Doaba'),
(17, 'Pakistan', 'Khyber Pakhtunkhwa', 'Karak', 'Kohat'),
(18, 'Pakistan', 'Khyber Pakhtunkhwa', 'Khyber', 'Peshawar'),
(19, 'Pakistan', 'Sind', 'Karachi', 'Baldia'),
(20, 'Pakistan', 'Sind', 'Karachi', 'gulberg'),
(21, 'Pakistan', 'Sind', 'Jacobabad', 'Sohbatpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country_data`
--
ALTER TABLE `country_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country_data`
--
ALTER TABLE `country_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
