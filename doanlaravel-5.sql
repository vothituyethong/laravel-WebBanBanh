-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 25, 2021 lúc 10:13 AM
-- Phiên bản máy phục vụ: 8.0.21
-- Phiên bản PHP: 7.4.9

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

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `password`, `hoten`, `diachi`, `sdt`, `email`, `loai`, `trangthai`, `status`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'e10adc3949ba59abbe56e057f20f883e', 'Ngô Huỳnh Thanh Duy', 'Q TD', '0374572711', 'admin@gmail.com', 'admin', 'active', 1, NULL, NULL, NULL, NULL),
(6, 'e10adc3949ba59abbe56e057f20f883e', 'Ngô Huỳnh Thanh Duy', 'Q TD', '0374572711', 'ngoduy3110@gmail.com', 'admin', 'active', 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

DROP TABLE IF EXISTS `chitiethoadon`;
CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_hoadon` int UNSIGNED NOT NULL,
  `TenSP` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SoLuong` int DEFAULT NULL,
  `Gia` int UNSIGNED DEFAULT NULL,
  `KhuyenMai` int DEFAULT NULL,
  `ThanhTien` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `chitiethoadon_id_hoadon_foreign` (`id_hoadon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

DROP TABLE IF EXISTS `danhmuc`;
CREATE TABLE IF NOT EXISTS `danhmuc` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `TenDanhMuc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TrangThai` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int UNSIGNED DEFAULT NULL,
  `hoten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` int DEFAULT NULL,
  `diachi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thanhtien` int DEFAULT NULL,
  `trangthai` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hoadon_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

DROP TABLE IF EXISTS `loaisp`;
CREATE TABLE IF NOT EXISTS `loaisp` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `tenloai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nhacungcap` int UNSIGNED DEFAULT NULL,
  `trangthai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `loaisp_nhacungcap_foreign` (`nhacungcap`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

DROP TABLE IF EXISTS `nhacungcap`;
CREATE TABLE IF NOT EXISTS `nhacungcap` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `tenncc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `trangthai` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `TenSP` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gia` int UNSIGNED DEFAULT NULL,
  `GiaMoi` int UNSIGNED DEFAULT NULL,
  `Image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SoLuong` int DEFAULT NULL,
  `Mota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TrangThai` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `MaLoai` int UNSIGNED DEFAULT NULL,
  `DanhMuc` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sanpham_maloai_foreign` (`MaLoai`),
  KEY `sanpham_danhmuc_foreign` (`DanhMuc`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `TenSP`, `Gia`, `GiaMoi`, `Image`, `Size`, `SoLuong`, `Mota`, `TrangThai`, `created_at`, `updated_at`, `MaLoai`, `DanhMuc`) VALUES
(1, 'Samsung Galaxy Note 10 Lite', 11490000, 9990000, '1609338317.jpg', '128 GB', 10, 'SAMSUNG', 1, '2020-12-30 07:21:06', '2020-12-30 07:25:17', 1, 1),
(2, 'Samsung Galaxy M51', 9490000, 8990000, '1609338270.jpg', '128 GB', 10, 'SAMSUNG', 1, '2020-12-30 07:24:30', '2020-12-30 07:24:30', 1, 2),
(3, 'Samsung Galaxy Note20', 23990000, 19990000, '1609338394.jpg', '256 GB', 10, 'SAMSUNG', 1, '2020-12-30 07:26:34', '2020-12-30 07:26:34', 1, 3),
(4, 'iPhone 12 Pro 256GB', 34990000, 33990000, '1609338510.jpg', '256 GB', 10, 'APPLE', 1, '2020-12-30 07:28:30', '2020-12-30 07:28:30', 2, 1),
(5, 'iPhone 12 Pro Max 128GB', 32990000, 31990000, '1609338634.jpg', '128 GB', 10, 'APPLE', 1, '2020-12-30 07:30:34', '2020-12-30 07:30:34', 2, 2),
(6, 'iPhone 12 Pro 256GB', 34990000, 30450000, '1609339957.jpg', '256 GB', 10, 'APPLE', 1, '2020-12-30 07:32:29', '2020-12-30 07:52:37', 2, 3),
(7, 'Xiaomi Redmi 9', 3990000, 3490000, '1609757620.jpg', '64 GB', 10, 'Xiaomi', 1, '2021-01-04 03:53:01', '2021-01-04 03:53:40', 3, 1),
(8, 'Xiaomi Mi Note 10 Lite', 9990000, 7690000, '1609757720.jpg', '128 GB', 10, 'Xiaomi', 1, '2021-01-04 03:55:20', '2021-01-04 03:55:20', 3, 2),
(9, 'Xiaomi Redmi 9 Lite', 4990000, 4000000, '1609757871.png', '64 GB', 10, 'Xiaomi', 1, '2021-01-04 03:57:51', '2021-01-04 03:57:51', 3, 3),
(10, 'OPPO A53', 4490000, 4290000, '1609757940.jpg', '128 GB', 10, 'Oppo', 1, '2021-01-04 03:59:00', '2021-01-04 03:59:00', 4, 1),
(11, 'OPPO A92', 5990000, 5790000, '1609758006.jpg', '128 GB', 10, 'Oppo', 1, '2021-01-04 04:00:06', '2021-01-04 04:00:06', 4, 2),
(12, 'OPPO A93', 7490000, 7290000, '1609758090.png', '128 GB', 10, 'Oppo', 1, '2021-01-04 04:01:30', '2021-01-04 04:01:30', 4, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `password`, `hoten`, `diachi`, `sdt`, `email`, `loai`, `trangthai`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(20, '25f9e794323b453885f5181f1b624d0b', 'Ngo Huynh Thanh Duy', 'Quan 2', '0374572711', 'user@gmail.com', 'user', 'active', NULL, NULL, NULL, '2021-03-19 10:31:45'),
(21, '25f9e794323b453885f5181f1b624d0b', 'Ngo Huynh Thanh Duy', 'Quan 1', '0374572711', 'ngohuynhthanhduy31101999@gmail.com', 'user', 'active', NULL, NULL, NULL, NULL),
(22, 'e10adc3949ba59abbe56e057f20f883e', 'Ngo Huynh Thanh Duy', 'Quan 1', '0374572711', 'ngohuynhthanhduy31101999@gmail.comm', 'user', 'active', NULL, NULL, NULL, NULL),
(25, 'e10adc3949ba59abbe56e057f20f883e', 'Ngo Huynh Thanh Duy', 'Quan 1', '0374572711', 'admin@gmail.com.vn', 'user', 'active', NULL, NULL, NULL, NULL);

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
