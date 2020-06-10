-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 19, 2020 at 06:05 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shalini_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_image` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_tag` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `cut_price` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `item_image`, `item_name`, `item_tag`, `price`, `cut_price`) VALUES
(1, 'cate/sa.webp', 'food 1', 'indian food lsit ', 'Rs.340', 'Rs.670'),
(2, 'cate/bb.webp', 'food 2', 'indian foods', 'Rs.430', 'Rs.554'),
(3, 'cate/bg.jpg', 'food 3', 'other foods carporations', 'Rs.454', 'Rs.560'),
(4, 'cate/cc.jpg', 'food 4', 'foods company indian', 'Rs.543', 'Rs.670'),
(5, 'cate/eds.webp', 'food 5', 'foody comp. materials', 'Rs.234', 'Rs.345'),
(6, 'cate/ee.jpg', 'food 6', 'hero company food', 'Rs.232', 'Rs.434'),
(7, 'cate/ff.jpg', 'food 7', 'food jdhfkjd dbnbd', 'Rs.545', 'Rs.756'),
(8, 'cate/hh.jpg', 'foods 8', 'dsdh shd  hj djs', 'Rs.450', 'Rs.655');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `adddress` varchar(255) NOT NULL,
  `iimage` varchar(255) NOT NULL,
  `pass` varchar(400) NOT NULL,
  `confirmpass` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `email`, `mobile`, `adddress`, `iimage`, `pass`, `confirmpass`) VALUES
(1, 'nirmala', 'nirmala123@gmail.com', '7985250870', 'husenpur ghazipur', 'uploded/admin.jpg', '1111111', '1111111'),
(2, 'jitendra kumar bind', 'nj123@gmail.com', '7985250870', 'husenpur ghazipur', 'uploded/forgot.jpg', '1111111', '1111111');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
