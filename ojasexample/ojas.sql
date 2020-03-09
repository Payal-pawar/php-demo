-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 09, 2020 at 04:16 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ojas`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_detail`
--

CREATE TABLE `address_detail` (
  `cid` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `pre_address` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `state` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `district` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `taluka` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `pincode` int(10) NOT NULL,
  `mob` int(10) NOT NULL,
  `email` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` set('Present','Permanant') COLLATE utf8mb4_general_ci NOT NULL,
  `per_address` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `per_state` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `per_dist` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `per_tal` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `per_pincode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_detail`
--

CREATE TABLE `personal_detail` (
  `id` int(10) NOT NULL,
  `title` set('Mr','Mrs','Ms','Dr') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fname` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `lname` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `fhname` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `mname` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` set('Male','Female') COLLATE utf8mb4_general_ci NOT NULL,
  `dob` date NOT NULL,
  `marital_status` set('Married','Unmarried') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category` set('open','handicap','sebc','sc','st') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_detail`
--

INSERT INTO `personal_detail` (`id`, `title`, `fname`, `lname`, `fhname`, `mname`, `gender`, `dob`, `marital_status`, `category`) VALUES
(1, 'Mrs', 'payal', ' s pawar', 'rameshbhai kadu', 'ashaben kadu', 'Female', '2020-03-14', 'Married', 'sebc'),
(7, 'Mr', 'Sumit', 'More', 'Sumit', 'Sumit', 'Male', '2020-03-08', 'Unmarried', 'sebc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_detail`
--
ALTER TABLE `address_detail`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `personal_detail`
--
ALTER TABLE `personal_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_detail`
--
ALTER TABLE `address_detail`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_detail`
--
ALTER TABLE `personal_detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
