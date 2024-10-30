

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




CREATE TABLE `kullanici` (
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `sifre` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` char(11) NOT NULL,
  `cinsiyet` varchar(50)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`ad`, `soyad`, `sifre`, `email`, `tel`) VALUES
( 'Ceylan', 'AKCI', '123456', 'abc@gmail.com', '5052558585'),
( 'Emine', 'SIVRI', '123456', 'a@gmail.com', '5052558585'),
( 'Emre', 'ÇELIKOGLU', '123456', 'b@gmail.com', '5052558585'),
( 'Cihan', 'TÜRK',  '123456', 'c@gmail.com', '5052558585'),
( 'HASAN Berkay', 'SEZGiN', '123456', 'aa@gmail.com', '5052558585'),
( 'Ender', 'AKSU', '123456', 'bb@gmail.com', '5052558585');


--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`email`);

