-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2016 at 07:09 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `employee_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `user_name`, `password`, `status`, `type`) VALUES
(1, 'root', 'admin123', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE IF NOT EXISTS `tbl_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`id`, `client_name`, `email`, `phone`, `address`) VALUES
(1, 'apolo', 'apolo@gmail', '4467239812', 'apolo group'),
(2, 'tcs', 'tcs@gmail', '5634786420', 'tcs group'),
(3, 'flipcart', 'flipcart@gmail', '2345126745', 'flipcart group'),
(4, 'amazone', 'amazone@gmail', '6896452340', 'amazone group'),
(5, 'facebook', 'facebook@gmail', '1345672398', 'facebook group');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departments`
--

CREATE TABLE IF NOT EXISTS `tbl_departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_departments`
--

INSERT INTO `tbl_departments` (`id`, `department`) VALUES
(1, 'coding'),
(2, 'testing'),
(3, 'designing'),
(4, 'accounting');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE IF NOT EXISTS `tbl_employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  `department_id` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`id`, `name`, `email`, `phone`, `address`, `qualification`, `department_id`, `password`, `status`) VALUES
(1, 'nimitha', 'nimithatom', '2345739641', 'tomy(h)', 'btech', '1', 'nimitha123', '1'),
(2, 'priya', 'priya@gmai', '3536672430', 'priya(h)', 'mca', '2', 'priya123', '1'),
(3, 'jeena', 'jeena@gmai', '2563793541', 'pv(h)', 'mca', '2', 'jeena123', '1'),
(4, 'shija', 'shija@gmai', '7034992960', 'tp(h)', 'btech', '1', 'shija123', '1'),
(5, 'pooja', 'pooja@gmai', '1345376543', 'poooja(h)', 'mba', '3', 'pooja123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leaves`
--

CREATE TABLE IF NOT EXISTS `tbl_leaves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(10) NOT NULL,
  `leave_date` date NOT NULL,
  `reson` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_leaves`
--

INSERT INTO `tbl_leaves` (`id`, `employee_id`, `leave_date`, `reson`, `status`) VALUES
(1, '3', '2016-08-10', 'sick', '1'),
(2, '1', '2016-05-05', 'function', '1'),
(3, '2', '2016-04-03', 'function', '1'),
(4, '1', '2016-02-01', 'sick', '1'),
(5, '5', '2016-08-03', 'sick', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

CREATE TABLE IF NOT EXISTS `tbl_projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` varchar(10) NOT NULL,
  `project_name` varchar(20) NOT NULL,
  `starting_date` date NOT NULL,
  `deadline` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `cost` varchar(10) NOT NULL,
  `team_id` varchar(10) NOT NULL,
  `amount_required` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`id`, `client_id`, `project_name`, `starting_date`, `deadline`, `status`, `cost`, `team_id`, `amount_required`) VALUES
(1, '1', 'apolosite', '2016-03-02', '2016-06-06', '1', '20000', '2', '5000'),
(2, '4', 'amazone_app', '2016-03-03', '2016-06-06', '1', '50000', '3', '30000'),
(3, '2', 'tcssite', '2016-04-04', '2016-08-08', '1', '80000', '5', '50000'),
(4, '3', 'flipapp', '2016-05-04', '2016-07-08', '1', '8000', '4', '5000'),
(5, '5', 'facesite', '2016-03-02', '2016-05-04', '1', '2000', '1', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary`
--

CREATE TABLE IF NOT EXISTS `tbl_salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(10) NOT NULL,
  `bs` varchar(10) NOT NULL,
  `ta` varchar(10) NOT NULL,
  `pf` varchar(10) NOT NULL,
  `total_salary` varchar(20) NOT NULL,
  `date_from` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_salary`
--

INSERT INTO `tbl_salary` (`id`, `employee_id`, `bs`, `ta`, `pf`, `total_salary`, `date_from`) VALUES
(1, '2', '1000', '100', '400', '1500', '2016-05-03'),
(2, '5', '1000', '200', '100', '1300', '2016-02-01'),
(3, '4', '1000', '500', '200', '1700', '2016-05-03'),
(4, '2', '1000', '500', '100', '1600', '2016-08-07'),
(5, '3', '1000', '100', '100', '1200', '2016-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE IF NOT EXISTS `tbl_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TL_id` varchar(10) NOT NULL,
  `team_name` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`id`, `TL_id`, `team_name`, `status`) VALUES
(1, '2', 't1', '1'),
(2, '5', 't2', '1'),
(3, '1', 't3', '1'),
(4, '3', 't4', '1'),
(5, '4', 't5', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_members`
--

CREATE TABLE IF NOT EXISTS `tbl_team_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` varchar(10) NOT NULL,
  `employee_id` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_team_members`
--

INSERT INTO `tbl_team_members` (`id`, `team_id`, `employee_id`) VALUES
(1, '1', '1'),
(2, '1', '5'),
(3, '2', '2'),
(4, '2', '3'),
(5, '3', '4'),
(6, '3', '5'),
(7, '5', '2'),
(8, '5', '1'),
(9, '4', '4'),
(10, '4', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_works`
--

CREATE TABLE IF NOT EXISTS `tbl_works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assigned_by` varchar(20) NOT NULL,
  `assigned_to` varchar(20) NOT NULL,
  `project_id` varchar(10) NOT NULL,
  `description` varchar(20) NOT NULL,
  `add_on` date NOT NULL,
  `deadline` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `remarks` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_works`
--

INSERT INTO `tbl_works` (`id`, `assigned_by`, `assigned_to`, `project_id`, `description`, `add_on`, `deadline`, `status`, `remarks`) VALUES
(1, '1', '4', '4', 'amazone', '2016-03-03', '2016-06-06', '1', 'abs'),
(2, '2', '1', '5', 'face', '2016-03-02', '2016-05-04', '1', 'asf'),
(3, '3', '4', '3', 'flip', '2016-05-04', '2016-07-08', '1', 'sfa'),
(4, '4', '2', '2', 'tcs', '2016-04-04', '2016-08-08', '1', 'sbf'),
(5, '5', '3', '1', 'apolo', '2016-03-02', '2016-06-06', '1', 'sbg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
