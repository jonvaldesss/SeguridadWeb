-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 17-10-2022 a las 10:01:58
-- Versión del servidor: 10.8.2-MariaDB-1:10.8.2+maria~focal
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `entrega_1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portatiles`
--

CREATE TABLE `portatiles` (
  `id_portatil` int(11) NOT NULL,
  `marca` text NOT NULL,
  `modelo` text NOT NULL,
  `cpu` text NOT NULL,
  `gpu` text NOT NULL,
  `ram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `portatiles`
--

INSERT INTO `portatiles` (`id_portatil`, `marca`, `modelo`, `cpu`, `gpu`, `ram`) VALUES
(8, 'a', 'a', 'a', 'a', 'a'),
(9, 'b', 'b', 'b', 'b', 'b'),
(10, 'c', 'c', 'c', 'c', 'c'),
(11, 'd', 'd', 'd', 'd', 'd'),
(12, 'e', 'e', 'e', 'e', 'e');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `DNI` text NOT NULL,
  `nombre` text NOT NULL,
  `apellidos` text NOT NULL,
  `telefono` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `email` text NOT NULL,
  `usuario` text NOT NULL,
  `contraseña` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`DNI`, `nombre`, `apellidos`, `telefono`, `fecha_nacimiento`, `email`, `usuario`, `contraseña`) VALUES
('11111111F', 'aaa', 'aaa', 666666666, '2000-11-11', 'lsi1@servidor.com', 'aaa', 'blabla'),
('22222222F', 'roberto', 'robertazo', 777888999, '1000-01-01', 'bbb@servidor.com', 'bbb', 'blabla'),
('72727246T', 'jonvaldes321', 'valdesazo', 999999999, '2222-10-10', 'lsi1@servidor.com', 'jonvaldes', 'mama');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `portatiles`
--
ALTER TABLE `portatiles`
  ADD PRIMARY KEY (`id_portatil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `portatiles`
--
ALTER TABLE `portatiles`
  MODIFY `id_portatil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
