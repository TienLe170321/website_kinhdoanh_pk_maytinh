-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 03, 2023 lúc 12:02 PM
-- Phiên bản máy phục vụ: 10.1.32-MariaDB
-- Phiên bản PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webdoan3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `MaBinhLuan` int(11) NOT NULL,
  `NoiDungBinhLuan` text NOT NULL,
  `MaTaiKhoan` int(11) NOT NULL,
  `MaPK` int(11) DEFAULT NULL,
  `MaTinTuc` int(11) DEFAULT NULL,
  `TrangThai` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`MaBinhLuan`, `NoiDungBinhLuan`, `MaTaiKhoan`, `MaPK`, `MaTinTuc`, `TrangThai`) VALUES
(2, 'aaaaaaaaaaaaaaaa', 8, 56, NULL, 'A'),
(4, 'aaaaaaaaaa', 8, 56, NULL, 'A'),
(5, 'aaaaaaaaaaaaaaaa', 8, 56, NULL, 'A'),
(6, 'binh luan 1', 8, 56, NULL, 'D'),
(7, 'binh luan 1', 8, NULL, 8, 'A'),
(8, 'binh luan 2', 8, NULL, 8, 'A'),
(9, 'binh luan 3', 8, NULL, 8, 'A'),
(12, 'dddddd', 8, 55, NULL, 'A'),
(13, 'OK', 8, 55, NULL, 'A'),
(14, 'Tot', 8, 55, NULL, 'A'),
(22, 'Ohhh', 8, NULL, 10, 'A'),
(23, 'Nice', 8, NULL, 10, 'A'),
(24, 'San pham rat tot', 8, 57, NULL, 'A'),
(25, 'Nice\r\n', 8, 55, NULL, 'A'),
(26, 'Good', 8, 55, NULL, 'A'),
(27, 'Good', 8, 55, NULL, 'A'),
(28, 'AAAAA', 8, 55, NULL, 'A'),
(29, 'AAAAA', 8, 55, NULL, 'A'),
(30, 'Nice', 8, 55, NULL, 'A'),
(31, 'KKKK', 8, 55, NULL, 'A'),
(32, 'nice', 8, 49, NULL, 'A'),
(33, 'aaaa', 8, 49, NULL, 'A'),
(34, 'aaaa', 8, 49, NULL, 'A'),
(35, 'Good', 8, 65, NULL, 'A'),
(36, 'Nice', 8, 65, NULL, 'A'),
(37, 'Ohh', 8, NULL, 10, 'D'),
(38, 'Thu 2\r\n', 8, 55, NULL, 'D');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `MaCTHD` int(11) NOT NULL,
  `MaHD` int(11) NOT NULL,
  `MaPK` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`MaCTHD`, `MaHD`, `MaPK`, `SoLuong`, `Gia`) VALUES
(1, 1, 55, 1, 3799000),
(2, 4, 55, 1, 2279400),
(3, 7, 60, 1, 4999000),
(4, 7, 60, 1, 4999000),
(5, 9, 51, 1, 7190000),
(6, 10, 66, 1, 6200000),
(7, 11, 65, 2, 14000000),
(8, 12, 56, 2, 13800000),
(9, 13, 48, 1, 6200000),
(10, 14, 55, 1, 2279400),
(11, 15, 56, 1, 6900000),
(12, 16, 67, 1, 100000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `NgayLap` date NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaNV` int(11) DEFAULT NULL,
  `MaKM` int(11) DEFAULT NULL,
  `GiaHD` double NOT NULL,
  `TrangThai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `NgayLap`, `MaKH`, `MaNV`, `MaKM`, `GiaHD`, `TrangThai`) VALUES
