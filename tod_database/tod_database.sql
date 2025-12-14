-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2025 at 05:55 PM
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `create_pass`, `created_at`) VALUES
(1, 'Aarif', 'm.islam6101@gmail.com', 'c3284d0f94606de1fd2af172aba15bf3', '2025-12-10 10:33:08'),
(2, 'Pritom', 'admin@gmail.com', 'c3284d0f94606de1fd2af172aba15bf3', '2025-12-10 10:33:08');

-- --------------------------------------------------------

--
-- Table structure for table `air_ticket`
--

CREATE TABLE `air_ticket` (
  `id` int(11) NOT NULL,
  `airlines` varchar(60) DEFAULT NULL,
  `airline_logo` varchar(150) DEFAULT NULL,
  `seat_status` varchar(60) DEFAULT NULL,
  `details` varchar(150) DEFAULT NULL,
  `from` varchar(30) DEFAULT NULL,
  `to` varchar(30) DEFAULT NULL,
  `deperture` date DEFAULT NULL,
  `d_time` varchar(8) DEFAULT NULL,
  `a_time` varchar(60) DEFAULT NULL,
  `transit` varchar(10) DEFAULT NULL,
  `d_airport_code` varchar(30) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `air_ticket`
--

INSERT INTO `air_ticket` (`id`, `airlines`, `airline_logo`, `seat_status`, `details`, `from`, `to`, `deperture`, `d_time`, `a_time`, `transit`, `d_airport_code`, `price`, `created_at`) VALUES
(3, 'BIMAN BANGLADESH AIRLINES', 'images/airlines_logo/biman_bangladesh.jpg', 'Business', '<p>Lorem Ipsum</p>', 'DAC - Hazrat Shajalal Int. Air', 'TOR - Torrento International A', '2025-12-24', '23:45', '11H 25M', 'Transit 00', 'DAC', 132000, '2025-12-11 15:04:21'),
(4, 'BIMAN BANGLADESH AIRLINES', 'images/airlines_logo/biman_bangladesh.jpg', 'Economy Class', '<p><b>Lorem Impus</b></p>', 'DAC - Hazrat Shajalal Int. Air', 'LHR - Heathrow Airport, Englan', '2025-12-30', '13:35', '19h 45m', 'Transit 05', 'DAC', 178532, '2025-12-14 16:49:34');

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
  `status` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `air_tick_req`
--

INSERT INTO `air_tick_req` (`id`, `client_id`, `client_name`, `client_email`, `client_nid_copy`, `client_passprot_copy`, `from`, `to`, `departure`, `status`, `created_at`) VALUES
(6, 1, 'Md Mahmudul Islam', 'user@gmail.com', 'admin/images/clients_nid/jarin aarif.jpg', NULL, 'DAC - Hazrat Shajalal Int. Air', 'TOR - Torrento International A', '2025-12-24', 'Pendding', '2025-12-14 15:50:34'),
(8, 2, 'Aarif', 'mahmudul.islam0711@gmail.com', 'admin/images/clients_nid/Screenshot 2025-11-24 223108.png', NULL, 'DAC - Hazrat Shajalal Int. Air', 'LHR - Heathrow Airport, Englan', '2025-12-30', 'Pendding', '2025-12-14 16:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `catagory` varchar(30) DEFAULT NULL,
  `title` varchar(80) DEFAULT NULL,
  `blog_date` date DEFAULT NULL,
  `body` varchar(200) DEFAULT NULL,
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `nid`, `nid_copy`, `email`, `create_pass`, `created_at`) VALUES
(1, 'Md Mahmudul Islam', '2404802726', 'admin/images/clients_nid/jarin aarif.jpg', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', '2025-12-10 10:57:38'),
(2, 'Aarif', '2404802726', 'admin/images/clients_nid/Screenshot 2025-11-24 223108.png', 'mahmudul.islam0711@gmail.com', '81f72d8f9ac8a8299684725bf6b8bb22', '2025-12-10 10:59:51');

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
  `photo` varchar(200) DEFAULT NULL,
  `details` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `photo`, `details`, `created_at`) VALUES
(1, 'images/darjeeling.jpg', 'Darjeeling', '2025-12-09 13:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `time_length` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `details` varchar(250) DEFAULT NULL,
  `package_photo` varchar(200) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `time_length`, `country`, `title`, `details`, `package_photo`, `price`, `created_at`) VALUES
(1, '3 days', 'Bangladesh', 'Saint Martin', '<p><b>Lorem Ipsum</b></p>', 'images/package_tour/saint_martin.jpg', 8990, '2025-12-13 15:59:10'),
(3, '6 days', 'India', 'Darjeeling', '<p><b>Lorem Ipsum</b></p>', 'images/package_tour/darjeeling.jpg', 21999, '2025-12-13 15:59:22');

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
  `place` varchar(30) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `details` varchar(250) DEFAULT NULL,
  `ressort_photo` varchar(200) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ressorts`
--

INSERT INTO `ressorts` (`id`, `place`, `title`, `details`, `ressort_photo`, `price`, `created_at`) VALUES
(1, 'Sreemangol', 'Tilagaon Eco Village', '<p>Lorem Impus</p>', 'images/ressorts/tilagao.jpg', 10499, '2025-12-13 15:57:02');

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
  `where_from` varchar(60) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `ship_name` varchar(50) DEFAULT NULL,
  `details` varchar(120) DEFAULT NULL,
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
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `air_ticket`
--
ALTER TABLE `air_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `air_tick_req`
--
ALTER TABLE `air_tick_req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ressorts`
--
ALTER TABLE `ressorts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
