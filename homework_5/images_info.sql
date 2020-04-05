-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 05 2020 г., 23:17
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images_info`
--

CREATE TABLE `images_info` (
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `file_location` varchar(100) COLLATE utf8_bin NOT NULL,
  `size` int(11) NOT NULL,
  `views` smallint(6) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `images_info`
--

INSERT INTO `images_info` (`name`, `file_location`, `size`, `views`, `ID`) VALUES
('msk', '/php_hw_basic/homework_5/gallery_img/big/1.jpg', 556, 2, 1),
('ast', '/php_hw_basic/homework_5/gallery_img/big/2.jpg', 307, 3, 2),
('spb', '/php_hw_basic/homework_5/gallery_img/big/3.jpg', 297, 0, 3),
('msk2', '/php_hw_basic/homework_5/gallery_img/big/4.jpg', 3891, 12, 4);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images_info`
--
ALTER TABLE `images_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images_info`
--
ALTER TABLE `images_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
