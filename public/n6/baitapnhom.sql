-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2022 lúc 03:15 CH
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `baitapnhom`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `img_product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_toping` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price_product` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(262, 'CÃ  phÃª'),
(3, 'TrÃ  sá»¯a'),
(4, 'Hi-Tea'),
(2, 'TrÃ '),
(5, 'Sinh tá»‘');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `option_size`
--

CREATE TABLE `option_size` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `option_size`
--

INSERT INTO `option_size` (`id`, `name`, `price`) VALUES
(1, 'Nhá»', 0),
(2, 'Vá»«a', 4000),
(3, 'Lá»›n', 6000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `option_toping`
--

CREATE TABLE `option_toping` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `option_toping`
--

INSERT INTO `option_toping` (`id`, `name`, `price`) VALUES
(1, 'Kem PhÃ´ Mai Macchiato', 10000),
(2, 'Shot Espresso', 10000),
(3, 'TrÃ¢n chÃ¢u tráº¯ng', 10000),
(4, 'Sá»‘t Caramel', 10000),
(5, 'Tháº¡ch cÃ  phÃª', 10000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_desc` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `product_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `category_id`, `product_price`, `product_desc`, `product_img`) VALUES
(9, ' CÃ  phÃª sá»¯a ÄÃ¡', 'CÃ  phÃª', 40000, 'CÃ  phÃª Äáº¯k Láº¯k nguyÃªn cháº¥t Ä‘Æ°á»£c pha phin truyá»n thá»‘ng káº¿t há»£p vá»›i sá»¯a Ä‘áº·c táº¡o nÃªn hÆ°Æ¡ng vá»‹ Ä‘áº­m Ä‘Ã , hÃ i hÃ²a giá»¯a vá»‹ ngá»t Ä‘áº§u lÆ°á»¡i vÃ  vá»‹ Ä‘áº¯ng thanh thoÃ¡t nÆ¡i háº­u vá»‹.', '1.png'),
(10, 'Báº¡c xá»‰u', 'CÃ  phÃª', 30000, 'Báº¡c xá»‰u chÃ­nh lÃ  "Ly sá»¯a tráº¯ng kÃ¨m má»™t chÃºt cÃ  phÃª". Thá»©c uá»‘ng nÃ y ráº¥t phÃ¹ há»£p nhá»¯ng ai vá»«a muá»‘n tráº£i nghiá»‡m chÃºt vá»‹ Ä‘áº¯ng cá»§a cÃ  phÃª vá»«a muá»‘n thÆ°á»Ÿng thá»©c vá»‹ ngá»t bÃ©o ngáº­y tá»« sá»¯a.', '2.png'),
(11, 'CÃ  phÃª Ä‘en ÄÃ¡', 'CÃ  phÃª', 30000, 'KhÃ´ng ngá»t ngÃ o nhÆ° Báº¡c xá»‰u hay CÃ  phÃª sá»¯a, CÃ  phÃª Ä‘en mang trong mÃ¬nh phong vá»‹ tráº§m láº¯ng, thi vá»‹ hÆ¡n. NgÆ°á»i ta thÆ°á»ng pháº£i ngá»“i ráº¥t lÃ¢u má»›i cáº£m nháº­n Ä‘Æ°á»£c háº¿t hÆ°Æ¡ng thÆ¡m ngÃ o ngáº¡t, pháº£ng pháº¥t mÃ¹i cacao vÃ  cÃ¡i Ä‘áº¯ng mÆ°á»£t mÃ  trÃ´i tuá»™t xuá»‘ng vÃ²m há»ng.', '3.png'),
(12, 'TrÃ  ÄÃ o Cam Sá»¯a - ÄÃ¡', 'TrÃ ', 49000, 'Vá»‹ thanh ngá»t cá»§a Ä‘Ã o, vá»‹ chua dá»‹u cá»§a Cam VÃ ng nguyÃªn vá», vá»‹ chÃ¡t cá»§a trÃ  Ä‘en tÆ°Æ¡i Ä‘Æ°á»£c á»§ má»›i má»—i 4 tiáº¿ng, cÃ¹ng hÆ°Æ¡ng thÆ¡m ná»“ng Ä‘áº·c trÆ°ng cá»§a sáº£ chÃ­nh lÃ  Ä‘iá»ƒm sÃ¡ng lÃ m nÃªn sá»©c háº¥p dáº«n cá»§a thá»©c uá»‘ng nÃ y.', '25.png'),
(13, 'TrÃ  ÄÃ o Cam Sá»¯a - NÃ³ng', 'TrÃ ', 49000, 'Vá»‹ thanh ngá»t cá»§a Ä‘Ã o, vá»‹ chua dá»‹u cá»§a Cam VÃ ng nguyÃªn vá», vá»‹ chÃ¡t cá»§a trÃ  Ä‘en tÆ°Æ¡i Ä‘Æ°á»£c á»§ má»›i má»—i 4 tiáº¿ng, cÃ¹ng hÆ°Æ¡ng thÆ¡m ná»“ng Ä‘áº·c trÆ°ng cá»§a sáº£ chÃ­nh lÃ  Ä‘iá»ƒm sÃ¡ng lÃ m nÃªn sá»©c háº¥p dáº«n cá»§a thá»©c uá»‘ng nÃ y.', '26.png'),
(14, 'TrÃ  Háº¡t Sen - ÄÃ¡', 'TrÃ ', 55000, 'Ná»n trÃ  olong háº£o háº¡ng káº¿t há»£p cÃ¹ng háº¡t sen tÆ°Æ¡i, bÃ¹i bÃ¹i vÃ  lá»›p foam cheese bÃ©o ngáº­y. TrÃ  háº¡t sen lÃ  thá»©c uá»‘ng thanh mÃ¡t, nháº¹ nhÃ ng phÃ¹ há»£p cho cáº£ buá»•i sÃ¡ng vÃ  chiá»u tá»‘i.', '27.png'),
(15, 'TrÃ  Háº¡t Sen - NÃ³ng', 'TrÃ ', 55000, 'Ná»n trÃ  olong háº£o háº¡ng káº¿t há»£p cÃ¹ng háº¡t sen tÆ°Æ¡i, bÃ¹i bÃ¹i vÃ  lá»›p foam cheese bÃ©o ngáº­y. TrÃ  háº¡t sen lÃ  thá»©c uá»‘ng thanh mÃ¡t, nháº¹ nhÃ ng phÃ¹ há»£p cho cáº£ buá»•i sÃ¡ng vÃ  chiá»u tá»‘i.', '28.png'),
(16, 'TrÃ  Long NhÃ£n Háº¡t Chia - ÄÃ¡', 'TrÃ ', 45000, 'Vá»‹ nhÃ£n ngá»t, tÆ°Æ¡i mÃ¡t Ä‘áº·c trÆ°ng hoÃ  quyá»‡n tinh táº¿ cÃ¹ng vá»‹ trÃ  olong háº£o háº¡ng vÃ  háº¡t chia mang Ä‘áº¿n cho báº¡n má»™t thá»©c uá»‘ng khÃ´ng chá»‰ thÆ¡m ngon mÃ  cÃ²n bá»• dÆ°á»¡ng.', '29.png'),
(17, 'TrÃ  Long NhÃ£n Háº¡t Chia(NÃ³ng)', 'TrÃ ', 55000, 'Vá»‹ nhÃ£n ngá»t, tÆ°Æ¡i mÃ¡t Ä‘áº·c trÆ°ng hoÃ  quyá»‡n tinh táº¿ cÃ¹ng vá»‹ trÃ  olong háº£o háº¡ng vÃ  háº¡t chia mang Ä‘áº¿n cho báº¡n má»™t thá»©c uá»‘ng khÃ´ng chá»‰ thÆ¡m ngon mÃ  cÃ²n bá»• dÆ°á»¡ng.', '30.png'),
(18, 'TrÃ  Äen Macchiato)', 'TrÃ ', 45000, 'TrÃ  Ä‘en Ä‘Æ°á»£c á»§ má»›i má»—i ngÃ y, giá»¯ nguyÃªn Ä‘Æ°á»£c vá»‹ chÃ¡t máº¡nh máº½ Ä‘áº·c trÆ°ng cá»§a lÃ¡ trÃ , phá»§ bÃªn trÃªn lÃ  lá»›p Macchiato "homemade" bá»“ng bá»nh quyáº¿n rÅ© vá»‹ phÃ´ mai máº·n máº·n mÃ  bÃ©o bÃ©o.', '31.png'),
(19, '	 Há»“ng TrÃ  Sá»¯a TrÃ¢n ChÃ¢u', 'TrÃ  sá»¯a', 55000, 'ThÃªm chÃºt ngá»t ngÃ o cho ngÃ y má»›i vá»›i há»“ng trÃ  nguyÃªn lÃ¡, sá»¯a thÆ¡m ngáº­y Ä‘Æ°á»£c cÃ¢n chá»‰nh vá»›i tá»‰ lá»‡ hoÃ n háº£o, cÃ¹ng trÃ¢n chÃ¢u tráº¯ng dai giÃ²n cÃ³ sáºµn Ä‘á»ƒ báº¡n táº­n hÆ°á»Ÿng tá»«ng ngá»¥m trÃ  sá»¯a ngá»t ngÃ o thÆ¡m ngáº­y thiá»‡t Ä‘Ã£', '32.png'),
(20, 'Há»“ng TrÃ  Sá»¯a NÃ³ng', 'TrÃ  sá»¯a', 40000, 'Tá»«ng ngá»¥m trÃ  chuáº©n gu áº¥m Ã¡p, Ä‘áº­m Ä‘Ã  beo bÃ©o bá»Ÿi lá»›p sá»¯a tÆ°Æ¡i chÃ¢n Ã¡i hoÃ  quyá»‡n. TrÃ  Ä‘en nguyÃªn lÃ¡ Ã¢m áº¥m dá»‹u nháº¹, quyá»‡n cÃ¹ng lá»›p sá»¯a thÆ¡m bÃ©o khÃ³ láº«n - hÆ°Æ¡ng vá»‹ áº¥m Ã¡p chuáº©n gu trÃ , cho tá»«ng ngá»¥m nháº¹ nhÃ ng, ngá»t dá»‹u lÆ°u luyáº¿n mÃ£i nÆ¡i cuá»‘ng há»ng.', '33.png'),
(21, 'TrÃ  sá»¯a Olong NÆ°á»›ng TrÃ¢n ChÃ¢u', 'TrÃ ', 55000, 'HÆ°Æ¡ng vá»‹ chÃ¢n Ã¡i Ä‘Ãºng gu Ä‘áº­m Ä‘Ã  vá»›i trÃ  oolong Ä‘Æ°á»£c â€œsaoâ€ (nÆ°á»›ng) lÃ¢u hÆ¡n cho hÆ°Æ¡ng vá»‹ Ä‘áº­m Ä‘Ã , hÃ²a quyá»‡n vá»›i sá»¯a thÆ¡m bÃ©o mang Ä‘áº¿n cáº£m giÃ¡c mÃ¡t láº¡nh, lÆ°u luyáº¿n vá»‹ trÃ  sá»¯a Ä‘áº­m Ä‘Ã  nÆ¡i vÃ²m há»ng.', '34.png'),
(22, 'TrÃ  sá»¯a Máº¯c Ca TrÃ¢n ChÃ¢u', 'TrÃ  sá»¯a', 40000, 'Má»—i ngÃ y vá»›i NhÃ  CÃ  PhÃª sáº½ lÃ  Ä‘iá»u tÆ°Æ¡i má»›i hÆ¡n vá»›i sá»¯a háº¡t máº¯c ca thÆ¡m ngon, bá»• dÆ°á»¡ng quyá»‡n cÃ¹ng ná»n trÃ  olong cho vá»‹ cÃ¢n báº±ng, ngá»t dá»‹u Ä‘i kÃ¨m cÃ¹ng TrÃ¢n chÃ¢u tráº¯ng giÃ²n dai mang láº¡i cáº£m giÃ¡c â€œÄ‘Ã£â€ trong tá»«ng ngá»¥m trÃ  sá»¯a.', '35.png'),
(23, 'Há»“ng TrÃ  Latte Macchiato', 'TrÃ ', 50000, 'Sá»± káº¿t há»£p hoÃ n háº£o bá»Ÿi há»“ng trÃ  dá»‹u nháº¹ vÃ  sá»¯a tÆ°Æ¡i, nháº¥n nhÃ¡ thÃªm lá»›p macchiato trá»© danh cá»§a NhÃ  CÃ  PhÃª mang Ä‘áº¿n cho báº¡n hÆ°Æ¡ng vá»‹ trÃ  sá»¯a Ä‘Ãºng gu tinh táº¿ vÃ  healthy.', '36.png'),
(24, 'Hi-Tea XoÃ i Aloe Vera', 'Hi-Tea', 39000, 'Vá»‹ ngá»t thanh, thÆ¡m phá»©c tá»« xoÃ i chÃ­n má»ng káº¿t há»£p cÃ¹ng vá»‹ chua Ä‘áº·c trÆ°ng cá»§a trÃ  hoa Hibiscus tá»± nhiÃªn, sáº½ khiáº¿n báº¡n khÃ³ lÃ²ng quÃªn Ä‘Æ°á»£c thá»©c uá»‘ng â€œchÃ¢n Ã¡iâ€ mÃ¹a hÃ¨ nÃ y. Äáº·c biá»‡t, topping Aloe Vera tá»± nhiÃªn khÃ´ng chá»‰ nhÃ¢m nhi vui miá»‡ng mÃ  cÃ²n giÃºp báº¡n â€œnÃ¢ng táº§m nhan sáº¯câ€.', 'Tra_xoai.png'),
(25, 'Hi-Tea DÃ¢u TÃ¢y Máº­n Muá»‘i Aloe Vera', 'Hi-Tea', 49000, 'Sá»± káº¿t há»£p Ä‘á»™c Ä‘Ã¡o giá»¯a 3 sáº¯c thÃ¡i hÆ°Æ¡ng vá»‹ khÃ¡c nhau: trÃ  hoa Hibiscus chua thanh, Máº­n muá»‘i máº·n máº·n vÃ  DÃ¢u tÃ¢y tÆ°Æ¡i ÄÃ  Láº¡t cÃ´ Ä‘áº·c ngá»t dá»‹u. NgoÃ i ra, topping Aloe Vera tÆ°Æ¡i mÃ¡t, ngon ngáº¥t ngÃ¢y, Ä‘áº¹p Ä‘áº¯m say, há»©a háº¹n sáº½ khuáº¥y Ä‘áº£o hÃ¨ nÃ y.', 'tra_Dau.jpg'),
(26, 'Hi-Tea Yuzu TrÃ¢n ChÃ¢u', 'Sinh tá»‘', 49000, 'KhÃ´ng chá»‰ ná»•i báº­t vá»›i sáº¯c Ä‘á» Ä‘áº·c trÆ°ng tá»« trÃ  hoa Hibiscus, Hi-Tea Yuzu cÃ²n gÃ¢y áº¥n tÆ°á»£ng vá»›i topping Yuzu (quÃ½t Nháº­t) láº¡ miá»‡ng, káº¿t há»£p cÃ¹ng trÃ¢n chÃ¢u tráº¯ng dai giÃ²n sáº§n sáº­t, nhai vui vui.', '39.png'),
(27, 'Hi-Tea Váº£i', 'Hi-Tea', 49000, 'ChÃºt ngá»t ngÃ o cá»§a Váº£i, mix cÃ¹ng vá»‹ chua thanh tao tá»« trÃ  hoa Hibiscus, mang Ä‘áº¿n cho báº¡n thá»©c uá»‘ng Ä‘Ãºng chuáº©n vá»«a ngon, vá»«a healthy.', '40.png'),
(30, 'Sinh tá»‘ viá»‡t quáº¥t', 'Sinh tá»‘', 40000, 'ChÃºt ngá»t ngÃ o cá»§a Viá»‡t quáº¥t tÆ°Æ¡i cÃ´ Ä‘áº·c ngá»t dá»‹u mang Ä‘áº¿n cho báº¡n thá»©c uá»‘ng Ä‘Ãºng chuáº©n vá»«a ngon, vá»«a healthy, há»©a háº¹n sáº½ khuáº¥y Ä‘áº£o hÃ¨ nÃ y.', '43.png'),
(29, 'Sinh tá»‘ cam', 'Sinh tá»‘', 40000, 'ChÃºt ngá»t ngÃ o cá»§a Cam ngá»t dá»‹u mang Ä‘áº¿n cho báº¡n thá»©c uá»‘ng Ä‘Ãºng chuáº©n vá»«a ngon, vá»«a healthy, há»©a háº¹n sáº½ khuáº¥y Ä‘áº£o hÃ¨ nÃ y.', '42.png'),
(31, 'Sinh tá»‘ xoÃ i', 'Sinh tá»‘', 40000, 'ChÃºt ngá»t ngÃ o cá»§a XoÃ i tÆ°Æ¡i ngá»t dá»‹u mang Ä‘áº¿n cho báº¡n thá»©c uá»‘ng Ä‘Ãºng chuáº©n vá»«a ngon, vá»«a healthy, há»©a háº¹n sáº½ khuáº¥y Ä‘áº£o hÃ¨ nÃ y.', '44.png'),
(32, 'Sinh tá»‘ mocha', 'Sinh tá»‘', 40000, 'ChÃºt ngá»t ngÃ o cá»§a Mocha cÃ´ Ä‘áº·c ngá»t dá»‹u mang Ä‘áº¿n cho báº¡n thá»©c uá»‘ng Ä‘Ãºng chuáº©n vá»«a ngon, vá»«a healthy, há»©a háº¹n sáº½ khuáº¥y Ä‘áº£o hÃ¨ nÃ y.', '45.png'),
(33, 'Hi-Tea Viá»‡t Quáº¥t ', 'Hi-Tea', 49000, 'ChÃºt ngá»t ngÃ o cá»§a Viá»‡t quáº¥t tÆ°Æ¡i ngá»t dá»‹u vÃ  vá»‹ trÃ  thanh mÃ¡t mang Ä‘áº¿n cho báº¡n thá»©c uá»‘ng Ä‘Ãºng chuáº©n vá»«a ngon, há»©a háº¹n sáº½ khuáº¥y Ä‘áº£o hÃ¨ nÃ y.', 'Tra_viet_quoc.jpg'),
(34, 'TrÃ  chanh Hi-Tea', 'Hi-Tea', 45000, 'má»™t thá»©c uá»‘ng giáº£i khÃ¡t Ä‘Æ°á»£c káº¿t há»£p cÃ¢n báº±ng giá»¯a vá»‹ thanh chÃ¡t dá»‹u cá»§a trÃ  cÃ¹ng vá»‹ chua cá»§a chanh táº¡o nÃªn thá»© Ä‘á»“ uá»‘ng Ä‘á»™c Ä‘Ã¡o giáº£i khÃ¡t vÃ o mÃ¹a hÃ¨.', 'tra_chanh.jpg'),
(35, 'Hi-Tea Cam ÄÃ o', 'Hi-Tea', 49000, 'ChÃºt vá»‹ chua cá»§a ÄÃ o, mix cÃ¹ng vá»‹ ngá»t thanh tao tá»« trÃ  ÄÃ o, mang Ä‘áº¿n cho báº¡n thá»©c uá»‘ng Ä‘Ãºng chuáº©n vá»«a ngon.', 'tra_cam_dao.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `status`) VALUES
(3, 'tamnhune', '123', 2),
(4, 'minhthucute', '321', 0),
(7, 'asdd', '123', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `option_size`
--
ALTER TABLE `option_size`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `option_toping`
--
ALTER TABLE `option_toping`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;
--
-- AUTO_INCREMENT cho bảng `option_size`
--
ALTER TABLE `option_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `option_toping`
--
ALTER TABLE `option_toping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
