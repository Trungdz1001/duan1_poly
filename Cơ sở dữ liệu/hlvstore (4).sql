-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 17, 2021 lúc 10:11 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hlvstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `ma_bl` int(11) NOT NULL COMMENT 'mã bình luận',
  `noi_dung` varchar(255) NOT NULL COMMENT 'nội dung',
  `ma_hh` int(11) NOT NULL COMMENT 'mã hàng hóa',
  `ma_kh` varchar(20) NOT NULL COMMENT 'mã khách hàng',
  `ma_hd` int(11) NOT NULL,
  `ngay_bl` date NOT NULL COMMENT 'ngày bình luận',
  `trang_thai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`ma_bl`, `noi_dung`, `ma_hh`, `ma_kh`, `ma_hd`, `ngay_bl`, `trang_thai`) VALUES
(22, 'sản phẩm hợp với túi tiền và chất lượng rất tốt đanhs giá 5 sao Sản Phẩm Hợp Với Túi Tiền Và Chất Lượng Rất Tốt Đanhs Giá 5 Sao Sản Phẩm Hợp Với Túi Tiền Và Chất Lượng Rất Tốt Đanhs Giá 5 Sao Sản Phẩm Hợp Với Túi Tiền Và Chất Lượng Rất Tốt Đanhs Giá 5 Sao', 2, 'kh123', 0, '2021-12-16', 0),
(27, 'sản phẩm hợp với túi tiền và chất lượng rất tốt đanhs giá 5 sao', 2, 'hydeptrai', 0, '2021-12-17', 0),
(29, 'balo quá đẹp', 5, 'hydeptrai', 0, '2021-12-17', 0),
(30, 'tháo khùng123wdgạhgdságfdvjhágdhjágdhjádhag', 5, 'hydeptrai', 0, '2021-12-17', 0),
(31, 'áo thun khá đẹp chất liệu hoàn hảo', 2, 'hydeptrai', 0, '2021-12-17', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_km`
--

CREATE TABLE `chi_tiet_km` (
  `id_km` varchar(10) NOT NULL,
  `ma_km` varchar(10) NOT NULL,
  `ma_hh` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm_sp` varchar(50) NOT NULL COMMENT 'id danh mục sản phẩm',
  `tieu_de` varchar(100) NOT NULL COMMENT 'tiêu đề',
  `noi_dung` varchar(255) NOT NULL COMMENT 'nội dung',
  `img_id` varchar(50) NOT NULL COMMENT 'hình'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm_sp`, `tieu_de`, `noi_dung`, `img_id`) VALUES
