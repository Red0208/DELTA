-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2021 at 06:02 AM
-- Server version: 5.7.35-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redaauwnm608database`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `size`, `color`, `thumbnail`, `images`) VALUES
(1, 'PERSOL PO0649', 321.00, 'PERSOL', '2021-11-06 04:50:45', '2021-11-06 04:50:45', 'Designed and crafted in Italy, Persol - from the Italian \"per il sole\" meaning \"for the sun\" - is a favorite among tastemakers and celebrities for its impeccable fit and incredible clarity. The brand\'s patented Meflecto temples offer a secure fit, while crystal-tempered sunglass lenses provide protection with distortion-free vision. With a brand character that can best be described as classy, exclusive, stylish, and unique, Persol continues to go beyond trends.', 'One Size (54,20)', 'Brown/Blue/Grey-Black', 'Persol_PO0649_1.jpg', 'Persol_PO0649_1.jpg,Persol_PO0649_2.jpg,Persol_PO0649_3.jpg'),
(2, 'Persol PO3108S', 370.00, 'PERSOL', '2021-11-06 04:59:03', '2021-11-06 04:59:03', 'Designed and crafted in Italy, Persol - from the Italian \"per il sole\" meaning \"for the sun\" - is a favorite among tastemakers and celebrities for its impeccable fit and incredible clarity. The brand\'s patented Meflecto temples offer a secure fit, while crystal-tempered sunglass lenses provide protection with distortion-free vision. With a brand character that can best be described as classy, exclusive, stylish, and unique, Persol continues to go beyond trends.\r\n\r\n', 'One size (49 22)', 'Brown/Black/Red', 'Persol_PO3108S_1.jpg', 'Persol_PO3108S_1.jpg,Persol_PO3108S_2.jpg,Persol_PO3108S_3.jpg'),
(3, 'Persol PO5003ST', 370.00, 'PERSOL', '2021-11-06 05:04:31', '2021-11-06 05:04:31', 'Designed and crafted in Italy, Persol - from the Italian \"per il sole\" meaning \"for the sun\" - is a favorite among tastemakers and celebrities for its impeccable fit and incredible clarity. The brand\'s patented Meflecto temples offer a secure fit, while crystal-tempered sunglass lenses provide protection with distortion-free vision. With a brand character that can best be described as classy, exclusive, stylish, and unique, Persol continues to go beyond trends.', 'One size (54 16)', 'Gunmetal/Green', 'Persol_PO5003ST_1.jpg', 'Persol_PO5003ST_1.jpg,Persol_PO5003ST_2.jpg,Persol_PO5003ST_3.jpg'),
(4, 'Ray-Ban RB3565', 211.00, 'Ray-Ban', '2021-11-06 05:09:32', '2021-11-06 05:09:32', 'Born out of necessity in 1937, Ray-ban has been at the leading edge of developing high-quality sunglasses to protect pilots from the sun\'s harsh rays. Since then, Ray-Ban has been the eyewear of choice for visionaries and cultural creators everywhere to express their fearless and most authentic selves.\r\n\r\n', 'One size(54 16)', 'Gradient Brown Polar', 'Ray-Ban_RB3565_1.jpg', 'Ray-Ban_RB3565_1.jpg,Ray-Ban_RB3565_2.jpg,Ray-Ban_RB3565_3.jpg'),
(5, 'Ray-Ban RW4003 ', 299.00, 'Ray-Ban', '2021-11-06 05:15:21', '2021-11-06 05:15:21', 'The first generation of Ray-Ban smart glasses that keeps you connected. So you can keep your eyes on the world around you. Capture photos and videos, pause a song, and share authentic stories without leaving style behind.\r\n\r\n', 'One size (48 21)', 'Shiny Black/Shiny Blue', 'Ray-Ban_RW4003_1.jpg', 'Ray-Ban_RW4003_1.jpg,Ray-Ban_RW4003_2.jpg,Ray-Ban_RW4003_3.jpg'),
(6, 'Ray-Ban RB3447', 211.00, 'Ray-Ban', '2021-11-06 05:20:18', '2021-11-06 05:20:18', 'Born out of necessity in 1937, Ray-ban has been at the leading edge of developing high-quality sunglasses to protect pilots from the sun\'s harsh rays. Since then, Ray-Ban has been the eyewear of choice for visionaries and cultural creators everywhere to express their fearless and most authentic selves.', 'Standard', 'Polarized Blue Flash/Copper Flash', 'Ray-Ban_RB3447_1.jpg', 'Ray-Ban_RB3447_1.jpg,Ray-Ban_RB3447_2.jpg,Ray-Ban_RB3447_3.jpg'),
(7, 'Oakley OO9406', 211.00, 'Oakley', '2021-11-06 05:25:39', '2021-11-06 05:25:39', 'Devoted to making the best sunglasses on the planet by letting invention lead the way. With a passion to reinvent from scratch, Oakley sunglasses defy convention and set the standard for design, performance, and protection by wrapping innovation in art.', 'Standard', 'Matte Carbon', 'Oakley_OO9406_1.jpg', 'Oakley_OO9406_1.jpg,Oakley_OO9406_2.jpg,Oakley_OO9406_3.jpg'),
(8, 'Oakley OO9188', 214.00, 'Oakley', '2021-11-06 05:29:37', '2021-11-06 05:29:37', 'Devoted to making the best sunglasses on the planet by letting invention lead the way. With a passion to reinvent from scratch, Oakley sunglasses defy convention and set the standard for design, performance, and protection by wrapping innovation in art.', 'Standard', 'Matte Black', 'Oakley_OO9188_1.jpg', 'Oakley_OO9188_1.jpg,Oakley_OO9188_2.jpg,Oakley_OO9188_3.jpg'),
(9, 'Oakley OO9343', 153.00, 'Oakley', '2021-11-06 05:34:12', '2021-11-06 05:34:12', 'Devoted to making the best sunglasses on the planet by letting invention lead the way. With a passion to reinvent from scratch, Oakley sunglasses defy convention and set the standard for design, performance, and protection by wrapping innovation in art.', 'One size (14 50)', 'White', 'Oakley_OO9343_1.jpg', 'Oakley_OO9343_1.jpg,Oakley_OO9343_2.jpg,Oakley_OO9343_3.jpg'),
(10, 'Versace VE2237', 264.00, 'Versace', '2021-11-06 05:41:17', '2021-11-06 05:41:17', 'Versace is distinguished by its strength of character, innovative use of new, unexpected materials, and varying style of inspiration and performance. The Versace sunglass collection is an elegantly designed line of distinctive eyewear available in unisex designs for those who choose to express their strength, confidence, and uniqueness through a bold and distinctive personal style.', 'Standard', 'Blue/Orange', 'Versace_VE2237_1.jpg', 'Versace_VE2237_1.jpg,Versace_VE2237_2.jpg,Versace_VE2237_3.jpg'),
(11, 'Versace VE2198', 290.00, 'Versace', '2021-11-06 05:44:38', '2021-11-06 05:44:38', 'Versace is distinguished by its strength of character, innovative use of new, unexpected materials, and varying style of inspiration and performance. The Versace sunglass collection is an elegantly designed line of distinctive eyewear available in unisex designs for those who choose to express their strength, confidence, and uniqueness through a bold and distinctive personal style.', 'One size (54 20)', 'Tortoise', 'Versace_VE2198_1.jpg', 'Versace_VE2198_1.jpg,Versace_VE2198_2.jpg,Versace_VE2198_3.jpg'),
(12, 'Versace VE4391', 316.00, 'Versace', '2021-11-06 05:48:51', '2021-11-06 05:48:51', 'Versace is distinguished by its strength of character, innovative use of new, unexpected materials, and varying style of inspiration and performance. The Versace sunglass collection is an elegantly designed line of distinctive eyewear available in unisex designs for those who choose to express their strength, confidence, and uniqueness through a bold and distinctive personal style.', 'One size (48 00)', 'Grey/Grey-Black', 'Versace_VE4391_1.jpg', 'Versace_VE4391_1.jpg,Versace_VE4391_2.jpg,Versace_VE4391_3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
