-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2022 pada 17.14
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labuns`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '67c49f644ed85026c8cd7fede4b44107', '2022-06-19 08:48:33'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '1fc99d80c756a0d2b649632be7063541', '2022-06-21 22:52:42'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '508d47e074c6d823d5bb36b8d2492d21', '2022-06-22 00:40:29'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '410e3cbabf663f23d2d5fa54e6764d4f', '2022-06-22 00:43:44'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'f03b1c95794c52d63ae031bed354bfbb', '2022-06-24 02:33:02'),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'edfa9053a9cb0bfeb9d2fc9cf020670b', '2022-06-24 05:22:45'),
(7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37', 'c87ef87ad4550e5b659a4c0904bdcba7', '2022-06-27 03:33:19'),
(8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37', 'b239212de6a7102aecd33a79435d6061', '2022-06-27 04:18:38'),
(9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37', '9c2b71c35ea6d8f522f2b1c4d4e588c6', '2022-06-27 10:25:20'),
(10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37', '5ac29725847752e9cba568c9c8ece60c', '2022-06-28 00:58:08'),
(11, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37', 'b0edb0fef0c763f077c0616c251f22c8', '2022-06-28 01:46:06'),
(12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37', '95d971f6257a26f7970256ed16e13130', '2022-06-28 01:50:42'),
(13, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37', 'fdf62ebc71fb0b780b3539309c06832a', '2022-06-28 01:54:05'),
(14, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'a80def7e51673d5369d183ae452c4824', '2022-06-30 05:49:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Regular User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 26),
(1, 27),
(1, 28),
(2, 25),
(2, 29);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'farhanadji12@student.uns.ac.id', NULL, '2022-06-19 08:47:20', 0),
(2, '::1', 'test1@test.com', NULL, '2022-06-19 08:47:37', 0),
(3, '::1', 'farhanadji12@gmail.com', 1, '2022-06-19 09:04:52', 1),
(4, '::1', 'farhanadji12@gmail.com', 1, '2022-06-19 09:58:44', 1),
(5, '::1', 'farhanadji12@gmail.com', 1, '2022-06-19 10:00:50', 1),
(6, '::1', 'farhanadji12@gmail.com', 1, '2022-06-19 18:53:49', 1),
(7, '::1', 'farhanadji12@gmail.com', 1, '2022-06-19 19:30:15', 1),
(8, '::1', 'farhanadji12@gmail.com', 1, '2022-06-20 01:00:56', 1),
(9, '::1', 'farhanadji12@gmail.com', 1, '2022-06-20 05:43:43', 1),
(10, '::1', 'farhanadji12@gmail.com', 1, '2022-06-21 22:51:03', 1),
(11, '::1', 'tpobtg8g3c@dcctb.com', 2, '2022-06-21 22:52:53', 1),
(12, '::1', 'asdasd', NULL, '2022-06-21 23:03:58', 0),
(13, '::1', 'qa2ddrc11z@esiix.com', 3, '2022-06-22 00:41:13', 1),
(14, '::1', 'farhanadji12@gmail.com', 1, '2022-06-22 01:28:23', 1),
(15, '::1', 'farhanadji12@gmail.com', 1, '2022-06-24 01:48:35', 1),
(16, '::1', 'test1@esiix.com', 8, '2022-06-24 02:33:10', 1),
(17, '::1', 'chjkf2ouln@esiix.com', 9, '2022-06-24 05:23:19', 1),
(18, '::1', 'farhanadji12@gmail.com', 1, '2022-06-25 23:42:11', 1),
(19, '::1', 'farhanadji12@gmail.com', NULL, '2022-06-26 02:36:04', 0),
(20, '::1', 'chjkf2ouln@esiix.com', 9, '2022-06-26 02:39:57', 1),
(21, '::1', 'chjkf2ouln@esiix.com', 9, '2022-06-26 08:00:15', 1),
(22, '127.0.0.1', 'farhanadji12@student.uns.ac.id', NULL, '2022-06-27 03:31:03', 0),
(23, '127.0.0.1', 'juniaraldi09@student.uns.ac.id', 19, '2022-06-27 03:34:10', 1),
(24, '127.0.0.1', 'juniaraldi09@student.uns.ac.id', NULL, '2022-06-27 04:17:12', 0),
(25, '127.0.0.1', 'juniaraldi09@student.uns.ac.id', 20, '2022-06-27 04:18:46', 1),
(26, '127.0.0.1', 'juniaraldi09@student.uns.ac.id', 20, '2022-06-27 10:03:23', 1),
(27, '127.0.0.1', 'ngelab.uns@gmail.com', NULL, '2022-06-27 10:25:58', 0),
(28, '127.0.0.1', 'ngelab.uns@gmail.com', 21, '2022-06-27 10:26:07', 1),
(29, '127.0.0.1', 'ngelab.uns@gmail.com', 21, '2022-06-27 10:31:17', 1),
(30, '127.0.0.1', 'ngelab.uns@gmail.com', 21, '2022-06-27 22:18:03', 1),
(31, '127.0.0.1', 'ngelab.uns@gmail.com', 21, '2022-06-28 00:58:28', 1),
(32, '127.0.0.1', 'juniaraldi09@student.uns.ac.id', 23, '2022-06-28 01:02:31', 1),
(33, '127.0.0.1', 'juniaraldi09@student.uns.ac.id', 23, '2022-06-28 01:08:10', 1),
(34, '127.0.0.1', 'juniaraldi0911@student.uns.ac.id', 26, '2022-06-28 01:46:28', 1),
(35, '127.0.0.1', 'juniaraldi0911@student.uns.ac.id', 26, '2022-06-28 01:48:12', 1),
(36, '127.0.0.1', 'juniaraldi09@student.uns.ac.id', 27, '2022-06-28 01:50:49', 1),
(37, '127.0.0.1', 'juniaraldi09@student.uns.ac.id', 27, '2022-06-28 01:51:55', 1),
(38, '127.0.0.1', 'ngelab.uns@gmail.com', 28, '2022-06-28 01:54:28', 1),
(39, '127.0.0.1', 'ngelab.uns@gmail.com', 28, '2022-06-28 08:50:16', 1),
(40, '::1', 'ngelab.uns@gmail.com', 28, '2022-06-28 22:41:45', 1),
(41, '::1', 'ngelab.uns@gmail.com', 28, '2022-06-29 07:44:10', 1),
(42, '::1', 'ngelab.uns@gmail.com', 28, '2022-06-29 15:38:37', 1),
(43, '::1', 'ngelab.uns@gmail.com', 28, '2022-06-30 02:03:48', 1),
(44, '::1', 'ngelab.uns@gmail.com', 28, '2022-06-30 02:04:34', 1),
(45, '::1', 'test123@esiix.com', 29, '2022-06-30 05:49:43', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-user', 'Manage All User'),
(2, 'manage-profile', 'Manage user\'s profile');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_tokens`
--

