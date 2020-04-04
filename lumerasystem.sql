-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2020 at 08:53 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lumerasystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_patients`
--

CREATE TABLE `master_patients` (
  `patients_id` varchar(25) NOT NULL,
  `patients_name` varchar(200) NOT NULL,
  `patients_address` varchar(250) NOT NULL,
  `patients_hp` varchar(20) NOT NULL,
  `patients_dob` date NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `updated_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_patients`
--

INSERT INTO `master_patients` (`patients_id`, `patients_name`, `patients_address`, `patients_hp`, `patients_dob`, `created_by`, `updated_by`) VALUES
('12312', 'John Koron', 'Colorado', '081234567890', '2020-04-01', 'NULL', 'NULL'),
('98572', 'Koro Cok', 'California', '080987654321', '2020-04-01', 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `master_product`
--

CREATE TABLE `master_product` (
  `product_barcode` varchar(50) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_stock` int(11) NOT NULL DEFAULT '0',
  `created_by` varchar(50) NOT NULL,
  `updated_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_product`
--

INSERT INTO `master_product` (`product_barcode`, `product_name`, `product_price`, `product_stock`, `created_by`, `updated_by`) VALUES
('098109390218', 'Serum', 300000, 11, 'NULL', 'NULL'),
('098109390243', 'Toner', 150000, 0, 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `master_services`
--

CREATE TABLE `master_services` (
  `services_id` varchar(50) NOT NULL,
  `services_name` varchar(200) NOT NULL,
  `services_category` varchar(25) NOT NULL,
  `services_price` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `updated_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_services`
--

INSERT INTO `master_services` (`services_id`, `services_name`, `services_category`, `services_price`, `created_by`, `updated_by`) VALUES
('1', 'Facial', 'Clinic', 500000, 'NULL', 'NULL'),
('2', 'Gunting + Cuci', 'Salon', 150000, 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `master_staff`
--

CREATE TABLE `master_staff` (
  `staff_id` varchar(25) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `staff_username` varchar(20) NOT NULL,
  `staff_password` varchar(20) NOT NULL,
  `staff_roles` varchar(25) NOT NULL,
  `staff_status` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `update_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_staff`
--

INSERT INTO `master_staff` (`staff_id`, `staff_name`, `staff_username`, `staff_password`, `staff_roles`, `staff_status`, `created_by`, `update_by`) VALUES
('1', 'John Doe', 'john', 'john', 'Administrator', 1, 'NULL', 'NULL'),
('2', 'Mimin', 'mimin', 'mimin', 'Kasir', 0, 'NULL', 'NULL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_patients`
--
ALTER TABLE `master_patients`
  ADD PRIMARY KEY (`patients_id`);

--
-- Indexes for table `master_product`
--
ALTER TABLE `master_product`
  ADD PRIMARY KEY (`product_barcode`);

--
-- Indexes for table `master_services`
--
ALTER TABLE `master_services`
  ADD PRIMARY KEY (`services_id`);

--
-- Indexes for table `master_staff`
--
ALTER TABLE `master_staff`
  ADD PRIMARY KEY (`staff_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
