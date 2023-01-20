-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 20 2023 г., 22:30
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `apple`
--

CREATE TABLE `apple` (
  `id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `weight` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `apple`
--

INSERT INTO `apple` (`id`, `quantity`, `weight`) VALUES
(1, 48, 8050),
(2, 40, 6636),
(3, 42, 6785),
(4, 42, 6945),
(5, 40, 6558),
(6, 49, 8131),
(7, 44, 7315),
(8, 49, 8000),
(9, 43, 7135),
(10, 47, 7784);

-- --------------------------------------------------------

--
-- Структура таблицы `pear`
--

CREATE TABLE `pear` (
  `id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `weight` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `pear`
--

INSERT INTO `pear` (`id`, `quantity`, `weight`) VALUES
(1, 8, 1284),
(2, 18, 2987),
(3, 12, 1990),
(4, 10, 1677),
(5, 13, 2128),
(6, 1, 161),
(7, 14, 2302),
(8, 9, 1456),
(9, 6, 1004),
(10, 12, 1976),
(11, 6, 982),
(12, 15, 2498),
(13, 12, 1920),
(14, 19, 3018),
(15, 3, 513);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `apple`
--
ALTER TABLE `apple`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pear`
--
ALTER TABLE `pear`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `apple`
--
ALTER TABLE `apple`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `pear`
--
ALTER TABLE `pear`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
