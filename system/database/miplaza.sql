-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2023 a las 22:02:07
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `miplaza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `card-nosotros`
--

CREATE TABLE `card-nosotros` (
  `id` int(250) NOT NULL,
  `img` varchar(500) NOT NULL,
  `navtittle` varchar(50) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `color` varchar(50) NOT NULL,
  `sombra` varchar(50) NOT NULL,
  `act1` varchar(50) NOT NULL,
  `act2` varchar(50) NOT NULL,
  `act3` varchar(50) NOT NULL,
  `act4` varchar(50) NOT NULL,
  `act5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `card-nosotros`
--

INSERT INTO `card-nosotros` (`id`, `img`, `navtittle`, `tittle`, `descripcion`, `color`, `sombra`, `act1`, `act2`, `act3`, `act4`, `act5`) VALUES
(1, 'public/img/db/65284b4e3864a_admin-nosotros.jpg', 'sdfds', 'sfd', 'fs', '#b9414d', '#870f1b', 'sasdf', 'sadf', 'sdf', 'sdfs', 'adf'),
(2, 'public/img/db/65296eab7f88e_1. Reporte Semanal de Aprendizaje -1.jpg', 'llll', 'l', 'lllll', '#60292f', '#2e0000', 'l', 'l', 'l', 'l', 'l'),
(3, 'public/img/db/6529745bc621b_referencia.jpg', 'sdfgsdff', 'fsdg', 'dfgfd', '#28b867', '#008635', 'asda', 'sdasd', 'asd', 'asd', 'fgfdg'),
(4, 'public/img/db/652978afeda7c_miplaza.jpg', 'gfdgfd', 'dfg', 'gfdgfddf', '#fb182f', '#c90000', 'ffsdf', 'sdfsd', 'fsdf', 'sd', 'fsdfs'),
(5, 'public/img/db/65297bf2bacdc_grapes.png', 'dsad', 'sadas', 'sadsadsa', '#a132a9', '#6f0077', 'dsa', 'dsa', 'das', 'd', 'dsadsad'),
(6, 'public/img/db/6529856a26529_Imagen de WhatsApp 2023-10-13 a las 11.57.09_3a18deec.jpg', 'fg', 'fdhfg', 'gfd', '#7ba4db', '#4972a9', 'asd', 'adas', 'f', 'gfdg', 'dfgfd'),
(7, 'public/img/db/6529863732a2b_melon.png', 'dfg', 'gfdg', 'dsfg', '#ffffff', '#cdcdcd', 'fds', 'fsdf', 'sdf', 'sdf', 'sdfsd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `contrasena` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `contrasena`) VALUES
(1, 'Alan', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `card-nosotros`
--
ALTER TABLE `card-nosotros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `card-nosotros`
--
ALTER TABLE `card-nosotros`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
