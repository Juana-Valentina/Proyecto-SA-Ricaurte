-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2023 a las 15:37:47
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_ricaurte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `Id_Asignatura` int(11) NOT NULL,
  `Nombre:asignatura` varchar(45) NOT NULL,
  `Profesor_Id_Profesor` int(11) NOT NULL,
  `Estudiante_Id_Estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `Asignatura_Id_Asignatura` int(11) NOT NULL,
  `Curso_Id_curso` int(11) NOT NULL,
  `Asistencia` varchar(45) NOT NULL,
  `Inasistencia` varchar(45) NOT NULL,
  `Inasistencia justificada` varchar(45) NOT NULL,
  `Fecha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `Id_curso` int(11) NOT NULL,
  `Horario_curso` varchar(45) NOT NULL,
  `Nombre_curso` varchar(45) NOT NULL,
  `Estudiante_Id_Estudiante` int(11) NOT NULL,
  `Secreataria_Id_Secreataria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `Id_Estudiante` int(11) NOT NULL,
  `Persona/registro_Documento` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`Id_Estudiante`, `Persona/registro_Documento`) VALUES
(1, 1234567890);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona/registro`
--

CREATE TABLE `persona/registro` (
  `Documento` int(15) NOT NULL,
  `Correo_institucional` varchar(45) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Telefono` varchar(45) NOT NULL,
  `Contraseña` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona/registro`
--

INSERT INTO `persona/registro` (`Documento`, `Correo_institucional`, `Nombre`, `Telefono`, `Contraseña`) VALUES
(1234567890, 'ja@example.com', 'fulanito', '3201234567', 'fvbggd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `Id_Profesor` int(11) NOT NULL,
  `Persona/registro_Documento` int(15) DEFAULT NULL,
  `Horario_profesores` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rectoria`
--

CREATE TABLE `rectoria` (
  `Id_Rectoria` int(11) NOT NULL,
  `Persona/registro_Documento` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `Id_Reporte` int(11) NOT NULL,
  `Fechas` varchar(45) NOT NULL,
  `Asistencia_Asignatura_Id_Asignatura` int(11) NOT NULL,
  `Asistencia_Curso_Id_curso` int(11) NOT NULL,
  `Rectoria_Id_Rectoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secreataria`
--

CREATE TABLE `secreataria` (
  `Id_Secreataria` int(11) NOT NULL,
  `Persona/registro_Documento` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`Id_Asignatura`),
  ADD KEY `fk_Asignatura_Profesor1_idx` (`Profesor_Id_Profesor`),
  ADD KEY `fk_Asignatura_Estudiante1_idx` (`Estudiante_Id_Estudiante`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`Asignatura_Id_Asignatura`,`Curso_Id_curso`),
  ADD KEY `fk_Asignatura_has_Curso_Curso1_idx` (`Curso_Id_curso`),
  ADD KEY `fk_Asignatura_has_Curso_Asignatura1_idx` (`Asignatura_Id_Asignatura`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`Id_curso`),
  ADD KEY `fk_Curso_Estudiante1_idx` (`Estudiante_Id_Estudiante`),
  ADD KEY `fk_Curso_Secreataria1_idx` (`Secreataria_Id_Secreataria`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`Id_Estudiante`),
  ADD KEY `fk_Estudiante_Persona/registro1_idx` (`Persona/registro_Documento`);

--
-- Indices de la tabla `persona/registro`
--
ALTER TABLE `persona/registro`
  ADD PRIMARY KEY (`Documento`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`Id_Profesor`),
  ADD KEY `fk_Profesor_Persona/registro_idx` (`Persona/registro_Documento`);

--
-- Indices de la tabla `rectoria`
--
ALTER TABLE `rectoria`
  ADD PRIMARY KEY (`Id_Rectoria`),
  ADD KEY `fk_Rectoria_Persona/registro1_idx` (`Persona/registro_Documento`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`Id_Reporte`,`Asistencia_Asignatura_Id_Asignatura`,`Asistencia_Curso_Id_curso`,`Rectoria_Id_Rectoria`),
  ADD KEY `fk_Reporte_Asistencia1_idx` (`Asistencia_Asignatura_Id_Asignatura`,`Asistencia_Curso_Id_curso`),
  ADD KEY `fk_Reporte_Rectoria1_idx` (`Rectoria_Id_Rectoria`),
  ADD KEY `Asistencia_Curso_Id_curso` (`Asistencia_Curso_Id_curso`);

--
-- Indices de la tabla `secreataria`
--
ALTER TABLE `secreataria`
  ADD PRIMARY KEY (`Id_Secreataria`),
  ADD KEY `fk_Secreataria_Persona/registro1_idx` (`Persona/registro_Documento`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_ibfk_1` FOREIGN KEY (`Profesor_Id_Profesor`) REFERENCES `profesor` (`Id_Profesor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignatura_ibfk_2` FOREIGN KEY (`Estudiante_Id_Estudiante`) REFERENCES `estudiante` (`Id_Estudiante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`Asignatura_Id_Asignatura`) REFERENCES `asignatura` (`Id_Asignatura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asistencia_ibfk_2` FOREIGN KEY (`Curso_Id_curso`) REFERENCES `curso` (`Id_curso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`Estudiante_Id_Estudiante`) REFERENCES `estudiante` (`Id_Estudiante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `curso_ibfk_2` FOREIGN KEY (`Secreataria_Id_Secreataria`) REFERENCES `secreataria` (`Id_Secreataria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`Persona/registro_Documento`) REFERENCES `persona/registro` (`Documento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`Persona/registro_Documento`) REFERENCES `persona/registro` (`Documento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rectoria`
--
ALTER TABLE `rectoria`
  ADD CONSTRAINT `rectoria_ibfk_1` FOREIGN KEY (`Persona/registro_Documento`) REFERENCES `persona/registro` (`Documento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `reporte_ibfk_1` FOREIGN KEY (`Asistencia_Curso_Id_curso`) REFERENCES `asistencia` (`Asignatura_Id_Asignatura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reporte_ibfk_2` FOREIGN KEY (`Rectoria_Id_Rectoria`) REFERENCES `rectoria` (`Id_Rectoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `secreataria`
--
ALTER TABLE `secreataria`
  ADD CONSTRAINT `secreataria_ibfk_1` FOREIGN KEY (`Persona/registro_Documento`) REFERENCES `persona/registro` (`Documento`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
