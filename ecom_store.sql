-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 19, 2021 at 10:53 PM
-- Server version: 10.6.4-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(10) NOT NULL,
  `size` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) NOT NULL,
  `category_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`, `category_desc`) VALUES
(1, 'Men', 'Lorem imsum dolor sit amet, consectetur adipisicing elit. Velit rem eos illo tempora dicta possimus adipisci doloribus obcaecati odit \r\nofficiis, sapiente eius excepturi harum voluptates nihil aut quo vero eveniet.'),
(2, 'Women', 'Lorem imsum dolor sit amet, consectetur adipisicing elit. Velit rem eos illo tempora dicta possimus adipisci doloribus obcaecati odit \r\nofficiis, sapiente eius excepturi harum voluptates nihil aut quo vero eveniet.'),
(3, 'Kids', 'Lorem imsum dolor sit amet, consectetur adipisicing elit. Velit rem eos illo tempora dicta possimus adipisci doloribus obcaecati odit \r\nofficiis, sapiente eius excepturi harum voluptates nihil aut quo vero eveniet.'),
(4, 'Other', 'Lorem imsum dolor sit amet, consectetur adipisicing elit. Velit rem eos illo tempora dicta possimus adipisci doloribus obcaecati odit \r\nofficiis, sapiente eius excepturi harum voluptates nihil aut quo vero eveniet.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_category_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_category_id`, `category_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`) VALUES
(1, 1, 2, '2021-09-16 22:29:25', 'Tokichoi Front Pocket Collared Dress', 'product_front.jpg', 'product-back.jpg', 'product_hang.jpg', 66, 'Dress', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(2, 4, 3, '2021-09-17 14:22:19', 'Boys Puffer Coat With Detachable Hood', 'boys-Puffer-Coat-With-Detachable-Hood-1.jpg', 'boys-Puffer-Coat-With-Detachable-Hood-2.jpg', 'boys-Puffer-Coat-With-Detachable-Hood-3.jpg', 121, 'Hood', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at imperdiet felis. Donec venenatis ex sed molestie efficitur. Nulla finibus viverra neque, ac sodales eros congue nec. Phasellus faucibus quam a lacus luctus feugiat. Cras sapien tellus, mollis ut nunc non, sodales bibendum nisl.</p>'),
(3, 5, 2, '2021-09-17 14:54:01', 'Girl Polos T-Shirt', 'g-polos-tshirt-1.jpg', 'g-polos-tshirt-2.jpg', '', 55, 'Shirt', '<hr />\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc vel leo consequat dapibus. Donec semper, enim sit amet lobortis fermentum, velit urna malesuada justo, quis vestibulum nunc est sit amet leo. Nam eleifend urna id enim hendrerit consectetur.</p>'),
(4, 1, 1, '2021-09-17 14:59:15', 'Man Geox Winter Jacket', 'Man-Geox-Winter-jacket-1.jpg', 'Man-Geox-Winter-jacket-2.jpg', 'Man-Geox-Winter-jacket-3.jpg', 100, 'Snake Skin', '<div class=\"page-section__icon g12-xs g1-md g2-lg g1-xl\">&nbsp;</div>\r\n<div class=\"page-section__generator page-section__generator--top g12-xs g11-md g10-lg g8-xl\">\r\n<div class=\"page-generator__title page-generator__title--top\">&nbsp;</div>\r\n</div>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis cras sed felis eget velit aliquet sagittis id consectetur.</p>'),
(5, 1, 2, '2021-09-17 15:01:10', 'Women Red Winter Jacket', 'Red-Winter-jacket-1.jpg', 'Red-Winter-jacket-2.jpg', 'Red-Winter-jacket-3.jpg', 103, 'Korean Jacket', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis cras sed felis eget velit aliquet sagittis id consectetur.</p>'),
(6, 4, 2, '2021-09-17 15:02:42', 'Woman Waxed Cotton Coat', 'waxed-cotton-coat-woman-1.jpg', 'waxed-cotton-coat-woman-2.jpg', 'waxed-cotton-coat-woman-3.jpg', 211, 'Cotton', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis cras sed felis eget velit aliquet sagittis id consectetur.</p>'),
(7, 3, 2, '2021-09-17 15:04:44', 'High Heels Pantofel Brukat', 'High Heels Women Pantofel Brukat-1.jpg', 'High Heels Women Pantofel Brukat-2.jpg', 'High Heels Women Pantofel Brukat-3.jpg', 45, 'High Heel', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis cras sed felis eget velit aliquet sagittis id consectetur.</p>'),
(8, 3, 1, '2021-09-17 15:06:52', 'Adidas Suarez Slop On', 'Man-Adidas-Suarez-Slop-On-1.jpg', 'Man-Adidas-Suarez-Slop-On-2.jpg', 'Man-Adidas-Suarez-Slop-On-3.jpg', 51, 'Addidas Suarez', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis cras sed felis eget velit aliquet sagittis id consectetur.</p>'),
(9, 2, 1, '2021-09-17 15:09:26', 'Mont Blanc Belt Man', 'Mont-Blanc-Belt-man-1.jpg', 'Mont-Blanc-Belt-man-2.jpg', 'Mont-Blanc-Belt-man-3.jpg', 166, 'Belt', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis cras sed felis eget velit aliquet sagittis id consectetur.</p>'),
(10, 2, 2, '2021-09-17 15:11:07', 'Diamond Heart Ring', 'women-diamond-heart-ring-1.jpg', 'women-diamond-heart-ring-2.jpg', 'women-diamond-heart-ring-3.jpg', 300, 'Ring', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis cras sed felis eget velit aliquet sagittis id consectetur.</p>'),
(11, 5, 1, '2021-09-19 13:25:18', 'Grey Man T-Shirt', 'grey-man-1.jpg', 'grey-man-2.jpg', 'grey-man-3.jpg', 50, 'Casual', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec viverra tellus. Nullam mollis interdum justo, et iaculis nisl consectetur sed. Maecenas eget venenatis nisi, eget cursus elit. Curabitur eleifend mauris non arcu ultrices commodo.</p>'),
(12, 5, 1, '2021-09-19 13:28:17', 'Man Polo Casual T-Shirt', 'Man-Polo-1.jpg', 'Man-Polo-2.jpg', 'Man-Polo-3.jpg', 45, 'Casual', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec viverra tellus. Nullam mollis interdum justo, et iaculis nisl consectetur sed. Maecenas eget venenatis nisi, eget cursus elit. Curabitur eleifend mauris non arcu ultrices commodo.</p>'),
(13, 5, 1, '2021-09-19 13:30:47', 'Boy Polo T-Shirt', 'polos-tshirt-1.jpg', 'polos-tshirt-2.jpg', '', 40, 'Casual', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec viverra tellus. Nullam mollis interdum justo, et iaculis nisl consectetur sed. Maecenas eget venenatis nisi, eget cursus elit. Curabitur eleifend mauris non arcu ultrices commodo.</p>'),
(14, 1, 1, '2021-09-19 14:46:18', 'Levis Trucker Jacket', 'Levis-Trucker-Jacket-1.jpg', 'Levis-Trucker-Jacket-2.jpg', 'Levis-Trucker-Jacket-3.jpg', 98, 'Trucker', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec viverra tellus. Nullam mollis interdum justo, et iaculis nisl consectetur sed. Maecenas eget venenatis nisi, eget cursus elit. Curabitur eleifend mauris non arcu ultrices commodo. Maecenas sit amet malesuada mi. Aliquam erat volutpat.</p>'),
(15, 1, 1, '2021-09-19 14:49:11', 'Merlin Engineer Jacket', 'Merlin-Enginner-Jacket.jpg', 'Merlin-Engineer-Jacket-2.jpg', 'Merlin-Engineer-Jacket-3.jpg', 90, 'Casual Jacket', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec viverra tellus. Nullam mollis interdum justo, et iaculis nisl consectetur sed. Maecenas eget venenatis nisi, eget cursus elit. Curabitur eleifend mauris non arcu ultrices commodo. Maecenas sit amet malesuada mi. Aliquam erat volutpat.</p>'),
(16, 1, 2, '2021-09-19 14:51:07', 'Mobile Power Jacket', 'Mobile-Power-Jacket.jpg', 'Mobile-Power-Jacket-2.jpg', 'Mobile-Power-Jacket-3.jpg', 99, 'Casual', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec viverra tellus. Nullam mollis interdum justo, et iaculis nisl consectetur sed. Maecenas eget venenatis nisi, eget cursus elit. Curabitur eleifend mauris non arcu ultrices commodo. Maecenas sit amet malesuada mi. Aliquam erat volutpat.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_category_id` int(10) NOT NULL,
  `p_category_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_category_id`, `p_category_title`, `p_category_desc`) VALUES
(1, 'Jackets', 'Lorem imsum dolor sit amet, consectetur adipisicing elit. Velit rem eos illo tempora dicta possimus adipisci doloribus obcaecati odit \r\nofficiis, sapiente eius excepturi harum voluptates nihil aut quo vero eveniet.'),
(2, 'Accessories', 'Lorem imsum dolor sit amet, consectetur adipisicing elit. Velit rem eos illo tempora dicta possimus adipisci doloribus obcaecati odit \r\nofficiis, sapiente eius excepturi harum voluptates nihil aut quo vero eveniet.'),
(3, 'Shoes', 'Lorem imsum dolor sit amet, consectetur adipisicing elit. Velit rem eos illo tempora dicta possimus adipisci doloribus obcaecati odit \r\nofficiis, sapiente eius excepturi harum voluptates nihil aut quo vero eveniet.'),
(4, 'Coats', 'Lorem imsum dolor sit amet, consectetur adipisicing elit. Velit rem eos illo tempora dicta possimus adipisci doloribus obcaecati odit \r\nofficiis, sapiente eius excepturi harum voluptates nihil aut quo vero eveniet.'),
(5, 'T-Shirts', 'Lorem imsum dolor sit amet, consectetur adipisicing elit. Velit rem eos illo tempora dicta possimus adipisci doloribus obcaecati odit \r\nofficiis, sapiente eius excepturi harum voluptates nihil aut quo vero eveniet.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slider_image`) VALUES
(1, 'Slide number 1', 'slide-1.jpg'),
(2, 'Slide number 2', 'slide-2.jpg'),
(3, 'Slide number 3', 'slide-3.jpg'),
(4, 'Slide number 4', 'slide-4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_category_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
