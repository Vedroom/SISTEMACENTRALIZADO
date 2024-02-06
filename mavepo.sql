-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-02-2024 a las 19:18:55
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

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
(2, 'admin', 'admin', 'admin', 'SLP', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `Falta_fac` date DEFAULT NULL,
  `Total_fac` decimal(10,2) DEFAULT NULL,
  `Cse_prod` varchar(50) DEFAULT NULL,
  `Cve_prod` varchar(50) DEFAULT NULL,
  `Valor_prod` decimal(10,2) DEFAULT NULL,
  `Cant_surt` int(11) DEFAULT NULL,
  `Cve_suc` varchar(50) DEFAULT NULL,
  `Desc_prod` varchar(255) DEFAULT NULL,
  `Cost_prom` decimal(10,2) DEFAULT NULL,
  `Lugar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_ref`
--

CREATE TABLE `ventas_ref` (
  `Falta_fac` date DEFAULT NULL,
  `Total_fac` decimal(10,2) DEFAULT NULL,
  `Cse_prod` varchar(50) DEFAULT NULL,
  `Cve_prod` varchar(50) DEFAULT NULL,
  `Valor_prod` decimal(10,2) DEFAULT NULL,
  `Cant_surt` int(11) DEFAULT NULL,
  `Cve_suc` varchar(50) DEFAULT NULL,
  `Desc_prod` varchar(255) DEFAULT NULL,
  `Cost_prom` decimal(10,2) DEFAULT NULL,
  `Lugar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rol` (`id_rol`);

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
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
