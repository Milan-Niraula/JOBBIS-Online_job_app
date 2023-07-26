-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 10:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zobbis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindb`
--

CREATE TABLE `admindb` (
  `S.N.` int(4) NOT NULL,
  `Admin-ID` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admindb`
--

INSERT INTO `admindb` (`S.N.`, `Admin-ID`, `username`, `password`) VALUES
(1, 101, 'milan214', 'milan214'),
(2, 102, 'ayush111', 'ayush111'),
(3, 103, 'pratiksha111', 'pratiksha111');

-- --------------------------------------------------------

--
-- Table structure for table `clientdocument`
--

CREATE TABLE `clientdocument` (
  `Id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `signature` varchar(100) NOT NULL,
  `frontDocs` varchar(100) NOT NULL,
  `backDocs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clientdocument`
--

INSERT INTO `clientdocument` (`Id`, `username`, `photo`, `signature`, `frontDocs`, `backDocs`) VALUES
(1, 'admin1', 'zobbis/Godawari College Logo.png ', 'zobbis/Godawari College Logo.png', 'zobbis/Godawari College Logo.png', 'zobbis/Godawari College Logo.png '),
(4, 'admin', 'zobbis/profile3.jpg ', 'zobbis/signature4.png', 'zobbis/id1.jpg', 'zobbis/id3.jpg'),
(5, '@admin', 'zobbis/Screenshot 2023-04-13 212540.png ', 'zobbis/signature4.png', 'zobbis/id3.jpg', 'zobbis/id1.jpg'),
(12, 'itahari', '', '', '', ''),
(13, '1111111', '', '', '', ''),
(14, 'pabitrabhattarai', '', '', '', ''),
(15, 'milan10', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `clienteducation`
--

CREATE TABLE `clienteducation` (
  `id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `board` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `gpa` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `type` varchar(20) NOT NULL,
  `marksheet` varchar(300) NOT NULL,
  `certificateChar` varchar(300) NOT NULL,
  `certificateEqui` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clienteducation`
--

INSERT INTO `clienteducation` (`id`, `username`, `board`, `level`, `faculty`, `gpa`, `grade`, `subject`, `description`, `type`, `marksheet`, `certificateChar`, `certificateEqui`) VALUES
(9, '@admin', 'neb', 'see', 'science', '208', 'first', 'math', 'completed in year 2018.', 'government', 'zobbis/Godawari College Logo.png', 'zobbis/flowchart-JOB_PROVIDER.drawio.png', 'zobbis/flowchart-JOB_PROVIDER.drawio.png'),
(11, 'admin1', 'NEB', '+2', 'science', '4', 'A', 'math', 'not yet.', 'nonGovernment', 'zobbis/Godawari College Logo.png', 'zobbis/flowchart-JOB_PROVIDER.drawio.png', 'zobbis/flowchart-JOB_PROVIDER.drawio.png'),
(13, 'mina1', 'NEB', '+2', 'science', '2.80', 'second', 'english', '.......................', 'government', 'zobbis/Screenshot (9).png', 'zobbis/home page.png', 'zobbis/home page.png'),
(14, '11111', 'NEB', '+2', 'science', '2.80', 'second', 'english', 'qqqqq', 'government', 'zobbis/client login.png', 'zobbis/client registration.png', 'zobbis/client registration.png'),
(15, 'aaaaaa', 'NEB', '+2', 'science', '2.80', 'B', 'english', 'aaaaaaaaa', 'government', 'zobbis/client dashboard.png', 'zobbis/client login.png', 'zobbis/client login.png'),
(16, 'mina', 'hseb', '+2', 'science', '2.80', 'B', 'english', 'completed school regularly.', 'government', 'zobbis/1671351755207.jpg', 'zobbis/1671351756801.jpg', 'zobbis/1671351756801.jpg'),
(18, 'admin', 'NEB', 'see', 'math', '2.80', 'B', 'math ', 'i have completed my school in 2015 AD.', 'government', 'zobbis/marksheet3.jpg', 'zobbis/CCI03032023_0010.jpg', 'zobbis/CCI03032023_0010.jpg'),
(19, '@admin', 'hseb', 'see', 'science', '2.80', 'second', 'english', 'aaaaaaaaaa', 'nonGovernment', 'zobbis/marksheet3.jpg', 'zobbis/id3.jpg', 'zobbis/id3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clientregistration`
--

CREATE TABLE `clientregistration` (
  `id` int(5) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fatherName` varchar(50) NOT NULL,
  `motherName` varchar(50) NOT NULL,
  `spouseName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `nid` varchar(15) NOT NULL,
  `citizenNo` varchar(15) NOT NULL,
  `citizenIssued` varchar(50) NOT NULL,
  `citizenDate` varchar(50) NOT NULL,
  `employment` varchar(20) NOT NULL,
  `marriage` varchar(20) NOT NULL,
  `fatherEducation` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `localBody` varchar(50) NOT NULL,
  `ward` varchar(10) NOT NULL,
  `tole` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clientregistration`
--

INSERT INTO `clientregistration` (`id`, `fname`, `mname`, `lname`, `dob`, `gender`, `username`, `fatherName`, `motherName`, `spouseName`, `email`, `mobile`, `phone`, `nid`, `citizenNo`, `citizenIssued`, `citizenDate`, `employment`, `marriage`, `fatherEducation`, `country`, `province`, `district`, `localBody`, `ward`, `tole`, `password`) VALUES
(9, 'pabitra', '', 'bhattarai', '2061/04/25', '', '@admin', 'rishi raj bhattarai', 'indira bhattarai', 'tika prasad dahal', '9862360000', '9862360000', '9888899999', '', '08-01-74-01653', 'tehrathum', '2070/01/01', 'Umemployment', '', 'Educated', 'Nepal', 'Koshi', 'Tehrathum', 'Menchhyayem', '05', 'morahang', 'admin1'),
(10, 'pabitra', 'mmmmm', 'bhattarai', '2061/04/24', 'female', 'pabitra', '', '', '', 'niraulajuna54@gmail.com', '', '9888899999', '', '', '', '', '', '', '', '', '', '', '', '', '', 'pabitra'),
(11, 'fname', 'mname', 'lname', 'dob', 'gender', 'username', '', '', '', 'email', '', 'phone', 'nid', 'citizen', '', '', '', '', '', '', '', '', '', '', '', 'password'),
(12, 'pabitra', 'm', 'bhattarai', '2061/04/25', '', 'admin', '', '', '', 'niraulajuna54@gmail.com', '', '9888899999', '123', '08-01-74-01653', '', '', '', '', '', '', '', '', '', '', '', '11111'),
(13, 'pabitra', 'mmmmm', 'bhattarai', '2061/04/25', '', 'admin12', '', '', '', 'niraulajuna54@gmail.com', '', '9888899999', '123', '08-01-74-01653', '', '', '', '', '', '', '', '', '', '', '', '11111'),
(14, 'pabitra', 'mmmmm', 'bhattarai', '2061/04/25', '', 'admin121', '', '', '', 'niraulajuna54@gmail.com', '', '9888899999', '123', '08-01-74-01653', '', '', '', '', '', '', '', '', '', '', '', '11111'),
(15, 'pabitra', 'mmmmm', 'bhattarai', '2061/04/25', '', 'admin1211', '', '', '', 'niraulajuna54@gmail.com', '', '9888899999', '123', '08-01-74-01653', '', '', '', '', '', '', '', '', '', '', '', '11111'),
(16, 'milan', 'mmmmm', 'Niraula', '2061/04/25', '', 'milan', '', '', '', 'niraulajuna54@gmail.com', '', '9888899999', '123', '08-01-74-01653', '', '', '', '', '', '', '', '', '', '', '', '11111'),
(17, 'pabitra', 'm', 'bhattarai', '2061/04/25', '', 'mina1', '', '', '', 'niraulajuna54@gmail.com', '', '9888899999', '123', '08-01-74-01653', '', '', '', '', '', '', '', '', '', '', '', '11111'),
(19, 'pabitra', 'm', 'bhattarai', '2061/04/25', '', '11111', '', '', '', 'niraulajuna54@gmail.com', '', '9888899999', '123', '08-01-74-01653', '', '', '', '', '', '', '', '', '', '', '', '11111'),
(21, 'pabitra', 'aa', 'aaaaaaaa', 'aaaaa', '', 'aaaaa', '', '', '', 'niraulajuna54@gmail.com', '', 'aaaaa', 'aaaaa', '08-01-74-01653', '', '', '', '', '', '', '', '', '', '', '', 'aaaaa'),
(23, 'pabitra', 'm', 'bhattarai', '2061/04/25', '', 'aaaaaa', '', '', '', 'niraulajuna54@gmail.com', '', '9888899999', '123', '08-01-74-01653', '', '', '', '', '', '', '', '', '', '', '', 'aaaaa'),
(24, 'itahari', '', 'itahari', '2061/04/25', '', 'itahari', '', '', '', 'itahari@itahari.com', '', '9888899999', '123', '08-01-74-01653', '', '', '', '', '', '', '', '', '', '', '', 'itahari'),
(25, 'pratik', 'mmmmm', 'gautam', '2061/04/25', '', '1111111', '', '', '', 'prati', '', '9888899999', '', '08-01-74-01653', '', '', '', '', '', '', '', '', '', '', '', 'kkkkk'),
(26, 'pabitra', '', 'bhattarai', '2061/04/25', '', 'pabitrabhattarai', '', '', '', 'niraulajuna54@gmail.com', '', '9888899999', '', '08-01-74-01653', '', '', '', '', '', '', '', '', '', '', '', '12345'),
(27, 'Milan', '', 'Niraula', '2057/09/22', '', 'milan10', '', '', '', 'milanniraula10@gmail.com', '', '9888899999', '', '08-01-74-01653', '', '', '', '', '', '', '', '', '', '', '', 'milan');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `adverisement` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `service` varchar(50) NOT NULL,
  `serviceGroup` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `submissionDate` varchar(50) NOT NULL,
  `salary` varchar(30) NOT NULL,
  `education` varchar(100) NOT NULL,
  `gpa` varchar(30) NOT NULL,
  `vacancy` int(4) NOT NULL,
  `description` varchar(300) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `username`, `adverisement`, `title`, `role`, `position`, `service`, `serviceGroup`, `level`, `submissionDate`, `salary`, `education`, `gpa`, `vacancy`, `description`, `type`) VALUES
(12, 'admin', '0006/2080', 'summer list', 'developer', 'bachelor', 'on minor projects', 'night shift', 'beginner', '2078/01/30', '20000', 'bachelor', '2.80', 3, 'grab the oppertunities.', 'office-based'),
(13, 'admin', '0007/2080', 'placement', 'developer', 'bachelor', '8 hours', 'night shift', '+2', '2078/01/30', '20000', 'SEE or equivalent', '2.80', 2, 'urgent', 'office-based'),
(14, 'itahari1', '0001/2080', 'aaa', 'lab boy', '4th level', 'non gov', 'aaaaa', 'beginner', '2078/01/30', 'negotiable', 'bachelor', '2.0', 3, 'urgently required.', 'office-based');

-- --------------------------------------------------------

--
-- Table structure for table `jobaplier`
--

CREATE TABLE `jobaplier` (
  `id` int(4) NOT NULL,
  `adverisement` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobaplier`
--

INSERT INTO `jobaplier` (`id`, `adverisement`, `username`) VALUES
(12, '0007/2080', 'admin'),
(18, '0002/2080', 'admin'),
(19, '0002/2080', '@admin'),
(20, '0007/2080', '@admin'),
(21, '0006/2080', 'itahari'),
(22, '0001/2080', ''),
(23, '0006/2080', '@admin'),
(24, '0001/2080', '@admin');

-- --------------------------------------------------------

--
-- Table structure for table `providerregistration`
--

CREATE TABLE `providerregistration` (
  `id` int(11) NOT NULL,
  `companyName` varchar(60) NOT NULL,
  `personName` varchar(60) NOT NULL,
  `date` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `website` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `pan` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `localBody` varchar(50) NOT NULL,
  `ward` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `providerregistration`
--

INSERT INTO `providerregistration` (`id`, `companyName`, `personName`, `date`, `address`, `website`, `username`, `email`, `phone`, `mobile`, `pan`, `country`, `province`, `district`, `localBody`, `ward`, `password`) VALUES
(1, 'techpana ', 'mukesh', '2067/5/27 ', 'morahang', 'www.techpana.com', 'admin', 'niraulajuna5', '91111', '9862360000', '', 'Nepal', 'Koshi', 'sunsari', 'Itahari', '05', '12345'),
(7, 'itahari national college ', 'Binod Neupane', '2067/5/27 ', 'itahri', 'www.itahariintlschool.com', 'itahari1', 'itahariintlscl@gmail.com', '9888899997', '9862360000', '', 'Nepal', 'Koshi', 'Tehrathum', 'Menchhyayem', '05', '11111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindb`
--
ALTER TABLE `admindb`
  ADD PRIMARY KEY (`Admin-ID`);

--
-- Indexes for table `clientdocument`
--
ALTER TABLE `clientdocument`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `clienteducation`
--
ALTER TABLE `clienteducation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientregistration`
--
ALTER TABLE `clientregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobaplier`
--
ALTER TABLE `jobaplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `providerregistration`
--
ALTER TABLE `providerregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientdocument`
--
ALTER TABLE `clientdocument`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `clienteducation`
--
ALTER TABLE `clienteducation`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `clientregistration`
--
ALTER TABLE `clientregistration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jobaplier`
--
ALTER TABLE `jobaplier`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `providerregistration`
--
ALTER TABLE `providerregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
