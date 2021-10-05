-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-10-2021 a las 21:56:47
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

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
-- Estructura de tabla para la tabla `odontologos`
--

DROP TABLE IF EXISTS `odontologos`;
CREATE TABLE IF NOT EXISTS `odontologos` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `apellido` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `precio` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `odontologos`
--

INSERT INTO `odontologos` (`id`, `apellido`, `telefono`, `precio`) VALUES
(1, 'Schilliro', 1140605002, 200),
(2, 'Gatica', 1150602010, 150),
(4, 'Doria', 1154698877, 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(5) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_de_nacimiento` date NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `nombre`, `apellido`, `fecha_de_nacimiento`) VALUES
(2, 'Gabriel', 'olimpiadas', 'Gabriel', 'Schilliro', '2002-07-19'),
(3, 'Agustin', 'olimpiadas', 'Agustin', 'Gatica', '2003-03-04'),
(4, 'Mirko', 'olimpiadas', 'Mirko', 'Doria', '2002-11-27'),
(5, 'Maximiliano', 'olimpiadas', 'Maximiliano', 'Solis Colombo', '2003-05-24'),
(6, 'Katia', 'olimpiadas', 'Katia', 'Ordonez', '2003-04-13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
