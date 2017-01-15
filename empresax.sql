-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-01-2017 a las 03:00:36
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `empresax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `idCargo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_cargo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idCargo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`idCargo`, `descripcion_cargo`) VALUES
(1, 'Administrador'),
(2, 'Programador'),
(3, 'Secretaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunas`
--

CREATE TABLE IF NOT EXISTS `comunas` (
  `idComuna` int(11) NOT NULL AUTO_INCREMENT,
  `descComuna` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idComuna`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `comunas`
--

INSERT INTO `comunas` (`idComuna`, `descComuna`) VALUES
(1, 'LA FLORIDA'),
(2, 'PUENTE ALTO'),
(3, 'LA GRANJA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE IF NOT EXISTS `trabajadores` (
  `idTrabajador` int(11) NOT NULL AUTO_INCREMENT,
  `rutTrabajador` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `nombreTrabajador` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `apePatTrabajador` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apeMatTrabajador` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cargo_trabajador` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `fechaContrato` date NOT NULL,
  `correoTrabajador` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefonoTrabajador` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celularTrabajador` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `domicilioTrabajador` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `comunaTrabajador` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idTrabajador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`idTrabajador`, `rutTrabajador`, `nombreTrabajador`, `apePatTrabajador`, `apeMatTrabajador`, `cargo_trabajador`, `fechaContrato`, `correoTrabajador`, `telefonoTrabajador`, `celularTrabajador`, `domicilioTrabajador`, `comunaTrabajador`) VALUES
(1, '17.253.994-7', 'JOSE MIGUEL', 'ZAVALA', 'FRANCO', '2', '2016-10-03', 'JOSE.ZAVALA.FRANCO@GMAIL.COM', '0225668074', '0977921606', 'PASAJE TORQUEMADA 03302', '1'),
(2, '6.553.717-6', 'JOSE RAMON', 'ZAVALA', 'PINILLA', '1', '2016-10-03', 'JORAZAPI@YAHOO.ES', '0225668074', '0988029447', 'PASAJE TORQUEMADA 03302', '1'),
(3, '18.906.335-0', 'MARCELA ALEJANDRA', 'GODOY', 'FIGUEROA', '3', '2016-10-03', 'MARCELA.ALEJANDRA.GODOY.FIGUEROA@GMAIL.COM', NULL, '0976875648', 'PASAJE TORQUEMADA 03302', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariossistema`
--

CREATE TABLE IF NOT EXISTS `usuariossistema` (
  `idUsuario` int(11) NOT NULL,
  `userUsuario` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `passUsuario` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `loginPrimeraVezUsuario` tinyint(1) NOT NULL DEFAULT '0',
  KEY `idUsuario` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuariossistema`
--

INSERT INTO `usuariossistema` (`idUsuario`, `userUsuario`, `passUsuario`, `loginPrimeraVezUsuario`) VALUES
(1, '172539947', 'bien', 1),
(2, '65537176', 'manco', 1),
(3, '189063350', 'hola', 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuariossistema`
--
ALTER TABLE `usuariossistema`
  ADD CONSTRAINT `usuariossistema_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `trabajadores` (`idTrabajador`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
