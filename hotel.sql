-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 05:01 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_room`
--

CREATE TABLE `order_room` (
  `no` int(2) NOT NULL,
  `customer_name` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `room_quantity` int(2) NOT NULL,
  `canceled` tinyint(1) NOT NULL,
  `checkin_at` date NOT NULL,
  `checkout_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_room`
--

INSERT INTO `order_room` (`no`, `customer_name`, `address`, `phone`, `room_type`, `room_quantity`, `canceled`, `checkin_at`, `checkout_at`) VALUES
(1, 'Frans Gideon', 'jl. pattimura', '08917346829', 'Standar Room', 4, 0, '2019-12-30', '2020-01-31'),
(2, 'Maria Manullang', 'jl. glugur', '0813997656', 'Suite Room', 1, 0, '2019-12-31', '0000-00-00'),
(3, 'Bara Sinaga', 'Jl. medan pertempuran', '0813997656', 'Deluxe Room', 1, 0, '2019-12-31', '0000-00-00'),
(4, 'Bimo Sigalinging', 'Medan', '081269419509', 'Deluxe Room', 2, 0, '2020-01-23', '0000-00-00'),
(5, 'Chatrin', 'Jl. Medan Pertempuran', '089567678893', 'Senior Suite Room', 1, 0, '2020-01-23', '0000-00-00'),
(7, 'Inggrit Purba', 'Perdagangan', '081256342166', 'Superior Room', 1, 0, '2020-01-16', '0000-00-00'),
(8, 'Yessi Pangaribuan', 'del', '08132265889', 'Suite Room', 1, 0, '2020-01-23', '0000-00-00'),
(9, 'Breeze', 'Jakarta', '0895601355846', 'Suite Room', 2, 0, '2020-01-23', '2020-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_code` varchar(10) NOT NULL,
  `type` varchar(25) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(12) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_code`, `type`, `description`, `price`) VALUES
('CLEXRM', 'Club and Executive Room', 'Tipe kamar spesial, berada di lantai paling atas dan perlu akses ketika ingin memasukinya. Menawarkan view yang sangat indah dari posisi kamar Club and Executive Room. Fasilitas yang disediakan tempat tidur, televisi, kamar mandi, kulkas, brankas, dapur dan ruang tamu dengan luas 500 m2', '1.500.000'),
('DLXRM', 'Deluxe Room', 'Tipe kamar ini berada satu level diatas superior room dan standar room. Fasilitas yang disediakan yaitu tempat tidur, televisi,kulkas, brankas, mesin pembuat teh dan kopi serta kamar mandi dengan luas 40 m2.', '1.000.000'),
('SRSURM', 'Senior Suite Room', 'Sebuah ruangan besar yang dimana ruang tidur dan ruang duduk (seating area) terpisah. Senior Suite room memiliki fasilitas yang lebih lengkap diantara tipe superior dan deluxe room. Fasilitas yang disediakan yaitu tempat tidur, furniture dengan tampilan yang terbaik, televisi, kulkas, brankas, mesin pembuat teh dan kopi serta kamar mandi dengan luas 350 m2.', '1.300.000'),
('STDSP', 'Superior Room', 'Tipe kamar standar dengan harga yang paling ekonomis. Fasilitas yang disediakan yaitu tempat tidur, televisi, mesin pembuat teh dan kopi serta kamar mandi dengan luas 30 m2.', '500.000'),
('SUIRM', 'Suite Room', 'Suite room memiliki fasilitas yang lebih lengkap diantara tipe superior dan deluxe room. Fasilitas yang disediakan yaitu tempat tidur, furniture dengan tampilan yang terbaik, televisi, kulkas, brankas, mesin pembuat teh dan kopi serta kamar mandi dengan luas 300 m2.', '1.200.000');

-- --------------------------------------------------------

--
-- Table structure for table `room_availability`
--

CREATE TABLE `room_availability` (
  `room_id` varchar(10) NOT NULL,
  `room_type` varchar(25) NOT NULL,
  `Jumlah_Kamar` int(3) NOT NULL,
  `Book_Kamar` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_availability`
--

INSERT INTO `room_availability` (`room_id`, `room_type`, `Jumlah_Kamar`, `Book_Kamar`) VALUES
('CLEXRM', 'Club and Executive Room', 10, 3),
('DLXRM', 'Deluxe Room', 10, 2),
('SRSURM', 'Senior Suite Room', 10, 1),
('STDSP', 'Superior Room', 10, 3),
('SUIRM', 'Suite Room', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_code` varchar(10) NOT NULL,
  `customer_name` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `Jumlah_kamar` int(3) NOT NULL,
  `room_code` varchar(12) NOT NULL,
  `cost` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_code`, `customer_name`, `date`, `Jumlah_kamar`, `room_code`, `cost`) VALUES
('A001', '', '2019-12-30', 4, '', 'Rp 2.400.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_room`
--
ALTER TABLE `order_room`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_code`);

--
-- Indexes for table `room_availability`
--
ALTER TABLE `room_availability`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `room_code` (`room_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_room`
--
ALTER TABLE `order_room`
  MODIFY `no` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `room_availability`
--
ALTER TABLE `room_availability`
  ADD CONSTRAINT `room_code` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
