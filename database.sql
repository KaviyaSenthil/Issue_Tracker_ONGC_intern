-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2019 at 08:47 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `Issue_no` int(255) NOT NULL,
  `Request_given_date` datetime(6) NOT NULL,
  `request_given_by` varchar(255) NOT NULL,
  `Action_description` varchar(255) NOT NULL,
  `Replied_date` datetime(6) NOT NULL,
  `replied_by` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`Issue_no`, `Request_given_date`, `request_given_by`, `Action_description`, `Replied_date`, `replied_by`, `Department`) VALUES
(2, '0000-00-00 00:00:00.000000', '', 'Action description no unknown', '2019-05-27 21:14:35.000000', 'Harini', ''),
(1, '2019-05-27 20:27:09.000000', '1994', 'Action description 1', '2019-05-27 21:18:43.000000', 'opop', 'Software'),
(2, '2019-05-27 22:52:26.000000', '2000', 'Action description no unknown', '2019-05-27 23:09:58.000000', 'Harini', 'Hardware'),
(2, '2019-05-27 23:31:22.000000', '2000', 'Action description no unknown', '2019-05-27 23:33:24.000000', 'Harini', 'Hardware');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `Issue_no` int(255) NOT NULL,
  `Issue_Description` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Request_Date` datetime DEFAULT CURRENT_TIMESTAMP,
  `Request_given_by` int(255) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Pending',
  `Action_taken_description` varchar(255) DEFAULT NULL,
  `Action_taken_by` varchar(255) DEFAULT NULL,
  `Action_taken_Date` datetime DEFAULT NULL,
  `Solutionstatus` varchar(255) NOT NULL DEFAULT 'Unsolved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`Issue_no`, `Issue_Description`, `Department`, `Request_Date`, `Request_given_by`, `Status`, `Action_taken_description`, `Action_taken_by`, `Action_taken_Date`, `Solutionstatus`) VALUES
(1, 'Issue no 1 ', 'Software', '2019-05-27 20:27:09', 1994, 'Completed', 'Action description 1', 'opop', '2019-05-27 21:18:43', 'Solved'),
(2, 'Issue no unknown', 'Hardware', '2019-05-27 23:31:22', 2000, 'Pending', 'Action description no unknown', 'Harini', '2019-05-27 23:33:24', 'Solved'),
(3, 'Issue given', 'Hardware', '2019-05-27 20:28:13', 1234, 'Pending', 'Action description given', 'Harini', '2019-05-27 20:35:01', 'Unsolved'),
(4, 'Issue 2', 'Software', '2019-05-27 20:28:34', 1294, 'Pending', NULL, NULL, NULL, 'Unsolved'),
(5, 'Issue new', 'Software', '2019-05-27 22:56:06', 2000, 'Pending', NULL, NULL, NULL, 'Unsolved');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `User_id` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Employee_name` varchar(255) NOT NULL,
  `Group` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Privilege` varchar(255) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`User_id`, `Password`, `Employee_name`, `Group`, `Designation`, `Privilege`) VALUES
('1234', '4567', 'opop', 'Software', 'Head', 'User'),
('1294', '4567', 'efgh', 'Software', 'Head', 'User'),
('1994', '4567', 'abcd', 'Hardware', 'Head', 'User'),
('2000', '4567', 'Harini', 'Hardware', 'Head\r\n', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`Issue_no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`User_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `Issue_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
