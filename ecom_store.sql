-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2021 at 11:25 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_county` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_county`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(2, 'Tatiana Saphira', 'tatiaCute@gmail.id', 'tatiana123', 'tatiana-saphira.jpg', 'Indonesia', 'Change the about description for Tatiana from chelsea Islan', '2222-2222-2222', 'MyMaid'),
(4, 'Nozomi Sasaki', 'papipupepo@gmail.jp', 'nozo123', 'Nozomi_Sasaki-.jpg', 'Japan', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui illum debitis dolorum ducimus aut maiores veritatis illo doloremque quibusdam placeat quod velit laudantium eligendi sunt et optio, harum in suscipit.', '312-009-323', 'MyWife'),
(5, 'Iko Uwais', 'iko@gmail.id', 'iko123', 'iko.png', 'Indonesia', 'This is for IKO', '081806833157', 'Fighter / Actor');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `second_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_county` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `second_name`, `customer_email`, `customer_pass`, `customer_county`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(1, 'ojwang collins', '', 'ojwangcollins@gmail.com', 'collins12', 'Nairobi', '', '0740445678', 'Kayole', 'profile_img.jpg', '127.0.0.1'),
(2, 'kevin', 'omolo', 'omolo@gmail.com', 'omolo12', 'Kiambu', '', '0758629576', 'juja', 'C-img.jpg', '127.0.0.1'),
(3, 'Linea', 'Devida', 'devida@gmail.com', 'devida', 'Mombasa', '', '0790364875', 'Mptwapa', 'bell-peppers-421087_640.jpg', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(1, 1, 2400, 1854654127, 3, 'Unripe', '2021-08-25', 'pending'),
(2, 1, 3200, 1854654127, 4, 'Ripe', '2021-08-25', 'pending'),
(3, 3, 2400, 1244904998, 3, 'Other', '2021-08-26', 'pending'),
(4, 2, 1600, 1891828024, 2, 'Ripe', '2021-08-26', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(1, 1, 1854654127, '9', 3, 'Unripe', 'pending'),
(2, 1, 1854654127, '10', 4, 'Ripe', 'pending'),
(3, 3, 1244904998, '9', 3, 'Other', 'pending'),
(4, 2, 1891828024, '9', 2, 'Ripe', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) DEFAULT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_label` text NOT NULL,
  `product_sale` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`, `product_label`, `product_sale`) VALUES
(1, 3, 0, '2021-08-21 13:40:22', 'leafy', 'pexels-anthony-shkraba-5852257.jpg', 'pexels-anthony-shkraba-5852262.jpg', 'pexels-anthony-shkraba-5852255.jpg', 300, 'Bliss leafy', '<p>Fresh Bliss leafy</p>', '', 0),
(2, 5, 0, '2021-08-21 13:45:23', 'Red Pepper', 'pexels-ciboulette-173880.jpg', 'pexels-artem-beliaikin-1091778.jpg', 'pexels-karolina-grabowska-4033324.jpg', 450, 'Bliss Red Pepper', '<p>Fresh Bliss Red Pepper</p>', '', 0),
(3, 2, 0, '2021-08-21 13:52:57', 'Red Apples', 'pexels-pixabay-62687.jpg', 'pexels-pixabay-206959.jpg', 'pexels-mali-maeder-102104.jpg', 500, 'Bliss Apples', '<p>Fresh Bliss Apples</p>', '', 0),
(4, 5, 0, '2021-08-21 14:01:29', 'Carrots', 'pexels-suzy-hazelwood-1306559.jpg', 'pexels-mali-maeder-143133.jpg', 'pexels-pixabay-54082.jpg', 250, 'Bliss Carrots', '<p>Fresh Bliss Carrots</p>', '', 0),
(5, 2, 0, '2021-08-21 14:06:55', 'Green Apples', 'pexels-rp-photography-693794.jpg', 'pexels-pixabay-62687.jpg', 'pexels-freestocksorg-135130.jpg', 500, 'Bliss Green Apples', '<p>Fresh Bliss Green Apples</p>', '', 0),
(6, 2, 0, '2021-08-21 14:12:09', 'Oranges', 'pexels-delphine-hourlay-691166.jpg', 'pexels-public-domain-pictures-42059.jpg', 'pexels-karolina-grabowska-4230621.jpg', 750, 'Bliss Oranges', '<p>Fresh Bliss Oranges</p>', '', 0),
(7, 4, 0, '2021-08-21 14:16:26', 'Tomatoes', 'pexels-pixabay-248420.jpg', 'pexels-julia-1327838.jpg', 'pexels-monicore-1391487.jpg', 350, 'Bliss Tomatoes', '<p>Fresh Bliss Tomatoes</p>', '', 0),
(8, 5, 0, '2021-08-21 14:20:28', 'Onions', 'pexels-markus-spiske-175415.jpg', 'pexels-markus-spiske-175414.jpg', 'pexels-pixabay-533342(2).jpg', 255, 'Bliss Onion', '<p>Fresh Bliss Onion</p>', '', 0),
(9, 1, 0, '2021-08-21 14:32:24', 'Fresh vegies', 'pexels-cup-of-couple-7657028.jpg', 'pexels-adonyi-gábor-1400172.jpg', 'pexels-eva-elijas-5502853.jpg', 800, 'Fresh vegies', '<p>Fresh Fresh vegies</p>', '', 0),
(10, 1, 0, '2021-08-21 14:38:56', 'Pine apples Mix', 'pexels-abet-llacer-3025236.jpg', 'pexels-ready-made-3851121.jpg', 'pexels-oleg-magni-890507.jpg', 800, 'Pine apples Mix', '<p>Fresh Pine apples Mix</p>', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'ALL VEGIES', ''),
(2, 'FRUITS', ''),
(3, 'LEAFY', ''),
(4, 'SEASONAL', ''),
(5, 'VEGETABLES', ''),
(6, 'CITRUS', ''),
(7, 'EXOTIC', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `slide_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`, `slide_url`) VALUES
(8, 'Slide Number 10', 'pexels-abet-llacer-3025236.jpg', 'http://localhost/m-dev-store/checkout.php'),
(9, 'Slide Number 11', 'slider-3.jpg', 'http://localhost/m-dev-store/shop.php'),
(13, 'Editing Slide 12', 'pexels-ella-olsson-1458694.jpg', 'test.com'),
(14, 'Slide Number 14', 'pexels-pixabay-357737.jpg', 'https://youtube.com/c/mdevmedia');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `term_id` int(10) NOT NULL,
  `term_title` varchar(100) NOT NULL,
  `term_link` varchar(100) NOT NULL,
  `term_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`term_id`, `term_title`, `term_link`, `term_desc`) VALUES
(9, 'Rules & Regulations', 'link_1', '<div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem ut itaque quibusdam dolores modi natus. Enim earum laboriosam, quos error voluptatem fugiat eos? In maiores quia eligendi, ea aperiam voluptate.</div>'),
(10, 'Promo & Regulations', 'link_2', '<div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem ut itaque quibusdam dolores modi natus. Enim earum laboriosam, quos error voluptatem fugiat eos? In maiores quia eligendi, ea aperiam voluptate.</div>'),
(11, 'Refund Condition Policy', 'link_3', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem ut itaque quibusdam dolores modi natus. Enim earum laboriosam, quos error voluptatem fugiat eos? In maiores quia eligendi, ea aperiam voluptate.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
