-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2020 a las 23:04:44
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionario1`
--

CREATE TABLE `cuestionario1` (
  `id_empresa` smallint(5) UNSIGNED NOT NULL,
  `codigo` char(6) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `pregunta1` char(2) NOT NULL,
  `pregunta2` char(2) NOT NULL,
  `pregunta3` char(2) NOT NULL,
  `pregunta4` char(2) NOT NULL,
  `pregunta5` char(2) NOT NULL,
  `pregunta6` char(2) NOT NULL,
  `pregunta7` char(2) NOT NULL,
  `pregunta8` char(2) NOT NULL,
  `pregunta9` char(2) NOT NULL,
  `pregunta10` char(2) NOT NULL,
  `pregunta11` char(2) NOT NULL,
  `pregunta12` char(2) NOT NULL,
  `pregunta13` char(2) NOT NULL,
  `pregunta14` char(2) NOT NULL,
  `pregunta15` char(2) NOT NULL,
  `pregunta16` char(2) NOT NULL,
  `pregunta17` char(2) NOT NULL,
  `pregunta18` char(2) NOT NULL,
  `pregunta19` char(2) NOT NULL,
  `pregunta20` char(2) NOT NULL,
  `atencion_clinica` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuestionario1`
--

INSERT INTO `cuestionario1` (`id_empresa`, `codigo`, `fecha`, `pregunta1`, `pregunta2`, `pregunta3`, `pregunta4`, `pregunta5`, `pregunta6`, `pregunta7`, `pregunta8`, `pregunta9`, `pregunta10`, `pregunta11`, `pregunta12`, `pregunta13`, `pregunta14`, `pregunta15`, `pregunta16`, `pregunta17`, `pregunta18`, `pregunta19`, `pregunta20`, `atencion_clinica`) VALUES
(20020, '5d281t', '2020-11-03 15:07:47', 'no', 'no', 'no', 'si', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'si', 'si', 'si', 'si', 'si', 'si', 'si'),
(20020, '7b230j', '2020-11-03 15:47:22', 'no', 'si', 'si', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'si', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(20020, 'cn216*', '2020-11-03 14:50:43', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'no'),
(20020, 'sr247/', '2020-11-03 15:42:30', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'no'),
(20020, 'wa610i', '2020-11-03 14:58:23', 'si', 'si', 'no', 'no', 'no', 'no', 'si', 'si', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'si', 'si'),
(20020, 'wc545l', '2020-11-03 15:45:01', 'no', 'si', 'no', 'no', 'no', 'no', 'si', 'si', 'no', 'no', 'no', 'si', 'no', 'no', 'si', 'no', 'no', 'no', 'no', 'no', 'si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuestionario1`
--
ALTER TABLE `cuestionario1`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuestionario1`
--
ALTER TABLE `cuestionario1`
  ADD CONSTRAINT `cuestionario1_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
