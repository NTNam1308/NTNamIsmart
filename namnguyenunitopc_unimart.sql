-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th3 08, 2022 lúc 10:55 AM
-- Phiên bản máy phục vụ: 10.3.34-MariaDB-log-cll-lve
-- Phiên bản PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `namnguyenunitopc_unimart`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `customer_notes`, `created_at`, `updated_at`) VALUES
(1, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng giờ hành chính', '2021-12-24 10:16:08', '2021-12-24 10:16:08'),
(2, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng giờ hành chính', '2021-12-24 10:16:50', '2021-12-24 10:16:50'),
(3, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng giờ hành chính', '2021-12-24 10:16:58', '2021-12-24 10:16:58'),
(4, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2021-12-24 10:17:11', '2021-12-24 10:17:11'),
(5, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2021-12-24 10:21:44', '2021-12-24 10:21:44'),
(6, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2021-12-24 10:23:32', '2021-12-24 10:23:32'),
(7, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2021-12-24 10:25:18', '2021-12-24 10:25:18'),
(8, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2021-12-24 10:29:50', '2021-12-24 10:29:50'),
(9, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2021-12-24 10:29:50', '2021-12-24 10:29:50'),
(10, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'giờ  hành chính', '2021-12-29 09:47:17', '2021-12-29 09:47:17'),
(11, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'giờ hánh chính', '2021-12-29 09:57:05', '2021-12-29 09:57:05'),
(12, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'giờ hánh chính', '2021-12-29 09:57:21', '2021-12-29 09:57:21'),
(13, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-01-11 07:55:02', '2022-01-11 07:55:02'),
(14, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-01-11 07:56:27', '2022-01-11 07:56:27'),
(15, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-01-11 07:57:26', '2022-01-11 07:57:26'),
(16, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Note', '2022-02-22 01:38:23', '2022-02-22 01:38:23'),
(17, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Note', '2022-02-22 02:13:50', '2022-02-22 02:13:50'),
(18, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Note', '2022-02-22 02:13:50', '2022-02-22 02:13:50'),
(19, 'Thành Trung', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Note', '2022-02-22 02:16:41', '2022-02-22 02:16:41'),
(20, 'Thành Trung', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'note', '2022-02-22 02:17:51', '2022-02-22 02:17:51'),
(21, 'Thành Trung', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao giờ hành chính', '2022-02-22 10:05:33', '2022-02-22 10:05:33'),
(22, 'Thành Trung', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'giờ hành chính', '2022-02-28 09:38:39', '2022-02-28 09:38:39'),
(23, 'Thành Trung', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'giờ hành chính', '2022-02-28 09:38:39', '2022-02-28 09:38:39'),
(24, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Mua hàng', '2022-02-28 10:20:16', '2022-02-28 10:20:16'),
(25, 'Thành Trung', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-03-01 10:22:50', '2022-03-01 10:22:50'),
(26, 'Thành Trung', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-03-01 10:24:41', '2022-03-01 10:24:41'),
(27, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-03-01 10:24:54', '2022-03-01 10:24:54'),
(28, 'Thành Nam', 'b28082002@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-03-01 10:25:36', '2022-03-01 10:25:36'),
(29, 'Thành Nam', 'b28082002@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-03-01 10:27:42', '2022-03-01 10:27:42'),
(30, 'Thành Nam', 'b28082002@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-03-01 10:29:25', '2022-03-01 10:29:25'),
(31, 'Thành Nam', 'b28082002@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-03-01 10:29:46', '2022-03-01 10:29:46'),
(32, 'Thành Nam', 'b28082002@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-03-01 10:31:22', '2022-03-01 10:31:22'),
(33, 'Thành Nam', 'b28082002@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-03-01 10:31:25', '2022-03-01 10:31:25'),
(34, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Note', '2022-03-02 01:12:22', '2022-03-02 01:12:22'),
(35, 'Thành Nam', 'nguyenthanhnam@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Note', '2022-03-02 01:23:45', '2022-03-02 01:23:45'),
(36, 'Thành Nam', 'laptrinhweb1308@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-03-02 01:25:09', '2022-03-02 01:25:09'),
(37, 'Thành Trung', 'laptrinhweb1308@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-03-02 08:28:27', '2022-03-02 08:28:27'),
(38, 'Thành Trung', 'laptrinhweb1308@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-03-02 08:29:46', '2022-03-02 08:29:46'),
(39, 'Thành Trung', 'laptrinhweb1308@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-03-02 08:30:25', '2022-03-02 08:30:25'),
(40, 'Thành Nam', 'laptrinhweb1308@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giờ hành chính', '2022-03-02 08:31:34', '2022-03-02 08:31:34'),
(41, 'Thành Nam', 'laptrinhweb1308@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giờ hành chính', '2022-03-02 08:31:42', '2022-03-02 08:31:42'),
(42, 'Thành Nam', 'laptrinhweb1308@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-03-02 08:32:44', '2022-03-02 08:32:44'),
(43, 'Thành Trung', 'laptrinhweb1308@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-03-02 09:23:50', '2022-03-02 09:23:50'),
(44, 'Thành Trung', 'laptrinhweb1308@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-03-02 09:24:50', '2022-03-02 09:24:50'),
(45, 'Thành Nam', 'laptrinhweb1308@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-03-02 09:26:38', '2022-03-02 09:26:38'),
(46, 'Thành Trung', 'laptrinhweb1308@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Giao hàng', '2022-03-02 09:51:29', '2022-03-02 09:51:29'),
(47, 'Thành Nam', 'laptrinhweb1308@gmail.com', '0347862968', 'Thành Vật-Đồng Tiến', 'Mua hàng', '2022-03-04 04:35:26', '2022-03-04 04:35:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_05_180541_add_soft_delete_to_users', 2),
(5, '2021_08_06_163653_create_pages_table', 3),
(6, '2021_08_07_102422_create_products_table', 4),
(7, '2021_08_19_163604_create_product_cats_table', 5),
(8, '2021_08_20_082044_create_product_cats_table', 6),
(9, '2021_08_20_141613_create_productcats_table', 7),
(10, '2021_08_20_152553_create_productcats_table', 8),
(11, '2021_08_21_163922_create_pages_table', 9),
(12, '2021_08_21_170905_add_status_to_pages_table', 10),
(13, '2021_08_21_182101_create_pages_table', 11),
(14, '2021_08_22_093810_create_posts_table', 12),
(15, '2021_08_22_161307_create_postcats_table', 13),
(16, '2021_08_22_161546_create_postcats_table', 14),
(17, '2021_08_22_162157_create_posts_table', 15),
(18, '2021_08_25_161204_create_productcats_table', 16),
(19, '2021_08_25_162905_create_products_table', 17),
(20, '2021_08_28_175350_add_soft_delete_to_products', 18),
(21, '2021_12_23_084133_create_shipping_table', 19),
(22, '2021_12_24_134115_create_customers_table', 20),
(23, '2021_12_24_134521_create_customer_table', 21),
(24, '2021_12_24_141231_create_customers_table', 22),
(25, '2021_12_24_152857_create_payments_table', 23),
(26, '2021_12_24_162302_create_payments_table', 24),
(27, '2021_12_24_164016_create_customers_table', 25),
(28, '2021_12_24_164136_create_payments_table', 26),
(29, '2022_01_10_155543_add_soft_delete_to_payments', 27),
(30, '2022_03_02_151823_create_payments_table', 28),
(31, '2022_03_02_152706_add_soft_deletes_to_payments_table', 29);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Tiêu đề 1', '<p>asdfgthyujikol;\'</p>\r\n<p>&nbsp;</p>', '2', NULL, '2021-08-21 11:22:28', '2021-08-21 11:22:28'),
(2, 'Tiêu đề 2', '<p>asdfghjkl;</p>', '1', NULL, '2021-08-21 11:24:09', '2021-08-21 11:24:09'),
(3, 'Tiêu đề 1', '<p>Nội dung thứ nhất</p>', '1', NULL, '2021-08-22 01:53:09', '2021-08-22 01:53:09'),
(4, 'Tiêu đề 3', '<p>Nội dung thứ ba</p>', '2', NULL, '2021-08-22 02:26:53', '2021-08-22 02:26:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_total` int(11) NOT NULL,
  `payment_qty` int(11) NOT NULL,
  `products_id` bigint(20) UNSIGNED DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_status` enum('1','2','3','4') COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payments`
--

INSERT INTO `payments` (`id`, `payment_total`, `payment_qty`, `products_id`, `customer_id`, `payment_status`, `payment_method`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 10000000, 1, 70, 42, '2', '1', '2022-03-02 08:32:44', '2022-03-02 10:35:28', '2022-03-02 10:35:28'),
(6, 12000000, 1, 71, 45, '3', '1', '2022-03-02 09:26:38', '2022-03-02 09:51:39', NULL),
(7, 2500000, 1, 69, 46, '1', '1', '2022-03-02 09:51:29', '2022-03-02 09:51:29', NULL),
(8, 12000000, 1, 71, 47, '1', '1', '2022-03-04 04:35:26', '2022-03-04 04:35:26', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `postcats`
--

CREATE TABLE `postcats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productcats`
--

CREATE TABLE `productcats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `productcats`
--

INSERT INTO `productcats` (`id`, `catname`, `creator`, `parent_id`, `created_at`, `updated_at`) VALUES
(53, 'Máy tính', 'Nguyễn Thành Nam', 0, '2021-08-27 09:52:35', '2021-08-27 09:52:35'),
(54, 'Điện thoại', 'Nguyễn Thành Nam', 0, '2021-08-27 09:52:40', '2021-08-27 09:52:40'),
(55, 'Đồng hồ', 'Nguyễn Thành Nam', 0, '2021-08-27 09:52:43', '2021-08-27 09:52:43'),
(56, 'Máy tính Dell', 'Nguyễn Thành Nam', 53, '2021-08-27 09:52:47', '2021-08-27 09:52:47'),
(58, 'Máy tính HP', 'Nguyễn Thành Nam', 53, '2021-08-27 09:53:26', '2021-08-27 09:53:26'),
(61, 'Tivi', 'Nguyễn Thành Nam', 0, '2021-08-27 10:05:40', '2021-08-27 10:05:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Chờ duyệt','Hoạt động') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `content`, `price`, `thumbnail`, `status`, `product_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(69, 'Laptop Acer Aspire', '<p><strong><a href=\"https://laptop88.vn/laptop-acer-aspire.html\" target=\"_blank\" rel=\"noopener\">aptop Acer Aspire</a> 7 A715-42G-R6ZR - một trong những chiếc <a href=\"https://laptop88.vn/laptop-gaming.html\" target=\"_blank\" rel=\"noopener\">laptop gaming</a> rẻ nhất ở thời điểm hiện tại c&oacute; thể chiến mượt mọi tựa game như LOL, FO4 hay cả c&aacute;c tựa game nặng như GTA V, l&agrave;m thiết kế đồ họa, render video cực tốt. Chip u series 5000 mới nhất từ AMD với sức mạnh đơn nh&acirc;n v&agrave; đa nh&acirc;n vượt trội, mang lại hiệu năng khỏe bất ngờ. Người d&ugrave;ng sẽ phải suy nghĩ lại về hiệu năng của chip u tr&ecirc;n chiếc <a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\" rel=\"noopener\">laptop</a>/<a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\" rel=\"noopener\">m&aacute;y t&iacute;nh x&aacute;ch tay</a> <a href=\"https://laptop88.vn/moi-100-full-box-laptop-acer-aspire-7-a715-42g-r6zr-amd-ryzen-5.html\">Acer Aspire 7 ryzen 5</a> n&agrave;y:</strong></p>\r\n<p>&nbsp;</p>\r\n<p>- <em>Acer Aspire 7 </em><em>cấu h&igrave;nh chip Ryzen 5 5500u 6 nh&acirc;n 12 luồng mới nhất từ AMD, hiệu năng khỏe hơn cả nhiều chip H ở thời điểm hiện tại, card rời GTX 1650 chiến max setting cả game nặng, l&agrave;m đồ họa mượt&nbsp;</em></p>\r\n<p>&nbsp;</p>\r\n<p><em>- Hệ thống 2 quạt tản nhiệt c&ugrave;ng 3 ống đồng lớn tối ưu khả năng tản, nhiệt độ lu&ocirc;n cực m&aacute;t mẻ</em></p>\r\n<p>&nbsp;</p>\r\n<p><em>- M&agrave;n h&igrave;nh 15.6 inch, độ ph&acirc;n giải Full HD sắc n&eacute;t, h&igrave;nh ảnh hiển thị cực r&otilde; r&agrave;ng, sống động, <strong>tần số qu&eacute;t 144Hz</strong> cho mọi chuyển động tr&ecirc;n game cực mượt m&agrave;</em></p>', '<table>\r\n<tbody>\r\n<tr>\r\n<td><strong>CPU</strong></td>\r\n<td>AMD Ryzen&trade;&nbsp;5-5500U (2.1GHz up to 4.0GHz, 8MB)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>M&agrave;n h&igrave;nh</strong></td>\r\n<td>15.6 inch FHD (1920 x 1080)&nbsp;Acer ComfyView IPS LED LCD, 144Hz</td>\r\n</tr>\r\n<tr>\r\n<td><strong>RAM</strong></td>\r\n<td>8GB&nbsp;DDR4&nbsp;<span data-sheets-value=\"{\" data-sheets-userformat=\"{\">3200MHz</span>&nbsp;(<span data-sheets-value=\"{\" data-sheets-userformat=\"{\">2 khe RAM, tối đa 36GB</span>)</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Ổ cứng</strong></td>\r\n<td>SSD&nbsp;512GB&nbsp;PCIe NVMe&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Card đồ hoạ</strong></td>\r\n<td>NVIDIA&reg; GeForce&reg; GTX 1650 4GB GDDR6</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Webcam</strong></td>\r\n<td>HD webcam with: 1280 x 720 resolution</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Kết nối kh&ocirc;ng d&acirc;y</strong></td>\r\n<td>Intel&reg; Wireless-Wi-Fi 6 AX200 +&nbsp;Bluetooth&reg; 5.1</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Cổng giao tiếp</strong></td>\r\n<td>2 x USB 3.2 Gen 1 ports with one featuring power-off USB charging<br />1 x USB Type-C port: USB 3.2 Gen 1 (up to 5 Gbps)<br />1 x USB 2.0 port<br />1 x HDMI&reg; port with HDCP support<br />1 x 3.5 mm headphone/speaker jack</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Pin</strong></td>\r\n<td>4 Cell - 48Wh</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Trọng lượng</strong></td>\r\n<td>2.1kg</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Chất liệu</strong></td>\r\n<td>Nhựa</td>\r\n</tr>\r\n<tr>\r\n<td><strong>M&agrave;u sắc</strong></td>\r\n<td>Đen</td>\r\n</tr>\r\n</tbody>\r\n</table>', 2500000, 'public/uploads/pro_poster_6306.jpg', 'Chờ duyệt', 53, '2021-11-18 01:58:13', '2021-11-18 01:58:13', NULL),
(70, 'Laptop Acer 7', '<p><strong><a href=\"https://laptop88.vn/laptop-acer-aspire.html\" target=\"_blank\" rel=\"noopener\">Laptop Acer Aspire</a> 7 A715-42G-R6ZR - một trong những chiếc <a href=\"https://laptop88.vn/laptop-gaming.html\" target=\"_blank\" rel=\"noopener\">laptop gaming</a> rẻ nhất ở thời điểm hiện tại c&oacute; thể chiến mượt mọi tựa game như LOL, FO4 hay cả c&aacute;c tựa game nặng như GTA V, l&agrave;m thiết kế đồ họa, render video cực tốt. Chip u series 5000 mới nhất từ AMD với sức mạnh đơn nh&acirc;n v&agrave; đa nh&acirc;n vượt trội, mang lại hiệu năng khỏe bất ngờ. Người d&ugrave;ng sẽ phải suy nghĩ lại về hiệu năng của chip u tr&ecirc;n chiếc <a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\" rel=\"noopener\">laptop</a>/<a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\" rel=\"noopener\">m&aacute;y t&iacute;nh x&aacute;ch tay</a> <a href=\"https://laptop88.vn/moi-100-full-box-laptop-acer-aspire-7-a715-42g-r6zr-amd-ryzen-5.html\">Acer Aspire 7 ryzen 5</a> n&agrave;y:</strong></p>\r\n<p>&nbsp;</p>\r\n<p>- <em>Acer Aspire 7 </em><em>cấu h&igrave;nh chip Ryzen 5 5500u 6 nh&acirc;n 12 luồng mới nhất từ AMD, hiệu năng khỏe hơn cả nhiều chip H ở thời điểm hiện tại, card rời GTX 1650 chiến max setting cả game nặng, l&agrave;m đồ họa mượt&nbsp;</em></p>\r\n<p>&nbsp;</p>\r\n<p><em>- Hệ thống 2 quạt tản nhiệt c&ugrave;ng 3 ống đồng lớn tối ưu khả năng tản, nhiệt độ lu&ocirc;n cực m&aacute;t mẻ</em></p>\r\n<p>&nbsp;</p>\r\n<p><em>- M&agrave;n h&igrave;nh 15.6 inch, độ ph&acirc;n giải Full HD sắc n&eacute;t, h&igrave;nh ảnh hiển thị cực r&otilde; r&agrave;ng, sống động, <strong>tần số qu&eacute;t 144Hz</strong> cho mọi chuyển động tr&ecirc;n game cực mượt m&agrave;</em></p>', '<p><strong><a href=\"https://laptop88.vn/laptop-acer-aspire.html\" target=\"_blank\" rel=\"noopener\">Laptop Acer Aspire</a> 7 A715-42G-R6ZR - một trong những chiếc <a href=\"https://laptop88.vn/laptop-gaming.html\" target=\"_blank\" rel=\"noopener\">laptop gaming</a> rẻ nhất ở thời điểm hiện tại c&oacute; thể chiến mượt mọi tựa game như LOL, FO4 hay cả c&aacute;c tựa game nặng như GTA V, l&agrave;m thiết kế đồ họa, render video cực tốt. Chip u series 5000 mới nhất từ AMD với sức mạnh đơn nh&acirc;n v&agrave; đa nh&acirc;n vượt trội, mang lại hiệu năng khỏe bất ngờ. Người d&ugrave;ng sẽ phải suy nghĩ lại về hiệu năng của chip u tr&ecirc;n chiếc <a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\" rel=\"noopener\">laptop</a>/<a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\" rel=\"noopener\">m&aacute;y t&iacute;nh x&aacute;ch tay</a> <a href=\"https://laptop88.vn/moi-100-full-box-laptop-acer-aspire-7-a715-42g-r6zr-amd-ryzen-5.html\">Acer Aspire 7 ryzen 5</a> n&agrave;y:</strong></p>\r\n<p>&nbsp;</p>\r\n<p>- <em>Acer Aspire 7 </em><em>cấu h&igrave;nh chip Ryzen 5 5500u 6 nh&acirc;n 12 luồng mới nhất từ AMD, hiệu năng khỏe hơn cả nhiều chip H ở thời điểm hiện tại, card rời GTX 1650 chiến max setting cả game nặng, l&agrave;m đồ họa mượt&nbsp;</em></p>\r\n<p>&nbsp;</p>\r\n<p><em>- Hệ thống 2 quạt tản nhiệt c&ugrave;ng 3 ống đồng lớn tối ưu khả năng tản, nhiệt độ lu&ocirc;n cực m&aacute;t mẻ</em></p>\r\n<p>&nbsp;</p>\r\n<p><em>- M&agrave;n h&igrave;nh 15.6 inch, độ ph&acirc;n giải Full HD sắc n&eacute;t, h&igrave;nh ảnh hiển thị cực r&otilde; r&agrave;ng, sống động, <strong>tần số qu&eacute;t 144Hz</strong> cho mọi chuyển động tr&ecirc;n game cực mượt m&agrave;</em></p>', 10000000, 'public/uploads/pro_poster_6307.jpg', 'Chờ duyệt', 53, '2021-11-18 01:59:27', '2021-11-18 01:59:27', NULL),
(71, 'Laptop Lenovo Ideapad', '<p><strong><a href=\"https://laptop88.vn/laptop-acer-aspire.html\" target=\"_blank\" rel=\"noopener\">Laptop Acer Aspire</a> 7 A715-42G-R6ZR - một trong những chiếc <a href=\"https://laptop88.vn/laptop-gaming.html\" target=\"_blank\" rel=\"noopener\">laptop gaming</a> rẻ nhất ở thời điểm hiện tại c&oacute; thể chiến mượt mọi tựa game như LOL, FO4 hay cả c&aacute;c tựa game nặng như GTA V, l&agrave;m thiết kế đồ họa, render video cực tốt. Chip u series 5000 mới nhất từ AMD với sức mạnh đơn nh&acirc;n v&agrave; đa nh&acirc;n vượt trội, mang lại hiệu năng khỏe bất ngờ. Người d&ugrave;ng sẽ phải suy nghĩ lại về hiệu năng của chip u tr&ecirc;n chiếc <a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\" rel=\"noopener\">laptop</a>/<a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\" rel=\"noopener\">m&aacute;y t&iacute;nh x&aacute;ch tay</a> <a href=\"https://laptop88.vn/moi-100-full-box-laptop-acer-aspire-7-a715-42g-r6zr-amd-ryzen-5.html\">Acer Aspire 7 ryzen 5</a> n&agrave;y:</strong></p>\r\n<p>&nbsp;</p>\r\n<p>- <em>Acer Aspire 7 </em><em>cấu h&igrave;nh chip Ryzen 5 5500u 6 nh&acirc;n 12 luồng mới nhất từ AMD, hiệu năng khỏe hơn cả nhiều chip H ở thời điểm hiện tại, card rời GTX 1650 chiến max setting cả game nặng, l&agrave;m đồ họa mượt&nbsp;</em></p>\r\n<p>&nbsp;</p>\r\n<p><em>- Hệ thống 2 quạt tản nhiệt c&ugrave;ng 3 ống đồng lớn tối ưu khả năng tản, nhiệt độ lu&ocirc;n cực m&aacute;t mẻ</em></p>\r\n<p>&nbsp;</p>\r\n<p><em>- M&agrave;n h&igrave;nh 15.6 inch, độ ph&acirc;n giải Full HD sắc n&eacute;t, h&igrave;nh ảnh hiển thị cực r&otilde; r&agrave;ng, sống động, <strong>tần số qu&eacute;t 144Hz</strong> cho mọi chuyển động tr&ecirc;n game cực mượt m&agrave;</em></p>', '<p><strong><a href=\"https://laptop88.vn/laptop-acer-aspire.html\" target=\"_blank\" rel=\"noopener\">Laptop Acer Aspire</a> 7 A715-42G-R6ZR - một trong những chiếc <a href=\"https://laptop88.vn/laptop-gaming.html\" target=\"_blank\" rel=\"noopener\">laptop gaming</a> rẻ nhất ở thời điểm hiện tại c&oacute; thể chiến mượt mọi tựa game như LOL, FO4 hay cả c&aacute;c tựa game nặng như GTA V, l&agrave;m thiết kế đồ họa, render video cực tốt. Chip u series 5000 mới nhất từ AMD với sức mạnh đơn nh&acirc;n v&agrave; đa nh&acirc;n vượt trội, mang lại hiệu năng khỏe bất ngờ. Người d&ugrave;ng sẽ phải suy nghĩ lại về hiệu năng của chip u tr&ecirc;n chiếc <a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\" rel=\"noopener\">laptop</a>/<a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\" rel=\"noopener\">m&aacute;y t&iacute;nh x&aacute;ch tay</a> <a href=\"https://laptop88.vn/moi-100-full-box-laptop-acer-aspire-7-a715-42g-r6zr-amd-ryzen-5.html\">Acer Aspire 7 ryzen 5</a> n&agrave;y:</strong></p>\r\n<p>&nbsp;</p>\r\n<p>- <em>Acer Aspire 7 </em><em>cấu h&igrave;nh chip Ryzen 5 5500u 6 nh&acirc;n 12 luồng mới nhất từ AMD, hiệu năng khỏe hơn cả nhiều chip H ở thời điểm hiện tại, card rời GTX 1650 chiến max setting cả game nặng, l&agrave;m đồ họa mượt&nbsp;</em></p>\r\n<p>&nbsp;</p>\r\n<p><em>- Hệ thống 2 quạt tản nhiệt c&ugrave;ng 3 ống đồng lớn tối ưu khả năng tản, nhiệt độ lu&ocirc;n cực m&aacute;t mẻ</em></p>\r\n<p>&nbsp;</p>\r\n<p><em>- M&agrave;n h&igrave;nh 15.6 inch, độ ph&acirc;n giải Full HD sắc n&eacute;t, h&igrave;nh ảnh hiển thị cực r&otilde; r&agrave;ng, sống động, <strong>tần số qu&eacute;t 144Hz</strong> cho mọi chuyển động tr&ecirc;n game cực mượt m&agrave;</em></p>', 12000000, 'public/uploads/pro_poster_6763.jpg', 'Chờ duyệt', 53, '2021-11-18 02:00:13', '2021-11-18 02:00:13', NULL),
(72, 'Laptop HP 15', '<p><strong><a href=\"https://laptop88.vn/laptop-acer-aspire.html\" target=\"_blank\" rel=\"noopener\">Laptop Acer Aspire</a> 7 A715-42G-R6ZR - một trong những chiếc <a href=\"https://laptop88.vn/laptop-gaming.html\" target=\"_blank\" rel=\"noopener\">laptop gaming</a> rẻ nhất ở thời điểm hiện tại c&oacute; thể chiến mượt mọi tựa game như LOL, FO4 hay cả c&aacute;c tựa game nặng như GTA V, l&agrave;m thiết kế đồ họa, render video cực tốt. Chip u series 5000 mới nhất từ AMD với sức mạnh đơn nh&acirc;n v&agrave; đa nh&acirc;n vượt trội, mang lại hiệu năng khỏe bất ngờ. Người d&ugrave;ng sẽ phải suy nghĩ lại về hiệu năng của chip u tr&ecirc;n chiếc <a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\" rel=\"noopener\">laptop</a>/<a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\" rel=\"noopener\">m&aacute;y t&iacute;nh x&aacute;ch tay</a> <a href=\"https://laptop88.vn/moi-100-full-box-laptop-acer-aspire-7-a715-42g-r6zr-amd-ryzen-5.html\">Acer Aspire 7 ryzen 5</a> n&agrave;y:</strong></p>\r\n<p>&nbsp;</p>\r\n<p>- <em>Acer Aspire 7 </em><em>cấu h&igrave;nh chip Ryzen 5 5500u 6 nh&acirc;n 12 luồng mới nhất từ AMD, hiệu năng khỏe hơn cả nhiều chip H ở thời điểm hiện tại, card rời GTX 1650 chiến max setting cả game nặng, l&agrave;m đồ họa mượt&nbsp;</em></p>\r\n<p>&nbsp;</p>\r\n<p><em>- Hệ thống 2 quạt tản nhiệt c&ugrave;ng 3 ống đồng lớn tối ưu khả năng tản, nhiệt độ lu&ocirc;n cực m&aacute;t mẻ</em></p>\r\n<p>&nbsp;</p>\r\n<p><em>- M&agrave;n h&igrave;nh 15.6 inch, độ ph&acirc;n giải Full HD sắc n&eacute;t, h&igrave;nh ảnh hiển thị cực r&otilde; r&agrave;ng, sống động, <strong>tần số qu&eacute;t 144Hz</strong> cho mọi chuyển động tr&ecirc;n game cực mượt m&agrave;</em></p>', '<p><strong><a href=\"https://laptop88.vn/laptop-acer-aspire.html\" target=\"_blank\" rel=\"noopener\">Laptop Acer Aspire</a> 7 A715-42G-R6ZR - một trong những chiếc <a href=\"https://laptop88.vn/laptop-gaming.html\" target=\"_blank\" rel=\"noopener\">laptop gaming</a> rẻ nhất ở thời điểm hiện tại c&oacute; thể chiến mượt mọi tựa game như LOL, FO4 hay cả c&aacute;c tựa game nặng như GTA V, l&agrave;m thiết kế đồ họa, render video cực tốt. Chip u series 5000 mới nhất từ AMD với sức mạnh đơn nh&acirc;n v&agrave; đa nh&acirc;n vượt trội, mang lại hiệu năng khỏe bất ngờ. Người d&ugrave;ng sẽ phải suy nghĩ lại về hiệu năng của chip u tr&ecirc;n chiếc <a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\" rel=\"noopener\">laptop</a>/<a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\" rel=\"noopener\">m&aacute;y t&iacute;nh x&aacute;ch tay</a> <a href=\"https://laptop88.vn/moi-100-full-box-laptop-acer-aspire-7-a715-42g-r6zr-amd-ryzen-5.html\">Acer Aspire 7 ryzen 5</a> n&agrave;y:</strong></p>\r\n<p>&nbsp;</p>\r\n<p>- <em>Acer Aspire 7 </em><em>cấu h&igrave;nh chip Ryzen 5 5500u 6 nh&acirc;n 12 luồng mới nhất từ AMD, hiệu năng khỏe hơn cả nhiều chip H ở thời điểm hiện tại, card rời GTX 1650 chiến max setting cả game nặng, l&agrave;m đồ họa mượt&nbsp;</em></p>\r\n<p>&nbsp;</p>\r\n<p><em>- Hệ thống 2 quạt tản nhiệt c&ugrave;ng 3 ống đồng lớn tối ưu khả năng tản, nhiệt độ lu&ocirc;n cực m&aacute;t mẻ</em></p>\r\n<p>&nbsp;</p>\r\n<p><em>- M&agrave;n h&igrave;nh 15.6 inch, độ ph&acirc;n giải Full HD sắc n&eacute;t, h&igrave;nh ảnh hiển thị cực r&otilde; r&agrave;ng, sống động, <strong>tần số qu&eacute;t 144Hz</strong> cho mọi chuyển động tr&ecirc;n game cực mượt m&agrave;</em></p>', 1230000, 'public/uploads/pro_poster_6804.jpg', 'Chờ duyệt', 53, '2021-11-18 02:00:47', '2021-11-18 02:00:47', NULL),
(73, 'Laptop Gamming G5', '<p><strong><a href=\"https://laptop88.vn/laptop-acer-aspire.html\" target=\"_blank\" rel=\"noopener\">Laptop Acer Aspire</a> 7 A715-42G-R6ZR - một trong những chiếc <a href=\"https://laptop88.vn/laptop-gaming.html\" target=\"_blank\" rel=\"noopener\">laptop gaming</a> rẻ nhất ở thời điểm hiện tại c&oacute; thể chiến mượt mọi tựa game như LOL, FO4 hay cả c&aacute;c tựa game nặng như GTA V, l&agrave;m thiết kế đồ họa, render video cực tốt. Chip u series 5000 mới nhất từ AMD với sức mạnh đơn nh&acirc;n v&agrave; đa nh&acirc;n vượt trội, mang lại hiệu năng khỏe bất ngờ. Người d&ugrave;ng sẽ phải suy nghĩ lại về hiệu năng của chip u tr&ecirc;n chiếc <a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\" rel=\"noopener\">laptop</a>/<a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\" rel=\"noopener\">m&aacute;y t&iacute;nh x&aacute;ch tay</a> <a href=\"https://laptop88.vn/moi-100-full-box-laptop-acer-aspire-7-a715-42g-r6zr-amd-ryzen-5.html\">Acer Aspire 7 ryzen 5</a> n&agrave;y:</strong></p>\r\n<p>&nbsp;</p>\r\n<p>- <em>Acer Aspire 7 </em><em>cấu h&igrave;nh chip Ryzen 5 5500u 6 nh&acirc;n 12 luồng mới nhất từ AMD, hiệu năng khỏe hơn cả nhiều chip H ở thời điểm hiện tại, card rời GTX 1650 chiến max setting cả game nặng, l&agrave;m đồ họa mượt&nbsp;</em></p>\r\n<p>&nbsp;</p>\r\n<p><em>- Hệ thống 2 quạt tản nhiệt c&ugrave;ng 3 ống đồng lớn tối ưu khả năng tản, nhiệt độ lu&ocirc;n cực m&aacute;t mẻ</em></p>\r\n<p>&nbsp;</p>\r\n<p><em>- M&agrave;n h&igrave;nh 15.6 inch, độ ph&acirc;n giải Full HD sắc n&eacute;t, h&igrave;nh ảnh hiển thị cực r&otilde; r&agrave;ng, sống động, <strong>tần số qu&eacute;t 144Hz</strong> cho mọi chuyển động tr&ecirc;n game cực mượt m&agrave;</em></p>', '<p><strong><a href=\"https://laptop88.vn/laptop-acer-aspire.html\" target=\"_blank\" rel=\"noopener\">Laptop Acer Aspire</a> 7 A715-42G-R6ZR - một trong những chiếc <a href=\"https://laptop88.vn/laptop-gaming.html\" target=\"_blank\" rel=\"noopener\">laptop gaming</a> rẻ nhất ở thời điểm hiện tại c&oacute; thể chiến mượt mọi tựa game như LOL, FO4 hay cả c&aacute;c tựa game nặng như GTA V, l&agrave;m thiết kế đồ họa, render video cực tốt. Chip u series 5000 mới nhất từ AMD với sức mạnh đơn nh&acirc;n v&agrave; đa nh&acirc;n vượt trội, mang lại hiệu năng khỏe bất ngờ. Người d&ugrave;ng sẽ phải suy nghĩ lại về hiệu năng của chip u tr&ecirc;n chiếc <a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\" rel=\"noopener\">laptop</a>/<a href=\"https://laptop88.vn/may-tinh-xach-tay.html\" target=\"_blank\" rel=\"noopener\">m&aacute;y t&iacute;nh x&aacute;ch tay</a> <a href=\"https://laptop88.vn/moi-100-full-box-laptop-acer-aspire-7-a715-42g-r6zr-amd-ryzen-5.html\">Acer Aspire 7 ryzen 5</a> n&agrave;y:</strong></p>\r\n<p>&nbsp;</p>\r\n<p>- <em>Acer Aspire 7 </em><em>cấu h&igrave;nh chip Ryzen 5 5500u 6 nh&acirc;n 12 luồng mới nhất từ AMD, hiệu năng khỏe hơn cả nhiều chip H ở thời điểm hiện tại, card rời GTX 1650 chiến max setting cả game nặng, l&agrave;m đồ họa mượt&nbsp;</em></p>\r\n<p>&nbsp;</p>\r\n<p><em>- Hệ thống 2 quạt tản nhiệt c&ugrave;ng 3 ống đồng lớn tối ưu khả năng tản, nhiệt độ lu&ocirc;n cực m&aacute;t mẻ</em></p>\r\n<p>&nbsp;</p>\r\n<p><em>- M&agrave;n h&igrave;nh 15.6 inch, độ ph&acirc;n giải Full HD sắc n&eacute;t, h&igrave;nh ảnh hiển thị cực r&otilde; r&agrave;ng, sống động, <strong>tần số qu&eacute;t 144Hz</strong> cho mọi chuyển động tr&ecirc;n game cực mượt m&agrave;</em></p>', 20000000, 'public/uploads/pro_poster_6817.jpg', 'Chờ duyệt', 53, '2021-11-18 02:01:20', '2021-11-18 02:01:20', NULL),
(74, 'Oppo A37', '<h3><a title=\"Tham khảo gi&aacute; điện thoại Samsung Galaxy Z Fold3 5G 512GB ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-z-fold-3-512gb\" target=\"_blank\" rel=\"noopener\">Galaxy Z Fold3 5G</a>&nbsp;đ&aacute;nh dấu bước tiến mới của&nbsp;<a title=\"Tham khảo sản phẩm Samsung ch&iacute;nh h&atilde;ng tại Thegioididong.com\" href=\"https://thegioididong.com/samsung\" target=\"_blank\" rel=\"noopener\">Samsung</a>&nbsp;trong ph&acirc;n kh&uacute;c&nbsp;<a title=\"Tham khảo gi&aacute; điện thoại smartphone ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" rel=\"noopener\">điện thoại</a>&nbsp;gập cao cấp khi được cải tiến về độ bền c&ugrave;ng những n&acirc;ng cấp đ&aacute;ng gi&aacute; về cấu h&igrave;nh hiệu năng, hứa hẹn sẽ mang đến trải nghiệm sử dụng đột ph&aacute; cho người d&ugrave;ng.</h3>\r\n<h3>Đột ph&aacute; thiết kế m&agrave;n h&igrave;nh gập</h3>\r\n<p>Đầu ti&ecirc;n, khung viền Galaxy Z Fold3 được ho&agrave;n thiện bằng chất liệu Armor Aluminum cao cấp nhất từ trước đến giờ nhằm tăng cường được độ bền, m&agrave; vẫn đảm bảo được trọng lượng c&acirc;n đối đem tới cảm gi&aacute;c v&ocirc; c&ugrave;ng chắc chắn v&agrave; cao cấp.&nbsp;</p>', '<h3><a title=\"Tham khảo gi&aacute; điện thoại Samsung Galaxy Z Fold3 5G 512GB ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-z-fold-3-512gb\" target=\"_blank\" rel=\"noopener\">Galaxy Z Fold3 5G</a>&nbsp;đ&aacute;nh dấu bước tiến mới của&nbsp;<a title=\"Tham khảo sản phẩm Samsung ch&iacute;nh h&atilde;ng tại Thegioididong.com\" href=\"https://thegioididong.com/samsung\" target=\"_blank\" rel=\"noopener\">Samsung</a>&nbsp;trong ph&acirc;n kh&uacute;c&nbsp;<a title=\"Tham khảo gi&aacute; điện thoại smartphone ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" rel=\"noopener\">điện thoại</a>&nbsp;gập cao cấp khi được cải tiến về độ bền c&ugrave;ng những n&acirc;ng cấp đ&aacute;ng gi&aacute; về cấu h&igrave;nh hiệu năng, hứa hẹn sẽ mang đến trải nghiệm sử dụng đột ph&aacute; cho người d&ugrave;ng.</h3>\r\n<h3>Đột ph&aacute; thiết kế m&agrave;n h&igrave;nh gập</h3>\r\n<p>Đầu ti&ecirc;n, khung viền Galaxy Z Fold3 được ho&agrave;n thiện bằng chất liệu Armor Aluminum cao cấp nhất từ trước đến giờ nhằm tăng cường được độ bền, m&agrave; vẫn đảm bảo được trọng lượng c&acirc;n đối đem tới cảm gi&aacute;c v&ocirc; c&ugrave;ng chắc chắn v&agrave; cao cấp.&nbsp;</p>', 3000000, 'public/uploads/1df6c5e311d3b4f3f3975832dc40b74a.jpg_200x200q90.jpg_.webp', 'Chờ duyệt', 54, '2021-11-18 02:02:55', '2021-11-18 02:02:55', NULL),
(75, 'Samsung galaxy', '<h3><a title=\"Tham khảo gi&aacute; điện thoại Samsung Galaxy Z Fold3 5G 512GB ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-z-fold-3-512gb\" target=\"_blank\" rel=\"noopener\">Galaxy Z Fold3 5G</a>&nbsp;đ&aacute;nh dấu bước tiến mới của&nbsp;<a title=\"Tham khảo sản phẩm Samsung ch&iacute;nh h&atilde;ng tại Thegioididong.com\" href=\"https://thegioididong.com/samsung\" target=\"_blank\" rel=\"noopener\">Samsung</a>&nbsp;trong ph&acirc;n kh&uacute;c&nbsp;<a title=\"Tham khảo gi&aacute; điện thoại smartphone ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" rel=\"noopener\">điện thoại</a>&nbsp;gập cao cấp khi được cải tiến về độ bền c&ugrave;ng những n&acirc;ng cấp đ&aacute;ng gi&aacute; về cấu h&igrave;nh hiệu năng, hứa hẹn sẽ mang đến trải nghiệm sử dụng đột ph&aacute; cho người d&ugrave;ng.</h3>\r\n<h3>Đột ph&aacute; thiết kế m&agrave;n h&igrave;nh gập</h3>\r\n<p>Đầu ti&ecirc;n, khung viền Galaxy Z Fold3 được ho&agrave;n thiện bằng chất liệu Armor Aluminum cao cấp nhất từ trước đến giờ nhằm tăng cường được độ bền, m&agrave; vẫn đảm bảo được trọng lượng c&acirc;n đối đem tới cảm gi&aacute;c v&ocirc; c&ugrave;ng chắc chắn v&agrave; cao cấp.&nbsp;</p>', '<h3><a title=\"Tham khảo gi&aacute; điện thoại Samsung Galaxy Z Fold3 5G 512GB ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-z-fold-3-512gb\" target=\"_blank\" rel=\"noopener\">Galaxy Z Fold3 5G</a>&nbsp;đ&aacute;nh dấu bước tiến mới của&nbsp;<a title=\"Tham khảo sản phẩm Samsung ch&iacute;nh h&atilde;ng tại Thegioididong.com\" href=\"https://thegioididong.com/samsung\" target=\"_blank\" rel=\"noopener\">Samsung</a>&nbsp;trong ph&acirc;n kh&uacute;c&nbsp;<a title=\"Tham khảo gi&aacute; điện thoại smartphone ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" rel=\"noopener\">điện thoại</a>&nbsp;gập cao cấp khi được cải tiến về độ bền c&ugrave;ng những n&acirc;ng cấp đ&aacute;ng gi&aacute; về cấu h&igrave;nh hiệu năng, hứa hẹn sẽ mang đến trải nghiệm sử dụng đột ph&aacute; cho người d&ugrave;ng.</h3>\r\n<h3>Đột ph&aacute; thiết kế m&agrave;n h&igrave;nh gập</h3>\r\n<p>Đầu ti&ecirc;n, khung viền Galaxy Z Fold3 được ho&agrave;n thiện bằng chất liệu Armor Aluminum cao cấp nhất từ trước đến giờ nhằm tăng cường được độ bền, m&agrave; vẫn đảm bảo được trọng lượng c&acirc;n đối đem tới cảm gi&aacute;c v&ocirc; c&ugrave;ng chắc chắn v&agrave; cao cấp.&nbsp;</p>', 8000000, 'public/uploads/03c1d67d5586de9444a314d24d3bb171.jpg_200x200q90.jpg_.webp', 'Chờ duyệt', 54, '2021-11-18 02:03:22', '2021-11-18 02:03:22', NULL),
(76, 'Samsung s5', '<h3><a title=\"Tham khảo gi&aacute; điện thoại Samsung Galaxy Z Fold3 5G 512GB ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-z-fold-3-512gb\" target=\"_blank\" rel=\"noopener\">Galaxy Z Fold3 5G</a>&nbsp;đ&aacute;nh dấu bước tiến mới của&nbsp;<a title=\"Tham khảo sản phẩm Samsung ch&iacute;nh h&atilde;ng tại Thegioididong.com\" href=\"https://thegioididong.com/samsung\" target=\"_blank\" rel=\"noopener\">Samsung</a>&nbsp;trong ph&acirc;n kh&uacute;c&nbsp;<a title=\"Tham khảo gi&aacute; điện thoại smartphone ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" rel=\"noopener\">điện thoại</a>&nbsp;gập cao cấp khi được cải tiến về độ bền c&ugrave;ng những n&acirc;ng cấp đ&aacute;ng gi&aacute; về cấu h&igrave;nh hiệu năng, hứa hẹn sẽ mang đến trải nghiệm sử dụng đột ph&aacute; cho người d&ugrave;ng.</h3>\r\n<h3>Đột ph&aacute; thiết kế m&agrave;n h&igrave;nh gập</h3>\r\n<p>Đầu ti&ecirc;n, khung viền Galaxy Z Fold3 được ho&agrave;n thiện bằng chất liệu Armor Aluminum cao cấp nhất từ trước đến giờ nhằm tăng cường được độ bền, m&agrave; vẫn đảm bảo được trọng lượng c&acirc;n đối đem tới cảm gi&aacute;c v&ocirc; c&ugrave;ng chắc chắn v&agrave; cao cấp.&nbsp;</p>', '<h3><a title=\"Tham khảo gi&aacute; điện thoại Samsung Galaxy Z Fold3 5G 512GB ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-z-fold-3-512gb\" target=\"_blank\" rel=\"noopener\">Galaxy Z Fold3 5G</a>&nbsp;đ&aacute;nh dấu bước tiến mới của&nbsp;<a title=\"Tham khảo sản phẩm Samsung ch&iacute;nh h&atilde;ng tại Thegioididong.com\" href=\"https://thegioididong.com/samsung\" target=\"_blank\" rel=\"noopener\">Samsung</a>&nbsp;trong ph&acirc;n kh&uacute;c&nbsp;<a title=\"Tham khảo gi&aacute; điện thoại smartphone ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" rel=\"noopener\">điện thoại</a>&nbsp;gập cao cấp khi được cải tiến về độ bền c&ugrave;ng những n&acirc;ng cấp đ&aacute;ng gi&aacute; về cấu h&igrave;nh hiệu năng, hứa hẹn sẽ mang đến trải nghiệm sử dụng đột ph&aacute; cho người d&ugrave;ng.</h3>\r\n<h3>Đột ph&aacute; thiết kế m&agrave;n h&igrave;nh gập</h3>\r\n<p>Đầu ti&ecirc;n, khung viền Galaxy Z Fold3 được ho&agrave;n thiện bằng chất liệu Armor Aluminum cao cấp nhất từ trước đến giờ nhằm tăng cường được độ bền, m&agrave; vẫn đảm bảo được trọng lượng c&acirc;n đối đem tới cảm gi&aacute;c v&ocirc; c&ugrave;ng chắc chắn v&agrave; cao cấp.&nbsp;</p>', 5555000, 'public/uploads/24f1c33b66efcf725da1d4189492221a.jpg_200x200q90.jpg_.webp', 'Chờ duyệt', 54, '2021-11-18 02:03:49', '2021-11-18 02:03:49', NULL),
(77, 'Redmi 577', '<h3><a title=\"Tham khảo gi&aacute; điện thoại Samsung Galaxy Z Fold3 5G 512GB ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-z-fold-3-512gb\" target=\"_blank\" rel=\"noopener\">Galaxy Z Fold3 5G</a>&nbsp;đ&aacute;nh dấu bước tiến mới của&nbsp;<a title=\"Tham khảo sản phẩm Samsung ch&iacute;nh h&atilde;ng tại Thegioididong.com\" href=\"https://thegioididong.com/samsung\" target=\"_blank\" rel=\"noopener\">Samsung</a>&nbsp;trong ph&acirc;n kh&uacute;c&nbsp;<a title=\"Tham khảo gi&aacute; điện thoại smartphone ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" rel=\"noopener\">điện thoại</a>&nbsp;gập cao cấp khi được cải tiến về độ bền c&ugrave;ng những n&acirc;ng cấp đ&aacute;ng gi&aacute; về cấu h&igrave;nh hiệu năng, hứa hẹn sẽ mang đến trải nghiệm sử dụng đột ph&aacute; cho người d&ugrave;ng.</h3>\r\n<h3>Đột ph&aacute; thiết kế m&agrave;n h&igrave;nh gập</h3>\r\n<p>Đầu ti&ecirc;n, khung viền Galaxy Z Fold3 được ho&agrave;n thiện bằng chất liệu Armor Aluminum cao cấp nhất từ trước đến giờ nhằm tăng cường được độ bền, m&agrave; vẫn đảm bảo được trọng lượng c&acirc;n đối đem tới cảm gi&aacute;c v&ocirc; c&ugrave;ng chắc chắn v&agrave; cao cấp.&nbsp;</p>', '<h3><a title=\"Tham khảo gi&aacute; điện thoại Samsung Galaxy Z Fold3 5G 512GB ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-z-fold-3-512gb\" target=\"_blank\" rel=\"noopener\">Galaxy Z Fold3 5G</a>&nbsp;đ&aacute;nh dấu bước tiến mới của&nbsp;<a title=\"Tham khảo sản phẩm Samsung ch&iacute;nh h&atilde;ng tại Thegioididong.com\" href=\"https://thegioididong.com/samsung\" target=\"_blank\" rel=\"noopener\">Samsung</a>&nbsp;trong ph&acirc;n kh&uacute;c&nbsp;<a title=\"Tham khảo gi&aacute; điện thoại smartphone ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" rel=\"noopener\">điện thoại</a>&nbsp;gập cao cấp khi được cải tiến về độ bền c&ugrave;ng những n&acirc;ng cấp đ&aacute;ng gi&aacute; về cấu h&igrave;nh hiệu năng, hứa hẹn sẽ mang đến trải nghiệm sử dụng đột ph&aacute; cho người d&ugrave;ng.</h3>\r\n<h3>Đột ph&aacute; thiết kế m&agrave;n h&igrave;nh gập</h3>\r\n<p>Đầu ti&ecirc;n, khung viền Galaxy Z Fold3 được ho&agrave;n thiện bằng chất liệu Armor Aluminum cao cấp nhất từ trước đến giờ nhằm tăng cường được độ bền, m&agrave; vẫn đảm bảo được trọng lượng c&acirc;n đối đem tới cảm gi&aacute;c v&ocirc; c&ugrave;ng chắc chắn v&agrave; cao cấp.&nbsp;</p>', 3000000, 'public/uploads/74a4648625341a0ef4ad7a31ae8e9e20.jpg_200x200q90.jpg_.webp', 'Chờ duyệt', 54, '2021-11-18 02:04:23', '2021-11-18 02:04:23', NULL),
(78, 'Realmi L5', '<h3><a title=\"Tham khảo gi&aacute; điện thoại Samsung Galaxy Z Fold3 5G 512GB ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-z-fold-3-512gb\" target=\"_blank\" rel=\"noopener\">Galaxy Z Fold3 5G</a>&nbsp;đ&aacute;nh dấu bước tiến mới của&nbsp;<a title=\"Tham khảo sản phẩm Samsung ch&iacute;nh h&atilde;ng tại Thegioididong.com\" href=\"https://thegioididong.com/samsung\" target=\"_blank\" rel=\"noopener\">Samsung</a>&nbsp;trong ph&acirc;n kh&uacute;c&nbsp;<a title=\"Tham khảo gi&aacute; điện thoại smartphone ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" rel=\"noopener\">điện thoại</a>&nbsp;gập cao cấp khi được cải tiến về độ bền c&ugrave;ng những n&acirc;ng cấp đ&aacute;ng gi&aacute; về cấu h&igrave;nh hiệu năng, hứa hẹn sẽ mang đến trải nghiệm sử dụng đột ph&aacute; cho người d&ugrave;ng.</h3>\r\n<h3>Đột ph&aacute; thiết kế m&agrave;n h&igrave;nh gập</h3>\r\n<p>Đầu ti&ecirc;n, khung viền Galaxy Z Fold3 được ho&agrave;n thiện bằng chất liệu Armor Aluminum cao cấp nhất từ trước đến giờ nhằm tăng cường được độ bền, m&agrave; vẫn đảm bảo được trọng lượng c&acirc;n đối đem tới cảm gi&aacute;c v&ocirc; c&ugrave;ng chắc chắn v&agrave; cao cấp.&nbsp;</p>', '<h3><a title=\"Tham khảo gi&aacute; điện thoại Samsung Galaxy Z Fold3 5G 512GB ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-z-fold-3-512gb\" target=\"_blank\" rel=\"noopener\">Galaxy Z Fold3 5G</a>&nbsp;đ&aacute;nh dấu bước tiến mới của&nbsp;<a title=\"Tham khảo sản phẩm Samsung ch&iacute;nh h&atilde;ng tại Thegioididong.com\" href=\"https://thegioididong.com/samsung\" target=\"_blank\" rel=\"noopener\">Samsung</a>&nbsp;trong ph&acirc;n kh&uacute;c&nbsp;<a title=\"Tham khảo gi&aacute; điện thoại smartphone ch&iacute;nh h&atilde;ng\" href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" rel=\"noopener\">điện thoại</a>&nbsp;gập cao cấp khi được cải tiến về độ bền c&ugrave;ng những n&acirc;ng cấp đ&aacute;ng gi&aacute; về cấu h&igrave;nh hiệu năng, hứa hẹn sẽ mang đến trải nghiệm sử dụng đột ph&aacute; cho người d&ugrave;ng.</h3>\r\n<h3>Đột ph&aacute; thiết kế m&agrave;n h&igrave;nh gập</h3>\r\n<p>Đầu ti&ecirc;n, khung viền Galaxy Z Fold3 được ho&agrave;n thiện bằng chất liệu Armor Aluminum cao cấp nhất từ trước đến giờ nhằm tăng cường được độ bền, m&agrave; vẫn đảm bảo được trọng lượng c&acirc;n đối đem tới cảm gi&aacute;c v&ocirc; c&ugrave;ng chắc chắn v&agrave; cao cấp.&nbsp;</p>', 1230000, 'public/uploads/f31b2217c3dc3ebbc5dd4864410d6430.jpg_200x200q90.jpg_.webp', 'Chờ duyệt', 54, '2021-11-18 02:04:48', '2021-11-18 02:04:48', NULL),
(79, 'Tivi Led Asanzo 32 Inch ES32T880', '<ul>\r\n<li>Sản Phẩm : TV LED</li>\r\n<li>Model : ES32T880</li>\r\n<li>K&iacute;ch cỡ m&agrave;n h&igrave;nh : 32\"</li>\r\n<li>Độ ph&acirc;n giải : 1366x768px - HD</li>\r\n<li>G&oacute;c nh&igrave;n : 178&deg;</li>\r\n<li>Khả năng hiển thị m&agrave;u sắc : 16,7 triệu m&agrave;u</li>\r\n</ul>', '<ul>\r\n<li><strong>Độ ph&acirc;n giải HD r&otilde; n&eacute;t</strong></li>\r\n<li><strong>Cổng kết nối đa dạng</strong></li>\r\n<li><strong>C&ocirc;ng nghệ &acirc;m thanh v&ograve;m ảo Dolby sống động</strong></li>\r\n<li><strong>Thiết kế khỏe khoắn với c&aacute;c đường n&eacute;t tinh tế</strong></li>\r\n<li><strong>T&iacute;ch hợp bộ thu truyền h&igrave;nh kỹ thuật số DVB-T2, DVB-C, DVB-S2</strong></li>\r\n<li><strong>Giải tr&iacute; nhiều định dạng qua USB</strong></li>\r\n<li><strong>M&agrave;n h&igrave;nh 32 inch, độ ph&acirc;n giải HD r&otilde; n&eacute;t</strong></li>\r\n<li><strong>Sử dụng đ&egrave;n nền LED ti&ecirc;n tiến, tiết kiệm điện</strong></li>\r\n</ul>', 3199000, 'public/uploads/Vsl4dP.jpg', NULL, 61, '2022-03-04 04:18:55', '2022-03-04 04:18:55', NULL),
(80, 'QLED Tivi 4K Samsung 55Q60A 55 inch Smart TV', '<p>M&agrave;n h&igrave;nh v&ocirc; cực khai ph&oacute;ng tầm nh&igrave;n<br />Độ ph&acirc;n giải 4K si&ecirc;u thực, n&acirc;ng cấp chuẩn 4K<br />&Acirc;m thanh v&ograve;m theo chuyển động h&igrave;nh ảnh OTS<br />Tuyệt t&aacute;c thiết kế ấn tượng từ tương lai</p>', '<p>Tặng 03 th&aacute;ng Xem Kh&ocirc;ng Giới Hạn to&agrave;n bộ nội dung tr&ecirc;n VieON (HBOGo, K+, Max+, Disney&hellip;) tr&ecirc;n VieOn<br />Tặng 06 th&aacute;ng xem Kh&ocirc;ng Giới Hạn* phim chiếu rạp mới nhất (Phim c&oacute; ph&iacute; TVOD) tr&ecirc;n Galaxy Play<br />Tặng 12 th&aacute;ng xem phim g&oacute;i SVOD Basic tr&ecirc;n Galaxy Play<br />Tặng 12 th&aacute;ng xem G&oacute;i K&ecirc;nh Gia Đ&igrave;nh tr&ecirc;n FPT PLAY<br />Tặng 18 th&aacute;ng xem G&oacute;i Gia Đ&igrave;nh ti&ecirc;u chuẩn tr&ecirc;n Clip TV</p>', 19900000, 'public/uploads/neo-qled-tivi-4k-samsung-65qn90a-65-inch-smart-tv_e51a9726.webp', NULL, 61, '2022-03-06 03:23:36', '2022-03-06 03:23:36', NULL),
(81, 'Đồng hồ Orient Limited Edition 2015 SER0200HW0', '<div class=\"item\">\r\n<p class=\"text1\">Đường k&iacute;nh mặt</p>\r\n<p class=\"text2\"><a title=\"\">40 mm</a></p>\r\n</div>\r\n<div class=\"item\">\r\n<p class=\"text1\">Chống nước</p>\r\n<p class=\"text2\"><a title=\"\">5 ATM</a></p>\r\n</div>\r\n<div class=\"item\">\r\n<p class=\"text1\">Chất liệu mặt</p>\r\n<p class=\"text2\">Sapphire</p>\r\n</div>\r\n<div class=\"item\">\r\n<p class=\"text1\">Năng lượng sử dụng</p>\r\n<p class=\"text2\">Quartz/Pin</p>\r\n</div>\r\n<div class=\"item\">\r\n<p class=\"text1\">Size d&acirc;y</p>\r\n<p class=\"text2\">20 mm</p>\r\n</div>\r\n<div class=\"item\">\r\n<p class=\"text1\">Chất liệu d&acirc;y</p>\r\n<p class=\"text2\">D&acirc;y da ch&iacute;nh h&atilde;ng</p>\r\n</div>\r\n<div class=\"item\">\r\n<p class=\"text1\">Chất liệu vỏ</p>\r\n<p class=\"text2\">Th&eacute;p kh&ocirc;ng gỉ</p>\r\n</div>\r\n<div class=\"item\">\r\n<p class=\"text1\">Kiểu d&aacute;ng</p>\r\n<p class=\"text2\">Đồng hồ Nam</p>\r\n</div>\r\n<div class=\"item\">\r\n<p class=\"text1\">Xuất xứ</p>\r\n<p class=\"text2\">China</p>\r\n</div>\r\n<div class=\"item\">\r\n<p class=\"text1\">Chế độ bảo h&agrave;nh</p>\r\n<p class=\"text2\">Bảo h&agrave;nh quốc tế&nbsp;<strong>02</strong>&nbsp;năm</p>\r\n</div>', '<p dir=\"ltr\"><a href=\"https://galle.vn/dong-ho-pc156/dong-ho-orient.glw\"><strong>Orient</strong></a>&nbsp;&ndash; thương hiệu đồng hồ số 1 tại Việt Nam, top 3 nh&agrave; sản xuất đồng hồ lớn nhất Nhật Bản.&nbsp;<strong>Orient Watch</strong>&nbsp;ra đời năm 1950 tại Tokyo, Nhật Bản. Thương hiệu với logo h&igrave;nh ch&uacute; sư tử lu&ocirc;n chiếm được cảm t&igrave;nh v&agrave; sự y&ecirc;u mến của những người chơi đồng hồ nhờ kỹ thuật chế t&aacute;c tinh xảo với những cỗ m&aacute;y in-house do h&atilde;ng tự sản xuất, thiết kế trẻ trung hiện đại c&ugrave;ng với mức gi&aacute; cực kỳ cạnh tranh.&nbsp;&nbsp;&nbsp;</p>\r\n<p dir=\"ltr\">Sớm c&oacute; mặt tại Việt Nam từ trước năm 1975 v&agrave; được ph&acirc;n phối ch&iacute;nh h&atilde;ng từ năm 2005, nh&agrave; sản xuất đồng hồ đến từ xứ sở hoa anh đ&agrave;o nổi tiếng với những cỗ m&aacute;y thời gian huyền thoại như SK mặt lửa, đồng hồ 3 sao thời chiến tranh v&agrave; hiện tại l&agrave; Bambino, Sun &amp; Moon hay phi&ecirc;n bản đặc biệt&nbsp;<strong>Orient</strong>&nbsp;Bản đồ Việt Nam 2015. Với những sản phẩm chất lượng, mẫu m&atilde; đa dạng phong ph&uacute;,&nbsp;<strong>Orient</strong>&nbsp;l&agrave; sự lựa chọn ho&agrave;n hảo với những ai y&ecirc;u th&iacute;ch v&agrave; t&igrave;m kiếm những mẫu đồng hồ cơ NGON - BỔ - RẺ - BỀN - ĐẸP.</p>', 5000000, 'public/uploads/bentley-bl1831-15mtwi-amsk-t_1625818518.jpg', 'Chờ duyệt', 55, '2022-03-06 03:38:41', '2022-03-06 03:38:41', NULL),
(82, 'Orient FAG02003W0', '<div class=\"li-left fl\">T&igrave;nh trạng<span class=\"fl\">:</span>C&ograve;n h&agrave;ng</div>\r\n<div class=\"li-right fl\">Giới t&iacute;nh:Nam</div>\r\n<div class=\"li-left fl off-ol4\">Thương hiệu<span class=\"fl\">:</span>Nhật Bản</div>\r\n<div class=\"li-left fl off-ol5\">Loại đồng hồ:Đồng hồ cơ</div>\r\n<div class=\"li-left fl off-ol1\">Loại d&acirc;y<span class=\"fl\">:</span>D&acirc;y da</div>', '<p>Thuộc d&ograve;ng sản phẩm&nbsp;<a href=\"https://galle.vn/dong-ho-pc156/dong-ho-orient.glw\"><strong>Orient</strong></a>,&nbsp;<strong>FAG02003W0</strong>&nbsp;l&agrave; một trong những mẫu đồng hồ ấn tượng nhất của thương hiệu đến từ xứ sở mặt trời mọc. Với đường k&iacute;nh 41mm, cỗ m&aacute;y của&nbsp;<a href=\"https://galle.vn/dong-ho-pc156/dong-ho-orient.glw\"><strong>Orient</strong></a>&nbsp;hướng tới những người chơi c&oacute; cổ tay trung b&igrave;nh hoặc y&ecirc;u th&iacute;ch những thiết kế nhỏ gọn. &Ocirc; cửa sổ lộ tim ở g&oacute;c 9h gi&uacute;p h&atilde;ng khoe được bộ m&aacute;y cơ kh&iacute; in-house đầy tinh xảo. Bộ kim Dauphine quen thuộc kết hợp ho&agrave;n hảo với cọc số dạng vạch c&ugrave;ng điểm nhấn l&agrave; phần số La M&atilde; ở vị tr&iacute; 12h khiến chiếc đồng hồ tr&ocirc;ng thanh lịch v&agrave; ấn tượng hơn.&nbsp;<strong>FAG02003W0&nbsp;</strong>l&agrave; phi&ecirc;n bản phối m&agrave;u mặt trắng với c&aacute;c chi tiết mạ v&agrave;ng đồng bộ c&ugrave;ng phần vỏ n&uacute;m v&agrave; d&acirc;y da đen. Mẫu đồng hồ n&agrave;y được&nbsp;<a href=\"https://galle.vn/dong-ho-pc156/dong-ho-orient.glw\"><strong>Orient</strong></a>&nbsp;trang bị bộ m&aacute;y Cal.F6T22 với 22 ch&acirc;n k&iacute;nh c&ugrave;ng chức năng l&ecirc;n c&oacute;t tay. Ngo&agrave;i ra,&nbsp;<strong>FAG02003W0</strong>&nbsp;c&ograve;n c&oacute; k&iacute;nh sapphire chống xước, mặt đ&aacute;y lộ gi&uacute;p quan s&aacute;t bộ m&aacute;y b&ecirc;n trong, vỏ th&eacute;p kh&ocirc;ng gỉ c&ugrave;ng độ chịu nước l&ecirc;n đến 50m.&nbsp;</p>', 6000000, 'public/uploads/dong-ho-olym-pianus-op99411-84agsk-t_1640601638.jpg', 'Chờ duyệt', 55, '2022-03-06 03:42:02', '2022-03-06 03:42:02', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nguyễn Thành Nam', 'nguyenthanhnamx3tv@gmail.com', NULL, '$2y$10$cOQDCwUx7EHVQV..Nu/TFOm4vme.MXzW4h5hMePM5GD1rxLsQ/m46', 'H5iXiVDiYJYSbwprAsKUUotZa0tN8lRcX7DxZb1xW9wN6XOBSxpmGp98yvbt', '2021-08-04 02:05:56', '2021-08-04 02:05:56', NULL),
(5, 'Nguyễn Thành Trung', 'thanhnamx3tv@gmail.com', NULL, '$2y$10$49Emf2CcZeRh/0b0tTMaaeOQ3536XjROt0IRXDzqsdaSseNdDaYeq', NULL, '2021-08-05 11:29:36', '2021-08-06 02:10:00', NULL),
(6, 'Nguyễn Thị Hà', 'luuvantiennt2@gmail.com', NULL, '$2y$10$Ce9yYW5dRKZJ.Gtb0emmqufyykrwiTra9Hf//0pNUFcXHhrxSZCVO', NULL, '2021-08-21 10:34:21', '2021-08-21 10:34:21', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_product_id_foreign` (`products_id`),
  ADD KEY `payments_customer_id_foreign` (`customer_id`);

--
-- Chỉ mục cho bảng `postcats`
--
ALTER TABLE `postcats`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_post_id_foreign` (`post_id`);

--
-- Chỉ mục cho bảng `productcats`
--
ALTER TABLE `productcats`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_product_id_foreign` (`product_id`);

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
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `postcats`
--
ALTER TABLE `postcats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `productcats`
--
ALTER TABLE `productcats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_product_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `postcats` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `productcats` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
