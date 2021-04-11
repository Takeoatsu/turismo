-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2021 a las 01:08:10
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alojamiento`
--

CREATE TABLE `alojamiento` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(150) NOT NULL,
  `Localidad` varchar(150) NOT NULL,
  `PrecioXNoche` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabla de alojamientos creados, todos los disponibles';

--
-- Volcado de datos para la tabla `alojamiento`
--

INSERT INTO `alojamiento` (`id`, `Nombre`, `Localidad`, `PrecioXNoche`) VALUES
(1, 'Hotel las cañas', 'Cañas Gordas', 35000),
(2, 'Puerta de Jardín', 'Jardín', 32000),
(3, 'El cafetal de Andes', 'Andes', 40000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `extras`
--

CREATE TABLE `extras` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(150) NOT NULL,
  `Precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `extras`
--

INSERT INTO `extras` (`id`, `Nombre`, `Precio`) VALUES
(1, 'Transporte', 5000),
(2, 'Simcard', 30000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recorridos`
--

CREATE TABLE `recorridos` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(150) NOT NULL,
  `Localidad` varchar(150) NOT NULL,
  `Precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recorridos`
--

INSERT INTO `recorridos` (`id`, `Nombre`, `Localidad`, `Precio`) VALUES
(1, 'Recorrido al nevado del ruiz', 'Departamento de caldas', 350000),
(2, 'Recorrido a la ciudad perdida', 'Departamento del Magdalena', 370000),
(3, 'Recorrido caño cristales', 'Departamento del Meta', 400000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(150) NOT NULL,
  `Localidad` varchar(150) NOT NULL,
  `Precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Registro de tours disponibles';

--
-- Volcado de datos para la tabla `tours`
--

INSERT INTO `tours` (`id`, `Nombre`, `Localidad`, `Precio`) VALUES
(1, 'Tour el peñol', 'Guatape- peñol', 600000),
(2, 'Tour del grafiti', 'Medellín', 180000),
(3, 'Tour el rosario', 'Cartagena de Indias', 320000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alojamiento`
--
ALTER TABLE `alojamiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recorridos`
--
ALTER TABLE `recorridos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alojamiento`
--
ALTER TABLE `alojamiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `extras`
--
ALTER TABLE `extras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `recorridos`
--
ALTER TABLE `recorridos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
