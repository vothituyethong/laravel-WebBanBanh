-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2021 lúc 03:41 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doanlaravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `password`, `hoten`, `diachi`, `sdt`, `email`, `loai`, `trangthai`, `status`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '202cb962ac59075b964b07152d234b70', 'Ngô Huỳnh Thanh Duy', 'Q TD', '0374572711', 'admin@gmail.com', 'admin', 'active', 1, NULL, NULL, NULL, NULL),
(6, 'e10adc3949ba59abbe56e057f20f883e', 'Ngô Huỳnh Thanh Duy', 'Q TD', '0374572711', 'ngoduy3110@gmail.com', 'admin', 'active', 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_hoadon` int(10) UNSIGNED NOT NULL,
  `TenSP` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `Gia` int(10) UNSIGNED DEFAULT NULL,
  `KhuyenMai` int(11) DEFAULT NULL,
  `ThanhTien` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenDanhMuc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TrangThai` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `TenDanhMuc`, `TrangThai`, `created_at`, `updated_at`) VALUES
(1, 'SẢN PHẨM MỚI', 1, '2020-12-30 06:48:32', '2020-12-30 06:48:32'),
(2, 'SẢN PHẨM LIÊN QUAN', 1, '2020-12-30 06:49:46', '2020-12-30 06:49:46'),
(3, 'SẢN PHẨM BÁN CHẠY', 1, '2020-12-30 06:49:54', '2021-01-04 03:12:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` int(11) DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thanhtien` int(11) DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id`, `user_id`, `hoten`, `sdt`, `diachi`, `thanhtien`, `trangthai`, `created_at`, `updated_at`) VALUES
(13, 20, 'Ngô Huỳnh Thanh Duy', 374572711, '558- 560 Tỉnh Lộ 10, phường Bình Trị Đông, quận Bình Tân, Hồ Chí Minh', 9990000, 1, NULL, NULL),
(16, NULL, 'Ngô Huỳnh Thanh Duy', 374572711, '558- 560 Tỉnh Lộ 10, phường Bình Trị Đông, quận Bình Tân, Hồ Chí Minh', 3490000, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenloai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nhacungcap` int(10) UNSIGNED DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id`, `tenloai`, `nhacungcap`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, 'Smartphone Samsung', 1, '1', '2020-12-30 07:12:50', '2020-12-30 07:12:50'),
(2, 'IPhone', 2, '1', '2020-12-30 07:13:26', '2020-12-30 07:13:26'),
(3, 'Xiaomi', 3, '1', '2020-12-30 07:13:46', '2020-12-30 07:13:46'),
(4, 'Oppo', 4, '1', '2020-12-30 07:13:56', '2020-12-30 07:13:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_12_22_161018_table__nha_cung_cap', 1),
(2, '2020_12_22_161153_table__loai_san_pham', 1),
(3, '2020_12_30_131614_table_danhmuc', 1),
(4, '2020_12_30_132033_table_user', 1),
(5, '2020_12_30_132504_table_hoadon', 1),
(6, '2020_12_30_132513_table_chitiethoadon', 1),
(7, '2020_12_30_132652_table_sanpham', 1),
(8, '2021_01_02_044915_customer', 2),
(9, '2021_01_02_051806_customer', 3),
(10, '2021_01_02_153024_admin', 4),
(11, '2021_01_02_172022_admin', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenncc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`id`, `tenncc`, `diachi`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, 'Samsung Electronics Vietnam', 'Yên Trung, Yên Phong, Bắc Ninh', 1, '2020-12-30 06:56:18', '2020-12-30 06:56:18'),
(2, 'F.Studio (by FPT) - Apple Authorized Reseller', '121 Đ. Lê Lợi, Phường Bến Thành, Quận 1, Thành phố Hồ Chí Minh', 1, '2020-12-30 06:56:43', '2020-12-30 06:56:43'),
(3, 'Đại Đoàn Gia Group', 'Số 03, khu Tiên Sơn, thị trấn Chúc Sơn, Chương Mỹ, Hà Nội', 1, '2020-12-30 07:04:01', '2020-12-30 07:04:30'),
(4, 'Công Ty Oppo Việt Nam', 'Tầng 12, Tòa nhà LIM 62A CMT8, Quận 3, TP Hồ Chí Minh', 1, '2020-12-30 07:12:02', '2020-12-30 07:12:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenSP` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gia` int(10) UNSIGNED DEFAULT NULL,
  `GiaMoi` int(10) UNSIGNED DEFAULT NULL,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `Mota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TrangThai` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `MaLoai` int(10) UNSIGNED DEFAULT NULL,
  `DanhMuc` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `TenSP`, `Gia`, `GiaMoi`, `Image`, `Size`, `SoLuong`, `Mota`, `TrangThai`, `created_at`, `updated_at`, `MaLoai`, `DanhMuc`) VALUES
(1, 'Bánh phô mát dâu ', 75000, 65000, 'chck3.jpg', 'tam giác - 7cm*12cm', 100, 'Nhấm nháp mẩu bánh phô mát dâu tây bạn sẽ cảm nhận trọn vẹn mùi vị chua ngọt đặc trưng của loại quả này và đặc biệt hơn khi nó đi kèm với vị béo của phô mát.', 1, '2021-10-30 07:21:06', '2021-10-30 07:25:17', 1, 1),
(2, 'Bánh phô mát sô-cô-la', 500000, 450000, 'chck9.jpg', '32cm*5cm', 100, 'Màu sắc trang trọng, vẻ bóng bẩy của sô cô la, cùng những họa tiết đặc sắc từ bàn tay khéo léo của người thợ bánh khiến chiếc bánh trở thành món quà lịch thiệp nhất để gửi tặng bạn bè vào những dịp đặc biệt', 1, '2021-10-30 07:24:30', '2021-10-30 07:24:30', 2, 2),
(3, 'Bánh phô mát mận', 70000, 60000, 'chck6.jpg', 'tam giác 7cm*12cm', 10, 'Chiếc bánh phô mát đi kèm với mùi mứt mận chua ngọt', 1, '2021-10-30 07:26:34', '2021-10-30 07:26:34', 1, 1),
(4, 'Bánh phô mát hương mâm xôi', 80000, 75000, 'chck7.jpg', 'tam giác - 7cm*12cm', 10, 'Những quả mâm xôi chín mọng căng đều tô điểm cho chiếc bánh phô mát thêm phầm hấp dẫn', 1, '2021-10-30 07:28:30', '2021-10-30 07:28:30', 1, 1),
(5, 'Cupcake cream', 25000, 20000, 'chck12.jpg', 'Medium - 4cm', 10, 'Ngọt ngào hương vị bánh sô-cô-la hòa quyện với vị kem tươi ngọt ngào', 1, '2021-10-30 07:30:34', '2021-10-30 07:30:34', 3, 1),
(6, 'Cupcake cookie', 30000, 25000, 'chck13.jpg', 'Medium - 4cm', 10, 'Chiếc bánh cupcake được đính kèm thêm một chiếc cookie nhỏ xinh.', 1, '2021-10-30 07:32:29', '2021-10-30 07:52:37', 3, 3),
(7, 'Cupcake dâu tây', 25000, 20000, 'chck14.jpg', 'Medium - 4cm', 10, 'Mùi vị thơm ngon của chiếc bánh cupcake thông thường được nâng lên bởi vị chua thanh khiết của những quả dâu tây chín mọng', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 3, 1),
(8, 'Cupcake hoa hồng', 30000, 25000, 'chck15.jpg', 'Medium - 4cm', 10, 'Mang dáng vẻ của những nụ hồng chúm chím dễ thương, chiếc bánh cupcake hoa hồng sẽ thay những lời ngọt ngào mà bạn trăm ngàn lần muốn nói', 1, '2021-11-04 03:55:20', '2021-11-04 03:55:20', 3, 3),
(9, 'Cupcake Vani', 20000, 15000, 'chck16.jpg', 'Medium - 4cm', 10, 'Màu trắng tinh khôi đi kèm với hương vị đặc trưng cau vanilla mang đến cảm giác ngon miệng cho bạn và gia đình', 1, '2021-11-04 03:57:51', '2021-11-04 03:57:51', 3, 3),
(10, 'Donut sô-cô-la đậu phộng', 20000, 15000, 'chck8.jpg', 'Regular 3\'\'', 10, 'Lớp hạt đạu phộng trên bề mặt chiếc bánh donut gây một cảm giác không thể chối từ ngay cả đối với người xem ảnh', 1, '2021-11-04 03:59:00', '2021-11-04 03:59:00', 4, 1),
(11, 'Donut giòn', 30000, 25000, 'dnut3.jpg', 'regular 3\'\'', 10, 'Chiếc bánh donut được nướng giòn thơm ngon, sé thật thú vị khi bạn vừa nhâm nhi trà nóng vừa thưởng thức chiếc bánh này.', 1, '2021-11-04 04:00:06', '2021-11-04 04:00:06', 4, 3),
(12, 'Donut Sô-cô-la', 25000, 20000, 'chck6.jpg', 'Regular - 3\'\'', 10, 'Bánh Donut mềm mịn cùng lớp sô-cô-la óng ánh.', 1, '2021-11-04 04:01:30', '2021-11-04 04:01:30', 4, 3),
(13, 'Donut kẹo đường', 25000, 20000, 'chck10.jpg', 'Regular 3\'\'', 10, 'Mới nghe tên tưởng \"kẹo đồng\" chứ.. thôi, kẹo đường ăn cũng được', 1, '2021-11-04 03:53:20', '2021-11-04 03:55:40', 4, 1),
(14, 'Donut việt quất', 30000, 25000, 'chck17.jpg', 'Regular 3\'\'', 10, 'Chiếc bánh được trang trí bởi những trái blueberry mọng nước', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 4, 2),
(15, 'Gato kem dâu tây', 300000, 280000, 'chck5.jpg', '32cm*5cm', 10, 'Vị chua thanh của chanh hòa với vị béo của kem tươi khiến ai đã từng nếm thử một lần cứ có cảm giác vương vấn mãi trên đầu môi chót lưỡi :))', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 2, 2),
(16, 'Gato bơ hạnh nhân', 350000, 340000, 'lzck88.jpg', '32cm*5cm', 10, 'Bánh mang hương vị béo ngậy của bơ hòa quyện cùng vị thơm ngọt bùi của hạnh nhân.', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 2, 2),
(17, 'Gato Sô-cô-la', 350000, 330000, 'chck3.jpg', '32cm*5cm', 10, 'Bánh gato mịn màng cùng vị đắng nhẹ của sô-cô-la', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 2, 2),
(18, 'Bánh Waffle trái cây', 400000, 390000, 'chck4.jpg', '32cm*5cm', 10, 'Chiếc bánh nhiều lớp bánh waffle được nướng lên, bên trên là trái cây tươi ngon hấp dẫn.', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 2, 2),
(19, 'Gato lúa mạch', 420000, 400000, 'lzck12.jpg', '32cm*5cm', 10, 'Hương vị lúa mạch  làm cho chiếc bánh thật hấp dẫn.', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 2, 1),
(20, 'Gato chuối', 380000, 350000, 'lzck14.jpg', '32cm*5cm', 9, 'Bánh đi kèm với chuối ngọt lịm và thơm ngát.', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 2, 3),
(21, 'Gato cốm', 450000, 420000, 'lzck15.jpg', '32cm*5cm', 9, 'Xen kẽ những lớp bột là lớp kem đậm đà hương vị cốm.', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 2, 3),
(22, 'Gato cacao', 400000, 390000, 'lzck18.jpg', '32cm*5cm', 9, 'Xen lẫn trong từng lớp bột bánh là mùi vị đậm đà của cacao.', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 2, 1),
(23, 'Gato Bí ngô', 350000, 340000, 'lzck19.jpg', '32cm*5cm', 9, 'Hương vị bánh hòa quyện với hương bí ngô tạo nên một mùi vị độc đáo hơn bao giờ hết.', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 2, 2),
(25, 'Bánh Mousse vị cam', 30000, 25000, 'spck5.jpg', 'tam giác - 7cm*12cm', 8, 'Bột bánh được nhào với nước ép cam tươi ngọt ngào', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 1, 1),
(26, 'Mousse Mango Coconut', 40000, 35000, 'cpck332.jpg', 'chữ nhật - 5cm*10cm', 10, 'Bánh Mousse kết hợp lớp bánh chua ngọt từ xoài cùng với vị thanh mát của dừa.', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 1, 2),
(27, 'Bánh trà xanh', 35000, 30000, 'cpck33.jpg', 'tam giác - 7cm*12cm', 9, 'Bánh mang vị thanh mát đến từ trà xanh Nhật Bản.', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 1, 2),
(28, 'Bánh Kiwi', 40000, 35000, 'cpck34.png', 'chữ nhật - 5cm*10cm', 9, 'Vị thanh mát ngon và độc lạ của kiwi.', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 1, 3),
(29, 'Bánh sô-cô-la nhiều lớp', 40000, 35000, 'cpck31.jpg', 'chữ nhật 5cm*10cm', 9, 'Kết hợp nhiều sô-cô-la khác nhau mang đến nhiều trải nghiệm hương vị khác nhau cho người dùng yêu thích sô-cô-la', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 1, 1),
(30, 'Cupcake cam', 25000, 20000, 'cpck12.jpg', 'Medium 4cm', 8, 'Chiếc bánh được trang trí bằng lát cam trông rất bắt mắt.', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 3, 2),
(31, 'Cupcake dễ thương', 35000, 30000, 'cpck20.jpg', 'Medium 4cm', 8, 'Chiếc bánh được trang trí dễ thương, sẽ là phần quà thích hợp cho bạn bè trong những dịp tiệc tùng.', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 3, 2),
(32, 'Cupcake hoa tuyết', 30000, 25000, 'cpck16.jpg', 'Medium 4cm', 8, 'Họa tiết hoa tuyết đem lại vẻ lung linh cho chiếc bánh.', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 3, 1),
(33, 'Cupcake sô-cô-la', 25000, 20000, 'chck11.jpg', 'Medium 4cm', 10, 'Hương vị sô-cô-la đậm đà khó phai mờ.', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 3, 3),
(34, 'Bánh Red Velvet', 35000, 30000, 'spck31.jpg', 'chữ nhật 5cm*10cm', 8, 'Red velvet là loại bánh chocolate nhiều lớp có màu đỏ, nâu đỏ, đỏ thẫm hoặc đỏ tươi, chia lớp bởi lớp kem phủ bằng cream cheese hoặc ermine trắng.', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 1, 1),
(35, 'Donut sô-cô-la hạnh nhân', 30000, 25000, 'chck18.jpg', 'Regular 3\'\'', 8, 'Bánh Donut với lớp sô-cô-la chảy cùng những hạt hạnh nhân béo ngậy.', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 4, 3),
(36, 'Bánh Mousse bí ngô', 25000, 20000, 'lzck33.jpg', 'tam giác 7cm*12cm', 9, 'Hương vị bánh hòa quyện với hương bí ngô tạo nên một mùi vị độc đáo hơn bao giờ hết.', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 1, 2),
(37, 'Donut sữa', 25000, 20000, 'dnut23.jpg', 'Regular 3\'\'', 9, 'Bánh donut kết hợp với sữa đặc thơm béo.', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 4, 2),
(38, 'Carrot Cake', 450000, 440000, 'chck1.jpg', '20cm*15cm', 7, 'Bánh gato sô-cô-la trắng được decor xinh đẹp với những chiếc cà rốt rực rỡ xinh xắn.', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 2, 2),
(40, 'Donut cầu vồng', 35000, 30000, 'dnut8.jpg', 'Regular 3\'\'', 7, 'Bánh donut với cốm cầu vồng trang trí đẹp mắt', 1, '2021-11-04 03:53:01', '2021-11-04 03:53:40', 4, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `password`, `hoten`, `diachi`, `sdt`, `email`, `loai`, `trangthai`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(20, '25f9e794323b453885f5181f1b624d0b', 'Ngo Huynh Thanh Duy', 'Quan 2', '0374572711', 'user@gmail.com', 'user', 'active', NULL, NULL, NULL, '2021-03-19 10:31:45'),
(21, '25f9e794323b453885f5181f1b624d0b', 'Ngo Huynh Thanh Duy', 'Quan 1', '0374572711', 'ngohuynhthanhduy31101999@gmail.com', 'user', 'active', NULL, NULL, NULL, NULL),
(22, 'e10adc3949ba59abbe56e057f20f883e', 'Ngo Huynh Thanh Duy', 'Quan 1', '0374572711', 'ngohuynhthanhduy31101999@gmail.comm', 'user', 'active', NULL, NULL, NULL, NULL),
(25, 'e10adc3949ba59abbe56e057f20f883e', 'Ngo Huynh Thanh Duy', 'Quan 1', '0374572711', 'admin@gmail.com.vn', 'user', 'active', NULL, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chitiethoadon_id_hoadon_foreign` (`id_hoadon`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hoadon_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loaisp_nhacungcap_foreign` (`nhacungcap`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanpham_maloai_foreign` (`MaLoai`),
  ADD KEY `sanpham_danhmuc_foreign` (`DanhMuc`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_id_hoadon_foreign` FOREIGN KEY (`id_hoadon`) REFERENCES `hoadon` (`id`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD CONSTRAINT `loaisp_nhacungcap_foreign` FOREIGN KEY (`nhacungcap`) REFERENCES `nhacungcap` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_danhmuc_foreign` FOREIGN KEY (`DanhMuc`) REFERENCES `danhmuc` (`id`),
  ADD CONSTRAINT `sanpham_maloai_foreign` FOREIGN KEY (`MaLoai`) REFERENCES `loaisp` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
