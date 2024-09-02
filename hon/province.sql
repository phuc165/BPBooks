-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2024 at 02:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2ndclothes`
--

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `pID` int(2) NOT NULL,
  `pName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`pID`, `pName`) VALUES
(1, 'Hà Nội'),
(2, 'Hà Giang'),
(4, 'Cao Bằng'),
(6, 'Bắc Kạn'),
(8, 'Tuyên Quang'),
(10, 'Lào Cai'),
(11, 'Điện Biên'),
(12, 'Lai Châu'),
(14, 'Sơn La'),
(15, 'Yên Bái'),
(17, 'Hoà Bình'),
(19, 'Thái Nguyên'),
(20, 'Lạng Sơn'),
(22, 'Quảng Ninh'),
(24, 'Bắc Giang'),
(25, 'Phú Thọ'),
(26, 'Vĩnh Phúc'),
(27, 'Bắc Ninh'),
(30, 'Hải Dương'),
(31, 'Hải Phòng'),
(33, 'Hưng Yên'),
(34, 'Thái Bình'),
(35, 'Hà Nam'),
(36, 'Nam Định'),
(37, 'Ninh Bình'),
(38, 'Thanh Hóa'),
(40, 'Nghệ An'),
(42, 'Hà Tĩnh'),
(44, 'Quảng Bình'),
(45, 'Quảng Trị'),
(46, 'Thừa Thiên Huế'),
(48, 'Đà Nẵng'),
(49, 'Quảng Nam'),
(51, 'Quảng Ngãi'),
(52, 'Bình Định'),
(54, 'Phú Yên'),
(56, 'Khánh Hòa'),
(58, 'Ninh Thuận'),
(60, 'Bình Thuận'),
(62, 'Kon Tum'),
(64, 'Gia Lai'),
(66, 'Đắk Lắk'),
(67, 'Đắk Nông'),
(68, 'Lâm Đồng'),
(70, 'Bình Phước'),
(72, 'Tây Ninh'),
(74, 'Bình Dương'),
(75, 'Đồng Nai'),
(77, 'Bà Rịa - Vũng Tàu'),
(79, 'Hồ Chí Minh'),
(80, 'Long An'),
(82, 'Tiền Giang'),
(83, 'Bến Tre'),
(84, 'Trà Vinh'),
(86, 'Vĩnh Long'),
(87, 'Đồng Tháp'),
(89, 'An Giang'),
(91, 'Kiên Giang'),
(92, 'Cần Thơ'),
(93, 'Hậu Giang'),
(94, 'Sóc Trăng'),
(95, 'Bạc Liêu'),
(96, 'Cà Mau');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`pID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
