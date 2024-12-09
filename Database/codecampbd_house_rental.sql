-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 06:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house_rental_latest`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(9, 'Single-Family Home'),
(10, 'Apartment'),
(11, 'Townhouse'),
(12, 'Condominium'),
(13, 'Duplex'),
(14, 'Mobile Home'),
(17, 'Tiny House'),
(19, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` int(30) NOT NULL,
  `house_no` varchar(50) NOT NULL,
  `category_id` int(30) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `house_no`, `category_id`, `description`, `price`) VALUES
(1, '123 Main St', 9, 'Beautiful single-family home with spacious backyard', 250000),
(2, '456 Elm St', 10, 'Modern apartment in downtown area', 1500),
(3, '789 Oak St', 11, 'Cozy townhouse with attached garage', 300000),
(4, '101 Pine St', 12, 'Luxurious condominium with panoramic views', 500000),
(5, '222 Maple St', 13, 'Well-maintained duplex with rental income potential', 200000),
(6, '333 Cherry St', 14, 'Comfortable mobile home in a quiet community', 75000),
(7, '444 Walnut St', 17, 'Charming tiny house with efficient design', 100000),
(8, '555 Cedar St', 9, 'Spacious single-family home with modern amenities', 275000),
(9, '666 Birch St', 10, 'Cozy apartment in a historic building', 1200),
(10, '777 Spruce St', 11, 'Townhouse with backyard patio perfect for entertaining', 320000),
(11, '888 Elmwood St', 12, 'Luxury condominium with 24/7 security and concierge service', 600000),
(12, '999 Pineapple St', 13, 'Duplex with updated kitchen and bathrooms', 220000),
(13, '111 Mango St', 14, 'Mobile home in a family-friendly community with swimming pool', 80000),
(14, '222 Banana St', 17, 'Tiny house with loft bedroom and solar panels', 95000),
(15, '333 Grape St', 9, 'Classic single-family home with original hardwood floors', 280000),
(16, '444 Lemon St', 10, 'Bright and airy apartment with city views', 1600),
(17, '555 Orange St', 11, 'Townhouse with spacious living area and attached garage', 330000),
(18, '666 Peach St', 12, 'Condominium in a high-rise building with amenities', 550000),
(19, '777 Plum St', 13, 'Duplex with separate entrances for each unit', 230000),
(20, '888 Watermelon St', 14, 'Mobile home with updated interior and large deck', 85000);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(30) NOT NULL,
  `tenant_id` int(30) NOT NULL,
  `amount` float NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `tenant_id`, `amount`, `invoice`, `date_created`) VALUES
(1, 1, 1500, 'INV001', '2024-05-02 00:00:00'),
(2, 2, 1200, 'INV002', '2024-05-04 00:00:00'),
(3, 3, 1600, 'INV003', '2024-05-06 00:00:00'),
(4, 4, 1800, 'INV004', '2024-05-08 00:00:00'),
(5, 5, 1400, 'INV005', '2024-05-10 00:00:00'),
(6, 6, 1700, 'INV006', '2024-05-12 00:00:00'),
(7, 7, 1300, 'INV007', '2024-05-14 00:00:00'),
(8, 8, 1900, 'INV008', '2024-05-16 00:00:00'),
(9, 9, 1550, 'INV009', '2024-05-18 00:00:00'),
(10, 10, 1250, 'INV010', '2024-05-20 00:00:00'),
(11, 11, 1650, 'INV011', '2024-05-22 00:00:00'),
(12, 12, 1350, 'INV012', '2024-05-24 00:00:00'),
(13, 13, 1450, 'INV013', '2024-05-26 00:00:00'),
(14, 14, 1700, 'INV014', '2024-05-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'House Rental Management System', 'support@gmail.com', '+88016 08445456', '1603344720_1602738120_pngtree-purple-hd-business-banner-image_5493.jpg', '&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` int(30) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `house_id` int(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = active, 0= inactive',
  `date_in` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `firstname`, `middlename`, `lastname`, `email`, `contact`, `house_id`, `status`, `date_in`) VALUES
(1, 'Aarav', 'Kumar', 'Sharma', 'aarav.sharma@example.com', '+91-9876543210', 1, 1, '2024-05-01'),
(2, 'Aadhya', 'Singh', 'Patel', 'aadhya.patel@example.com', '+91-8765432109', 2, 1, '2024-05-03'),
(3, 'Advait', 'Gupta', 'Desai', 'advait.desai@example.com', '+91-7654321098', 3, 1, '2024-05-05'),
(4, 'Ananya', 'Shah', 'Joshi', 'ananya.joshi@example.com', '+91-6543210987', 4, 1, '2024-05-07'),
(5, 'Arnav', 'Patel', 'Khan', 'arnav.khan@example.com', '+91-5432109876', 5, 1, '2024-05-09'),
(6, 'Aryan', 'Mishra', 'Shah', 'aryan.shah@example.com', '+91-4321098765', 6, 1, '2024-05-11'),
(7, 'Avni', 'Verma', 'Singh', 'avni.singh@example.com', '+91-3210987654', 7, 1, '2024-05-13'),
(8, 'Ishaan', 'Kumar', 'Mehta', 'ishaan.mehta@example.com', '+91-2109876543', 8, 1, '2024-05-15'),
(9, 'Kabir', 'Malhotra', 'Gupta', 'kabir.gupta@example.com', '+91-1098765432', 9, 1, '2024-05-17'),
(10, 'Kiara', 'Sharma', 'Singh', 'kiara.singh@example.com', '+91-0987654321', 10, 1, '2024-05-19'),
(11, 'Reyaansh', 'Singh', 'Verma', 'reyaansh.verma@example.com', '+91-9876543210', 11, 1, '2024-05-21'),
(12, 'Rhea', 'Patel', 'Sharma', 'rhea.sharma@example.com', '+91-8765432109', 12, 1, '2024-05-23'),
(13, 'Rudra', 'Mishra', 'Kaur', 'rudra.kaur@example.com', '+91-7654321098', 13, 1, '2024-05-25'),
(14, 'Saisha', 'Desai', 'Kumar', 'saisha.kumar@example.com', '+91-6543210987', 14, 1, '2024-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=Admin,2=Staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Administrator', 'admin@gmail.com', '3e8b2a43817973ab5e1490394e94737b', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
