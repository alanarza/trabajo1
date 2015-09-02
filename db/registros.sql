-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 02, 2015 at 07:04 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registros`
--

-- --------------------------------------------------------

--
-- Table structure for table `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `imagen` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nacionalidad`
--

CREATE TABLE IF NOT EXISTS `nacionalidad` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `pais` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `nacionalidad`
--

INSERT INTO `nacionalidad` (`id`, `pais`) VALUES
(1, 'Argentina'),
(2, 'Chile'),
(3, 'Peru'),
(4, 'Bolivia'),
(5, 'Paraguay'),
(6, 'Uruguay');

-- --------------------------------------------------------

--
-- Table structure for table `provincia`
--

CREATE TABLE IF NOT EXISTS `provincia` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `provincia` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `provincia`
--

INSERT INTO `provincia` (`id`, `provincia`) VALUES
(1, 'Buenos Aires'),
(2, 'Catamarca'),
(3, 'Chaco'),
(4, 'Chubut'),
(5, 'Córdoba'),
(6, 'Corrientes'),
(7, 'Entre Ríos'),
(8, 'Formosa'),
(9, 'Jujuy'),
(10, 'La Pampa'),
(11, 'La Rioja'),
(12, 'Mendoza'),
(13, 'Misiones'),
(14, 'Neuquén'),
(15, 'Río Negro'),
(16, 'Salta'),
(17, 'San Juan'),
(18, 'San Luis'),
(19, 'Santa Cruz'),
(20, 'Santa Fe'),
(21, 'Santiago del Estero'),
(22, 'Tierra del Fuego, Antártida e Isla del Atlántico Sur'),
(23, 'Tucumán');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apellido` varchar(300) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `dni` int(11) NOT NULL,
  `nacimiento` date NOT NULL,
  `sexo` varchar(300) NOT NULL,
  `nacionalidad` varchar(300) NOT NULL,
  `provincia` varchar(255) NOT NULL,
  `domicilio` varchar(255) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `fecha_expedicion` date NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `donante` varchar(4) NOT NULL,
  `num_tramite` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `apellido`, `nombre`, `dni`, `nacimiento`, `sexo`, `nacionalidad`, `provincia`, `domicilio`, `user`, `pass`, `fecha_expedicion`, `fecha_vencimiento`, `donante`, `num_tramite`) VALUES
(3, 'Arza', 'Alan', 36760537, '0000-00-00', 'masculino', 'Argentina', 'chubut', 'Love Parry 1428', 'earza', '123123', '0000-00-00', '0000-00-00', '0', 0),
(5, 'Alfredo', 'Pablo', 123123123, '0000-00-00', 'masculino', 'Argentina', 'chubut', '25 de Mayo 1203', NULL, NULL, '0000-00-00', '0000-00-00', '0', 0),
(6, 'Sotelo', 'Juan Manuel', 35255523, '0000-00-00', 'masculino', 'Argentina', 'Buenos Aires', 'Cacique Nahuelpan 133', NULL, NULL, '0000-00-00', '0000-00-00', 'si', 1332),
(7, 'castrobobo', 'pichi', 1231233321, '1992-05-03', 'masculino', 'Argentina', 'Buenos Aires', 'estocolmo', NULL, NULL, '0000-00-00', '0000-00-00', 'si', 123123),
(8, 'Jaramillo', 'Javier', 1231233321, '1992-05-03', 'masculino', 'Argentina', 'Buenos Aires', 'estocolmo', NULL, NULL, '0000-00-00', '0000-00-00', 'si', 123123),
(9, 'asd', 'jose', 34244224, '2015-09-12', 'masculino', 'Argentina', 'Buenos Aires', 'Cacique Nahuelpan 233', NULL, NULL, '0000-00-00', '0000-00-00', 'si', 34422441),
(10, 'Castronovo', 'Gianfranco', 123123123, '1992-05-03', 'masculino', 'Argentina', 'Buenos Aires', 'estocolmo', NULL, NULL, '2015-09-02', '2030-09-02', 'si', 123123);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
