-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 31 2017 г., 23:23
-- Версия сервера: 5.5.50
-- Версия PHP: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mosst`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(255) NOT NULL,
  `parent_id` int(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `popular` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `img`, `keywords`, `description`, `popular`) VALUES
(1, NULL, 'Грузовая техника', '', NULL, NULL, NULL),
(2, NULL, 'Дорожная техника', '', NULL, NULL, NULL),
(3, NULL, 'Землеройная техника', '', NULL, NULL, NULL),
(4, NULL, 'Комунальная техника', '', NULL, NULL, NULL),
(5, NULL, 'Подьемная техника', '', NULL, NULL, NULL),
(6, 1, 'Бензовозы', 'benzovoz.png', NULL, NULL, 1),
(7, 1, 'Вахтовые автобусы', '', NULL, NULL, NULL),
(8, 1, 'Водовозы', '', NULL, NULL, NULL),
(9, 1, 'Грузовики', 'bortovoj-gruzovik.png', NULL, NULL, 1),
(10, 1, 'Длинномеры', '', NULL, NULL, NULL),
(11, 1, 'Зерновозы', '', NULL, NULL, NULL),
(12, 1, 'Лесовозы', '', NULL, NULL, NULL),
(13, 1, 'Ломовозы', '', NULL, NULL, NULL),
(14, 1, 'Панелевозы', '', NULL, NULL, NULL),
(15, 1, 'Самосвалы', 'samosval.png', NULL, NULL, 1),
(16, 1, 'Тралы', 'tral.png', NULL, NULL, 1),
(17, 1, 'Трубовозы', '', NULL, NULL, NULL),
(18, 1, 'Тягачи', 'tyagach.png', NULL, NULL, 1),
(19, 1, 'Эвакуаторы', 'evakuator.png', NULL, NULL, 1),
(20, 2, 'Асфальтоукладчики', '', NULL, NULL, NULL),
(21, 2, 'Бетоновозы', '', NULL, NULL, NULL),
(22, 2, 'Бетононасосы', 'avtobetononasos.png', NULL, NULL, 1),
(23, 2, 'Битумовозы', '', NULL, NULL, NULL),
(24, 2, 'Виброплиты', '', NULL, NULL, NULL),
(25, 2, 'Катки', 'dorozhnyj-katok.png', NULL, NULL, 1),
(26, 2, 'Компрессоры', 'kompressor.png', NULL, NULL, 1),
(27, 2, 'Цементовозы', '', NULL, NULL, NULL),
(28, 3, 'Бары', 'bara.png', NULL, NULL, 1),
(29, 3, 'Бульдозеры', 'buldozer.png', NULL, NULL, 1),
(30, 3, 'Гидромолоты', '', NULL, NULL, NULL),
(31, 3, 'Грейдеры', 'avtogrejder.png', NULL, NULL, 1),
(32, 3, 'Гусеничные экскаваторы', '', NULL, NULL, NULL),
(33, 3, 'Сваебои', '', NULL, NULL, NULL),
(34, 3, 'Установки ГБН', '', NULL, NULL, NULL),
(35, 3, 'Фронтальные погрузчики', 'frontalnyj-pogruzchik.png', NULL, NULL, 1),
(36, 3, 'Экскаваторы погрузчики', 'ekskavator.png', NULL, NULL, 1),
(37, 3, 'Ямобуры', 'yamobur.png', NULL, NULL, 1),
(38, 4, 'Ассенизаторы', '', NULL, NULL, NULL),
(39, 4, 'Илососы', '', NULL, NULL, NULL),
(40, 4, 'Каналопромывочные машины', '', NULL, NULL, NULL),
(41, 4, 'Комбинированные машины', '', NULL, NULL, NULL),
(42, 4, 'Поливомоечные машины', '', NULL, NULL, NULL),
(43, 4, 'Снегоуборщики', '', NULL, NULL, NULL),
(44, 4, 'Пескоразбрасыватели', '', NULL, NULL, NULL),
(45, 5, 'Автовышки', 'avtovyshka.png', NULL, NULL, 1),
(46, 5, 'Автокраны', 'avtokran.png', NULL, NULL, 1),
(47, 5, 'Башенные краны', 'bashennyj-kran.png', NULL, NULL, 1),
(48, 5, 'Вилочные погрузчики', 'vilochnyj-pogruzchik.png', NULL, NULL, 1),
(49, 5, 'Грейферы', '', NULL, NULL, NULL),
(50, 5, 'Гусеничные краны', '', NULL, NULL, NULL),
(51, 5, 'Манипуляторы', 'manipulyator.png', NULL, NULL, NULL),
(52, 5, 'Мини погрузчики', '', NULL, NULL, NULL),
(53, 5, 'Подьемники', '', NULL, NULL, NULL),
(54, 5, 'Телескопические погрузчики', '', NULL, NULL, NULL),
(55, 5, 'Трубоукладчики', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `payment_form` varchar(255) CHARACTER SET utf8 NOT NULL,
  `provider` int(11) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `new` int(1) DEFAULT NULL,
  `hit` int(1) DEFAULT NULL,
  `sale` int(1) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `id_category`, `name`, `content`, `price`, `payment_form`, `provider`, `data`, `keywords`, `description`, `img`, `new`, `hit`, `sale`) VALUES
(4, 32, 'Мини экскаватор Hitachi ZX27U', NULL, 1000, 'Наличный и Безналичный', 0, '0000-00-00 00:00:00', NULL, NULL, '552_big.jpg', NULL, NULL, NULL),
(5, 32, 'Мини экскаваторы Komatsu PC50', NULL, 1100, 'Наличный и Безналичный', 0, '2017-01-24 21:00:00', NULL, NULL, 'Komatsu-50-6.jpg', NULL, NULL, NULL),
(6, 15, 'Автосамосвалы Камаз кузов 12.5м (по обьекту)', 'Перевозка грузов, уборка и вывоз снега, вывоз грунта, вывоз строительного мусора. А так же любая дорожно-строительная техника', 1100, 'наличный и безналичный', 0, '2017-01-27 04:44:46', NULL, NULL, 'kamaz55111-3.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `provider`
--

CREATE TABLE IF NOT EXISTS `provider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `call_provider` int(11) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `adress` varchar(255) CHARACTER SET utf8 NOT NULL,
  `contact_user` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `pasword` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `provider`
--
ALTER TABLE `provider`
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
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `provider`
--
ALTER TABLE `provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
