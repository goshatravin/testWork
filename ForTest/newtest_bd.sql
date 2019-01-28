-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 28 2019 г., 23:04
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `newtest_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `newcosts`
--

CREATE TABLE `newcosts` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `newcosts`
--

INSERT INTO `newcosts` (`id`, `date`, `price`, `description`) VALUES
(48, '2019-01-28', '50.00', 'Курочка'),
(49, '2019-01-27', '54.40', 'Зеленый горошек'),
(50, '2019-01-28', '40.36', 'Плюшка'),
(51, '2019-01-04', '50.56', 'Яйца'),
(52, '2019-01-28', '500.00', 'Рыбка'),
(53, '2019-01-28', '79.90', 'Кола');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `newcosts`
--
ALTER TABLE `newcosts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `newcosts`
--
ALTER TABLE `newcosts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
