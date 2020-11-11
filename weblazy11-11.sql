-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 11, 2020 lúc 10:30 AM
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
(6, 'cde', 'FALSE', '8544282695f744e1c0eb5b5.24116038.png', '2020-09-30 09:21:32'),
(8, 'love', 'FALSE', '6362398985f7edf8115ffc6.59954418.gif', '2020-10-08 09:44:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `idCMM` int(10) NOT NULL,
  `idTinTuc` int(10) NOT NULL,
  `TenKH` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `NoiDung` text NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`idCMM`, `idTinTuc`, `TenKH`, `Email`, `NoiDung`, `register_date`) VALUES
(4, 4, 'Lộc Ngu', 'vuong@gmail.com', 'hay quá đi à', '2020-10-30 05:27:07'),
(5, 3, 'Triệu Vân', 'admin2@gmail.com', 'bài này hay', '2020-10-30 05:34:44'),
(6, 3, 'Hùng Vương', 'admin3@gmail.com', 'Tiền Đâu Mà Mua Chán Thật Sự À,hazzzzz huhu', '2020-10-30 05:35:53'),
(7, 8, 'lữu bố', 'admin1@gmail.com', 'được thật sự à', '2020-10-31 04:24:34');

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangphu1`
--

CREATE TABLE `donhangphu1` (
  `id_dhphu` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `MaSP` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `TrangThai` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Cấu trúc bảng cho bảng `loaitin`
--

CREATE TABLE `loaitin` (
  `idLoaiTin` int(10) NOT NULL,
  `idTheLoai` int(10) NOT NULL,
  `TenLoaiTin` varchar(250) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaitin`
--

