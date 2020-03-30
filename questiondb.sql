-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2019 at 11:24 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `questiondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `summary` blob NOT NULL,
  `eventBanner` varchar(200) NOT NULL,
  `startDate` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `books`
--


-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(200) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(1, 'Fiqh'),
(2, 'Aqeedah'),
(3, 'Solat'),
(4, 'Hajj'),
(5, 'Sawm'),
(6, 'Dressing'),
(7, 'Contempory Issues');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE IF NOT EXISTS `lectures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `summary` blob NOT NULL,
  `eventBanner` varchar(200) NOT NULL,
  `startDate` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `lectures`
--


-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `summary` blob NOT NULL,
  `eventBanner` varchar(500) NOT NULL,
  `startDate` varchar(100) NOT NULL,
  `postedby` text NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `code`, `title`, `category`, `summary`, `eventBanner`, `startDate`, `postedby`, `status`) VALUES
(1, 'qtn001', 'Ruling of using Siwak during day of Ramadan?', 'Sawm', 0x536f6d656f6e652061736b65642061626f7574207468652072756c696e67206f66207573696e6720536977616b2028737469636b29207768696c652066617374696e6720647572696e672074686520646179206f662052616d6164616e, 'https://soundcloud.com/user-71335749/fatawa-sheikh-ajia', '16/01/2019', 'Abdulahi Abdulazeez', 'answered'),
(2, 'qtn002', 'If a woman seeing her menses more than ten days, what is she going to do?', 'Fiqh', '', '', '16/04/2019', 'Ajibade Surajudeen', 'unanswered'),
(3, 'qtn609003', 'Is it a must we use the name  ''Allah''  to call God?', 'Aqeedah', 0x736f6d652070656f706c65207573656420746f2073617920746861742077652073686f756c64206e6f742075736520616e6f74686572206e616d6520746f2063616c6c20416c6c61682c206d61792062652063616c6c696e672068696d20476f642c204f6c6f68756e2c2077686174206973207468652072756c696e67206f662049736c616d20726567617264696e67206974, 'https://soundcloud.com/user-71335749/fatawa-on-using-the-name-allah-to-call-god', 'Sun 28-Apr-2019', 'odeyale.k@gmail.com', 'answered'),
(4, 'qtn7809004', 'What is the ruling of young boy to lead the solat?', 'Solat', 0x496e206f7572204d6f73717565207468657265206973206120796f756e6720626f79207468617420686173206d656d6f72697a652061206c6f74206f6620636861707465727320696e2074686520486f6c7920517572616e2063616e207765206d616b652068696d20617320496d616d, '', 'Sun 28-Apr-2019', 'odeyale_kehinde@yahoo.com', 'unanswered'),
(5, 'qtn8610005', 'Can someone who is doing haram business use his money to send us to Hajj?', 'Hajj', 0x49206861766520612073697374657220746861742069732073656c6c696e6720416c636f686f6c20616e64207368652077616e7420746f2070617920666f72206d792048616a6a2c206966206920676f207769746820686572206d6f6e6579206973206d792048616a6a2061636365707461626c653f, '', 'Sun 28-Apr-2019', 'odeyale.k@gmail.com', 'unanswered');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(20) NOT NULL,
  `sName` varchar(50) NOT NULL,
  `fName` varchar(250) NOT NULL,
  `lName` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `profilePics` varchar(200) NOT NULL,
  `state` varchar(120) NOT NULL,
  `doj` varchar(100) NOT NULL,
  `userLoginId` int(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `acct_name` varchar(100) NOT NULL,
  `acct_no` varchar(300) NOT NULL,
  `bank_name` varchar(300) NOT NULL,
  `customer_class` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `postedby` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `cust_id`, `sName`, `fName`, `lName`, `phone`, `gender`, `profilePics`, `state`, `doj`, `userLoginId`, `address`, `acct_name`, `acct_no`, `bank_name`, `customer_class`, `type`, `postedby`) VALUES
