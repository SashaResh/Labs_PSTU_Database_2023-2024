-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 19 2024 г., 21:05
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
-- База данных: `Reshetski`
--

DELIMITER $$
--
-- Процедуры
--
CREATE DEFINER=`root`@`%` PROCEDURE `SP` ()   BEGIN
								INSERT INTO SPU(Surname, Name, LastName, Phone)
								SELECT Surname, Name, LastName, Phone FROM Table_Reshetski2 WHERE Phone = 'Не подтверджен';
							END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Структура таблицы `Table_Reshetski`
--

CREATE TABLE `Table_Reshetski` (
  `Surname` varchar(20) DEFAULT NULL,
  `Name` varchar(15) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `Phone` varchar(11) DEFAULT NULL,
  `Salary` int DEFAULT NULL,
  `Address` varchar(70) DEFAULT NULL,
  `DurationOfEmployment` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Table_Reshetski`
--

INSERT INTO `Table_Reshetski` (`Surname`, `Name`, `LastName`, `Phone`, `Salary`, `Address`, `DurationOfEmployment`) VALUES
('Reshetski', 'Alexander', 'Vitalievich', '89999999999', 50000, 'Perm, pixtovaya, 42', '2022-07-07'),
('Chizhov', 'Vladimir', 'Victorovich', '89888888888', 49000, 'Perm, Yinskaya , 6', '2022-07-07'),
('Makarenko', 'Nikolay', 'Grigoryevich', '89777777777', 30000, 'Moscow, Red Square, 1', '2020-01-01'),
('Lexinx', 'Maxim', 'Vasilyevich', '89123456789', 100000, 'Perm, Malysheva, 3', '2015-01-02'),
('Tokarev', 'Denis', 'Vladimirovich', '89987654321', 150000, 'Moscow, Centre , 5', '2010-05-10'),
('Plexenko', 'Michael', 'Alexandrovich', '89999888777', 25000, 'Saint-Peterburn, Tverskaya, 1', '2023-01-01'),
('Nikolayev', 'Nikolay', 'Nikolayevich', '89666555444', 30000, 'Tver, House, 148', '2022-08-09'),
('Maximov', 'Maxim', 'Maximovich', '89333222111', 36000, 'Tver, Centre, 100', '2000-08-08'),
('Alexeev', 'Alexey', 'Alexeevich', '89000111222', 40000, 'Perm, Lynacharskogo, 20', '2010-09-09'),
('Furkin', 'Denis', 'Albertovich', '89333444555', 20000, 'Perm, Ekaterininskaya, 4', '2023-10-05'),
('Drovin', 'Ivan', 'Ivanovich', '89666777888', 15000, 'Perm, Krasnay, 9', '2022-06-08'),
('Rasmakhin', 'Roman', 'Romanovich', '89888999000', 28000, 'Perm, Lenina, 5', '2020-01-04'),
('Furev', 'Albert', 'Michailovich', '89999000111', 41000, 'Perm, 25october, 43', '2005-02-27'),
('Mikituk', 'Konstantin', 'Romanovich', '89222333444', 20000, 'Perm, Lenina, 8', '2020-10-10'),
('Mitrakov', 'Nikita', 'Sergeevich', '89555666888', 10000, 'Perm, Ursha, 5', '2000-10-11'),
('Morozov', 'Konstantin', 'Olegovich', '89955666777', 103000, 'Moscow, Kosaya, 2', '2000-10-30'),
('Bochkarev', 'Alexandr', 'Anatolevich', '89995666777', 70000, 'Perm, Dedukina, 17', '2023-10-04'),
('Tarasov', 'Vyacheslav', 'Alexeevich', '89966777888', 75000, 'Perm, Mira, 8', '2023-10-04'),
('Vasilev', 'Ilya', 'Tagirovich', '89996777888', 69000, 'Perm, Mira, 8', '2022-04-25'),
('Olegov', 'Oleg', 'Olegovich', '89999777888', 34000, 'Perm, Dedukina, 17', '2022-04-25');

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `view1`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `view1` (
`LastName` varchar(20)
,`Name` varchar(15)
,`Phone` varchar(11)
,`Salary` int
,`Surname` varchar(20)
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `view2`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `view2` (
`Address` varchar(70)
,`LastName` varchar(20)
,`Name` varchar(15)
,`Surname` varchar(20)
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `view3`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `view3` (
`DurationOfEmployment` date
,`LastName` varchar(20)
,`Name` varchar(15)
,`Surname` varchar(20)
,`Work experience` bigint
);

-- --------------------------------------------------------

--
-- Структура для представления `view1`
--
DROP TABLE IF EXISTS `view1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `view1`  AS SELECT `table_reshetski`.`Surname` AS `Surname`, `table_reshetski`.`Name` AS `Name`, `table_reshetski`.`LastName` AS `LastName`, `table_reshetski`.`Phone` AS `Phone`, `table_reshetski`.`Salary` AS `Salary` FROM `table_reshetski``table_reshetski`  ;

-- --------------------------------------------------------

--
-- Структура для представления `view2`
--
DROP TABLE IF EXISTS `view2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `view2`  AS SELECT `table_reshetski`.`Surname` AS `Surname`, `table_reshetski`.`Name` AS `Name`, `table_reshetski`.`LastName` AS `LastName`, `table_reshetski`.`Address` AS `Address` FROM `table_reshetski` ORDER BY `table_reshetski`.`Address` ASC  ;

-- --------------------------------------------------------

--
-- Структура для представления `view3`
--
DROP TABLE IF EXISTS `view3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `view3`  AS SELECT `table_reshetski`.`Surname` AS `Surname`, `table_reshetski`.`Name` AS `Name`, `table_reshetski`.`LastName` AS `LastName`, `table_reshetski`.`DurationOfEmployment` AS `DurationOfEmployment`, timestampdiff(YEAR,`table_reshetski`.`DurationOfEmployment`,curdate()) AS `Work experience` FROM `table_reshetski` WHERE (timestampdiff(YEAR,`table_reshetski`.`DurationOfEmployment`,curdate()) > 4)  ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
