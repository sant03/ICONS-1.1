-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2022 a las 18:20:23
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `icons1`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `A├▒adir_cliente` (`nombre` VARCHAR(30), `telefono` INT(10) UNSIGNED, `direccion` VARCHAR(100), `email` VARCHAR(30))   INSERT INTO cliente 
(cli_nombre,cli_telefono,cli_direccion,cli_email)
VALUE
(nombre,telefono,direccion,email)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `A├▒adir_producto` (`codigo` VARCHAR(8), `referencia` VARCHAR(50), `precio_venta` INT, `precio_compra` INT, `minimo_compra` INT, `descripcion` VARCHAR(100), `categoria` VARCHAR(30))   INSERT INTO productos
(pro_id,pro_referencia,pro_precio_venta,pro_precio_compra,pro_min_compra,pro_descripcion,pro_categoria) 
VALUE
(codigo,referencia,precio_venta,precio_compra,minimo_compra,descripcion,categoria)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `car_id` int(11) NOT NULL,
  `car_tipo` varchar(20) DEFAULT NULL,
  `car_nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`car_id`, `car_tipo`, `car_nombre`) VALUES
(1, 'Gerencial', 'Socio PlastyFreddy'),
(2, 'Administrativo', 'Jefe de Compras'),
(3, 'Auxiliar', 'Registrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargoxusuario`
--

CREATE TABLE `cargoxusuario` (
  `Car_id` int(11) DEFAULT NULL,
  `Car_usu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargoxusuario`
--

INSERT INTO `cargoxusuario` (`Car_id`, `Car_usu_id`) VALUES
(3, 8729836),
(1, 1233454678),
(2, 1195678954),
(2, 1043118929),
(3, 1043239245);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nom_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nom_categoria`) VALUES
(1, 'Aseo'),
(2, 'Bolsas de Libra'),
(3, 'Bolsas de Kilo'),
(4, 'Bolis'),
(5, 'Hielos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cli_id` int(11) NOT NULL,
  `cli_nombre` varchar(30) NOT NULL,
  `cli_telefono` int(10) UNSIGNED DEFAULT NULL,
  `cli_direccion` varchar(100) DEFAULT NULL,
  `cli_email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cli_id`, `cli_nombre`, `cli_telefono`, `cli_direccion`, `cli_email`) VALUES
