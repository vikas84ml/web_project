-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 12:02 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `singh_construction`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `heading`, `image`) VALUES
(15, 'At Singh Construction, we specialise in the effective planning, management and delivery of commercial & residential building projects. Established in the year 2005, at Satna (M.P.) - India, “Singh Constructions” are engaged in offering the best Construction Services in the country. Our offered services include Building Constructions, Residential Flat Constructions, Colony Construction, Factory Construction, Residential Flats.', 'businessman-1356063_1920.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_login_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_login_id`, `name`, `email`, `password`) VALUES
(1, 'Gyan Singh', 'gs41320@gmail.com', 'gyan');

-- --------------------------------------------------------

--
-- Table structure for table `customer_support`
--

CREATE TABLE `customer_support` (
  `cust_id` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_support`
--

INSERT INTO `customer_support` (`cust_id`, `location`, `mobile`, `email`) VALUES
(6, 'Ramtekri Near RTO Office Maihar Bypass Satna (M.P.) 485001', '9617143126', 'gs41320@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'vikas84r@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_size` varchar(100) NOT NULL,
  `p_add` varchar(255) NOT NULL,
  `p_desc` varchar(1000) NOT NULL,
  `p_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`p_id`, `p_name`, `p_size`, `p_add`, `p_desc`, `p_img`) VALUES
(1, 'asha villa', '1500(square feet)', 'Ram Teckri Bypass Satna (M.P.) , 485001', 'It’s hard to believe the vast regeneration this large family home has been through to get to the beautiful finished property you see in front of your eyes today.\r\nWith the house completely now reshaped, we could then set about our work in creating a bright, airy and modern home for our client', 'WhatsApp Image 2020-08-03 at 12.53.24.jpeg'),
(2, 'Pathak Niwas', '1800(square feet)', 'Hanuman Nagar, Nayi Basti, Satna (M.P.) , 485001', 'It’s hard to believe the vast regeneration this large family home has been through to get to the beautiful finished property you see in front of your eyes today.\r\nWith the house completely now reshaped, we could then set about our work in creating a bright, airy and modern home for our client', 'under-construction-2891888_640.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `descr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `icon`, `heading`, `descr`) VALUES
(7, '									<i class=\"fas fa-drafting-compass\"></i>									', 'Architectural Design', 'We offer professional architectural design services as per the latest trends and with assurance of best space management and positive energy. 									'),
(9, '						<i class=\"fas fa-cubes\"></i>						', '2D & 3D Drawing', 'We have executed various projects related to 3D CAD Models Design, 3D Interior/Exterior Models Design. We develop each and every design with 3D imaging to fully realize the inherent design potential in a project/building		'),
(10, '			<i class=\"fas fa-lightbulb\"></i>			', 'Planing,Billing And Stimation', 'Singh Construction provides  billing, estimation and Planning services, civil engineering services, building estimation services, laundry cost estimation services, land estimation service			'),
(12, '			<i class=\"fas fa-torii-gate\"></i>			', 'Commercial & Residential Building', 'Whether your project is commercial, industrial or residential, Singh Construction is ready to serve you. From the ground up or remodeling, we will deliver a completed project.		'),
(13, '			<i class=\"fas fa-road\"></i>			', 'Road & Canal', 'Singh constructions services provide all kinds of road and canal like bitumen and concrete road in industrial or commercial buildings.			'),
(14, '			<i class=\"fas fa-brush\"></i>			', 'Masonry,Plastering,Putty Coloring & Water Proofing', 'Singh constructions services provide all kinds of Masonry,Plastering,Putty Coloring & Water Proofing.		'),
(15, '			<i class=\"fas fa-money-bill-wave\"></i>			', 'Buy And Selling Flats & Lands', ' Singh Construction Sale & Purchase Of All Kinds Of Property.			'),
(16, '			<i class=\"fas fa-pencil-alt\"></i>			', 'Interior and Exterior Design', 'We offer Corporate Interior Designing, Reception Designing Services, Lab Designing Services, Theater Designing, Beauty Parlor Designing and Exterior Design Services.			');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(11) NOT NULL,
  `s_img1` text NOT NULL,
  `s_img2` text NOT NULL,
  `s_img3` text NOT NULL,
  `s_heading` varchar(60) NOT NULL,
  `s_slog` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `s_img1`, `s_img2`, `s_img3`, `s_heading`, `s_slog`) VALUES
(13, 'architecture-4810652_1280.png', 'construction-4794329_1280.png', 'construction-4260764_1920.jpg', 'Welcome To Singh Construction', 'Customer Happiness is our aim');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(11) NOT NULL,
  `f_link` varchar(255) NOT NULL,
  `insta_link` varchar(255) NOT NULL,
  `linkedin_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `t_id` int(11) NOT NULL,
  `cust_img` text NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_login_id`);

--
-- Indexes for table `customer_support`
--
ALTER TABLE `customer_support`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_support`
--
ALTER TABLE `customer_support`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
