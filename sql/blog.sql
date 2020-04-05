-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 05 2020 г., 20:11
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `date`) VALUES
(1, 'title1', 'title1', '2020-04-01'),
(2, 'title2', 'text2', '2020-04-02'),
(3, 'title3', 'text3', '2020-04-03'),
(4, 'title77', 'texttexttexttexttexttexttexttexttexttext', '2020-04-04'),
(5, 'enactus nis taraz', 'enactus nis taraz', '2020-04-14'),
(6, '1', '1', '2020-04-06'),
(7, '2', '2', '2020-04-15'),
(10, '3', '3', '2020-04-07'),
(11, 'title9', 'text9', '2020-04-17');

-- --------------------------------------------------------

--
-- Структура таблицы `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `position` varchar(35) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `team`
--

INSERT INTO `team` (`id`, `fname`, `lname`, `position`, `avatar`) VALUES
(1, 'Sayazhan', 'Onlasyn', 'Captain', 'assets/pictures/intro.jpg'),
(3, 'Timur', 'Sapabek', 'Vice-Captain', 'assets/pictures/intro.jpg'),
(4, 'Faizrakhman', 'Kamila', 'Project Manager', 'assets/pictures/intro.jpg'),
(5, 'Daniyar', 'Yegeubai', 'Project Manager', 'assets/pictures/intro.jpg'),
(6, 'Dana', 'Romankulova', 'HR', 'assets/pictures/intro.jpg'),
(7, 'Anelya', 'Aitmuratova', 'Copywriter', 'assets/pictures/intro.jpg'),
(8, 'Dilnaz', 'Isayeva', 'Designer', 'assets/pictures/intro.jpg'),
(9, 'Azat', 'Kazhymukhan', 'Developer', 'assets/pictures/intro.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
