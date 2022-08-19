-- Adminer 4.8.1 MySQL 5.7.33 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `auth_activation_attempts`;
CREATE TABLE `auth_activation_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36',	'67c49f644ed85026c8cd7fede4b44107',	'2022-06-19 08:48:33'),
(2,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36',	'1fc99d80c756a0d2b649632be7063541',	'2022-06-21 22:52:42'),
(3,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36',	'508d47e074c6d823d5bb36b8d2492d21',	'2022-06-22 00:40:29'),
(4,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36',	'410e3cbabf663f23d2d5fa54e6764d4f',	'2022-06-22 00:43:44'),
(5,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36',	'f03b1c95794c52d63ae031bed354bfbb',	'2022-06-24 02:33:02'),
(6,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36',	'edfa9053a9cb0bfeb9d2fc9cf020670b',	'2022-06-24 05:22:45'),
(7,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37',	'c87ef87ad4550e5b659a4c0904bdcba7',	'2022-06-27 03:33:19'),
(8,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37',	'b239212de6a7102aecd33a79435d6061',	'2022-06-27 04:18:38'),
(9,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37',	'9c2b71c35ea6d8f522f2b1c4d4e588c6',	'2022-06-27 10:25:20'),
(10,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37',	'5ac29725847752e9cba568c9c8ece60c',	'2022-06-28 00:58:08'),
(11,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37',	'b0edb0fef0c763f077c0616c251f22c8',	'2022-06-28 01:46:06'),
(12,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37',	'95d971f6257a26f7970256ed16e13130',	'2022-06-28 01:50:42'),
(13,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37',	'fdf62ebc71fb0b780b3539309c06832a',	'2022-06-28 01:54:05');

DROP TABLE IF EXISTS `auth_groups`;
CREATE TABLE `auth_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1,	'admin',	'Site Administrator'),
(2,	'user',	'Regular User');

DROP TABLE IF EXISTS `auth_groups_permissions`;
CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) unsigned NOT NULL DEFAULT '0',
  `permission_id` int(11) unsigned NOT NULL DEFAULT '0',
  KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  KEY `group_id_permission_id` (`group_id`,`permission_id`),
  CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `auth_groups_users`;
CREATE TABLE `auth_groups_users` (
  `group_id` int(11) unsigned NOT NULL DEFAULT '0',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  KEY `auth_groups_users_user_id_foreign` (`user_id`),
  KEY `group_id_user_id` (`group_id`,`user_id`),
  CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1,	26),
(1,	27),
(1,	28),
(2,	25);

