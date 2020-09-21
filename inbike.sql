-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2020 a las 01:12:24
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inbike`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auxiliarventas`
--

CREATE TABLE `auxiliarventas` (
  `numero_factura` varchar(16) NOT NULL,
  `codprod` varchar(8) NOT NULL,
  `codruta` varchar(8) NOT NULL,
  `auxiliar1` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `codprod` bigint(8) NOT NULL,
  `descripcion` varchar(256) NOT NULL,
  `marca` varchar(32) NOT NULL,
  `detalle` varchar(64) NOT NULL,
  `preciocompra` int(16) NOT NULL,
  `ganancia` int(8) NOT NULL,
  `venta` int(16) NOT NULL,
  `existencia` int(8) NOT NULL,
  `ingreso` int(8) NOT NULL,
  `egreso` int(8) NOT NULL,
  `baja` int(8) NOT NULL,
  `aux3` varchar(32) NOT NULL,
  `aux4` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta`
--

CREATE TABLE `ruta` (
  `codruta` varchar(8) NOT NULL,
  `descruta` varchar(256) NOT NULL,
  `mapa` longblob NOT NULL,
  `duracion` int(16) NOT NULL,
  `observaciones` varchar(256) NOT NULL,
  `inversion` int(8) NOT NULL,
  `ruta1` varchar(32) NOT NULL,
  `ruta2` varchar(32) NOT NULL,
  `ruta3` varchar(32) NOT NULL,
  `ruta4` varchar(32) NOT NULL,
  `ruta5` varchar(32) NOT NULL,
  `ruta6` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` varchar(16) NOT NULL,
  `nombre` varchar(16) NOT NULL,
  `apellido` varchar(16) NOT NULL,
  `fnacimiento` date NOT NULL,
  `direccion` varchar(3) NOT NULL,
  `pais` varchar(12) NOT NULL,
  `region` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `genero` varchar(12) NOT NULL,
  `perfil` longblob NOT NULL,
  `aux1` varchar(32) NOT NULL,
  `aux2` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `fnacimiento`, `direccion`, `pais`, `region`, `email`, `genero`, `perfil`, `aux1`, `aux2`) VALUES
('', '', '', '0000-00-00', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `factura` varchar(16) NOT NULL,
  `id_usuario` varchar(16) NOT NULL,
  `valor` int(8) NOT NULL,
  `impuestos` int(4) NOT NULL,
  `neto` int(8) NOT NULL,
  `forma_pago` varchar(16) NOT NULL,
  `ventas1` varchar(32) NOT NULL,
  `ventas2` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
