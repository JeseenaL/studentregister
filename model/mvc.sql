-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2020 at 02:53 PM
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
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Password`) VALUES
(1, 'admin', 'admin123'),
(4, 'amitha', 'amitha'),
(5, 'john', 'john');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Courseid` int(11) NOT NULL,
  `Coursename` varchar(20) NOT NULL,
  `Deptname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Courseid`, `Coursename`, `Deptname`) VALUES
(2, 'BTech', 'CSE'),
(3, 'BTech', 'EC'),
(4, 'BTech', 'Mechanical'),
(5, 'BTech', 'EEE'),
(6, 'BTech', 'Civil');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Resid` int(11) NOT NULL,
  `RegisterNo` varchar(20) NOT NULL,
  `Sid` int(11) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Result` varchar(20) NOT NULL,
  `Credits` varchar(20) NOT NULL,
  `TotalGPA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Resid`, `RegisterNo`, `Sid`, `Course`, `Name`, `Subject`, `Result`, `Credits`, `TotalGPA`) VALUES
(15, '101', 1, 'BTech', 'Jeseena L', 'HTML', 'Pass', '10', '9.7'),
(17, '102', 4, 'BTech', 'Anju A J', 'Electronics', 'Pass', '10', '8.7'),
(20, '101', 2, 'BTech', 'Jeseena L', 'DAA', 'Pass', '9', '7.9');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Sid` int(11) NOT NULL,
  `RegisterNo` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `SemesterNo` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Sid`, `RegisterNo`, `Name`, `Mobile`, `Department`, `Course`, `Email`, `SemesterNo`, `Year`, `Username`, `Password`) VALUES
(12, '1216', 'Jeseena L', 8943314672, 'CS', 'B. Tech', 'jeseenalatheef123@gmail.com', 8, 4, 'jeseena', 'jaseena'),
(13, '102', 'Anju A J', 7236984510, 'EC', 'BTech', 'anju@gmail.com', 3, 2020, 'Anju', 'anju'),
(14, '103', 'Sam Paul', 9632584170, 'Mechanical', 'BTech', 'sam@gmail.com', 8, 2020, 'Sam', 'sam'),
(15, '104', 'Ann Mary', 8659741230, 'EEE', 'BTech', 'ann@gmail.com', 5, 2020, 'Ann', 'ann'),
(16, '105', 'Kiran', 7369519201, 'Civil', 'BTech', 'kiran@gmail.com', 2, 2020, 'Kiran', 'kiran'),
(17, '105', 'Kiran', 7369519201, 'Civil', 'BTech', 'kiran@gmail.com', 2, 2020, 'Kiran', 'kiran');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Subjectid` int(11) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Subjectname` varchar(20) NOT NULL,
  `Subjectcode` varchar(20) NOT NULL,
  `Semester` varchar(20) NOT NULL,
  `Credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Subjectid`, `Course`, `Department`, `Subjectname`, `Subjectcode`, `Semester`, `Credits`) VALUES
(1, 'BTech', 'EC', 'Electrical', 'E123', '4', 5),
(3, 'BTech', 'CSE', 'OOP', 'C123', '6', 4),
(5, 'BTech', 'EEE', 'Electronics', '789', '6', 2);

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `Username`, `Password`) VALUES
(1, 'superadmin', 'superadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Courseid`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`Resid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Sid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Subjectid`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `Courseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `Resid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `Subjectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
