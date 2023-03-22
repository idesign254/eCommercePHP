-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 06, 2022 at 05:36 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merushop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `contactno`, `password`, `regDate`) VALUES
(2, '012', '012@gmail.com', 12345, 'd2490f048dc3b77a457e3e450ab4eb38', '2019-11-17 16:09:48');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

DROP TABLE IF EXISTS `adminlog`;
CREATE TABLE IF NOT EXISTS `adminlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=229 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(155, '012', 0x34312e38392e3234352e330000000000, '2019-11-27 08:39:11', '27-11-2019 11:39:29 AM', 1),
(156, '012', 0x34312e38392e3234352e330000000000, '2019-11-28 06:45:51', '28-11-2019 09:48:16 AM', 1),
(157, '012', 0x34312e38392e3234352e330000000000, '2019-11-28 07:18:32', '28-11-2019 10:25:40 AM', 1),
(158, '012', 0x34312e38392e3234352e330000000000, '2019-11-28 13:08:23', '28-11-2019 04:29:55 PM', 1),
(159, '012', 0x3139372e3138332e3232312e31303900, '2019-11-28 16:01:50', '28-11-2019 07:02:58 PM', 1),
(160, '012', 0x34312e38392e3234352e330000000000, '2019-11-29 07:42:11', '29-11-2019 11:12:44 AM', 1),
(161, '012', 0x34312e38392e3234352e330000000000, '2019-12-02 06:27:24', '02-12-2019 09:33:21 AM', 1),
(162, '012', 0x34312e38392e3234352e330000000000, '2019-12-02 11:22:32', '02-12-2019 02:23:02 PM', 1),
(163, '012', 0x34312e38392e3234352e330000000000, '2019-12-05 08:52:45', '05-12-2019 11:54:01 AM', 1),
(164, '012', 0x34312e39302e362e3136000000000000, '2019-12-06 15:45:06', '06-12-2019 06:45:33 PM', 1),
(165, '012', 0x34312e38392e3234352e330000000000, '2019-12-09 06:32:58', '09-12-2019 09:33:23 AM', 1),
(166, '012', 0x34312e38392e3234352e330000000000, '2019-12-09 07:41:03', '09-12-2019 10:41:47 AM', 1),
(167, '012', 0x34312e38392e3234352e330000000000, '2019-12-11 08:45:42', '11-12-2019 11:53:11 AM', 1),
(168, '012', 0x34312e38392e3234352e330000000000, '2019-12-11 11:22:46', '11-12-2019 02:31:48 PM', 1),
(169, '012', 0x34312e39302e342e3233350000000000, '2019-12-11 14:25:58', '11-12-2019 05:27:15 PM', 1),
(170, '012', 0x34312e38392e3234352e330000000000, '2019-12-12 10:09:35', '12-12-2019 01:11:06 PM', 1),
(171, '012', 0x3139362e39372e39312e313736000000, '2019-12-14 10:10:59', '14-12-2019 01:11:45 PM', 1),
(172, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 08:39:40', NULL, 1),
(173, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 08:41:13', NULL, 1),
(174, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 08:45:09', NULL, 1),
(175, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 08:45:27', NULL, 1),
(176, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 08:49:43', NULL, 1),
(177, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 09:09:27', NULL, 1),
(178, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 09:10:39', '16-12-2019 12:11:08 PM', 1),
(179, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 09:54:11', NULL, 1),
(180, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 09:58:34', NULL, 1),
(181, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 10:00:15', NULL, 1),
(182, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 10:01:13', NULL, 1),
(183, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 11:01:24', '16-12-2019 02:02:10 PM', 1),
(184, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 11:06:11', NULL, 1),
(185, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 11:12:25', NULL, 1),
(186, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 11:14:34', NULL, 1),
(187, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 12:20:13', NULL, 1),
(188, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 12:45:59', NULL, 1),
(189, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 12:55:25', NULL, 1),
(190, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 13:00:12', NULL, 1),
(191, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 13:40:54', NULL, 1),
(192, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 13:49:46', NULL, 1),
(193, '012', 0x34312e38392e3234352e330000000000, '2019-12-16 14:01:19', NULL, 1),
(194, '012', 0x3a3a3100000000000000000000000000, '2019-12-16 17:27:14', NULL, 1),
(195, '012', 0x3a3a3100000000000000000000000000, '2019-12-16 17:30:42', '16-12-2019 08:31:04 PM', 1),
(196, '012', 0x3a3a3100000000000000000000000000, '2019-12-16 17:32:15', NULL, 1),
(197, '012', 0x3a3a3100000000000000000000000000, '2019-12-17 18:35:07', NULL, 1),
(198, '012', 0x3a3a3100000000000000000000000000, '2019-12-17 18:46:39', NULL, 1),
(199, 'root', 0x3a3a3100000000000000000000000000, '2019-12-17 18:56:47', NULL, 0),
(200, '012', 0x3a3a3100000000000000000000000000, '2019-12-17 18:57:16', NULL, 1),
(201, '01', 0x3a3a3100000000000000000000000000, '2019-12-17 18:59:34', NULL, 0),
(202, 'rootdsd', 0x3a3a3100000000000000000000000000, '2019-12-17 18:59:38', NULL, 0),
(203, 'sdfdsf', 0x3a3a3100000000000000000000000000, '2019-12-17 18:59:42', NULL, 0),
(204, '012', 0x3a3a3100000000000000000000000000, '2019-12-17 18:59:51', NULL, 1),
(205, '012', 0x3a3a3100000000000000000000000000, '2019-12-17 19:03:45', NULL, 1),
(206, '012', 0x3a3a3100000000000000000000000000, '2019-12-18 19:54:44', NULL, 1),
(207, '012', 0x3a3a3100000000000000000000000000, '2019-12-21 04:46:32', NULL, 1),
(208, '012', 0x3a3a3100000000000000000000000000, '2019-12-21 05:59:53', NULL, 1),
(209, '012', 0x3a3a3100000000000000000000000000, '2019-12-21 06:02:15', '21-12-2019 09:02:41 AM', 1),
(210, '012', 0x3a3a3100000000000000000000000000, '2019-12-21 06:02:51', '21-12-2019 09:02:53 AM', 1),
(211, '012', 0x3a3a3100000000000000000000000000, '2019-12-21 06:02:59', '21-12-2019 09:05:44 AM', 1),
(212, '012', 0x3a3a3100000000000000000000000000, '2019-12-21 06:05:54', '21-12-2019 10:01:03 AM', 1),
(213, '012', 0x3a3a3100000000000000000000000000, '2019-12-21 17:43:55', NULL, 1),
(214, 'albaheng', 0x3a3a3100000000000000000000000000, '2019-12-23 06:48:58', NULL, 0),
(215, 'albaheng', 0x3a3a3100000000000000000000000000, '2019-12-23 06:50:08', NULL, 0),
(216, 'albaheng', 0x3a3a3100000000000000000000000000, '2019-12-23 06:50:45', NULL, 0),
(217, '012', 0x3a3a3100000000000000000000000000, '2020-01-24 07:15:54', NULL, 1),
(218, '012', 0x3a3a3100000000000000000000000000, '2020-01-24 08:11:52', '24-01-2020 11:11:57 AM', 1),
(219, '012', 0x3a3a3100000000000000000000000000, '2020-01-24 08:12:16', '24-01-2020 11:16:17 AM', 1),
(220, '012', 0x3a3a3100000000000000000000000000, '2020-01-24 08:16:29', '24-01-2020 11:20:57 AM', 1),
(221, '012', 0x3a3a3100000000000000000000000000, '2020-01-24 08:21:10', '24-01-2020 12:03:29 PM', 1),
(222, '012', 0x3a3a3100000000000000000000000000, '2020-01-24 18:33:11', NULL, 1),
(223, 'alex', 0x3a3a3100000000000000000000000000, '2021-03-21 20:12:00', NULL, 0),
(224, 'alex', 0x3a3a3100000000000000000000000000, '2021-03-21 20:12:54', NULL, 0),
(225, '012', 0x3a3a3100000000000000000000000000, '2021-07-19 08:25:43', NULL, 1),
(226, '', 0x3a3a3100000000000000000000000000, '2021-07-19 09:01:03', NULL, 0),
(227, 'admin', 0x3a3a3100000000000000000000000000, '2022-03-05 18:28:28', NULL, 0),
(228, '012', 0x3a3a3100000000000000000000000000, '2022-03-05 18:28:34', '05-03-2022 10:27:05 PM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(3, 'Books', 'aa', '2017-01-24 16:17:37', '30-01-2017 12:22:24 AM'),
(4, 'Electronics', 'Electronic Products', '2017-01-24 16:19:32', ''),
(5, 'Furniture', 'all wooden items', '2017-01-24 16:19:54', '14-12-2019 06:57:58 PM'),
(6, 'Ladies Fashion', 'Fashion', '2017-02-20 16:18:52', ''),
(7, 'Men\'s fashion', 'cc', '2019-11-30 19:09:07', '01-12-2019 03:39:41 AM'),
(8, 'Both ', 'Both genders', '2019-12-14 10:31:23', NULL),
(9, 'home accessories', 'house items', '2019-12-14 13:25:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `DatePosted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `tel`, `message`, `DatePosted`) VALUES
(10, 'gg', 'fgdfhdfgh@gmail.com', '43534534', 'dfgsdhdfhfgjhfgj', '2019-11-27 05:03:14'),
(3, 'Mutuma Mwenda', 'mutuma754@gmail.com', '719577260', 'helllo am mutum,a', '2019-11-27 05:03:14'),
(4, 'Mutuma', 'mutuma754@gmail.com', '657567', 'fh', '2019-11-27 05:03:14'),
(8, 'Mutuma', 'mutuma754@gmail.com', '657567', 'xfbfxxvc', '2019-11-27 05:03:14'),
(14, 'Mutuma Mwenda', 'mutuma754@gmail.com', '719577260', 'Vgxhzetzgztsgzezw', '2019-11-27 05:03:14'),
(15, 'Mutuma Mwenda', 'mutuma754@gmail.com', '719577260', 'Vgxhzetzgztsgzezw', '2019-11-27 05:03:14'),
(27, 'ccc', 'hgjgh@gmail.com', '3343434', 'cxcxc', '2020-01-24 07:41:24'),
(17, 'Mutuma', 'mutuma754@gmail.com', '+254719577260', 'hello mam mutuma tush from mweu klekanjkhka i love web designas a nd ewlejlasas,dbas', '2019-11-27 05:03:14'),
(18, 'Mutuma Mwenda', 'mutuma754@gmail.com', '+254719577260', 'dklfnfvjkdnvjkedf', '2019-11-27 05:03:14'),
(20, 'jknjkbjh', 'zz@gmail.com', '978787878', 'cfcfyjhjhjhjhjhjh', '2019-11-27 05:04:37'),
(22, 'dfg', 'zz@gmail.com', '654645', 'dddd', '2019-11-27 15:45:54'),
(26, 'Milton Glaser', 'hgjgh@gmail.com', '3343434', 'gchhkghk', '2020-01-24 07:24:58'),
(24, 'rita', 'rita@gmail.com', '+254719577260', 'i am rita ora', '2019-12-16 13:06:11'),
(25, 'Mutuma Mwenda', 'mutuma754@gmail.com', '+254719577260', 'Oyaa', '2019-12-16 14:11:11'),
(28, 'ccc', 'hgjgh@gmail.com', '3343434', 'vbvbn', '2020-01-24 07:41:49'),
(29, 'ccc', 'hgjgh@gmail.com', '3343434', 'jhgh', '2020-01-24 07:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `mpesa_payments`
--

DROP TABLE IF EXISTS `mpesa_payments`;
CREATE TABLE IF NOT EXISTS `mpesa_payments` (
  `Auto` int(11) NOT NULL AUTO_INCREMENT,
  `TransactionType` varchar(40) DEFAULT NULL,
  `TransID` varchar(40) DEFAULT NULL,
  `TransTime` varchar(40) DEFAULT NULL,
  `TransAmount` double DEFAULT NULL,
  `BusinessShortCode` varchar(15) DEFAULT NULL,
  `BillRefNumber` varchar(40) DEFAULT NULL,
  `InvoiceNumber` varchar(40) DEFAULT NULL,
  `ThirdPartyTransID` varchar(40) DEFAULT NULL,
  `MSISDN` varchar(20) DEFAULT NULL,
  `FirstName` varchar(60) DEFAULT NULL,
  `MiddleName` varchar(60) DEFAULT NULL,
  `LastName` varchar(60) DEFAULT NULL,
  `OrgAccountBalance` double DEFAULT NULL,
  PRIMARY KEY (`Auto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `cash` varchar(120) NOT NULL,
  `products` varchar(255) NOT NULL,
  `paymentMethod` varchar(30) DEFAULT NULL,
  `orderStatus` varchar(30) DEFAULT NULL,
  `DatePosted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `username`, `tel`, `email`, `address`, `cash`, `products`, `paymentMethod`, `orderStatus`, `DatePosted`) VALUES
(1, 'mm', '5455', 'mmm@gmail.com', 'fgh', 'fgh', 'cap,shoes', '', 'Delivered', '2019-11-27 05:08:48'),
(3, 'karimi', '25479631876', 'leah@gmail.com', 'nyanyuki', '3100', 'sweater', '', 'Delivered', '2019-12-14 09:33:28'),
(4, 'vdf', 'dfg', 'sdfd', 'sdfd', 'wew', 'dsfd', '', 'Delivered', '2019-12-14 12:24:14'),
(5, 'vdf', 'dfg', 'sdfd', 'sdfd', 'dsf', 'dsfd', '', 'Delivered', '2019-12-14 12:24:22'),
(6, 'vdf', 'dfg', 'sdfdsfd', 'sdfd', 'wew', 'dsfd', 'Mpesa', 'Delivered', '2019-12-14 12:24:39'),
(8, 'zz', '254719577260', 'zz@gmail.com', 'zz', '1999', 'Nike', NULL, NULL, '2019-12-14 15:56:03'),
(9, 'zz', '254719577260', 'zz@gmail.com', 'zz', '1999', 'Nike', 'COD', NULL, '2019-12-14 16:15:34'),
(10, 'zz', '254719577260', 'zz@gmail.com', 'zz', '1999', 'Nike', 'Mpesa', NULL, '2019-12-14 16:16:48'),
(11, 'zz', '254719577260', 'zz@gmail.com', 'zz', '2398', 'mavin', 'COD', 'in Process', '2019-12-14 17:20:04'),
(12, 'zz', '254719577260', 'zz@gmail.com', 'zz', '2999', 'sweaters', 'Mpesa', 'Delivered', '2019-12-14 17:20:29'),
(13, 'Menya', '244789226325', 'peter@gmail.com', 'Embu', '3000', 'shoe', 'Mpesa', 'in Process', '2019-12-15 05:30:00'),
(14, 'Menya', '244789226325', 'peter@gmail.com', 'Embu', '1299', 'Sneakers', 'Mpesa', 'in Transit', '2019-12-15 05:31:08'),
(15, 'Menya', '244789226325', 'peter@gmail.com', 'Embu', '1399', 'bed cloth', 'COD', 'Delivered', '2019-12-15 05:31:54'),
(16, 'Ora', '254719577260', 'rita@gmail.com', 'Eldoret', '4538', 'Black Cap', 'Mpesa', 'in Process', '2019-12-16 12:52:06'),
(17, 'Ora', '254719577260', 'rita@gmail.com', 'Eldoret', '4538', 'sweaters', 'COD', 'Delivered', '2019-12-16 12:55:01'),
(18, 'Kajau', '25419577260', 'ianoh@gmail.com', 'Nanyuki', '2999', 'sweaters', 'COD', NULL, '2019-12-16 13:39:06'),
(19, 'Kajau', '25419577260', 'ianoh@gmail.com', 'Nanyuki', '2999', 'sweaters', 'Mpesa', 'in Process', '2019-12-16 13:39:28'),
(20, 'Kajau', '25419577260', 'ianoh@gmail.com', 'Nanyuki', '850', 'sleeve', 'Mpesa', NULL, '2019-12-16 13:40:12'),
(21, 'Kajau', '25419577260', 'ianoh@gmail.com', 'Nanyuki', '1500', 'Palm bag', 'COD', NULL, '2019-12-16 14:02:01'),
(22, 'lastname', 'contactno', 'mercy@gmail.com', 'address', '1299', 'Hood', 'COD', NULL, '2019-12-21 05:29:03'),
(23, 'Ora', '254719577260', 'rita@gmail.com', 'Eldoret', '1999', 'Nike', 'COD', 'in Process', '2019-12-21 05:49:57'),
(25, 'Ora', '254719577260', 'rita@gmail.com', 'Eldoret', '850', 'sleeve', 'COD', NULL, '2019-12-21 05:54:22'),
(30, 'zz', '254719577260', 'zz@gmail.com', 'zz', '1999', 'Nike', 'COD', NULL, '2019-12-21 21:28:23'),
(31, 'Ora', '254719577260', 'rita@gmail.com', 'Eldoret', '1299', 'Hood', 'COD', NULL, '2020-01-24 18:33:02'),
(32, 'aa', '', 'a@gmail.com', 'aa', '650', 'glasses', 'Mpesa', 'Delivered', '2022-03-05 18:11:25'),
(34, 'cc', '', 'ccc@gmail.com', 'cc', '4538', 'Black Cap', 'Mpesa', 'Delivered', '2022-03-05 18:27:01'),
(35, 'cc', '22', 'ccc@gmail.com', 'cc', '2999', 'sweaters', 'COD', 'Delivered', '2022-03-05 18:27:17'),
(36, 'cc', '22', 'ccc@gmail.com', 'cc', '2999', 'sweaters', 'COD', 'Processing', '2022-03-05 18:36:52'),
(37, 'cc', '22', 'ccc@gmail.com', 'cc', '17494', 'sweaters', 'COD', 'Delivered', '2022-03-05 18:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

DROP TABLE IF EXISTS `ordertrackhistory`;
CREATE TABLE IF NOT EXISTS `ordertrackhistory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderId` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertrackhistory`
--

INSERT INTO `ordertrackhistory` (`id`, `orderId`, `status`, `remark`, `postingDate`) VALUES
(1, 3, 'in Process', 'Order has been Shipped.', '2017-03-10 16:36:45'),
(6, 11, 'in Process', 'n', '2019-12-14 17:30:55'),
(7, 13, 'in Process', 'arrived in kenya', '2019-12-15 07:39:37'),
(8, 15, 'Delivered', 'arrived in meru', '2019-12-15 07:41:20'),
(9, 5, 'Delivered', 'order arrived ', '2019-12-16 12:21:01'),
(10, 16, 'in Process', 'G4s cargo', '2019-12-16 12:56:04');

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

DROP TABLE IF EXISTS `parcel`;
CREATE TABLE IF NOT EXISTS `parcel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service` varchar(100) NOT NULL,
  `county` varchar(122) NOT NULL,
  `town` varchar(122) NOT NULL,
  `zipcode` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parcel`
--

INSERT INTO `parcel` (`id`, `service`, `county`, `town`, `zipcode`) VALUES
(1, 'raha', 'Meru', 'Meru', 60200),
(2, 'raha', 'Meru', 'Meru', 60200),
(3, 'meru nissan', 'Meru', 'Makutano', 5002),
(4, 'goodies', 'nyeri', 'oas', 434),
(5, 'kisumu', 'kisum', 'eet', 434),
(6, 'tuty', 'tyuyt', 'tyuty', 56765),
(7, 'edfgs', 'hghmg', 'fgh', 486767);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `category` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `pName` varchar(255) DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `shop` varchar(50) DEFAULT NULL,
  `productAvailability` varchar(50) DEFAULT NULL,
  `DatePosted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `code`, `category`, `description`, `pName`, `productImage1`, `productImage2`, `price`, `shop`, `productAvailability`, `DatePosted`) VALUES
(36, 'a1', 3, 'cap', 'Black Cap', 'cap-b.png', 'cap.png', 240, 'Avara', 'In Stock', '2019-11-27 06:57:42'),
(37, 'a2', 2, 'Cold weather', 'Hood', 'hood.png', 'hood.png', 1299, 'Jeniko', 'In Stock', '2019-11-27 07:06:00'),
(38, 'a3', 1, 'cotton sweaters', 'sweaters', 'lady.png', 'lady.png', 2999, 'Aurora', 'In Stock', '2019-11-27 07:07:47'),
(39, 'a4', 2, 'Training Shoes', 'Nike', 'nike.png', 'nike.png', 1999, 'Maku', 'In Stock', '2019-11-27 09:44:55'),
(40, 'a5', 2, 'Sneakers', 'Sneakers', 'snaekers.png', 'snaekers.png', 1299, 'avara', 'In Stock', '2019-11-27 09:47:43'),
(41, 'a6', 3, 'mavin', 'mavin', 'marvin.png', 'marvin.png', 399, 'Jumia', 'In Stock', '2019-11-27 09:53:00'),
(42, 'a7', 1, 'bed clothing', 'bed cloth', 'bed cloth.png', 'bed cloth.png', 1399, 'Nisa', 'In Stock', '2019-11-27 14:59:18'),
(43, 'a8', 1, 'ladies bags', 'Palm bag', 'palm-bags.png', 'palm-bags.png', 1500, 'Nives', 'In Stock', '2019-11-27 15:00:44'),
(44, 'a9', 3, 'Black Cap', 'BasketBall Cap', 'cap.png', 'cap.png', 650, 'Caps', 'In Stock', '2019-11-27 15:03:10'),
(45, 'b1', 11, 'both', 'glasses', 'glasses.png', 'glasses.png', 650, 'avara', 'instock', '2019-11-27 15:03:10'),
(46, 'b2', 33, 'both', 'shoe', 'shoe.png', 'shoe.png', 1500, 'timers', 'In Stock', '2019-11-27 15:03:10'),
(47, 'b3', 11, 'ladies', 'handbag', 'handbag.png', 'handbag.png', 999, 'timers', 'In Stock', '2019-11-27 15:03:10'),
(48, 'b4', 33, 'both', 'sweater', 'handbag.png', 'handbag.png', 1600, 'avara', 'In Stock', '2019-11-27 15:03:10'),
(49, 'b5', 33, 'both', 'bag', 'bag.png', 'bag.png', 2500, 'niko', 'In Stock', '2019-11-27 15:03:10'),
(50, 'b6', 11, 'ladies', 'pulse', 'pulse.png', 'pulse.png', 1200, 'annex', 'In Stock', '2019-11-27 15:03:10'),
(51, 'b7', 33, 'both', 'niko hood', 'hood.png', 'hood.png', 1650, 'niko', 'In Stock', '2019-11-27 15:03:10'),
(52, 'b8', 22, 'men', 'sleeve', 'sleeve.png', 'sleeve.png', 850, 'niko', 'In Stock', '2019-11-27 15:03:10'),
(53, 'b9', 11, 'long sleeves', 'ladies sleeve', 'ladies sleeve.png', 'ladies sleeve.png', 950, 'texttile', 'In Stock', '2019-11-27 15:03:10'),
(54, 'c1', 11, 'cotton made', 'light dress', 'light dress.png', 'light dress.png', 500, 'avara', 'In Stock', '2019-11-27 15:03:10'),
(55, 'c2', 11, 'gothic parties', 'gothic dress', 'gothic dress.png', 'gothic dress.png', 1999, 'niko', 'In Stock', '2019-11-27 15:03:10'),
(56, 'c3', 22, 'italian jeans', 'men jeans', 'men jeans.png', 'men jeans.png', 1200, 'textile', 'In Stock', '2019-11-27 15:03:10'),
(57, 'c4', 22, 'S.A wool', 'shirt', 'shirt.png', 'shirt.png', 1350, 'timers', 'In Stock', '2019-11-27 15:03:10'),
(58, 'c5', 22, 'cotton made', 'casual', 'casual.png', 'casual.png', 999, 'timers', 'In Stock', '2019-11-27 15:03:10'),
(59, 'c6', 22, 'german made', 'suit', 'suit.png', 'suit.png', 2300, 'avara', 'In Stock', '2019-11-27 15:03:10'),
(60, 'c7', 33, 'BasketBall Caps', 'Black Cap', 'cap.png', 'cap.png', 499, 'Avara', 'In Stock', '2019-11-27 15:03:10'),
(68, 'd1', 7, 'mens watch', 'Leather watch', 'watch2.png', 'watch.png', 850, 'avara', 'In Stock', '2019-12-16 14:15:57'),
(69, 'd2', 9, 'ddd', 'ddd', '1.jpg', '250px-MIMD.svg.png', 1200, 'Nisa', 'In Stock', '2019-12-21 04:53:13'),
(70, 'd3', 8, 'designer', 'test design', 'designer-steve.png', 'mmd-page.png', 1200, 'Avara', 'In Stock', '2019-12-21 17:55:58'),
(71, 'd4', 33, 'ttttt', 'aa', 'comp-1.png', 'vlcsnap-2019-05-01-21h07m05s714.png', 55555555, 'Nisa', 'Out of Stock', '2019-12-21 18:11:49'),
(72, 'd6', 4, 'ttttt', 'tttttttttt', 'construction-site-silhouette-factory-construction-site-building-silhouette-png-and-vector-construction-png-650_205.png', 'cartoon-construction-truck-construction-clipart-truck-clipart-cartoon-clipart-png-image-and-clipart-construction-png-650_400.png', 7, '8', 'Out of Stock', '2019-12-21 20:46:17'),
(73, 'd8', 5, 'h', 'h', 'unnamed.jpg', 'l3qsEpEytFztyQSmNbNvuwubTLnN0LFf1ZEMjJuk.jpeg', 1, '5', 'In Stock', '2019-12-21 20:50:56'),
(74, 'e6', 1, '5fghg', 'fghfg', '1-Feature-Blog-v3.png', 'artificial-intelligence-in-films.jpg', 54645, 'rtr', 'Out of Stock', '2020-01-24 08:09:59'),
(75, 'e6', 1, '5fghg', 'fghfg', '1-Feature-Blog-v3.png', 'artificial-intelligence-in-films.jpg', 54645, 'rtr', 'Out of Stock', '2020-01-24 08:10:32'),
(76, 'e6', 1, '5fghg', 'fghfg', '1-Feature-Blog-v3.png', 'artificial-intelligence-in-films.jpg', 54645, 'rtr', 'Out of Stock', '2020-01-24 08:10:39');

-- --------------------------------------------------------

--
-- Table structure for table `shopadmin`
--

DROP TABLE IF EXISTS `shopadmin`;
CREATE TABLE IF NOT EXISTS `shopadmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopadmin`
--

INSERT INTO `shopadmin` (`id`, `username`, `email`, `contactno`, `password`, `regDate`) VALUES
(4, 'shopszz', 'zz@gmail.com', 3223, '25ed1bcb423b0b7200f485fc5ff71c8e', '2019-11-18 14:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `shopadminlog`
--

DROP TABLE IF EXISTS `shopadminlog`;
CREATE TABLE IF NOT EXISTS `shopadminlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopadminlog`
--

INSERT INTO `shopadminlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(158, 'zz', 0x34312e38392e3234352e330000000000, '2019-11-26 06:25:45', '26-11-2019 09:32:57 AM', 1),
(159, 'zz', 0x34312e38392e3234352e330000000000, '2019-11-26 06:34:58', '26-11-2019 09:36:37 AM', 1),
(160, 'shopszz', 0x34312e38392e3234352e330000000000, '2019-11-26 12:25:13', '26-11-2019 03:25:26 PM', 1),
(161, 'shopszz', 0x34312e38392e3234352e330000000000, '2019-11-27 08:10:12', '27-11-2019 11:14:13 AM', 1),
(162, 'shopszz', 0x34312e38392e3234352e330000000000, '2019-11-27 09:55:12', '27-11-2019 12:57:52 PM', 1),
(163, 'shopszz', 0x34312e38392e3234352e330000000000, '2019-11-27 10:04:59', '27-11-2019 01:08:11 PM', 1),
(164, 'shopszz', 0x34312e38392e3234352e330000000000, '2019-11-27 12:43:28', '27-11-2019 03:47:50 PM', 1),
(165, 'shopszz', 0x34312e38392e3234352e330000000000, '2019-11-27 12:50:05', '27-11-2019 03:57:53 PM', 1),
(166, 'shopszz', 0x34312e38392e3234352e330000000000, '2019-11-28 07:07:25', '28-11-2019 10:11:24 AM', 1),
(167, 'shopszz', 0x34312e38392e3234352e330000000000, '2019-12-05 07:23:54', NULL, 1),
(168, 'shopszz', 0x34312e38392e3234352e330000000000, '2019-12-05 08:49:19', '05-12-2019 11:52:21 AM', 1),
(169, 'Shopszz', 0x34312e39302e362e3136000000000000, '2019-12-06 15:42:26', '06-12-2019 06:43:09 PM', 1),
(170, 'Shopszz', 0x34312e39302e342e3134350000000000, '2019-12-11 14:28:10', '11-12-2019 05:30:39 PM', 1),
(171, 'shopszz', 0x34312e38392e3234352e330000000000, '2019-12-12 07:26:46', '12-12-2019 10:30:32 AM', 1),
(172, 'shopszz', 0x3a3a3100000000000000000000000000, '2020-01-24 08:09:26', '24-01-2020 11:11:28 AM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

DROP TABLE IF EXISTS `shops`;
CREATE TABLE IF NOT EXISTS `shops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shopName` varchar(255) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `shopName`, `Location`, `creationDate`, `updationDate`) VALUES
(1, 'Avara', 'Meru Makutano', '2019-12-14 13:25:48', NULL),
(2, 'Jeniko', 'Meru Town', '2019-12-14 13:25:48', '22-12-2019 12:29:24 AM'),
(3, 'Aurora', 'Harambee', '2019-12-14 13:25:48', NULL),
(4, 'Nisa', 'Nyeri', '2019-12-14 13:25:48', '22-12-2019 12:29:04 AM'),
(5, 'Nives', 'Isiolo', '2019-12-14 13:25:48', NULL),
(6, 'Gladys', 'Lodwar', '2019-12-14 13:25:48', '22-12-2019 12:28:58 AM'),
(7, 'Niko', 'Embu', '2019-12-14 13:25:48', '22-12-2019 12:29:08 AM'),
(8, 'Timers', 'Mwea', '2019-12-14 13:25:48', '22-12-2019 12:29:17 AM'),
(9, 'Nives', 'Ruiru', '2019-12-14 13:25:48', '22-12-2019 12:29:12 AM'),
(10, 'Masters', 'Karen', '2019-12-14 13:25:48', '22-12-2019 12:28:52 AM'),
(11, 'CakeHouse', 'Nanyuki', '2019-12-21 06:35:27', '21-12-2019 09:36:55 AM');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SubscriberEmail` varchar(120) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `SubscriberEmail`, `PostingDate`) VALUES
(1, 'anuj.lpu1@gmail.com', '2017-06-22 16:35:32'),
(3, 'dfdf@gmail.com', '2019-11-24 08:37:52'),
(6, 'aw@gmail.com', '2019-11-24 09:03:01'),
(7, 'dfdsfdgfdgfddf@gmail.com', '2019-11-24 09:24:41'),
(8, 'ann@gmail.com', '2019-11-24 09:32:23'),
(18, 'mutuma754@gmail.com', '2019-12-02 06:23:09'),
(19, 'n@gmail.com', '2019-12-02 07:32:58'),
(20, 'phu1@gmail.com', '2019-12-05 07:18:59'),
(21, 'rita@gmail.com', '2019-12-16 13:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserEmail` varchar(100) NOT NULL,
  `Testimonial` text NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `images` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `UserEmail`, `Testimonial`, `PostingDate`, `images`, `status`) VALUES
(1, 'test@gmail.com', 'Your testimonial .', '2017-06-18 04:44:31', '23.png', 1),
(2, 'test@gmail.com', 'Your testimonial .', '2017-06-18 04:46:05', '23.png', 1),
(5, 'mm@gmaiol.com', 'mmmm', '2019-12-02 06:38:35', '4d101a8775b890087a270d659a193b99.jpg', NULL),
(6, 'm@gmaiol.com', 'Cool', '2019-12-16 14:08:51', '', NULL),
(7, 'mm@gmaiol.com', 'Cool', '2019-12-16 14:08:56', '', NULL),
(8, 'm@gmaiol.com', 'Oyaa', '2019-12-16 14:10:14', 'images (84).jpeg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(35) NOT NULL,
  `lastname` varchar(35) NOT NULL,
  `username` varchar(12) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `email` varchar(120) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(120) NOT NULL,
  `Profile` varchar(255) DEFAULT NULL,
  `DatePosted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `contactno`, `email`, `address`, `password`, `Profile`, `DatePosted`) VALUES
(4, 'ken', 'mwiti', 'ken001', '34324', 'ken@gmail.com', 'nmba', 'f632fa6f8c3d5f551c5df867588381ab', NULL, '2019-11-27 08:05:40'),
(5, 'ann', 'karimi', 'annkrm', '468786648', 'ann@gmail.com', 'canada', '7e0d7f8a5d96c24ffcc840f31bce72b2', NULL, '2019-11-27 08:05:40'),
(6, 'Mutuma', 'Mwenda', 'mutuma', '564565', 'gfhfgh@gmail.com', 'gfhgf', '21232f297a57a5a743894a0e4a801fc3', NULL, '2019-11-27 08:05:40'),
(9, 'vvvv', 'vvvv', 'vvv', '5445', 'vvv@gmail.com', 'vvvvv', 'vvvv', NULL, '2019-11-27 08:05:40'),
(28, 'df', 'df', 'dftrhtyjty', '4334435', 'df@co.ke', 'df', 'eff7d5dba32b4da32d9a67a519434d3f', NULL, '2019-11-27 08:05:40'),
(12, 'vvvyuv', 'vvvv', 'vvv', '5445', 'ytu@gmail.com', 'vvvvv', 'vvvv', NULL, '2019-11-27 08:05:40'),
(38, 'piper', 'mary', 'piper', '254719577260', 'piper@gmail.com', 'Meru', 'ca058f7ff8d77c9bfc0fc0aceb0d2d19', NULL, '2019-12-15 06:24:49'),
(23, 'cc', 'cc', 'cc123', '12345', 'cc@gmail.com', '12', 'e0323a9039add2978bf5b49550572c7c', NULL, '2019-11-27 08:05:40'),
(15, 'ffh', 'tyuy', 'tyuy', '5445', 'vvv@gmail.com', 'vvvvv', 'vvvv', NULL, '2019-11-27 08:05:40'),
(24, 'bb', 'bb', 'bb', '2332', 'bb@gmail.com', '23', '21ad0bd836b90d08f4cf640b4c298e7c', NULL, '2019-11-27 08:05:40'),
(25, 'zz', 'zz', 'zz', '254719577260', 'zz@gmail.com', 'zz', '25ed1bcb423b0b7200f485fc5ff71c8e', NULL, '2019-11-27 08:05:40'),
(26, 'ian', 'munene', 'ian11', '123123', 'ian@gmail.com', 'Meru', 'a71a448d3d8474653e831749b8e71fcc', NULL, '2019-11-27 08:05:40'),
(27, 'john', 'mutua', 'johnie', '123456', 'johnie@gmail.com', 'Maua', '527bd5b5d689e2c32ae974c6229ff785', NULL, '2019-11-27 08:05:40'),
(29, 'hh', 'hh', 'hh', '645654', 'hh@gmail.com', 'hh', '5e36941b3d856737e81516acd45edc50', NULL, '2019-11-27 08:05:40'),
(31, 'ghj', 'gfjfj', 'rootghj', '4334435', 'df@co.ke', 'dh', 'eff7d5dba32b4da32d9a67a519434d3f', NULL, '2019-11-27 08:05:40'),
(32, 'mmmmmmm', 'nn', 'nnnnnnn', '0719577260', 'nn@gmail.com', 'nn', 'eab71244afb687f16d8c4f5ee9d6ef0e', NULL, '2019-11-27 08:07:06'),
(33, 'mm', 'mm', 'mmmm', '254719577260', 'm@gmail.com', 'mm', 'b3cd915d758008bd19d0f2428fbb354a', NULL, '2019-11-29 08:40:14'),
(34, 'Alex', 'Alex', 'Alex', '25419577260', 'alex@gmail.com', 'Meru', '534b44a19bf18d20b71ecc4eb77c572f', NULL, '2019-12-02 11:21:28'),
(35, 'Rita', 'Ora', 'RitaOra', '254719577260', 'rita@gmail.com', 'Eldoret', '2794d223f90059c9f705c73a99384085', 'colors.png', '2019-12-03 07:55:24'),
(36, 'Mark', 'Mwenda', 'Mark', '254719577260', 'mark@gmail.com', 'Embu', 'ea82410c7a9991816b5eeeebe195e20a', NULL, '2019-12-05 07:22:10'),
(37, 'Davi', 'Davi', 'Davi', '254758868822', 'davismichubu@gmail.com', 'Meru', '59cccaf678e0ac3f78fcfc4d93146c74', NULL, '2019-12-11 14:23:04'),
(39, 'frank', 'Maitethia', 'FrankKe', '254719577260', 'frank@gmail.com', 'Meru', '26253c50741faa9c2e2b836773c69fe6', 'a7.jpg', '2019-12-16 13:12:50'),
(40, 'timo', 'mwenda', 'timothy', '254719577260', 'timo@gmail.com', 'Isiolo', '3373c81c685536ee89ebcb4369d95c5f', 'a7.jpg', '2019-12-16 13:16:19'),
(41, 'euty', 'Mwendi', 'Euti', '254719577260', 'euty@gmail.com', 'Maua', 'ac2f1c88f924783599a04a0f92c8b736', '9a34fadfa464523a7aa8c47ec4bd232a.jpg', '2019-12-16 13:26:27'),
(42, 'Ian', 'Kajau', 'Iankajau', '25419577260', 'ianoh@gmail.com', 'Nanyuki', 'a71a448d3d8474653e831749b8e71fcc', 'Asset 14x.png', '2019-12-16 13:37:08'),
(43, 'mercy', 'lastname', 'username', 'contactno', 'mercy@gmail.com', 'address', 'bf2ff2ed3c83c3c5ce510c4666f6fb0d', '1.jpg', '2019-12-21 04:55:58'),
(44, 'albah', 'kamau', 'alabah', '254722482536', 'albah@gmail.com', 'Nkubu', '2b7be0527e64aaddcf7cc3f5cf220d5c', 'w_unir02c8.jpg', '2019-12-23 06:39:45'),
(45, 'sd', 'dsf', 'root', '2124423', 'sdsf@gmail.com', 'wewe', 'b19eed7dd2015d5bb3c2f5b82a4f431c', '8b1a944cf2c01e60f9bc66e41884c9a9 (1).jpg', '2020-01-17 17:49:19'),
(46, 'hfgh', 'fghfgh', 'root', '2124423', 'gf@gmail.com', 'fg', '07bb4f0bf5eba55a062fa3cf912ed4a9', '5244511_0.jpg', '2020-03-25 18:09:05'),
(47, 'bbbb', 'bbbbbb', 'root', '332', 'gfhhhh@gmail.com', 'bbbb', '62100ca4fb3293e9b0b9b49daee205c8', NULL, '2020-10-08 16:45:16'),
(48, 'aa', 'aa', 'aa', '43543', 'a@gmail.com', 'aa', '4124bc0a9335c27f086f24ba207a4912', NULL, '2022-03-05 18:11:03'),
(49, 'cc', 'cc', 'cc', '22', 'ccc@gmail.com', 'cc', 'e0323a9039add2978bf5b49550572c7c', '273788490_4749841755113565_5011077362239389210_n.jpg', '2022-03-05 18:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

DROP TABLE IF EXISTS `userlog`;
CREATE TABLE IF NOT EXISTS `userlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=334 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(242, 'rita@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-04 07:16:05', NULL, 1),
(245, 'zz@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-05 06:42:37', '05-12-2019 10:23:26 AM', 1),
(270, 'zz@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-09 07:24:22', '09-12-2019 10:28:35 AM', 1),
(271, 'rita@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-09 07:32:27', '09-12-2019 10:35:25 AM', 1),
(272, 'rita@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-09 07:36:06', '09-12-2019 10:38:05 AM', 1),
(273, 'rita@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-09 07:38:31', '09-12-2019 10:40:34 AM', 1),
(274, 'zz@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-09 07:55:47', NULL, 1),
(275, 'rita@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-09 08:16:38', '09-12-2019 11:24:19 AM', 1),
(276, 'rita@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-09 08:24:54', '09-12-2019 11:25:19 AM', 1),
(277, 'rita@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-09 10:22:50', '09-12-2019 01:25:42 PM', 1),
(278, 'zz@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-09 10:27:25', '09-12-2019 01:27:51 PM', 1),
(279, 'zz@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-09 10:29:08', NULL, 1),
(280, 'rita@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-09 11:52:27', '09-12-2019 02:53:37 PM', 1),
(281, 'rita@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-10 09:28:58', '10-12-2019 12:29:08 PM', 1),
(282, 'rita@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-10 10:41:30', '10-12-2019 01:41:41 PM', 1),
(283, 'rita@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-10 10:42:15', NULL, 1),
(284, 'rita@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-11 07:33:11', NULL, 1),
(285, 'rita@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-11 08:15:06', '11-12-2019 11:45:10 AM', 1),
(286, 'zz@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-11 08:32:38', NULL, 1),
(287, 'rita@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-11 11:15:11', NULL, 1),
(288, 'rita@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-11 12:55:27', '11-12-2019 03:55:41 PM', 1),
(289, 'davismichubu@gmail.com', 0x34312e39302e342e3233350000000000, '2019-12-11 14:23:21', NULL, 1),
(290, 'davismichubu@gmail.com', 0x34312e39302e342e3134350000000000, '2019-12-11 14:31:42', '11-12-2019 05:32:46 PM', 1),
(291, 'rita@gmail.com', 0x34312e39302e352e3231330000000000, '2019-12-11 14:33:09', '11-12-2019 05:33:32 PM', 1),
(292, 'davismichubu@gmail.com', 0x34312e39302e352e3231330000000000, '2019-12-11 14:34:52', NULL, 1),
(293, 'rita@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-12 10:07:44', NULL, 1),
(294, 'rita@gmail.com', 0x3139362e39372e39312e313736000000, '2019-12-14 10:07:26', NULL, 1),
(295, 'rita@gmail.com', 0x3139362e39372e39312e313736000000, '2019-12-14 10:08:53', NULL, 1),
(296, 'rita@gmail.com', 0x3139362e39372e39312e313736000000, '2019-12-14 10:10:29', NULL, 1),
(297, 'rita@gmail.com', 0x3139362e39372e39312e313736000000, '2019-12-14 10:26:09', '14-12-2019 01:29:41 PM', 1),
(298, 'piper@gmail.com', 0x34312e38312e3233362e313233000000, '2019-12-15 06:25:09', '15-12-2019 09:25:27 AM', 1),
(299, 'rita@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-16 09:08:55', NULL, 1),
(300, 'zz@gmail.com', NULL, '2019-12-16 09:37:12', '16-12-2019 12:37:19 PM', 1),
(301, 'rita@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-16 09:50:54', '16-12-2019 12:52:23 PM', 1),
(302, 'rita@gmail.com', 0x34312e38392e3234352e330000000000, '2019-12-16 10:57:02', '16-12-2019 01:57:26 PM', 1),
(303, 'rita@gmail.com', NULL, '2019-12-16 10:59:15', '16-12-2019 01:59:38 PM', 1),
(304, 'rita@gmail.com', NULL, '2019-12-16 12:50:49', NULL, 1),
(305, 'rita@gmail.com', NULL, '2019-12-16 13:05:18', '16-12-2019 04:06:56 PM', 1),
(306, 'frank@gmail.com', NULL, '2019-12-16 13:13:04', '16-12-2019 04:14:14 PM', 1),
(307, 'timo@gmail.com', NULL, '2019-12-16 13:18:55', '16-12-2019 04:24:24 PM', 1),
(308, 'frank@gmail.com', NULL, '2019-12-16 13:24:39', '16-12-2019 04:25:18 PM', 1),
(309, 'euty@gmail.com', NULL, '2019-12-16 13:26:39', '16-12-2019 04:34:34 PM', 1),
(310, 'ianoh@gmail.com', NULL, '2019-12-16 13:37:25', NULL, 1),
(311, 'rita@gmail.com', NULL, '2019-12-16 20:46:00', '17-12-2019 12:36:00 AM', 1),
(312, 'zz@gmail.com', NULL, '2019-12-16 21:36:08', '17-12-2019 12:44:27 AM', 1),
(313, 'rita@gmail.com', NULL, '2019-12-16 21:44:40', '17-12-2019 08:44:01 PM', 1),
(314, 'rita@gmail.com', NULL, '2019-12-17 18:42:38', NULL, 1),
(315, '', 0x3a3a3100000000000000000000000000, '2019-12-17 18:54:29', '21-12-2019 10:01:05 AM', 0),
(316, 'root', 0x3a3a3100000000000000000000000000, '2019-12-17 18:55:59', NULL, 0),
(317, 'root', 0x3a3a3100000000000000000000000000, '2019-12-17 18:56:24', NULL, 0),
(318, 'rita@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-18 19:54:19', NULL, 1),
(319, 'rita@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-18 19:55:16', NULL, 1),
(320, 'mercy@gmail.com', NULL, '2019-12-21 04:56:11', '21-12-2019 08:47:56 AM', 1),
(321, 'rita@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-21 05:49:02', NULL, 1),
(322, 'rita@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-21 06:00:08', '21-12-2019 09:01:46 AM', 1),
(323, 'rita@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-21 16:49:18', NULL, 1),
(324, 'zz@gmail.com', 0x3a3a3100000000000000000000000000, '2019-12-21 21:26:46', '22-12-2019 12:02:48 PM', 1),
(325, 'rita@gmail.com', 0x3a3a3100000000000000000000000000, '2020-01-24 08:01:05', '24-01-2020 11:03:48 AM', 1),
(326, 'rita@gmail.com', 0x3a3a3100000000000000000000000000, '2020-01-24 08:04:17', NULL, 1),
(327, 'rita@gmail.com', 0x3a3a3100000000000000000000000000, '2020-01-24 08:05:36', NULL, 1),
(328, 'rita@gmail.com', 0x3a3a3100000000000000000000000000, '2020-01-24 18:32:58', NULL, 1),
(329, 'a@gmail.com', 0x3a3a3100000000000000000000000000, '2022-03-05 18:11:09', NULL, 1),
(330, 'ccc@gmail.com', 0x3a3a3100000000000000000000000000, '2022-03-05 18:16:18', '05-03-2022 09:20:46 PM', 1),
(331, 'ccc@gmail.com', 0x3a3a3100000000000000000000000000, '2022-03-05 18:23:43', '05-03-2022 09:28:15 PM', 1),
(332, 'ccc@gmail.com', NULL, '2022-03-05 18:31:19', NULL, 1),
(333, 'ccc@gmail.com', NULL, '2022-03-06 16:25:36', '06-03-2022 08:35:24 PM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `userId`, `productId`, `postingDate`) VALUES
(4, 7, 2, '2019-11-23 07:07:44'),
(6, 25, 37, '2019-11-29 07:35:16'),
(11, 25, 52, '2019-12-02 06:24:36'),
(13, 25, 40, '2019-12-02 06:43:16'),
(14, 34, 45, '2019-12-02 11:24:11'),
(15, 35, 49, '2019-12-03 14:49:48'),
(16, 25, 52, '2019-12-05 06:48:58'),
(17, 25, 58, '2019-12-05 06:54:26'),
(18, 35, 51, '2019-12-05 07:19:29'),
(19, 35, 50, '2019-12-05 07:20:02'),
(20, 36, 45, '2019-12-05 07:22:38'),
(21, 25, 36, '2019-12-09 10:29:28'),
(22, 25, 42, '2019-12-09 10:29:47'),
(23, 35, 37, '2019-12-11 07:33:49'),
(24, 35, 38, '2019-12-11 07:34:05'),
(26, 37, 36, '2019-12-11 14:35:34'),
(27, 37, 57, '2019-12-11 14:36:03'),
(28, 37, 59, '2019-12-11 14:36:16'),
(29, 42, 47, '2019-12-16 13:44:42'),
(30, 42, 45, '2019-12-16 13:44:54'),
(31, 42, 53, '2019-12-16 13:45:08'),
(32, 42, 53, '2019-12-16 13:45:16'),
(33, 43, 37, '2019-12-21 05:12:43'),
(34, 43, 47, '2019-12-21 05:16:28'),
(35, 43, 41, '2019-12-21 05:16:34'),
(36, 43, 40, '2019-12-21 05:16:40'),
(37, 43, 58, '2019-12-21 05:16:47'),
(39, 43, 42, '2019-12-21 05:17:20'),
(40, 43, 68, '2019-12-21 05:23:32'),
(41, 43, 68, '2019-12-21 05:24:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
