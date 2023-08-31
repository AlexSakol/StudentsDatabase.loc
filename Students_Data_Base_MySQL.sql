-- Run this script to create database
CREATE DATABASE IF NOT EXISTS `Student` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `Student`;

CREATE TABLE IF NOT EXISTS `Students` (
  `Id` int NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Gender` char(1) DEFAULT 'M',
  `Avg_Notes` double NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DELETE FROM `Students`;
INSERT INTO `Students` (`Id`, `Name`, `Course`, `Gender`, `Avg_Notes`) VALUES
	(1, 'Ivan', 'C#', 'M', 7.8),
	(2, 'Masha', 'JS', 'F', 8.6),
	(3, 'Petr', 'PHP', 'M', 9.1),
	(4, 'Sveta', 'C/C++', 'F', 8.9);

