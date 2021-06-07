-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2021 at 05:12 PM
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
-- Database: `application`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `apply_name` varchar(255) NOT NULL,
  `apply_gender` varchar(255) NOT NULL,
  `apply_dob` date NOT NULL,
  `apply_email` varchar(255) NOT NULL,
  `apply_mobile` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `apply_name`, `apply_gender`, `apply_dob`, `apply_email`, `apply_mobile`) VALUES
(9, 'Noor Aisyah Fatiha Hamzah', 'Female', '2001-11-04', 'aisyahfatiha01@gmail.com', 126368108),
(10, 'Sofia', 'Female', '2000-12-05', 'sofia@mail.com', 13243434),
(11, 'Syarifah Malini', 'Female', '2000-03-24', 'malini@yahoo.com', 343434311),
(12, 'Miza', 'Female', '2001-05-05', 'miza@hotmail.com', 12847822),
(13, 'John', 'Male', '1994-11-22', 'johndoe@gmail.com', 192842336);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
