-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2020 lúc 12:27 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `weblazy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(150) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `ngay_Tao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `Password`, `Email`, `level`, `ngay_Tao`) VALUES
(1, 'Hùng Vương', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 2, '2020-09-30 05:37:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `MaBN` int(10) NOT NULL,
  `TenBN` varchar(150) NOT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `Anh` varchar(150) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`MaBN`, `TenBN`, `Status`, `Anh`, `registration_date`) VALUES
(1, 'Xiaomi MI Note 10', 'TRUE', 'banner1.png', '2020-09-29 14:54:43'),
(2, 'VSMART ARIS PRO', 'TRUE', 'banner2.png', '2020-09-29 14:55:37'),
(3, 'Tai Nghe Galaxi Buds ', 'TRUE', 'banner3.jpg', '2020-09-29 14:56:15'),
(5, 'ABC', 'TRUE', '2804239275f74125a6e2ce5.23199311.jpg', '2020-09-30 05:06:34'),
(6, 'cde', 'TRUE', '8544282695f744e1c0eb5b5.24116038.png', '2020-09-30 09:21:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(10) NOT NULL,
  `MaKH` int(10) NOT NULL,
  `note` text NOT NULL,
  `DiaChiNhan` varchar(150) NOT NULL,
  `total` int(11) NOT NULL,
  `SDT` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `MaKH`, `note`, `DiaChiNhan`, `total`, `SDT`, `register_date`) VALUES
