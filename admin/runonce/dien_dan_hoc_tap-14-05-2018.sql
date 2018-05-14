-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 14, 2018 lúc 09:30 SA
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
(10, 'Bài 1: Hướng dẫn cài đặt netbean', '<p>C&aacute;ch thức c&agrave;i đặt để lập tr&igrave;nh.</p>', '2018-05-135311035.jpg:2018-05-134043487.png:2018-05-137490174.jpg:2018-05-135600800.jpg', 'https://youtu.be/dokzNTIWHzs?list=PLE1qPKuGSJaA6-6So-knCgNNq3vNbCRD6', '2018-05-13 11:45:50', 1, 1, 2),
(12, 'Bài 2: Lập trình Hello world', '<p>B&agrave;i kinh điển của c&aacute;c lập tr&igrave;nh vi&ecirc;n.</p>', '2018-05-143630676.jpg', 'https://youtu.be/KtHt2EOXq9s?list=PLv6GftO355Av6u60DTCvrUe6aXror_bdE', '2018-05-14 03:38:59', 2, 1, 2),
(13, 'Học tiếng anh giao tiếp qua 90 đoạn hội thoại', '<p><span style=\"color: #111111; font-family: Roboto, Arial, sans-serif; white-space: pre-wrap;\">Học tiếng anh giao tiếp qua 90 đoạn hội thoại - Tổng hợp 90 đoạn hội thoại với những mẫu c&acirc;u th&ocirc;ng dụng khi hội thoại tiếng anh trong nhiều t&igrave;nh huống giao tiếp, chủ đề hội thoại kh&aacute;c nhau hằng ng&agrave;y</span></p>', '2018-05-149815156.jpg', 'https://youtu.be/1ST7-jMfdAs', '2018-05-14 05:20:33', 1, 1, 11),
(14, 'TỔNG KẾT KHÓA HỌC C# FOR DEVELOPER TẠI STANFORD', '<p><span style=\"color: #111111; font-family: Roboto, Arial, sans-serif; white-space: pre-wrap;\">Buổi bế giảng h&ocirc;m nay của lớp CS121501DEV sau thời gian thực hiện v&agrave; ho&agrave;n th&agrave;nh Project cuối kh&oacute;a tại Stanford (stanford.com.vn) với c&aacute;c nội dung ch&iacute;nh như sau: - Review c&aacute;c chức năng trong Project cuối kh&oacute;a</span></p>', '2018-05-141258178.jpg', 'https://youtu.be/djHeGv4SQ2k', '2018-05-14 05:21:44', 2, 1, 10),
(15, 'Bài 1. Kiểu dữ liệu cơ sở - biến - hằng', '<p><span style=\"color: #111111; font-family: Roboto, Arial, sans-serif; white-space: pre-wrap;\"> Kiểu dữ liệu cơ sở trong ng&ocirc;n ngữ lập tr&igrave;nh C/C++ l&agrave; c&aacute;c kh&aacute;i niệm tuy cơ bản nhưng mang t&iacute;nh chất căng cơ m&agrave; người học cần phải nắm vững. Đ&acirc;y l&agrave; c&aacute;c kiến thức nền tảng để người học từng bước tiến xa hơn trong m&ocirc;i trường lập tr&igrave;nh chuy&ecirc;n nghiệp.</span></p>', '2018-05-143844635.jpg', 'https://youtu.be/j1Jx_wtjGUg?list=PLimFJKGsbn1lG2-vNW57FyESDlT-_F2QQ', '2018-05-14 05:22:51', 2, 1, 8),
(16, 'Xây Dựng Class và Object', '<p><span style=\"color: #111111; font-family: Roboto, Arial, sans-serif; white-space: pre-wrap;\">- NghiaIT.com l&agrave; blog c&aacute; nh&acirc;n tập trung về việc phổ biến , chia sẻ c&aacute;c kiến thức li&ecirc;n quan tới lập tr&igrave;nh c&aacute;c ng&ocirc;n ngữ C# , C++ , Java , .Net , ASP.NET , SQL , MySQL , Oracle , Lập tr&igrave;nh website . - Với phương ch&acirc;m hoạt đ&ocirc;ng l&agrave; chia sẻ kh&ocirc;ng giới hạn c&aacute;c kiến thức li&ecirc;n quan tới lập tr&igrave;nh với ước mơ g&oacute;p sức x&acirc;y dựng cộng đồng lập tr&igrave;nh .</span></p>', '2018-05-142127746.jpg', 'https://youtu.be/F28uOjEt7XU?list=PL_qD1hufgg97iuIAU84A0U6Onqm21Jnd3', '2018-05-14 05:23:51', 4, 1, 7),
(17, 'Bài 1: Giới thiệu ngôn ngữ lập trình Python', '<p><span style=\"color: #111111; font-family: Roboto, Arial, sans-serif; white-space: pre-wrap;\">[Kh&oacute;a học lập tr&igrave;nh Python cơ bản] - B&agrave;i 1: Giới thiệu ng&ocirc;n ngữ lập tr&igrave;nh Python | HowKteam Nếu c&aacute;c bạn thấy hay th&igrave; h&atilde;y đăng k&yacute; theo d&otilde;i k&ecirc;nh, like, share cho mọi người c&ugrave;ng tham gia nh&eacute;.</span></p>', '2018-05-142158783.png', 'https://youtu.be/NZj6LI5a9vc?list=PL33lvabfss1xczCv2BA0SaNJHu_VXsFtg', '2018-05-14 05:24:42', 5, 1, 6),
(18, 'Bài 1: Greetings - Chào hỏi', '<p><span style=\"color: #111111; font-family: Roboto, Arial, sans-serif; white-space: pre-wrap;\">Học tiếng Anh giao tiếp hiệu quả, tự tin hơn với c&aacute;c b&agrave;i tiếng Anh giao tiếp th&ocirc;ng dụng gi&uacute;p bạn nhanh ch&oacute;ng cải thiện tr&igrave;nh độ giao tiếp tiếng Anh của m&igrave;nh </span></p>', '2018-05-144276123.jpg', 'https://youtu.be/FeKGaATWeQk', '2018-05-14 05:25:47', 6, 1, 5),
(19, 'Classes-Các lớp.', '<p><span style=\"color: #111111; font-family: Roboto, Arial, sans-serif; white-space: pre-wrap;\">Hướng dẫn l&acirc;p tr&igrave;nh Java từ cơ bản tới n&acirc;ng cao. Lập tr&igrave;nh Java cho người mới bắt đầu. Giới thiệu kh&aacute;i niệm về lớp trong java. classes. Lớp v&agrave; c&aacute;c kh&aacute;i niệm li&ecirc;n quan. Tự học lập tr&igrave;nh. học lập tr&igrave;nh đơn giản, miễn ph&iacute; qua c&aacute;c clip. Java progoramming tutorial for the beginner. triệu th&acirc;n channel-</span></p>', '2018-05-147113068.jpg', 'https://youtu.be/NmzvGHBUAGQ?list=PLE1qPKuGSJaA6-6So-knCgNNq3vNbCRD6', '2018-05-14 05:27:00', 7, 1, 2),
(20, 'Giới Thiệu Về Khoá Học Java Cơ Bản', '<p><span style=\"color: #111111; font-family: Roboto, Arial, sans-serif; white-space: pre-wrap;\">C&ugrave;ng Anh T&uacute; Giới Thiệu về kho&aacute; học Java Cơ Bản. Trong kho&aacute; học n&agrave;y ch&uacute;ng ta sẽ học về: o Cấu tr&uacute;c code java, c&acirc;u lệnh v&agrave; quy chuẩn o C&acirc;u điều kiện, v&ograve;ng lặp</span></p>', '2018-05-147254791.jpg', 'https://youtu.be/6ZsdpYNPx6Y?list=PLsfLgp1K1xQ4ukX-Y7w5i76eJkApL641w', '2018-05-14 05:40:46', 4, 1, 12),
(21, 'Lập trình Java - 02 Phần mềm học Java', '<div id=\"meta\" class=\"style-scope ytd-watch\" style=\"margin: 0px; padding: 0px; border: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; box-sizing: border-box; width: var(--flex640-mode-player-width); font-family: Roboto, Arial, sans-serif; font-size: 10px;\">\r\n<div id=\"meta-contents\" class=\"style-scope ytd-watch\" style=\"margin: 0px; padding: 0px; border: 0px; background: transparent;\">\r\n<div id=\"container\" class=\"style-scope ytd-video-secondary-info-renderer\" style=\"margin: 0px; padding: 0px; border: 0px; background: transparent;\">\r\n<div id=\"content\" class=\"style-scope ytd-expander\" style=\"word-wrap: break-word; min-width: 0px; margin: 0px; padding: 0px; border: 0px; background: transparent; overflow: hidden; max-height: var(--ytd-expander-collapsed-height);\">Kh&oacute;a học lập tr&igrave;nh JAVA l&agrave; kh&oacute;a học lập tr&igrave;nh JAVA trực tuyến (100% thời gian học qua video). Học vi&ecirc;n c&oacute; thể truy cập v&agrave;o kh&oacute;a học từ bất kỳ nơi đ&acirc;u, v&agrave; v&agrave;o bất kỳ thời điểm n&agrave;o m&agrave; học vi&ecirc;n muốn Sau khi ho&agrave;n tất kh&oacute;a học học vi&ecirc;n sẽ được trang bị kiến thức vững chắc về ng&ocirc;n ngữ lập tr&igrave;nh JAVA. Từ đ&oacute; học vi&ecirc;n c&oacute; thể tự nghi&ecirc;n cứu v&agrave; ph&aacute;t triển th&ecirc;m kỹ năng lập tr&igrave;nh JAVA v&agrave; tiến xa hơn l&agrave; sử dụng JAVA để ph&aacute;t triển c&aacute;c ứng dụng phần mềm, ứng dụng web, ứng dụng mobile (lập tr&igrave;nh Android). Th&ocirc;ng tin chi tiết kh&oacute;a học: <a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"display: inline-block; cursor: pointer; text-decoration-line: none;\" href=\"https://www.youtube.com/redirect?v=e6x1NWuVh-4&amp;redir_token=3Qu-LK7oskl7V93Z1DrTFlCTeRd8MTUyNjM2MzIwNEAxNTI2Mjc2ODA0&amp;event=video_description&amp;q=http%3A%2F%2Fzend.vn%2Fkhoa-hoc-lap-trinh-java-co-ban%2F\">http://zend.vn/khoa-hoc-lap-trinh-jav...</a> với rất nhiều chương tr&igrave;nh hỗ trợ cho học sinh v&agrave; sinh vi&ecirc;n ---------------------------------------- ???? Website: www.zend.vn ???? Skype: zendvn.help ???? Email: training@zend.vn ???? Số điện thoại: +84 (08) 66.837626 ???? Facebook: <a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"display: inline-block; cursor: pointer; text-decoration-line: none;\" href=\"https://www.youtube.com/redirect?v=e6x1NWuVh-4&amp;redir_token=3Qu-LK7oskl7V93Z1DrTFlCTeRd8MTUyNjM2MzIwNEAxNTI2Mjc2ODA0&amp;event=video_description&amp;q=https%3A%2F%2Fwww.fb.com%2Fzendvngroup\">https://www.fb.com/zendvngroup</a> ???? Facebook trao đổi lập tr&igrave;nh: <a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"display: inline-block; cursor: pointer; text-decoration-line: none;\" href=\"https://www.youtube.com/redirect?v=e6x1NWuVh-4&amp;redir_token=3Qu-LK7oskl7V93Z1DrTFlCTeRd8MTUyNjM2MzIwNEAxNTI2Mjc2ODA0&amp;event=video_description&amp;q=https%3A%2F%2Fwww.fb.com%2Fgroups%2FZendVN.Group%2F\">https://www.fb.com/groups/ZendVN.Group/</a></div>\r\n<div id=\"always-shown\" class=\"style-scope ytd-metadata-row-container-renderer\" style=\"margin: 0px; padding: 0px; border: 0px; background: transparent;\">&nbsp;</div>\r\nHIỂN THỊ TH&Ecirc;M\r\n<div id=\"background\" class=\"style-scope paper-ripple\" style=\"pointer-events: none; position: absolute; top: 0px; left: 0px; width: 92.7188px; height: 29px; opacity: 0;\">&nbsp;</div>\r\n<div id=\"waves\" class=\"style-scope paper-ripple\" style=\"pointer-events: none; position: absolute; top: 0px; left: 0px; width: 92.7188px; height: 29px; overflow: hidden;\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div id=\"offer-module\" class=\"style-scope ytd-watch\" style=\"margin: 0px; padding: 0px; border: 0px; background: transparent;\">&nbsp;</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div id=\"header\" class=\"style-scope ytd-item-section-renderer\" style=\"margin: 0px; padding: 0px; border: 0px; background: transparent;\">\r\n<div id=\"meta\" class=\"style-scope ytd-watch\" style=\"margin: 0px; padding: 0px; border: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; box-sizing: border-box; width: var(--flex640-mode-player-width); font-family: Roboto, Arial, sans-serif; font-size: 10px;\">\r\n<div id=\"meta-contents\" class=\"style-scope ytd-watch\" style=\"margin: 0px; padding: 0px; border: 0px; background: transparent;\">\r\n<div id=\"container\" class=\"style-scope ytd-video-secondary-info-renderer\" style=\"margin: 0px; padding: 0px; border: 0px; background: transparent;\">\r\n<div id=\"content\" class=\"style-scope ytd-expander\" style=\"word-wrap: break-word; min-width: 0px; margin: 0px; padding: 0px; border: 0px; background: transparent; overflow: hidden; max-height: var(--ytd-expander-collapsed-height);\">Kh&oacute;a học lập tr&igrave;nh JAVA l&agrave; kh&oacute;a học lập tr&igrave;nh JAVA trực tuyến (100% thời gian học qua video). Học vi&ecirc;n c&oacute; thể truy cập v&agrave;o kh&oacute;a học từ bất kỳ nơi đ&acirc;u, v&agrave; v&agrave;o bất kỳ thời điểm n&agrave;o m&agrave; học vi&ecirc;n muốn Sau khi ho&agrave;n tất kh&oacute;a học học vi&ecirc;n sẽ được trang bị kiến thức vững chắc về ng&ocirc;n ngữ lập tr&igrave;nh JAVA. Từ đ&oacute; học vi&ecirc;n c&oacute; thể tự nghi&ecirc;n cứu v&agrave; ph&aacute;t triển th&ecirc;m kỹ năng lập tr&igrave;nh JAVA v&agrave; tiến xa hơn l&agrave; sử dụng JAVA để ph&aacute;t triển c&aacute;c ứng dụng phần mềm, ứng dụng web, ứng dụng mobile (lập tr&igrave;nh Android). Th&ocirc;ng tin chi tiết kh&oacute;a học: <a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"display: inline-block; cursor: pointer; text-decoration-line: none;\" href=\"https://www.youtube.com/redirect?v=e6x1NWuVh-4&amp;redir_token=3Qu-LK7oskl7V93Z1DrTFlCTeRd8MTUyNjM2MzIwNEAxNTI2Mjc2ODA0&amp;event=video_description&amp;q=http%3A%2F%2Fzend.vn%2Fkhoa-hoc-lap-trinh-java-co-ban%2F\">http://zend.vn/khoa-hoc-lap-trinh-jav...</a> với rất nhiều chương tr&igrave;nh hỗ trợ cho học sinh v&agrave; sinh vi&ecirc;n ---------------------------------------- ???? Website: www.zend.vn ???? Skype: zendvn.help ???? Email: training@zend.vn ???? Số điện thoại: +84 (08) 66.837626 ???? Facebook: <a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"display: inline-block; cursor: pointer; text-decoration-line: none;\" href=\"https://www.youtube.com/redirect?v=e6x1NWuVh-4&amp;redir_token=3Qu-LK7oskl7V93Z1DrTFlCTeRd8MTUyNjM2MzIwNEAxNTI2Mjc2ODA0&amp;event=video_description&amp;q=https%3A%2F%2Fwww.fb.com%2Fzendvngroup\">https://www.fb.com/zendvngroup</a> ???? Facebook trao đổi lập tr&igrave;nh: <a class=\"yt-simple-endpoint style-scope yt-formatted-string\" style=\"display: inline-block; cursor: pointer; text-decoration-line: none;\" href=\"https://www.youtube.com/redirect?v=e6x1NWuVh-4&amp;redir_token=3Qu-LK7oskl7V93Z1DrTFlCTeRd8MTUyNjM2MzIwNEAxNTI2Mjc2ODA0&amp;event=video_description&amp;q=https%3A%2F%2Fwww.fb.com%2Fgroups%2FZendVN.Group%2F\">https://www.fb.com/groups/ZendVN.Group/</a></div>\r\n<div id=\"always-shown\" class=\"style-scope ytd-metadata-row-container-renderer\" style=\"margin: 0px; padding: 0px; border: 0px; background: transparent;\">&nbsp;</div>\r\n<span style=\"color: #111111; font-size: 14px; letter-spacing: normal; text-align: start; text-transform: none; white-space: pre-wrap;\">Kh&oacute;a học lập tr&igrave;nh JAVA l&agrave; kh&oacute;a học lập tr&igrave;nh JAVA trực tuyến (100% thời gian học qua video). Học vi&ecirc;n c&oacute; thể truy cập v&agrave;o kh&oacute;a học từ bất kỳ nơi đ&acirc;u, v&agrave; v&agrave;o bất kỳ thời điểm n&agrave;o m&agrave; học vi&ecirc;n muốn</span>HIỂN THỊ TH&Ecirc;M\r\n<div id=\"background\" class=\"style-scope paper-ripple\" style=\"pointer-events: none; position: absolute; top: 0px; left: 0px; width: 92.7188px; height: 29px; opacity: 0;\">&nbsp;</div>\r\n<div id=\"waves\" class=\"style-scope paper-ripple\" style=\"pointer-events: none; position: absolute; top: 0px; left: 0px; width: 92.7188px; height: 29px; overflow: hidden;\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div id=\"offer-module\" class=\"style-scope ytd-watch\" style=\"margin: 0px; padding: 0px; border: 0px; background: transparent;\">&nbsp;</div>\r\n</div>\r\n<div id=\"ticket-shelf\" class=\"style-scope ytd-watch\" style=\"margin: 0px; padding: 0px; border: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; box-sizing: border-box; width: var(--flex640-mode-player-width); font-family: Roboto, Arial, sans-serif; font-size: 10px;\">&nbsp;</div>\r\n<div id=\"merch-shelf\" class=\"style-scope ytd-watch\" style=\"margin: 0px; padding: 0px; border: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; box-sizing: border-box; width: var(--flex640-mode-player-width); font-family: Roboto, Arial, sans-serif; font-size: 10px;\">&nbsp;</div>\r\n<div id=\"header\" class=\"style-scope ytd-item-section-renderer\" style=\"margin: 0px; padding: 0px; border: 0px; background: transparent;\">&nbsp;</div>\r\n<div id=\"title\" class=\"style-scope ytd-comments-header-renderer\" style=\"margin: 0px 0px 24px; padding: 0px; border: 0px; background: transparent; display: flex; flex-direction: row;\">&nbsp;</div>\r\n</div>\r\n<div id=\"merch-shelf\" class=\"style-scope ytd-watch\" style=\"margin: 0px; padding: 0px; border: 0px; background: #ffffff; box-sizing: border-box; width: var(--flex640-mode-player-width); color: #000000; font-family: Roboto, Arial, sans-serif; font-size: 10px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">&nbsp;</div>\r\n<div id=\"ticket-shelf\" class=\"style-scope ytd-watch\" style=\"margin: 0px; padding: 0px; border: 0px; background: #ffffff; box-sizing: border-box; width: var(--flex640-mode-player-width); color: #000000; font-family: Roboto, Arial, sans-serif; font-size: 10px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">&nbsp;</div>', '2018-05-143449402.jpg', 'https://youtu.be/e6x1NWuVh-4?list=PLv6GftO355Av6u60DTCvrUe6aXror_bdE', '2018-05-14 05:54:07', 2, 1, 12),
(22, 'Lập trình Java - 03 Chương trình Java đầu tiên', '<p><span style=\"color: #111111; font-family: Roboto, Arial, sans-serif; white-space: pre-wrap;\">Kh&oacute;a học lập tr&igrave;nh JAVA l&agrave; kh&oacute;a học lập tr&igrave;nh JAVA trực tuyến (100% thời gian học qua video). Học vi&ecirc;n c&oacute; thể truy cập v&agrave;o kh&oacute;a học từ bất kỳ nơi đ&acirc;u, v&agrave; v&agrave;o bất kỳ thời điểm n&agrave;o m&agrave; học vi&ecirc;n muốn</span></p>', '2018-05-141390564.jpg', 'https://youtu.be/zUQm5xU5ex4?list=PLv6GftO355Av6u60DTCvrUe6aXror_bdE', '2018-05-14 05:54:47', 3, 1, 12),
(23, 'Lập trình Java - 04 Biên dịch tập tin java', '<p><span style=\"color: #111111; font-family: Roboto, Arial, sans-serif; white-space: pre-wrap;\">Kh&oacute;a học lập tr&igrave;nh JAVA l&agrave; kh&oacute;a học lập tr&igrave;nh JAVA trực tuyến (100% thời gian học qua video). Học vi&ecirc;n c&oacute; thể truy cập v&agrave;o kh&oacute;a học từ bất kỳ nơi đ&acirc;u, v&agrave; v&agrave;o bất kỳ thời điểm n&agrave;o m&agrave; học vi&ecirc;n muốn</span></p>', '2018-05-146743378.jpg', 'https://youtu.be/2uezOClAjaI?list=PLv6GftO355Av6u60DTCvrUe6aXror_bdE', '2018-05-14 05:55:16', 4, 1, 12);

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
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(11) NOT NULL,
  `noi_dung` varchar(500) NOT NULL,
  `ten_dang_nhap` varchar(255) NOT NULL,
  `thoi_gian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_cau_hoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `noi_dung`, `ten_dang_nhap`, `thoi_gian`, `id_cau_hoi`) VALUES
(1, '\".$noi_dung.\"', '\".$ten_dang_nhap.\"', '2018-05-14 07:22:43', 0),
(2, 'sfsdfsd', 'nguyenvannam', '2018-05-13 17:00:00', 5),
(3, 'Hôm nay là thứ mấy', 'nguyenvannam', '2018-05-13 17:00:00', 5),
(4, 'Hôm nay là thứ mấy', 'nguyenvannam', '2018-05-13 17:00:00', 5),
(5, 'Hôm nay là thứ mấy', 'nguyenvannam', '2018-05-13 17:00:00', 5),
(6, 'sdfsdf', 'nguyenvannam', '2018-05-13 17:00:00', 5),
(7, 'ádfasdf', 'nguyenvannam', '2018-05-13 17:00:00', 5),
(8, '21321', 'nguyenvannam', '2018-05-13 17:00:00', 5),
(9, '21321', 'nguyenvannam', '2018-05-13 17:00:00', 5),
(10, '65656562', 'nguyenvannam', '2018-05-13 17:00:00', 5),
(11, '213156151', 'nguyenvannam', '2018-05-13 17:00:00', 5),
(12, 'sadasd', 'nguyenvannam', '2018-05-14 02:27:58', 5),
(13, 'adfasdf', 'nguyenvannam', '2018-05-14 02:28:06', 5),
(14, 'adfadsf', 'nguyenvannam', '2018-05-14 02:28:10', 5),
(15, 'sàdasf', 'nguyenvannam', '2018-05-14 02:29:32', 7),
(16, 'adfaf', 'nguyenvannam', '2018-05-14 02:29:36', 7),
(17, 'dâf', 'nguyenvannam', '2018-05-14 02:29:44', 3),
(18, 'ádfa', 'nguyenvannam', '2018-05-14 02:29:47', 3);

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
(5, 'Làm sao để gán tất cả các giá trị ở cây nhị phân sang mảng ?', 'Học cây nhị phân', 'uploads/4006408.jpg', 'nguyenvancuong', '2018-05-13', 1),
(6, 'Lỗi Angular 4 tự động save liên tục', 'Khắc phục lỗi', 'uploads/5031707.png', 'nguyenducmanh', '2018-05-14', 1),
(7, 'Cách tính số ngày trong C++', 'Cách khai báo', 'uploads/2987426.jpg', 'nguyenvannam', '2018-05-14', 1);

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
(11, 'Lập trình C/C++', 3, 3, 1),
(12, 'Lập trình C#', 4, 2, 1),
(13, 'Lập trình java', 2, 2, 1),
(15, 'Học tiếng anh giao tiếp', 2, 0, 1),
(16, 'Lập trình Android', 2, 1, 1),
(17, 'Lập trình PHP', 2, 2, 1),
(18, 'Lập trình C/C++', 2, 3, 1),
(19, 'Lập trình Python', 2, 4, 1),
(20, 'Tài liệu lập trình Winform + CSDL', 4, 0, 1),
(21, 'Lập trình java', 4, 2, 1),
(22, 'Lập trình Android', 4, 3, 1),
(23, 'Lập trình PHP', 4, 4, 1),
(24, 'Tài liệu về hệ điều hành', 4, 3, 1),
(25, 'Lập trình C/C++', 4, 4, 1);

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
(1, 2, 'Khóa học lập trình C# Express', '<p><span style=\"color: #444444; font-family: Roboto, sans-serif; font-size: 18px;\">Cuộc c&aacute;ch mạng c&ocirc;ng nghiệp 4.0 đang thực sự diễn ra tr&ecirc;n to&agrave;n thế giới. &Aacute;p dụng những ưu điểm nổi bật của c&ocirc;ng nghệ th&ocirc;ng tin (CNTT) v&agrave;o cuộc sống đang trở th&agrave;nh y&ecirc;u cầu bắt buộc đối với tất cả c&aacute;c ng&agrave;nh nghề từ sản xuất, kinh doanh, y tế, gi&aacute;o dục&hellip;&nbsp;Cũng ch&iacute;nh từ đ&acirc;y, nhu cầu nh&acirc;n lực trong lĩnh vực CNTT n&oacute;i chung v&agrave; ng&agrave;nh lập tr&igrave;nh n&oacute;i ri&ecirc;ng đang trở n&ecirc;n n&oacute;ng hơn bao giờ hết.</span><br style=\"box-sizing: border-box; color: #444444; font-family: Roboto, sans-serif; font-size: 18px;\" /><span style=\"color: #444444; font-family: Roboto, sans-serif; font-size: 18px;\">B&ecirc;n cạnh những c&ocirc;ng nghệ lập tr&igrave;nh web truyền thống (PHP, Java, C#,&hellip;) Node.js l&agrave; một c&aacute;i t&ecirc;n được nhắc rất nhiều hiện nay.&nbsp;L&agrave; một nền tảng m&atilde; nguồn mở, viết bằng ng&ocirc;n ngữ Javascript tr&ecirc;n engine V8 của Google, những ưu điểm nổi bật của Node.js đ&atilde; v&agrave; đang được đ&ocirc;ng đảo&nbsp;lập tr&igrave;nh vi&ecirc;n tr&ecirc;n thế giới đ&oacute;n nhận v&agrave; hưởng ứng nhiệt liệt. C&oacute; thể n&oacute;i Node.js ch&iacute;nh l&agrave; c&uacute; h&iacute;ch cho mảng Front-End ph&aacute;t triển b&ugrave;ng nổ.&nbsp;Bạn h&atilde;y thử hỏi Google v&agrave; tự cảm nhận về nhu cầu c&ocirc;ng việc hiện nay! Cực n&oacute;ng!</span></p>', '2038574.jpg', '2018-05-31', '2018-03-14', 1, 1),
(2, 13, 'Lập trình Java căn bản', '<p>Kh&oacute;a học mới nhất cho lập tr&igrave;nh:</p>\r\n<p>Mục đ&iacute;ch kh&oacute;a học :</p>\r\n<p>+ Lập tr&igrave;nh được c&aacute;c chương tr&igrave;nh&nbsp; giải to&aacute;n</p>\r\n<p>+ Sử dụng h&agrave;m v&agrave; c&aacute;c biến thuần thục.</p>\r\n<p>+ Sử dụng c&aacute;c c&ocirc;ng cụ lập tr&igrave;nh eclipse, netbean.</p>', '3803955.png', '2018-06-15', '2018-05-01', 4, 1),
(5, 15, 'Học tiếng anh giao tiếp', '<ul style=\"margin: 10px 0px; padding: 0px 0px 0px 40px; border: 0px; outline: 0px; font-size: 16px; font-family: Arial; vertical-align: baseline; background: none 0px 0px repeat scroll #720000; list-style-position: initial; list-style-image: initial; line-height: 22px; text-align: justify;\">\r\n<li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; background: none 0px 0px repeat scroll transparent;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-weight: bolder; background-color: transparent; font-style: inherit;\">Ngữ ph&aacute;p tốt nhưng&nbsp;yếu kỹ năng nghe n&oacute;i do chưa học đ&uacute;ng phương ph&aacute;p?</span></li>\r\n<li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; background: none 0px 0px repeat scroll transparent;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-weight: bolder; background-color: transparent; font-style: inherit;\">Kh&ocirc;ng thể ph&aacute;t &acirc;m chuẩn, bị vấp,&nbsp;b&iacute; &yacute; trong c&aacute;c t&igrave;nh huống diễn đạt thực tế?</span></li>\r\n<li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; background: none 0px 0px repeat scroll transparent;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-weight: bolder;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; background: none 0px 0px repeat scroll transparent;\">Lo lắng khi đi du lịch, n&oacute;i chuyện với người nước ngo&agrave;i v&igrave; kh&ocirc;ng thể n&oacute;i những c&acirc;u Tiếng Anh đơn giản.</span><br style=\"margin: 0px; padding: 0px; border: 0px;\" /></span></li>\r\n<li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; background: none 0px 0px repeat scroll transparent;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-weight: bolder; background-color: transparent; font-style: inherit;\">Học ngoại ngữ kh&aacute;c v&agrave; muốn bắt đầu học Tiếng Anh?</span></li>\r\n</ul>', '1828125.jpg', '2018-05-16', '2018-05-31', 1, 1),
(6, 19, 'Khóa học lập trình Python', '<p>Học lập tr&igrave;nh python rất th&uacute; vị. n&oacute; cung cấp nhiều th&ocirc;ng tin bổ &iacute;ch&nbsp;</p>', '1896728.png', '2018-05-18', '2018-05-15', 3, 1),
(7, 13, 'Khóa học lập trình Java nâng cao', '<ul style=\"box-sizing: border-box; font-family: Roboto; padding: 0px; margin-bottom: 26px; color: #222222; font-size: 15px;\">\r\n<li style=\"box-sizing: border-box; line-height: 26px; margin-left: 21px;\"><span style=\"box-sizing: border-box; font-family: arial, helvetica, sans-serif;\"><span style=\"box-sizing: border-box; font-family: Roboto; font-weight: bold;\">L&acirc;̣p trình Java</span>&nbsp;chuy&ecirc;n nghi&ecirc;̣p ngoài giờ l&agrave; kh&oacute;a học dành cho các sinh vi&ecirc;n đã t&ocirc;́t nghi&ecirc;̣p hoặc đang theo học các năm cu&ocirc;́i tại các trường Cao đẳng, Đại học chuy&ecirc;n ngành CNTT hoặc các chuy&ecirc;n ngành kỹ thu&acirc;̣t khác. Sinh vi&ecirc;n theo học, hoàn thành chương trình đạt y&ecirc;u c&acirc;̀u sẽ được đảm bảo vi&ecirc;̣c làm tại C&ocirc;ng ty Ph&acirc;̀n m&ecirc;̀m FPT.</span></li>\r\n<li style=\"box-sizing: border-box; line-height: 26px; margin-left: 21px;\"><span style=\"box-sizing: border-box; font-family: arial, helvetica, sans-serif;\">Java là c&ocirc;ng ngh&ecirc;̣ được sử dụng trong hơn 60% các dự án tại các C&ocirc;ng ty XKPM lớn, đ&ocirc;̀ng thời n&ecirc;́u kỹ năng Java các l&acirc;̣p trình vi&ecirc;n cũng có th&ecirc;̉ d&ecirc;̃ dàng học được các c&ocirc;ng ngh&ecirc;̣ khác như JavaScript, Ruby, Node.JS hay các n&ecirc;̀n tảng phát tri&ecirc;̉n cho di đ&ocirc;̣ng như Swift hay l&acirc;̣p trình Android.&nbsp;</span></li>\r\n</ul>', '2594360.jpg', '2018-05-11', '2018-05-04', 1, 1),
(8, 18, 'Khóa học lập trình C/C++', '<p><span style=\"color: #363636; font-family: Product_Sans, Arial, Helvetica, sans-serif; font-size: 15px; text-align: justify; background-color: #f4f4f4;\">Ng&ocirc;n ngữ C/C++ c&oacute; thể l&agrave;m nền tảng vững chắc để tiếp cận những ng&ocirc;n ngữ lập tr&igrave;nh kh&aacute;c một c&aacute;ch dễ d&agrave;ng hơn. Bởi v&igrave; C/C++ c&oacute; thể được sử dụng theo hướng lập tr&igrave;nh hướng cấu tr&uacute;c, cũng c&oacute; thể sử dụng c&aacute;c kh&aacute;i niệm trong lập tr&igrave;nh hướng đối tượng giống những ng&ocirc;n ngữ mới sau&nbsp;</span></p>', '4479737.jpg', '2018-05-25', '2018-05-10', 2, 1),
(9, 17, 'Khóa học lập trình PHP', '<p>học tốt php</p>', '1844116.jpg', '2018-05-05', '2018-05-09', 4, 4),
(10, 2, 'Khóa học develop C#', '<p><span style=\"color: #363636; font-family: Product_Sans, Arial, Helvetica, sans-serif; font-size: 15px; text-align: justify; background-color: #f4f4f4;\">Ng&ocirc;n ngữ C# l&agrave; một ng&ocirc;n ngữ mới, cấu tr&uacute;c r&otilde; r&agrave;ng, dễ hiểu v&agrave; dễ học. C# thừa hưởng những ưu việt từ ng&ocirc;n ngữ Java, C, C++ cũng như khắc phục được những hạn chế của c&aacute;c ng&ocirc;n ngữ n&agrave;y. C# l&agrave; ng&ocirc;n ngữ lập tr&igrave;nh hướng đối tượng được ph&aacute;t triển bởi Microsoft, được x&acirc;y dựng dựa tr&ecirc;n&nbsp;</span></p>', '4200196.jpg', '2018-05-12', '2018-05-06', 1, 1),
(11, 15, 'Khóa học tiếng anh cơ bản', '<p>học tốt tiếng anh</p>', '2125366.jpg', '2018-05-30', '2018-05-10', 3, 1),
(12, 13, 'Khóa học lập trình Java cơ bản', '<div style=\"box-sizing: border-box; outline: 0px; border: 0px; font-family: Arial, Helvetica, sans-serif; margin: 0px; padding: 0px; color: #2f2f2f; text-align: justify;\"><span style=\"box-sizing: border-box; outline: 0px; font-weight: bold; border: 0px; font-family: inherit; margin: 0px; padding: 0px;\"><span style=\"box-sizing: border-box; outline: 0px; border: 0px; font-family: inherit; margin: 0px; padding: 0px; line-height: 1.5em;\">Java &ndash;&nbsp;Ng&ocirc;n ngữ lập tr&igrave;nh được sử dụng rộng r&atilde;i nhất hiện nay. Tại Đ&agrave; Nẵng, c&oacute; đến hơn 1,000 lượt tuyển dụng lập tr&igrave;nh vi&ecirc;n Java mỗi năm v&agrave; đang tiếp tục tăng, l&agrave; cơ hội lớn cho c&aacute;c bạn y&ecirc;u th&iacute;ch lập tr&igrave;nh. Ngo&agrave;i ra, Java cũng l&agrave; ng&ocirc;n ngữ lập tr&igrave;nh cho Android, nền tảng&nbsp;lập tr&igrave;nh di động phổ biến nhất hiện nay.</span></span></div>\r\n<p style=\"box-sizing: border-box; outline: 0px; margin: 12px 0px; border: 0px; font-family: Arial, Helvetica, sans-serif; padding: 0px; color: #2f2f2f; text-align: justify;\"><span style=\"box-sizing: border-box; outline: 0px; border: 0px; font-family: inherit; margin: 0px; padding: 0px; line-height: 1.5em;\">Kh&oacute;a học &ldquo;Lập tr&igrave;nh Java từ A-Z&rdquo; trang bị&nbsp;đầy đủ kiến thức, kỹ năng về ng&ocirc;n ngữ lập tr&igrave;nh Java, c&aacute;c c&ocirc;ng nghệ li&ecirc;n quan, framework, c&aacute;ch x&acirc;y dựng ứng dụng để gi&uacute;p học vi&ecirc;n trở th&agrave;nh Lập tr&igrave;nh vi&ecirc;n Java chuy&ecirc;n nghiệp, c&oacute; thể bắt tay l&agrave;m việc ngay tại c&aacute;c c&ocirc;ng ty phần mềm.<br style=\"box-sizing: border-box; outline: none medium !important;\" /></span></p>\r\n<p style=\"box-sizing: border-box; outline: 0px; margin: 12px 0px; border: 0px; font-family: Arial, Helvetica, sans-serif; padding: 0px; color: #2f2f2f; text-align: justify;\">100% học vi&ecirc;n tốt nghiệp kh&oacute;a học n&agrave;y đ&atilde; t&igrave;m được việc l&agrave;m tại c&aacute;c c&ocirc;ng ty phần mềm lớn tại Đ&agrave; Nẵng như FSOFT, Enclave, DTT, AsianTech, Axon Active &hellip; v&agrave; đ&atilde; được doanh nghiệp đ&aacute;nh gi&aacute; cao.</p>', '4484375.jpg', '2018-05-31', '2018-05-16', 0, 1);

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

--
-- Đang đổ dữ liệu cho bảng `tai_lieu`
--

INSERT INTO `tai_lieu` (`id`, `id_chu_de`, `tieu_de`, `noi_dung`, `lien_ket`, `hinh_anh`, `ngay_tao`, `thu_tu`, `tinh_trang`) VALUES
(1, 20, 'Tài liệu C#', 'Toàn bộ nội dung cần học trong file này', 'youtube.com', '', '2018-05-14', 1, 1),
(2, 12, 'Lập trình Java căn bản', '<p>hgvhgjhbkj</p>', 'https://drive.google.com/open?id=0B2dOEaO6sCS9dEJaQzYydC1WSDg', '2018-05-149226014.jpg', '2018-05-14', 1, 1),
(4, 21, 'Tài liệu lập trình Android', '<p>Nội dung cơ bản của android</p>', 'ấdadada', '2018-05-142819061.png', '2018-05-14', 3, 1),
(5, 23, 'Tài liệu lập trình Php', '<p>Nội dung cơn bản của php</p>', 'dssdsfsf', '2018-05-143683960.jpg', '2018-05-14', 4, 1);

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
(7, 'nguyenvancuong', '12345', 'cuong@gmail.com', 'nguyễn văn cường', 0, 1),
(8, 'nguyenvannam', '12345', 'nam@gmail.com', 'nguyễn văn nam', 0, 1),
(9, 'nguyenduythien', '12345', 'thien@mail.com', 'Nguyễn duy thiện', 0, 1),
(10, 'nguyenducmanh', '12345', 'manh@gmail.com', 'Nguyễn đức mạnh', 0, 1);

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
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT cho bảng `cau_hoi`
--
ALTER TABLE `cau_hoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `chi_tiet_khoa_hoc`
--
ALTER TABLE `chi_tiet_khoa_hoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `chu_de`
--
ALTER TABLE `chu_de`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `thanh_vien`
--
ALTER TABLE `thanh_vien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
