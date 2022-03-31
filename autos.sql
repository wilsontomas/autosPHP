-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2022 a las 22:40:28
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listado`
--

CREATE TABLE `listado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(240) COLLATE utf8_spanish_ci NOT NULL,
  `documento` varchar(240) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(240) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(240) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(240) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(240) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(240) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(240) COLLATE utf8_spanish_ci NOT NULL,
  `placa` varchar(240) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `listado`
--

INSERT INTO `listado` (`id`, `nombre`, `documento`, `correo`, `sexo`, `telefono`, `direccion`, `marca`, `modelo`, `placa`) VALUES
(1, 'Wilson Eduardo Tomas', '40223372901', 'wilsonpumm@gmail.com', 'Hombre', '8298414926', 'luis amiama tio', 'Nissan', 'marsh', '48889');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `listado`
--
ALTER TABLE `listado`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `listado`
--
ALTER TABLE `listado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
