-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2021 a las 19:29:56
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hilo_frito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agregados_bebidas`
--

CREATE TABLE `agregados_bebidas` (
  `id_agregado_bebidas` int(11) NOT NULL,
  `nombre_agregado_bebida` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio_agregado_bebida` int(11) NOT NULL,
  `caracteristica_agregado_bebida` text COLLATE utf8_unicode_ci NOT NULL,
  `id_bebida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agregados_entradas`
--

CREATE TABLE `agregados_entradas` (
  `id_agregado_entradas` int(11) NOT NULL,
  `nombre_agregado_entrada` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio_agregado_entrada` int(11) NOT NULL,
  `caracteristica_agregado_entrada` text COLLATE utf8_unicode_ci NOT NULL,
  `id_entrada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `agregados_entradas`
--

INSERT INTO `agregados_entradas` (`id_agregado_entradas`, `nombre_agregado_entrada`, `precio_agregado_entrada`, `caracteristica_agregado_entrada`, `id_entrada`) VALUES
(1, 'Salsa Tabasco', 6, 'Salsa para las alitas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agregados_pizza`
--

CREATE TABLE `agregados_pizza` (
  `id_agregado_pizza` int(11) NOT NULL,
  `nombre_agregado_pizza` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio_agregado_pizza` int(11) NOT NULL,
  `caracteristicas_agregado_pizza` text COLLATE utf8_unicode_ci NOT NULL,
  `id_pizza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `agregados_pizza`
--

INSERT INTO `agregados_pizza` (`id_agregado_pizza`, `nombre_agregado_pizza`, `precio_agregado_pizza`, `caracteristicas_agregado_pizza`, `id_pizza`) VALUES
(1, 'Extra jamon', 5, 'rico jamon de pavo', 1),
(4, 'Extra queso', 6, 'Queso Extra para la Pizza', 1),
(5, 'Queso Extra', 6, 'Queso Extra para la Pizza', 4),
(6, 'Orilla de queso', 20, 'Orilla rellena de queso', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agregados_postres`
--

CREATE TABLE `agregados_postres` (
  `id_agregado_postre` int(11) NOT NULL,
  `nombre_agregado_postre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio_agregado_postre` int(11) NOT NULL,
  `caracteristica_agregado_postre` text COLLATE utf8_unicode_ci NOT NULL,
  `id_postre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agregados_promociones`
--

CREATE TABLE `agregados_promociones` (
  `id_agregado_promo` int(11) NOT NULL,
  `nombre_agregado_promo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio_agregado_promo` int(11) NOT NULL,
  `caracteristicas_agregado_promo` text COLLATE utf8_unicode_ci NOT NULL,
  `id_promociones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `agregados_promociones`
--

INSERT INTO `agregados_promociones` (`id_agregado_promo`, `nombre_agregado_promo`, `precio_agregado_promo`, `caracteristicas_agregado_promo`, `id_promociones`) VALUES
(2, 'Coca Cola Regular ', 5, '600ml', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agregados_salsas`
--

CREATE TABLE `agregados_salsas` (
  `id_agregado_salsa` int(11) NOT NULL,
  `nombre_agregado_salsa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio_agregado_salsa` int(11) NOT NULL,
  `caracteristica_agregado_salsa` text COLLATE utf8_unicode_ci NOT NULL,
  `id_salsas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `agregados_salsas`
--

INSERT INTO `agregados_salsas` (`id_agregado_salsa`, `nombre_agregado_salsa`, `precio_agregado_salsa`, `caracteristica_agregado_salsa`, `id_salsas`) VALUES
(1, 'Cremas', 2, 'Crema', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `id_bebida` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `caracteristicas` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`id_bebida`, `nombre`, `precio`, `caracteristicas`) VALUES
(1, 'Cocacola 600ml', 20, 'coca de 600 ml'),
(2, 'Sprite 2lt.', 30, 'Bebida refrescante'),
(3, 'Cocacola 2lt.', 30, 'Bebida refrescante'),
(4, 'Mundet 2lt', 35, 'Bebida refrescante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_orden`
--

CREATE TABLE `detalle_orden` (
  `id_detalle` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `complementos` text COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `detalle_orden`
--

INSERT INTO `detalle_orden` (`id_detalle`, `id_orden`, `nombre`, `complementos`, `cantidad`, `Total`) VALUES
(1, 11, 'hawaiana <br> $209', 'jamon <br> $5', '2', 428),
(2, 15, 'hawaiana <br> $209', 'No hay detalle', '1', 209),
(3, 17, 'hawaiana <br> $209', 'No hay detalle', '1', 209),
(4, 18, 'hawaiana <br> $209', 'No hay detalle', '3', 627),
(5, 18, 'hawaiana <br> $209', 'jamon <br> $5', '1', 214),
(6, 18, 'hawaiana <br> $209', 'jamon <br> $5', '1', 214),
(7, 18, 'hawaiana <br> $209', 'jamon <br> $5', '1', 214),
(9, 20, 'hawaiana <br> $209', 'No hay detalle', '1', 209),
(10, 20, 'hawaiana <br> $209', 'No hay detalle', '1', 209),
(11, 20, 'Peperoni <br> $209', 'No hay detalle', '1', 209),
(12, 21, 'Peperoni <br> $209', 'No hay detalle', '2', 418),
(13, 21, 'Cuatro quesos <br> $250', 'No hay detalle', '2', 500),
(14, 22, 'Peperoni <br> $209', 'No hay detalle', '2', 418),
(15, 22, 'Peperoni <br> $209', 'No hay detalle', '1', 209),
(16, 22, 'Pizza Griega <br> $220', 'No hay detalle', '2', 440),
(17, 22, 'Sprite 2lt. <br> $30', 'No hay detalle', '3', 90),
(18, 22, 'hawaiana <br> $209', 'jamon <br> $5', '2', 428),
(19, 22, 'Cocacola 2lt. <br> $30', 'No hay detalle', '2', 60),
(20, 23, 'Peperoni <br> $209', 'No hay detalle', '1', 209),
(21, 24, 'hawaiana <br> $209', 'jamon <br> $5', '1', 214),
(22, 25, 'hawaiana <br> $209', 'No hay detalle', '1', 209),
(23, 26, 'hawaiana <br> $209', 'No hay detalle', '1', 209),
(24, 27, 'hawaiana <br> $209', 'No hay detalle', '1', 209),
(25, 27, 'Peperoni <br> $209', 'No hay detalle', '2', 418),
(26, 28, 'hawaiana <br> $209', 'No hay detalle', '1', 209),
(27, 29, 'Sprite 2lt. <br> $30', 'No hay detalle', '1', 30),
(28, 29, 'hawaiana <br> $209', 'jamon <br> $5', '2', 428),
(29, 30, 'Peperoni <br> $209', 'No hay detalle', '2', 418),
(30, 30, 'Pay de Limon <br> $90', 'No hay detalle', '2', 180),
(31, 31, 'hawaiana <br> $209', 'jamon <br> $5', '3', 642),
(32, 31, 'Mundet 2lt <br> $30', 'No hay detalle', '2', 60),
(35, 31, 'Salsa estilo BBQ <br> $7', 'No hay detalle', '2', 14),
(36, 32, 'Pizza estilo Italiana <br> $230', 'No hay detalle', '2', 460),
(37, 33, 'Salsa habanera <br> $6', 'Cremas <br> $2', '2', 16),
(39, 34, 'Pastel de chocolate <br> $100', 'No hay detalle', '1', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `id_entrada` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `caracteristicas` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id_entrada`, `nombre`, `precio`, `caracteristicas`) VALUES
(1, 'Alitas picantes', 35, 'Piezas de pollo enchilado sin hueso'),
(2, 'Boneles', 35, 'Ricas piezas de pollo'),
(3, 'Pan pizza', 20, 'Ricas baritas de pan\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `id_orden` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `fecha_hora_solicitud` datetime NOT NULL,
  `fecha_hora_llegada` datetime NOT NULL,
  `estado` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`id_orden`, `nombre`, `telefono`, `direccion`, `total`, `fecha_hora_solicitud`, `fecha_hora_llegada`, `estado`) VALUES
(1, 'Arturo Hernandez', '5548796345', 'melchor ocampo', 800, '2020-12-04 10:25:00', '2020-12-04 11:00:00', 'iniciada'),
(2, 'Arturo', '55665', 'hola', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(3, 'mcfly', '5587', 'mlchor', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(4, 'mcfly', '5587', 'mlchor', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(5, 'mcfly', '5587', 'mlchor', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(6, 'ar', '54545', 'hola', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(7, 'Alex', '558879623', 'Huixqui', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(8, 'Steve', '8956478556', 'Zona', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(9, 'Hola', '888888', 'hola', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(10, 'Que hay', '7785469', 'Hola', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(11, 'Alex', '323232', 'melchos', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(12, 'Alex', '323232', 'melchos', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(13, 'Alex', '323232', 'melchos', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(14, 'Alex', '323232', 'melchos', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(15, 'alo', '8899', 'hola', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(16, 'Nico', '3325684', 'gato', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(17, 'nic', '89', 'hol', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(18, 'juan', '899956', 'huixquilucan', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(19, 'Miri', '88966722', 'puebla', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(20, 'miriam', '8977545', 'Piueblita', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(21, 'Alex', '55896256', 'la mancha', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(22, 'juan', '5584623', 'Huixqui', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(23, 'Arthur', '5568235', 'hola', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(24, 'Arthur', '55986325', 'Hola', 0, '2020-12-23 10:00:00', '2020-12-23 12:00:00', 'iniciada'),
(25, 'Nico', '55', 'Hola', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'iniciada'),
(26, 'Alejandro', '5588', '2020-12-23 10:00:00', 0, '2021-01-05 11:22:22', '2021-01-05 11:22:22', 'iniciada'),
(27, 'Aleja', '8899566', 'Hllo', 627, '2021-01-06 07:38:24', '2021-01-06 07:38:24', 'Confirmada'),
(28, 'Artur', '5589623', 'Hoal', 209, '2021-01-06 09:12:28', '2021-01-06 09:12:28', 'Confirmada'),
(29, 'Alej', '89956571', 'la mancha', 458, '2021-01-06 10:06:15', '2021-01-06 10:06:15', 'Confirmada'),
(30, 'Arthur', '5588963', 'Naucalpan', 598, '2021-01-07 05:53:20', '2021-01-07 05:53:20', 'Confirmada'),
(31, 'Tania Alvarado', '89568262', 'Ecatepec', 716, '2021-01-07 06:51:20', '2021-01-07 06:51:20', 'Confirmada'),
(32, 'Sky', '899566223', 'Zacatlan', 460, '2021-01-09 06:53:20', '2021-01-09 06:53:20', 'Confirmada'),
(33, 'Berta', '558879922', 'Xoxo', 0, '2021-01-09 00:00:00', '2021-01-09 00:00:00', 'iniciada'),
(34, 'Sindy', '5588789554', 'Xoxonacatla', 100, '2021-01-09 11:45:51', '2021-01-09 11:45:51', 'Confirmada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pizza`
--

CREATE TABLE `pizza` (
  `id_pizza` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `caracteristicas` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pizza`
--

INSERT INTO `pizza` (`id_pizza`, `nombre`, `precio`, `caracteristicas`) VALUES
(1, 'hawaiana', 209, 'Pizza al estilo hawaiano'),
(3, 'Peperoni', 209, 'pizza de peperoni'),
(4, 'Carnes frias', 250, 'Peperoni, Salami, Peperoni, Jamon, finas hierbas'),
(5, 'Cuatro quesos', 250, 'Queso mozzarella, queso crema, queso chedar, queso oaxca'),
(6, 'Pizza Italiana', 220, 'Pizza de pimientos con aceitunas y mucho queso'),
(7, 'Pizza Griega', 220, 'Queso gratinado, pimientos y mucho jitomate'),
(8, 'Pizza Caucasica', 220, 'Jamon con champiñones'),
(9, 'Pizza estilo Italiana', 230, 'Pizza hecha en piedra con especias carne queso y orilla de queso'),
(10, 'Pizza Mañanera', 230, 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.'),
(11, 'Pizza alta Mar', 230, 'Riza pizza con especias marinas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postres`
--

CREATE TABLE `postres` (
  `id_postre` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `caracteristicas` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `postres`
--

INSERT INTO `postres` (`id_postre`, `nombre`, `precio`, `caracteristicas`) VALUES
(1, 'Pastel de chocolate', 100, 'Rico chocolate y betun'),
(2, 'Pay de Limon', 90, 'Pay de limon con galletas'),
(3, 'Gelatina', 60, 'Rica gelatina multisabores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id_promociones` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `caracteristicas` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id_promociones`, `nombre`, `precio`, `caracteristicas`) VALUES
(1, 'Triple Box', 299, '2 pizzas Medianas Tradicionales 1-2 ING + Bastones de Cajeta, Papas Gajo y Bastones Bolognesa'),
(2, 'Paquete 4', 269, 'Gran hut 1 ingrediente + Quepapas + Refresco Familiar'),
(3, 'Paque-compartas', 250, '2 Pizzas medias con 2 refrescos 1 Boneles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salsas`
--

CREATE TABLE `salsas` (
  `id_salsas` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `caracteristicas` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `salsas`
--

INSERT INTO `salsas` (`id_salsas`, `nombre`, `precio`, `caracteristicas`) VALUES
(1, 'Salsa habanera', 6, 'Salsa de chiles abaneros'),
(2, 'Salsa estilo BBQ', 7, 'Salsa al estilo BBQ\r\n'),
(3, 'Salsa Inglesa', 7, 'Salsa al estilo ingles\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contrasenia_usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `no_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `contrasenia_usuario`, `no_empleado`) VALUES
(1, 'Artur', '123', 123),
(4, 'Alex', '123456', 9854),
(5, 'Juan', '7894', 8745),
(6, 'tere', '8956', 1),
(7, 'juan', '123', 123);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agregados_bebidas`
--
ALTER TABLE `agregados_bebidas`
  ADD PRIMARY KEY (`id_agregado_bebidas`),
  ADD KEY `id_bebidas` (`id_bebida`);

--
-- Indices de la tabla `agregados_entradas`
--
ALTER TABLE `agregados_entradas`
  ADD PRIMARY KEY (`id_agregado_entradas`),
  ADD KEY `id_entrada` (`id_entrada`);

--
-- Indices de la tabla `agregados_pizza`
--
ALTER TABLE `agregados_pizza`
  ADD PRIMARY KEY (`id_agregado_pizza`),
  ADD KEY `id_entrada` (`id_pizza`);

--
-- Indices de la tabla `agregados_postres`
--
ALTER TABLE `agregados_postres`
  ADD PRIMARY KEY (`id_agregado_postre`),
  ADD KEY `id_postre` (`id_postre`);

--
-- Indices de la tabla `agregados_promociones`
--
ALTER TABLE `agregados_promociones`
  ADD PRIMARY KEY (`id_agregado_promo`),
  ADD KEY `id_promociones` (`id_promociones`);

--
-- Indices de la tabla `agregados_salsas`
--
ALTER TABLE `agregados_salsas`
  ADD PRIMARY KEY (`id_agregado_salsa`),
  ADD KEY `id_salsa` (`id_salsas`);

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id_bebida`);

--
-- Indices de la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `id_orden` (`id_orden`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`id_entrada`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`id_orden`);

--
-- Indices de la tabla `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id_pizza`);

--
-- Indices de la tabla `postres`
--
ALTER TABLE `postres`
  ADD PRIMARY KEY (`id_postre`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id_promociones`);

--
-- Indices de la tabla `salsas`
--
ALTER TABLE `salsas`
  ADD PRIMARY KEY (`id_salsas`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agregados_bebidas`
--
ALTER TABLE `agregados_bebidas`
  MODIFY `id_agregado_bebidas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `agregados_entradas`
--
ALTER TABLE `agregados_entradas`
  MODIFY `id_agregado_entradas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `agregados_pizza`
--
ALTER TABLE `agregados_pizza`
  MODIFY `id_agregado_pizza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `agregados_postres`
--
ALTER TABLE `agregados_postres`
  MODIFY `id_agregado_postre` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `agregados_promociones`
--
ALTER TABLE `agregados_promociones`
  MODIFY `id_agregado_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `agregados_salsas`
--
ALTER TABLE `agregados_salsas`
  MODIFY `id_agregado_salsa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `id_bebida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id_entrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `id_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id_pizza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `postres`
--
ALTER TABLE `postres`
  MODIFY `id_postre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id_promociones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `salsas`
--
ALTER TABLE `salsas`
  MODIFY `id_salsas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agregados_bebidas`
--
ALTER TABLE `agregados_bebidas`
  ADD CONSTRAINT `agregados_bebidas_ibfk_1` FOREIGN KEY (`id_bebida`) REFERENCES `bebidas` (`id_bebida`);

--
-- Filtros para la tabla `agregados_entradas`
--
ALTER TABLE `agregados_entradas`
  ADD CONSTRAINT `agregados_entradas_ibfk_1` FOREIGN KEY (`id_entrada`) REFERENCES `entradas` (`id_entrada`);

--
-- Filtros para la tabla `agregados_pizza`
--
ALTER TABLE `agregados_pizza`
  ADD CONSTRAINT `agregados_pizza_ibfk_1` FOREIGN KEY (`id_pizza`) REFERENCES `pizza` (`id_pizza`);

--
-- Filtros para la tabla `agregados_postres`
--
ALTER TABLE `agregados_postres`
  ADD CONSTRAINT `agregados_postres_ibfk_1` FOREIGN KEY (`id_postre`) REFERENCES `postres` (`id_postre`);

--
-- Filtros para la tabla `agregados_promociones`
--
ALTER TABLE `agregados_promociones`
  ADD CONSTRAINT `agregados_promociones_ibfk_1` FOREIGN KEY (`id_promociones`) REFERENCES `promociones` (`id_promociones`);

--
-- Filtros para la tabla `agregados_salsas`
--
ALTER TABLE `agregados_salsas`
  ADD CONSTRAINT `agregados_salsas_ibfk_1` FOREIGN KEY (`id_salsas`) REFERENCES `salsas` (`id_salsas`);

--
-- Filtros para la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  ADD CONSTRAINT `detalle_orden_ibfk_1` FOREIGN KEY (`id_orden`) REFERENCES `ordenes` (`id_orden`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
