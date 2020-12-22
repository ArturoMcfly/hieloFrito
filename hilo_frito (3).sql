-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-12-2020 a las 01:25:25
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
  `id_aregado_bebidas` int(11) NOT NULL,
  `nombre_agregado_bebida` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio_agregado_bebida` int(11) NOT NULL,
  `caracteristica_agregado_bebida` text COLLATE utf8_unicode_ci NOT NULL,
  `id_bebidas` int(11) NOT NULL
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agregados_pizza`
--

CREATE TABLE `agregados_pizza` (
  `id_agregado_pizza` int(11) NOT NULL,
  `nombre_agregado_pizza` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio_agregado_pizza` int(11) NOT NULL,
  `caracterisitcas_agregado_pizza` text COLLATE utf8_unicode_ci NOT NULL,
  `id_entrada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `agregados_pizza`
--

INSERT INTO `agregados_pizza` (`id_agregado_pizza`, `nombre_agregado_pizza`, `precio_agregado_pizza`, `caracterisitcas_agregado_pizza`, `id_entrada`) VALUES
(1, 'jamon', 5, 'rico jamon de pavo', 1),
(2, 'Queso extra', 30, '¿deseas agregar Extra Queso?', 2),
(3, 'Costra de Queso', 49, '¿Deseas Agregar Costra de Queso?', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agregados_postres`
--

CREATE TABLE `agregados_postres` (
  `id_agregado_postre` int(11) NOT NULL,
  `nombre_agregado_postre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio_agregado_postre` int(11) NOT NULL,
  `caracteristica_agregado_salsa_postre` text COLLATE utf8_unicode_ci NOT NULL,
  `id_postre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agregados_promociones`
--

CREATE TABLE `agregados_promociones` (
  `id_aregado_promo` int(11) NOT NULL,
  `nombre_agregado_promo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio_agregado_promo` int(11) NOT NULL,
  `caracteristicas_agregado_promo` text COLLATE utf8_unicode_ci NOT NULL,
  `id_promociones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `agregados_promociones`
--

INSERT INTO `agregados_promociones` (`id_aregado_promo`, `nombre_agregado_promo`, `precio_agregado_promo`, `caracteristicas_agregado_promo`, `id_promociones`) VALUES
(2, 'Coca Cola Regular ', 0, '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agregados_salsas`
--

CREATE TABLE `agregados_salsas` (
  `id_agregado_salsa` int(11) NOT NULL,
  `nombre_agregado_salsa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio_agregado_salsa` int(11) NOT NULL,
  `caracteristica_agregado_salsa` text COLLATE utf8_unicode_ci NOT NULL,
  `id_salsa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, 'Cocacola 600ml', 20, 'coca de 600 ml');

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
(1, 'Arturo Hernandez', '5548796345', 'melchor ocampo', 800, '2020-12-04 10:25:00', '2020-12-04 11:00:00', 'edo de mex');

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
(1, 'hawaiana', 209, 'mediana'),
(2, 'Hawaiana', 209, 'Jamon y piña'),
(3, 'Peperoni', 209, 'pizza de peperoni');

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
(2, 'Paquete 4', 269, 'Gran hut 1 ingrediente + Quepapas + Refresco Familiar');

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
  ADD PRIMARY KEY (`id_aregado_bebidas`),
  ADD KEY `id_bebidas` (`id_bebidas`);

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
  ADD KEY `id_entrada` (`id_entrada`);

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
  ADD PRIMARY KEY (`id_aregado_promo`),
  ADD KEY `id_promociones` (`id_promociones`);

--
-- Indices de la tabla `agregados_salsas`
--
ALTER TABLE `agregados_salsas`
  ADD PRIMARY KEY (`id_agregado_salsa`),
  ADD KEY `id_salsa` (`id_salsa`);

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
  MODIFY `id_aregado_bebidas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `agregados_entradas`
--
ALTER TABLE `agregados_entradas`
  MODIFY `id_agregado_entradas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `agregados_pizza`
--
ALTER TABLE `agregados_pizza`
  MODIFY `id_agregado_pizza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `agregados_postres`
--
ALTER TABLE `agregados_postres`
  MODIFY `id_agregado_postre` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `agregados_promociones`
--
ALTER TABLE `agregados_promociones`
  MODIFY `id_aregado_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `agregados_salsas`
--
ALTER TABLE `agregados_salsas`
  MODIFY `id_agregado_salsa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `id_bebida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id_entrada` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `id_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id_pizza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `postres`
--
ALTER TABLE `postres`
  MODIFY `id_postre` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id_promociones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `salsas`
--
ALTER TABLE `salsas`
  MODIFY `id_salsas` int(11) NOT NULL AUTO_INCREMENT;
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
  ADD CONSTRAINT `agregados_bebidas_ibfk_1` FOREIGN KEY (`id_bebidas`) REFERENCES `bebidas` (`id_bebida`);

--
-- Filtros para la tabla `agregados_entradas`
--
ALTER TABLE `agregados_entradas`
  ADD CONSTRAINT `agregados_entradas_ibfk_1` FOREIGN KEY (`id_entrada`) REFERENCES `entradas` (`id_entrada`);

--
-- Filtros para la tabla `agregados_pizza`
--
ALTER TABLE `agregados_pizza`
  ADD CONSTRAINT `agregados_pizza_ibfk_1` FOREIGN KEY (`id_entrada`) REFERENCES `pizza` (`id_pizza`);

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
  ADD CONSTRAINT `agregados_salsas_ibfk_1` FOREIGN KEY (`id_salsa`) REFERENCES `salsas` (`id_salsas`);

--
-- Filtros para la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  ADD CONSTRAINT `detalle_orden_ibfk_1` FOREIGN KEY (`id_orden`) REFERENCES `ordenes` (`id_orden`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
