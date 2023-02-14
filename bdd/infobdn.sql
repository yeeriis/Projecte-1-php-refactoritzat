-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2023 a las 23:19:08
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `infobdn`
--
CREATE DATABASE IF NOT EXISTS `infobdn` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `infobdn`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `user` varchar(100) NOT NULL,
  `contrasenya` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`user`, `contrasenya`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnes`
--

CREATE TABLE `alumnes` (
  `dni_alumne` varchar(100) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `cognoms` varchar(70) NOT NULL,
  `edat` int(99) NOT NULL,
  `fotografia` varchar(255) NOT NULL,
  `correu` varchar(70) NOT NULL,
  `contrasenya` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnes`
--

INSERT INTO `alumnes` (`dni_alumne`, `nom`, `cognoms`, `edat`, `fotografia`, `correu`, `contrasenya`, `visible`) VALUES
('1425', 'Guillem', 'Ruiz', 20, 'imgalumnes/1425.png', 'guillem@gmail.com', 'eef9a734b537cc645f5842f6c436ff70', 1),
('48133467', 'Gerard', 'Bejarano', 20, 'imgalumnes/48133467.png', 'gerard@gmail.com', '64d8be661d8a79416eb6662db51e7118', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `codi_curs` int(100) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `descripcio` varchar(100) NOT NULL,
  `hores` int(255) NOT NULL,
  `data_inici` date NOT NULL,
  `data_final` date NOT NULL,
  `dni_professor` varchar(100) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`codi_curs`, `nom`, `descripcio`, `hores`, `data_inici`, `data_final`, `dni_professor`, `visible`) VALUES
(1, 'DIW', 'Mòdul 9', 1425, '2022-12-20', '2023-03-20', '147258', 1),
(2, 'Entorns de Desenvolu', 'Mòdul 5', 2563, '2022-12-20', '2023-03-20', '7654321', 1),
(3, 'Programació', 'Mòdul 3', 5241, '2022-12-20', '2022-03-20', '1436', 1),
(6, 'JavaScript', 'Mòdul 6', 2632, '2022-12-20', '2023-03-20', '5465', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `dni_alumne` varchar(100) NOT NULL,
  `codi_curs` int(100) NOT NULL,
  `nota` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`dni_alumne`, `codi_curs`, `nota`) VALUES
('48133467', 6, 0),
('48133467', 1, 0),
('48133467', 2, 0),
('48133467', 3, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `professors`
--

CREATE TABLE `professors` (
  `dni_professor` varchar(100) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `cognoms` varchar(70) NOT NULL,
  `titol_academic` varchar(40) NOT NULL,
  `fotografia` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 0,
  `contrasenya` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `professors`
--

INSERT INTO `professors` (`dni_professor`, `nom`, `cognoms`, `titol_academic`, `fotografia`, `visible`, `contrasenya`) VALUES
('1436', 'Inma', 'Salas', 'Batxillerat', 'imgprofes/1436.png', 1, 'd40dbcae0e7088fc4a7e1768cf8771da'),
('147258', 'Oriol', 'Tarradellas', 'Carrera', 'imgprofes/147258.png', 1, 'b8c6b73a4181e5027a94c54cad165fd0'),
('5465', 'Montse', 'Riu', 'Baccaulerat', 'imgprofes/5465.png', 1, '9ab5a36fdc510e822433e6adddab4dc2'),
('7654321', 'Olga', 'Domene', 'Màster del Universo', 'imgprofes/7654321.png', 1, 'e44d46e0bb9691cf448a9bb19391e8ab');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnes`
--
ALTER TABLE `alumnes`
  ADD PRIMARY KEY (`dni_alumne`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`codi_curs`),
  ADD KEY `DNI_prof` (`dni_professor`),
  ADD KEY `DNI_prof_2` (`dni_professor`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD KEY `curso` (`codi_curs`),
  ADD KEY `DNI_alum` (`dni_alumne`);

--
-- Indices de la tabla `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`dni_professor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `codi_curs` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `FK_cursos_professors` FOREIGN KEY (`dni_professor`) REFERENCES `professors` (`dni_professor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `FK_control_alumnes` FOREIGN KEY (`dni_alumne`) REFERENCES `alumnes` (`dni_alumne`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
