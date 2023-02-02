-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-02-2023 a las 11:47:18
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
CREATE DATABASE sistemas_;
USE sistemas_;
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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id_bitacora`, `plan_id`, `fecha`, `lugar`, `desarollo`) VALUES
(39, 20, '2023-02-02 05:04:34', 'Yolotepec, Hidalgo', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.');

--
-- Disparadores `bitacora`
--
DROP TRIGGER IF EXISTS `cultivo_bitacora_ins`;
DELIMITER $$
CREATE TRIGGER `cultivo_bitacora_ins` AFTER INSERT ON `bitacora` FOR EACH ROW BEGIN
  DECLARE var_id INT;
  SELECT cultivo_id INTO var_id FROM plan WHERE id_plan = NEW.plan_id;
  INSERT INTO cultivo_bitacora (cultivo_id, bitacora_id) VALUES (var_id, NEW.id_bitacora);
END
$$
DELIMITER ;

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
) ENGINE=InnoDB AUTO_INCREMENT=215 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cultivo`
--

INSERT INTO `cultivo` (`id`, `nombre`, `tipo_id`, `ubicacion`, `inicio`, `final`, `descripcion`, `area`, `rendimiento`) VALUES
(214, 'Maiz (Miguel Ruiz Zamora)', 1, 'Julian Villagran', '2023-02-02', '2023-02-12', 'Propiedad de la Universidad Tecnológica del Valle del Mezquital.', 12, 10.9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivo_bitacora`
--

DROP TABLE IF EXISTS `cultivo_bitacora`;
CREATE TABLE IF NOT EXISTS `cultivo_bitacora` (
  `cultivo_id` int NOT NULL,
  `bitacora_id` int NOT NULL,
  KEY `bitacora_id` (`bitacora_id`),
  KEY `cultivo_id` (`cultivo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cultivo_bitacora`
--

INSERT INTO `cultivo_bitacora` (`cultivo_id`, `bitacora_id`) VALUES
(214, 39);

--
-- Disparadores `cultivo_bitacora`
--
DROP TRIGGER IF EXISTS `cultivo_bitacora_del`;
DELIMITER $$
CREATE TRIGGER `cultivo_bitacora_del` AFTER DELETE ON `cultivo_bitacora` FOR EACH ROW BEGIN
  DELETE FROM bitacora WHERE id_bitacora = OLD.bitacora_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

DROP TABLE IF EXISTS `plan`;
CREATE TABLE IF NOT EXISTS `plan` (
  `id_plan` int NOT NULL AUTO_INCREMENT,
  `nombre_plan` varchar(50) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `recurso_hum` int NOT NULL,
  `recurso_econ` float NOT NULL,
  `recurso_mat` varchar(856) NOT NULL,
  `inicio_plan` date NOT NULL,
  `final_plan` date NOT NULL,
  `completado` int NOT NULL,
  `cultivo_id` int NOT NULL,
  PRIMARY KEY (`id_plan`),
  KEY `cultivo_id` (`cultivo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`id_plan`, `nombre_plan`, `descripcion`, `recurso_hum`, `recurso_econ`, `recurso_mat`, `inicio_plan`, `final_plan`, `completado`, `cultivo_id`) VALUES
(20, 'Maiz (Miguel Ruiz Zamora)', 'Propiedad de la Universidad Tecnológica del Valle del Mezquital.', 1, 1, '1', '2023-02-02', '2023-02-02', 0, 214);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

DROP TABLE IF EXISTS `resultado`;
CREATE TABLE IF NOT EXISTS `resultado` (
  `id_resultado` int NOT NULL,
  `descripcion` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cultivo_id` int DEFAULT NULL,
  PRIMARY KEY (`id_resultado`),
  KEY `cultivo_id` (`cultivo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

DROP TABLE IF EXISTS `tipo`;
CREATE TABLE IF NOT EXISTS `tipo` (
  `id_c` int NOT NULL,
  `nombre_c` varchar(34) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
-- Filtros para la tabla `cultivo`
--
ALTER TABLE `cultivo`
  ADD CONSTRAINT `cultivo_ibfk_1` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id_c`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `cultivo_bitacora`
--
ALTER TABLE `cultivo_bitacora`
  ADD CONSTRAINT `cultivo_bitacora_ibfk_1` FOREIGN KEY (`bitacora_id`) REFERENCES `bitacora` (`id_bitacora`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `cultivo_bitacora_ibfk_2` FOREIGN KEY (`cultivo_id`) REFERENCES `cultivo` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `plan`
--
ALTER TABLE `plan`
  ADD CONSTRAINT `plan_ibfk_1` FOREIGN KEY (`cultivo_id`) REFERENCES `cultivo` (`id`);

--
-- Filtros para la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD CONSTRAINT `resultado_ibfk_1` FOREIGN KEY (`cultivo_id`) REFERENCES `cultivo` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