INSERT INTO `auth_tokens` (`id`, `selector`, `hashedValidator`, `user_id`, `expires`) VALUES
(1, '215a635b30bf93f26a7ff421', '64647bc7fe63600ab95a13154d0b6e2444ebc139af3b1bda7dc4624012da051f', 28, '2022-07-30 02:03:48'),
(2, '1bb3c4ab63a579970f485b8f', '3f8885b5fda26636d6644fca2561df99750426165efdf953d9aef0a3c39fa020', 28, '2022-07-30 02:04:34'),
(3, 'e39db372440594bcbf785262', '2d25b1c7eb55d856165d569d2e8bb8fcbea48531c97d2882ace08dff9cb0f207', 29, '2022-07-30 05:49:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_lab`
--

CREATE TABLE `daftar_lab` (
  `id` int(11) NOT NULL,
  `lab_slug` varchar(50) NOT NULL,
  `nama_lab` varchar(50) NOT NULL,
  `price_per_hour` int(11) NOT NULL,
  `file_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_lab`
--

INSERT INTO `daftar_lab` (`id`, `lab_slug`, `nama_lab`, `price_per_hour`, `file_img`) VALUES
(1, 'laboratorium-komputer', 'Laboratorium Komputer', 80000, '/img/lab-img/lab-kom.png'),
(2, 'laboratorium-robotika', 'Laboratorium Robotika', 90000, '/img/lab-img/lab-robotika.png'),
(4, 'laboratorium-multimedia', 'Laboratorium Multimedia', 110000, '/img/lab-img/hero.png'),
(5, 'laboratorium-jaringan', 'Laboratorium Jaringan', 70000, '/img/lab-img/lab-jaringan.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_lab`
--

CREATE TABLE `fasilitas_lab` (
  `id` int(11) NOT NULL,
  `lab_slug` varchar(50) NOT NULL,
  `kode_fasilitas` varchar(255) NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL,
  `good` int(11) NOT NULL,
  `broken` int(11) NOT NULL,
  `file_image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas_lab`
--

INSERT INTO `fasilitas_lab` (`id`, `lab_slug`, `kode_fasilitas`, `nama_fasilitas`, `good`, `broken`, `file_image`, `created_at`, `updated_at`) VALUES
(2, 'laboratorium-robotika', 'kmp_robot', 'Komputer', 25, 4, '1656544163_559bb0fd94ef5e35a7ee.png', '2022-06-29 18:09:14', '2022-06-29 18:09:23'),
(3, 'laboratorium-jaringan', 'kbln_jar', 'Kabel Lan', 22, 6, '1656581327_9961ef9b7921a02b31a4.png', '2022-06-30 04:28:47', '2022-06-30 04:28:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam_reservasi`
--

CREATE TABLE `jam_reservasi` (
  `id` int(11) NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `text` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jam_reservasi`
--

INSERT INTO `jam_reservasi` (`id`, `start`, `end`, `text`) VALUES
(1, '01:00:00', '02:00:00', '01.00 - 02.00'),
(2, '02:00:00', '03:00:00', '02.00 - 03.00'),
(3, '03:00:00', '04:00:00', '03.00 - 04.00'),
(4, '04:00:00', '05:00:00', '04.00 - 05.00'),
(5, '05:00:00', '06:00:00', '05.00 - 06.00'),
(6, '06:00:00', '07:00:00', '06.00 - 07.00'),
(7, '07:00:00', '08:00:00', '07.00 - 08.00'),
(8, '08:00:00', '09:00:00', '08.00 - 09.00'),
(9, '09:00:00', '10:00:00', '09.00 - 10.00'),
(10, '10:00:00', '11:00:00', '10.00 - 11.00'),
(11, '11:00:00', '12:00:00', '11.00 - 12.00'),
(12, '12:00:00', '13:00:00', '12.00 - 13.00'),
(13, '13:00:00', '14:00:00', '13.00 - 14.00'),
(14, '14:00:00', '15:00:00', '14.00 - 15.00'),
(15, '15:00:00', '16:00:00', '15.00 - 16.00'),
(16, '16:00:00', '17:00:00', '16.00 - 17.00'),
(17, '17:00:00', '18:00:00', '17.00 - 18.00'),
(18, '18:00:00', '19:00:00', '18.00 - 19.00'),
(19, '19:00:00', '20:00:00', '19.00 - 20.00'),
(20, '20:00:00', '21:00:00', '20.00 - 21.00'),
(21, '21:00:00', '22:00:00', '21.00 - 22.00'),
(22, '22:00:00', '23:00:00', '22.00 - 23.00'),
(23, '23:00:00', '24:00:00', '23.00 - 24.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1655638993, 1),
(2, '2022-06-18-092535', 'Myth\\Auth\\Database\\Migrations\\Mythauth', 'default', 'App', 1655639125, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `kode_transaksi` varchar(50) NOT NULL,
  `lab_slug` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `time_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id`, `username`, `kode_transaksi`, `lab_slug`, `tanggal`, `time_id`, `created_at`, `updated_at`) VALUES
(1, 'test123', 'test123-0001', 'laboratorium-komputer', '2022-07-05', 18, '2022-06-30 05:50:33', '2022-06-30 05:50:33'),
(2, 'test123', 'test123-0001', 'laboratorium-komputer', '2022-07-05', 19, '2022-06-30 05:50:33', '2022-06-30 05:50:33'),
(3, 'test123', 'test123-0001', 'laboratorium-komputer', '2022-07-05', 20, '2022-06-30 05:50:33', '2022-06-30 05:50:33'),
(4, 'test123', 'test123-0002', 'laboratorium-multimedia', '2022-07-03', 9, '2022-06-30 05:55:17', '2022-06-30 05:55:17'),
(5, 'test123', 'test123-0002', 'laboratorium-multimedia', '2022-07-03', 10, '2022-06-30 05:55:17', '2022-06-30 05:55:17'),
(6, 'test123', 'test123-0002', 'laboratorium-multimedia', '2022-07-03', 11, '2022-06-30 05:55:17', '2022-06-30 05:55:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `text_status` varchar(20) NOT NULL,
  `sign` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id`, `text_status`, `sign`) VALUES
(1, 'Cancel', 'danger'),
(2, 'Pending', 'warning'),
(3, 'Booked', 'success');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `lab_slug` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2,
  `payment_method` int(11) NOT NULL,
  `kode_transaksi` varchar(15) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `username`, `lab_slug`, `total`, `status`, `payment_method`, `kode_transaksi`, `nama_file`, `created_at`, `updated_at`) VALUES
(1, 'test123', 'laboratorium-komputer', 240000, 1, 0, 'test123-0001', '', '2022-06-30 05:50:33', '2022-06-30 10:13:54'),
(2, 'test123', 'laboratorium-multimedia', 330000, 3, 0, 'test123-0002', '1656586566_c0a404497ae39d576c21.png', '2022-06-30 05:55:17', '2022-06-30 09:10:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `role` enum('Admin','Member','Guest','No Role') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `username`, `nama`, `avatar`, `role`, `created_at`, `updated_at`) VALUES
(1, 'test1@test.com', 'test1', 'test', 'User Test', 'jack.jpg', 'Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'farhanadji12@student.uns.ac.id', 'asdasd12', 'khiuns', 'Permana', '1654350027_8138dc2703915f871506.png', 'Admin', '2022-06-04 08:40:27', '2022-06-04 08:40:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
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
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `name`, `telepon`, `password_hash`, `avatar`, `role`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(25, 'takahobertjo111@gmail.com', 'taka12', '', '', '$2y$10$6LOAX0gdVKpHptpIAqj98uElFfeCf6W8yTasardhVVNTcg3pKEMue', 'default.jpg', NULL, NULL, NULL, NULL, '474454f3947139b1e335ddaa23f97d1c', NULL, NULL, 0, 0, '2022-06-28 01:07:59', '2022-06-28 01:07:59', NULL),
(26, 'juniaraldi0911@student.uns.ac.id', 'juni1212', '', '', '$2y$10$5wRYSbU.ws5CwEOlWjSZiuNCeXmvJcDuNGWvvFKprlt/1z7GlHz6u', 'default.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-06-28 01:45:11', '2022-06-28 01:54:54', '2022-06-28 01:54:54'),
(27, 'juniaraldi09@student.uns.ac.id', 'juni', '', '', '$2y$10$Yc14FnNobfJYW/ZpPB7ju.g9Fh3fQhv.p7cMJBaRGsBNXG11M4jJq', 'default.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-06-28 01:49:34', '2022-06-28 02:05:51', '2022-06-28 02:05:51'),
(28, 'ngelab.uns@gmail.com', 'admin', 'AlFarkhan Adji Permana', '213123', '$2y$10$ixnK20GBuKLRdXs.JMa3G./MJsLYdVPqf3c4Kp4UxsM69TtVEheIS', '1656482140_14738a67438225643bb7.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-06-28 01:53:50', '2022-06-30 07:16:58', NULL),
(29, 'test123@esiix.com', 'test123', 'AlFarkhan Adji Permana', '087710382484', '$2y$10$Bc7LyX/bnq0c8X2.P0s7NO3QFmzjQ3Vqj.bWcWoWM6kXSnsUf.w7S', '1656586207_a15cec8fa91f0dd580f1.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-06-30 05:49:22', '2022-06-30 05:50:07', NULL);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_fasilitas`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_fasilitas` (
`id` int(11)
,`lab_slug` varchar(50)
,`nama_lab` varchar(50)
,`kode_fasilitas` varchar(255)
,`nama_fasilitas` varchar(255)
,`good` int(11)
,`broken` int(11)
,`file_image` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_history`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_history` (
`username` varchar(50)
,`lab_slug` varchar(50)
,`nama_lab` varchar(50)
,`text_status` varchar(20)
,`sign` varchar(20)
,`kode_transaksi` varchar(15)
,`nama_file` varchar(255)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_fasilitas`
--
DROP TABLE IF EXISTS `view_fasilitas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_fasilitas`  AS  select `a`.`id` AS `id`,`a`.`lab_slug` AS `lab_slug`,`b`.`nama_lab` AS `nama_lab`,`a`.`kode_fasilitas` AS `kode_fasilitas`,`a`.`nama_fasilitas` AS `nama_fasilitas`,`a`.`good` AS `good`,`a`.`broken` AS `broken`,`a`.`file_image` AS `file_image` from (`fasilitas_lab` `a` join `daftar_lab` `b`) where `a`.`lab_slug` = `b`.`lab_slug` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_history`
--
DROP TABLE IF EXISTS `view_history`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_history`  AS  select `a`.`username` AS `username`,`a`.`lab_slug` AS `lab_slug`,`b`.`nama_lab` AS `nama_lab`,`c`.`text_status` AS `text_status`,`c`.`sign` AS `sign`,`a`.`kode_transaksi` AS `kode_transaksi`,`a`.`nama_file` AS `nama_file` from ((`transaksi` `a` join `daftar_lab` `b`) join `status` `c`) where `a`.`lab_slug` = `b`.`lab_slug` and `a`.`status` = `c`.`id` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `daftar_lab`
--
ALTER TABLE `daftar_lab`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lab_slug` (`lab_slug`);

--
-- Indeks untuk tabel `fasilitas_lab`
--
ALTER TABLE `fasilitas_lab`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_fasilitas` (`kode_fasilitas`);

--
-- Indeks untuk tabel `jam_reservasi`
--
ALTER TABLE `jam_reservasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_transaksi` (`kode_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `daftar_lab`
--
ALTER TABLE `daftar_lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `fasilitas_lab`
--
ALTER TABLE `fasilitas_lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jam_reservasi`
--
ALTER TABLE `jam_reservasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
