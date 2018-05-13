-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 13, 2018 lúc 03:28 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dien_dan_hoc_tap`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `ten_dang_nhap` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `ten_dang_nhap`, `mat_khau`, `email`, `quyen`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 1),
(2, 'admin', 'admin', 'admin@gmail.com', 0),
(3, 'nguyenhuungoc', '12345', 'nguyenhuungoc@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_hoc`
--

CREATE TABLE `bai_hoc` (
  `id` int(11) NOT NULL,
  `ten` varchar(500) NOT NULL,
  `noi_dung` text NOT NULL,
  `hinh_anh` varchar(500) NOT NULL,
  `link_video` varchar(500) NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `thu_tu` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL,
  `id_khoa_hoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bai_hoc`
--

INSERT INTO `bai_hoc` (`id`, `ten`, `noi_dung`, `hinh_anh`, `link_video`, `ngay_tao`, `thu_tu`, `tinh_trang`, `id_khoa_hoc`) VALUES
(10, 'Bài 1: Hướng dẫn cài đặt netbean', '<p>C&aacute;ch thức c&agrave;i đặt để lập tr&igrave;nh.</p>', '2018-05-135311035.jpg:2018-05-134043487.png:2018-05-137490174.jpg:2018-05-135600800.jpg', 'https://youtu.be/dokzNTIWHzs?list=PLE1qPKuGSJaA6-6So-knCgNNq3vNbCRD6', '2018-05-13 11:45:50', 1, 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `bang_xep_hang`
-- (See below for the actual view)
--
CREATE TABLE `bang_xep_hang` (
`id` int(11)
,`ho_ten` varchar(25)
,`so_luong_bai` bigint(21)
);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cau_hoi`
--

CREATE TABLE `cau_hoi` (
  `id` int(11) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `ten_dang_nhap` varchar(255) NOT NULL,
  `ngay_tao` date NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cau_hoi`
--

INSERT INTO `cau_hoi` (`id`, `tieu_de`, `noi_dung`, `hinh_anh`, `ten_dang_nhap`, `ngay_tao`, `tinh_trang`) VALUES
(1, 'Lỗi màn hình xanh ', 'man hinh xanh', 'uploads/1000000.png', 'nguyenhuungoc', '2018-05-09', 1),
(2, 'Học tiếng anh cần những gì', 'Em đang cần học tiếng anh', 'uploads/1000000.jpg', 'nguyenhuungoc', '2018-05-09', 1),
(3, 'Hôm nay là thứ mấy', 'Chắc chắn là thứ hai', 'uploads/8390228.jpg', 'nguyenhuungoc', '2018-05-09', 1),
(4, 'Lỗi code C++', 'Lỗi như sau Sửa mãi không được.', 'uploads/4134674.png', 'ngoc123', '2018-05-09', 1),
(5, 'Làm sao để gán tất cả các giá trị ở cây nhị phân sang mảng ?', 'Học cây nhị phân', 'uploads/4006408.jpg', 'nguyenvancuong', '2018-05-13', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_khoa_hoc`
--

CREATE TABLE `chi_tiet_khoa_hoc` (
  `id` int(11) NOT NULL,
  `id_khoa_hoc` int(11) NOT NULL,
  `ten_bai_hoc` varchar(500) NOT NULL,
  `noi_dung` text NOT NULL,
  `link_video` varchar(255) NOT NULL,
  `link_tai_lieu` varchar(255) NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `thoi_gian` date NOT NULL,
  `tinh_trang` int(11) NOT NULL,
  `ten_dang_nhap` varchar(255) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chu_de`
--

CREATE TABLE `chu_de` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `id_loai_tin` int(11) NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chu_de`
--

INSERT INTO `chu_de` (`id`, `ten`, `id_loai_tin`, `thu_tu`, `tinh_trang`) VALUES
(1, 'Vật lý', 3, 6, 1),
(2, 'Lập trình C#', 2, 0, 1),
(5, 'Học lập trình PHP ', 3, 2, 1),
(6, 'Học tiếng anh ', 3, 3, 1),
(10, 'Toán học', 3, 8, 1),
(11, '123', 3, 3, 1),
(12, 'Lập trình C#', 4, 2, 1),
(13, 'Lập trình java', 2, 2, 1),
(14, 'Cài win', 4, 2, 1),
(15, 'Học tiếng anh giao tiếp', 2, 0, 1),
(16, 'Lập trình Android', 2, 1, 1),
(17, 'Lập trình PHP', 2, 2, 1),
(18, 'Lập trình C/C++', 2, 3, 1),
(19, 'Lập trình Python', 2, 4, 1),
(20, 'Tài liệu lập trình Winform + CSDL', 4, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa_hoc`
--

CREATE TABLE `khoa_hoc` (
  `id` int(11) NOT NULL,
  `id_chu_de` int(11) NOT NULL,
  `ten` varchar(500) NOT NULL,
  `noi_dung` text NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `thoi_gian_ket_thuc` date NOT NULL,
  `thoi_gian_bat_dau` date NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khoa_hoc`
--

INSERT INTO `khoa_hoc` (`id`, `id_chu_de`, `ten`, `noi_dung`, `hinh_anh`, `thoi_gian_ket_thuc`, `thoi_gian_bat_dau`, `thu_tu`, `tinh_trang`) VALUES
(1, 2, 'Khóa học lập trình C# Express', '', '1443969.jpg', '2018-03-14', '2018-05-31', 1, 1),
(2, 13, 'Lập trình Java căn bản', '<p>Kh&oacute;a học mới nhất cho lập tr&igrave;nh:</p>\r\n<p>Mục đ&iacute;ch kh&oacute;a học :</p>\r\n<p>+ Lập tr&igrave;nh được c&aacute;c chương tr&igrave;nh&nbsp; giải to&aacute;n</p>\r\n<p>+ Sử dụng h&agrave;m v&agrave; c&aacute;c biến thuần thục.</p>\r\n<p>+ Sử dụng c&aacute;c c&ocirc;ng cụ lập tr&igrave;nh eclipse, netbean.</p>', '3803955.png', '2018-06-15', '2018-05-01', 4, 1),
(3, 2, 'Lập trình PHP căn bản', '<p>Lập tr&igrave;nh về php căn bản</p>', '2277099.jpg', '2018-05-31', '2018-05-11', 3, 1),
(4, 13, 'ssdfsdf', '<p>sdfsdf</p>', '1449707.png', '2018-05-19', '2018-05-12', 3, 1),
(5, 15, 'Học tiếng anh giao tiếp', '<p>học tốt tiếng anh</p>', '1025756.jpg', '2018-05-31', '2018-05-16', 1, 1),
(6, 19, 'Khóa học lập trình Python', '<p>học tốt</p>', '1896728.png', '2018-05-18', '2018-05-15', 3, 1),
(7, 13, 'Khóa học lập trình Java nâng cao', '<p>học tốt java</p>', '2594360.jpg', '2018-05-11', '2018-05-04', 1, 1),
(8, 18, 'Khóa học lập trình C/C++', '<p>học tốt c/c++</p>', '4479737.jpg', '2018-05-25', '2018-05-10', 2, 1),
(9, 17, 'Khóa học lập trình PHP', '<p>học tốt php</p>', '1173217.jpg', '2018-05-09', '2018-05-05', 4, 1),
(10, 2, 'Khóa học develop C#', '<p>học tốt c#</p>', '4200196.jpg', '2018-05-12', '2018-05-06', 1, 1),
(11, 15, 'Khóa học tiếng anh cơ bản', '<p>học tốt tiếng anh</p>', '2125366.jpg', '2018-05-30', '2018-05-10', 3, 1),
(12, 13, 'Khóa học lập trình Java cơ bản', '<p>học tốt java cơ bản</p>', '4484375.jpg', '2018-05-31', '2018-05-16', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_tin`
--

CREATE TABLE `loai_tin` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `lien_ket` varchar(255) NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai_tin`
--

INSERT INTO `loai_tin` (`id`, `ten`, `lien_ket`, `thu_tu`, `tinh_trang`) VALUES
(2, 'Khóa học', 'index.php?xem=khoahoc', 0, 1),
(3, 'Hỏi đáp', 'index.php?xem=hoidap', 1, 1),
(4, 'Tài liệu', 'index.php?xem=tailieu', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_lieu`
--

CREATE TABLE `tai_lieu` (
  `id` int(11) NOT NULL,
  `id_chu_de` int(11) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL,
  `lien_ket` varchar(500) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `ngay_tao` date NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanh_vien`
--

CREATE TABLE `thanh_vien` (
  `id` int(11) NOT NULL,
  `ten_dang_nhap` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ho_ten` varchar(25) NOT NULL,
  `quyen` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thanh_vien`
--

INSERT INTO `thanh_vien` (`id`, `ten_dang_nhap`, `mat_khau`, `email`, `ho_ten`, `quyen`, `tinh_trang`) VALUES
(1, 'nguyenhuungoc', '12345', 'ngoc@gmail.com', 'Nguyễn Hữu Ngọc', 0, 1),
(6, 'ngoc123', '12345', 'ngoc123@gmail.com', 'Ngọc', 0, 1),
(7, 'nguyenvancuong', '12345', 'cuong@gmail.com', 'nguyễn văn cường', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc cho view `bang_xep_hang`
--
DROP TABLE IF EXISTS `bang_xep_hang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bang_xep_hang`  AS  (select `a`.`id` AS `id`,`a`.`ho_ten` AS `ho_ten`,count(`b`.`id`) AS `so_luong_bai` from (`thanh_vien` `a` join `cau_hoi` `b`) where (((`a`.`ten_dang_nhap` = `b`.`ten_dang_nhap`) or (`a`.`email` = `b`.`ten_dang_nhap`)) and (`a`.`tinh_trang` = 1) and (`b`.`tinh_trang` = 1)) group by `a`.`id` order by count(`b`.`id`) desc) ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bai_hoc`
--
ALTER TABLE `bai_hoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cau_hoi`
--
ALTER TABLE `cau_hoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chi_tiet_khoa_hoc`
--
ALTER TABLE `chi_tiet_khoa_hoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chu_de`
--
ALTER TABLE `chu_de`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_tin`
--
ALTER TABLE `loai_tin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tai_lieu`
--
ALTER TABLE `tai_lieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thanh_vien`
--
ALTER TABLE `thanh_vien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `bai_hoc`
--
ALTER TABLE `bai_hoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `cau_hoi`
--
ALTER TABLE `cau_hoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `chi_tiet_khoa_hoc`
--
ALTER TABLE `chi_tiet_khoa_hoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `chu_de`
--
ALTER TABLE `chu_de`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT cho bảng `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT cho bảng `loai_tin`
--
ALTER TABLE `loai_tin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `tai_lieu`
--
ALTER TABLE `tai_lieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `thanh_vien`
--
ALTER TABLE `thanh_vien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
