-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2020 lúc 05:32 PM
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
(5, 'ABC', 'FALSE', '2804239275f74125a6e2ce5.23199311.jpg', '2020-09-30 05:06:34'),
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

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `MaKH`, `note`, `DiaChiNhan`, `total`, `SDT`, `register_date`) VALUES
(7, 15, 'giao nhanh lên', 'Thái Nguyên', 130500000, 121212, '2020-11-15 12:29:51'),
(8, 24, 'nhanh nhẹn lên', 'China', 242230000, 100212121, '2020-11-20 08:45:21');

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

--
-- Đang đổ dữ liệu cho bảng `donhangphu1`
--

INSERT INTO `donhangphu1` (`id_dhphu`, `id`, `MaSP`, `quantity`, `price`, `TrangThai`) VALUES
(11, 7, 13, 2, 17700000, 'Thành Công'),
(12, 7, 14, 3, 10000000, 'Thành Công'),
(13, 7, 15, 3, 21700000, 'Thành Công'),
(14, 8, 14, 4, 10000000, 'Thành Công'),
(15, 8, 29, 7, 28890000, 'Thành Công');

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
(3, 'Đồng Hồ', '2020-11-13 01:41:22');

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
(8, 'Dell', 'Mỹ', 191918171, '2020-11-11 08:51:17', 2),
(9, 'MacBook', 'Mỹ', 11112, '2020-11-11 15:42:17', 2),
(10, 'Asus', 'Hàn Quốc', 1121212, '2020-11-11 15:43:27', 2),
(11, 'Apple Watch', 'Mỹ', 100212121, '2020-11-13 01:42:04', 3),
(12, 'Huawei', 'China', 114, '2020-11-13 01:42:40', 3);

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
(14, 'Apple iPhone 7 Plus 128GB Chính hãng', 5, 1, 10000000, 'iPhone 7 Plus 128GB với thiết kế không quá nhiều thay đổi, vẫn bảo tồn vẻ đẹp truyền thống từ thời iPhone 6 Plus. Tuy nhiên, phần cứng iPhone 7 Plus đã được nâng cấp đáng kể như camera kép cùng cấu hình cực mạnh.\r\n\r\nTại sao iPhone 7 Plus 128Gb VN/A là sự lựa chọn tốt nhất\r\nĐây là những chiếc iPhone 7 Plus 128GB được sản xuất dành riêng cho thị trường Việt Nam (mã VN/A) được CellphoneS phân phối dưới hình thức máy mới, chính hãng 100%, thích hợp cho người có nhu cầu tìm mua 1 chiếc điện thoại để sử dụng lâu dài do nền tảng hệ điều hành iOS mang lại.Tại thị trường Việt Nam đang lưu hành nhiều dòng iPhone như iPhone chính hãng mã VN/A, các dòng iPhone xách tay LL/A, ZP/A, iPhone hàng CPO, lock, … Tuy nhiên, tại Việt Nam, iPhone chính hãng mã VN/A luôn là sự lựa chọn tốt nhất cho người dùng bởi những lý do dưới đây:\r\n\r\n- Do đây là mã dành riêng cho thị trường Việt Nam nên cấu hình, chức năng của máy sẽ đảm bảo cho khách hàng tại đây có được trải nghiệm tốt nhất.\r\n\r\n- Củ sạc kèm máy là loại sạc dài, chân tròn, tương thích tốt với các ổ cắm tại Việt Nam\r\n\r\n- Với chế độ bảo hành chính hãng 1 đổi 1 trong 12 tháng, khách hàng sẽ an tâm hơn trong việc sử dụng máy nếu lỡ có xảy ra trục trặc. Do việc bảo hành iPhone xách tay khá rắc rối nên sẽ không đảm bảo trải nghiệm khách hàng luôn ở mức cao nhất.\r\n\r\nBộ nhớ trong trên iPhone 7 Plus 128GB được nâng cấp đáng kể\r\nVới bộ nhớ được nâng cấp lên 128Gb, iPhone 7 Plus 128Gb xóa tan nỗi lo cạn kiệt bộ nhớ của bạn, giúp bạn thỏa sức chụp ảnh, quay phim cùng trải nghiệm những tựa game mới nhất một cách thoải mái mà không phải lo lắng đến việc thiếu hụt bộ nhớ cho các nhu cầu phát sinh sau này.', '[\"15599726225fabac0fde3058.22685920.jpg\",\"3189027275fabac0fde6ed7.89637316.jpg\",\"12943324485fabac0fdead53.04155123.jpg\",\"7757617685fabac0fdeebd2.05644219.jpg\"]', 0, '2020-11-11 09:17:03'),
(15, 'Samsung Galaxy Note 20 Ultra', 7, 1, 21700000, 'Samsung Note 20 Ultra: Thiết kế sang trọng và nhiều công nghệ cực tốt\r\nSamsung là gã khổng lồ công nghệ cực kỳ nổi tiếng đến từ đất nước Hàn Quốc, mỗi chiếc điện thoại của hãng đều mang thiết kế hiện đại, sang trọng đi kèm với đa dạng công nghệ cực kỳ nổi bật. Note 20 Ultra là một trong những chiếc smartphone nổi tiếng và đang được nhiều người quan tâm, đón nhận. Samsung hứa hẹn sẽ chiều lòng khách hàng với thiết kế lộng lẫy, cùng với vô vàng công nghệ, chip xử lý mới mẻ, thật hiện đại. Ngoài ra, bạn cũng có thể tham khảo thêm Note 20 Ultra 5G.\r\nMàn hình AMOLED cực sống động kèm với hệ điều hành Android, One UI 2.1\r\nĐiều đầu tiên mà chắc hẳn nhiều người sẽ thích thú ở chiếc điện thoại Samsung Galaxy Note 20 Ultra đó chính là sự trang bị màn hình AMOLED. Với Dynamic AMOLED được trang bị lên đến 16M colors, kích thước màn hình lên đến 6.9 inches và độ phân giải Quad-HD+. Tạo ra mọi màu sắc chân thật nhất, sống động và sắc nét cho người dùng trải nghiệm thích thú. \r\nMàn hình AMOLED cực sống động kèm với hệ điều hành Android, One UI 2.1\r\nMáy được cài sẵn hệ điều hành Android. Đây dường như là hệ điều hành thông dụng và được nhiều người sử dụng quen tay nhất. Đi kèm với đó là skin One UI 2.1 dựa trên Android 10, tạo nên nhiều chức năng, công cụ hiện đại có trên chiếc Samsung Galaxy Note này. Trang bị chip Exynos 990 cực kỳ hiện đại cùng với cấu hình CPU nổi bật Điều khiến mọi người bất ngờ nhất trên Samsung Note 20 Ultra đó là chip Exynos 990, mà Samsung đã nghiên cứu và áp dụng ngay trên điện thoại này. Đây dường như là con chip mạnh mẽ và hiện đại bậc nhất, khiến người dùng hoàn toàn hài lòng. Bên cạnh đó là không còn sự hổ thẹn đến từ phía Samsung.\r\nTrang bị chip Exynos 992 cực kỳ hiện đại cùng với cấu hình CPU nổi bật\r\nCấu hình CPU của chiếc điện thoại Samsung Galaxy Note 20 Ultra cũng hoàn toàn nổi bật, khiến người dùng thích thú. Với trang bị CPU 2x 2.84 GHz Dual-core (Cortex-A78), 2x 2.84 GHz (Cortex-X1), 4x 1.8 GHz Quad-core (Cortex-A55) và Mali-G78 GPU hứa hẹn sẽ mang lại sự mượt mà cực ổn định trong lúc chơi game, giải trí. \r\nTrang bị 3 camera sau cuốn hút cùng với camera trước selfie cực kỳ sắc nét\r\nĐương nhiên trên Note 20 Ultra chắc chắn sẽ không thể thiếu ba camera bắt kịp xu hướng. Với sự cuốn hút từ camera cảm biến chính lấy nét bằng laser độ phân giải lên đến 108MP. Tiếp theo là camera siêu rộng 12MP và camera telephoto 12MP. Sự trang bị cực kỳ đầy đủ này hứa hẹn giúp cho người dùng thỏa mãn hết niềm đam mê chụp ảnh của mình.', '[\"6951693245fabfeba095093.17967323.jpg\",\"14525875725fabfeba098f15.30760146.jpg\",\"7599553835fabfeba0a0c19.35161056.jpg\"]', 0, '2020-11-11 15:09:46'),
(16, 'Samsung Galaxy A71', 7, 1, 8150000, 'Samsung A71 – Smartphone tầm trung của Samsung\r\nSamsung Galaxy A71 sẽ là điện thoại giá cả phải chăng của Samsung với mục đích tiếp cận đối tượng rộng hơn. Samsung A71 là sản phẩm thuộc series Samsung Galaxy A với màn hình đục lỗ, cấu hình mạnh mẽ, cụm bốn camera sau chất lượng cao và cùng nhiều công nghệ thời thượng.\r\nSau Galaxy A51 và A71, rất có thể Galaxy A01 sẽ là sản phẩm tiếp theo thuộc dòng Galaxy A 2020 được Samsung trình làng trong thời gian sắp tới.\r\nMàn hình đục lỗ 6,7 inch, Full HD với tấm nền Super AMOLED\r\nGalaxy A71 sở hữu màn hình Super AMOLED Plus 6,7 inch. Có độ phân giải Full HD 1080 x 2400 pixel, 393ppi. Máy cũng được trang bị đầu đọc dấu vân tay dưới màn hình giống như nhiều mẫu smartphone của Samsung đã ra mắt gần đây với tốc độ nhận diện rất nhanh. Cùng với đó là chức năng mở khóa bằng nhận diện khuôn mặt.\r\n\r\nSamsung Galaxy A71 được trang bị màn hình Infinity-O cho tỉ lệ màn hình đạt được tối đa, giúp tăng không gian sử dụng cho người dùng. Với tỉ lệ khung hình 20:9 cho người dùng những trải nghiệm hình ảnh sống động và sắc nét khi xem phim hoặc chơi game. Máy cũng được trang bị kính cường lực Gorilla Glass 3 cho khả năng chịu lực cũng như chống va đập tốt hơn. Samsung A71 sẽ được bán ra với 4 phiên bản màu sắc: đen, trắng, hồng, xanh.\r\n\r\nBộ bốn camera sau với cảm biến chính 64MP\r\nGalaxy A71 sở hữu camera selfie có độ phân giải khủng 32MP cùng đèn LED Flash tự động trợ sáng hỗ trợ selfie trong điều kiện thiếu sáng. Với nhiều tính năng hữu ích như: Sticker hay AR Emoji, hỗ trợ tuyệt vời cho nhu cầu selfie của người dùng.\r\n\r\nSamsung A71 được trang bị bộ bốn camera ở mặt sau với camera chính có độ phân giải 64MP và camera góc siêu rộng có độ phân giải 12MP, ống kính cảm biến độ sâu 5MP và cảm biến Macro 5MP. Với các tính năng như Zoom kỹ thuật số, chạm để lấy nét, Samsung Galaxy A71 sẽ mang đến cho bạn những bức ảnh chuyên nghiệp nhất với chất lượng cao.\r\n\r\nNgoài ra, Galaxy A71 còn cho khả năng quay video chất lượng cao với Super Steady Video.\r\nCon chip Snapdragon 730 cho hiệu năng mạnh mẽ\r\nSamsung Galaxy A71 hoạt động trên hệ điều hành Android 10 cùng One UI 2. Điện thoại được trang bị bộ vi xử lý Octa-core (2x2.2 GHz Kryo 470 Gold & 6x1.8 GHz Kryo 470 Silver).  \r\n\r\nSamsung Galaxy A71 còn được trang bị chipset Snapdragon 730 mới. Cùng với đó là Chip GPU Adreno 618 cho trải nghiệm đồ họa khá tốt, đáp ứng nhu cầu khi chơi những game đồ họa cao. Ngoài ra, Galaxy A71 cũng được hỗ trợ hệ sinh thái thông minh của SamSung như Bixby, Samsung Health,… và được bảo vệ với nên tảng bảo mật Samsung Knox.\r\nRam 4GB, bộ nhớ trong 128GB cùng viên pin 4500 mAh hỗ trợ sạc nhanh 25W\r\nSamsung A71 được trang bị bộ nhớ RAM khổng lồ 8GB giúp tăng tốc độ xử lý của điện thoại. Bộ nhớ trong của máy lên đến 128GB và để có thêm dung lượng lưu trữ, có một khe chuyên dụng để hỗ trợ thẻ nhớ microSD lên tới 512 GB. Đây là dung lượng lưu trữ dồi dào để giữ tất cả dữ liệu bạn cần trên A71.\r\n\r\nGalaxy A71 được Samsung trang bị viên pin 4500 mAh không thể tháo rời cùng với đó là công nghệ sạc nhanh qua cổng USB Type-C lên đến 25W. Với dung lượng pin này bạn sẽ dễ dàng vượt qua một ngày với mức sử dụng bình thường. Hỗ trợ Bluetooth 5.0 và Wi-Fi 802.11 a / b / g / n / ac, GPS, Volte, NFC, giắc cắm 3,5mm và 2 sim nano.3 Mua điện thoại Samsung Galaxy A71 chính hãng, giá tốt nhất tại CellphoneS Nếu đang có nhu cầu sở hữu Samsung Galaxy A71 chính hãng, bạn có thể đến trải nghiệm và mua sắm tại CellphoneS Hệ thống bán lẻ điện thoại hàng đầu Việt Nam. Khi mua điện thoại Samsung A71 tại CellphoneS, khách hàng sẽ nhận được những ưu đãi hấp dẫn như giảm tới 1% hóa đơn, 10% giá bao da, ốp, miếng dán, trả góp 0% với thẻ tín dụng, miễn phí cà thẻ và bảo hành 12 tháng tại các trung tâm chính hãng được ủy quyền, đổi mới 30 ngày đầu tiên, 1 đổi 1 phụ kiện đi kèm 12 tháng nếu lỗi do nhà sản xuất.', '[\"1224252735fac016e3a4991.53014129.jpg\",\"16481736785fac016e3a8812.42027197.jpg\",\"14205176235fac016e3ac694.47679041.jpg\"]', 0, '2020-11-11 15:21:18'),
(17, 'Xiaomi Redmi Note 9 Pro', 6, 1, 5950000, 'Điện thoại Xiaomi Redmi Note 9 Pro – Smartphone màn hình rộng, viên pin lớn\r\nCùng với Xiaomi Redmi Note 9s, Xiaomi Redmi Note 9 Pro là phiên bản nâng cấp của điện thoại Xiaomi Redmi Note 9 với sự lựa chọn hoàn hảo dành cho những ai đang mong muốn sở hữu một chiếc điện thoại tầm trung có dung lượng pin cao cùng thiết kế sang trọng và khả năng chụp ảnh tốt. Ngày nay, việc sở hữu một chiếc smartphone là điều thiết yếu với mỗi người, giúp người dùng có thể giải quyết cả những công việc mà trước đây chỉ có thể thực hiện trên laptop, mở ra một trai nghiệm thú vị, hiện đại và tiện lợi hơn rất nhiều. \r\n\r\nRedmi Note 9 Pro có thiết kế mặt lưng kính cong 3D và màn hình Full HD+ lên đến 16 triệu điểm ảnh\r\nĐiện thoại Xiaomi này sở hữu thiết kế nguyên khối với mặt lưng kính cong 3D mang đến cho Redmi Note 9 Pro một ngoại hình sang trọng và bắt mắt với các đường nét mềm mại và tinh tế chứ không mang đến cảm giác thô cứng khi cầm nắm.\r\n\r\nThiết kế mặt lưng kính cong 3D và màn hình Full HD+ lên đến 16 triệu điểm ảnh\r\n\r\nRedmi Note 9 Pro được trang bị màn hình “nốt ruồi” tràn viền với kích thước lên đến 6.67 inch cực rộng với tỉ lệ khung hình 20:9. Không chỉ thế, màn hình trang bị tấm nền IPS LCD cùng độ phân giải Full HD+ với hơn 16 triệu điểm ảnh, mang đến cho bạn không chỉ một không gian hiển thị rộng mở mà còn vô cùng sắc nét cùng màu sắc tươi sáng, sống động.\r\n\r\nXiaomi Redmi Note 9 Pro được trang bị 4 camera sau chụp ảnh chuyên nghiệp và camera selfie 16MP\r\nĐiểm độc đáo mang đến sự đặt biệt của Redmi Note 9 Pro chính là hệ thống bốn camera sau được đặt ở giữ phía trên của mặt sau điện thoại với độ phân giải “khủng” lần lượt là 64MP, 8MP cho chụp ảnh góc rộng, 2MP đo chiều sâu ảnh và 5MP macro. Với sự trang bị này, điện thoại hoàn toàn có đủ khả năng để chụp ảnh một cách chuyên nghiệp, mang đến cho bạn những bức ảnh vô cùng xuất sắc, cùng khả năng quay phim chất lượng 4K.\r\n\r\nHệ thống 4 camera sau chụp ảnh chuyên nghiệp và camera selfie độ phân giải 16MP\r\n\r\nCamera trước của Xiaomi Redmi Note 9 Pro có độ phân giải 16MP, giúp bạn có những bức ảnh selfie vô cùng xinh xắn với ánh sáng và màu sắc tốt và hình ảnh video call hiển thị rõ nét, tươi tắn, khiến bạn luôn thoải mái trong những cuộc video call vưới bạn bè của mình.\r\n\r\nVi xử lí Snapdragon 720G mạnh mẽ và bộ nhớ trong lên đến 64GB\r\nXiaomi Redmi Note 9 Pro được trang bị vi xử lí Snapdragon 720G mang đến khả năng xử lí vô cùng mạnh mẽ cùng tốt độ cao và ổn định, giúp những yêu cầu và tác vụ của bạn đều được phản hồi và xử lí nhanh chóng, hạn chế tình trạng đứng máy do không xử lí kịp những yêu cầu của bạn.\r\n\r\nVi xử lí Snapdragon 720G mạnh mẽ và bộ nhớ trong lên đến 64GB\r\n\r\nSở hữu RAM 6GB và bộ nhớ trong 64GB cùng hỗ trợ thẻ nhớ lên đến 512GB nên Xiaomi Redmi Note 9 Pro hoàn toàn đủ khả năng đáp ứng được nhu cầu lưu trữ lượng lớn hình ảnh, video của bạn và có thể tải những loại game nặng để trải nghiệm. Với dung lượng lưu trữ cao nên Xiaomi Note 9 Pro sẽ giúp bạn giữ được toàn bộ kỉ niệm bạn muốn lưu giữ bằng hình ảnh mà không cần phải đắn đo xóa bớt khi muốn chụp thêm nhiều ảnh mới.\r\n\r\nPin dung lượng “khủng” 5020 mAh được trang bị sạc nhanh với cổng sạc USB Type-C\r\nXiaomi Redmi Note 9 Pro có được dung lượng pin thuộc hàng “khủng” 5020 mAh cho bạn thời lượng sử dụng lên đến 20.5 ngày ở chế độ chờ và 26 giờ phát video một cách liên tục và thời gian chơi PUBG lên đến 11 giờ.\r\n\r\nPin dung lượng “khủng” 5020 mAh được trang bị sạc nhanh với cổng sạc USB Type-C\r\n\r\nNgoài ra, Xiaomi Redmi Note 9 Pro có khả năng sạc nhanh 30W, có thể sạc đầy pin chỉ trong vòng 30 phút. Cổng sạc USB Type-C giúp bạn dễ dàng cắm sạc và thay mới dây sạc hay cổng sạc dễ dàng khi có vấn đề.\r\n\r\nMua Xiaomi Redmi Note 9 Pro chính hãng, giá rẻ nhất cùng nhiều ưu đãi tại CellphoneS\r\nHãy đến ngay với CellphoneS khi bạn muốn sở hữu ngay cho mình một chiếc điện thoại Xiaomi Redmi Note 9 Pro chính hãng. Với nhiều cửa hàng khắp tại Hà Nội và thành phố Hồ Chí Minh cùng dịch vụ giao hàng tận nơi giúp bạn có thể dễ dàng mua sắm. Tại đây, chúng tôi luôn đảm bảo sản phẩm chất lượng, chính hãng, xuất xứ rõ ràng nhằm mang đến cho khách hàng những điều tốt nhất. Ngoài ra, khi mua hàng tại CellphoneS bạn còn có cơ hội nhận được nhiều ưu đãi và quà tặng vô cùng hấp dẫn.', '[\"15906871375fac0477a61140.35678864.jpg\",\"2740808285fac0477a64fc3.25817524.jpg\",\"350796465fac0477a68e42.25912381.jpg\"]', 0, '2020-11-11 15:34:15'),
(18, 'Xiaomi Mi 10T Pro 5G', 6, 1, 12990000, 'Điện thoại Xiaomi Mi 10T Pro – Bộ ba camera chụp ảnh siêu đỉnh\r\nNếu bạn là một Mifan hay là một người dùng yêu công nghệ thì chắc chắn bạn sẽ không thể bỏ qua Xiaomi Mi 10T Pro. Với nhiều tính năng đặc biệt và công nghệ chụp ảnh cao cấp, Xiaomi đang dần đánh bóng tên tuổi mình hơn với chiếc smartphone này.\r\n\r\nThiết kế cao cấp cùng mặt lưng kính mềm mại, mượt mà\r\nMáy sở hữu cho mình một khung viền nhựa chắc chắn, giúp tạo cho bản thân một độ chắc chắn và bền bỉ nhất định. Cùng với đó là độ hoàn thiện cao cấp đến từ các phím bấm cũng như độ bo cong các góc cạnh của máy.\r\n\r\nThiết kế kim loại nguyên khối cao cấp cùng mặt lưng kính mềm mại, mượt mà\r\n\r\nCùng với đó, nhằm đảm bảo cho khách hàng luôn có được trải nghiệm tốt nhất và cao cấp nhất thì Xiaomi còn trang bị thêm mặt lưng kính với công nghệ cường lực Gorilla Glass 5 chắc chắn. Giúp cho máy luôn đảm bảo được độ cứng và chống va đập.\r\n\r\nMàn hình 6.67 inches FHD+ cùng khả năng hiển thị độ sáng cao\r\nMột màn hình LCD 6.67 inches là điểm đáng chú ý đến nhất của chiếc Xiaomi Mi 10T Pro khi chúng có độ phân giải lên đến 1080 x 2340 pixels cùng công nghệ màn hình LCD luôn đảm bảo độ chính xác của màu sắc và góc nghiêng của máy.\r\n\r\nMàn hình LCD 6.67 inches FHD+ cùng khả năng hiển thị độ sáng cao\r\n\r\nBên cạnh đó, màn hình của máy còn được trang bị công HDR10 giúp cho chiếc máy này luôn duy trì được độ sáng cao, cho mức sáng cao nhất ở mức 600 nits. Điều này giúp bạn có thể sử dụng thiết bị ở những nơi có ánh sáng lớn.\r\n\r\nCon chip Snapdragon 865 tiến trình 8nm cùng đồ hoạ GPU Adreno 618\r\nCon chip chính là trái tim của một chiếc smartphone và với Mi 10T Pro cũng vậy, chiếc điện thoại này được trang bị chip Snapdragon 865 được sản xuất trên tiến trình 7nm. Giúp việc sử dụng chúng trở nên tiết kiệm pin và tối ưu hoá hiệu năng.\r\n\r\nCon chip Snapdragon 865 tiến trình 8nm cùng đồ hoạ GPU Adreno 618\r\n\r\nMột card đồ hoạ Adreno 650 sáng giá cũng được tích hợp trên chiếc Xiaomi này. Việc này giúp đảm bảo việc chụp ảnh hay xử lý các hình ảnh có dung lượng năng luôn được mượt mà và chính xác nhất có thể.\r\n\r\nDung lượng ram lớn lên đến 8GB cùng khả năng lưu trữ bộ nhớ trong 256GB\r\nVới một dung lượng ram lớn thì Mi 10T Pro luôn giữ cho người dùng một độ ổn định trong các thao tác. Khi thao tác trên smartphone này bạn luôn cảm thấy mượt mà trong việc vuốt chạm, thậm chí là khi bạn đa nhiệm cũng nhanh hơn.\r\n\r\nDung lượng ram lớn lên đến 8GB cùng khả năng lưu trữ bộ nhớ trong 256GB\r\n\r\nMột bộ nhớ trong cực khủng lên đến 256GB và điều đặc biệt trên chiếc smartphone Xiaomi này là khả năng ghi chép dữ liệu nhanh chóng UFS 2.0. Điều này nghĩa là khi bạn thao tác lưu hay xoá cũng diễn ra một cách nhanh chóng và mượt mà hơn.\r\n\r\nCụm camera sau cực đỉnh cho độ phân giải lớn 108MP cùng khả năng quay phim 4K\r\nĐiện thoại Xiaomi Mi 10T Pro sở hữu cụm camera chính 108MP +13MP + 5MP cho khả năng chụp ảnh sắc nét cùng việc zoom quang 120x tuyệt vời.\r\n\r\nBộ camera cực đỉnh cho độ phân giải lớn 108MP cùng khả năng quay phim 4K\r\n\r\nBên cạnh đó, máy còn có khả năng quay phim 4K đỉnh cao, và phục vụ thêm cho việc quay phim thì Xiaomi cũng trang bị công nghệ chống rung quang học OIS cao cấp. Nhằm đảm bảo các khung ảnh di chuyển luôn được ổn định và không bị nhòe ảnh.\r\n\r\nCamera trước độ phân giải lớn 20MP cùng khả năng chụp ảnh chế độ HDR\r\nMột camera trước với độ phân giải có thể được nói là lớn nhất từ trước đến nay, lên đến 20MP. Điều này giúp cho Mi 10T Pro có thể được sử dụng để mở khoá khuôn mặt hay thậm chí là sử dụng để cho ra những bức ảnh đẹp lạ kỳ.\r\n\r\nCamera trước độ phân giải lớn 20MP cùng khả năng chụp ảnh chế độ HDR\r\n\r\nCùng với đó, camera trước của chiếc Xiaomi Mi 10T Pro còn sở hữu thêm công nghệ chụp ảnh HDR, giúp chiếc camera trước luôn luôn duy trì độ sáng nhất định cho từng bức ảnh. Luôn đảm bảo cho người dùng có thể được nhận diện và không làm tối chi tiết nào.\r\n\r\nBảo mật vân tay cạnh bên cao cấp cùng khả năng duy trì sử dụng với pin 5000mAh\r\nMột chiếc điện thoại hoàn hảo, nhưng vẫn chưa nếu chúng ta chưa kể đến khả năng bảo mật. Máy này còn được bảo mật bằng vân tay cạnh bên, giúp mọi thao tác trở nên dễ dàng và thuận tiện hơn nhiều.\r\n\r\nBảo mật vân tay dưới màn hình cao cấp cùng khả năng duy trì sử dụng với pin 5260mAh\r\n\r\nBên cạnh đó, chúng ta phải nhắc đến một dung lượng pin cực khủng trên chiếc máy này. Dung lượng pin 5000 mAh có thể nói là dung lượng pin khủng và lớn nhất hiện nay, giúp máy có thể hoạt động 2 ngày liên tiếp.\r\n\r\nMua Xiaomi Mi 10T Pro chính hãng, giá rẻ tại CellphoneS\r\nBạn đang mong muốn sở hữu ngay một chiếc điện thoại Xiaomi Mi 10T Pro chính hãng chất lượng, cao cấp mà mức giá lại rất phù hợp? Đến ngay với CellphoneS, tại đây chúng tôi luôn cung cấp sản phẩm dịch vụ chất lượng và phù hợp với khách hàng nhất, đảm bảo trải nghiệm tuyệt vời. Việc mua chiếc điện thoại này rất dễ dàng, bạn chỉ cần đến với các cửa hàng của CellphoneS tại HN và HCM gần nhất để có thể trải nghiệm và mua sắm ngay lập tức. ', '[\"963154045fac0599daf2b8.49192180.png\",\"18063566295fac0599db3139.63062185.jpg\",\"15410885225fac0599db6fb9.82988983.jpg\"]', 0, '2020-11-11 15:39:05'),
(19, 'Apple Macbook Pro 13 Touch Bar i5 1.4 256GB 2020 Chính Hãng Apple Việt Nam', 9, 2, 35500000, 'Hiện nay mức giá Macbook Pro 13 Touch bar 2020 chính hãng hiện nay tại CellphoneS là vô cùng hợp lý, cam kết chính hãng. Ngoài ra, CellphoneS còn hỗ trợ trả góp lãi suất thấp với thủ tục đơn giản, hình thức thanh toán thuận tiện cùng nhiều chương trình khuyến mãi hấp dẫn. Để nhanh chóng sở hữu sản phẩm quý khách vui lòng để lại thông tin để nhận được thông báo sớm nhất.', '[\"14606520925fac06eb2abff1.83539808.jpg\",\"4376885075fac06eb2afe74.96857464.jpg\",\"19856269665fac06eb2b3cf8.58190861.jpg\",\"14087978445fac06eb2b7b74.16202360.jpg\"]', 0, '2020-11-11 15:44:43'),
(20, 'Apple MacBook Air 13 512GB 2020', 9, 2, 33000000, 'Apple MacBook Air 13 inch 128GB MQD32 - Cấu hình và thiết kế\r\nMacBook Air chiếc máy tính xách tay được người dùng yêu thích nhất trong tất cả sản phẩm MacBook Apple. Làm được điều này do máy có thiết kế mỏng, sang trọng cùng với cấu hình cao đi liền với mức giá hợp lý. Phiên bản Apple MacBook Air 13 inch 128GB MQD32 Chính hãng hiện đang bán tại CellphoneS được Apple nâng cấp vào năm 2017. Đây là lựa chọn người dùng nên cân nhắc khi cần mua laptop mới.\r\n\r\nThiết kế mỏng, sang trọng trên Apple MacBook Air 13 inch 128GB MQD32\r\nGiống với những phiên bản MacBook khác của Apple, Apple MacBook Air 13 inch 128GB MQD32 sở hữu thiết kế kim loại nhôm nguyên khối sang trọng với tổng kích thước 32.5 x 22.7 x 1.7 cm và trọng lượng 1.35kg. Thiết kế nhôm nguyên khối màu bạc với các cạnh bo tròn và dát mỏng tạo nên tổng thể chiếc máy một thiết kế tuyệt mỹ, sang trọng và gọn gàng.\r\n\r\nApple MacBook Air 13 inch 128GB MQD32\r\n\r\nHiệu năng mạnh mẽ trên Apple MacBook Air 13 inch 128GB MQD32\r\nMacBook Air 13 inch 128GB sở hữu cấu hình con chip xử lý Intel Core i5 Dual-core 1.8Ghz Turbo Boost lên đến 2.9Ghz, RAM 8GB và card đồ họa rời Intel HD Graphics 6000 giúp máy có thể xử lý nhanh chóng và mượt mà các tác vụ sử dụng hằng ngày trong công việc như soạn thảo văn bản, lướt web, làm bài thuyết trình, nghe nhạc, xem phim… Ngoài ra với việc trang bị dung lượng ổ SSD lên đến 128GB sẽ cho người dùng tốc độ đọc, ghi sao chép cực nhanh so với ổ HDD bình thường.\r\n\r\nApple MacBook Air 13 inch 128GB MQD32\r\n\r\nThời lượng pin cả ngày trên Apple MacBook Air 13 inch 128GB MQD32\r\nVới việc được tối ưu hóa hoàn hảo phần mềm và phần cứng, ở phiên bản macOS Sierra trên Apple MacBook Air 13 inch 128GB, chiếc MacBook Air này có thể hoạt động liên tục được 12 tiếng sử dụng và 720 tiếng chờ. Đây là con số vô cùng tuyệt vời với những người thường xuyên làm việc – di chuyển.\r\n\r\nApple MacBook Air 13 inch 128GB MQD32\r\n\r\nTrackPad đa điểm tuyệt vời trên Apple MacBook Air 13 inch 128GB MQD32\r\nMột trong những điểm nổi bật nhất của dòng MacBook đó là TrackPad, với các cử động bằng các ngón tay của bạn sẽ cho bạn làm chủ mọi thứ trên chiếc MacBook Air này. Các thao tác zoom ảnh, trượt ba ngón tay để kích hoạt đa nhiệm hay chụm bốn ngón để truy cập nhanh danh sách ứng dụng… sẽ được diễn ra tức thì và phản ứng mượt mà.\r\n\r\nApple MacBook Air 13 inch 128GB MQD32\r\n\r\nMua Apple MacBook Air 13 inch 128GB MQD32 giá rẻ cùng chế độ bảo hành tốt ở đâu? Hãy đến với CellphoneS, hệ thống bán lẻ Apple MacBook Air trên toàn quốc hiện sẽ cung cấp cho khách hàng sản phẩm MacBook Air 13 inch 128GB trong thời gian sớm nhất khi được nhà sản xuất ra mắt cùng với việc bán mức giá vô cùng hấp dẫn, chế độ hậu mãi vô cùng tốt. Đối với các khách hàng ở xa có nhu cầu mua sản phẩm có thể tham khảo qua dịch vụ mua hàng và thanh toán tận nơi miễn phí của CellphoneS. Đặc biệt, đối với những sản phẩm mới ra mắt, khách hàng có thể đặt cọc online để ưu tiên nhận máy và sở hữu nhiều phần quà hấp dẫn.', '[\"7681822775fac0a62014ac4.65354303.jpg\",\"988816515fac0a62018942.19565814.jpg\",\"230799375fac0a6201c7c6.73464511.jpg\",\"17358937095fac0a62020649.84152379.jpg\"]', 0, '2020-11-11 15:59:30'),
(21, 'Laptop ASUS Gaming ROG Zephyrus GA502IU-AL007T', 10, 2, 27450000, 'Laptop ASUS Gaming ROG Zephyrus GA502IU-AL007T - Cấu hình vượt trội, cân mọi tựa game\r\nAsus là một trong những thương hiệu đang dẫn đầu phân khúc laptop gaming đang bán trên thị trường. Các dòng laptop gaming của Asus có hiệu năng cực cao tạo sự vượt trội và đột phá khi chơi game. Một trong số những sản phẩm nổi bật của hãng đó là laptop ASUS Gaming ROG Zephyrus G15 GA502IU-AL007T là sản phẩm mang đến hiệu năng cực kỳ mượt mà và mạnh mẽ dành cho bạn.\r\n\r\nMàn hình kích thước 15.6 inch độ phân giải Full HD, tần số quét 144Hz thời gian phản hồi 3ms\r\nLà dòng laptop Asus gaming ROG Zephyrus GA502IU-AL007T mang đến một màn hình có kích thước lớn chuẩn 15.6 inch. Với kích thước này người dùng có thể dễ dàng đa nhiệm cùng lúc nhiều ứng dụng mà không bị giới hạn không gian hiển thị. ngoài ra chất lượng màn hình của chiếc laptop này đạt độ phân giải Full HD cho mọi hình ảnh đều hiển thị sắc nét và trung thực đến từng chi tiết.\r\n\r\nMàn hình kích thước 15.6 inch độ phân giải Full HD, tần số quét 144Hz thời gian phản hồi 3ms\r\n\r\nĐể phù hợp với dòng laptop gaming màn hình phải có những yêu cầu cao về các chất lượng hiển thị hình ảnh để phù hợp với nhu cầu chơi game. Với việc trang bị tần số quét lên đến 144Hz bạn có thể dễ dàng chơi các tựa game hành động fps cao mà không bị vỡ hình ảnh, thiết chi tiết khi chơi game. Đặc biệt thời gian phản hồi của màn hình chỉ 3ms giúp tốc độ phản hồi cực kỳ nhanh chóng và chính xác nhất khi chơi game, hầu như không có độ trễ.\r\n\r\nHiệu năng mạnh mẽ với chip AMD Ryzen 7 – 4800HS, Ram 8Gb, Geforce GTX 1660Ti MaxQ\r\nLaptop Gaming ROG Zephyrus G15 được Asus trang bị bộ chip có tốc độ xử lý cực nhanh AMD Ryzen 7 – 4800HS. Với 8 nhân và 16 luồng con chip này mang lại tốc độ xử lý cực nhanh. Load các tựa game đồ họa cao, ứng dụng nặng xử lý một cách mượt mà và nhanh chóng. Không những vậy với bộ nhớ ram lên đến 8GB DDR4 bus 3200 mHz cho khả năng đa nhiệm cực tốt với các ứng dụng cùng lúc.\r\n\r\nHiệu năng mạnh mẽ với chip AMD Ryzen 7 – 4800HS\r\n\r\nVới việc được trang bị card màn hình Geforce GTX 1660Ti MaxQ chiếc laptop Gaming ROG Zephyrus GA502IU-AL007T mang đến khả năng xử lý hình ảnh cực kỳ xuất sắc. Với dung lượng Vram card lên đến 6Gb mọi dữ liệu hình ảnh trong game sẽ tái hiện và hiển thị ra màn hình một cách chính xác, sắc nét mà không bị đầy bộ nhớ. Người dùng có thể thoải mái chơi game với max setting đồ họa một cách dễ dàng.\r\n\r\nRam 8Gb, Geforce GTX 1660Ti MaxQ\r\n\r\nTrang bị SSD NVMe M.2 PCIe 512GB, phù hợp nhiều nhu cầu sử dụng\r\nLaptop ASUS Gaming ROG Zephyrus GA502IU-AL007T được hãng thiết kế hỗ trợ chuẩn kết nối ổ cứng NVMe PCIe cho tốc độ truyền tải siêu cao lên đến 3200MB/s giúp khả năng load dữ liệu cực kỳ nhanh chóng. Máy được trang bị ổ cứng SSD NVMe PCIe có dung lượng lên đến 512GB. Bạn có thể dễ dàng lưu trữ những tựa game nặng một cách dễ dàng mà không bị đầy dung lượng.\r\n\r\nTrang bị SSD NVMe M.2 PCIe 512GB\r\n\r\nKhông những dành cho chơi game chiếc laptop ASUS Gaming ROG Zephyrus GA502IU-AL007T còn phù hợp với nhiều nhu cầu sử dụng như làm việc đồ họa cao với các ứng dụng. Với hiệu năng mạnh mẽ kèm màn hình kích thước lớn việc sử dụng các ứng dụng đồ họa cho công việc của bạn hoàn toàn có thể thực hiện dễ dàng trên chiếc laptop này.\r\n\r\nphù hợp nhiều nhu cầu sử dụng\r\n\r\nTrang bị Intel Wi-Fi 6 AX201 kèm Bluetooth 5.0 và nhiều cổng kết nối hiện đại\r\nVới việc trang bị Intel Wi-Fi 6 AX201 chiếc laptop ASUS Gaming ROG Zephyrus GA502IU-AL007T của bạn sẽ được tối ưu tối đa đường truyền băng thông khi truy cập internet. Tạo độ ổn định và xuyên suốt cao truy cập internet ổn định giúp game load mượt mà và nhanh chóng. Không những vậy chiếc laptop này còn được trang bị công nghệ Bluetooth 5.0 giúp tương thích với nhiều thiết bị ngoại vi như chuột, bàn phím,... một cách dễ dàng.\r\n\r\nTrang bị Intel Wi-Fi 6 AX201 kèm Bluetooth 5.0\r\n\r\nKhông những vậy 2 cạnh bên của chiếc laptop còn được trang bị và thiết kế nhiều cổng kết nối hiện đại như: jack Microphone/Headphone 3.5mm, cổng Type-C, USB 3.1, Thunderbolt, HDMI, là có đến 4 cổng USB 3.0 Type A. Với những chuẩn kết nối này người dùng có thể dễ dàng kết nối và truyền tải một cách nhanh chóng mà không bị giới hạn cổng kết nối.\r\n\r\nPin dung lượng cao 4 Cell 76 WHr, thiết kế siêu tản nhiệt kiểu mới\r\nVới hiệu năng và những trang bị như trên chắc hẳn mức độ tiêu thụ pin của chiếc laptop ASUS Gaming ROG Zephyrus GA502IU-AL007T sẽ nằm ở mức rất cao. Nhưng ngược lại Asus đã trang bị cho chiếc laptop này 4 cell pin có công suất lên đến 76WHr. Giúp thiết bị hoạt động bền bỉ liên tục lên đến hơn 7 giờ sử dụng.\r\n\r\nPin dung lượng cao 4 Cell 76 WHr, thiết kế siêu tản nhiệt kiểu mới\r\n\r\nĐể giải thoát nhiệt lượng mà cấu hình khủng trên laptop ASUS Gaming ROG Zephyrus GA502IU-AL007T tỏa ra. Hãng đã tối ưu thiết kế siêu tản nhiệt thế hệ mới giúp chiếc laptop hoạt động với công suất cao nhưng vẫn không bị quá nóng máy. Đảm bảo hiệu suất hoạt động bền bỉ khi sử dụng các ứng dụng nặng.\r\n\r\nBàn phím có phím bấm lớn hỗ trợ đèn LED, chất lượng âm thanh vượt trội với loa Side-Firing kép\r\nLà dòng chơi game nên chiếc laptop gaming đến từ Asus này đã được hãng tối ưu và thiết kế bàn phím hỗ trợ tối đa cho người dùng khi chơi game hay sử dụng bình thường. Với các phím bấm to bạn có thể dễ dàng thao tác và nhấn chính xác xác phim, kèm với trang bị đến LED hỗ trợ bạn thao tác bấm ở những không gian tối một cách dễ dàng. Đặc biệt với công nghệ bàn phím N-key rollover giúp laptop ghi nhận từng lần nhấn chính xác.\r\n\r\nBàn phím có phím bấm lớn hỗ trợ đèn LED,\r\n\r\nLaptop ASUS Gaming ROG Zephyrus GA502IU-AL007T cũng được trang bị bộ vi xử lý âm thanh chất lượng cao kết hợp âm thanh vòm tạo độ sinh động và chi tiết cho âm thanh phát ra. Máy được trang bị bộ loa Side-Firing kép giúp âm thanh phát ra được tái hiện và sống động khuếch đại âm thanh thông minh với mức âm lượng tăng cao lên đến 3.5 lần.\r\n\r\nchất lượng âm thanh vượt trội với loa Side-Firing kép\r\n\r\nMua Laptop ASUS Gaming ROG Zephyrus GA502IU-AL007T chính hãng giá rẻ tại CellphoneS\r\nVới cấu hình cực kỳ mạnh mẽ và được trang bị nhiều sự đổi mới trong công nghệ lẫn phần cứng của máy. Laptop ASUS Gaming ROG Zephyrus GA502IU-AL007T sẽ là một chiếc máy tính mang đến chất lượng chơi game cực kỳ tuyệt vời dành cho bạn. Đến ngay CellphoneS gần nhất để trải nghiệm và mua laptop ASUS Gaming ROG Zephyrus GA502IU-AL007T chính hãng giá rẻ với rất nhiều ưu đãi tại trung tâm.', '[\"1097055375fac9989d2f467.80069647.jpg\",\"4820908555fac9989d332e3.93961947.jpg\",\"18062134975fac9989d37169.91496313.jpg\"]', 0, '2020-11-12 02:10:17'),
(22, 'Laptop ASUS TUF Gaming FX506LI-HN096T', 10, 2, 25590000, 'Được trang bị để chiến đấu, TUF Gaming F15 trang bị Intel® Core™ I7-10870H thế hệ thứ 10 với xung nhịp 2.20GHz upto 5.00GHz giúp bạn dễ dàng xử lý các tác vụ chơi game, phát trực tuyến và đa nhiệm nặng. Được kết hợp với GPU rời Geforce GTX 1650Ti 4GB mang tới  tốc độ khung hình cao đáng tin cậy trong một loạt các trò chơi. Tăng tốc thời gian truyền tải, tốc độ khởi động máy tính của bạn siêu nhanh với 512G PCIE SSD.\r\n\r\n    \r\n\r\nTHIẾT KẾ\r\n\r\nThiết kế cho phép game thủ tự do thể hiện phong cách cá nhân của mình. Độ bền cấp quân sự khiến mỗi máy tính xách tay chơi game TUF trở thành chiến binh đường trường sẵn sàng cho mọi khắc nghiệt của ván đấu.\r\n\r\n     \r\n\r\nMàn hình\r\n\r\nVới tấm nền IPS tốc độ lên đến 144Hz là sản phẩm hoàn hảo cho việc chơi game nhịp độ nhanh. Cổng USB 3.2 Gen 2 Type-C ™ đa năng hỗ trợ công nghệ DisplayPort ™ 1.4, có nghĩa là bạn có thể kết nối màn hình chơi game G-SYNC phụ và trải nghiệm trò chơi ở độ phân giải lên đến 4K và tốc độ làm mới 120Hz. \r\n\r\nVới công nghệ G-SYNC giảm hiện tượng giật hình và loại bỏ hiện tượng xé hình, cho phép hình ảnh mượt mà.\r\n\r\n\r\n\r\nBÀN PHÍM\r\n\r\nTrang bị  bàn phím được tối ưu hóa để chơi game. Đèn nền RGB thống nhất cho phép bạn thể hiện phong cách độc đáo của riêng mình, trong khi các điểm nhấn WASD được thiết kế nổi bật trên bố cục bàn phím cho bạn lối tắt trực quan cho các lệnh di chuyển phím.\r\n\r\nCông nghệ Overstroke  độc ​​quyền đảm bảo việc đánh máy nhanh hơn, chính xác hơn để phản hồi nhanh hơn và điều khiển dễ dàng. Ở dạng TUF thực sự, mỗi phím đủ bền để chịu được hơn 20 triệu lần nhấn cho độ tin cậy và độ chính xác tuyệt vời trong thời gian dài.\r\n\r\n    \r\n\r\nÂM THANH\r\n\r\nHai loa được nâng cấp với bốn đường cắt tạo ra âm thanh nhiều hơn 1,8 lần với âm trầm sâu hơn 2,7 lần so với các thế hệ trước để có trải nghiệm âm thanh phong phú hơn.\r\n\r\nĐặc biệt, với công nghệ DTS: X ™ Ultra mang đến âm thanh vòm ảo 7.1 kênh trung thực cao cho âm thanh chất lượng như rạp hát với tai nghe âm thanh nổi. \r\n\r\n    \r\n\r\n \r\n\r\nWI-FI 6\r\n\r\nIntel® Wi-Fi 6 cực nhanh với Gig + (802.11ax) cho phép bạn chơi game ở tốc độ mạng LAN một cách đáng tin cậy ở bất kỳ nơi nào có kết nối tương thích. Wi-Fi 6 (Gig +) tăng tốc độ và hiệu quả mạng so với các tiêu chuẩn Wi-Fi 5 trước đây, cung cấp kết nối tốt hơn trong không gian đông người.\r\n\r\n    \r\n\r\nKẾT NỐI TOÀN DIỆN\r\n\r\nTrang bị đầy đủ và đa dạng các cổng kết nối với các cổng I / O cho phép bạn kết nối các thiết bị yêu thích của mình và bắt đầu làm việc ở bất cứ đâu. Hai cổng USB 3.2 Kiểu A cho phép truyền dữ liệu nhanh chóng, với một cổng USB 2.0 Kiểu A bổ sung tạo ra ba đầu vào tổng cộng cho các thiết bị ngoại vi ưa thích. Cổng USB 3.2 Gen 2 Type-C ™ với DisplayPort ™ 1.4 để kết nối màn hình G-SYNC ™ siêu nhanh cho trải nghiệm chơi game mượt mà.\r\n\r\nBluetooth cũng cho phép bạn ghép nối chuột, tai nghe và các thiết bị tương thích khác để có không gian làm việc sạch hơn, không dây.\r\n\r\n   \r\n\r\nPHẦN MỀM ĐỘC QUYỀN\r\n\r\nArmory Crate thống nhất hệ thống và điều khiển ánh sáng để đưa các cài đặt cần thiết vào tầm tay bạn trong một tiện ích duy nhất. Các tùy chọn tùy chỉnh mở rộng của nó cho phép bạn cá nhân hóa các hiệu ứng thẩm mỹ, tinh chỉnh cấu hình trò chơi và điều chỉnh cài đặt âm thanh để phù hợp với sở thích của bạn. \r\n\r\n      ', '[\"11133269025fac9a5a7dba87.01449540.jpg\",\"1921445255fac9a5a7df908.96146677.jpg\",\"4564061775fac9a5a7e3786.89335751.jpg\",\"18475429475fac9a5a7e7611.01616004.jpg\"]', 0, '2020-11-12 02:13:46'),
(23, 'Apple Watch SE 40mm (GPS) Viền Nhôm Vàng', 11, 3, 8100000, 'Apple Watch SE 40mm - Sang trọng, đẳng cấp như bản cao cấp\r\nNăm 2020, chắc hẳn các iFan đang háo hức đón chờ các siêu phẩm được ra mắt từ Apple. Đặc biệt Apple Watch SE 40mm (GPS) là một trong những phiên bản được Apple ra mắt vào năm 2020 và đang được nhiều người dùng quan tâm không kém gì phiên bản chính thức cao cấp.\r\n\r\nThiết kế thời trang, màn hình Retina LTPO OLED hiển thị chất lượng cao\r\nApple Watch SE 40mm (GPS) có thiết kế vừa năng động và mang đậm tính thời trang rất giống với thế hệ trước đây mà nhà sản xuất Apple đã thiết kế.\r\n\r\nHơn thế, dây đeo được làm từ chất liệu silicon có độ đàn hồi cao giúp người dùng có thể đeo trong thời gian dài mà không bị đau tay. Với chất liệu này người dùng dễ dàng vệ sinh và hạn chế bám bẩn và mồ hôi.\r\n\r\nThiết kế thời trang, màn hình Retina LTPO OLED hiển thị chất lượng cao\r\n\r\nApple Watch SE 40mm (GPS) có thiết kế màn hình Retina LTPO OLED rộng gần giống tương tự Apple Watch Series 6 là 40mm x 34mm x 10mm.\r\n\r\nVới màn hình kích thước rộng cùng với độ phân giải cao 448 x 368 pixels hỗ trợ chất lượng hiển thị hình ảnh trên màn hình cao và sắc nét, mang đến hình ảnh có màu sắc chân thật và tự nhiên.\r\n\r\nBộ xử lý S5 SiP mạnh mẽ, chống nước 5 ATM (50m)\r\nApple Watch SE 40mm (GPS) được hãng trang bị bộ xử lý SiP lõi kép S5 mạnh mẽ cho hiệu suất xử lý dữ liệu một cách nhanh chóng. Đi kèm với đó là bộ nhớ ram 1Gb và 32Gb bộ nhớ trong lưu trữ được nhiều hơn.\r\n\r\nNgoài ra chiếc đồng hồ này còn được trang bị tính năng đo tiếng ồn và phát hiện té ngã, tự động báo khẩn cấp nếu người dùng bị té ngã và không cử động trong một thời gian nhất định.\r\n\r\nBộ xử lý S5 SiP mạnh mẽ, chống nước 5 ATM (50m)\r\n\r\nĐặc biệt, Apple Watch SE 40mm (GPS) còn được tích hợp công nghệ chống nước 5 ATM giúp thiết bị có thể hoạt động bình thường dưới mặt nước 50m mà không có bất kỳ ảnh hưởng gì hay đi dưới mưa an toàn.\r\n\r\nHỗ trợ Bluetooth 5.0, nâng cấp nhiều cảm biến quan trọng\r\nApple Watch SE 40mm (GPS) được Apple hỗ trợ kết nối hiện đại đó là Bluetooth 5.0. Giúp thiết bị có thể kết nối trong khoảng cách lên đến 10m.\r\n\r\nCó thể nói Apple Watch SE 40mm là smartwatch rất đáng để người dùng sở hữu. So với các thế hệ trước thì Apple Watch SE 40mm (GPS) này được nâng cấp độ cảm biến rất nhạy.\r\n\r\nHỗ trợ Bluetooth 5.0, nâng cấp nhiều cảm biến quan trọng\r\n\r\nHơn thế, trên smartwatch bạn còn có thể tìm thấy rất nhiều chế độ tập luyện như chạy, đi bộ, yoga, đạp xe, luyện tập với cường độ cao ngắt quãng và khiêu vũ hỗ trợ cho người dùng rất nhiều trong tập luyện.\r\n\r\nNgoài ra, Apple Watch SE 40mm (GPS) còn được trang bị những tính năng hữu ích như độ cảm biến đo nhịp tim với thời gian nhanh và độ chính xác hơn so với các thế hệ trước phù hợp vận động, leo núi,...\r\n\r\nMua Apple Watch SE 40mm chính hãng, trả góp 0% tại CellphoneS\r\nVới những tính năng hiện đại mà Apple Watch SE 40mm mang lại đây sẽ là một chiếc đồng hợp phù hợp về giá và chất lượng mang lại rất tốt để bạn lựa chọn mua.\r\n\r\nCellphoneS là một trong những trung tâm phân phối Apple Watch SE 40mm chính hãng Apple tại Việt Nam và có mức giá rẻ hơn rất nhiều so với giá niêm yết thị trường kèm theo đó là giảm giá lên đến 1% khi mua.\r\n\r\nĐể người dùng có thể dễ dàng mua Apple Watch SE 40mm CellphoneS cũng hỗ trợ trả góp với mức lãi suất là 0% rất tiện lợi, xét duyệt nhanh chóng nhận ngay sản phẩm.  ', '[\"12656429255fade59668a491.07244001.jpg\",\"2203899665fade596686616.32008424.jpg\",\"5173562985fade59668e313.36351903.jpg\"]', 0, '2020-11-13 01:47:02'),
(24, 'Apple Watch 3 42mm (GPS) Viền Nhôm Xám', 11, 3, 14500000, 'Đồng hồ thông mình Apple Watch 3 42mm (GPS) viền nhôm xám - dây đen chính hãng (MTF32) tại CellphoneS\r\nĐồng hồ thông minh là một trong những thiết bị di động đang được nhiều người dùng ưu tiên sử dụng trong thời buổi hiện đại ngày nay. Apple Watch 3 GPS 42mm viền nhôm xám - dây đen là một sản phẩm của Apple mang đến sự đột phá trong thiết kế cùng nhiều tính năng hiện đại để bạn có một chiếc đồng hồ thông minh năng động, hỗ trợ tốt cho sức khỏe và mở rộng kết nối hơn.\r\n\r\nThiết kế đơn giản, tinh tế cùng chất liệu viền nhôm xám cao cấp, dây cao su đen bền đẹp\r\nĐồng hồ Apple Watch 3 GPS 42mm sở hữu thiết kế mặt kính vuông vức, được làm nổi lên trên bề mặt và có phần thân máy dày, phần khung được làm từ nhôm mạ bạc cao cấp, đi cùng với đó là viền nhôm xám hiện đại trông rất cứng cáp nhưng vẫn đầy tinh tế, đảm bảo được tiêu chí nhẹ nhàng, thoải mái khi đeo cho người dùng.\r\n\r\nThiết kế đơn giản, tinh tế cùng chất liệu viền nhôm xám cao cấp, dây cao su đen bền đẹp\r\n\r\nBên cạnh đó, phần dây đeo của đồng hồ được chế tác từ chất liệu cao su flo-carbon màu đen đã được gia công kỹ lưỡng, đảm bảo về cả tính bền, chống nước, chống nhờn rít tay khi đeo. Dây đeo được thiết kế với khả năng dễ dàng tháo rời, cho phép người dùng linh hoạt thay đổi bằng các dây đeo màu sắc khác.\r\n\r\nCấu hình được nâng cấp mạnh mẽ với chip S3 2 nhân\r\nĐồng hồ Apple Watch 3 GPS 42mm sử dụng hệ điều hành WatchOS 4 tân tiến nhất hiện nay. Đồng thời, thiết bị còn tích hợp bộ vi xử lý chip S3 2 nhân cho tốc độ xử lý nhanh hơn 70%, mức đồ thụ điện năng giảm 50% và wifi mạnh hơn 70% so với thế hệ tiền nhiệm. Bộ nhớ trong 8G có thể cho phép lưu trữ lên đến 40 triệu bài hát.\r\n\r\nCấu hình được nâng cấp mạnh mẽ với chip S3 2 nhân\r\n\r\nNgoài việc được cung cấp vi xử lý mới, chiếc đồng hồ này còn được nâng cấp GPU mới hơn. Với phần cứng mạnh mẽ này, người dùng có thể dễ dàng mở ứng dụng Night Sky Scan ở tốc độ 60fps một cách ổn định. Cùng với đó, mọi trải nghiệm, phản hồi trên thiết bị thông minh này đều sẽ diễn ra một cách mượt mà, nhanh chóng, không hề có hiện tượng bị giật lag.\r\n\r\nMàn hình AMOLED hiển thị tốt, an toàn cùng kính cường lực Sapphire crystal glass\r\nĐồng hồ Apple Watch 3 GPS 42mm sử dụng màn hình Force Touch (tương tự như dòng màn hình cảm ứng cao cấp được sử dụng trên dòng điện thoại iPhone) cùng tấm nền AMOLED với độ phân giải 312 x 390 pixels, kích thước 1.65 inch cho hình ảnh hiển thị rõ ràng và sắc nét.\r\n\r\nMàn hình AMOLED hiển thị tốt, an toàn cùng kính cường lực Sapphire crystal glass\r\n\r\nNgoài ra, sản phẩm còn được trang bị mặt kính cường lực Sapphire crystal glass cao cấp giúp chống trầy xước tốt và hiển thị tốt dù là dưới ánh mặt trời, trong bóng tối hay khi ở dưới nước,... Đồng thời, với khả năng tăng độ sáng lên 1000 units, Apple Watch 3 cho phép bạn xem đồng hồ ngay dưới trời nắng gắt.\r\n\r\nKhả năng chống nước tối đa 50m theo tiêu chuẩn ISO 22810:2010\r\nĐồng hồ Apple Watch 3 GPS 42mm được trang bị khả năng chống nước vượt trội, đảm bảo hoạt động tốt ở độ sâu tối đa là 50m theo tiêu chuẩn ISO 22810:2010. Điều này rất quan trọng với những ai thường xuyên tham gia các hoạt động ngoài trời hay các môn thể thao dưới nước.\r\n\r\nKhả năng chống nước tối đa 50m theo tiêu chuẩn ISO 22810:2010\r\n\r\nVới chiếc đồng hồ thông minh này, bạn sẽ không phải lo lắng nếu như lỡ ngâm mình trong nước mà quên tháo bỏ đồng hồ. Bạn có thể thoải mái bơi lội hay tập luyện các môn thể thao dưới nước mà máy vẫn chẳng hề gì. Bên cạnh đó, Apple cũng đã nghiên cứu để thiết kế loa ngoài của đồng hồ đảm bảo chất lượng âm thanh vẫn luôn tốt khi ở dưới nước.\r\n\r\nTrải nghiệm tuyệt vời với tích hợp GPS \r\nCông nghệ định vị luôn mang đến những điều tuyệt vời cho chúng ta trong cuộc sống. Tuy nhiên trước đây, khả năng định vị chỉ được sử dụng trên các thiết bị đo lường giao thông, gần đây là trên smartphone. Nhưng hiện giờ, chỉ cần sở hữu chiếc đồng hồ Apple Watch 3 GPS 42mm, bạn có thể thao tác định vị dễ dàng với sự tích hợp sẵn hệ thống định vị GPS trên thiết bị này.\r\n\r\nTrải nghiệm tuyệt vời với tích hợp GPS \r\n\r\nBạn có thể đeo Apple Watch chạy bộ và để điện thoại ở nhà mà vẫn có đầy đủ những thông số như quãng đường chạy, bản đồ, hay cập nhật thông tin thời tiết dựa vào vị trí địa lý.\r\n\r\nViên pin dung lượng 279 mAh cho thời gian hoạt động liên tục tới 18 giờ\r\n\r\nĐồng hồ Apple Watch 3 GPS 42mm được cung cấp viên pin có dung lượng lớn 279 mAh mang đến khả năng hoạt động tối đa với 90 lần xem giờ, 90 lần kiểm tra thông báo, 45 phút sử dụng ứng dụng và 30 phút nghe nhạc qua kết nối Bluetooth.\r\n\r\nViên pin dung lượng 279 mAh cho thời gian hoạt động liên tục tới 18 giờ\r\n\r\nNgoài ra, chỉ với một lần sạc đầy, chiếc đồng hồ thông minh này đã có thể hoạt động liên tục lên đến 18 giờ. Như vậy vừa tiết kiệm năng lượng, vừa có thể đáp ứng đủ nhu cầu sử dụng cơ bản trong một ngày cho người dùng.\r\n\r\nMua Apple Watch 3 GPS 42mm chính hãng, đảm bảo chất lượng tại hệ thống CellphoneS\r\nNếu bạn đang muốn tìm mua một chiếc đồng hồ thông minh với chất lượng hoàn hảo và giá cả hợp lý thì Apple Watch 3 GPS 42mm viền nhôm xám dây đen sẽ là một lựa chọn tuyệt vời nhất. Đặc biệt hơn, tại ​hệ thống CellphoneS​, bạn có thể hoàn toàn yên tâm khi mua sản phẩm này vì ​CellphoneS có chế độ bảo hành – đổi trả chu đáo cùng dịch vụ giao hàng – thu tiền tại nhà miễn phí trên toàn quốc. ', '[\"6106836345fade653ec3229.13647359.jpg\",\"2465266065fade653ec70a8.62819934.jpg\",\"1087430515fade653ecaf26.67108490.jpg\"]', 0, '2020-11-13 01:50:11'),
(25, 'Đồng hồ thông minh Huawei watch fit', 12, 3, 2490000, 'Đồng hồ Huawei Watch Fit - Thiết kế phá cách với kiểu dáng mới\r\nHuawei Watch Fit được ra mắt vào nửa cuối năm 2020 với thiết kế phá cách hơn so với các chuẩn hình dán màn hình của các dòng đồng hồ thông minh khác. Huawei Watch Fit cũng được trang bị nhiều công nghệ cũng như tiện ích giúp ích cho sức khỏe cũng như là một món phụ kiện rất hợp với mọi lứa tuổi.\r\n\r\nThiết kế hình chữ nhật kéo dài, kích thước màn hình 1.64 inch\r\nCó thể nói Huawei Watch Fit là một trong những sản phẩm đồng hồ thông minh cao cấp của hãng. Để tạo điểm nhấn riêng cho dòng Huawei Watch của mình hãng đã phá cách với thiết kế hình chữ nhật kéo dài mới. Tạo nên một sự nổi bật nhưng không quá dài hoàn toàn cân xứng với thiết kế của dây đeo khi đeo trên tay. Ngoài ra các thiết kế gắn dây cài đều được thực hiện tinh tế giấu khớp cài vào bên trong.\r\n\r\nThiết kế hình chữ nhật kéo dài, kích thước màn hình 1.64 inch\r\n\r\nNhằm mang đến một cách nhìn mới về đồng hồ hãng đã trang bị cho Huawei Watch Fit màn hình kích thước lớn lên đến 1.64 inch. Đủ để người dùng có thể sử dụng và quan sát trong quá trình sử dụng. Ngoài ra độ phân giải của màn hình cũng đạt ở mức 456x280 pixel trên tấm nền AMOLED cực kỳ sắc nét. Bề mặt trên xung quanh màn hình cũng được hãng thiết kế nhiều cảm biến ánh sáng giúp điều chỉnh độ sáng phù hợp với không gian đang sử dụng.\r\n\r\nKhả năng chống nước đạt 5ATM trang bị nhiều cảm biến sức khỏe, vận động\r\nHầu hết các thiết bị đồng hồ thông minh cao cấp hiện nay trên thị trường đều được trang bị các tiêu chuẩn chống nước cao cấp. Và Huawei Watch Fit cũng vậy hãng đang trang bị chuẩn chống nước 5ATM trên chiếc đồng hồ thông minh này. Với tiêu chuẩn này người dùng có thể thoải mái sử dụng Huawei Watch Fit ở bất cứ môi trường có độ ẩm hay va chạm vào nước mà không bị hư hỏng trong quá trình sử dụng.\r\n\r\nKhả năng chống nước đạt 5ATM \r\n\r\nHuawei Watch Fit cũng được trang bị các tiêu chuẩn bảo vệ an toàn sức khỏe trên cơ thể người đeo với cảm biến đo nhịp tim nằm ở mặt sau và thông báo đến thiết bị di động qua bluetooth. Ngoài ra đồng hồ này cũng được trang bị GPS và cả khí áp kế giúp định vị và theo dõi đầy đủ các hoạt động của người dùng. Các chế độ vận động cũng phát huy tác dụng đáng kể trên Huawei Watch Fit khi có thể theo dõi chạy bộ, bơi lội,...\r\n\r\n cảm biến đo nhịp tim \r\n\r\nPin sử dụng lên đến 10 ngày, tương thích với nhiều hệ điều hành qua bluetooth 5.0\r\nĐã có một sự nâng cấp về dung lượng pin trên Huawei Watch Fit khi hãng đã trang bị một viên pin có dung lượng lớn cho phép đồng hồ có thể sử dụng và kết nối với điện thoại liên tục trong khoảng thời gian dài lên đến hơn 10 ngày. Ngoài ra khả năng sạc của Huawei Watch Fit cũng nhanh đáng kể khi chỉ cần khoảng thời gian chưa đến 90 phút là đầy pin trở lại.\r\n\r\nPin sử dụng lên đến 10 ngày, tương thích với nhiều hệ điều hành qua bluetooth 5.0\r\n\r\nVới chuẩn kết nối Bluetooth 5.0 mới được trang bị trên đồng hồ thông minh Huawei Watch Fit việc kết nối truyền tải cũng như đồng bộ trên thiết bị di động của rất tiện lợi và dễ dàng. Khả năng kết nối, giữ kết nối với thiết bị rất ổn định và ghép đôi nhanh chóng giúp việc sử dụng luôn được đồng bộ và thông báo chính xác đến người dùng. Đồng hồ thông minh Huawei Watch Fit tương thích với tất cả các thiết bị sử dụng Android 5.0 và iOS 9.0 trở lên.\r\n\r\nMua Huawei Watch Fit chính hãng giá rẻ, trả góp 0% tại CellphoneS\r\nHiện tại CellphoneS đang là hệ thống bán lẻ được phân phối chính hãng đồng hồ thông minh Huawei Watch Fit từ hãng với đầy đủ các phần quà ưu đãi cũng như chế độ bảo hành chính hãng lên đến 12 tháng của Huawei trên toàn quốc. Với những tính năng hiện đại cũng như thiết kế cực phá cách kèm thời lượng pin dài, Huawei Watch Fit sẽ là một sự lựa chọn đáng cân nhắc dành cho bạn trong các chiếc đồng hồ khá cùng phân khúc.\r\n\r\nĐến ngay CellphoneS gần nhất hoặc đặt hàng trực tiếp ngay trên Website để được các nhân viên tư vấn cũng như biết thêm nhiều ưu đãi khi mua Huawei Watch Fit tại CellphoneS nhé!', '[\"15772059455fade870db9463.11327637.jpg\",\"1410336805fade870dbd2e9.50733001.jpg\",\"1525533085fade871378590.87615604.jpg\",\"19889339455fade87137c410.51653192.jpg\"]', 0, '2020-11-13 01:59:13');
INSERT INTO `sanpham` (`MaSP`, `TenSP`, `MaNSX`, `MaLoai`, `GiaBan`, `ChiTiet`, `Anh`, `DaBan`, `registration_date`) VALUES
(26, 'Đồng hồ thông minh Huawei Watch GT 2 Pro Dây silicone', 12, 3, 7690000, 'Huawei Watch GT 2 Pro - đồng hồ thông minh với nhiều tính năng ấn tượng\r\nLà một sản phẩm mới được ra mắt cách đây chưa lâu nhưng đồng hồ thông minh Huawei Watch GT 2 Pro nhanh chóng thu hút được đông đảo người dùng bởi nhiều tính năng ấn tượng và hấp dẫn. Dưới đây là những thông tin chi tiết về chiếc đồng hồ thông minh mới nhất của Huawei này.\r\n\r\nMặt kính sapphire, viền titan, trọng lượng 52g\r\nĐồng hồ thông minh Huawei Watch GT 2 Pro là sản phẩm được sản xuất bởi thương hiệu đình đám trong giới công nghệ Huawei. Chiếc đồng hồ này có thiết kế khung titan, mặt sau gốm bóng mang đến sự cứng cáp và vô cùng bền bỉ.\r\n\r\nThân thép không gỉ, viền ceramic, trọng lượng 46g\r\n\r\nHuawei Watch GT2 Pro có kích thước 454 x 454 mm và trọng lượng chỉ khoảng 46g. Dây đồng hồ kích thước 2.2 cm được làm bằng chất liệu silicone đem lại vẻ ngoài sang trọng và cổ điển nhưng vẫn thể hiện được sự đẳng cấp.\r\n\r\nMàn hình 1.39-inch AMOLED, chất lượng màu cực tốt\r\nĐồng hồ sở hữu màn hình có độ mỏng chỉ chỉ 11.4mm, tấm nền AMOLED 1.39 inch mang đến chất lượng hiển thị màu cực kì tốt ngay khi sử dụng ngoài trời.\r\n\r\nMàn hình 1.2-inch AMOLED, chất lượng màu cực tốt\r\n\r\nĐặc biệt, giao diện màn hình có thể dễ dàng thay đổi bằng nhiều mặt đồng hồ khác nhau giúp người dùng có thêm nhiều sự lựa chọn.\r\n\r\nHuawei gt2 pro còn được Huawei trang bị mặt kính cường lực giúp bảo vệ màn hình tránh khỏi những trầy xước hay va đập trong quá trình sử dụng.\r\n\r\nTheo dõi sức khỏe và chế độ luyện tập chuyên sâu\r\nNgoài thực hiện chức năng như một chiếc đồng hồ thông thường, Huawei Watch GT2 Pro được trang bị công nghệ theo dõi nhịp tim giúp đo nhịp tim, chỉ số SpO2 có độ chính xác gần như tuyệt đối. \r\n\r\ntheo dõi nhịp tim giúp đo nhịp tim, chỉ số SpO2\r\n\r\nHuawei Watch GT 2 Pro với chế độ tập luyện hỗ trợ hơn 100 môn thể thao khác nhau như trượt ván, trượt tuyết, chơi gôn, leo núi, lướt sóng,...\r\n\r\nTheo dõi sức khỏe và chế độ luyện tập chuyên sâu\r\n\r\nĐồng hồ với khả năng chống bụi, khả năng chịu được áp lực nước tương đối lớn cùng với đó là các tiện ích như gia tốc kế, la bàn, con quay hồi chuyển, khí áp kế nên bạn có thể sử dụng chiếc đồng hồ này cho mọi hoạt động hằng ngày, kể cả những hoạt động thể thao mạo hiểm hay là bơi lội.\r\n\r\nĐồng hồ Huawei Watch GT 2 Pro với tính năng Route Back giúp ghi lại lộ trình di chuyển và gửi cảnh báo cho người dùng nếu tín hiệu GPS quá yếu. Đặc biệt, đồng hồ có khả năng phát hiện sự thay đổi áp suất và có những lời nhắc - cảnh báo khi cần thiết.  \r\n\r\ntính năng Route Back giúp ghi lại lộ trình di chuyển\r\n\r\nHuawei GT2 Pro còn có thể theo dõi cả giấc ngủ của bạn. Với tính năng theo dõi giấc ngủ chuyên sâu và cung cấp hơn 200 đề xuất tiềm năng giúp bạn cải thiện giấc ngủ tốt hơn.\r\n\r\ntính năng theo dõi giấc ngủ chuyên sâu\r\n\r\nNgoài ra một số tính năng hữu ích khác chuyên sâu như tính lượng calories tiêu thụ, tính số bước chân, quãng đường chạy, chế độ luyện tập giúp bạn theo dõi tốt tình trạng sức khỏe cũng như có chế độ tập luyện hợp lý.\r\n\r\nChip xử lý Kirin A1, dung lượng pin sử dụng 14 ngày\r\nHuawei Watch GT 2 Pro sử dụng chip xử lý Kirin A1 mang đến sự mượt mà trong quá trình sử dụng. Dung lượng pin lớn cho thời gian sử dụng lên tới 2 tuần. Đặc biệt, đồng hồ còn có khả năng nạp dung lượng nhanh chóng với 5 phút sạc cho đến 10 giờ sử dụng.\r\n\r\nChip xử lý Snapdragon Wear 2100, dung lượng pin 420mAH\r\n\r\nMua đồng hồ thông minh Huawei Watch GT 2 Pro chính hãng, nhiều ưu đãi tại CellphoneS\r\nCellphoneS là địa chỉ cung cấp đồng hồ Huawei GT 2 Pro chính hãng, giá cạnh tranh với rất nhiều ưu đãi hấp dẫn. Khi đến với CellphoneS, bạn sẽ được sở hữu sản phẩm chất lượng với chế độ bảo hành cực tốt.\r\n\r\nNgoài ra, với phương thức bán hàng đa dạng, khách hàng hoàn toàn có thể đặt mua online Huawei Watch GT 2 Pro để được giao hàng tại nhà và tiết kiệm tối đa thời gian. Hãy liên hệ với CellphoneS nếu cần tư vấn thêm về sản phẩm hoặc dịch vụ. ', '[\"4117584785fade9301fd203.28977489.png\",\"8503354015fade930201084.52408192.jpg\",\"14951664555fade930204f04.92594611.jpg\",\"3888425475fade930208d87.01490295.jpg\"]', 0, '2020-11-13 02:02:24'),
(27, 'Laptop ASUS ZenBook Duo UX481FL-BM049T', 10, 2, 35190000, 'Laptop Asus Zenbook UX481FL-BM049T–vẻ đẹp đổi mới và tốc độ nhanh đẳng cấp\r\nLaptop Asus Zenbook UX481FL-BM049T là chiếc máy tính xách tay siêu mỏng nhỏ gọn được Asus tích hợp màn hình cảm ứng FHD 12.6 inch thiết kế đa nhiệm cực tốt được ra mắt trong thời gian gần đây. Chiếc laptop Asus sở hữu thiết kế thời trang, sang trọng và một cấu hình mạnh mẽ, sẵn sàng đáp ứng mọi nhu cầu làm việc.\r\n\r\nMàn hình 14 inch FHD kết hợp góc nhìn rộng 178 độ\r\nAsus Zenbook UX481FL-BM049T sở hữu màn hình có kích thước 14 inch, độ phân giải Full HD (1920 x 1080) mang đến những hình sắc nét, chi tiết, màu sắc trung thực và sống động. Ngoài ra, tấm nền IPS cho trải nghiệm góc nhìn rộng 178° cho phù hợp với mọi tư thế và môi trường làm việc đạt độ tương phản cao ngay cả ở những góc nhìn hẹp.\r\n\r\nMàn hình 14 inch FHD kết hợp góc nhìn rộng 178 độ\r\n\r\nKhông chỉ dừng lại ở đó, màn hình của máy còn có độ phủ màu cực rộng đạt 72% NTSC và độ tương phản cao. Với độ phủ màu này, hoàn toàn đáp ứng xuất sắc nhu cầu chỉnh sửa render đồ họa chuyên nghiệp, đảm bảo xuất ra hình ảnh với chất lượng sắc nét và chân thật nhất.\r\n\r\nBàn phím rút gọn, tiến trình 1.4mm, màn hình cảm ứng FHD 12.6 inch ScreenPad Plus\r\nĐược trang bị bàn phím rút gọn có không gian rộng rãi cùng với touchpad nằm bên phải thuận tiện thao tác nhanh. Các phím của bàn phím chính có kích thước tiêu chuẩn với tiến trình 1,4mm và khoảng cách hợp lý đủ để gõ mà không sợ nhầm. Thêm nữa, bàn phím này cũng có đèn led nền, hỗ trợ người dùng gõ phím tốt hơn trong bóng tối.\r\n\r\nBàn phím rút gọn, tiến trình 1.4mm\r\n\r\nVới thiết kế đổi mới trang bị thêm màn hình 12.6 inch ScreenPad Plus trên bàn phím giúp bạn thực hiện đa tác vụ trên máy tính dễ dàng với nhiều tính năng mở rộng. Đối với phiên bản ScreenPad Plus trên sản phẩm Zenbook UX481FL-BM049T bạn có thể sử dụng như một bản vẽ đa điểm, điều này khiến những bạn làm design và đồ họa ưa chuộng. Hình ảnh bạn vẽ sẽ được thể hiện lên trên phần mềm bạn đang sử dụng. Ngoài ra, bạn có thể sử dụng màn hình ScreenPad Plus như một màn hình độc lập với màn hình chính máy tính.\r\n\r\nmàn hình cảm ứng FHD 12.6 inch ScreenPad Plus\r\n\r\nMàn hình 12.6 inch ScreenPad Plus còn trang bị nhiều tính năng tiện ích cho bạn như: Toolbar, trình phát nhạc, xem và điều chỉnh video YouTube, trình khởi chạy Launcher, chức năng máy tính, lịch biểu, bàn phím số, Asus Sync,… thông như thanh TouchPad trên Macbook.\r\n\r\nTrang bị CPU Core i7 thế hệ 10 Ram 16 GB, card Nvidia GeForce MX250 2GB\r\nĐược cung cấp sức mạnh bởi bộ vi xử lý Intel Core i7-10510U tốc độ lên đến 4.1GHz, đem lại cho máy một sức mạnh xử lý ổn định và tiết kiệm điện năng hiệu quả. Các tác vụ nặng như xử lý đồ họa thực hiện trên các phần mềm nặng ổn định mang lại trải nghiệm mượt mà. Đi kèm với đó là bộ nhớ RAM 16GB LPDDR3 2133MHz tăng khả năng đa nhiệm.\r\n\r\nTrang bị CPU Core i7 thế hệ 10 Ram 16 GB, card Nvidia GeForce MX250 2GB\r\n\r\nĐặc biệt, với card đồ họa NVIDIA GeForce MX250 2Gb cho hiệu năng tối đa nhưng lại tiết kiệm năng lượng. Máy có thể hỗ trợ bạn tối đa từ các việc văn phòng đơn giản đến các công việc mang tính chất đòi hỏi cao như thiết kế đồ họa, lập trình, cũng như giải trí với những tựa game nặng nhất hiện nay.\r\n\r\nỔ cứng SSD 1Tb thoải mái lưu trữ, Win 10 bản quyền\r\nTrang bị trên chiếc Asus Zenbook UX481FL-BM049T là ổ cứng SSD dung lượng lên đến 1Tb cho khả năng lưu trữ lớn. Vì chiếc laptop được trang bị cấu hình mạnh để sử dụng cho các tác vụ đồ họa nên ổ cứng SSD 1Tb rất phù hợp cho các bạn thiết kế đồ họa sử dụng hiệu năng cao lẫn lưu trữ dữ liệu nhiều.\r\n\r\nỔ cứng SSD 1Tb thoải mái lưu trữ, Win 10 bản quyền\r\n\r\nNgoài ra, chiếc laptop Asus Zenbook UX481FL-BM049T còn được cài sẵn Win 10 bản quyền tránh những phần mềm crack lậu tiềm ẩn virus rất nguy hiểm cho chiếc laptop của bạn đặc biệt với những bạn sử dụng làm đồ họa thì dữ liệu là thứ cực kỳ quan trọng.\r\n\r\nPin 4 Cell 70WH cho thời gian sử dụng lên đến 12,5 giờ\r\nNguồn điện năng của Asus Zenbook UX481FL-BM049T đến từ viên pin dung lượng lớn 4 cell 70 Wh sẽ không làm bạn thất vọng, cho 1 ngày làm việc dài, kèm công nghệ sạc nhanh giúp chiếc máy tính của bạn luôn đầy pin.\r\n\r\nPin 4 Cell 70WH cho thời gian sử dụng lên đến 12,5 giờ\r\n\r\nTrải qua thử nghiệm cho thấy máy có thể dùng được gần 12.5 tiếng với các tác vụ văn phòng cơ bản. Và hơn 10 giờ nếu sử dụng các tác vụ nặng chơi game giải trí. Với thời lượng pin như thế này hoàn toàn có thể đáp ứng được nhu cầu sử dụng của những người sử dụng chuyên về đồ họa cần sự di chuyển linh hoạt mà không bị hạn chế về pin.\r\n\r\nKết nối internet siêu nhanh với Wifi 6 Giga 802.11ax, cổng giao tiếp mở rộng tốc độ cao\r\nChuẩn Wi-Fi 6 Giga 802.11ax nhanh hơn gấp 4 so với Wi-Fi ac thế hệ cũ cho tốc độ truyền tải dữ liệu 1.3Gb/s mức tốc độ nhanh nhất hiện nay. Chuẩn Wi-Fi 6 có thể chạy cả 2 băng tần là 2,4GHz hoặc 5GHz băng thông sẽ rộng hơn tạo nhiều lựa chọn cho bạn sử dụng khi kết nối wifi.\r\n\r\nKết nối internet siêu nhanh với Wifi 6 Giga 802.11ax, cổng giao tiếp mở rộng tốc độ cao\r\n\r\nLaptop Asus Zenbook UX481FL-BM049T được trang bị 1 USB 3.1 Type-C lên đến 10Gbps, 1 USB 3.1 Type-A đạt 10Gbps, 1 USB 3.1 Type-A băng thông 5Gbps cho tốc độ truyền tải cao cải thiện rất nhiều thời gian trong việc sao chép dữ liệu để xử lý đồ họa.\r\n\r\nHệ thống âm thanh Harman Kardon và hỗ trợ Windows Hello\r\nHệ thống âm thanh trên Zenbook UX481FL-BM049T cũng thật sự ấn tượng. Máy được trang bị phần cứng âm thanh cao cấp Harman Kardon, kết hợp với Asus SonicMaster mang lại những trải nghiệm âm thanh lớn hơn mà không bị méo tiếng đảm bảo rằng Asus Zenbook UX481FL-BM049T sẽ cho bạn một trải nghiệm âm thanh đỉnh cao.\r\n\r\nHệ thống âm thanh Harman Kardon và hỗ trợ Windows Hello\r\n\r\nVới Windows 10 trên Zenbook UX481FL-BM049T, bạn có thể sử dụng Windows Hello một cách dễ dàng khi máy được trang bị Webcam IR có hỗ trợ Windows Hello độ phân giải sắc nét giúp nhận diện khuôn mặt nhanh chóng mở khóa máy tính tiện lợi hoặc ra hiệu bằng giọng nói để mở máy mà không phải qua các thao tác bấm phím rườm rà tốn thời gian.\r\n\r\nMua laptop Asus Zenbook UX481FL-BM049T giá rẻ tại CellphoneS\r\nHiện nay, CellphoneS đang dần trở thành một trong những hệ thống bán lẻ hàng đầu Việt Nam chuyên phân phối các sản phẩm máy tính xách tay chính hãng Asus. Với thiết kế màn hình ScreenPad Plus, cấu hình mạnh mẽ và nhiều tính năng hiện đại Asus Zenbook UX481FL-BM049T xứng đáng là một trong những lựa chọn hàng đầu cho các bạn làm chuyên về đồ họa. Sở hữu ngay một chiếc Asus Zenbook UX481FL-BM049T chính hãng tại các cửa hàng CellphoneS với mức giá cực hấp dẫn cùng nhiều ưu đãi như trả góp lãi suất 0% và các ưu đãi dành riêng cho Smember.', '[\"11201937645fadf3a6e85030.87026896.jpg\",\"10817250225fadf3a6e88eb3.63124747.jpg\",\"75054545fadf3a6e8cd47.74213746.jpg\",\"6122695645fadf3a6e90bc6.59245457.jpg\"]', 0, '2020-11-13 02:47:02'),
(28, 'Laptop Dell Gaming G3 15 3500 70223130', 8, 2, 21490000, 'Laptop Dell Gaming G3 15 3500 70223130: Laptop chơi game cao cấp\r\nBạn là một người chuyên đi công tác và vẫn mong muốn có thể sử dụng một chiếc laptop linh hoạt đem theo tiện cho việc chiến game. Bạn đang tìm kiếm một nơi mua sắm chiếc laptop Dell Gaming G3 15 3500 70223130 chính hãng, mời bạn đọc tiếp bên dưới.\r\n\r\nThiết kế bền bỉ với lớp vỏ nhựa chắc chắn cùng việc hỗ trợ Bluetooth 5.0 tiện lợi\r\nMang trong mình một thiết kế bằng nhựa chắc chắn, chiếc laptop Dell Gaming G3 15 3500 70223130 giúp cải thiện hơn về độ nặng của một laptop gaming. Cùng với đó, chúng còn cho một độ bền bỉ và khó bị hư hỏng do va đập mạnh các phần cạnh.\r\n\r\nThiết kế bền bỉ với lớp vỏ nhựa chắc chắn cùng việc hỗ trợ Bluetooth 5.0 tiện lợi\r\n\r\nMột tính năng mà bất kỳ chiếc laptop gaming nào không thể thiếu đó là chuẩn kết nối Bluetooth 5.0. Với chuẩn kết nối này giúp bạn có thể hạn chế được những độ trễ và việc kết nối ổn định chiếc laptop Dell Gaming G3 15 3500 70223130 với thiết bị ngoại vi.\r\n\r\nCon chip Intel Core i5-10300H mạnh mẽ cùng việc hỗ trợ card màn hình kép\r\nMột con chip mạnh sẽ giúp cho chiếc máy sức mạnh để chiến các tựa game tốt. Với một con chip Intel Core i5-10300H cho hiệu năng 4 nhân 8 luồng và xung nhịp lên đến 4.5GHz, mang lại một giá trị đích thực cho việc giải trí các tựa game nặng ổn định.\r\n\r\nCon chip Intel Core i5-10300H mạnh mẽ cùng việc hỗ trợ card màn hình kép\r\n\r\nSở hữu trong mình card màn hình kép GTX 1650 4GB và Intel UHD Graphic 620. Điều này giúp bạn tiết kiệm hiệu năng sử dụng pin khi không cần dùng đến các thao tác nặng và sử dụng chiếc card màn hình Intel để chạy các ứng dụng nhẹ khi cần thiết.\r\n\r\nCòn khi bạn chiến các tựa game nặng hay thực hiện chính sửa đồ hoạ trên chiếc laptop Dell Gaming G3 15 3500 70223130. Thì với 4GB của card màn hình GTX 1650, chúng sẽ giúp bạn dễ dàng và trơn tru hơn mọi thao tác.\r\n\r\nSự kết hợp của ổ HDD và SSD thuận tiện cùng thanh ram DDR4 8GB\r\nMột sự kết hợp kép nữa đến từ chiếc laptop Dell Gaming G3 15 3500 70223130 đó là phần ổ cứng. Với 1TB ổ HDD bên trong giúp bạn có thể hoạt động và sử dụng chúng để bạn có thể lưu trữ các tựa game, hình ảnh hay thậm chí các file cất giữ lâu dài.\r\n\r\nCòn khi bạn cần dùng đến các thao tác mở game, vận hành game hay việc sử dụng để mở Windows nhanh hơn thì sẽ là nhiệm vụ của SSD. Với bộ nhớ SSD lên đến 256GB giúp chiếc laptop Dell Gaming G3 15 3500 70223130 đủ để đáp ứng về tổng dung lượng nhớ.\r\n\r\nSự kết hợp của ổ HDD và SSD thuận tiện cùng thanh ram DDR4 8GB\r\n\r\nCùng với đó, việc trang bị ram lên đến 8GB giúp cho người dùng có thể thoả sức sử dụng và đa nhiệm nhiều tính năng trên chiếc laptop Dell Gaming G3 15 3500 70223130. Cùng với đó, chúng còn được trang bị thêm tính năng DDR4 tăng độ bus ram lên nhiều lần.\r\n\r\nMàn hình 15.6 inches hỗ trợ chống chói tốt cùng camera trước chất lượng HD\r\nKhi chơi game thì bạn cần một chiếc màn hình đủ lớn và mượt mà để thể hiện hình ảnh sắc nét. Với màn hình 15.6 inches trên chiếc laptop Dell Gaming G3 15 3500 70223130 chúng cho một độ chống chói và khả năng hiển thị màu sắc khá ổn.\r\n\r\nVới chất lượng hình ảnh đạt mức FHD, cùng với đó hình ảnh còn được làm mượt mà hơn bằng cách tăng tần số quét của màn hình. Với tần số quét lên đến 120Hz, bạn có thể yên tâm sử dụng lâu dài mà không lo bị mỏi mắt.\r\n\r\nMàn hình 15.6 inches hỗ trợ chống chói tốt cùng camera trước chất lượng HD\r\n\r\nNhằm tạo điều kiện cho người dùng nào đang sử dụng cam trước để làm streamer thì chiếc camera trước chất lượng HD sẽ giúp bạn thực hiện được điều này. Cùng với đó, khi bạn thực hiện các cuộc gọi hội họp cũng được tốt và thể hiện rõ nét hơn cho bên gọi.\r\n\r\nBàn phím hành trình phù hợp với đèn led nền xanh cùng Trackpad nổi trội\r\nBàn phím là một trong những điều mà các laptop gaming là tốt nhất. Tốc độ nhấn phím được cải thiện cho thông số thấp, cùng với đó là các phím bấm to bản và nhẹ nhàng. Một đều nữa là đèn led xanh được trang bị trên chiếc laptop Dell Gaming G3 15 3500 70223130.\r\n\r\nBàn phím hành trình phù hợp với đèn led nền xanh cùng Trackpad nổi trội\r\n\r\nKhông những chỉ bàn phím mới nổi trội mà chiếc Trackpad kế bên cũng nổi trội không hề kém cạnh. Với một đường viền xanh chạy dọc thân của Trackpad giúp bạn có thể nhìn chúng dễ dàng hơn và bắt mắt hơn rất là nhiều.\r\n\r\nViên pin 3 Cell 51WHr thời lượng sử dụng lâu dài cùng Windows 10 Home bản quyền\r\nCó thể nói chiếc laptop Dell Gaming G3 15 3500 70223130 mang một dung lượng pin có thể sử dụng lên đến 7 giờ. Một dung lượng pin 3 Cell 51WHr mang lại cho người dùng một trải nghiệm lâu dài và bền bỉ khi chơi game hay sử dụng chúng cho công việc.\r\n\r\nViên pin 3 Cell 51WHr thời lượng sử dụng lâu dài cùng Windows 10 Home bản quyền\r\n\r\nCùng với đó, khi mua laptop Dell Gaming G3 15 3500 70223130 bạn đã được cài sẵn một hệ điều hành Windows 10 bản quyền. Với chất lượng bản quyền như vậy bạn có thể yên tâm sử dụng mà không cần phải cài Windows lậu để dùng nữa.', '[\"7701312985fadf6842440c9.95398481.jpg\",\"12918622345fadf684247f48.87193306.jpg\",\"1938837665fadf68424bdc1.37942904.jpg\",\"16102077435fadf68424fc43.44362404.jpg\"]', 0, '2020-11-13 02:59:16'),
(29, 'Laptop Dell Gaming G5 15 5500 70225485 ', 8, 2, 28890000, 'Sau phiên bản G3 3500 thì vào năm nay, Dell tiếp tục cho ra mắt dòng sản phẩm laptop gaming mới với tên gọi laptop Dell Gaming G5 15 5500. Chiếc laptop với thiết kế khá giống với G3 nhưng đã được cải thiện thêm các tính năng để phù hợp với nhu cầu của người dùng.\r\n\r\nChất liệu vỏ ngoài bằng nhựa cao cấp, bản lề chữ U chắc chắn\r\nGiống với chiếc G3 thế hệ trước, lần này laptop Dell Gaming G5 15 5500 tiếp tục được hãng sản xuất sử dụng chất liệu nhựa để tạo nên vỏ ngoài.\r\n\r\nChất liệu nhựa cao cấp tạo cảm giác chắc chắn từ phần nắp đến thân máy.\r\n\r\nChất liệu vỏ ngoài bằng nhựa cao cấp, bản lề chữ U chắc chắn\r\n\r\nBề mặt vỏ máy là một lớp nhựa bóng, với tông màu chủ đạo là đen đặc trưng của dòng máy Dell, thêm nữa thiết kế logo Dell ở chính giữa nắp và chữ G5 phía sau máy tạo nên vẻ ngoài sang trọng cũng như hiện đại.\r\n\r\nThiết kế bản lề liền khối nối hai phần chính của máy khá chắc chắn, hai cạnh dưới góc màn hình được thiết kế dạng vát hình chữ U trông rất mạnh mẽ, phù hợp với dòng sản phẩm laptop Gaming.\r\n\r\nMàn hình 15.6 inch độ phân giải Full HD, tần số quét 120Hz\r\nLaptop Dell Gaming G5 15 5500 được trang bị màn hình có kích thước khá lớn lên đến 15.6 inch đủ để người dùng có thể sử dụng thoải mái cùng lúc nhiều ứng dụng đa nhiệm dễ dàng mà không bị hẹp so với góc nhìn.\r\n\r\nĐộ phân giải màn hình cũng nằm ở mức cao đạt Full HD cho mọi hình ảnh đều được tái hiện sắc nét đến từng chi tiết nhỏ. Đưa mọi hình ảnh chân thực nhất đến mặt người dùng khi xem phim hay chơi game hằng ngày.\r\n\r\nMàn hình 15.6 inch độ phân giải Full HD, tần số quét 120Hz\r\n\r\nChiếc màn hình này còn có một điểm nổi bật mà hầu hết mọi gamer đều quan tâm đến đó là tần số quét. Với tần số lên đến 120Hz, tốc độ khung hình của chiếc laptop rất cao dư sức để chơi game với khung hình lớn.\r\n\r\nĐộ sáng màn hình cũng lên đến 300 nits cho khả năng sử dụng thoải mái ở mọi không gian mà không lo bị chói sáng hay thiếu sáng khi sử dụng. Mang đến một góc nhìn chân thực nhất đến người dùng khi nhìn vào.\r\n\r\nChip Intel Core i7-10750H, Ram 8Gb, ổ cứng SSD 512GB M.2 PCIe, GeForce RTX 1660 Ti 6GB\r\nChiếc laptop Dell Gaming G5 15 5500 được trang bị vi xử lý Intel Core i7-10750H cho xung nhịp từ 2.6GHz đến 5GHz đồng thời sở hữu bộ case 12MB, cho phép laptop vận hành hiệu quả, xử lý thông tin mượt mà.\r\n\r\nHơn nữa, bộ nhớ RAM 8GB DDR4 2933MHz giúp máy có thể đa nhiệm tốt nhiều phần mềm cùng một lúc đồng thời còn giúp bạn chơi game nặng cấu hình cao, sử dụng các phần mềm chỉnh sửa video mà không bị giật lag.\r\n\r\nChip Intel Core i7-10750H, Ram 8Gb, ổ cứng SSD 512GB M.2 PCIe, GeForce RTX 1660 Ti 6GB\r\n\r\nBạn cũng có thể nâng cấp bộ nhớ RAM lên tối đa 32GB để tối ưu hóa khả năng lưu trữ thông tin. Ngoài ra, dung lượng SSD 512GB M.2 PCIe NVMe sẽ giúp laptop khởi động và truy xuất dữ liệu nhanh chóng hơn.\r\n\r\nVới chuẩn ổ cứng này tốc độ của chiếc laptop khi chơi game được xử lý rất nhanh và mang đến hiệu năng cực kỳ tốt so với dòng ổ cứng HDD.\r\n\r\nTiếp đến là hệ thống card đồ họa mạnh mẽ của Nvidia GeForce RTX 1660 Ti 6GB giúp bạn dễ dàng chơi các game cũng như xử lý hình ảnh chân thực với tần số quét cao mượt mà trên laptop, không lo giật lag màn hình.\r\n\r\nBàn phím nhạy, cổng kết nối đa dạng, pin 4 Cell 68WHr\r\nBàn phím được trang bị đèn led, với các phím có độ nhạy cao, cho thao tác dễ dàng. Bốn phím chuyên dụng cho các gamer là W A S D được thiết kế thêm lớp viền bao phủ trông rất nổi bật và bắt mắt khi sử dụng ban đêm.\r\n\r\nBàn phím nhạy, cổng kết nối đa dạng\r\n\r\nBên trên laptop được trang bị camera HD 720P gồm mic hỗ trợ người dùng quay phim, chụp ảnh, học trực tuyến với chất lượng đảm bảo.\r\n\r\nNgoài ra, pin 4 Cell 68WHr của laptop G5 cho tốc độ sạc chưa đến 90 phút là đã đầy pin. Và thời gian sử dụng dài lên đến hơn 8 giờ liên tục đối với hiệu năng cao và lên đến 10 giờ đối với hiện năng bình thường nhẹ.\r\n\r\nHệ thống tản nhiệt được bố trí ở gần trục đóng mở laptop với các khe tản nhiệt rộng rãi, hỗ trợ làm mát máy tốt hơn. Giúp game thủ có thể chơi mà không lo bị quá nóng khi sử dụng ở hiệu suất cao mà người dùng đưa ra.\r\n\r\npin 4 Cell 68WHr\r\n\r\nThêm nữa, laptop Dell Gaming G5 15 5500 tích hợp đa dạng cổng kết nối, hỗ trợ tối đa liên kết với các thiết bị ngoại vi khác. Ở cạnh bên phải máy là khe cắm thẻ SD, jack cắm tai nghe/micro, 2 USB-A 2.0 và lỗ khóa an toàn.\r\n\r\nPhía cạnh trái bao gồm lỗ sạc, 1 cổng HDMI, cổng USB và 1 cổng type C.\r\n\r\nMua laptop Dell Gaming G5 15 5500 giá rẻ tại CellphoneS\r\nLaptop Dell Gaming G5 15 5500 mạnh mẽ và đẳng cấp với thiết kế vát chữ U màu đen cùng hệ thống vi xử lý mượt mà, đa nhiệm nhiều tác vụ cùng lúc, cho phép bạn có những trải nghiệm chơi game giải trí tuyệt vời.\r\n\r\nĐến ngay các cửa hàng CellphoneS để trải nghiệm và sở hữu ngay chiếc laptop thế hệ mới tuyệt vời này với mức giá rẻ kèm nhiều phần quà và đặt biệt còn có thể trả góp 0%.', '[\"9046688675fadf7291f3b87.53735422.jpg\",\"5147409305fadf7291f7a03.00865386.jpg\",\"4072310855fadf7291fb885.52492000.jpg\"]', 0, '2020-11-13 03:02:01');

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
(1, 1, 'LG Q52 ra mắt với màn hình nốt ruồi 6.6 inch, 4 camera 48MP, giá bán gần 7 triệu đồng', 'LG mới đây đã chính thức ra mắt LG Q52 tại thị trường Hàn Quốc, và như tên gọi của máy, đây là phiên bản kế nhiệm của LG Q51 ra mắt vào đầu năm nay.', 'LG mới đây đã chính thức ra mắt LG Q52 tại thị trường Hàn Quốc, và như tên gọi của máy, đây là phiên bản kế nhiệm của LG Q51 ra mắt vào đầu năm nay.LG Q52 đạt chứng nhận độ bền quân đội MIL-STD-810G, máy có kích thước 160 x 76.7 x 8.4mm, màn hình IPS LCD 6.6 inch HD+ với 1 lỗ khoét ở giữa viền cạnh trên chứa camera selfie 13MP.Mặt sau của LG Q52 làm bằng polycarbonate, có lớp phủ bóng mờ để chống bám dấu vân tay. Bộ 4 camera sau của LG Q52 gồm: Camera chính 48MP, camera góc siêu rộng 8MP, camera macro 2MP và cảm biến độ sâu 2MP.LG Q52 sử dụng chip Helio P35 (model tiền nhiệm LG Q51 dùng chip Helio P22), bộ nhớ RAM 4GB và bộ nhớ trong 64GB, có khe cắm thẻ nhớ microSD. Smartphone này có pin 4,000 mAh nhưng chưa rõ tốc độ sạc là bao nhiêu.', '[\"14500737315f967d0ee2aa77.33978730.jpg\",\"19247383895f967d0ee2e8f7.49108891.jpg\"]', '', 20, '2020-10-26 07:38:54'),
(2, 1, 'Trên tay Vsmart Aris Pro: Smartphone màn hình “vô khuyết”, có camera selfie ẩn dưới màn hình đầu tiên Việt Nam', 'Sau hơn một tháng ra mắt, Vsmart ngày hôm nay cũng đã chính thức bán ra chiếc Aris Pro, chiếc smartphone thương hiệu Việt được mong chờ nhất trong thời gian vừa qua. Vsmart Aris Pro được đánh giá là một trong những chiếc smartphone đánh dấu cột mốc phát triển của ngành công nghiệp sản xuất smartphone của người Việt, bởi đây là một trong những chiếc máy đầu tiên trên thế giới được trang bị công nghệ camera ẩn dưới màn hình hoàn toàn mới.', 'Sau hơn một tháng ra mắt, Vsmart ngày hôm nay cũng đã chính thức bán ra chiếc Aris Pro, chiếc smartphone thương hiệu Việt được mong chờ nhất trong thời gian vừa qua. Vsmart Aris Pro được đánh giá là một trong những chiếc smartphone đánh dấu cột mốc phát triển của ngành công nghiệp sản xuất smartphone của người Việt, bởi đây là một trong những chiếc máy đầu tiên trên thế giới được trang bị công nghệ camera ẩn dưới màn hình hoàn toàn mới.Với Aris Pro, Vsmart cho biết hãng đã sử dụng công nghệ xử lý hình ảnh bằng AI nhằm cải thiện chất lượng của công nghệ camera vẫn còn đang tương đối mới mẻ này. Cùng Sforum trên tay chiếc smartphone mới nhất của Vsmart để xem xem liệu những nâng cấp của Aris Pro có thực sự hấp dẫn?Nhìn chung vỏ hộp và cách đóng gói của Vsmart Aris Pro vẫn tương tự như phiên bản Aris thường và các dòng điện thoại Vsmart khác. Máy vẫn đi kèm củ sạc nhanh 18W, cáp sạc USB-C, tai nghe 3.5mm và người dùng Aris cũng được tặng kèm thêm một miếng dán màn hình kháng khuẩn.', '[\"7031998335f968450ecfba4.58802234.jpg\",\"10724075385f968450ed3a21.07284875.jpg\"]', '', 15, '2020-10-26 08:09:52'),
(3, 1, 'Nên chọn iPhone 12 Pro hay iPhone 12 Pro Max: Khi khác biệt không chỉ là kích thước', 'Bên cạnh khác biệt về kích thước máy, kích thước màn hình và dung lượng pin thì iPhone 12 Pro và iPhone 12 Pro Max còn một vài điểm khác biệt khác khiến bạn có thể phải chân nhắc khi lựa chọn một trong hai chiếc iPhone cao cấp nhất năm nay.Sự khác biệt lớn nhất đến từ kích thước màn hình, iPhone 12 Pro sở hữu màn hình 6.1 inch tương đương với iPhone 12, trong khi đó iPhone 12 Pro Max là 6.7 inch, lớn hơn khá nhiều. Bây giờ chúng ta sẽ đi so sánh chi tiết hơn về bộ đôi iPhone cao cấp này để xem đâu mới thực sự là lựa chọn hấp dẫn', 'Sự khác biệt lớn nhất đến từ kích thước màn hình, iPhone 12 Pro sở hữu màn hình 6.1 inch tương đương với iPhone 12, trong khi đó iPhone 12 Pro Max là 6.7 inch, lớn hơn khá nhiều. Bây giờ chúng ta sẽ đi so sánh chi tiết hơn về bộ đôi iPhone cao cấp này để xem đâu mới thực sự là lựa chọn hấp dẫn.iPhone 12 Pro và iPhone 12 Pro Max giống hệt nhau về hiệu suất bộ xử lý. Cả hai thiết bị đều được trang bị A14 Bionic mới nhất, được Apple gọi là “bộ xử lý nhanh nhất trong smartphone”. Cả iPhone 12 Pro và iPhone 12 Pro Max cũng có Neural Engine mới nhất để cải thiện các tính năng và khả năng học máy. Apple cho biết Neural Engine 16 nhân mới mang lại hiệu suất tăng 80% so với thế hệ trước. Bạn cũng nhận được 6GB RAM trên cả hai thiết bị, cao hơn so với 4GB RAM mà Apple đã sử dụng trong iPhone 11 Pro và iPhone 11 Pro Max.iPhone 12 series là dòng iPhone đầu tiên có kết nối 5G. Apple cung cấp cả phiên bản hỗ trợ 5G Sub-6GHz và mmWave, tuy nhiên hiện tại model 5G mmWave chỉ cung cấp tại Hoa Kỳ và trên thực tế công nghệ 5G cũng chưa phổ biến trên thế giới.Trên iPhone 11 Pro và iPhone 11 Pro Max năm ngoái không có sự khác biệt nào về camera. Nhưng năm nay Apple đã mang đến sự khác biệt về camera trên hai mẫu iPhone cao cấp.  Cả iPhone 12 Pro và iPhone 12 Pro Max đều có 3 camera ở mặt sau với ống kính siêu rộng, góc rộng và ống kính tele 12MP. Tất cả các camera này đều nhận được các tính năng Night mode, Deep Fusion, Apple ProRAW.', '[\"12026612575f97c9429cbb38.97932773.jpg\",\"3824020275f97c9429cf9b1.86068848.png\"]', '', 36, '2020-10-27 07:16:18'),
(4, 1, 'Trên tay Xiaomi Mi 10T Pro: Smartphone hot nhất phân khúc cận cao cấp!', 'Xiaomi Mi 10T Pro đang là một trong những chiếc smartphone hot nhất phân khúc cận cao cấp khi sở hữu cấu hình khủng, camera tốt, màn hình 144Hz siêu mượt cùng mức giá vô cùng hợp lý.Về hiệu năng, Xiaomi Mi 10T Pro được trang bị con chip Snapdragon 865, vẫn là con chip mạnh mẽ nhất ở thời điểm hiện tại chỉ sau Snapdragon 865+, RAM 8GB và bộ nhớ 128GB/256GB, do đó người dùng sẽ không cần phải lo lắng về hiệu năng của máy. Kết hợp với màn hình 144Hz, trải nghiệm sử dụng sẽ vô cùng mượt mà. Mi 10T Pro được trang bị viên pin dung lượng 5000mAh, hỗ trợ sạc nhanh 33W, không phải nhanh nhất, tuy nhiên vẫn cho tốc độ sạc nhanh đáng kể.Hiện tại, Xiaomi Mi 10T Pro đang được bán ra với mức giá từ 11,990,000 đồng cho tùy chọn bộ nhớ 128GB, phiên bản 256GB sẽ có giá 12,990,000 đồng cao hơn một chút. Bạn đọc quan tâm tới sản phẩm có thể tham khảo mức giá đang cực kỳ hấp dẫn tại hệ thống cửa hàng CellphoneS ở đường dẫn dưới đây.', 'Ở thời điểm hiện tại, xét trong phân khúc smartphone có tỷ lệ hiệu năng trên giá thành tốt nhất mà người dùng có thể tìm kiếm được, Xiaomi tiếp tục là một cái tên được người dùng để ý tới. Hãng mới đây đã cho ra mắt chiếc Xiaomi Mi 10T Pro tại thị trường Việt Nam. Với mức giá niêm yết chỉ từ 11.9 triệu đồng, Mi 10T Pro hiện đang là chiếc smartphone cân bằng được các yếu tố phần cứng tốt nhất.Phiên bản mà Sforum đang có ngày hôm nay là bản màu Bạc Ánh Trăng (Lunar Silver), tùy chọn bộ nhớ 8GB + 128GB, ngoài ra máy còn có thêm các màu sắc khác như Đen Vũ Trụ (Cosmic Black) và màu xanh Aurora (Aurora Blue), kèm theo đó là dung lượng 12GB + 256GB.Mặt lưng của Mi 10T Pro nổi bật với cụm camera khá lớn có cách thiết kế đặc trưng, được đặt trong một mô-đun hình chữ nhật ở góc trái. Cụm camera này bao gồm một camera chính có độ phân giải 108MP, sử dụng chung cảm biến với Mi 10 / Mi 10 Pro, ngoài ra máy còn có thêm một camera góc siêu rộng 13MP f/2.4 và một camera macro 5MP f/2.4. Mặc dù thiếu đi camera tele tuy nhiên người dùng có thể chụp 2x bằng camera 108MP mà chất lượng không bị giảm đi quá nhiều. Do có cảm biến lớn nên cụm camera của máy cũng khá lồ. Máy cũng có thêm camera selfie 20MP ở mặt trước.Sang tới mặt trước, Mi 10T Pro được trang bị một màn hình “nốt ruồi” kích thước 6,67 inch, tấm nền IPS LCD có độ phân giải Full HD+ và tần số quét lớn lên tới 144Hz. Màn hình này theo Xiaomi công bố thì nó sẽ hỗ trợ công nghệ AdaptiveSync và MEMC cho phép tự động nâng mức fps của các nội dung hiển thị ở mức khung hình thấp. Ngoài ra, màn hình của Mi 10T/10T Pro cũng hỗ trợ chuẩn HDR10 và dải màu DCI-P3', '[\"6283683165f97c9d46b0264.88747021.jpg\",\"14796369195f97c9d46b40e6.96857813.jpg\"]', '', 90, '2020-10-27 07:18:44'),
(5, 1, 'Đã có danh sách smartphone chơi được LMHT: Tốc Chiến, iPhone 5s từ 2013 vẫn chơi được', 'trong nỗ lực phổ cập tựa game mới của mình tới nhiều người dùng hơn, Riot Games đã cho phép những chiếc máy có tuổi đời lên tới 7 năm vẫn có thể chơi được tựa game này.', 'Hiện tại, tựa game Liên Minh Huyền Thoại: Tốc Chiến đã chính thức mở cửa server Open Beta. Server mới cho phép toàn bộ các game thủ ở các khu vực được hỗ trợ có thể đăng nhập và trải nghiệm ngay lập tức tựa game này mà không cần phải đăng ký trước như đợt Closed Beta. Các khu vực được phép tham gia vào server Open Beta bao gồm: Hàn Quốc, Nhật Bản, Philippines, Singapore, Malaysia, Indonesia, Thái Lan.Theo như trang mô tả của App Store thì các thiết bị sau sẽ có thể tải về và chơi được tựa game Liên Minh: Tốc chiến mới.\r\n\r\niPhone: từ 5S trở lên\r\niPad: từ iPad 5/iPad mini 3 trở lên và tất cả các dòng iPad Air/iPad Pro\r\niPod touch: iPod touch 6 trở lên\r\niOS: 10.0 trở lên\r\nNhư vậy chúng ta có thể thấy ngay cả chiếc iPhone 5s ra mắt từ năm 2013, hiện tại đã 7 năm tuổi và đã không còn được hỗ trợ bởi Apple từ quá lâu vẫn có thể tải về và trải nghiệm tựa game LMHT: Tốc Chiến. Chỉ cần yêu cầu iOS 10.0 trở lên là có thể tải về được rồi.\r\n\r\nVới nền tảng Android, Riot Games khuyến cáo cấu hình tối thiểu sử dụng hệ điều hành Android 4.4 hoặc cao hơn, RAM 1,5GB, chip xử lý 1,5 GHz (32 bit hoặc 64 bit) và vi xử lý đồ họa PowerVR GT7,Mặc dù vậy, trong đợt mở cửa server Open Beta lần này, game thủ Việt không nằm trong danh sách trải nghiệm, tuy nhiên trong thời gian tới Riot Games sẽ sớm mở cửa thêm nhiều cụm server hơn để các game thủ trên toàn thế giới có thể được trải nghiệm tựa game siêu hot này.', '[\"11954352275f9bbeed6240a1.19726402.jpg\",\"10964933585f9bbeed63b7b1.72673634.jpg\"]', '', 7, '2020-10-30 07:21:17'),
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `donhangphu1`
--
ALTER TABLE `donhangphu1`
  MODIFY `id_dhphu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `MaNSX` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