(1, '2023-01-02', 5, NULL, NULL, 3799000, 'Đang giao'),
(4, '2023-01-02', 1, NULL, NULL, 2279400, 'Đã giao'),
(7, '2023-05-01', 23, NULL, NULL, 9998000, 'Đang giao'),
(9, '2023-05-01', 25, NULL, NULL, 7190000, 'Đang giao'),
(10, '2023-05-01', 26, NULL, NULL, 6200000, 'Đang giao'),
(11, '2023-05-01', 27, NULL, NULL, 14000000, 'Đang giao'),
(12, '2023-05-01', 28, NULL, NULL, 13800000, 'Đang giao'),
(13, '2023-05-02', 29, NULL, NULL, 6200000, 'Đang giao'),
(14, '2023-05-06', 30, NULL, NULL, 2279400, 'Đang giao'),
(15, '2023-05-07', 31, NULL, NULL, 6900000, 'Đã giao'),
(16, '2023-05-07', 29, NULL, NULL, 100000, 'Đã giao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `TenKH` varchar(200) NOT NULL,
  `SDT` char(15) NOT NULL,
  `DiaChi` varchar(300) NOT NULL,
  `Email` varchar(300) DEFAULT NULL,
  `MaTK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `SDT`, `DiaChi`, `Email`, `MaTK`) VALUES
(1, 'Lê Văn Tiến', '0389564748', '359, Nguyễn Văn Cừ phường An Hòa, quận Ninh Kiều, thành phố Cần Thơ', 'lvtien01vvk@gmail.com', NULL),
(2, 'Trần Văn Vượt', '0386173215', '233,Nguyễn Văn Cừ, phường An Hòa, quận Ninh Kiều, thành phố Cần Thơ', 'ttvuot@gmail.com', NULL),
(3, 'Phạm Văn Long', '0381354988', 'Phạm Thái Bường, phường 4, thành phố Vĩnh Long', 'pvLong@gmail.com', NULL),
(4, 'Nguyễn Văn Tài', '0386542986', 'Trung Hiếu, huyện Vũng Liêm, tỉnh Vĩnh Long', 'NVTai@gmail.com', NULL),
(5, 'Le Van Nam', '0231524555', '359, Nguyễn Văn Cừ phường An Hòa, quận Ninh Kiều, thành phố Cần Thơ', '', 8),
(23, 'Le Van Tien Tien', '012345789', 'aaaaaaaaaaaaaa', '', 8),
(25, 'Le Van Namm', '0389564748', '359, Nguyễn Văn Cừ phường An Hòa, quận Ninh Kiều, thành phố Cần Thơ', '', 8),
(26, 'Le Van Tienmm', '12345555', 'ddddddddddddddddd', '', 8),
(27, 'Le Van Tienmmdd', '12345555', 'ddddddddddddddddd', '', 8),
(28, 'Le Van tineee', '12345555', 'aaaaaaaaaaaaaa', '', 8),
(29, 'Le Van tine', '01234567', 'aaaaaaaaaaaaaa', '', 8),
(30, 'Le Van Nam', '0389564748', '359, Nguyễn Văn Cừ phường An Hòa, quận Ninh Kiều, thành phố Cần Thơ', '', 8),
(31, 'Le Van Tien', '012345678', 'aaaaaaaaaaaaaa', '', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKM` int(11) NOT NULL,
  `CodeKM` varchar(20) NOT NULL,
  `TenKM` varchar(200) NOT NULL,
  `NgayBatDau` date NOT NULL,
  `NgayKetThuc` date NOT NULL,
  `GiaTriKM` double NOT NULL,
  `TrangThai` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `CodeKM`, `TenKM`, `NgayBatDau`, `NgayKetThuc`, `GiaTriKM`, `TrangThai`) VALUES
(1, 'TKSMSSD', 'Mừng ngày thành lập công ty 2', '2022-10-20', '2022-10-30', 5, 'A'),
(2, 'ASKFHNSS', 'Ưu đãi tháng 10', '2022-12-22', '2022-12-23', 25, 'A'),
(3, 'AVSDVDCDV', 'AAAAA', '2023-02-28', '2023-03-09', 25, 'D');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiphukien`
--

CREATE TABLE `loaiphukien` (
  `MaLoaiPK` int(11) NOT NULL,
  `TenLoaiPK` varchar(100) NOT NULL,
  `GhiChu` text NOT NULL,
  `TrangThai` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaiphukien`
--

INSERT INTO `loaiphukien` (`MaLoaiPK`, `TenLoaiPK`, `GhiChu`, `TrangThai`) VALUES
(2, 'Bàn Phím', '', 'A'),
(3, 'Tai Nghe', '', 'A'),
(4, 'Ghế', '', 'A'),
(11, 'Chuột', '', 'A'),
(12, 'Loa', '', 'A');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(11) NOT NULL,
  `TenNV` varchar(200) NOT NULL,
  `NgayVaoLam` date NOT NULL,
  `SDTNV` char(15) NOT NULL,
  `DiaChiNV` varchar(300) NOT NULL,
  `TrangThai` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `NgayVaoLam`, `SDTNV`, `DiaChiNV`, `TrangThai`) VALUES
