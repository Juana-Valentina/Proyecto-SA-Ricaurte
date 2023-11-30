-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2023 a las 05:21:39
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_materia`
--

CREATE TABLE `asignacion_materia` (
  `id_materia` int(10) DEFAULT NULL,
  `id_documento` int(11) DEFAULT NULL,
  `nombre_rol` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_materia_curso`
--

CREATE TABLE `asignacion_materia_curso` (
  `id_documento` int(30) NOT NULL,
  `id_materia` int(10) NOT NULL,
  `nombre_curso` varchar(6) NOT NULL,
  `nombre_rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignacion_materia_curso`
--

INSERT INTO `asignacion_materia_curso` (`id_documento`, `id_materia`, `nombre_curso`, `nombre_rol`) VALUES
(1568789458, 4, '1103', 'Estudiante'),
(1568789458, 16, '', 'Estudiante'),
(168744875, 16, ' ', 'Estudiante'),
(168744875, 17, '601   ', 'Estudiante'),
(1568789458, 17, '601', 'Estudiante'),
(168797984, 17, '601 ', 'Estudiante'),
(1031807134, 17, '601  ', 'Estudiante');

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
('Profesor', 10844854),
('Profesor', 1034657954),
('Profesor', 1031807134),
('Secretaria', 1013577073),
('Estudiante', 1568789458),
('Coordinacion', 16589654),
('Estudiante', 34343434),
('Estudiante', 212172321),
('Estudiante', 22115435),
('Estudiante', 21721719),
('Estudiante', 137372123),
('Estudiante', 12889191),
('Estudiante', 22312121),
('Estudiante', 102321212),
('Estudiante', 120004429),
('Estudiante', 129298129),
('Estudiante', 2938291),
('Estudiante', 732717211),
('Estudiante', 217821781),
('Estudiante', 27811112),
('Estudiante', 80231212),
('Estudiante', 200281921),
('Estudiante', 22912911),
('Estudiante', 19218281),
('Profesor', 284518111),
('Profesor', 263781821);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_documento` int(30) NOT NULL,
  `id_materia` int(10) NOT NULL,
  `falla` date NOT NULL,
  `nombre_curso` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_documento`, `id_materia`, `falla`, `nombre_curso`) VALUES
