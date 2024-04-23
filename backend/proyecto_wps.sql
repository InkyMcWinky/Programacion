-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2024 a las 01:20:54
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_wps`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `ID` int(11) NOT NULL,
  `UsuarioID` int(11) DEFAULT NULL,
  `ProductoID` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `PrecioUnitario` decimal(10,2) DEFAULT NULL,
  `FechaCompra` date DEFAULT NULL,
  `EstadoCompra` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` text DEFAULT NULL,
  `Categoria` varchar(50) DEFAULT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `UnidadMedida` varchar(20) DEFAULT NULL,
  `Stock` int(11) NOT NULL,
  `Imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `Nombre`, `Descripcion`, `Categoria`, `Precio`, `UnidadMedida`, `Stock`, `Imagen`) VALUES
(1, 'Bolsas de Polipropileno de Alta Densidad', 'Nuestras bolsas de polipropileno ofrecen una solución confiable para el empaque de una amplia gama de productos. Con opciones de alta y baja densidad, así como características antiestáticas opcionales, garantizamos la seguridad y protección de tus productos durante el almacenamiento y transporte. ', 'Bolsas de Polipropileno', 1270.00, '1000', 26, 'https://amyermprueba.000webhostapp.com/imagenes/bolsapropilenoS.jpg'),
(2, 'Bolsas de Polipropileno de Baja Densidad', 'Nuestras bolsas de polipropileno ofrecen una solución confiable para el empaque de una amplia gama de productos. Con opciones de alta y baja densidad, así como características antiestáticas opcionales, garantizamos la seguridad y protección de tus productos durante el almacenamiento y transporte. ', 'Bolsas de Polipropileno', 815.00, '1000', 35, 'https://amyermprueba.000webhostapp.com/imagenes/bolsapropilenoS.jpg'),
(3, 'Cajas de cartón Blancas', 'Amplia variedad que se adecuan a las necesidades, contamos con los siguientes materiales para su comodidad.  ', 'Cajas de cartón', 1430.00, '100', 28, 'https://amyermprueba.000webhostapp.com/imagenes/cajacartonS.jpg'),
(4, 'Cajas de cartón Kraft', 'Amplia variedad que se adecuan a las necesidades, contamos con los siguientes materiales para su comodidad.', 'Cajas de cartón', 1268.00, '100', 21, 'https://amyermprueba.000webhostapp.com/imagenes/cajacartonS.jpg'),
(5, 'Cajas de cartón Indestructibles', 'Amplia variedad que se adecuan a las necesidades, contamos con los siguientes materiales para su comodidad.', 'Cajas de cartón', 2453.00, '100', 32, 'https://amyermprueba.000webhostapp.com/imagenes/cajacartonS.jpg'),
(6, 'Cajas de cartón Telescópica', 'Amplia variedad que se adecuan a las necesidades, contamos con los siguientes materiales para su comodidad.', 'Cajas de cartón', 5208.00, '225', 27, 'https://amyermprueba.000webhostapp.com/imagenes/cajacartonS.jpg'),
(7, 'Cajas de cartón Para archivar', 'Amplia variedad que se adecuan a las necesidades, contamos con los siguientes materiales para su comodidad.', 'Cajas de cartón', 1822.00, '100', 34, 'https://amyermprueba.000webhostapp.com/imagenes/cajacartonS.jpg'),
(8, 'Cajas de cartón Para mudanzas o envío', 'Amplia variedad que se adecuan a las necesidades, contamos con los siguientes materiales para su comodidad.', 'Cajas de cartón', 967.00, '100', 32, 'https://amyermprueba.000webhostapp.com/imagenes/cajacartonS.jpg'),
(9, 'Clavo en rollo Liso 1 ½”', 'Clavos de alta calidad para pistolas neumáticas. ', 'Clavo en rollo ', 2376.00, '3600', 20, 'https://amyermprueba.000webhostapp.com/imagenes/rolloclavosS.jpg'),
(10, 'Clavo en rollo Liso 2” ', 'Clavos de alta calidad para pistolas neumáticas. ', 'Clavo en rollo ', 2867.00, '3600', 19, 'https://amyermprueba.000webhostapp.com/imagenes/rolloclavosS.jpg'),
(11, 'Clavo en rollo Liso 2 ½”', 'Clavos de alta calidad para pistolas neumáticas. ', 'Clavo en rollo ', 3057.00, '3600', 16, 'https://amyermprueba.000webhostapp.com/imagenes/rolloclavosS.jpg'),
(12, 'Clavo en rollo Anelado 1 ½”', 'Clavos de alta calidad para pistolas neumáticas. ', 'Clavo en rollo ', 3431.00, '3600', 33, 'https://amyermprueba.000webhostapp.com/imagenes/rolloclavosS.jpg'),
(13, 'Clavo en rollo Anelado 2” ', 'Clavos de alta calidad para pistolas neumáticas. ', 'Clavo en rollo ', 3836.00, '3600', 32, 'https://amyermprueba.000webhostapp.com/imagenes/rolloclavosS.jpg'),
(14, 'Clavo en rollo Anelado 2 ½”', 'Clavos de alta calidad para pistolas neumáticas. ', 'Clavo en rollo ', 4165.00, '3600', 37, 'https://amyermprueba.000webhostapp.com/imagenes/rolloclavosS.jpg'),
(15, 'Clavo en rollo Espiral (Ardox) 1 ½”', 'Clavos de alta calidad para pistolas neumáticas. ', 'Clavo en rollo ', 5098.00, '3600', 36, 'https://amyermprueba.000webhostapp.com/imagenes/tornilloS.jpg'),
(16, 'Clavo en rollo Espiral (Ardox) 2” ', 'Clavos de alta calidad para pistolas neumáticas. ', 'Clavo en rollo ', 5341.00, '3600', 27, 'https://amyermprueba.000webhostapp.com/imagenes/tornilloS.jpg'),
(17, 'Clavo en rollo Espiral (Ardox) 2 ½”', 'Clavos de alta calidad para pistolas neumáticas. ', 'Clavo en rollo ', 5636.00, '3600', 26, 'https://amyermprueba.000webhostapp.com/imagenes/tornilloS.jpg'),
(18, 'Esquineros Blancos', 'Para brindar protección a empaques en áreas que resultan problemáticas que pueden dañarse con frecuencia. ', 'Esquineros', 3445.00, '50', 15, 'https://amyermprueba.000webhostapp.com/imagenes/esquineroS.jpg'),
(19, 'Esquineros Kraft', 'Para brindar protección a empaques en áreas que resultan problemáticas que pueden dañarse con frecuencia. ', 'Esquineros', 3975.00, '50', 12, 'https://amyermprueba.000webhostapp.com/imagenes/esquineroS.jpg'),
(20, 'Esquineros Plásticos', 'Para brindar protección a empaques en áreas que resultan problemáticas que pueden dañarse con frecuencia. ', 'Esquineros', 4642.00, '50', 15, 'https://amyermprueba.000webhostapp.com/imagenes/esquineroS.jpg'),
(21, 'Esquineros Perfiles', 'Para brindar protección a empaques en áreas que resultan problemáticas que pueden dañarse con frecuencia. ', 'Esquineros', 6320.00, '50', 13, 'https://amyermprueba.000webhostapp.com/imagenes/rolloS.jpg'),
(22, 'Empaque de poliburbuja 5/16', 'Ofrecemos una amplia variedad de opciones de empaque de poliburbuja, desde rollos de diferentes anchos hasta bolsas de burbuja, para proteger tus productos durante el transporte y almacenamiento. Nuestra burbuja de alta calidad proporciona un amortiguamiento superior para objetos frágiles y delicados. ', 'Empaque de poliburbuja ', 2750.00, '15', 23, 'https://amyermprueba.000webhostapp.com/imagenes/bubblewrapS.jpg'),
(23, 'Empaque de poliburbuja ¾ ', 'Ofrecemos una amplia variedad de opciones de empaque de poliburbuja, desde rollos de diferentes anchos hasta bolsas de burbuja, para proteger tus productos durante el transporte y almacenamiento. Nuestra burbuja de alta calidad proporciona un amortiguamiento superior para objetos frágiles y delicados. ', 'Empaque de poliburbuja ', 3103.00, '15', 15, 'https://amyermprueba.000webhostapp.com/imagenes/bubblewrapS.jpg'),
(24, 'Empaque de poliburbuja ½', 'Ofrecemos una amplia variedad de opciones de empaque de poliburbuja, desde rollos de diferentes anchos hasta bolsas de burbuja, para proteger tus productos durante el transporte y almacenamiento. Nuestra burbuja de alta calidad proporciona un amortiguamiento superior para objetos frágiles y delicados. ', 'Empaque de poliburbuja ', 3863.00, '15', 23, 'https://amyermprueba.000webhostapp.com/imagenes/bubblewrapS.jpg'),
(25, 'Empaque de poliburbuja \"Bolsas de burbuja\" ', 'Ofrecemos una amplia variedad de opciones de empaque de poliburbuja, desde rollos de diferentes anchos hasta bolsas de burbuja, para proteger tus productos durante el transporte y almacenamiento. Nuestra burbuja de alta calidad proporciona un amortiguamiento superior para objetos frágiles y delicados. ', 'Empaque de poliburbuja ', 4274.00, '15', 26, 'https://amyermprueba.000webhostapp.com/imagenes/bubblewrapS.jpg'),
(26, 'Pallets', 'Nuestros pallets están disponibles en madera tratada para cumplir con los estándares de exportación, garantizando la seguridad y estabilidad de tus productos durante el transporte internacional. También ofrecemos opciones de madera reciclada para aquellos que buscan soluciones eco-amigables. ', 'Pallets', 3460.00, '50', 32, 'https://amyermprueba.000webhostapp.com/imagenes/palletS.jpg'),
(27, 'Placa de Polietileno', 'Las placas de polietileno troqueladas proporcionan una base sólida y resistente para proteger tus productos contra impactos y abrasiones. Su diseño troquelado permite una fácil manipulación y personalización para adaptarse a tus necesidades específicas de embalaje. ', 'Placa de Polietileno', 2134.00, '19', 23, 'https://amyermprueba.000webhostapp.com/imagenes/tape-hmS.jpg'),
(28, 'Foam', 'Nuestro foam está disponible en una variedad de dimensiones para brindar una protección óptima a tus productos. Su estructura de células cerradas proporciona una excelente amortiguación contra golpes y vibraciones, manteniendo tus productos seguros durante el transporte y manipulación.', 'Foam', 5800.00, '40', 30, 'https://amyermprueba.000webhostapp.com/imagenes/foamS.jpg'),
(29, 'Embalajes de madera', 'Ofrecemos una amplia gama de soluciones de embalaje de madera, desde cajas hasta jaulas y plataformas personalizadas, diseñadas para garantizar la máxima protección y seguridad de tus productos durante el envío y almacenamiento. ', 'Embalajes de madera', 4825.00, '100', 25, 'https://amyermprueba.000webhostapp.com/imagenes/cajamaderaS.jpg'),
(30, 'Etiquetas', 'Nuestras etiquetas están disponibles en diferentes formatos para adaptarse a tus necesidades de impresión. Desde etiquetas removibles hasta opciones duraderas para rotuladores, garantizamos una excelente calidad de impresión y adhesión. ', 'Etiquetas', 918.00, '300', 42, 'https://amyermprueba.000webhostapp.com/imagenes/etiquetaS.jpg'),
(31, 'Stretch Film', 'Nuestro stretch film ofrece una protección superior para tus productos durante el envío y almacenamiento. Disponible en diferentes opciones de uso manual o automático, así como en colores para una fácil identificación de los productos. ', 'Stretch Film', 1672.00, '24', 18, 'https://amyermprueba.000webhostapp.com/imagenes/wrapS.jpg'),
(32, 'Grapas', 'Nuestras grapas están diseñadas para proporcionar una sujeción segura en una variedad de materiales. Desde aplicaciones industriales hasta uso doméstico, nuestras grapas garantizan un rendimiento confiable y duradero. ', 'Grapas', 460.00, '2400', 26, 'https://amyermprueba.000webhostapp.com/imagenes/grapaS.jpg'),
(33, 'Fleje Acero', 'Ofrecemos una amplia selección de flejes para satisfacer tus necesidades específicas de embalaje y sujeción. ', 'Fleje', 6175.00, '12', 18, 'https://amyermprueba.000webhostapp.com/imagenes/flejeS.jpg'),
(34, 'Fleje Acero Inoxidable', 'Ofrecemos una amplia selección de flejes para satisfacer tus necesidades específicas de embalaje y sujeción. ', 'Fleje', 6379.00, '15', 23, 'https://amyermprueba.000webhostapp.com/imagenes/flejeS.jpg'),
(35, 'Fleje Polipropileno', 'Ofrecemos una amplia selección de flejes para satisfacer tus necesidades específicas de embalaje y sujeción. ', 'Fleje', 7213.00, '15', 26, 'https://amyermprueba.000webhostapp.com/imagenes/flejeS.jpg'),
(36, 'Fleje Poliester', 'Ofrecemos una amplia selección de flejes para satisfacer tus necesidades específicas de embalaje y sujeción. ', 'Fleje', 7573.00, '15', 21, 'https://amyermprueba.000webhostapp.com/imagenes/flejeS.jpg'),
(37, 'Fleje Sellos para fleje', 'Ofrecemos una amplia selección de flejes para satisfacer tus necesidades específicas de embalaje y sujeción. ', 'Fleje', 7987.00, '15', 27, 'https://amyermprueba.000webhostapp.com/imagenes/flejeS.jpg'),
(38, 'Fleje Grapas para fleje', 'Ofrecemos una amplia selección de flejes para satisfacer tus necesidades específicas de embalaje y sujeción. ', 'Fleje', 8325.00, '15', 17, 'https://amyermprueba.000webhostapp.com/imagenes/flejeS.jpg'),
(39, 'Fleje Tensionadoras', 'Ofrecemos una amplia selección de flejes para satisfacer tus necesidades específicas de embalaje y sujeción. ', 'Fleje', 8769.00, '15', 24, 'https://amyermprueba.000webhostapp.com/imagenes/flejeS.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `ID` int(11) NOT NULL,
  `NombreEmpresa` varchar(100) NOT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `Contacto` varchar(100) DEFAULT NULL,
  `CorreoElectronico` varchar(100) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID`, `Nombre`) VALUES
(1, 'Administrador'),
(2, 'Cliente'),
(3, 'Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Contraseña` varchar(100) NOT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `RolID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Correo`, `Contraseña`, `Direccion`, `RolID`) VALUES
(1, 'Ari Mendoza', 'arimendoza@hotmail.com', 't4t', 'Rie aldeme 777', 1),
(2, 'Hannibal', 'canibal@example.com', 'will<3', 'Baltimore 123', 2),
(3, '', 'admin@gmail.com', 'admin', NULL, NULL),
(4, '', 'toytite@coyeye.com', 'gatotite', NULL, NULL),
(5, '', '', '', NULL, NULL),
(6, '', 'quepaso@gmail.com', 'quepaso', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UsuarioID` (`UsuarioID`),
  ADD KEY `ProductoID` (`ProductoID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `RolID` (`RolID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`UsuarioID`) REFERENCES `usuarios` (`ID`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`ProductoID`) REFERENCES `productos` (`ID`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`RolID`) REFERENCES `roles` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
