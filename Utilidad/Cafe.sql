-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-03-2021 a las 20:23:51
-- Versión del servidor: 8.0.23-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Cafe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Corta`
--

CREATE TABLE `Corta` (
  `Fecha` date DEFAULT NULL,
  `Cortador` varchar(30) DEFAULT NULL,
  `Galones` float DEFAULT NULL,
  `Observacion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Corta`
--

INSERT INTO `Corta` (`Fecha`, `Cortador`, `Galones`, `Observacion`) VALUES
('2021-03-06', 'Carlos Perez', 15, 'Corta Uva Sin Pezon ni Hoja'),
('2021-03-06', 'Luis Zelaya', 15, 'Corta con Pezon y Hoja'),
('2021-03-10', 'Manuel Bonilla', 25, ''),
('2021-03-10', 'Manuel Bonilla', 25, ''),
('2021-03-10', 'Sfthefany Palma', 20, 'Corta y Limpia de Uva'),
('2021-03-09', 'Suhelen', 10, 'Corta siempre'),
('2021-03-10', 'Giselle Cruz', 22, 'Corta Pezon'),
('2021-03-10', 'Giselle Cruz', 22, 'Corta Pezon'),
('2021-03-10', 'Guadalupe Esparza', 30, 'Corta Pezon y Uva'),
('2021-03-10', 'Guadalupe Esparza', 30, 'Corta Pezon y Uva'),
('2021-03-10', 'Jessy Bonilla', 20, 'Corta Uva y Pezon!!'),
('2021-03-10', 'Jessy Bonilla', 20, 'Corta Uva y Pezon!!'),
('2021-03-10', 'David Meza', 20, 'Cortador de Uvas'),
('2021-03-10', 'Javier Solorzano', 29, 'Cortador de Uvas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Despulpa`
--

CREATE TABLE `Despulpa` (
  `Fecha` date DEFAULT NULL,
  `Hora` text,
  `Despulpador` varchar(30) DEFAULT NULL,
  `Cantidad` float DEFAULT NULL,
  `Requintador` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Despulpa`
--

INSERT INTO `Despulpa` (`Fecha`, `Hora`, `Despulpador`, `Cantidad`, `Requintador`) VALUES
('2021-03-10', '2:00 PM', 'Javier Gutierrez', 6, 'Manuel Bonilla'),
('2021-03-12', '07:00 AM', 'Gustavo Cruz', 25, 'Jonathan Mendoza'),
('2021-03-06', '7:00 PM', 'Juan Perez', 29, 'Manuel Bonilla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Lava`
--

CREATE TABLE `Lava` (
  `Fecha` date DEFAULT NULL,
  `Hora` text,
  `Galones` float DEFAULT NULL,
  `Lavador` varchar(30) DEFAULT NULL,
  `Tratamiento` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Lava`
--

INSERT INTO `Lava` (`Fecha`, `Hora`, `Galones`, `Lavador`, `Tratamiento`) VALUES
('2021-03-10', '2:00PM', 10, 'Manuel Bonilla', 'Buenas'),
('2021-03-10', '2:00 PM', 4, 'Manuel Bonilla', 'Buenas'),
('2021-03-06', '4:00 PM', 8, 'Betty Lorenzana', 'Tratamiento 6 meses'),
('2021-03-10', '4:00 PM', 5, 'Bryan Jimenez', '8 Meses');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Personal`
--

CREATE TABLE `Personal` (
  `Identidad` float DEFAULT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Genero` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Edad` float DEFAULT NULL,
  `Celular` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Personal`
--

INSERT INTO `Personal` (`Identidad`, `Nombre`, `Genero`, `Edad`, `Celular`) VALUES
(801199000000, 'Manuel Bonilla', 'Masculino', 29, 97673000),
(801200000000, 'Javier Lopez', 'Masculino', 20, 97674000),
(801199000000, 'Sfthefany Giselle', 'Femenino', 21, 99351200),
(801199000000, 'Pamela Palma', 'Femenino', 28, 96265600),
(801199000000, 'Yovani Cruz', 'Masculino', 32, 99809800);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
