-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 19, 2023 lúc 03:31 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlynhatro`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `ID_BAIVIET` int(11) NOT NULL,
  `ID_KHUTRO` int(11) NOT NULL,
  `TIEUDE` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `GIOITHIEUBAIVIET` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chukhutro`
--

CREATE TABLE `chukhutro` (
  `ID_CKT` int(11) NOT NULL,
  `HOTEN` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `GIOITINH` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `TENDANGNHAP` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `MATKHAU` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYLAP` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chukhutro`
--

INSERT INTO `chukhutro` (`ID_CKT`, `HOTEN`, `GIOITINH`, `SDT`, `TENDANGNHAP`, `MATKHAU`, `NGAYLAP`) VALUES
(1, 'Nguyễn Văn Bảnh', 'Nam', '0939797913', 'nguyenvan_banh', 'e10adc3949ba59abbe56e057f20f883e', '2023-03-10 20:03:08'),
(2, 'Huỳnh Minh Nam', 'Nam', '0987456123', 'huynhminh_nam', 'e10adc3949ba59abbe56e057f20f883e', '2023-03-10 20:09:43'),
(3, 'Nguyễn Hoàng Khanh', 'Nam', '0985147369', 'nguyenhoang_khanh', 'e10adc3949ba59abbe56e057f20f883e', '2023-03-10 20:10:51'),
(4, 'Huỳnh Mỹ Liên', 'Nữ', '0349174985', 'huynhmy_lien', 'e10adc3949ba59abbe56e057f20f883e', '2023-03-10 20:11:41'),
(5, 'Nguyễn Hoàng Vũ', 'Nam', '0987369258', 'nguyenhoang_vu', 'e10adc3949ba59abbe56e057f20f883e', '2023-03-10 20:13:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coloaiphong`
--

CREATE TABLE `coloaiphong` (
  `ID_KHUTRO` int(11) NOT NULL,
  `ID_LP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giathuephong`
--

CREATE TABLE `giathuephong` (
  `ID_KHUTRO` int(11) NOT NULL,
  `ID_LP` int(11) NOT NULL,
  `GIA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh`
--

CREATE TABLE `hinh` (
  `ID_HINH` int(11) NOT NULL,
  `STT` int(11) NOT NULL,
  `HINH` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `huyen`
--

CREATE TABLE `huyen` (
  `ID_HUYEN` int(11) NOT NULL,
  `ID_TINH` int(11) NOT NULL,
  `TENHUYEN` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `huyen`
--

INSERT INTO `huyen` (`ID_HUYEN`, `ID_TINH`, `TENHUYEN`) VALUES
(1, 1, 'Ninh Kiều'),
(2, 1, 'Cái Răng'),
(3, 1, 'Bình Thủy'),
(4, 1, 'Ô Môn'),
(5, 1, 'Thốt Nốt'),
(6, 1, 'Cờ Đỏ'),
(7, 1, 'Phong Điền'),
(8, 1, 'Thới Lai'),
(9, 1, 'Vĩnh Thạnh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoangcach`
--

CREATE TABLE `khoangcach` (
  `ID_KHUTRO` int(11) NOT NULL,
  `T_MA` int(11) NOT NULL,
  `KHOANGCACH` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoangcach`
--

INSERT INTO `khoangcach` (`ID_KHUTRO`, `T_MA`, `KHOANGCACH`) VALUES
(1, 1, 1.38),
(1, 2, 1.48),
(1, 3, 3.45),
(1, 4, 3),
(1, 5, 3.9),
(1, 6, 2.09895),
(1, 7, 5.10859),
(1, 8, 1.78913),
(1, 9, 0.739884),
(1, 10, 2.48813),
(1, 11, 5.33102),
(2, 1, 1.23),
(2, 2, 1.64),
(2, 3, 3.43),
(2, 4, 2.68),
(2, 5, 3.68),
(2, 6, 2.62923),
(2, 7, 4.76266),
(2, 8, 1.18484),
(2, 9, 0.664615),
(2, 10, 1.91481),
(2, 11, 4.86485),
(3, 1, 0.8),
(3, 2, 1.33),
(3, 3, 2.93),
(3, 4, 2.28),
(3, 5, 3.26),
(3, 6, 2.54363),
(3, 7, 4.3726),
(3, 8, 1.08862),
(3, 9, 1.08133),
(3, 10, 1.71102),
(3, 11, 5.10255),
(4, 1, 0.31),
(4, 2, 0.66),
(4, 3, 2.35),
(4, 4, 2),
(4, 5, 2.78),
(4, 6, 2.11922),
(4, 7, 4.06424),
(4, 8, 1.58879),
(4, 9, 1.6642),
(4, 10, 1.99572),
(4, 11, 5.77382),
(5, 1, 0.81),
(5, 2, 0.13),
(5, 3, 2.25),
(5, 4, 2.26),
(5, 5, 2.81),
(5, 6, 1.57461),
(5, 7, 4.23826),
(5, 8, 2.2225),
(5, 9, 2.0591),
(5, 10, 2.59176),
(5, 11, 6.37671);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khutro`
--

CREATE TABLE `khutro` (
  `ID_KHUTRO` int(11) NOT NULL,
  `ID_XA` int(11) NOT NULL,
  `ID_CKT` int(11) NOT NULL,
  `TENKHUTRO` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `SONHA` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LAT_TRO` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LONG_TRO` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khutro`
--

INSERT INTO `khutro` (`ID_KHUTRO`, `ID_XA`, `ID_CKT`, `TENKHUTRO`, `SONHA`, `LAT_TRO`, `LONG_TRO`) VALUES
(1, 1, 1, 'Nhà Trọ Bảy Bảnh', '278/32/18 - đường Tầm Vu', '10.01775', '105.77059'),
(2, 1, 2, 'Nhà Trọ Nắng Xanh', '2QC8+36W Nhà trọ Nắng Xanh', '10.02026', '105.76559'),
(3, 4, 3, 'Nhà Trọ Sinh Viên Số 55', '55 Ba Tháng Hai', '10.02388', '105.76668'),
(4, 4, 4, 'Nhà Trọ Sinh Viên Huỳnh Liên', '124/8/10 Ba Tháng Hai', '10.02762', '105.77179'),
(5, 1, 5, 'Nhà Trọ Sinh Viên Vũ', '225/10, Đường 30-4', '10.02792', '105.77757');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiphong`
--

CREATE TABLE `loaiphong` (
  `ID_LP` int(11) NOT NULL,
  `TENLOAIPHONG` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `SONGUOIOTOIDA` int(11) NOT NULL,
  `DIENTICH` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaiphong`
--

INSERT INTO `loaiphong` (`ID_LP`, `TENLOAIPHONG`, `SONGUOIOTOIDA`, `DIENTICH`) VALUES
(1, 'Phòng không có gác', 1, 12),
(2, 'Phòng không có gác', 2, 14),
(3, 'Phòng có gác', 3, 15),
(4, 'Phòng có gác', 4, 16),
(5, 'Phòng có gác', 2, 12),
(6, 'Phòng có gác', 3, 14),
(7, 'Phòng máy lạnh có gác', 4, 16),
(8, 'Phòng không có gác', 2, 12),
(9, 'Phòng có nội thất', 4, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `locations`
--

INSERT INTO `locations` (`id`, `latitude`, `longitude`, `created_at`) VALUES
(11, 10.0224, 105.77, '2023-03-18 19:30:10'),
(12, 10.0429, 105.776, '2023-03-19 13:27:21'),
(13, 10.0429, 105.776, '2023-03-19 13:27:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `STT` int(11) NOT NULL,
  `TENPHONG` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ID_TT` int(11) DEFAULT NULL,
  `ID_KHUTRO` int(11) DEFAULT NULL,
  `ID_LP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinh`
--

CREATE TABLE `tinh` (
  `ID_TINH` int(11) NOT NULL,
  `TENTINH` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tinh`
--

INSERT INTO `tinh` (`ID_TINH`, `TENTINH`) VALUES
(1, 'Cần Thơ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `ID_TT` int(11) NOT NULL,
  `TENTT` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`ID_TT`, `TENTT`) VALUES
(1, 'Đã có người ở'),
(2, 'Đã có người đặt'),
(3, 'Đang trống');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truong`
--

CREATE TABLE `truong` (
  `T_MA` int(11) NOT NULL,
  `ID_XA` int(11) NOT NULL,
  `T_TENTRUONG` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `T_ICON` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LAT_TRUONG` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LONG_TRUONG` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `truong`
--

INSERT INTO `truong` (`T_MA`, `ID_XA`, `T_TENTRUONG`, `T_ICON`, `LAT_TRUONG`, `LONG_TRUONG`) VALUES
(1, 4, 'Đại học Cần Thơ', 'Logo_Dai_hoc_Can_Tho.svg', '10.029942937096429', '105.77060926275031'),
(2, 2, 'Đại Học Greenwich (Việt Nam) - Cơ sở Cần Thơ', 'Logo Trường Đại học Greenwich Việt Nam.svg', '10.029116555621965', '105.77760138238341'),
(3, 8, 'Cao đẳng Anh Quốc BTEC FPT', 'Logo Trường cao đẳng Quốc tế BTEC FPT.svg', '10.048112799710019', '105.77710175539532'),
(4, 3, 'Trường Cao đẳng Y tế Cần Thơ', 'logo-truong-cao-dang-y-te-can-tho-inkythuatso.svg', '10.044342016371923', '105.7653862553953'),
(5, 3, 'Trường Cao đẳng Kinh tế - Kỹ thuật Cần Thơ', 'CDKT_KTCT.png', '10.052652426428926', '105.77227277073644'),
(6, 13, 'Trường CĐ Nghề Việt Mỹ, Phân hiệu CT', 'logo_VietMy.png', '10.020163586353139', '105.7896012929583'),
(7, 19, 'Trường CĐ Nghề Cần Thơ', 'CDN_CT.png', '10.062974085287465', '105.76237006441764'),
(8, 10, 'Trường Cao đẳng FPT Polytechnic Cần Thơ', 'logo_FPTPolytechnic.png', '10.027096086939006', '105.75728974005409'),
(9, 1, 'Trường Cao đẳng Cần Thơ', 'logo_CDCT.png', '10.014335004223907', '105.76479085965416'),
(10, 10, 'Đại Học Y Dược Cần Thơ', 'Logo ĐH Y Dược Cần Thơ - CTUMP.svg', '10.033682322990293', '105.75463464005409'),
(11, 9, 'Trường Đại học Nam Cần Thơ', 'Logo ĐH Nam Cần Thơ - NCTU.png', '10.008231763410771', '105.72287451306573');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xa`
--

CREATE TABLE `xa` (
  `ID_XA` int(11) NOT NULL,
  `ID_HUYEN` int(11) NOT NULL,
  `TENXA` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `xa`
--

INSERT INTO `xa` (`ID_XA`, `ID_HUYEN`, `TENXA`) VALUES
(1, 1, 'Hưng Lợi'),
(2, 1, 'An Phú'),
(3, 1, 'An Hòa'),
(4, 1, 'Xuân Khánh'),
(5, 1, 'An Cư'),
(6, 1, 'An Nghiệp'),
(7, 1, 'Cái Khế'),
(8, 1, 'Thới Bình'),
(9, 1, 'An Bình'),
(10, 1, 'An Khánh'),
(11, 1, 'Tân An'),
(12, 2, 'Ba Láng'),
(13, 2, 'Hưng Phú'),
(14, 2, 'Hưng Thạnh'),
(15, 2, 'Lê Bình'),
(16, 2, 'Phú Thứ'),
(17, 2, 'Tân Phú'),
(18, 2, 'Thường Thạnh'),
(19, 3, 'An Thới'),
(20, 3, 'Trà Nóc'),
(21, 3, 'Long Tuyền'),
(22, 3, 'Thới An Đông'),
(23, 3, 'Trà An'),
(24, 3, 'Bùi Hữu Nghĩa'),
(25, 3, 'Long Hòa'),
(26, 4, 'Châu Văn Liêm'),
(27, 4, 'Long Hưng'),
(28, 4, 'Phước Thới'),
(29, 4, 'Thới An'),
(30, 4, 'Thới Hòa'),
(31, 4, 'Thới Long'),
(32, 4, 'Trường Lạc'),
(33, 5, 'Thới Thuận'),
(34, 5, 'Thuận An'),
(35, 5, 'Tân Lộc'),
(36, 5, 'Trung Nhứt'),
(37, 5, 'Thạch Hòa'),
(38, 5, 'Trung Kiên'),
(39, 5, 'Tân Hưng'),
(40, 5, 'Thuận Hưng'),
(41, 6, 'Trung An'),
(42, 6, 'Trung Thạnh'),
(43, 6, 'Thạnh Phú'),
(44, 6, 'Trung Hưng'),
(45, 6, 'Thới Hưng'),
(46, 6, 'Đông Hiệp'),
(47, 6, 'Đông Thắng'),
(48, 6, 'Thới Đông'),
(49, 6, 'Thới Xuân'),
(50, 7, 'Nhơn Ái'),
(51, 7, 'Giai Xuân'),
(52, 7, 'Tân Thới'),
(53, 7, 'Trường Long'),
(54, 7, 'Trường Long'),
(55, 7, 'Mỹ Khánh'),
(56, 7, 'Nhơn Nghĩa'),
(57, 8, 'Thới Thạnh'),
(58, 8, 'Tân Thạnh'),
(59, 8, 'Xuân Thắng'),
(60, 8, 'Đông Bình'),
(61, 8, 'Đông Thuận'),
(62, 8, 'Thới Tân'),
(63, 8, 'Trường Thắng'),
(64, 8, 'Định Môn'),
(65, 8, 'Trường Thành'),
(66, 8, 'Trường Xuân'),
(67, 8, 'Trường Xuân A'),
(68, 8, 'Trường Xuân B'),
(69, 9, 'Vĩnh Sơn'),
(70, 9, 'Vĩnh Kim'),
(71, 9, 'Vĩnh Hiệp'),
(72, 9, 'Vĩnh Hảo'),
(73, 9, 'Vĩnh Hòa'),
(74, 9, 'Vĩnh Thịnh'),
(75, 9, 'Vĩnh Thuận'),
(76, 9, 'Vĩnh Quang');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`ID_BAIVIET`),
  ADD KEY `KHUTRO` (`ID_KHUTRO`);

--
-- Chỉ mục cho bảng `chukhutro`
--
ALTER TABLE `chukhutro`
  ADD PRIMARY KEY (`ID_CKT`),
  ADD UNIQUE KEY `TENDANGNHAP` (`TENDANGNHAP`),
  ADD UNIQUE KEY `SDT` (`SDT`);

--
-- Chỉ mục cho bảng `coloaiphong`
--
ALTER TABLE `coloaiphong`
  ADD PRIMARY KEY (`ID_KHUTRO`,`ID_LP`),
  ADD KEY `ID_KHUTRO` (`ID_KHUTRO`,`ID_LP`);

--
-- Chỉ mục cho bảng `giathuephong`
--
ALTER TABLE `giathuephong`
  ADD PRIMARY KEY (`ID_KHUTRO`,`ID_LP`),
  ADD KEY `ID_KHUTRO` (`ID_KHUTRO`,`ID_LP`);

--
-- Chỉ mục cho bảng `hinh`
--
ALTER TABLE `hinh`
  ADD PRIMARY KEY (`ID_HINH`),
  ADD KEY `STT_PHONG` (`STT`);

--
-- Chỉ mục cho bảng `huyen`
--
ALTER TABLE `huyen`
  ADD PRIMARY KEY (`ID_HUYEN`),
  ADD KEY `TINH` (`ID_TINH`);

--
-- Chỉ mục cho bảng `khoangcach`
--
ALTER TABLE `khoangcach`
  ADD PRIMARY KEY (`ID_KHUTRO`,`T_MA`),
  ADD KEY `khoangcach_truong` (`T_MA`);

--
-- Chỉ mục cho bảng `khutro`
--
ALTER TABLE `khutro`
  ADD PRIMARY KEY (`ID_KHUTRO`),
  ADD KEY `khutro_xa` (`ID_XA`),
  ADD KEY `khutro_chukhutro` (`ID_CKT`);

--
-- Chỉ mục cho bảng `loaiphong`
--
ALTER TABLE `loaiphong`
  ADD PRIMARY KEY (`ID_LP`);

--
-- Chỉ mục cho bảng `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`STT`),
  ADD KEY `tt_phong` (`ID_TT`),
  ADD KEY `id_khutro` (`ID_KHUTRO`),
  ADD KEY `id_lp` (`ID_LP`);

--
-- Chỉ mục cho bảng `tinh`
--
ALTER TABLE `tinh`
  ADD PRIMARY KEY (`ID_TINH`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`ID_TT`);

--
-- Chỉ mục cho bảng `truong`
--
ALTER TABLE `truong`
  ADD PRIMARY KEY (`T_MA`),
  ADD KEY `ID_XA` (`ID_XA`);

--
-- Chỉ mục cho bảng `xa`
--
ALTER TABLE `xa`
  ADD PRIMARY KEY (`ID_XA`),
  ADD KEY `HUYEN` (`ID_HUYEN`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `ID_BAIVIET` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chukhutro`
--
ALTER TABLE `chukhutro`
  MODIFY `ID_CKT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `hinh`
--
ALTER TABLE `hinh`
  MODIFY `ID_HINH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `huyen`
--
ALTER TABLE `huyen`
  MODIFY `ID_HUYEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `khutro`
--
ALTER TABLE `khutro`
  MODIFY `ID_KHUTRO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loaiphong`
--
ALTER TABLE `loaiphong`
  MODIFY `ID_LP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tinh`
--
ALTER TABLE `tinh`
  MODIFY `ID_TINH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `ID_TT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `truong`
--
ALTER TABLE `truong`
  MODIFY `T_MA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `xa`
--
ALTER TABLE `xa`
  MODIFY `ID_XA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `KHUTRO` FOREIGN KEY (`ID_KHUTRO`) REFERENCES `khutro` (`ID_KHUTRO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hinh`
--
ALTER TABLE `hinh`
  ADD CONSTRAINT `STT_PHONG` FOREIGN KEY (`STT`) REFERENCES `phong` (`STT`);

--
-- Các ràng buộc cho bảng `khoangcach`
--
ALTER TABLE `khoangcach`
  ADD CONSTRAINT `khoangcach_khutro` FOREIGN KEY (`ID_KHUTRO`) REFERENCES `khutro` (`ID_KHUTRO`),
  ADD CONSTRAINT `khoangcach_truong` FOREIGN KEY (`T_MA`) REFERENCES `truong` (`T_MA`);

--
-- Các ràng buộc cho bảng `khutro`
--
ALTER TABLE `khutro`
  ADD CONSTRAINT `khutro_chukhutro` FOREIGN KEY (`ID_CKT`) REFERENCES `chukhutro` (`ID_CKT`),
  ADD CONSTRAINT `khutro_xa` FOREIGN KEY (`ID_XA`) REFERENCES `xa` (`ID_XA`);

--
-- Các ràng buộc cho bảng `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `id_khutro` FOREIGN KEY (`ID_KHUTRO`) REFERENCES `khutro` (`ID_KHUTRO`),
  ADD CONSTRAINT `id_lp` FOREIGN KEY (`ID_LP`) REFERENCES `loaiphong` (`ID_LP`),
  ADD CONSTRAINT `tt_phong` FOREIGN KEY (`ID_TT`) REFERENCES `trangthai` (`ID_TT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
