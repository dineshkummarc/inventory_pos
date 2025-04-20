-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 02, 2016 at 06:23 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(1) NOT NULL,
  `user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'cashier', 'cashier', 'cashier');

-- --------------------------------------------------------

--
-- Table structure for table `cuscode`
--

CREATE TABLE IF NOT EXISTS `cuscode` (
  `id` int(1) NOT NULL,
  `code` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuscode`
--

INSERT INTO `cuscode` (`id`, `code`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `productlist`
--

CREATE TABLE IF NOT EXISTS `productlist` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(100) NOT NULL,
  `pdesc` varchar(100) NOT NULL,
  `sold` int(11) NOT NULL,
  `pleft` int(4) NOT NULL,
  `oqty` int(11) NOT NULL,
  `total_qty` int(11) NOT NULL,
  `pprice` varchar(50) NOT NULL,
  `punit` varchar(50) NOT NULL,
  `pcategory` varchar(50) NOT NULL,
  `wsold` float(10,0) NOT NULL,
  `wleft` float NOT NULL,
  `wholesale_qty` float NOT NULL,
  `wholesale_price` varchar(50) NOT NULL,
  `retail_unit` varchar(50) NOT NULL,
  `psupplier` varchar(50) NOT NULL,
  `psellingprice` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `day_name` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `productlist`
--

INSERT INTO `productlist` (`id`, `pcode`, `pdesc`, `sold`, `pleft`, `oqty`, `total_qty`, `pprice`, `punit`, `pcategory`, `wsold`, `wleft`, `wholesale_qty`, `wholesale_price`, `retail_unit`, `psupplier`, `psellingprice`, `date`, `time`, `day_name`, `month`, `day`, `year`) VALUES
(1, '21323', 'asdasda', 0, 2, 0, 0, '22', 'pc(s)', 'Grocery', 0, 0, 0, '', '', 'wwqe', '23.54', '06/02/2016', '19 : 57 : 04', 'Thursday', 'June', '2', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `punit` varchar(50) NOT NULL,
  `wholesale_qty` varchar(100) NOT NULL,
  `retail_unit` varchar(100) NOT NULL,
  `total` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `PRICE` varchar(50) NOT NULL,
  `pcode` varchar(50) NOT NULL,
  `totalretail` varchar(50) NOT NULL,
  `checke` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `day_name` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sales`
--


-- --------------------------------------------------------

--
-- Table structure for table `sales_record`
--

CREATE TABLE IF NOT EXISTS `sales_record` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `punit` varchar(50) NOT NULL,
  `wholesale_qty` varchar(100) NOT NULL,
  `retail_unit` varchar(100) NOT NULL,
  `total` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `PRICE` varchar(50) NOT NULL,
  `pcode` varchar(50) NOT NULL,
  `totalretail` varchar(50) NOT NULL,
  `checke` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `day_name` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sales_record`
--


-- --------------------------------------------------------

--
-- Table structure for table `socode`
--

CREATE TABLE IF NOT EXISTS `socode` (
  `id` int(1) NOT NULL,
  `code` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `socode`
--

INSERT INTO `socode` (`id`, `code`) VALUES
(1, 521);
