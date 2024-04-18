-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2024 a las 07:20:01
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `super_david`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `IDCategoria` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`IDCategoria`, `nombre`) VALUES
(1, 'Sabritas'),
(2, 'Cerveza'),
(3, 'Bebidas Energizantes'),
(4, 'Refrescos'),
(5, 'Bebidas alcohólicas ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `IDCliente` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(32) NOT NULL,
  `producto` int(11) NOT NULL,
  `pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`IDCliente`, `nombre`, `email`, `producto`, `pedido`) VALUES
(1, 'Alain Parra', 'Monster_adicto69@gmail.com', 3, 1),
(2, 'López Obrador', 'trenmaya_fail6@gmail.com', 2, 2),
(3, 'Abraham Pech', 'Pechito@sensei.com', 9, 69),
(5, 'Leo garcia', 'bakerevil69@horny.com', 1, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_pedido`
--

CREATE TABLE `detalles_pedido` (
  `IDPedido` int(11) NOT NULL,
  `pedido` int(11) NOT NULL,
  `producto` int(11) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `codigo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalles_pedido`
--

INSERT INTO `detalles_pedido` (`IDPedido`, `pedido`, `producto`, `cantidad`, `codigo`) VALUES
(1, 59, 3, 5, 69),
(2, 24, 2, 3, 96),
(3, 48, 4, 20, 89),
(4, 76, 0, 12, 46),
(5, 50, 15, 50, 99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `IDEmpleado` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(32) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `ocupación` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`IDEmpleado`, `nombre`, `email`, `telefono`, `ocupación`) VALUES
(1, 'Brayan Smith Engel Hernández', 'Dark_Smitho-o@gmail.com', '9982416324', 'Chalan'),
(2, 'Andrik Adrián Mas Tamayo', 'denxyyyg7u7@gmail.com', '998 440 5007', 'Patron');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `IDProducto` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` decimal(5,0) NOT NULL,
  `stock` int(100) NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`IDProducto`, `nombre`, `precio`, `stock`, `categoria`) VALUES
(1, 'Cheetos', 20, 50, 1),
(2, 'Coca', 15, 100, 2),
(3, 'Cheetos', 20, 50, 1),
(4, 'Cheetos', 20, 50, 1),
(7, 'Monster', 40, 67, 1),
(8, 'Cerveza Corona lata', 25, 100, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `IDProveedor` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `rfc` varchar(100) NOT NULL,
  `producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`IDProveedor`, `nombre`, `direccion`, `telefono`, `rfc`, `producto`) VALUES
(1, 'Sabritas', 'Supermanzana 104, 77539 Cancún, Q.R.', '9982352322', 'SAB730510K44', 1),
(2, 'Coca Cola', 'Gertrudis Bocanegra Supermanzana 223, Paseos Kabah, 77517 Cancún, Q.R.', '9988846888', 'PRO840423SG8', 2),
(3, 'DISTRIBUIDORA DE BEBIDAS Y REFRESCOS MEXICANOS SA DE CV', 'Circuito Mar Báltico 57-B Fracc Porto Alegre 500, 77535 Cancún, Q.R.', '9988822380', 'VECJ880326', 3),
(4, 'Bodega Gamesa', 'Calz Nohol 26, 77539 Cancún, Q.R.', ' 01 800 426 37 21.', ' SAB730510K4', 8),
(5, 'BAJO CERO', 'Av. Comalcalco 2, Zona Industrial, 77530 Cancún, Q.R.', '3336-6600-02', 'SIS-780421-IR3', 7),
(6, 'Grupo Corona', 'Porto Velani 38, 77535 Cancún, Q.R.', '984 873 3076', 'EME910610G1A', 9),
(7, 'Bodega Aurrera', '219, Calle Prol. Av. Kabáh Supermanzana 219 Lote 1, 77516 Cancún, Q.R.', '998 132 4812', 'NWM9709244W4', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE `tickets` (
  `IDPedido` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `cliente` int(11) NOT NULL,
  `empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tickets`
--

INSERT INTO `tickets` (`IDPedido`, `fecha`, `cliente`, `empleado`) VALUES
(1, '2024-03-20', 1, 3),
(2, '2024-03-20', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`IDCategoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`IDCliente`);

--
-- Indices de la tabla `detalles_pedido`
--
ALTER TABLE `detalles_pedido`
  ADD PRIMARY KEY (`IDPedido`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`IDEmpleado`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`IDProducto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`IDProveedor`);

--
-- Indices de la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`IDPedido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `IDCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `IDCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `detalles_pedido`
--
ALTER TABLE `detalles_pedido`
  MODIFY `IDPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `IDEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `IDProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `IDProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
