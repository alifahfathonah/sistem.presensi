-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2020 pada 15.43
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_albarkah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_20_055329_create_sesi_presensi_table', 1),
(5, '2020_07_20_055330_create_presensi_table', 1),
(6, '2020_08_27_031525_create_post_table', 1),
(7, '2020_10_20_070708_create_rekap_konfirmasi_table', 1),
(8, '2020_11_18_093337_create_admins_table', 2),
(9, '2020_11_25_063041_add_alamat_to_admins_table', 3),
(10, '2020_11_25_064758_add_alamat_to_admins_table', 4),
(11, '2020_11_25_065510_add_tanda_to_rekap_konfirmasi_table', 5),
(12, '2020_11_25_071739_add_tanda_to_rekap_konfirmasi_table', 6),
(13, '2020_11_25_072047_add_tanda_to_rekap_konfirmasi_table', 7),
(14, '2020_11_25_125807_add_tanda_to_presensi_table', 8),
(15, '2020_11_28_101552_add_role_to_users_table', 9),
(16, '2020_11_28_103444_add_alamat_to_users_table', 10),
(17, '2020_11_30_055330_create_presensi_table', 11),
(18, '2020_11_30_055331_create_presensi_table', 12),
(19, '2020_11_30_055332_create_presensi_table', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sesi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id`, `sesi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Kajian minggu Pertama', 'posters/Aoh1V1oPuOZkZdiglNBcaUrGgFoedkVxxjNjwxce.jpeg', '2020-10-20 02:58:57', '2020-11-28 03:03:51'),
(2, 'Kajian minggu ke-2', 'posters/mT4or3Fd867tdyFBJ2ONDaWHsB7ued9XJDa2BGyD.jpeg', '2020-10-20 03:16:42', '2020-10-20 03:16:42'),
(3, 'Kajian minggu ke-3 (coba)', 'posters/SQ94MOT4s3mfVnbxfsUWG3tdMDWiXJzckLyYZOZv.jpeg', '2020-11-25 00:01:02', '2020-12-04 00:59:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tanda` bigint(20) DEFAULT NULL,
  `sesi_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`id`, `user_id`, `tanda`, `sesi_id`, `created_at`, `updated_at`) VALUES
(1, 2, 10202022225, 3, '2020-11-30 04:55:19', '2020-11-30 04:55:19'),
(2, 1, 10202001794, 3, '2020-12-01 03:44:04', '2020-12-01 03:44:04'),
(3, 5, 11202021107, 3, '2020-12-01 11:41:11', '2020-12-01 11:41:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap_konfirmasi`
--

CREATE TABLE `rekap_konfirmasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jml` int(11) NOT NULL,
  `konfirmasi_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tanda` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rekap_konfirmasi`
--

INSERT INTO `rekap_konfirmasi` (`id`, `jml`, `konfirmasi_id`, `user_id`, `tanda`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 1, NULL, '2020-10-29 05:25:25', '2020-10-29 05:25:25'),
(2, 2, 2, 2, NULL, '2020-10-29 05:33:45', '2020-10-29 05:33:45'),
(3, 3, 2, 3, NULL, '2020-10-29 05:36:23', '2020-10-29 05:36:23'),
(4, 3, 2, 3, NULL, '2020-10-29 05:38:20', '2020-10-29 05:38:20'),
(5, 0, 2, 1, NULL, '2020-11-04 00:30:03', '2020-11-04 00:30:03'),
(9, 2, 3, 1, 10202001794, '2020-11-25 00:22:15', '2020-11-25 00:22:15'),
(10, 3, 3, 2, 10202022225, '2020-12-03 19:25:05', '2020-12-03 19:25:05'),
(11, 1, 3, 5, 11202021107, '2020-12-04 06:00:51', '2020-12-04 06:00:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `kode_user`, `name`, `no_tlp`, `alamat`, `password`, `created_at`, `updated_at`, `role`) VALUES
(1, '10202001791', 'Fadil Andrian', '0815-3929-0179', NULL, '$2y$10$qUwgMt0HNT6NvB8U/EOisu0JF1wdutXVBL0m5Gl8nvypRfQVBVH3q', '2020-10-21 21:01:53', '2020-10-21 21:01:53', 'user'),
(2, '10202022222', 'Rian Fadilah', '0815-1111-2222', 'Jl Jambusari', '$2y$10$BvsNuWX5Uiyq2mShMbT.Du9AOmeQ5ZhMPfhidh0t7TkB2IK.BgUce', '2020-10-21 21:34:36', '2020-12-03 19:31:44', 'user'),
(3, '10202078903', 'Abdul', '0812-3456-7890', NULL, '$2y$10$IyvB4EDzdlxAzwEUAFuYr.yuUbwn7JqJMhEY8MfAsOzvFurZPj22i', '2020-10-29 05:35:15', '2020-10-29 05:35:15', 'user'),
(5, '11202021104', 'Brian', '0987-6543-2110', NULL, '$2y$10$sZbm4i4bcIqLjTeDY/hoRejqGXQjuqXkDkT2RkE.DqPcW0budrRyO', '2020-11-28 03:21:21', '2020-11-28 03:21:21', 'user'),
(7, NULL, 'Ridha Hasibuan', '0821 0987 6543', 'Jl Semangka, Ds Senen Kemis', '$2y$10$ZHIummgweGphRWgm7QYYb.4PG.VapVJVJAh9ryXDDiKg1YBmZ5hB2', '2020-11-28 15:21:26', '2020-11-28 15:41:06', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `presensi_tanda_unique` (`tanda`),
  ADD KEY `presensi_user_id_foreign` (`user_id`),
  ADD KEY `presensi_sesi_id_foreign` (`sesi_id`);

--
-- Indeks untuk tabel `rekap_konfirmasi`
--
ALTER TABLE `rekap_konfirmasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rekap_konfirmasi_tanda_unique` (`tanda`),
  ADD KEY `rekap_konfirmasi_konfirmasi_id_foreign` (`konfirmasi_id`),
  ADD KEY `rekap_konfirmasi_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_no_tlp_unique` (`no_tlp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rekap_konfirmasi`
--
ALTER TABLE `rekap_konfirmasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_sesi_id_foreign` FOREIGN KEY (`sesi_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `presensi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `rekap_konfirmasi`
--
ALTER TABLE `rekap_konfirmasi`
  ADD CONSTRAINT `rekap_konfirmasi_konfirmasi_id_foreign` FOREIGN KEY (`konfirmasi_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `rekap_konfirmasi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
