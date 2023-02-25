-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2023 a las 02:51:03
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_de_chems`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetos_con_chems`
--

CREATE TABLE `objetos_con_chems` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `presio` double NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `color` varchar(50) NOT NULL,
  `existencia` int(11) NOT NULL,
  `marcas` varchar(30) NOT NULL,
  `medida` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `objetos_con_chems`
--

INSERT INTO `objetos_con_chems` (`id`, `nombre`, `presio`, `descripcion`, `color`, `existencia`, `marcas`, `medida`) VALUES
(1, 'WYLINGER Cheems Bonk Dogs Merch', 230, 'Playera Caballero - Cheems Birthday\r\n\r\nPlayera algodón caballero cuello redondo con estampado corte vinil.\r\n\r\n\r\nEstampado corte vinil: \"Cheems Birthday\".\r\nTallas: CH, M, G, EG, EEG.\r\nPersonalización opcional con nombre en la espalda y manga.\r\nColor: Negro.\r\nColor estampado: Amarillo, Camel, Blanco.', 'color Blanco-2 Color estampado: Amarillo, Camel, B', 30, 'WYLINGER', 'Tallas: CH, M, G, EG, EEG.'),
(2, 'TXG Auriculares para Juegos, Auriculares para Juegos con Aislamiento de Ruido con Cable, Auriculares Gamer con Microfono', 320, 'MICRÓFONO AISLANTE DE RUIDO El micrófono omnidireccional integrado en el auricular puede transmitir comunicaciones de alta calidad con su función premium de ocultación de ruido, puede captar sonidos con gran sensibilidad y eliminar el ruido, lo que le permite entregar o recibir mensajes claramente.', 'azul', 2000, 'TXG Auriculares ', '20.8 x 19.8 x 9.6 cm; 460 g'),
(3, 'HP Laptop Pavilion', 12100, '[PROCESADOR] AMD Ryzen 5 4500U (velocidad base de 2,3 GHz, velocidad de ráfaga máxima de hasta 4,0 GHz, 8 MB de caché L3 y 6 núcleos)\r\n[MEMORIA RAM] 8 GB de RAM DDR4-3200 MHz (2 x 4 GB) Expandible\r\n[DISCO DURO] Unidad de estado sólido PCIe NVMe M.2 de 256 GB\r\n[SOFTWARE] Windows 11, Office 365', 'azul', 30, 'hp', '16 pulgadas'),
(4, 'Rick Roll Parche de moral', 320, 'Divertido parche de velcro\r\nIncreíble calidad: Nueo parche de moral e bordado 100% 3D, por lo que se siente cómodo y no golpea tus manos. Los colores blanco y rojo son vibrantes y te harán destacar, bordado detallado de gran calidad, más duradero y fácil de lavar.', 'Blanco', 2000, ' FILSEF', '‎7.7 x 7.59 x 0.71 cm; 18 g'),
(5, 'Champion Powerblend Sudadera con Capucha', 522, '50 % algodón , 50 % poliéster\r\nCierre de Sin cierres\r\nLavar a máquina\r\nMezcla de algodón y poliéster excepcionalmente suave que resiste el encogimiento y la formación de bolitas. Tejido: 50% algodón/50% poliéster; Oxford: 90% algodón/10% poliéster.', 'negro', 2000, 'champios', '33.02 x 20.32 x 2.54 cm; 362.8'),
(6, 'Apple Watch Series 7', 12100, '- Este producto usado no tiene certificación de Apple, pero proveedores cualificados de Amazon lo han inspeccionado, probado y limpiado profesionalmente.\r\n- Este producto está en \"Condición excelente\". No muestra signos de daños cosméticos visibles desde una distancia de 30 centímetros.', 'azul', 30, 'apple', '16 pulgadas'),
(7, 'Champion Sudadera con Capucha Sudadera con Capucha para Hombre', 875, '100 % Algodón\r\nCierre de Sin cierres\r\nLavar a máquina\r\nVersatilidad en las 4 estaciones: para usar en capas o solo, sobre tu traje de baño, debajo de tu parka de esquí o con tus jeans.', 'negro', 2000, 'champios', '33.02 x 20.32 x 2.54 cm; 362.8'),
(8, 'HyperX Cloud Stinger Audífonos para gaming ', 0, 'Control de volumen intuitivo situado en el casco\r\nControladores direccionales de 50 mm para una mayor precisión del sonido\r\nControl deslizante de acero ajustable\r\nAuriculares ligeros con almohadillas que giran 90 grados', 'negro', 300, 'HyperX Cloud Stinger', '50mm'),
(9, 'Apple iPhone 11 Pro', 10000, '- Este producto usado no tiene certificación de Apple, pero proveedores cualificados de Amazon lo han inspeccionado, probado y limpiado profesionalmente.\r\n- Este producto está en \"Condición excelente\". No muestra signos de daños cosméticos visibles desde una distancia de 30 centímetros.', 'negro', 30, 'apple', '16 pulgadas'),
(10, 'Apple iPhone 11 Pro (restaurado)', 12100, '- Este producto usado no tiene certificación de Apple, pero proveedores cualificados de Amazon lo han inspeccionado, probado y limpiado profesionalmente.\r\n- Este producto está en \"Condición excelente\". No muestra signos de daños cosméticos visibles desde una distancia de 30 centímetros.', 'azul', 30, 'apple', '26 pulgadas'),
(11, 'truefree Audífonos Inalámbricos', 0, '【4 micrófonos y cancelación de ruido ENC para llamadas claras】Doble micrófono en cada auricular. Uno capta efectivamente la voz humana, mientras que el otro cancela el ruido ambiental. Con esta tecnología ENC (Cancelación de ruido ambiental), puede hacer llamadas nítidas y experimentar conversacione', 'negro', 2000, 'apple', '20.8 x 19.8 x 9.6 cm; 460 g');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `objetos_con_chems`
--
ALTER TABLE `objetos_con_chems`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `objetos_con_chems`
--
ALTER TABLE `objetos_con_chems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
