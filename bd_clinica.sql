CREATE DATABASE bd_clinica;
USE bd_clinica;

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cliente`
-- ----------------------------
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(50) NOT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cliente
-- ----------------------------

-- ----------------------------
-- Table structure for `factura_detalle`
-- ----------------------------
DROP TABLE IF EXISTS `factura_detalle`;
CREATE TABLE `factura_detalle` (
  `idfacturadetalle` int(11) NOT NULL AUTO_INCREMENT,
  `idfactura` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `cantidad` double(12,2) DEFAULT NULL,
  `precio` double(12,2) DEFAULT NULL,
  PRIMARY KEY (`idfacturadetalle`),
  KEY `idfactura` (`idfactura`),
  KEY `idproducto` (`idproducto`),
  CONSTRAINT `factura_detalle_ibfk_1` FOREIGN KEY (`idfactura`) REFERENCES `factura_encabezado` (`idfactura`),
  CONSTRAINT `factura_detalle_ibfk_2` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of factura_detalle
-- ----------------------------

-- ----------------------------
-- Table structure for `factura_encabezado`
-- ----------------------------
DROP TABLE IF EXISTS `factura_encabezado`;
CREATE TABLE `factura_encabezado` (
  `idfactura` int(11) NOT NULL AUTO_INCREMENT,
  `idcliente` int(11) NOT NULL,
  `idtienda` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `total` double(12,2) DEFAULT NULL,
  `fecha_grabacion` datetime DEFAULT NULL,
  PRIMARY KEY (`idfactura`),
  KEY `idcliente` (`idcliente`),
  KEY `idtienda` (`idtienda`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `factura_encabezado_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`),
  CONSTRAINT `factura_encabezado_ibfk_2` FOREIGN KEY (`idtienda`) REFERENCES `tienda` (`idtienda`),
  CONSTRAINT `factura_encabezado_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of factura_encabezado
-- ----------------------------

