-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2014 at 09:16 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `luxurious`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE IF NOT EXISTS `advertise` (
  `Advertise` varchar(400) DEFAULT NULL,
  `Id` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`Advertise`, `Id`) VALUES
('We are going to give some offer for 2014 Tour.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `advertise_book`
--

CREATE TABLE IF NOT EXISTS `advertise_book` (
  `Advertise_Book` varchar(400) DEFAULT NULL,
  `ID` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertise_book`
--

INSERT INTO `advertise_book` (`Advertise_Book`, `ID`) VALUES
('WE ARE GOING TO SERVE ONLY 40 PEOPLE(FIRST COME FIRST SERVE)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `username` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `email`, `password`, `address`, `phone`) VALUES
('aumi', 'aumi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'banani', '01916284493'),
('surjo', 'drobortara@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'tongi', '01754146367');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_cost_list`
--

CREATE TABLE IF NOT EXISTS `hotel_cost_list` (
  `Hotel_No` int(10) NOT NULL DEFAULT '0',
  `Name` varchar(150) DEFAULT NULL,
  `Classic` varchar(150) DEFAULT NULL,
  `Luxurious` varchar(150) DEFAULT NULL,
  `Place` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`Hotel_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_cost_list`
--

INSERT INTO `hotel_cost_list` (`Hotel_No`, `Name`, `Classic`, `Luxurious`, `Place`) VALUES
(1, 'Sea_girl', '---', '4000/=', 'Cox`s Bazar'),
(2, 'King Palace', '---', '4100/=', 'Cox`s Bazar'),
(3, 'Ocean', '---', '4200/=', 'Cox`s Bazar'),
(4, 'Sea Beach', '2000/=', '4000/=', 'Dhaka'),
(5, 'Paradise', '1700', '---', 'Cox`s Bazar');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `package_no` int(50) NOT NULL DEFAULT '0',
  `strt` varchar(150) DEFAULT NULL,
  `dest` varchar(150) DEFAULT NULL,
  `stay` varchar(150) DEFAULT NULL,
  `cost` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`package_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_no`, `strt`, `dest`, `stay`, `cost`) VALUES
(1, 'Dhaka', 'Cox`s Bazar', '4 days & 2 night', '10500/=(Bus)'),
(2, 'Dhaka', 'Cox`s Bazar & Seintmartine', '7 days & 6 night', '15500/=(Bus)'),
(3, 'Rangamati', 'Dhaka', 'fddtyrd', '254984'),
(4, 'Chittagong', 'Cox`s Bazar & Seintmartine', '5 days', '3000/=');

-- --------------------------------------------------------

--
-- Table structure for table `p_customer`
--

CREATE TABLE IF NOT EXISTS `p_customer` (
  `p_username` varchar(30) NOT NULL,
  `p_email` varchar(50) NOT NULL,
  `p_address` varchar(50) NOT NULL,
  `p_phone` varchar(30) NOT NULL,
  `p_confirm` varchar(5) NOT NULL,
  `p_day` varchar(10) NOT NULL,
  `p_month` varchar(10) NOT NULL,
  `p_year` varchar(10) NOT NULL,
  `p_package` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_customer`
--

INSERT INTO `p_customer` (`p_username`, `p_email`, `p_address`, `p_phone`, `p_confirm`, `p_day`, `p_month`, `p_year`, `p_package`) VALUES
('Surjo Ahmed', 'drobortara@gmail.com', 'Tongi', '01754146367', 'no', '5', '4', '2014', '1');

-- --------------------------------------------------------

--
-- Table structure for table `p_customer_custom`
--

CREATE TABLE IF NOT EXISTS `p_customer_custom` (
  `p_username` varchar(30) NOT NULL,
  `p_email` varchar(50) NOT NULL,
  `p_address` varchar(50) NOT NULL,
  `p_phone` varchar(30) NOT NULL,
  `p_confirm` varchar(5) NOT NULL,
  `p_trans` varchar(20) NOT NULL,
  `p_t_date` varchar(20) NOT NULL,
  `p_t_time` varchar(20) NOT NULL,
  `p_h` varchar(20) NOT NULL,
  `p_h_date` varchar(20) NOT NULL,
  `p_h_days` varchar(20) NOT NULL,
  `p_s` varchar(20) NOT NULL,
  `p_s_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_customer_custom`
--

INSERT INTO `p_customer_custom` (`p_username`, `p_email`, `p_address`, `p_phone`, `p_confirm`, `p_trans`, `p_t_date`, `p_t_time`, `p_h`, `p_h_date`, `p_h_days`, `p_s`, `p_s_date`) VALUES
('Surjo Ahmed', 'drobortara@gmail.com', 'Tongi', '01754146367', 'yes', 'Airlines', '', '', 'King Palace', '', '', 'Titanic', '28/5/2014');

-- --------------------------------------------------------

--
-- Table structure for table `ship_cost_list`
--

CREATE TABLE IF NOT EXISTS `ship_cost_list` (
  `Name` varchar(150) NOT NULL DEFAULT '',
  `Classic` varchar(150) DEFAULT NULL,
  `M_luxurious` varchar(150) DEFAULT NULL,
  `Luxurious` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ship_cost_list`
--

INSERT INTO `ship_cost_list` (`Name`, `Classic`, `M_luxurious`, `Luxurious`) VALUES
('Titanic', '600/=', '1000/=\r\n(with break fast)', '1500/=\r\n(with break fast\r\n& lunch)');

-- --------------------------------------------------------

--
-- Table structure for table `transport_cost_list`
--

CREATE TABLE IF NOT EXISTS `transport_cost_list` (
  `Trans_No` int(12) NOT NULL DEFAULT '0',
  `Name` varchar(150) DEFAULT NULL,
  `Classic` varchar(150) DEFAULT NULL,
  `Luxurious` varchar(150) DEFAULT NULL,
  `Place` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`Trans_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport_cost_list`
--

INSERT INTO `transport_cost_list` (`Trans_No`, `Name`, `Classic`, `Luxurious`, `Place`) VALUES
(1, 'Airlines', '30000/=', '40000/=', 'Cox`s Bazar'),
(2, 'Bus', '1500/=', '6000/=', 'Cox`s Bazar'),
(3, 'Car', '3000/=', '6700/=', 'Cox`s Bazar'),
(4, 'Bus', '2000/=', '4000/=', 'Teqnaf'),
(5, 'Car', '4000/=', '7500/=', 'Teqnaf'),
(6, 'Air lines', '5000/=', '10000/=', 'Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `phone` (`phone`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `address`, `phone`, `email`) VALUES
(0, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Tongi-Gazipur', '+8801754146367', 'rizwan.cse33@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
