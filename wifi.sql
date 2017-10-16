-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-09-2017 a las 15:57:46
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `wifi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivos`
--

CREATE TABLE IF NOT EXISTS `dispositivos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_DEPA` varchar(70) NOT NULL,
  `NOM_ROUTER` varchar(70) NOT NULL,
  `MARCA` varchar(30) NOT NULL,
  `MODELO` varchar(35) NOT NULL,
  `SERIE` varchar(25) NOT NULL,
  `INVENTARIO` varchar(25) NOT NULL,
  `CONTRA_ROUTER` varchar(20) NOT NULL,
  `IP_ACCESO` varchar(20) NOT NULL,
  `MASK` varchar(20) NOT NULL,
  `GATEWAY` varchar(20) NOT NULL,
  `MAC_ADDRESS` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `dispositivos`
--

INSERT INTO `dispositivos` (`ID`, `NOM_DEPA`, `NOM_ROUTER`, `MARCA`, `MODELO`, `SERIE`, `INVENTARIO`, `CONTRA_ROUTER`, `IP_ACCESO`, `MASK`, `GATEWAY`, `MAC_ADDRESS`) VALUES
(1, 'Gerencia', 'Gerencia II', 'Nexxt_20', '20', '20', '20', 'hola12345', '192.168.002.003', '255.255.255.065', '192.168.005.006', 'S5:D4:SD:5F:5D:F4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(30) NOT NULL,
  `EDITAR` int(11) NOT NULL,
  `ELIMINAR` int(11) NOT NULL,
  `CREAR` int(11) NOT NULL,
  `CARGO` int(11) NOT NULL,
  `USUARIOS` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(50) NOT NULL,
  `APELLIDO` varchar(80) NOT NULL,
  `USUARIO` varchar(15) NOT NULL,
  `CONTRA` varchar(12) NOT NULL,
  `NIVEL` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NOMBRE`, `APELLIDO`, `USUARIO`, `CONTRA`, `NIVEL`) VALUES
(1, 'Rene', 'Montoya', 'rene_montoya', 'hola12345', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