(1, 'Nguyễn Thị Hồng', '2022-10-04', '0383468956', '359, Nguyễn Văn Cừ, phường An Hòa, quận Ninh Kiều thành phố Cần Thơ', 'A'),
(2, 'Nguyễn Bảo Khanh', '2022-10-03', '0382364795', 'Phong Thới, thị trấn Vũng Liêm, huyện Vũng Liêm, tỉnh Vĩnh Long', 'A');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phukien`
--

CREATE TABLE `phukien` (
  `MaPK` int(11) NOT NULL,
  `TenPK` varchar(100) NOT NULL,
  `ThongSoKT` text NOT NULL,
  `HinhAnh` varchar(150) NOT NULL,
  `Gia` double NOT NULL,
  `MaLoaiPK` int(11) NOT NULL,
  `TrangThai` char(1) NOT NULL,
  `MaThuongHieu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phukien`
--

INSERT INTO `phukien` (`MaPK`, `TenPK`, `ThongSoKT`, `HinhAnh`, `Gia`, `MaLoaiPK`, `TrangThai`, `MaThuongHieu`) VALUES
(39, ' Chuột G502 HERO ', 'Thương hiệu \r\nLOGITECH\r\nBảo hành\r\n24\r\nThông tin chung\r\nNhu cầu\r\nGaming\r\nCấu hình chi tiết\r\nKiểu kết nối\r\nChuột có dây\r\nĐèn LED\r\nRGB\r\nMàu sắc\r\nĐen\r\nKết nối\r\nUSB 2.0\r\nĐộ phân giải (CPI/DPI)\r\n16000DPI\r\nDạng cảm biến\r\nOptical\r\nTên cảm biến\r\nHERO\r\nThời gian phản hồi\r\n1 ms\r\nSố nút bấm\r\n11', 'g502.png', 1049000, 11, 'A', 2),
(40, 'Chuột G102 Hero', 'Thương hiệu\r\nLOGITECH\r\nBảo hành\r\n24\r\nThông tin chung\r\nNhu cầu\r\nGaming\r\nCấu hình chi tiết\r\nKiểu kết nối\r\nChuột có dây\r\nĐèn LED\r\nRGB\r\nMàu sắc\r\nĐen\r\nKết nối\r\nUSB 2.0\r\nĐộ phân giải (CPI/DPI)\r\n16000DPI\r\nDạng cảm biến\r\nOptical\r\nTên cảm biến\r\nHERO\r\nThời gian phản hồi\r\n1 ms\r\nSố nút bấm\r\n6\r\nKích thước\r\n124 x 68 x 43 mm\r\nKhối lượng\r\n87.3 g', 'g102.png', 199000, 11, 'A', 2),
(41, ' Chuột Dareu LM115G ', '- Cảm biến：PAN3212\r\n- Chuẩn kết nối: 2.4GHz Wireless\r\n- DPI: 800-1200-1600\r\n- IPS: 30\r\n- Tăng tốc: 10G', 'daeru lm115g.png', 149000, 11, 'A', 8),
(42, 'Chuột newmen g', '- Kiểu kết nối: Có dây\r\n- Dạng cảm biến: Optical \r\n- Độ phân giải: 3200 DPI \r\n- Màu sắc: Vàng', 'newmen_g10+.png', 139000, 11, 'A', 7),
(43, 'Chuột gaming Asus ROG Gladius II Core', '- Thiết kế truyền thống, gọn nhẹ, tiện dụng  \r\n\r\n- Cảm biến quang PAW3327 chuyên game\r\n\r\n- Độ phân giải lên đến 6200DPI\r\n\r\n- Thiết kế ổ cắm nút kiểu đẩy và lắp độc quyền theo phong cách ROG\r\n\r\n- ROG Amoury II giúp dễ dàng tùy chỉnh cài đặt và đèn', 'asus rog gladius ii core.png', 700000, 11, 'A', 1),
(44, 'Chuột Asus TUF Gaming M3', '- Thiết kế cân xứng Ergonomic cho cảm giác cầm nắm thoải mái \r\n- Tốc độ chuột lên đến 7000 DPI kèm theo 2 nút DPI tinh chỉnh dễ dàng khi đang sử dụng \r\n- LED RGB tích hợp có thể điều chỉnh cùng với các tính năng qua phần mềm AMOURY II', 'asus tuf gaming m3.png', 430000, 11, 'A', 1),
(45, 'Chuột Corsair DARK CORE RGB PRO SE', '- Thương hiệu: Cosair - Chuẩn kết nối: Wireless - Nổi bật: RGB Led, Nút bấm omron, thiết kế gaming DPI lên đến 16000 - Tích hợp sạc không dây QI', 'corsair dark  core rbg pro se.png', 2500000, 11, 'A', 6),
(46, 'Chuột Razer Deathadder V2', '- Chuột chơi game chuyên dụng từ Razer \r\n- Phiên bản V2 với nhiều cải tiến và nâng cấp \r\n- Mắt đọc Razer Optical Focus+ 20000DPI 650IPS tracking \r\n- Switch Razer Optical độ bền 70 triệu click \r\n- Dây cáp bọc sợi Speedflex mềm mại \r\n- 8 nút bấm có thể lập trình qua Synaps', 'razer_deathadder.png', 1649000, 11, 'A', 9),
(47, 'Chuột SteelSeries Rival 710 ', '- Là phiên bản nâng cấp của Rival 700 - Hệ thống LED RGB 16.8 triệu màu - Cảm biến SteelSeries TrueMove3 - LCD OLED hỗ trợ nhiều GIFs logo độc đáo - Tích hợp rung thông báo', 'steel series rival 710.png', 2300000, 11, 'A', 10),
(48, 'Ghế gaming AKRACING Core Series LX Plus', '- Ghế gaming Core Series LX Plus được thiết kế hiện đại, sang trọng\r\n- Với chất liệu khung kim loại rất chắc chắn và bền bỉ, chất liệu da PU cao cấp\r\n- Đệm ngồi của ghế AKRacing được làm chắc chắn, chịu lực và đàn hồi tốt, khó bị bẹp hay biến dạng sau thời gian dài sử dụng\r\n- Chân đế 5 cánh hình sao giúp trọng lực dồn vào chính giữa tâm; Kê tay có thể nâng lên\r\n- Chịu lực và hoạt động dưới trọng lượng lên đến 150kg', 'akracing.png', 6200000, 4, 'A', 11),
(49, 'Ghế E-Dra Hercules EGC203 Pro', '- Ghế cao cấp dành cho Game\r\n\r\n- Đệm đúc nguyên khối  \r\n\r\n- Chất liệu Da PU\r\n\r\n- Kê tay 4D\r\n\r\n- Khung, chân nhựa, bánh xe không ồn', 'edra hercules.jpg', 4490000, 4, 'A', 15),
(50, 'Ghế gaming Cougar Armor Black', '- Ghế gaming Armor Black được thiết kế độc đáo và hiện đại\r\n- Dễ dàng điều chỉnh chiều cao với lực nâng piston khí loại 4 chất lượng cao\r\n- Cho phép bạn ngả tới 180 độ và có thể điều chỉnh độ nghiêng\r\n- Với chất liệu khung được tạo thành từ thép, Mặt ghế được bọc Da PVC cao cấp\r\n- Bộ khung hợp thép chắc chắn với bệ hình sao 5 cánh chịu lực 120kg', 'coljgar.png', 4289000, 4, 'A', 12),
(51, 'Ghế Corsair TC200', '- Thiết kế thoải mái và phong cách bên ngoài được bọc bằng giả da sang trọng\r\n- Hỗ trợ thắt lưng bằng bọt xốp tích hợp Giúp bạn duy trì tư thế lành mạnh khi chơi game, với một chiếc gối kê cổ bằng mút hoạt tính có thể tháo rời đi kèm.\r\n- Tay vịn 4D có thể điều chỉnh cao có thể di chuyển lên hoặc xuống, sang trái hoặc sang phải, tiến hoặc lùi\r\n- Tận hưởng những chiến thắng khó khăn của bạn với lưng ghế ngả 90-180 °.\r\n- Quy trình lắp ráp dễ dàng: Thiết lập và đặt chỗ nhanh chóng.', 'corsair t3.jpg', 7190000, 4, 'A', 6),
(52, 'Ghế công thái học warrior', ' - Tựa đầu 2D điều chỉnh độ cao\r\n- Phần tựa lưng điều chỉnh được chiều cao và chiều ngang\r\n- Bệ đỡ đa chức năng với 3 mức ngả khác nhau', 'cth warrior wec502.png', 5990000, 4, 'A', 13),
(53, 'Ghế gaming E-dra EGC230', ' Góc đứng: 90° ± 2°\r\n- Góc nằm max: 160°\r\n- Đường kính chân: 70cm\r\n- Đệm cao su nguyên khối\r\n- Khung-chân: Khung kim loại, chân nhựa chịu lực cao, bánh xe được thiết kế ko gây tiếng ồn\r\n ', 'edra  egc205.jpg', 4700000, 4, 'A', 15),
(54, 'Ghế gaming WARRIOR Black', '- Dễ dàng điều chỉnh chiều cao với lực nâng piston khí loại 4 chất lượng cao\r\n- Cho phép bạn ngả tới 180 độ và có thể điều chỉnh độ nghiêng\r\n- Với chất liệu khung được tạo thành từ thép, Mặt ghế được bọc Da PVC cao cấp\r\n- Bộ khung hợp thép chắc chắn với bệ hình sao 5 cánh chịu lực 120kg', 'warrioe.jpg', 5679000, 4, 'A', 13),
(55, 'Bàn phím cơ gaming Corsair K70 PRO', '- Bàn phím cơ\r\n- Kết nối: USB 3.0\r\n- Switch: Cherry MX Speed\r\n- Phím chức năng: Có', 'cor.jpg', 3799000, 2, 'A', 6),
(56, 'Bàn phím cơ Razer BlackWidow X Chroma ', '- Bàn phím cơ\r\n- Kết nối USB 2.0\r\n- Kiểu switch Razer Orange', 'raz.png', 6900000, 2, 'A', 9),
(57, 'Bàn phím gaming  Logitech G715 TKL Offwhite ', 'Thiết kế phần tựa bàn tay hình đám mây thoải mái,  nhỏ gọn và độ cao có thể điều chỉnh\r\n- LIGHTSPEED siêu nhạy\r\n- Bàn phím chơi game rút gọn 87 phím\r\n- Công nghệ cấp độ chơi game trong tầm tay\r\n\r\n ', 'lg g715.jpg', 4000000, 2, 'A', 2),
(58, 'Bàn phím cơ Steelseries Apex Pro', '- Bàn phím cơ\r\n- Kết nối: USB\r\n- Switch: OmniPoint\r\n- Phím chức năng: Có', 'steel.jpg', 5000000, 2, 'A', 10),
(59, 'Bàn phím cơ không dây ASUS ROG Claymore II', '- Thời lượng pin vượt trội: Pin 4000 mAh\r\n- Có đèn LED chỉ báo mức pin tích hợp\r\n- Bánh xe điều khiển âm lượng tích hợp trên numpad\r\n- Hiệu ứng ánh sáng được đồng bộ hóa\r\n- Thiết kế Ergonomic', 'rog.jpg', 7000000, 2, 'A', 1),
(60, 'Tai nghe không dây SteelSeries Arctis 9', '- Đáp ứng tần số micrô: 100–6.500 Hz\r\n- Độ nhạy của micrô -38 dBV / Pa\r\n- Trở kháng micrô: 2200 Ohm\r\n-  Phạm vi 40 ft / 12 m\r\n- Tuổi thọ pin 20 giờ\r\n- Cấu hình Bluetooth A2DP, HFP, HSP', 'stell.jpg', 4999000, 3, 'A', 10),
(61, 'Tai nghe không dây Razer BlackShark V2 Pro', '- Thiết kế tai nghe Razer BlackShark V2 Pro trọng lượng nhẹ cùng Công nghệ không dây siêu tốc Razer (2.4GHz)\r\n- Micrô Razer  HyperClear Supercardioid có thể tháo rời, đệm tai bọt siêu mềm giúp giảm đáng kể lực kẹp của tai nghe\r\n- Được hỗ trợ bởi đệm sang trọng tạo thành một lớp đệm hoàn hảo để cách ly âm thanh tốt hơn\r\n- Thời lượng pin lên đến 24 giờ', 'rz.jpg', 4439000, 3, 'A', 9),
(62, 'Tai nghe gaming không dây INZONE H9 SONY WH-G900N', '- Được trang bị 360 Spatial Sound dành cho Chơi game giúp phát hiện chính xác đối thủ\r\n- Trang bị công nghệ âm thanh tiên tiến nhờ kích hoạt phần mềm PC INZONE Hub\r\n- Công nghệ cảm biến tiếng ồn kép khử mọi âm thanh xung quanh\r\n- Thiết kế đệm tai êm ái cho trải nghiệm đeo thoải mái hàng giờ\r\n- Kết nối 2,4 GHz đồng thời với kết nối Bluetooth\r\n-Tích hợp Mic tiện lợi gập xuống để nói, gập lên để tắt tiếng', 'sony.jpg', 10000000, 3, 'A', 16),
(63, 'Tai nghe Over-ear ASUS ROG Strix Fusion 300', '- Màng loa driver 50 mm, nam châm Neodymium\r\n- Trở kháng 32 Ohm, Tần số 20 ~ 20000 Hz\r\n- Cáp USB: 2m, Cáp 3.5mm: 1.5m\r\n- Hệ thống âm thanh vòm giả lập 7.1\r\n- Đệm tai ROG Hybrid với mức độ cách âm tuyệt vời', 'rog str.jpg', 4000000, 3, 'A', 1),
(64, 'Tai nghe gaming Logitech G Pro X LOL Series', 'Phiên bản đặc biệt League Of Legends Series\r\nMàng loa Pro-G 50mm cho âm thanh chuẩn xác\r\nĐộ bền bỉ cao nhưng vẫn mang lại sự nhẹ nhàng và thoải mái\r\nMicro Blue Voice lọc giọng nói, giảm tiếng ồn, giảm tạp âm\r\nÂm thanh vòm thế hệ mới', 'logi lol.jpg', 3000000, 3, 'A', 2),
(65, 'Loa 5.1 Logitech Z906 ', '- Thiết Kế: Hệ Thống Loa 5.1\r\n- Kết Nối: Jack 3.5mm (headphone) / Jack 3.5mm (input) / RCA (input) / Jack 3.5 (surround input) / Coaxial (input) / Optical (input) / Push Ternminal (output)\r\n- Chức Năng: Volume Control / Bass Control / 2.1 Mode / 4.1 Mode / 3D Mode / DTS Interative / Dolby Digital / THX / Loa treo tường được\r\n- Công Suất: 500W RMS', 'loa lg 5.1.png', 7000000, 12, 'A', 2),
(66, 'Loa bluetooth Harman Kardon Aura Studio 2', '- Loa cao cấp dành cho điện thoại di động, máy tính bảng, PC, laptop...\r\n- Bộ loa được thiết kế từ cảm hứng của mẫu loa Soundstick nổi tiếng với lớp vỏ trong suốt, lỗ thoát hơi dạng ống ở trên\r\n- Sử dụng 6 driver 1.5\" trình diễn cả 2 vùng dải tần là trung và cao âm tạo nên một vùng phát âm đa hướng 360 độ\r\n- Âm trầm do loa woofer đường kính 4.5\" đảm nhiệm với trang bị nam châm có lực từ cực mạnh\r\n- Tăng cường khả năng kết nối Bluetooth (A2DP, AVRCP) với công nghệ TrueStream từ Harman Kardon cho chất lượng âm thanh được tối ưu\r\n- Các nút điều khiển được thiết kế cảm ứng chạm độc đáo', 'har.jpg', 6200000, 12, 'A', 17),
(67, 'San Pham', 'SSSSSSSSSSS', 'akracing.png', 100000, 4, 'D', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTaiKhoan` int(11) NOT NULL,
  `TaiKhoan` varchar(15) NOT NULL,
  `MatKhau` varchar(60) NOT NULL,
  `Quyen` char(15) NOT NULL,
  `Hoten` varchar(25) NOT NULL,
  `TrangThai` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`MaTaiKhoan`, `TaiKhoan`, `MatKhau`, `Quyen`, `Hoten`, `TrangThai`) VALUES
