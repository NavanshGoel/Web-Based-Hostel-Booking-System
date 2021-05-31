-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 05:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `block_a`
--

CREATE TABLE `block_a` (
  `block` varchar(1) NOT NULL,
  `room_id` varchar(6) NOT NULL,
  `beds` int(2) NOT NULL,
  `type` varchar(8) NOT NULL,
  `beds_available` int(2) NOT NULL,
  `floor` int(2) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `block_a`
--

INSERT INTO `block_a` (`block`, `room_id`, `beds`, `type`, `beds_available`, `floor`, `status`) VALUES
('A', 'A-101', 2, 'AC', 2, 1, 'open'),
('A', 'A-102', 2, 'AC', 2, 1, 'open'),
('A', 'A-103', 2, 'AC', 2, 1, 'open'),
('A', 'A-104', 2, 'AC', 2, 1, 'open'),
('A', 'A-105', 2, 'AC', 2, 1, 'open'),
('A', 'A-106', 2, 'NON AC', 2, 1, 'open'),
('A', 'A-107', 2, 'NON AC', 2, 1, 'open'),
('A', 'A-108', 2, 'NON AC', 2, 1, 'open'),
('A', 'A-109', 2, 'NON AC', 2, 1, 'open'),
('A', 'A-110', 2, 'NON AC', 2, 1, 'open'),
('A', 'A-111', 3, 'AC', 3, 1, 'open'),
('A', 'A-112', 3, 'AC', 3, 1, 'open'),
('A', 'A-113', 3, 'AC', 3, 1, 'open'),
('A', 'A-114', 3, 'AC', 3, 1, 'open'),
('A', 'A-115', 3, 'AC', 3, 1, 'open'),
('A', 'A-116', 3, 'NON AC', 3, 1, 'open'),
('A', 'A-117', 3, 'NON AC', 3, 1, 'open'),
('A', 'A-118', 3, 'NON AC', 3, 1, 'open'),
('A', 'A-119', 3, 'NON AC', 3, 1, 'open'),
('A', 'A-120', 3, 'NON AC', 3, 1, 'open'),
('A', 'A-121', 4, 'AC', 4, 1, 'open'),
('A', 'A-122', 4, 'AC', 4, 1, 'open'),
('A', 'A-123', 4, 'AC', 4, 1, 'open'),
('A', 'A-124', 4, 'AC', 4, 1, 'open'),
('A', 'A-125', 4, 'AC', 4, 1, 'open'),
('A', 'A-126', 4, 'NON AC', 4, 1, 'open'),
('A', 'A-127', 4, 'NON AC', 4, 1, 'open'),
('A', 'A-128', 4, 'NON AC', 4, 1, 'open'),
('A', 'A-129', 4, 'NON AC', 4, 1, 'open'),
('A', 'A-130', 4, 'NON AC', 4, 1, 'open'),
('A', 'A-201', 2, 'AC', 2, 2, 'open'),
('A', 'A-202', 2, 'AC', 2, 2, 'open'),
('A', 'A-203', 2, 'AC', 2, 2, 'open'),
('A', 'A-204', 2, 'AC', 2, 2, 'open'),
('A', 'A-205', 2, 'AC', 2, 2, 'open'),
('A', 'A-206', 2, 'NON AC', 2, 2, 'open'),
('A', 'A-207', 2, 'NON AC', 2, 2, 'open'),
('A', 'A-208', 2, 'NON AC', 2, 2, 'open'),
('A', 'A-209', 2, 'NON AC', 2, 2, 'open'),
('A', 'A-210', 2, 'NON AC', 2, 2, 'open'),
('A', 'A-211', 3, 'AC', 3, 2, 'open'),
('A', 'A-212', 3, 'AC', 3, 2, 'open'),
('A', 'A-213', 3, 'AC', 3, 2, 'open'),
('A', 'A-214', 3, 'AC', 3, 2, 'open'),
('A', 'A-215', 3, 'AC', 3, 2, 'open'),
('A', 'A-216', 3, 'NON AC', 3, 2, 'open'),
('A', 'A-217', 3, 'NON AC', 3, 2, 'open'),
('A', 'A-218', 3, 'NON AC', 3, 2, 'open'),
('A', 'A-219', 3, 'NON AC', 3, 2, 'open'),
('A', 'A-220', 3, 'NON AC', 3, 2, 'open'),
('A', 'A-221', 4, 'AC', 4, 2, 'open'),
('A', 'A-222', 4, 'AC', 2, 2, 'open'),
('A', 'A-223', 4, 'AC', 4, 2, 'open'),
('A', 'A-224', 4, 'AC', 4, 2, 'open'),
('A', 'A-225', 4, 'AC', 4, 2, 'open'),
('A', 'A-226', 4, 'NON AC', 4, 2, 'open'),
('A', 'A-227', 4, 'NON AC', 4, 2, 'open'),
('A', 'A-228', 4, 'NON AC', 4, 2, 'open'),
('A', 'A-229', 4, 'NON AC', 4, 2, 'open'),
('A', 'A-230', 4, 'NON AC', 4, 2, 'open'),
('A', 'A-301', 2, 'AC', 2, 3, 'open'),
('A', 'A-302', 2, 'AC', 2, 3, 'open'),
('A', 'A-303', 2, 'AC', 1, 3, 'open'),
('A', 'A-304', 2, 'AC', 2, 3, 'open'),
('A', 'A-305', 2, 'AC', 2, 3, 'open'),
('A', 'A-306', 2, 'NON AC', 2, 3, 'open'),
('A', 'A-307', 2, 'NON AC', 2, 3, 'open'),
('A', 'A-308', 2, 'NON AC', 2, 3, 'open'),
('A', 'A-309', 2, 'NON AC', 2, 3, 'open'),
('A', 'A-310', 2, 'NON AC', 2, 3, 'open'),
('A', 'A-311', 3, 'AC', 3, 3, 'open'),
('A', 'A-312', 3, 'AC', 3, 3, 'open'),
('A', 'A-313', 3, 'AC', 3, 3, 'open'),
('A', 'A-314', 3, 'AC', 3, 3, 'open'),
('A', 'A-315', 3, 'AC', 3, 3, 'open'),
('A', 'A-316', 3, 'NON AC', 3, 3, 'open'),
('A', 'A-317', 3, 'NON AC', 3, 3, 'open'),
('A', 'A-318', 3, 'NON AC', 3, 3, 'open'),
('A', 'A-319', 3, 'NON AC', 3, 3, 'open'),
('A', 'A-320', 3, 'NON AC', 3, 3, 'open'),
('A', 'A-321', 4, 'AC', 4, 3, 'open'),
('A', 'A-322', 4, 'AC', 4, 3, 'open'),
('A', 'A-323', 4, 'AC', 4, 3, 'open'),
('A', 'A-324', 4, 'AC', 3, 3, 'open'),
('A', 'A-325', 4, 'AC', 3, 3, 'open'),
('A', 'A-326', 4, 'NON AC', 4, 3, 'open'),
('A', 'A-327', 4, 'NON AC', 4, 3, 'open'),
('A', 'A-328', 4, 'NON AC', 4, 3, 'open'),
('A', 'A-329', 4, 'NON AC', 4, 3, 'open'),
('A', 'A-330', 4, 'NON AC', 4, 3, 'open'),
('A', 'A-401', 2, 'AC', 2, 4, 'open'),
('A', 'A-402', 2, 'AC', 2, 4, 'open'),
('A', 'A-403', 2, 'AC', 2, 4, 'open'),
('A', 'A-404', 2, 'AC', 2, 4, 'open'),
('A', 'A-405', 2, 'AC', 2, 4, 'open'),
('A', 'A-406', 2, 'NON AC', 2, 4, 'open'),
('A', 'A-407', 2, 'NON AC', 2, 4, 'open'),
('A', 'A-408', 2, 'NON AC', 2, 4, 'open'),
('A', 'A-409', 2, 'NON AC', 2, 4, 'open'),
('A', 'A-410', 2, 'NON AC', 2, 4, 'open'),
('A', 'A-411', 3, 'AC', 3, 4, 'open'),
('A', 'A-412', 3, 'AC', 3, 4, 'open'),
('A', 'A-413', 3, 'AC', 3, 4, 'open'),
('A', 'A-414', 3, 'AC', 3, 4, 'open'),
('A', 'A-415', 3, 'AC', 3, 4, 'open'),
('A', 'A-416', 3, 'NON AC', 3, 4, 'open'),
('A', 'A-417', 3, 'NON AC', 3, 4, 'open'),
('A', 'A-418', 3, 'NON AC', 3, 4, 'open'),
('A', 'A-419', 3, 'NON AC', 3, 4, 'open'),
('A', 'A-420', 3, 'NON AC', 3, 4, 'open'),
('A', 'A-421', 4, 'AC', 4, 4, 'open'),
('A', 'A-422', 4, 'AC', 4, 4, 'open'),
('A', 'A-423', 4, 'AC', 4, 4, 'open'),
('A', 'A-424', 4, 'AC', 4, 4, 'open'),
('A', 'A-425', 4, 'AC', 4, 4, 'open'),
('A', 'A-426', 4, 'NON AC', 4, 4, 'open'),
('A', 'A-427', 4, 'NON AC', 4, 4, 'open'),
('A', 'A-428', 4, 'NON AC', 4, 4, 'open'),
('A', 'A-429', 4, 'NON AC', 4, 4, 'open'),
('A', 'A-430', 4, 'NON AC', 4, 4, 'open'),
('A', 'A-501', 2, 'AC', 2, 5, 'open'),
('A', 'A-502', 2, 'AC', 2, 5, 'open'),
('A', 'A-503', 2, 'AC', 2, 5, 'open'),
('A', 'A-504', 2, 'AC', 2, 5, 'open'),
('A', 'A-505', 2, 'AC', 2, 5, 'open'),
('A', 'A-506', 2, 'NON AC', 2, 5, 'open'),
('A', 'A-507', 2, 'NON AC', 2, 5, 'open'),
('A', 'A-508', 2, 'NON AC', 2, 5, 'open'),
('A', 'A-509', 2, 'NON AC', 2, 5, 'open'),
('A', 'A-510', 2, 'NON AC', 2, 5, 'open'),
('A', 'A-511', 3, 'AC', 3, 5, 'open'),
('A', 'A-512', 3, 'AC', 3, 5, 'open'),
('A', 'A-513', 3, 'AC', 3, 5, 'open'),
('A', 'A-514', 3, 'AC', 3, 5, 'open'),
('A', 'A-515', 3, 'AC', 2, 5, 'open'),
('A', 'A-516', 3, 'NON AC', 3, 5, 'open'),
('A', 'A-517', 3, 'NON AC', 3, 5, 'open'),
('A', 'A-518', 3, 'NON AC', 3, 5, 'open'),
('A', 'A-519', 3, 'NON AC', 3, 5, 'open'),
('A', 'A-520', 3, 'NON AC', 3, 5, 'open'),
('A', 'A-521', 4, 'AC', 4, 5, 'open'),
('A', 'A-522', 4, 'AC', 4, 5, 'open'),
('A', 'A-523', 4, 'AC', 4, 5, 'open'),
('A', 'A-524', 4, 'AC', 4, 5, 'open'),
('A', 'A-525', 4, 'AC', 4, 5, 'open'),
('A', 'A-526', 4, 'NON AC', 4, 5, 'open'),
('A', 'A-527', 4, 'NON AC', 4, 5, 'open'),
('A', 'A-528', 4, 'NON AC', 4, 5, 'open'),
('A', 'A-529', 4, 'NON AC', 4, 5, 'open'),
('A', 'A-530', 4, 'NON AC', 4, 5, 'open');

-- --------------------------------------------------------

--
-- Table structure for table `block_b`
--

CREATE TABLE `block_b` (
  `block` varchar(1) NOT NULL,
  `room_id` varchar(6) NOT NULL,
  `beds` int(2) NOT NULL,
  `type` varchar(8) NOT NULL,
  `beds_available` int(2) NOT NULL,
  `floor` int(2) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `block_b`
--

INSERT INTO `block_b` (`block`, `room_id`, `beds`, `type`, `beds_available`, `floor`, `status`) VALUES
('B', 'B-101', 2, 'AC', 2, 1, 'open'),
('B', 'B-102', 2, 'AC', 2, 1, 'open'),
('B', 'B-103', 2, 'AC', 2, 1, 'open'),
('B', 'B-104', 2, 'AC', 2, 1, 'open'),
('B', 'B-105', 2, 'AC', 2, 1, 'open'),
('B', 'B-106', 2, 'NON AC', 2, 1, 'open'),
('B', 'B-107', 2, 'NON AC', 2, 1, 'open'),
('B', 'B-108', 2, 'NON AC', 2, 1, 'open'),
('B', 'B-109', 2, 'NON AC', 2, 1, 'open'),
('B', 'B-110', 2, 'NON AC', 2, 1, 'open'),
('B', 'B-111', 3, 'AC', 3, 1, 'open'),
('B', 'B-112', 3, 'AC', 3, 1, 'open'),
('B', 'B-113', 3, 'AC', 3, 1, 'open'),
('B', 'B-114', 3, 'AC', 3, 1, 'open'),
('B', 'B-115', 3, 'AC', 3, 1, 'open'),
('B', 'B-116', 3, 'NON AC', 3, 1, 'open'),
('B', 'B-117', 3, 'NON AC', 3, 1, 'open'),
('B', 'B-118', 3, 'NON AC', 3, 1, 'open'),
('B', 'B-119', 3, 'NON AC', 3, 1, 'open'),
('B', 'B-120', 3, 'NON AC', 3, 1, 'open'),
('B', 'B-121', 4, 'AC', 4, 1, 'open'),
('B', 'B-122', 4, 'AC', 4, 1, 'open'),
('B', 'B-123', 4, 'AC', 4, 1, 'open'),
('B', 'B-124', 4, 'AC', 3, 1, 'open'),
('B', 'B-125', 4, 'AC', 4, 1, 'open'),
('B', 'B-126', 4, 'NON AC', 4, 1, 'open'),
('B', 'B-127', 4, 'NON AC', 4, 1, 'open'),
('B', 'B-128', 4, 'NON AC', 4, 1, 'open'),
('B', 'B-129', 4, 'NON AC', 4, 1, 'open'),
('B', 'B-130', 4, 'NON AC', 4, 1, 'open'),
('B', 'B-201', 2, 'AC', 2, 2, 'open'),
('B', 'B-202', 2, 'AC', 2, 2, 'open'),
('B', 'B-203', 2, 'AC', 2, 2, 'open'),
('B', 'B-204', 2, 'AC', 2, 2, 'open'),
('B', 'B-205', 2, 'AC', 2, 2, 'open'),
('B', 'B-206', 2, 'NON AC', 2, 2, 'open'),
('B', 'B-207', 2, 'NON AC', 2, 2, 'open'),
('B', 'B-208', 2, 'NON AC', 2, 2, 'open'),
('B', 'B-209', 2, 'NON AC', 2, 2, 'open'),
('B', 'B-210', 2, 'NON AC', 2, 2, 'open'),
('B', 'B-211', 3, 'AC', 3, 2, 'open'),
('B', 'B-212', 3, 'AC', 3, 2, 'open'),
('B', 'B-213', 3, 'AC', 3, 2, 'open'),
('B', 'B-214', 3, 'AC', 3, 2, 'open'),
('B', 'B-215', 3, 'AC', 3, 2, 'open'),
('B', 'B-216', 3, 'NON AC', 3, 2, 'open'),
('B', 'B-217', 3, 'NON AC', 3, 2, 'open'),
('B', 'B-218', 3, 'NON AC', 3, 2, 'open'),
('B', 'B-219', 3, 'NON AC', 3, 2, 'open'),
('B', 'B-220', 3, 'NON AC', 3, 2, 'open'),
('B', 'B-221', 4, 'AC', 4, 2, 'open'),
('B', 'B-222', 4, 'AC', 4, 2, 'open'),
('B', 'B-223', 4, 'AC', 4, 2, 'open'),
('B', 'B-224', 4, 'AC', 4, 2, 'open'),
('B', 'B-225', 4, 'AC', 4, 2, 'open'),
('B', 'B-226', 4, 'NON AC', 4, 2, 'open'),
('B', 'B-227', 4, 'NON AC', 4, 2, 'open'),
('B', 'B-228', 4, 'NON AC', 4, 2, 'open'),
('B', 'B-229', 4, 'NON AC', 4, 2, 'open'),
('B', 'B-230', 4, 'NON AC', 4, 2, 'open'),
('B', 'B-301', 2, 'AC', 2, 3, 'open'),
('B', 'B-302', 2, 'AC', 2, 3, 'open'),
('B', 'B-303', 2, 'AC', 2, 3, 'open'),
('B', 'B-304', 2, 'AC', 2, 3, 'open'),
('B', 'B-305', 2, 'AC', 2, 3, 'open'),
('B', 'B-306', 2, 'NON AC', 2, 3, 'open'),
('B', 'B-307', 2, 'NON AC', 2, 3, 'open'),
('B', 'B-308', 2, 'NON AC', 2, 3, 'open'),
('B', 'B-309', 2, 'NON AC', 2, 3, 'open'),
('B', 'B-310', 2, 'NON AC', 2, 3, 'open'),
('B', 'B-311', 3, 'AC', 3, 3, 'open'),
('B', 'B-312', 3, 'AC', 3, 3, 'open'),
('B', 'B-313', 3, 'AC', 3, 3, 'open'),
('B', 'B-314', 3, 'AC', 3, 3, 'open'),
('B', 'B-315', 3, 'AC', 3, 3, 'open'),
('B', 'B-316', 3, 'NON AC', 3, 3, 'open'),
('B', 'B-317', 3, 'NON AC', 3, 3, 'open'),
('B', 'B-318', 3, 'NON AC', 3, 3, 'open'),
('B', 'B-319', 3, 'NON AC', 3, 3, 'open'),
('B', 'B-320', 3, 'NON AC', 3, 3, 'open'),
('B', 'B-321', 4, 'AC', 2, 3, 'open'),
('B', 'B-322', 4, 'AC', 4, 3, 'open'),
('B', 'B-323', 4, 'AC', 4, 3, 'open'),
('B', 'B-324', 4, 'AC', 4, 3, 'open'),
('B', 'B-325', 4, 'AC', 4, 3, 'open'),
('B', 'B-326', 4, 'NON AC', 2, 3, 'open'),
('B', 'B-327', 4, 'NON AC', 4, 3, 'open'),
('B', 'B-328', 4, 'NON AC', 4, 3, 'open'),
('B', 'B-329', 4, 'NON AC', 4, 3, 'open'),
('B', 'B-330', 4, 'NON AC', 4, 3, 'open'),
('B', 'B-401', 2, 'AC', 2, 4, 'open'),
('B', 'B-402', 2, 'AC', 2, 4, 'open'),
('B', 'B-403', 2, 'AC', 2, 4, 'open'),
('B', 'B-404', 2, 'AC', 2, 4, 'open'),
('B', 'B-405', 2, 'AC', 2, 4, 'open'),
('B', 'B-406', 2, 'NON AC', 2, 4, 'open'),
('B', 'B-407', 2, 'NON AC', 2, 4, 'open'),
('B', 'B-408', 2, 'NON AC', 2, 4, 'open'),
('B', 'B-409', 2, 'NON AC', 2, 4, 'open'),
('B', 'B-410', 2, 'NON AC', 2, 4, 'open'),
('B', 'B-411', 3, 'AC', 3, 4, 'open'),
('B', 'B-412', 3, 'AC', 3, 4, 'open'),
('B', 'B-413', 3, 'AC', 3, 4, 'open'),
('B', 'B-414', 3, 'AC', 3, 4, 'open'),
('B', 'B-415', 3, 'AC', 3, 4, 'open'),
('B', 'B-416', 3, 'NON AC', 3, 4, 'open'),
('B', 'B-417', 3, 'NON AC', 3, 4, 'open'),
('B', 'B-418', 3, 'NON AC', 3, 4, 'open'),
('B', 'B-419', 3, 'NON AC', 3, 4, 'open'),
('B', 'B-420', 3, 'NON AC', 3, 4, 'open'),
('B', 'B-421', 4, 'AC', 4, 4, 'open'),
('B', 'B-422', 4, 'AC', 4, 4, 'open'),
('B', 'B-423', 4, 'AC', 4, 4, 'open'),
('B', 'B-424', 4, 'AC', 4, 4, 'open'),
('B', 'B-425', 4, 'AC', 4, 4, 'open'),
('B', 'B-426', 4, 'NON AC', 2, 4, 'open'),
('B', 'B-427', 4, 'NON AC', 4, 4, 'open'),
('B', 'B-428', 4, 'NON AC', 4, 4, 'open'),
('B', 'B-429', 4, 'NON AC', 4, 4, 'open'),
('B', 'B-430', 4, 'NON AC', 4, 4, 'open'),
('B', 'B-501', 2, 'AC', 2, 5, 'open'),
('B', 'B-502', 2, 'AC', 2, 5, 'open'),
('B', 'B-503', 2, 'AC', 2, 5, 'open'),
('B', 'B-504', 2, 'AC', 2, 5, 'open'),
('B', 'B-505', 2, 'AC', 2, 5, 'open'),
('B', 'B-506', 2, 'NON AC', 2, 5, 'open'),
('B', 'B-507', 2, 'NON AC', 0, 5, 'closed'),
('B', 'B-508', 2, 'NON AC', 2, 5, 'open'),
('B', 'B-509', 2, 'NON AC', 2, 5, 'open'),
('B', 'B-510', 2, 'NON AC', 2, 5, 'open'),
('B', 'B-511', 3, 'AC', 3, 5, 'open'),
('B', 'B-512', 3, 'AC', 2, 5, 'open'),
('B', 'B-513', 3, 'AC', 3, 5, 'open'),
('B', 'B-514', 3, 'AC', 3, 5, 'open'),
('B', 'B-515', 3, 'AC', 3, 5, 'open'),
('B', 'B-516', 3, 'NON AC', 3, 5, 'open'),
('B', 'B-517', 3, 'NON AC', 3, 5, 'open'),
('B', 'B-518', 3, 'NON AC', 3, 5, 'open'),
('B', 'B-519', 3, 'NON AC', 3, 5, 'open'),
('B', 'B-520', 3, 'NON AC', 3, 5, 'open'),
('B', 'B-521', 4, 'AC', 4, 5, 'open'),
('B', 'B-522', 4, 'AC', 4, 5, 'open'),
('B', 'B-523', 4, 'AC', 4, 5, 'open'),
('B', 'B-524', 4, 'AC', 4, 5, 'open'),
('B', 'B-525', 4, 'AC', 4, 5, 'open'),
('B', 'B-526', 4, 'NON AC', 4, 5, 'open'),
('B', 'B-527', 4, 'NON AC', 4, 5, 'open'),
('B', 'B-528', 4, 'NON AC', 4, 5, 'open'),
('B', 'B-529', 4, 'NON AC', 4, 5, 'open'),
('B', 'B-530', 4, 'NON AC', 4, 5, 'open');

-- --------------------------------------------------------

--
-- Table structure for table `block_g`
--

CREATE TABLE `block_g` (
  `block` varchar(1) NOT NULL,
  `room_id` varchar(6) NOT NULL,
  `beds` int(2) NOT NULL,
  `type` varchar(8) NOT NULL,
  `beds_available` int(2) NOT NULL,
  `floor` int(2) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `block_g`
--

INSERT INTO `block_g` (`block`, `room_id`, `beds`, `type`, `beds_available`, `floor`, `status`) VALUES
('G', 'G-101', 2, 'AC', 2, 1, 'open'),
('G', 'G-102', 2, 'AC', 2, 1, 'open'),
('G', 'G-103', 2, 'AC', 2, 1, 'open'),
('G', 'G-104', 2, 'AC', 2, 1, 'open'),
('G', 'G-105', 2, 'AC', 2, 1, 'open'),
('G', 'G-106', 2, 'NON AC', 2, 1, 'open'),
('G', 'G-107', 2, 'NON AC', 2, 1, 'open'),
('G', 'G-108', 2, 'NON AC', 2, 1, 'open'),
('G', 'G-109', 2, 'NON AC', 2, 1, 'open'),
('G', 'G-110', 2, 'NON AC', 2, 1, 'open'),
('G', 'G-111', 3, 'AC', 3, 1, 'open'),
('G', 'G-112', 3, 'AC', 3, 1, 'open'),
('G', 'G-113', 3, 'AC', 3, 1, 'open'),
('G', 'G-114', 3, 'AC', 3, 1, 'open'),
('G', 'G-115', 3, 'AC', 3, 1, 'open'),
('G', 'G-116', 3, 'NON AC', 3, 1, 'open'),
('G', 'G-117', 3, 'NON AC', 3, 1, 'open'),
('G', 'G-118', 3, 'NON AC', 3, 1, 'open'),
('G', 'G-119', 3, 'NON AC', 3, 1, 'open'),
('G', 'G-120', 3, 'NON AC', 3, 1, 'open'),
('G', 'G-121', 4, 'AC', 4, 1, 'open'),
('G', 'G-122', 4, 'AC', 4, 1, 'open'),
('G', 'G-123', 4, 'AC', 4, 1, 'open'),
('G', 'G-124', 4, 'AC', 4, 1, 'open'),
('G', 'G-125', 4, 'AC', 3, 1, 'open'),
('G', 'G-126', 4, 'NON AC', 4, 1, 'open'),
('G', 'G-127', 4, 'NON AC', 4, 1, 'open'),
('G', 'G-128', 4, 'NON AC', 4, 1, 'open'),
('G', 'G-129', 4, 'NON AC', 4, 1, 'open'),
('G', 'G-130', 4, 'NON AC', 4, 1, 'open'),
('G', 'G-201', 2, 'AC', 2, 2, 'open'),
('G', 'G-202', 2, 'AC', 2, 2, 'open'),
('G', 'G-203', 2, 'AC', 2, 2, 'open'),
('G', 'G-204', 2, 'AC', 2, 2, 'open'),
('G', 'G-205', 2, 'AC', 2, 2, 'open'),
('G', 'G-206', 2, 'NON AC', 2, 2, 'open'),
('G', 'G-207', 2, 'NON AC', 2, 2, 'open'),
('G', 'G-208', 2, 'NON AC', 2, 2, 'open'),
('G', 'G-209', 2, 'NON AC', 2, 2, 'open'),
('G', 'G-210', 2, 'NON AC', 2, 2, 'open'),
('G', 'G-211', 3, 'AC', 3, 2, 'open'),
('G', 'G-212', 3, 'AC', 3, 2, 'open'),
('G', 'G-213', 3, 'AC', 3, 2, 'open'),
('G', 'G-214', 3, 'AC', 3, 2, 'open'),
('G', 'G-215', 3, 'AC', 3, 2, 'open'),
('G', 'G-216', 3, 'NON AC', 3, 2, 'open'),
('G', 'G-217', 3, 'NON AC', 3, 2, 'open'),
('G', 'G-218', 3, 'NON AC', 3, 2, 'open'),
('G', 'G-219', 3, 'NON AC', 3, 2, 'open'),
('G', 'G-220', 3, 'NON AC', 3, 2, 'open'),
('G', 'G-221', 4, 'AC', 4, 2, 'open'),
('G', 'G-222', 4, 'AC', 4, 2, 'open'),
('G', 'G-223', 4, 'AC', 4, 2, 'open'),
('G', 'G-224', 4, 'AC', 4, 2, 'open'),
('G', 'G-225', 4, 'AC', 4, 2, 'open'),
('G', 'G-226', 4, 'NON AC', 4, 2, 'open'),
('G', 'G-227', 4, 'NON AC', 4, 2, 'open'),
('G', 'G-228', 4, 'NON AC', 4, 2, 'open'),
('G', 'G-229', 4, 'NON AC', 4, 2, 'open'),
('G', 'G-230', 4, 'NON AC', 4, 2, 'open'),
('G', 'G-301', 2, 'AC', 2, 3, 'open'),
('G', 'G-302', 2, 'AC', 2, 3, 'open'),
('G', 'G-303', 2, 'AC', 2, 3, 'open'),
('G', 'G-304', 2, 'AC', 2, 3, 'open'),
('G', 'G-305', 2, 'AC', 2, 3, 'open'),
('G', 'G-306', 2, 'NON AC', 2, 3, 'open'),
('G', 'G-307', 2, 'NON AC', 2, 3, 'open'),
('G', 'G-308', 2, 'NON AC', 2, 3, 'open'),
('G', 'G-309', 2, 'NON AC', 2, 3, 'open'),
('G', 'G-310', 2, 'NON AC', 2, 3, 'open'),
('G', 'G-311', 3, 'AC', 3, 3, 'open'),
('G', 'G-312', 3, 'AC', 3, 3, 'open'),
('G', 'G-313', 3, 'AC', 3, 3, 'open'),
('G', 'G-314', 3, 'AC', 3, 3, 'open'),
('G', 'G-315', 3, 'AC', 3, 3, 'open'),
('G', 'G-316', 3, 'NON AC', 3, 3, 'open'),
('G', 'G-317', 3, 'NON AC', 3, 3, 'open'),
('G', 'G-318', 3, 'NON AC', 3, 3, 'open'),
('G', 'G-319', 3, 'NON AC', 3, 3, 'open'),
('G', 'G-320', 3, 'NON AC', 3, 3, 'open'),
('G', 'G-321', 4, 'AC', 4, 3, 'open'),
('G', 'G-322', 4, 'AC', 4, 3, 'open'),
('G', 'G-323', 4, 'AC', 4, 3, 'open'),
('G', 'G-324', 4, 'AC', 4, 3, 'open'),
('G', 'G-325', 4, 'AC', 2, 3, 'open'),
('G', 'G-326', 4, 'NON AC', 4, 3, 'open'),
('G', 'G-327', 4, 'NON AC', 4, 3, 'open'),
('G', 'G-328', 4, 'NON AC', 4, 3, 'open'),
('G', 'G-329', 4, 'NON AC', 4, 3, 'open'),
('G', 'G-330', 4, 'NON AC', 4, 3, 'open'),
('G', 'G-401', 2, 'AC', 1, 4, 'open'),
('G', 'G-402', 2, 'AC', 2, 4, 'open'),
('G', 'G-403', 2, 'AC', 2, 4, 'open'),
('G', 'G-404', 2, 'AC', 2, 4, 'open'),
('G', 'G-405', 2, 'AC', 2, 4, 'open'),
('G', 'G-406', 2, 'NON AC', 2, 4, 'open'),
('G', 'G-407', 2, 'NON AC', 2, 4, 'open'),
('G', 'G-408', 2, 'NON AC', 2, 4, 'open'),
('G', 'G-409', 2, 'NON AC', 2, 4, 'open'),
('G', 'G-410', 2, 'NON AC', 2, 4, 'open'),
('G', 'G-411', 3, 'AC', 3, 4, 'open'),
('G', 'G-412', 3, 'AC', 3, 4, 'open'),
('G', 'G-413', 3, 'AC', 3, 4, 'open'),
('G', 'G-414', 3, 'AC', 3, 4, 'open'),
('G', 'G-415', 3, 'AC', 3, 4, 'open'),
('G', 'G-416', 3, 'NON AC', 3, 4, 'open'),
('G', 'G-417', 3, 'NON AC', 3, 4, 'open'),
('G', 'G-418', 3, 'NON AC', 3, 4, 'open'),
('G', 'G-419', 3, 'NON AC', 3, 4, 'open'),
('G', 'G-420', 3, 'NON AC', 3, 4, 'open'),
('G', 'G-421', 4, 'AC', 3, 4, 'open'),
('G', 'G-422', 4, 'AC', 3, 4, 'open'),
('G', 'G-423', 4, 'AC', 4, 4, 'open'),
('G', 'G-424', 4, 'AC', 4, 4, 'open'),
('G', 'G-425', 4, 'AC', 4, 4, 'open'),
('G', 'G-426', 4, 'NON AC', 4, 4, 'open'),
('G', 'G-427', 4, 'NON AC', 4, 4, 'open'),
('G', 'G-428', 4, 'NON AC', 4, 4, 'open'),
('G', 'G-429', 4, 'NON AC', 4, 4, 'open'),
('G', 'G-430', 4, 'NON AC', 4, 4, 'open'),
('G', 'G-501', 2, 'AC', 0, 5, 'closed'),
('G', 'G-502', 2, 'AC', 2, 5, 'open'),
('G', 'G-503', 2, 'AC', 2, 5, 'open'),
('G', 'G-504', 2, 'AC', 2, 5, 'open'),
('G', 'G-505', 2, 'AC', 2, 5, 'open'),
('G', 'G-506', 2, 'NON AC', 2, 5, 'open'),
('G', 'G-507', 2, 'NON AC', 2, 5, 'open'),
('G', 'G-508', 2, 'NON AC', 2, 5, 'open'),
('G', 'G-509', 2, 'NON AC', 2, 5, 'open'),
('G', 'G-510', 2, 'NON AC', 2, 5, 'open'),
('G', 'G-511', 3, 'AC', 3, 5, 'open'),
('G', 'G-512', 3, 'AC', 3, 5, 'open'),
('G', 'G-513', 3, 'AC', 3, 5, 'open'),
('G', 'G-514', 3, 'AC', 3, 5, 'open'),
('G', 'G-515', 3, 'AC', 3, 5, 'open'),
('G', 'G-516', 3, 'NON AC', 3, 5, 'open'),
('G', 'G-517', 3, 'NON AC', 3, 5, 'open'),
('G', 'G-518', 3, 'NON AC', 3, 5, 'open'),
('G', 'G-519', 3, 'NON AC', 3, 5, 'open'),
('G', 'G-520', 3, 'NON AC', 3, 5, 'open'),
('G', 'G-521', 4, 'AC', 4, 5, 'open'),
('G', 'G-522', 4, 'AC', 4, 5, 'open'),
('G', 'G-523', 4, 'AC', 4, 5, 'open'),
('G', 'G-524', 4, 'AC', 4, 5, 'open'),
('G', 'G-525', 4, 'AC', 4, 5, 'open'),
('G', 'G-526', 4, 'NON AC', 4, 5, 'open'),
('G', 'G-527', 4, 'NON AC', 4, 5, 'open'),
('G', 'G-528', 4, 'NON AC', 4, 5, 'open'),
('G', 'G-529', 4, 'NON AC', 4, 5, 'open'),
('G', 'G-530', 4, 'NON AC', 4, 5, 'open');

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE `mess` (
  `type` varchar(10) NOT NULL,
  `amount` bigint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`type`, `amount`) VALUES
('NON VEG', 65500),
('SPECIAL', 75000),
('VEG', 58750);

-- --------------------------------------------------------

--
-- Table structure for table `room_a`
--

CREATE TABLE `room_a` (
  `student_id` varchar(9) NOT NULL,
  `name` varchar(60) NOT NULL,
  `room_id` varchar(6) NOT NULL,
  `mess` varchar(10) NOT NULL,
  `payment` bigint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_a`
--

INSERT INTO `room_a` (`student_id`, `name`, `room_id`, `mess`, `payment`) VALUES
('19BCE1092', 'Azam Siddiqui', 'A-324', 'VEG', 165600),
('19BCE4456', 'ASHANK PRIYADARSHI', 'A-325', 'VEG', 165600),
('19BCE4533', 'NAVANSH SHARMA', 'A-303', 'SPECIAL', 192250),
('20BCE3333', 'Faizan Siddiqui', 'A-222', 'SPECIAL', 181850),
('20BCE4535', 'Himanshu Singh', 'A-222', 'VEG', 165600);

-- --------------------------------------------------------

--
-- Table structure for table `room_b`
--

CREATE TABLE `room_b` (
  `student_id` varchar(9) NOT NULL,
  `name` varchar(60) NOT NULL,
  `room_id` varchar(6) NOT NULL,
  `mess` varchar(10) NOT NULL,
  `payment` bigint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_b`
--

INSERT INTO `room_b` (`student_id`, `name`, `room_id`, `mess`, `payment`) VALUES
('17BCE1089', 'Jeff J. Vance', 'B-507', 'SPECIAL', 151200),
('17BCE3348', 'LANNAN GHOS', 'B-512', 'VEG', 171400),
('17BEE3423', 'Hasan Siddiqui', 'B-507', 'VEG', 134950),
('18BCE4433', 'AMAN SHAH', 'B-426', 'VEG', 124150),
('18BLC3322', 'Aegon Targareyan', 'B-426', 'VEG', 124150),
('19BCE1021', 'Paul R. Kennedy', 'B-321', 'VEG', 165600),
('19BCE1022', 'Michael E. Class', 'B-321', 'VEG', 165600),
('19BCE1111', 'ARYAN SIDDIQUI', 'B-326', 'SPECIAL', 140400),
('19BCE3278', 'Stephen S. Addison', 'B-326', 'VEG', 124150),
('20BCE2632', 'John H. Robinson', 'B-124', 'VEG', 165600);

-- --------------------------------------------------------

--
-- Table structure for table `room_g`
--

CREATE TABLE `room_g` (
  `student_id` varchar(9) NOT NULL,
  `name` varchar(60) NOT NULL,
  `room_id` varchar(6) NOT NULL,
  `mess` varchar(10) NOT NULL,
  `payment` bigint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_g`
--

INSERT INTO `room_g` (`student_id`, `name`, `room_id`, `mess`, `payment`) VALUES
('17BCE1645', 'Cynthia R. Willis', 'G-501', 'VEG', 176000),
('17BCE1990', 'DOLORAS JOSEPH', 'G-501', 'VEG', 176000),
('18BCE1123', 'Elvina W. Dalton', 'G-401', 'VEG', 176000),
('18BCE1998', 'PRIYA GOEL', 'G-422', 'VEG', 165600),
('18BME3423', 'Hannah Baker', 'G-421', 'VEG', 165600),
('19BCE3445', 'Rosina Siddiqui', 'G-325', 'VEG', 165600),
('19BCE4890', 'DISHA PATANI', 'G-325', 'VEG', 165600),
('20BCE3445', 'Alicia Sieera', 'G-125', 'VEG', 165600);

-- --------------------------------------------------------

--
-- Table structure for table `room_rent`
--

CREATE TABLE `room_rent` (
  `rent_id` varchar(10) NOT NULL,
  `type` varchar(8) NOT NULL,
  `beds` int(2) NOT NULL,
  `amount` bigint(8) NOT NULL,
  `processing` bigint(8) NOT NULL,
  `caution` bigint(8) NOT NULL,
  `total` bigint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_rent`
--

INSERT INTO `room_rent` (`rent_id`, `type`, `beds`, `amount`, `processing`, `caution`, `total`) VALUES
('AC_2', 'AC', 2, 87250, 15000, 15000, 117250),
('AC_3', 'AC', 3, 82650, 15000, 15000, 112650),
('AC_4', 'AC', 4, 76850, 15000, 15000, 106850),
('NONAC_2', 'NON AC', 2, 46200, 15000, 15000, 76200),
('NONAC_3', 'NON AC', 3, 41050, 15000, 15000, 71050),
('NONAC_4', 'NON AC', 4, 35400, 15000, 15000, 65400);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` varchar(9) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `programme` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(4) NOT NULL,
  `father` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `year` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `email`, `password`, `programme`, `address`, `mobile`, `gender`, `country`, `dob`, `blood_group`, `father`, `state`, `year`) VALUES
('17BCE1089', 'Jeff J. Vance', 'JeffJVance@dayrep.com\r\n', 'eequ3oJeichai', 'B.TECH', '2830 Emerson Road\r\nBernice, LA 71222', '4477556633', 'male', 'UNITED STATES', '1998-12-25', '0+', 'JERRY', 'LOS ANGELES', 4),
('17BCE1645', 'Cynthia R. Willis', 'CynthiaRWillis@armyspy.com\r\n', 'ree4Eixae', 'B.TECH', '1035 Windy Ridge Road\r\nLeo, IN 46765', '7896563639', 'female', 'UNITED STATES', '1998-07-18', 'O-', 'REES', 'INDIANA', 4),
('17BCE1990', 'DOLORAS JOSEPH', 'DOLORASWW@GMAIL.COM', 'DOLORAS1999', 'B.TECH', 'SUNSHINE APARTMENT\r\nMOUNT ROAD', '9988555588', 'female', 'INDIA', '1999-03-01', 'A-', 'RICK', 'RAJASTHAN', 4),
('17BCE3348', 'LANNAN GHOS', 'LALLANG@GMAIL.COM', 'LALLANG1998', 'B.TECH', '279,RIMAJ STREET', '7788563245', 'male', 'INDIA', '1999-08-26', 'O-', 'PAKAJ', 'TAMIL NADU', 4),
('17BEE3423', 'Hasan Siddiqui', 'hasan@gmail.com', 'hasan', 'Btech', '543, main street sadar meerut', '8574206598', 'male', 'India', '1996-02-02', 'A+', '\r\n						Zubair Siddi', 'UP', 4),
('18BCE1123', 'Elvina W. Dalton', 'ElvinaWDalton@teleworm.us\r\n', 'Vai7aLaengoh', 'B.TECH', '2404 Fairway Drive\r\nUkiah, CA 95482\r\nCurious what Elvina means? Clic', '8656521456', 'female', 'UNITED STATES', '1999-12-09', 'A+', 'WALTER', 'CALAFORNIA', 3),
('18BCE1998', 'PRIYA GOEL', 'PRIYAG@GMAIL.COM', 'PRIYAG1998', 'B.TECH', 'HILTON FLATS\r\nAJNI', '7852463258', 'female', 'INDIA', '1998-10-16', 'A+', 'TEJASWI', 'MAHARASHTRA', 3),
('18BCE4433', 'AMAN SHAH', 'AMANS1@GMAIL.COM', 'AMANSHAH', 'B.TECH', 'MOONSTAR PLACE\r\nMOUNT SOUTHERN ROAD', '9856589741', 'male', 'MALE', '1998-08-29', 'O+', 'RAMAN', 'ANDHRA PRADESH', 3),
('18BLC3322', 'Aegon Targareyan', 'jon@gmail.com', 'jon', 'Btech', 'Catle Black near the wall,the nothern territory, Westeros', '7856423258', 'male', 'Westeros', '2000-02-02', 'AB+', '\r\n						Rhaegar Targ', 'The North', 3),
('18BME3423', 'Hannah Baker', 'baker@gmail.com', 'hannah', 'BTECH', '34, 6th Avenue,London', '7865402158', 'female', 'United Kingdom', '1998-02-05', 'AB+', '\r\n						Chris Baker', 'London', 3),
('19BCE1021', 'Paul R. Kennedy', 'PaulRKennedy@jourrapide.com\r\n', 'ua8eiya7eKai', 'B.TECH', '4823 Brannon Street\r\nLos Angeles, CA 90017', '9656565214', 'male', 'UNITED STATES', '2000-06-17', 'O+', 'RICK', 'CALAFORNIA', 2),
('19BCE1022', 'Michael E. Class', 'MichaelEClass@armyspy.com', 'Shia9aek', 'B.TECH', '466 Lilac Lane\r\nAlamo', '5566889966', 'male', 'UNITED STATES', '2001-04-24', 'AB', 'ELLIOT', 'GA', 2),
('19BCE1040', 'HARSHIT MAHESHWARI', 'maheshwariharshit85@gmail.com', 'HARSHITM2001', 'B.TECH', '49,CONGRESS NAGAR', '9673087917', 'male', 'India', '2001-04-02', 'O+', 'SUNIL', 'MAHARASHTRA', 2),
('19BCE1092', 'Azam Siddiqui', 'azam@gmail.com', 'azam', 'btech', 'Sadar,lucknow.', '8601325891', 'male', 'India', '2000-02-02', 'O+', '\r\n						Mohd Azeem S', 'UP', 2),
('19BCE1111', 'ARYAN SIDDIQUI', 'ARYANS@GMAIL.COM', 'ARYANS1999', 'B.TECH', '4998 Hart Country Lane\r\nWest Point', '7744556215', 'male', 'INDIA', '2000-11-20', 'A-', 'AMAN', 'TAMIL NADU', 2),
('19BCE2345', 'Sansa Stark', 'sansa@gmail.com', 'sansa', 'Btech', 'Winterfell ,north Westeros', '6589542658', 'male', 'Westeros', '2000-02-02', 'A+', '\r\n						EddardStark', 'North', 2),
('19BCE3278', 'Stephen S. Addison', 'StephenSAddison@teleworm.us\r\n', 'sah6eGeezaix', 'B.TECH', '3710 Hazelwood Avenue\r\nWest Des Moines, IA 50266', '4477889965', 'male', 'UNITED STATES', '2001-04-26', 'A+', 'STEVE', 'IA', 2),
('19BCE3342', 'Logan A. Franks', 'LoganAFranks@teleworm.us\r\n', 'aeghiR9qu', 'B.TECH', '2574 Trouser Leg Road\r\nSpringfield, MA 01109', '7788225566', 'male', 'UNITED STATES', '2000-06-17', 'A+', 'ABRAHIM', 'Massachusetts', 2),
('19BCE3445', 'Rosina Siddiqui', 'rosina@gmail.com', 'rosina', 'Btech', '513, main street sadar lucknow', '7586012586', 'female', 'INDIA', '2000-06-04', 'O+', '\r\n						Mohd Azeem', 'UP', 2),
('19BCE4456', 'ASHANK PRIYADARSHI', 'ASHANKP@GMAIL.COM', 'ASHANKP2001', 'B.TECH', '1299 Westfall Avenue\r\nTimbero', '6699885522', 'male', 'INDIA', '2001-07-22', 'O+', 'NAVANSH', 'MAHARASHTRA', 2),
('19BCE4533', 'NAVANSH SHARMA', 'NAVANSH@GMAIL.COM', 'NAVANSHS2001', 'B.TECH', '203,MADHUWANTI APARTMENT', '9696969655', 'male', 'INDIA', '2001-05-05', 'A-', 'KANAV.', 'UTTAR PRADESH', 2),
('19BCE4778', 'MAYANK GOEL', 'MAYANGGOEL@GMAIL.COM', 'MAYANK2001', 'B.TECH', 'SARASWATI NIWAS\r\nANJANI NAGAR', '7788554499', 'male', 'INDIA', '2001-06-06', 'A+', 'SHIVAM', 'RAJASTHAN', 2),
('19BCE4888', 'Gloria G. Aguirre', 'GloriaGAguirre@rhyta.com\r\n', 'ol9nie9Qu', 'B.TECH', '4809 Hillcrest Circle\r\nAnoka, MN 55303', '7788224465', 'female', 'UNITED STATES', '2001-06-11', '0-', 'GARY', 'MN', 2),
('19BCE4890', 'DISHA PATANI', 'DISHA_P@GMAIL.COM', 'DISHAP01', 'B.TECH', '400,SARASWATI NIWAS', '8899224465', 'female', 'INDIA', '2001-08-14', 'O+', 'ANAND', 'RAJASTHAN', 2),
('19BCE5567', 'Azam Sid', 'azam6@gmail.com', 'azam', 'Btech', 'fbdgb', '8652148567', 'male', 'Westeros', '2000-02-02', 'AB-', '\r\n						Ned Stark', 'fbgdfb', 1),
('20BCE1090', 'Charlene M. Montague', 'CharleneMMontague@jourrapide.com\r\n', 'egefuech2Ae', 'B.TECH', '4397 Frank Avenue\r\n', '9988556231', 'female', 'UNITED STATES', '2002-02-17', 'A+', 'MATT', 'CALAFORNIA', 1),
('20BCE2632', 'John H. Robinson', 'JohnHRobinson@rhyta.com\r\n', 'vo3heishieW', 'B.TECH', '985 Oakmound Drive', '9966554425', 'male', 'UNITED STATES', '2001-04-30', 'B+', 'HENRY', 'CALAFORNIA', 1),
('20BCE3333', 'Faizan Siddiqui', 'faizan@gmail.com', 'faizan', 'Btech', '513 , New park avenue, lucknow.', '7894561230', 'male', 'india', '2000-02-02', 'O-', '\r\n						Mohd Azeem', 'UP', 1),
('20BCE3445', 'Alicia Sieera', 'alice@gmail.com', 'alice', 'Btech', '21,Main Street , Boston,Massachusets.', '8567953207', 'female', 'USA', '2001-06-04', 'B+', '\r\n						David Doe', 'Massachusets', 1),
('20BCE3456', 'Alexander Flemming', 'alex@gmail.com', 'alex', 'BTECH', '45, downing street,london.', '7528695423', 'male', 'United Kingdom', '2001-05-04', 'A+', '\r\n						Tony', 'London', 1),
('20BCE3465', 'John Doe', 'John@gmail.com', 'john', 'Btech', '21,Main Street , Boston,Massachusets.', '8567953201', 'male', 'USA', '2000-06-04', 'B+', '\r\n						David Doe', 'Massachusets', 1),
('20BCE4535', 'Himanshu Singh', 'Himanshu@gmail.com', 'himanshu', 'Btech', 'dfgbdf', '9874561230', 'male', 'India', '2000-08-05', 'A+', '\r\n						Ranbeer Sing', 'Haryana', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block_a`
--
ALTER TABLE `block_a`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `block_b`
--
ALTER TABLE `block_b`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `block_g`
--
ALTER TABLE `block_g`
  ADD PRIMARY KEY (`room_id`),
  ADD UNIQUE KEY `room_id` (`room_id`);

--
-- Indexes for table `mess`
--
ALTER TABLE `mess`
  ADD PRIMARY KEY (`type`);

--
-- Indexes for table `room_a`
--
ALTER TABLE `room_a`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `room_b`
--
ALTER TABLE `room_b`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `room_g`
--
ALTER TABLE `room_g`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `room_rent`
--
ALTER TABLE `room_rent`
  ADD PRIMARY KEY (`rent_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `id` (`student_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `room_a`
--
ALTER TABLE `room_a`
  ADD CONSTRAINT `room_a_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `block_a` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `room_a_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room_b`
--
ALTER TABLE `room_b`
  ADD CONSTRAINT `room_b_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `room_b_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `block_b` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room_g`
--
ALTER TABLE `room_g`
  ADD CONSTRAINT `room_g_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `room_g_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `block_g` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
