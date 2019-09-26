-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2019 at 02:03 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leavemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `application_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` varchar(400) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  `subday` date NOT NULL,
  `days` int(11) NOT NULL,
  `leave_Date` date NOT NULL,
  `seen` varchar(30) NOT NULL,
  `department` int(11) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`application_id`, `user_id`, `subject`, `message`, `status`, `subday`, `days`, `leave_Date`, `seen`, `department`, `admin`) VALUES
(82, 11, 'urgent_leave', 'jhvhjvb ajdlk ajlkjfn  ;la kjdfajf;okj ;lkp;k,fakfpo ;ka;kmfpakmfpok poafmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmaopjkfjojaojfopjaopjfopjkjop;alfc,m;l, ml;ml;mal;kfjwaeojfoooppppojjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'pending', '2019-09-22', 3, '2019-09-03', 'no', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'Account');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(30) DEFAULT NULL,
  `casual_leave` int(11) NOT NULL,
  `medical_leave` int(11) NOT NULL,
  `other_leave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation_name`, `casual_leave`, `medical_leave`, `other_leave`) VALUES
(4, 'Admin', 0, 0, 0),
(6, 'Jr. Coordinator Architect', 12, 6, 6),
(8, 'Coordinator Architect', 12, 6, 6),
(9, 'Senior Coordinator Architect', 12, 6, 6),
(10, 'Jr. Coordinator (IT)', 12, 6, 6),
(11, 'Coordinator (IT)', 12, 6, 6),
(12, 'Sr. Coordinator (IT)', 12, 6, 6),
(13, 'IT Expert', 12, 6, 6),
(14, 'Server Administrator', 12, 6, 6),
(15, '3D Modular & CAD Operator', 12, 6, 6),
(16, 'CAD Operator', 12, 6, 6),
(17, 'Jr. Coordinator Civil', 12, 6, 6),
(18, 'Coordinator Civil', 12, 6, 6),
(19, 'Sr. Coordinator Civil', 12, 6, 6),
(20, 'Dept. Head', 10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `user_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `url` varchar(10000) DEFAULT NULL,
  `namee` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `msg` varchar(10000) NOT NULL,
  `seen` int(1) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE `notice_board` (
  `notice_board_id` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `notice_board_details` mediumtext NOT NULL,
  `notice_board_notice_given_user` int(11) NOT NULL,
  `notice_board_creation_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `notice_board_modification_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `phone` varchar(15) NOT NULL DEFAULT '',
  `blood` varchar(3) NOT NULL DEFAULT '',
  `address` varchar(1000) NOT NULL DEFAULT '',
  `point` int(10) NOT NULL DEFAULT '0',
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `role` varchar(30) NOT NULL,
  `image` varchar(400) NOT NULL DEFAULT '',
  `facebook` varchar(100) NOT NULL DEFAULT '',
  `linkedin` varchar(100) NOT NULL DEFAULT '',
  `skype` varchar(100) NOT NULL DEFAULT '',
  `earn_leave` int(11) NOT NULL DEFAULT '0',
  `maternity_leave` int(11) NOT NULL DEFAULT '0',
  `urgent_leave` int(11) NOT NULL DEFAULT '0',
  `earn_leave_year` int(11) NOT NULL DEFAULT '0',
  `casual_leave` int(11) NOT NULL DEFAULT '0',
  `medical_leave` int(11) NOT NULL DEFAULT '0',
  `without_pay_leave` int(11) NOT NULL DEFAULT '0',
  `other_leave` int(11) NOT NULL DEFAULT '0',
  `loan_taken` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `phone`, `blood`, `address`, `point`, `email`, `password`, `designation_id`, `role`, `image`, `facebook`, `linkedin`, `skype`, `earn_leave`, `maternity_leave`, `urgent_leave`, `earn_leave_year`, `casual_leave`, `medical_leave`, `without_pay_leave`, `other_leave`, `loan_taken`) VALUES
(1, 'Admin', '016749846165', 'A+', '', 0, 'admin@gmail.com', '123', 4, 'super_admin', '21092019093611156905857201-1User-2-512.png', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 0, 0, 0, 0, 0, 0, 0, 0, 'No'),
(11, 'adad', '', '', '', 0, 'asd@gmail.com', '123', 6, 'user', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`,`department_name`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`,`user_id`),
  ADD UNIQUE KEY `job_id` (`job_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `from_user_id` (`from_user_id`,`to_user_id`),
  ADD KEY `to_user_id` (`to_user_id`);

--
-- Indexes for table `notice_board`
--
ALTER TABLE `notice_board`
  ADD PRIMARY KEY (`notice_board_id`),
  ADD KEY `notice_board_notice_given_user` (`notice_board_notice_given_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `designation_id` (`designation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `notice_board`
--
ALTER TABLE `notice_board`
  MODIFY `notice_board_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`from_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`to_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notice_board`
--
ALTER TABLE `notice_board`
  ADD CONSTRAINT `notice_board_ibfk_1` FOREIGN KEY (`notice_board_notice_given_user`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`designation_id`) REFERENCES `designation` (`designation_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
