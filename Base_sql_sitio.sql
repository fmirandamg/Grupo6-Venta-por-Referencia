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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adm_referenciados`
--

CREATE TABLE IF NOT EXISTS `adm_referenciados` (
  `URE_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `URE_NOMBRES` varchar(30) NOT NULL,
  `URE_APELLIDOS` varchar(30) NOT NULL,
  `URE_EMAIL` varchar(30) DEFAULT NULL,
  `URE_TELF1` varchar(10) DEFAULT NULL,
  `URE_TELF2` varchar(10) DEFAULT NULL,
  `URE_ESTADO` char(1) NOT NULL,
  `URE_FECHA_REG` date DEFAULT NULL,
  PRIMARY KEY (`URE_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Estructura de tabla para la tabla `inv_prosucto`
--

CREATE TABLE IF NOT EXISTS `inv_prosucto` (
  `PROD_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `PROD_DESCRIPCION` varchar(50) NOT NULL,
  `PROD_CANTIDAD` int(10) NOT NULL,
  `PROD_VALOR_VTA` decimal(10,2) DEFAULT NULL,
  `PROD_VALOR_COMIS` decimal(10,2) DEFAULT NULL,
  `PROD_ESTADO` char(1) NOT NULL,
  `PROD_VAL_COSTO` decimal(10,2) NOT NULL,
  `USR_CODIGO` int(11) DEFAULT NULL,
  `PROD_FECHA` date NOT NULL,
  PRIMARY KEY (`PROD_CODIGO`),
  KEY `USR_CODIGO` (`USR_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`USR_CODIGO`),
  KEY `TIP_CODIGO` (`TIP_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adm_referencia`
--
ALTER TABLE `adm_referencia`
  ADD CONSTRAINT `FK_USR_REF` FOREIGN KEY (`USR_CODIGO`) REFERENCES `seg_usuario` (`USR_CODIGO`),
  ADD CONSTRAINT `FK_PROD_REF` FOREIGN KEY (`PROD_CODIGO`) REFERENCES `inv_prosucto` (`PROD_CODIGO`),
  ADD CONSTRAINT `FK_URE_REFER` FOREIGN KEY (`URE_CODIGO`) REFERENCES `adm_referenciados` (`URE_CODIGO`);

--
-- Filtros para la tabla `adm_seguimiento`
--
ALTER TABLE `adm_seguimiento`
  ADD CONSTRAINT `FK_SEGUI_ESTAD` FOREIGN KEY (`ESG_CODIGO`) REFERENCES `adm_segui_estados` (`ESG_CODIGO`),
  ADD CONSTRAINT `FK_REF_SEGUI` FOREIGN KEY (`REF_CODIGO`) REFERENCES `adm_referencia` (`REF_SECUENCIA`),
  ADD CONSTRAINT `FK_USUARIO_SEGUI` FOREIGN KEY (`USR_CODIGO`) REFERENCES `seg_usuario` (`USR_CODIGO`);

--
-- Filtros para la tabla `inv_prosucto`
--
ALTER TABLE `inv_prosucto`
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
