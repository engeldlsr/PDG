-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2022 a las 16:31:32
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_pdg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `txn_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `currency_code` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `payer_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `product_id`, `txn_id`, `currency_code`, `payer_email`, `payment_status`) VALUES
(1, 1, 2, '8J3275183G1358733', 'USD', 'webhostrd-buyer@gmail.com', 'Completed');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_carrito`
--

CREATE TABLE `tbl_carrito` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria`
--

CREATE TABLE `tbl_categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `Sub_Categoria` int(11) DEFAULT NULL,
  `display` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_categoria`
--

INSERT INTO `tbl_categoria` (`id`, `nombre`, `Sub_Categoria`, `display`) VALUES
(10, 'Guitarras', NULL, '1'),
(11, 'Microfonos', NULL, '1'),
(12, 'Bocinas', NULL, '1'),
(13, 'Amplificadores', NULL, '1'),
(14, 'Luces', NULL, '1'),
(15, 'Equipos de sonido', NULL, '0'),
(16, 'Percusión ', NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cliente`
--

CREATE TABLE `tbl_cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(85) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `telefono` varchar(15) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_cliente`
--

INSERT INTO `tbl_cliente` (`id`, `nombre`, `apellidos`, `direccion`, `ciudad`, `telefono`, `cedula`, `email`, `password`) VALUES
(3, 'Maria', 'Garcia', '', NULL, '809 123 3456', '', 'correo@hotmail.com', '123456'),
(4, 'Jose', 'Reyes', 'Av. Martin Luther King Jr.', 'Santo Domingo', '8094484969', 'qweqqweqwe', 'yensioficial@gmail.com', '123456'),
(6, 'Pedro', 'Perez', 'Casa de pedro', NULL, '8094484966', '00000000001', 'pedrop@gmail.com', '12345678'),
(7, 'Petronila', 'Taveras ', 'Casa de petronila', NULL, '8290013322', '00000000002', 'petronila@yahoo.com', '12345678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_detalle`
--

CREATE TABLE `tbl_detalle` (
  `id_detalle` int(11) NOT NULL,
  `id_factura` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estadocompra`
--

CREATE TABLE `tbl_estadocompra` (
  `id` int(11) NOT NULL,
  `factura_id` int(11) NOT NULL,
  `estado` set('Despachado','Pendiente','Cancelado') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_estadocompra`
--

INSERT INTO `tbl_estadocompra` (`id`, `factura_id`, `estado`) VALUES
(1, 8, 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_factura`
--

CREATE TABLE `tbl_factura` (
  `id_factura` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `comentario` text NOT NULL,
  `metodo_pago` set('PayPal','Tarjeta de Crédito','Efectivo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_factura`
--

INSERT INTO `tbl_factura` (`id_factura`, `id_cliente`, `fecha`, `comentario`, `metodo_pago`) VALUES
(7, 3, '2022-07-25 00:54:03', '', 'PayPal'),
(8, 3, '2022-07-18 01:30:55', 'Por favor realizar la entrega en horario de la tarde, después de las 4:30 pm y antes de las 7:00 pm', 'Efectivo'),
(9, 3, '2022-07-22 01:33:17', '', 'Efectivo'),
(10, 3, '2022-07-21 01:34:27', '', 'PayPal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_fotoproducto`
--

CREATE TABLE `tbl_fotoproducto` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_modo_pago`
--

CREATE TABLE `tbl_modo_pago` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `otros_detalles` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_producto`
--

CREATE TABLE `tbl_producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `precio` varchar(25) NOT NULL,
  `descripcion` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_subCategoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_producto`
--

INSERT INTO `tbl_producto` (`id_producto`, `nombre`, `precio`, `descripcion`, `foto`, `stock`, `id_categoria`, `id_subCategoria`) VALUES
(29, 'Guitarra Yamaha', '3500', '<p>Hermosa guitarra Yamaha electro acustica</p>\r\n', '20220806-guitarra-yamaha.jpg', 10, 10, NULL),
(30, 'Microfono Rode NT1-A', '12500', '<p>Microfono para estudio profesional</p>\r\n', '20220806-rode-nt1a.jpg', 10, 11, NULL),
(31, 'Micrófono Shure SM-58 ', '5700', '<p>Microfono dinamico Shure sm 58</p>\r\n', '20220806-shure-sm-58.jpg', 10, 11, NULL),
(32, 'Bafle TMZ', '15000', '<p>Bafle TMZ de 15 pulgas super potente</p>\r\n', '20220806-20220805-tmz.jpg', 5, 12, NULL),
(33, 'Amplificador Cobalc', '3700', '<p>Amplificador cobalc de <strong>1000 w</strong> para que rompras los cristales de tu vehiculo.&nbsp;</p>\r\n', '20220806-amp.jpg', 3, 13, NULL),
(34, 'Luces Led', '1200', '<p>Luces led para darle ambiente a tus fiestas.</p>\r\n', '20220806-luces-led.jpg', 25, 14, NULL),
(35, 'Subwoofer Yamaha', '25000', '<p>Subwoofer Yamaha activo de 15 pulgadas super potente</p>\r\n', '20220806-SUBWOOFER.jpg', 5, 15, NULL),
(36, 'Guitarra Fender', '8700', '<p><strong>Guitarra Fender electro acustica.&nbsp;</strong>Sin duda, el broche de oro perfecto para estas guitarras el&eacute;ctricas es su aspecto exterior: siguiendo la l&iacute;nea ic&oacute;nica de la marca (donde la artesan&iacute;a y la calidad destacan por encima de lo dem&aacute;s), pero con nuevos y relucientes acabados que hacen ver que no estamos ante un instrumento normal y corriente.</p>\r\n', '20220806-guitarra-fender.jpg', 4, 10, NULL),
(37, 'Guitarra Ibanez', '11500', '<p>Guitarra Ibanez&nbsp;</p>\r\n', '20220806-guitarra-ibanez.jpg', 6, 10, NULL),
(38, 'Congas premium LP', '9500', '<p>Congas premium LP</p>\r\n', '20220806-product06.png', 3, 16, NULL),
(40, 'Conga Quinto', '18999', '<p>Juego de 3 congas Meinl Serie <strong>MARATHON&reg; designer</strong> QUINTO de 11&quot; conga de 11 3/4&quot; Tumba de 12 1/2&quot; pulgadas</p>\r\n', '20220806-conga-quinto.jpg', 9, 16, NULL),
(41, 'Tambora RD', '8990', '<p>Tambora latina</p>\r\n', '20220806-tambora.jpg', 2, 16, NULL),
(42, 'Bongo natural', '7500', '<p>Bounce Standard Natural Bongo &middot; Bongos</p>\r\n', '20220806-bongo.jpg', 15, 16, NULL),
(44, 'Bombilla led', '850', '<p>Bombilla led multi-color</p>\r\n', '20220806-bombilla-led.jpg', 25, 14, NULL),
(45, 'Tiras led', '750', '<p>Tiras led multi-color</p>\r\n', '20220806-tiras-led.jpg', 8, 14, NULL),
(46, 'Bocinas Voyz', '11500', '<p>Bocinas Voyz de 650 W activas</p>\r\n', '20220806-voyz.jpg', 9, 12, NULL),
(47, 'Amplificador Boss', '4500', '<p>Amplificador <strong>Boss de 1600 W, </strong>4 canales.&nbsp;</p>\r\n', '20220806-boss.jpg', 5, 13, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proveedores`
--

CREATE TABLE `tbl_proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_proveedores`
--

INSERT INTO `tbl_proveedores` (`id`, `nombre`, `telefono`, `email`, `direccion`) VALUES
(7, 'WEB HOST RD', '8094484969', 'engeldlsr@gmail.com', 'Av. Martin Luther King Jr.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sub_categoria`
--

CREATE TABLE `tbl_sub_categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `user_login` varchar(60) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(80) NOT NULL,
  `direccion` varchar(120) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `imagen` varchar(120) DEFAULT NULL,
  `rol` enum('administrador','vendedor','usuario') NOT NULL,
  `user_registered` datetime NOT NULL,
  `visible` enum('si','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user_login`, `user_password`, `nombre`, `apellido`, `direccion`, `email`, `telefono`, `imagen`, `rol`, `user_registered`, `visible`) VALUES
(1, 'Engel', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Engel', 'De Los Santos Reyes', 'Av. Martin Luther King Jr.', 'engeldlsr@gmail.com', '8094484969', '20220806-perfil.jpg', 'administrador', '2022-08-06 01:51:04', 'si'),
(2, 'juanjr', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Juan Jesús ', 'Ramírez Hernández', 'Casa de Juan ', 'correo@gmail.com', '8099011010', '20220806-', 'administrador', '2022-08-06 01:56:15', 'si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_carrito`
--
ALTER TABLE `tbl_carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Sub_Categoria` (`Sub_Categoria`),
  ADD KEY `Sub_Categoria_2` (`Sub_Categoria`);

--
-- Indices de la tabla `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `tbl_detalle`
--
ALTER TABLE `tbl_detalle`
  ADD PRIMARY KEY (`id_detalle`),
  ADD UNIQUE KEY `id_factura` (`id_factura`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `tbl_estadocompra`
--
ALTER TABLE `tbl_estadocompra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_factura` (`factura_id`);

--
-- Indices de la tabla `tbl_factura`
--
ALTER TABLE `tbl_factura`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `tbl_fotoproducto`
--
ALTER TABLE `tbl_fotoproducto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `tbl_modo_pago`
--
ALTER TABLE `tbl_modo_pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_producto`
--
ALTER TABLE `tbl_producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_subCategoria` (`id_subCategoria`);

--
-- Indices de la tabla `tbl_proveedores`
--
ALTER TABLE `tbl_proveedores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telefono` (`telefono`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `tbl_sub_categoria`
--
ALTER TABLE `tbl_sub_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telefono` (`telefono`),
  ADD UNIQUE KEY `user_login` (`user_login`,`email`,`telefono`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_carrito`
--
ALTER TABLE `tbl_carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_detalle`
--
ALTER TABLE `tbl_detalle`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_estadocompra`
--
ALTER TABLE `tbl_estadocompra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_factura`
--
ALTER TABLE `tbl_factura`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tbl_fotoproducto`
--
ALTER TABLE `tbl_fotoproducto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_modo_pago`
--
ALTER TABLE `tbl_modo_pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_producto`
--
ALTER TABLE `tbl_producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `tbl_proveedores`
--
ALTER TABLE `tbl_proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_sub_categoria`
--
ALTER TABLE `tbl_sub_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD CONSTRAINT `tbl_categoria_ibfk_1` FOREIGN KEY (`Sub_Categoria`) REFERENCES `tbl_sub_categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_detalle`
--
ALTER TABLE `tbl_detalle`
  ADD CONSTRAINT `tbl_detalle_ibfk_1` FOREIGN KEY (`id_factura`) REFERENCES `tbl_factura` (`id_factura`),
  ADD CONSTRAINT `tbl_detalle_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `tbl_producto` (`id_producto`);

--
-- Filtros para la tabla `tbl_estadocompra`
--
ALTER TABLE `tbl_estadocompra`
  ADD CONSTRAINT `tbl_estadocompra_ibfk_1` FOREIGN KEY (`factura_id`) REFERENCES `tbl_factura` (`id_factura`);

--
-- Filtros para la tabla `tbl_factura`
--
ALTER TABLE `tbl_factura`
  ADD CONSTRAINT `tbl_factura_ibfk_4` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_cliente` (`id`);

--
-- Filtros para la tabla `tbl_fotoproducto`
--
ALTER TABLE `tbl_fotoproducto`
  ADD CONSTRAINT `tbl_fotoproducto_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `tbl_producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_producto`
--
ALTER TABLE `tbl_producto`
  ADD CONSTRAINT `tbl_producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `tbl_categoria` (`id`),
  ADD CONSTRAINT `tbl_producto_ibfk_2` FOREIGN KEY (`id_subCategoria`) REFERENCES `tbl_sub_categoria` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
