-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 Haz 2023, 08:50:33
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kutuphane`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci`
--

CREATE TABLE `ogrenci` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `cinsiyet` varchar(10) NOT NULL,
  `dogumtarih` date NOT NULL DEFAULT '2016-01-01'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `ogrenci`
--

INSERT INTO `ogrenci` (`id`, `ad`, `soyad`, `cinsiyet`, `dogumtarih`) VALUES
(1, 'Mustafa', 'Altın', 'E', '2015-12-26'),
(2, 'Ali', 'Şahin', 'E', '2015-01-13'),
(3, 'Ayşe ', 'Kaya', 'K', '2015-08-20'),
(4, 'Zeynep ', 'Yılmaz', 'K', '2015-06-20'),
(5, 'Ayşe ', 'Demir', 'K', '2015-11-13'),
(6, 'İrem', 'Arıkan', 'K', '2015-11-14'),
(7, 'Elif', 'Ateş', 'K', '2014-01-02'),
(8, 'Ömer', 'Güneş', 'E', '2015-09-30'),
(9, 'Emre', 'Şahin', 'E', '2015-11-20'),
(10, 'Merve', 'Kırgın', 'K', '2015-12-01'),
(11, 'Latif', 'Ak', 'E', '2015-12-09'),
(12, 'Dilan', 'Bakır', 'K', '2015-08-22'),
(14, 'Nehir', 'Kalem', 'K', '2015-08-05'),
(15, 'Gül', 'Nehir', 'K', '2015-02-28'),
(22, 'Mustafa', 'Çember', 'E', '2015-03-06'),
(23, 'Serhat', 'Altın', 'E', '2015-05-05'),
(24, 'Mine', 'Bıçak', 'K', '2015-03-29'),
(25, 'Emine', 'Tuzlu', 'K', '2015-06-01'),
(26, 'Deniz', 'Aksoy', 'K', '2015-06-01'),
(27, 'Emine', 'Tuzlu', 'K', '2015-06-01'),
(28, 'Mustafa', 'Çember', 'E', '2015-09-13'),
(29, 'Emine', 'Tuzlu', 'K', '2015-06-01'),
(31, 'Burak', 'Kaya', 'E', '2015-08-21'),
(36, 'Yunus', 'Turan', 'E', '2016-01-01'),
(40, 'Dilan', 'Nehir', 'K', '2015-05-01'),
(41, 'Enes', 'Onur', 'E', '2015-10-18'),
(51, 'Mustafa', 'Altın', 'E', '2015-07-01'),
(48, 'Mehmet', 'Yılmaz', 'E', '2015-01-16');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ogrenci`
--
ALTER TABLE `ogrenci`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ogrenci`
--
ALTER TABLE `ogrenci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
