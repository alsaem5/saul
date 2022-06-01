-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2022 a las 00:42:14
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ususarios`
--

CREATE TABLE `ususarios` (
  `telefono` int(10) UNSIGNED NOT NULL,
  `nombrepersona` varchar(100) NOT NULL,
  `apellidopaterno` varchar(100) NOT NULL,
  `apellidomaterno` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ususarios`
--

INSERT INTO `ususarios` (`telefono`, `nombrepersona`, `apellidopaterno`, `apellidomaterno`, `correo`, `usuario`, `contraseña`) VALUES
(12345, 'saul', 'garcia', 'Lopez', 'saul123@gmail.com', 'alsaem5', 'Arribaelchivas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ususarios`
--
ALTER TABLE `ususarios`
  ADD PRIMARY KEY (`telefono`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ususarios`
--
ALTER TABLE `ususarios`
  MODIFY `telefono` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4294967296;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
