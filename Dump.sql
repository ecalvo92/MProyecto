CREATE DATABASE  IF NOT EXISTS `cursobd` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `cursobd`;
-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: cursobd
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `tcarrito`
--

DROP TABLE IF EXISTS `tcarrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tcarrito` (
  `Consecutivo` bigint(20) NOT NULL AUTO_INCREMENT,
  `ConsecutivoProducto` bigint(20) DEFAULT NULL,
  `ConsecutivoUsuario` bigint(20) DEFAULT NULL,
  `CantidadDeseada` int(11) DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`Consecutivo`),
  KEY `FK_Usuario` (`ConsecutivoUsuario`),
  KEY `FK_Producto` (`ConsecutivoProducto`),
  CONSTRAINT `FK_Producto` FOREIGN KEY (`ConsecutivoProducto`) REFERENCES `tproducto` (`Consecutivo`),
  CONSTRAINT `FK_Usuario` FOREIGN KEY (`ConsecutivoUsuario`) REFERENCES `tusuario` (`Consecutivo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tcarrito`
--

LOCK TABLES `tcarrito` WRITE;
/*!40000 ALTER TABLE `tcarrito` DISABLE KEYS */;
INSERT INTO `tcarrito` VALUES (8,2,21,2,'2024-12-04 20:34:32');
/*!40000 ALTER TABLE `tcarrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tdetalle`
--

DROP TABLE IF EXISTS `tdetalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tdetalle` (
  `Consecutivo` bigint(20) NOT NULL AUTO_INCREMENT,
  `ConsecutivoMaestro` bigint(20) DEFAULT NULL,
  `ConsecutivoProducto` bigint(20) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Precio` decimal(18,2) DEFAULT NULL,
  `Total` decimal(18,2) DEFAULT NULL,
  PRIMARY KEY (`Consecutivo`),
  KEY `FK_DetalleMaestro` (`ConsecutivoMaestro`),
  KEY `FK_DetalleProducto` (`ConsecutivoProducto`),
  CONSTRAINT `FK_DetalleMaestro` FOREIGN KEY (`ConsecutivoMaestro`) REFERENCES `tmaestro` (`Consecutivo`),
  CONSTRAINT `FK_DetalleProducto` FOREIGN KEY (`ConsecutivoProducto`) REFERENCES `tproducto` (`Consecutivo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tdetalle`
--

LOCK TABLES `tdetalle` WRITE;
/*!40000 ALTER TABLE `tdetalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `tdetalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmaestro`
--

DROP TABLE IF EXISTS `tmaestro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tmaestro` (
  `Consecutivo` bigint(20) NOT NULL AUTO_INCREMENT,
  `Fecha` datetime DEFAULT NULL,
  `ConsecutivoUsuario` bigint(20) DEFAULT NULL,
  `Total` decimal(18,2) DEFAULT NULL,
  PRIMARY KEY (`Consecutivo`),
  KEY `FK_MaestroUsuario` (`ConsecutivoUsuario`),
  CONSTRAINT `FK_MaestroUsuario` FOREIGN KEY (`ConsecutivoUsuario`) REFERENCES `tusuario` (`Consecutivo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmaestro`
--

LOCK TABLES `tmaestro` WRITE;
/*!40000 ALTER TABLE `tmaestro` DISABLE KEYS */;
/*!40000 ALTER TABLE `tmaestro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tproducto`
--

DROP TABLE IF EXISTS `tproducto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tproducto` (
  `Consecutivo` bigint(20) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(1000) NOT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Imagen` varchar(1000) NOT NULL,
  PRIMARY KEY (`Consecutivo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tproducto`
--

LOCK TABLES `tproducto` WRITE;
/*!40000 ALTER TABLE `tproducto` DISABLE KEYS */;
INSERT INTO `tproducto` VALUES (2,'Sustagen de Vainillla','Es un alimento en polvo que ofrece un equilibrio de nutrientes para complementar la dieta habitual de niños, deportistas y personas debilitadas.',12500.00,8,'/View/products_images/2.jpg'),(3,'Chocoleche','Chocoleche es una combinación de leche 100% pura de vaca y cremoso chocolate, es un producto de la Cooperativa de Productores de Leche Dos Pinos.',4200.00,5,'/View/products_images/R.jpg');
/*!40000 ALTER TABLE `tproducto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trol`
--

DROP TABLE IF EXISTS `trol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trol` (
  `Consecutivo` int(11) NOT NULL AUTO_INCREMENT,
  `NombreRol` varchar(50) NOT NULL,
  PRIMARY KEY (`Consecutivo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trol`
--

LOCK TABLES `trol` WRITE;
/*!40000 ALTER TABLE `trol` DISABLE KEYS */;
INSERT INTO `trol` VALUES (1,'Administrador(a)'),(2,'Cliente(a)');
/*!40000 ALTER TABLE `trol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tusuario`
--

DROP TABLE IF EXISTS `tusuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tusuario` (
  `Consecutivo` bigint(11) NOT NULL AUTO_INCREMENT,
  `Identificacion` varchar(20) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `CorreoElectronico` varchar(80) NOT NULL,
  `Contrasena` varchar(10) NOT NULL,
  `Activo` bit(1) NOT NULL,
  `ConsecutivoRol` int(11) NOT NULL,
  PRIMARY KEY (`Consecutivo`),
  UNIQUE KEY `Identificacion_UNIQUE` (`Identificacion`),
  UNIQUE KEY `CorreoElectronico_UNIQUE` (`CorreoElectronico`),
  KEY `FK_ROL` (`ConsecutivoRol`),
  CONSTRAINT `FK_ROL` FOREIGN KEY (`ConsecutivoRol`) REFERENCES `trol` (`Consecutivo`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tusuario`
--

LOCK TABLES `tusuario` WRITE;
/*!40000 ALTER TABLE `tusuario` DISABLE KEYS */;
INSERT INTO `tusuario` VALUES (20,'304590415','EDUARDO JOSE CALVO CASTILLO','ecalvo90415@ufide.ac.cr','90415',_binary '',1),(21,'304590416','FRANCINI DE LOS ANGELES ROMERO ARAYA','ecalvo90416@ufide.ac.cr','90416',_binary '',2);
/*!40000 ALTER TABLE `tusuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'cursobd'
--
/*!50003 DROP PROCEDURE IF EXISTS `ActualizarContrasenna` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarContrasenna`(pConsecutivo bigint,
																	pCodigo varchar(10))
BEGIN

	UPDATE 	cursobd.tusuario
    SET 	Contrasena = pCodigo
    WHERE	Consecutivo = pConsecutivo;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ActualizarPerfil` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarPerfil`(pConsecutivo bigint,
															   pIdentificacion varchar(20),
															   pNombre varchar(255),
															   pCorreo varchar(80),
                                                               pConsecutivoRol int)
BEGIN

	UPDATE 	cursobd.tusuario
    SET 	Identificacion = pIdentificacion,
			Nombre = pNombre,
            CorreoElectronico = pCorreo,
            ConsecutivoRol = CASE WHEN pConsecutivoRol != 0 THEN pConsecutivoRol ELSE ConsecutivoRol END
    WHERE	Consecutivo = pConsecutivo;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ActualizarProducto` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarProducto`(pConsecutivo bigint,
																 pNombre varchar(100),
																 pDescripcion varchar(1000),
																 pPrecio decimal(10,2),
																 pCantidad int,
																 pImagen varchar(1000))
BEGIN

	UPDATE 	cursobd.tproducto
    SET 	Nombre = pNombre,
			Descripcion = pDescripcion,
            Precio = pPrecio,
            Cantidad = pCantidad,
            Imagen = CASE WHEN pImagen = '' THEN Imagen ELSE pImagen END
    WHERE	Consecutivo = pConsecutivo;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `CambiarEstadoUsuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `CambiarEstadoUsuario`(pConsecutivo bigint)
BEGIN

	/* Borrado físico
		DELETE FROM cursobd.tusuario
		WHERE	Consecutivo = pConsecutivo;
    */

	/*Borrado lógico*/
	UPDATE 	cursobd.tusuario
    SET 	Activo = CASE WHEN Activo = 1 THEN 0 ELSE 1 END
    WHERE	Consecutivo = pConsecutivo;
    

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ConsultarCarrito` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarCarrito`(pConsecutivo bigint)
BEGIN

	SELECT	C.Consecutivo,
			C.ConsecutivoProducto,
            P.Nombre,
            IFNULL(C.CantidadDeseada,0) 'CantidadDeseada',
            IFNULL(P.Precio,0) 'TotalUnitario',
            IFNULL(C.CantidadDeseada * P.Precio, 0) 'Total'
	FROM 	cursobd.tCarrito C
    INNER 	JOIN cursobd.tProducto P on C.ConsecutivoProducto = P.Consecutivo
    WHERE 	C.ConsecutivoUsuario = pConsecutivo;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ConsultarProducto` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarProducto`(pConsecutivo bigint)
BEGIN

	SELECT	Consecutivo,
			Nombre,
			Descripcion,
			Precio,
			Cantidad,
            Imagen
	FROM 	cursobd.tproducto
    WHERE   Consecutivo = pConsecutivo;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ConsultarProductos` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarProductos`()
BEGIN

	SELECT	Consecutivo,
			Nombre,
			Descripcion,
			Precio,
			Cantidad,
            Imagen
	FROM 	cursobd.tproducto;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ConsultarResumenCarrito` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarResumenCarrito`(pConsecutivo bigint)
BEGIN

	SELECT	IFNULL(SUM(C.CantidadDeseada),0) 'Cantidad',
            IFNULL(SUM(C.CantidadDeseada * P.Precio), 0) 'Total'
	FROM 	cursobd.tCarrito C
    INNER 	JOIN cursobd.tProducto P on C.ConsecutivoProducto = P.Consecutivo
    WHERE 	C.ConsecutivoUsuario = pConsecutivo;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ConsultarRoles` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarRoles`()
BEGIN

	SELECT	Consecutivo, NombreRol
	FROM 	cursobd.tRol;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ConsultarUsuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarUsuario`(pConsecutivo bigint)
BEGIN

	SELECT	U.Consecutivo,
			Identificacion,
			Nombre,
			CorreoElectronico,
			Activo,
			ConsecutivoRol,
            R.NombreRol
	FROM 	cursobd.tusuario U
    INNER 	JOIN cursobd.tRol R on U.ConsecutivoRol = R.Consecutivo
	WHERE 	U.Consecutivo = pConsecutivo;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ConsultarUsuarios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarUsuarios`(pConsecutivo bigint)
BEGIN

	SELECT	U.Consecutivo,
			Identificacion,
			Nombre,
			CorreoElectronico,
			Activo,
            CASE WHEN Activo = 1 THEN 'Activo' ELSE 'Inactivo' END 'DescripcionActivo',
			ConsecutivoRol,
            R.NombreRol
	FROM 	cursobd.tusuario U
    INNER 	JOIN cursobd.tRol R on U.ConsecutivoRol = R.Consecutivo
    WHERE 	U.Consecutivo != pConsecutivo;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `IniciarSesion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `IniciarSesion`(pCorreoElectronico varchar(80),
															pContrasena varchar(10))
BEGIN

	SELECT	U.Consecutivo,
			Identificacion,
			Nombre,
			CorreoElectronico,
			Activo,
			ConsecutivoRol,
            R.NombreRol
	FROM 	cursobd.tusuario U
    INNER 	JOIN cursobd.tRol R on U.ConsecutivoRol = R.Consecutivo
	WHERE 	CorreoElectronico = pCorreoElectronico
		AND Contrasena = pContrasena
        AND Activo = 1;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `RecuperarAcceso` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `RecuperarAcceso`(pCorreoElectronico varchar(80))
BEGIN

	SELECT	Consecutivo,
			Identificacion,
			Nombre,
			CorreoElectronico,
			Activo,
			ConsecutivoRol
	FROM 	cursobd.tusuario
	WHERE 	CorreoElectronico = pCorreoElectronico;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `RegistrarCarrito` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarCarrito`( pConsecutivoUsuario BIGINT,
																pConsecutivoProducto BIGINT,
																pCantidad INT)
BEGIN

	IF(SELECT COUNT(*) FROM tCarrito WHERE ConsecutivoUsuario = pConsecutivoUsuario 
									   AND ConsecutivoProducto =  pConsecutivoProducto) = 0
	THEN

		INSERT INTO cursobd.tcarrito(ConsecutivoProducto,ConsecutivoUsuario,CantidadDeseada,Fecha)
		VALUES (pConsecutivoProducto,pConsecutivoUsuario,pCantidad,NOW());

	ELSE
    
		UPDATE cursobd.tcarrito
        SET CantidadDeseada = pCantidad,
			Fecha = NOW()
		WHERE ConsecutivoUsuario = pConsecutivoUsuario 
		  AND ConsecutivoProducto =  pConsecutivoProducto;

	END IF;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `RegistrarProducto` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarProducto`(pNombre varchar(100),
																pDescripcion varchar(1000),
																pPrecio decimal(10,2),
																pCantidad int,
																pImagen varchar(1000))
BEGIN

	INSERT INTO `cursobd`.`tproducto`(Nombre,Descripcion,Precio,Cantidad,Imagen)
	VALUES(pNombre,pDescripcion,pPrecio,pCantidad,pImagen);

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `RegistrarUsuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarUsuario`(pIdentificacion varchar(20),
															 pNombre varchar(255),
															 pCorreoElectronico varchar(80),
															 pContrasena varchar(10))
BEGIN

	INSERT INTO cursobd.tusuario(Identificacion,Nombre,CorreoElectronico,Contrasena,Activo,ConsecutivoRol)
	VALUES	(pIdentificacion,pNombre,pCorreoElectronico,pContrasena,1,2);

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `RemoverProductoCarrito` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `RemoverProductoCarrito`(pConsecutivoUsuario bigint, pConsecutivoProducto bigint)
BEGIN

	DELETE FROM cursobd.tCarrito
	WHERE	ConsecutivoUsuario = pConsecutivoUsuario
		AND ConsecutivoProducto = pConsecutivoProducto;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-04 20:48:00
