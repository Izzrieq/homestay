-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 09:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestaydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `homestay`
--

CREATE TABLE `homestay` (
  `norumah` varchar(3) NOT NULL,
  `namarumah` varchar(20) NOT NULL,
  `harga` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homestay`
--

INSERT INTO `homestay` (`norumah`, `namarumah`, `harga`) VALUES
('A01', 'paduka', '400.00'),
('A69', 'ROS', '70.00'),
('B13', 'KEKWA', '500.00');

-- --------------------------------------------------------

--
-- Table structure for table `klien`
--

CREATE TABLE `klien` (
  `nokp` varchar(12) NOT NULL,
  `namaklien` varchar(20) NOT NULL,
  `notel` varchar(12) NOT NULL,
  `alamat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klien`
--

INSERT INTO `klien` (`nokp`, `namaklien`, `notel`, `alamat`) VALUES
('070802027234', 'acd', '01787789', 'kelantan'),
('12345678', 'alibi', '23456789', 'kelantan');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(12) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sewaan`
--

CREATE TABLE `sewaan` (
  `idsewaan` int(11) NOT NULL,
  `tmasuk` date NOT NULL,
  `tkeluar` date NOT NULL,
  `norumah` varchar(3) NOT NULL,
  `nokp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sewaan`
--

INSERT INTO `sewaan` (`idsewaan`, `tmasuk`, `tkeluar`, `norumah`, `nokp`) VALUES
(19, '2020-09-03', '2020-09-06', 'A69', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homestay`
--
ALTER TABLE `homestay`
  ADD PRIMARY KEY (`norumah`);

--
-- Indexes for table `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`nokp`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `sewaan`
--
ALTER TABLE `sewaan`
  ADD PRIMARY KEY (`idsewaan`),
  ADD KEY `norumah` (`norumah`),
  ADD KEY `nokp` (`nokp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sewaan`
--
ALTER TABLE `sewaan`
  MODIFY `idsewaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sewaan`
--
ALTER TABLE `sewaan`
  ADD CONSTRAINT `sewaan_ibfk_1` FOREIGN KEY (`norumah`) REFERENCES `homestay` (`norumah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sewaan_ibfk_2` FOREIGN KEY (`nokp`) REFERENCES `klien` (`nokp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
