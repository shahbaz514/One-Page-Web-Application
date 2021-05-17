-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 06:04 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `one_page_application_by_coding_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `img`, `date`) VALUES
(1, 'About Us', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi fugiat!', 'uol-860x337.jpg', '2021-01-06 03:33:44'),
(2, 'Professional Team', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi fugiat!\r\n\r\n', 'SGDbanner1920-1.jpg', '2021-01-06 03:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `icon` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `title`, `description`, `icon`, `date`) VALUES
(1, 'Steam Bath\r\n', 'Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod\r\n\r\n', 'ti-share-alt', '2020-12-26 12:48:21'),
(2, 'Wi-Fi\r\n', 'Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod\r\n\r\n', 'ti-pulse', '2020-12-26 12:48:21'),
(3, 'Air Conditioned', 'Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod\r\n\r\n', 'ti-panel', '2020-12-27 10:48:46'),
(6, 'Time Clock', 'Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod', 'ti-alarm-clock', '2020-12-27 10:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `class` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `title`, `class`, `date`) VALUES
(1, 'Graphic', 'gts', '2020-12-26 13:11:26'),
(2, 'UI Project', 'lap', '2020-12-26 13:11:26'),
(5, 'Full Stack', 'selfie', '2021-01-03 05:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `description`, `date`) VALUES
(2, 'Shahbaz Akh.', 'shahbaz.lhr.uol@gmail.com', 'Hi, How are You? Please Subscribe my Channel.', '2020-12-26 15:36:23');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `img` text NOT NULL,
  `class` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `img`, `class`, `date`) VALUES
(9, 'Shahbaz514', 'shahbaz514.png', 'selfie', '2021-01-06 06:01:07'),
(10, 'Ecommerece', '3.1.jpg', 'lap', '2021-01-06 06:11:02'),
(11, 'Portfolio Website', '2.jpg', 'gts', '2021-01-06 06:10:28');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `sub_title`, `description`, `img`, `date`) VALUES
(4, 'University of Lahore', 'Lahore Campus', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.', 'uol-860x337.jpg', '2021-01-06 12:08:53'),
(5, 'University of Lahore', 'Sargodha Campus', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.', 'SGDbanner1920-1.jpg', '2021-01-06 12:09:26'),
(6, 'University of Lahore', 'Gujrat Campus', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.', 'GJr1920-2.jpg', '2021-01-06 12:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `site_name` text NOT NULL,
  `site_main_heading` text NOT NULL,
  `site_main_img` text NOT NULL,
  `services_desc` text NOT NULL,
  `amenities_desc` text NOT NULL,
  `port_desc` text NOT NULL,
  `team_desc` text NOT NULL,
  `price_desc` text NOT NULL,
  `contact_desc` text NOT NULL,
  `count_01_title` text NOT NULL,
  `count_01_value` text NOT NULL,
  `count_02_title` text NOT NULL,
  `count_02_value` text NOT NULL,
  `count_03_title` text NOT NULL,
  `count_03_value` text NOT NULL,
  `count_04_title` text NOT NULL,
  `count_04_value` text NOT NULL,
  `map_iframe_link` text NOT NULL,
  `footer_text` text NOT NULL,
  `footer_link_title` text NOT NULL,
  `footer_link` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `site_name`, `site_main_heading`, `site_main_img`, `services_desc`, `amenities_desc`, `port_desc`, `team_desc`, `price_desc`, `contact_desc`, `count_01_title`, `count_01_value`, `count_02_title`, `count_02_value`, `count_03_title`, `count_03_value`, `count_04_title`, `count_04_value`, `map_iframe_link`, `footer_text`, `footer_link_title`, `footer_link`, `date`) VALUES
(1, 'Developers School', 'Shahbaz514', '62602576_2403192823066459_901339010650079232_o.jpg', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alterations', 'There are many variations of passages of Lorem Ipsum available, but the majoritys', 'There are many variations of passages of Lorem Ipsum available, but the majoritys', 'There are many variations of passages of Lorem Ipsum available, but the majoritys', 'There are many variations of passages of Lorem Ipsum available, but the majoritys\r\n\r\n', 'There are many variations of passages of Lorem Ipsum available, but the majoritys\r\n\r\n', 'Total Project\'s', '300', 'Active Project\'s', '30', 'Language\'s', '60', 'Customer\'s', '300', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13564.260529584215!2d72.8843676!3d31.7959748!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9659c1dd13c04b97!2sSHAHBAZ514.INC!5e0!3m2!1sen!2s!4v1612804925771!5m2!1sen!2s', '© All Rights Reserved By Shahbaz514, Inc.', 'Developers School', 'www.shahbaz514.com', '2021-02-09 04:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `role` text NOT NULL,
  `img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `role`, `img`, `date`) VALUES
(1, 'Shahbaz Akhtar Javed', 'CEO', 'Gujrat-City-398.jpg', '2021-01-06 12:10:39'),
(2, 'Alia Khan', 'Web Developer', 'Islamabad-City-398.jpg', '2021-01-06 12:10:50'),
(3, 'Usama Arshad', 'Android Developer', 'Sarghoda-City-398.jpg', '2021-01-06 12:11:03'),
(5, 'Najam Abbas', 'Web Developer', 'Lahore-city-398.jpg', '2021-01-06 12:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `pass` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `date`) VALUES
(1, 'shahbaz514', '123', '2020-12-26 15:42:34'),
(2, 'ali', '123', '2020-12-26 15:42:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`),
  ADD KEY `map_iframe_link` (`map_iframe_link`(3072));

--
-- Indexes for table `team`
--
ALTER TABLE `team`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
