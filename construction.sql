-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql205.epizy.com
-- Generation Time: Oct 04, 2020 at 03:23 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_26018906_construction`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int(4) NOT NULL,
  `p_id` int(4) NOT NULL,
  `addby` int(4) NOT NULL,
  `date` text NOT NULL,
  `ac1` varchar(50) NOT NULL,
  `tq1` int(10) NOT NULL,
  `ac2` varchar(50) NOT NULL,
  `tq2` int(10) NOT NULL,
  `ac3` varchar(50) NOT NULL,
  `tq3` int(10) NOT NULL,
  `ac4` varchar(50) NOT NULL,
  `tq4` int(10) NOT NULL,
  `ac5` varchar(50) NOT NULL,
  `tq5` int(10) NOT NULL,
  `isactive` int(3) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dou` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `p_id`, `addby`, `date`, `ac1`, `tq1`, `ac2`, `tq2`, `ac3`, `tq3`, `ac4`, `tq4`, `ac5`, `tq5`, `isactive`, `doi`, `dou`) VALUES
(1, 1, 1, '', 'sdvd', 14, 'cttc', 14, 'tcrdxex', 152, 'cftcvg', 41, 'bubub', 85, 1, '2020-04-11 11:43:34', '2020-04-11 11:43:34'),
(2, 2, 1, '2020-04-25', 'gtrg', 14, 'cttc', 14, 'tcrdxex', 152, '', 41, 'gr', 85, 1, '2020-04-11 11:51:53', '2020-04-11 11:51:53'),
(3, 4, 1, '14-04-2020', 'aaa', 14, 'dddd', 14, 'ssss', 152, 'ffff', 41, 'gggg', 85, 1, '2020-04-15 17:58:24', '2020-04-15 17:58:24'),
(4, 1, 1, '2020-04-02', 'jhyg', 6554, 'ww', 5, 'dd', 441, 'ss', 25, 'xx', 6, 1, '2020-04-22 19:03:35', '2020-04-22 19:03:35'),
(5, 1, 7, '2020-04-22', 'sd', 6554, '', 0, '', 0, '', 0, '', 0, 1, '2020-04-22 19:04:02', '2020-04-22 19:04:02'),
(6, 2, 1, '2020-04-09', 'sd', 984, 'euwuiehd', 54, 'null', 0, 'null', 0, 'null', 0, 1, '2020-04-22 19:10:07', '2020-04-22 19:10:07'),
(7, 2, 1, '2020-04-04', '-', 0, '-', 0, '-', 0, '-', 0, '-', 0, 1, '2020-04-22 21:36:43', '2020-04-22 21:36:43'),
(8, 2, 7, '2020-04-04', '-', 0, '-', 0, '-', 0, '-', 0, '-', 0, 1, '2020-04-22 21:37:55', '2020-04-22 21:37:55'),
(9, 2, 40, '2020-04-23', 'jhyg', 4, '-', 0, '-', 0, '-', 0, '-', 0, 1, '2020-04-23 09:44:46', '2020-04-23 09:44:46'),
(10, 1, 8, '2020-05-01', 'plaster', 134, 'concert ', 25, 'Brick Work', 134, 'Floring', 120, '-', 0, 1, '2020-05-20 13:02:19', '2020-05-20 13:02:19'),
(11, 6, 1, '2020-07-09', 'plaster', 120, 'Floring', 101, 'concert', 52, '-', 0, '-', 0, 1, '2020-07-09 08:19:51', '2020-07-09 08:19:51'),
(12, 4, 52, '2020-08-19', '56', 5, '32', 6, 'Ok', 7, '78', 8, '67', 9, 1, '2020-08-15 04:17:40', '2020-08-15 04:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(50) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dou` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `isactive`, `doi`, `dou`) VALUES
(1, 'aa', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'a', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Asarwaa', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Ashram Road', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Bardolpura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Behrampura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Bhadra', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Bodakdev', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Bopal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'CG Road', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Chandkheda', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Chandlodia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Changodar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'CTM', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'CTM Char Rasta', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Dani Limbada', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Dariapur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Delhi Chakla', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Delhi Darwaja', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Drive In Road', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Dudheshwar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Dudheshwar Road', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Ellis Bridge', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Gandhi Road', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Geeta Mandir', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Geeta Mandir Road', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Ghatlodia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Gheekanta', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Gheekanta Road', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Ghodasar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Gomtipur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Gota', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Gulbai Tekra', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Gurukul', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Hatkeshwar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Income Tax', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Isanpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Jamalpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Jasodanagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Jivraj Park', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Jodhpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Juhapura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Juna Wadaj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Kalupur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Kankaria', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Kathwada', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Khadia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Khamasa', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Khanpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Khokhara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Krishnanagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Kuber Nagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Madhupura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Manek Chowk', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Maninagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Meghani Nagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Memnagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Mirzapur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, ' Naranpura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Naroda', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Narol', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Nava Wadaj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Navarangpura Gam', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Nikol', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Odhav', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Odhav GIDC', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Paldi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Pankore Naka', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Patharkuva', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Raipur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Rakhial', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'Ranip', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Ranna Park', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Ratan Pole', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'Sabarmati', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'Sahijpur Bogha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Sarangpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'Sardar Nagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'Sarkej', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Gandhinagar Highway', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Satellite', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Shah Alam Road', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Shahibagh', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Shahpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Sola', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Subhash Bridge', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Teen Darwaja', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'Thakkarbapa Nagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'Thaltej', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'Usmanpura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'Vasna', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'Vastrapur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'Vatva', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'Vejalpur', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, '', 2, '2020-03-13 10:56:00', '2020-03-13 10:56:00'),
(96, 'xx', 2, '2020-03-23 09:58:29', '2020-03-23 09:58:29'),
(97, 'ff', 2, '2020-03-23 10:00:45', '2020-03-23 10:00:45'),
(98, 'aa', 2, '2020-03-23 12:33:20', '2020-03-23 12:33:20'),
(99, 'ss', 2, '2020-03-23 12:33:49', '2020-03-23 12:33:49'),
(100, 'th', 2, '2020-03-29 14:26:49', '2020-03-29 14:26:49'),
(101, 's', 2, '2020-04-13 15:55:06', '2020-04-13 15:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `owner_contact` int(12) NOT NULL,
  `e_id` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `area_id` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dou` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `area_id`, `isactive`, `doi`, `dou`) VALUES
(1, 'Ahmedabad ', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Amreli', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Anand', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Aravalli', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Banaskantha', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Bharuch', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Bhavnagar', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Botad', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Chhota Udaipur', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Dahod', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Dang', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Devbhoomi Dwarka', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Gandhinagar', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Gir Somnath', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Jamnagar', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Junagadh', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Kutch', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Kheda', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Mahisagar', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Mehsana', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Morbi', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Narmada', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Navsari', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Panchmahal', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Patan', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Porbandar', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Rajkot', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Sabarkantha', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Surat', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Surendranagar', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Tapi', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Vadodara', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Valsad', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Ahmedabad1', 0, 1, '2020-02-25 17:40:45', '2020-02-25 17:40:45'),
(35, '', 0, 1, '2020-03-12 17:06:43', '2020-03-12 17:06:43'),
(36, '', 0, 1, '2020-03-12 17:06:53', '2020-03-12 17:06:53'),
(37, 'fff88', 0, 1, '2020-03-13 10:53:59', '2020-03-13 10:53:59'),
(38, 'Khedakkkkk', 0, 1, '2020-03-13 10:54:25', '2020-03-13 10:54:25'),
(39, '', 0, 1, '2020-03-13 10:54:45', '2020-03-13 10:54:45'),
(40, '', 0, 2, '2020-03-16 09:33:19', '2020-03-16 09:33:19'),
(41, 'Ahmedabad111', 0, 2, '2020-03-29 14:26:37', '2020-03-29 14:26:37'),
(42, '', 0, 2, '2020-04-10 10:47:16', '2020-04-10 10:47:16'),
(43, 'l', 0, 2, '2020-04-13 15:54:39', '2020-04-13 15:54:39'),
(44, 'x', 0, 2, '2020-04-22 15:08:35', '2020-04-22 15:08:35'),
(45, 'we', 0, 2, '2020-07-09 08:16:00', '2020-07-09 08:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `engineer`
--

CREATE TABLE `engineer` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(50) NOT NULL,
  `contact` int(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `e_address` varchar(100) NOT NULL,
  `sec_que_id` int(11) NOT NULL,
  `sec_ans` varchar(50) NOT NULL,
  `utype` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `labor`
--

CREATE TABLE `labor` (
  `l_id` int(4) NOT NULL,
  `id` int(4) NOT NULL,
  `project_id` int(5) NOT NULL,
  `r_date` varchar(16) NOT NULL,
  `Skilled` int(4) NOT NULL,
  `Unskilled` int(4) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dou` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labor`
--

INSERT INTO `labor` (`l_id`, `id`, `project_id`, `r_date`, `Skilled`, `Unskilled`, `isactive`, `doi`, `dou`) VALUES
(1, 8, 1, '2020-04-07', 6, 5, 1, '2020-03-24 18:39:55', '2020-03-24 18:39:55'),
(2, 40, 2, '2020-05-05', 6, 5, 1, '2020-03-30 10:36:02', '2020-03-30 10:36:02'),
(3, 8, 1, '2020-05-01', 1, 14, 1, '2020-03-31 11:24:38', '2020-03-31 11:24:38'),
(4, 1, 3, '2020-04-13', 12, 14, 1, '2020-04-13 12:10:48', '2020-04-13 12:10:48'),
(5, 1, 7, '2020-04-13', 12, 1, 1, '2020-04-13 12:12:24', '2020-04-13 12:12:24'),
(6, 8, 1, '2020-04-07', 3, 0, 1, '2020-04-13 15:54:18', '2020-04-13 15:54:18'),
(7, 8, 2, '2020-04-15', 12, 1, 1, '2020-04-13 16:08:35', '2020-04-13 16:08:35'),
(8, 1, 5, '2020-05-07', 9, 7, 1, '2020-05-08 11:14:20', '2020-05-08 11:14:20'),
(9, 1, 6, '2020-07-09', 7, 5, 1, '2020-07-09 08:17:36', '2020-07-09 08:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dou` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`m_id`, `m_name`, `isactive`, `doi`, `dou`) VALUES
(1, 'KAPCHI 10 MM', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'KAPCHI 20 MM', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'KAPCHI 40 MM', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'DUST', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'STEEL 12 MM', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'STEEL 8 MM', 1, '2020-03-15 11:17:36', '2020-03-15 11:17:36'),
(7, 'block', 2, '2020-03-15 15:39:33', '2020-03-15 15:39:33'),
(8, '', 2, '2020-03-19 14:54:58', '2020-03-19 14:54:58'),
(9, 'ss', 2, '2020-03-23 10:27:23', '2020-03-23 10:27:23'),
(10, 'sdasdcewce', 2, '2020-03-23 10:32:21', '2020-03-23 10:32:21'),
(11, 'STEEL 10 MM', 1, '2020-03-31 10:16:30', '2020-03-31 10:16:30'),
(12, 'STEEL 16 MM', 1, '2020-03-31 10:16:44', '2020-03-31 10:16:44'),
(13, 'STEEL 20 MM', 1, '2020-03-31 10:17:00', '2020-03-31 10:17:00'),
(14, 'STEEL 25 MM', 1, '2020-03-31 10:17:14', '2020-03-31 10:17:14'),
(15, 'STEEL 32 MM', 1, '2020-03-31 10:17:26', '2020-03-31 10:17:26'),
(16, 'BRICKS', 1, '2020-03-31 10:17:38', '2020-03-31 10:17:38'),
(17, 'CEMENT', 1, '2020-03-31 10:17:51', '2020-03-31 10:17:51'),
(18, 'J.C.B', 1, '2020-03-31 10:18:06', '2020-03-31 10:18:06'),
(19, 'SAND', 1, '2020-03-31 10:18:20', '2020-03-31 10:18:20'),
(20, 'TRECTOR', 1, '2020-03-31 10:18:34', '2020-03-31 10:18:34'),
(21, 'TILES', 1, '2020-03-31 10:18:47', '2020-03-31 10:18:47'),
(22, 'PAVER BLOCK', 1, '2020-03-31 10:18:59', '2020-03-31 10:18:59'),
(23, 'CHINA MOJEK', 1, '2020-03-31 10:19:11', '2020-03-31 10:19:11'),
(24, 'VITRIFIED', 1, '2020-03-31 10:19:27', '2020-03-31 10:19:27'),
(25, 'BAYNDING WIRE', 1, '2020-03-31 10:19:42', '2020-03-31 10:19:42'),
(26, 'ELECTRIC MATRIALS', 1, '2020-03-31 10:19:57', '2020-03-31 10:19:57'),
(27, 'WOODEN MATRIALS', 1, '2020-03-31 10:20:13', '2020-03-31 10:20:13'),
(28, 'PETROL / DIESAL EXP', 1, '2020-03-31 10:20:33', '2020-03-31 10:20:33'),
(29, 'STEEL (8,10,12,16,20,25)', 1, '2020-03-31 10:20:50', '2020-03-31 10:20:50'),
(30, 'STEEL 6 MM', 1, '2020-03-31 10:21:14', '2020-03-31 10:21:14');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `plan_id` int(4) NOT NULL,
  `projectid` int(4) NOT NULL,
  `plan_pdf` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dou` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`plan_id`, `projectid`, `plan_pdf`, `isactive`, `doi`, `dou`) VALUES
(1, 3, '1578064360260.pdf', 2, '2020-03-28 11:44:04', '2020-03-28 11:44:04'),
(2, 3, 'Rahul resume.pdf', 1, '2020-03-29 12:01:58', '2020-03-29 12:01:58'),
(3, 3, 'Y 1 YOGESHBHAI (4).pdf', 1, '2020-03-29 12:01:58', '2020-03-29 12:01:58'),
(4, 5, 'boxed-bg.jpg', 1, '2020-04-13 15:57:08', '2020-04-13 15:57:08'),
(5, 1, 'logo9.png', 1, '2020-04-13 16:03:48', '2020-04-13 16:03:48'),
(6, 6, 'Y 1 YOGESHBHAI (4).pdf', 1, '2020-07-09 08:23:09', '2020-07-09 08:23:09'),
(7, 6, 'Y 1 YOGESHBHAI (4).pdf', 2, '2020-07-09 08:24:25', '2020-07-09 08:24:25'),
(8, 6, 'Y 1 YOGESHBHAI (4).pdf', 2, '2020-07-09 08:26:36', '2020-07-09 08:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(5) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `project_address` varchar(100) NOT NULL,
  `city_name` varchar(15) NOT NULL,
  `area_name` varchar(15) NOT NULL,
  `client_name` varchar(30) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `e_id` int(5) NOT NULL,
  `isactive` int(5) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dou` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_address`, `city_name`, `area_name`, `client_name`, `mobile_no`, `e_id`, `isactive`, `doi`, `dou`) VALUES
(1, 'AAsopalav Bungalow ', 'Thaltej,Ahmedabad ', '5', '89', '        Desai Lal', '7777777777', 2, 1, '2020-02-12 11:59:37', '0000-00-00 00:00:00'),
(2, 'Shive Residency Flat', 'Opp. Last busstop , Near shreeji dairy , hanspura,Ahmedabad ', '1', '60', 'Kamalesh Bhai', '2147483647', 2, 1, '2020-02-20 11:59:37', '0000-00-00 00:00:00'),
(3, 'Nirant Resedency', 'Near,dantali village,vadsar,Ahmedabad ', '13', '85', '  Sejalben Amitkumar Prajapati', '2147483647', 7, 1, '2020-02-27 11:59:37', '2020-02-27 11:59:37'),
(4, 'Barot Vas', 'Near jay ambe provision store,barotvas,asarva,Ahmedabad ', '5', '3', '  Prahladbhai', '2147483647', 4, 1, '2020-03-14 15:05:22', '2020-03-14 15:05:22'),
(5, 'water tank', 'Opp. Last busstop , Near shreeji dairy , CTM road, CTM.', '5', '14', '  AMC', '9909912785', 5, 1, '2020-03-14 15:08:41', '2020-03-14 15:08:41'),
(6, 'Dharm Bungle ', 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', '1', '89', 'KalpeshBai desai', '8787251640', 1, 1, '2020-03-14 15:32:41', '2020-03-14 15:32:41'),
(7, 'Radhey society ', 'radhey road,dahegam,surendranagar.', '30', '22', 'Ajaybhai Kori', '9574455001', 1, 1, '2020-03-18 12:57:03', '2020-03-18 12:57:03'),
(8, 'silver star', 'gota', '5', '32', '  raman bhai', '9974065539', 7, 1, '2020-03-24 11:08:57', '2020-03-24 11:08:57'),
(9, 'syamal char rastaa', 'Ahmedabad ', '5', '20', '      Amit Gorvadiya', '9974065538', 6, 1, '2020-03-29 11:54:46', '2020-03-29 11:54:46'),
(10, 'water tank ', 'Bopal', '5', '8', '      prakash bhai ', '8889999977', 7, 1, '2020-04-03 11:58:51', '2020-04-03 11:58:51'),
(11, 'swimmingpool', 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', '18', '17', '    Sejalben Amitkumar Prajapa', '8733991144', 26, 1, '2020-04-13 15:56:23', '2020-04-13 15:56:23'),
(12, 'devi', 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', '17', '16', 'AMC', '8733964564', 11, 1, '2020-07-09 08:32:19', '2020-07-09 08:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `sec_que`
--

CREATE TABLE `sec_que` (
  `sec_id` int(4) NOT NULL,
  `sec_que` varchar(100) NOT NULL,
  `isactive` int(4) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dou` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_que`
--

INSERT INTO `sec_que` (`sec_id`, `sec_que`, `isactive`, `doi`, `dou`) VALUES
(1, 'What is your Birth date?', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'What is your Birth date month?', 1, '2020-03-30 12:56:02', '2020-03-30 12:56:02'),
(3, 'What is your Nickname?', 1, '2020-03-30 12:59:07', '2020-03-30 12:59:07'),
(4, 'What is your Lucky Number?', 1, '2020-03-30 12:59:07', '2020-03-30 12:59:07'),
(5, 'What is your Father\'s name?', 1, '2020-03-30 13:00:34', '2020-03-30 13:00:34'),
(6, 'What is your Phone Number?', 1, '2020-03-30 13:00:34', '2020-03-30 13:00:34'),
(7, 'What is your Favorites car?', 1, '2020-03-30 13:02:12', '2020-03-30 13:02:12'),
(8, 'What is your Surname?', 1, '2020-03-30 13:02:12', '2020-03-30 13:02:12'),
(9, 'Which Mobile you use?', 1, '2020-03-30 13:03:07', '2020-03-30 13:03:07'),
(10, 'What is your mother\'s name?', 1, '2020-03-30 13:03:36', '2020-03-30 13:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `s_id` int(11) NOT NULL,
  `s_name` int(11) NOT NULL,
  `contact` int(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `utype` int(11) NOT NULL,
  `sec_que_id` int(11) NOT NULL,
  `sec_ans` varchar(50) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(5) NOT NULL,
  `project_id` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `bill_no` int(5) NOT NULL,
  `bill_date` text,
  `supplier_name` varchar(50) NOT NULL,
  `material_id` int(5) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `material_image` varchar(50) NOT NULL,
  `isactive` int(5) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dou` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `project_id`, `id`, `bill_no`, `bill_date`, `supplier_name`, `material_id`, `remark`, `material_image`, `isactive`, `doi`, `dou`) VALUES
(1, 7, 7, 4555, '2020-04-13', 'chamunda tredas', 1, 'payment on delay', 'preload.gif', 1, '2020-04-13 16:06:01', '2020-04-13 16:06:01'),
(2, 2, 1, 7474, '2020-04-09', 'Kalpesh bhai,dudeswar road.', 2, 'payment on delivery ', 'IMG-20200701-WA0021.jpg', 1, '2020-04-13 16:11:37', '2020-04-13 16:11:37'),
(3, 1, 1, 2, '2020-04-18', 'Ambika Tredas ', 1, 'payment on delivery ', 'IMG-20200116-WA0004.jpg', 1, '2020-04-19 11:54:56', '2020-04-19 11:54:56'),
(4, 6, 1, 7474, '2020-04-02', 'radhe krishna tredus', 18, 'payment on delay', 'IMG-20200116-WA0002.jpg', 1, '2020-04-19 11:57:52', '2020-04-19 11:57:52'),
(5, 2, 7, 1215, '2020-04-08', 'Kalpesh bhai,dudeswar', 1, 'delivera', 'backblue.gif', 1, '2020-04-19 12:00:46', '2020-04-19 12:00:46'),
(6, 7, 39, 545, '2020-04-20', 'chamunda', 1, 'payment on delivery ', 'IMG-20200116-WA0011.jpeg', 1, '2020-04-19 14:52:21', '2020-04-19 14:52:21'),
(7, 7, 8, 152, '2020-05-08', 'visvkarma,chandlodiya', 21, 'payment on delivery', 'IMG-20170818-WA0003.jpg', 1, '2020-05-08 11:29:33', '2020-05-08 11:29:33'),
(8, 6, 7, 145, '2020-07-09', 'chamunda tredas', 22, 'payment on delay', 'IMG_20180530_085834.jpg', 1, '2020-07-09 09:42:53', '2020-07-09 09:42:53'),
(9, 1, 53, 11308, '2020-08-21', 'Mulchanf', 3, '11', 'Screenshot_20200329-192916.png', 1, '2020-08-15 03:21:22', '2020-08-15 03:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(5) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `change_pass` varchar(10) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `another_mno` varchar(10) NOT NULL,
  `city_name` int(30) NOT NULL,
  `area_name` int(30) NOT NULL,
  `address` text NOT NULL,
  `sec_que` varchar(100) NOT NULL,
  `sec_ans` varchar(50) NOT NULL,
  `utype` int(11) NOT NULL,
  `p_pic` varchar(200) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dou` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `fname`, `email`, `password`, `change_pass`, `mobile_no`, `another_mno`, `city_name`, `area_name`, `address`, `sec_que`, `sec_ans`, `utype`, `p_pic`, `isactive`, `doi`, `dou`) VALUES
(1, 'Jaypal Prajapati ', 'jaypalprajapati1411@gmail.com', 'jp12345', 'jp12345', '8733991144', '9914065538', 1, 89, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Nickname?', 'jayu', 2, 'IMG_20180719_084154.jpg', 1, '2020-03-18 10:09:40', '2020-03-18 10:09:40'),
(2, 'Harsh panchal', 'harsh123@gmail.com', '1510', '1510', '9012345687', '9012345789', 5, 10, 'Thaltejj', 'What is your Father\'s name?', 'harsh', 3, 'in3.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Tushal Ravall', 'tushal78900@gmail.com', '789', '789', '8877777755', '8748589692', 18, 13, 'Ahmedabad ', 'What is your mother\'s name?', 'mummy', 4, 'in7.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Priya Prajapati', 'piyddu1408@gmail.com', 'piyu14', 'piyu14', '8799336622', '9977448855', 30, 20, 'Ratanpar,surendranagar.', 'What is your Nickname?', 'jayu', 3, 'STK-20191201-WA0011.webp', 1, '2020-03-15 09:42:32', '2020-03-15 09:42:32'),
(5, 'Mansukhbhai Desai', 'desaimm12@gmail.com', 'mm', 'mm', '9999999998', '9889889898', 4, 6, 'Ahmedabad ', 'Which Mobile you use?', 'android', 4, 'Screenshot_20171111-155723.png', 1, '2020-03-15 09:58:39', '2020-03-15 09:58:39'),
(6, 'Rahul Prajapati', 'rahul@gmail.com', '149', '149', '8485973333', '8733996655', 2, 20, 'chandlodia,Ahmedabad ', 'What is your Favorites car?', 'swift', 3, 'WhatsApp Image 2018-07-30 at 9.26.57 PM.jpg', 1, '2020-03-15 13:58:38', '2020-03-15 13:58:38'),
(7, 'Enginner ', 'engineer@gmail.com', '123456', '123456', '8733991144', '', 5, 17, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Birth date?', '15', 3, '101_laptop.jpg', 1, '2020-03-16 13:14:15', '2020-03-16 13:14:15'),
(8, 'Supervisor ', 'supervisor@gmail.com', '123456', '123', '9958214852', '8754236951', 1, 15, 'CTM road,Ahmedabad   ', 'What is your Birth date month?', '1', 4, '1473593324324.jpeg', 1, '2020-03-16 13:15:09', '2020-03-16 13:15:09'),
(9, 'Gohel Rahul', 'gohel@gmal.com', '123', '123', '1345678912', '1245687910', 1, 2, 'Ahmedabad ', 'What is your Nickname?', 'raghu', 3, 'as.jpg', 0, '2020-03-16 16:51:23', '2020-03-16 16:51:23'),
(10, 'sup', 'supervisor123@gmail.com', '123', '123', '2147483647', '2147483647', 1, 83, 'Ahmedabad ', 'What is your Father\'s name?', 'super', 4, '1.jpg', 1, '2020-03-17 11:20:10', '2020-03-17 11:20:10'),
(11, 'Prajapati Rahul', 'rahulprajapati12@gmail.com', '1411', '1411', '2147483647', '2147483647', 1, 33, 'Gulbai Tekra,Ahmedabad .', 'What is your Phone Number?', '9876543210', 3, 'IMG-20170519-WA0022.jpg', 1, '2020-03-17 15:08:37', '2020-03-17 15:08:37'),
(12, 'Prajapati Vijay', 'vijayprajapti12@gmail.com', '1411', '1411', '2147483647', '2147483647', 1, 8, 'bodakdev,Ahmedabad ', 'What is your Surname?', 'prajapati', 4, '1512748048578.jpg', 1, '2020-03-17 15:14:55', '2020-03-17 15:14:55'),
(13, 'Vipul Prajapati', 'vipulprajapati12@gmail.com', '123', '123', '2147483647', '2147483647', 1, 32, 'Gota,Ahmedabad .', 'What is your mother\'s name?', 'kanakben', 4, 'IMG-20171124-WA0014.jpg', 1, '2020-03-17 16:19:18', '2020-03-17 16:19:18'),
(14, 'Naresh patel', 'naresh@gmail.com', '147', '147', '2147483647', '2147483647', 3, 6, 'Opp. Last busstop , Near shreeji dairy ', 'What is your Birth date?', '0709', 3, 'IMG_20171017_180627.jpg', 1, '2020-03-21 11:13:00', '2020-03-21 11:13:00'),
(15, 'ram parmar', 'jigar1807@gmail.com', '1807', '1807', '2147483647', '2147483647', 5, 5, 'Near ram mandir,gota gam, Ahmedabad ', 'What is your Favorites car?', 'skoda', 3, 'carousel-8.jpg', 1, '2020-03-21 15:00:24', '2020-03-21 15:00:24'),
(16, 'pratik', 'jaypalprajapatndnii14112@gmail.com', '14', '14', '2147483647', '2147483647', 1, 4, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Birth date month?', '123', 4, '1517079110649.jpg', 1, '2020-03-28 12:28:51', '2020-03-28 12:28:51'),
(17, 'jsdiup', 'jaypalprajwefuewhuapati1411@gmail.com', 'ss', 'ss', '2147483647', '1111111111', 1, 17, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Favorites car?', 'bmw', 4, 'WhatsApp Image 2018-07-30 at 9.27.08 PM.jpg', 1, '2020-03-28 12:33:18', '2020-03-28 12:33:18'),
(18, 'prahladbhai', 'p@gmail.com', '14', '14', '2147483647', '2147483647', 13, 17, 'aa', 'What is your Lucky Number?', '55', 3, 'Screenshot_20171025-130251.png', 1, '2020-03-29 09:16:45', '2020-03-29 09:16:45'),
(19, 'prahladbhai', 'pra@gmail.com', '14', '14', '2147483647', '2147483647', 18, 10, 'wefew', 'What is your Lucky Number?', '10', 4, 'Screenshot_20180125-134528.png', 1, '2020-03-29 09:22:27', '2020-03-29 09:22:27'),
(20, 'bbb', 'aaa@gmail.com', 'aa', 'aa', '2147483647', '2147483647', 41, 19, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'What is your Surname?', 'patel', 3, '16.jpg', 1, '2020-03-29 14:29:08', '2020-03-29 14:29:08'),
(21, 'Mansukhbhai patel', 'mm@gmail.com', '14', '14', '2147483647', '2147483647', 12, 12, 'cwjuhbwc', 'What is your Surname?', '14', 3, 'Screenshot (7).png', 1, '2020-03-31 10:38:17', '2020-03-31 10:38:17'),
(22, 'TUSHAL', 'tusal123@gmail.com', 'aa', 'aa', '9898989812', '7878787812', 4, 3, 'buuu', 'What is your Lucky Number?', '17', 3, 'IMG_20171023_175939.jpg', 1, '2020-03-31 13:34:00', '2020-03-31 13:34:00'),
(23, 'Jaypal ', 'jaypaasadlprajapati1411@gmail.com', 'p1234', 'p1234', '8733991144', '8888888888', 1, 11, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Surname?', 'prajapati', 3, 'Untitled-1 copy.JPG', 1, '2020-03-31 17:27:10', '2020-03-31 17:27:10'),
(24, 'manishaa', 'manisha12@gmail.com', '143', '143', '8733991155', '8733991177', 16, 10, 'Opp. Last busstop , Thaltej village, Thaltej.', 'What is your Phone Number?', '8733991144', 3, 'WIN_20190728_19_06_41_Pro.jpg', 1, '2020-04-02 14:00:27', '2020-04-02 14:00:27'),
(25, 'Jaypal ', 'jaypalprajapati14@gmail.com', 'ss', 'ss', '8733991144', '8733991144', 1, 15, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Birth date?', '1411', 4, 'WIN_20190703_11_23_56_Pro.jpg', 1, '2020-04-02 19:06:56', '2020-04-02 19:06:56'),
(26, 'harsh', 'harshthakkar26119@gmail.com', 'har123', 'har123', '6351693498', '6351693498', 4, 3, 'ghodasar', 'What is your Birth date?', '26', 3, 'IMG-20171011-WA0001.jpg', 1, '2020-04-11 17:01:12', '2020-04-11 17:01:12'),
(27, 'harsh', 'harshthakkar261@gmail.com', 'har123', 'har123', '6351693498', '6351693498', 4, 3, 'ghodasar', 'What is your Birth date?', '26', 3, 'IMG-20171011-WA0001.jpg', 1, '2020-04-11 17:03:09', '2020-04-11 17:03:09'),
(28, 'prahladbhai', 'prahzaladbhai1510@gmail.com', '1411', '1411', '9999999999', '8888888888', 5, 3, 'dwed', 'What is your Birth date?', '15', 3, 'fade.gif', 1, '2020-04-13 10:02:18', '2020-04-13 10:02:18'),
(29, 'qq', 'prahal3adbhai1510@gmail.com', 'qq', 'qq', 'qdw2332434', '3242342fef', 14, 13, 'ef', 'What is your Lucky Number?', 'ee', 3, 'backblue.gif', 1, '2020-04-13 10:21:51', '2020-04-13 10:21:51'),
(30, 'kncjd', 'prahaladssbhai1510@gmail.com', '14', '14', '8733991144', '', 4, 2, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'Which Mobile you use?', 'aa', 3, 'w7.png', 1, '2020-04-13 11:03:48', '2020-04-13 11:03:48'),
(31, 'ketan', 'kkketan.creart@gmail.com', '123456', '123456', '9904273657', '9904273657', 8, 9, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Nickname?', 'demo', 3, '', 1, '2020-04-13 12:01:36', '2020-04-13 12:01:36'),
(32, 'kalpeshpatel', 'kalp@gmail.com', '123456', '123456', '8878778787', '8789256189', 6, 4, 'swdwewecerijfiemcineijen', 'What is your Favorites car?', 'ecew', 3, 'avatar3.png', 1, '2020-04-13 15:49:28', '2020-04-13 15:49:28'),
(33, 'kallp', 'kaldp@gmail.com', '111111', '111111', '5555555555', '4444444444', 6, 4, 'dewwwwwwwwwwwwwewwesww', 'Which Mobile you use?', 'de', 4, 'Zipper-icon.jpg', 1, '2020-04-13 15:53:30', '2020-04-13 15:53:30'),
(34, 'll jj', 'lovelyprajapati1411@gmail.com', 'aaaaaa', 'aaaaaa', '8733991848', '1516516548', 6, 4, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Birth date?', '5', 4, 'm1.png', 1, '2020-04-13 16:02:10', '2020-04-13 16:02:10'),
(35, 'Jaypal', 'prahladbhai1221510@gmail.com', '123456', '123456', '8733991144', '8888888888', 6, 3, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Birth date?', '1', 3, 'Screenshot (15).png', 1, '2020-04-16 19:23:06', '2020-04-16 19:23:06'),
(36, 'pratik', 'jaypalp@gmail.com', '111111', '111111', '8733991144', '', 5, 8, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Surname?', 'l;l', 4, '', 1, '2020-04-17 10:17:33', '2020-04-17 10:17:33'),
(37, 'Tushal Prajapati', 'jaypalprajapatil1411@gmail.com', '777777', '777777', '8733991144', '', 5, 2, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Lucky Number?', '5', 4, 'Screenshot (22).png', 1, '2020-04-17 10:40:58', '2020-04-17 10:40:58'),
(38, 'pratik', 'sdcd@gmail.com', 'qqqqqq', 'qqqqqq', '8733991144', '', 17, 16, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Lucky Number?', 'qq', 4, 'Screenshot (31).png', 1, '2020-04-17 10:43:09', '2020-04-17 10:43:09'),
(39, 'Jaypal ', '', 'aaaaaa', 'aaaaaa', '8733991144', '', 6, 16, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Birth date month?', '5', 3, 'Screenshot (21).png', 1, '2020-04-17 10:45:21', '2020-04-17 10:45:21'),
(40, 'pratik', 'prahaladbhai122510@gmail.com', '222222', '222222', '4444444444', '', 6, 20, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Birth date month?', '44', 3, 'Screenshot (29).png', 1, '2020-04-17 10:47:17', '2020-04-17 10:47:17'),
(41, 'Tushal Prajapati', 'prahaladbhaaai1510@gmail.com', '987654321', '987654321', '8888888888', '5555555555', 17, 16, 'sssssssssssssssssssssssssssssss', 'What is your Nickname?', 'aa', 3, 'Screenshot (37).png', 1, '2020-04-17 10:50:37', '2020-04-17 10:50:37'),
(42, 'Jaypal ', 'prahaladbhai15@gmail.com', '123456', '123456', '2222222222', '', 7, 10, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'Which Mobile you use?', '22', 3, 'Screenshot (45).png', 1, '2020-04-17 10:58:48', '2020-04-17 10:58:48'),
(43, 'pratik', 'prah0@gmail.com', '454545', '454545', '8733991144', '', 21, 16, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Birth date?', '3', 3, 'Screenshot (6).png', 1, '2020-04-17 11:00:05', '2020-04-17 11:00:05'),
(44, 'Vipul Prajapati', 'prahaladbhai1510@gmail.com', '474747', '474747', '5222222222', '', 14, 2, '6666sssssssssssssssssssssssss', 'What is your Birth date?', 'xx', 3, 'Screenshot (23).png', 1, '2020-04-17 11:05:20', '2020-04-17 11:05:20'),
(45, 'hasyaaa', 'harshthakkar26119kj9@gmail.com', '147852', '147852', '8733991144', '', 6, 15, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Favorites car?', '4', 4, 'profile.jpg', 1, '2020-04-17 11:19:20', '2020-04-17 11:19:20'),
(46, 'pratik', 'jaypalprajapishuati1411@gmail.com', '789456', '789456', '8733991144', '', 7, 15, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Birth date month?', '6', 4, 'carousel-1.jpg', 1, '2020-04-17 12:21:38', '2020-04-17 12:21:38'),
(47, 'hanuman', 'jaypalpraja114pati1411@gmail.com', '987654', '987654', '8733991144', '', 1, 6, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Nickname?', '5', 3, 'IMG-20170628-WA0005.jpg', 1, '2020-05-06 15:50:51', '2020-05-06 15:50:51'),
(48, 'pratik', 'jaypalprajapat@gmail.com', '789456', '789456', '8733991144', '', 1, 3, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Birth date?', '2', 3, 'IMG-20170516-WA0001.jpg', 1, '2020-05-06 15:52:55', '2020-05-06 15:52:55'),
(49, 'pratik', 'jaypalprajapati1411@gmail.com', '789456', '789456', '8733991144', '', 1, 3, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Birth date?', '36', 4, 'IMG-20170531-WA0002.jpg', 1, '2020-05-06 15:54:35', '2020-05-06 15:54:35'),
(51, 'Jaypal ', 'harshthakkar261199@gmail.com', '261199', '261199', '8888888888', '', 3, 4, 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.', 'What is your Birth date?', '5', 4, 'Screenshot (88).png', 1, '2020-05-23 17:22:45', '2020-05-23 17:22:45'),
(52, 'Ramesh pawar', 'vanture07@gmail.com', 'vanture123', 'vanture123', '9558748649', '', 3, 5, 'Ganeshpura, near patel no khamchi, anand', 'What is your Nickname?', 'Abc', 4, 'Screenshot_20200726-120735.png', 1, '2020-08-15 00:54:24', '2020-08-15 00:54:24'),
(53, 'Jay Desai', 'jypatel999@gmail.com', 'jay123', 'jay123', '9558748649', '', 1, 10, 'Silvera Oak bussiness, satelite, ahmedabad', 'What is your Lucky Number?', '12', 3, 'Screenshot_20200508-091535.png', 1, '2020-08-15 02:58:36', '2020-08-15 02:58:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `engineer`
--
ALTER TABLE `engineer`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `labor`
--
ALTER TABLE `labor`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `sec_que`
--
ALTER TABLE `sec_que`
  ADD PRIMARY KEY (`sec_id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `engineer`
--
ALTER TABLE `engineer`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `labor`
--
ALTER TABLE `labor`
  MODIFY `l_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `plan_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sec_que`
--
ALTER TABLE `sec_que`
  MODIFY `sec_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
