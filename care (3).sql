-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2025 at 07:32 AM
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
-- Database: `care`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','moderator') DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `role`) VALUES
(1, 'sahiba', 'saha123', 'admin'),
(2, 'maha', 'ma456', 'moderator');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `status` enum('pending','confirmed','cancelled','completed') DEFAULT 'pending',
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chatbot_logs`
--

CREATE TABLE `chatbot_logs` (
  `id` int(11) NOT NULL,
  `user_message` text DEFAULT NULL,
  `bot_response` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot_logs`
--

INSERT INTO `chatbot_logs` (`id`, `user_message`, `bot_response`, `created_at`) VALUES
(1, 'I need a nurse for home care', 'Sure, please provide your city and dates.', '2025-07-12 18:14:12'),
(2, 'Can I book an oxygen cylinder?', 'Yes, we can deliver it to your address.', '2025-07-12 18:14:12'),
(3, 'I need a nurse for home care', 'Sure, please provide your city and dates.', '2025-07-12 18:14:13'),
(4, 'Can I book an oxygen cylinder?', 'Yes, we can deliver it to your address.', '2025-07-12 18:14:13'),
(5, 'Can I book an oxygen cylinder?', 'Yes, we can deliver it to your address.', '2025-07-18 04:50:10'),
(6, 'Can I book an oxygen cylinder?', 'Yes, we can deliver it to your address.', '2025-07-18 04:50:28'),
(7, 'Do you have oxygen?', 'Yes, we can deliver it to your address.', '2025-07-18 04:51:17'),
(8, 'Do you have a wheelchair?', 'Sorry, I didn’t understand. Can you please rephrase?', '2025-07-18 04:51:55'),
(9, 'How to book?', 'Sorry, I didn’t understand. Can you please rephrase?', '2025-07-18 04:52:08'),
(10, 'I need a nurse for home care', 'Sure, please provide your city and dates.', '2025-07-18 04:57:50'),
(11, 'Can I book a nurse?', 'Sure, please provide your city and dates.', '2025-07-18 04:57:50'),
(12, 'Home nurse required in Lahore', 'Sure, please provide your city and dates.', '2025-07-18 04:57:50'),
(13, 'Do you provide oxygen cylinders?', 'Yes, we can deliver it to your address.', '2025-07-18 04:57:50'),
(14, 'Need oxygen supply at home', 'Yes, we can deliver it to your address.', '2025-07-18 04:57:50'),
(15, 'Can I rent an oxygen cylinder?', 'Yes, we can deliver it to your address.', '2025-07-18 04:57:50'),
(16, 'I want medical assistance', 'Sorry, I didn’t understand. Can you please rephrase?', '2025-07-18 04:57:50'),
(17, 'Book nurse for Islamabad', 'Sure, please provide your city and dates.', '2025-07-18 04:57:50'),
(18, 'How to get nurse service?', 'Sure, please provide your city and dates.', '2025-07-18 04:57:50'),
(19, 'Oxygen gas available?', 'Yes, we can deliver it to your address.', '2025-07-18 04:57:50'),
(20, 'How to book?', 'Sorry, I didn’t understand. Can you please rephrase?', '2025-07-18 04:58:54'),
(21, 'Do you have a wheelchair?', 'Sorry, I didn’t understand. Can you please rephrase?', '2025-07-18 04:58:59'),
(22, 'I want medical assistance', 'Sorry, I didn’t understand. Can you please rephrase?', '2025-07-18 04:59:17'),
(23, 'I want medical assistance', 'Sorry, I didn’t understand. Can you please rephrase?', '2025-07-18 04:59:21'),
(24, 'I want medical assistance', 'Sorry, I didn’t understand. Can you please rephrase?', '2025-07-18 04:59:24'),
(25, 'I want medical assistance', 'Sorry, I didn’t understand. Can you please rephrase?', '2025-07-18 04:59:43'),
(26, 'Home nurse required in Lahore', 'Sure, please provide your city and dates.', '2025-07-18 05:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot_voice_logs`
--

CREATE TABLE `chatbot_voice_logs` (
  `id` int(11) NOT NULL,
  `user_input` text NOT NULL,
  `bot_reply` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `consult_date` datetime DEFAULT NULL,
  `status` enum('pending','confirmed','completed','cancelled') DEFAULT 'pending',
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultations`
--

INSERT INTO `consultations` (`id`, `user_id`, `doctor_id`, `consult_date`, `status`, `notes`) VALUES
(1, 1, 1, '2025-07-18 14:00:00', 'confirmed', 'Follow-up for cough & fever'),
(2, 2, 2, '2025-07-19 16:30:00', 'pending', 'Shortness of breath, need consultation');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `specialization` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `license_number` varchar(50) DEFAULT NULL,
  `available` enum('yes','no') DEFAULT 'yes',
  `verification_status` enum('pending','verified','rejected') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `full_name`, `specialization`, `phone`, `license_number`, `available`, `verification_status`) VALUES
(1, 'Dr. sahiba', 'General Physician', '03331234567', 'PMDC-12345', 'yes', 'verified'),
(2, 'Dr. mahnoor', 'Pulmonologist', '03451234567', 'PMDC-67890', 'yes', 'pending'),
(3, 'Dr. zalley', 'General Physician', '03331234567', 'PMDC-12345', 'yes', 'verified'),
(4, 'Dr. jennifer', 'Pulmonologist', '03451234567', 'PMDC-67890', 'yes', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `status` enum('available','out_of_stock') DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `description`, `price`, `stock`, `status`) VALUES
(1, 'Paracetamol', 'Pain reliever and fever reducer', 30.00, 100, 'available'),
(2, 'Ventolin Inhaler', 'Asthma relief inhaler', 450.00, 25, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `nurses`
--

CREATE TABLE `nurses` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `license_number` varchar(50) DEFAULT NULL,
  `experience_years` int(11) DEFAULT NULL,
  `available` enum('yes','no') DEFAULT 'yes',
  `verification_status` enum('pending','verified','rejected') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nurses`
--

INSERT INTO `nurses` (`id`, `full_name`, `phone`, `license_number`, `experience_years`, `available`, `verification_status`) VALUES
(1, 'Nurse mahnoor', '03111234567', 'RN-23456', 5, 'yes', 'verified'),
(2, 'Nurse sahiba', '03211235677', 'RN-78901', 3, 'yes', 'pending'),
(3, 'Nurse arrvin', '03234112347', 'RN-78901', 6, 'yes', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `medicine_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `status` enum('pending','dispatched','delivered','cancelled') DEFAULT 'pending',
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `status` enum('success','failed','pending') DEFAULT 'pending',
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `order_id`, `amount`, `payment_method`, `status`, `payment_date`) VALUES
(1, 1, 1, 60.00, 'Credit Card', 'success', '2025-07-12 18:14:48'),
(2, 2, 2, 450.00, 'Cash on Delivery', 'pending', '2025-07-12 18:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `description`, `status`) VALUES
(1, 'Home Nurse', 'Book trained nurses for home care', 'active'),
(2, 'Oxygen Cylinder', 'Get oxygen cylinders delivered at home', 'active'),
(3, 'Medicine Delivery', 'Order medicines at your doorstep', 'active'),
(4, 'Tele-Consultation', 'Consult with doctors online', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `service_areas`
--

CREATE TABLE `service_areas` (
  `id` int(11) NOT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `available` enum('yes','no') DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `role`) VALUES
(1, 'sahiba', 'sahiba@example.com', 'sah12', 'admin'),
(2, 'arrvin', 'arrvin@example.com', 'arr12', 'user'),
(5, 'arrvin', 'arr123@gmail.com', 'arr123', 'user'),
(6, 'arrvin', 'arrvin@gmail.com', 'arr12', 'user'),
(7, 'lelix', 'ujalahabib085@gmail.com', '12', 'user'),
(8, 'lelix', 'lelix1@gmail.com', 'arr3455', 'user'),
(9, 'jen', 'je@gmail.com', '123445', 'user'),
(10, 'alley', 'alle123@gmail.com', 'all345', 'user'),
(11, 'mahnoor', 'maha12@gmail.com', 'mah567', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `chatbot_logs`
--
ALTER TABLE `chatbot_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatbot_voice_logs`
--
ALTER TABLE `chatbot_voice_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurses`
--
ALTER TABLE `nurses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `medicine_id` (`medicine_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_areas`
--
ALTER TABLE `service_areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chatbot_logs`
--
ALTER TABLE `chatbot_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `chatbot_voice_logs`
--
ALTER TABLE `chatbot_voice_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nurses`
--
ALTER TABLE `nurses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_areas`
--
ALTER TABLE `service_areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `consultations`
--
ALTER TABLE `consultations`
  ADD CONSTRAINT `consultations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `consultations_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`medicine_id`) REFERENCES `medicines` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `service_areas`
--
ALTER TABLE `service_areas`
  ADD CONSTRAINT `service_areas_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
