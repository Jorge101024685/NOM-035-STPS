-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2020 a las 23:05:40
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
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD CONSTRAINT `trabajador_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
