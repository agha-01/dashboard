-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 07 2018 г., 22:44
-- Версия сервера: 10.1.28-MariaDB
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dashboard`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `r_date` datetime NOT NULL,
  `status` int(1) NOT NULL,
  `save_me` int(1) NOT NULL,
  `giris` datetime NOT NULL,
  `cixis` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `name`, `sname`, `email`, `password`, `r_date`, `status`, `save_me`, `giris`, `cixis`) VALUES
(33, 'Agha', 'Murthuzov', 'agaverdi0123@mail.ru', 'c72f5359811af711f29b1fac7150042f', '2018-08-22 11:33:53', 1, 1, '2018-09-08 00:39:20', '2018-09-08 00:39:01'),
(35, 'Agha', 'Murthuzov', 'aga@mail.ru', '0144712dd81be0c3d9724f5e56ce6685', '2018-09-04 07:26:10', 1, 1, '2018-09-07 18:08:51', '2018-09-07 18:08:57'),
(36, 'zahir', 'Azamat', 'z@mail.ru', '78de604e8816bdd7fe32d4250b7b3116', '2018-09-07 03:48:31', 2, 1, '2018-09-07 17:48:51', '2018-09-07 17:48:57'),
(37, 'aghaaa', 'murtuzov', 'agha23@mail.ru', 'b714337aa8007c433329ef43c7b8252c', '2018-09-07 10:38:03', 1, 1, '2018-09-08 00:39:03', '2018-09-08 00:39:12');

-- --------------------------------------------------------

--
-- Структура таблицы `elanlar`
--

CREATE TABLE `elanlar` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `basliq` text NOT NULL,
  `text` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `tarix` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `elanlar`
--

INSERT INTO `elanlar` (`id`, `uname`, `sname`, `basliq`, `text`, `image`, `tarix`, `status`) VALUES
(1, 'Aghaverdi', 'Murthuzov', 'Salam', '                                                                                          Diqqət! Müəllif hüquqları CrimeTimeRu kanalı tərəfindən qorunur. Müəllifin icazəsi olmadan başqa kanala yüklənən video və səs yazıları xəbərdarlıq olmadan şikayət olunacaq. Bu isə kanalınızın bağlanmağına səbəb ola bilər.                                                                                                                                                       ', 'images/uploads/68077228.c3000.jpg', '2018-08-23 00:40:45', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `basliq` text NOT NULL,
  `text` text NOT NULL,
  `tarix` datetime NOT NULL,
  `baxis` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `image`, `basliq`, `text`, `tarix`, `baxis`, `status`) VALUES
(14, 'images/uploads/310518112.c3000.jpg', 'aghaa', '                                                                                                                                                                                                                                                                 aaSalam Aleykum                                                                                                                                                                                                                                                                              ', '2018-08-23 01:54:52', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `order_pages`
--

CREATE TABLE `order_pages` (
  `id` int(2) NOT NULL,
  `admin_id` int(2) NOT NULL,
  `page_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_pages`
--

INSERT INTO `order_pages` (`id`, `admin_id`, `page_id`) VALUES
(8, 33, 1),
(9, 33, 2),
(10, 33, 3),
(11, 33, 4),
(12, 35, 2),
(13, 35, 3),
(14, 37, 2),
(15, 37, 3),
(16, 37, 4),
(17, 36, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`) VALUES
(1, 'adminler'),
(2, 'xeberler'),
(3, 'istifadeciler'),
(4, 'elanlar');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `b_day` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `reg_date` datetime NOT NULL,
  `confirm` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `sname`, `b_day`, `email`, `phone`, `password`, `image`, `gender`, `reg_date`, `confirm`, `status`) VALUES
(1, 'laylaylay', 'lay', '2018-09-17', 'agaverdi0123@mail.ru', '554387880', 'c72f5359811af711f29b1fac7150042f', 'images/uploads/546762424.c3000.jpg', 'kisi', '2018-08-22 00:00:00', 1, 2),
(3, 'baybay', 'bbb', '2018-09-17', 'agaverdi0123@mail.ru', '554387880', 'c72f5359811af711f29b1fac7150042f', 'images/uploads/1308080159.c300.JPG', 'kisi', '0000-00-00 00:00:00', 1, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `elanlar`
--
ALTER TABLE `elanlar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_pages`
--
ALTER TABLE `order_pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `elanlar`
--
ALTER TABLE `elanlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `order_pages`
--
ALTER TABLE `order_pages`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
