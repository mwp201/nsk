-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 17 2017 г., 08:03
-- Версия сервера: 5.7.16-log
-- Версия PHP: 7.1.0

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

INSERT INTO `timetable` (`id`, `train_number`, `start_station`, `end_station`, `arrival_time`, `departure_time`, `parking_time`, `line_delete`, `time_record`) VALUES
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
(21, '38н', 'Москва', 'Томск', '00:50', '01:40', '50 мин.', 0, '2017-03-16 13:23:18'),
(22, '55ы', 'Красноярск', 'Москва', '04:13', '04:37', '24 мин.', 0, '2017-03-17 04:42:32'),
(23, '56ы', 'Москва', 'Красноярск', '15:24', '15:45', '21 мин.', 0, '2017-03-17 04:42:32'),
(24, '59н', 'Новокузнецк', 'Кисловодск', '05:09', '05:49', '40 мин.', 0, '2017-03-17 04:42:32'),
(25, '63б', 'Новосибирск', 'Минск', '', '01:15', '', 0, '2017-03-17 04:42:32'),
(26, '63б', 'Новосибирск', 'Могилев', '', '01:15', '', 0, '2017-03-17 04:42:32'),
(27, '64б', 'Минск', 'Новосибирск', '09:18', '', '', 0, '2017-03-17 04:42:32'),
(28, '67ы', 'Абакан', 'Москва', '13:16', '14:06', '50 мин.', 0, '2017-03-17 04:42:32'),
(29, '68ы', 'Москва', 'Абакан', '03:00', '03:50', '50 мин.', 0, '2017-03-17 04:42:32'),
(30, '70ч', 'Москва', 'Чита', '21:10', '22:02', '52 мин.', 0, '2017-03-17 04:42:32'),
(31, '75э', 'Нерюнгри', 'Москва', '03:18', '04:26', '1 ч 8 мин.', 0, '2017-03-17 04:42:32'),
(32, '76э', 'Москва', 'Нерюнгри', '15:03', '15:55', '52 мин.', 0, '2017-03-17 04:42:32'),
(33, '76э', 'Москва', 'Томмот', '15:03', '15:55', '52 мин.', 0, '2017-03-17 04:42:32'),
(34, '77э', 'Нерюнгри', 'Новосибирск', '16:50', '', '', 0, '2017-03-17 04:42:32'),
(35, '78э', 'Новосибирск', 'Нерюнгри', '', '18:46', '', 0, '2017-03-17 04:42:32'),
(36, '81и', 'Улан-Удэ', 'Москва', '03:18', '04:26', '1 ч 8 мин.', 0, '2017-03-17 04:42:32'),
(37, '82и', 'Москва', 'Улан-Удэ', '15:03', '15:55', '52 мин.', 0, '2017-03-17 04:42:32'),
(38, '85ы', 'Красноярск', 'Новосибирск', '04:50', '', '', 0, '2017-03-17 04:43:42'),
(39, '86ы', 'Новосибирск', 'Красноярск', '', '16:52', '', 0, '2017-03-17 04:43:42'),
(40, '87н', 'Новосибирск', 'Омск', '', '20:00', '', 0, '2017-03-17 04:43:42'),
(41, '88н', 'Омск', 'Новосибирск', '04:00', '', '', 0, '2017-03-17 04:43:42'),
(42, '59с', 'Кисловодск', 'Барнаул', '01:44', '04:27', '2 ч 43 мин.', 0, '2017-03-17 04:43:42'),
(43, '91и', 'Северобайкальск', 'Москва', '05:48', '06:39', '51 мин.', 0, '2017-03-17 04:43:42'),
(44, '92и', 'Москва', 'Северобайкальск', '17:11', '17:49', '38 мин.', 0, '2017-03-17 04:43:42'),
(45, '92н', 'Карасук', 'Новосибирск', '02:15', '', '', 0, '2017-03-17 04:43:42'),
(46, '97э', 'Тында', 'Кисловодск', '19:57', '20:47', '50 мин.', 0, '2017-03-17 04:43:42'),
(47, '97с', 'Кисловодск', 'Нерюнгри', '23:18', '00:10', '52 мин.', 0, '2017-03-17 04:43:42'),
(48, '97с', 'Кисловодск', 'Тында', '23:18', '00:10', '52 мин.', 0, '2017-03-17 04:43:42'),
(49, '57с', 'Кисловодск', 'Иркутск', '23:18', '00:10', '52 мин.', 0, '2017-03-17 04:43:42'),
(50, '57и', 'Иркутск', 'Кисловодск', '19:57', '20:47', '50 мин.', 0, '2017-03-17 04:43:42'),
(51, '59с', 'Кисловодск', 'Новокузнецк', '01:44', '02:34', '50 мин.', 0, '2017-03-17 04:45:17'),
(52, '59с', 'Кисловодск', 'Барнаул', '01:44', '04:27', '2 ч 43 мин.', 0, '2017-03-17 04:45:17'),
(53, '99э', 'Владивосток', 'Москва', '06:05', '06:57', '52 мин.', 0, '2017-03-17 04:45:17'),
(54, '100щэ', 'Москва', 'Владивосток', '08:32', '09:32', '1 ч.', 0, '2017-03-17 04:45:17'),
(55, '103н', 'Новосибирск', 'Брест', '', '01:15', '', 0, '2017-03-17 04:45:17'),
(56, '104б', 'Брест', 'Новосибирск', '09:18', '', '', 0, '2017-03-17 04:45:17'),
(57, '115е', 'Нижневартовск', 'Новосибирск', '01:44', '', '', 0, '2017-03-17 04:45:17'),
(58, '115е', 'Нижневартовск', 'Новокузнецк', '01:44', '02:34', '50 мин.', 0, '2017-03-17 04:45:18'),
(59, '115и', 'Нижневартовск', 'Барнаул', '01:44', '04:27', '2 ч 43 мин.', 0, '2017-03-17 04:45:18'),
(60, '117у', 'Новокузнецк', 'Нижневартовск', '03:15', '04:05', '50 мин.', 0, '2017-03-17 04:45:18'),
(61, '117ну', 'Новокузнецк', 'Москва', '03:15', '04:05', '50 мин.', 0, '2017-03-17 04:45:18'),
(62, '117у', 'Новосибирск', 'Нижневартовск', '', '04:05', '', 0, '2017-03-17 04:45:18'),
(63, '118е', 'Москва', 'Новокузнецк', '15:24', '16:29', '1 ч. 5 мин.', 0, '2017-03-17 04:45:18'),
(64, '123н', 'Новосибирск', 'Белгород', '', '11:52', '', 0, '2017-03-17 04:45:18'),
(65, '124в', 'Белгород', 'Новосибирск', '06:49', '', '', 0, '2017-03-17 04:45:18'),
(66, '125е', 'Новый Уренгой', 'Новосибирск', '07:06', '', '', 0, '2017-03-17 04:45:18'),
(67, '125н', 'Новосибирск', 'Новый Уренгой', '', '23:20', '', 0, '2017-03-17 04:45:18'),
(68, '127ы', 'Красноярск', 'Адлер', '22:14', '22:35', '21 мин.', 0, '2017-03-17 04:46:51'),
(69, '128ы', 'Адлер', 'Красноярск', '20:56', '21:18', '22 мин.', 0, '2017-03-17 04:46:51'),
(70, '129ы', 'Красноярск', 'Анапа', '23:16', '00:08', '52 мин.', 0, '2017-03-17 04:46:51'),
(71, '69я', 'Чита', 'Москва', '21:50', '22:44', '54 мин.', 0, '2017-03-17 04:46:51'),
(72, '129с', 'Анапа', 'Красноярск', '01:13', '02:03', '50 мин.', 0, '2017-03-17 04:46:51'),
(73, '139н', 'Новосибирск', 'Адлер', '', '19:05', '', 0, '2017-03-17 04:46:51'),
(74, '140н', 'Адлер', 'Новосибирск', '06:34', '', '', 0, '2017-03-17 04:46:51'),
(75, '141н', 'Томск', 'Новосибирск', '08:14', '', '', 0, '2017-03-17 04:46:51'),
(76, '142н', 'Новосибирск', 'Томск', '', '14:30', '', 0, '2017-03-17 04:46:51'),
(77, '143н', 'Томск', 'Новосибирск', '18:58', '', '', 0, '2017-03-17 04:46:51'),
(78, '144н', 'Новосибирск', 'Томск', '', '03:40', '', 0, '2017-03-17 04:46:51'),
(79, '205и', 'Иркутск', 'Анапа', '23:16', '00:08', '52 мин.', 0, '2017-03-17 04:46:51'),
(80, '69я', 'Улан-Удэ', 'Анапа', '23:16', '00:08', '52 мин.', 0, '2017-03-17 04:46:51'),
(81, '69я', 'Чита', 'Анапа', '23:16', '00:08', '52 мин.', 0, '2017-03-17 04:46:51'),
(82, '205с', 'Анапа', 'Улан-Удэ', '01:13', '02:03', '50 мин.', 0, '2017-03-17 04:46:51'),
(83, '205с', 'Анапа', 'Иркутск', '01:13', '02:03', '50 мин.', 0, '2017-03-17 04:46:51'),
(84, '205с', 'Анапа', 'Чита', '01:13', '02:03', '50 мин.', 0, '2017-03-17 04:46:51'),
(85, '229и', 'Северобайкальск', 'Анапа', '23:16', '00:08', '52 мин.', 0, '2017-03-17 04:48:09'),
(86, '229с', 'Анапа', 'Северобайкальск', '01:13', '02:00', '50 мин.', 0, '2017-03-17 04:48:09'),
(87, '235с', 'Анапа', 'Тында', '01:13', '02:03', '50 мин.', 0, '2017-03-17 04:48:09'),
(88, '235э', 'Тында', 'Анапа', '23:16', '00:08', '52 мин.', 0, '2017-03-17 04:48:09'),
(89, '43э', 'Хабаровск', 'Москва', '06:05', '06:57', '52 мин.', 0, '2017-03-17 04:48:09'),
(90, '44э', 'Москва', 'Хабаровск', '08:32', '09:32', '1 ч.', 0, '2017-03-17 04:48:09'),
(91, '44э', 'Москва', 'Благовещенск', '08:32', '09:32', '1 ч.', 0, '2017-03-17 04:48:09'),
(92, '241и', 'Иркутск', 'Адлер', '14:42', '15:05', '23 мин.', 0, '2017-03-17 04:48:09'),
(93, '242с', 'Адлер', 'Иркутск', '02:44', '03:05', '21 мин.', 0, '2017-03-17 04:48:09'),
(94, '243н', 'Новокузнецк', 'Анапа', '16:27', '17:17', '50 мин.', 0, '2017-03-17 04:48:09'),
(95, '243с', 'Анапа', 'Новокузнецк', '20:23', '21:13', '50 мин.', 0, '2017-03-17 04:26:33'),
(96, '247н', 'Новосибирск', 'Омск', '', '12:53', '', 0, '2017-03-17 04:48:09'),
(97, '248н', 'Омск', 'Новосибирск', '19:58', '', '', 0, '2017-03-17 04:48:09'),
(98, '249н', 'Новокузнецк', 'Адлер', '00:34', '01:25', '51 мин.', 0, '2017-03-17 04:48:09'),
(99, '250н', 'Адлер', 'Новокузнецк', '19:00', '19:50', '50 мин.', 0, '2017-03-17 04:48:09'),
(100, '255н', 'Новосибирск', 'Анапа', '', '17:17', '', 0, '2017-03-17 04:48:09'),
(101, '255с', 'Анапа', 'Новосибирск', '20:23', '', '', 0, '2017-03-17 04:49:28'),
(102, '269ч', 'Чита', 'Адлер', '14:42', '15:05', '23 мин.', 0, '2017-03-17 04:49:28'),
(103, '270с', 'Адлер', 'Чита', '02:44', '03:05', '21 мин.', 0, '2017-03-17 04:49:28'),
(104, '273и', 'Северобайкальск', 'Адлер', '14:42', '15:05', '23 мин.', 0, '2017-03-17 04:49:28'),
(105, '274с', 'Адлер', 'Северобайкальск', '02:44', '03:05', '21 мин.', 0, '2017-03-17 04:49:28'),
(106, '301н', 'Новосибирск', 'Алматы Пассажирский', '', '15:34', '', 0, '2017-03-17 04:49:28'),
(107, '301н', 'Новосибирск', 'Караганды Пассажирский', '', '15:34', '', 0, '2017-03-17 04:49:28'),
(108, '302ц', 'Алматы', 'Новосибирск Пассажирский', '05:59', '', '', 0, '2017-03-17 04:49:28'),
(109, '312х', 'Караганды', 'Новосибирск Пассажирский', '05:59', '', '', 0, '2017-03-17 04:49:28'),
(110, '323й', 'Томмот', 'Москва Пассажирский', '03:18', '04:26', ' 1 ч 8 мин.', 0, '2017-03-17 04:49:28'),
(111, '325э', 'Нерюнгри', 'Кисловодск Пассажирский', '19:57', '20:47', '50 мин.', 0, '2017-03-17 04:49:28'),
(112, '241и', 'Иркутск', 'Адлер', '14:42', '15:05', '23 мин.', 0, '2017-03-17 04:49:28'),
(113, '242с', 'Адлер', 'Иркутск', '02:44', '03:05', '21 мин.', 0, '2017-03-17 04:49:28'),
(114, '243н', 'Новокузнецк', 'Анапа', '16:27', '17:17', '50 мин.', 0, '2017-03-17 04:49:28'),
(115, '243с', 'Анапа', 'Новокузнецк', '20:23', '21:13', '50 мин.', 0, '2017-03-17 04:27:31'),
(116, '247н', 'Новосибирск', 'Омск', '', '12:53', '', 0, '2017-03-17 04:51:00'),
(117, '248н', 'Омск', 'Новосибирск', '19:58', '', '', 0, '2017-03-17 04:51:00'),
(118, '249н', 'Новокузнецк', 'Адлер', '00:34', '01:25', '51 мин.', 0, '2017-03-17 04:51:00'),
(119, '250н', 'Адлер', 'Новокузнецк', '19:00', '19:50', '50 мин.', 0, '2017-03-17 04:51:00'),
(120, '255н', 'Новосибирск', 'Анапа', '', '17:17', '', 0, '2017-03-17 04:51:00'),
(121, '255с', 'Анапа', 'Новосибирск', '20:23', '', '', 0, '2017-03-17 04:51:00'),
(122, '269ч', 'Чита', 'Адлер', '14:42', '15:05', '23 мин.', 0, '2017-03-17 04:51:00'),
(123, '270с', 'Адлер', 'Чита', '02:44', '03:05', '21 мин.', 0, '2017-03-17 04:51:00'),
(124, '273и', 'Северобайкальск', 'Адлер', '14:42', '15:05', '23 мин.', 0, '2017-03-17 04:51:00'),
(125, '274с', 'Адлер', 'Северобайкальск', '02:44', '03:05', '21 мин.', 0, '2017-03-17 04:51:00'),
(126, '301н', 'Новосибирск', 'Алматы Пассажирский', '', '15:34', '', 0, '2017-03-17 04:51:00'),
(127, '301н', 'Новосибирск', 'Караганды Пассажирский', '', '15:34', '', 0, '2017-03-17 04:51:00'),
(128, '302ц', 'Алматы', 'Новосибирск Пассажирский', '05:59', '', '', 0, '2017-03-17 04:51:00'),
(129, '312х', 'Караганды', 'Новосибирск Пассажирский', '05:59', '', '', 0, '2017-03-17 04:51:00'),
(130, '323й', 'Томмот', 'Москва Пассажирский', '03:18', '04:26', ' 1 ч 8 мин.', 0, '2017-03-17 04:51:00'),
(131, '325э', 'Нерюнгри', 'Кисловодск Пассажирский', '19:57', '20:47', '50 мин.', 0, '2017-03-17 04:51:00'),
(132, '369н', 'Новосибирск', 'Ташкент Пассажирский', '', '15:34', '', 0, '2017-03-17 04:52:04'),
(133, '369ф', 'Ташкент', 'Новосибирск Пассажирский', '05:59', '', '', 0, '2017-03-17 04:52:04'),
(134, '391н', 'Томск', 'Лениногорск Пассажирский ', '03:28', '04:27', '59 мин.', 0, '2017-03-17 04:52:04'),
(135, '392ин', 'Лениногорск', 'Томск Пассажирский', '21:59', '22:51', '52 мин.', 0, '2017-03-17 04:52:04'),
(136, '241и', 'Иркутск', 'Адлер', '14:42', '15:05', '23 мин.', 0, '2017-03-17 04:52:04'),
(137, '242с', 'Адлер', 'Иркутск', '02:44', '03:05', '21 мин.', 0, '2017-03-17 04:52:04'),
(138, '243н', 'Новокузнецк', 'Анапа', '16:27', '17:17', '50 мин.', 0, '2017-03-17 04:52:04'),
(139, '243с', 'Анапа', 'Новокузнецк', '20:23', '21:13', '50 мин.', 0, '2017-03-17 04:28:15'),
(140, '247н', 'Новосибирск', 'Омск', '', '12:53', '', 0, '2017-03-17 04:52:04'),
(141, '248н', 'Омск', 'Новосибирск', '19:58', '', '', 0, '2017-03-17 04:52:04'),
(142, '249н', 'Новокузнецк', 'Адлер', '00:34', '01:25', '51 мин.', 0, '2017-03-17 04:52:04'),
(143, '250н', 'Адлер', 'Новокузнецк', '19:00', '19:50', '50 мин.', 0, '2017-03-17 04:52:51'),
(144, '255н', 'Новосибирск', 'Анапа', '', '17:17', '', 0, '2017-03-17 04:52:51'),
(145, '255с', 'Анапа', 'Новосибирск', '20:23', '', '', 0, '2017-03-17 04:52:51'),
(146, '269ч', 'Чита', 'Адлер', '14:42', '15:05', '23 мин.', 0, '2017-03-17 04:52:51'),
(147, '270с', 'Адлер', 'Чита', '02:44', '03:05', '21 мин.', 0, '2017-03-17 04:52:51'),
(148, '273и', 'Северобайкальск', 'Адлер', '14:42', '15:05', '23 мин.', 0, '2017-03-17 04:52:51'),
(149, '274с', 'Адлер', 'Северобайкальск', '02:44', '03:05', '21 мин.', 0, '2017-03-17 04:52:51'),
(150, '301н', 'Новосибирск', 'Алматы Пассажирский', '', '15:34', '', 0, '2017-03-17 04:52:51'),
(151, '301н', 'Новосибирск', 'Караганды Пассажирский', '', '15:34', '', 0, '2017-03-17 04:36:23'),
(152, '302ц', 'Алматы', 'Новосибирск Пассажирский', '05:59', '', '', 0, '2017-03-17 04:36:23'),
(153, '312х', 'Караганды', 'Новосибирск Пассажирский', '05:59', '', '', 0, '2017-03-17 04:36:23'),
(154, '323й', 'Томмот', 'Москва Пассажирский', '03:18', '04:26', ' 1 ч 8 мин.', 0, '2017-03-17 04:36:23'),
(155, '325э', 'Нерюнгри', 'Кисловодск Пассажирский', '19:57', '20:47', '50 мин.', 0, '2017-03-17 04:36:23'),
(156, '369н', 'Новосибирск', 'Ташкент Пассажирский', '', '15:34', '', 0, '2017-03-17 04:36:23'),
(157, '369ф', 'Ташкент', 'Новосибирск Пассажирский', '05:59', '', '', 0, '2017-03-17 04:36:23'),
(158, '391н', 'Томск', 'Лениногорск Пассажирский ', '03:28', '04:27', '59 мин.', 0, '2017-03-17 04:36:23'),
(159, '392ин', 'Лениногорск', 'Томск Пассажирский', '21:59', '22:51', '52 мин.', 0, '2017-03-17 04:36:23'),
(160, '392и', 'Барнаул', 'Санкт-Петербург Пассажирский', '21:59', '00:52', '2 ч 53 мин.', 0, '2017-03-17 04:36:23'),
(161, '399н', 'Томск', 'Анапа Пассажирский', '10:13', '10:55', '42 мин.', 0, '2017-03-17 04:36:23'),
(162, '399с', 'Анапа', 'Томск Пассажирский', '01:44', ' 02:34', '50 мин.', 0, '2017-03-17 04:36:23'),
(163, '601н', 'Новосибирск', 'Бийск Пассажирский', '', '19:12', '', 0, '2017-03-17 04:36:23'),
(164, '602и', 'Барнаул', 'Кисловодск Пассажирский', '02:30', '05:49', '3 ч 19 мин.', 0, '2017-03-17 04:36:23'),
(165, '602н', 'Бийск', 'Красноярск Пассажирский', '02:30', '09:32', '7 ч. 2 мин.', 0, '2017-03-17 04:36:23'),
(166, '602ин', 'Бийск', 'Новосибирск Пассажирский', '02:30', '', '', 0, '2017-03-17 04:34:53'),
(167, '603и', 'Новосибирск', 'Кулунда Пассажирский', '', '17:45', '', 0, '2017-03-17 04:34:53'),
(168, '603ин', 'Новосибирск', 'Карасук Пассажирский', '', '17:45', '', 0, '2017-03-17 04:34:53'),
(169, '603н', 'Новосибирск', 'Славгород Пассажирский', '', '17:45', '', 0, '2017-03-17 04:34:53'),
(170, '604и', 'Кулунда', 'Новосибирск Пассажирский', '02:15', '', '', 0, '2017-03-17 04:34:53'),
(171, '604н', 'Славгород', 'Новосибирск Пассажирский', '02:15', '', '', 0, '2017-03-17 04:34:53'),
(172, '627и', 'Кулунда', 'Новосибирск Пассажирский', '04:55', '', '', 0, '2017-03-17 04:34:53'),
(173, '627н', 'Новосибирск', 'Кулунда Пассажирский', '', '18:06', '', 0, '2017-03-17 04:34:53'),
(174, '651ж', 'Туманган', 'Москва Пассажирский', '06:05', '06:57', '52 мин.', 0, '2017-03-17 04:33:57'),
(175, '659б', 'Могилев', 'Новосибирск Пассажирский', '09:18', '', '', 0, '2017-03-17 04:33:57');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
