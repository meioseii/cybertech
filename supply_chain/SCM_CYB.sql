-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 05, 2023 at 02:11 AM
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
-- Database: `SCM_CYB`
--

-- --------------------------------------------------------

--
-- Table structure for table `INBOUND`
--

CREATE TABLE `INBOUND` (
  `id` int(11) NOT NULL,
  `SupplierName` varchar(50) NOT NULL,
  `Address` text DEFAULT NULL,
  `ContactInfo` varchar(50) NOT NULL,
  `ProductType` varchar(50) NOT NULL,
  `ItemName` text DEFAULT NULL,
  `Quantities` int(11) NOT NULL,
  `Amount` decimal(20,2) NOT NULL,
  `OrderedBy` varchar(50) NOT NULL,
  `ModeOfPayment` varchar(50) NOT NULL,
  `TransactionDate` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `INBOUND`
--

INSERT INTO `INBOUND` (`id`, `SupplierName`, `Address`, `ContactInfo`, `ProductType`, `ItemName`, `Quantities`, `Amount`, `OrderedBy`, `ModeOfPayment`, `TransactionDate`) VALUES
(1, 'Rejay Buta', 'Duhat Street Camella, Molino 3, Bacoor Cavite', '0916446823', 'RAM', 'Crucial Ballistix Elite DDR4(8GB)', 2, '14000.00', 'Jayron Manay', 'Cheque', '2023-07-05'),
(2, 'Jamil Mariano', 'Bughaw Street Town&Country, Alapan 1, Imus Cavite', '09218264923', 'Processor', 'AMD Ryzen 7 5800X', 1, '11000.00', 'Austin Moreno', 'E-Wallet', '2023-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `INVENTORY`
--

CREATE TABLE `INVENTORY` (
  `id` int(11) NOT NULL,
  `Classification` text DEFAULT NULL,
  `Brand` text DEFAULT NULL,
  `Item_Name` text DEFAULT NULL,
  `Units` text DEFAULT NULL,
  `Stocks` int(10) NOT NULL,
  `ItemCost_pc` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `INVENTORY`
--

INSERT INTO `INVENTORY` (`id`, `Classification`, `Brand`, `Item_Name`, `Units`, `Stocks`, `ItemCost_pc`) VALUES
(1, 'Motherboard', 'MSI', 'MSI MPG X570 GAMING PRO CARBON', 'pc', 2, '45000.00'),
(2, 'RAM', 'Kingston', 'Kingston HyperX Fury DDR 4(8GB)', 'pc', 2, '8000.00'),
(3, 'Processor', 'AMD', 'AMD Ryzen 9 5950X', 'pc', 1, '9000.00'),
(4, 'Motherboard', 'ASUS', 'ASUS ProArt B550-Creator', 'pc', 4, '61000.00'),
(5, 'Processor', 'AMD', 'AMD Ryzen 9 5950X', 'pc', 1, '11000.00');

-- --------------------------------------------------------

--
-- Table structure for table `OUTBOUND`
--

CREATE TABLE `OUTBOUND` (
  `id` int(11) NOT NULL,
  `Shipment_ID` int(20) DEFAULT NULL,
  `Product` varchar(50) NOT NULL,
  `Item_Name` text DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Transport_Mode` varchar(50) NOT NULL,
  `Destination` text DEFAULT NULL,
  `Delivery_Date` text NOT NULL,
  `Notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `OUTBOUND`
--

INSERT INTO `OUTBOUND` (`id`, `Shipment_ID`, `Product`, `Item_Name`, `Quantity`, `Customer_Name`, `Transport_Mode`, `Destination`, `Delivery_Date`, `Notes`) VALUES
(1, 118965953, 'Processor', 'AMD Ryzen 7 5800X', 2, 'Jayron Manay', 'Road', 'Duhat Street Camella, Molino 3, Bacoor Cavite', '2023-07-07', ' Dont shake it, please'),
(2, 1178768649, 'RAM', 'Kingston HyperX Fury DDR 4(8GB)', 4, 'Rejay Buta', 'Sea', 'Duhat Street Camella, Molino 3, Bacoor Cavite', '2023-07-07', ' Basta wag nyo alugin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `INBOUND`
--
ALTER TABLE `INBOUND`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `INVENTORY`
--
ALTER TABLE `INVENTORY`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `OUTBOUND`
--
ALTER TABLE `OUTBOUND`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `INBOUND`
--
ALTER TABLE `INBOUND`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `INVENTORY`
--
ALTER TABLE `INVENTORY`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `OUTBOUND`
--
ALTER TABLE `OUTBOUND`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
