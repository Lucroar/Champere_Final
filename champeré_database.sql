-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 04:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `champeré`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `firstName` varchar(30) NOT NULL,
  `middleName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `customerEmail` varchar(50) NOT NULL,
  `contactInfo` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `address` text NOT NULL,
  `password` char(60) NOT NULL,
  `id` int(11) NOT NULL,
  `Created_at` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`firstName`, `middleName`, `lastName`, `customerEmail`, `contactInfo`, `gender`, `birthdate`, `address`, `password`, `id`, `Created_at`) VALUES
('Marwin', 'Bruzo', 'Nimes', 'marwinbnimes@gmail.com', 2147483647, 'Male', '2003-09-26', 'Marang Street', 'qwerty', 9, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `employeeinfo`
--

CREATE TABLE `employeeinfo` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `Contactno` varchar(30) NOT NULL,
  `Birthday` date NOT NULL,
  `nameofMother` varchar(10) NOT NULL,
  `nameofFather` varchar(30) NOT NULL,
  `CivilStatus` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `EducationalBackground` varchar(100) NOT NULL,
  `Training` varchar(100) NOT NULL,
  `Seminars` varchar(150) NOT NULL,
  `WorkExperience` varchar(100) NOT NULL,
  `WorkDuration` varchar(50) NOT NULL,
  `CompanyName` varchar(30) NOT NULL,
  `FormerPosition` varchar(30) NOT NULL,
  `ReasonsForLeaving` varchar(100) NOT NULL,
  `CurrentPosition` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Rate` varchar(50) NOT NULL,
  `SSS` int(50) NOT NULL,
  `PAGIBIG` int(30) NOT NULL,
  `PhilHealth` int(50) NOT NULL,
  `taxid` int(50) NOT NULL,
  `UMID` int(50) NOT NULL,
  `PHILSYS` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hlv`
--

CREATE TABLE `hlv` (
  `id` int(11) NOT NULL,
  `SupplierName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `ContactInformation` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Units` varchar(50) NOT NULL,
  `Quantity` varchar(50) NOT NULL,
  `Amount` varchar(50) NOT NULL,
  `ModeOfPayment` varchar(50) NOT NULL,
  `TermsOfPayment` varchar(50) NOT NULL,
  `OrderedBy` varchar(50) NOT NULL,
  `OrderDate` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hlv`
--

