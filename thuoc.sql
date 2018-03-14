create database Thuoc
-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 10:39 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `thuoc`
--

CREATE TABLE `thuoc` (
  `MaThuoc` varchar(50) CHARACTER SET utf8 NOT NULL,
  `TenBenh` varchar(30) CHARACTER SET utf8 NOT NULL,
  `TenThuoc` varchar(50) CHARACTER SET utf32 DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `CongDung` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `NgayXS` date DEFAULT NULL,
  `HanDung(TinhtungaySX)` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thuoc`
--

INSERT INTO `thuoc` (`MaThuoc`, `TenBenh`, `TenThuoc`, `SoLuong`, `CongDung`, `NgayXS`, `HanDung(TinhtungaySX)`) VALUES
('01', 'Viêm Gan', 'Cây Atiso', 100, 'Chữa viêm gan', '2018-03-14', '2018-08-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thuoc`
--
ALTER TABLE `thuoc`
  ADD PRIMARY KEY (`MaThuoc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
