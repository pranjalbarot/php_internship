-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 10:03 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `company_name` varchar(40) NOT NULL,
  `e_mail` varchar(40) NOT NULL,
  `codes` bigint(2) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `event_subject` varchar(6) NOT NULL,
  `existance` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `first_name`, `last_name`, `company_name`, `e_mail`, `codes`, `phone_no`, `event_subject`, `existance`) VALUES
(1, 'pranjal', 'barot', 'akash technolab', 'pranjalbrahmbhatt585@gmail.com', 91, 6355398293, 'web', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `stu_id` int(10) NOT NULL,
  `stu_name` varchar(40) NOT NULL,
  `stu_gender` varchar(6) NOT NULL,
  `stu_dob` date NOT NULL,
  `stu_email` varchar(40) NOT NULL,
  `stu_mobile` bigint(10) NOT NULL,
  `stu_address` varchar(90) NOT NULL,
  `stu_pincode` bigint(6) NOT NULL,
  `stu_pwd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`stu_id`, `stu_name`, `stu_gender`, `stu_dob`, `stu_email`, `stu_mobile`, `stu_address`, `stu_pincode`, `stu_pwd`) VALUES
(1, 'pranjal', 'Female', '2021-06-03', 'pranjalbrahmbhatt@gmail.com', 6355398293, '7,shakatipark', 388001, 'pranjal'),
(2, 'pranjal', 'Female', '2021-06-04', 'pranjalbrahmbhatt@gmail.com', 6355398293, '7,shakatipark', 3525, 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `stu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
