-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 08:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlnv`
--
CREATE DATABASE IF NOT EXISTS `qlnv` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `qlnv`;

-- --------------------------------------------------------

--
-- Table structure for table `loainv`
--

CREATE TABLE `loainv` (
  `MALOAINV` int(11) NOT NULL,
  `TENLOAINV` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loainv`
--

INSERT INTO `loainv` (`MALOAINV`, `TENLOAINV`) VALUES
(1, 'Hành Chính'),
(2, 'Bảo Vệ'),
(3, 'Kĩ Thuật'),
(4, 'Chăm sóc khách hàng'),
(5, 'Trưởng phòng'),
(6, 'Marketting');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MANV` int(11) NOT NULL,
  `HOTEN` varchar(30) NOT NULL,
  `NGAYSINH` date NOT NULL,
  `GIOITINH` bit(1) NOT NULL DEFAULT b'0',
  `DIACHI` varchar(100) NOT NULL,
  `ANH` varchar(100) NOT NULL,
  `MALOAINV` int(11) NOT NULL,
  `MAPHONG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MANV`, `HOTEN`, `NGAYSINH`, `GIOITINH`, `DIACHI`, `ANH`, `MALOAINV`, `MAPHONG`) VALUES
(2, 'Nhật Trường 2', '2000-09-06', b'1', 'Thống Nhất, Kinh Dinh, Phan Rang-Tháp Chàm, Ninh Thuận, Việt Nam A', '2.png', 2, 4),
(3, 'Quốc Thịnh', '2021-07-07', b'1', 'Sơn Hoà, Phú Yên, Việt Nam', '2.png', 2, 4),
(5, 'Văn Duy', '2000-01-01', b'0', 'QGMJ+VJ3, Lạc Lâm, Đơn Dương, Lâm Đồng, Việt Nam', '3.png', 3, 3),
(6, 'Hồ Hiểu Lực', '2000-12-02', b'1', 'Địa chỉ tạm thời', '4.png', 2, 3),
(49, 'Hồ Hiểu Lực', '2000-05-20', b'1', 'A,B,C', '5.jpeg', 2, 3),
(50, 'Ngô Nam', '0000-00-00', b'1', 'A,B,C', '6.jpg', 2, 1),
(52, 'Maria', '2000-05-20', b'1', '〒170-0013 東京都豊島区東池袋３丁目１１−11', '6.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

CREATE TABLE `phongban` (
  `MAPHONG` int(11) NOT NULL,
  `TENPHONG` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`MAPHONG`, `TENPHONG`) VALUES
(1, 'Phòng kế hoạch tài chính'),
(2, 'Tổ bảo vệ'),
(3, 'Phòng kĩ thuật'),
(4, 'Phòng công vụ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`) VALUES
(1, 'minhthienmap', 'Lâm Minh Thi?n', 'minhliem');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loainv`
--
ALTER TABLE `loainv`
  ADD PRIMARY KEY (`MALOAINV`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MANV`),
  ADD KEY `fk_MALOAINV` (`MALOAINV`),
  ADD KEY `fk_MAPHONG` (`MAPHONG`);

--
-- Indexes for table `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`MAPHONG`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loainv`
--
ALTER TABLE `loainv`
  MODIFY `MALOAINV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MANV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `phongban`
--
ALTER TABLE `phongban`
  MODIFY `MAPHONG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `fk_MALOAINV` FOREIGN KEY (`MALOAINV`) REFERENCES `loainv` (`MALOAINV`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_MAPHONG` FOREIGN KEY (`MAPHONG`) REFERENCES `phongban` (`MAPHONG`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
