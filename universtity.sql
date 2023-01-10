-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2023 pada 05.45
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universtity`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adfaks`
--

CREATE TABLE `adfaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dekan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adfaks`
--

INSERT INTO `adfaks` (`id`, `nama`, `dekan`, `created_at`, `updated_at`) VALUES
(1, 'FTII', 'Drs. Aji Supriyono', '2022-12-16 23:37:53', '2022-12-16 23:38:06'),
(2, 'FEB', 'Endang Sudarmi', '2022-12-16 23:39:31', '2022-12-29 18:02:03'),
(3, 'Vokasi', 'Nurrohmah', '2022-12-29 18:02:34', '2022-12-29 18:02:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adgedungs`
--

CREATE TABLE `adgedungs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adgedungs`
--

INSERT INTO `adgedungs` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Gedung A', NULL, NULL),
(2, 'Gedung B', NULL, NULL),
(3, 'Gedung C', NULL, NULL),
(4, 'Gedung D', NULL, NULL),
(5, 'Gedung E', NULL, NULL),
(6, 'Gedung F', NULL, NULL),
(7, 'Gedung G', NULL, NULL),
(8, 'Gedung H', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `adkhs`
--

CREATE TABLE `adkhs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` int(11) NOT NULL,
  `grade_huruf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adkhs`
--

INSERT INTO `adkhs` (`id`, `id_mhs`, `id_matkul`, `nama_matkul`, `sks`, `grade_huruf`, `ipk`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Pemrograman Web', 1, 'A', 3.90, NULL, NULL),
(2, 2, 1, 'Pemrograman Web', 1, 'A', 3.90, NULL, NULL),
(3, 3, 5, 'Analisa Pemasaran', 2, 'B', 3.67, '2022-12-29 18:08:39', '2022-12-29 18:08:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adkrs`
--

CREATE TABLE `adkrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `hari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pukul` int(11) NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adkrs`
--

INSERT INTO `adkrs` (`id`, `id_mhs`, `id_matkul`, `nama_matkul`, `id_dosen`, `hari`, `pukul`, `id_ruang`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Pemrograman Web', 1, 'Mardi Siswo', 8, 1, NULL, NULL),
(2, 1, 1, 'Pemrograman Web', 1, 'Mardi Siswo', 8, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `admatkuls`
--

CREATE TABLE `admatkuls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` int(11) NOT NULL,
  `hari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pukul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admatkuls`
--

INSERT INTO `admatkuls` (`id`, `nama`, `sks`, `hari`, `pukul`, `ruang`, `created_at`, `updated_at`) VALUES
(1, 'Pemrograman Web', 1, 'Selasa', '07.50 - 10.20', 'LKME', '2022-12-16 04:54:32', '2022-12-16 04:54:32'),
(2, 'Web Service', 2, 'Jumat', '09.30 - 10.20', 'T6', '2022-12-16 04:55:11', '2022-12-16 04:55:11'),
(3, 'Pemrograman Tekstruktur', 3, 'Senin', '07.30 - 10.20', 'LKMI', '2022-12-16 04:55:58', '2022-12-16 04:55:58'),
(4, 'Kalkulus', 2, 'Rabu', '12.50 - 14.20', 'T5', '2022-12-16 04:56:29', '2022-12-16 04:56:29'),
(5, 'Analisa Pemasaran', 2, 'Jumat', '09.30 - 10.20', 'T6', '2022-12-16 04:56:51', '2022-12-16 04:56:51'),
(6, 'Struktur Manajemen', 2, 'Senin', '07.50 - 10.20', 'T3', '2022-12-16 04:57:11', '2022-12-16 04:57:11'),
(7, 'Kewirausahaan', 2, 'Rabu', '10.20 - 12.50', 'T4', '2022-12-16 04:57:41', '2022-12-16 04:57:41'),
(8, 'Statistik', 2, 'Selasa', '10.20 - 12.50', 'T2', '2022-12-16 04:58:03', '2022-12-16 04:58:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adosens`
--

CREATE TABLE `adosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosen_matkul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adosens`
--

INSERT INTO `adosens` (`id`, `nama`, `jk`, `dosen_matkul`, `created_at`, `updated_at`) VALUES
(1, 'Mardi Siswo Utomo, S.Kom, M.Cs', 'L', 'Web Service', '2022-12-16 15:37:21', '2022-12-29 17:51:15'),
(3, 'Jeffri Alfa Razaq, M.Kom', 'L', 'Pemrograman Web', '2022-12-29 17:52:09', '2022-12-29 17:52:09'),
(4, 'Veronica Lusiana', 'P', 'Pemrograman Tekstruktur', '2022-12-29 17:56:46', '2022-12-29 17:56:46'),
(5, 'TH. Dwiati Wismarini', 'P', 'Kalkulus', '2022-12-29 17:57:37', '2022-12-29 17:57:37'),
(6, 'Raden Roro', 'P', 'Analisa Pemasaran', '2022-12-29 17:58:05', '2022-12-29 17:58:05'),
(7, 'Abdurrahman S', 'L', 'Struktur Manajemen', '2022-12-29 17:58:28', '2022-12-29 17:58:28'),
(8, 'Purwatiningsih', 'P', 'Kewirausahaan', '2022-12-29 17:58:51', '2022-12-29 17:58:51'),
(9, 'R Sulistiyo', 'L', 'Statistik', '2022-12-29 17:59:32', '2022-12-29 17:59:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adpegas`
--

CREATE TABLE `adpegas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adpegas`
--

INSERT INTO `adpegas` (`id`, `nama`, `jk`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Luluk Inayah', 'P', 'KEU-Senior', '2022-12-16 15:09:20', '2022-12-16 15:11:10'),
(2, 'Hidayat', 'L', 'KEU-Senior', '2022-12-16 15:11:41', '2022-12-16 15:11:54'),
(3, 'Zubaedah', 'P', 'Administrasi', '2022-12-16 15:12:16', '2022-12-16 15:12:16'),
(4, 'Maeswari', 'P', 'BAAK', '2022-12-16 15:17:37', '2022-12-16 15:17:37'),
(6, 'Afifah', 'P', 'KEU', '2022-12-29 17:46:00', '2022-12-29 17:46:00'),
(7, 'Wildan', 'L', 'Administrasi', '2022-12-29 17:46:57', '2022-12-29 17:46:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adprodis`
--

CREATE TABLE `adprodis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adprodis`
--

INSERT INTO `adprodis` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(2, 'Teknik Informatika', '2022-12-17 00:23:02', '2022-12-29 18:04:03'),
(3, 'Teknik Industri', '2022-12-29 18:04:38', '2022-12-29 18:04:38'),
(4, 'Manajemen', '2022-12-29 18:04:49', '2022-12-29 18:04:49'),
(5, 'Akuntansi', '2022-12-29 18:04:59', '2022-12-29 18:04:59'),
(6, 'Sistem Informasi', '2022-12-29 18:05:16', '2022-12-29 18:05:16'),
(7, 'Manajemen Informatika', '2022-12-29 18:05:26', '2022-12-29 18:05:26'),
(8, 'Hukum', '2022-12-29 18:05:33', '2022-12-29 18:05:33'),
(9, 'Perhotelan', '2022-12-29 18:05:43', '2022-12-29 18:05:43'),
(10, 'Sastra Inggris', '2022-12-29 18:05:51', '2022-12-29 18:05:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adruangs`
--

CREATE TABLE `adruangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penanggung_jawab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adruangs`
--

INSERT INTO `adruangs` (`id`, `penanggung_jawab`, `created_at`, `updated_at`) VALUES
(1, 'Guntur Utomo', '2022-12-17 00:40:39', '2022-12-17 00:40:39'),
(2, 'Ramdhan Syah', '2022-12-29 18:06:18', '2022-12-29 18:06:18'),
(3, 'Rubby Adam', '2022-12-29 18:06:30', '2022-12-29 18:06:30'),
(4, 'Asmarini', '2022-12-29 18:06:38', '2022-12-29 18:06:38'),
(5, 'Sukma Aji', '2022-12-29 18:06:50', '2022-12-29 18:06:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adstudents`
--

CREATE TABLE `adstudents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` int(11) NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smstr` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adstudents`
--

INSERT INTO `adstudents` (`id`, `nama`, `nim`, `jk`, `ttl`, `agama`, `alamat`, `fak`, `prodi`, `smstr`, `created_at`, `updated_at`) VALUES
(1, 'Wulan Nur Afifah', 2001530001, 'P', 'Pemalang, 18-10-2022', 'Islam', 'Pemalang', 'FTII', 'TI', 5, NULL, NULL),
(2, 'Imroatu Solicah', 2001530002, 'P', 'Semarang, 25-06-2022', 'Islam', 'Semarang', 'FTII', 'TI', 5, NULL, NULL),
(3, 'wahyu rindyani', 2001530003, 'P', 'Semarang, 23-03-2002', 'Islam', 'Banyumanik', 'FTII', 'TI', 5, NULL, NULL),
(4, 'Dinda Suci', 2001520001, 'P', 'Semarang, 24-03-2002', 'Islam', 'Semarang', 'FEB', 'Manajemen', 5, NULL, NULL),
(5, 'Rahma Widyawati', 2001520002, 'P', 'Semarang, 30-03-2002', 'Islam', 'Semarang', 'FEB', 'Manajemen', 5, NULL, NULL),
(6, 'Dendy Ilham', 2001520003, 'L', 'Pemalang, 20-01-2002', 'Katholik', 'Pemalang', 'FEB', 'Manajemen', 5, NULL, NULL),
(7, 'Angelia Hana', 2101530001, 'P', 'Semarang, 12-03-2003', 'Islam', 'Semarang', 'FTII', 'TI', 3, NULL, NULL),
(8, 'Sigit Purnomo', 2101530002, 'L', 'Pati, 29-08-2003', 'Katholik', 'Pati', 'FTII', 'TI', 3, NULL, NULL),
(9, 'Catur Wicaksono', 2101530003, 'L', 'Kendal, 25-08-2003', 'Islam', 'Kendal', 'FTII', 'TI', 3, NULL, NULL),
(10, 'Lutviatuzzahro', 2101520001, 'P', 'Pati, 02-03-2003', 'Islam', 'Pati', 'FEB', 'Manajemen', 3, NULL, NULL),
(11, 'Novalitha', 2101520002, 'P', 'Banjarnegara, 01-01-2003', 'Islam', 'Banjarnegara', 'FEB', 'Manajemen', 3, NULL, NULL),
(12, 'Amelia Dhea', 2101520003, 'P', 'Semarang, 13-04-2003', 'Islam', 'Semarang', 'FEB', 'Manajemen', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkuls`
--

CREATE TABLE `matkuls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` int(11) NOT NULL,
  `hari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pukul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `matkuls`
--

INSERT INTO `matkuls` (`id`, `nama`, `sks`, `hari`, `pukul`, `ruang`, `created_at`, `updated_at`) VALUES
(1, 'Pemrograman Web', 2, 'Selasa', '07.50 - 10.20', 'LKME', NULL, NULL),
(2, 'Web Service', 2, 'Jumat', '09.30 - 10.20', 'T6', NULL, NULL),
(3, 'Pemrograman Tekstruktur', 3, 'Senin', '07.30 - 10.20', 'LKMI', NULL, NULL),
(4, 'Kalkulus', 2, 'Rabu', '12.50 - 14.20', 'T5', NULL, NULL),
(5, 'Analisa Pemasaran', 2, 'Jumat', '09.30 - 10.20', 'T6', NULL, NULL),
(6, 'Struktur Manajemen', 2, 'Senin', '07.50 - 10.20', 'T3', NULL, NULL),
(7, 'Kewirausahaan', 2, 'Rabu', '10.20 - 12.50', 'T4', NULL, NULL),
(8, 'Statistik', 2, 'Selasa', '10.20 - 12.50', 'T2', NULL, NULL);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_02_033930_matkul', 1),
(6, '2022_12_02_034109_university', 1),
(7, '2022_12_13_114437_create_students_table', 2),
(8, '2022_12_15_061718_create_admin_table', 3),
(9, '2022_12_15_062756_create_admin_table', 4),
(10, '2022_12_15_063755_create_users_table', 5),
(11, '2022_12_15_075020_create_adstudents_table', 6),
(12, '2022_12_16_100946_create_matkul_table', 7),
(13, '2022_12_16_100946_create_matkuls_table', 8),
(14, '2022_12_16_112727_create_admatkuls_table', 9),
(15, '2022_12_16_214203_create_adpegas_table', 10),
(16, '2022_12_16_220837_create_adpegas_table', 11),
(17, '2022_12_16_221914_create_adosens_table', 12),
(18, '2022_12_17_062418_create_adfaks_table', 13),
(19, '2022_12_17_070331_create_adprodis_table', 14),
(20, '2022_12_17_072629_create_adruangs_table', 15),
(21, '2022_12_23_042902_create_adkhs_table', 16),
(22, '2022_12_23_045401_create_adkhs_table', 17),
(23, '2022_12_23_050940_create_adkrs_table', 18),
(24, '2022_12_24_102334_create_adgedungs_table', 19);

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` int(11) NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smstr` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id`, `nama`, `nim`, `jk`, `ttl`, `agama`, `alamat`, `fak`, `prodi`, `smstr`, `created_at`, `updated_at`) VALUES
(1, 'Wulan Nur Afifah', 2001530001, 'P', 'Pemalang, 18-10-2022', 'Islam', 'Pemalang', 'FTII', 'TI', 5, '2022-12-13 11:56:04', NULL),
(2, 'Imroatu Solicah', 2001530002, 'P', 'Semarang, 25-06-2002', 'Islam', 'Semarang', 'FTII', 'TI', 5, '2022-12-13 11:56:10', NULL),
(3, 'wahyu rindyani', 2001530003, 'P', 'Semarang, 23-03-2002', 'Islam', 'Banyumanik', 'FTII', 'TI', 5, '2022-12-13 08:12:20', '2022-12-13 08:12:20'),
(4, 'Dinda Suci', 2001520001, 'P', 'Semarang, 24-03-2002', 'Islam', 'Semarang', 'FEB', 'Manajemen', 5, '2022-12-13 08:17:02', '2022-12-13 08:17:02'),
(5, 'Rahma Widyawati', 2001520002, 'P', 'Semarang, 30-03-2002', 'Islam', 'Semarang', 'FEB', 'Manajemen', 5, '2022-12-13 08:42:18', '2022-12-13 08:42:18'),
(6, 'Dendy Ilham', 2001520003, 'L', 'Pemalang, 20-01-2002', 'Katholik', 'Pemalang', 'FEB', 'Manajemen', 5, '2022-12-13 08:43:09', '2022-12-13 08:43:09'),
(7, 'Angelia Hana', 2101530001, 'P', 'Semarang, 12-03-2003', 'Islam', 'Semarang', 'FTII', 'TI', 3, '2022-12-13 08:45:24', '2022-12-13 08:45:24'),
(8, 'Sigit Purnomo', 2101530002, 'L', 'Pati, 29-08-2003', 'Katholik', 'Pati', 'FTII', 'TI', 3, '2022-12-13 08:47:43', '2022-12-13 08:47:43'),
(9, 'Catur Wicaksono', 2101530003, 'L', 'Kendal, 25-08-2003', 'Islam', 'Kendal', 'FTII', 'TI', 3, '2022-12-13 08:50:19', '2022-12-13 08:50:19'),
(10, 'Lutviatuzzahro', 2101520001, 'P', 'Pati, 02-03-2003', 'Islam', 'Pati', 'FEB', 'Manajemen', 3, '2022-12-13 08:51:08', '2022-12-13 08:51:08'),
(11, 'Novalitha', 2101520002, 'P', 'Banjarnegara, 01-01-2003', 'Islam', 'Banjarnegara', 'FEB', 'Manajemen', 3, '2022-12-13 08:51:55', '2022-12-13 08:51:55'),
(12, 'Amelia Dhea', 2101520003, 'P', 'Semarang, 13-04-2003', 'Islam', 'Semarang', 'FEB', 'Manajemen', 3, '2022-12-13 08:52:35', '2022-12-13 08:52:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ini akun Admin', 'admin', 'admin@example.com', NULL, 'kamunanye', 'admin', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adfaks`
--
ALTER TABLE `adfaks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adgedungs`
--
ALTER TABLE `adgedungs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adkhs`
--
ALTER TABLE `adkhs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adkrs`
--
ALTER TABLE `adkrs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admatkuls`
--
ALTER TABLE `admatkuls`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adosens`
--
ALTER TABLE `adosens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adpegas`
--
ALTER TABLE `adpegas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adprodis`
--
ALTER TABLE `adprodis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adruangs`
--
ALTER TABLE `adruangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adstudents`
--
ALTER TABLE `adstudents`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `matkuls`
--
ALTER TABLE `matkuls`
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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `adfaks`
--
ALTER TABLE `adfaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `adgedungs`
--
ALTER TABLE `adgedungs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `adkhs`
--
ALTER TABLE `adkhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `adkrs`
--
ALTER TABLE `adkrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `admatkuls`
--
ALTER TABLE `admatkuls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `adosens`
--
ALTER TABLE `adosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `adpegas`
--
ALTER TABLE `adpegas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `adprodis`
--
ALTER TABLE `adprodis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `adruangs`
--
ALTER TABLE `adruangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `adstudents`
--
ALTER TABLE `adstudents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `matkuls`
--
ALTER TABLE `matkuls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
