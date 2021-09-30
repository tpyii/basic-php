-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Сен 28 2021 г., 13:03
-- Версия сервера: 5.7.32
-- Версия PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `basic-php`
--
CREATE DATABASE IF NOT EXISTS `basic-php` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci;
USE `basic-php`;

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `views` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `views`) VALUES
(1, '01.jpg', 9),
(2, '02.jpg', 0),
(3, '03.jpg', 0),
(4, '04.jpg', 0),
(5, '05.jpg', 0),
(6, '06.jpg', 0),
(7, '07.jpg', 0),
(8, '08.jpg', 0),
(9, '09.jpg', 4),
(10, '10.jpg', 4),
(11, '11.jpg', 2),
(12, '12.jpg', 0),
(13, '13.jpg', 0),
(14, '14.jpg', 0),
(15, '15.jpg', 7);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
