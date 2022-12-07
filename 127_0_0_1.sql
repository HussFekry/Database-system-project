-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 08:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hahaa`
--
CREATE DATABASE IF NOT EXISTS `hahaa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hahaa`;

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `admin_id` int(11) NOT NULL,
  `admin_initial` varchar(10) DEFAULT NULL,
  `admin_areacode` int(11) DEFAULT NULL,
  `admin_phone` varchar(12) DEFAULT NULL,
  `admin_balance` int(11) DEFAULT NULL,
  `admin_email` varchar(20) DEFAULT NULL,
  `admin_address` varchar(25) DEFAULT NULL,
  `admin_zip` int(11) DEFAULT NULL,
  `admin_user_id` int(11) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `pass_word` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`admin_id`, `admin_initial`, `admin_areacode`, `admin_phone`, `admin_balance`, `admin_email`, `admin_address`, `admin_zip`, `admin_user_id`, `birthdate`, `salary`, `pass_word`) VALUES
(1011, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cash_inv`
--

CREATE TABLE `cash_inv` (
  `payment_way` binary(1) DEFAULT NULL,
  `inv_num` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cash_inv`
--

INSERT INTO `cash_inv` (`payment_way`, `inv_num`) VALUES
(NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryId` int(11) NOT NULL,
  `CategoryName` varchar(50) DEFAULT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryId`, `CategoryName`, `admin_id`) VALUES
(123, 'mobile phones', 1011),
(321, 'Camera', 1011),
(1023, 'Laptops', 1011);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CUS_CODE` int(11) NOT NULL,
  `CUS_AREACODE` int(11) DEFAULT NULL,
  `CUS_PHONE` varchar(20) NOT NULL,
  `CUS_BALANCE` float NOT NULL,
  `cus_email` varchar(25) DEFAULT NULL,
  `cus_address` varchar(30) DEFAULT NULL,
  `cus_zip` int(11) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `pass_word` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUS_CODE`, `CUS_AREACODE`, `CUS_PHONE`, `CUS_BALANCE`, `cus_email`, `cus_address`, `cus_zip`, `birthdate`, `username`, `pass_word`) VALUES
(1001, NULL, '', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(2147483647, NULL, '01065646485', 0, 'jkb@gmail.com', NULL, NULL, NULL, 'abdelrahman', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `inst_invoice`
--

CREATE TABLE `inst_invoice` (
  `sub_inv_value` int(11) DEFAULT NULL,
  `inv_num` int(11) NOT NULL,
  `CUS_CODE` int(11) DEFAULT NULL,
  `inst_invoice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `inv_num` int(11) NOT NULL,
  `CUS_CODE` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `inv_date` date DEFAULT NULL,
  `interest` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`inv_num`, `CUS_CODE`, `admin_id`, `inv_date`, `interest`) VALUES
(1, 1001, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `ManufacturerId` int(11) NOT NULL,
  `ManfacturerName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `inv_num` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `order_sub_value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `inv_num`, `quantity`, `order_sub_value`) VALUES
