-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2022 at 11:43 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `travel_info`
--

CREATE TABLE `travel_info` (
  `id` int(11) NOT NULL,
  `branch1` varchar(200) NOT NULL,
  `account_staff` varchar(200) NOT NULL,
  `department` varchar(100) NOT NULL,
  `team_name` varchar(100) NOT NULL,
  `branch2` varchar(200) NOT NULL,
  `branch3` varchar(200) NOT NULL,
  `purpose` varchar(5000) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `days_no` int(11) NOT NULL,
  `emp_no` varchar(100) NOT NULL,
  `from_to` varchar(255) NOT NULL,
  `particular` varchar(30) NOT NULL,
  `amount_liquidate` int(11) NOT NULL,
  `total_liquidate` int(11) NOT NULL,
  `bracket` varchar(50) DEFAULT NULL,
  `employee_no` varchar(20) DEFAULT NULL,
  `no_of_days` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `request_by` varchar(50) NOT NULL,
  `review_by` varchar(50) NOT NULL,
  `approve_by` varchar(50) NOT NULL,
  `receive_by` varchar(50) NOT NULL,
  `user` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `num_row` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_info`
--

INSERT INTO `travel_info` (`id`, `branch1`, `account_staff`, `department`, `team_name`, `branch2`, `branch3`, `purpose`, `start_date`, `end_date`, `days_no`, `emp_no`, `from_to`, `particular`, `amount_liquidate`, `total_liquidate`, `bracket`, `employee_no`, `no_of_days`, `amount`, `total`, `request_by`, `review_by`, `approve_by`, `receive_by`, `user`, `status`, `num_row`) VALUES
(7, 'Gaisano Capital SOUTH', 'elaiza', 'Infotech', 'Team Arthur', 'Gaisano Capital SOUTH', '', 'Inventory Monitoring', '2022-09-22', '2022-09-22', 1, 'GCC0035-05282022', 'Gaisano Capital Corp. - Gaisano Capital SOUTH', 'none', 100, 100, '', '', 0, 0, 0, 'Novel P. Chavez', 'Mr. Mariano Arthur', 'none', 'none', 'user', 'Approved', 0),
(11, 'Gaisano Capital Tacloban Main', 'Elaiza Liego', 'Infotech', '', 'Gaisano Capital Tacloban Main', '', 'Inventory Monitoring', '2022-09-27', '2022-09-30', 4, '1', 'Home to Pier1 vv', 'Taxi Fare', 500, 4260, '350', '1', 2, 700, 1060, 'Elaiza Liego', 'none', 'none', 'none', 'Elaiza', 'Pending', 1),
(12, 'Gaisano Capital Tacloban Main', 'Elaiza Liego', 'Infotech', '', 'Gaisano Capital Tacloban Main', '', 'Inventory Monitoring', '2022-09-27', '2022-09-30', 4, '', 'Cebu to Ormoc vv', 'Boat fare(1500)', 3000, 4260, '350', '1', 2, 700, 1060, 'Elaiza Liego', 'none', 'none', 'none', 'Elaiza', 'Pending', 2),
(13, 'Gaisano Capital Tacloban Main', 'Elaiza Liego', 'Infotech', '', 'Gaisano Capital Tacloban Main', '', 'Inventory Monitoring', '2022-09-27', '2022-09-30', 4, '', 'Cebu and Ormoc Terminal fee', '', 60, 4260, '350', '1', 2, 700, 1060, 'Elaiza Liego', 'none', 'none', 'none', 'Elaiza', 'Pending', 3),
(14, 'Gaisano Capital Tacloban Main', 'Elaiza Liego', 'Infotech', '', 'Gaisano Capital Tacloban Main', '', 'Inventory Monitoring', '2022-09-27', '2022-09-30', 4, '', 'Ormoc Pier to Terminal', 'tricycle fare(25)vv', 50, 4260, '350', '1', 2, 700, 1060, 'Elaiza Liego', 'none', 'none', 'none', 'Elaiza', 'Pending', 4),
(15, 'Gaisano Capital Tacloban Main', 'Elaiza Liego', 'Infotech', '', 'Gaisano Capital Tacloban Main', '', 'Inventory Monitoring', '2022-09-27', '2022-09-30', 4, '', 'Ormoc to Tacloban vv', 'Vhire fare (250)vv', 500, 4260, '350', '1', 2, 700, 1060, 'Elaiza Liego', 'none', 'none', 'none', 'Elaiza', 'Pending', 5),
(16, 'Gaisano Capital Tacloban Main', 'Elaiza Liego', 'Infotech', '', 'Gaisano Capital Tacloban Main', '', 'Inventory Monitoring', '2022-09-27', '2022-09-30', 4, '', 'Tacloban to Dorm', 'Tricycle Fare(25)vv', 50, 4260, '350', '1', 2, 700, 1060, 'Elaiza Liego', 'none', 'none', '', 'Elaiza', 'Pending', 0),
(17, 'Gaisano Capital Tacloban Main', 'Elaiza Liego', 'Infotech', '', 'Gaisano Capital Tacloban Main', '', 'Inventory Monitoring', '2022-09-27', '2022-09-30', 4, '', 'Tacloban store to warehouse', 'tricycle fare(25)2dlays vv', 100, 4260, '350', '1', 2, 700, 1060, 'Elaiza Liego', 'none', 'none', 'none', 'Elaiza', 'Pending', 0),
(18, 'Gaisano Capital SRP', 'Novel Chavez', 'Infotech', '', 'Gaisano Capital SRP', '', 'Inventory Monitoring', '2022-09-27', '2022-09-27', 1, '1', 'Home to Pier1 vv', 'Taxi Fare', 500, 3560, '350', '1', 2, 700, 1060, 'Novel P. Chavez', 'none', 'none', 'none', 'user', 'Pending', 0),
(19, 'Gaisano Capital SRP', 'Novel Chavez', 'Infotech', '', 'Gaisano Capital SRP', '', 'Inventory Monitoring', '2022-09-27', '2022-09-27', 1, '', 'Cebu to Ormoc vv', 'Boat fare(1,500)', 3000, 3560, '350', '1', 2, 700, 1060, 'Novel P. Chavez', 'none', 'none', 'none', 'user', 'Pending', 0),
(20, 'Gaisano Capital SRP', 'Novel Chavez', 'Infotech', '', 'Gaisano Capital SRP', '', 'Inventory Monitoring', '2022-09-27', '2022-09-27', 1, '', 'Cebu and Ormoc Terminal fee', '', 60, 3560, '350', '1', 2, 700, 1060, 'Novel P. Chavez', 'none', 'none', 'none', 'user', 'Pending', 0),
(21, 'Gaisano Capital Bacayan', 'elaiza', 'Infotech', '', 'Choose Branch here...', '', 'sample\r\nexample\r\ninventory\r\nmonitoring', '0000-00-00', '0000-00-00', 0, '003', 'Gaisano Capital Corp. - Gaisano Capital SRP', '', 0, 0, '', '', 0, 0, 0, '', '', '', '', 'user', 'Pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(30) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `department1` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(30) NOT NULL,
  `stats` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `firstname`, `lastname`, `branch`, `department1`, `password`, `role`, `stats`) VALUES
('Audit', 'Audit', 'Audit', 'Gaisano Capital Corp.', 'Audit', 'admin', 'User', 'Active'),
('Elaiza', 'Elaiza', 'Liego', '', '', 'pass', 'User', 'Active'),
('levon16', 'Novel', 'Chavez', '', '', 'admin', 'Administrator', 'Active'),
('sam', 'sasas', 'sasa', 'Gaisano Capital Corp.', 'infotech', 'admin', 'User', 'Active'),
('user', 'Lev', 'Chavz', '', '', 'pass', 'User', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travel_info`
--
ALTER TABLE `travel_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `travel_info`
--
ALTER TABLE `travel_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