(8, 'Tienle123', '$2y$10$WlVCbtX6ElokFIJFGVzDC.GNwpM8H1weFdeXUJgQi5sjqJKE686Q6', 'U', 'Le Van Tien', 'A'),
(17, 'Admin', '$2y$10$mybHsnmr3UIakFbA5s5zKeFLpVkwVH8dScHyWBBifYPz6ky94ZPMC', 'A', 'Le Van Tien', 'A'),
(18, 'TienLe1703', '$2y$10$hnKp.pi0CbbS7cNBQXe2jesT6R4sX85oq0JVfeCR0zEvvPr87Zto.', 'A', 'LeVanTien', 'A'),
(19, 'Nei3071', '123', 'A', 'Le Van Tien', 'A'),
(20, 'BaVuong1', '$2y$10$XpgD8yoq1lhWn/KklUd/kuYlb0thO27OsxKZZheR8PNxOqaHFBI5a', 'U', 'Nguyen Ba Vuong', 'A');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `MaThuongHieu` int(11) NOT NULL,
  `TenThuongHieu` varchar(100) NOT NULL,
  `TrangThai` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`MaThuongHieu`, `TenThuongHieu`, `TrangThai`) VALUES
(1, 'Asus', 'A'),
(2, 'Logitech', 'A'),
(5, 'MSI', 'A'),
(6, 'Corsair', 'A'),
(7, 'Newmen', 'A'),
(8, 'DAREU', 'A'),
(9, 'RAZER', 'A'),
(10, 'STEELSERIES', 'A'),
(11, 'AKRACING', 'A'),
(12, 'Cougar', 'A'),
(13, 'WARRIOR', 'A'),
(15, 'E-dra', 'A'),
(16, 'SONYy', 'A'),
(17, 'Harman Kardon', 'D');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `MaTinTuc` int(11) NOT NULL,
  `TieuDe` varchar(200) NOT NULL,
  `NoiDung` text NOT NULL,
  `HinhAnh` varchar(50) NOT NULL,
  `NgayTaoTinTuc` date NOT NULL,
  `TrangThai` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`MaTinTuc`, `TieuDe`, `NoiDung`, `HinhAnh`, `NgayTaoTinTuc`, `TrangThai`) VALUES
