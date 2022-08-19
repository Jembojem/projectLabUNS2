-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2022 pada 18.06
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
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '67c49f644ed85026c8cd7fede4b44107', '2022-06-19 08:48:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(9, '::1', 'farhanadji12@gmail.com', 1, '2022-06-20 05:43:43', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'f85530da2e817ed0b951e0da', 'b9335fdf59de5074ef5171f5b4a8347f2f1b9207aee5391dde8c21a2d6f60fe3', 1, '2022-07-20 05:43:43');

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
  `file_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'alf', 'alf-0001', 'laboratorium-multimedia', '2022-06-21', 11, '2022-06-20 11:01:19', '2022-06-20 11:01:19'),
(2, 'alf', 'alf-0001', 'laboratorium-multimedia', '2022-06-21', 15, '2022-06-20 11:01:19', '2022-06-20 11:01:19'),
(3, 'alf', 'alf-0001', 'laboratorium-multimedia', '2022-06-21', 19, '2022-06-20 11:01:19', '2022-06-20 11:01:19'),
(4, 'alf', 'alf-0001', 'laboratorium-multimedia', '2022-06-21', 20, '2022-06-20 11:01:19', '2022-06-20 11:01:19'),
(5, 'alf', 'alf-0002', 'laboratorium-multimedia', '2022-06-22', 11, '2022-06-20 11:05:41', '2022-06-20 11:05:41'),
(6, 'alf', 'alf-0002', 'laboratorium-multimedia', '2022-06-22', 12, '2022-06-20 11:05:41', '2022-06-20 11:05:41'),
(7, 'alf', 'alf-0002', 'laboratorium-multimedia', '2022-06-22', 13, '2022-06-20 11:05:41', '2022-06-20 11:05:41'),
(8, 'alf', 'alf-0002', 'laboratorium-multimedia', '2022-06-22', 19, '2022-06-20 11:05:41', '2022-06-20 11:05:41');

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
(2, 'Pending', 'primary'),
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
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `username`, `lab_slug`, `total`, `status`, `payment_method`, `kode_transaksi`, `nama_file`, `created_at`, `updated_at`) VALUES
(1, 'alf', 'laboratorium-multimedia', 440000, 2, 0, 'alf-0001', '', '0000-00-00 00:00:00', 0),
(2, 'alf', 'laboratorium-multimedia', 440000, 2, 0, 'alf-0002', '', '0000-00-00 00:00:00', 0);

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
  `nama` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'default.jpg',
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

INSERT INTO `users` (`id`, `email`, `username`, `nama`, `password_hash`, `avatar`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'farhanadji12@gmail.com', 'alf', 'AlFarkhan Adji Permana', '$2y$10$gmOT1RGycylDY4xLX3YdOOU452c5qH/huWjY4aHdLLXGaL3Fv1b8S', 'default.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-06-19 08:48:11', '2022-06-19 08:48:34', NULL);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `daftar_lab`
--
ALTER TABLE `daftar_lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `fasilitas_lab`
--
ALTER TABLE `fasilitas_lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
