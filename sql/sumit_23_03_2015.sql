-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2015 at 05:41 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `heroshowroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bills`
--

CREATE TABLE IF NOT EXISTS `tbl_bills` (
`bill_id` int(11) NOT NULL,
  `fk_customer_id` int(11) NOT NULL,
  `fk_vehicle_id` int(11) NOT NULL,
  `total_bill_amount` double NOT NULL,
  `payment_type` int(11) NOT NULL,
  `bank_branch_name` varchar(200) NOT NULL,
  `dd_no_check_no` varchar(50) NOT NULL,
  `dd_check_amount` double NOT NULL,
  `dd_check_dated_on` date NOT NULL,
  `service_book_no` varchar(200) NOT NULL,
  `service_book_date` date NOT NULL,
  `insurance_company` varchar(200) NOT NULL,
  `insurance_date` date NOT NULL,
  `bill_added_on` datetime NOT NULL,
  `fk_bill_added_by` int(11) NOT NULL,
  `bill_updated_on` datetime NOT NULL,
  `fk_bill_updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE IF NOT EXISTS `tbl_customers` (
`c_id` int(10) NOT NULL,
  `c_bill_id` int(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_date_of_birth` date NOT NULL,
  `c_address` text NOT NULL,
  `c_city` varchar(15) NOT NULL,
  `c_state` varchar(15) NOT NULL,
  `c_country` varchar(15) NOT NULL,
  `c_mobile` bigint(20) NOT NULL,
  `c_file_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles` (
`user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_profiles`
--

INSERT INTO `tbl_profiles` (`user_id`, `lastname`, `firstname`) VALUES
(1, 'Admin', 'Administrator'),
(2, 'Demo', 'Demo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles_fields`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles_fields` (
`id` int(10) NOT NULL,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` varchar(15) NOT NULL DEFAULT '0',
  `field_size_min` varchar(15) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_profiles_fields`
--

INSERT INTO `tbl_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'lastname', 'Last Name', 'VARCHAR', '50', '3', 1, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'firstname', 'First Name', 'VARCHAR', '50', '3', 1, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`, `activkey`, `create_at`, `lastvisit_at`, `superuser`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', '2015-03-20 11:30:12', '2015-03-23 09:10:33', 1, 1),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', '2015-03-20 11:30:12', '2015-03-20 10:07:58', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicles`
--

CREATE TABLE IF NOT EXISTS `tbl_vehicles` (
`vehicle_id` int(11) NOT NULL,
  `vehicle_name` varchar(200) NOT NULL,
  `vehicle_model` varchar(200) NOT NULL,
  `vehicle_make` varchar(50) NOT NULL,
  `vehicle_year` varchar(10) NOT NULL,
  `vehicle_color` varchar(20) NOT NULL,
  `vehicle_key_no` varchar(100) NOT NULL,
  `vehicle_frame_no` varchar(100) NOT NULL,
  `vehicle_engine_no` varchar(100) NOT NULL,
  `vehicle_battery_make` varchar(100) NOT NULL,
  `vehicle_battery_no` varchar(100) NOT NULL,
  `vehicle_price` double NOT NULL,
  `vehicle_quantity` int(11) NOT NULL,
  `vehicle_description` text NOT NULL,
  `added_on` datetime NOT NULL,
  `fk_added_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  `fk_updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle_accesories`
--

CREATE TABLE IF NOT EXISTS `tbl_vehicle_accesories` (
`accessory_id` int(11) NOT NULL,
  `fk_vehicle_id` int(11) NOT NULL,
  `acessory_name` varchar(200) NOT NULL,
  `acessory_description` text NOT NULL,
  `added_on` datetime NOT NULL,
  `fk_added_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  `fk_updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bills`
--
ALTER TABLE `tbl_bills`
 ADD PRIMARY KEY (`bill_id`), ADD KEY `fk_c_id` (`fk_customer_id`), ADD KEY `fk_v_id` (`fk_vehicle_id`), ADD KEY `fk_b_added_by` (`fk_bill_added_by`), ADD KEY `fk_b_updated_by` (`fk_bill_updated_by`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
 ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_profiles`
--
ALTER TABLE `tbl_profiles`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_profiles_fields`
--
ALTER TABLE `tbl_profiles_fields`
 ADD PRIMARY KEY (`id`), ADD KEY `varname` (`varname`,`widget`,`visible`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`), ADD KEY `status` (`status`), ADD KEY `superuser` (`superuser`);

--
-- Indexes for table `tbl_vehicles`
--
ALTER TABLE `tbl_vehicles`
 ADD PRIMARY KEY (`vehicle_id`), ADD KEY `fk_v_added_by` (`fk_added_by`), ADD KEY `fk_v_updated_by` (`fk_updated_by`);

--
-- Indexes for table `tbl_vehicle_accesories`
--
ALTER TABLE `tbl_vehicle_accesories`
 ADD PRIMARY KEY (`accessory_id`), ADD KEY `fk_va_id` (`fk_vehicle_id`), ADD KEY `fk_va_added_by` (`fk_added_by`), ADD KEY `fk_va_updated_by` (`fk_updated_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bills`
--
ALTER TABLE `tbl_bills`
MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_profiles`
--
ALTER TABLE `tbl_profiles`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_profiles_fields`
--
ALTER TABLE `tbl_profiles_fields`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_vehicles`
--
ALTER TABLE `tbl_vehicles`
MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_vehicle_accesories`
--
ALTER TABLE `tbl_vehicle_accesories`
MODIFY `accessory_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_bills`
--
ALTER TABLE `tbl_bills`
ADD CONSTRAINT `fk_b_added_by` FOREIGN KEY (`fk_bill_added_by`) REFERENCES `tbl_users` (`id`),
ADD CONSTRAINT `fk_b_updated_by` FOREIGN KEY (`fk_bill_updated_by`) REFERENCES `tbl_users` (`id`),
ADD CONSTRAINT `fk_c_id` FOREIGN KEY (`fk_customer_id`) REFERENCES `tbl_customers` (`c_id`),
ADD CONSTRAINT `fk_v_id` FOREIGN KEY (`fk_vehicle_id`) REFERENCES `tbl_vehicles` (`vehicle_id`);

--
-- Constraints for table `tbl_profiles`
--
ALTER TABLE `tbl_profiles`
ADD CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_vehicles`
--
ALTER TABLE `tbl_vehicles`
ADD CONSTRAINT `fk_v_added_by` FOREIGN KEY (`fk_added_by`) REFERENCES `tbl_users` (`id`),
ADD CONSTRAINT `fk_v_updated_by` FOREIGN KEY (`fk_updated_by`) REFERENCES `tbl_users` (`id`);

--
-- Constraints for table `tbl_vehicle_accesories`
--
ALTER TABLE `tbl_vehicle_accesories`
ADD CONSTRAINT `fk_va_added_by` FOREIGN KEY (`fk_added_by`) REFERENCES `tbl_users` (`id`),
ADD CONSTRAINT `fk_va_id` FOREIGN KEY (`fk_vehicle_id`) REFERENCES `tbl_vehicles` (`vehicle_id`),
ADD CONSTRAINT `fk_va_updated_by` FOREIGN KEY (`fk_updated_by`) REFERENCES `tbl_users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
