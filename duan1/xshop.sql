-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2024 lúc 04:40 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL COMMENT 'mã bình luận ',
  `noi_dung` varchar(255) NOT NULL COMMENT 'nội dung ',
  `ma_hh` int(11) NOT NULL COMMENT 'mã hàng hóa',
  `ma_kh` int(11) NOT NULL COMMENT 'mã khách hàng bl ',
  `ngay_bl` date NOT NULL COMMENT 'ngày bình luận '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`) VALUES
(14, 'dfdfsdf', 12, 1, '2024-08-06'),
(15, 'Áo Đẹp Thật HAhAhAHAHAH', 11, 1, '2024-08-06'),
(16, 'fefwfwdfefd', 11, 1, '2024-08-15'),
(17, 'tuan', 12, 1, '2024-08-16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL COMMENT 'mã hàng hóa',
  `ten_hh` varchar(50) NOT NULL COMMENT 'tên hàng hóa ',
  `don_gia` double(10,2) NOT NULL COMMENT 'đơn giá ',
  `giam_gia` double(10,2) DEFAULT 0.00 COMMENT 'mức giả giá ',
  `hinh` varchar(50) NOT NULL COMMENT 'hình ảnh ',
  `ngay_nhap` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày nhập ',
  `mo_ta` text DEFAULT NULL COMMENT 'mô tả hàng hóa ',
  `dac_biet` tinyint(1) NOT NULL COMMENT 'trạng thái đặc biệt',
  `so_luot_xem` int(11) NOT NULL DEFAULT 0 COMMENT 'số lượt xem ',
  `ma_loai` int(11) NOT NULL COMMENT 'mã loại '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loai`) VALUES
