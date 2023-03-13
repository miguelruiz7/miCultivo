-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-03-2023 a las 19:49:09
-- Versión del servidor: 10.5.16-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id20418318_intranet_`
--
DROP DATABASE IF EXISTS sistemas_;
CREATE DATABASE sistemas_;
USE sistemas_;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id_bitacora` int(11) NOT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `lugar` varchar(49) DEFAULT NULL,
  `desarollo` varchar(900) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calculo`
--

CREATE TABLE `calculo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(90) NOT NULL,
  `tipo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `calculo`
--

INSERT INTO `calculo` (`id`, `nombre`, `descripcion`, `unidades`, `tipo_id`) VALUES
(1, 'Densidad de siembra (Granos)', '', '0', 1),
(2, 'Densidad de siembra (Forraje)', '', '0', 2),
(3, 'Dosis agroquimicos', '', '0', 99),
(4, 'Rendimiento aproximado', '', '0', 1),
(5, 'Tasa de aplicación de fertilizantes', '', '0', 99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivo`
--

CREATE TABLE `cultivo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `ubicacion` varchar(300) NOT NULL,
  `inicio` date NOT NULL,
  `final` date NOT NULL,
  `descripcion` varchar(2000) NOT NULL,
  `area` double NOT NULL,
  `rendimiento` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE `plan` (
  `id_plan` int(11) NOT NULL,
  `nombre_plan` varchar(50) NOT NULL,
  `descripcion_p` longtext NOT NULL,
  `recurso_hum` int(11) NOT NULL,
  `recurso_econ` float NOT NULL,
  `recurso_mat` varchar(856) NOT NULL,
  `inicio_plan` date NOT NULL,
  `final_plan` date NOT NULL,
  `completado` int(11) NOT NULL,
  `cultivo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Disparadores `plan`
--
DELIMITER $$
CREATE TRIGGER `eliminar_bits` BEFORE DELETE ON `plan` FOR EACH ROW BEGIN
    DELETE FROM bitacora WHERE plan_id = OLD.id_plan;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

CREATE TABLE `resultado` (
  `id_resultado` int(11) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `cultivo_id` int(11) DEFAULT NULL,
  `calculo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_c` int(11) NOT NULL,
  `nombre_c` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_c`, `nombre_c`) VALUES
(1, 'Granos'),
(2, 'Forraje'),
(99, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(300) NOT NULL,
  `usuario` varchar(35) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `contrasena` varchar(90) NOT NULL,
  `rol` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `usuario`, `correo`, `contrasena`, `rol`) VALUES
('Miguel Ruiz Zamora', 'migrzam7', 'miguelruizzamora7@gmail.com', '$2y$10$zj.pSoM9V/.7FGSq4BAzauhsJ12sYYvqDBC0GuOthjvt22kkNhfrS', 'usuario'),
('Sarai Mendoza Martín', 'sara', 'sarai@gmail.com', '$2y$10$1Y.BbF30wdiI6ODWdWcI0erVHHsmqgNoRFw61gQqxWJm/N08sMOYq', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id_bitacora`),
  ADD KEY `plan_id` (`plan_id`);

--
-- Indices de la tabla `calculo`
--
ALTER TABLE `calculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_id` (`tipo_id`);

--
-- Indices de la tabla `cultivo`
--
ALTER TABLE `cultivo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_id` (`tipo_id`);

--
-- Indices de la tabla `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id_plan`),
  ADD KEY `cultivo_id` (`cultivo_id`);

--
-- Indices de la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`id_resultado`),
  ADD KEY `cultivo_id` (`cultivo_id`),
  ADD KEY `calculo_id` (`calculo_id`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_c`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_bitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `cultivo`
--
ALTER TABLE `cultivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT de la tabla `plan`
--
ALTER TABLE `plan`
  MODIFY `id_plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `resultado`
--
ALTER TABLE `resultado`
  MODIFY `id_resultado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `bitacora_ibfk_2` FOREIGN KEY (`plan_id`) REFERENCES `plan` (`id_plan`);

--
-- Filtros para la tabla `calculo`
--
ALTER TABLE `calculo`
  ADD CONSTRAINT `calculo_ibfk_1` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id_c`);

--
-- Filtros para la tabla `cultivo`
--
ALTER TABLE `cultivo`
  ADD CONSTRAINT `cultivo_ibfk_1` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id_c`);

--
-- Filtros para la tabla `plan`
--
ALTER TABLE `plan`
  ADD CONSTRAINT `plan_ibfk_1` FOREIGN KEY (`cultivo_id`) REFERENCES `cultivo` (`id`);

--
-- Filtros para la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD CONSTRAINT `resultado_ibfk_1` FOREIGN KEY (`cultivo_id`) REFERENCES `cultivo` (`id`),
  ADD CONSTRAINT `resultado_ibfk_2` FOREIGN KEY (`calculo_id`) REFERENCES `calculo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
