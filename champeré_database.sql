SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

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

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `InCount` int(11) NOT NULL,
  `OutCount` int(11) NOT NULL,
  `CurrentStocks` int(11) NOT NULL,
  `Price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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

CREATE TABLE `order_customer` (
  `id` int(11) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `quantity` int(111) NOT NULL,
  `amount` int(111) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `order_payable` (
  `id` int(11) NOT NULL,
  `supplierName` varchar(50) NOT NULL,
  `amount` int(111) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `order_receivable` (
  `id` int(11) NOT NULL,
  `clientName` varchar(50) NOT NULL,
  `amountReceive` int(111) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`id`);
--
ALTER TABLE `employeeinfo`
  ADD PRIMARY KEY (`id`);
--
ALTER TABLE `hlv`
  ADD PRIMARY KEY (`id`);
--
ALTER TABLE `hlv1`
  ADD PRIMARY KEY (`id`);
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`id`);
--
ALTER TABLE `order_customer`
  ADD PRIMARY KEY (`id`);

--
ALTER TABLE `order_payable`
  ADD PRIMARY KEY (`id`);
--
ALTER TABLE `order_receivable`
  ADD PRIMARY KEY (`id`);
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
