-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2018 a las 15:12:41
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bodyfitness`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombreActividad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `costoActividad` int(11) DEFAULT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `nombreActividad`, `costoActividad`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'salon de pesas', 50, 'A', '2018-08-07 14:48:28', '2018-08-07 14:48:28'),
(2, 'pesas', 50, 'A', '2018-09-12 16:45:42', '2018-09-12 16:45:42'),
(3, 'cuerdas y cardio extremo', 50, 'A', '2018-09-12 16:46:46', '2018-09-12 16:46:46'),
(4, 'sala de recreo', 200, 'A', '2018-09-12 16:47:42', '2018-09-12 16:47:42'),
(5, 'cardio extremo', 30, 'A', '2018-09-12 16:49:17', '2018-09-12 16:49:17'),
(6, 'todo gratis', 200, 'A', '2018-09-12 16:50:29', '2018-09-12 16:50:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_persona` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id`, `id_persona`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-08-07 15:31:55', '2018-08-07 15:31:55'),
(2, 2, '2018-08-07 15:40:43', '2018-08-07 15:40:43'),
(3, 3, '2018-08-13 02:09:46', '2018-08-13 02:09:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_persona` int(11) NOT NULL,
  `curriculum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cerDeSalud` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id`, `id_persona`, `curriculum`, `cerDeSalud`, `otros`, `created_at`, `updated_at`) VALUES
(1, 24, 'si', 'si', 'no', '2018-09-12 16:58:58', '2018-09-12 16:58:58'),
(2, 25, 'no', 'si', 'no', '2018-09-12 16:59:56', '2018-09-12 16:59:56'),
(3, 26, 'no', 'si', 'no', '2018-09-12 17:00:33', '2018-09-12 17:00:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento`
--

CREATE TABLE `mantenimiento` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_personas` int(11) NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mantenimiento`
--

