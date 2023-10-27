-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 08:56 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(250) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `dob` text NOT NULL,
  `contact` text NOT NULL,
  `address` varchar(500) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `created_on` date NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `fname`, `lname`, `gender`, `dob`, `contact`, `address`, `image`, `created_on`, `group_id`) VALUES
(1, 'admin', 'ndbhalerao91@gmail.com', 'aa7f019c326413d5b8bcad4314228bcd33ef557f5d81c7cc977f7728156f4357', 'Nikhil', 'Bhalerao', 'Male', '2018-11-26', '9423979339', 'Nashik', 'unr_harrypotter_171212_1815_34k5k.png', '2018-04-30', 1),
(3, 'user', 'ndbhalerao91@gmail.com', 'db8cd0860d3eeba4da1801178e4942dc4e515484cc9176983d3335a23cc1afb1', 'rushi', 'bhalerao', 'Female', '2019-06-06', '9423979339', 'advx', '', '2019-06-26', 0),
(4, 'user', 'admin@admin.com', 'c7af47bc241fbf1888df2b5e466672c67b1d8987e280836554490d51dbe65cb4', 'sandip', 'vidhate', 'Male', '2019-06-03', '2589632147', 'nasik', 'mylogo.png', '2019-06-27', 0),
(5, 'user', 'akash@gmail.com', 'bbcff4db4d8057800d59a68224efd87e545fa1512dfc3ef68298283fbb3b6358', 'Akash', 'ahire', 'Male', '1991-01-01', '9423979339', 'nashik, maharashtra', '70520.png', '2020-08-16', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `contact`, `address`) VALUES
(1, 'gautam', 'amrale', '9423979339', 'nasik=45'),
(6, 'rupesh', 'mahajan', '9423979339', 'nasik'),
(9, 'sujata', 'bhalerao', '9423979339', 'nasik'),
(10, 'bhagyashri', 'ahire', '9012312321', 'nasik'),
(11, 'gautam', 'amrale', '9423232323', 'nasik,punchavati'),
(12, 'sujata', 'bhalerao', '8080808080', 'cskabskcb'),
(13, 'Atul', 'Petkar', '9423979339', 'nashik'),
(14, 'Johnny', 'Smith', '0912345678', 'Sample Address');

-- --------------------------------------------------------

--
-- Table structure for table `manage_website`
--

