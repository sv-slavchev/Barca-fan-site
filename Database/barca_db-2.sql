-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2017 at 10:39 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barca_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `total` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `name`, `email`, `phone`, `address`, `total`) VALUES
(5, '', '', 0, '', 735.00),
(6, '', '', 0, '', 735.00);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id_review` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `review` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id_review`, `code`, `name`, `review`) VALUES
(1, 'Posterd08', 'Ivan Vankov', 'this is very good stuff'),
(2, 'Posterd08', 'Misho Shopov', 'I like it very much'),
(5, 'Posterd08', 'Misho Shopov', 'I like it very much'),
(9, 'Posterd08', 'Ivan Vankov', 'this is very good stuff'),
(17, 'Laptop_skin03', 'dsfg', ' sdf'),
(18, 'djaga02', 'dfgvfd', ' fdvfvf'),
(19, 'iphonecase01', 'aasdds', ' asdsadas'),
(20, 'iphonecase01', 'asdsad', ' asdasdas'),
(21, 'djaga02', 'sdf', ' sdfsdfsdf'),
(22, 'Posterd08', 'xzcxc', ' zxcxc');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Case', 'iphonecase01', 'product-images/case.jpg', 30.00),
(2, 'djaga', 'djaga02', 'product-images/djagi.jpg', 200.00),
(3, 'Laptop_skin', 'Laptop_skin03', 'product-images/Laptop.jpg', 40.00),
(4, 'Captain band', 'Captainband04', 'product-images/capitanska_lenta.jpg', 20.00),
(5, 'Cup', 'CeramicsCup05', 'product-images/keramichna_chasha.jpg', 25.00),
(6, 'Ball', 'Balld06', 'product-images/ball.jpg', 50.00),
(7, 'Air armchair', 'Armchaird07', 'product-images/air_armchair.jpg', 150.00),
(8, 'Poster', 'Posterd08', 'product-images/poster.jpg', 35.00),
(9, 'Poster Messi', 'MessiPosterd09', 'product-images/poster_messi.jpg', 35.00),
(10, 'Radio  ball', 'Radioballd10', 'product-images/radio_ball.jpg', 70.00),
(11, 'Backpack', 'Backpack11', 'product-images/backpack.jpg', 50.00),
(12, 'Scarf', 'Scarf12', 'product-images/scarf.jpg', 45.00),
(13, 'Messi Photo', 'MessiPhoto13', 'product-images/messi_photo.jpg', 15.00),
(14, 'Bedroom set', 'BedroomSet14', 'product-images/bedroom_set.jpg', 80.00),
(15, 'Wall watch', 'WallWatch15', 'product-images/wall_watch.jpg', 45.00),
(16, 'Iniesta shirt', 'IniestaShirt16', 'product-images/Iniesta_shirt.jpg', 90.00),
(17, 'Ball', 'Ball17', 'product-images/topka1.jpg', 65.00),
(18, 'Radio', 'Radio18', 'product-images/radio.jpg', 90.00),
(19, 'Glass', 'Glass19', 'product-images/visoka_chasha.jpg', 10.00),
(20, 'Headphones', 'Headphones20', 'product-images/slushalki.jpg', 55.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`) VALUES
('mshi_93', '202cb962ac59075b964b07152d234b70', 'mustafa_shabanov6@abv.bg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`code`) REFERENCES `tblproduct` (`code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
