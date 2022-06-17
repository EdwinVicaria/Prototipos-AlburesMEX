-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.23 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla proyecto-ux.alburs
CREATE TABLE IF NOT EXISTS `alburs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(1000) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(1000) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `tipo_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_alburs_tipos` (`tipo_id`),
  KEY `FK_alburs_users` (`user_id`),
  CONSTRAINT `FK_alburs_tipos` FOREIGN KEY (`tipo_id`) REFERENCES `tipos` (`id`),
  CONSTRAINT `FK_alburs_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Volcando datos para la tabla proyecto-ux.alburs: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `alburs` DISABLE KEYS */;
INSERT INTO `alburs` (`id`, `titulo`, `descripcion`, `tipo_id`, `created_at`, `updated_at`, `user_id`) VALUES
	(38, 'El plátano en barro', 'Frase “Plátano embarro” referente a embarrar el organo reproductor masculino.', 3, '2022-05-04 23:25:52', '2022-06-05 16:44:36', 2),
	(39, '“Ah, travieso muchacho”', 'Juego de palabras. “Atravieso muchacho”, que es una insinuación sexual.', 2, '2022-05-04 23:26:27', '2022-05-04 23:26:27', 2),
	(40, '¿Jugamos cinco contra uno?', 'Insinuación sexual, masturbación.', 2, '2022-05-04 23:27:04', '2022-05-04 23:27:04', 2),
	(53, 'Estas molesto?', 'Juego de palabras que se refiere a insinuar que necesita que le chupen su parte intima.', 3, '2022-05-30 23:44:58', '2022-06-06 23:08:38', 31),
	(54, 'Vas a querer?', 'Se refiere que si vas a querer que te hagan el delicioso(sexo).', 3, '2022-05-30 23:59:02', '2022-06-06 23:09:31', 31),
	(55, 'Vas a ir a Dalas?', 'Se refiere que si al que se lo preguntan dara el ano o chupar el pene de otro.', 3, '2022-05-31 22:58:52', '2022-06-06 23:15:08', 31),
	(56, 'Te cepillaste los dientes?', 'Juego de palabras que insinua a que se la chupes al que te lo pregunto.', 3, '2022-06-02 22:54:19', '2022-06-06 23:13:25', 31),
	(57, 'Te gusta el Queso bas?', 'Se refiere que si te gusta el que sobas, juego de palabras que se refiere que tocas si te gusta tocar la parte intima del hombre.', 2, '2022-06-03 14:54:52', '2022-06-03 14:54:52', 2),
	(64, 'Si me la lavo me la chupas?', 'Jugar con la mente de la persona y hacer decir que le gusta chupas el pene sucio, porque al decir si me lo lavo se refiere al pene.', 2, '2022-06-03 17:40:09', '2022-06-06 23:06:35', 2),
	(65, 'Me prestas al niño?', 'Juego de palabras que se refiere al niño que es basicamente a la parte intima trasera de una persona.', 3, '2022-06-05 16:42:50', '2022-06-05 16:42:50', 2),
	(66, 'Ven a ver esta madre que tengo aqui', 'Frase tipica que se usa para decirle a alguien que venga a ver tu parte intima', 3, '2022-06-06 04:28:38', '2022-06-06 04:29:05', 31),
	(67, 'No es lo mismo la verdura fresca, que verla dura y fresca.', 'Juego de palabras que significa ver duro y fresco el pene de alguien mas.', 3, '2022-06-06 15:49:17', '2022-06-06 15:49:17', 37),
	(68, 'Eres de tixko?', 'Se dice que en el municipio de Tixkokob puro homosexual hay.', 3, '2022-06-06 23:17:35', '2022-06-06 23:17:35', 37),
	(69, 'HOLAAA', 'prueba', 1, '2022-06-06 23:24:23', '2022-06-06 23:24:23', 37);
