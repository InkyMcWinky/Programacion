-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2024 a las 01:28:16
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

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
(1, 'High Density Polypropylene Bags', 'Our polypropylene bags offer a reliable solution for packaging a wide range of products. With high and low density options, as well as optional anti-static features, we ensure the safety and protection of your products during storage and transportation.', 'Polypropylene Bags', 120.00, '1000', 26, 'https://amyermprueba.000webhostapp.com/imagenes/bolsapropilenoS.jpg'),
(2, 'Low Density Polypropylene Bags', 'Our polypropylene bags offer a reliable solution for packaging a wide range of products. With high and low density options, as well as optional anti-static features, we ensure the safety and protection of your products during storage and transportation.', 'Polypropylene Bags', 81.00, '1000', 35, 'https://amyermprueba.000webhostapp.com/imagenes/bolsapropilenoS.jpg'),
(3, 'White cardboard boxes', 'Wide variety that adapts to the needs, we have the following materials for your comfort.', 'Cardboard boxes', 30.00, '100', 28, 'https://amyermprueba.000webhostapp.com/imagenes/cajacartonS.jpg'),
(4, 'Kraft cardboard boxes', 'Wide variety that adapts to the needs, we have the following materials for your comfort.', 'Cardboard boxes', 28.00, '100', 21, 'https://amyermprueba.000webhostapp.com/imagenes/cajacartonS.jpg'),
(5, 'Indestructible cardboard boxes', 'Wide variety that adapts to the needs, we have the following materials for your comfort.', 'Cardboard boxes', 53.00, '100', 32, 'https://amyermprueba.000webhostapp.com/imagenes/cajacartonS.jpg'),
(6, 'Telescopic cardboard boxes', 'Wide variety that adapts to the needs, we have the following materials for your comfort.', 'Cardboard boxes', 18.00, '225', 27, 'https://amyermprueba.000webhostapp.com/imagenes/cajacartonS.jpg'),
(7, 'Cardboard boxes For archiving', 'Wide variety that adapts to the needs, we have the following materials for your comfort.', 'Cardboard boxes', 22.00, '100', 34, 'https://amyermprueba.000webhostapp.com/imagenes/cajacartonS.jpg'),
(8, 'Cardboard boxes for moving or shipping', 'Wide variety that adapts to the needs, we have the following materials for your comfort.', 'Cardboard boxes', 37.00, '100', 32, 'https://amyermprueba.000webhostapp.com/imagenes/cajacartonS.jpg'),
(9, 'Smooth roll nail 1 ½”', 'High quality nails for pneumatic guns.', 'Nail in roll', 76.00, '3600', 20, 'https://amyermprueba.000webhostapp.com/imagenes/rolloclavosS.jpg'),
(10, 'Smooth roll nail 2” ', 'High quality nails for pneumatic guns.', 'Nail in roll', 67.00, '3600', 19, 'https://amyermprueba.000webhostapp.com/imagenes/rolloclavosS.jpg'),
(11, 'Smooth roll nail 2 ½”', 'High quality nails for pneumatic guns.', 'Nail in roll', 57.00, '3600', 16, 'https://amyermprueba.000webhostapp.com/imagenes/rolloclavosS.jpg'),
(12, 'Anelado rolled cloves 1 ½”', 'High quality nails for pneumatic guns.', 'Nail in roll', 111.00, '3600', 33, 'https://amyermprueba.000webhostapp.com/imagenes/rolloclavosS.jpg'),
(13, 'Anelado rolled cloves 2” ', 'High quality nails for pneumatic guns.', 'Nail in roll', 86.00, '3600', 32, 'https://amyermprueba.000webhostapp.com/imagenes/rolloclavosS.jpg'),
(14, 'Anelado rolled cloves 2 ½”', 'High quality nails for pneumatic guns.', 'Nail in roll', 165.00, '3600', 37, 'https://amyermprueba.000webhostapp.com/imagenes/rolloclavosS.jpg'),
(15, 'Spiral roll nail (Ardox) 1 ½”', 'High quality nails for pneumatic guns.', 'Nail in roll', 98.00, '3600', 36, 'https://amyermprueba.000webhostapp.com/imagenes/tornilloS.jpg'),
(16, 'Spiral roll nail (Ardox) 2” ', 'High quality nails for pneumatic guns.', 'Nail in roll', 141.00, '3600', 27, 'https://amyermprueba.000webhostapp.com/imagenes/tornilloS.jpg'),
(17, 'Spiral roll nail (Ardox) 2 ½”', 'High quality nails for pneumatic guns.', 'Nail in roll', 436.00, '3600', 26, 'https://amyermprueba.000webhostapp.com/imagenes/tornilloS.jpg'),
(18, 'White Corners', 'Provide protection for gaskets in problem areas that can be damaged frequently.', 'Cornerbacks', 245.00, '50', 15, 'https://amyermprueba.000webhostapp.com/imagenes/esquineroS.jpg'),
(19, 'Kraft corners', 'Provide protection for gaskets in problem areas that can be damaged frequently.', 'Cornerbacks', 375.00, '50', 12, 'https://amyermprueba.000webhostapp.com/imagenes/esquineroS.jpg'),
(20, 'Plastic Corners', 'Provide protection for gaskets in problem areas that can be damaged frequently.', 'Cornerbacks', 342.00, '50', 15, 'https://amyermprueba.000webhostapp.com/imagenes/esquineroS.jpg'),
(21, 'Corner Profiles', 'Provide protection for gaskets in problem areas that can be damaged frequently.', 'Cornerbacks', 220.00, '50', 13, 'https://amyermprueba.000webhostapp.com/imagenes/rolloS.jpg'),
(22, 'Polybubble packaging 5/16', 'We offer a wide variety of poly bubble packaging options, from rolls of different widths to bubble bags, to protect your products during transport and storage. Our high quality bubble provides superior cushioning for fragile and delicate items.', 'Polybubble packaging', 250.00, '15', 23, 'https://amyermprueba.000webhostapp.com/imagenes/bubblewrapS.jpg'),
(23, 'Polybubble packaging ¾', 'We offer a wide variety of poly bubble packaging options, from rolls of different widths to bubble bags, to protect your products during transport and storage. Our high quality bubble provides superior cushioning for fragile and delicate items.', 'Polybubble packaging', 103.00, '15', 15, 'https://amyermprueba.000webhostapp.com/imagenes/bubblewrapS.jpg'),
(24, 'Polybubble packaging ½', 'We offer a wide variety of poly bubble packaging options, from rolls of different widths to bubble bags, to protect your products during transport and storage. Our high quality bubble provides superior cushioning for fragile and delicate items.', 'Polybubble packaging', 563.00, '15', 23, 'https://amyermprueba.000webhostapp.com/imagenes/bubblewrapS.jpg'),
(25, 'Polybubble packaging \"Bubble Bags\"', 'We offer a wide variety of poly bubble packaging options, from rolls of different widths to bubble bags, to protect your products during transport and storage. Our high quality bubble provides superior cushioning for fragile and delicate items.', 'Polybubble packaging', 174.00, '15', 26, 'https://amyermprueba.000webhostapp.com/imagenes/bubblewrapS.jpg'),
(26, 'Pallets', 'Our pallets are available in treated wood to meet export standards, guaranteeing the safety and stability of your products during international transportation. We also offer recycled wood options for those looking for eco-friendly solutions.', 'Pallets', 360.00, '50', 32, 'https://amyermprueba.000webhostapp.com/imagenes/palletS.jpg'),
(27, 'Polyethylene Plate', 'Die-cut polyethylene plates provide a solid, sturdy base to protect your products against impacts and abrasions. Its die-cut design allows for easy handling and customization to fit your specific packaging needs.', 'Polyethylene Plate', 214.00, '19', 23, 'https://amyermprueba.000webhostapp.com/imagenes/tape-hmS.jpg'),
(28, 'Foam', 'Our foam is available in a variety of dimensions to provide optimal protection for your products. Its closed cell structure provides excellent cushioning against shock and vibration, keeping your products safe during transport and handling.', 'Foam', 580.00, '40', 30, 'https://amyermprueba.000webhostapp.com/imagenes/foamS.jpg'),
(29, 'Wooden packaging', 'We offer a wide range of wooden packaging solutions, from boxes to custom cages and pallets, designed to ensure maximum protection and security of your products during shipping and storage.', 'Wooden packaging', 145.00, '100', 25, 'https://amyermprueba.000webhostapp.com/imagenes/cajamaderaS.jpg'),
(30, 'Tags', 'Our labels are available in different formats to suit your printing needs. From removable labels to durable marker options, we guarantee excellent print quality and adhesion.', 'Tags', 58.00, '300', 42, 'https://amyermprueba.000webhostapp.com/imagenes/etiquetaS.jpg'),
(31, 'Stretch Film', 'Our stretch film offers superior protection for your products during shipping and storage. Available in different options for manual or automatic use, as well as colors for easy product identification.', 'Stretch Film', 167.00, '24', 18, 'https://amyermprueba.000webhostapp.com/imagenes/wrapS.jpg'),
(32, 'Staples', 'Our staples are designed to provide a secure hold on a variety of materials. From industrial applications to home use, our staples ensure reliable, long-lasting performance.', 'Staples', 46.00, '2400', 26, 'https://amyermprueba.000webhostapp.com/imagenes/grapaS.jpg'),
(33, 'Steel Strap', 'We offer a wide selection of strapping to meet your specific packaging and fastening needs.', 'Strap', 175.00, '12', 18, 'https://amyermprueba.000webhostapp.com/imagenes/flejeS.jpg'),
(34, 'Stainless Steel Strap', 'We offer a wide selection of strapping to meet your specific packaging and fastening needs.', 'Strap', 179.00, '15', 23, 'https://amyermprueba.000webhostapp.com/imagenes/flejeS.jpg'),
(35, 'Polypropylene strap', 'We offer a wide selection of strapping to meet your specific packaging and fastening needs.', 'Strap', 213.00, '15', 26, 'https://amyermprueba.000webhostapp.com/imagenes/flejeS.jpg'),
(36, 'Polyester strap', 'We offer a wide selection of strapping to meet your specific packaging and fastening needs.', 'Strap', 373.00, '15', 21, 'https://amyermprueba.000webhostapp.com/imagenes/flejeS.jpg'),
(37, 'Strap Seals for strapping', 'We offer a wide selection of strapping to meet your specific packaging and fastening needs. ', 'Strap', 587.00, '15', 27, 'https://amyermprueba.000webhostapp.com/imagenes/flejeS.jpg'),
(38, 'Strapping Strap staples', 'We offer a wide selection of strapping to meet your specific packaging and fastening needs. ', 'Strap', 425.00, '15', 17, 'https://amyermprueba.000webhostapp.com/imagenes/flejeS.jpg'),
(39, 'Strapping Tensioners', 'We offer a wide selection of strapping to meet your specific packaging and fastening needs.', 'Strap', 369.00, '15', 24, 'https://amyermprueba.000webhostapp.com/imagenes/flejeS.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
