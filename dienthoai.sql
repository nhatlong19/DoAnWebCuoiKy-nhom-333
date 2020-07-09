-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 09, 2020 lúc 12:28 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopdienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dienthoai`
--

CREATE TABLE `dienthoai` (
  `id` int(2) NOT NULL,
  `TenMay` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `GiaTien` int(10) NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dienthoai`
--

INSERT INTO `dienthoai` (`id`, `TenMay`, `GiaTien`, `HinhAnh`) VALUES
(1, 'Iphone 11 64GB', 17900000, 'iphone11-purple-select-2019.png\r\n'),
(2, 'Iphone 11 128GB', 20500000, 'iphone11-purple-select-2019.png\r\n'),
(3, 'Iphone 11 256GB', 23590000, 'iphone11-purple-select-2019.png'),
(4, 'Iphone 11 Pro 64GB', 25990000, 'iphone-11-pro-midnight-green-select-2019.png'),
(5, 'Iphone 11 Pro 256GB', 30000000, 'iphone-11-pro-midnight-green-select-2019.png'),
(6, 'Iphone 11 Pro 512GB', 31000000, 'iphone-11-pro-midnight-green-select-2019.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
