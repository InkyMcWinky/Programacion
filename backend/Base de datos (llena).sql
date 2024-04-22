CREATE DATABASE  IF NOT EXISTS `proyecto_wps` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `proyecto_wps`;
-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: proyecto_wps
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `compras`
--

DROP TABLE IF EXISTS `compras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compras` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `UsuarioID` int DEFAULT NULL,
  `ProductoID` int DEFAULT NULL,
  `Cantidad` int DEFAULT NULL,
  `PrecioUnitario` decimal(10,2) DEFAULT NULL,
  `FechaCompra` date DEFAULT NULL,
  `EstadoCompra` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `UsuarioID` (`UsuarioID`),
  KEY `ProductoID` (`ProductoID`),
  CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`UsuarioID`) REFERENCES `usuarios` (`ID`),
  CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`ProductoID`) REFERENCES `productos` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compras`
--

LOCK TABLES `compras` WRITE;
/*!40000 ALTER TABLE `compras` DISABLE KEYS */;
/*!40000 ALTER TABLE `compras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` text,
  `Categoria` varchar(50) DEFAULT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `UnidadMedida` varchar(20) DEFAULT NULL,
  `Stock` int NOT NULL,
  `Imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Bolsas de Polipropileno de Alta Densidad','Nuestras bolsas de polipropileno ofrecen una solución confiable para el empaque de una amplia gama de productos. Con opciones de alta y baja densidad, así como características antiestáticas opcionales, garantizamos la seguridad y protección de tus productos durante el almacenamiento y transporte. ','Bolsas de Polipropileno',100.00,'',26,NULL),(2,'Bolsas de Polipropileno de Baja Densidad','Nuestras bolsas de polipropileno ofrecen una solución confiable para el empaque de una amplia gama de productos. Con opciones de alta y baja densidad, así como características antiestáticas opcionales, garantizamos la seguridad y protección de tus productos durante el almacenamiento y transporte. ','Bolsas de Polipropileno',100.00,NULL,35,NULL),(3,'Cajas de cartón Blancas','Amplia variedad que se adecuan a las necesidades, contamos con los siguientes materiales para su comodidad.  ','Cajas de cartón',100.00,NULL,62,NULL),(4,'Cajas de cartón Kraft','Amplia variedad que se adecuan a las necesidades, contamos con los siguientes materiales para su comodidad.','Cajas de cartón',100.00,NULL,21,NULL),(5,'Cajas de cartón Indestructibles','Amplia variedad que se adecuan a las necesidades, contamos con los siguientes materiales para su comodidad.','Cajas de cartón',100.00,NULL,32,NULL),(6,'Cajas de cartón Telescópica','Amplia variedad que se adecuan a las necesidades, contamos con los siguientes materiales para su comodidad.','Cajas de cartón',100.00,NULL,41,NULL),(7,'Cajas de cartón Para archivar','Amplia variedad que se adecuan a las necesidades, contamos con los siguientes materiales para su comodidad.','Cajas de cartón',100.00,NULL,57,NULL),(8,'Cajas de cartón Para mudanzas o envío','Amplia variedad que se adecuan a las necesidades, contamos con los siguientes materiales para su comodidad.','Cajas de cartón',100.00,NULL,32,NULL),(9,'Clavo en rollo Liso 1 ½”','Clavos de alta calidad para pistolas neumáticas. ','Clavo en rollo ',100.00,NULL,20,NULL),(10,'Clavo en rollo Liso 2” ','Clavos de alta calidad para pistolas neumáticas. ','Clavo en rollo ',100.00,NULL,14,NULL),(11,'Clavo en rollo Liso 2 ½”','Clavos de alta calidad para pistolas neumáticas. ','Clavo en rollo ',100.00,NULL,16,NULL),(12,'Clavo en rollo Anelado 1 ½”','Clavos de alta calidad para pistolas neumáticas. ','Clavo en rollo ',100.00,NULL,63,NULL),(13,'Clavo en rollo Anelado 2” ','Clavos de alta calidad para pistolas neumáticas. ','Clavo en rollo ',100.00,NULL,74,NULL),(14,'Clavo en rollo Anelado 2 ½”','Clavos de alta calidad para pistolas neumáticas. ','Clavo en rollo ',100.00,NULL,12,NULL),(15,'Clavo en rollo Espiral (Ardox) 1 ½”','Clavos de alta calidad para pistolas neumáticas. ','Clavo en rollo ',100.00,NULL,12,NULL),(16,'Clavo en rollo Espiral (Ardox) 2” ','Clavos de alta calidad para pistolas neumáticas. ','Clavo en rollo ',100.00,NULL,42,NULL),(17,'Clavo en rollo Espiral (Ardox) 2 ½”','Clavos de alta calidad para pistolas neumáticas. ','Clavo en rollo ',100.00,NULL,14,NULL),(18,'Esquineros Blancos','Para brindar protección a empaques en áreas que resultan problemáticas que pueden dañarse con frecuencia. ','Esquineros',100.00,NULL,52,NULL),(19,'Esquineros Kraft','Para brindar protección a empaques en áreas que resultan problemáticas que pueden dañarse con frecuencia. ','Esquineros',100.00,NULL,12,NULL),(20,'Esquineros Plásticos','Para brindar protección a empaques en áreas que resultan problemáticas que pueden dañarse con frecuencia. ','Esquineros',100.00,NULL,96,NULL),(21,'Esquineros Perfiles','Para brindar protección a empaques en áreas que resultan problemáticas que pueden dañarse con frecuencia. ','Esquineros',100.00,NULL,45,NULL),(22,'Empaque de poliburbuja 5/16','Ofrecemos una amplia variedad de opciones de empaque de poliburbuja, desde rollos de diferentes anchos hasta bolsas de burbuja, para proteger tus productos durante el transporte y almacenamiento. Nuestra burbuja de alta calidad proporciona un amortiguamiento superior para objetos frágiles y delicados. ','Empaque de poliburbuja ',100.00,NULL,23,NULL),(23,'Empaque de poliburbuja ¾ ','Ofrecemos una amplia variedad de opciones de empaque de poliburbuja, desde rollos de diferentes anchos hasta bolsas de burbuja, para proteger tus productos durante el transporte y almacenamiento. Nuestra burbuja de alta calidad proporciona un amortiguamiento superior para objetos frágiles y delicados. ','Empaque de poliburbuja ',100.00,NULL,15,NULL),(24,'Empaque de poliburbuja ½','Ofrecemos una amplia variedad de opciones de empaque de poliburbuja, desde rollos de diferentes anchos hasta bolsas de burbuja, para proteger tus productos durante el transporte y almacenamiento. Nuestra burbuja de alta calidad proporciona un amortiguamiento superior para objetos frágiles y delicados. ','Empaque de poliburbuja ',100.00,NULL,23,NULL),(25,'Empaque de poliburbuja \"Bolsas de burbuja\" ','Ofrecemos una amplia variedad de opciones de empaque de poliburbuja, desde rollos de diferentes anchos hasta bolsas de burbuja, para proteger tus productos durante el transporte y almacenamiento. Nuestra burbuja de alta calidad proporciona un amortiguamiento superior para objetos frágiles y delicados. ','Empaque de poliburbuja ',100.00,NULL,41,NULL),(26,'Pallets','Nuestros pallets están disponibles en madera tratada para cumplir con los estándares de exportación, garantizando la seguridad y estabilidad de tus productos durante el transporte internacional. También ofrecemos opciones de madera reciclada para aquellos que buscan soluciones eco-amigables. ','Pallets',100.00,NULL,32,NULL),(27,'Placa de Polietileno','Las placas de polietileno troqueladas proporcionan una base sólida y resistente para proteger tus productos contra impactos y abrasiones. Su diseño troquelado permite una fácil manipulación y personalización para adaptarse a tus necesidades específicas de embalaje. ','Placa de Polietileno',100.00,NULL,23,NULL),(28,'Foam','Nuestro foam está disponible en una variedad de dimensiones para brindar una protección óptima a tus productos. Su estructura de células cerradas proporciona una excelente amortiguación contra golpes y vibraciones, manteniendo tus productos seguros durante el transporte y manipulación.','Foam',100.00,NULL,45,NULL),(29,'Embalajes de madera','Ofrecemos una amplia gama de soluciones de embalaje de madera, desde cajas hasta jaulas y plataformas personalizadas, diseñadas para garantizar la máxima protección y seguridad de tus productos durante el envío y almacenamiento. ','Embalajes de madera',100.00,NULL,25,NULL),(30,'Etiquetas','Nuestras etiquetas están disponibles en diferentes formatos para adaptarse a tus necesidades de impresión. Desde etiquetas removibles hasta opciones duraderas para rotuladores, garantizamos una excelente calidad de impresión y adhesión. ','Etiquetas',100.00,NULL,51,NULL),(31,'Stretch Film','Nuestro stretch film ofrece una protección superior para tus productos durante el envío y almacenamiento. Disponible en diferentes opciones de uso manual o automático, así como en colores para una fácil identificación de los productos. ','Stretch Film',100.00,NULL,84,NULL),(32,'Grapas','Nuestras grapas están diseñadas para proporcionar una sujeción segura en una variedad de materiales. Desde aplicaciones industriales hasta uso doméstico, nuestras grapas garantizan un rendimiento confiable y duradero. ','Grapas',100.00,NULL,62,NULL),(33,'Fleje Acero','Ofrecemos una amplia selección de flejes para satisfacer tus necesidades específicas de embalaje y sujeción. ','Fleje',100.00,NULL,18,NULL),(34,'Fleje Acero Inoxidable','Ofrecemos una amplia selección de flejes para satisfacer tus necesidades específicas de embalaje y sujeción. ','Fleje',100.00,NULL,39,NULL),(35,'Fleje Polipropileno','Ofrecemos una amplia selección de flejes para satisfacer tus necesidades específicas de embalaje y sujeción. ','Fleje',100.00,NULL,26,NULL),(36,'Fleje Poliester','Ofrecemos una amplia selección de flejes para satisfacer tus necesidades específicas de embalaje y sujeción. ','Fleje',100.00,NULL,63,NULL),(37,'Fleje Sellos para fleje','Ofrecemos una amplia selección de flejes para satisfacer tus necesidades específicas de embalaje y sujeción. ','Fleje',100.00,NULL,27,NULL),(38,'Fleje Grapas para fleje','Ofrecemos una amplia selección de flejes para satisfacer tus necesidades específicas de embalaje y sujeción. ','Fleje',100.00,NULL,48,NULL),(39,'Fleje Tensionadoras','Ofrecemos una amplia selección de flejes para satisfacer tus necesidades específicas de embalaje y sujeción. ','Fleje',100.00,NULL,24,NULL);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proveedores` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NombreEmpresa` varchar(100) NOT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `Contacto` varchar(100) DEFAULT NULL,
  `CorreoElectronico` varchar(100) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrador'),(2,'Cliente'),(3,'Vendedor');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Contraseña` varchar(100) NOT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `RolID` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `RolID` (`RolID`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`RolID`) REFERENCES `roles` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Ari Mendoza','arimendoza@hotmail.com','t4t','Rie aldeme 777',1),(2,'Hannibal','canibal@example.com','will<3','Baltimore 123',2);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-20 23:45:18
