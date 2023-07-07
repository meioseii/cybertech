-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 04, 2023 at 07:39 AM
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
-- Database: `accounting`
--

-- --------------------------------------------------------

--
-- Table structure for table `Accounting`
--

CREATE TABLE `Accounting` (
  `id` int(11) NOT NULL,
  `TypeOfIncome` varchar(50) NOT NULL,
  `TypeOfPayment` varchar(50) NOT NULL,
  `AmountReceived` varchar(50) NOT NULL,
  `PaymentDate` varchar(50) NOT NULL,
  `CustomerName` varchar(50) NOT NULL,
  `TransactionDate` varchar(50) NOT NULL,
  `AmountOfTax` varchar(50) NOT NULL,
  `AmountOfLoan` varchar(50) NOT NULL,
  `PersonToPay` varchar(50) NOT NULL,
  `AmountOfUtilities` varchar(50) NOT NULL,
  `UtilityToPay` varchar(50) NOT NULL,
  `GrossIncome` varchar(50) NOT NULL,
  `TotalExpense` varchar(50) NOT NULL,
  `NetIncome` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Accounting`
--

INSERT INTO `Accounting` (`id`, `TypeOfIncome`, `TypeOfPayment`, `AmountReceived`, `PaymentDate`, `CustomerName`, `TransactionDate`, `AmountOfTax`, `AmountOfLoan`, `PersonToPay`, `AmountOfUtilities`, `UtilityToPay`, `GrossIncome`, `TotalExpense`, `NetIncome`, `created_at`) VALUES
(1, 'sales', 'E-wallet', '10000', '2023-07-03', 'Kei', '2023-07-03', '2500', '1500', 'loan', '1500', 'payment', '10000', '5500', '4500', '2023-07-03 03:55:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Accounting`
--
ALTER TABLE `Accounting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Accounting`
--
ALTER TABLE `Accounting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
