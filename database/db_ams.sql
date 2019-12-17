-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 17, 2019 at 09:44 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `att_logs`
--

CREATE TABLE `att_logs` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `time_in` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `att_logs`
--

INSERT INTO `att_logs` (`id`, `username`, `shift`, `time_in`) VALUES
(10, 'team_support', '6AM to 2PM', '2019-12-17 16:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `user_group` varchar(255) NOT NULL DEFAULT 'Trainee',
  `user_status` varchar(255) NOT NULL DEFAULT 'InActive',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_email` varchar(255) NOT NULL,
  `contactNumber` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `user_group`, `user_status`, `date_created`, `user_email`, `contactNumber`, `address`) VALUES
(21, 'arjay.cobarde', '2ac9cb7dc02b3c0083eb70898e549b63', 'Arjay', 'Cobarde', 'Team Lead', 'Active', '2019-12-17 06:36:55', 'arjayburlas@gmail.com', '091650455488', 'Pulpogan 2 Consolacion Cebu'),
(22, 'trainee_team', '2ac9cb7dc02b3c0083eb70898e549b63', 'Trainee', 'Team', 'Trainee', 'InActive', '2019-12-17 07:37:29', 'trainee_team@gmail.com', '091654888', 'Team Trainee Aasfsa '),
(23, 'trainer_team', '4297f44b13955235245b2497399d7a93', 'Trainer', 'Team', 'Trainer', 'InActive', '2019-12-17 07:39:47', 'trainer_team@gmail.com', '23123', 'Team Trainer Asdfasdfsa'),
(24, 'team_lead', '4297f44b13955235245b2497399d7a93', 'Team', 'Lead', 'Team Lead', 'InActive', '2019-12-17 07:58:03', 'team_lead@gmail.com', '123123123', 'Team Lead'),
(25, 'team_support', '4297f44b13955235245b2497399d7a93', 'Team', 'Support', 'Team Support', 'InActive', '2019-12-17 07:59:51', 'team_support@gmail.com', '09125648899', 'Adasd Asdfsaf Asdfasdfsa Asdfsad');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `user_group` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `user_group`, `date_created`) VALUES
(1, 'Team Lead', '2019-12-17 08:17:30'),
(2, 'Trainer', '2019-12-17 08:17:30'),
(3, 'Trainee', '2019-12-17 08:17:45'),
(4, 'Team Support', '2019-12-17 08:40:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `att_logs`
--
ALTER TABLE `att_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `att_logs`
--
ALTER TABLE `att_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