DROP TABLE IF EXISTS `auth_logins`;
CREATE TABLE `auth_logins` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1,	'::1',	'farhanadji12@student.uns.ac.id',	NULL,	'2022-06-19 08:47:20',	0),
(2,	'::1',	'test1@test.com',	NULL,	'2022-06-19 08:47:37',	0),
(3,	'::1',	'farhanadji12@gmail.com',	1,	'2022-06-19 09:04:52',	1),
(4,	'::1',	'farhanadji12@gmail.com',	1,	'2022-06-19 09:58:44',	1),
(5,	'::1',	'farhanadji12@gmail.com',	1,	'2022-06-19 10:00:50',	1),
(6,	'::1',	'farhanadji12@gmail.com',	1,	'2022-06-19 18:53:49',	1),
(7,	'::1',	'farhanadji12@gmail.com',	1,	'2022-06-19 19:30:15',	1),
(8,	'::1',	'farhanadji12@gmail.com',	1,	'2022-06-20 01:00:56',	1),
(9,	'::1',	'farhanadji12@gmail.com',	1,	'2022-06-20 05:43:43',	1),
(10,	'::1',	'farhanadji12@gmail.com',	1,	'2022-06-21 22:51:03',	1),
(11,	'::1',	'tpobtg8g3c@dcctb.com',	2,	'2022-06-21 22:52:53',	1),
(12,	'::1',	'asdasd',	NULL,	'2022-06-21 23:03:58',	0),
(13,	'::1',	'qa2ddrc11z@esiix.com',	3,	'2022-06-22 00:41:13',	1),
(14,	'::1',	'farhanadji12@gmail.com',	1,	'2022-06-22 01:28:23',	1),
(15,	'::1',	'farhanadji12@gmail.com',	1,	'2022-06-24 01:48:35',	1),
(16,	'::1',	'test1@esiix.com',	8,	'2022-06-24 02:33:10',	1),
(17,	'::1',	'chjkf2ouln@esiix.com',	9,	'2022-06-24 05:23:19',	1),
(18,	'::1',	'farhanadji12@gmail.com',	1,	'2022-06-25 23:42:11',	1),
(19,	'::1',	'farhanadji12@gmail.com',	NULL,	'2022-06-26 02:36:04',	0),
(20,	'::1',	'chjkf2ouln@esiix.com',	9,	'2022-06-26 02:39:57',	1),
(21,	'::1',	'chjkf2ouln@esiix.com',	9,	'2022-06-26 08:00:15',	1),
(22,	'127.0.0.1',	'farhanadji12@student.uns.ac.id',	NULL,	'2022-06-27 03:31:03',	0),
(23,	'127.0.0.1',	'juniaraldi09@student.uns.ac.id',	19,	'2022-06-27 03:34:10',	1),
(24,	'127.0.0.1',	'juniaraldi09@student.uns.ac.id',	NULL,	'2022-06-27 04:17:12',	0),
(25,	'127.0.0.1',	'juniaraldi09@student.uns.ac.id',	20,	'2022-06-27 04:18:46',	1),
(26,	'127.0.0.1',	'juniaraldi09@student.uns.ac.id',	20,	'2022-06-27 10:03:23',	1),
(27,	'127.0.0.1',	'ngelab.uns@gmail.com',	NULL,	'2022-06-27 10:25:58',	0),
(28,	'127.0.0.1',	'ngelab.uns@gmail.com',	21,	'2022-06-27 10:26:07',	1),
(29,	'127.0.0.1',	'ngelab.uns@gmail.com',	21,	'2022-06-27 10:31:17',	1),
(30,	'127.0.0.1',	'ngelab.uns@gmail.com',	21,	'2022-06-27 22:18:03',	1),
(31,	'127.0.0.1',	'ngelab.uns@gmail.com',	21,	'2022-06-28 00:58:28',	1),
(32,	'127.0.0.1',	'juniaraldi09@student.uns.ac.id',	23,	'2022-06-28 01:02:31',	1),
(33,	'127.0.0.1',	'juniaraldi09@student.uns.ac.id',	23,	'2022-06-28 01:08:10',	1),
(34,	'127.0.0.1',	'juniaraldi0911@student.uns.ac.id',	26,	'2022-06-28 01:46:28',	1),
(35,	'127.0.0.1',	'juniaraldi0911@student.uns.ac.id',	26,	'2022-06-28 01:48:12',	1),
(36,	'127.0.0.1',	'juniaraldi09@student.uns.ac.id',	27,	'2022-06-28 01:50:49',	1),
(37,	'127.0.0.1',	'juniaraldi09@student.uns.ac.id',	27,	'2022-06-28 01:51:55',	1),
(38,	'127.0.0.1',	'ngelab.uns@gmail.com',	28,	'2022-06-28 01:54:28',	1),
(39,	'127.0.0.1',	'ngelab.uns@gmail.com',	28,	'2022-06-28 08:50:16',	1);

DROP TABLE IF EXISTS `auth_permissions`;
CREATE TABLE `auth_permissions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1,	'manage-user',	'Manage All User'),
(2,	'manage-profile',	'Manage user\'s profile');

DROP TABLE IF EXISTS `auth_reset_attempts`;
CREATE TABLE `auth_reset_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `auth_tokens`;
CREATE TABLE `auth_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auth_tokens_user_id_foreign` (`user_id`),
  KEY `selector` (`selector`),
  CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `auth_users_permissions`;
CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `permission_id` int(11) unsigned NOT NULL DEFAULT '0',
  KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  KEY `user_id_permission_id` (`user_id`,`permission_id`),
  CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


SET NAMES utf8mb4;

DROP TABLE IF EXISTS `daftar_lab`;
CREATE TABLE `daftar_lab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lab_slug` varchar(50) NOT NULL,
  `nama_lab` varchar(50) NOT NULL,
  `price_per_hour` int(11) NOT NULL,
  `file_img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lab_slug` (`lab_slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `daftar_lab` (`id`, `lab_slug`, `nama_lab`, `price_per_hour`, `file_img`) VALUES
(1,	'laboratorium-komputer',	'Laboratorium Komputer',	80000,	'/img/lab-img/lab-kom.png'),
(2,	'laboratorium-robotika',	'Laboratorium Robotika',	90000,	'/img/lab-img/lab-robotika.png'),
(4,	'laboratorium-multimedia',	'Laboratorium Multimedia',	110000,	'/img/lab-img/hero.png'),
(5,	'laboratorium-jaringan',	'Laboratorium Jaringan',	70000,	'/img/lab-img/lab-jaringan.png');

DROP TABLE IF EXISTS `fasilitas_lab`;
CREATE TABLE `fasilitas_lab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lab_slug` varchar(50) NOT NULL,
  `kode_fasilitas` varchar(255) NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL,
  `good` int(11) NOT NULL,
  `broken` int(11) NOT NULL,
  `file_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode_fasilitas` (`kode_fasilitas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `jam_reservasi`;
CREATE TABLE `jam_reservasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `text` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `jam_reservasi` (`id`, `start`, `end`, `text`) VALUES
(1,	'01:00:00',	'02:00:00',	'01.00 - 02.00'),
(2,	'02:00:00',	'03:00:00',	'02.00 - 03.00'),
(3,	'03:00:00',	'04:00:00',	'03.00 - 04.00'),
(4,	'04:00:00',	'05:00:00',	'04.00 - 05.00'),
(5,	'05:00:00',	'06:00:00',	'05.00 - 06.00'),
(6,	'06:00:00',	'07:00:00',	'06.00 - 07.00'),
(7,	'07:00:00',	'08:00:00',	'07.00 - 08.00'),
(8,	'08:00:00',	'09:00:00',	'08.00 - 09.00'),
(9,	'09:00:00',	'10:00:00',	'09.00 - 10.00'),
(10,	'10:00:00',	'11:00:00',	'10.00 - 11.00'),
(11,	'11:00:00',	'12:00:00',	'11.00 - 12.00'),
(12,	'12:00:00',	'13:00:00',	'12.00 - 13.00'),
(13,	'13:00:00',	'14:00:00',	'13.00 - 14.00'),
(14,	'14:00:00',	'15:00:00',	'14.00 - 15.00'),
(15,	'15:00:00',	'16:00:00',	'15.00 - 16.00'),
(16,	'16:00:00',	'17:00:00',	'16.00 - 17.00'),
(17,	'17:00:00',	'18:00:00',	'17.00 - 18.00'),
(18,	'18:00:00',	'19:00:00',	'18.00 - 19.00'),
(19,	'19:00:00',	'20:00:00',	'19.00 - 20.00'),
(20,	'20:00:00',	'21:00:00',	'20.00 - 21.00'),
(21,	'21:00:00',	'22:00:00',	'21.00 - 22.00'),
(22,	'22:00:00',	'23:00:00',	'22.00 - 23.00'),
(23,	'23:00:00',	'24:00:00',	'23.00 - 24.00');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1,	'2017-11-20-223112',	'Myth\\Auth\\Database\\Migrations\\CreateAuthTables',	'default',	'Myth\\Auth',	1655638993,	1),
(2,	'2022-06-18-092535',	'Myth\\Auth\\Database\\Migrations\\Mythauth',	'default',	'App',	1655639125,	2);

DROP TABLE IF EXISTS `reservasi`;
CREATE TABLE `reservasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `kode_transaksi` varchar(50) NOT NULL,
  `lab_slug` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `time_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `reservasi` (`id`, `username`, `kode_transaksi`, `lab_slug`, `tanggal`, `time_id`, `created_at`, `updated_at`) VALUES
(1,	'cobadeh2',	'cobadeh2-0001',	'laboratorium-komputer',	'2022-06-28',	18,	'2022-06-26 08:47:06',	'2022-06-26 08:47:06');

DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text_status` varchar(20) NOT NULL,
  `sign` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `status` (`id`, `text_status`, `sign`) VALUES
(1,	'Cancel',	'danger'),
(2,	'Pending',	'primary'),
(3,	'Booked',	'success');

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `lab_slug` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '2',
  `payment_method` int(11) NOT NULL,
  `kode_transaksi` varchar(15) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode_transaksi` (`kode_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `transaksi` (`id`, `username`, `lab_slug`, `total`, `status`, `payment_method`, `kode_transaksi`, `nama_file`, `created_at`, `updated_at`) VALUES
(1,	'cobadeh2',	'laboratorium-komputer',	80000,	2,	0,	'cobadeh2-0001',	'',	'2022-06-26 08:47:06',	'2022-06-26 08:47:06');

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(70) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `role` enum('Admin','Member','Guest','No Role') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`id`, `email`, `password`, `username`, `nama`, `avatar`, `role`, `created_at`, `updated_at`) VALUES
(1,	'test1@test.com',	'test1',	'test',	'User Test',	'jack.jpg',	'Admin',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(2,	'farhanadji12@student.uns.ac.id',	'asdasd12',	'khiuns',	'Permana',	'1654350027_8138dc2703915f871506.png',	'Admin',	'2022-06-04 08:40:27',	'2022-06-04 08:40:27');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `role` varchar(255) DEFAULT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `email`, `username`, `name`, `telepon`, `password_hash`, `avatar`, `role`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(25,	'takahobertjo111@gmail.com',	'taka12',	'',	'',	'$2y$10$6LOAX0gdVKpHptpIAqj98uElFfeCf6W8yTasardhVVNTcg3pKEMue',	'default.jpg',	NULL,	NULL,	NULL,	NULL,	'474454f3947139b1e335ddaa23f97d1c',	NULL,	NULL,	0,	0,	'2022-06-28 01:07:59',	'2022-06-28 01:07:59',	NULL),
(26,	'juniaraldi0911@student.uns.ac.id',	'juni1212',	'',	'',	'$2y$10$5wRYSbU.ws5CwEOlWjSZiuNCeXmvJcDuNGWvvFKprlt/1z7GlHz6u',	'default.jpg',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	1,	0,	'2022-06-28 01:45:11',	'2022-06-28 01:54:54',	'2022-06-28 01:54:54'),
(27,	'juniaraldi09@student.uns.ac.id',	'juni',	'',	'',	'$2y$10$Yc14FnNobfJYW/ZpPB7ju.g9Fh3fQhv.p7cMJBaRGsBNXG11M4jJq',	'default.jpg',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	1,	0,	'2022-06-28 01:49:34',	'2022-06-28 02:05:51',	'2022-06-28 02:05:51'),
(28,	'ngelab.uns@gmail.com',	'admin',	'',	'',	'$2y$10$ixnK20GBuKLRdXs.JMa3G./MJsLYdVPqf3c4Kp4UxsM69TtVEheIS',	'default.jpg',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	1,	0,	'2022-06-28 01:53:50',	'2022-06-28 01:54:05',	NULL);

-- 2022-06-28 15:16:12
