-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 09, 2019 at 08:02 AM
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
-- Database: `ex_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `email`) VALUES
(1, 'nike-2', 'Shoe', 'The Sports Band collection.', 200, 1, 200, '2019-11-05 15:40:59', 'p@gmail.com'),
(2, 'nike-2', 'Shoe', 'The Sports Band collection.', 200, 1, 200, '2019-11-05 15:41:19', 'p@gmail.com'),
(3, 'nike-1', 'Sports Shoes', 'The Sports Band collection.', 5000, 1, 5000, '2019-11-05 15:41:19', 'p@gmail.com'),
(4, 'nike-1', 'Sports Shoes', 'The Sports Band collection.', 5000, 1, 5000, '2019-11-05 16:00:26', 'p@gmail.com'),
(5, 'nike-2', 'Shoe', 'The Sports Band collection.', 200, 1, 200, '2019-11-05 16:00:26', 'p@gmail.com'),
(6, 'nike-2', 'Shoe', 'The Sports Band collection.', 200, 1, 200, '2019-11-05 16:14:21', 'p@gmail.com'),
(7, 'nike8', 'Nike', 'Men DOMAIN 2 NS Shoes', 1200, 1, 1200, '2019-11-06 00:05:55', ''),
(8, 'nike1', 'Nike', 'Men Dark 12 Msl Running', 5000, 1, 5000, '2019-11-06 00:10:19', ''),
(9, 'nike8', 'Nike', 'Men DOMAIN 2 NS Shoes', 1200, 1, 1200, '2019-11-06 00:10:19', ''),
(10, 'nike10', 'Nike', 'Men Dark 12 Msl Running', 1300, 1, 1300, '2019-11-06 00:10:19', ''),
(11, 'nike1', 'Nike', 'Men Dark 12 Msl Running', 5000, 1, 5000, '2019-11-06 00:35:44', ''),
(12, 'nike2', 'Shoe', 'Men All Day Running Shoes', 200, 4, 800, '2019-11-06 00:35:44', ''),
(13, 'nike26', 'Nike', 'Men Dark 12 Msl Running', 5000, 1, 5000, '2019-11-06 13:07:38', 'uu@gmail.com'),
(14, 'nike26', 'Nike', 'Men Dark 12 Msl Running', 5000, 1, 5000, '2019-11-06 13:59:51', 'uu@gmail.com'),
(15, 'nike7', 'Nike', 'Men FLEX 7 Running Shoe', 3000, 1, 3000, '2019-11-07 00:33:43', 'uu@gmail.com'),
(16, 'nike8', 'Nike', 'Men DOMAIN 2 NS Shoes', 1200, 1, 1200, '2019-11-07 00:33:43', 'uu@gmail.com'),
(17, 'nike26', 'Nike', 'Men Dark 12 Msl Running', 5000, 1, 5000, '2019-11-07 08:23:17', 'uu@gmail.com'),
(18, 'nike8', 'Nike', 'Men DOMAIN 2 NS Shoes', 1200, 1, 1200, '2019-11-07 08:23:17', 'uu@gmail.com'),
(19, 'nike26', 'Nike', 'Men Dark 12 Msl Running', 5000, 2, 10000, '2019-11-07 08:40:58', 'uu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `brand` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`, `brand`) VALUES
(1, 'nike1', 'Nike', 'Men Dark 12 Msl Running', 'images/nike1.png', 22, '5000.00', 'nike'),
(8, 'nike8', 'Nike', 'Men DOMAIN 2 NS Shoes', 'images/nike8.png', 8, '1200.00', 'nike'),
(26, 'nike26', 'Nike', 'Men Dark 12 Msl Running', 'images/nike1.png', 17, '5000.00', 'nike'),
(10, 'nike10', 'Nike', 'Men Dark 12 Msl Running', 'images/nike10.png', 19, '1300.00', 'nike'),
(2, 'nike2', 'Nike', 'Men Day Running Shoes', 'images/nike2.png', 1, '200.00', 'nike'),
(7, 'nike7', 'Nike', 'Men FLEX 7 Running Shoe', 'images/nike7.png', 3, '3000.00', 'nike'),
(3, 'nike3', 'Shoe', 'Men Chroma Flip Flops', 'images/nike3.png', 34, '1000.00', 'nike'),
(9, 'nike9', 'Nike', 'Men Chroma Flip Flops', 'images/nike9.png', 12, '1200.00', 'nike'),
(5, 'nike5', 'Nike', 'Men Royale Sneakers', 'images/nike5.png', 12, '4500.00', 'nike'),
(6, 'nike6', 'Nike', 'Men Vapor 12 TF Shoes', 'images/nike6.png', 2, '1200.00', 'nike'),
(24, 'nike24', 'Nike', 'Men FLEX RN Shoes', 'images/nike11.png', 23, '3800.00', 'nike'),
(11, 'w1', 'W', 'Women\'s Printed Kurta ', 'images/w1.png', 12, '599.00', 'w'),
(13, 'w3', 'W', 'Women\'s Printed Kurta ', 'images/w3.png', 12, '599.00', 'w'),
(12, 'w2', 'W', 'Women\'s Printed Kurta ', 'images/w2.png', 12, '300.00', 'w'),
(14, 'w4', 'W', 'Women\'s Straight Kurta', 'images/w4.png', 12, '1200.00', 'w'),
(15, 'w5', 'W', 'Women\'s Straight Kurta', 'images/w5.png', 12, '1200.00', 'w'),
(16, 'w6', 'W', 'Women\'s Straight Kurta', 'images/w6.png', 4, '599.00', 'w'),
(17, 'w7', 'W', 'Women\'s Straight Kurta', 'images/w7.png', 12, '1200.00', 'w'),
(18, 'w8', 'W', 'Women\'s Straight Kurta', 'images/w8.png', 12, '1400.00', 'w'),
(19, 'w9', 'W', 'Women\'s Straight Kurta', 'images/w9.png', 12, '479.00', 'w'),
(20, 'w10', 'W', 'Women\'s Straight Kurta', 'images/w10.png', 4, '299.00', 'w'),
(21, 'w11', 'W', 'Women\'s Straight Kurta', 'images/w11.png', 4, '299.00', 'w'),
(22, 'w12', 'W', 'Women\'s Straight Kurta', 'images/w12.png', 4, '299.00', 'w'),
(25, 'nike25', 'Nike', 'Men Dark 12 Msl Running', 'images/nike12.png', 19, '1300.00', 'nike'),
(30, 'rod1', 'Rodster', 'Men Dark 12 Msl Running', 'images/rod1.png', 22, '5000.00', 'rod'),
(31, 'rod2', 'Rodster', 'Tshirt', 'images/rod2.png', 22, '5000.00', 'rod'),
(32, 'rod3', 'Rodster', 'Tshirt', 'images/rod3.png', 20, '5000.00', 'rod'),
(33, 'rod4', 'Rodster', 'Tshirt', 'images/rod4.png', 12, '500.00', 'rod'),
(34, 'rod5', 'Rodster', 'Tshirt', 'images/rod5.png', 22, '499.00', 'rod'),
(35, 'rod6', 'Rodster', 'Tshirt', 'images/rod6.png', 22, '2000.00', 'rod');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `city`, `pin`, `email`, `password`) VALUES
(1, 'uu', 'uuuu', 'uuu', 89, 'uu@gmail.com', '1234567'),
(2, 'uu', 'uuuu', 'uuu', 89, 'uyu@gmail.com', '1234567'),
(3, 'shalmali', 'kaup', 'udupi', 576105, 'shalmali@gmail.com', '1234567');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
