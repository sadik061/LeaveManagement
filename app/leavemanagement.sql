-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 22, 2020 at 08:41 AM
-- Server version: 10.2.30-MariaDB-log
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdpalcon_app`
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
  `hours` int(1) NOT NULL DEFAULT 0,
  `leave_Date` date NOT NULL,
  `seen` varchar(30) NOT NULL,
  `department` int(11) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`application_id`, `user_id`, `subject`, `message`, `status`, `subday`, `days`, `hours`, `leave_Date`, `seen`, `department`, `admin`) VALUES
(87, 30, 'casual_leave', 'TO GO HOME FOR  WITHDRAWAL MY SMART CARD ', 'approved', '2019-10-15', 2, 0, '2019-10-16', 'no', 1, 1),
(91, 40, 'casual_leave', 'My elder brother is coming back from UN mission tomorrow morning and he will be leaving the country at night on the same day.  ', 'rejected', '2019-10-15', 1, 0, '2019-10-16', 'no', 1, 1),
(99, 32, 'casual_leave', 'personal', 'rejected', '2019-10-16', 1, 0, '2019-10-17', 'no', 1, 1),
(104, 73, 'medical_leave', 'I was sick.', 'rejected', '2019-10-16', 1, 0, '2019-10-12', 'no', 1, 0),
(108, 76, 'urgent_leave', 'Leave for 1.5 hours because of emergency family issue.', 'approved', '2019-10-17', 1, 0, '2019-10-17', 'no', 1, 1),
(109, 34, 'casual_leave', 'my mother comes to dhaka some family problems', 'rejected', '2019-10-19', 1, 0, '2019-10-19', 'no', 1, 1),
(111, 73, 'casual_leave', '4 hrs leave. I will go to BUET to submit my papers.   ', 'approved', '2019-10-20', 1, 0, '2019-10-20', 'no', 1, 1),
(113, 73, 'casual_leave', '4 hrs leave. I will go to BUET to submit my papers.   ', 'rejected', '2019-10-20', 1, 0, '2019-10-21', 'no', 1, 1),
(114, 1, 'halfday_leave', 'Gotta see a doctor.', 'rejected', '2019-10-20', 1, 3, '2019-10-20', 'no', 1, 1),
(118, 38, 'medical_leave', 'On that day my leg got twisted. So that I was unable to attend office.', 'rejected', '2019-10-24', 1, 0, '2019-10-19', 'no', 1, 1),
(119, 25, 'casual_leave', 'for family programme', 'rejected', '2019-10-24', 1, 0, '2019-10-26', 'no', 1, 0),
(120, 25, 'halfday_leave', 'For my family programme ( 1.30pm to 5:30pm)  ( in-charge :  AR. Tawhida Rahman lisa)', 'rejected', '2019-10-24', 1, 3, '2019-10-26', 'no', 1, 1),
(121, 33, 'halfday_leave', 'Family Emergency', 'rejected', '2019-10-24', 1, 5, '2019-02-23', 'no', 1, 1),
(122, 31, 'casual_leave', 'Versity Exam Design ', 'approved', '2019-10-26', 1, 0, '2019-10-26', 'no', 1, 1),
(124, 27, 'halfday_leave', 'I have to go out for a personal reason at 4.00 pm today.', 'approved', '2019-10-28', 1, 2, '2019-10-28', 'no', 1, 1),
(125, 25, 'halfday_leave', 'my family programme ( 2.30pm to 5:30pm) ( in-charge : AR. Tawhida Rahman lisa)', 'approved', '2019-10-28', 1, 2, '2019-10-26', 'no', 1, 1),
(126, 25, 'halfday_leave', 'o;[po]p', 'approved', '2019-10-28', 1, 2, '2019-10-26', 'no', 1, 1),
(127, 34, 'casual_leave', 'family problem', 'rejected', '2019-10-28', 1, 0, '2019-10-29', 'no', 1, 1),
(128, 27, 'casual_leave', 'My wedding ceremony has been fixed on 18th November, 2019. For that i am applying for 15 days leave to complete marriage preparation & post wedding program. ', 'approved', '2019-10-30', 10, 0, '2019-11-14', 'no', 1, 1),
(129, 37, 'halfday_leave', 'i have to visit passport office (Agargaon) for my passport issue.as soon as possible i will be back in office.', 'approved', '2019-10-30', 1, 4, '2019-10-31', 'no', 1, 1),
(130, 38, 'medical_leave', 'On that day my leg got twisted. So that I was unable to attend office.', 'rejected', '2019-10-30', 1, 0, '2019-10-19', 'no', 1, 1),
(131, 49, 'halfday_leave', 'Varsity class', 'approved', '2019-10-31', 1, 2, '2019-10-31', 'no', 1, 1),
(132, 29, 'medical_leave', 'i was suffering from high fever. So i  could not come to office in 8.10.19. ', 'approved', '2019-11-04', 1, 0, '2019-10-08', 'no', 1, 1),
(133, 73, 'halfday_leave', 'because of extreme traffic i got late.', 'approved', '2019-11-04', 1, 1, '2019-10-06', 'no', 1, 1),
(135, 46, 'casual_leave', 'Family problem ', 'rejected', '2019-11-05', 1, 0, '2019-11-06', 'no', 1, 0),
(136, 37, 'casual_leave', 'My First  marriage anniversary on that day.i will not able to attend office.i am so sorry for that.', 'rejected', '2019-11-07', 1, 0, '2019-11-09', 'no', 1, 0),
(137, 37, 'casual_leave', 'For Family Reason.', 'approved', '2019-11-07', 1, 0, '2019-11-09', 'no', 1, 1),
(139, 76, 'urgent_leave', 'Leave For 2 hours (3:30PM To 5:30PM) for family issue.', 'approved', '2019-11-09', 1, 0, '2019-11-09', 'no', 1, 1),
(140, 27, 'halfday_leave', 'I have some personal work to do.', 'approved', '2019-11-11', 1, 3, '2019-11-12', 'no', 1, 1),
(141, 73, 'casual_leave', 'I will  be out of Dhaka for my Family reason. ', 'approved', '2019-11-14', 2, 0, '2019-12-14', 'no', 1, 1),
(142, 35, 'halfday_leave', ' my grandmother is dead', 'approved', '2019-11-17', 1, 3, '2019-12-17', 'no', 1, 1),
(143, 55, 'halfday_leave', 'I have been Suddenly Sick', 'approved', '2019-11-18', 1, 5, '2019-11-18', 'no', 1, 1),
(145, 79, 'halfday_leave', 'I had to visit my versity for picking up my educational documents', 'approved', '2019-11-18', 1, 4, '2019-11-18', 'no', 1, 1),
(150, 73, 'halfday_leave', 'i was sick', 'approved', '2019-11-19', 1, 3, '2019-11-19', 'no', 1, 1),
(151, 29, 'casual_leave', 'i have some family programs . so i can not come to office for 2 days. Shwarna will handle my architectural  part work .', 'rejected', '2019-11-24', 2, 0, '2019-12-07', 'no', 1, 0),
(152, 35, 'halfday_leave', 'family issue', 'approved', '2019-11-24', 1, 4, '2019-11-28', 'no', 1, 1),
(153, 35, 'casual_leave', 'Family issue', 'approved', '2019-11-24', 2, 0, '2019-11-30', 'no', 1, 1),
(154, 76, 'halfday_leave', 'Leave for 3.30 hours because of emergency family issue.', 'approved', '2019-11-25', 1, 0, '2019-11-25', 'no', 1, 1),
(155, 30, 'casual_leave', 'family problem', 'rejected', '2019-11-26', 1, 0, '2019-09-30', 'no', 1, 0),
(156, 30, 'casual_leave', 'family problem', 'approved', '2019-11-26', 1, 0, '2019-11-30', 'no', 1, 1),
(157, 79, 'urgent_leave', 'My uncle came from abroad. So i had to go for picking him up. ', 'approved', '2019-11-27', 1, 0, '2019-11-27', 'no', 1, 1),
(158, 45, 'halfday_leave', 'Sickness.', 'rejected', '2019-11-28', 1, 4, '2019-11-28', 'no', 1, 1),
(159, 51, 'medical_leave', 'I have need leave for Fever', 'approved', '2019-11-30', 2, 0, '2019-11-30', 'no', 1, 1),
(160, 31, 'halfday_leave', 'shifting my house', 'approved', '2019-12-01', 1, 3, '2019-12-01', 'no', 1, 1),
(161, 31, 'halfday_leave', 'to shifting my room', 'approved', '2019-12-02', 1, 3, '2019-12-02', 'no', 1, 1),
(162, 50, 'casual_leave', 'gfgff', 'pending', '2019-12-02', 1, 0, '2019-12-03', 'no', 0, 0),
(163, 76, 'halfday_leave', 'Leave for 4 hours (09:30AM To 01:30PM) because of family issue.', 'approved', '2019-12-03', 1, 4, '2019-12-04', 'no', 1, 1),
(164, 25, 'casual_leave', 'FOR FAMILY PROGRAMME & COLLECTING PASSPORT  FROM KERANIGANJ', 'approved', '2019-12-04', 2, 0, '2019-12-11', 'no', 1, 1),
(165, 25, 'casual_leave', 'FOR FAMILY PROGRAMME & COLLECTING PASSPORT  FROM KERANIGANJ', 'rejected', '2019-12-04', 2, 0, '2019-12-11', 'no', 1, 0),
(166, 35, 'halfday_leave', 'personal issue', 'approved', '2019-12-07', 1, 3, '2019-12-07', 'no', 1, 1),
(167, 37, 'halfday_leave', 'For personal Reason', 'approved', '2019-12-07', 1, 4, '2019-12-07', 'no', 1, 1),
(168, 29, 'urgent_leave', 'MY FATHER WAS SICK, SO I COULD NOT COME TO OFFICE.', 'approved', '2019-12-07', 3, 0, '2019-11-28', 'no', 1, 1),
(169, 29, 'halfday_leave', 'i have some personal work so i want to leave from 2.30-5.30 pm', 'approved', '2019-12-08', 1, 3, '2019-12-09', 'no', 1, 1),
(170, 30, 'casual_leave', 'to attend sister in lows wadding ceremony at shirajganj', 'approved', '2019-12-08', 5, 0, '2019-12-29', 'no', 1, 1),
(171, 47, 'casual_leave', 'I want to go my home at satkhira', 'approved', '2019-12-08', 2, 0, '2019-12-14', 'no', 1, 1),
(172, 35, 'medical_leave', 'sick', 'approved', '2019-12-10', 2, 0, '2019-12-08', 'no', 1, 1),
(173, 27, 'halfday_leave', 'Sudden illness and headache.', 'approved', '2019-12-10', 1, 4, '2019-10-12', 'no', 1, 1),
(174, 78, 'halfday_leave', 'I have to go for Dropping off my mother and sister to the Bus stand as they are going to our hometown in this yearly vacation. So, I have to take leave from 01.00 PM to 3.30 PM today..', 'approved', '2019-12-11', 1, 2, '2019-12-11', 'no', 1, 1),
(175, 25, 'casual_leave', 'FOR FAMILY PROGRAMME', 'approved', '2019-12-11', 1, 0, '2019-12-12', 'no', 1, 1),
(176, 31, 'other_leave', 'For my versity exam ( design jury )', 'approved', '2019-12-11', 2, 0, '2019-12-17', 'no', 1, 1),
(177, 34, 'casual_leave', 'i have to go home very badly,  for  some of my family problems.', 'approved', '2019-12-11', 2, 0, '2019-12-14', 'no', 1, 1),
(178, 49, 'casual_leave', 'exam  ', 'approved', '2019-12-12', 2, 0, '2019-12-12', 'no', 1, 1),
(179, 25, 'casual_leave', 'FOR FAMILY PROGRAMME ', 'approved', '2019-12-14', 4, 0, '2019-12-28', 'no', 1, 1),
(180, 65, 'casual_leave', 'personal problem', 'rejected', '2019-12-14', 3, 0, '2019-12-17', 'no', 1, 0),
(181, 76, 'urgent_leave', 'Leave for 3.30 hours because of family issue.', 'approved', '2019-12-15', 1, 0, '2019-12-15', 'no', 1, 1),
(182, 78, 'urgent_leave', 'I have to go outside of Dhaka to attend the examination for Driving License which is going to held at Faridpur BRTA. ', 'approved', '2019-12-17', 2, 0, '2019-12-18', 'no', 1, 1),
(183, 65, 'casual_leave', 'personal problem', 'rejected', '2019-12-17', 2, 0, '2019-12-23', 'no', 1, 0),
(184, 56, 'casual_leave', 'Due to my family religious function and family emergency', 'approved', '2019-12-17', 2, 0, '2019-12-21', 'no', 1, 1),
(185, 37, 'casual_leave', 'I REQUEST TO ADJUST MY LEAVE WITH MY CASUAL LEAVE(OCTOBER, DECEMBER 2019 AND JANUARY 2020 ).AND EXTRA WORK (10 SEPTEMBER,20 SEPTEMBER,10 NOVEMBER,06 DECEMBER 2019).PLEASE ADJUST MY LEAVE AND APPROVED MY REQUEST. ', 'pending', '2019-12-19', 7, 0, '2019-12-26', 'no', 0, 0),
(186, 29, 'halfday_leave', 'i was in hospital for my some tests. so i  was for 2 hours.', 'approved', '2019-12-21', 1, 2, '2019-12-21', 'no', 1, 1),
(187, 27, 'other_leave', 'I need a halfday leave of 3.5 hours for tomorrow for some personal work on 23.12.2019 . ', 'pending', '2019-12-22', 1, 0, '2019-12-23', 'no', 0, 0),
(188, 54, 'casual_leave', 'Family  Function', 'pending', '2019-12-23', 2, 0, '2019-12-28', 'no', 0, 0),
(189, 55, 'casual_leave', 'Family  Function', 'pending', '2019-12-23', 2, 0, '2019-12-28', 'no', 0, 0),
(190, 65, 'casual_leave', 'personal problem', 'approved', '2019-12-23', 2, 0, '2019-12-28', 'no', 1, 1),
(191, 37, 'medical_leave', 'i was suffer from diarrhea yesterday. i should not come to office in this reason. pleas consider me from all punishment.(i submit my application yesterday from my home.but its not to done.)', 'approved', '2019-12-24', 1, 0, '2019-12-23', 'no', 1, 1),
(192, 76, 'urgent_leave', 'Leave for 2 days because of family issue.', 'approved', '2019-12-26', 2, 0, '2019-12-23', 'no', 1, 1),
(193, 79, 'halfday_leave', 'I had to associate for Shifting our House from old to new.', 'approved', '2019-12-29', 1, 4, '2019-12-29', 'no', 1, 1),
(194, 73, 'medical_leave', 'I was sick. Got fever', 'approved', '2020-01-05', 1, 0, '2019-12-29', 'no', 1, 1),
(195, 49, 'medical_leave', 'Test', 'rejected', '2020-01-08', 1, 0, '2020-01-09', 'no', 1, 1),
(196, 64, 'casual_leave', 'My niece is going to be married on the date..', 'pending', '2020-01-11', 2, 0, '2020-01-18', 'no', 0, 0),
(197, 63, 'medical_leave', 'I shall go to a doctor for my illness', 'pending', '2020-01-12', 1, 0, '2020-01-21', 'no', 0, 0),
(198, 49, 'halfday_leave', 'I was late due to sickness', 'approved', '2020-01-12', 1, 3, '2020-01-12', 'no', 1, 1),
(199, 33, 'casual_leave', 'Some personal Problems', 'rejected', '2020-01-13', 1, 0, '2019-12-28', 'no', 1, 0),
(200, 33, 'medical_leave', 'Some personal Problems', 'rejected', '2020-01-13', 1, 0, '2019-12-28', 'no', 1, 0),
(201, 33, 'casual_leave', 'Some personal Problems', 'approved', '2020-01-13', 1, 0, '2020-01-09', 'no', 1, 1),
(202, 33, 'casual_leave', 'Some Personal Problems ', 'approved', '2020-01-13', 1, 0, '2019-12-28', 'no', 1, 1),
(203, 46, 'urgent_leave', 'Sister to see a doctor', 'approved', '2020-01-13', 1, 0, '2020-01-14', 'no', 1, 1),
(204, 61, 'other_leave', 'personal', 'approved', '2020-01-13', 2, 0, '2020-01-15', 'no', 1, 1),
(205, 43, 'other_leave', 'IELTS Exam', 'approved', '2020-01-13', 1, 0, '2020-01-15', 'no', 1, 1),
(206, 40, 'urgent_leave', 'Due to some personal emergency I will not be able to come to office.', 'approved', '2020-01-13', 2, 0, '2020-01-14', 'no', 1, 1),
(207, 83, 'halfday_leave', 'I have to Submit my Intern paper at University .', 'approved', '2020-01-14', 1, 4, '2020-01-15', 'no', 1, 1),
(208, 84, 'casual_leave', 'For my elder sisterâ€™s wedding, I need leave for two days.', 'approved', '2020-01-14', 2, 0, '2020-01-15', 'no', 1, 1),
(209, 63, 'casual_leave', 'Rag day Programme ', 'pending', '2020-01-18', 1, 0, '2020-01-19', 'no', 0, 0),
(210, 35, 'halfday_leave', 'personal issue', 'pending', '2020-01-18', 1, 3, '2020-01-18', 'no', 1, 0),
(211, 83, 'other_leave', 'For Bissho Istema , Tongi.', 'pending', '2020-01-18', 1, 0, '2020-01-19', 'no', 1, 0),
(212, 30, 'medical_leave', 'for doctor check up ', 'pending', '2020-01-21', 1, 0, '2020-01-22', 'no', 1, 0);

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
(1, 'Accounts & Finance'),
(2, 'HR & Admin'),
(4, 'IT'),
(5, 'Civil'),
(6, 'Architecture'),
(7, 'MEP'),
(8, 'Planning & Business Development'),
(9, 'MD Secretariat'),
(10, 'GIS');

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
(4, 'Super Admin', 0, 0, 0),
(13, 'IT Expert', 12, 6, 6),
(14, 'Server Administrator', 12, 6, 6),
(15, '3D Modular & CAD Operator', 12, 6, 6),
(16, 'CAD Operator', 12, 6, 6),
(22, 'Senior Coordinator', 12, 6, 6),
(23, 'Junior Coordinator', 12, 6, 6),
(24, 'Coordinator', 12, 6, 6),
(25, 'Team Leader', 12, 6, 6),
(26, 'Junior Drafting', 12, 6, 6),
(27, 'Personal Secretary', 12, 6, 6),
(28, 'Chief of Operation', 12, 6, 6),
(29, 'Director', 12, 6, 6),
(30, 'Executive', 12, 6, 6),
(31, 'Department Head', 20, 20, 20);

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
(37, 33, 'NID23.jpg', 'NID Copy'),
(37, 34, 'Shamima nasrin Bristy.pdf', 'Curriculum vitae'),
(37, 35, 'Picture1.png', 'Picture');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp()
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
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `from_user_id`, `to_user_id`, `msg`, `seen`, `datetime`) VALUES
(28, 70, 45, 'hi apu...\r\nkmn asen?\r\n', 1, '2019-10-20 13:24:29'),
(30, 70, 76, 'kire????', 1, '2019-10-20 13:25:03'),
(31, 45, 70, 'valo nai.', 1, '2019-10-20 13:52:00'),
(32, 70, 45, 'kno apu?\r\n\r\nApu apni jahidul k amar kase pathaisen kno?', 1, '2019-10-20 20:57:39'),
(33, 76, 70, 'Gorib', 1, '2019-10-21 14:15:18'),
(35, 70, 49, 'hi...    kmn asen?', 1, '2019-10-23 17:30:54'),
(36, 62, 33, 'i m not clear for ur application, date is confusing for me. pls clear me on this application.\r\n\r\n \r\nNovember 26, 2019\r\nAuthority\r\nCAD Operator\r\nPrfessional Associate LTD.\r\nAdabor, Dhaka-1207\r\n\r\nSubject: Halfday leave\r\n\r\nDear Sir,\r\n\r\nI am writing this letter to inform and to get permission for the leaves on 2019-02-23 for 5 hours. Family Emergency\r\n\r\nI shall be highly obliged for your act of kindness.\r\n\r\nThanks in anticipation.\r\n\r\n\r\nYour sincerely,\r\nMD. Sharif Hossen', 1, '2019-10-26 20:47:15'),
(37, 62, 25, ' ar. farjana ur date november 26, 2019 is confusing for me. pls cheeked ur application.  \r\nNovember 26, 2019\r\nAuthority\r\nSenior Coordinator\r\nPrfessional Associate LTD.\r\nAdabor, Dhaka-1207\r\n\r\nSubject: Halfday leave\r\n\r\nDear Sir,\r\n\r\nI am writing this letter to inform and to get permission for the leaves on 2019-10-26 for 3 hours. For my family programme ( 1.30pm to 5:30pm) ( in-charge : AR. Tawhida Rahman lisa)\r\n\r\nI shall be highly obliged for your act of kindness.\r\n\r\nThanks in anticipation.\r\n\r\n\r\nYour sincerely,\r\nFarzana Ahmed\r\nSenior Coordinator\r\n', 1, '2019-10-26 20:52:50'),
(39, 62, 34, 'November 26, 2019 is confusing, pls cheek ur application \r\nNovember 26, 2019\r\nAuthority\r\nCAD Operator\r\nPrfessional Associate LTD.\r\nAdabor, Dhaka-1207\r\n\r\nSubject: Casual leave\r\n\r\nDear Sir,\r\n\r\nI am writing this letter to inform and to get permission for the leaves form 2019-10-19 to 2019-10-19 (for 1 days). my mother comes to dhaka some family problems\r\n\r\nI shall be highly obliged for your act of kindness.\r\n\r\nThanks in anticipation.\r\n\r\n\r\nYour sincerely,\r\nMD. Abir Hossan Antor\r\nCAD Operator\r\n', 1, '2019-10-26 21:02:36'),
(40, 62, 32, 'November 26, 2019 is confusing, pls cheek ur application\r\nNovember 26, 2019\r\nAuthority\r\nCAD Operator\r\nPrfessional Associate LTD.\r\nAdabor, Dhaka-1207\r\n\r\nSubject: Casual leave\r\n\r\nDear Sir,\r\n\r\nI am writing this letter to inform and to get permission for the leaves form 2019-10-17 to 2019-10-17 (for 1 days). personal\r\n\r\nI shall be highly obliged for your act of kindness.\r\n\r\nThanks in anticipation.\r\n\r\n\r\nYour sincerely,\r\nMD. Balal Hossan\r\nCAD Operator\r\n', 0, '2019-10-26 21:04:16'),
(41, 62, 40, 'November 26, 2019 is confusing ,pls cheek ur application\r\nNovember 26, 2019\r\nAuthority\r\nJunior Coordinator\r\nPrfessional Associate LTD.\r\nAdabor, Dhaka-1207\r\n\r\nSubject: Casual leave\r\n\r\nDear Sir,\r\n\r\nI am writing this letter to inform and to get permission for the leaves form 2019-10-16 to 2019-10-16 (for 1 days). My elder brother is coming back from UN mission tomorrow morning and he will be leaving the country at night on the same day.\r\n\r\nI shall be highly obliged for your act of kindness.\r\n\r\nThanks in anticipation.\r\n\r\n\r\nYour sincerely,\r\nMD. Salman Islam\r\nJunior Coordinator\r\n', 1, '2019-10-26 21:05:56'),
(42, 62, 34, 'Abir hosen Antor,\r\nur application is not approved become ur leave day is backdate . so 29.10.2019 day u r absent   ', 1, '2019-11-04 15:50:07'),
(50, 37, 42, 'vaiya', 0, '2019-12-01 15:54:43'),
(51, 77, 30, 'please see u common ', 1, '2019-12-17 22:37:41'),
(52, 77, 30, 'à¦¶à§à¦­ à¦¸à¦•à¦¾à¦² ', 1, '2019-12-18 15:24:55'),
(53, 77, 27, 'à¦¶à§à¦­ à¦¸à¦•à¦¾à¦² ', 1, '2019-12-18 15:25:20'),
(54, 77, 34, 'à¦¶à§à¦­ à¦¸à¦•à¦¾à¦² ', 1, '2019-12-18 15:26:20');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE `notice_board` (
  `notice_board_id` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `notice_board_details` mediumtext NOT NULL,
  `notice_board_notice_given_user` int(11) NOT NULL,
  `notice_board_creation_time` datetime DEFAULT current_timestamp(),
  `notice_board_modification_time` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`notice_board_id`, `subject`, `notice_board_details`, `notice_board_notice_given_user`, `notice_board_creation_time`, `notice_board_modification_time`) VALUES
(65, 'Test', 'This a test mail', 1, '2019-10-02 11:34:42', '2019-10-02 11:34:42'),
(66, 'Final File with Job Number', 'Dear all,\r\nIT department requested you several time for your final files and folder. This is the only reason why we are unable to complete our archive done. Please co-operate us for this archive ready.\r\nThank you,\r\nIT Department', 1, '2019-10-22 12:05:41', '2019-10-22 12:05:41'),
(67, 'Important Notice for Animation PC Files Backup', 'The \"C\" Drive of Animation PC is piled up with various animation and video files created by the Architects. We will delete all random files. So , please make your backup if necessary before this weekend.', 1, '2019-10-24 13:05:59', '2019-10-24 13:05:59'),
(68, 'Announcement Reagarding Taking IT Products', 'This is to inform that the entry to the server room is highly restricted and no one should enter the room while there is no one present at that moment. Secondly, no one should take any products or anything from the room without the acknowledgement of the IT personnel that is (BAPPY, FAYSAL, TOWSIF). Moreover, at the time of taking products one must take the product from the IT personnel and must sign in the Log book. Last of all the products must be returned to the IT peronnel.', 1, '2019-11-05 13:50:05', '2019-11-05 13:50:05'),
(69, 'Information Form', 'Please check your mail. A link has been sent please go to the link and  fill up the form by today.\r\n\r\nThankyou', 1, '2019-11-14 16:57:16', '2019-11-14 16:57:16');

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
  `point` int(10) NOT NULL DEFAULT 0,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `role` varchar(30) NOT NULL,
  `image` varchar(400) NOT NULL DEFAULT '',
  `facebook` varchar(100) NOT NULL DEFAULT '',
  `linkedin` varchar(100) NOT NULL DEFAULT '',
  `skype` varchar(100) NOT NULL DEFAULT '',
  `earn_leave` int(11) NOT NULL DEFAULT 0,
  `maternity_leave` int(11) NOT NULL DEFAULT 0,
  `urgent_leave` int(11) NOT NULL DEFAULT 0,
  `earn_leave_year` int(11) NOT NULL DEFAULT 0,
  `casual_leave` int(11) NOT NULL DEFAULT 0,
  `medical_leave` int(11) NOT NULL DEFAULT 0,
  `without_pay_leave` int(11) NOT NULL DEFAULT 0,
  `other_leave` int(11) NOT NULL DEFAULT 0,
  `loan_taken` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `phone`, `blood`, `address`, `point`, `email`, `password`, `department_id`, `designation_id`, `role`, `image`, `facebook`, `linkedin`, `skype`, `earn_leave`, `maternity_leave`, `urgent_leave`, `earn_leave_year`, `casual_leave`, `medical_leave`, `without_pay_leave`, `other_leave`, `loan_taken`) VALUES
(1, 'Admin', '', 'A+', '', 0, 'admin@gmail.com', '123', 1, 4, 'super_admin', '21092019093611156905857201-1User-2-512.png', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 0, 10, 3, 0, 0, 0, 0, 0, 'No'),
(25, 'Farzana Ahmed', '01680071488', 'B+', '', 0, 'farzana_arch@bdpalcon.com', 'pal@2018', 6, 22, 'user', '151020190733011571124781Untitled-2 copy.jpg', '', '', '', 0, 0, 0, 0, 7, 0, 0, 0, '0'),
(27, 'Mahabuba Akter', '', '', '', 0, 'mahabuba_arch@bdpalcon.com', 'pal@2018', 6, 24, 'user', '201020190450391571547039IMG_20190908_104359.jpg', '', '', '', 0, 0, 0, 0, 10, 0, 0, 0, '0'),
(28, 'Laila Borati', '', '', '', 0, 'laila_arch@bdpalcon.com', 'pal@2018', 6, 24, 'user', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(29, 'Jannatul Ferdous Neela', '01794727202', 'O+', '', 0, 'neela_arch@bdpalcon.com', 'pal@2018', 6, 22, 'department_head', '', '', '', '', 0, 0, 3, 0, 0, 1, 0, 0, '0'),
(30, 'Momy Khatun', '01764716264', 'A+', '', 0, 'momy_arch@bdpalcon.com', 'Pal@2018', 6, 24, 'user', '151020190547281571118448Momy-Khatun.jpg', '', '', '', 0, 0, 0, 0, 8, 0, 0, 0, '0'),
(31, 'Sayed MD. Rafiul Islam', '', '', '', 0, 'rafi_arch@bdpalcon.com', 'pal@2018', 6, 15, 'user', '', '', '', '', 0, 0, 0, 0, 1, 0, 0, 2, '0'),
(32, 'MD. Balal Hossan', '01740138515', 'o+', '', 0, 'balal_arch@bdpalcon.com', 'pal@2018', 6, 16, 'user', '', '', '', '', 0, 0, 0, 0, 1, 0, 0, 0, '0'),
(33, 'MD. Sharif Hossen', '01757349886', 'A+', '', 0, 'sharif_arch@bdpalcon.com', 'pal@2018', 6, 16, 'user', '291220190424241577593464my pic.jpg', '', '', '', 0, 0, 0, 0, 2, 0, 0, 0, '0'),
(34, 'MD. Abir Hossan Antor', '', '', '', 0, 'antor_arch@bdpalcon.com', 'pal@2018', 6, 16, 'user', '17102019084145157130170647294691_2215976935312119_6445258675790544896_n.jpg', '', '', '', 0, 0, 0, 0, 4, 0, 0, 0, '0'),
(35, 'Monjeka Biswas', '', '', '', 0, 'monjeka_arch@bdpalcon.com', 'pal@2018', 6, 23, 'user', '', '', '', '', 0, 0, 0, 0, 2, 2, 0, 0, '0'),
(36, 'Tawhida Rahman', '', '', '', 0, 'lisa_arch@bdpalcon.com', 'pal@2018', 6, 24, 'user', '301020190420131572409213pic.jpg', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(37, 'Shamima Nasrin Bristy', '01643031862', 'A+', '', 0, 'bristy_arch@bdpalcon.com', 'pal@2018', 6, 24, 'user', '2210201905152215717213221.jpg', '', '', '', 0, 0, 0, 0, 1, 1, 0, 0, '0'),
(38, 'Nishat Islam', '', '', '', 0, 'nishat_arch@bdpalcon.com', 'pal@2018156350', 6, 26, 'user', '', '', '', '', 0, 0, 0, 0, 0, 2, 0, 0, '0'),
(39, 'Soykot Akando', '', '', '', 0, 'soykot_arch@bdpalcon.com		', 'pal@2018', 6, 26, 'user', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(40, 'MD. Salman Islam', '+8801725432140', 'o+', '', 0, 'salman_arch@bdpalcon.com', 'pal@2018', 6, 23, 'user', '151020190734071571124848PS-3442.jpg', '', '', '', 0, 0, 2, 0, 1, 0, 0, 0, '0'),
(41, 'Shahria Tanzim Billah (Zinia)', '', '', '', 0, 'zinia_planning@bdpalcon.com', 'pal@2018', 8, 24, 'department_head', '', '', 'www.linkedin.com/in/shahria-tanzim-billah-385b3819a', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(42, 'Sazzad Hossain', '', '', '', 0, 'sazzad_planning@bdpalcon.com		', 'pal@2018', 8, 24, 'user', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(43, 'Mital Chakma', '01685250117', '', '', 0, 'mital_gis@bdpalcon.com', 'pal@2018', 8, 23, 'user', '13012020094649157890881020191226_141401.jpg', '', '', '', 0, 0, 0, 0, 0, 0, 0, 1, '0'),
(44, 'Nahid Hossain', '', '', '', 0, 'nahid_gis@bdpalcon.com', 'pal@2018', 8, 23, 'user', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(45, 'Tasmia Yasrib Rifat', '', '', '', 0, 'rifat_mep@bdpalcon.com', 'pal@2018', 7, 24, 'department_head', '17102019035503157128450320190319_190205.jpg', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(46, 'MD. Arifuzzaman', '+8801713795217', '', '', 0, 'arif_mep@bdpalcon.com', 'pal@2018', 7, 23, 'user', '201020190525331571549133Image 300x300.jpg', '', '', '', 0, 0, 1, 0, 0, 0, 0, 0, '0'),
(47, 'MD. A. Al-Mamun', '01746483534', 'B+', '', 0, 'mamun_mep@bdpalcon.com', 'pal@2018', 7, 23, 'user', '', '', '', '', 0, 0, 0, 0, 2, 0, 0, 0, '0'),
(48, 'Sahina Akhter Mamun', '', '', '', 0, 'sahina.it@bdpalcon.com', 'pal@2018', 4, 22, 'user', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(49, 'MD. Majaharul Islam Bappy', '01632099648', 'A-', '', 0, 'bappy.it@bdpalcon.com', 'pal@2018', 4, 23, 'user', '121020191016521570875413_temp.jpg', '', '', '', 0, 0, 0, 0, 2, 1, 0, 0, '0'),
(50, 'Ashraf Ali Siddiqui', '01918419262', 'A+', '', 0, 'ashraf_civil@bdpalcon.com', 'pal3185', 5, 25, 'user', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(51, 'MD. Rabbi Hasan Talukder', '01755196875', '', '', 0, 'rabbi_civil@bdpalcon.com', 'pal@2018', 5, 24, 'user', '19102019103736157148145670857762_2523760434577253_1767876399516876800_n.jpg', '', '', '', 0, 0, 0, 0, 0, 2, 0, 0, '0'),
(54, 'MD. Rezaul Islam', '01726118625', '', '', 0, 'rezaul_civil@bdpalcon.com', 'pal@2018', 5, 24, 'user', '211020190658021571641083reza(100x100).jpg', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(55, 'Most. Sharmin Akter', '01729466151', '', '', 0, 'sharmin_civil@bdpalcon.com', 'pal@2018', 5, 24, 'user', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(56, 'Tonmoy Barua', '8801536427131', 'A+', '', 0, 'tonmoy_civil@bdpalcon.com', 'paltonmoy@2019', 5, 24, 'user', '19102019102554157148075440041088_1975589612505155_6754084463803629568_n.jpg', 'https://www.facebook.com/tonmoy.barua1', '', '', 0, 0, 0, 0, 2, 0, 0, 0, '0'),
(57, 'Jahidul Islam', '', '', '', 0, 'jahidul_civil@bdpalcon.com		', 'pal@2018', 5, 16, 'user', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(59, 'Kakoli Biswas', '', '', '', 0, 'kakoli_arch@bdpalcon.com', 'pal@2018', 6, 29, 'user', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(60, 'Shamsunnaher', '', '', '', 0, 'shamsunnaher_arch@bdpalcon.com', 'pal@2018', 6, 25, 'department_head', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(61, 'MD. Moshiur Rahman', '', '', '', 0, 'moshiur_civil@bdpalcon.com', 'pal@2018', 5, 25, 'department_head', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 2, '0'),
(62, 'Jakia', '01680955079', 'O+', '', 0, 'jakia@bdpalcon.com', 'pal@2018', 1, 29, 'department_head', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(63, 'Jubair Hossain', '01719341367', 'o+', '', 0, 'jubair_mt@bdpalcon.com', 'pal@2018', 2, 30, 'user', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(64, 'MD. Munna', '', '', '', 0, 'munna_acc@bdpalcon.com', 'pal@2018', 1, 30, 'user', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(65, 'MD. Abdullah', '01994460659', '', '', 0, 'abdullah_civil@bdpalcon.com', 'pal@2018', 5, 16, 'user', '051120191013071572948787Abdullah.jpg', '', '', '', 0, 0, 0, 0, 2, 0, 0, 0, '0'),
(70, 'Sakib Jubab', '01683205478', 'B+', '', 0, 'sakib@bdpalcon.com', 'pal@2018', 4, 31, 'department_head', '2010201910544415715688851.jpg', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(73, 'Tasneem Tahura Rufaida', '', '', '', 0, 'rufaida_arch@bdpalcon.com', 'pal@2018', 6, 22, 'user', '180120201055511579344952BeautyPlus_20190507111411046_save 11.jpg', '', '', '', 0, 0, 0, 0, 4, 1, 0, 0, '0'),
(76, 'Sharin Hossain', '', '', '', 0, 'tamanna@bdpalcon.com', 'pal@2019', 1, 27, 'department_head', '', '', '', '', 0, 0, 5, 0, 0, 0, 0, 0, '0'),
(77, 'MD. Mostaq Shakil Chowdhury', '01617622166', 'o+', '', 0, 'shakil@bdpalcon.com', 'loreen2017', 10, 25, 'department_head', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(78, 'Tazvir Ahmed', '01626147232', 'B+', '', 0, 'tazvir@bdpalcon.com', 'pal@2018', 10, 24, 'user', '11122019041126157603748716251751_1280823208674753_2723179719860939364_o.jpg', 'https://www.facebook.com/tazvir.ahmed', 'https://www.linkedin.com/in/tazvir-ahmed-659b43122', '', 0, 0, 2, 0, 0, 0, 0, 0, '0'),
(79, 'Masud Munna', '01620-142390', 'AB-', '', 0, 'munna@bdpalcon.com', 'pal@2018', 10, 24, 'user', '181120191057351574074655123.gif', 'https://www.facebook.com/AHMEDBOSS1020', '', '', 0, 0, 1, 0, 0, 0, 0, 0, '0'),
(81, 'Tanjum Nahar Ansari', '', '', '', 0, 'tanjun_arch@bdpalcon.com', 'pal@2018', 6, 23, 'user', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(82, 'Rahbeen Hossain', '', '', '', 0, 'rahbeen_hr@bdpalcon.com', 'pal@2018', 2, 29, 'super_admin', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(83, 'Tahmina Haque', '01986054185', 'A+', '', 0, 'tahmina_arch@bdpalcon.com', 'pal@2018', 6, 23, 'user', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(84, 'Soykot Akhando', '', '', '', 0, 'soykot_arch@bdpalcon.com', 'pal@2018', 6, 16, 'user', '', '', '', '', 0, 0, 0, 0, 2, 0, 0, 0, '0');

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
  ADD PRIMARY KEY (`user_id`,`department_id`,`designation_id`),
  ADD KEY `designation_id` (`designation_id`),
  ADD KEY `department_id` (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `notice_board`
--
ALTER TABLE `notice_board`
  MODIFY `notice_board_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

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
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`designation_id`) REFERENCES `designation` (`designation_id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
