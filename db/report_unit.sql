-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2025 at 07:11 AM
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
-- Database: `myapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `report_unit`
--

CREATE TABLE `report_unit` (
  `no_pol` varchar(50) NOT NULL,
  `no_aset` varchar(50) NOT NULL,
  `msisdn` varchar(100) NOT NULL,
  `lat` varchar(227) NOT NULL,
  `lon` varchar(227) NOT NULL,
  `address` text NOT NULL,
  `gps_time` datetime NOT NULL,
  `received_time` datetime NOT NULL,
  `geofence_location` varchar(227) NOT NULL,
  `speed` int(9) NOT NULL,
  `direction` int(9) NOT NULL,
  `acc` varchar(9) NOT NULL,
  `odometer` varchar(227) NOT NULL,
  `status_vehicle` varchar(227) NOT NULL,
  `report_status` varchar(100) NOT NULL,
  `alarm_status` varchar(100) NOT NULL,
  `temperature1` varchar(9) NOT NULL,
  `temperature2` varchar(9) NOT NULL,
  `mainpowervoltage` varchar(9) NOT NULL,
  `backupbatteryvoltage` varchar(227) NOT NULL,
  `sos` varchar(9) NOT NULL,
  `gsm_signal` int(9) NOT NULL,
  `rfid_driver` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `start_moving` datetime NOT NULL,
  `start_parking` datetime NOT NULL,
  `start_idle` datetime NOT NULL,
  `company_nm` varchar(100) NOT NULL,
  `can_elements` varchar(50) NOT NULL,
  `do_header` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report_unit`
--

INSERT INTO `report_unit` (`no_pol`, `no_aset`, `msisdn`, `lat`, `lon`, `address`, `gps_time`, `received_time`, `geofence_location`, `speed`, `direction`, `acc`, `odometer`, `status_vehicle`, `report_status`, `alarm_status`, `temperature1`, `temperature2`, `mainpowervoltage`, `backupbatteryvoltage`, `sos`, `gsm_signal`, `rfid_driver`, `driver`, `start_moving`, `start_parking`, `start_idle`, `company_nm`, `can_elements`, `do_header`) VALUES
('B 9504 FEU', '', '354017118998182', '-8.0660896', '114.4182663', '1;AH2, 03, Paras Putih, Bangsring, Banyuwangi, Jawa Timur, 68453', '2025-02-07 03:40:56', '2025-02-07 03:36:42', '', 0, 248, '0', '308083.4375', 'Parkir 11 jam, 31 menit', '', '', '-5.5', '-6.400000', '25.73', '3.94', '0', 5, '', '', '0000-00-00 00:00:00', '2025-02-06 16:17:53', '0000-00-00 00:00:00', 'MEGA INDO LOGISTIK', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
