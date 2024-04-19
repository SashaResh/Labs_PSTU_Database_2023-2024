-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 19 2024 г., 21:12
-- Версия сервера: 8.0.30
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Структура таблицы `accounting`
--

CREATE TABLE `accounting` (
  `id_year` int NOT NULL,
  `expenses` float NOT NULL,
  `revenue` float NOT NULL,
  `profit` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `building`
--

CREATE TABLE `building` (
  `id_building` int NOT NULL,
  `id_type_building` int NOT NULL,
  `name_building` varchar(20) NOT NULL,
  `date_built` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `building`
--

INSERT INTO `building` (`id_building`, `id_type_building`, `name_building`, `date_built`) VALUES
(1, 1, 'Основная Теплица', '2024-04-01'),
(2, 1, 'Вторая Теплица', '2024-04-14'),
(3, 1, 'Теплица 3', '2024-04-10');

-- --------------------------------------------------------

--
-- Структура таблицы `fertilizer`
--

CREATE TABLE `fertilizer` (
  `id_fertilizer` int NOT NULL,
  `name_fertilizer` varchar(25) NOT NULL,
  `fertilizer_cost` float NOT NULL,
  `properties` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `fertilizer`
--

INSERT INTO `fertilizer` (`id_fertilizer`, `name_fertilizer`, `fertilizer_cost`, `properties`) VALUES
(1, 'Конский навоз', 5, ''),
(2, 'Коровняк', 10, 'Используется зимой'),
(3, 'Птичий помет', 15, 'Укрепляет почву'),
(4, 'Навоз коровий', 100, 'Разрыхляет почву');

-- --------------------------------------------------------

--
-- Структура таблицы `fertilizers_costs`
--

CREATE TABLE `fertilizers_costs` (
  `id_fertilizers_costs` int NOT NULL,
  `id_plant` int NOT NULL,
  `id_building` int NOT NULL,
  `id_fertilizer` int NOT NULL,
  `year_fertilizers_costs` int NOT NULL,
  `fertilizers_kg` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `fertilizers_costs`
--

INSERT INTO `fertilizers_costs` (`id_fertilizers_costs`, `id_plant`, `id_building`, `id_fertilizer`, `year_fertilizers_costs`, `fertilizers_kg`) VALUES
(1, 2, 3, 4, 2024, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `plant`
--

CREATE TABLE `plant` (
  `id_plant` int NOT NULL,
  `name_plant` varchar(20) NOT NULL,
  `id_built` int NOT NULL,
  `id_type_plant` int NOT NULL,
  `date_plant` date DEFAULT NULL,
  `square` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `plant`
--

INSERT INTO `plant` (`id_plant`, `name_plant`, `id_built`, `id_type_plant`, `date_plant`, `square`) VALUES
(1, 'Яблоко в теплице', 1, 2, '2012-02-20', 214.341),
(2, 'Лук в теплице', 1, 1, '2012-02-20', 214.341),
(3, 'Морковь в теплице', 1, 3, '2024-04-01', 4552650),
(4, 'Вторая морковь', 1, 3, '2024-04-17', 43667800),
(5, 'Яблоко теплица2', 2, 2, '2024-04-08', 123),
(6, 'qweeqw', 1, 2, '2024-04-12', 213.12),
(7, '213123', 1, 2, '2024-04-18', 123321),
(8, 'Лук тепличный', 2, 1, '2024-04-19', 15);

-- --------------------------------------------------------

--
-- Структура таблицы `TO_building`
--

CREATE TABLE `TO_building` (
  `id_TO_b` int NOT NULL,
  `id_building` int NOT NULL,
  `id_TO` int NOT NULL,
  `year_TO` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `TO_building`
--

INSERT INTO `TO_building` (`id_TO_b`, `id_building`, `id_TO`, `year_TO`) VALUES
(1, 1, 1, 2024),
(2, 1, 1, 2024);

-- --------------------------------------------------------

--
-- Структура таблицы `types_buildings`
--

CREATE TABLE `types_buildings` (
  `id_types_built` int NOT NULL,
  `name_buildings` varchar(20) NOT NULL,
  `average_temperature_here` float NOT NULL,
  `average_humidity_here` float NOT NULL,
  `maintenance_frequency` int NOT NULL,
  `square_building` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `types_buildings`
--

INSERT INTO `types_buildings` (`id_types_built`, `name_buildings`, `average_temperature_here`, `average_humidity_here`, `maintenance_frequency`, `square_building`) VALUES
(1, 'Теплица', 12.2, 12.5, 23, 34.5),
(2, 'Теплица теплая', 40, 13, 10, 32.21),
(3, 'Дом теплый', 15, 29, 1000, 233);

-- --------------------------------------------------------

--
-- Структура таблицы `types_plants`
--

CREATE TABLE `types_plants` (
  `id_type_plants` int NOT NULL,
  `name_plant` varchar(20) NOT NULL,
  `time_germination` int NOT NULL,
  `frequency_of_care` int NOT NULL,
  `the_necessary_temperature` float NOT NULL,
  `required_humidity` float NOT NULL,
  `plant_cost` float NOT NULL,
  `plant_sell` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `types_plants`
--

INSERT INTO `types_plants` (`id_type_plants`, `name_plant`, `time_germination`, `frequency_of_care`, `the_necessary_temperature`, `required_humidity`, `plant_cost`, `plant_sell`) VALUES
(1, 'Лук', 110, 21, 323, 0, 0, 0),
(2, 'Яблоко', 3123, 21421, 414325, 0, 0, 0),
(3, 'Морковь', 454325, 236535, 645463000, 0, 0, 0),
(4, 'Картошка', 123, 12, 23, 0, 0, 0),
(5, 'Огурец', 180, 10, 15, 15, 30, 150);

-- --------------------------------------------------------

--
-- Структура таблицы `types_TO`
--

CREATE TABLE `types_TO` (
  `id_TO` int NOT NULL,
  `name_TO` varchar(20) NOT NULL,
  `cost_TO` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `types_TO`
--

INSERT INTO `types_TO` (`id_TO`, `name_TO`, `cost_TO`) VALUES
(1, 'Замена крыши', 15000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`id_building`),
  ADD KEY `building_ibfk_1` (`id_type_building`);

--
-- Индексы таблицы `fertilizer`
--
ALTER TABLE `fertilizer`
  ADD PRIMARY KEY (`id_fertilizer`);

--
-- Индексы таблицы `fertilizers_costs`
--
ALTER TABLE `fertilizers_costs`
  ADD PRIMARY KEY (`id_fertilizers_costs`),
  ADD KEY `id_building` (`id_building`),
  ADD KEY `id_fertilizer` (`id_fertilizer`),
  ADD KEY `id_plant` (`id_plant`);

--
-- Индексы таблицы `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`id_plant`),
  ADD KEY `id_type_plant` (`id_type_plant`),
  ADD KEY `id_built` (`id_built`);

--
-- Индексы таблицы `TO_building`
--
ALTER TABLE `TO_building`
  ADD PRIMARY KEY (`id_TO_b`),
  ADD KEY `id_building` (`id_building`),
  ADD KEY `id_TO` (`id_TO`);

--
-- Индексы таблицы `types_buildings`
--
ALTER TABLE `types_buildings`
  ADD PRIMARY KEY (`id_types_built`);

--
-- Индексы таблицы `types_plants`
--
ALTER TABLE `types_plants`
  ADD PRIMARY KEY (`id_type_plants`),
  ADD UNIQUE KEY `id_type_plant` (`id_type_plants`);

--
-- Индексы таблицы `types_TO`
--
ALTER TABLE `types_TO`
  ADD PRIMARY KEY (`id_TO`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `building`
--
ALTER TABLE `building`
  MODIFY `id_building` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `fertilizer`
--
ALTER TABLE `fertilizer`
  MODIFY `id_fertilizer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `fertilizers_costs`
--
ALTER TABLE `fertilizers_costs`
  MODIFY `id_fertilizers_costs` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `plant`
--
ALTER TABLE `plant`
  MODIFY `id_plant` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `TO_building`
--
ALTER TABLE `TO_building`
  MODIFY `id_TO_b` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `types_buildings`
--
ALTER TABLE `types_buildings`
  MODIFY `id_types_built` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `types_plants`
--
ALTER TABLE `types_plants`
  MODIFY `id_type_plants` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `types_TO`
--
ALTER TABLE `types_TO`
  MODIFY `id_TO` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `building`
--
ALTER TABLE `building`
  ADD CONSTRAINT `building_ibfk_1` FOREIGN KEY (`id_type_building`) REFERENCES `types_buildings` (`id_types_built`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `fertilizers_costs`
--
ALTER TABLE `fertilizers_costs`
  ADD CONSTRAINT `fertilizers_costs_ibfk_1` FOREIGN KEY (`id_building`) REFERENCES `building` (`id_building`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fertilizers_costs_ibfk_2` FOREIGN KEY (`id_fertilizer`) REFERENCES `fertilizer` (`id_fertilizer`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fertilizers_costs_ibfk_3` FOREIGN KEY (`id_plant`) REFERENCES `plant` (`id_plant`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `plant`
--
ALTER TABLE `plant`
  ADD CONSTRAINT `plant_ibfk_1` FOREIGN KEY (`id_type_plant`) REFERENCES `types_plants` (`id_type_plants`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `plant_ibfk_2` FOREIGN KEY (`id_built`) REFERENCES `building` (`id_building`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `TO_building`
--
ALTER TABLE `TO_building`
  ADD CONSTRAINT `to_building_ibfk_1` FOREIGN KEY (`id_building`) REFERENCES `building` (`id_building`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `to_building_ibfk_2` FOREIGN KEY (`id_TO`) REFERENCES `types_TO` (`id_TO`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