-- ----------------------------
-- Table structure for `gu_opcion`
-- ----------------------------
DROP TABLE IF EXISTS `gu_opcion`;
CREATE TABLE `gu_opcion` (
  `id_opcion` int(10) NOT NULL AUTO_INCREMENT,
  `opcion` varchar(45) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `tipo` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_opcion`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of gu_opcion
-- ----------------------------
INSERT INTO `gu_opcion` VALUES ('1', 'Pacientes', 'crud_pacientes', '1');
INSERT INTO `gu_opcion` VALUES ('2', 'Agenda', 'crud_agenda', '1');
INSERT INTO `gu_opcion` VALUES ('3', 'Impresión Paciente', 'crud_pacientes/reporte', '2');
INSERT INTO `gu_opcion` VALUES ('4', 'Reportes Agenda', 'crud_agenda/reporte', '2');
INSERT INTO `gu_opcion` VALUES ('5', 'Ingreso Doctores ', 'crud_doctor', '2');
INSERT INTO `gu_opcion` VALUES ('6', 'Impresión Doctores', 'crud_doctor/reporte', '2');
INSERT INTO `gu_opcion` VALUES ('7', 'Ingreso Areas', 'crud_areas', '3');
INSERT INTO `gu_opcion` VALUES ('8', 'Reporte', 'crud_areas/reporte', '3');
INSERT INTO `gu_opcion` VALUES ('9', 'Perfiles Usuarios', 'usuarios', '4');

-- ----------------------------
-- Table structure for `gu_rol`
-- ----------------------------
DROP TABLE IF EXISTS `gu_rol`;
CREATE TABLE `gu_rol` (
  `id_rol` int(10) NOT NULL AUTO_INCREMENT,
  `rol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of gu_rol
-- ----------------------------
INSERT INTO `gu_rol` VALUES ('1', 'Administrador');
INSERT INTO `gu_rol` VALUES ('2', 'Usuario');

-- ----------------------------
-- Table structure for `gu_rol_menu`
-- ----------------------------
DROP TABLE IF EXISTS `gu_rol_menu`;
CREATE TABLE `gu_rol_menu` (
  `id_rol_menu` int(10) NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) NOT NULL,
  `id_opcion` int(11) NOT NULL,
  PRIMARY KEY (`id_rol_menu`),
  KEY `fk12` (`id_opcion`),
  CONSTRAINT `fk12` FOREIGN KEY (`id_opcion`) REFERENCES `gu_opcion` (`id_opcion`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of gu_rol_menu
-- ----------------------------
INSERT INTO `gu_rol_menu` VALUES ('1', '1', '1');
INSERT INTO `gu_rol_menu` VALUES ('2', '1', '2');
INSERT INTO `gu_rol_menu` VALUES ('3', '1', '3');
INSERT INTO `gu_rol_menu` VALUES ('4', '1', '4');
INSERT INTO `gu_rol_menu` VALUES ('5', '1', '5');
INSERT INTO `gu_rol_menu` VALUES ('6', '1', '6');
INSERT INTO `gu_rol_menu` VALUES ('7', '1', '7');
INSERT INTO `gu_rol_menu` VALUES ('8', '1', '8');
INSERT INTO `gu_rol_menu` VALUES ('13', '1', '9');
INSERT INTO `gu_rol_menu` VALUES ('14', '2', '1');
INSERT INTO `gu_rol_menu` VALUES ('15', '2', '2');
INSERT INTO `gu_rol_menu` VALUES ('16', '2', '3');
INSERT INTO `gu_rol_menu` VALUES ('17', '2', '4');
INSERT INTO `gu_rol_menu` VALUES ('18', '2', '5');
INSERT INTO `gu_rol_menu` VALUES ('19', '2', '6');

-- ----------------------------
-- Table structure for `maestro_producto`
-- ----------------------------
DROP TABLE IF EXISTS `maestro_producto`;
CREATE TABLE `maestro_producto` (
  `id_codigo` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nombre` char(120) DEFAULT NULL,
  `precio_base` double(12,2) DEFAULT 0.00,
  `costo` double(12,2) DEFAULT 0.00,
  `disponible_website` int(11) DEFAULT 0,
  PRIMARY KEY (`id_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of maestro_producto
-- ----------------------------
INSERT INTO `maestro_producto` VALUES ('00000009', 'Jeringas', '18.00', '15.00', '1');
INSERT INTO `maestro_producto` VALUES ('00000010', 'Algodon', '14.00', '8.00', '1');
INSERT INTO `maestro_producto` VALUES ('00000011', 'Mascarias', '25.00', '15.00', '0');
INSERT INTO `maestro_producto` VALUES ('00000012', 'Antigripales', '12.00', '10.00', '1');

-- ----------------------------
-- Table structure for `maestro_proveedor`
-- ----------------------------
DROP TABLE IF EXISTS `maestro_proveedor`;
CREATE TABLE `maestro_proveedor` (
  `idproveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL DEFAULT '',
  `direccion` varchar(300) NOT NULL DEFAULT '',
  `telefono` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`idproveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of maestro_proveedor
-- ----------------------------
INSERT INTO `maestro_proveedor` VALUES ('3', 'Diana SV', 'San Salvador, Soyapango', '2234-3254');
INSERT INTO `maestro_proveedor` VALUES ('4', 'Colgate', 'San Salvador', '2222-2222');

-- ----------------------------
-- Table structure for `maestro_tienda`
-- ----------------------------
DROP TABLE IF EXISTS `maestro_tienda`;
CREATE TABLE `maestro_tienda` (
  `idtienda` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL DEFAULT '',
  `ubicacion` varchar(256) NOT NULL DEFAULT '',
  `bodega` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idtienda`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of maestro_tienda
-- ----------------------------
INSERT INTO `maestro_tienda` VALUES ('4', 'Walmart', 'San Salvador, Centro', '1');
INSERT INTO `maestro_tienda` VALUES ('5', 'Super Selectos', 'Altavista, Ilopango', '0');

-- ----------------------------
-- Table structure for `maestro_tipo_pago`
-- ----------------------------
DROP TABLE IF EXISTS `maestro_tipo_pago`;
CREATE TABLE `maestro_tipo_pago` (
  `idtipopago` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) NOT NULL,
  PRIMARY KEY (`idtipopago`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of maestro_tipo_pago
-- ----------------------------
INSERT INTO `maestro_tipo_pago` VALUES ('2', 'Paypal');
INSERT INTO `maestro_tipo_pago` VALUES ('7', 'Efectivo');
INSERT INTO `maestro_tipo_pago` VALUES ('9', 'Tarjetas de crédito');
INSERT INTO `maestro_tipo_pago` VALUES ('10', 'Depósitos bancarios');

-- ----------------------------
-- Table structure for `pre_factura`
-- ----------------------------
DROP TABLE IF EXISTS `pre_factura`;
CREATE TABLE `pre_factura` (
  `idfactura` int(11) NOT NULL AUTO_INCREMENT,
  `idcliente` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_tienda` int(11) NOT NULL,
  `cantidad` double(12,2) DEFAULT NULL,
  `precio` double(12,2) DEFAULT NULL,
  `total` double(12,2) DEFAULT NULL,
  PRIMARY KEY (`idfactura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pre_factura
-- ----------------------------

-- ----------------------------
-- Table structure for `producto`
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `idproducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(60) DEFAULT NULL,
  `precio` double(12,2) DEFAULT NULL,
  PRIMARY KEY (`idproducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of producto
-- ----------------------------

-- ----------------------------
-- Table structure for `saldos`
-- ----------------------------
DROP TABLE IF EXISTS `saldos`;
CREATE TABLE `saldos` (
  `idtienda` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `saldo` double(12,2) DEFAULT NULL,
  PRIMARY KEY (`idtienda`,`idproducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of saldos
-- ----------------------------

-- ----------------------------
-- Table structure for `tienda`
-- ----------------------------
DROP TABLE IF EXISTS `tienda`;
CREATE TABLE `tienda` (
  `idtienda` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tienda` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idtienda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tienda
-- ----------------------------

-- ----------------------------
-- Table structure for `usuario`
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(10) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `id_rol` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk17` (`id_rol`),
  CONSTRAINT `fk17` FOREIGN KEY (`id_rol`) REFERENCES `gu_rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('3', 'ron', 'ron', '1');
INSERT INTO `usuario` VALUES ('4', 'alcides', '123', '2');