(2, 11, 'sdadasd', 'sdadasd', 2147483647, 100212121, '2020-10-02 01:05:21'),
(3, 16, 'nhanh', 'nhanh', 2147483647, 100212121, '2020-10-02 03:49:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangphu1`
--

CREATE TABLE `donhangphu1` (
  `id_dhphu` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `MaSP` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donhangphu1`
--

INSERT INTO `donhangphu1` (`id_dhphu`, `id`, `MaSP`, `quantity`, `price`) VALUES
(1, 2, 1, 10, 45000000),
(2, 2, 2, 4, 45000000),
(3, 2, 6, 12, 2147483647),
(6, 3, 10, 122, 2147483647),
(7, 3, 11, 12, 2147483647);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `MaLoai` int(10) NOT NULL,
  `TenLoai` varchar(150) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`MaLoai`, `TenLoai`, `registration_date`) VALUES
(1, 'Điện Thoại', '2020-09-24 05:00:21'),
(2, 'LAPTOP', '2020-09-25 02:52:41'),
(3, 'Phụ Kiện', '2020-09-29 05:02:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `MaNSX` int(10) NOT NULL,
  `TenNSX` varchar(150) NOT NULL,
  `DiaChi` varchar(150) NOT NULL,
  `SDT` int(11) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`MaNSX`, `TenNSX`, `DiaChi`, `SDT`, `registration_date`) VALUES
(1, 'APPLE', 'Mỹ', 113, '2020-09-24 05:02:05'),
(2, 'Sam Sung', 'Hàn Quốc', 114, '2020-09-29 01:31:53'),
(3, 'Xiaomi', 'China', 115, '2020-09-29 01:53:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(10) NOT NULL,
  `TenSP` varchar(200) NOT NULL,
  `MaNSX` int(10) NOT NULL,
  `MaLoai` int(10) NOT NULL,
  `GiaBan` int(11) NOT NULL,
  `ChiTiet` text NOT NULL,
  `Anh` text NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `MaNSX`, `MaLoai`, `GiaBan`, `ChiTiet`, `Anh`, `registration_date`) VALUES
(1, 'iPhone 11 Pro Max', 1, 1, 45000000, 'iPhone 11 Pro Max – Bộ ba camera sau chụp ảnh đỉnh cao Ra mắt cùng với iPhone 11 và 11 Pro là iPhone 11 Pro Max, đây mẫu smartphone cao cấp nhất của iPhone 11 Series được ra mắt năm 2019 và sắp tới là điện thoại iPhone 12 trong năm 2020. Với thiết kế cao cấp, hệ thống camera 3 camera cùng cấu hình siêu mạnh mẽ thì đây chính là một chiếc smartphone đáp ứng mọi trải nghiệm của người dùng.Kích thước to hơn với chất liệu thép không gỉ bền bỉ Điện thoại có thiết kế tương tự như iPhone 11 Pro nhưng kích thước thì to hơn với kích thước màn hình 6.5 inch và toàn bộ máy có kích thước 158 x 77.8 x 8.1 mm. Thiết kế không có nhiều thay đổi trừ hệ thống camera sau được nâng cấp thành 3 camera. Màn hình tai thỏ vẫn được giữ nguyên và chất liệu thép không gỉ giúp 11 Pro Max bền bỉ hơn.', '[\"ip11_cameip.png\",\"ip11_1.jpg\",\"ip11_HDH.png\",\"ip11.png\"]', '2020-09-24 05:12:16'),
(2, 'Apple Macbook Pro 13 Touch Bar i5 2.0 512GB 2020', 1, 2, 45000000, 'MacBook Pro 13 2020 mới với bộ vi xử lý Intel thế hệ thứ 10 mạnh mẽ, bàn phím Magic Keyboard mới bền vững hơn, sẽ đưa bạn đến trải nghiệm của sự chuyên nghiệp, tốc độ và tính tiện lợi trong công việc.MacBook Pro 13 2020 nâng tầm hiệu suất của laptop di động lên một đẳng cấp hoàn toàn khác biệt. Bộ vi xử lý Intel thế hệ thứ 10 mới với 4 nhân, tốc độ 2.0GHz Turbo Boost lên tới 3.8GHz, 6MB bộ nhớ đệm L3 cho tốc độ nhanh như ý tưởng của bạn. Chỉ cần ý tưởng vừa hiện ra trong đầu, MacBook Pro sẽ giúp bạn thực hiện ngay lập tức. Hơn nữa, 16GB RAM LPDDR4X 3733MHz giúp máy có khả năng đa nhiệm tốt hơn bao giờ hết. Làm nhiều việc, chạy nhiều chương trình cùng lúc, mở những tập tin nặng, tất cả đều không thành vấn đề trên MacBook Pro 13 2020.Việc trang bị bộ vi xử lý Intel thế hệ thứ 10 cũng đồng nghĩa với việc MacBook Pro 13 2020 sẽ sở hữu GPU đồ họa Iris Plus mới, cho hiệu suất đồ họa tốt hơn tới 80% so với thế hệ trước. Bạn sẽ có thể chỉnh sửa video dễ dàng, dựng mô hình 3D nhanh hơn và chơi game mượt mà hơn.', '[\"macbook_pro_13_2020_0002_3.jpg\",\"macbook_pro_13_2020_0003_2.jpg\",\"macbook_pro_13_2020_0004_1.jpg\"]', '2020-09-24 05:23:14'),
(6, 'IPHONE 12', 1, 1, 2147483647, 'de vljajajajjajajaa', '[\"2201702705f6cd3a2a647d2.88164320.JPG\",\"11660571635f6cd3a2a68658.90472493.JPG\",\"20544150895f6cd3a2a6c4d5.12371032.png\"]', '2020-09-24 17:15:35'),
(10, 'IPHONE 12333', 1, 1, 2147483647, 'hashdasjdfksahfkahsfhasafa', '[\"13974979815f6d7135a99a86.73576648.jpg\",\"1022540475f6d7135a9d900.97970002.jpg\",\"9375703735f6d7135aa1787.70991833.JPG\",\"19134994215f6d7135aa5606.79184614.JPG\"]', '2020-09-25 04:25:25'),
(11, 'MACBOOK 12', 1, 2, 2147483647, 'bjsadgsagdgasjdgasgkdgaksjgdsad', '[\"17757358825f6d587c2257a2.30337346.jpg\",\"4355246435f6d587c229629.03667127.jpg\",\"12037557365f6d587c22d4a1.20922572.png\",\"11104874985f6d587c231322.29502832.jpg\",\"20036182195f6d587c2351a2.94983776.jpg\",\"5366419395f6d587c239023.43452628.JPG\"]', '2020-09-25 02:39:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `MaKH` int(10) NOT NULL,
  `TenKH` varchar(150) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `DiaChi` varchar(150) NOT NULL,
  `SDT` int(20) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`MaKH`, `TenKH`, `Email`, `Password`, `DiaChi`, `SDT`, `registration_date`) VALUES
(11, 'Hùng Vương', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '141 chiến thắng văn quán Hà Đông Hà Nội', 100212121, '2020-09-22 04:50:04'),
(15, 'Lữ Bố', 'luubo@gmail.com', '0cc9a74150e8d1dcf483ccefb54dd66f', 'China', 113, '2020-09-22 07:44:45'),
(16, 'Triệu Vân', 'trieuvan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'China', 121212, '2020-09-29 08:28:21');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`MaBN`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_19` (`MaKH`);

--
-- Chỉ mục cho bảng `donhangphu1`
--
ALTER TABLE `donhangphu1`
  ADD PRIMARY KEY (`id_dhphu`),
  ADD KEY `fk_201` (`MaSP`),
  ADD KEY `fk_202` (`id`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`MaNSX`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `fk_1` (`MaNSX`),
  ADD KEY `fk_2` (`MaLoai`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`MaKH`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `MaBN` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `donhangphu1`
--
ALTER TABLE `donhangphu1`
  MODIFY `id_dhphu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `MaLoai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `MaNSX` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `MaKH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_12` FOREIGN KEY (`MaKH`) REFERENCES `users` (`MaKH`),
  ADD CONSTRAINT `fk_19` FOREIGN KEY (`MaKH`) REFERENCES `users` (`MaKH`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `donhangphu1`
--
ALTER TABLE `donhangphu1`
  ADD CONSTRAINT `fk_201` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_202` FOREIGN KEY (`id`) REFERENCES `donhang` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`MaNSX`) REFERENCES `nhasanxuat` (`MaNSX`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_2` FOREIGN KEY (`MaLoai`) REFERENCES `loai` (`MaLoai`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
