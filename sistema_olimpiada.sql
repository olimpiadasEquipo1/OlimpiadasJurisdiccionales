-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2021 a las 01:06:58
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
-- Base de datos: `sistema_olimpiada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diariopaciente`
--

CREATE TABLE `diariopaciente` (
  `id_semana` int(5) NOT NULL,
  `actividadLun` varchar(500) NOT NULL,
  `actividadMar` varchar(500) NOT NULL,
  `actividadMie` varchar(500) NOT NULL,
  `actividadJue` varchar(500) NOT NULL,
  `actividadVie` varchar(500) NOT NULL,
  `actividadSab` varchar(500) NOT NULL,
  `actividadDom` varchar(500) NOT NULL,
  `pesoSemanal` varchar(50) NOT NULL,
  `estado` varchar(500) NOT NULL,
  `valoracionSemana` varchar(9) NOT NULL,
  `id_usuario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `diariopaciente`
--

INSERT INTO `diariopaciente` (`id_semana`, `actividadLun`, `actividadMar`, `actividadMie`, `actividadJue`, `actividadVie`, `actividadSab`, `actividadDom`, `pesoSemanal`, `estado`, `valoracionSemana`, `id_usuario`) VALUES
(1, 'comer', 'fulbo', 'comer', 'dormir', 'comer', 'fulbo', 'dormir', 'perdi 200kg', 'Me siento muy bien actualmente', 'muy buena', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `odontologos`
--

CREATE TABLE `odontologos` (
  `id` int(5) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `precio` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `odontologos`
--

INSERT INTO `odontologos` (`id`, `apellido`, `telefono`, `precio`) VALUES
(1, 'Grealish', 1557512709, 500),
(2, 'Rodriguez', 1582719952, 0),
(3, 'Ortega', 1582881724, 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oftalmologos`
--

CREATE TABLE `oftalmologos` (
  `id` int(5) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `precio` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `oftalmologos`
--

INSERT INTO `oftalmologos` (`id`, `apellido`, `telefono`, `precio`) VALUES
(1, 'Romano', 1577158219, 0),
(2, 'Gonzáles', 1551293884, 500),
(3, 'Giménez', 1569681283, 1000),
(4, 'Moreno', 1561617232, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(5) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `contraseña` varchar(32) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_de_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contraseña`, `nombre`, `apellido`, `fecha_de_nacimiento`) VALUES
(15, 'adm_billie', '99d55289dd799485af0fd54f56d8ba6a', 'Billie', 'Eilish', '2020-02-20'),
(16, 'juanjo', '224c0b12060d7b4e22089beca8f95b68', 'Juan', 'José María', '2020-02-20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `diariopaciente`
--
ALTER TABLE `diariopaciente`
  ADD PRIMARY KEY (`id_semana`);

--
-- Indices de la tabla `odontologos`
--
ALTER TABLE `odontologos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oftalmologos`
--
ALTER TABLE `oftalmologos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `diariopaciente`
--
ALTER TABLE `diariopaciente`
  MODIFY `id_semana` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `odontologos`
--
ALTER TABLE `odontologos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `oftalmologos`
--
ALTER TABLE `oftalmologos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