(1568789458, 16, '0000-00-00', 1103),
(168744875, 16, '0000-00-00', 1103),
(1031807134, 17, '2023-11-22', 601),
(1031807134, 17, '2023-11-22', 601),
(1568789458, 17, '2023-11-22', 601),
(168744875, 17, '2023-11-22', 601);

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
('1001'),
('1002'),
('1003'),
('1101'),
('1102'),
('1103'),
('601'),
('602'),
('603'),
('701'),
('702'),
('703'),
('801'),
('802'),
('803'),
('901'),
('902'),
('903');

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
(20, 'Ingles'),
(21, 'Sociales'),
(22, 'Matematicas'),
(23, 'Fisica'),
(24, 'Lengua Castellana'),
(25, 'Ciencias Naturalez'),
(26, 'Artes'),
(27, 'Tecnología e Informática'),
(28, 'Filosofia'),
(29, 'Matematicas Avanzadas'),
(30, 'Calculo'),
(31, 'Biologia');

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
(2938291, 'Nidia Saez Campoy', '3777191'),
(10844854, 'fredy', '34554445'),
(12015272, 'ale', '3245524542'),
(12889191, 'Matías Mauricio Castillo Barrera', '3938222'),
(16589654, 'pepito perez', '365482221'),
(19218281, 'Lisandro Delgado Nadal', '3561526'),
(21721719, 'Severo Granados Iglesia', '363662'),
(22115435, 'Leandra Anna Malo Alba', '32212111'),
(22312121, 'Mauricio Guijarro Castelló', '30000121'),
(22912911, 'Jacinta Montenegro Garcés', '312111221'),
(27811112, 'Dani Baena', '30129210'),
(34343434, 'Jonathan Ricardo Lopez', '312212121'),
(80231212, 'Angelina de Arregui', '38218190'),
(102321212, 'Isaura Leyre Avilés Pelayo', '38921121'),
(120004429, 'Soraya Morera-Lago', '3212881'),
(129298129, 'Victoriano Tapia-Cabanillas', '343431'),
(137372123, 'Lucho Andreu Amat', '3789898'),
(168464685, 'ejemplo', '3489485858'),
(168744875, 'Jimenez Garcia', '3564764897'),
(168797984, 'Sanchez Romero', '368465486'),
(185656858, 'Pérez Gómez', '3468458585'),
(200281921, 'Samuel de Carranza', '371728128'),
(212172321, 'Yelsid Jimenez Sosa', '382232121'),
(217821781, 'Trini de Alberdi', '378187217'),
(263781821, 'Albano Teodosio Cañete Rosa', '3671727271'),
(284518111, 'Samanta Manjón Godoy', '33u32838'),
(732717211, 'Teófila Villanueva Molina', '3231212'),
(1013577073, 'Jonathan', '329832982982'),
(1028481575, 'Alejandro', '3208608383'),
(1031807134, 'Armando', '300647212'),
(1034657954, 'Juan Pablo Lopez', '3102295827'),
(1567654686, 'Hernandez Lopez', '346865877'),
(1568789458, 'ejemplo1@ejemplo17', '356468585612'),
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
(1684648564, 'david@gmail.com', '464e07afc9e46359fb480839150595c5'),
(1031807134, 'A@fd', '5ae42c9053dfad0e4fdf45130ab46bd0'),
(1013577073, 'secretaria@secretaria', 'fd09accffacf03d7393c2a23a9601b43'),
(16589654, 'pepito@pepito', '32164702f8ffd2b418d780ff02371e4c'),
(34343434, 'Ricardo123@gmail.com', '78842815248300fa6ae79f7776a5080a'),
(212172321, 'yelsid@gmal.com', 'dffba4646d3e2c4c4a9ae581049ee1c8'),
(22115435, 'leandra@gmail.com', 'e15ef9c982ea6672ef0dd82f4b0ce9d8'),
(21721719, 'severo@gmail.com', '18359c42b8d1b2316db24d31de845dbf'),
(137372123, 'lucho@gmail.com', 'fc3d0c00117ff1ccae9d3103e573c9c3'),
(12889191, 'matias@gmail.com', '2b726c22098dc82cafdca8cf469a1486'),
(22312121, 'mauricio@gmail.com', '110eff7d40a3779f4513c1be6f8fffcf'),
(102321212, 'isaura@gmail.com', '1ae2640277ddda420b87e5f4fdd954a5'),
(120004429, 'soraya@gmail.com', 'b7177853c566c8d0d4778f74a61690d3'),
(129298129, 'victoriano@gmail.com', '7706aa886ce6ceaf801846002a8710fe'),
(2938291, 'nidia@gmail.com', '1b97c4466bec236648cecc4fd558b1fd'),
(732717211, 'teofila@gmail.com', '51f695a60d23083409f9ecad2122044a'),
(217821781, 'trini@gmail.com', '94865d09f1c2b6eab228cda6104da1bd'),
(27811112, 'dani@gmail.com', '55b7e8b895d047537e672250dd781555'),
(80231212, 'angelina@gmail.com', '4e3d821e1e6207e6acd0e02bc3099e5a'),
(200281921, 'samuel@gmail.com', 'd8ae5776067290c4712fa454006c8ec6'),
(22912911, 'jacinta@gmail.com', '7616fe08763bd1d6a533b8287117e2d5'),
(19218281, 'lisandro@gmail.com', '85133e07ba49e25e70d977345ccdaef7'),
(284518111, 'samanta@gmail.com', 'b1669de05af46875559f64e24adc91a7'),
(263781821, 'albano@gmail.com', 'b2d00e952e47fd037b898bacf6e8b2f9');

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
  ADD KEY `id_materia` (`id_materia`,`nombre_curso`,`nombre_rol`);

--
-- Indices de la tabla `asignacion_rol`
--
ALTER TABLE `asignacion_rol`
  ADD KEY `id_documento` (`id_documento`),
  ADD KEY `nombre_rol` (`nombre_rol`);

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
-- Filtros para la tabla `asignacion_rol`
--
ALTER TABLE `asignacion_rol`
  ADD CONSTRAINT `asignacion_rol_ibfk_2` FOREIGN KEY (`id_documento`) REFERENCES `registropersona` (`id_documento`),
  ADD CONSTRAINT `asignacion_rol_ibfk_3` FOREIGN KEY (`nombre_rol`) REFERENCES `rol` (`nombre_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `seguridad`
--
ALTER TABLE `seguridad`
  ADD CONSTRAINT `seguridad_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `registropersona` (`id_documento`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
