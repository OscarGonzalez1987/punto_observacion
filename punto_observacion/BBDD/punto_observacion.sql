-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-02-2020 a las 00:20:29
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `punto_observacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chequeo`
--

CREATE TABLE `chequeo` (
  `registro` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `numero_marcado` varchar(30) NOT NULL,
  `solicitud_llamadas` int(11) NOT NULL,
  `contestado` int(11) NOT NULL,
  `no_contestado` int(11) NOT NULL,
  `estado_llamada` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `chequeo`
--

INSERT INTO `chequeo` (`registro`, `fecha`, `hora`, `numero_marcado`, `solicitud_llamadas`, `contestado`, `no_contestado`, `estado_llamada`) VALUES
(1, '2020-02-28', '16:24:21', '3192675157', 1, 1, 0, '0'),
(2, '2020-02-28', '01:00:00', '009584127467678', 1, 0, 1, 'NO RESPONDE'),
(3, '2020-02-28', '09:33:00', '3215789571', 2, 0, 1, 'CORREO DE VOZ - BUZON - COBRO'),
(4, '2020-02-28', '09:37:00', '3215789571', 2, 0, 1, 'NO RESPONDE'),
(5, '0000-00-00', '09:48:00', '3222941670', 6, 0, 1, 'NO RESPONDE'),
(6, '2020-02-28', '09:50:00', '313583260198', 3, 0, 1, 'NO RESPONDE'),
(7, '2020-02-28', '09:54:00', '009583260198', 3, 0, 1, 'NO RESPONDE'),
(8, '2020-02-28', '09:56:00', '0095841677918888', 2, 0, 1, 'NO RESPONDE'),
(9, '2020-02-28', '09:58:00', '3222474523', 1, 1, 0, ''),
(10, '2020-02-28', '10:01:00', '3195640559', 1, 1, 0, ''),
(11, '2020-02-28', '10:09:00', '3202485950', 1, 1, 0, ''),
(12, '2020-02-19', '10:13:00', '009584249956424', 3, 0, 1, 'NO RESPONDE'),
(13, '2020-02-19', '10:15:00', '3002966586', 1, 1, 0, ''),
(14, '2020-02-19', '10:18:00', '3002966586', 1, 1, 0, ''),
(15, '2020-02-19', '10:19:00', '3125039371', 1, 1, 0, ''),
(16, '2020-02-19', '10:22:00', '3125039371', 1, 1, 0, ''),
(17, '2020-02-19', '10:28:00', '3023418537', 2, 1, 0, ''),
(18, '2020-02-19', '10:30:00', '3172125906', 1, 1, 0, ''),
(19, '2020-02-19', '10:41:00', '3023418537', 2, 1, 0, ''),
(20, '2020-02-19', '04:18:00', '424738296', 1, 0, 1, 'NO RESPONDE'),
(21, '2020-02-19', '04:19:00', '424738296', 1, 0, 1, 'NO RESPONDE'),
(22, '2020-02-19', '04:21:00', '3117837914', 1, 0, 1, 'NO RESPONDE'),
(23, '2020-02-19', '04:23:00', '3209873131', 1, 1, 0, ''),
(24, '2020-02-19', '04:25:00', '3117837914', 1, 0, 1, 'SISTEMA CORREO VOZ'),
(25, '2020-02-19', '04:33:00', '3117837914', 1, 0, 1, 'NO RESPONDE'),
(26, '2020-02-19', '04:33:00', '4249221162', 3, 0, 1, 'NO RESPONDE'),
(27, '2020-02-28', '16:38:00', '3143769150', 1, 0, 1, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chequeo`
--
ALTER TABLE `chequeo`
  ADD PRIMARY KEY (`registro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chequeo`
--
ALTER TABLE `chequeo`
  MODIFY `registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
