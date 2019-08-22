-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 02:04 PM
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
(3, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(5, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(6, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(7, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(8, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(9, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(10, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(11, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(12, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(13, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(14, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(15, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(16, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(17, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(18, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(19, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(20, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(21, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(22, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(23, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(24, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(25, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(26, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(27, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(28, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(29, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(30, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(31, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(32, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(33, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(34, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(35, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(36, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(37, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(38, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(39, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(40, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(41, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(42, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(43, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(44, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(45, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(46, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(47, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(48, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(49, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(50, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(51, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(52, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(53, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(54, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(55, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(56, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(57, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(58, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(59, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(60, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(61, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(62, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(63, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(64, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(65, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(66, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(67, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(68, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(69, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(70, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(71, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(72, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(73, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0),
(74, 2, 'maternity_leave', 'matha betha', 'pending', '2019-08-05', 3, '2019-08-01', 'no', 0, 0);

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
(1, 'software developer', 1, 5, 25),
(2, 'Junior Software Developer', 15, 5, 5),
(3, 'Cleaner', 5, 5, 5);

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
(2, 24, 'wifi.py', 'wifi'),
(1, 27, '011152073.html', 'html'),
(1, 28, 'a.py', 'A.python');

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
(18, 1, 2, 'Hey Saddik,\r\nMeet me !', 1, '2019-08-06 12:09:58'),
(19, 4, 1, 'Hello Sadik, How are you ?', 1, '2019-08-21 11:25:08');

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

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`notice_board_id`, `subject`, `notice_board_details`, `notice_board_notice_given_user`, `notice_board_creation_time`, `notice_board_modification_time`) VALUES
(1, 'Check', 'checking', 1, '2019-06-19 09:32:31', '2019-08-20 18:29:19'),
(2, 'Random', 'random notice', 1, '2019-06-19 09:51:54', '2019-08-20 18:29:15'),
(3, 'Meeting', 'Hello everyone,\r\nTomorrow we have e meeting at 5.30 PM', 1, '2019-06-19 09:56:44', '2019-08-20 18:29:12'),
(4, 'Picnic', 'We are going to Saint Martin.', 1, '2019-08-20 14:26:29', '2019-08-20 18:29:04'),
(5, 'Hello', 'Hello', 1, '2019-08-21 14:05:04', '2019-08-21 18:08:38'),
(6, 'Everyone', 'Everyone', 1, '2019-08-21 14:05:11', '2019-08-21 18:08:44'),
(7, '1', '1', 1, '2019-08-21 14:05:15', '2019-08-21 18:08:48'),
(8, '2', '2', 1, '2019-08-21 14:05:19', '2019-08-21 18:08:49'),
(9, '3', '3', 1, '2019-08-21 14:05:26', '2019-08-21 18:08:51'),
(10, '4', '3', 1, '2019-08-21 14:05:27', '2019-08-21 18:08:53'),
(11, '5', '5', 1, '2019-08-21 14:12:39', '2019-08-21 14:12:39'),
(12, '6', '6', 1, '2019-08-21 14:14:38', '2019-08-21 14:14:38'),
(13, '5', '5', 1, '2019-08-21 14:14:48', '2019-08-21 14:14:48'),
(14, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(15, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(16, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(17, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(18, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(19, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(20, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(21, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(22, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(23, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(24, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(25, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(26, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(27, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(28, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(29, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(30, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(31, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(32, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(33, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(34, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(35, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(36, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(37, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(38, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(39, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(40, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(41, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(42, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(43, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(44, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(45, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(46, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(47, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(48, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(49, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(50, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(51, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(52, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(53, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(54, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(55, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(56, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(57, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(58, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14'),
(59, '7', '7', 1, '2019-08-21 14:15:14', '2019-08-21 14:15:14');

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
(4, 'SAIF AHMED ANIK', '498161', 'AB+', 'Mohammadi Rd, Dhaka', 0, 'saif@gmail.com', '123', 2, 'department_head', '220820191047531566463673A 89109 .jpg', '', '', '', 0, 0, 0, 0, 0, 0, 0);

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
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `notice_board`
--
ALTER TABLE `notice_board`
  MODIFY `notice_board_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

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
