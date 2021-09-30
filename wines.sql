-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2021 a las 01:48:35
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_wine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wines`
--

CREATE TABLE `wines` (
  `id_Wine` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Style` varchar(100) NOT NULL,
  `id_store` int(11) NOT NULL,
  `Price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `wines`
--

INSERT INTO `wines` (`id_Wine`, `Name`, `Style`, `id_store`, `Price`) VALUES
(3, 'Malbec', 'Tinto', 1, '100'),
(4, 'Cabernet Sauvignon', 'Tinto', 1, '100'),
(5, 'Sauvignon', 'Blanco', 2, '200');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `wines`
--
ALTER TABLE `wines`
  ADD PRIMARY KEY (`id_Wine`),
  ADD KEY `fk_store` (`id_store`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `wines`
--
ALTER TABLE `wines`
  MODIFY `id_Wine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `wines`
--
ALTER TABLE `wines`
  ADD CONSTRAINT `wines_ibfk_1` FOREIGN KEY (`id_store`) REFERENCES `stores` (`id_store`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
