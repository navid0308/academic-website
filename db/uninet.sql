-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2014 at 05:25 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uninet`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `c_name` varchar(100) DEFAULT NULL,
  `c_code` varchar(10) NOT NULL,
  `credits` int(11) NOT NULL,
  PRIMARY KEY (`c_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_name`, `c_code`, `credits`) VALUES
('Software Engineering', 'CSE327', 3),
('Microprocessor and Assembly', 'CSE331', 3),
('Computer Networking', 'CSE338', 3),
('Internet and Web', 'CSE382', 3);

-- --------------------------------------------------------

--
-- Table structure for table `course_section`
--

CREATE TABLE IF NOT EXISTS `course_section` (
  `c_code` varchar(10) NOT NULL,
  `cs_code` varchar(10) NOT NULL,
  `f_code` varchar(5) NOT NULL,
  `cs_num` int(1) NOT NULL,
  `cs_day` varchar(3) NOT NULL,
  `cs_time` time NOT NULL,
  PRIMARY KEY (`cs_code`),
  KEY `c_code` (`c_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_section`
--

INSERT INTO `course_section` (`c_code`, `cs_code`, `f_code`, `cs_num`, `cs_day`, `cs_time`) VALUES
('CSE327', 'CSE327.1', 'SZZ', 1, 'ST', '08:00:00'),
('CSE331', 'CSE331.3', 'SZZ', 3, 'ST', '16:20:00'),
('CSE338', 'CSE338.1', 'MLE', 1, 'MW', '11:20:00'),
('CSE382', 'CSE382.1', 'SZZ', 1, 'MW', '09:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled`
--

CREATE TABLE IF NOT EXISTS `enrolled` (
  `st_id` varchar(10) NOT NULL,
  `cs_code` varchar(10) NOT NULL,
  KEY `st_id` (`st_id`),
  KEY `cs_code` (`cs_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolled`
--

INSERT INTO `enrolled` (`st_id`, `cs_code`) VALUES
('1130023542', 'CSE382.1'),
('1130023542', 'CSE338.1'),
('1130023542', 'CSE331.3');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `f_name` varchar(30) NOT NULL,
  `f_code` varchar(5) NOT NULL,
  `f_dept` varchar(30) NOT NULL,
  `f_rank` varchar(30) DEFAULT NULL,
  `f_email` varchar(50) DEFAULT NULL,
  `f_passw` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`f_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`f_name`, `f_code`, `f_dept`, `f_rank`, `f_email`, `f_passw`) VALUES
('Dr. Shazzad Hossain', 'SZZ', 'CSE', NULL, 'szz@yahoo.com', '9837aae21173d0d9cf9898aca5079215'),
('Tim Parkson', 'tpn', 'BBA', NULL, 'tparkson@yahoo.com', 'ffa6888cc87a9351ee1c6a64811b0700');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_courses`
--

CREATE TABLE IF NOT EXISTS `faculty_courses` (
  `f_code` int(11) NOT NULL,
  `c_code` varchar(10) NOT NULL,
  `section` int(11) NOT NULL,
  PRIMARY KEY (`f_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_login`
--

CREATE TABLE IF NOT EXISTS `faculty_login` (
  `f_username` varchar(30) NOT NULL,
  `f_pass` varchar(30) NOT NULL,
  `f_acc_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_reg`
--

CREATE TABLE IF NOT EXISTS `faculty_reg` (
  `f_code` int(11) NOT NULL,
  `f_username` varchar(30) NOT NULL,
  `f_pass` varchar(30) NOT NULL,
  `f_acc_code` int(11) NOT NULL,
  PRIMARY KEY (`f_acc_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `course_id` varchar(10) DEFAULT NULL,
  `member_id` varchar(10) DEFAULT NULL,
  `post` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `from_id` varchar(10) DEFAULT NULL,
  `to_id` varchar(10) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messaging tables`
--

CREATE TABLE IF NOT EXISTS `messaging tables` (
  `sender_username` varchar(30) NOT NULL,
  `reciever_username` varchar(30) NOT NULL,
  `message_id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `username` varchar(30) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `post` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `st_name` varchar(30) DEFAULT NULL,
  `st_id` varchar(10) NOT NULL,
  `st_semester` int(2) DEFAULT '1',
  `st_dept` varchar(30) NOT NULL,
  `st_email` varchar(50) NOT NULL,
  `st_passw` varchar(100) NOT NULL,
  `st_image` blob,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_name`, `st_id`, `st_semester`, `st_dept`, `st_email`, `st_passw`, `st_image`) VALUES
('Kamal Ahmed', '1120022102', 1, 'CSE', 'kkhan@yahoo.com', '9ce9b1aafe607ca544245b62b7572f96', NULL),
('Tanzir Kabir', '1130023542', 1, 'CSE', 'mtkabir285@gmail.com', '20f5f1ce54e6b5221c90938d6348f374', NULL),
('tom jones', '1130024542', 0, 'cse', 'tjones@yahoo.com', 'ae23ebf57845e0911b3ba3046a9069e0', NULL),
('Navid Mahmood', '1130431042', 1, 'CSE', 'nvtm@gmail.com', '20f5f1ce54e6b5221c90938d6348f374', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_current_courses`
--

CREATE TABLE IF NOT EXISTS `student_current_courses` (
  `st_id` int(11) NOT NULL,
  `c_code` varchar(10) NOT NULL,
  `f_code` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_previous_courses`
--

CREATE TABLE IF NOT EXISTS `student_previous_courses` (
  `st_id` int(11) NOT NULL,
  `c_code` varchar(10) NOT NULL,
  `grade` varchar(2) NOT NULL,
  `f_code` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE IF NOT EXISTS `threads` (
  `username` varchar(30) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `forum_id` int(11) NOT NULL,
  PRIMARY KEY (`thread_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_section`
--
ALTER TABLE `course_section`
  ADD CONSTRAINT `course_section_ibfk_1` FOREIGN KEY (`c_code`) REFERENCES `courses` (`c_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enrolled`
--
ALTER TABLE `enrolled`
  ADD CONSTRAINT `enrolled_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `student` (`st_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enrolled_ibfk_2` FOREIGN KEY (`cs_code`) REFERENCES `course_section` (`cs_code`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