INSERT INTO `loaitin` (`idLoaiTin`, `idTheLoai`, `TenLoaiTin`, `date_time`) VALUES
(1, 1, 'Tin Điện Thoại', '2020-10-26 02:47:01'),
(3, 1, 'abc', '2020-10-26 04:09:45'),
(5, 2, 'Thủ Thuật', '2020-10-30 07:23:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `MaNSX` int(10) NOT NULL,
  `TenNSX` varchar(150) NOT NULL,
  `DiaChi` varchar(150) NOT NULL,
  `SDT` int(11) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `MaLoai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`MaNSX`, `TenNSX`, `DiaChi`, `SDT`, `registration_date`, `MaLoai`) VALUES
(5, 'iphone', 'Mỹ', 123, '2020-11-11 08:41:26', 1),
(6, 'Xiaomi', 'china', 121113, '2020-11-11 08:41:26', 1),
(7, 'Sam Sung', 'Hàn', 123, '2020-11-11 08:41:26', 1),
(8, 'Dell', 'Mỹ', 191918171, '2020-11-11 08:51:17', 2);

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
  `DaBan` int(11) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `MaNSX`, `MaLoai`, `GiaBan`, `ChiTiet`, `Anh`, `DaBan`, `registration_date`) VALUES
(13, 'iPhone 11 Chính hãng', 5, 1, 17700000, 'iPhone 11 chính hãng VN/A – Chiếc điện thoại nhiều màu sắc, camera nâng cấp\r\niPhone 11 là model có nhiều màu sắc nhất và có giá rẻ nhất trong bộ 3 iPhone 11 series được Apple ra mắt trong năm 2019. Bên cạnh đó, cấu hình iPhone 11 cũng được nâng cấp đặc biệt về cụm camera sau và Face ID, viên pin dung lượng lớn hơn.Đa dạng sự lựa chọn với 6 phiên bản màu sắc\r\nĐiểm nổi bật của iPhone 11 2019 đó là bên cạnh hai phiên bản đen và trắng quen thuộc thì máy còn có thêm bốn phiên bản khác đó là tím, vàng, xanh lá, đỏ. Với tất cả các phiên bản, bao gồm cả điện thoại iPhone 12 sắp ra mắt thì Apple đều thiết kế cạnh bên trùng màu với thân máy, tạo nên một thể thống nhất.Việc sử dụng mặt lưng kính cũng giúp cho máy có khả năng sạc không dây. Bên cạnh đó, máy còn rất bền vững nhờ khả năng chống nước, cho phép người dùng nhúng nước sâu hơn (2m so với 1,5 đúng chuẩn) trong thời gian 30 phút ở độ sâu 4m.Nhận diện khuôn mặt Face ID được nâng cấp, âm thanh sống động\r\nBảo mật đơn giản và an toàn hơn bao giờ hết khi mật khẩu chính là khuôn mặt của bạn. Bạn có thể mở khóa iPhone, đăng nhập vào ứng dụng hay thanh toán chỉ trong nháy mắt mà không cần nhập mật khẩu. Đây là phương thức bảo mật an toàn nhất trên smartphone và nó còn nhanh hơn nữa trên iPhone 11.Một trong những thay đổi tuy không hào nhoáng nhưng lại rất được quan tâm trên thế hệ iPhone 11 mới chính là sim kép. Apple cũng không quên chăm chút cho điện thoại một hệ thống âm thanh chất lượng hơn đến từ việc tinh chỉnh và nâng cấp dải âm sao cho rộng và chi tiết hơn.Màn hình LCD 6,1 inch Liquid Retina cho màu sắc vô cùng chân thực\r\niPhone 11 sử dụng màn hình LCD tiên tiến nhất hiện nay, cũng tương tự như iPhone 11 Pro hiển thị tuyệt đẹp với kích thước lớn 6,1 inch Liquid Retina sắc nét, tràn viền cạnh. Thiết kế tràn viền giúp cho dù màn hình lớn tới 6,1 inch nhưng máy vẫn nhỏ gọn hơn so với iPhone 8 Plus, dễ dàng cầm nắm thao tác bằng một tay.', '[\"19859551595fabaa2b898b67.25890727.jpg\",\"7298316815fabaa2b89c9e8.22954149.jpg\",\"11265468415fabaa2b8a0869.02430942.jpg\",\"5811125945fabaa2b8a46e5.15563033.jpg\",\"3405974905fabaa2b8a8566.09180517.jpg\",\"8229018155fabaa2b8ac3e8.37214470.jpg\"]', 0, '2020-11-11 09:08:59'),
(14, 'Apple iPhone 7 Plus 128GB Chính hãng', 5, 1, 10000000, 'iPhone 7 Plus 128GB với thiết kế không quá nhiều thay đổi, vẫn bảo tồn vẻ đẹp truyền thống từ thời iPhone 6 Plus. Tuy nhiên, phần cứng iPhone 7 Plus đã được nâng cấp đáng kể như camera kép cùng cấu hình cực mạnh.\r\n\r\nTại sao iPhone 7 Plus 128Gb VN/A là sự lựa chọn tốt nhất\r\nĐây là những chiếc iPhone 7 Plus 128GB được sản xuất dành riêng cho thị trường Việt Nam (mã VN/A) được CellphoneS phân phối dưới hình thức máy mới, chính hãng 100%, thích hợp cho người có nhu cầu tìm mua 1 chiếc điện thoại để sử dụng lâu dài do nền tảng hệ điều hành iOS mang lại.Tại thị trường Việt Nam đang lưu hành nhiều dòng iPhone như iPhone chính hãng mã VN/A, các dòng iPhone xách tay LL/A, ZP/A, iPhone hàng CPO, lock, … Tuy nhiên, tại Việt Nam, iPhone chính hãng mã VN/A luôn là sự lựa chọn tốt nhất cho người dùng bởi những lý do dưới đây:\r\n\r\n- Do đây là mã dành riêng cho thị trường Việt Nam nên cấu hình, chức năng của máy sẽ đảm bảo cho khách hàng tại đây có được trải nghiệm tốt nhất.\r\n\r\n- Củ sạc kèm máy là loại sạc dài, chân tròn, tương thích tốt với các ổ cắm tại Việt Nam\r\n\r\n- Với chế độ bảo hành chính hãng 1 đổi 1 trong 12 tháng, khách hàng sẽ an tâm hơn trong việc sử dụng máy nếu lỡ có xảy ra trục trặc. Do việc bảo hành iPhone xách tay khá rắc rối nên sẽ không đảm bảo trải nghiệm khách hàng luôn ở mức cao nhất.\r\n\r\nBộ nhớ trong trên iPhone 7 Plus 128GB được nâng cấp đáng kể\r\nVới bộ nhớ được nâng cấp lên 128Gb, iPhone 7 Plus 128Gb xóa tan nỗi lo cạn kiệt bộ nhớ của bạn, giúp bạn thỏa sức chụp ảnh, quay phim cùng trải nghiệm những tựa game mới nhất một cách thoải mái mà không phải lo lắng đến việc thiếu hụt bộ nhớ cho các nhu cầu phát sinh sau này.', '[\"15599726225fabac0fde3058.22685920.jpg\",\"3189027275fabac0fde6ed7.89637316.jpg\",\"12943324485fabac0fdead53.04155123.jpg\",\"7757617685fabac0fdeebd2.05644219.jpg\"]', 0, '2020-11-11 09:17:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `idTheLoai` int(10) NOT NULL,
  `TenTheLoai` varchar(250) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`idTheLoai`, `TenTheLoai`, `date_time`) VALUES
(1, 'Tin Công Nghê', '2020-10-25 15:21:44'),
(2, 'Hướng Dẫn', '2020-10-25 15:22:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `idTinTuc` int(10) NOT NULL,
  `idLoaiTin` int(10) NOT NULL,
  `TieuDe` varchar(250) NOT NULL,
  `TomTat` text NOT NULL,
  `NoiDung` text NOT NULL,
  `Anh` text NOT NULL,
  `noibat` varchar(250) NOT NULL,
  `views` bigint(20) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`idTinTuc`, `idLoaiTin`, `TieuDe`, `TomTat`, `NoiDung`, `Anh`, `noibat`, `views`, `date_time`) VALUES
(1, 1, 'LG Q52 ra mắt với màn hình nốt ruồi 6.6 inch, 4 camera 48MP, giá bán gần 7 triệu đồng', 'LG mới đây đã chính thức ra mắt LG Q52 tại thị trường Hàn Quốc, và như tên gọi của máy, đây là phiên bản kế nhiệm của LG Q51 ra mắt vào đầu năm nay.', 'LG mới đây đã chính thức ra mắt LG Q52 tại thị trường Hàn Quốc, và như tên gọi của máy, đây là phiên bản kế nhiệm của LG Q51 ra mắt vào đầu năm nay.LG Q52 đạt chứng nhận độ bền quân đội MIL-STD-810G, máy có kích thước 160 x 76.7 x 8.4mm, màn hình IPS LCD 6.6 inch HD+ với 1 lỗ khoét ở giữa viền cạnh trên chứa camera selfie 13MP.Mặt sau của LG Q52 làm bằng polycarbonate, có lớp phủ bóng mờ để chống bám dấu vân tay. Bộ 4 camera sau của LG Q52 gồm: Camera chính 48MP, camera góc siêu rộng 8MP, camera macro 2MP và cảm biến độ sâu 2MP.LG Q52 sử dụng chip Helio P35 (model tiền nhiệm LG Q51 dùng chip Helio P22), bộ nhớ RAM 4GB và bộ nhớ trong 64GB, có khe cắm thẻ nhớ microSD. Smartphone này có pin 4,000 mAh nhưng chưa rõ tốc độ sạc là bao nhiêu.', '[\"14500737315f967d0ee2aa77.33978730.jpg\",\"19247383895f967d0ee2e8f7.49108891.jpg\"]', '', 12, '2020-10-26 07:38:54'),
(2, 1, 'Trên tay Vsmart Aris Pro: Smartphone màn hình “vô khuyết”, có camera selfie ẩn dưới màn hình đầu tiên Việt Nam', 'Sau hơn một tháng ra mắt, Vsmart ngày hôm nay cũng đã chính thức bán ra chiếc Aris Pro, chiếc smartphone thương hiệu Việt được mong chờ nhất trong thời gian vừa qua. Vsmart Aris Pro được đánh giá là một trong những chiếc smartphone đánh dấu cột mốc phát triển của ngành công nghiệp sản xuất smartphone của người Việt, bởi đây là một trong những chiếc máy đầu tiên trên thế giới được trang bị công nghệ camera ẩn dưới màn hình hoàn toàn mới.', 'Sau hơn một tháng ra mắt, Vsmart ngày hôm nay cũng đã chính thức bán ra chiếc Aris Pro, chiếc smartphone thương hiệu Việt được mong chờ nhất trong thời gian vừa qua. Vsmart Aris Pro được đánh giá là một trong những chiếc smartphone đánh dấu cột mốc phát triển của ngành công nghiệp sản xuất smartphone của người Việt, bởi đây là một trong những chiếc máy đầu tiên trên thế giới được trang bị công nghệ camera ẩn dưới màn hình hoàn toàn mới.Với Aris Pro, Vsmart cho biết hãng đã sử dụng công nghệ xử lý hình ảnh bằng AI nhằm cải thiện chất lượng của công nghệ camera vẫn còn đang tương đối mới mẻ này. Cùng Sforum trên tay chiếc smartphone mới nhất của Vsmart để xem xem liệu những nâng cấp của Aris Pro có thực sự hấp dẫn?Nhìn chung vỏ hộp và cách đóng gói của Vsmart Aris Pro vẫn tương tự như phiên bản Aris thường và các dòng điện thoại Vsmart khác. Máy vẫn đi kèm củ sạc nhanh 18W, cáp sạc USB-C, tai nghe 3.5mm và người dùng Aris cũng được tặng kèm thêm một miếng dán màn hình kháng khuẩn.', '[\"7031998335f968450ecfba4.58802234.jpg\",\"10724075385f968450ed3a21.07284875.jpg\"]', '', 15, '2020-10-26 08:09:52'),
(3, 1, 'Nên chọn iPhone 12 Pro hay iPhone 12 Pro Max: Khi khác biệt không chỉ là kích thước', 'Bên cạnh khác biệt về kích thước máy, kích thước màn hình và dung lượng pin thì iPhone 12 Pro và iPhone 12 Pro Max còn một vài điểm khác biệt khác khiến bạn có thể phải chân nhắc khi lựa chọn một trong hai chiếc iPhone cao cấp nhất năm nay.Sự khác biệt lớn nhất đến từ kích thước màn hình, iPhone 12 Pro sở hữu màn hình 6.1 inch tương đương với iPhone 12, trong khi đó iPhone 12 Pro Max là 6.7 inch, lớn hơn khá nhiều. Bây giờ chúng ta sẽ đi so sánh chi tiết hơn về bộ đôi iPhone cao cấp này để xem đâu mới thực sự là lựa chọn hấp dẫn', 'Sự khác biệt lớn nhất đến từ kích thước màn hình, iPhone 12 Pro sở hữu màn hình 6.1 inch tương đương với iPhone 12, trong khi đó iPhone 12 Pro Max là 6.7 inch, lớn hơn khá nhiều. Bây giờ chúng ta sẽ đi so sánh chi tiết hơn về bộ đôi iPhone cao cấp này để xem đâu mới thực sự là lựa chọn hấp dẫn.iPhone 12 Pro và iPhone 12 Pro Max giống hệt nhau về hiệu suất bộ xử lý. Cả hai thiết bị đều được trang bị A14 Bionic mới nhất, được Apple gọi là “bộ xử lý nhanh nhất trong smartphone”. Cả iPhone 12 Pro và iPhone 12 Pro Max cũng có Neural Engine mới nhất để cải thiện các tính năng và khả năng học máy. Apple cho biết Neural Engine 16 nhân mới mang lại hiệu suất tăng 80% so với thế hệ trước. Bạn cũng nhận được 6GB RAM trên cả hai thiết bị, cao hơn so với 4GB RAM mà Apple đã sử dụng trong iPhone 11 Pro và iPhone 11 Pro Max.iPhone 12 series là dòng iPhone đầu tiên có kết nối 5G. Apple cung cấp cả phiên bản hỗ trợ 5G Sub-6GHz và mmWave, tuy nhiên hiện tại model 5G mmWave chỉ cung cấp tại Hoa Kỳ và trên thực tế công nghệ 5G cũng chưa phổ biến trên thế giới.Trên iPhone 11 Pro và iPhone 11 Pro Max năm ngoái không có sự khác biệt nào về camera. Nhưng năm nay Apple đã mang đến sự khác biệt về camera trên hai mẫu iPhone cao cấp.  Cả iPhone 12 Pro và iPhone 12 Pro Max đều có 3 camera ở mặt sau với ống kính siêu rộng, góc rộng và ống kính tele 12MP. Tất cả các camera này đều nhận được các tính năng Night mode, Deep Fusion, Apple ProRAW.', '[\"12026612575f97c9429cbb38.97932773.jpg\",\"3824020275f97c9429cf9b1.86068848.png\"]', '', 32, '2020-10-27 07:16:18'),
(4, 1, 'Trên tay Xiaomi Mi 10T Pro: Smartphone hot nhất phân khúc cận cao cấp!', 'Xiaomi Mi 10T Pro đang là một trong những chiếc smartphone hot nhất phân khúc cận cao cấp khi sở hữu cấu hình khủng, camera tốt, màn hình 144Hz siêu mượt cùng mức giá vô cùng hợp lý.Về hiệu năng, Xiaomi Mi 10T Pro được trang bị con chip Snapdragon 865, vẫn là con chip mạnh mẽ nhất ở thời điểm hiện tại chỉ sau Snapdragon 865+, RAM 8GB và bộ nhớ 128GB/256GB, do đó người dùng sẽ không cần phải lo lắng về hiệu năng của máy. Kết hợp với màn hình 144Hz, trải nghiệm sử dụng sẽ vô cùng mượt mà. Mi 10T Pro được trang bị viên pin dung lượng 5000mAh, hỗ trợ sạc nhanh 33W, không phải nhanh nhất, tuy nhiên vẫn cho tốc độ sạc nhanh đáng kể.Hiện tại, Xiaomi Mi 10T Pro đang được bán ra với mức giá từ 11,990,000 đồng cho tùy chọn bộ nhớ 128GB, phiên bản 256GB sẽ có giá 12,990,000 đồng cao hơn một chút. Bạn đọc quan tâm tới sản phẩm có thể tham khảo mức giá đang cực kỳ hấp dẫn tại hệ thống cửa hàng CellphoneS ở đường dẫn dưới đây.', 'Ở thời điểm hiện tại, xét trong phân khúc smartphone có tỷ lệ hiệu năng trên giá thành tốt nhất mà người dùng có thể tìm kiếm được, Xiaomi tiếp tục là một cái tên được người dùng để ý tới. Hãng mới đây đã cho ra mắt chiếc Xiaomi Mi 10T Pro tại thị trường Việt Nam. Với mức giá niêm yết chỉ từ 11.9 triệu đồng, Mi 10T Pro hiện đang là chiếc smartphone cân bằng được các yếu tố phần cứng tốt nhất.Phiên bản mà Sforum đang có ngày hôm nay là bản màu Bạc Ánh Trăng (Lunar Silver), tùy chọn bộ nhớ 8GB + 128GB, ngoài ra máy còn có thêm các màu sắc khác như Đen Vũ Trụ (Cosmic Black) và màu xanh Aurora (Aurora Blue), kèm theo đó là dung lượng 12GB + 256GB.Mặt lưng của Mi 10T Pro nổi bật với cụm camera khá lớn có cách thiết kế đặc trưng, được đặt trong một mô-đun hình chữ nhật ở góc trái. Cụm camera này bao gồm một camera chính có độ phân giải 108MP, sử dụng chung cảm biến với Mi 10 / Mi 10 Pro, ngoài ra máy còn có thêm một camera góc siêu rộng 13MP f/2.4 và một camera macro 5MP f/2.4. Mặc dù thiếu đi camera tele tuy nhiên người dùng có thể chụp 2x bằng camera 108MP mà chất lượng không bị giảm đi quá nhiều. Do có cảm biến lớn nên cụm camera của máy cũng khá lồ. Máy cũng có thêm camera selfie 20MP ở mặt trước.Sang tới mặt trước, Mi 10T Pro được trang bị một màn hình “nốt ruồi” kích thước 6,67 inch, tấm nền IPS LCD có độ phân giải Full HD+ và tần số quét lớn lên tới 144Hz. Màn hình này theo Xiaomi công bố thì nó sẽ hỗ trợ công nghệ AdaptiveSync và MEMC cho phép tự động nâng mức fps của các nội dung hiển thị ở mức khung hình thấp. Ngoài ra, màn hình của Mi 10T/10T Pro cũng hỗ trợ chuẩn HDR10 và dải màu DCI-P3', '[\"6283683165f97c9d46b0264.88747021.jpg\",\"14796369195f97c9d46b40e6.96857813.jpg\"]', '', 88, '2020-10-27 07:18:44'),
(5, 1, 'Đã có danh sách smartphone chơi được LMHT: Tốc Chiến, iPhone 5s từ 2013 vẫn chơi được', 'trong nỗ lực phổ cập tựa game mới của mình tới nhiều người dùng hơn, Riot Games đã cho phép những chiếc máy có tuổi đời lên tới 7 năm vẫn có thể chơi được tựa game này.', 'Hiện tại, tựa game Liên Minh Huyền Thoại: Tốc Chiến đã chính thức mở cửa server Open Beta. Server mới cho phép toàn bộ các game thủ ở các khu vực được hỗ trợ có thể đăng nhập và trải nghiệm ngay lập tức tựa game này mà không cần phải đăng ký trước như đợt Closed Beta. Các khu vực được phép tham gia vào server Open Beta bao gồm: Hàn Quốc, Nhật Bản, Philippines, Singapore, Malaysia, Indonesia, Thái Lan.Theo như trang mô tả của App Store thì các thiết bị sau sẽ có thể tải về và chơi được tựa game Liên Minh: Tốc chiến mới.\r\n\r\niPhone: từ 5S trở lên\r\niPad: từ iPad 5/iPad mini 3 trở lên và tất cả các dòng iPad Air/iPad Pro\r\niPod touch: iPod touch 6 trở lên\r\niOS: 10.0 trở lên\r\nNhư vậy chúng ta có thể thấy ngay cả chiếc iPhone 5s ra mắt từ năm 2013, hiện tại đã 7 năm tuổi và đã không còn được hỗ trợ bởi Apple từ quá lâu vẫn có thể tải về và trải nghiệm tựa game LMHT: Tốc Chiến. Chỉ cần yêu cầu iOS 10.0 trở lên là có thể tải về được rồi.\r\n\r\nVới nền tảng Android, Riot Games khuyến cáo cấu hình tối thiểu sử dụng hệ điều hành Android 4.4 hoặc cao hơn, RAM 1,5GB, chip xử lý 1,5 GHz (32 bit hoặc 64 bit) và vi xử lý đồ họa PowerVR GT7,Mặc dù vậy, trong đợt mở cửa server Open Beta lần này, game thủ Việt không nằm trong danh sách trải nghiệm, tuy nhiên trong thời gian tới Riot Games sẽ sớm mở cửa thêm nhiều cụm server hơn để các game thủ trên toàn thế giới có thể được trải nghiệm tựa game siêu hot này.', '[\"11954352275f9bbeed6240a1.19726402.jpg\",\"10964933585f9bbeed63b7b1.72673634.jpg\"]', '', 5, '2020-10-30 07:21:17'),
(6, 5, 'Trải nghiệm tính năng gộp chung tin nhắn Messenger và Instagram của Facebook', 'Sau nhiều ngày chờ đợi, chính thức từ hôm nay, 27/10/2020 bạn đã có thể trải nghiệm tính năng gộp chung tin nhắn Messenger và Instagram của Facebook.Trước đó, vào ngày 14/08/2020, một số người dùng tại Mỹ đã được nhận được bản cập nhật của Instagram trên 2 hệ điều hành iOS và Android. Bản cập nhật kèm nội dung ” There’s a New Way to Message on Instagram (Có cách thức mới để nhắn tin trên Instagram)”.', 'Trên thanh tìm kiếm trong khung chat của Instagram, bạn chỉ cần tìm kiếm tên tài khoản Facebook của người bạn muốn liên lạc và tiến hành chat như thông thường. Giao diện chat là giao diện “lai” giữa giao diện chat của Instagram và Messenger nhưng không có tính năng Video Call. Tuy nhiên, ở hiện tại, bạn chỉ có thể gửi tin nhắn từ Instagram đến Messenger mà không thể thực hiện được thao tác ngược lại.Nội dung giữa các mục tin nhắn là hoàn toàn độc lập, không tích hợp nội dung chung với nhau. Lúc này bạn sẽ có 4 khung chat giữa 2 người: Tin nhắn gốc Messenger, Tin nhắn gốc Instagram, Tin nhắn từ Instagram sang Messenger mình gửi đi, Tin nhắn từ Instagram sang Messenger người nhận gửi đi.Tin nhắn bạn gửi đi sẽ được nhắn từ Instagram và người trả lời sẽ sử dụng Messenger để trả lời.Nếu như bạn cảm thấy tính năng này “phiền phức” hãy tắt chế độ Sync Profile Name and Photo (Đồng bộ tên tài khoản và Ảnh) hoặc Skip (Bỏ qua) giữa Instagram và Messenger là được!,Việc gộp tính năng chung tin nhắn Messenger và Instagram như một làn gió mới đến với người dùng Facebook. Hãy thử và chia sẻ những trải nghiệm trong quá trình sử dụng tính năng mới này với Sforum.vn nhé!Trên thanh tìm kiếm trong khung chat của Instagram, bạn chỉ cần tìm kiếm tên tài khoản Facebook của người bạn muốn liên lạc và tiến hành chat như thông thường. Giao diện chat là giao diện “lai” giữa giao diện chat của Instagram và Messenger nhưng không có tính năng Video Call. Tuy nhiên, ở hiện tại, bạn chỉ có thể gửi tin nhắn từ Instagram đến Messenger mà không thể thực hiện được thao tác ngược lại.', '[\"14972378005f9bc064abda43.65007942.png\",\"11935353395f9bc064ac18c1.75556862.png\"]', '', 0, '2020-10-30 07:27:32'),
(7, 5, 'Hướng dẫn thao tác một tay cực dễ dàng trên iOS', 'Đôi khi bạn đang bận và không thể sử dụng iPhone bằng hai tay được. Điều này sẽ đồng nghĩa với việc các thao tác trên điện thoại của bạn sẽ bị hạn chế khá nhiều, ví dụ như chạm và thao tác với các ứng dụng trên cùng của màn hình. Vậy phải làm sao trong trường hợp này?', 'Tính năng “Tầm với” trên iOS cho phép người dùng thu hẹp lại không gian màn hình chính xuống nửa dưới, giúp bạn dễ dàng thao tác hơn khi chỉ có thể sử dụng điện thoại bằng một tay.\r\nThao tác một tay cực dễ dàng trên iOS\r\nBước 1: Bạn vào Cài đặt > Trợ năng > Cảm ứng. Tại đây, bạn chọn Tầm với > Bật.\r\nBước 2: Quay trở về màn hình chính. Khi bạn muốn thu hẹp màn hình chính xuống bên dưới, bạn hãy vuốt nhanh màn hình từ trên xuống dưới. Màn hình chính sẽ được “kéo” xuống như hình bên dưới.Bước 3: Khi bạn muốn quay trở lại chế độ bình thường, bạn chỉ cần chạm vào khoảng trống ở phía trên cùng của màn hình là được.Tạm kết:\r\nVới tính năng nhỏ cực hay ho này, bạn đã có thể dễ dàng sử dụng và thao tác trên chiếc iPhone của mình chỉ với một tay rồi đấy. Nếu bạn sử dụng những máy iPhone có touch ID, bạn vẫn có thể bật tính năng này theo hướng dẫn trên và chạm 2 lần vào nút home cảm ứng thay vì vuốt xuống như những dòng máy không có nút home. Chúc bạn thành công.', '[\"1113666265f9bc146074648.34011184.jpg\",\"4937057495f9bc1460784c0.70849347.jpg\"]', '', 4, '2020-10-30 07:31:18'),
(8, 1, 'Có nên nâng cấp từ iPhone 7 lên iPhone 12 mini?', 'Sau nhiều ngày chờ đợi, Apple cuối cùng đã ra mắt iPhone 12 mini, chiếc iPhone nhỏ gọn nhất trong thế hệ iPhone 12 năm nay.\r\nNếu bạn vẫn giữ iPhone 7 của mình vì những chiếc iPhone mới hơn quá lớn thì iPhone 12 mini là giải pháp của Apple cho vấn đề này. Ngoài ra, nếu bạn đang tự hỏi liệu iPhone 12 mini có đáng để nâng cấp từ iPhone 7 hay không thì hãy đọc bài viết dưới đây.', 'Thiết kế\r\niPhone 7 – 138.3 x 67.1 x 7.1 mm, nặng 138g, kháng nước IP67\r\niPhone 12 mini – 131.5 x 64.2 x 7.4 mm, nặng 135g, kháng nước IP68\r\nNếu bạn vẫn đang xài chiếc iPhone 7 vì kiểu dáng nhỏ gọn của nó, bạn sẽ yêu thích iPhone 12 mini. Mặc dù có bộ vi xử lý tốt hơn, màn hình lớn hơn, máy ảnh cải tiến và Face ID, iPhone 12 mini lại nhẹ hơn và nhỏ gọn hơn iPhone 7.\r\n\r\nĐó là chưa kể, iPhone 12 mini có thiết kế hiện đại hơn nhiều với viền mỏng hơn và đi kèm rất nhiều tùy chọn màu sắc trẻ trung.\r\nMàn hình\r\niPhone 7 – Tấm nền IPS LCD True Tone 4.7 inch Retina HD (1,334 x 750 pixel), 326 ppi, 3D Touch\r\niPhone 12 mini – Màn hình Super Retina XDR 5,4 inch, 2,340 x 1,180 pixel, 476 ppi, Haptic Touch, HDR Display, True Tone, HDR10, Dolby Vision\r\nMặc dù có kích thước tổng thể nhỏ hơn, iPhone 12 mini đi kèm với màn hình lớn hơn 0.7 inch so với iPhone 7. Đây cũng là tấm nền OLED có độ phân giải cao hơn mang lại tỷ lệ tương phản tốt hơn và hỗ trợ HDR, Dolby Vision và True Tone. Không có 3D Touch trên màn hình Super Retina XDR của iPhone 12 Mini, tuy nhiên bù lại chúng ta đã có Face ID.\r\nBộ xử lý\r\niPhone 7 – A10 Bionic, chip 10nm, CPU 6 lõi, GPU 4 lõi\r\niPhone 12 mini – A14 Bionic, chip 5nm, 16 lõi Neural engine\r\nHiện tại, chip Apple A10 Fusion bên trong iPhone 7 vẫn có thể xử lý tốt các tác vụ thường ngày của người dùng. Tuy nhiên, khi so sánh thì chip Apple A14 Bionic trên iPhone 12 mini lại ở một “đẳng cấp” hoàn toàn khác. Nó không chỉ mạnh hơn đáng kể mà còn tiết kiệm năng lượng hơn. Trên thực tế, đây là CPU và GPU nhanh nhất bạn sẽ tìm thấy bên trong điện thoại thông minh.\r\n\r\nKhi sử dụng hàng ngày, iPhone 7 thể hoạt động tốt nhưng máy bắt đầu có hiện tượng lag, giật khi chạy các tựa game đồ họa nặng. iPhone 12 mini cũng có nhiều RAM hơn nên khả năng đa nhiệm của máy cũng tốt hơn đáng kể so với “người đàn anh”\r\nBộ nhớ\r\niPhone 7 – 32GB, 128GB, RAM 2GB\r\niPhone 12 mini – 64GB, 128GB, 256GB, RAM 4GB\r\nBiến thể cơ bản của iPhone 7 xuất xưởng với bộ nhớ trong 32GB trong khi con số này trên iPhone 12 mini có bộ nhớ trong 64GB. Bên cạnh đó, dung lượng lưu trữ tối đa của iPhone 12 mini còn lên đến 256GB, gấp đôi so với 128GB của iPhone 7. Quan trọng hơn, iPhone 12 mini có dung lượng RAM gấp đôi iPhone 7, cho phép máy chạy mượt mà các ứng dụng và game nặng.\r\n\r\nMáy ảnh\r\niPhone 7 – Thiết lập camera sau đơn 12MP với khẩu độ f/1.8, OIS, HDR tự động, đèn flash True Tone Quad-LED; Mặt trước: Camera FaceTime HD 7MP, khẩu độ f/2.2, đèn Flash Retina\r\niPhone 12 mini – Thiết lập camera kép 12MP với khẩu độ f/1.6 và f/2.4, pixel lớn 1,4um, OIS, Smart HDR 3, Focus Pixels, chế độ chân dung với điều khiển độ sâu và bokeh nâng cao, đèn flash True Tone sáng hơn, chế độ ban đêm, chế độ ban đêm Time-lapse; Mặt trước: Camera FaceTime HD 12MP, khẩu độ f/2.2, Retina Flash, chế độ ban đêm, Deep Fusion\r\nKhi so sánh thiết lập camera của iPhone 7 với iPhone 12 mini, không có gì phải bàn cãi, iPhone 7 hoàn toàn lép vế so với đàn em của mình. Điều này cho thấy nhiếp ảnh di động đã phát triển như thế nào trong những năm gần đây.\r\n\r\nCả hai điện thoại đều có cùng độ phân giải camera sau 12MP, nhưng iPhone 12 mini có cảm biến lớn và tốt hơn cùng với kích thước điểm ảnh lớn cũng như khẩu độ lớn hơn, cho phép nó chụp ảnh với dải tương phản động tốt hơn và thu được nhiều ánh sáng hơn. Thuật toán xử lý ảnh cũng được cải thiện nhờ Smart HDR 3 và Deep Fusion.\r\n\r\niPhone 12 mini cũng có hỗ trợ chế độ ban đêm cho tất cả các máy ảnh của nó – một tính năng còn thiếu trên iPhone 7. Chiếc iPhone mới cũng có một camera góc siêu rộng 12MP thứ cấp cho phép chụp ảnh với một góc nhìn hoàn toàn khác.\r\n\r\niPhone 12 mini cũng có camera trước tốt hơn, không chỉ có độ phân giải cao hơn mà nó còn được hỗ trợ chế độ Deep Fusion, Night Mode và Portrait.', '[\"20776132915f9bc23d816217.29518874.png\",\"2796789155f9bc23dcfc1b1.69861977.jpg\"]', '', 7, '2020-10-30 07:35:25');

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
(16, 'Triệu Vân', 'trieuvan@gmail.com', '202cb962ac59075b964b07152d234b70', 'China', 121212, '2020-09-29 08:28:21'),
(19, 'Lộc Ngu', 'loc@gmail.com', '202cb962ac59075b964b07152d234b70', '141 chiến thắng văn quán Hà Đông Hà Nội', 100212121, '2020-10-12 12:19:54'),
(21, 'Trương Phi', 'truongphi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'ChiNa', 113, '2020-10-18 06:19:40'),
(22, 'Hoàng Trung', 'hoangtrung@gmail.com', '202cb962ac59075b964b07152d234b70', 'China', 212121, '2020-10-19 03:07:31'),
(23, 'admin', 'admin$$$%%%^^^&@gmail.com', '202cb962ac59075b964b07152d234b70', 'china', 363101188, '2020-10-26 12:27:22'),
(24, 'Tào Tháo', 'taothao@gmail.com', '202cb962ac59075b964b07152d234b70', 'China', 363101176, '2020-11-03 09:25:23');

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
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`idCMM`),
  ADD KEY `fk_12121` (`idTinTuc`);

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
-- Chỉ mục cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`idLoaiTin`),
  ADD KEY `fk_1223` (`idTheLoai`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`MaNSX`),
  ADD KEY `fk_32asa` (`MaLoai`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `fk_1` (`MaNSX`),
  ADD KEY `fk_2` (`MaLoai`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`idTheLoai`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`idTinTuc`),
  ADD KEY `fk_12113` (`idLoaiTin`);

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
  MODIFY `MaBN` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `idCMM` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `donhangphu1`
--
ALTER TABLE `donhangphu1`
  MODIFY `id_dhphu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `MaLoai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `idLoaiTin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `MaNSX` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `idTheLoai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `idTinTuc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `MaKH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_12121` FOREIGN KEY (`idTinTuc`) REFERENCES `tintuc` (`idTinTuc`);

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
-- Các ràng buộc cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  ADD CONSTRAINT `fk_1223` FOREIGN KEY (`idTheLoai`) REFERENCES `theloai` (`idTheLoai`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD CONSTRAINT `fk_32asa` FOREIGN KEY (`MaLoai`) REFERENCES `loai` (`MaLoai`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`MaNSX`) REFERENCES `nhasanxuat` (`MaNSX`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_2` FOREIGN KEY (`MaLoai`) REFERENCES `loai` (`MaLoai`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `fk_12113` FOREIGN KEY (`idLoaiTin`) REFERENCES `loaitin` (`idLoaiTin`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