(1, 'Santiago', 3042161937, 'calle 83# 25a 163', 'santiagopotes2003@gmail.com'),
(2, 'Karolay', 3008763363, 'calle 83# 25a 163', 'karopotes1@gmail.com'),
(3, 'Angelly Potes', 3005772546, 'calle 83# 25a 163', 'a-ngika@hotmail.com'),
(4, 'Gesmidis Alvarez', 3043632793, 'Call 71 No. 33-41', 'gealvarez@gmail.com'),
(5, 'Mirtha Monzon', 3003902972, 'calle 82f# 26c 123', 'mirthamonzon@gmail.com'),
(6, 'Juliana Vita', 3013239244, 'Call 57 No. 45-55', 'juliana2004@gmail.com'),
(7, 'Gorda', 3002345678, 'Call 37 No. 69-49', 'lucrecia123@gmail.com'),
(8, 'Mauro', 3224990255, 'Cra38 47-14', 'dondeAlvaro@gmail.com'),
(9, 'Monica', 3205768493, 'Call 70 No. 45-78', 'monica1234@gmail.com'),
(10, 'Ferreteria el guerrero', 3006784530, 'Cra83 N 27-190', 'Ferreteriaguerrero@gmail.com'),
(11, 'Maria', 3048695604, 'Call 90 No 36-64', 'mariaabastos@gmail.com'),
(12, 'Osito', NULL, NULL, NULL),
(13, 'Liliana Conde', 3005768964, 'Cra 48 No 72-65 Ofi 306', 'Liliana@gmail.com'),
(14, 'Wilson', 3042135678, 'Cra 83 No. 25c 145', 'wilson@gmail.com'),
(15, 'Nadia', 3008754356, 'Call 36 45-87', 'nadia@gmail.com'),
(16, 'Orlando', 3013458398, 'Call 32 43-132', 'orlandito32@gmail.com'),
(17, 'Tienda donde Juan', 3178457685, 'Cra7B 98 D-39', 'Dondejuan@gmail.com'),
(18, 'Tica', NULL, NULL, NULL),
(19, 'Gregoria', NULL, NULL, NULL),
(20, 'Jose', NULL, NULL, NULL),
(21, 'Yair', NULL, NULL, NULL),
(22, 'El Mono cantillo', 3654789056, 'Cra38 69 D-169 Olaya/Barranquilla', 'Monocantillo@gmail.com'),
(23, 'Queseria el queso', 3004567854, 'Cra44 60-02', 'queseriaqueso23@gmail.com'),
(24, 'Cliente', NULL, NULL, NULL),
(25, 'Yeni Juliao', 3008700441, 'Cra 38 58-73', 'yenijuliao@gmail.com'),
(26, 'Farmacia Jayes', 3023456785, 'Cra 27 82-45', 'farmajayes@gmailcom'),
(27, 'Leonardo Blanco', 3024208958, 'Calle 85f 45-20', 'Leonardoblanco@gmail.com'),
(28, 'Pepito', 305467894, 'calle 76 # 34 56', 'pepito@gmaail.com'),
(33, 'Tatiana', 3004567865, 'Na', 'tati@gmail.com'),
(35, 'Pedro Cierra', 3004687543, 'calle 54 # 32 124', 'pedro@gmail.com'),
(36, 'Patricia', 3456789657, 'Calle 90 #56-03', 'patricia@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `com_numero_registro` int(11) NOT NULL,
  `com_numero_orden` int(11) DEFAULT NULL,
  `com_pro_id` varchar(8) DEFAULT NULL,
  `com_cant_pro` int(11) DEFAULT NULL,
  `com_total` int(11) DEFAULT NULL,
  `com_fecha` date DEFAULT NULL,
  `comentario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`com_numero_registro`, `com_numero_orden`, `com_pro_id`, `com_cant_pro`, `com_total`, `com_fecha`, `comentario`) VALUES
(1, 1, 'Li-000', 4, 1280, '2022-03-30', NULL),
(2, 1, 'Li-001', 13, 4940, '2022-03-30', NULL),
(3, 1, 'Li-002', 7, 3360, '2022-03-30', NULL),
(4, 1, 'Li-003', 8, 5440, '2022-03-30', NULL),
(5, 1, 'Ki-001', 10, 13000, '2022-03-30', NULL),
(6, 1, 'Ki-002', 10, 16000, '2022-03-30', NULL),
(7, 1, 'Ki-002', 2, 4600, '2022-03-30', NULL),
(8, 1, 'Ki-004', 2, 6200, '2022-03-30', NULL),
(12, 1, 'Va-001', 9, 3500, '2022-03-30', NULL),
(13, 1, 'Se-001', 7, 6000, '2022-03-30', NULL),
(15, 1, 'Bo-001', 4, 880, '2022-03-30', NULL),
(16, 5, 'Ki-001', 4, 0, '2022-08-05', NULL);

--
-- Disparadores `compras`
--
DELIMITER $$
CREATE TRIGGER `tr_UpdStockcompras` AFTER INSERT ON `compras` FOR EACH ROW UPDATE productos SET pro_cantidad = pro_cantidad + NEW.com_cant_pro 
WHERE pro_id = NEW.com_pro_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenxproveedor`
--

CREATE TABLE `ordenxproveedor` (
  `ord_numero_orden` int(11) NOT NULL,
  `ord_prov_id` int(11) DEFAULT NULL,
  `ord_fecha` date DEFAULT NULL,
  `ord_estado` enum('DISPONIBLE','USADA') DEFAULT NULL,
  `ord_can_pro` int(11) DEFAULT NULL,
  `ord_total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ordenxproveedor`
--

INSERT INTO `ordenxproveedor` (`ord_numero_orden`, `ord_prov_id`, `ord_fecha`, `ord_estado`, `ord_can_pro`, `ord_total`) VALUES
(0, 2, '2022-08-06', 'USADA', NULL, 0),
(1, 1, '2022-03-25', 'USADA', NULL, 70420),
(2, 1, '2022-04-05', 'USADA', NULL, NULL),
(3, 1, '2022-04-15', 'USADA', NULL, NULL),
(4, 1, '2022-04-30', 'USADA', NULL, NULL),
(5, 3, '2022-08-05', 'DISPONIBLE', NULL, 0),
(6, 1, '2022-09-25', 'DISPONIBLE', 19, 15660),
(7, 3, '2022-09-25', 'DISPONIBLE', 19, 15660),
(8, 1, '2022-09-25', 'DISPONIBLE', 19, 15660);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_compra`
--

CREATE TABLE `orden_compra` (
  `ord_numero_orden` int(11) NOT NULL,
  `ord_pro_id` varchar(8) DEFAULT NULL,
  `ord_cant_pro` int(11) DEFAULT NULL,
  `ord_total_pro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orden_compra`
--

INSERT INTO `orden_compra` (`ord_numero_orden`, `ord_pro_id`, `ord_cant_pro`, `ord_total_pro`) VALUES
(1, 'Li-000', 4, 1280),
(1, 'Li-001', 13, 4940),
(1, 'Li-002', 7, 3360),
(1, 'Li-003', 8, 5440),
(1, 'Ki-001', 13, 16900),
(1, 'Ki-002', 10, 16000),
(1, 'Ki-003', 2, 4600),
(1, 'Ki-004', 4, 12400),
(1, 'Ki-007', 1, 5500),
(1, 'Li-000', 4, 1280),
(1, 'Li-001', 7, 2660),
(1, 'Li-002', 5, 2400),
(1, 'Ki-001', 10, 13000),
(1, 'Ki-002', 14, 22400),
(1, 'Ki-003', 2, 4600),
(1, 'Hi-002', 4, 3400),
(1, 'Hi-002', 3, 1200),
(1, 'Hi-001', 9, 3330),
(1, 'Bo-002', 8, 2240),
(1, 'Ba-002', 4, 5600),
(1, 'Li-000', 4, 1280),
(1, 'Li-001', 4, 1520),
(1, 'Li-002', 3, 1440),
(1, 'Ki-001', 3, 3900),
(1, 'Ki-002', 4, 6400),
(1, 'Li-000', 4, 1280),
(1, 'Li-001', 7, 2660),
(1, 'Li-002', 5, 2400),
(1, 'Ki-001', 10, 13000),
(1, 'Ki-002', 14, 22400),
(1, 'Ki-003', 2, 4600),
(1, 'Hi-002', 4, 3400),
(1, 'Hi-003', 3, 1200),
(1, 'Hi-001', 9, 3330),
(1, 'Bo-002', 8, 2240),
(1, 'Ba-002', 4, 5600),
(8, 'Ki-001', 7, 9100),
(8, 'Li-002', 8, 3840),
(8, 'Li-003', 4, 2720);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `ped_id` int(11) DEFAULT NULL,
  `ped_pro_id` varchar(8) DEFAULT NULL,
  `ped_can_pro` int(11) DEFAULT NULL,
  `ped_total_pro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`ped_id`, `ped_pro_id`, `ped_can_pro`, `ped_total_pro`) VALUES
(1, 'Li-002', 3, 4800),
(1, 'Li-003', 1, 1900),
(1, 'Ki-001', 2, 4000),
(1, 'Ki-003', 1, 4500),
(1, 'Ki-002', 2, 6400),
(2, 'Li-000', 2, 2600),
(2, 'Bo-002', 1, 1000),
(3, 'Bo-002', 2, 2000),
(3, 'Hi-001', 2, 2400),
(4, 'Li-001', 1, 1400),
(4, 'Ki-001', 2, 6000),
(4, 'Ki-002', 2, 6400),
(5, 'Li-000', 1, 1300),
(5, 'Li-003', 1, 1900),
(6, 'Li-001', 1, 1400),
(6, 'Bo-002', 1, 1000),
(6, 'Hi-001', 1, 1200),
(7, 'Li-002', 2, 2800),
(7, 'Ki-001', 1, 3000),
(8, 'Li-001', 1, 1400),
(8, 'Ki-004', 1, 5500),
(9, 'Li-000', 1, 1300),
(9, 'Li-001', 1, 1400),
(9, 'Ki-001', 1, 3000),
(9, 'Bo-002', 1, 1000),
(10, 'Li-001', 2, 2800),
(10, 'Ki-001', 1, 3200),
(10, 'Ki-004', 1, 5500),
(11, 'Li-002', 3, 4800),
(11, 'Bo-002', 1, 1000),
(12, 'Li-000', 1, 1300),
(12, 'Li-001', 1, 1400),
(12, 'Li-002', 1, 1600),
(13, 'Ki-002', 1, 3200),
(13, 'Bo-002', 5, 5000),
(14, 'Li-001', 2, 2800),
(14, 'Ki-002', 2, 6400);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidoxcliente`
--

CREATE TABLE `pedidoxcliente` (
  `ped_id` int(11) NOT NULL,
  `ped_fecha` date DEFAULT NULL,
  `ped_cli_id` int(11) NOT NULL,
  `ped_total` int(11) DEFAULT NULL,
  `ped_estado` enum('DEBE','PAGADO') DEFAULT NULL,
  `ped_pago` int(11) DEFAULT NULL,
  `ped_debe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidoxcliente`
--

INSERT INTO `pedidoxcliente` (`ped_id`, `ped_fecha`, `ped_cli_id`, `ped_total`, `ped_estado`, `ped_pago`, `ped_debe`) VALUES
(1, '2022-04-05', 6, 21600, 'PAGADO', 21600, 0),
(2, '2022-04-09', 9, 3600, 'PAGADO', 3600, 0),
(3, '2022-04-09', 21, 4400, 'PAGADO', 4400, 0),
(4, '2022-04-11', 18, 13800, 'PAGADO', 13800, 0),
(5, '2022-04-11', 7, 3200, 'PAGADO', 3200, 0),
(6, '2022-04-11', 24, 2400, 'PAGADO', 2400, 0),
(7, '2022-04-11', 14, 6200, 'PAGADO', 6200, 0),
(8, '2022-04-11', 22, 6900, 'PAGADO', 6900, 0),
(9, '2022-04-17', 9, 6700, 'PAGADO', 6700, 0),
(10, '2022-04-21', 22, 11500, 'PAGADO', 11500, 0),
(11, '2022-04-21', 14, 4800, 'PAGADO', 4800, 0),
(12, '2022-04-21', 9, 4300, 'PAGADO', 4300, 0),
(13, '2022-04-27', 17, 8200, 'DEBE', 5000, 3200),
(14, '2022-04-29', 22, 6400, 'DEBE', 5500, 900);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `pro_id` varchar(8) NOT NULL,
  `pro_referencia` varchar(50) NOT NULL,
  `pro_precio_venta` int(11) DEFAULT NULL,
  `pro_precio_compra` int(11) DEFAULT NULL,
  `pro_min_compra` int(11) DEFAULT NULL,
  `pro_cantidad` int(11) DEFAULT NULL,
  `pro_estado` enum('STOCK','POR AGOTARSE','AGOTADO') DEFAULT NULL,
  `pro_descripcion` varchar(100) DEFAULT NULL,
  `pro_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`pro_id`, `pro_referencia`, `pro_precio_venta`, `pro_precio_compra`, `pro_min_compra`, `pro_cantidad`, `pro_estado`, `pro_descripcion`, `pro_categoria`) VALUES
