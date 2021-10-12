-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-10-2021 a las 22:30:37
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
-- Estructura de tabla para la tabla `diariopaciente`
--

DROP TABLE IF EXISTS `diariopaciente`;
CREATE TABLE IF NOT EXISTS `diariopaciente` (
  `id_semana` int(5) NOT NULL AUTO_INCREMENT,
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
  `id_usuario` int(5) NOT NULL,
  PRIMARY KEY (`id_semana`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `diariopaciente`
--

INSERT INTO `diariopaciente` (`id_semana`, `actividadLun`, `actividadMar`, `actividadMie`, `actividadJue`, `actividadVie`, `actividadSab`, `actividadDom`, `pesoSemanal`, `estado`, `valoracionSemana`, `id_usuario`) VALUES
(1, 'comer', 'fulbo', 'comer', 'dormir', 'comer', 'fulbo', 'dormir', 'perdi 200kg', 'Me siento muy bien actualmente', 'muy buena', 15),
(2, 'dormir', 'dormir', 'dormir', 'jugar league of legends', 'dormir', 'dormir', 'dormir', 'gane 2 kilos', 'depresion', 'regular', 15),
(3, 'Regar las plantas', 'Salir al parque', 'Cenar con mis amigos', 'Ir al cine con familia', 'Ver serie con esposa', 'Jugar al fútbol con amigos', 'Me pesé y tomé mi medicamento', 'Perdí 300 gramos', 'Esta semana fue muy buena, pase muy buenas experiencias y me siento genial', 'muy buena', 16),
(4, 'Regar las plantas', 'Hacer yoga y salir a caminar', 'Festejé Halloween con mis familiares y comí canelones, mi comida favorita', 'Fui a hacer las compras al supermercado', 'Jugue videojuegos con mis primos', 'Fui al cumpleaños de mi suegro', 'Me fui a pesar y tomé mi medicamento', 'perdí 100 gramos', 'A gusto con la vida pero un poco cansado, quizá la próxima semana debería de relajarme más y descansar en mi casa', 'buena', 16),
(5, 'Regar las plantas', 'Salir al parque', 'Cenar con mis amigos', 'Ir al cine con familia', 'Ver serie con esposa', 'Jugar al fútbol con amigos', 'Me pesé y tomé mi medicamento', 'Perdí 300 gramos', 'Esta semana fue muy buena, pase muy buenas experiencias y me siento genial', 'Muy buena', 17),
(6, 'Regar las plantas', 'Hacer yoga y salir a caminar', 'Festejé Halloween con mis familiares y comí canelones, mi comida favorita', 'Fui a hacer las compras al supermercado', 'Jugue videojuegos con mis primos', 'Fui al cumpleaños de mi suegro', 'Me fui a pesar y tomé mi medicamento', 'perdí 100 gramos', 'A gusto con la vida pero un poco cansado, quizá la próxima semana debería de relajarme más y descansar en mi casa', 'Buena', 17);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

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

DROP TABLE IF EXISTS `oftalmologos`;
CREATE TABLE IF NOT EXISTS `oftalmologos` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `apellido` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `precio` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

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

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(5) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `genero` varchar(9) NOT NULL,
  `fecha_de_nacimiento` date NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `nombre`, `apellido`, `genero`, `fecha_de_nacimiento`) VALUES
(26, 'Gabriel', 'de68bcc1f7c1e49617805929a79673d5', 'Gabriel', 'Schilliro', 'Masculino', '2002-07-19'),
(27, 'Mirko', 'de68bcc1f7c1e49617805929a79673d5', 'Mirko', 'Doria', 'Masculino', '2002-11-27'),
(28, 'Katia', 'de68bcc1f7c1e49617805929a79673d5', 'Katia', 'Ordonez', 'Femenino', '2003-04-13'),
(29, 'Agustin', 'de68bcc1f7c1e49617805929a79673d5', 'Agustin', 'Gatica', 'Masculino', '2003-03-04'),
(30, 'Maximiliano', 'de68bcc1f7c1e49617805929a79673d5', 'Maximiliano', 'Solis Colombo', 'Masculino', '2003-05-24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
