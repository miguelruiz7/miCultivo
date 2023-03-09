-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-03-2023 a las 21:45:51
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemas_`
--
DROP DATABASE IF EXISTS `sistemas_`;
CREATE DATABASE `sistemas_`;
USE `sistemas_`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

DROP TABLE IF EXISTS `bitacora`;
CREATE TABLE IF NOT EXISTS `bitacora` (
  `id_bitacora` int NOT NULL AUTO_INCREMENT,
  `plan_id` int DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `lugar` varchar(49) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `desarollo` varchar(900) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_bitacora`),
  KEY `plan_id` (`plan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calculo`
--

DROP TABLE IF EXISTS `calculo`;
CREATE TABLE IF NOT EXISTS `calculo` (
  `id` int NOT NULL,
  `nombre` varchar(90) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `unidades` varchar(300) NOT NULL,
  `tipo_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tipo_id` (`tipo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `calculo`
--

INSERT INTO `calculo` (`id`, `nombre`, `descripcion`, `unidades`, `tipo_id`) VALUES
(1, 'Densidad de siembra (Granos)', '', '0', 1),
(2, 'Densidad de siembra (Forraje)', '', '0', 2),
(3, 'Dosis agroquimicos', '', '0', 99),
(4, 'Rendimiento aproximado', '', '0', 1);
(5, 'Tasa de aplicación de fertilizantes', '', '0', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivo`
--

DROP TABLE IF EXISTS `cultivo`;
CREATE TABLE IF NOT EXISTS `cultivo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `tipo_id` int NOT NULL,
  `ubicacion` varchar(300) NOT NULL,
  `inicio` date NOT NULL,
  `final` date NOT NULL,
  `descripcion` varchar(2000) NOT NULL,
  `area` double NOT NULL,
  `rendimiento` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tipo_id` (`tipo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=226 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cultivo`
--

INSERT INTO `cultivo` (`id`, `nombre`, `tipo_id`, `ubicacion`, `inicio`, `final`, `descripcion`, `area`, `rendimiento`) VALUES
(215, 'Maiz (Miguel Ruiz Zamora)', 1, 'Yolotepec, Hidalgo', '2023-02-03', '2023-03-07', 'Propiedad de la Universidad Tecnológica del Valle del Mezquital.', 2.12, 12);
(216, 'Avena (Miguel Ruiz Zamora)', 2, 'Yolotepec, Hidalgo', '2023-02-03', '2023-03-07', 'Propiedad de la Universidad Tecnológica del Valle del Mezquital.', 2.12, 12);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

DROP TABLE IF EXISTS `plan`;
CREATE TABLE IF NOT EXISTS `plan` (
  `id_plan` int NOT NULL AUTO_INCREMENT,
  `nombre_plan` varchar(50) NOT NULL,
  `descripcion_p` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `recurso_hum` int NOT NULL,
  `recurso_econ` float NOT NULL,
  `recurso_mat` varchar(856) NOT NULL,
  `inicio_plan` date NOT NULL,
  `final_plan` date NOT NULL,
  `completado` int NOT NULL,
  `cultivo_id` int NOT NULL,
  PRIMARY KEY (`id_plan`),
  KEY `cultivo_id` (`cultivo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`id_plan`, `nombre_plan`, `descripcion_p`, `recurso_hum`, `recurso_econ`, `recurso_mat`, `inicio_plan`, `final_plan`, `completado`, `cultivo_id`) VALUES
(26, 'Siembra', 'Propiedad de la Universidad Tecnológica del Valle del Mezquital.', 10, 1200, 'Mi mano', '2023-03-07', '2023-03-23', 0, 215),
(30, 'Aplicación de aqroquímico', 'Se aplicará a el gusano cogollero.', 4, 1000, 'Aspersoras, Carbofuran 3000, 400 de Agua', '2023-03-22', '2023-03-30', 0, 215),
(32, 'Regar', 'descripción de riego', 8, 9, '1111ss', '2023-03-08', '2023-03-09', 0, 215);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

DROP TABLE IF EXISTS `resultado`;
CREATE TABLE IF NOT EXISTS `resultado` (
  `id_resultado` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cultivo_id` int DEFAULT NULL,
  `calculo_id` int NOT NULL,
  PRIMARY KEY (`id_resultado`),
  KEY `cultivo_id` (`cultivo_id`),
  KEY `calculo_id` (`calculo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `resultado`
--

INSERT INTO `resultado` (`id_resultado`, `descripcion`, `cultivo_id`, `calculo_id`) VALUES
(8, '11.4', 215, 1),
(9, '11.4', 215, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

DROP TABLE IF EXISTS `tipo`;
CREATE TABLE IF NOT EXISTS `tipo` (
  `id_c` int NOT NULL,
  `nombre_c` varchar(34) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_c`, `nombre_c`) VALUES
(1, 'Granos'),
(2, 'Forraje'),
(99, 'Otro');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `bitacora_ibfk_2` FOREIGN KEY (`plan_id`) REFERENCES `plan` (`id_plan`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `calculo`
--
ALTER TABLE `calculo`
  ADD CONSTRAINT `calculo_ibfk_1` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id_c`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `cultivo`
--
ALTER TABLE `cultivo`
  ADD CONSTRAINT `cultivo_ibfk_1` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id_c`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `plan`
--
ALTER TABLE `plan`
  ADD CONSTRAINT `plan_ibfk_1` FOREIGN KEY (`cultivo_id`) REFERENCES `cultivo` (`id`);

--
-- Filtros para la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD CONSTRAINT `resultado_ibfk_1` FOREIGN KEY (`cultivo_id`) REFERENCES `cultivo` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `resultado_ibfk_2` FOREIGN KEY (`calculo_id`) REFERENCES `calculo` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
