-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Kas 2020, 17:36:03
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `website1`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

CREATE TABLE `about` (
  `id` int(11) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `text` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `SmallText` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `header1` varchar(120) COLLATE utf8mb4_turkish_ci NOT NULL,
  `header2` varchar(120) COLLATE utf8mb4_turkish_ci NOT NULL,
  `header3` varchar(120) COLLATE utf8mb4_turkish_ci NOT NULL,
  `text1` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `text2` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `text3` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `about`
--

INSERT INTO `about` (`id`, `image`, `text`, `SmallText`, `header1`, `header2`, `header3`, `text1`, `text2`, `text3`) VALUES
(1, 'assets\\img\\3025327292about-img.svg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet felis ac elit tempus cursus vitae et ligula. In non finibus est, ac pretium nisi. Aliquam at eros sed Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet felis ac elit tempus cursus vitae et ligula. In non finibus est, ac pretium nisi. Aliquam at eros sed\r\n\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `clients`
--

CREATE TABLE `clients` (
  `id` int(11) UNSIGNED NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `clients`
--

INSERT INTO `clients` (`id`, `alt`, `image`) VALUES
(1, 'Numquam sit eveniet', 'assets/img/clients/3482227620client-1.png'),
(2, 'nigga', 'assets/img/clients/2622926196client-2.png'),
(3, 'Animi iure consequa', 'assets/img/clients/4128321844client-3.png'),
(4, 'Omnis molestias recu', 'assets/img/clients/3271826554client-4.png'),
(5, 'Quis dolore rem nequ', 'assets/img/clients/3094523879client-6.png'),
(6, 'Voluptate officia ut', 'assets/img/clients/5288535862client-7.png'),
(7, 'Qui enim enim facere', 'assets/img/clients/3234753107beer-main-0.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `intro`
--

CREATE TABLE `intro` (
  `id` int(11) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `text` varchar(155) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `intro`
--

INSERT INTO `intro` (`id`, `image`, `text`) VALUES
(1, 'assets\\img\\2421338286intro-img.svg', 'Sizin için Çözümler geliştiryoruz ...');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `text` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `mail` varchar(155) COLLATE utf8mb4_turkish_ci NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_turkish_ci NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`id`, `title`, `text`, `mail`, `name`, `time`) VALUES
(1, 'Asperiores ut natus', 'Beatae vitae nostrud', 'soxahalubi@mailinator.com', 'Leah Hines', '2020-08-26 13:39:05'),
(2, 'Delectus ut id ess', 'Ea porro perferendis', 'cinucyra@mailinator.com', 'Keane Banks', '2020-08-26 13:39:15'),
(3, 'Atque dignissimos la', 'Voluptates pariatur', 'bawihugu@mailinator.com', 'Orlando Albert', '2020-08-26 13:39:25'),
(4, 'Molestiae corporis s', 'Laboriosam consequa', 'gybibi@mailinator.com', 'Wilma Hodge', '2020-08-26 13:39:55'),
(5, 'Temporibus saepe et', 'In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem In quasi voluptatem', 'qygyfunyp@mailinator.com', 'Abbot Valentine', '2020-08-26 13:40:12'),
(6, 'Quia rerum amet omn', 'Quisquam nulla paria', 'kumi@mailinator.com', 'Lisandra Barrett', '2020-08-27 13:24:22'),
(7, 'Modi ut voluptatem', 'Adipisci adipisci is', 'xajure@mailinator.com', 'Linda Bullock', '2020-08-27 13:27:11'),
(8, 'Mollitia qui quia Na', 'Maiores pariatur Qu', 'fykuruf@mailinator.com', 'Preston Flynn', '2020-08-27 13:28:51'),
(9, 'Dolorem omnis volupt', 'Inventore velit dis', 'jokyti@mailinator.com', 'Roary Baldwin', '2020-08-27 13:36:24'),
(10, 'Culpa consequatur vo', 'Cum Nam fugiat aliqu', 'makywap@mailinator.com', 'Lucas Bentley', '2020-08-27 13:43:06'),
(11, 'Do necessitatibus ma', 'Qui eos commodo del', 'bohini@mailinator.com', 'Tatiana Townsend', '2020-08-27 13:44:32');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `title` varchar(122) COLLATE utf8mb4_turkish_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `filter` varchar(33) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `projects`
--

INSERT INTO `projects` (`id`, `image`, `title`, `text`, `link`, `filter`) VALUES
(1, 'assets\\img\\portfolio\\2835953188IMG_20190705_175805.jpg', 'Qui dolorem ab cupid', 'Quibusdam in laudant', 'Libero et culpa pari', 'mobile'),
(2, 'assets/img/portfolio/3236735448app2.jpg', 'Architecto sit aut', 'Iure illo officia qu', 'Quia magni officia d', 'mobile'),
(3, 'assets/img/portfolio/2962724078web2.jpg', 'Est ut qui in sequi', 'Laborum Dicta sit', 'Culpa reiciendis in', 'web'),
(4, 'assets/img/portfolio/27657307553236735448app2.jpg', 'Quis a aut ex expedi', 'Vitae ex in aut sunt', 'Nisi voluptate et to', 'mobile'),
(6, 'assets/img/portfolio/3246227516web1.jpg', 'Esse nihil minus ut', 'Non reiciendis quos', 'Laudantium ipsum e', 'eticaret');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `SmallText` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `header1` varchar(155) COLLATE utf8mb4_turkish_ci NOT NULL,
  `header2` varchar(155) COLLATE utf8mb4_turkish_ci NOT NULL,
  `header3` varchar(155) COLLATE utf8mb4_turkish_ci NOT NULL,
  `header4` varchar(155) COLLATE utf8mb4_turkish_ci NOT NULL,
  `header5` varchar(155) COLLATE utf8mb4_turkish_ci NOT NULL,
  `header6` varchar(155) COLLATE utf8mb4_turkish_ci NOT NULL,
  `text1` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `text2` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `text3` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `text4` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `text5` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `text6` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `services`
--

INSERT INTO `services` (`id`, `SmallText`, `header1`, `header2`, `header3`, `header4`, `header5`, `header6`, `text1`, `text2`, `text3`, `text4`, `text5`, `text6`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `sitelogo` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `sitename` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `mail` varchar(155) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `phone` varchar(120) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `smtphost` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `smtpuser` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `smtppassword` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `smtpport` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `durum` enum('0','1') COLLATE utf8mb4_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `sitelogo`, `sitename`, `mail`, `phone`, `address`, `smtphost`, `smtpuser`, `smtppassword`, `smtpport`, `facebook`, `twitter`, `instagram`, `youtube`, `durum`) VALUES
(1, 'assets\\img\\logo.png', 'newbiz', 'info@newbiz.com', '055 5444 6667', 'ali sokak veli caddesi no:49 d:50 bağcılar / istanbul', '', '', '', '', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `mail`) VALUES
(1, 'admin', '670f8574bd93dd78bd568dab84c6733a', NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `intro`
--
ALTER TABLE `intro`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