(5, 'Áo POLOO', 1000000.00, 500000.00, 'anh11.jpg', '2024-07-16 04:13:41', 'Áo Quá Đep ĐM không chê được!! hahah', 1, 0, 3),
(6, 'ÁO THUN KẺ NGANG DÁNG OVERSIZE', 690000.00, 545000.00, 'nam11.jpg', '2024-07-16 04:51:11', 'Chất liệu vải thun: 95% Cotton 5% Spandex tính năng mềm mịn, thoáng mát  - Áo cổ bo tròn, tay ngắn, dáng oversize, độ dài ngang hông  - Áo phông họa tiết kẻ ngang trẻ trung, màu sắc tôn da phù hợp mặc hàng ngày. Dễ dàng phối cùng nhiều kiểu quần khác nhau để có 1 set đồ thoải mái, năng động.  Thông tin mẫu:  Chiều cao: 175 cm  Cân nặng: 65 kg  Mẫu mặc size S  Lưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua màn hình máy tính/ điện thoại.', 1, 0, 5),
(7, 'Áo Xám PoLo', 1590000.00, 1113000.00, 'nam22.jpg', '2024-07-16 04:52:34', 'Áo phao chần bông dáng suông. Cổ mũ, dài tay. Có 2 túi khóa kéo phía trước. Cài bằng dây khóa kéo cùng màu phía trước. Vải chần bông cách đều.  Bên trong nhồi bông dày dặn với phom dáng chuẩn cùng đường may tỉ mỉ. Tính năng giữ nhiệt, chống nước, độ bền cao.  Mẫu mặc size L:  Chiều cao: 1m85 Cân nặng: 75kg Số đo 3 vòng: 100-78-95 cm', 1, 0, 5),
(9, 'QUẦN VEST NAM', 3390000.00, 1017000.00, 'nam28.jpg', '2024-07-16 04:57:05', 'Áo vest cổ hai ve khoét chữ V. Tay dài có 4 khuy. Có 1 túi trước ngực, 2 vuông có nắp 2 bên, có 3 túi lót bên trong. Có 2 khuy cài mặt trước. Xẻ tà 2 bên phía sau.  Để tạo nên những bộ suit đẳng cấp, các nhà thiết kế tài ba của IVY Men tỉ mỉ trong từng đường chỉ, phom dáng cứng cáp từ cầu vai, vạt áo cho đến chiều dài chuẩn của ống tay đều được IVY Men chú trọng. Đi cùng là chất liệu cao cấp nhập khẩu từ Nhật Bản. Tất cả tạo nên những bộ Suit hoàn hảo - Chuẩn mực tối thượng của sự lịch lãm đầy nam tính.  Màu sắc: Đen - Xanh Đậm - Xanh Tím Than - Ghi Khói', 1, 0, 5),
(10, 'áo Polo thêu hình', 499000.00, 199600.00, 'trai03.jpg', '2024-07-29 16:32:00', 'Áo Quá Đep ĐM không chê được', 1, 0, 6),
(11, 'Áo thun in hoa có mũ', 499000.00, 199600.00, 'gai04.jpg', '2024-07-29 16:32:44', 'Áo Quá Đep ĐM không chê được', 1, 0, 6),
(12, 'Áo thun polo kẻ viền', 850000.00, 425000.00, 'nam15.jpg', '2024-07-29 16:57:26', '- Chất liệu thun co giãn tốt, mềm mại khi sử dụng. Kiểu áo regular fit phù hợp với vóc dáng người Việt.  - Áo cổ đức rộng thoáng, cổ liền hàng 3 khuy cài.  - Thiết kế dáng trơn đơn giản, lịch sự, trẻ trung, năng động, dáng tay ngắn thoáng mát trong mùa Xuân Hè.  - Màu xanh tím than tôn da, kiểu dáng lịch sự phù hợp với nhiều sự kiện như: đi học, đi làm, đi chơi.  - Kết hợp với quần âu, quần Jeans, quần Kaki và quần short đều phù hợp.   Thông tin mẫu:  Chiều cao: 175 cm  Cân nặng: 65 kg  Mẫu mặc size S  Lưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua màn hình máy tính/ điện thoại.', 127, 0, 5),
(13, 'Đầm Khaki mới nhất ', 1500000.00, 1000000.00, 'anh44.jpg', '2024-08-16 00:42:16', 'Chỉ với một vài điểm nhấn nhá, nhà thiết kế IVY moda đã thay đổi kiểu dáng đầm A cơ bản thành phiên bản đầm hoàn  toàn mới thể hiện đầy đủ sự thanh lịch, nữ tính, trẻ trung và thời thượng.   Đầm cổ tròn, tay ngắn, cắt vát kiểu hiện đại. Phần eo ôm đứng form che khuyết điểm. Còn thân dưới xếp ly bồng nhẹ.   Đầm sử dụng chất vải Khaki dày dặn, không nhăn mang lại cảm giác thoải mái mà vẫn giữ được nét thanh lịch, lịch sự. Thiết kế đầm có tính ứng dụng cao, là món đồ không thể thiếu cho dịp hè này.  Thông tin mẫu:  Chiều cao: 165 cm  Cân nặng: 49 kg  Số đo 3 vòng: 81-63-90 cm  Mẫu mặc size S  Lưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua màn hình máy tính/ điện thoại.', 1, 0, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(11) NOT NULL COMMENT 'mã đăng nhập',
  `mat_khau` varchar(50) NOT NULL COMMENT 'mật khẩu ',
  `ho_ten` varchar(50) NOT NULL COMMENT 'họ tên ',
  `kich_hoat` tinyint(1) DEFAULT 1 COMMENT 'trạng thái kích hoạt ',
  `hinh` varchar(50) DEFAULT NULL COMMENT 'hình ',
  `email` varchar(50) NOT NULL COMMENT 'email khách hàng ',
  `phone` varchar(12) DEFAULT NULL,
  `adress` varchar(30) DEFAULT NULL,
  `vai_tro` varchar(10) DEFAULT 'user' COMMENT 'vai trò '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ho_ten`, `kich_hoat`, `hinh`, `email`, `phone`, `adress`, `vai_tro`) VALUES
(1, '12345', 'Cao Đăng Tuấn', 1, 'nam14.jpg', 'tuancdph43313@fpt.edu.vn', '0921876125', 'Hưng Yên ', 'Admin'),
(3, '12342', 'Cao Đăng Tùng4', 1, 'anhnam29.jpg', '0344265096@gmail.com', '01234567891', 'Hưng Yên', 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihang`
--

CREATE TABLE `loaihang` (
  `ma_loai` int(11) NOT NULL COMMENT 'Mã Loại Hàng',
  `ten_loai` varchar(50) NOT NULL COMMENT 'Tên Loại Hàng ',
  `hinh_anh` varchar(100) NOT NULL COMMENT 'Hình Ảnh ',
  `trang_thai` varchar(20) NOT NULL COMMENT 'Trạng Thái Danh Mục'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihang`
--

INSERT INTO `loaihang` (`ma_loai`, `ten_loai`, `hinh_anh`, `trang_thai`) VALUES
(3, 'Áo Nữ ', 'banner-thoi-trang-nu.jpg', 'Còn Hàng  '),
(5, 'Áo Nam ', 'banner_du_an.jpg', 'Còn Hàng'),
(6, 'Áo Trẻ Em Nam Nữ', 'tải xuống.jpg', 'Còn Hàng Nhé');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `lk_kh` (`ma_kh`),
  ADD KEY `lk_sp` (`ma_hh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `lk_1` (`ma_loai`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã bình luận ', AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã hàng hóa', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã đăng nhập', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã Loại Hàng', AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `lk_kh` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lk_sp` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `lk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loaihang` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
