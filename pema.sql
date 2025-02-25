-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 25 Feb 2025 pada 11.03
-- Versi server: 8.3.0
-- Versi PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pema`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb3_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

DROP TABLE IF EXISTS `masyarakat`;
CREATE TABLE IF NOT EXISTS `masyarakat` (
  `nik` varchar(16) COLLATE utf8mb3_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `foto_profile` varchar(250) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`, `foto_profile`, `created_at`, `updated_at`) VALUES
('0987654321123456', 'Johari', 'jojo', '$2y$12$JHIWPU/hAR4gN38YLEmJqOYSIcEeL9HFeJgEN34W1LIXxntUpy4HK', '082333212132', NULL, '2025-01-23 10:10:05', '2025-01-23 10:10:05'),
('5432123456123456', 'najib', 'na', '$2y$12$AwAljZgoAlw3n22fmsPwB.H/EFHr6IkoPz7WzWvIH/0O1AiLSUgOC', '082333212132', 'public/foto_profile/DziQE9HkKG8zczJlAX2nzcm0vHeieYCYJfeKfqZU.png', '2025-01-23 10:18:24', '2025-01-23 10:18:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_20_021300_create_masyarakats_table', 1),
(5, '2025_01_20_021311_create_petugas_table', 1),
(6, '2025_01_21_052625_create_pengaduans_table', 1),
(7, '2025_01_21_052644_create_tanggapans_table', 1),
(8, '2025_01_22_051442_add_column_to_pengaduan_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

DROP TABLE IF EXISTS `pengaduan`;
CREATE TABLE IF NOT EXISTS `pengaduan` (
  `id_pengaduan` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) COLLATE utf8mb3_unicode_ci NOT NULL,
  `isi_laporan` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `status` enum('0','proses','selesai') COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tgl_pengaduan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pengaduan`),
  KEY `pengaduan_nik_foreign` (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`, `created_at`, `updated_at`, `tgl_pengaduan`) VALUES
(5, '0987654321123456', 'foto saya pkl nich', 'public/foto_pengaduan/gkC4thwtXM1A9cxgxlbDxVIBgB6yRa6ft1l8eneX.jpg', 'selesai', '2025-01-23 10:10:56', '2025-01-23 11:26:53', '2025-01-23 10:10:55'),
(6, '5432123456123456', 'okey', 'public/foto_pengaduan/MPZT5eLFh3jt2Oyaa7PoQ4tmreCRQuHhXLhScxlv.jpg', 'selesai', '2025-01-23 10:18:55', '2025-01-23 11:40:47', '2025-01-23 10:18:55'),
(7, '5432123456123456', 'bayarannya error pak tolong dibenahi', 'public/foto_pengaduan/rxq8a7oSS2HrXDmcdpckXcLVhOc9Duw8npsJmX8q.jpg', 'selesai', '2025-01-30 23:25:02', '2025-01-31 00:07:14', '2025-01-30 23:25:01'),
(8, '5432123456123456', 'jalanan banjir dicipayung', 'public/foto_pengaduan/rPNeLcZpoo13R91zwFyUIB9NoLhO2sUGLMq0nreR.jpg', 'selesai', '2025-01-31 00:29:32', '2025-01-31 00:35:14', '2025-01-31 00:29:32'),
(9, '5432123456123456', 'logo kementrian desa', 'public/foto_pengaduan/eWYtLRcAFeK8lhjq8TGPC4sojKqxK8789sN5mjl3.png', 'selesai', '2025-02-06 01:11:35', '2025-02-06 01:17:43', '2025-02-06 01:11:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

DROP TABLE IF EXISTS `petugas`;
CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_petugas` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `level` enum('admin','petugas') COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_petugas`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`, `created_at`, `updated_at`) VALUES
(4, 'rere', 'rere', '$2y$12$hYINPThYwba2edGbxRDTnu3Nm44wrV1rVKYrfePa982OihQwSC4b6', '082122313456', 'petugas', NULL, NULL),
(5, 'Bayu', 'jo', '$2y$12$hYINPThYwba2edGbxRDTnu3Nm44wrV1rVKYrfePa982OihQwSC4b6\r\n', '089776567654', 'admin', '2025-01-23 17:07:31', '2025-01-23 17:07:31'),
(6, 'bayu', 'admin', '$2y$12$n88Fs5jR6vvEY6gEl7s.v.leetUqIFHbUQh/a5t5yQThePDd3eeyO', '082122313456', 'admin', NULL, NULL),
(7, 'cecci', 'celsi', '$2y$12$KwlICPP.JNJODFokWUJFWe4nxJ.r7IgGr87k7eVm0X61e4TqWHSZ2', '082333212132', 'admin', '2025-01-23 11:15:15', '2025-01-23 11:15:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb3_unicode_ci,
  `payload` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('MVgYxcgAll8zbnHqtRv8Ue64gdZsHI0RhgCZKFbK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoib2VMdDRSTUNLUDNDT0V6M1VFU2hvZ1h6MHM4dXdmeWdQZk4xRXRzdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wZXR1Z2FzIjt9czo0OiJhdXRoIjthOjY6e3M6NDoidHlwZSI7czo3OiJwZXR1Z2FzIjtzOjEwOiJpZF9wZXR1Z2FzIjtpOjY7czo0OiJuYW1hIjtzOjQ6ImJheXUiO3M6ODoidXNlcm5hbWUiO3M6NToiYWRtaW4iO3M6NToibGV2ZWwiO3M6NToiYWRtaW4iO3M6NDoidGVscCI7czoxMjoiMDgyMTIyMzEzNDU2Ijt9fQ==', 1740481103);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

DROP TABLE IF EXISTS `tanggapan`;
CREATE TABLE IF NOT EXISTS `tanggapan` (
  `id_tanggapan` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_pengaduan` bigint UNSIGNED NOT NULL,
  `tgl_tanggapan` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `tanggapan` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `id_petugas` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tanggapan`),
  KEY `tanggapan_id_pengaduan_foreign` (`id_pengaduan`),
  KEY `tanggapan_id_petugas_foreign` (`id_petugas`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`, `created_at`, `updated_at`) VALUES
(5, 5, '2025-01-24 07:49:00', 'ok', 6, '2025-01-24 00:49:00', '2025-01-24 00:49:00'),
(6, 5, '2025-01-31 07:09:20', 'ok', 6, '2025-01-31 00:09:20', '2025-01-31 00:09:20'),
(7, 7, '2025-01-31 07:19:30', 'sudah saya benahi ya', 6, '2025-01-31 00:19:30', '2025-01-31 00:19:30'),
(8, 9, '2025-02-06 08:17:37', 'yres', 4, '2025-02-06 01:17:37', '2025-02-06 01:17:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2025-01-21 02:38:18', '$2y$12$5HwMm5.nRmbTGs1UY6UyeO6IY66zi00ghalaUyLfqCKSDTF/2dBcO', '3iWPJvfmb6', '2025-01-21 02:38:19', '2025-01-21 02:38:19');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_nik_foreign` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_id_pengaduan_foreign` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`) ON DELETE CASCADE,
  ADD CONSTRAINT `tanggapan_id_petugas_foreign` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