(7, 'Tìm hiểu về ổ cứng Western Digital Ultrastar và WD Gold dành cho máy chủ', 'Cũng giống như phân khúc dành cho người dùng phổ thông, ở mảng máy chủ hay doanh nghiệp cũng sẽ có các dòng ổ cứng khác nhau tùy thuộc vào từng nhu cầu. Chẳng hạn, nếu Western Digital có những ổ Green, Blue dành cho văn phòng, Black dành cho game thủ, thì họ cũng có dòng Gold dành cho hệ thống máy chủ. Đặc biệt, nếu các bạn chưa biết thì Western Digital còn có thêm dòng ổ cứng Ultrastar cũng phục vụ cho máy chủ và trung tâm dữ liệu luôn đó.\r\nĐầu tiên là về điểm giống nhau giữa 2 dòng sản phẩm này. Chúng đều có dung lượng trải dài từ 1TB đến 18TB. Trong đó, dải sản phẩm từ 12TB đến 18TB là cao cấp nhất, lý do là vì nó được trang bị công nghệ bơm khí heli HelioSeal vừa giúp ổ cứng mát hơn, bền hơn, vừa giúp tiết kiệm điện nhằm tối ưu chi phí cho các doanh nghiệp.\r\nNgoài dung lượng và tính năng, Western Digital Ultrastar và WD Gold còn giống nhau về các thông số kỹ thuật. Chẳng hạn, đối với cùng mức dung lượng 18TB, cả 2 ổ cứng đều có tốc độ vòng quay là 7200rpm, tốc độ truyền dữ liệu 269 MB/s, độ bền 550 TB/năm (2,5 triệu giờ), và đều được bảo hành 5 năm.\r\nXét về mục đích sử dụng, Western Digital Ultrastar và WD Gold đều phục vụ đủ các phân khúc, từ PC, máy trạm, NAS, cho đến hệ thống camera giám sát, hay những thứ “cao siêu” hơn như lưu big data, dữ liệu AI, hệ thống đám mây, thậm chí là trung tâm dữ liệu cũng xài được luôn. Tùy vào từng nhu cầu mà bạn sẽ có từng mức dung lượng phù hợp khác nhau.\r\nGiống nhau là thế, nhưng 2 dòng ổ cứng này vẫn có sự khác biệt hẳn hoi đó nha. Nếu WD Gold là dành cho khách hàng cá nhân nhỏ lẻ, hoặc doanh nghiệp vừa và nhỏ, thì Western Digital Ultrastar sẽ tối ưu cho các hệ thống trung tâm dữ liệu lớn, chuyên phục vụ các dự án tầm cỡ như big data, đám mây (cloud). Và cũng chính vì tối ưu cho môi trường đó nên Western Digital Ultrastar được trang bị thêm cổng SAS với tốc độ lên đến 12 Gbps, gấp đôi so với cổng SATA trên ổ cứng WD Gold. Thêm vào đó, ổ Ultrastar cũng sẽ được ưu tiên tích hợp các công nghệ mới nhất, cũng như là được trang bị đầy đủ các tính năng bảo mật cao cấp để bảo đảm công việc được suôn sẻ nhất có thể.', '258-768x433.jpg', '2023-01-02', 'A'),
(8, 'AMD ra mắt Ryzen 7020 series giúp cải thiện hiệu năng và thời lượng pin cho laptop', 'AMD vừa mới ra mắt dòng vi xử lý Ryzen 7020 và Athlon 7020, mang lại sự cân bằng giữa hiệu năng và thời lượng pin cho các thiết bị di động. Được xây dựng trên kiến trúc “Zen 2” và tích hợp đồ họa AMD “RDNA 2” 610M series, vi xử lý Ryzen và Athlon 7020 hứa hẹn mang lại hiệu suất đủ để đáp ứng các nhu cầu sử dụng hằng ngày với thời lượng pin lên đến 12 giờ.\r\nĐược xây dựng dựa trên tiến trình 6nm tiên tiến của TSMC, Ryzen và Athlon 7020 series sẽ mang đến sự cân bằng giữa tốc độ và điện năng tiêu thụ. Với khả năng quản lý pin thông minh và phần cứng giải mã video & âm thanh chuyên dụng, những chiếc máy tính trang bị Ryzen và Athlon 7020 sẽ là giải pháp lý tưởng dành cho các buổi hội nghị truyền hình và cộng tác, năng suất văn phòng và đa nhiệm cũng như kết nối với gia đình và bạn bè.\r\n\r\nVi xử lý Ryzen 7020 series cũng mang đến hiệu năng tốt nhất trong phân khúc, với khả năng đa nhiệm nhanh hơn tới 58% và tốc độ khởi động các ứng dụng nhanh hơn 31% so với đối thủ trên CPU AMD Ryzen 3 7320U.', 'amd-ryzen-7020-CPU-series-768x432.jpg', '2023-01-01', 'A'),
(9, 'Xuất hiện TV không dây đầu tiên trên thế giới, kết nối phần cứng và màn hình không cần dây cáp', 'Mới đây công ty công nghệ Mỹ Displace đã nhá hàng một mẫu TV siêu độc đáo gọi là Displace TV. Dự kiến họ sẽ cho nó chính thức ra mắt trong sự kiện CES vào tháng 1 năm 2023. Cái hay ho nhất của nó là nó được trang bị CPU của AMD và GPU của NVIDIA nhưng không chứa chúng bên trong mà là ở chỗ khác. Bản thân chiếc màn hình của TV cũng không có gì quá đặc biệt. Nó có tấm nền OLED độ phân giải 4K và kích thước 55inch. Cái đáng bàn đến là nó có kèm theo cái case nặng 9,07 kg đi kèm, nó có chứa phần cứng và có thể phát tín hiệu xuất hình không dây.\r\nNếu bao nhiêu đó chưa đủ để làm bạn cảm thấy ghê gớm thì chiếc TV này còn được trang bị viên pin có thể thay đổi, và mỗi viên pin như thế có thể cho phép bạn xem phim trong 1 tháng với điều kiện dùng không quá 6 giờ 1 ngày. Chiếc TV không dây này cũng đi kèm với 4 viên pin và 1 trạm sạc nữa. Displace TV cũng hỗ trợ điều khiển bằng cử chỉ, giọng nói và điều khiển từ xa. Đối với những người thấy TV 55 inch vẫn còn hơi nhỏ thì Displace tuyên bố rằng có thể kết nối tối đa 4 tấm nền với nhau để tạo ra một khung nhìn 8K 110inch.', 'D54Xl2WBKoT7KT87-768x502.jpg', '2023-01-01', 'A'),
(10, 'Đây là HDD Clicker, và nó phát ra tiếng “lạch cạch” đầy hoài niệm của ổ cứng ngày xưa', 'Hồi cái thời mà PC còn là cái thùng nhựa màu be (beige), khi bật máy lên, bạn sẽ nghe tiếng quạt quay lào xào, tiếng chuông khi boot máy thành công, và nhất là tiếng “click click” của chiếc ổ cứng HDD trong thùng máy. Thế là đã có một modder hoài cổ tên là Arne Schmitz giới thiệu thiết bị HDD Clicker có chức năng giả lập tiếng lạch cạch của các phiến đĩa đang quay trong ổ HDD.\r\nArne Schmitz có kênh YouTube tên là root42, chuyên đăng những video về game retro và những công nghệ ngày xưa. Anh giải thích rằng HDD Clicker sẽ thích hợp để gắn với những bộ PC gaming retro để mô phỏng tiếng ổ đĩa đang chạy. Ngoài ra, nó còn một ưu điểm nữa là cho bạn cảm giác ASMR (Autonomous sensory meridian response – Phản ứng kích thích cảm giác tự động) khi xài máy tính mà không phải nơm nớp lo sợ rằng ổ cứng sắp hỏng tới nơi (do tiếng kêu này thường phát ra khi HDD sắp “ngủm”).\r\nThiết bị này được thiết kế bởi matze79 (tham khảo thêm về quá trình phát triển tại đây) và được bán trên Serdashop với giá là 25 EUR/cái. Được biết, bạn có thể cắm nó trực tiếp vào đầu nguồn Molex, và mặc định nó sẽ phát ra tiếng kêu khá là lớn. Tuy nhiên, bạn có thể dán băng keo lên lỗ buzzer để giảm âm lượng, hoặc dán thẳng lên cái speaker luôn để âm thanh nghe nhỏ nhất.', 'Untitled-1-1-768x432.jpg', '2023-02-26', 'A');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MaBinhLuan`),
  ADD KEY `FK_BLTK` (`MaTaiKhoan`),
  ADD KEY `FK_BLPK` (`MaPK`),
  ADD KEY `FK_BLTT` (`MaTinTuc`);

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`MaCTHD`),
  ADD KEY `FK_CTHD` (`MaHD`),
  ADD KEY `FK_PK` (`MaPK`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `FK_HD_KH` (`MaKH`),
  ADD KEY `FK_HD_NV` (`MaNV`),
  ADD KEY `FK_HD_KM` (`MaKM`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`),
  ADD KEY `FK_TK` (`MaTK`);