(1, '', 'Odeyale', 'Ajibola', '', '+2348053456634', 'Male', 'user/profilePics/profilePix1.jpg', 'Oyo', '', 1, '', '', '', '0', '', 'Admin', ''),
(25, 'M128118008', 'Akindele', 'Akinsola', 'Adewale', '07019660070', 'Male', 'user/profilePics/profilePix46.jpg', '', 'Tue 09-Jan-2018 | 11 : 46 : 00', 46, 'osungbade molete', '', '', '', 'Basic', 'Customer', ''),
(24, 'M124646007', 'kolade', 'Adisa', 'Adewale', '0805644532', 'Female', 'user/profilePics/profilePix45.jpg', '', 'Sun 17-Dec-2017 | 05 : 44 : 38', 45, 'Sango Ibadan', '', '', '', 'Premium', 'Customer', ''),
(20, 'M121391003', 'Oladele', 'Onaselu', 'Alade', '07019660070', 'Male', 'user/profilePics/profilePix41.jpg', '', 'Mon 30-Oct-2017 | 02 : 23 : 16', 41, 'Ajibade Mokola Ibadan', '', '', '', 'Silver', 'Customer', ''),
(28, 'KXY5715007', 'Musiliudeen', 'Odeyale', 'Kehinde', '8053456634', 'Male', 'user/profilePics/profilePix49.jpg', '', 'Mon 08-Oct-2018 | 21 : 14 : 41', 49, '89, Awolowo Road Okebola Ibadan', '', '', '', 'Basic', 'Customer', ''),
(26, 'M126729005', 'Mustapha', 'Abdul', 'Razaq', '08067829299', 'Male', 'user/profilePics/profilePix47.jpg', '', 'Fri 14-Sep-2018 | 17 : 47 : 59', 47, 'osungbade molete', '', '', '', 'Silver', 'Customer', ''),
(29, 'KXY4382008', 'Musiliudeen', 'Odeyale', 'David', '9023531375', 'Male', 'user/profilePics/profilePix50.jpg', '', 'Mon 08-Oct-2018 | 21 : 49 : 06', 50, 'Allen Avenue Ikeja, Lagos, Ifewumi Street gbaremu Ibadan', '', '', '', 'Silver', 'Customer', 'Odeyale Ajibola ');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(250) NOT NULL,
  `eMail` varchar(250) NOT NULL,
  `password` blob NOT NULL,
  `type` varchar(250) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `userName`, `eMail`, `password`, `type`, `status`) VALUES
(1, 'admin2019', 'odeyale_kehinde@yahoo.com', 0x64326c7a5a4739744f546c4151413d3d, 'Admin', 'Confirmed'),
(46, 'afo', 'afo@yahoo.com', 0x59575a76, 'Customer', 'Pending'),
(45, 'dddd', 'dd@yahoo.com', 0x5a47526b5a413d3d, 'Customer', 'Pending'),
(44, 'akindele', 'ishola@yahoo.com', 0x59577470626d526c6247553d, 'Customer', 'Pending'),
(43, 'kolade', 'odeyale.k@gmail.com', 0x613239735957526c, 'Customer', 'Pending'),
(42, 'admin', 'admin@mile12connect.com', 0x62576c735a544579, 'Staff', 'Pending'),
(41, 'oladele', 'oladele@yahoo.com', 0x623278685a4756735a513d3d, 'Customer', 'Confirmed'),
(40, 'satlink', 'satlinkhost@yahoo.com', 0x6332463062476c75617a453d, 'Customer', 'Confirmed'),
(47, 'mustoy', 'mustoy@yahoo.com', 0x6258567a64473935, 'Customer', 'Pending'),
(48, 'staff1', 'davidnsima@yahoo.com', 0x633352685a6d5978, 'Staff', 'Pending'),
(49, 'odeyale', 'info@markazradio.com', 0x6232526c655746735a513d3d, 'Customer', 'Confirmed'),
(50, 'ode', 'ode@yahoo.com', 0x6232526c, 'Customer', 'Pending');
