-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2018 at 03:52 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evolve_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `actividad`
--

CREATE TABLE `actividad` (
  `Act_id` int(10) NOT NULL,
  `P_id` int(10) NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_culminacion` date DEFAULT NULL,
  `estatus` varchar(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actividad`
--

INSERT INTO `actividad` (`Act_id`, `P_id`, `descripcion`, `fecha_culminacion`, `estatus`) VALUES
(1, 2, 'Login', '2018-02-13', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `archivo`
--

CREATE TABLE `archivo` (
  `A_id` int(10) NOT NULL,
  `P_id` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `ruta` text NOT NULL,
  `U_id` int(10) NOT NULL,
  `fecha_carga` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `archivo`
--

INSERT INTO `archivo` (`A_id`, `P_id`, `nombre`, `ruta`, `U_id`, `fecha_carga`) VALUES
(1, 2, 'Prueba6_2_1.png', '\\uploads\\Prueba6_2_1.png', 6, '2018-02-13 20:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `cotizacion`
--

CREATE TABLE `cotizacion` (
  `C_id` int(10) NOT NULL,
  `U_id` int(10) NOT NULL,
  `estatus` varchar(10) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `precio` int(128) NOT NULL,
  `fecha_s` date NOT NULL,
  `fecha_c` date NOT NULL,
  `moneda` varchar(10) NOT NULL,
  `Pl_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cotizacion`
--

INSERT INTO `cotizacion` (`C_id`, `U_id`, `estatus`, `categoria`, `precio`, `fecha_s`, `fecha_c`, `moneda`, `Pl_id`) VALUES
(18, 6, 'Por pagar', 'corporativa', 200, '2018-03-30', '2018-02-06', 'Bolivar', 1),
(19, 6, 'Por pagar', 'personal', 200, '2018-03-30', '2018-02-09', 'Bolivar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `factura`
--

CREATE TABLE `factura` (
  `F_id` int(10) NOT NULL,
  `C_id` int(10) NOT NULL,
  `estatus` varchar(10) NOT NULL,
  `linkfacturas` varchar(100) NOT NULL,
  `U_id` int(10) NOT NULL,
  `linkterminos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `factura`
--

INSERT INTO `factura` (`F_id`, `C_id`, `estatus`, `linkfacturas`, `U_id`, `linkterminos`) VALUES
(1, 19, 'Por pagar', 'www.facturaaqui.com', 6, 'www.terminosycondicione.com');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `Pl_id` int(10) NOT NULL,
  `nropag` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`Pl_id`, `nropag`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `proyecto`
--

CREATE TABLE `proyecto` (
  `P_id` int(10) NOT NULL,
  `U_id` int(10) NOT NULL,
  `D_id` int(10) NOT NULL,
  `Porcentaje` int(3) NOT NULL,
  `Fecha_I` date NOT NULL,
  `Fecha_E` date NOT NULL,
  `Categoria` varchar(30) NOT NULL,
  `Estatus` varchar(1) NOT NULL,
  `F_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proyecto`
--

INSERT INTO `proyecto` (`P_id`, `U_id`, `D_id`, `Porcentaje`, `Fecha_I`, `Fecha_E`, `Categoria`, `Estatus`, `F_id`) VALUES
(2, 6, 7, 20, '2018-02-09', '2018-03-30', 'Tienda Virtual', 'E', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cedula` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_user` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `cedula`, `apellido`, `tipo_user`, `pais`) VALUES
(6, 'Ronaldo', 'cristiano@yahoo.com', '$2y$10$6QDIbF1L/oGvyJiFFDSHDOp82B0qnMoZZjvudXyArk9IhdkgBBmcC', 'nHIn4GT3hyVqSE4rKWJA8IvRHHg4HBrFV2Yh2A5iqhIvJevvbjyy79sWrBDq', '2017-12-30 04:01:40', '2018-02-19 03:44:37', '1234526', 'Dos Santos', 'u', 'Portugal'),
(7, 'Jesus', 'jesusvezgag@gmail.com', '$2y$10$0cHbnDqOs701fU4h/V6CtOJiQalDetGLya0YoV1UyhrZ98JnsD1SG', 'NVuitrxaWjpX7TOhfZ3M8Ocr7L4ThG98vvuXZ4sH2YW81wWeZvwCkStPdm8P', '2018-02-07 02:01:40', '2018-02-19 20:48:50', '123452', 'Vezga', 'd', 'Venezuela');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`Act_id`),
  ADD KEY `actividad_ibfk_1` (`P_id`);

--
-- Indexes for table `archivo`
--
ALTER TABLE `archivo`
  ADD PRIMARY KEY (`A_id`),
  ADD KEY `P_id` (`P_id`),
  ADD KEY `archivo_ibfk_1` (`U_id`);

--
-- Indexes for table `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`C_id`),
  ADD KEY `Pl_id` (`Pl_id`),
  ADD KEY `cotizacion_ibfk_1` (`U_id`);

--
-- Indexes for table `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`F_id`),
  ADD KEY `C_id` (`C_id`),
  ADD KEY `U_id` (`U_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`Pl_id`);

--
-- Indexes for table `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`P_id`),
  ADD KEY `U_id` (`U_id`),
  ADD KEY `D_id` (`D_id`),
  ADD KEY `F_id` (`F_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actividad`
--
ALTER TABLE `actividad`
  MODIFY `Act_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `archivo`
--
ALTER TABLE `archivo`
  MODIFY `A_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `C_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `factura`
--
ALTER TABLE `factura`
  MODIFY `F_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `Pl_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `P_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `actividad_ibfk_1` FOREIGN KEY (`P_id`) REFERENCES `proyecto` (`P_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `archivo`
--
ALTER TABLE `archivo`
  ADD CONSTRAINT `P_id` FOREIGN KEY (`P_id`) REFERENCES `proyecto` (`P_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `archivo_ibfk_1` FOREIGN KEY (`U_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD CONSTRAINT `cotizacion_ibfk_1` FOREIGN KEY (`U_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cotizacion_ibfk_2` FOREIGN KEY (`Pl_id`) REFERENCES `plan` (`Pl_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`C_id`) REFERENCES `cotizacion` (`C_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`U_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`U_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proyecto_ibfk_2` FOREIGN KEY (`D_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proyecto_ibfk_3` FOREIGN KEY (`F_id`) REFERENCES `factura` (`F_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
