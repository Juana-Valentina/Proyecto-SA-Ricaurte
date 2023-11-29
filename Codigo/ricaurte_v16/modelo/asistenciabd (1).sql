-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 07-11-2023 a las 17:09:45
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asistenciabd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_curso`
--

CREATE TABLE `asignacion_curso` (
  `id_documento` int(11) DEFAULT NULL,
  `nombre_rol` varchar(30) DEFAULT NULL,
  `nombre_curso` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignacion_curso`
--

INSERT INTO `asignacion_curso` (`id_documento`, `nombre_rol`, `nombre_curso`) VALUES
(1568789458, 'Estudiante', '1103'),
(1034657954, 'Profesor', '902'),
(1034657954, 'Profesor', '1103');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_materia`
--

CREATE TABLE `asignacion_materia` (
  `id_materia` int(10) DEFAULT NULL,
  `id_documento` int(11) DEFAULT NULL,
  `nombre_rol` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignacion_materia`
--

INSERT INTO `asignacion_materia` (`id_materia`, `id_documento`, `nombre_rol`) VALUES
(1, 1568789458, 'Estudiante'),
(3, 1568789458, 'Estudiante'),
(11, 1034657954, 'Profesor'),
(12, 1034657954, 'Profesor'),
(4, 1034657954, 'Profesor'),
(4, 1568789458, 'Estudiante'),
(4, 168744875, 'Estudiante'),
(4, 168797984, 'Estudiante'),
(4, 185656858, 'Estudiante'),
(4, 1567654686, 'Estudiante'),
(4, 1586465485, 'Estudiante'),
(4, 1684648564, 'Estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_materia_curso`
--

CREATE TABLE `asignacion_materia_curso` (
  `id_documento` int(30) NOT NULL,
  `id_materia` int(10) NOT NULL,
  `nombre_curso` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignacion_materia_curso`
--

INSERT INTO `asignacion_materia_curso` (`id_documento`, `id_materia`, `nombre_curso`) VALUES
(1034657954, 11, '902'),
(1034657954, 12, '902'),
(1034657954, 4, '1103');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_rol`
--

CREATE TABLE `asignacion_rol` (
  `nombre_rol` varchar(30) DEFAULT NULL,
  `id_documento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignacion_rol`
--

INSERT INTO `asignacion_rol` (`nombre_rol`, `id_documento`) VALUES
('Profesor', 2147483647),
('Coordinacion', 1028481575),
('Coordinacion', 12015272),
('Profesor', 168464685),
('Coordinacion', 1568789458),
('Profesor', 10844854),
('Profesor', 1034657954);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_documento` int(11) NOT NULL,
  `id_materia` int(10) DEFAULT NULL,
  `falla` int(3) DEFAULT NULL,
  `fecha` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `nombre_curso` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`nombre_curso`) VALUES
('1102'),
('1103'),
('603'),
('802'),
('902');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id_materia` int(10) NOT NULL,
  `nombre_materia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `nombre_materia`) VALUES
(1, 'Español'),
(2, 'Ingles'),
(3, 'Quimica'),
(4, 'Fisica'),
(11, 'Literatura'),
(12, 'Trigonometria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registropersona`
--

CREATE TABLE `registropersona` (
  `id_documento` int(11) NOT NULL,
  `nombre_usuario` varchar(60) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registropersona`
--

INSERT INTO `registropersona` (`id_documento`, `nombre_usuario`, `telefono`) VALUES
(10844854, 'fredy', '34554445'),
(12015272, 'ale', '3245524542'),
(168464685, 'ejemplo', '3489485858'),
(168744875, 'Jimenez Garcia', '3564764897'),
(168797984, 'Sanchez Romero', '368465486'),
(185656858, 'Pérez Gómez', '3468458585'),
(1028481575, 'Alejandro', '3208608383'),
(1034657954, 'Juan Pablo', '3102295827'),
(1567654686, 'Hernandez Lopez', '346865877'),
(1568789458, 'ejemplo1@ejemplo1', '3564685856'),
(1586465485, 'Gomez Rodriguez', '3689774757'),
(1684648564, 'David Alejandro', '325677542'),
(2147483647, 'juana ', '3202834045');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `nombre_rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`nombre_rol`) VALUES
('Coordinacion'),
('Estudiante'),
('Profesor'),
('Secretaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguridad`
--

CREATE TABLE `seguridad` (
  `id_documento` int(15) DEFAULT NULL,
  `correo_instituicional` varchar(70) DEFAULT NULL,
  `contrasena` varchar(33) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `seguridad`
--

INSERT INTO `seguridad` (`id_documento`, `correo_instituicional`, `contrasena`) VALUES
(2147483647, 'juana@gmail.com', '9b4aaf9b8bbe6677bd119c356433a318'),
(1028481575, 'alejandro@gmail.com', '6d1b1728672cfc86c340c8d94359bdbb'),
(12015272, 'ale@gmail.com', '9db3c8f773c85206e661d7538de50fe7'),
(168464685, 'ejemplo@ejemplo', '2f1767dc31e7a8dc68b2c21bf07984ff'),
(1568789458, 'ejemplo1@ejemplo1', '9cf97902c820b3c62e8dc3caecb93e1f'),
(10844854, 'fredy@gmail.com', 'b89845d7eb5f8388e090fcc151d618c8'),
(1034657954, 'juannnnpablolopez@gmail.com', 'e3a96c29002aed35295dc9c062e1f331'),
(2147483647, 'garcia@gmail.com', '7013dd8caf235788ddedee06ff8ad0ed'),
(2147483647, 'rodriguez@gmail.com', '3c31a642927cf90adfce8e94bc3ab80e'),
(185656858, 'perez@gmail.com', '0db7e7a347aaa68a26218df2a01c99c6'),
(2147483647, 'martinez@gmail.com', '67d36db472159fcb8c55e03a052bcb74'),
(1567654686, 'hernandez@gmail.com', '387316d0d18d75aefa50ad1cadc39742'),
(1586465485, 'gomez@gmail.com', '5e4f5f9dcb97db3bf3c9093f518fade4'),
(168797984, 'sanchez@gmail.com', '0edfd99ad72057d07ca45e03a385bc65'),
(168744875, 'jimenez@gmail.com', '08011326e9c1b2a00c3391948b1e8442'),
(1684648564, 'david@gmail.com', '464e07afc9e46359fb480839150595c5');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacion_curso`
--
ALTER TABLE `asignacion_curso`
  ADD KEY `id_documento` (`id_documento`),
  ADD KEY `nombre_rol` (`nombre_rol`),
  ADD KEY `nombre_curso` (`nombre_curso`);

--
-- Indices de la tabla `asignacion_materia`
--
ALTER TABLE `asignacion_materia`
  ADD KEY `id_documento` (`id_documento`),
  ADD KEY `id_materia` (`id_materia`),
  ADD KEY `nombre_rol` (`nombre_rol`);

--
-- Indices de la tabla `asignacion_materia_curso`
--
ALTER TABLE `asignacion_materia_curso`
  ADD KEY `id_materia` (`id_materia`,`nombre_curso`),
  ADD KEY `nombre_curso` (`nombre_curso`),
  ADD KEY `id_documento` (`id_documento`);

--
-- Indices de la tabla `asignacion_rol`
--
ALTER TABLE `asignacion_rol`
  ADD KEY `id_documento` (`id_documento`),
  ADD KEY `nombre_rol` (`nombre_rol`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD KEY `id_documento` (`id_documento`),
  ADD KEY `id_materia` (`id_materia`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`nombre_curso`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `registropersona`
--
ALTER TABLE `registropersona`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`nombre_rol`);

--
-- Indices de la tabla `seguridad`
--
ALTER TABLE `seguridad`
  ADD KEY `id_documento` (`id_documento`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacion_curso`
--
ALTER TABLE `asignacion_curso`
  ADD CONSTRAINT `asignacion_curso_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `registropersona` (`id_documento`),
  ADD CONSTRAINT `asignacion_curso_ibfk_4` FOREIGN KEY (`nombre_rol`) REFERENCES `rol` (`nombre_rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_curso_ibfk_5` FOREIGN KEY (`nombre_curso`) REFERENCES `curso` (`nombre_curso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignacion_materia`
--
ALTER TABLE `asignacion_materia`
  ADD CONSTRAINT `asignacion_materia_ibfk_2` FOREIGN KEY (`id_documento`) REFERENCES `registropersona` (`id_documento`),
  ADD CONSTRAINT `asignacion_materia_ibfk_4` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_materia_ibfk_5` FOREIGN KEY (`nombre_rol`) REFERENCES `rol` (`nombre_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignacion_materia_curso`
--
ALTER TABLE `asignacion_materia_curso`
  ADD CONSTRAINT `asignacion_materia_curso_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_materia_curso_ibfk_2` FOREIGN KEY (`nombre_curso`) REFERENCES `curso` (`nombre_curso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_materia_curso_ibfk_3` FOREIGN KEY (`id_documento`) REFERENCES `registropersona` (`id_documento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignacion_rol`
--
ALTER TABLE `asignacion_rol`
  ADD CONSTRAINT `asignacion_rol_ibfk_2` FOREIGN KEY (`id_documento`) REFERENCES `registropersona` (`id_documento`),
  ADD CONSTRAINT `asignacion_rol_ibfk_3` FOREIGN KEY (`nombre_rol`) REFERENCES `rol` (`nombre_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `registropersona` (`id_documento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asistencia_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `seguridad`
--
ALTER TABLE `seguridad`
  ADD CONSTRAINT `seguridad_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `registropersona` (`id_documento`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
