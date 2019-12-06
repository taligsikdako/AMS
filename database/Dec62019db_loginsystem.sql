-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 08:29 AM
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
-- Database: `db_loginsystem`
--

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
  `cNumber` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `user_group`, `user_status`, `date_created`, `user_email`, `cNumber`) VALUES
(1, 'agent0', '71e6ab5988a0709da605aab8ab89e548', 'User', 'Agent', 'Administrator', 'Active', '2019-12-03 23:09:24', 'useragent@localhost.com', ''),
(6, 'arjay.cobarde', '2ac9cb7dc02b3c0083eb70898e549b63', 'Arjay', 'Cobarde', '', '', '2019-12-06 07:02:08', 'arjayburlas@gmail.com', '09165042601'),
(7, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'InActive', '2019-12-06 07:24:07', '', ''),
(8, 'mark.sarcon', '2ac9cb7dc02b3c0083eb70898e549b63', 'Mark', 'Sarcon', '', 'InActive', '2019-12-06 07:27:52', 'mark.sarcon@gmail.com', 'Password1'),
(9, 'dantley.kasaysayan', '2ac9cb7dc02b3c0083eb70898e549b63', 'Dantley', 'Kasaysayan', '', 'InActive', '2019-12-06 07:28:47', 'dantley@gmail.com', '0916502601');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
