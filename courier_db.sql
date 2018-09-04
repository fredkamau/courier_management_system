-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2018 at 11:57 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `branch_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`username`, `password`, `branch_id`) VALUES
('fred', 'admin', '1'),
('mato', '1223', '2'),
('njeri', 'admin', '3'),
('wahu', 'admin', '4');

-- --------------------------------------------------------

--
-- Table structure for table `ambulance_tbl`
--

CREATE TABLE `ambulance_tbl` (
  `id` int(20) NOT NULL,
  `registration_no` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ambulance_tbl`
--

INSERT INTO `ambulance_tbl` (`id`, `registration_no`, `city`, `status`) VALUES
(1, 'KAA 090K', 'Nairobi, Kenya', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bookings_tbl`
--

CREATE TABLE `bookings_tbl` (
  `id` int(20) NOT NULL,
  `origin` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `urgency` varchar(20) NOT NULL,
  `packing` varchar(20) NOT NULL,
  `weight` float NOT NULL,
  `length` float NOT NULL,
  `wide` int(20) NOT NULL,
  `sender_name` varchar(30) NOT NULL,
  `sender_mobile` int(30) NOT NULL,
  `recipient_name` varchar(30) NOT NULL,
  `recipient_mobile` int(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookings_tbl`
--

INSERT INTO `bookings_tbl` (`id`, `origin`, `destination`, `urgency`, `packing`, `weight`, `length`, `wide`, `sender_name`, `sender_mobile`, `recipient_name`, `recipient_mobile`, `description`) VALUES
(5, 'nairobi', 'nairobi', 'standard', 'yes', 0.7, 33, 33, 'Francis', 390309320, 'george', 38932893, 'hello'),
(6, 'mombasa', 'nakuru', 'express', 'no', 0.3, 30, 20, 'Jane Wangui', 75612389, 'Fredrick Kamau', 714273305, 'highly volatile'),
(7, 'nairobi', 'nairobi', 'standard', 'yes', 0.5, 30, 23, 'Jane Okumu', 72389439, 'George Awiti', 72892182, 'volatile'),
(8, 'nairobi', 'nairobi', 'standard', 'yes', 20, 20, 30, 'Antony mwangi', 721892891, 'George Awiti', 738912912, 'please hurry'),
(9, 'kisumu', 'kisumu', 'express', 'no', 90, 44, 24, 'Jane Wangui', 721892891, 'George Awiti', 714665448, 'maize'),
(10, 'nairobi', 'nairobi', 'standard', 'yes', 3, 33, 20, 'Jane Okumu', 721892891, 'Imma Njeri', 714273305, 'fragile'),
(11, 'mombasa', 'kisumu', 'priority', 'no', 0.8, 30, 33, 'Francis', 721892891, 'George Awiti', 3722828, 'blue package'),
(12, 'mombasa', 'mombasa', 'standard', 'no', 0.8, 2, 22, 'fred', 721892891, 'George Awiti', 738912912, 'biro pen');

-- --------------------------------------------------------

--
-- Table structure for table `branch_tbl`
--

CREATE TABLE `branch_tbl` (
  `branch_id` int(15) NOT NULL,
  `branch_city` varchar(44) NOT NULL,
  `branch_address` varchar(4444) NOT NULL,
  `contact_person` varchar(122) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `contact_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `branch_tbl`
--

INSERT INTO `branch_tbl` (`branch_id`, `branch_city`, `branch_address`, `contact_person`, `contact_no`, `contact_email`) VALUES
(1, 'Nairobi', 'Nyamakima 001', 'waruhio kimani', '0700430303', 'nairobi@cmspro.com'),
(2, 'Mombasa', 'mwembe_tayari 043', 'swaleh mdoe', '0700404043', 'mombasa@cmspro.com'),
(3, 'Kisumu', 'Lions club road 098', 'silavanos wamalwa', '0738392892', 'kisumu@cmspro.com'),
(4, 'Nakuru', 'Pinkam Towers- Main branch', 'Mr. idris patel', '074892832', 'Nakuru@cmspro.com'),
(5, 'South, Birmingham', '240 21st Ave, Apt 34', 'moi kenyatta', '2053826329', 'fredrickamau18@gmail.com'),
(7, 'Mombasa', '240 21st Ave, Apt 34', 'Immaculate Njeri', '0782121982', 'iantrumpmunene@gmail.com'),
(8, 'Mombasa', '240 21st Ave, Apt 34', 'Immaculate Njeri', '2053826329', 'fredrickamau18@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tbl`
--

CREATE TABLE `customer_tbl` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_no` varchar(100) NOT NULL,
  `date_joined` datetime(6) NOT NULL,
  `office_branch` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_tbl`
--

INSERT INTO `customer_tbl` (`customer_id`, `customer_name`, `customer_address`, `customer_email`, `customer_no`, `date_joined`, `office_branch`) VALUES
(20002, 'tito njuguna', 'ngong mshomoroni', 'tito@gmail.com', '072394893', '2018-05-29 06:17:00.000000', 'nakuru'),
(20007, 'Grace wahu', 'naivasha', 'gracewahu@gmail.com', '073892893', '2018-08-01 18:00:00.000000', 'nakuru');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_tbl`
--

CREATE TABLE `emergency_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `issue` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emergency_tbl`
--

INSERT INTO `emergency_tbl` (`id`, `name`, `phone`, `address`, `issue`) VALUES
(1, 'Anthony Mwangi', 78289219, 'kiziwi, mombasa', 'beaten by Nasoro');

-- --------------------------------------------------------

--
-- Table structure for table `parcel_info_tbl`
--

CREATE TABLE `parcel_info_tbl` (
  `Parcel_id` int(25) NOT NULL,
  `origin_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  `sender_no` varchar(15) NOT NULL,
  `recipient_name` varchar(100) NOT NULL,
  `recipient_no` varchar(15) NOT NULL,
  `length` varchar(555) NOT NULL,
  `width` varchar(555) NOT NULL,
  `height` varchar(555) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parcel_info_tbl`
--

INSERT INTO `parcel_info_tbl` (`Parcel_id`, `origin_id`, `destination_id`, `sender_name`, `sender_no`, `recipient_name`, `recipient_no`, `length`, `width`, `height`, `description`) VALUES
(100043, 1, 4, 'eric nyanduse', '0735363733', 'joy njuguna', '0748499393', '20', '13', '33', 'blue package'),
(100044, 3, 2, 'titus njonjo', '0738392922', 'jazlyn kui wagathegi', '0739303022', '12', '12', '43', 'gunia');

-- --------------------------------------------------------

--
-- Table structure for table `payments_tbl`
--

CREATE TABLE `payments_tbl` (
  `id` int(20) NOT NULL,
  `sender_name` varchar(30) NOT NULL,
  `transaction_code` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `amount` int(20) NOT NULL,
  `package_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shipments_tbl`
--

CREATE TABLE `shipments_tbl` (
  `id` int(20) NOT NULL,
  `sender_name` varchar(30) NOT NULL,
  `sender_mobile` int(30) NOT NULL,
  `sender_address` varchar(30) NOT NULL,
  `recipient_name` varchar(30) NOT NULL,
  `recipient_mobile` varchar(30) NOT NULL,
  `recipient_address` varchar(30) NOT NULL,
  `package_no` varchar(30) NOT NULL,
  `weight` float NOT NULL,
  `length` int(20) NOT NULL,
  `wide` int(15) NOT NULL,
  `payment` varchar(10) NOT NULL,
  `destination` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `departure_datetime` datetime NOT NULL,
  `pickup_datetime` datetime NOT NULL,
  `description` text NOT NULL,
  `urgency` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shipments_tbl`
--

INSERT INTO `shipments_tbl` (`id`, `sender_name`, `sender_mobile`, `sender_address`, `recipient_name`, `recipient_mobile`, `recipient_address`, `package_no`, `weight`, `length`, `wide`, `payment`, `destination`, `status`, `departure_datetime`, `pickup_datetime`, `description`, `urgency`) VALUES
(1, 'John Okumu', 73892892, 'homabay 001', 'John Njuguna', '078282922', 'ngong, Nbi', '12345', 10, 29, 12, 'Paid', 'Nairobi', 'In Transit', '2018-07-01 00:00:00', '2018-07-12 07:00:00', 'blue package', 'standard'),
(8, 'martin waweru', 722175717, 'kilimani', 'mary wahito', '03722828', 'kanjuri', '292AHA', 0.8, 30, 20, 'NOT PAID', 'mombasa', 'on Hold', '2018-07-09 08:03:00', '2018-07-09 08:03:00', 'shoes', 'express'),
(9, 'anthony mwangi', 728292922, 'kiziwi', 'Empress shifira', '0714665448', 'kanjiuri', '9120KH', 0.8, 2, 24, 'NOT PAID', 'Nairobi', 'Completed', '2018-07-09 08:03:00', '2018-07-28 17:00:00', 'Infinix phone', 'express'),
(10, 'Mercy Chep', 721898912, 'Kilgoris', 'George Awiti', '03722828', 'kanjuri', '7281HHJ', 0.8, 33, 22, 'NOT PAID', 'Nairobi', 'delivered', '2018-07-09 08:03:00', '2018-07-09 08:03:00', 'viazi\r\n', 'priority'),
(11, 'imma kanono', 714273305, 'bombolulu', 'winfred waithira', '0714273305', 'makongeni, thika', 'BTAC052J', 0.8, 30, 33, 'PAID', 'Nairobi', 'Delayed', '2018-07-30 20:00:00', '2018-07-31 14:00:00', 'GAS CYLINDER', 'standard'),
(12, 'matilda mukami', 722175717, 'jomvu, Mombasa', 'George Kimani', '0738912912', 'kanjuiri, Karatina', 'BSSC044J', 5, 20, 10, 'PAID', 'Kisumu', 'Completed', '2018-07-31 17:00:00', '2018-08-01 13:00:00', 'CRATE OF SODA', 'express'),
(13, 'jacob omondi', 721891292, 'bamburi, mombasa', 'jacklyn chemutai', '0728219821', 'kasarani, mombsa', 'BTAC008J', 3, 30, 22, 'NOT PAID', 'Nairobi', 'in_transit', '2018-08-01 13:00:00', '2018-08-01 13:00:00', 'CLOTHES', 'standard'),
(14, 'fred', 714273305, 'kilimani', 'George Awiti', '0714273305', 'kinangop', 'BSSC032J', 0.8, 10, 10, 'PAID', 'Nairobi', 'delivered', '2018-08-01 18:00:00', '2018-08-02 10:00:00', 'biro pen', 'standard');

-- --------------------------------------------------------

--
-- Table structure for table `staff_tbl`
--

CREATE TABLE `staff_tbl` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(200) NOT NULL,
  `staff_branch` varchar(200) NOT NULL,
  `staff_email` varchar(30) NOT NULL,
  `staff_no` varchar(15) NOT NULL,
  `role` varchar(30) NOT NULL,
  `date_joined` datetime NOT NULL,
  `staff_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff_tbl`
--

INSERT INTO `staff_tbl` (`staff_id`, `staff_name`, `staff_branch`, `staff_email`, `staff_no`, `role`, `date_joined`, `staff_address`) VALUES
(1, 'Fredrick Kamau', 'mombasa', 'fredrickamau18@gmail.com', '2053826329', 'support', '2018-07-30 13:00:00', '240 21st Ave, Apt 34'),
(2, 'Grace okita', 'mombasa', 'graceokita@gmail.com', '0782121982', 'cleaner', '2018-07-28 18:00:00', '47547 Mombasa');

-- --------------------------------------------------------

--
-- Table structure for table `track_history_tbl`
--

CREATE TABLE `track_history_tbl` (
  `track_id` int(11) NOT NULL,
  `consignment_no` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `new_status` varchar(50) NOT NULL,
  `from_location` varchar(44) NOT NULL,
  `new_location` varchar(44) NOT NULL,
  `receiver_name` varchar(44) NOT NULL,
  `received_Datetime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `track_history_tbl`
--

INSERT INTO `track_history_tbl` (`track_id`, `consignment_no`, `weight`, `new_status`, `from_location`, `new_location`, `receiver_name`, `received_Datetime`) VALUES
(40001, '89ad34', '22', 'in-transit', '1', '3', 'dennis mburu', '2018-05-09 04:10:00.000000'),
(40002, '89e78', '33', 'delivered', '1', '4', 'justus kariuki', '2018-05-31 03:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`, `mobile`, `level`) VALUES
(2, 'michereti', 'qwerty', 'Active', '0707074534', 'customer'),
(3, 'fred', 'qwerty', 'Active', '0756423126', 'admin'),
(4, 'awiti', 'qwerty', 'Active', '075656644', ''),
(9, 'njeri', 'qwerty', 'Active', '0783839393', 'customer'),
(10, 'james', 'qwerty', 'Active', '04983489', 'customer'),
(11, 'conductor', 'qwerty', 'Active', '072919831', 'customer'),
(12, 'chemtai', 'qwerty', 'Active', '073426272', 'customer'),
(13, 'kanono', 'qwerty', 'Active', '0714635448', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `bookings_tbl`
--
ALTER TABLE `bookings_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_tbl`
--
ALTER TABLE `branch_tbl`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `emergency_tbl`
--
ALTER TABLE `emergency_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel_info_tbl`
--
ALTER TABLE `parcel_info_tbl`
  ADD PRIMARY KEY (`Parcel_id`);

--
-- Indexes for table `payments_tbl`
--
ALTER TABLE `payments_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipments_tbl`
--
ALTER TABLE `shipments_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_tbl`
--
ALTER TABLE `staff_tbl`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `track_history_tbl`
--
ALTER TABLE `track_history_tbl`
  ADD PRIMARY KEY (`track_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings_tbl`
--
ALTER TABLE `bookings_tbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `branch_tbl`
--
ALTER TABLE `branch_tbl`
  MODIFY `branch_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20008;
--
-- AUTO_INCREMENT for table `emergency_tbl`
--
ALTER TABLE `emergency_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `parcel_info_tbl`
--
ALTER TABLE `parcel_info_tbl`
  MODIFY `Parcel_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100045;
--
-- AUTO_INCREMENT for table `payments_tbl`
--
ALTER TABLE `payments_tbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shipments_tbl`
--
ALTER TABLE `shipments_tbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `staff_tbl`
--
ALTER TABLE `staff_tbl`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `track_history_tbl`
--
ALTER TABLE `track_history_tbl`
  MODIFY `track_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40003;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
