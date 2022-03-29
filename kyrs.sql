-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 29 2022 г., 08:14
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kyrs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `mail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fam` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obrazov` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` bigint(20) NOT NULL,
  `status` int(11) NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgobraz` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgsnils` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgpass` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reg`
--

INSERT INTO `reg` (`id`, `mail`, `pass`, `name`, `secondname`, `fam`, `obrazov`, `region`, `city`, `tel`, `status`, `img`, `imgobraz`, `imgsnils`, `imgpass`) VALUES
(1, '1', '123', '1', '12233', '1', '1', 'Саха (Якутия)', '1', 1, 1, 'Trophy_perspective_matte_s.png', 'Лого минобр.png', 'настройки.png', 'Rocket_perspective_matte_s 1.png'),
(2, 'slept@mail.ru', '123', 'fff', 'Clept2', 'ff', 'ffdf', 'fd', 'df', 49459, 0, '', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
