-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 11, 2023 lúc 08:44 AM
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
  `TENHINH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, 1, 'Bình Thủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoangcach`
--

CREATE TABLE `khoangcach` (
  `ID_KHUTRO` int(11) NOT NULL,
  `T_MA` int(11) NOT NULL,
  `KHOANGCACH` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khutro`
--

CREATE TABLE `khutro` (
  `ID_KHUTRO` int(11) NOT NULL,
  `ID_XA` int(11) NOT NULL,
  `ID_CKT` int(11) NOT NULL,
  `TENKHUTRO` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `SONHA` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `LAT_TRO` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LONG_TRO` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `STT` int(11) NOT NULL,
  `ID_TT` int(11) NOT NULL,
  `ID_KHUTRO` int(11) NOT NULL,
  `ID_LP` int(11) NOT NULL
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
(8, 1, 'Thới Bình');

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
  ADD PRIMARY KEY (`ID_CKT`);

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
  ADD KEY `STT` (`STT`);

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
  ADD KEY `ID_KHUTRO` (`ID_KHUTRO`,`T_MA`);

--
-- Chỉ mục cho bảng `khutro`
--
ALTER TABLE `khutro`
  ADD PRIMARY KEY (`ID_KHUTRO`),
  ADD KEY `CKT` (`ID_CKT`),
  ADD KEY `XA` (`ID_XA`);

--
-- Chỉ mục cho bảng `loaiphong`
--
ALTER TABLE `loaiphong`
  ADD PRIMARY KEY (`ID_LP`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`STT`),
  ADD KEY `TRANGTHAI` (`ID_TT`),
  ADD KEY `KHUTRO` (`ID_KHUTRO`),
  ADD KEY `LOAIPHONG` (`ID_LP`);

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
  ADD KEY `XA` (`ID_XA`);

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
  MODIFY `ID_HUYEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `khutro`
--
ALTER TABLE `khutro`
  MODIFY `ID_KHUTRO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaiphong`
--
ALTER TABLE `loaiphong`
  MODIFY `ID_LP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `T_MA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `xa`
--
ALTER TABLE `xa`
  MODIFY `ID_XA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  ADD CONSTRAINT `STT` FOREIGN KEY (`STT`) REFERENCES `phong` (`STT`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
