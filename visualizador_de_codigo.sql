-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2018 a las 05:59:24
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `visualizador_de_codigo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL,
  `codigo` text NOT NULL,
  `lenguaje` text NOT NULL,
  `textura_piso` text NOT NULL,
  `textura_variable` text NOT NULL,
  `textura_metodo` text NOT NULL,
  `textura_libreria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `id_usuario`, `nombre`, `descripcion`, `codigo`, `lenguaje`, `textura_piso`, `textura_variable`, `textura_metodo`, `textura_libreria`) VALUES
(1, 1, 'Mi primer proyecto', 'Declaración de variables', 'Y2xhc3MgVGVzdCB7CiAgICBwdWJsaWMgc3RhdGljIHZvaWQgbWFpbihTdHJpbmdbXSBhcmdzKXsKICAgICAgICBpbnQgaSA9IDA7CiAgICAgICAgU3RyaW5nIHRleHRvID0gIkhvbGEgbXVuZG8iOwogICAgfQp9', 'java', 'https://st.depositphotos.com/1092019/3401/i/950/depositphotos_34015523-stock-photo-paving-slabs-seamless-tileable-texture.jpg', '', '', ''),
(2, 1, 'Variables en C', 'Declaración de variables en C', 'CiNpbmNsdWRlIDxzdGRpby5oPgoKaW50IG1haW4oKQp7CiAgICBpbnQgbXVsdGlwbGljYWRvcjsJLyogZGVmaW5vIG11bHRpcGxpY2Fkb3IgY29tbyB1biBlbnRlcm8gKi8KCWludCByZXN1bHRhZG87CQkvKiBkZWZpbm8gcmVzdWx0YWRvIGNvbW8gdW4gZW50ZXJvICovCgoJbXVsdGlwbGljYWRvciA9IDEwMDAgOwkvKiBsZSBhc2lnbm8gdmFsb3JlcyAqLwoJcmVzdWx0YWRvID0gMiAqIG11bHRpcGxpY2Fkb3IgOwp9', 'c', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `pass`, `activo`) VALUES
(1, 'Miguel', 'tester@hotmail.com', '1234', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
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
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
