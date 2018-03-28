-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2018 at 03:33 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
create  database schdb;
use schdb;
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `student_no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `admission_no` varchar(45) DEFAULT NULL,
  `photoname` varchar(45) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `sname` varchar(45) DEFAULT NULL,
  `oname` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `residence` varchar(45) DEFAULT NULL,
  `origin` varchar(45) DEFAULT NULL,
  `nationality` varchar(45) DEFAULT NULL,
  `student_type` varchar(45) DEFAULT NULL,
  `date_joined` varchar(45) DEFAULT NULL,
  `house` varchar(45) DEFAULT NULL,
  `section` varchar(45) DEFAULT NULL,
  `dob` varchar(45) NOT NULL,
  `entrydate` timestamp NULL DEFAULT NULL,
  `class` varchar(15) NOT NULL,
  `classteacher` varchar(45) NOT NULL,
  `religion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`student_no`, `id`, `admission_no`, `photoname`, `fname`, `sname`, `oname`, `gender`, `residence`, `origin`, `nationality`, `student_type`, `date_joined`, `house`, `section`, `dob`, `entrydate`, `class`, `classteacher`, `religion`) VALUES
(2181195, 29, '', 'Kobusingye.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(2181443, 21, '14/34/D/4', 'Kobusingye.jpg', '', 'Kobusingye', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(2182142, 25, '', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(2182440, 11, '12/89', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(2182773, 24, '', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(2182882, 1, '14/D/201', 'Kobusingye.jpg', 'John Baptist', 'Muwuluzi', 'Alex', 'Male', 'Mukono', 'Current', 'Kenya', 'Current', '2011-08-19', 'Kiwanuka', 'Day', '2010-01-04', NULL, 'Senior Two', '', 'Roman Catholic'),
(2183415, 5, '', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(2183692, 31, '', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(2183869, 20, '14/34/D/4', 'Kobusingye.jpg', '', 'Kobusingye', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(2184124, 17, '14/34/D/78', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(2184337, 12, '14/34/D/4', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(2185386, 13, '14/34/D/4', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(2185878, 9, '', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(2186035, 10, '', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(2186284, 8, '', 'KobusingyeMaggy.jpg', 'Maggy', 'Kobusingye', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(2188679, 22, '14/34/D/4', 'Kobusingye.jpg', '', 'Kobusingye', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(2189355, 6, '', '2017-08-06 13.23.27.jpg.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(21810139, 2, '14/34/D/78', '', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(21810953, 23, '', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(21811211, 18, '14/34/D/78', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(21811485, 27, '', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(21811941, 3, '12/89', '', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(21812739, 16, '14/34/D/78', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(21813246, 26, '', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(21813566, 19, '14/34/D/78', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(21814635, 28, '', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(21815791, 7, '', '', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(21816547, 4, '14/34/D/4', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(21817286, 30, '', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(21818179, 15, '14/34/D/4', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(21818856, 14, '14/34/D/4', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic'),
(21819923, 32, '', '.jpg', '', '', '', 'Male', '', 'Current', 'Uganda', 'Current', '2011-08-19', '', 'Boarding', '2011-08-19', NULL, 'Senior One', '', 'Roman Catholic');

-- --------------------------------------------------------

--
-- Table structure for table `exam_result`
--

CREATE TABLE `exam_result` (
  `exam_result_no` int(11) NOT NULL,
  `examCode` varchar(45) DEFAULT NULL,
  `subject_name` varchar(45) DEFAULT NULL,
  `P1` varchar(45) DEFAULT NULL,
  `P2` varchar(45) DEFAULT NULL,
  `P3` varchar(45) DEFAULT NULL,
  `P4` varchar(45) DEFAULT NULL,
  `P5` varchar(45) DEFAULT NULL,
  `P6` varchar(45) DEFAULT NULL,
  `final_score` varchar(45) DEFAULT NULL,
  `grade` varchar(3) NOT NULL,
  `entrydate` varchar(45) DEFAULT NULL,
  `biodata_student_no` int(11) NOT NULL,
  `term` varchar(45) DEFAULT NULL,
  `year` varchar(45) DEFAULT NULL,
  `class` varchar(45) DEFAULT NULL,
  `termPart` varchar(45) DEFAULT NULL,
  `enteredBy` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exam_result`
--

INSERT INTO `exam_result` (`exam_result_no`, `examCode`, `subject_name`, `P1`, `P2`, `P3`, `P4`, `P5`, `P6`, `final_score`, `grade`, `entrydate`, `biodata_student_no`, `term`, `year`, `class`, `termPart`, `enteredBy`) VALUES
(676, '501', 'Physics', '', '', '', '', NULL, NULL, '89', 'D1', NULL, 2182882, NULL, '2019', 'Senior Two', '', NULL),
(677, '112', 'English Language', '', '', '', '', NULL, NULL, '12', 'F9', NULL, 2182882, NULL, '2019', 'Senior Two', '', NULL),
(678, '223', 'C.R.E', '', '', '', '', NULL, NULL, '67', 'C3', NULL, 2182882, NULL, '2019', 'Senior Two', '', NULL),
(679, '208', 'Literature', '', '', '', '', NULL, NULL, '', 'C3', NULL, 2182882, NULL, '2019', 'Senior Two', '', NULL),
(680, '221', 'History', '', '', '', '', NULL, NULL, '', 'C3', NULL, 2182882, NULL, '2019', 'Senior Two', '', NULL),
(681, '001', 'Mathematics', '', '', '', '', NULL, NULL, '', 'C3', NULL, 2182882, NULL, '2019', 'Senior Two', '', NULL),
(682, '553', 'Biology', '', '', '', '', NULL, NULL, '', 'C3', NULL, 2182882, NULL, '2019', 'Senior Two', '', NULL),
(683, '545', 'Chemistry', '', '', '', '', NULL, NULL, '', 'C3', NULL, 2182882, NULL, '2019', 'Senior Two', '', NULL),
(684, '610', 'Fine Art', '', '', '', '', NULL, NULL, '', 'C3', NULL, 2182882, NULL, '2019', 'Senior Two', '', NULL),
(685, '800', 'Commerce', '', '', '', '', NULL, NULL, '', 'C3', NULL, 2182882, NULL, '2019', 'Senior Two', '', NULL),
(686, '225', 'I.R.E', '', '', '', '', NULL, NULL, '', 'C3', NULL, 2182882, NULL, '2019', 'Senior Two', '', NULL),
(687, '335', 'Luganda', '', '', '', '', NULL, NULL, '', 'C3', NULL, 2182882, NULL, '2019', 'Senior Two', '', NULL),
(688, '845', 'Entrepreneurship', '', '', '', '', NULL, NULL, '', 'C3', NULL, 2182882, NULL, '2019', 'Senior Two', '', NULL),
(689, '840', 'Computer Studies', '', '', '', '', NULL, NULL, '', 'C3', NULL, 2182882, NULL, '2019', 'Senior Two', '', NULL),
(690, '527', 'Agriculture', '', '', '', '', NULL, NULL, '', 'C3', NULL, 2182882, NULL, '2019', 'Senior Two', '', NULL),
(691, '336', 'Kiswahili', '', '', '', '', NULL, NULL, '', 'C3', NULL, 2182882, NULL, '2019', 'Senior Two', '', NULL),
(692, '501', 'Physics', '', '', '', '', NULL, NULL, '', '', NULL, 2186284, NULL, '2019', 'Senior Two', '', NULL),
(693, '112', 'English Language', '', '', '', '', NULL, NULL, '', '', NULL, 2186284, NULL, '2019', 'Senior Two', '', NULL),
(694, '223', 'C.R.E', '', '', '', '', NULL, NULL, '', '', NULL, 2186284, NULL, '2019', 'Senior Two', '', NULL),
(695, '208', 'Literature', '', '', '', '', NULL, NULL, '', '', NULL, 2186284, NULL, '2019', 'Senior Two', '', NULL),
(696, '221', 'History', '', '', '', '', NULL, NULL, '', '', NULL, 2186284, NULL, '2019', 'Senior Two', '', NULL),
(697, '001', 'Mathematics', '', '', '', '', NULL, NULL, '', '', NULL, 2186284, NULL, '2019', 'Senior Two', '', NULL),
(698, '553', 'Biology', '', '', '', '', NULL, NULL, '', '', NULL, 2186284, NULL, '2019', 'Senior Two', '', NULL),
(699, '545', 'Chemistry', '', '', '', '', NULL, NULL, '', '', NULL, 2186284, NULL, '2019', 'Senior Two', '', NULL),
(700, '610', 'Fine Art', '', '', '', '', NULL, NULL, '', '', NULL, 2186284, NULL, '2019', 'Senior Two', '', NULL),
(701, '800', 'Commerce', '', '', '', '', NULL, NULL, '', '', NULL, 2186284, NULL, '2019', 'Senior Two', '', NULL),
(702, '225', 'I.R.E', '', '', '', '', NULL, NULL, '', '', NULL, 2186284, NULL, '2019', 'Senior Two', '', NULL),
(703, '335', 'Luganda', '', '', '', '', NULL, NULL, '', '', NULL, 2186284, NULL, '2019', 'Senior Two', '', NULL),
(704, '845', 'Entrepreneurship', '', '', '', '', NULL, NULL, '', '', NULL, 2186284, NULL, '2019', 'Senior Two', '', NULL),
(705, '840', 'Computer Studies', '', '', '', '', NULL, NULL, '', '', NULL, 2186284, NULL, '2019', 'Senior Two', '', NULL),
(706, '527', 'Agriculture', '', '', '', '', NULL, NULL, '', '', NULL, 2186284, NULL, '2019', 'Senior Two', '', NULL),
(707, '336', 'Kiswahili', '', '', '', '', NULL, NULL, '', '', NULL, 2186284, NULL, '2019', 'Senior Two', '', NULL),
(708, '501', 'Physics', '', '', '', '', NULL, NULL, '99', 'D1', NULL, 2183869, NULL, '2020', 'Senior Four', '', NULL),
(709, '112', 'English Language', '', '', '', '', NULL, NULL, '', 'D1', NULL, 2183869, NULL, '2020', 'Senior Four', '', NULL),
(710, '223', 'C.R.E', '', '', '', '', NULL, NULL, '', 'D1', NULL, 2183869, NULL, '2020', 'Senior Four', '', NULL),
(711, '208', 'Literature', '', '', '', '', NULL, NULL, '', 'D1', NULL, 2183869, NULL, '2020', 'Senior Four', '', NULL),
(712, '221', 'History', '', '', '', '', NULL, NULL, '', 'D1', NULL, 2183869, NULL, '2020', 'Senior Four', '', NULL),
(713, '001', 'Mathematics', '', '', '', '', NULL, NULL, '', 'D1', NULL, 2183869, NULL, '2020', 'Senior Four', '', NULL),
(714, '553', 'Biology', '', '', '', '', NULL, NULL, '', 'D1', NULL, 2183869, NULL, '2020', 'Senior Four', '', NULL),
(715, '545', 'Chemistry', '', '', '', '', NULL, NULL, '', 'D1', NULL, 2183869, NULL, '2020', 'Senior Four', '', NULL),
(716, '610', 'Fine Art', '', '', '', '', NULL, NULL, '', 'D1', NULL, 2183869, NULL, '2020', 'Senior Four', '', NULL),
(717, '800', 'Commerce', '', '', '', '', NULL, NULL, '', 'D1', NULL, 2183869, NULL, '2020', 'Senior Four', '', NULL),
(718, '225', 'I.R.E', '', '', '', '', NULL, NULL, '', 'D1', NULL, 2183869, NULL, '2020', 'Senior Four', '', NULL),
(719, '335', 'Luganda', '', '', '', '', NULL, NULL, '', 'D1', NULL, 2183869, NULL, '2020', 'Senior Four', '', NULL),
(720, '845', 'Entrepreneurship', '', '', '', '', NULL, NULL, '', 'D1', NULL, 2183869, NULL, '2020', 'Senior Four', '', NULL),
(721, '840', 'Computer Studies', '', '', '', '', NULL, NULL, '', 'D1', NULL, 2183869, NULL, '2020', 'Senior Four', '', NULL),
(722, '527', 'Agriculture', '', '', '', '', NULL, NULL, '', 'D1', NULL, 2183869, NULL, '2020', 'Senior Four', '', NULL),
(723, '336', 'Kiswahili', '', '', '', '', NULL, NULL, '', 'D1', NULL, 2183869, NULL, '2020', 'Senior Four', '', NULL),
(724, '501', 'Physics', '', '', '', '', NULL, NULL, '21', 'F9', NULL, 2186284, NULL, '2018', 'Senior Four', '', NULL),
(725, '112', 'English Language', '', '', '', '', NULL, NULL, '21', 'F9', NULL, 2186284, NULL, '2018', 'Senior Four', '', NULL),
(726, '223', 'C.R.E', '', '', '', '', NULL, NULL, '', 'F9', NULL, 2186284, NULL, '2018', 'Senior Four', '', NULL),
(727, '208', 'Literature', '', '', '', '', NULL, NULL, '', 'F9', NULL, 2186284, NULL, '2018', 'Senior Four', '', NULL),
(728, '221', 'History', '', '', '', '', NULL, NULL, '', 'F9', NULL, 2186284, NULL, '2018', 'Senior Four', '', NULL),
(729, '001', 'Mathematics', '', '', '', '', NULL, NULL, '', 'F9', NULL, 2186284, NULL, '2018', 'Senior Four', '', NULL),
(730, '553', 'Biology', '', '', '', '', NULL, NULL, '', 'F9', NULL, 2186284, NULL, '2018', 'Senior Four', '', NULL),
(731, '545', 'Chemistry', '', '', '', '', NULL, NULL, '', 'F9', NULL, 2186284, NULL, '2018', 'Senior Four', '', NULL),
(732, '610', 'Fine Art', '', '', '', '', NULL, NULL, '', 'F9', NULL, 2186284, NULL, '2018', 'Senior Four', '', NULL),
(733, '800', 'Commerce', '', '', '', '', NULL, NULL, '', 'F9', NULL, 2186284, NULL, '2018', 'Senior Four', '', NULL),
(734, '225', 'I.R.E', '', '', '', '', NULL, NULL, '', 'F9', NULL, 2186284, NULL, '2018', 'Senior Four', '', NULL),
(735, '335', 'Luganda', '', '', '', '', NULL, NULL, '', 'F9', NULL, 2186284, NULL, '2018', 'Senior Four', '', NULL),
(736, '845', 'Entrepreneurship', '', '', '', '', NULL, NULL, '', 'F9', NULL, 2186284, NULL, '2018', 'Senior Four', '', NULL),
(737, '840', 'Computer Studies', '', '', '', '', NULL, NULL, '', 'F9', NULL, 2186284, NULL, '2018', 'Senior Four', '', NULL),
(738, '527', 'Agriculture', '', '', '', '', NULL, NULL, '', 'F9', NULL, 2186284, NULL, '2018', 'Senior Four', '', NULL),
(739, '336', 'Kiswahili', '', '', '', '', NULL, NULL, '', 'F9', NULL, 2186284, NULL, '2018', 'Senior Four', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam_types`
--

CREATE TABLE `exam_types` (
  `id` int(11) NOT NULL,
  `exam_name` varchar(45) NOT NULL,
  `perctangeContr` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_types`
--

INSERT INTO `exam_types` (`id`, `exam_name`, `perctangeContr`) VALUES
(2, 'MOT', ''),
(3, 'BOT', '');

-- --------------------------------------------------------

--
-- Table structure for table `formerschools`
--

CREATE TABLE `formerschools` (
  `id` int(11) NOT NULL,
  `school` varchar(100) NOT NULL,
  `qualifications` varchar(100) NOT NULL,
  `period` varchar(100) NOT NULL,
  `student_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formerschools`
--

INSERT INTO `formerschools` (`id`, `school`, `qualifications`, `period`, `student_no`) VALUES
(1, 'St Joseph', '', '', 0),
(2, 'St Maria Gorrete', 'UCE', '2016-2019', 210000),
(3, 'St Joseph', 'PLE', '2014-2013', 2182773),
(4, 'St Mark', 'UCE', '2014-2013', 2182773),
(5, 'St Martin', 'UCE', '2014-2013', 2182773),
(6, '', '', '', 2182142),
(7, '', '', '', 2182142),
(8, '', '', '', 2182142),
(9, '', '', '', 21813246),
(10, '', '', '', 21813246),
(11, '', '', '', 21813246),
(12, '', '', '', 21811485),
(13, '', '', '', 21811485),
(14, '', '', '', 21811485),
(15, '', '', '', 21814635),
(16, '', '', '', 21814635),
(17, '', '', '', 21814635),
(18, '', '', '', 2181195),
(19, '', '', '', 2181195),
(20, '', '', '', 2181195),
(21, '', '', '', 21817286),
(22, '', '', '', 21817286),
(23, '', '', '', 21817286),
(24, '', '', '', 2183692),
(25, '', '', '', 2183692),
(26, '', '', '', 2183692),
(27, '', '', '', 21819923),
(28, '', '', '', 21819923),
(29, '', '', '', 21819923);

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `F9from` varchar(45) NOT NULL,
  `F9to` varchar(45) NOT NULL,
  `p8from` varchar(45) NOT NULL,
  `p8to` varchar(45) NOT NULL,
  `p7from` varchar(45) NOT NULL,
  `p7to` varchar(45) NOT NULL,
  `c6from` varchar(45) NOT NULL,
  `c6to` varchar(45) NOT NULL,
  `c5from` varchar(45) NOT NULL,
  `c5to` varchar(45) NOT NULL,
  `c4from` varchar(45) NOT NULL,
  `c4to` varchar(45) NOT NULL,
  `c3from` varchar(45) NOT NULL,
  `c3to` varchar(45) NOT NULL,
  `d2from` varchar(45) NOT NULL,
  `d2to` varchar(45) NOT NULL,
  `d1from` varchar(45) NOT NULL,
  `d1to` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `F9from`, `F9to`, `p8from`, `p8to`, `p7from`, `p7to`, `c6from`, `c6to`, `c5from`, `c5to`, `c4from`, `c4to`, `c3from`, `c3to`, `d2from`, `d2to`, `d1from`, `d1to`) VALUES
(2, '0', '39', '40', '44', '45', '49', '50', '54', '55', '59', '60', '64', '65', '69', '70', '79', '80', '100');

-- --------------------------------------------------------

--
-- Table structure for table `medicalproblem`
--

CREATE TABLE `medicalproblem` (
  `id` int(11) NOT NULL,
  `medicalProblem` longtext,
  `biodata_student_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalproblem`
--

INSERT INTO `medicalproblem` (`id`, `medicalProblem`, `biodata_student_no`) VALUES
(1, 'Malaria', 21813566),
(2, 'Asthama', 21819923),
(3, 'Malaria', 2182882);

-- --------------------------------------------------------

--
-- Table structure for table `nok`
--

CREATE TABLE `nok` (
  `nok_no` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `sname` varchar(45) DEFAULT NULL,
  `oname` varchar(45) DEFAULT NULL,
  `phone_1` varchar(45) DEFAULT NULL,
  `phone_2` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `entrydate` varchar(45) DEFAULT NULL,
  `biodata_student_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nok`
--

INSERT INTO `nok` (`nok_no`, `fname`, `sname`, `oname`, `phone_1`, `phone_2`, `email`, `entrydate`, `biodata_student_no`) VALUES
(1, 'Martin', 'Walakira', NULL, '', '', '', NULL, 2188679),
(2, '', '', NULL, '', '', '', NULL, 21810953),
(3, '', '', NULL, '', '', '', NULL, 2182773),
(4, '', '', NULL, '', '', '', NULL, 2182142),
(5, '', '', NULL, '', '', '', NULL, 21813246),
(6, '', '', NULL, '', '', '', NULL, 21811485),
(7, '', '', NULL, '', '', '', NULL, 21814635),
(8, '', '', NULL, '', '', '', NULL, 2181195),
(9, '', '', NULL, '', '', '', NULL, 21817286),
(10, '', '', NULL, '', '', '', NULL, 2183692),
(11, '', '', NULL, '', '', '', NULL, 21819923);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parent_no` int(11) NOT NULL,
  `sname` varchar(45) DEFAULT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `oname` varchar(45) DEFAULT NULL,
  `residence` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `phone_1` varchar(45) DEFAULT NULL,
  `phone_2` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `origin` varchar(45) DEFAULT NULL,
  `entrydate` varchar(45) DEFAULT NULL,
  `biodata_student_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parent_no`, `sname`, `fname`, `oname`, `residence`, `gender`, `phone_1`, `phone_2`, `email`, `origin`, `entrydate`, `biodata_student_no`) VALUES
(1, 'Tom', 'Tonny', '', '', 'Father', '', '', '', NULL, NULL, 21813566),
(2, '', '', '', '', 'Father', '', '', '', NULL, NULL, 2183869),
(3, '', '', '', '', 'Father', '', '', '', NULL, NULL, 2181443),
(4, '', '', '', '', 'Father', '', '', '', NULL, NULL, 2188679),
(5, '', '', '', '', 'Father', '', '', '', NULL, NULL, 21810953),
(6, '', '', '', '', 'Father', '', '', '', NULL, NULL, 2182773),
(7, '', '', '', '', 'Father', '', '', '', NULL, NULL, 2182142),
(8, '', '', '', '', 'Father', '', '', '', NULL, NULL, 21813246),
(9, '', '', '', '', 'Father', '', '', '', NULL, NULL, 21811485),
(10, '', '', '', '', 'Father', '', '', '', NULL, NULL, 21814635),
(11, '', '', '', '', 'Father', '', '', '', NULL, NULL, 2181195),
(12, '', '', '', '', 'Father', '', '', '', NULL, NULL, 21817286),
(13, '', '', '', '', 'Father', '', '', '', NULL, NULL, 2183692),
(14, '', '', '', '', 'Father', '', '', '', NULL, NULL, 21819923),
(15, 'John', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2182882);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `photoId` int(45) NOT NULL,
  `photoname` varchar(45) NOT NULL,
  `photocontent` longblob NOT NULL,
  `student_student_no` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pleresult`
--

CREATE TABLE `pleresult` (
  `id` int(11) NOT NULL,
  `indexNo` varchar(10) NOT NULL,
  `schoolName` varchar(45) NOT NULL,
  `eng` varchar(45) DEFAULT NULL,
  `sci` varchar(45) DEFAULT NULL,
  `sst` varchar(45) DEFAULT NULL,
  `math` varchar(45) DEFAULT NULL,
  `student_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pleresult`
--

INSERT INTO `pleresult` (`id`, `indexNo`, `schoolName`, `eng`, `sci`, `sst`, `math`, `student_no`) VALUES
(1, '', '', 'cp', '34', '56', '12', 0),
(2, 'U1942', 'St JosepH', 'D1', 'C3', 'D1', 'D1', 0),
(3, 'U1942', 'St JosepH', 'D1', 'C3', 'D1', 'D1', 21813246),
(4, '', '', '', '', '', '', 21811485),
(5, '', '', '', '', '', '', 21814635),
(6, '', '', '', '', '', '', 2181195),
(7, '', '', '', '', '', '', 21817286),
(8, '', '', '', '', '', '', 2183692),
(9, '', '', '', '', '', '', 21819923),
(10, '2', '', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_no` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone_1` varchar(45) DEFAULT NULL,
  `phone_2` varchar(45) DEFAULT NULL,
  `logo` varchar(45) DEFAULT NULL,
  `entrydate` varchar(45) DEFAULT NULL,
  `motto` varchar(45) DEFAULT NULL,
  `headerImage` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `short` varchar(45) NOT NULL,
  `noPapers` varchar(45) NOT NULL DEFAULT '1',
  `sub_code` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `sub_name`, `short`, `noPapers`, `sub_code`) VALUES
(1, 'Physics', 'PHY', '4', '501'),
(2, 'English Language', 'ENG', '1', '112'),
(3, 'C.R.E', 'CRE', '1', '223'),
(4, 'Literature', 'LIT', '1', '208'),
(5, 'History', 'HIST', '1', '221'),
(6, 'Mathematics', 'MATH', '1', '001'),
(7, 'Biology', 'BIO', '1', '553'),
(8, 'Chemistry', 'CHEM', '1', '545'),
(9, 'Fine Art', 'ART', '1', '610'),
(10, 'Commerce', 'COM', '1', '800'),
(11, 'I.R.E', 'IRE', '1', '225'),
(12, 'Luganda', 'LUG', '1', '335'),
(13, 'Entrepreneurship', 'ENT', '1', '845'),
(14, 'Computer Studies', 'COMP', '1', '840'),
(15, 'Agriculture', 'AGR', '1', '527'),
(16, 'Kiswahili', 'KIS', '1', '336');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_no` int(11) NOT NULL,
  `sname` varchar(45) DEFAULT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `oname` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `residence` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `phone_1` varchar(45) DEFAULT NULL,
  `phone_2` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `entrydate` varchar(45) DEFAULT NULL,
  `school_school_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uceresults`
--

CREATE TABLE `uceresults` (
  `id` int(11) NOT NULL,
  `indexNo` varchar(10) NOT NULL,
  `phy` varchar(45) DEFAULT NULL,
  `chem` varchar(45) DEFAULT NULL,
  `bio` varchar(45) DEFAULT NULL,
  `math` varchar(45) DEFAULT NULL,
  `hist` varchar(45) DEFAULT NULL,
  `geo` varchar(45) DEFAULT NULL,
  `eng` varchar(45) NOT NULL,
  `cre` varchar(45) NOT NULL,
  `opt1` varchar(45) DEFAULT NULL,
  `mark` varchar(45) DEFAULT NULL,
  `opt2` varchar(45) DEFAULT NULL,
  `mark2` varchar(45) DEFAULT NULL,
  `student_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uceresults`
--

INSERT INTO `uceresults` (`id`, `indexNo`, `phy`, `chem`, `bio`, `math`, `hist`, `geo`, `eng`, `cre`, `opt1`, `mark`, `opt2`, `mark2`, `student_no`) VALUES
(1, '', 'D1', 'D1', 'D1', '', '', 'C3', 'D1', '', 'Art', '', '', 'C3', 21817286),
(2, '', 'D1', 'D1', 'D1', '', '', 'C3', 'D1', '', 'Art', '', '', 'C3', 2183692),
(3, '', '', '', '', '', '', '', '', '', '', '', '', '', 21819923),
(4, '', '89', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, 2182882);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_no` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `full_name` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `level` varchar(45) DEFAULT NULL,
  `phone_1` varchar(45) NOT NULL,
  `entrydate` varchar(45) DEFAULT NULL,
  `school_school_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `profile_image` varchar(200) DEFAULT NULL,
  `profile_image_small` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`student_no`),
  ADD UNIQUE KEY `unqiueno` (`id`);

--
-- Indexes for table `exam_result`
--
ALTER TABLE `exam_result`
  ADD PRIMARY KEY (`exam_result_no`,`biodata_student_no`),
  ADD KEY `fk_exam_result_biodata1_idx` (`biodata_student_no`);

--
-- Indexes for table `exam_types`
--
ALTER TABLE `exam_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formerschools`
--
ALTER TABLE `formerschools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicalproblem`
--
ALTER TABLE `medicalproblem`
  ADD PRIMARY KEY (`id`,`biodata_student_no`),
  ADD KEY `fk_medicalProblem_biodata1_idx` (`biodata_student_no`);

--
-- Indexes for table `nok`
--
ALTER TABLE `nok`
  ADD PRIMARY KEY (`nok_no`,`biodata_student_no`),
  ADD KEY `fk_nok_biodata1_idx` (`biodata_student_no`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parent_no`,`biodata_student_no`),
  ADD KEY `fk_parent_biodata1_idx` (`biodata_student_no`);

--
-- Indexes for table `pleresult`
--
ALTER TABLE `pleresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_no`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_no`,`school_school_no`),
  ADD KEY `fk_teacher_school1_idx` (`school_school_no`);

--
-- Indexes for table `uceresults`
--
ALTER TABLE `uceresults`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_no` (`student_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_no`,`school_school_no`),
  ADD KEY `fk_user_school_idx` (`school_school_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `exam_result`
--
ALTER TABLE `exam_result`
  MODIFY `exam_result_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=740;
--
-- AUTO_INCREMENT for table `exam_types`
--
ALTER TABLE `exam_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `formerschools`
--
ALTER TABLE `formerschools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `medicalproblem`
--
ALTER TABLE `medicalproblem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nok`
--
ALTER TABLE `nok`
  MODIFY `nok_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `parent_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pleresult`
--
ALTER TABLE `pleresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `uceresults`
--
ALTER TABLE `uceresults`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `exam_result`
--
ALTER TABLE `exam_result`
  ADD CONSTRAINT `fk_exam_result_biodata1` FOREIGN KEY (`biodata_student_no`) REFERENCES `biodata` (`student_no`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `medicalproblem`
--
ALTER TABLE `medicalproblem`
  ADD CONSTRAINT `fk_medicalProblem_biodata1` FOREIGN KEY (`biodata_student_no`) REFERENCES `biodata` (`student_no`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nok`
--
ALTER TABLE `nok`
  ADD CONSTRAINT `fk_nok_biodata1` FOREIGN KEY (`biodata_student_no`) REFERENCES `biodata` (`student_no`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `fk_parent_biodata1` FOREIGN KEY (`biodata_student_no`) REFERENCES `biodata` (`student_no`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `fk_teacher_school1` FOREIGN KEY (`school_school_no`) REFERENCES `school` (`school_no`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `uceresults`
--
ALTER TABLE `uceresults`
  ADD CONSTRAINT `uceresults_ibfk_1` FOREIGN KEY (`student_no`) REFERENCES `biodata` (`student_no`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_school` FOREIGN KEY (`school_school_no`) REFERENCES `school` (`school_no`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
