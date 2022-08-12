-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2019 a las 20:23:47
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nombre`) VALUES
(1, 'Admin'),
(2, 'Medico'),
(3, 'Secretaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id_cita` int(255) NOT NULL,
  `motivo` varchar(30) NOT NULL,
  `id_paciente` int(255) NOT NULL,
  `id_medico` int(255) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_estado_citas` int(11) DEFAULT NULL,
  `id_motivo_consulta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id_cita`, `motivo`, `id_paciente`, `id_medico`, `fecha`, `hora`, `id_estado_citas`, `id_motivo_consulta`) VALUES
(1, 'Cordal', 2, 1, '2019-11-12', '19:12:00', 5, 2),
(2, 'Ortodoncia', 3, 1, '2019-11-20', '23:15:00', 1, NULL),
(3, 'General', 5, 1, '2019-11-28', '10:00:00', 3, NULL),
(4, 'General', 5, 1, '2019-11-27', '10:00:00', 1, NULL),
(5, 'General', 2, 1, '2019-11-22', '15:00:00', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_citas`
--

CREATE TABLE `estado_citas` (
  `id_estado_citas` int(11) NOT NULL,
  `tipo_estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_citas`
--

INSERT INTO `estado_citas` (`id_estado_citas`, `tipo_estado`) VALUES
(1, 'Pendiente'),
(2, 'En proceso'),
(3, 'Cancelada'),
(4, 'Reprogramada'),
(5, 'Realizada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id_medico` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `horario` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`id_medico`, `nombre`, `apellidos`, `horario`) VALUES
(1, 'Ricardo', 'Solis', '2019-05-15 08:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivo_consulta`
--

CREATE TABLE `motivo_consulta` (
  `id_motivo_consulta` int(20) NOT NULL,
  `sintoma` varchar(50) DEFAULT NULL,
  `diagnostico` varchar(50) DEFAULT NULL,
  `tratamiento` varchar(50) DEFAULT NULL,
  `id_paciente` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `motivo_consulta`
--

INSERT INTO `motivo_consulta` (`id_motivo_consulta`, `sintoma`, `diagnostico`, `tratamiento`, `id_paciente`) VALUES
(1, 'dientes astillados y gastados', 'Cosmetica dental', 'carillas de porcelana', 1),
(2, 'lesión de origen endodóntico', 'Endodoncia', 'Extraccion de pulpa dental', 2),
(19, 'Fatiga', 'Fatiga', 'Reposo', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(255) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` varchar(1) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `n_telefono` int(8) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `nit` varchar(17) NOT NULL,
  `nom_persoR` varchar(30) DEFAULT NULL,
  `apellido_persoR` varchar(30) DEFAULT NULL,
  `tel_persoR` int(8) DEFAULT NULL,
  `motivo_consulta` varchar(50) DEFAULT NULL,
  `alergia` varchar(50) DEFAULT NULL,
  `medicamentos` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `nombre`, `apellidos`, `fecha_nacimiento`, `genero`, `direccion`, `n_telefono`, `dui`, `nit`, `nom_persoR`, `apellido_persoR`, `tel_persoR`, `motivo_consulta`, `alergia`, `medicamentos`) VALUES
(1, 'Elsy', 'Ramirez', '1994-12-22', 'F', 'San Salvador', 78687665, '03849384-1', '038-041196-846-78', 'Manuel', 'Cabezas', 70987887, 'Cosmética dental', 'ninguna', 'ninguno'),
(2, 'Fatima', 'Rodas', '1996-04-11', 'F', 'Santa Tecla', 78687688, '05897741-3', '038-041196-846-23', 'Roberto', 'Duran', 78998855, 'Endodoncia', 'ninguna', 'ninguno'),
(3, 'Ricardo', 'Rivas', '1995-06-18', 'M', 'San Salvador', 74698541, '0698574-3', '038-061895-846-23', 'Ana', 'Vasquez', 76541103, 'Ortodoncia', 'ninguna', 'ninguno'),
(4, 'Oscar', 'Ramirez', '1985-04-11', 'M', 'Santa Tecla', 78685511, '06899677-2', '038-041185-846-23', 'Saul', 'Cortez', 74112459, 'Limpieza Bucal', 'ninguna', 'ninguno'),
(5, 'Omar', 'Posada', '1974-04-11', 'M', 'Santa Tecla', 77887665, '04898877-6', '038-041174-846-23', 'Reina', 'Dominguez', 78997744, 'Limpieza bucal', 'ninguna', 'ninguno'),
(6, 'diana', 'cuellar', '2019-11-06', 'f', 'Altamira', 78964589, '4664646-5', '4564646-5', 'Irma', 'Salguero', 12345678, 'Ortodoncia', 'w', 'w'),
(7, 'diana', 'cuellar', '2019-11-06', 'f', 'Altamira', 78964589, '4664646-5', '4564646-5', 'Irma', 'Salguero', 12345678, 'Ortodoncia', 'w', 'w');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `user` varchar(11) NOT NULL,
  `pass` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL DEFAULT 0,
  `id_cargo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `user`, `pass`, `id_medico`, `id_cargo`) VALUES
(1, 'secretaria', 12345, 0, 3),
(2, 'drsolis', 12345, 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_medico` (`id_medico`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `id_estado_citas` (`id_estado_citas`),
  ADD KEY `id_motivo_consulta` (`id_motivo_consulta`);

--
-- Indices de la tabla `estado_citas`
--
ALTER TABLE `estado_citas`
  ADD PRIMARY KEY (`id_estado_citas`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id_medico`);

--
-- Indices de la tabla `motivo_consulta`
--
ALTER TABLE `motivo_consulta`
  ADD PRIMARY KEY (`id_motivo_consulta`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id_cita` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estado_citas`
--
ALTER TABLE `estado_citas`
  MODIFY `id_estado_citas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `id_medico` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `motivo_consulta`
--
ALTER TABLE `motivo_consulta`
  MODIFY `id_motivo_consulta` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_medico`),
  ADD CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`),
  ADD CONSTRAINT `cita_ibfk_3` FOREIGN KEY (`id_estado_citas`) REFERENCES `estado_citas` (`id_estado_citas`),
  ADD CONSTRAINT `cita_ibfk_4` FOREIGN KEY (`id_motivo_consulta`) REFERENCES `motivo_consulta` (`id_motivo_consulta`);

--
-- Filtros para la tabla `motivo_consulta`
--
ALTER TABLE `motivo_consulta`
  ADD CONSTRAINT `motivo_consulta_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id_cargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
