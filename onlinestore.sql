-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2020 at 07:15 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Grace', 'Girl', 'grace@mail.com', 'grace001');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `status` enum('In_Use','Not_In_Use') NOT NULL,
  `Date_Added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `status`, `Date_Added`) VALUES
(2, 'Chair', 'In_Use', '2019-09-30'),
(3, 'Sofa', 'In_Use', '2019-09-30'),
(4, 'Table', 'In_Use', '2019-09-30'),
(5, 'Office Desk', 'In_Use', '2019-09-30'),
(6, 'Dinning', 'In_Use', '2019-10-04'),
(7, 'Bedroom', 'In_Use', '2019-10-04'),
(9, 'Home Decor', 'In_Use', '2019-10-05'),
(14, 'Chair', 'In_Use', '2019-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pquantity` varchar(255) NOT NULL,
  `orderid` int(11) NOT NULL,
  `productprice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `pid`, `pquantity`, `orderid`, `productprice`) VALUES
(1, 19, '5', 1, '16'),
(22, 6, '1', 17, '15000'),
(23, 13, '1', 17, '15000');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `totalprice` varchar(255) NOT NULL,
  `orderstatus` varchar(255) NOT NULL,
  `paymentmode` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `uid`, `totalprice`, `orderstatus`, `paymentmode`, `timestamp`) VALUES
(15, 11, '0', 'Order Placed', '', '2019-11-11 17:28:38'),
(16, 13, '0', 'Delivered', 'on', '2019-11-27 17:02:59'),
(17, 15, '0', 'Order Placed', 'cod', '2020-01-10 12:13:16');

-- --------------------------------------------------------

--
-- Table structure for table `ordertracking`
--

CREATE TABLE `ordertracking` (
  `id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertracking`
--

INSERT INTO `ordertracking` (`id`, `orderid`, `status`, `message`, `timestamp`) VALUES
(11, 14, 'Dispatched', ' thank you', '2019-11-28 07:36:25'),
(12, 16, 'Delivered', ' thank you', '2019-11-28 07:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 0, 'Classic Sofa 1', 40000, '<p>asdadfgfhjgjhj</p>', '37.jpg', 'sofa, clasic, 2 seater'),
(2, 1, 'King Size', 40000, '<p>king size bed 6X6 in size</p>', '30.jpg', 'kingsize, bed'),
(3, 2, 'High Back chair', 15000, 'comfort for your office', '31.jpg', 'office seat, high back, leather seat'),
(4, 4, 'Round Table', 40000, '<p>dinning round table for a family of 8</p>', '6.jpg', 'dinning, round table'),
(5, 7, 'Bedroom set', 120000, '<p>complete bedroom set, kingsize bed, chest, shoe rack</p>', '18.jpg', 'bed, king size,chest'),
(6, 2, 'Arm Chair', 15000, '<p>arm chair brown in color single seater</p>', '17.jpg', 'arm chair, single seater'),
(7, 3, 'L Shape Sofa', 40000, '<p>Leather white L-Shape, sofa</p>', '15.jpg', 'Leather, L-shape, Sofa'),
(8, 1, 'Bed 2', 45000, '<p>bed 2</p>', '28.jpg', 'bed'),
(9, 1, 'product 19', 40000, '<p>product 19</p>', '19.jpg', 'product 19'),
(10, 3, 'product 2', 40000, '<p>product 2</p>', '2.jpg', 'sofa, clasic, 2 seater'),
(12, 5, 'Product 7', 45000, '<p>Office desk</p>', '7.jpg', 'office, desk'),
(13, 4, 'table 1', 15000, '<p>table table table</p>', '9.jpg', 'table, round'),
(14, 3, 'Product 38', 120000, '<p>sofa white, royal</p>', '38.jpg', 'sofa, royal'),
(15, 3, 'Product 39', 40000, '<p>lazy chair, maharaja</p>', '39.jpg', 'maharaja, lazy chair'),
(16, 2, 'Product 36', 15000, '<p>out door, school seats</p>', '36.jpg', 'Out door, chair, school'),
(17, 2, 'Product 35', 15000, '<p>chair</p>', '35.jpg', 'arm chair, single seater'),
(18, 3, 'Classic Sofa', 120000, '<p>recliner</p>', '4.jpg', 'sofa, clasic, 2 seater'),
(19, 2, 'Product 34', 15000, '<p>short back office chair, color block</p>', '34.jpg', 'office chair, chair'),
(20, 3, 'Classic Sofa', 120000, '<p>jghgjhg</p>', '2.jpg', 'sofa, clasic, 2 seater'),
(21, 3, 'Classic Sofa', 120000, 'sofa sofa', '4.jpg', 'sofa, clasic, 2 seater'),
(22, 3, 'Classic Sofa', 120000, 'sofa sofa', '4.jpg', 'sofa, clasic, 2 seater'),
(23, 1, 'King Size', 40000, 'bed', '21.jpg', 'bed, king size'),
(24, 6, '6 Chair table', 13000, '<p>Serves your purpose<br></p>', '2.jpeg', ''),
(25, 2, 'Chair Arm', 20, 'Good for all', 'Screenshot 2020-02-16 19:54:11.png', '109');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `timestamp`) VALUES
(1, 'grace@mail.com', '$2y$10$xjwH.sLEytdiC9RjTOQTOuCePHgqXg5LBRbzXmMQYYA6MwJ.pBz2y', '2020-02-16 20:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `usersmeta`
--

CREATE TABLE `usersmeta` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertracking`
--
ALTER TABLE `ordertracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `usersmeta`
--
ALTER TABLE `usersmeta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ordertracking`
--
ALTER TABLE `ordertracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usersmeta`
--
ALTER TABLE `usersmeta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