('Ba-001', 'Basura Mediana', 2000, 1000, 3, 2, 'POR AGOTARSE', 'Pqte x 10, Negra', 1),
('Ba-002', 'Basura Jumbo', 3000, 1400, 5, 4, 'POR AGOTARSE', 'Pqte x 10, Negra', 1),
('Ba-003', 'Basura Rollo Mediano', 15000, 8000, 3, 0, 'AGOTADO', 'Rollo x 100, Negra', 1),
('Ba-004', 'Basura Rollo Jumbo', 18000, 13000, 3, 0, 'AGOTADO', 'Rollo x 100, Negra', 1),
('Ba-005', 'Basura Unidad', 200, 1400, 10, 7, 'POR AGOTARSE', 'Bolsa unidad, Negra', 1),
('Bo-001', 'Boli Corto', 700, 220, 2, 5, 'POR AGOTARSE', 'Pqte x 100, Transparente', 4),
('Bo-002', 'Boli Largo', 900, 280, 10, 8, 'STOCK', 'Pqte x 100, Transparente', 4),
('Bo-003', 'Aceitera', 900, 280, 5, 5, 'POR AGOTARSE', 'Pqte x 100, Transparente', 4),
('Hi-001', 'Hielo corto', 1200, 370, 5, 7, 'STOCK', 'Pqte x 100, para gaseosa, Transparente', 5),
('Hi-002', 'Hielo Largo', 1400, 400, 5, 4, 'POR AGOTARSE', 'Pqte x 100, Transparente', 5),
('Hi-003', 'Hielo Jumbo', 2000, 850, 3, 1, 'POR AGOTARSE', 'Pqte x 100,Azul', 5),
('Ki-001', '2 Kilos', 2000, 1300, 15, 8, 'POR AGOTARSE', 'Manigueta, Blanca o Rayas', 3),
('Ki-002', '3 Kilos', 3200, 1600, 20, 0, 'AGOTADO', 'Manigueta, Blanca o Rayas', 3),
('Ki-003', '5 Kilos', 4500, 2300, 6, 3, 'POR AGOTARSE', 'Manigueta, Blanca o Rayas', 3),
('Ki-004', '10 Kilos', 5500, 3100, 3, 0, 'AGOTADO', 'Manigueta, Blanca o Rayas', 3),
('Ki-005', '15 Kilos', 7000, 4200, 3, 6, 'STOCK', 'Manigueta, Blanca o Rayas', 3),
('Ki-006', '20 Kilos', NULL, NULL, 3, NULL, NULL, 'Manigueta, Blanca o Rayas', 3),
('Ki-007', '25 Kilos', 9000, 5500, 3, 2, 'POR AGOTARSE', 'Manigueta, Blanca o Rayas', 3),
('Li-000', '1/2 Libra', 1300, 320, 13, 13, 'STOCK', 'Color gris, 5x8', 2),
('Li-001', '1 Libra', 1400, 380, 13, 10, 'STOCK', 'Color gris, 6x9', 2),
('Li-002', '2 Libra', 1600, 480, 13, 5, 'POR AGOTARSE', 'Color gris, 7X10', 2),
('Li-003', '3 Libra', 1900, 680, 13, 9, 'STOCK', 'Color gris, 8x12', 2),
('Pi-001', 'Paqte Pitillo de bolsa', NULL, NULL, NULL, NULL, NULL, 'Pqte x 20', 1),
('Se-001', 'Paqte Servilleta Cortada ', 2000, 1500, 3, 4, 'AGOTADO', 'Pqte x 100', 1),
('Va-001', 'Vaso 7 onzas', 1500, 800, 3, 5, 'AGOTADO', 'Pqte x 25,vaso transparente', 1),
('Va-002', 'Vaso 8 onzas', 1900, 1100, 2, NULL, NULL, 'Pqte x 20, vaso transparente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `prov_id` int(11) NOT NULL,
  `prov_nom` varchar(50) DEFAULT NULL,
  `prov_dir` varchar(100) DEFAULT NULL,
  `prov_tel` int(11) DEFAULT NULL,
  `prov_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`prov_id`, `prov_nom`, `prov_dir`, `prov_tel`, `prov_email`) VALUES
(1, 'Plastidias', 'Cra 19 68-59', NULL, 'plastidias@gmail.com'),
(2, 'Plásticos Barranquilla', 'Calle 83 # 25 a-163', 2147483647, 'PlasticosBaq@gmail.com'),
(3, 'Centro', 'Na', 0, 'centro@gmail.com'),
(4, 'SurtiPlasticos', 'Cr 45 # 76-32', 2147483647, 'surtiplas@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_nombres` varchar(50) NOT NULL,
  `usu_apellidos` varchar(50) NOT NULL,
  `usu_contraseña` varchar(50) NOT NULL,
  `usu_fecha_Nacimiento` date NOT NULL,
  `usu_email` varchar(30) DEFAULT NULL,
  `usu_telefono` int(10) UNSIGNED DEFAULT NULL,
  `usu_edad` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_nombres`, `usu_apellidos`, `usu_contraseña`, `usu_fecha_Nacimiento`, `usu_email`, `usu_telefono`, `usu_edad`) VALUES
(8729836, 'Karolay Esther', 'Potes Monzón', 'Esther3030', '1997-08-24', 'karopotes01@gmail.com', 3008763367, 26),
(1043118929, 'Juliana', 'Vita', '0429juli', '2003-09-29', 'julivita029@gmail.com', 3013239244, 19),
(1043239245, 'Angelly', 'Potes', 'angelly123', '1991-06-16', 'angie13potes@gmail.com', 3005772546, 31),
(1195678954, 'Santiago Andres', 'Potes Monzon', 'Sant_032003', '2003-06-13', 'santiagopotes2003@gmail.com', 3042162834, 19),
(1233454678, 'Freddy Javier', 'Potes Vasquez', 'Freddy_1985', '1961-12-17', 'Freddypotes61@gmail.com', 3215105793, 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `ven_id` int(11) NOT NULL,
  `ven_cli_id` int(11) DEFAULT NULL,
  `ven_pro_id` varchar(8) DEFAULT NULL,
  `ven_cant_pro` int(11) DEFAULT NULL,
  `ven_total` int(11) DEFAULT NULL,
  `ven_estado_pago` enum('PAGADO','DEBE') DEFAULT NULL,
  `ven_fecha` date DEFAULT NULL,
  `ven_pago` int(11) DEFAULT NULL,
  `ven_debe` int(11) DEFAULT NULL,
  `comentario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`ven_id`, `ven_cli_id`, `ven_pro_id`, `ven_cant_pro`, `ven_total`, `ven_estado_pago`, `ven_fecha`, `ven_pago`, `ven_debe`, `comentario`) VALUES