(2, 119, 1, NULL, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `orders_f`
--

CREATE TABLE `orders_f` (
  `order_id` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_f`
--

INSERT INTO `orders_f` (`order_id`, `total_price`) VALUES
(2, 2114);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductId` int(11) NOT NULL,
  `ProductName` varchar(25) NOT NULL,
  `Model` varchar(25) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `ProductPrice` float NOT NULL,
  `P_Condition` enum('New','refurbished') DEFAULT NULL,
  `ManufacturerId` int(11) DEFAULT NULL,
  `subcategory` int(11) DEFAULT NULL,
  `Productimage` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductId`, `ProductName`, `Model`, `Quantity`, `ProductPrice`, `P_Condition`, `ManufacturerId`, `subcategory`, `Productimage`, `description`) VALUES
(119, 'dell', '', 0, 2000, '', NULL, 3022, 'sora/5b637e2b74fd21f628d1dafbbf3b7773Cofee.png', ''),
(121, 'dell G3 hg', '11', 3, 5000, 'New', NULL, 3022, 'sora/c7d9bc9d26cb02cfd44b8b970f0eb6c61.PNG', 'hi i am seif');

-- --------------------------------------------------------

--
-- Table structure for table `returned_list`
--

CREATE TABLE `returned_list` (
  `returned_id` int(11) DEFAULT NULL,
  `new_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `returned_list`
--

INSERT INTO `returned_list` (`returned_id`, `new_price`) VALUES
(NULL, 0),
(NULL, 0),
(NULL, 0),
(NULL, 0),
(NULL, 0),
(NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shipment_area`
--

CREATE TABLE `shipment_area` (
  `area_code` int(11) NOT NULL,
  `area_cost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipment_area`
--

INSERT INTO `shipment_area` (`area_code`, `area_cost`) VALUES
(100, 200);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcat_id` int(11) NOT NULL,
  `subcat_name` varchar(30) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `subcat_name`, `CategoryId`) VALUES
(1012, 'mobile devices', 123),
(1022, 'chargers', 123),
(1032, 'covers', 123),
(2012, 'camera', 321),
(2022, 'lences', 321),
(2032, 'flash', 321),
(3012, 'mouse', 1023),
(3022, 'PC', 1023),
(3032, 'laptops', 1023);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `admin_user_id` (`admin_user_id`),
  ADD KEY `admin_areacode` (`admin_areacode`);

--
-- Indexes for table `cash_inv`
--
ALTER TABLE `cash_inv`
  ADD KEY `inv_num` (`inv_num`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryId`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUS_CODE`),
  ADD KEY `CUS_AREACODE` (`CUS_AREACODE`);

--
-- Indexes for table `inst_invoice`
--
ALTER TABLE `inst_invoice`
  ADD PRIMARY KEY (`inv_num`,`inst_invoice`),
  ADD KEY `inst_invoice` (`inst_invoice`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`inv_num`),
  ADD KEY `CUS_CODE` (`CUS_CODE`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`ManufacturerId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`,`product_id`,`inv_num`),
  ADD KEY `inv_num` (`inv_num`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders_f`
--
ALTER TABLE `orders_f`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`),
  ADD KEY `ManufacturerId` (`ManufacturerId`),
  ADD KEY `subcategory` (`subcategory`);

--
-- Indexes for table `returned_list`
--
ALTER TABLE `returned_list`
  ADD KEY `returned_id` (`returned_id`);

--
-- Indexes for table `shipment_area`
--
ALTER TABLE `shipment_area`
  ADD PRIMARY KEY (`area_code`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `CategoryId` (`CategoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminn`
--
ALTER TABLE `adminn`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1012;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1024;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CUS_CODE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `inv_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `ManufacturerId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders_f`
--
ALTER TABLE `orders_f`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `shipment_area`
--
ALTER TABLE `shipment_area`
  MODIFY `area_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3033;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminn`
--
ALTER TABLE `adminn`
  ADD CONSTRAINT `adminn_ibfk_1` FOREIGN KEY (`admin_user_id`) REFERENCES `adminn` (`admin_id`),
  ADD CONSTRAINT `adminn_ibfk_2` FOREIGN KEY (`admin_areacode`) REFERENCES `shipment_area` (`area_code`),
  ADD CONSTRAINT `adminn_ibfk_3` FOREIGN KEY (`admin_user_id`) REFERENCES `adminn` (`admin_id`),
  ADD CONSTRAINT `adminn_ibfk_4` FOREIGN KEY (`admin_areacode`) REFERENCES `shipment_area` (`area_code`),
  ADD CONSTRAINT `adminn_ibfk_5` FOREIGN KEY (`admin_user_id`) REFERENCES `adminn` (`admin_id`),
  ADD CONSTRAINT `adminn_ibfk_6` FOREIGN KEY (`admin_areacode`) REFERENCES `shipment_area` (`area_code`);

--
-- Constraints for table `cash_inv`
--
ALTER TABLE `cash_inv`
  ADD CONSTRAINT `cash_inv_ibfk_1` FOREIGN KEY (`inv_num`) REFERENCES `invoice` (`inv_num`);

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `adminn` (`admin_id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`CUS_AREACODE`) REFERENCES `shipment_area` (`area_code`);

--
-- Constraints for table `inst_invoice`
--
ALTER TABLE `inst_invoice`
  ADD CONSTRAINT `inst_invoice_ibfk_1` FOREIGN KEY (`inv_num`) REFERENCES `invoice` (`inv_num`),
  ADD CONSTRAINT `inst_invoice_ibfk_2` FOREIGN KEY (`inst_invoice`) REFERENCES `inst_invoice` (`inv_num`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`CUS_CODE`) REFERENCES `customer` (`CUS_CODE`),
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `adminn` (`admin_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`inv_num`) REFERENCES `invoice` (`inv_num`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`ProductId`);

--
-- Constraints for table `orders_f`
--
ALTER TABLE `orders_f`
  ADD CONSTRAINT `orders_f_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ManufacturerId`) REFERENCES `manufacturer` (`ManufacturerId`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`subcategory`) REFERENCES `subcategory` (`subcat_id`);

--
-- Constraints for table `returned_list`
--
ALTER TABLE `returned_list`
  ADD CONSTRAINT `returned_list_ibfk_1` FOREIGN KEY (`returned_id`) REFERENCES `product` (`ProductId`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `category` (`CategoryId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
