-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2016 at 10:43 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dshoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_cart`
--

CREATE TABLE `t_cart` (
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_product`
--

CREATE TABLE `t_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size_availability` varchar(5) NOT NULL,
  `price` mediumint(9) NOT NULL,
  `description` text NOT NULL,
  `material` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_product`
--

INSERT INTO `t_product` (`id`, `name`, `size_availability`, `price`, `description`, `material`, `image`) VALUES
(1, 'Sepatu Kulit Mbe', '33-49', 500, 'Sepatu ini terbuat dari kulit mbe', 'kulit mbe\r\ncat tembok', 'http://bro.do/7756-product_list_default/signore-dark-choco-black-sole.jpg'),
(2, 'Zella El Full Black', '33-49', 645000, 'Sepatu ini dibuat menggunakan kuliat buaya dengan desain elegan yang bisa membuat mata terbelalak', '-kulit buaya', 'http://bro.do/7832-product_thumbnail_default/zella-el-full-black.jpg'),
(3, 'Nero Full Black', '33-45', 585000, 'sepatu ini dibuat menggunakan bahan kulit gajah yang sangat langka dan perlu waktu untuk pembuatannya jadi pasti worth it banget deh buat kalian', '-kulit gajah', 'http://bro.do/7745-product_thumbnail_default/nero-full-black.jpg'),
(4, 'Braja Dwaraka Black', '44-48', 760900, 'Nothing special about this shoes we just want to sell a high quality shoes for you our dearest customer', '-kulit komodo', 'http://bro.do/7745-product_thumbnail_default/nero-full-black.jpg'),
(5, 'Signore Vintage Brown Black Sole', '40-48', 560000, 'spatu vintage yang cocok banget buat kamu kaula muda yang suka dengan gaya casual', '-kulit kambing', 'http://bro.do/7376-product_list_default/sepatu-kulit-signore-vintage-brown-black-sole.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_promo`
--

CREATE TABLE `t_promo` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `description` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_transaction`
--

CREATE TABLE `t_transaction` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL,
  `status_pengiriman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` bit(2) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sec_question` varchar(255) NOT NULL,
  `sec_answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `display_name`, `email`, `sec_question`, `sec_answer`) VALUES
(1, 'a', 'a', b'00', 'Rivaldi Ridhla Julviar', 'julviar17@gmail.com\r\n', '', ''),
(3, 'asem', 'a', b'00', 'Rivaldi Ridhla Julviar', 'julviar17@gmail.com\r\n', '', ''),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', b'00', 'Admin', 'A@Admin.com', 'nama aing siapa?', 'dadang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_cart`
--
ALTER TABLE `t_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_product`
--
ALTER TABLE `t_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_cart`
--
ALTER TABLE `t_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_product`
--
ALTER TABLE `t_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
