-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 09, 2022 lúc 07:16 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `idbl` int(11) NOT NULL,
  `noidung` varchar(500) NOT NULL,
  `idtk` int(11) NOT NULL,
  `idxe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`idbl`, `noidung`, `idtk`, `idxe`) VALUES
(4, 'đẹp quá', 6, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(8, 'honda'),
(10, 'kia'),
(11, 'subaru'),
(12, 'mazda'),
(13, 'hyundai'),
(14, 'merceder'),
(15, 'ford');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `datlichxem`
--

CREATE TABLE `datlichxem` (
  `iddl` int(11) NOT NULL,
  `ngaydatlich` date NOT NULL,
  `idtk` int(11) NOT NULL,
  `idxe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen`
--

CREATE TABLE `quyen` (
  `idquyen` int(11) NOT NULL,
  `tenquyen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quyen`
--

INSERT INTO `quyen` (`idquyen`, `tenquyen`) VALUES
(1, 'admin'),
(2, 'khachhang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `idtk` int(11) NOT NULL,
  `gmail` varchar(225) NOT NULL,
  `taikhoan` varchar(225) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `idquyen` int(11) NOT NULL,
  `sdt` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`idtk`, `gmail`, `taikhoan`, `matkhau`, `hoten`, `idquyen`, `sdt`) VALUES
(1, 'manh@gmail.com', 'admin', '12345678', 'đức mạnh', 1, '0394775832'),
(6, 'admin', 'hai', '12345678', 'văn hải', 2, '333'),
(7, 'admin', 's', '12345678', 's', 2, 'f'),
(8, 'admin', 'ss', '12345678', 's', 2, 'f'),
(9, 'admin', 'dsds', '12345678', 'sds', 2, '4'),
(10, 'admin', 's5', '12345678', 'd', 2, '3'),
(13, 'admin', 'd', '12345678', 's', 2, '7'),
(14, 'admin', 'sbb', '12345678', 'văn hải', 2, '4'),
(15, 'admin', 'gf', '12345678', 'văn hải', 2, '3'),
(16, 'tan', 'tanlo', '12345678', 'tấn lô ds', 2, '5'),
(17, 'adm@in', 'admin2', '12345678', 'admin', 1, '4'),
(20, 'admin@fgfhfg', 'manh', '12345678', 'manh', 2, '3333333333');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `tieude` varchar(500) NOT NULL,
  `img` varchar(255) NOT NULL,
  `noidung` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `img`, `noidung`) VALUES
(29, 'Cập nhật giá niêm yết và lăn bánh xe Toyota Veloz Cross đầy đủ các phiên bản.', 'toyota.jpg', 'Ngày 22/3/2022, Toyota Veloz Cross chính thức ra mắt khách hàng Việt với thiết kế hiện đại, nội thất rộng rãi và nhiều trang bị tiện nghi. Mẫu xe này sẽ bước vào cuộc đua thị phần MPV, cạnh tranh với Mitsubishi Xpander, Toyota Innova, Suzuki XL7, Suzuki Ertiga,...'),
(30, 'Toyota Fortuner 2022 thêm trang bị, giá tăng cao nhất 42 triệu đồng tại Việt Nam', 'Fortuner3jpg-1631953185.jpg', 'Ngày 1/11, Toyota Việt Nam công bố thông tin phiên bản Fortuner 2.7AT 4x2 và Fortuner 2.7AT 4x4 được nâng cấp một số tính năng an toàn, bao gồm: camera 360 độ, cảnh báo điểm mù và cảnh báo phương tiện cắt ngang phía sau. Đây là hai phiên bản máy xăng, nhập khẩu Indonesia.\r\nNgoài những nâng cấp kể trên, Toyota Fortuner 2.7AT 4x2 và Fortuner 2.7AT 4x4 giữ nguyên so với phiên bản cũ. Một số trang bị nổi bật trên 2 phiên bản này có thể kể đến màn hình giải trí 8 inch, kết nối điện thoại thông minh, bản đồ tích hợp định vị, cốp mở điện và ổ cắm điện 220V ở hàng ghế sau.'),
(31, 'Kia Seltos 2023 chuẩn bị \"xuất ngoại\" với trang bị an toàn ngập tràn', 'kia-seltos-2023-1-ed65.jpg', 'Kia Seltos phiên bản nâng cấp giữa vòng đời đã lần đầu tiên ra mắt thị trường nội địa Hàn Quốc vào hồi tháng 7 năm nay. Sau 4 tháng, mẫu SUV hạng B này chuẩn bị ra mắt các thị trường ngoài Hàn Quốc. Một trong những thị trường quốc tế đầu tiên đón nhận Kia Seltos 2023 chính là Úc.\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

CREATE TABLE `xe` (
  `idxe` int(11) NOT NULL,
  `tenxe` varchar(225) NOT NULL,
  `img` varchar(225) NOT NULL,
  `thongtinxe` varchar(500) NOT NULL,
  `gia` double NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `xe`
--

INSERT INTO `xe` (`idxe`, `tenxe`, `img`, `thongtinxe`, `gia`, `iddm`) VALUES
(7, 'xe honda brio', 'brio1_honda.jpg', 'xe mới 99%', 500000000, 8),
(8, 'xe honda city 2020', 'city-honda.jpg', 'xe mới 99%', 700000000, 8),
(9, 'xe honda civic 2020', 'honda_civic.jpg', 'mới 99%', 800000000, 8),
(10, 'xe honda crv 2021', 'honda_crv.jpg', 'mới 99%', 900000000, 8),
(11, 'xe kia cerato', 'kiacerato.jpg', 'xe mới', 800000000, 10),
(12, 'xe kia Morning', 'morning-2021.jpg', 'mới 99%', 400000000, 10),
(13, 'soluto', 'kia.jpg', 'đẹp', 700000000, 10),
(14, 'xe subaru', 'subaru-9435-1589735657.jpg', 'mới', 800000000, 11),
(15, 'xe mazda 3', 'mazda_3.jpg', 'xe mới 99%', 800000000, 12),
(16, 'xe mazda 6', 'mazda6-ngoai-that.jpg', 'mới', 1000000000, 12),
(17, 'xe mazda cx5', 'cx5.jpg', 'mới', 1000000000, 12),
(18, 'xe hyundai accent', 'hyundaiaccent.png', 'mới 99%', 600000000, 13),
(19, 'xe hyundai kona', 'hyundai-kona.jpg', 'đẹp 99%', 700000000, 13),
(20, 'xe hyundai i10', 'oto-hyundai-1.jpg', 'mới 98%', 500000000, 13),
(21, 'xe merceder c200', 'gia-xe-mercedes-c200.jpg', 'đẹp 100%', 1300000000, 14),
(22, 'for ecosoprt', 'xeford.jpg', 'mới', 800000000, 15);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idbl`),
  ADD KEY `taikhoan` (`idtk`),
  ADD KEY `idxe` (`idxe`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `datlichxem`
--
ALTER TABLE `datlichxem`
  ADD PRIMARY KEY (`iddl`),
  ADD KEY `tk` (`idtk`),
  ADD KEY `xe` (`idxe`);

--
-- Chỉ mục cho bảng `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`idquyen`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`idtk`),
  ADD KEY `quyen` (`idquyen`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`idxe`),
  ADD KEY `danhmuc` (`iddm`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idbl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `datlichxem`
--
ALTER TABLE `datlichxem`
  MODIFY `iddl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `quyen`
--
ALTER TABLE `quyen`
  MODIFY `idquyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `idtk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `xe`
--
ALTER TABLE `xe`
  MODIFY `idxe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `idxe` FOREIGN KEY (`idxe`) REFERENCES `xe` (`idxe`),
  ADD CONSTRAINT `taikhoan` FOREIGN KEY (`idtk`) REFERENCES `taikhoan` (`idtk`);

--
-- Các ràng buộc cho bảng `datlichxem`
--
ALTER TABLE `datlichxem`
  ADD CONSTRAINT `tk` FOREIGN KEY (`idtk`) REFERENCES `taikhoan` (`idtk`),
  ADD CONSTRAINT `xe` FOREIGN KEY (`idxe`) REFERENCES `xe` (`idxe`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `quyen` FOREIGN KEY (`idquyen`) REFERENCES `quyen` (`idquyen`);

--
-- Các ràng buộc cho bảng `xe`
--
ALTER TABLE `xe`
  ADD CONSTRAINT `danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
