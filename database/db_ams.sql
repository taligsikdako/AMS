-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 12:40 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `time_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `shift` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `att_logs`
--

INSERT INTO `att_logs` (`id`, `username`, `time_in`, `shift`) VALUES
(1, 'agent0', '2019-12-09 23:02:11', ''),
(2, 'agent0', '2019-12-09 23:17:29', '2PM to 9PM'),
(3, 'arjay.cobarde', '2019-12-09 23:33:35', '2PM to 9PM'),
(4, 'junkimming', '2019-12-09 23:39:28', '6AM to 2PM');

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
  `user_group` varchar(255) NOT NULL,
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
(1, 'agent0', '2ac9cb7dc02b3c0083eb70898e549b63', 'User', 'Agent', 'Administrator', 'Active', '2019-12-03 23:09:24', 'useragent@localhost.com', '09165548888', 'Agentx44'),
(6, 'arjay.cobarde', '2ac9cb7dc02b3c0083eb70898e549b63', 'Arjay', 'Cobarde', 'Trainee', 'Active', '2019-12-06 07:02:08', 'arjayburlas@gmail.com', '09165042601', 'Pulpogan Consolacion Cebu'),
(8, 'mark.sarcon', '2ac9cb7dc02b3c0083eb70898e549b63', 'Mark', 'Sarcon', 'Trainer', 'Active', '2019-12-06 07:27:52', 'mark.sarcon@gmail.com', '0916502559988', 'T Padilla Cebu City'),
(9, 'dantley.kasaysayan', '2ac9cb7dc02b3c0083eb70898e549b63', 'Dantley', 'Kasaysayan', 'Trainer', 'InActive', '2019-12-06 07:28:47', 'dantley@gmail.com', '0916502601', 'Basak Pardo Cebu City'),
(11, 'lawrence', '2ac9cb7dc02b3c0083eb70898e549b63', 'Lawrence Joseph', 'Tan', 'Trainee', 'InActive', '2019-12-07 03:32:23', 'lawren.tan@gmail.com', '09486655466', 'Labangon Cebu City'),
(12, 'william', '2ac9cb7dc02b3c0083eb70898e549b63', 'William Jr.', 'Genelza', 'Trainee', 'InActive', '2019-12-07 03:34:11', 'william.genelza@gmail.com', '091565466', 'Consolacion, Cebu'),
(13, 'rodramel', 'd41d8cd98f00b204e9800998ecf8427e', 'Rod', 'Cantiveros', 'Administrator', 'Active', '2019-12-07 03:59:24', 'rodcantiveros@gmail.com', '09165046255', 'Minglanilla, Cebu'),
(17, 'junkimming', '2ac9cb7dc02b3c0083eb70898e549b63', 'Kimoy', 'Balmori', 'Trainer', 'InActive', '2019-12-07 05:07:04', 'kimoy@gmail.com', '0916548899', 'Pulpogan, Cebu'),
(18, 'engelbert', 'd41d8cd98f00b204e9800998ecf8427e', 'Engel', 'Litonjua', 'Trainer', 'InActive', '2019-12-07 05:12:23', 'engel.lintonjua@gmail.com', '091565444', 'Purok 2 Sityo Gumamela, Consolacion Cebu'),
(19, 'macky', 'd41d8cd98f00b204e9800998ecf8427e', 'Macky', 'Laranjo', 'Trainee', 'InActive', '2019-12-07 07:08:09', 'mackylaranjo@gmail.com', '091652246688', 'Sitio Gumamela Pulpogan Consolacion, Cebu');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `att_logs`
--
ALTER TABLE `att_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