ALTER TABLE `khachhang` ADD FULLTEXT KEY `TenKH` (`TenKH`,`DiaChi`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`);
ALTER TABLE `khuyenmai` ADD FULLTEXT KEY `TenKM` (`TenKM`);

--
-- Chỉ mục cho bảng `loaiphukien`
--
ALTER TABLE `loaiphukien`
  ADD PRIMARY KEY (`MaLoaiPK`);
ALTER TABLE `loaiphukien` ADD FULLTEXT KEY `TenLoaiPK` (`TenLoaiPK`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);
ALTER TABLE `nhanvien` ADD FULLTEXT KEY `TenNV` (`TenNV`,`DiaChiNV`);

--
-- Chỉ mục cho bảng `phukien`
--
ALTER TABLE `phukien`
  ADD PRIMARY KEY (`MaPK`),
  ADD KEY `FK_LPK` (`MaLoaiPK`),
  ADD KEY `FK_TH` (`MaThuongHieu`);
ALTER TABLE `phukien` ADD FULLTEXT KEY `TenPK` (`TenPK`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTaiKhoan`),
  ADD UNIQUE KEY `TaiKhoan` (`TaiKhoan`),
  ADD KEY `TaiKhoan_3` (`TaiKhoan`);
ALTER TABLE `taikhoan` ADD FULLTEXT KEY `TaiKhoan_2` (`TaiKhoan`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`MaThuongHieu`);
ALTER TABLE `thuonghieu` ADD FULLTEXT KEY `TenThuongHieu` (`TenThuongHieu`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`MaTinTuc`);
ALTER TABLE `tintuc` ADD FULLTEXT KEY `TieuDe` (`TieuDe`,`NoiDung`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MaBinhLuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  MODIFY `MaCTHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `loaiphukien`
--
ALTER TABLE `loaiphukien`
  MODIFY `MaLoaiPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `phukien`
--
ALTER TABLE `phukien`
  MODIFY `MaPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `MaThuongHieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `MaTinTuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `FK_BLPK` FOREIGN KEY (`MaPK`) REFERENCES `phukien` (`MaPK`),
  ADD CONSTRAINT `FK_BLTK` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`),
  ADD CONSTRAINT `FK_BLTT` FOREIGN KEY (`MaTinTuc`) REFERENCES `tintuc` (`MaTinTuc`);

--
-- Các ràng buộc cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD CONSTRAINT `FK_CTHD` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`),
  ADD CONSTRAINT `FK_PK` FOREIGN KEY (`MaPK`) REFERENCES `phukien` (`MaPK`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FK_HD_KH` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`),
  ADD CONSTRAINT `FK_HD_KM` FOREIGN KEY (`MaKM`) REFERENCES `khuyenmai` (`MaKM`),
  ADD CONSTRAINT `FK_HD_NV` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `FK_TK` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTaiKhoan`);

--
-- Các ràng buộc cho bảng `phukien`
--
ALTER TABLE `phukien`
  ADD CONSTRAINT `FK_LPK` FOREIGN KEY (`MaLoaiPK`) REFERENCES `loaiphukien` (`MaLoaiPK`),
  ADD CONSTRAINT `FK_TH` FOREIGN KEY (`MaThuongHieu`) REFERENCES `thuonghieu` (`MaThuongHieu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
