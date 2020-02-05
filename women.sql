-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2019 at 02:25 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kart`
--

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Tie knot Small Shawl Denim Shirt', 'TKS', 'images\\home\\product1.jpeg', '900'),
(2, 'Eyelash Lips White Cotton T-Shirt\r\n', 'ELWCT', 'images\\home\\product2.jpeg', '800'),
(3, 'Cute Cartoon Printed T-Shirt', 'CCPT', 'images\\home\\product3.jpeg', '600'),
(4, 'T-Shirt Cotton Tops Tee Shirts', 'TCTTS', 'images\\home\\product4.jpeg', '800'),
(5, 'Summer New Korean Top', 'SNKVHC', 'images\\home\\product5.jpeg', '700'),
(6, 'Stylish Stripe  Short Sleeve Shirt', 'SSSSS', 'images\\home\\product6.jpeg', '900'),
(7, 'Crepe Shirt Floral Embroidered', 'CSF', 'images\\home\\product7.jpeg', '850'),
(8, 'Floral Embroidered Hollow', 'FEH', 'images\\home\\product8.jpeg', '600');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `women`
--
ALTER TABLE `women`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
