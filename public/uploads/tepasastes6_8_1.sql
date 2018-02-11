-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-02-2018 a las 19:27:52
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admin_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `d_id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ruta` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_carga` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `e_id` int(10) UNSIGNED NOT NULL,
  `nombres` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cedula_escolar` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `lugar_nac` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ef` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `grado` varchar(4) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `seccion` int(10) UNSIGNED DEFAULT NULL,
  `representante` int(10) UNSIGNED NOT NULL,
  `boleta_ruta` text CHARACTER SET utf8 COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`e_id`, `nombres`, `apellidos`, `cedula_escolar`, `fecha_nac`, `lugar_nac`, `ef`, `sexo`, `grado`, `seccion`, `representante`, `boleta_ruta`) VALUES
(5, 'ESNEIKER EDUARDO', 'PAGLIARULO APONTE', 'V31870339', '2006-10-07', 'OCUMARE', 'MI', 'M', '6', 20, 20, NULL),
(8, 'EBETHZAI SHADAY', 'BETANCOURT BRAVO', 'V10721148716', '2007-08-25', 'CARACAS', 'DC', 'F', '5', 15, 22, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shairaperez.sp@gmail.com', '$2y$10$zpEoGh/KTtCrAFDXchkEo.X0GRJ1PAY9SFmaAHMDuzuRA.iAhYBle', '2018-02-05 02:06:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `s_id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `grado` varchar(4) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `m_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`s_id`, `nombre`, `grado`, `m_id`, `created_at`) VALUES
(1, 'B', '6', 11, '2018-01-18 04:00:00'),
(8, 'A', '1', 11, '2018-01-18 04:00:00'),
(11, 'B', '1', 11, '2018-01-19 02:31:33'),
(13, 'A', '2', 11, '2018-01-19 02:49:02'),
(15, 'B', '5', 11, '2018-01-19 02:58:40'),
(17, 'A', 'P.E.', 11, '2018-01-21 21:19:33'),
(18, 'A', '3', 11, '2018-01-21 21:26:34'),
(19, 'A', '4', 11, '2018-01-21 21:26:41'),
(20, 'A', '6', 24, '2018-01-21 21:49:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cedula` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `rol` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruta_foto` text CHARACTER SET utf8 COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `cedula`, `apellidos`, `sexo`, `telefono`, `direccion`, `cargo`, `descripcion`, `rol`, `ruta_foto`) VALUES
(11, 'Shaira Coromoto', 'shairaperez.sp@gmail.com', '$2y$10$fXSjz32OCzeEAb.7adEbLuIo7XdmWZEt.yvqw.eDcm0dcDXl3JgGq', 'cXywl2HbM49yfZBQyPzZfmuC2ubH8sMpqJE2N4zJMJMUIXRbRsNEveOcJ3bS', '2018-01-17 04:55:12', '2018-01-24 16:22:10', 'V24672360', 'Pérez Méndez', 'F', '04242345148', 'Miranda, Venezuela', 'Maestro', NULL, 'A', 'C:\\xampp\\htdocs\\admin_dg\\public'),
(20, 'ANTONIA MARIA', 'maria@gmail.com', '$2y$10$uYQiVWVWFwgvzqFo20JV9O7.hpJZT/wxdNRAjc3m//UTbmUGFv1Ae', 'VeRiZWTcQoeG6zIUmaRsh6RESe0eTS4If0jGYlMHi1hMQuPMhpJyDnK7w44i', '2018-01-18 17:17:03', '2018-01-18 17:17:03', 'V6993088', 'NAVARRO PAGLIARULO', 'F', '02399207735', 'CALLE TAMANACO, CASA 104', NULL, NULL, 'R', NULL),
(21, 'VIOLETA JAMILETH', 'example@gmail.com', '$2y$10$QLcPcx4/fGGTa6XTgdG.L.5AYmI02L2y4mWjEqcMpvlBEZHYISQMm', NULL, '2018-01-18 17:20:33', '2018-01-18 17:20:33', 'V16578675', 'PRIN PEREIRA', 'F', '02399921008', 'COLINAS DE BUENA VISTA', NULL, NULL, 'R', NULL),
(22, 'ELIS BETZAIDA', 'example@gmail.com', '$2y$10$gmnFBu9XPhbjPsvDy1XrWOC2MmDbhFFp88yjsUqM7c.hU8SAlhT0W', NULL, '2018-01-18 22:09:51', '2018-01-18 22:09:51', 'V21148716', 'BRAVO HERNANDEZ', 'F', '04127294455', 'LOZADA, SECTOR 12, CASA 22', NULL, NULL, 'R', NULL),
(24, 'YUNEIDA', 'mendezyc6@gmail.com', '$2y$10$wpC0UlitdovPoEQgVaCVNekUzxJyFTOslm3YL8TiaTe79ZF25/qya', 'a11tUSl27Blsx716J9FfrvAHhF3n7BkC7Iqsw2ANmqUt6ZwcdHh6xz4nDoH6', '2018-01-23 18:31:40', '2018-01-23 18:31:40', 'V10079965', 'MENDEZ CASTILLO', 'F', '04269092045', 'Santa Teresa del Tuy, Urb. San José - Calle Ricaurte casa Nº 03', 'Maestro', NULL, 'M', 'C:\\xampp\\htdocs\\admin_dg\\public');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`d_id`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `representante` (`representante`) USING BTREE,
  ADD KEY `seccion_fk` (`seccion`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `email` (`email`),
  ADD KEY `token` (`token`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `m_id_fk` (`m_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `d_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `e_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `s_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `representante_fk` FOREIGN KEY (`representante`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seccion_fk` FOREIGN KEY (`seccion`) REFERENCES `seccion` (`s_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD CONSTRAINT `m_id_fk` FOREIGN KEY (`m_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
