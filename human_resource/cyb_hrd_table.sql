-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 06, 2023 at 04:56 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HumanResources`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `surname` text DEFAULT NULL,
  `firstname` text DEFAULT NULL,
  `middlename` text DEFAULT NULL,
  `birthday` text DEFAULT NULL,
  `birthplace` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `contact` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `socialMedia` text DEFAULT NULL,
  `civilStatus` text DEFAULT NULL,
  `educBackground` text DEFAULT NULL,
  `educAttainment` text DEFAULT NULL,
  `language` text DEFAULT NULL,
  `religion` text DEFAULT NULL,
  `jobExperience` text DEFAULT NULL,
  `homeAddress` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `surname`, `firstname`, `middlename`, `birthday`, `birthplace`, `gender`, `contact`, `email`, `socialMedia`, `civilStatus`, `educBackground`, `educAttainment`, `language`, `religion`, `jobExperience`, `homeAddress`) VALUES
(1, 'Buta', 'Rejay', 'Jalandoni', '2023-07-07', 'Manila', 'Male', '09165268941', 'rejay.buta@gmail.com', 'Tiktok', 'Married', 'High School Grad.', 'College Student', 'Tagalog', 'Christian', 'None', 'Secret walang clue'),
(2, 'Buta', 'Rejay', 'Jalandoni', '2023-07-07', 'Manila', 'Male', '09165268941', 'rejay.buta@gmail.com', 'Tiktok', 'Married', 'High School Grad.', 'College Student', 'Tagalog', 'Christian', 'None', 'Secret walang clue'),
(5, 'Buta', 'Rejay', 'Jalandoni', '2023-07-07', 'Manila', 'Male', '09165268941', 'rejay.buta@gmail.com', 'Tiktok', 'Married', 'High School Grad.', 'College Student', 'Tagalog', 'Christian', 'None', 'Secret walang clue'),
(7, 'Buta', 'Rejay', 'Jalandoni', '2023-07-12', 'Manila', 'Male', '09165268941', 'rejay.buta@gmail.com', 'Tiktok', 'Married', 'High School Grad.', 'College Student', 'Tagalog', 'Christian', 'None', 'Secret walang clue'),
(8, 'Buta', 'Rejay', 'Jalandoni', '2023-07-12', 'Manila', 'Male', '09165268941', 'rejay.buta@gmail.com', 'Tiktok', 'Married', 'High School Grad.', 'College Student', 'Tagalog', 'Christian', 'None', 'Secret walang clue');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
