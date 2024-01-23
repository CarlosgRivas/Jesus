-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-01-2024 a las 00:34:13
-- Versión del servidor: 5.7.15-log
-- Versión de PHP: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `actualizar_costo`
--

CREATE TABLE `actualizar_costo` (
  `codigo_monto` int(11) NOT NULL,
  `monto` double NOT NULL,
  `fecha` date NOT NULL,
  `codigo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `actualizar_costo`
--

INSERT INTO `actualizar_costo` (`codigo_monto`, `monto`, `fecha`, `codigo`) VALUES
(1, 70, '2023-10-13', '1'),
(2, 100, '2023-10-12', '6'),
(3, 65, '2023-11-01', '7'),
(4, 80, '2023-10-31', '6'),
(5, 70, '2023-10-14', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe_de_calle`
--

CREATE TABLE `jefe_de_calle` (
  `cedula` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `edificio` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `activo` varchar(5) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `jefe_de_calle`
--

INSERT INTO `jefe_de_calle` (`cedula`, `nombre`, `apellido`, `edificio`, `activo`) VALUES
('14498670', 'Karla', 'Rivas', 'Bermudez', 'no'),
('17446946', 'María', 'Rivas', 'Santa fe', 'si'),
('28250805', 'Jesus', 'zacarias', 'Cumanacoa', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe_familia`
--

CREATE TABLE `jefe_familia` (
  `cedula` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nac` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `edificio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apartamento_c` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `jefe_familia`
--

INSERT INTO `jefe_familia` (`cedula`, `nombre`, `Apellido`, `fecha_nac`, `telefono`, `edificio`, `apartamento_c`) VALUES
('17446946', 'maria', 'Rivas', '18/11/1984', '04121762077', 'Cumanacoa', '2-B'),
('27578779', 'Juan', 'ayala', '2012-11-08', '12345', 'Cumanacoa', '2-B'),
('28250805', 'Jesus', 'zacarias', '2012-11-22', '1234567', 'Cumanacoa', '2-B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `codigo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `servicios` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(600) COLLATE utf8_spanish_ci NOT NULL,
  `costo` double NOT NULL,
  `fecha` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`codigo`, `servicios`, `descripcion`, `costo`, `fecha`) VALUES
('1', 'agua ', 'agua ', 123, '2023-09-13'),
('6', 'Alimentos', 'Suministro de alimentos, bolsa CLAP', 50, '2023-10-07'),
('7', 'Gas 10 Kg', 'Bombonas de 10Kg', 50, '2023-10-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(8) NOT NULL,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL,
  `edificio` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario`, `contrasenia`, `nombre`, `apellido`, `cedula`, `tipo`, `edificio`) VALUES
('carmen', '1234', 'Carmen Ruiz', 'Ruiz', 0, 'Jefe', 'Cumanacoa'),
('jesus', '12345', 'Jesus Zacarias', 'Zacarias', 0, 'Administrador', ''),
('karla', 'undefined', 'karla', 'colmenares', 26135613, 'Secretario', ''),
('karlina', '1234', 'Karlina', '', 0, 'Director', ''),
('maria', 'undefined', 'Maria', 'Rivas', 11381582, 'Secretario', ''),
('pastor', '123456', 'pastor', 'fuentes', 28390472, 'Estudiante', ''),
('zulianys', 'undefined', 'Zuliannys', 'Esparragoza', 28390472, 'Coordinador', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actualizar_costo`
--
ALTER TABLE `actualizar_costo`
  ADD PRIMARY KEY (`codigo_monto`),
  ADD KEY `codigo` (`codigo`);

--
-- Indices de la tabla `jefe_de_calle`
--
ALTER TABLE `jefe_de_calle`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `jefe_familia`
--
ALTER TABLE `jefe_familia`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actualizar_costo`
--
ALTER TABLE `actualizar_costo`
  MODIFY `codigo_monto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actualizar_costo`
--
ALTER TABLE `actualizar_costo`
  ADD CONSTRAINT `codigo_FK` FOREIGN KEY (`codigo`) REFERENCES `servicios` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
