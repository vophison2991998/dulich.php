-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2017 lúc 05:22 AM
-- Phiên bản máy phục vụ: 10.1.25-MariaDB
-- Phiên bản PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dulich`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `ContactID` int(255) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `Time` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`ContactID`, `Name`, `Email`, `Phone`, `Address`, `Title`, `Content`, `Time`) VALUES
(1, 'Phan Anh Vui', 'vuiphanit@gmail.com', '0905692314', '435 au cơ', 'Admin đẹp trai', '23123123123123', '07:19:40 22-11-2017');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitour`
--

CREATE TABLE `loaitour` (
  `LoaiTourID` int(255) NOT NULL,
  `LoaiTourName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitour`
--

INSERT INTO `loaitour` (`LoaiTourID`, `LoaiTourName`) VALUES
(1, 'Tiêu Chuẩn'),
(2, 'Tiết Kiệm'),
(3, 'Giá Sốc'),
(4, 'Đặc biệt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mien`
--

CREATE TABLE `mien` (
  `IDMien` int(255) NOT NULL,
  `TenMien` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mien`
--

INSERT INTO `mien` (`IDMien`, `TenMien`) VALUES
(1, 'Miền Bắc'),
(2, 'Miền Trung'),
(3, 'Miền Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhthanh`
--

CREATE TABLE `tinhthanh` (
  `IDTinhThanh` int(255) NOT NULL,
  `TenTinhThanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhthanh`
--

INSERT INTO `tinhthanh` (`IDTinhThanh`, `TenTinhThanh`) VALUES
(1, 'Thành Phố Hà Nội'),
(2, 'Tỉnh Hà Giang'),
(4, 'Tỉnh Cao Bằng'),
(6, 'Tỉnh Bắc Kạn'),
(8, 'Tỉnh Tuyên Quang'),
(10, 'Tỉnh Lào Cai'),
(11, 'Tỉnh Điện Biên'),
(12, 'Tỉnh Lai Châu'),
(14, 'Tỉnh Sơn La'),
(15, 'Tỉnh Yên Bái'),
(17, 'Tỉnh Hoà Bình'),
(19, 'Tỉnh Thái Nguyên'),
(20, 'Tỉnh Lạng Sơn'),
(22, 'Tỉnh Quảng Ninh'),
(24, 'Tỉnh Bắc Giang'),
(25, 'Tỉnh Phú Thọ'),
(26, 'Tỉnh Vĩnh Phúc'),
(27, 'Tỉnh Bắc Ninh'),
(30, 'Tỉnh Hải Dương'),
(31, 'Thành phố Hải Phòng'),
(33, 'Tỉnh Hưng Yên'),
(34, 'Tỉnh Thái Bình'),
(35, 'Tỉnh Hà Nam'),
(36, 'Tỉnh Nam Định'),
(37, 'Tỉnh Ninh Bình'),
(38, 'Tỉnh Thanh Hóa'),
(40, 'Tỉnh Nghệ An'),
(42, 'Tỉnh Hà Tĩnh'),
(44, 'Tỉnh Quảng Bình'),
(45, 'Tỉnh Quảng Trị'),
(46, 'Tỉnh Thừa Thiên Huế'),
(48, 'Thành phố Đà Nẵng'),
(49, 'Tỉnh Quảng Nam'),
(51, 'Tỉnh Quảng Ngãi'),
(52, 'Tỉnh Bình Định'),
(54, 'Tỉnh Phú Yên'),
(56, 'Tỉnh Khánh Hòa'),
(58, 'Tỉnh Ninh Thuận'),
(62, 'Tỉnh Kon Tum'),
(64, 'Tỉnh Gia Lai'),
(66, 'Tỉnh Đắk Lắk'),
(67, 'Tỉnh Đắk Nông'),
(68, 'Tỉnh Lâm Đồng'),
(70, 'Tỉnh Bình Phước'),
(72, 'Tỉnh Tây Ninh'),
(74, 'Tỉnh Bình Dương'),
(75, 'Tỉnh Đồng Nai'),
(77, 'Tỉnh Bà Rịa - Vũng Tàu'),
(79, 'Thành phố Hồ Chí Minh'),
(80, 'Tỉnh Long An'),
(82, 'Tỉnh Tiền Giang'),
(83, 'Tỉnh Bến Tre'),
(84, 'Tỉnh Trà Vinh'),
(86, 'Tỉnh Vĩnh Long'),
(87, 'Tỉnh Đồng Tháp'),
(89, 'Tỉnh An Giang'),
(91, 'Tỉnh Kiên Giang'),
(92, 'Thành phố Cần Thơ'),
(93, 'Tỉnh Hậu Giang'),
(94, 'Tỉnh Sóc Trăng'),
(95, 'Tỉnh Bạc Liêu'),
(96, 'Tỉnh Cà Mau');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `MaTour` int(255) NOT NULL,
  `TenTour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TGTour` int(20) NOT NULL,
  `GiaTour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDungTour` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `AnhTour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgayKhoiHanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IDTinhThanh` int(255) NOT NULL,
  `NgayThem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiTourID` int(255) NOT NULL,
  `IDMien` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`MaTour`, `TenTour`, `TGTour`, `GiaTour`, `NoiDungTour`, `AnhTour`, `NgayKhoiHanh`, `IDTinhThanh`, `NgayThem`, `LoaiTourID`, `IDMien`) VALUES
(2, 'Đà Nẵng - Huế', 6, '15000000', '<p style=\"text-align: justify;\">Qu&yacute; kh&aacute;ch tập trung tại Vietravel (190 Pasteur, Quận 3), khởi h&agrave;nh đi Đ&agrave; Lạt. Tr&ecirc;n đường đi tham quan:<br />- Th&aacute;c Đam B&rsquo;ri: một trong những th&aacute;c nước đẹp v&agrave; cao nhất tại cao nguy&ecirc;n Bảo Lộc. Ăn trưa tại Khu du lịch.&nbsp;<br />- Nh&agrave; thờ Domain De Marie: theo d&ograve;ng Nữ tu B&aacute;c &Aacute;i, với kiến tr&uacute;c l&agrave; sự kết hợp h&agrave;i h&ograve;a giữa phương Đ&ocirc;ng v&agrave; phương T&acirc;y c&ugrave;ng vườn hoa được chăm ch&uacute;t kỹ đ&atilde; tạo n&ecirc;n sức h&uacute;t cho ng&ocirc;i nh&agrave; thờ.<br />Buổi tối, Qu&yacute; kh&aacute;ch tự do thưởng thức c&agrave; ph&ecirc; trong kh&ocirc;ng kh&iacute; se lạnh của Đ&agrave; Lạt, ngắm cảnh Hồ Xu&acirc;n Hương về đ&ecirc;m.&nbsp;<br />Nghỉ đ&ecirc;m tại Đ&agrave; Lạt.<br /><br />Xem nội dung đầy đủ tại:&nbsp;<a href=\"https://travel.com.vn/tourNDSGN541-047-281117XE-H/da-lat-giao-luu-van-hoa-cong-chieng-tay-nguyen-mua-hoa-da-quy-khach-san-2sao-tour-gia-soc.aspx#chuongtrinhtour\">https://travel.com.vn/tourNDSGN541-047-281117XE-H/da-lat-giao-luu-van-hoa-cong-chieng-tay-nguyen-mua-hoa-da-quy-khach-san-2sao-tour-gia-soc.aspx#chuongtrinhtour</a><br />Nguồn: travel.com.vn</p>', '16.jpg', '2017-02-09', 96, '23-11-2017', 4, 3),
(3, 'Đà Nẵng - Huế 2', 5, '1000000', '789789789', 'wallpaper_004.png', '2017-11-08', 48, '2017-11-08', 2, 3),
(4, 'Quang Nam', 3, '150', 'wwqeqwe', 'wallpaper_004.png', '2017-11-11', 48, '2017-11-11', 1, 3),
(5, 'dasd', 4, '5666', '2312313', 'wallpaper_004.png', '', 48, '', 2, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `UserId` int(255) NOT NULL,
  `UserName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`UserId`, `UserName`, `Password`, `Name`) VALUES
(1, 'admin', '123', 'Quản Trị Viên');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ContactID`);

--
-- Chỉ mục cho bảng `loaitour`
--
ALTER TABLE `loaitour`
  ADD PRIMARY KEY (`LoaiTourID`);

--
-- Chỉ mục cho bảng `mien`
--
ALTER TABLE `mien`
  ADD PRIMARY KEY (`IDMien`);

--
-- Chỉ mục cho bảng `tinhthanh`
--
ALTER TABLE `tinhthanh`
  ADD PRIMARY KEY (`IDTinhThanh`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`MaTour`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `ContactID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `loaitour`
--
ALTER TABLE `loaitour`
  MODIFY `LoaiTourID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `mien`
--
ALTER TABLE `mien`
  MODIFY `IDMien` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `MaTour` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