/*!40000 ALTER TABLE `alburs` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto-ux.albur_user
CREATE TABLE IF NOT EXISTS `albur_user` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `albur_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_albur_user_alburs` (`albur_id`),
  KEY `FK_albur_user_users` (`user_id`),
  CONSTRAINT `FK_albur_user_alburs` FOREIGN KEY (`albur_id`) REFERENCES `alburs` (`id`),
  CONSTRAINT `FK_albur_user_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Volcando datos para la tabla proyecto-ux.albur_user: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `albur_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `albur_user` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto-ux.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto-ux.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto-ux.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto-ux.migrations: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_05_09_230906_create_permission_tables', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto-ux.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto-ux.model_has_permissions: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto-ux.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto-ux.model_has_roles: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1),
	(1, 'App\\Models\\User', 2);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto-ux.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto-ux.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('vicaria@gmail.com', '$2y$10$MKcWEpdCzdeJx4Q2dNjhE.W7aSWSlCF16h9f/GeIIXhdb16RqYKaO', '2022-06-05 16:09:03'),
	('edwinvicaria6@gmail.com', '$2y$10$FOzkoGC8q6aEoTFOjBhAwuGgu3gM6i3euvkkDUDf8HRCdocTxcd4u', '2022-06-06 21:56:31');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto-ux.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto-ux.permissions: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'editar albur', 'web', '2022-05-09 18:37:51', '2022-05-09 18:37:52'),
	(2, 'eliminar albur', 'web', '2022-05-09 18:38:04', '2022-05-09 18:38:04'),
	(3, 'validar albur', 'web', '2022-05-09 18:38:25', '2022-05-09 18:38:26'),
	(4, 'ver albur', 'web', '2022-05-09 18:40:10', '2022-05-09 18:40:11');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto-ux.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto-ux.personal_access_tokens: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto-ux.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto-ux.roles: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'web', '2022-05-09 18:35:29', '2022-05-09 18:35:30'),
	(2, 'editor', 'web', '2022-05-09 18:35:31', '2022-05-09 18:35:32'),
	(3, 'visitante', 'web', '2022-05-09 18:35:59', '2022-05-09 18:36:00');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto-ux.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto-ux.role_has_permissions: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 1),
	(1, 2),
	(2, 2),
	(3, 2),
	(4, 2),
	(4, 3);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto-ux.sexos
CREATE TABLE IF NOT EXISTS `sexos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `sexo` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Volcando datos para la tabla proyecto-ux.sexos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `sexos` DISABLE KEYS */;
INSERT INTO `sexos` (`id`, `sexo`) VALUES
	(1, 'Hombre'),
	(2, 'Mujer'),
	(3, 'Indefinido');
/*!40000 ALTER TABLE `sexos` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto-ux.tipos
CREATE TABLE IF NOT EXISTS `tipos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) COLLATE armscii8_bin NOT NULL,
  `info_tipo` varchar(500) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `img_tipo` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Volcando datos para la tabla proyecto-ux.tipos: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `tipos` DISABLE KEYS */;
INSERT INTO `tipos` (`id`, `tipo`, `info_tipo`, `img_tipo`) VALUES
	(1, 'Nombre propio', 'Este tipo de albur es creado con el fin de dar explicaciones a albures que normalmente no se suelen escuchar, es decir, son aquellos cuya combinación de palabras o letras tienen otro significado, normalmente burlón o pícaro.', 'img/nombre.png'),
	(2, 'Sexual', 'Tipo de albur que se caracteriza mayormente por referenciarse a la partes íntimas del cuerpo o aluden al sexo.', 'img/sexual.png'),
	(3, 'Grocero o vulgar', 'Tipo de albur que se basa mayormente en cosas fuertes a la hora de utilizarlos y al dar una explicación es un poco complicado, ya que las palabras que abundan en ellos pueden ser considerados vulgares.', 'img/grocero.png'),
	(4, 'Comida', 'Tipo de albur que se usa mayormente en doble sentido, son bastante divertidos, dónde puedes encontrar desde nombres de tacos, postres, mariscos, etc. Y todo puede ser mal pensado a la hora de mencionar algún alimento.', 'img/comida.png'),
	(5, 'Lugar', 'Tipo de albur que se usa para darle doble sentido a lugares, ya sea que contenga un nombre burlón o grosero que la persona tarde en comprender, realizando algún juego de palabras con el mismo.', 'img/lugar.png');
