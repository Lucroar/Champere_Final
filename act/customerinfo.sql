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