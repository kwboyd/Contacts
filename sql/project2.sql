-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 21, 2017 at 08:08 PM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--
CREATE DATABASE IF NOT EXISTS `project2` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `project2`;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `lname`, `title`, `phone`, `email`, `street`, `city`, `state`, `zip`, `notes`) VALUES
(15, 'Doug', 'Boyd', 'Ms.', '9194484803', 'kwboyd95@gmail.com', '500 Smith Level Rd, H5', 'Carrboro', 'NC', '27510', 'Likes cats too much.'),
(16, 'Katherine', 'Boyd', 'Ms.', '9194484803', 'kwboyd95@gmail.com', '2901 Springsweet Lane, Apt #16', 'Raleigh', 'NC', '27612', 'Still likes cats.'),
(17, 'Katherine', 'Boyd', 'Ms.', '9194484803', 'kwboyd@live.unc.edu', '2901 Springsweet Lane, Apt #16', 'Raleigh', 'NC', '27612', ''),
(18, 'Katherine', 'Boyd', 'Ms.', '9194484803', 'kwboyd95@gmail.com', '500 Smith Level Rd, H5', 'Carrboro', 'NC', '27510', ''),
(19, 'Katherine', 'Boyd', 'Ms.', '9194484803', 'kwboyd95@gmail.com', '500 Smith Level Rd, H5', 'Carrboro', 'NC', '27510', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
