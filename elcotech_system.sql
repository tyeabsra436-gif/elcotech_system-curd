-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2026 at 11:31 AM
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
-- Database: `elcotech_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(11) NOT NULL,
  `unit` varchar(150) NOT NULL,
  `quantity` int(11) NOT NULL,
  `entry_date` date NOT NULL,
  `purchase_price` decimal(10,2) NOT NULL,
  `receipt_price` decimal(10,2) NOT NULL,
  `detais` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `unit`, `quantity`, `entry_date`, `purchase_price`, `receipt_price`, `detais`) VALUES
(1, 'rfgfr', 3, '2026-09-01', 5.00, 5.00, 'egf');

-- --------------------------------------------------------

--
-- Table structure for table `commission`
--

CREATE TABLE `commission` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `service_detail` varchar(255) NOT NULL,
  `commission_date` date NOT NULL,
  `befor_vat` decimal(10,2) NOT NULL,
  `vat` decimal(10,2) NOT NULL,
  `after_vat` decimal(10,2) NOT NULL,
  `marketing_person` varchar(100) NOT NULL,
  `service_person` varchar(100) NOT NULL,
  `receipet_number` varchar(50) NOT NULL,
  `marketing_commission` decimal(10,2) NOT NULL,
  `professional_commission` decimal(10,2) NOT NULL,
  `remark` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commission`
--

INSERT INTO `commission` (`id`, `customer_name`, `address`, `phone`, `service_detail`, `commission_date`, `befor_vat`, `vat`, `after_vat`, `marketing_person`, `service_person`, `receipet_number`, `marketing_commission`, `professional_commission`, `remark`) VALUES
(1, 'esku', 'saris', '0936626944', 'eufgbskd', '2026-09-15', 5.00, 5.00, 5.00, 'uti', 'juytiut', 'tdhg', 5.00, 5.00, 'igoiyhl');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `work_role` varchar(150) NOT NULL,
  `person_name` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `item_type` varchar(150) NOT NULL,
  `service_detail` varchar(255) NOT NULL,
  `customer_date` date NOT NULL,
  `tin_number` varchar(50) NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `marketing_code` varchar(50) NOT NULL,
  `service_code` varchar(50) NOT NULL,
  `delivery_date` date NOT NULL,
  `details` text NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_name`, `work_role`, `person_name`, `address`, `phone`, `item_type`, `service_detail`, `customer_date`, `tin_number`, `item_code`, `marketing_code`, `service_code`, `delivery_date`, `details`, `email`) VALUES
(1, 'ssss', 'ss', 'esku', 'saris', '0912235689', 'ss', 'eufgbskd', '2026-09-01', 'e4y45tye4ey', '', 'owiueyhf', 'aaaa', '2026-09-30', 'ssss', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `check_number` varchar(50) NOT NULL,
  `before_vat` decimal(10,2) NOT NULL,
  `vat` decimal(10,2) NOT NULL,
  `total_expense` decimal(10,2) NOT NULL,
  `expense_date` date NOT NULL,
  `bank_account` varchar(100) NOT NULL,
  `receipt_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `followups`
--

CREATE TABLE `followups` (
  `id` int(11) NOT NULL,
  `customer_number` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `interest_details` text NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `followups`
--

INSERT INTO `followups` (`id`, `customer_number`, `customer_name`, `interest_details`, `phone`) VALUES
(1, 'jfyfj', 'esku', 'jjryfut', '0936626944');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `service_detail` varchar(255) NOT NULL,
  `income_date` date NOT NULL,
  `before_bat` decimal(10,2) NOT NULL,
  `vat` decimal(10,2) NOT NULL,
  `after_vat` decimal(10,2) NOT NULL,
  `marketing_person` varchar(100) NOT NULL,
  `service_person` varchar(100) NOT NULL,
  `receipet_number` varchar(50) NOT NULL,
  `expense_detail` varchar(255) NOT NULL,
  `expense_total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `customer_name`, `address`, `phone`, `service_detail`, `income_date`, `before_bat`, `vat`, `after_vat`, `marketing_person`, `service_person`, `receipet_number`, `expense_detail`, `expense_total`) VALUES
(1, 'jgjs', 'kuiyui', 'kuy', 'fghg', '2026-09-22', 5.00, 5.00, 5.00, 'uti', 'jyru', '2026-09-29', 'utigu', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_requests`
--

CREATE TABLE `purchase_requests` (
  `id` int(11) NOT NULL,
  `item_type` varchar(150) NOT NULL,
  `quantity` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_requests`
--

INSERT INTO `purchase_requests` (`id`, `item_type`, `quantity`, `reason`, `request_date`) VALUES
(1, 'sssssss', 2221, 'uru6', '2026-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `sell_buy`
--

CREATE TABLE `sell_buy` (
  `id` int(11) NOT NULL,
  `item_type` varchar(150) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `entry_date` date NOT NULL,
  `buyer_name` varchar(150) NOT NULL,
  `customer_phone` varchar(30) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sell_buy`
--

INSERT INTO `sell_buy` (`id`, `item_type`, `unit`, `quantity`, `entry_date`, `buyer_name`, `customer_phone`, `detail`) VALUES
(1, 'edfred', 'esku', 1, '2026-09-29', 'jyf', '0936458789', 'grtfg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commission`
--
ALTER TABLE `commission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followups`
--
ALTER TABLE `followups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_requests`
--
ALTER TABLE `purchase_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_buy`
--
ALTER TABLE `sell_buy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `commission`
--
ALTER TABLE `commission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `followups`
--
ALTER TABLE `followups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_requests`
--
ALTER TABLE `purchase_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sell_buy`
--
ALTER TABLE `sell_buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
