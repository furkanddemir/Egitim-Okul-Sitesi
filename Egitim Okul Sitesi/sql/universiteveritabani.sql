-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Ara 2023, 15:30:19
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `universiteveritabani`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bolumler`
--

CREATE TABLE `bolumler` (
  `bolum_id` varchar(10) NOT NULL,
  `bolum_ad` varchar(100) DEFAULT NULL,
  `bolum_baskani` varchar(100) DEFAULT NULL,
  `bolum_tutari` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bolumler`
--

INSERT INTO `bolumler` (`bolum_id`, `bolum_ad`, `bolum_baskani`, `bolum_tutari`) VALUES
('200', 'Bilgisayar Programcılığı', 'Ayşe Ilık', 20000),
('201', 'Elektrik Elektronik', 'Büşra Karabulut', 30000);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersler`
--

CREATE TABLE `dersler` (
  `ders_id` varchar(10) NOT NULL,
  `ders_ad` varchar(100) DEFAULT NULL,
  `bolum_id` varchar(100) NOT NULL,
  `ogretmen_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `dersler`
--

INSERT INTO `dersler` (`ders_id`, `ders_ad`, `bolum_id`, `ogretmen_id`) VALUES
('BBP300', 'Programlama Temelleri', '200', '100'),
('BBP301', 'Veri Tabanı', '200', '101'),
('BBP302', 'Nesne Tabanlı Programlama', '200', '102'),
('EDB304', 'Türk Dili ve Edebiyatı', '200', '104'),
('EDB309', 'Türk Dili ve Edebiyatı', '201', '114'),
('ELK305', 'Elektrik Devreleri', '201', '105'),
('ELK306', 'Elektroniğe Giriş', '201', '106'),
('ELK307', 'Devreler ve Sistemler', '201', '107'),
('MAT303', 'Matematik', '200', '103'),
('MAT308', 'Matematik', '201', '113');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `adsoyad` varchar(30) NOT NULL,
  `eposta` varchar(30) NOT NULL,
  `bolum_ad` varchar(20) NOT NULL,
  `mesaj` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenciler`
--

CREATE TABLE `ogrenciler` (
  `ogrenci_id` int(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `eposta` varchar(100) NOT NULL,
  `bolum_id` varchar(10) NOT NULL,
  `bolum_tutari` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ogrenciler`
--

INSERT INTO `ogrenciler` (`ogrenci_id`, `ad`, `soyad`, `eposta`, `bolum_id`, `bolum_tutari`) VALUES
(1, 'Sude ', 'Işınay', 'sude_isinay@gmail.com', '200', 20000),
(2, 'Emine ', 'İnce', 'emine_ince@gmail.com', '200', 20000),
(3, 'Furkan ', 'Demir', 'furkan_demir@gmail.com', '200', 20000),
(4, 'Melis', 'Karagöz', 'melis_karagoz@gmail.com', '200', 20000),
(5, 'Mehmet', 'Kara', 'mehmet_kara@gmail.com', '200', 20000),
(6, 'Hakan', 'Tatlı', 'hakan_tatli@gmail.com', '201', 30000),
(7, 'Gizem', 'Kurt', 'gizem_kurt@gmail.com', '200', 20000),
(8, 'Melis', 'Matur', 'melis_matur@gmail.com', '200', 20000),
(9, 'Alperen', 'Küskün', 'alperen_kuskun@gmail.com', '200', 20000),
(10, 'Arif ', 'Merdan', 'arif_merdan@gmail.com', '200', 20000),
(11, 'Eser', 'Ziya', 'eser_ziya@gmail.com', '200', 20000),
(12, 'Alaaddin', 'Lamba', 'alaaddin_lamba@gmail.com', '200', 20000),
(13, 'Ahmet', 'Torol', 'ahmet_torol@gmail.com', '200', 20000),
(14, 'Beyza', 'Ak', 'beyza_ak@gmail.com', '201', 30000),
(15, 'Rüya', 'Su', 'ruya_su@gmail.com', '200', 20000),
(16, 'Tarcan', 'Topal', 'tarcan_topal@gmail.com', '201', 30000),
(17, 'İpek', 'Nazlı', 'ipek_nazli@gmail.com', '201', 30000),
(18, 'Velit', 'Solak', 'velit_solak@gmail.com', '201', 30000),
(19, 'Cengiz', 'Han', 'cengiz_han@gmail.com', '201', 30000),
(20, 'Kutlu', 'Alibeyoğlu', 'kurlu_alibeyoglu@gmail.com', '201', 30000),
(21, 'Sultan', 'Papatya', 'sultan@papatya@gmail.com', '201', 30000),
(22, 'Nazlı', 'Alık', 'nazli_alik@gmail.com', '201', 30000),
(23, 'İsmail', 'Altın', 'ismail_altin@gmail.com', '201', 30000),
(24, 'Umut', 'Bağış', 'umut_bagis@gmail.com', '201', 30000),
(25, 'Erol', 'Battal', 'erol_battal@gmail.com', '201', 30000),
(26, 'Bensu', 'Büyük', 'bensu_buyuk@gmail.com', '201', 30000),
(27, 'Ahmet ', 'Koca', 'ahmet_koca@gmail.com', '201', 30000),
(28, 'Yasin', 'Kara', 'yasin_kara@gmail.com', '201', 30000),
(29, 'Ogün', 'Boztepe', 'ogun_boztepe@gmail.com', '201', 30000),
(30, 'Çilem', 'Akçay', 'cilem_akcay@gmail.com', '201', 30000);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogretimelemanlari`
--

CREATE TABLE `ogretimelemanlari` (
  `ogretmen_id` varchar(10) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `unvan` varchar(50) NOT NULL,
  `bolum_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ogretimelemanlari`
--

INSERT INTO `ogretimelemanlari` (`ogretmen_id`, `ad`, `soyad`, `unvan`, `bolum_id`) VALUES
('100', 'Fatma', 'Acar', 'prof', '200'),
('101', 'Atahan', 'Acar', 'prof', '200'),
('102', 'Selma', 'Ceylan', 'ogr', '200'),
('103', 'Oğuzhan', 'Cüce', 'prof', '200'),
('104', 'Büşra', 'Çağlayan', 'ogr', '200'),
('105', 'Mustafa', 'Boz', 'ogr', '201'),
('106', 'Salih', 'Düzbayır', 'ogr', '201'),
('107', 'Lale', 'Erek', 'prof', '201'),
('113', 'Aysel', 'Öz', 'prof', '201'),
('114', 'Ece', 'Özakyol', 'ogr', '201');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bolumler`
--
ALTER TABLE `bolumler`
  ADD PRIMARY KEY (`bolum_id`);

--
-- Tablo için indeksler `dersler`
--
ALTER TABLE `dersler`
  ADD PRIMARY KEY (`ders_id`),
  ADD KEY `bolum_id` (`bolum_id`,`ogretmen_id`),
  ADD KEY `ogretmen_id` (`ogretmen_id`);

--
-- Tablo için indeksler `ogrenciler`
--
ALTER TABLE `ogrenciler`
  ADD PRIMARY KEY (`ogrenci_id`),
  ADD KEY `bolum_id` (`bolum_id`);

--
-- Tablo için indeksler `ogretimelemanlari`
--
ALTER TABLE `ogretimelemanlari`
  ADD PRIMARY KEY (`ogretmen_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
