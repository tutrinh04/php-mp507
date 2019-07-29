-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2019 at 09:29 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lession7`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(255) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`) VALUES
(3, 'Tutrinh2', '60e775975d544bd2f44bc18584124232'),
(4, 'Hatran2', '6f27259448a1d9f71be74d4624010747'),
(5, 'Thanhvan', 'b4440e5e2a7942dd8482973cc5ce9fe0'),
(7, 'Hatran2', '6f27259448a1d9f71be74d4624010747'),
(8, 'Tutrinh1', '19b728143427567a24398b9fd09fb7c5'),
(10, 'Tutrinh2', '60e775975d544bd2f44bc18584124232'),
(11, 'Tutdph04873', '3fd40e90f59abc479c52df57927c1b4d');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `COUNTRY_ID` int(255) NOT NULL,
  `COUNTRY_NAME` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `REGION_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_name`
--

CREATE TABLE `customer_name` (
  `id` int(222) NOT NULL,
  `hoten` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer_name`
--

INSERT INTO `customer_name` (`id`, `hoten`) VALUES
(17, 'Trinh Tu');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `JOB_ID` int(10) NOT NULL,
  `JOB_TITLE` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `MIN_SALARY` decimal(6,0) NOT NULL,
  `MAX_SALARY` decimal(6,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhan`
--

CREATE TABLE `nhan` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhan`
--

INSERT INTO `nhan` (`id`, `fullname`, `email`, `addr`, `phone`) VALUES
(1, 'Ha Tran', 'Tu@gmail.com', 'Hanoi', 943423),
(2, 'Tu', 't@gmail.com', 'Hanoi', 943423),
(3, 'Lien', 't@gmail.com', 'Hanoi', 943423),
(4, 'JOCO', 'j@gmail.com', 'HaiDUong', 124443434);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`COUNTRY_ID`);

--
-- Indexes for table `customer_name`
--
ALTER TABLE `customer_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`JOB_ID`);

--
-- Indexes for table `nhan`
--
ALTER TABLE `nhan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `COUNTRY_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_name`
--
ALTER TABLE `customer_name`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `JOB_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhan`
--
ALTER TABLE `nhan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
