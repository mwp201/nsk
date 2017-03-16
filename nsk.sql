-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 17 2017 г., 01:48
-- Версия сервера: 5.5.53
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nsk`
--

-- --------------------------------------------------------

--
-- Структура таблицы `timetable`
--

CREATE TABLE `timetable` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `train_number` varchar(50) NOT NULL,
  `start_stantion` varchar(100) NOT NULL,
  `end_station` varchar(100) NOT NULL,
  `arrival_time` varchar(10) NOT NULL,
  `departure_time` varchar(10) NOT NULL,
  `parking_time` varchar(20) NOT NULL,
  `line_delete` tinyint(1) NOT NULL,
  `time_record` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `timetable`
--

INSERT INTO `timetable` (`id`, `train_number`, `start_stantion`, `end_station`, `arrival_time`, `departure_time`, `parking_time`, `line_delete`, `time_record`) VALUES
(1, '1м', 'Владивосток', 'Москва', '17:04', '17:25', '21 мин.', 0, '2017-03-16 13:00:47'),
(2, '2мщ', 'Москва', 'Владивосток', '22:00', '22:21', '21 мин.', 0, '2017-03-16 13:00:35'),
(3, '3з', 'Пекин', 'Москва', '16:39', '17:01', '22 мин.', 0, '2017-03-16 13:01:00'),
(4, '4щз', 'Москва', 'Пекин', '22:15', '22:36', '21 мин.', 0, '2017-03-16 12:56:29'),
(5, '5в', 'Эрдэнэт', 'Москва', '16:39', '17:01', '22 мин.', 0, '2017-03-16 12:58:36'),
(6, '5щв', 'Улан-Батор', 'Москва', '16:39', '17:01', '22 мин.', 0, '2017-03-16 13:06:09'),
(7, '6ч', 'Москва', 'Эрдэнэт', '22:15', '22:36', '21 мин.', 0, '2017-03-16 13:03:49'),
(8, '6чьщз', 'Москва', 'Улан-Батор', '22:15', '22:36', '21 мин.', 0, '2017-03-16 13:05:10'),
(9, '7н', 'Владивосток', 'Новосибирск', '17:04', '', '', 0, '2017-03-16 13:09:05'),
(10, '8н', 'Новосибирск', 'Владивосток', '', '22:21', '', 0, '2017-03-16 13:10:50'),
(11, '11у', 'Чита', 'Челябинск', '16:50', '17:46', '56 мин.', 0, '2017-03-16 13:12:40'),
(12, '11у', 'Красноярск', 'Бийск', '16:50', '19:12', '2 час. 2 мин.', 0, '2017-03-16 13:13:52'),
(13, '12у', 'Челябинск', 'Чита', '17:56', '18:46', '50 мин.', 0, '2017-03-16 13:15:21'),
(14, '13н', 'Новокузнецк', 'Санкт-Петербург', '00:07', '00:52', '45 мин.', 0, '2017-03-16 13:16:27'),
(15, '14ан', 'Санкт-Петербург', 'Новокузнецк', '01:54', '02:47', '53 мин.', 0, '2017-03-16 13:17:34'),
(16, '19ч', 'Пекин', 'Москва', '19:19', '19:40', '21 мин.', 0, '2017-03-16 13:18:36'),
(17, '20чщ', 'Москва', 'Пекин', '22:15', '22:36', '21 мин.', 0, '2017-03-16 13:19:30'),
(18, '29н', 'Кемерово', 'Москва', '15:03', '15:59', '56 мин.', 0, '2017-03-16 13:20:41'),
(19, '30н', 'Москва', 'Кемерово', '00:50', '01:40', '50 мин.', 0, '2017-03-16 13:23:46'),
(20, '37н', 'Томск', 'Москва', '15:03', '15:59', '56 мин.', 0, '2017-03-16 13:22:26'),
(21, '38н', 'Москва', 'Томск', '00:50', '01:40', '50 мин.', 0, '2017-03-16 13:23:18');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
