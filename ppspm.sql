-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2020 pada 18.10
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppspm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `tipe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checked` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `files`
--

INSERT INTO `files` (`id`, `name`, `userid`, `tipe`, `checked`, `created_at`, `updated_at`) VALUES
(1, 'UU 19 Tahun 2016.pdf', 3, 'SPM-TIGA', 'TRUE', NULL, '2020-11-21 07:28:52'),
(2, 'UU 19 Tahun 2016_2.pdf', 3, 'SPM-TIGA', 'TRUE', NULL, '2020-11-21 07:28:52'),
(3, 'Manual-R.pdf', 3, 'SPM-TIGA', 'TRUE', NULL, '2020-11-21 07:28:52'),
(4, '[Materi] LKP 2 SIG.pdf', 2, 'SPM-Bendahara', 'TRUE', NULL, '2020-11-21 07:50:12'),
(5, 'MAKALAH METODE HARVARD (MOSES).pdf', 2, 'SPM-Bendahara', 'TRUE', NULL, '2020-11-21 07:50:12'),
(6, '3 KONSUMEN.pdf', 2, 'SPM-Bendahara', 'TRUE', NULL, '2020-11-21 07:50:12'),
(7, '[Materi] LKP 2 SIG.pdf', 2, 'SPM-TIGA', 'TRUE', NULL, '2020-11-21 07:49:02'),
(8, '4 AGENCY.pdf', 2, 'SPM-TIGA', 'TRUE', NULL, '2020-11-21 07:49:02'),
(9, 'Muhammad Luthfi Hardiansyah_245187.pdf', 2, 'SPM-TIGA', 'TRUE', NULL, '2020-11-21 07:49:02'),
(10, '[Materi] LKP 2 SIG.pdf', 3, 'SPM-UP', 'TRUE', NULL, '2020-11-21 07:32:22'),
(11, 'MAKALAH METODE HARVARD (MOSES).pdf', 3, 'SPM-UP', 'TRUE', NULL, '2020-11-21 07:32:22'),
(12, '107-13-521-1-10-20170831.pdf', 3, 'SPM-UP', 'TRUE', NULL, '2020-11-21 07:32:22'),
(13, 'UU 19 Tahun 2016.pdf', 2, 'SPM-UP', 'TRUE', NULL, '2020-11-21 08:50:10'),
(14, '945-2373-1-PB.pdf', 2, 'SPM-UP', 'TRUE', NULL, '2020-11-21 08:50:10'),
(15, 'Javasscript bagian 1.pdf', 2, 'SPM-UP', 'TRUE', NULL, '2020-11-21 08:50:10'),
(16, 'Proposal orkom luthfi.pdf', 2, 'SPM-Gaji', 'TRUE', NULL, '2020-11-21 08:50:16'),
(17, 'ujian praktikum.pdf', 2, 'SPM-Gaji', 'TRUE', NULL, '2020-11-21 08:50:16'),
(18, 'OpTransactionHistory08-07-2020_4.pdf', 2, 'SPM-Gaji', 'TRUE', NULL, '2020-11-21 08:50:16'),
(19, 'UU 19 Tahun 2016_2.pdf', 3, 'SPM-Bendahara', 'TRUE', NULL, '2020-11-21 09:16:26'),
(20, 'UU 19 Tahun 2016.pdf', 3, 'SPM-Bendahara', 'TRUE', NULL, '2020-11-21 09:16:26'),
(21, '107-13-521-1-10-20170831.pdf', 3, 'SPM-Bendahara', 'TRUE', NULL, '2020-11-21 09:16:26'),
(22, '[Materi] LKP 2 SIG.pdf', 3, 'SPM-Gaji', 'FALSE', NULL, NULL),
(23, '[Materi] LKP 2 SIG.pdf', 3, 'SPM-Gaji', 'FALSE', NULL, NULL),
(24, 'MAKALAH METODE HARVARD (MOSES).pdf', 3, 'SPM-Gaji', 'FALSE', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_17_191536_create_roles_table', 1),
(5, '2020_11_17_191556_create_permissions_table', 1),
(6, '2020_11_17_191613_create_permission_role_table', 1),
(7, '2020_11_19_175905_create_files_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'view data', '2020-11-21 05:18:25', '2020-11-21 05:18:25'),
(2, 'create data', '2020-11-21 05:18:26', '2020-11-21 05:18:26'),
(3, 'edit data', '2020-11-21 05:18:26', '2020-11-21 05:18:26'),
(4, 'update data', '2020-11-21 05:18:26', '2020-11-21 05:18:26'),
(5, 'delete data', '2020-11-21 05:18:26', '2020-11-21 05:18:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 2, 1, NULL, NULL),
(7, 2, 2, NULL, NULL),
(8, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-11-21 05:18:25', '2020-11-21 05:18:25'),
(2, 'user', '2020-11-21 05:18:25', '2020-11-21 05:18:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Luthfi Hardiansyah', 'luthfihrdy@gmail.com', NULL, '$2y$10$S7EKGfE3hfj.hB5HiGRjPOvW174uFv9MTpAK/tnm1wqjmPeSAy4n2', 1, NULL, '2020-11-21 05:18:26', '2020-11-21 05:18:26'),
(2, 'Additya Rivaldo', 'addit@gmail.com', NULL, '$2y$10$BI8VTcxzD5pIrDMxyhW0uebovy5juU.nX6XVpl1VBq5ZV3xVrRODq', 2, NULL, '2020-11-21 05:18:26', '2020-11-21 05:18:26'),
(3, 'Miftahuddin Fallah', 'miftah@gmail.com', NULL, '$2y$10$CM7OlWP.s03vkQfZgo1L.eDH0lsnOYlK4YdIdaXCY4gUAqxrEZ9r6', 2, NULL, '2020-11-21 05:18:26', '2020-11-21 05:18:26');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_status`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_status` (
`id` bigint(20) unsigned
,`name` varchar(191)
,`userid` int(11)
,`checked` varchar(191)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_user`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_user` (
`id` bigint(20) unsigned
,`name` varchar(191)
,`userid` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_user_2`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_user_2` (
`id` bigint(20) unsigned
,`name` varchar(191)
,`userid` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_user_verif`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_user_verif` (
`id` bigint(20) unsigned
,`name` varchar(191)
,`userid` int(11)
,`checked` varchar(191)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_status`
--
DROP TABLE IF EXISTS `v_status`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_status`  AS  (select `i`.`id` AS `id`,`i`.`name` AS `name`,`u`.`userid` AS `userid`,`u`.`checked` AS `checked` from (`users` `i` left join `files` `u` on((`i`.`id` = `u`.`userid`))) where (`i`.`id` = `u`.`userid`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_user`
--
DROP TABLE IF EXISTS `v_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_user`  AS  (select `i`.`id` AS `id`,`i`.`name` AS `name`,`u`.`userid` AS `userid` from (`users` `i` left join `files` `u` on((`i`.`id` = `u`.`userid`))) where (`i`.`id` = `u`.`userid`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_user_2`
--
DROP TABLE IF EXISTS `v_user_2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_user_2`  AS  (select distinct `i`.`id` AS `id`,`i`.`name` AS `name`,`u`.`userid` AS `userid` from (`users` `i` left join `files` `u` on((`i`.`id` = `u`.`userid`))) where (`i`.`id` = `u`.`userid`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_user_verif`
--
DROP TABLE IF EXISTS `v_user_verif`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_user_verif`  AS  (select `i`.`id` AS `id`,`i`.`name` AS `name`,`u`.`userid` AS `userid`,`u`.`checked` AS `checked` from (`users` `i` left join `files` `u` on((`i`.`id` = `u`.`userid`))) where ((`i`.`id` = `u`.`userid`) and (`u`.`checked` = 'TRUE'))) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
