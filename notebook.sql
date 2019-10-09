-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 09 2019 г., 13:05
-- Версия сервера: 5.6.38
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `notebook`
--

-- --------------------------------------------------------

--
-- Структура таблицы `abonent`
--

CREATE TABLE `abonent` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `abonent`
--

INSERT INTO `abonent` (`id`, `name`, `phone`, `email`, `user_id`) VALUES
(7, 'qwer555', '0674138256', 'etercity@gmail.com', 2),
(17, 'Манукян Александр Семенович', '0674138256', 'krrt.ua@gmail.com', 3),
(18, 'Alex', '5555', 'etercity@gmail.com', 2),
(19, 'Aleha23', '0674138256', 'olgakorobenko@meta.ua', 2),
(22, '', '', '', 0),
(24, '', '', '', 0),
(25, 'Alexandr', '222122', 'etervideo@gmail.com', 2),
(26, 'Alexandr', '0961191727', 'info@cheernika.com.ua', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(2, 'test', '$2y$10$R2knchwYCdidET0cdNR3U.U9YoN3J2m5E05GwMD7tBge7wILW19ny'),
(3, 'admin', '$2y$10$PcY0frOGV60a1ilzwneNa.kh.eE0I/U1orkJcL49kSz3vngYeBna2');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `abonent`
--
ALTER TABLE `abonent`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `abonent`
--
ALTER TABLE `abonent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