(1, 3, 'Li-000', 3, 3900, 'PAGADO', '2022-03-15', NULL, NULL, NULL),
(2, 3, 'Li-001', 3, 4200, 'DEBE', '2022-03-15', 1400, 1400, NULL),
(3, 8, 'Ki-004', 4, 22000, 'PAGADO', '2022-04-01', 22000, 0, NULL),
(4, 11, 'Li-003', 2, 3800, 'PAGADO', '2022-04-01', 3800, 0, NULL),
(5, 11, 'Ki-001', 7, 14000, 'DEBE', '2022-04-03', 8600, 5400, NULL),
(6, 11, 'Li-001', 1, 1400, 'PAGADO', '2022-04-03', 1400, 0, NULL),
(7, 11, 'Ki-001', 1, 2000, 'PAGADO', '2022-04-03', 2000, 0, NULL),
(8, 11, 'Hi-002', 1, 1400, 'PAGADO', '2022-04-05', 1400, 0, NULL),
(9, 11, 'Ba-002', 1, 3000, 'PAGADO', '2022-04-05', 2500, 0, NULL),
(10, 19, 'Li-000', 2, 2600, 'PAGADO', '2022-04-05', 2600, 0, NULL),
(11, 10, 'Ki-002', 1, 3200, 'PAGADO', '2022-04-05', 3200, 0, NULL),
(12, 23, 'Ki-007', 1, 9000, 'PAGADO', '2022-04-21', 9000, 0, NULL),
(13, 16, 'Li-002', 1, 1600, 'PAGADO', '2022-04-21', 1600, 0, NULL),
(14, 24, 'Hi-003', 1, 2200, 'PAGADO', '2022-04-21', 2200, 0, NULL),
(15, 26, 'Ki-001', 1, 3000, 'PAGADO', '2022-04-23', 3000, 0, NULL),
(16, 15, 'Ki-002', 1, 3200, 'PAGADO', '2022-04-23', 3200, 0, NULL),
(17, 18, 'Ki-001', 1, 3000, 'PAGADO', '2022-04-23', 3000, 0, NULL),
(18, 8, 'Ki-002', 2, 6400, 'PAGADO', '2022-04-25', 6400, 0, NULL),
(19, 7, 'Li-000', 1, 1300, 'PAGADO', '2022-04-25', 1300, 0, NULL),
(20, 17, 'Ki-002', 1, 3200, 'PAGADO', '2022-04-25', 3200, 0, NULL),
(21, 21, 'Li-001', 2, 2800, 'PAGADO', '2022-04-27', 2800, 0, NULL),
(22, 25, 'Ba-002', 2, 5000, 'PAGADO', '2022-04-27', 5000, 0, NULL),
(23, 1, 'Ki-002', 3, 9600, 'DEBE', '2022-04-29', 0, 9600, NULL),
(24, 6, 'Bo-002', 4, 4000, 'DEBE', '2022-04-29', 2000, 2000, NULL),
(25, 3, 'Bo-003', 5, 4500, 'PAGADO', '2022-04-29', 2000, 0, NULL),
(27, 27, 'Ba-001', 3, 6000, 'PAGADO', '2022-09-21', 0, 0, 'Cliente satisfecho');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`car_id`);

