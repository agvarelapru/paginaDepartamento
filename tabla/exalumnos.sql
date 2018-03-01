-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-01-2018 a las 10:00:03
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `2daw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exalumnos`
--

DROP TABLE IF EXISTS `exalumnos`;
CREATE TABLE IF NOT EXISTS `exalumnos` (
  `Id_Alumno` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Apellido1` varchar(100) NOT NULL,
  `Apellido2` varchar(100) NOT NULL,
  `Localidad` varchar(30) NOT NULL,
  `Foto` varchar(300) NOT NULL,
  `Promocion` varchar(15) NOT NULL,
  `BiografiaLaboral` text NOT NULL,
  PRIMARY KEY (`Id_Alumno`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `exalumnos`
--

INSERT INTO `exalumnos` (`Id_Alumno`, `Nombre`, `Apellido1`, `Apellido2`, `Localidad`, `Foto`, `Promocion`, `BiografiaLaboral`) VALUES
(12, 'Angel', 'Varela', 'PruaÃ±o', 'Trebujena (Cadiz)', 'imagenes/CARTEL.jpg', '2016-2018', 'Nada de nada');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
