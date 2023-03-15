@@ -0,0 +1,79 @@
-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2023 a las 01:56:09
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `ventas` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `nombre`, `empresa` , `telefono` ,`serie` ,`fecha_creacion` ,`ventas`) 
(1, 'Nico Vidal Rendón', 'NicoVidal@peluche.cs.mx', '6078133121', 1245632,'2006-07-14', 1),
(2, 'Elías Orfeo Castro', 'EliasCastro@peluche.cs.mx', '5393578322', 1245632,'2006-03-24', 1),
(3, 'Cruz Anastasia Guerrero', 'CruzGuerrero@peluche.csmx', '7812004946', 1245632,'2006-05-22', 0),
(4, 'María Dolores Valdez', 'MariaValdez@peluche.csmx', '5796639079', 1245632,'2006-11-04', 0),
(5, 'Irene Martita Gonzalo', 'IreneGonzalo@peluche.cs.mx', '6834057409', 1245632,'2006-05-11', 0),
(6, 'Faustina Reyna Menéndez', 'FaustinaMenéndez@peluche.cs.mx', '5918686277', 1245632,'2006-09-07', 0),
(7, 'Yésica Mercedes Mendoza', 'YésicaMendoza@peluche.cs.mx', '6771570427', 1245632,'2006-02-24', 0),
(8, 'Aarón Xavier Félix', 'AarónFélix@peluche.cs.mx', '6263886388', 1245632,'2006-04-05', 1),
(9, 'Matías Lisandro Zambrano', 'MatíasZambrano@peluche.cs.mx', '6234911590', 1245632,'2006-12-17', 1),
(10, 'Benjamín César Gonzalo', 'BenjamínGonzalo@peluche.cs.mx', '5721523378',123457654, '2002-08-20', 1);
(11, 'Perez', 'gfjhsdiufhiuds@gmail.com', '5721523378',2356856, '2002-07-11', 1);
(12, 'Pablo', 'pepitogamer@gmail.com', '5721523378',4156388709, '2008-08-01', 1);
(13, 'Castro alan', 'mauro@peluche.cs.mx', '5721523378', '2001-01-21', 1);
(14, 'Marcela costeña', 'Benjcalero@peluche.cs.mx', '5721523378', 1245632,'2006-05-08', 1);
(15, 'pablo alonzo', 'Benja@peluche.cs.mx', '5721523378', 1245632,'2006-06-01', 1);


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
