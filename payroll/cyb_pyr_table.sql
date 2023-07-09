-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 06, 2023 at 02:33 PM
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
-- Database: `cyb_pyr_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `employeelist`
--

CREATE TABLE `employeelist` (
  `id` int(11) NOT NULL,
  `empid` text DEFAULT NULL,
  `empno` text DEFAULT NULL,
  `depart` text DEFAULT NULL,
  `modpayment` text DEFAULT NULL,
  `dalsalary` text DEFAULT NULL,
  `ssscontr` text DEFAULT NULL,
  `daywork` text DEFAULT NULL,
  `healthcontri` text DEFAULT NULL,
  `othours` text DEFAULT NULL,
  `pagibigcont` text DEFAULT NULL,
  `bracket1` text DEFAULT NULL,
  `bracket2` text DEFAULT NULL,
  `bracket3` text DEFAULT NULL,
  `dmgfee` text DEFAULT NULL,
  `cashadv` text DEFAULT NULL,
  `grosspay` text DEFAULT NULL,
  `netpay` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeelist`
--

INSERT INTO `employeelist` (`id`, `empid`, `empno`, `depart`, `modpayment`, `dalsalary`, `ssscontr`, `daywork`, `healthcontri`, `othours`, `pagibigcont`, `bracket1`, `bracket2`, `bracket3`, `dmgfee`, `cashadv`, `grosspay`, `netpay`) VALUES
(58, 'Rejay Buta', '11325949', 'Supply Chain Management', 'GCASH Wallet', '2100', '300', '30', '290', '40', '250', '100', '200', '50', '200', '6000', '63000', '56310'),
(59, 'Rejay Buta', '11325949', 'Supply Chain Management', 'GCASH Wallet', '2100', '300', '30', '290', '40', '250', '100', '200', '50', '200', '6000', '63000', '56310'),
(60, 'Rejay Buta', '11325949', 'Supply Chain Management', 'GCASH Wallet', '2100', '300', '30', '290', '40', '250', '100', '200', '50', '200', '6000', '63000', '56310'),
(64, 'Rejay Buta', '11325949', 'Supply Chain Management', 'GCASH Wallet', '2100', '300', '30', '290', '40', '250', '100', '200', '50', '200', '6000', '63000', '56310');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeelist`
--
ALTER TABLE `employeelist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeelist`
--
ALTER TABLE `employeelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
