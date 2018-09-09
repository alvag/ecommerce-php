-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-09-2018 a las 16:37:00
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `ruta` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `ruta`, `fecha`) VALUES
(1, 'ROPA', 'ropa', '2018-09-08 14:18:55'),
(2, 'CALZADO', 'calzado', '2018-09-08 14:18:55'),
(3, 'ACCESORIOS', 'accesorios', '2018-09-08 14:20:27'),
(4, 'TECNOLOGÍA', 'tecnologia', '2018-09-08 14:20:27'),
(5, 'CURSOS', 'cursos', '2018-09-08 14:20:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `precio` double NOT NULL,
  `ventas` int(11) NOT NULL,
  `vistas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `ruta` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`id`, `nombre`, `ruta`, `fecha`, `id_categoria`) VALUES
(1, 'Ropa para dama', 'ropa-para-dama', '2018-09-08 14:26:47', 1),
(2, 'Ropa para hombre', 'ropa-para-hombre', '2018-09-08 14:26:47', 1),
(3, 'Ropa deportiva', 'ropa-deportiva', '2018-09-08 14:26:47', 1),
(4, 'Ropa infantil', 'ropa-infantil', '2018-09-08 14:26:47', 1),
(5, 'Calzado para dama', 'calzado-para-dama', '2018-09-08 14:28:48', 2),
(6, 'Calzado para hombre', 'calzado-para-hombre', '2018-09-08 14:28:48', 2),
(7, 'Calzado deportivo', 'calzado-deportivo', '2018-09-08 14:28:48', 2),
(8, 'Calzado infantil', 'calzado-infantil', '2018-09-08 14:28:48', 2),
(9, 'Bolsos', 'bolsos', '2018-09-08 14:29:52', 3),
(10, 'Relojes', 'relojes', '2018-09-08 14:29:52', 3),
(11, 'Pulseras', 'pulseras', '2018-09-08 14:29:52', 3),
(12, 'Collares', 'collares', '2018-09-08 14:29:52', 3),
(13, 'Gafas de sol', 'gafas-de-sol', '2018-09-08 14:30:17', 3),
(14, 'Tablets', 'tablets', '2018-09-08 14:31:42', 4),
(15, 'Coputadoras', 'computadoras', '2018-09-08 14:31:42', 4),
(16, 'Auriculares', 'auriculares', '2018-09-08 14:31:42', 4),
(17, 'Desarrollo Web', 'desarrollo-web', '2018-09-08 14:33:36', 5),
(18, 'Aplicaciones Móviles', 'aplicaciones-moviles', '2018-09-08 14:33:36', 5),
(19, 'Diseño Gráfico', 'diseno-grafico', '2018-09-08 14:33:36', 5),
(20, 'Marketing Digital', 'margeting-digital', '2018-09-08 14:33:36', 5),
(21, 'Smartphones', 'smartphones', '2018-09-08 14:35:51', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `template`
--

CREATE TABLE `template` (
  `id` int(11) NOT NULL,
  `barraSuperior` text NOT NULL,
  `textoSuperior` text NOT NULL,
  `colorFondo` text NOT NULL,
  `colorTexto` text NOT NULL,
  `logo` text NOT NULL,
  `icono` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `redesSociales` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `template`
--

INSERT INTO `template` (`id`, `barraSuperior`, `textoSuperior`, `colorFondo`, `colorTexto`, `logo`, `icono`, `fecha`, `redesSociales`) VALUES
(1, '#000000', '#FFFFFF', '#47BAC1', '#FFFFFF', 'views/img/plantilla/logo.png', 'views/img/plantilla/icono.png', '2018-09-08 05:42:28', '[\r\n    {\r\n        \"red\": \"fa-facebook\",\r\n        \"estilo\": \"facebookBlanco\",\r\n        \"url\": \"http://facebook.com\",\r\n        \"title\": \"Síguenos en Facebook\"\r\n    },\r\n    {\r\n        \"red\": \"fa-youtube\",\r\n        \"estilo\": \"youtubeBlanco\",\r\n        \"url\": \"http:youtube.com\",\r\n        \"title\": \"Síguenos en Youtube\"\r\n    },\r\n    {\r\n        \"red\": \"fa-twitter\",\r\n        \"estilo\": \"twitterBlanco\",\r\n        \"url\": \"http://twitter.com\",\r\n        \"title\": \"Síguenos en Twitter\"\r\n    },\r\n    {\r\n        \"red\": \"fa-google-plus\",\r\n        \"estilo\": \"googleBlanco\",\r\n        \"url\": \"http://google.com\",\r\n        \"title\": \"Síguenos en Google Plus\"\r\n    },\r\n    {\r\n        \"red\": \"fa-instagram\",\r\n        \"estilo\": \"instagram\",\r\n        \"url\": \"http://instagram.com\",\r\n        \"title\": \"Síguenos en Instagram\"\r\n    }\r\n]');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `template`
--
ALTER TABLE `template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
