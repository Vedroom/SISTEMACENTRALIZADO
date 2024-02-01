-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2024 a las 21:51:16
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mavepo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `id_modelo` int(11) NOT NULL,
  `nombremodelo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`id_modelo`, `nombremodelo`) VALUES
(1, 'MF285'),
(2, 'MF1520'),
(3, 'MF240'),
(4, 'MF2605'),
(5, 'MF2615'),
(6, 'MF2625'),
(7, 'MF2655'),
(8, 'MF2665'),
(9, 'MF2670'),
(10, 'MF2685'),
(11, 'MF2690'),
(12, 'MF392'),
(13, 'MF4308N'),
(14, 'MF4309E'),
(15, 'MF4310E'),
(16, 'MF4708'),
(17, 'MF5710'),
(18, 'MF6711'),
(19, 'MF6712C'),
(20, 'MF6713C'),
(21, 'MF7615'),
(22, '7610T'),
(23, 'JX95'),
(24, 'MF2630');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Lectura'),
(3, 'Usuario Regular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serie`
--

CREATE TABLE `serie` (
  `id_serie` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `id_modelo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `serie`
--

INSERT INTO `serie` (`id_serie`, `nombre`, `id_modelo`) VALUES
(1, 'TRACTOR MF285 ASP NAT 8X2 TDF DEP', 1),
(2, 'MF285T-4WD-GT/ST', 1),
(3, 'TOLDO 285 ', 1),
(4, 'TRACTOR MF 285 4WD GT ASP NAT 8X2', 1),
(5, 'TRACTOR MF285 2WD APS NAT 8X2', 1),
(6, 'TRACTOR MF285 2WD ASP NAT 8X2 DEP', 1),
(7, 'TRACTOR MF285-2WD-MT', 1),
(8, 'MF285T-2WD-STD/ST', 1),
(9, 'MF285T-2WD-STD2/ST', 1),
(10, 'MF285-2WD-MT/ST', 1),
(11, 'TRACTOR MF285-2WD', 1),
(12, 'MF285-4WD-H3/ST', 1),
(13, 'TRACTOR MF285-2WD-MT2', 1),
(14, 'TRACTOR MF285TA 4WD TURBO', 1),
(15, 'TRACTOR MF 285T 2WD TURBO INTERCOOLER', 1),
(16, 'TRACTOR MF285 2WD APS NAT', 1),
(17, 'TRACTOR MF285 2WD', 1),
(18, 'MF285-2WD-GT2/ST', 1),
(19, 'MF285T-4WD-STD/ST', 1),
(20, 'MF285-2WD-AD/ST', 1),
(21, 'MF285TA-4WD-GT/ST', 1),
(22, 'MF285TA-4WD-GT/ST ', 1),
(23, 'MF285T-2WD-MT2/ST', 1),
(24, 'TRACTOR MF285-4WD-AD', 1),
(25, 'MF285T-4WD-H2', 1),
(26, 'MF285-4WD-GT/ST', 1),
(27, 'TRACTOR MF285T 4WD  TURBO INTERCOOLER', 1),
(28, 'TRAC. MF285XTRA2WD ASP.NATURAL TRANS.8x', 1),
(29, 'MF285-4WD-STD/ST', 1),
(30, 'TRACTOR MF285 4WD STD', 1),
(31, 'TRACTOR MF285 4WD-STD2/ST', 1),
(32, 'MF285TA-4WD-STD', 1),
(33, 'MF285T-4WD-AD/ST', 1),
(34, 'TRACTOR MF285T 4WD TURBO INTERCOOLER', 1),
(35, 'MF285T-2WD-GT2/ST', 1),
(36, 'TRACTOR MF1520 4WD', 2),
(37, 'TRACTOR MF240-2WD-STD', 3),
(38, 'TRACTOR MF2605-2WD-STD2', 4),
(39, 'MF2615-4WD-STD/ST', 5),
(40, 'MF2625-2WD-AD', 6),
(41, 'TRACTOR MD2625 4WD STD2', 6),
(42, 'MF2625-2WD-STD/ST', 6),
(43, 'MF2625-2WD-STD2/ST', 6),
(44, 'TRACTOR MF2655 2WD TURBOCARGADO', 7),
(45, 'MF2655-4WD-STD1/ST', 7),
(46, 'TRACTOR MF2655 4WD STD1 ', 7),
(47, 'TRACTOR MF2655 4WD TURBOCARGADO', 7),
(48, 'MF2655-4WD-AD', 7),
(49, 'MF2655-4WD-STD2/ST', 7),
(50, 'TRACTOR MF 2665E 2WD ASP', 8),
(51, 'TRACTOR MF2665E-2WD-STD2', 8),
(52, 'TRACTOR MF2670E 4WD TURBO TRANS 8X2', 9),
(53, 'TRACTOR MF2670E-4WD-STD', 9),
(54, 'TRACTOR MF 2670E 4WD TURBO', 9),
(55, 'TRACTOR MF2685-4WD CAB', 10),
(56, 'TRACTOR MF2685-4WD STD', 10),
(57, 'TRACTOR MF2690C-4WD CABINADO', 11),
(58, 'TRACTOR MF2690-4WD-AT2', 11),
(59, 'TRACTOR MF 2690 4WD STD', 11),
(60, 'TRACTOR MF392 TURBO', 12),
(61, 'TRACTOR MF4308N-4WD-STD-CR', 13),
(62, 'MF4309E-4WD-STD', 14),
(63, 'MF4309E-4WD-GT', 14),
(64, 'MF4310E-4WD-GT', 15),
(65, 'TRACTOR MF4708-4WD MS', 16),
(66, 'MF4708-4WD-AD/PS', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id` int(99) NOT NULL,
  `nombreSolicitud` varchar(99) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `responsable` varchar(99) NOT NULL,
  `fecha` varchar(99) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `presupuesto` int(99) NOT NULL,
  `prioridad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`id`, `nombreSolicitud`, `descripcion`, `responsable`, `fecha`, `estado`, `presupuesto`, `prioridad`) VALUES
(1, 'Cotización pc', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'Luis', '25/01/2024', 'En curso', 1200, 'Media'),
(2, 'Papeleria', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'Juan', '25/01/2024', 'Detenido', 5000, 'Alta'),
(3, 'piezas', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'Juan', '24/01/2024', 'Listo', 500, 'Baja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `sucursal` varchar(255) NOT NULL,
  `id_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`, `nombre`, `sucursal`, `id_rol`) VALUES
(1, 'Sistemas', 'Mavepo217', 'Sistemas', 'SLP', 1),
(2, 'admin', 'admin', 'admin', 'SLP', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_serie` int(11) NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id_modelo`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`id_serie`),
  ADD KEY `fk_id_modelo` (`id_modelo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `ventas_serie` (`id_serie`),
  ADD KEY `ventas_modelo` (`id_modelo`),
  ADD KEY `ventas_usuarios` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `serie`
--
ALTER TABLE `serie`
  ADD CONSTRAINT `fk_id_modelo` FOREIGN KEY (`id_modelo`) REFERENCES `modelo` (`id_modelo`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_modelo` FOREIGN KEY (`id_modelo`) REFERENCES `modelo` (`id_modelo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ventas_serie` FOREIGN KEY (`id_serie`) REFERENCES `serie` (`id_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ventas_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
