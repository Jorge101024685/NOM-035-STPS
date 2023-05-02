-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2020 a las 23:05:52
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
-- Estructura de tabla para la tabla `claves`
--

CREATE TABLE `claves` (
  `codigo` char(6) NOT NULL,
  `id_empresa` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `claves`
--

INSERT INTO `claves` (`codigo`, `id_empresa`) VALUES
('29585l', 20020),
('5d281t', 20020),
('68831u', 20020),
('7b230j', 20020),
('9f816/', 20020),
('bi625p', 20020),
('cn216*', 20020),
('fa588d', 20020),
('ij2571', 20020),
('mo4386', 20020),
('s0594p', 20020),
('sr247/', 20020),
('ul856i', 20020),
('wa610i', 20020),
('wc545l', 20020),
('wi586u', 20020);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionario3`
--

CREATE TABLE `cuestionario3` (
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
  `pregunta41` char(13) NOT NULL,
  `pregunta42` char(13) NOT NULL,
  `pregunta43` char(13) NOT NULL,
  `pregunta44` char(13) NOT NULL,
  `pregunta45` char(13) NOT NULL,
  `pregunta46` char(13) NOT NULL,
  `pregunta47` char(13) NOT NULL,
  `pregunta48` char(13) NOT NULL,
  `pregunta49` char(13) NOT NULL,
  `pregunta50` char(13) NOT NULL,
  `pregunta51` char(13) NOT NULL,
  `pregunta52` char(13) NOT NULL,
  `pregunta53` char(13) NOT NULL,
  `pregunta54` char(13) NOT NULL,
  `pregunta55` char(13) NOT NULL,
  `pregunta56` char(13) NOT NULL,
  `pregunta57` char(13) NOT NULL,
  `pregunta58` char(13) NOT NULL,
  `pregunta59` char(13) NOT NULL,
  `pregunta60` char(13) NOT NULL,
  `pregunta61` char(13) NOT NULL,
  `pregunta62` char(13) NOT NULL,
  `pregunta63` char(13) NOT NULL,
  `pregunta64` char(13) NOT NULL,
  `clientes_usuarios` char(2) NOT NULL,
  `pregunta65` char(13) NOT NULL,
  `pregunta66` char(13) NOT NULL,
  `pregunta67` char(13) NOT NULL,
  `pregunta68` char(13) NOT NULL,
  `jefe` char(2) NOT NULL,
  `pregunta69` char(13) NOT NULL,
  `pregunta70` char(13) NOT NULL,
  `pregunta71` char(13) NOT NULL,
  `pregunta72` char(13) NOT NULL,
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
  `dom9` tinyint(3) UNSIGNED NOT NULL,
  `cdom9` char(8) NOT NULL,
  `dom10` tinyint(3) UNSIGNED NOT NULL,
  `cdom10` char(8) NOT NULL,
  `cat1` tinyint(3) UNSIGNED NOT NULL,
  `ccat1` char(8) NOT NULL,
  `cat2` tinyint(3) UNSIGNED NOT NULL,
  `ccat2` char(8) NOT NULL,
  `cat3` tinyint(3) UNSIGNED NOT NULL,
  `ccat3` char(8) NOT NULL,
  `cat4` tinyint(3) UNSIGNED NOT NULL,
  `ccat4` char(8) NOT NULL,
  `cat5` tinyint(3) UNSIGNED NOT NULL,
  `ccat5` char(8) NOT NULL,
  `calificacion` tinyint(3) UNSIGNED NOT NULL,
  `nivel_riesgo` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuestionario3`
--

INSERT INTO `cuestionario3` (`id_empresa`, `codigo`, `fecha`, `pregunta1`, `pregunta2`, `pregunta3`, `pregunta4`, `pregunta5`, `pregunta6`, `pregunta7`, `pregunta8`, `pregunta9`, `pregunta10`, `pregunta11`, `pregunta12`, `pregunta13`, `pregunta14`, `pregunta15`, `pregunta16`, `pregunta17`, `pregunta18`, `pregunta19`, `pregunta20`, `pregunta21`, `pregunta22`, `pregunta23`, `pregunta24`, `pregunta25`, `pregunta26`, `pregunta27`, `pregunta28`, `pregunta29`, `pregunta30`, `pregunta31`, `pregunta32`, `pregunta33`, `pregunta34`, `pregunta35`, `pregunta36`, `pregunta37`, `pregunta38`, `pregunta39`, `pregunta40`, `pregunta41`, `pregunta42`, `pregunta43`, `pregunta44`, `pregunta45`, `pregunta46`, `pregunta47`, `pregunta48`, `pregunta49`, `pregunta50`, `pregunta51`, `pregunta52`, `pregunta53`, `pregunta54`, `pregunta55`, `pregunta56`, `pregunta57`, `pregunta58`, `pregunta59`, `pregunta60`, `pregunta61`, `pregunta62`, `pregunta63`, `pregunta64`, `clientes_usuarios`, `pregunta65`, `pregunta66`, `pregunta67`, `pregunta68`, `jefe`, `pregunta69`, `pregunta70`, `pregunta71`, `pregunta72`, `dom1`, `cdom1`, `dom2`, `cdom2`, `dom3`, `cdom3`, `dom4`, `cdom4`, `dom5`, `cdom5`, `dom6`, `cdom6`, `dom7`, `cdom7`, `dom8`, `cdom8`, `dom9`, `cdom9`, `dom10`, `cdom10`, `cat1`, `ccat1`, `cat2`, `ccat2`, `cat3`, `ccat3`, `cat4`, `ccat4`, `cat5`, `ccat5`, `calificacion`, `nivel_riesgo`) VALUES
(20020, '7b230j', '2020-11-03 15:48:48', 'siempre', 'siempre', 'nunca', 'nunca', 'nunca', 'algunas veces', 'algunas veces', 'algunas veces', 'casi nunca', 'casi nunca', 'casi nunca', 'casi nunca', 'casi nunca', 'nunca', 'nunca', 'nunca', 'casi nunca', 'casi nunca', 'casi nunca', 'casi nunca', 'casi nunca', 'casi nunca', 'casi nunca', 'nunca', 'nunca', 'casi siempre', 'casi siempre', 'casi siempre', 'algunas veces', 'algunas veces', 'casi nunca', 'siempre', 'casi siempre', 'casi siempre', 'algunas veces', 'casi siempre', 'algunas veces', 'algunas veces', 'casi siempre', 'algunas veces', 'siempre', 'siempre', 'siempre', 'casi nunca', 'casi nunca', 'casi nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'algunas veces', 'algunas veces', 'algunas veces', 'algunas veces', 'algunas veces', 'algunas veces', 'algunas veces', 'algunas veces', 'no', '', '', '', '', 'no', '', '', '', '', 0, 'nulo', 11, 'nulo', 21, 'alto', 2, 'medio', 4, 'bajo', 12, 'medio', 9, 'nulo', 16, 'muy alto', 24, 'muy alto', 12, 'muy alto', 0, 'nulo', 32, 'medio', 6, 'bajo', 37, 'medio', 36, 'muy alto', 119, 'alto'),
(20020, 'sr247/', '2020-11-03 15:43:29', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'no', '', '', '', '', 'no', '', '', '', '', 4, 'nulo', 0, 'nulo', 36, 'muy alto', 0, 'nulo', 0, 'nulo', 36, 'muy alto', 20, 'alto', 4, 'nulo', 24, 'muy alto', 12, 'muy alto', 4, 'nulo', 36, 'medio', 0, 'nulo', 60, 'muy alto', 36, 'muy alto', 140, 'muy alto'),
(20020, 'wc545l', '2020-11-03 15:46:24', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'algunas veces', 'algunas veces', 'algunas veces', 'algunas veces', 'algunas veces', 'algunas veces', 'algunas veces', 'algunas veces', 'algunas veces', 'algunas veces', 'algunas veces', 'algunas veces', 'algunas veces', 'algunas veces', 'siempre', 'siempre', 'siempre', 'siempre', 'casi siempre', 'casi siempre', 'casi siempre', 'casi siempre', 'casi siempre', 'casi siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'siempre', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'nunca', 'si', 'siempre', 'siempre', 'siempre', 'siempre', 'si', 'siempre', 'siempre', 'siempre', 'nunca', 4, 'nulo', 32, 'alto', 20, 'medio', 8, 'muy alto', 16, 'muy alto', 9, 'bajo', 5, 'nulo', 16, 'muy alto', 0, 'nulo', 4, 'bajo', 4, 'nulo', 52, 'alto', 24, 'muy alto', 30, 'medio', 4, 'nulo', 122, 'alto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` smallint(5) UNSIGNED NOT NULL,
  `empresa` tinytext NOT NULL,
  `planta` tinytext NOT NULL,
  `direccion` tinytext NOT NULL,
  `empleados` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `empresa`, `planta`, `direccion`, `empleados`) VALUES
(20020, 'SICA', 'panzacola', 'bla bla bla', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `codigo` char(6) NOT NULL,
  `id_empresa` smallint(5) UNSIGNED NOT NULL,
  `sexo` char(1) NOT NULL,
  `edad` varchar(8) NOT NULL,
  `civil` varchar(11) NOT NULL,
  `estudios` varchar(13) NOT NULL,
  `puesto` varchar(20) NOT NULL,
  `departamento` varchar(20) NOT NULL,
  `cargo` varchar(11) NOT NULL,
  `contratacion` varchar(13) NOT NULL,
  `personal` varchar(13) CHARACTER SET utf8 NOT NULL,
  `turno` varchar(8) NOT NULL,
  `rotacion` char(2) NOT NULL,
  `tiempo` varchar(18) NOT NULL,
  `experiencia` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`codigo`, `id_empresa`, `sexo`, `edad`, `civil`, `estudios`, `puesto`, `departamento`, `cargo`, `contratacion`, `personal`, `turno`, `rotacion`, `tiempo`, `experiencia`) VALUES
('5d281t', 20020, 'f', '20-24', 'divorsiado', 'primaria', 'cilindrero', 'llenado', 'profesional', 'indeterminado', 'ninguno', 'mixto', 'no', 'mas de 25 años', 'mas de 25 años'),
('7b230j', 20020, 'm', '25-29', 'viudo', 'secundaria', 'cilindrero', 'Mantenimiento', 'profesional', 'indeterminado', 'confianza', 'diurno', 'no', '5 a 9 años', '5 a 9 años'),
('cn216*', 20020, 'm', '15-19', 'casado', 'doctorado', 'cilindrero', 'llenado', 'gerente', 'honorarios', 'ninguno', 'mixto', 'no', 'menos de 6 meses', 'menos de 6 meses'),
('sr247/', 20020, 'f', '20-24', 'divorsiado', 'primaria', 'otro', 'oficina', 'gerente', 'indeterminado', 'confianza', 'diurno', 'no', 'mas de 25 años', 'mas de 25 años'),
('wa610i', 20020, 'f', '15-19', 'union libre', 'secundaria', 'pintor', 'Mantenimiento', 'operativo', 'indeterminado', 'confianza', 'diurno', 'no', 'mas de 25 años', 'mas de 25 años'),
('wc545l', 20020, 'm', '25-29', 'soltero', 'secundaria', 'pintor', 'llenado', 'operativo', 'temporal', 'ninguno', 'diurno', 'si', '1 a 4 años', '1 a 4 años');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `claves`
--
ALTER TABLE `claves`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `cuestionario1`
--
ALTER TABLE `cuestionario1`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `cuestionario2`
--
ALTER TABLE `cuestionario2`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `cuestionario3`
--
ALTER TABLE `cuestionario3`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `claves`
--
ALTER TABLE `claves`
  ADD CONSTRAINT `claves_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cuestionario1`
--
ALTER TABLE `cuestionario1`
  ADD CONSTRAINT `cuestionario1_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cuestionario2`
--
ALTER TABLE `cuestionario2`
  ADD CONSTRAINT `cuestionario2_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cuestionario3`
--
ALTER TABLE `cuestionario3`
  ADD CONSTRAINT `cuestionario3_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD CONSTRAINT `trabajador_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
