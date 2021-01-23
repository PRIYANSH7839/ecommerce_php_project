-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 03:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dream`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET latin1 NOT NULL,
  `code` int(10) UNSIGNED NOT NULL,
  `price` double(10,2) UNSIGNED NOT NULL,
  `image` varchar(191) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(9, 'Combo #women', 121, 699.00, 'images1/2.jpg'),
(10, 'Foreign #MG', 122, 599.00, 'images1/3.jpg'),
(11, 'fashion Top', 123, 1999.00, 'images1/4.jpg'),
(12, 'Jacket LET', 124, 2999.00, 'images1/5.jpg'),
(13, 'Combo T-Shirt', 125, 999.00, 'images1/6.jpg'),
(14, 'Baby FROK', 126, 2999.00, 'images1/7.jpg'),
(15, 'Fashion #SUT', 127, 2999.00, 'images1/8.jpg'),
(16, 'Shirt Casual', 128, 599.00, 'images1/9.jpg'),
(17, 'Fashion#1', 129, 1999.00, 'images1/10.jpg'),
(18, 'Foreigen #FAS', 130, 4999.00, 'images1/11.jpg'),
(19, 'SUT #FAs', 131, 3999.00, 'images1/12.jpg'),
(20, 'T-shirt #RED', 132, 199.00, 'images1/13.jpg'),
(21, 'Fashion #GIR', 133, 1999.00, 'images1/14.jpg'),
(22, 'Mens\'s Combo', 134, 1999.00, 'images1/15.jpg'),
(23, 'Scarp JAC', 135, 1999.00, 'images1/16.jpg'),
(24, 'T-shirt #WHT', 136, 1499.00, 'images1/17.jpg'),
(25, 'T-shirt #101', 137, 399.00, 'images1/18.jpg'),
(26, 'Combo#GIR', 138, 1999.00, 'images1/19.jpg'),
(27, 'Shirt #WHT', 139, 599.00, 'images1/20.jpg'),
(28, 'T-shirt #SBLU', 140, 899.00, 'images1/21.jpg'),
(29, 'H&W', 141, 800.00, 'images1/25.jpg'),
(30, 'Sony DSLR', 142, 40000.00, 'images/2.jpg'),
(31, 'Sony DSLR', 143, 50000.00, 'images/3.jpg'),
(32, 'Olympus DSLR', 144, 80000.00, 'images/4.jpg'),
(33, 'Cannon EOS', 145, 36000.00, 'images/5.jpg'),
(34, 'Titan Model #301', 146, 13000.00, 'images/9.jpg'),
(35, 'Titan Model #201', 147, 3000.00, 'images/10.jpg'),
(36, 'HMT Milan', 148, 8000.00, 'images/11.jpg'),
(37, 'Faber Luba #111', 149, 10000.00, 'images/12.jpg'),
(38, 'Jhon #Z', 150, 1599.00, 'images/22.jpg'),
(39, 'Home DEC', 151, 499.00, 'images2/4.jpg'),
(40, 'Home #FAS', 152, 599.00, 'images2/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(11) NOT NULL,
  `cpassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `cpassword`) VALUES
(15, 'Admin', 'admin@gmail.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