CREATE TABLE `manage_website` (
  `id` int(11) NOT NULL,
  `title` varchar(600) NOT NULL,
  `short_title` varchar(600) NOT NULL,
  `logo` text NOT NULL,
  `footer` text NOT NULL,
  `currency_code` varchar(600) NOT NULL,
  `currency_symbol` varchar(600) NOT NULL,
  `login_logo` text NOT NULL,
  `invoice_logo` text NOT NULL,
  `background_login_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_website`
--

INSERT INTO `manage_website` (`id`, `title`, `short_title`, `logo`, `footer`, `currency_code`, `currency_symbol`, `login_logo`, `invoice_logo`, `background_login_image`) VALUES
(1, 'Sunburn Laundry Systems', 'Sunburn Laundry Systems', 'logo.jpg', 'Nikhil Bhalerao', 'INR', 'â‚¹', 'logo.jpg', 'logo.jpg', '1091 - Copy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `prizes` varchar(50) NOT NULL,
  `delivery date` date NOT NULL,
  `delivery_status` tinyint(4) NOT NULL,
  `todays_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `fname`, `lname`, `sname`, `discription`, `prizes`, `delivery date`, `delivery_status`, `todays_date`) VALUES
(18, '11', '', '4', 'sfvs', '50', '2019-06-30', 1, '2019-06-27'),
(19, '10', '', '4', 'ascfa', '50', '2019-06-29', 1, '2019-06-27'),
(25, '10', '', '14', 'dress', '160', '2019-06-29', 1, '2019-06-28'),
(28, '13', '', '4', 'dry cleaning', '50', '2020-08-17', 1, '2016-08-20');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(10) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `prize` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `sname`, `prize`) VALUES
(4, 'washing', '50'),
(14, 'rollpessing', '160'),
(15, 'ironing', '100'),
(16, 'Ironing', '20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_config`
--

CREATE TABLE `tbl_email_config` (
  `e_id` int(21) NOT NULL,
  `name` varchar(500) NOT NULL,
  `mail_driver_host` varchar(5000) NOT NULL,
  `mail_port` int(50) NOT NULL,
  `mail_username` varchar(50) NOT NULL,
  `mail_password` varchar(30) NOT NULL,
  `mail_encrypt` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_email_config`
--

INSERT INTO `tbl_email_config` (`e_id`, `name`, `mail_driver_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encrypt`) VALUES
(1, '<Laundry Management> ', 'mail.gmail.com', 587, 'ndbhalerao91@gmail.com', 'x(ilz?cWumI2', 'sdsad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE `tbl_group` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_group`
--

INSERT INTO `tbl_group` (`id`, `name`, `description`) VALUES
(1, 'admin', 'admin'),
(2, 'manager', 'manager'),
(3, 'employee', 'employee'),
(4, 'supervisor', 'role description');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission`
--

CREATE TABLE `tbl_permission` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `display_name` varchar(200) NOT NULL,
  `operation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permission`
--

INSERT INTO `tbl_permission` (`id`, `name`, `display_name`, `operation`) VALUES
(1, 'manage_user', 'Manage User', 'manage_user'),
(2, 'add_user', 'Add User', 'add_user'),
(3, 'edit_user', 'Edit User', 'edit_user'),
(4, 'delete_user', 'Delete User', 'delete_user'),
(5, 'add_order', 'add order', 'add_order'),
(6, 'edit_order', 'edit order', 'edit_order'),
(7, 'delete_order', 'delete order', 'delete_order'),
(8, 'edit_custome', 'edit_customer', 'edit_customer'),
(9, 'delete_customer', 'delete_customer', 'delete_customer'),
(10, 'add_services', 'add_services', 'add_services'),
(11, 'delete_services', 'delete_services', 'delete_services');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission_role`
--

CREATE TABLE `tbl_permission_role` (
  `id` int(30) NOT NULL,
  `permission_id` int(30) NOT NULL,
  `role_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permission_role`
--

INSERT INTO `tbl_permission_role` (`id`, `permission_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 1, 2),
(13, 2, 2),
(14, 3, 2),
(15, 4, 2),
(16, 5, 2),
(17, 6, 2),
(18, 7, 2),
(19, 8, 2),
(20, 9, 2),
(21, 10, 2),
(22, 11, 2),
(23, 8, 3),
(24, 10, 3),
(25, 1, 4),
(26, 2, 4),
(27, 3, 4),
(28, 4, 4),
(39, 1, 5),
(40, 2, 5),
(41, 3, 5),
(42, 4, 5),
(43, 5, 5),
(44, 6, 5),
(45, 7, 5),
(46, 8, 5),
(47, 9, 5),
(48, 10, 5),
(49, 11, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sms_config`
--

CREATE TABLE `tbl_sms_config` (
  `smsid` int(20) NOT NULL,
  `senderid` int(20) NOT NULL,
  `sms_username` varchar(30) NOT NULL,
  `sms_password` varchar(20) NOT NULL,
  `auth_key` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sms_config`
--

INSERT INTO `tbl_sms_config` (`smsid`, `senderid`, `sms_username`, `sms_password`, `auth_key`) VALUES
(1, 101, 'username', 'password', 'authkey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_permission`
--
ALTER TABLE `tbl_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_permission_role`
--
ALTER TABLE `tbl_permission_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_permission`
--
ALTER TABLE `tbl_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_permission_role`
--
ALTER TABLE `tbl_permission_role`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