('Grimm DC001', 'Grimm DC', 'hàng Grimm DC', '1'),
('HL001', 'HIGHCLUB BRAND', 'Áo thun của HIGHCLUB', '1'),
('Sly001', 'SLY CLOTHING', 'Áo thun của SLY', '1'),
('SWE ', 'SWE BRAND', 'Sản phẩm thuộc thương hiệu SWE', '6'),
('TS1', 'TSUN BRAND', 'Áo thun của TSUN', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `ma_hh` int(11) NOT NULL COMMENT 'mã hàng hóa',
  `ten_hh` varchar(50) NOT NULL COMMENT 'tên hàng hóa',
  `don_gia` float NOT NULL COMMENT 'đơn giá',
  `img_id` varchar(50) NOT NULL COMMENT 'hình',
  `ngay_nhap` date NOT NULL COMMENT 'ngày nhập',
  `mo_ta` varchar(200) NOT NULL COMMENT 'mô tả',
  `dac_biet` int(50) NOT NULL COMMENT 'đặc biệt',
  `so_luot_xem` int(11) NOT NULL COMMENT 'số lượt xem',
  `so_luong_nhap` varchar(250) NOT NULL COMMENT 'số lượng nhập',
  `id_dm_sp` varchar(50) NOT NULL COMMENT 'id danh mục sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`ma_hh`, `ten_hh`, `don_gia`, `img_id`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `so_luong_nhap`, `id_dm_sp`) VALUES
(0, 'Áo thun Grimm DC', 350000, '4', '2021-12-12', '', 113, 0, '100', 'TS1'),
(1, 'Áo thun SLY ', 280000, '4', '2021-11-11', '', 113, 0, '10', 'HL001'),
(2, 'Áo thun TSUN', 350000, '6', '2021-12-12', '312321313123', 113, 2, '100', 'TS1'),
(3, 'Áo Thun HighClub', 350000, '4', '2021-11-11', '', 113, 0, '100', 'TS1'),
(4, 'Áo thun SWE', 400000, '6', '2021-12-12', '1111111111', 1112, 1, '100', 'SWE '),
(5, 'Balo SLy V2', 1000000, '4', '2021-12-17', 'hy', 113, 100, '100', 'Sly001');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `ma_hd` int(11) NOT NULL COMMENT 'mã hóa đơn',
  `ma_kh` varchar(50) NOT NULL COMMENT 'mã khách hàng',
  `ho_ten` varchar(50) NOT NULL,
  `tong_tien` int(10) NOT NULL COMMENT 'tổng tiền',
  `dia_chi_giao_hang` varchar(100) NOT NULL COMMENT 'địa chỉ giao hàng',
  `sdt` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ngay_dat` date NOT NULL COMMENT 'ngày đặt',
  `trang_thai` varchar(30) NOT NULL COMMENT 'trạng thái'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`ma_hd`, `ma_kh`, `ho_ten`, `tong_tien`, `dia_chi_giao_hang`, `sdt`, `email`, `ngay_dat`, `trang_thai`) VALUES
(34557, 'hydeptrai', 'Hoa Anh Thư', 420000, 'Ấp Kinh Ngay 1, Thị trấn Hưng Lợi, Huyện Thạnh Trị, Tỉnh Sóc Trăng', 368503413, 'phamquochytest@gmail.com', '2021-12-17', 'Đang Giao Hàng'),
(46502, 'kh123', 'Phạm Quốc Hy', 370000, '123', 123123123, 'vana@gmail.com', '2021-12-16', 'đang xử lý'),
(53853, 'hydeptrai', 'Hoa Anh Thư', 1020000, 'Ấp Kinh Ngay 1, Thị trấn Hưng Lợi, Huyện Thạnh Trị, Tỉnh Sóc Trăng', 368503413, 'phamquochytest@gmail.com', '2021-12-17', 'đang xử lý'),
(63825, 'kh123', 'Nguyễn Văn A', 720000, '123', 123123123, 'vana@gmail.com', '2021-12-16', 'đang xử lý'),
(65798, 'hydeptrai', 'Hoa Anh Thư', 370000, 'Ấp Kinh Ngay 1, Thị trấn Hưng Lợi, Huyện Thạnh Trị, Tỉnh Sóc Trăng', 368503413, 'phamquochytest@gmail.com', '2021-12-16', 'đang xử lý'),
(66678, 'kh123', 'Phạm Quốc Hy', 370000, '123', 123123123, 'vana@gmail.com', '2021-12-16', 'đang xử lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonchitiet`
--

CREATE TABLE `hoadonchitiet` (
  `id` int(11) NOT NULL COMMENT 'id',
  `ma_hd` int(11) NOT NULL COMMENT 'mã hóa đơn',
  `ma_hh` int(11) NOT NULL COMMENT 'mã sản phẩm',
  `ten_hh` varchar(50) NOT NULL COMMENT 'tên sản phẩm',
  `so_luong` varchar(10) NOT NULL,
  `ma_km` varchar(20) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `gia_sau_km` varchar(10) NOT NULL COMMENT 'đơn giá'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadonchitiet`
--

INSERT INTO `hoadonchitiet` (`id`, `ma_hd`, `ma_hh`, `ten_hh`, `so_luong`, `ma_km`, `don_gia`, `gia_sau_km`) VALUES
(38, 62170, 116, 'Áo abc', '1', '', 50000, '50000'),
(63, 65798, 0, 'Áo thun Grimm DC', '1', '', 350000, '350000'),
(64, 46502, 2, 'Áo thun TSUN', '1', '', 350000, '350000'),
(65, 63825, 3, 'Áo Thun HighClub', '1', '', 350000, '350000'),
(66, 63825, 0, 'Áo thun Grimm DC', '1', '', 350000, '350000'),
(67, 34557, 4, 'Áo thun SWE', '1', '', 400000, '400000'),
(68, 53853, 5, 'Balo SLy V2', '1', '', 1000000, '1000000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `imgs`
--

CREATE TABLE `imgs` (
  `img_id` varchar(50) NOT NULL COMMENT 'id ảnh',
  `link_img` varchar(255) NOT NULL COMMENT 'link ảnh',
  `id_new` varchar(50) NOT NULL COMMENT 'id mới',
  `ma_hh` int(50) NOT NULL COMMENT 'id sản phẩm',
  `username` varchar(100) NOT NULL COMMENT 'username'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `imgs`
--

INSERT INTO `imgs` (`img_id`, `link_img`, `id_new`, `ma_hh`, `username`) VALUES
('1', 'sp7.jpg', '2', 2, 'Tsun'),
('2', 'sp3.jpeg', '2', 0, 'GrimmDC'),
('3', 'sp5.jpg', '3', 3, 'highclub'),
('4', 'sp8.jpg', '4', 1, 'Sly'),
('5', 'sp10.jpg', '05', 5, 'blsly'),
('6', 'sp9.jpg', '06', 4, 'sweak');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `ma_kh` varchar(20) NOT NULL COMMENT 'mã khách hàng',
  `mat_khau` varchar(50) NOT NULL COMMENT 'mật khẩu',
  `ho_ten` varchar(50) NOT NULL COMMENT 'họ tên',
  `dia_chi` varchar(100) NOT NULL COMMENT 'địa chỉ',
  `so_dt` varchar(20) NOT NULL COMMENT 'số điện thoại',
  `kich_hoat` bit(50) NOT NULL COMMENT 'kích hoạt',
  `img_id` varchar(50) NOT NULL COMMENT 'hình',
  `email` varchar(50) NOT NULL COMMENT 'email',
  `vai_tro` bit(50) NOT NULL COMMENT 'vai trò'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`ma_kh`, `mat_khau`, `ho_ten`, `dia_chi`, `so_dt`, `kich_hoat`, `img_id`, `email`, `vai_tro`) VALUES
('123', '123456', 'Phạm Quốc Hy', 'Ấp Kinh Ngay 1, Thị trấn Hưng Lợi, Huyện Thạnh Trị, Tỉnh Sóc Trăng', '0344199434', b'00000000000000000000000000000000000000000000110001', 'hinh', 'hypqpc01406@fpt.edu.vn', b'00000000000000000000000000000000000000000000110001'),
('hydeptrai', 'hy123456', 'Hoa Anh Thư', 'Ấp Kinh Ngay 1, Thị trấn Hưng Lợi, Huyện Thạnh Trị, Tỉnh Sóc Trăng', '0368503413', b'00000000000000000000000000000000000000000000110001', 'hinh', 'phamquochytest@gmail.com', b'00000000000000000000000000000000000000000000000000'),
('kh123', '123123', 'Nguyễn Văn A', '123', '0123123123', b'00000000000011000100110010001101010011100100110011', 'hy', 'vana@gmail.com', b'00000000000000000000000000000000000000000000000001'),
('phamquochy123', '123123', 'Phạm Quốc Hy', 'Ấp Kinh Ngay 1, Thị trấn Hưng Lợi, Huyện Thạnh Trị, Tỉnh Sóc Trăng', '08192313123', b'00000000000000000000000000000000000000000000110001', 'hinh', 'hypqpc01406@fpt.edu.vn', b'00000000000000000000000000000000000000000000110001'),
('phamquochy610', '123123', 'Phạm Quốc Hy', '12321321', '1222222', b'00000000000000000000000000000000000000000000110001', 'hinh', 'hypqpc01406@fpt.edu.vn', b'00000000000000000000000000000000000000000000110001'),
('vu', '123', 'ngovanvu', 'Cần Thơ', '1234', b'00000000000000000000000000000000000000000000000000', 'vu', '0123456654', b'00000000000000000000000000000000000000000000000000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `ma_km` varchar(20) NOT NULL,
  `hinh_thuc` varchar(100) NOT NULL,
  `ngay_ap_dung` date NOT NULL,
  `ngay_ket_thuc` date NOT NULL,
  `id_km` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`ma_km`, `hinh_thuc`, `ngay_ap_dung`, `ngay_ket_thuc`, `id_km`) VALUES
('123', '123', '2021-11-14', '2021-11-28', 123123),
('km123', 'moi', '2021-11-19', '2021-11-28', 12321);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`ma_bl`);

--
-- Chỉ mục cho bảng `chi_tiet_km`
--
ALTER TABLE `chi_tiet_km`
  ADD PRIMARY KEY (`id_km`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm_sp`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`ma_hh`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`ma_hd`);

--
-- Chỉ mục cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `imgs`
--
ALTER TABLE `imgs`
  ADD PRIMARY KEY (`img_id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`ma_km`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã bình luận', AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