--
-- Indices de la tabla `cargoxusuario`
--
ALTER TABLE `cargoxusuario`
  ADD KEY `Car_id` (`Car_id`),
  ADD KEY `Car_usu_id` (`Car_usu_id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cli_id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`com_numero_registro`),
  ADD KEY `com_pro_id` (`com_pro_id`),
  ADD KEY `com_numero_orden` (`com_numero_orden`);

--
-- Indices de la tabla `ordenxproveedor`
--
ALTER TABLE `ordenxproveedor`
  ADD PRIMARY KEY (`ord_numero_orden`),
  ADD KEY `ord_prov_id` (`ord_prov_id`);

--
-- Indices de la tabla `orden_compra`
--
ALTER TABLE `orden_compra`
  ADD KEY `ord_pro_id` (`ord_pro_id`),
  ADD KEY `ord_numero_orden` (`ord_numero_orden`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD KEY `ped_id` (`ped_id`),
  ADD KEY `ped_pro_id` (`ped_pro_id`);

--
-- Indices de la tabla `pedidoxcliente`
--
ALTER TABLE `pedidoxcliente`
  ADD PRIMARY KEY (`ped_id`),
  ADD KEY `ped_cli_id` (`ped_cli_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `pro_categoria` (`pro_categoria`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`prov_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`ven_id`),
  ADD KEY `ven_cli_id` (`ven_cli_id`),
  ADD KEY `ven_pro_id` (`ven_pro_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `com_numero_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `pedidoxcliente`
--
ALTER TABLE `pedidoxcliente`
  MODIFY `ped_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `prov_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `ven_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cargoxusuario`
--
ALTER TABLE `cargoxusuario`
  ADD CONSTRAINT `cargoxusuario_ibfk_1` FOREIGN KEY (`Car_id`) REFERENCES `cargo` (`car_id`),
  ADD CONSTRAINT `cargoxusuario_ibfk_2` FOREIGN KEY (`Car_usu_id`) REFERENCES `usuario` (`usu_id`);

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`com_pro_id`) REFERENCES `productos` (`pro_id`),
  ADD CONSTRAINT `compras_ibfk_3` FOREIGN KEY (`com_numero_orden`) REFERENCES `ordenxproveedor` (`ord_numero_orden`);

--
-- Filtros para la tabla `ordenxproveedor`
--
ALTER TABLE `ordenxproveedor`
  ADD CONSTRAINT `ordenxproveedor_ibfk_2` FOREIGN KEY (`ord_prov_id`) REFERENCES `proveedor` (`prov_id`);

--
-- Filtros para la tabla `orden_compra`
--
ALTER TABLE `orden_compra`
  ADD CONSTRAINT `orden_compra_ibfk_1` FOREIGN KEY (`ord_pro_id`) REFERENCES `productos` (`pro_id`),
  ADD CONSTRAINT `orden_compra_ibfk_2` FOREIGN KEY (`ord_numero_orden`) REFERENCES `ordenxproveedor` (`ord_numero_orden`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`ped_id`) REFERENCES `pedidoxcliente` (`ped_id`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`ped_pro_id`) REFERENCES `productos` (`pro_id`);

--
-- Filtros para la tabla `pedidoxcliente`
--
ALTER TABLE `pedidoxcliente`
  ADD CONSTRAINT `pedidoxcliente_ibfk_1` FOREIGN KEY (`ped_cli_id`) REFERENCES `cliente` (`cli_id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`pro_categoria`) REFERENCES `categorias` (`id_categoria`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`ven_cli_id`) REFERENCES `cliente` (`cli_id`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`ven_pro_id`) REFERENCES `productos` (`pro_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
