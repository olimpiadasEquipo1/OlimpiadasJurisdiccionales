-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2021 a las 23:21:24
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
(7, 'Regar las plantas', 'Hacer yoga y salir a caminar', 'Cenar con mis amigos', 'Ir al cine con familia', 'Ver serie con esposa', 'Jugar al fútbol con amigos', 'Descansar', 'Perdí 500 gramos', 'Muy bien', 'Muy buena', 19),
(8, 'Regar las plantas', 'Salir al parque', 'Festejé Halloween con mis familiares y comí canelones, mi comida favorita', 'Fui a hacer las compras al supermercado', 'Jugue videojuegos con mis primos', 'Fui al cumpleaños de mi suegro', 'Me fui a pesar y tomé mi medicamento', 'Perdí 300 gramos', 'Me siento perfecto esta semana', 'Muy buena', 20),
(9, 'Comer mi comida favorita', 'Jugar videojuegos', 'Comí muchos dulces', 'Fui al dentista', 'Fui al baile con mis amigos', 'Tomé mate con mi tía', 'Tomé cerveza mientras miraba una serie', 'gane 100 gramos', 'Me siento como siempre', 'Regular', 21),
(10, 'Regar las plantas', 'Hacer yoga y salir a caminar', 'Festejé Halloween con mis familiares y comí canelones, mi comida favorita', 'Fui a hacer tramites', 'Jugue videojuegos con mis primos', 'Tomé mate con mis amigos', 'Me pesé y comí pitusas', 'Perdí 300 gramos', 'Me siento muy bien actualmente', 'Muy buena', 22),
(11, 'Fui a jugar al fútbol', 'Me entrené con mi equipo de fútbol', 'Salí a correr', 'Participé en un concurso de standup', 'Tomé mi medicamento semanal y salí a bailar', 'Comí un permitido, una pizza', 'Jugué partido con mi equipo', 'Perdí 1 kg', 'Me siento perfecto', 'Buena', 23);

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
  `genero` varchar(9) NOT NULL,
  `fecha_de_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contraseña`, `nombre`, `apellido`, `genero`, `fecha_de_nacimiento`) VALUES
(19, 'gabi', '827ccb0eea8a706c4c34a16891f84e7b', 'Gabriel', 'Schilliro', 'Masculino', '2002-01-20'),
(20, 'agus', '827ccb0eea8a706c4c34a16891f84e7b', 'Agustín', 'Gatica', 'Masculino', '2002-04-17'),
(21, 'mirko', '827ccb0eea8a706c4c34a16891f84e7b', 'Mirko', 'Doria', 'Masculino', '2002-11-27'),
(22, 'katia', '827ccb0eea8a706c4c34a16891f84e7b', 'Katia', 'Ordoñez', 'Femenino', '2002-07-09'),
(23, 'max', '827ccb0eea8a706c4c34a16891f84e7b', 'Maximiliano', 'Solis Colombo Sosa', 'Masculino', '2002-10-31');

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
  MODIFY `id_semana` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
