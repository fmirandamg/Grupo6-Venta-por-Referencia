Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `venta_refer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adm_referencia`
--

CREATE TABLE IF NOT EXISTS `adm_referencia` (
  `REF_SECUENCIA` int(11) NOT NULL AUTO_INCREMENT,
  `URE_CODIGO` int(11) NOT NULL,
  `PROD_CODIGO` int(11) NOT NULL,
  `USR_CODIGO` int(11) NOT NULL,
  `REF_FECHA` date NOT NULL,
  `REF_VALCOMISION` decimal(10,2) NOT NULL,
  PRIMARY KEY (`REF_SECUENCIA`),
  UNIQUE KEY `URE_CODIGO` (`URE_CODIGO`,`PROD_CODIGO`,`USR_CODIGO`),
  KEY `PROD_CODIGO` (`PROD_CODIGO`),
  KEY `USR_CODIGO` (`USR_CODIGO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `adm_referencia`
--

INSERT INTO `adm_referencia` (`REF_SECUENCIA`, `URE_CODIGO`, `PROD_CODIGO`, `USR_CODIGO`, `REF_FECHA`, `REF_VALCOMISION`) VALUES
(1, 3, 1, 25, '2015-02-26', '0.00'),
(2, 3, 5, 25, '2015-02-26', '0.00'),
(3, 6, 1, 25, '2015-02-26', '0.00'),
(4, 6, 4, 25, '2015-02-26', '0.00'),
(5, 6, 5, 25, '2015-02-26', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adm_referenciados`
--

CREATE TABLE IF NOT EXISTS `adm_referenciados` (
  `URE_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `URE_NOMBRES` varchar(30) NOT NULL,
  `URE_APELLIDOS` varchar(30) NOT NULL,
  `URE_CEDULA` varchar(10) NOT NULL,
  `URE_EMAIL` varchar(30) DEFAULT NULL,
  `URE_TELF1` varchar(10) DEFAULT NULL,
  `URE_TELF2` varchar(10) DEFAULT NULL,
  `URE_ESTADO` char(1) NOT NULL,
  `URE_FECHA_REG` date DEFAULT NULL,
  `USR_CODIGO` int(11) NOT NULL,
  PRIMARY KEY (`URE_CODIGO`),
  KEY `USR_CODIGO` (`USR_CODIGO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `adm_referenciados`
--

INSERT INTO `adm_referenciados` (`URE_CODIGO`, `URE_NOMBRES`, `URE_APELLIDOS`, `URE_CEDULA`, `URE_EMAIL`, `URE_TELF1`, `URE_TELF2`, `URE_ESTADO`, `URE_FECHA_REG`, `USR_CODIGO`) VALUES
(3, 'PEDRO MARIA', 'HERNANDEZ POSORJA', '5465156465', 'usuario@correo.com', '2218031', '0990990010', 'A', '2015-02-17', 25),
(4, 'REFERIDO RAUL', 'APELLIDO RFERIDO22', '4544186456', '', '', '', 'A', '2015-02-18', 26),
(5, 'CALUDIO PILL', 'MIRAFLORES', '0965785422', 'prodfg@gmail.com', '0996587441', '', 'A', '2015-02-18', 26),
(6, 'MAURO ERICK', 'ALVAREZ MEJIA', '0936543525', 'mail@correo.com', '9866546546', '', 'A', '2015-02-18', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adm_seguimiento`
--

CREATE TABLE IF NOT EXISTS `adm_seguimiento` (
  `REF_CODIGO` int(11) NOT NULL,
  `SGI_SECUENCIA` int(11) NOT NULL AUTO_INCREMENT,
  `USR_CODIGO` int(11) NOT NULL,
  `SGI_FECHA` date NOT NULL,
  `SGI_OBSERVACION` varchar(100) NOT NULL,
  `ESG_CODIGO` char(3) NOT NULL,
  PRIMARY KEY (`SGI_SECUENCIA`),
  UNIQUE KEY `REF_CODIGO` (`REF_CODIGO`,`USR_CODIGO`),
  UNIQUE KEY `ESG_CODIGO` (`ESG_CODIGO`),
  KEY `USR_CODIGO` (`USR_CODIGO`),
  KEY `ESG_CODIGO_2` (`ESG_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adm_segui_estados`
--

CREATE TABLE IF NOT EXISTS `adm_segui_estados` (
  `ESG_CODIGO` char(3) NOT NULL,
  `ESG_DESCRIPCION` varchar(50) NOT NULL,
  PRIMARY KEY (`ESG_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_producto`
--

CREATE TABLE IF NOT EXISTS `inv_producto` (
  `PROD_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `PROD_DESCRIPCION` varchar(50) NOT NULL,
  `PROD_DETALLE` varchar(400) NOT NULL,
  `PROD_CANTIDAD` int(10) NOT NULL,
  `PROD_VALOR_VTA` decimal(10,2) DEFAULT NULL,
  `PROD_VALOR_COMIS` decimal(10,2) DEFAULT NULL,
  `PROD_ESTADO` char(1) NOT NULL,
  `PROD_VAL_COSTO` decimal(10,2) NOT NULL,
  `USR_CODIGO` int(11) DEFAULT NULL,
  `PROD_FOTO` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`PROD_CODIGO`),
  KEY `USR_CODIGO` (`USR_CODIGO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `inv_producto`
--

INSERT INTO `inv_producto` (`PROD_CODIGO`, `PROD_DESCRIPCION`, `PROD_DETALLE`, `PROD_CANTIDAD`, `PROD_VALOR_VTA`, `PROD_VALOR_COMIS`, `PROD_ESTADO`, `PROD_VAL_COSTO`, `USR_CODIGO`, `PROD_FOTO`) VALUES
(1, 'SILLAS DE CASA JARDIN', '   LAS SILLAS MAS MODERNAS PARA EL HOHAR DE HOY Y DE TODOS LOS DIAS', 115, '120.32', '10.20', 'A', '99.32', 2, NULL),
(2, 'COSAS DE CASA HOGAREÑAS', ' ', 100, '12.58', '1.88', 'A', '10.58', 2, 'sabanas.png'),
(3, 'PRODUCTO DE MESA', ' UN PRODUCTO DE MESA PENSADO PARA EL HOGAR QUE PERMITE TENER UNA VARIEDAD DE COSAS POR USAR', 5, '5.35', '2.00', 'A', '1.35', 2, NULL),
(4, 'COSITAS', ' NUEVAS COSITAS', 500, '1.00', '1.00', 'A', '1.00', 25, NULL),
(5, 'SABANAS BLANCAS', 'NUEVAS BLANCAS', 10, '12.30', '1.25', 'A', '10.32', 2, 'sabanas.png'),
(6, 'SABANAS AZULES', ' ', 25, '14.20', '2.32', 'A', '9.52', 2, NULL),
(8, 'PRODUCTO NUEVO', ' ', 5, '4.32', '1.32', 'A', '2.35', 2, NULL),
(9, 'MESAS DE HOGAR', ' MESAS DEL HOGAR', 25, '15.32', '12.00', 'A', '11.25', 2, 'mesas.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seg_accesos`
--

CREATE TABLE IF NOT EXISTS `seg_accesos` (
  `ACC_SECUENCIAL` int(11) NOT NULL AUTO_INCREMENT,
  `USR_CODIGO` int(11) NOT NULL,
  `ACC_FECHA` int(11) NOT NULL,
  PRIMARY KEY (`ACC_SECUENCIAL`,`USR_CODIGO`),
  KEY `FK_USR_CODIGO` (`USR_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seg_tipusr`
--

CREATE TABLE IF NOT EXISTS `seg_tipusr` (
  `TIP_CODIGO` char(3) NOT NULL DEFAULT '',
  `TIP_DESCRIPCION` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`TIP_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seg_tipusr`
--

INSERT INTO `seg_tipusr` (`TIP_CODIGO`, `TIP_DESCRIPCION`) VALUES
('ADM', 'ADMINISTRADOR'),
('USR', 'USUARIO'),
('VND', 'VENDEDOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seg_usuario`
--

CREATE TABLE IF NOT EXISTS `seg_usuario` (
  `USR_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `USR_NOMBRES` varchar(30) NOT NULL,
  `USR_APELLIDOS` varchar(30) NOT NULL,
  `USR_CEDULA` varchar(10) NOT NULL,
  `USR_FECHA` date DEFAULT NULL,
  `USR_ESTADO` char(1) DEFAULT NULL,
  `USR_ULT_ACCESO` date DEFAULT NULL,
  `TIP_CODIGO` char(3) NOT NULL,
  `USR_USUARIO` varchar(10) NOT NULL,
  `USR_PASSWORD` varchar(10) NOT NULL,
  `USR_EMAIL` varchar(30) DEFAULT NULL,
  `USR_FOTO` varchar(100) DEFAULT NULL,
  `USR_TEL1` varchar(10) NOT NULL,
  `USR_TEL2` varchar(10) NOT NULL,
  PRIMARY KEY (`USR_CODIGO`),
  KEY `TIP_CODIGO` (`TIP_CODIGO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `seg_usuario`
--

INSERT INTO `seg_usuario` (`USR_CODIGO`, `USR_NOMBRES`, `USR_APELLIDOS`, `USR_CEDULA`, `USR_FECHA`, `USR_ESTADO`, `USR_ULT_ACCESO`, `TIP_CODIGO`, `USR_USUARIO`, `USR_PASSWORD`, `USR_EMAIL`, `USR_FOTO`, `USR_TEL1`, `USR_TEL2`) VALUES
(2, 'FRANCISCO RAUL', 'MIRANDA GARCIA', '0918360756', '2015-02-12', 'A', NULL, 'ADM', 'fmiranda', '123', 'francisco.raul.mg@gmail.com', 'perfil_adm.png', '2218031', '0997089591'),
(25, 'KARINA CECILIA', 'GUADALUPE CARRIEL', '0998562312', '2015-02-12', 'A', NULL, 'USR', 'kari', '123', 'kari@hotmail.com', 'kari.png', '2222222', '0990990010'),
(26, 'RAUL ALBERTO', 'GUADALUPE CARRIEL', '0979879454', '2015-02-12', 'A', NULL, 'USR', 'raul', '123', '', 'Raul_al.png', '2222222', ''),
(27, 'FLORA DEL ROCIO', 'GARCIA FUENTES', '0999999999', '0000-00-00', 'A', NULL, 'USR', 'rocio', '123', '', '', '', ''),
(28, 'JUAN FRANCISCO', 'MIRANDA JIMENEZ', '0999999512', '0000-00-00', 'A', NULL, 'USR', 'juan', '123', '', '', '', ''),
(29, 'ADRIAN DAVID', 'MIRANDA GUADALUPE', '0999995874', '0000-00-00', 'A', NULL, 'USR', 'adrian', '1234', '', '', '', ''),
(30, 'JHON GREGORIO', 'MIRANDA GARCIA', '0977854455', '2015-02-21', 'A', NULL, 'USR', 'greg', '123', 'gregorio@correo.com', 'gregorio.png', '2218031', ''),
(31, 'JOSE LUISE', 'CARRASCO LINDAO', '1457895545', '2015-02-21', 'A', NULL, 'USR', 'jose', '123', 'JOSE@CORREO.COM', '', '2214587445', ''),
(32, 'PEDRO ROCADURA', 'PICAPIEDRA', '0999999999', '2015-02-23', 'A', NULL, 'USR', 'pedro', '123', 'pedro@correo.com', 'Pedro.png', '2490468', '0955545454');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adm_referencia`
--
ALTER TABLE `adm_referencia`
  ADD CONSTRAINT `FK_PROD_REF` FOREIGN KEY (`PROD_CODIGO`) REFERENCES `inv_producto` (`PROD_CODIGO`),
  ADD CONSTRAINT `FK_URE_REFER` FOREIGN KEY (`URE_CODIGO`) REFERENCES `adm_referenciados` (`URE_CODIGO`),
  ADD CONSTRAINT `FK_USR_REF` FOREIGN KEY (`USR_CODIGO`) REFERENCES `seg_usuario` (`USR_CODIGO`);

--
-- Filtros para la tabla `adm_referenciados`
--
ALTER TABLE `adm_referenciados`
  ADD CONSTRAINT `FK_USU_REFER` FOREIGN KEY (`USR_CODIGO`) REFERENCES `seg_usuario` (`USR_CODIGO`);

--
-- Filtros para la tabla `adm_seguimiento`
--
ALTER TABLE `adm_seguimiento`
  ADD CONSTRAINT `FK_REF_SEGUI` FOREIGN KEY (`REF_CODIGO`) REFERENCES `adm_referencia` (`REF_SECUENCIA`),
  ADD CONSTRAINT `FK_SEGUI_ESTAD` FOREIGN KEY (`ESG_CODIGO`) REFERENCES `adm_segui_estados` (`ESG_CODIGO`),
  ADD CONSTRAINT `FK_USUARIO_SEGUI` FOREIGN KEY (`USR_CODIGO`) REFERENCES `seg_usuario` (`USR_CODIGO`);

--
-- Filtros para la tabla `inv_producto`
--
ALTER TABLE `inv_producto`
  ADD CONSTRAINT `FK_PROD_USUARIO` FOREIGN KEY (`USR_CODIGO`) REFERENCES `seg_usuario` (`USR_CODIGO`);

--
-- Filtros para la tabla `seg_accesos`
--
ALTER TABLE `seg_accesos`
  ADD CONSTRAINT `FK_USR_CODIGO` FOREIGN KEY (`USR_CODIGO`) REFERENCES `seg_usuario` (`USR_CODIGO`);

--
-- Filtros para la tabla `seg_usuario`
--
ALTER TABLE `seg_usuario`
  ADD CONSTRAINT `FK_TIP_CODIGO` FOREIGN KEY (`TIP_CODIGO`) REFERENCES `seg_tipusr` (`TIP_CODIGO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
