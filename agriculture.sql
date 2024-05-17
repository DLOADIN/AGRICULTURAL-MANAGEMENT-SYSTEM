-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 07:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) NOT NULL,
  `u_email` varchar(80) NOT NULL,
  `u_phonenumber` varchar(80) NOT NULL,
  `u_address` varchar(80) NOT NULL,
  `u_password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `u_name`, `u_email`, `u_phonenumber`, `u_address`, `u_password`) VALUES
(1, 'Manzi', 'm.david@alustudent.com', '0791291003', 'Musanze', '12345'),
(2, 'Junir ', 'm.david@alustudent.com', '0791291003', 'Kigalui', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image_text` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `title`, `image_text`) VALUES
(1, '4edbf564d054aacaac42091266a86c07 - Copy.jpg', 'c ajsc ajch acbajcbajcbajschbascasbcaoscaocn', 'acsjascjhab'),
(2, '4edbf564d054aacaac42091266a86c07 - Copy.jpg', 'c ajsc ajch acbajcbajcbajschbascasbcaoscaocn', 'acsjascjhab'),
(20, 'paper-emoji.png', '', 'Love what you are doing'),
(21, 'paper-emoji.png', '', 'Love the information you provide with us');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `u_name` varchar(100) DEFAULT NULL,
  `u_type` varchar(100) DEFAULT NULL,
  `u_revenue` varchar(80) NOT NULL,
  `u_price` varchar(100) DEFAULT NULL,
  `u_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `u_name`, `u_type`, `u_revenue`, `u_price`, `u_date`) VALUES
(4, 'Tomatoes', 'Not Good', '10000kgs', '110000', '2024-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(80) NOT NULL,
  `u_notifications` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `u_notifications`) VALUES
(1, ' Dubai is in need of 10 tons of avocado by the end of this month.\r\nSpain harvest season of habanero has ended. It is expected to resume in 2 Months.\r\nFarmers in Moungo are expected to harvest Okra in 2 weeks.\r\nFruits Logistica Forum to be held on 5th-7th February 2025.\r\nTo export in Cameroon, you now need a Copies of premises/Farm/production sites registration certificates');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `u_name` varchar(80) NOT NULL,
  `u_email` varchar(80) NOT NULL,
  `u_phonenumber` varchar(80) NOT NULL,
  `u_address` varchar(80) NOT NULL,
  `u_password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `u_name`, `u_email`, `u_phonenumber`, `u_address`, `u_password`) VALUES
(1, 'Ganza', 'ganzaarnaud_1@gmail.com', '0791291003', 'Nyamagabe', '12345'),
(2, 'jjj', 'Manzidavid73@gmail.com', '0791291003', 'KK-325 L', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
