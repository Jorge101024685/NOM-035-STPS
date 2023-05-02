-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2020 a las 23:04:59
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
-- Estructura de tabla para la tabla `cuestionario2`
--

CREATE TABLE `cuestionario2` (
  `id_empresa` smallint(5) UNSIGNED NOT NULL,
  `codigo` char(6) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `pregunta1` char(13) NOT NULL,
  `pregunta2` char(13) NOT NULL,
  `pregunta3` char(13) NOT NULL,
  `pregunta4` char(13) NOT NULL,
  `pregunta5` char(13) NOT NULL,
  `pregunta6` char(13) NOT NULL,
  `pregunta7` char(13) NOT NULL,
  `pregunta8` char(13) NOT NULL,
  `pregunta9` char(13) NOT NULL,
  `pregunta10` char(13) NOT NULL,
  `pregunta11` char(13) NOT NULL,
  `pregunta12` char(13) NOT NULL,
  `pregunta13` char(13) NOT NULL,
  `pregunta14` char(13) NOT NULL,
  `pregunta15` char(13) NOT NULL,
  `pregunta16` char(13) NOT NULL,
  `pregunta17` char(13) NOT NULL,
  `pregunta18` char(13) NOT NULL,
  `pregunta19` char(13) NOT NULL,
  `pregunta20` char(13) NOT NULL,
  `pregunta21` char(13) NOT NULL,
  `pregunta22` char(13) NOT NULL,
  `pregunta23` char(13) NOT NULL,
  `pregunta24` char(13) NOT NULL,
  `pregunta25` char(13) NOT NULL,
  `pregunta26` char(13) NOT NULL,
  `pregunta27` char(13) NOT NULL,
  `pregunta28` char(13) NOT NULL,
  `pregunta29` char(13) NOT NULL,
  `pregunta30` char(13) NOT NULL,
  `pregunta31` char(13) NOT NULL,
  `pregunta32` char(13) NOT NULL,
  `pregunta33` char(13) NOT NULL,
  `pregunta34` char(13) NOT NULL,
  `pregunta35` char(13) NOT NULL,
  `pregunta36` char(13) NOT NULL,
  `pregunta37` char(13) NOT NULL,
  `pregunta38` char(13) NOT NULL,
  `pregunta39` char(13) NOT NULL,
  `pregunta40` char(13) NOT NULL,
  `clientes_usuarios` char(2) NOT NULL,
  `pregunta41` char(13) NOT NULL,
  `pregunta42` char(13) NOT NULL,
  `pregunta43` char(13) NOT NULL,
  `jefe` char(2) NOT NULL,
  `pregunta44` char(13) NOT NULL,
  `pregunta45` char(13) NOT NULL,
  `pregunta46` char(13) NOT NULL,
  `dom1` tinyint(3) UNSIGNED NOT NULL,
  `cdom1` char(8) NOT NULL,
  `dom2` tinyint(3) UNSIGNED NOT NULL,
  `cdom2` char(8) NOT NULL,
  `dom3` tinyint(3) UNSIGNED NOT NULL,
  `cdom3` char(8) NOT NULL,
  `dom4` tinyint(3) UNSIGNED NOT NULL,
  `cdom4` char(8) NOT NULL,
  `dom5` tinyint(3) UNSIGNED NOT NULL,
  `cdom5` char(8) NOT NULL,
  `dom6` tinyint(3) UNSIGNED NOT NULL,
  `cdom6` char(8) NOT NULL,
  `dom7` tinyint(3) UNSIGNED NOT NULL,
  `cdom7` char(8) NOT NULL,
  `dom8` tinyint(3) UNSIGNED NOT NULL,
  `cdom8` char(8) NOT NULL,
  `cat1` tinyint(3) UNSIGNED NOT NULL,
  `ccat1` char(8) NOT NULL,
  `cat2` tinyint(3) UNSIGNED NOT NULL,
  `ccat2` char(8) NOT NULL,
  `cat3` tinyint(3) UNSIGNED NOT NULL,
  `ccat3` char(8) NOT NULL,
  `cat4` tinyint(3) UNSIGNED NOT NULL,
  `ccat4` char(8) NOT NULL,
  `calificacion` tinyint(3) UNSIGNED NOT NULL,
  `nivel_riesgo` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuestionario2`
--

INSERT INTO `cuestionario2` (`id_empresa`, `codigo`, `fecha`, `pregunta1`, `pregunta2`, `pregunta3`, `pregunta4`, `pregunta5`, `pregunta6`, `pregunta7`, `pregunta8`, `pregunta9`, `pregunta10`, `pregunta11`, `pregunta12`, `pregunta13`, `pregunta14`, `pregunta15`, `pregunta16`, `pregunta17`, `pregunta18`, `pregunta19`, `pregunta20`, `pregunta21`, `pregunta22`, `pregunta23`, `pregunta24`, `pregunta25`, `pregunta26`, `pregunta27`, `pregunta28`, `pregunta29`, `pregunta30`, `pregunta31`, `pregunta32`, `pregunta33`, `pregunta34`, `pregunta35`, `pregunta36`, `pregunta37`, `pregunta38`, `pregunta39`, `pregunta40`, `clientes_usuarios`, `pregunta41`, `pregunta42`, `pregunta43`, `jefe`, `pregunta44`, `pregunta45`, `pregunta46`, `dom1`, `cdom1`, `dom2`, `cdom2`, `dom3`, `cdom3`, `dom4`, `cdom4`, `dom5`, `cdom5`, `dom6`, `cdom6`, `dom7`, `cdom7`, `dom8`, `cdom8`, `cat1`, `ccat1`, `cat2`, `ccat2`, `cat3`, `ccat3`, `cat4`, `ccat4`, `calificacion`, `nivel_riesgo`) VALUES
(20020, '5d281t', '2020-11-03 15:08:28', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'casi nunca', 'casi nunca', 'casi nunca', 'casi nunca', 'casi nunca', 'casi nunca', 'casi nunca', 'casi nunca', 'casi nunca', 'casi nunca', 'casi nunca', 'casi nunca', 'casi nunca', 'casi nunca', 'siempre', 'siempre', 'si', 'siempre', 'siempre', 'siempre', 'no', '', '', '', 0, 'nulo', 12, 'bajo', 6, 'bajo', 8, 'muy alto', 8, 'muy alto', 9, 'alto', 9, 'medio', 16, 'muy alto', 0, 'nulo', 12, 'bajo', 16, 'muy alto', 34, 'alto', 68, 'medio'),
(20020, 'cn216*', '2020-11-03 14:51:36', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'no', '', '', '', 'no', '', '', '', 0, 'nulo', 0, 'nulo', 28, 'muy alto', 0, 'nulo', 0, 'nulo', 20, 'muy alto', 12, 'alto', 4, 'nulo', 0, 'nulo', 0, 'nulo', 0, 'nulo', 36, 'alto', 64, 'medio'),
(20020, 'wa610i', '2020-11-03 14:59:33', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'nunca', 'nunca', 'nunca', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'no', '', '', '', 'no', '', '', '', 12, 'muy alto', 12, 'bajo', 28, 'muy alto', 8, 'muy alto', 8, 'muy alto', 20, 'muy alto', 12, 'alto', 32, 'muy alto', 12, 'muy alto', 12, 'bajo', 16, 'muy alto', 64, 'muy alto', 148, 'muy alto');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuestionario2`
--
ALTER TABLE `cuestionario2`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuestionario2`
--
ALTER TABLE `cuestionario2`
  ADD CONSTRAINT `cuestionario2_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
