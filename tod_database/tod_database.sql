-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2025 at 03:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tod_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `create_pass` char(52) DEFAULT NULL,
  `confirm_pass` char(52) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `create_pass`, `confirm_pass`, `created_at`) VALUES
(1, 'Aarif', 'm.islam6101@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', '2025-12-06 15:46:43'),
(2, 'Pritom', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', '2025-12-06 15:47:01');

-- --------------------------------------------------------

--
-- Table structure for table `air_ticket`
--

CREATE TABLE `air_ticket` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `from` varchar(30) DEFAULT NULL,
  `to` varchar(30) DEFAULT NULL,
  `deperture` date DEFAULT NULL,
  `arraival` date DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `nid_copy` varchar(200) DEFAULT NULL,
  `passport_copy` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `air_tick_req`
--

CREATE TABLE `air_tick_req` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `client_name` varchar(100) DEFAULT NULL,
  `client_email` varchar(60) DEFAULT NULL,
  `client_nid_copy` varchar(200) DEFAULT NULL,
  `client_passprot_copy` varchar(200) DEFAULT NULL,
  `from` varchar(30) DEFAULT NULL,
  `to` varchar(30) DEFAULT NULL,
  `departure` date DEFAULT NULL,
  `arraival` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(80) DEFAULT NULL,
  `body` text DEFAULT NULL COMMENT 'Content of the post',
  `admin_id` int(11) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `nid` varchar(30) DEFAULT NULL,
  `nid_copy` varchar(200) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `create_pass` char(52) DEFAULT NULL,
  `confirm_pass` char(52) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_feedback`
--

CREATE TABLE `client_feedback` (
  `client_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `msg` varchar(250) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `details` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `details` varchar(250) DEFAULT NULL,
  `package_photo` varchar(200) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package_tour`
--

CREATE TABLE `package_tour` (
  `package_id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `place` varchar(20) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `nid_copy` varchar(200) DEFAULT NULL,
  `passport_copy` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ressorts`
--

CREATE TABLE `ressorts` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `details` varchar(250) DEFAULT NULL,
  `ressort_photo` varchar(200) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ressort_book`
--

CREATE TABLE `ressort_book` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `place` varchar(20) DEFAULT NULL,
  `ressort_name` varchar(60) DEFAULT NULL,
  `room_type` varchar(20) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `nid_copy` varchar(200) DEFAULT NULL,
  `passport_copy` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ressort_req`
--

CREATE TABLE `ressort_req` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `client_name` varchar(100) DEFAULT NULL,
  `client_email` varchar(60) DEFAULT NULL,
  `client_nid_copy` varchar(200) DEFAULT NULL,
  `client_passprot_copy` varchar(200) DEFAULT NULL,
  `place` varchar(20) DEFAULT NULL,
  `ressort_name` varchar(60) DEFAULT NULL,
  `room_type` varchar(20) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ship_list`
--

CREATE TABLE `ship_list` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `ship_name` varchar(50) DEFAULT NULL,
  `details_photo` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ship_ticket`
--

CREATE TABLE `ship_ticket` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `deperture` date DEFAULT NULL,
  `arraival` date DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `nid_copy` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ship_tick_req`
--

CREATE TABLE `ship_tick_req` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `client_name` varchar(100) DEFAULT NULL,
  `client_email` varchar(60) DEFAULT NULL,
  `client_nid_copy` varchar(200) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `air_ticket`
--
ALTER TABLE `air_ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `air_tick_req`
--
ALTER TABLE `air_tick_req`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_feedback`
--
ALTER TABLE `client_feedback`
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_tour`
--
ALTER TABLE `package_tour`
  ADD PRIMARY KEY (`package_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `ressorts`
--
ALTER TABLE `ressorts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ressort_book`
--
ALTER TABLE `ressort_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `ressort_req`
--
ALTER TABLE `ressort_req`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `ship_list`
--
ALTER TABLE `ship_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_ticket`
--
ALTER TABLE `ship_ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `ship_tick_req`
--
ALTER TABLE `ship_tick_req`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `air_ticket`
--
ALTER TABLE `air_ticket`
  ADD CONSTRAINT `air_ticket_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Constraints for table `air_tick_req`
--
ALTER TABLE `air_tick_req`
  ADD CONSTRAINT `air_tick_req_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `client_feedback`
--
ALTER TABLE `client_feedback`
  ADD CONSTRAINT `client_feedback_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `package_tour`
--
ALTER TABLE `package_tour`
  ADD CONSTRAINT `package_tour_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Constraints for table `ressort_book`
--
ALTER TABLE `ressort_book`
  ADD CONSTRAINT `ressort_book_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Constraints for table `ressort_req`
--
ALTER TABLE `ressort_req`
  ADD CONSTRAINT `ressort_req_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Constraints for table `ship_ticket`
--
ALTER TABLE `ship_ticket`
  ADD CONSTRAINT `ship_ticket_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Constraints for table `ship_tick_req`
--
ALTER TABLE `ship_tick_req`
  ADD CONSTRAINT `ship_tick_req_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