/*!40000 ALTER TABLE `tipos` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto-ux.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyecto-ux.users: ~31 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `foto`) VALUES
	(1, 'Melissa123', 'melissa6@gmail.com', NULL, '$2y$10$Ccoc7Htwgq9Xa/2hA4xJQ.j9lUpv4bawuQ9spVDr6j.IogTMW6J/e', NULL, '2022-04-04 23:34:41', '2022-06-05 23:00:30', 'avatarMelissa.jpg'),
	(2, 'Edwin VX', 'vicaria@gmail.com', NULL, '$2y$10$10AHvABZNwJyW638Yu0JbuqEDQNdrXjhJ8312NSmabeKYdmHfwzMq', NULL, '2022-04-29 18:40:51', '2022-06-05 22:10:34', 'avatarEdwin VX.jpg'),
	(3, 'Yuuji', 'yuuji@gmail.com', NULL, '$2y$10$BLkfERUncDllhV3rzkV8Ve1JvD/OAfOj4nRTIfe9afx4sO6VNoNSm', NULL, '2022-05-20 18:18:20', '2022-05-20 18:18:20', NULL),
	(4, 'Prof. Diana McDermott MD', 'traynor@example.org', '2022-05-20 18:19:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0SqfY5XMWg', '2022-05-20 18:19:54', '2022-05-20 18:19:54', NULL),
	(5, 'Mitchel Lynch', 'galtenwerth@example.com', '2022-05-20 18:20:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'quxDtJkTw9', '2022-05-20 18:20:32', '2022-05-20 18:20:32', NULL),
	(6, 'Ms. Ava Abernathy IV', 'bergstrom.noble@example.com', '2022-05-20 18:20:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'd5nku8ZtVe', '2022-05-20 18:20:32', '2022-05-20 18:20:32', NULL),
	(7, 'Prof. Sedrick Quigley Sr.', 'sierra.crist@example.net', '2022-05-20 18:20:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8bz3WZ3NIZZmJ89Wgv4FJxbK0IkhRRjroE4FUXYwEkCgUzpb8NWHiyyo60J2', '2022-05-20 18:20:32', '2022-05-20 18:20:32', NULL),
	(8, 'Prof. Jettie Robel II', 'eugenia.ferry@example.net', '2022-05-20 18:38:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6m3GBa3TFO', '2022-05-20 18:38:12', '2022-05-20 18:38:12', NULL),
	(9, 'Alfonzo Bashirian', 'stroman.jaeden@example.org', '2022-05-20 18:38:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N3t5PAzKOQ', '2022-05-20 18:38:12', '2022-05-20 18:38:12', NULL),
	(10, 'Dr. Ismael Effertz DDS', 'parisian.garrett@example.net', '2022-05-20 18:38:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZEhhemNlpE', '2022-05-20 18:38:12', '2022-05-20 18:38:12', NULL),
	(11, 'Kailyn Frami', 'gjacobs@example.net', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yGOBW7yJ5F', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(12, 'Noemi Kunze', 'catalina60@example.net', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xh6shjiPkK', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(13, 'Sigmund Dickinson', 'alycia.parisian@example.com', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dDpN2msWxa', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(14, 'Prof. Fritz Witting III', 'medhurst.rhea@example.org', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CUJo7z7BxC', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(15, 'Mr. Faustino Schiller', 'dean44@example.net', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rrSeY1J4s6', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(16, 'Taryn Reichert', 'beatty.catherine@example.net', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QrvJF7HHRk', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(17, 'Berneice Gerlach', 'vmarvin@example.com', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YJ3BWJrCWQ', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(18, 'Elenor Schumm', 'mante.alphonso@example.org', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wo9RPn5ZNN', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(19, 'Jaron Hoeger', 'ziemann.glenda@example.net', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'iDF1LFF1s0', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(20, 'Mr. Darron Mertz', 'jbayer@example.net', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ifOPLiRY5D', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(21, 'Sherwood Feeney', 'gloria.orn@example.com', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nD8zsF0lJr', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(22, 'Dr. Minnie Kerluke Jr.', 'uhartmann@example.org', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kdlA1FMf1C', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(23, 'Vincenzo Medhurst', 'williamson.emory@example.com', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HEBrUTQShi', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(24, 'Mr. Ismael Turner Sr.', 'prohaska.laura@example.net', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nrOFgEIeNO', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(25, 'Dr. Ella Carroll', 'welch.kailey@example.net', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4LyXNbWWcm', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(26, 'Domenico Bergnaum', 'lang.jerome@example.org', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SYwWO9t9p0', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(27, 'Maximillian Kirlin', 'jacey.abernathy@example.com', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'odKJt5BkhK', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(28, 'Javier Barrows', 'fahey.carmen@example.org', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'u1foY1CEY8', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(29, 'Prof. Malachi Jenkins', 'alvera.pagac@example.net', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oraaM6NpeS', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(30, 'Prof. Kirk Upton', 'clementina00@example.org', '2022-05-20 18:38:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1AKbxRc5P3', '2022-05-20 18:38:35', '2022-05-20 18:38:35', NULL),
	(31, 'Isaias Nahuat', 'isaias@gmail.com', NULL, '$2y$10$RSSFhThKMHPumYBY.xP66epgTVaQ6umDe62EL/jTD8FbyWdps13je', NULL, '2022-05-30 23:04:40', '2022-06-05 22:16:50', 'avatarIsaias Nahuat.jpg'),
	(32, 'Ernesto Ramirez', 'ernesto@gmail.com', NULL, '$2y$10$W2LiX6H4H6TLb5TGt555bu5AKA54rLwXdz9CRW72Y77AXwhFqz/SS', NULL, '2022-06-02 22:35:14', '2022-06-02 22:36:19', 'avatarErnesto Ramirez.jpg'),
	(33, 'Alma', 'almaxool@gmail.com', NULL, '$2y$10$/qEJv8rFDe0YOFd8WswWj.eh7iTCH1a6sAxqJ5VjyPR4ie3Qs4N5q', NULL, '2022-06-02 22:37:56', '2022-06-02 22:38:23', NULL),
	(34, 'Jose Vicaria', 'josevicaria6@gmail.com', NULL, '$2y$10$ZefQecfu1GNuewlAeuglFuoM1AzSeAmsh3B59aqR0Zxr1XtMlygcC', NULL, '2022-06-04 21:58:08', '2022-06-04 21:58:08', NULL),
	(35, 'Prueba', 'prueba@gmail.com', NULL, '$2y$10$t3iLSWPRRMgdsmtzDZath.HWJTwrfCJnnaIxncB6FuYo.kyXjJfF.', NULL, '2022-06-04 23:21:18', '2022-06-04 23:21:18', NULL),
	(36, 'Reyes Vicaria', 'reyes@gmail.com', NULL, '$2y$10$sC5CHVrAaZYinpShDuYogudgaO4PCfzHSQYpyIem.Kcc0RchaMUHK', NULL, '2022-06-05 00:20:55', '2022-06-05 00:21:08', NULL),
	(37, 'Edwin Vicaria', 'edwinvicaria6@gmail.com', NULL, '$2y$10$qX8q9Uwi0/s6OXVLp8Cf5.I3rFe0w7Sc7fuxstEQR3zfNvDsRGIuK', NULL, '2022-06-06 14:21:08', '2022-06-06 14:21:45', 'avatarEdwin Vicaria.jpg');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
