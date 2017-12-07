-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2017 at 03:01 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3169149_dbsach`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` varchar(30) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `tensach` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `tacgia` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `nxb` varchar(30) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `gia` float NOT NULL,
  `theloai` varchar(30) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `hinhanh` varchar(200) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tacgia` (`tacgia`),
  KEY `nxb` (`nxb`) USING BTREE,
  KEY `theloai` (`theloai`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `tensach`, `tacgia`, `nxb`, `gia`, `theloai`, `hinhanh`) VALUES
('S1', 'Trên đường băng', 'TG2', 'NXB2', 56000, 'TL1', 'trenduongbang.jpg'),
('S2', 'Tuổi trẻ đáng giá bao nhiêu', 'TG1', 'NXB2', 56000, 'TL1', 'tuoitredanggiabaonhieu.jpg'),
('S3', 'Từ điển Anh - Việt', 'TG0', 'NXB3', 150000, 'TL2', 'tudienanhviet.jpg'),
('S4', 'Luyện Siêu Trí Nhớ Từ Vựng', 'TG4', 'NXB3', 131000, 'TL3', 'nn1.gif'),
('S5', 'Sách Vật lý 12', 'TG0', 'NXB4', 49000, 'TL4', 'vatly12.jpg'),
('S6', 'Hóa học 12', 'TG0', 'NXB4', 46000, 'TL4', 'hoa12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id_cart` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `id_book` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  PRIMARY KEY (`id_cart`),
  UNIQUE KEY `id_book` (`id_book`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `id_hoadon` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `idKhach` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id_hoadon`),
  UNIQUE KEY `idKhach` (`idKhach`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nxb`
--

DROP TABLE IF EXISTS `nxb`;
CREATE TABLE IF NOT EXISTS `nxb` (
  `id_nxb` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `tenNXB` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `sdt` varchar(15) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id_nxb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `nxb`
--

INSERT INTO `nxb` (`id_nxb`, `tenNXB`, `diachi`, `sdt`) VALUES
('NXB1', 'Nhà xuất bản trẻ', 'a', ''),
('NXB2', 'Nhà Xuất Bản Hội Nhà Văn', 'b', ''),
('NXB3', 'Nhà Xuất Bản Đại Học Quốc Gia Hà Nội', 'c', ''),
('NXB4', 'Nhà Xuất Bản Giáo Dục Việt Nam', 'd', '');

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

DROP TABLE IF EXISTS `tacgia`;
CREATE TABLE IF NOT EXISTS `tacgia` (
  `id_tacgia` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `tenTG` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `sdt` varchar(15) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id_tacgia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`id_tacgia`, `tenTG`, `sdt`) VALUES
('TG0', 'Nhiều tác giả', ''),
('TG1', 'Rosie Nguyễn', '01234567899'),
('TG2', 'Tony Buổi Sáng', '11111111111'),
('TG3', 'Nguyễn Nhật Ánh', '2222222222'),
('TG4', 'Nguyễn Anh Đức', '');

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

DROP TABLE IF EXISTS `thanhvien`;
CREATE TABLE IF NOT EXISTS `thanhvien` (
  `username` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `vaitro` int(11) NOT NULL,
  `hoTen` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`username`, `password`, `vaitro`, `hoTen`) VALUES
('admin', '123', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

DROP TABLE IF EXISTS `theloai`;
CREATE TABLE IF NOT EXISTS `theloai` (
  `id_theloai` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `tentheloai` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id_theloai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`id_theloai`, `tentheloai`) VALUES
('TL1', 'Sách kỹ năng'),
('TL2', 'Từ điển'),
('TL3', 'Sách  ngoại ngữ'),
('TL4', 'Sách giáo khoa');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `fk_nxb` FOREIGN KEY (`nxb`) REFERENCES `nxb` (`id_nxb`),
  ADD CONSTRAINT `fk_tacgia` FOREIGN KEY (`tacgia`) REFERENCES `tacgia` (`id_tacgia`),
  ADD CONSTRAINT `fk_theloai` FOREIGN KEY (`theloai`) REFERENCES `theloai` (`id_theloai`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_books` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `fk_hd` FOREIGN KEY (`id_cart`) REFERENCES `hoadon` (`id_hoadon`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_khach` FOREIGN KEY (`idKhach`) REFERENCES `thanhvien` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
