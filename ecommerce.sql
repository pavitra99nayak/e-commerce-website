-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 16, 2019 at 09:42 AM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `prd_name` varchar(100) NOT NULL,
  `prd_cost` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nikeproducts`
--

DROP TABLE IF EXISTS `nikeproducts`;
CREATE TABLE IF NOT EXISTS `nikeproducts` (
  `nike_id` int(100) NOT NULL,
  `prd_name` varchar(100) NOT NULL,
  `prd_cost` int(100) NOT NULL,
  `prd_desc` varchar(100) NOT NULL,
  `nike_image` varchar(100) NOT NULL,
  PRIMARY KEY (`nike_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nikeproducts`
--

INSERT INTO `nikeproducts` (`nike_id`, `prd_name`, `prd_cost`, `prd_desc`, `nike_image`) VALUES
(1, 'Nike', 2427, 'Men All Day Running Shoes', 'images/nike1.png'),
(2, 'Nike', 1495, 'Men Chroma Thong Flip Flops', 'images/nike2.png'),
(3, 'Nike', 4295, 'Men Dark 12 Msl Running', 'images/nike3.png'),
(4, 'Nike', 6995, 'Men FLEX 2019 RN Shoes', 'images/nike4.png'),
(5, 'Nike', 4995, 'Men Court Royale Sneakers', 'images/nike5.png'),
(6, 'Nike', 2847, 'Men Vapor 12 Club TF Shoes', 'images/nike6.png'),
(7, 'Nike', 3473, 'Men FLEX RN 7 Running Shoe', 'images/nike7.png'),
(8, 'Nike', 5995, 'Men DOMAIN 2 NS Shoes', 'images/nike8.png'),
(9, 'Nike', 760, 'Men Chroma Thong Flip Flops', 'images/nike9.png'),
(10, 'Nike', 2000, 'Men Dark 12 Msl Running', 'images/nike10.png'),
(11, 'Nike', 3050, 'Men All Day Running Shoes', 'images/nike11.png'),
(12, 'Nike', 790, 'Men Chroma Flip Flops', 'images/nike12.png');

-- --------------------------------------------------------

--
-- Table structure for table `onlyproducts`
--

DROP TABLE IF EXISTS `onlyproducts`;
CREATE TABLE IF NOT EXISTS `onlyproducts` (
  `only_id` int(100) NOT NULL,
  `only_image` varchar(100) NOT NULL,
  `prd_cost` bigint(100) NOT NULL,
  `prd_desc` varchar(100) NOT NULL,
  `prd_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onlyproducts`
--

INSERT INTO `onlyproducts` (`only_id`, `only_image`, `prd_cost`, `prd_desc`, `prd_name`) VALUES
(1, 'images/only1.png', 499, 'T-shirt', 'Only'),
(2, 'images/only2.png', 300, 'T-shirt', 'Only'),
(3, 'images/only3.png', 500, 'T-Shirt', 'Only'),
(4, 'images/only4.png', 800, 'T-Shirt', 'Only'),
(5, 'images/only5.png', 600, 'T-Shirt', 'Only'),
(6, 'images/only6.png', 800, 'T-Shirt', 'Only'),
(7, 'images/only7.png', 800, 'T-Shirt', 'Only'),
(8, 'images/only8.png', 800, 'T-Shirt', 'Only'),
(9, 'images/only9.png', 800, 'T-Shirt', 'Only'),
(10, 'images/only10.png', 800, 'T-Shirt', 'Only');

-- --------------------------------------------------------

--
-- Table structure for table `rodproducts`
--

DROP TABLE IF EXISTS `rodproducts`;
CREATE TABLE IF NOT EXISTS `rodproducts` (
  `rod_id` int(100) NOT NULL,
  `rod_image` varchar(100) NOT NULL,
  `prd_cost` bigint(100) NOT NULL,
  `prd_desc` varchar(100) NOT NULL,
  `prd_name` varchar(100) NOT NULL,
  PRIMARY KEY (`rod_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rodproducts`
--

INSERT INTO `rodproducts` (`rod_id`, `rod_image`, `prd_cost`, `prd_desc`, `prd_name`) VALUES
(1, 'images/rod1.png', 765, 'Top', 'Rodstar'),
(2, 'images/rod2.png', 599, 'T-Shirt', 'Rodstar'),
(3, 'images/rod3.png', 999, 'T-Shirt', 'Rodstar'),
(4, 'images/rod4.png', 650, 'T-Shirt', 'Rodstar'),
(5, 'images/rod5.png', 599, 'T-Shirt', 'Rodstar'),
(6, 'images/rod6.png', 300, 'T-shirt', 'Roadstar'),
(7, 'images/rod7.png', 969, 'Top', 'Roadstar'),
(8, 'images/rod8.png', 700, 'Shirt', 'Rodstar'),
(9, 'images/rod9.png', 560, 'Shirt', 'Rodstar'),
(10, 'images/rod10.png', 500, 'T-shirt', 'Rodstar');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

DROP TABLE IF EXISTS `shopping_cart`;
CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `cart_id` int(100) NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phno` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `phno`, `password`) VALUES
('pavitra', 'pavitranayak832@gmail.com', '7022809831', 'pavitra123');

-- --------------------------------------------------------

--
-- Table structure for table `wproducts`
--

DROP TABLE IF EXISTS `wproducts`;
CREATE TABLE IF NOT EXISTS `wproducts` (
  `w_id` int(100) NOT NULL,
  `w_name` varchar(100) NOT NULL,
  `w_cost` bigint(100) NOT NULL,
  `w_desc` varchar(100) NOT NULL,
  `w_image` varchar(100) NOT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wproducts`
--

INSERT INTO `wproducts` (`w_id`, `w_name`, `w_cost`, `w_desc`, `w_image`) VALUES
(1, 'W', 1020, 'Women\'s Printed Kurta ', 'images/w1.png'),
(2, 'W', 899, 'Women\'s Printed Kurta ', 'images/w2.png'),
(3, 'W', 977, 'Women\'s A-Line Kurta', 'images/w3.png'),
(4, 'W', 1999, 'Women\'s Straight Kurta', 'images/w4.png'),
(5, 'W', 1700, 'Women\'s A-Line Kurta', 'images/w5.png'),
(6, 'W', 889, 'Women\'s A-Line Kurta', 'images/w6.png'),
(7, 'W', 950, 'Women\'s Straight Kurta', 'images/w7.png'),
(8, 'W', 700, 'Women\'s Printed Kurta', 'images/w8.png'),
(9, 'W', 1200, 'Women\'s Anarkali Kurta', 'images/w9.png'),
(10, 'W', 1080, 'Women\'s Straight Kurta', 'images/w10.png'),
(11, 'W', 1200, 'Women Beige Kurta', 'images/w11.png'),
(12, 'W', 1800, 'Women\'s Straight Kurta', 'images/w12.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