INSERT INTO `hlv` (`id`, `SupplierName`, `Address`, `ContactInformation`, `Email`, `ProductName`, `Description`, `Units`, `Quantity`, `Amount`, `ModeOfPayment`, `TermsOfPayment`, `OrderedBy`, `OrderDate`, `created_at`) VALUES
(6, 'Marwin Nimes', 'Marang Street', '12312312312', 'marwinbnimes@gmail.com', 'Orchids', 'Fresh orchids for our orchid flavored wines', '123213', '123123', '1231231', 'Cash', 'COD', 'Marwin', '2023-07-19', '2023-07-09 12:18:28'),
(7, 'afdsdasf', 'dsffdasfd', '32432434', 'fewrewr@gmail.com', 'Pomegranate', 'Fresh handpicked pomegranates for our pomegranate ', '324', '234', '234', 'Cash', 'COD', '432234', '2023-07-13', '2023-07-09 13:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `hlv1`
--

CREATE TABLE `hlv1` (
  `id` int(11) NOT NULL,
  `RequestedBy` varchar(50) NOT NULL,
  `ItemName` varchar(50) NOT NULL,
  `Quantity` varchar(50) NOT NULL,
  `ItemRecipient` varchar(50) NOT NULL,
  `RequestDate` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hlv1`
--

INSERT INTO `hlv1` (`id`, `RequestedBy`, `ItemName`, `Quantity`, `ItemRecipient`, `RequestDate`, `Status`, `created_at`) VALUES
(4, 'sdafdasffad', 'fadfadsdasffad', '213443124', '21344312434', '2023-07-18', 'Processing', '2023-07-09 12:45:57'),
(5, 'asdffads', 'sadfadfad', '423243432', '23423', '2023-07-27', 'Processing', '2023-07-09 12:56:24'),
(6, 'afdsfds', 'adsdafds', '324342432', '234234243', '2023-07-20', 'Processing', '2023-07-09 13:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `InCount` int(11) NOT NULL,
  `OutCount` int(11) NOT NULL,
  `CurrentStocks` int(11) NOT NULL,
  `Price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `ProductName`, `InCount`, `OutCount`, `CurrentStocks`, `Price`) VALUES
(2, 'fsasfads', 2, 2, 2, '44.00'),
(3, 'fdasfsafas', 1, 4, 5, '454.00');

-- --------------------------------------------------------

--
-- Table structure for table `marketing`
--

CREATE TABLE `marketing` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `bdate` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `cstatus` int(11) NOT NULL,
  `telno` int(11) NOT NULL,
  `celno` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `etype` int(11) NOT NULL,
  `ctype` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `marketing`
--

INSERT INTO `marketing` (`id`, `fname`, `age`, `bdate`, `gender`, `cstatus`, `telno`, `celno`, `email`, `cname`, `etype`, `ctype`, `created_at`) VALUES
(1, 'Marwin Nimes', 21, 2023, 0, 0, 2147483647, 121212121, 0, '121212121212', 0, 211212121, '2023-07-09 08:20:22'),
(2, 'Marwin Nimes', 21, 2023, 0, 0, 2147483647, 121212121, 0, '121212121212', 0, 211212121, '2023-07-09 08:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `order_customer`
--

CREATE TABLE `order_customer` (
  `id` int(11) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `quantity` int(111) NOT NULL,
  `amount` int(111) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order_customer`
--

INSERT INTO `order_customer` (`id`, `customerName`, `product`, `quantity`, `amount`, `date`, `created_at`) VALUES
(10, 'asfafsdasf', 'asdfsadfasdf', 0, 0, '2023-07-26', '2023-07-09 02:08:07'),
(11, 'asfafsdasf', 'asdfsadfasdf', 0, 0, '2023-07-26', '2023-07-09 02:08:55'),
(12, 'asfafsdasf', 'asdfdafaf', 455435, 3535, '2023-07-24', '2023-07-09 03:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `order_payable`
--

CREATE TABLE `order_payable` (
  `id` int(11) NOT NULL,
  `supplierName` varchar(50) NOT NULL,
  `amount` int(111) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order_payable`
--

INSERT INTO `order_payable` (`id`, `supplierName`, `amount`, `date`, `created_at`) VALUES
(4, 'asdfasfas', 341412, '2023-07-11', '2023-07-09 02:30:12'),
(5, 'retert', 34535, '2023-07-28', '2023-07-09 03:11:55'),
(6, 'adsd', 123213, '2023-07-11', '2023-07-09 03:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `order_receivable`
--

CREATE TABLE `order_receivable` (
  `id` int(11) NOT NULL,
  `clientName` varchar(50) NOT NULL,
  `amountReceive` int(111) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order_receivable`
--

INSERT INTO `order_receivable` (`id`, `clientName`, `amountReceive`, `date`, `created_at`) VALUES
(1, 'adsfafa', 0, '2023-07-26', '2023-07-08 15:00:02'),
(2, 'adsfafa', 41231, '2023-07-12', '2023-07-09 02:26:35'),
(3, 'adsfafa', 41231, '2023-07-12', '2023-07-09 02:29:46'),
(4, 'retertert', 4545, '2023-07-12', '2023-07-09 03:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `order_sales`
--

CREATE TABLE `order_sales` (
  `id` int(11) NOT NULL,
  `salesRep` varchar(50) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `orderDate` date NOT NULL,
  `productName` varchar(50) NOT NULL,
  `quantity` int(111) NOT NULL,
  `price` int(111) NOT NULL,
  `amount` int(111) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payroll_data`
--

CREATE TABLE `payroll_data` (
  `id` int(11) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `enumber` int(11) NOT NULL,
  `cposition` varchar(50) NOT NULL,
  `edate` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cnum` int(11) NOT NULL,
  `tnum` int(11) NOT NULL,
  `daysworked` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `overtime` int(11) NOT NULL,
  `bonus1` int(11) NOT NULL,
  `bonus2` int(11) NOT NULL,
  `bonus3` int(11) NOT NULL,
  `bonus4` int(11) NOT NULL,
  `mop` varchar(50) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hlv`
--
ALTER TABLE `hlv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hlv1`
--
ALTER TABLE `hlv1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketing`
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_customer`
--
ALTER TABLE `order_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_payable`
--
ALTER TABLE `order_payable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_receivable`
--
ALTER TABLE `order_receivable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_sales`
--
ALTER TABLE `order_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payroll_data`
--
ALTER TABLE `payroll_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerinfo`
--
ALTER TABLE `customerinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `hlv`
--
ALTER TABLE `hlv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hlv1`
--
ALTER TABLE `hlv1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `marketing`
--
ALTER TABLE `marketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_customer`
--
ALTER TABLE `order_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_payable`
--
ALTER TABLE `order_payable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_receivable`
--
ALTER TABLE `order_receivable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_sales`
--
ALTER TABLE `order_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payroll_data`
--
ALTER TABLE `payroll_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
