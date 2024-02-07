-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2023 a las 15:13:19
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control_sena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `tipo_documento` varchar(20) DEFAULT NULL,
  `numero_documento` varchar(20) DEFAULT NULL,
  `roll` varchar(20) DEFAULT NULL,
  `nombre_titulada` varchar(255) DEFAULT NULL,
  `ficha_titulada` varchar(20) DEFAULT NULL,
  `jornada` varchar(20) DEFAULT NULL,
  `trae_equipo` varchar(2) DEFAULT NULL,
  `numero_serial` varchar(20) DEFAULT NULL,
  `marca_equipo` varchar(255) DEFAULT NULL,
  `color_equipo` varchar(50) DEFAULT NULL,
  `trae_vehiculo` varchar(2) DEFAULT NULL,
  `tipo_vehiculo` varchar(20) DEFAULT NULL,
  `marca_vehiculo` varchar(255) DEFAULT NULL,
  `placa_vehiculo` varchar(20) DEFAULT NULL,
  `color_bicicleta` varchar(50) DEFAULT NULL,
  `serial_bicicleta` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `nombres`, `apellidos`, `tipo_documento`, `numero_documento`, `roll`, `nombre_titulada`, `ficha_titulada`, `jornada`, `trae_equipo`, `numero_serial`, `marca_equipo`, `color_equipo`, `trae_vehiculo`, `tipo_vehiculo`, `marca_vehiculo`, `placa_vehiculo`, `color_bicicleta`, `serial_bicicleta`) VALUES
(1, 'jonathan enrique', 'lopez leyton', 'cc', '1007766603', 'aprendiz', 'analisis y desarrollo de software', '2557736', 'manana', 'si', 'GHJ1234H', 'lenovo', 'azul', 'si', 'moto', 'akt', 'RFG23J', '', ''),
(7, 'william', 'gaviria', 'cc', '71775617', 'visitante', '', '', '', 'no', '', '', '', 'si', 'carro', 'RENAULT', 'NAH800', '', ''),
(9, 'hector mauricio', 'camargo gamba', 'cc', '71775617', 'instructor', '', '', '', 'si', 'SDSDDC12333', 'azux', 'blanco', 'si', 'carro', 'RENAULT', 'NAH800', '', ''),
(10, 'sebastian ', 'saenz', 'cc', '12234556677', 'aprendiz', 'analisis y desarrollo de software', '2557736', 'manana', 'si', 'GHJ1234G', 'lenovo', 'azul', 'si', 'moto', 'chevrolet', 'NAH800', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `tipo_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_usuario` (`tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipo_usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