INSERT INTO `mantenimiento` (`id`, `id_personas`, `tipo`, `nombre`, `monto`, `observacion`, `created_at`, `updated_at`) VALUES
(1, 1, 'egreso', 'admin', '500', 'grasa para las maquinas', '2018-08-07 14:45:58', '2018-08-07 14:45:58'),
(2, 2, 'Ingreso', 'admin', '124', '', '2018-08-07 15:41:01', '2018-08-07 15:41:01'),
(3, 3, 'Ingreso', 'admin', '124', '', '2018-08-13 02:10:49', '2018-08-13 02:10:49'),
(4, 4, 'Ingreso', 'admin', '124', '', '2018-09-12 16:56:31', '2018-09-12 16:56:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_15_234956_crear_tabla_planes', 1),
(4, '2018_06_02_233506_create_table_actividades', 1),
(5, '2018_06_02_233715_create_table_planes_actividades', 1),
(6, '2018_06_11_151040_crear_tabla_personas', 1),
(7, '2018_06_20_012033_crear_tabla_documentos', 1),
(8, '2018_06_30_162120_crear_tabla_matenimiento', 1),
(9, '2018_07_01_193805_crear_tabla_asistencia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fec_nacimiento` date DEFAULT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `huella` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `tipo`, `cedula`, `fec_nacimiento`, `area`, `telefono`, `huella`, `sexo`, `correo`, `direccion`, `plan`, `estado`, `foto`, `created_at`, `updated_at`) VALUES
(4, 'pedro', 'afiliado', '22350657', '2000-01-01', '0424', '1000000', 'No Cargada', 'M', 'ssss@sss.com', 'ssssslll', '1', 'A', NULL, '2018-08-13 02:19:08', '2018-08-13 02:19:08'),
(5, 'pedro', 'afiliado', '4000000', '2000-01-01', '0424', '1000000', 'No Cargada', 'M', 'ppp@gmail.com', '0222', '1', 'A', 'foto_5b98fd4435a4e.png', '2018-09-12 15:50:05', '2018-09-12 15:50:05'),
(6, 'juana', 'afiliado', '4000001', '2000-01-01', '0424', '1000001', 'No Cargada', 'M', 'pppp@gmail.com', '1222', '1', 'A', 'foto_5b98fd9da8cce.png', '2018-09-12 15:51:01', '2018-09-12 15:51:01'),
(7, 'juanito', 'afiliado', '4000002', '2000-01-01', '0414', '1000002', 'No Cargada', 'M', 'aaa@ss.com', 'aa22', '1', 'A', 'foto_5b98fdabc9b3b.png', '2018-09-12 15:51:59', '2018-09-12 15:51:59'),
(8, 'alejandra', 'afiliado', '4000003', '2000-01-01', '0424', '1000003', 'No Cargada', 'M', 'aaa@aaa.com', 'aa22', '1', 'A', 'foto_5b98fe23cf2f8.png', '2018-09-12 15:53:11', '2018-09-12 15:53:11'),
(9, 'alejandro', 'afiliado', '4000004', '2000-01-01', '0426', '1000004', 'No Cargada', 'M', 'aa@sss.com', 'aabb', '1', 'A', 'foto_5b98fe7e72eaf.png', '2018-09-12 15:54:44', '2018-09-12 15:54:44'),
(10, 'perea', 'afiliado', '4000005', '2000-01-01', '0414', '1000005', 'No Cargada', 'M', 'pp@aa.com', 'aaass', '1', 'A', 'foto_5b98fee8b84c2.png', '2018-09-12 15:56:31', '2018-09-12 15:56:31'),
(11, 'maria', 'afiliado', '4000006', '2000-01-02', '0412', '1000006', 'No Cargada', 'F', 'aa@aa.com', 'aaa', '1', 'A', 'foto_5b98ff60e1113.png', '2018-09-12 15:58:29', '2018-09-12 15:58:29'),
(12, 'mariano', 'afiliado', '4000008', '2000-01-01', '0412', '1000008', 'No Cargada', 'M', 'sss@sss.com', 'aaaa@.com', '1', 'A', 'foto_5b98ff69d9330.png', '2018-09-12 16:00:36', '2018-09-12 16:00:36'),
(13, 'pedrita', 'afiliado', '4000007', '2000-01-01', '0412', '1000007', 'No Cargada', 'F', 'aaa@sssss.com', 'aaaww', '1', 'A', 'foto_5b990049a1a5d.png', '2018-09-12 16:04:20', '2018-09-12 16:04:20'),
(14, 'juancha', 'afiliado', '4000009', '2000-01-01', '0412', '1000009', 'No Cargada', 'F', 'aaa@xx.com', 's2', '1', 'A', 'foto_5b99018737131.png', '2018-09-12 16:07:42', '2018-09-12 16:07:42'),
(15, 'marisol', 'afiliado', '4000010', '2000-01-01', '0412', '1000010', 'No Cargada', 'M', 's@a.com', 'ss2', '1', 'A', 'foto_5b990197b3877.png', '2018-09-12 16:09:54', '2018-09-12 16:09:54'),
(16, 'juancho', 'afiliado', '4000011', '2000-01-01', '0412', '1000011', 'No Cargada', 'M', 'ddd@sss.com', 'aaww', '1', 'A', 'foto_5b99031e06acf.png', '2018-09-12 16:14:26', '2018-09-12 16:14:26'),
(17, 'daniel', 'afiliado', '4000012', '2000-03-01', '0412', '1000012', 'No Cargada', 'M', 'aa@wqq.com', 'saaa', '1', 'A', 'foto_5b990326f1479.png', '2018-09-12 16:16:39', '2018-09-12 16:16:39'),
(18, 'daniela', 'afiliado', '4000013', '2000-02-02', '0412', '1000013', 'No Cargada', 'F', 'dd@xn--idaaa.com', 'ssa', '1', 'A', 'foto_5b9904d244aa2.png', '2018-09-12 16:21:42', '2018-09-12 16:21:42'),
(19, 'sandra', 'afiliado', '4000014', '2000-01-01', '0412', '1000014', 'No Cargada', 'F', 'ss@s.com', 'aasa', '1', 'A', 'foto_5b9905bd175d7.png', '2018-09-12 16:25:37', '2018-09-12 16:25:37'),
(20, 'reus', 'afiliado', '4000015', '2000-02-02', '0412', '1000015', 'No Cargada', 'M', 'aaa@sssss.com', 'aaa', '1', 'A', 'foto_5b9905e941cdb.png', '2018-09-12 16:28:20', '2018-09-12 16:28:20'),
(21, 'castellano', 'afiliado', '4000016', '2000-01-01', '0412', '1000016', 'No Cargada', 'M', 'xxxxxxx@sss.com', 'xxxxxxx', '1', 'A', 'foto_5b99070cf3e6f.png', '2018-09-12 16:32:55', '2018-09-12 16:32:55'),
(22, 'maria jose perez andrades', 'afiliado', '4000017', '2000-01-01', '0414', '1000017', 'No Cargada', 'F', 'aadfc@sss.com', 'sxsxs', '1', 'A', 'foto_5b99078544e72.png', '2018-09-12 16:35:42', '2018-09-12 16:35:42'),
(23, 'jose', 'afiliado', '4000018', '2000-01-01', '0412', '1000018', 'No Cargada', 'M', 'lll@qq.com', 'xa', '1', 'A', 'foto_5b99089eda643.png', '2018-09-12 16:44:58', '2018-09-12 16:44:58'),
(24, 'pedro', 'instructor', '4000036', '0001-01-01', '0412', '1000019', 'No Cargada', 'Hombre', 'sss@s.com', 'assss', NULL, 'A', 'foto_5b990d691e848.png', '2018-09-12 16:58:58', '2018-09-12 16:58:58'),
(25, 'alonso', 'instructor', '4000047', '2000-01-01', '0412', '1000065', 'No Cargada', 'Hombre', 'ssssww@sss.com', 'aaaaaa', NULL, 'A', 'foto_5b990d9f8c6db.png', '2018-09-12 16:59:56', '2018-09-12 16:59:56'),
(26, 'xabi', 'instructor', '4000057', '2000-01-02', '0414', '1000035', 'No Cargada', 'Mujer', 'aa@qq.com', 'sssaa', NULL, 'A', 'foto_5b990dd20e8b2.png', '2018-09-12 17:00:33', '2018-09-12 17:00:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE `planes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombrePlan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `costoPlan` int(11) DEFAULT NULL,
  `costoCarnet` int(11) DEFAULT NULL,
  `costoInscripcion` int(11) DEFAULT NULL,
  `descuento` int(11) DEFAULT NULL,
  `dias` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`id`, `nombrePlan`, `costoPlan`, `costoCarnet`, `costoInscripcion`, `descuento`, `dias`, `edad`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'amigos y +', 124, 30, 50, 5, NULL, '5', 'A', '2018-08-07 14:48:28', '2018-08-07 14:48:28'),
(2, 'sala master', 495, 200, 300, 10, NULL, '4', 'A', '2018-09-12 16:45:42', '2018-09-12 16:45:42'),
(3, 'TRX', 100, 30, 20, 0, NULL, '3', 'A', '2018-09-12 16:46:45', '2018-09-12 16:46:45'),
(4, 'famila 2', 161, 10, 20, 30, 'viernes;sabado', '5', 'A', '2018-09-12 16:47:42', '2018-09-12 16:47:42'),
(5, 'agua gratis', 91, 30, 20, 30, 'lunes;miercoles;viernes', '5', 'A', '2018-09-12 16:49:17', '2018-09-12 16:49:17'),
(6, 'foto y carnet', 280, 30, 20, 20, NULL, '2', 'A', '2018-09-12 16:50:29', '2018-09-12 16:50:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes_actividades`
--

CREATE TABLE `planes_actividades` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_planes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_actividades` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `planes_actividades`
--

INSERT INTO `planes_actividades` (`id`, `id_planes`, `id_actividades`, `created_at`, `updated_at`) VALUES
(1, '1', 1, '2018-08-07 14:48:28', '2018-08-07 14:48:28'),
(2, '2', 2, '2018-09-12 16:45:42', '2018-09-12 16:45:42'),
(3, '3', 3, '2018-09-12 16:46:46', '2018-09-12 16:46:46'),
(4, '4', 4, '2018-09-12 16:47:42', '2018-09-12 16:47:42'),
(5, '5', 5, '2018-09-12 16:49:17', '2018-09-12 16:49:17'),
(6, '5', 2, '2018-09-12 16:49:18', '2018-09-12 16:49:18'),
(7, '6', 6, '2018-09-12 16:50:29', '2018-09-12 16:50:29'),
(8, '6', 1, '2018-09-12 16:50:29', '2018-09-12 16:50:29'),
(9, '6', 2, '2018-09-12 16:50:29', '2018-09-12 16:50:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fec_nacimiento` date DEFAULT NULL,
  `cedula` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `huella` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primerInicio` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `rol`, `password`, `fec_nacimiento`, `cedula`, `area`, `telefono`, `sexo`, `huella`, `foto`, `primerInicio`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'G', '$2y$10$ql3hJnWJNody1Q3JDVbc/ePnbpYqm08l1KosJR8gu1svfoizhLlui', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'YrA7ytcVfXKKNqJ3LI9q2URs2vU61WAMkr7pV88a3evZKWkwnMRwKw9fOQJv', '2018-06-02 12:00:00', '2018-06-02 12:00:00'),
(3, 'ramonn', 'kewo@sss.com', 'G', '$2y$10$jAv/1LMRSW7RM5S5h.wXiurWoiqPwZLQjP.Lvrcj/R.dXcimUmVna', '2000-01-01', '22520363', '0424', '1000000', 'M', NULL, 'foto_5b70ac439a544.png', 1, 1, 't4k3rHeu1yXzYHE3SHlyWteAwNX33rvkki7m0NEk', '2018-08-13 01:54:09', '2018-08-13 01:54:09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personas_cedula_unique` (`cedula`);

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `planes_actividades`
--
ALTER TABLE `planes_actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `planes_actividades`
--
ALTER TABLE `planes_actividades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
