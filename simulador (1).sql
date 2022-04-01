-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2022 a las 14:13:54
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `simulador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID` int(11) NOT NULL,
  `nombre_completo` varchar(200) NOT NULL,
  `grado` varchar(20) NOT NULL,
  `grupo` varchar(20) NOT NULL,
  `p_obligacion` varchar(400) NOT NULL,
  `s_obligacion` varchar(400) NOT NULL,
  `t_obligacion` varchar(400) NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `RFC` varchar(60) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `RFID` varchar(20) NOT NULL,
  `tipo_usuario` int(10) NOT NULL,
  `FECHA_HORA` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID`, `nombre_completo`, `grado`, `grupo`, `p_obligacion`, `s_obligacion`, `t_obligacion`, `correo_electronico`, `RFC`, `contraseña`, `RFID`, `tipo_usuario`, `FECHA_HORA`) VALUES
(1, 'Hatsumi Yamilet Ortiz Lepe', '8vo', '8 - IDGS - 1', 'ISR PERSONAS FÍSICAS, ACTIVIDADES EMPRESARIALES Y PROFESIONALES', 'IMPUESTO AL VALOR AGREGADO', '', 'a20190050@utem.edu.mx', 'OILH46891225LCJR26', '1234', '2347UHG937E', 3, '2022-03-29 15:35:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `declaraciones`
--

CREATE TABLE `declaraciones` (
  `ID` int(11) NOT NULL,
  `tipo_declaracion` varchar(60) NOT NULL,
  `tiempo` varchar(30) NOT NULL,
  `año` int(10) NOT NULL,
  `mes` varchar(60) NOT NULL,
  `obligacion` varchar(80) NOT NULL,
  `ingresop_anterior` int(60) NOT NULL,
  `ingresop_actual` int(60) NOT NULL,
  `total_ingresos` int(60) NOT NULL,
  `compras_gastos` int(60) NOT NULL,
  `comprasgastos_periodo` int(60) NOT NULL,
  `total_comprasgastos` int(60) NOT NULL,
  `deduccion_inversiones` int(60) NOT NULL,
  `estimulos_deducibles` varchar(20) NOT NULL,
  `participaciones` int(60) NOT NULL,
  `perdidasfiscales_anteriores` int(60) NOT NULL,
  `base_gravable` int(60) NOT NULL,
  `isr_causado` int(60) NOT NULL,
  `estimulos_acreditables` int(60) NOT NULL,
  `pagosprovisionales_anteriores` int(60) NOT NULL,
  `isr_provisional` int(60) NOT NULL,
  `isr_detenido` int(60) NOT NULL,
  `impuesto_retenido` int(60) NOT NULL,
  `isr_cargo` int(20) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `total_contribuciones` int(20) NOT NULL,
  `cantidad_cargo` int(60) NOT NULL,
  `pagar_parcialidades` varchar(10) NOT NULL,
  `cantidad:pagar` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `ID` int(11) NOT NULL,
  `RFC` varchar(20) NOT NULL,
  `tipo_sesion` bit(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`ID`, `RFC`, `tipo_sesion`, `fecha_creacion`) VALUES
(1, 'OILH46891225LCJR26', b'1', '2022-03-29 15:56:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE `maestros` (
  `ID` int(11) NOT NULL,
  `nombre_completo` varchar(200) NOT NULL,
  `grupo` varchar(20) NOT NULL,
  `p_obligacion` varchar(400) NOT NULL,
  `s_obligacion` varchar(400) NOT NULL,
  `t_obligacion` varchar(400) NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `RFC` varchar(60) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `RFID` varchar(20) NOT NULL,
  `tipo_usuario` varchar(10) NOT NULL,
  `FECHA_HORA` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_usuarios`
--

CREATE TABLE `tipos_usuarios` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos_usuarios`
--

INSERT INTO `tipos_usuarios` (`ID`, `nombre`, `tipo_usuario`) VALUES
(1, 'Administrador', 1),
(2, 'Maestro', 2),
(3, 'Alumno', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `declaraciones`
--
ALTER TABLE `declaraciones`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `declaraciones`
--
ALTER TABLE `declaraciones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
