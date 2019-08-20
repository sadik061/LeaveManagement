-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 10:04 AM
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
(1, 2, 'urgent_leave', 'matha betha', 'rejected', '2019-08-02', 0, '2019-08-03', 'no', 1, 0),
(2, 2, 'maternity_leave', 'matha betha', 'approved', '2019-08-02', 10, '2019-08-14', 'no', 1, 1),
(3, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0);

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
(1, 'software developer', 1, 2, 3),
(2, 'Junior Software Developer', 15, 5, 3);

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

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`user_id`, `id`, `url`, `namee`) VALUES
(2, 22, 'HR.txt', 'HR'),
(2, 23, 'top-free-5c-ope_31888387.png', 'hr soft'),
(2, 24, 'wifi.py', 'wifi');

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

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `from_user_id`, `to_user_id`, `msg`, `seen`, `datetime`) VALUES
(18, 1, 2, 'Hey Saddik,\r\nMeet me !', 1, '2019-08-06 12:09:58');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE `notice_board` (
  `notice_board_id` int(11) NOT NULL,
  `notice_board_details` mediumtext NOT NULL,
  `notice_board_notice_given_user` int(11) NOT NULL,
  `notice_board_creation_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `notice_board_modification_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`notice_board_id`, `notice_board_details`, `notice_board_notice_given_user`, `notice_board_creation_time`, `notice_board_modification_time`) VALUES
(1, 'checking', 1, '2019-06-19 09:32:31', '2019-06-19 09:32:31'),
(2, 'random notice', 1, '2019-06-19 09:51:54', '2019-06-19 09:51:54'),
(3, 'Hello everyone,\r\nTomorrow we have e meeting at 5.30 PM', 1, '2019-06-19 09:56:44', '2019-06-19 09:56:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `phone` varchar(15) NOT NULL,
  `blood` varchar(3) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `point` int(10) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `role` varchar(30) NOT NULL,
  `image` varchar(400) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `skype` varchar(100) NOT NULL,
  `earn_leave` int(11) NOT NULL,
  `maternity_leave` int(11) NOT NULL,
  `urgent_leave` int(11) NOT NULL,
  `earn_leave_year` int(11) NOT NULL,
  `casual_leave` int(11) NOT NULL,
  `medical_leave` int(11) NOT NULL,
  `other_leave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `phone`, `blood`, `address`, `point`, `email`, `password`, `designation_id`, `role`, `image`, `facebook`, `linkedin`, `skype`, `earn_leave`, `maternity_leave`, `urgent_leave`, `earn_leave_year`, `casual_leave`, `medical_leave`, `other_leave`) VALUES
(1, 'sadik', '123456', 'A+', 'Mohammadi Rd, Dhaka', 0, 'sadik061@gmail.com', '123', 1, 'super_admin', '15072019144048156319444860839477_2151287374926181_5067572813800407040_o.jpg', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 0, 5, 6, 0, 0, 3, 0),
(2, 'Hares', '498651', 'B+', 'Mohammadi Rd, Dhaka', 0, 'hares@gmail.com', '123', 2, 'user', '15072019121832156318591362263942_2176907292379183_4235726073351897088_n.jpg', '', '', '', 1, 0, 0, 0, 0, 3, 0),
(4, 'Rifat', '498161', 'AB+', 'Mohammadi Rd, Dhaka', 0, 'rifat@gmail.com', '123', 2, 'department_head', '31072019091836156455751756209447_2302510863408070_1771955231173640192_n.jpg', '', '', '', 0, 0, 0, 0, 0, 0, 0);

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
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notice_board`
--
ALTER TABLE `notice_board`
  MODIFY `notice_board_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
