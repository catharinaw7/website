-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2019 at 02:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wfp_uas_rev`
--

-- --------------------------------------------------------

--
-- Table structure for table `historys`
--

CREATE TABLE `historys` (
  `id` int(10) UNSIGNED NOT NULL,
  `pengeluarans_id` int(10) UNSIGNED NOT NULL,
  `pemasukans_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `historys`
--

INSERT INTO `historys` (`id`, `pengeluarans_id`, `pemasukans_id`, `created_at`, `updated_at`) VALUES
(4, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(1, 'OVO', 'pemasukan', NULL, NULL),
(2, 'Makan', 'pengeluaran', NULL, NULL),
(3, 'Travel', 'tabungan', NULL, NULL),
(4, 'Pendidikan', 'tabungan', '2019-11-12 03:07:03', '2019-11-12 03:07:03'),
(5, 'Shopping', 'pengeluaran', '2019-12-11 07:39:57', '2019-12-11 07:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(41, '2014_10_12_000000_create_users_table', 1),
(42, '2014_10_12_100000_create_password_resets_table', 1),
(43, '2019_11_01_022753_create_pengeluarans_table', 1),
(44, '2019_11_01_022812_create_pemasukans_table', 1),
(45, '2019_11_01_022827_create_tabungans_table', 1),
(46, '2019_11_01_022844_create_historys_table', 1),
(47, '2019_11_05_090643_alter_users_balance_table', 1),
(48, '2019_11_11_114029_create_kategoris_table', 1),
(49, '2019_11_11_114207_alter_pengeluarans_foreign_table', 1),
(50, '2019_11_11_114213_alter_pemasukans_foreign_table', 1),
(51, '2019_11_11_132619_alter_tabungans_foreign_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemasukans`
--

CREATE TABLE `pemasukans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` int(11) NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategoris_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemasukans`
--

INSERT INTO `pemasukans` (`id`, `nama`, `nominal`, `keterangan`, `users_id`, `created_at`, `updated_at`, `kategoris_id`) VALUES
(1, 'Uang Saku', 100000, 'uang saku bulan Januari', 1, NULL, NULL, 1),
(2, 'Uang Saku', 25000, 'uang saku hari ini', 1, '2019-11-18 18:10:26', '2019-11-18 18:10:26', 1),
(3, 'Uang Kuliah', 2750000, 'uang kuliah Sept', 1, '2019-12-11 08:48:16', '2019-12-11 08:48:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengeluarans`
--

CREATE TABLE `pengeluarans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` int(11) NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategoris_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengeluarans`
--

INSERT INTO `pengeluarans` (`id`, `nama`, `nominal`, `keterangan`, `foto`, `users_id`, `created_at`, `updated_at`, `kategoris_id`) VALUES
(1, 'Makan Pagi', 25000, '', 'pengeluaran1.jpg', 1, NULL, NULL, 2),
(4, 'Beli Minum', 7500, NULL, NULL, 1, '2019-12-11 08:19:34', '2019-12-11 08:19:34', 2),
(5, 'Beli Snack', 53000, 'untuk kemah', NULL, 1, '2019-12-11 08:30:08', '2019-12-11 08:30:08', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tabungans`
--

CREATE TABLE `tabungans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` int(11) NOT NULL,
  `progres` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategoris_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabungans`
--

INSERT INTO `tabungans` (`id`, `nama`, `target`, `progres`, `tanggal`, `users_id`, `created_at`, `updated_at`, `kategoris_id`) VALUES
(1, 'Pergi Singapore', 5000000, 3000000, '2020-06-12', 1, NULL, '2019-11-12 19:56:49', 3),
(2, 'Pergi Singapore', 5000000, 0, '2020-06-12', 1, NULL, NULL, 3),
(3, 'Pergi Thailand', 7500000, 430000, '2019-11-14', 1, '2019-11-11 07:25:06', '2019-11-12 04:41:08', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `balance` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `active`, `remember_token`, `created_at`, `updated_at`, `balance`) VALUES
(1, 'admin', '$2y$10$N4LVVEOZ4nQ39H13NPunOOKc9fMB0/ivIwHxw9onmC6c4i5UmVkkG', 'kami', 1, 'pyKLG4B8JQhEcnGDs1nVAIZSIIyVK1grcN6du7n9ZAEDGOIXddWAnsTzbLDD', NULL, '2019-12-11 20:16:28', -365500),
(2, 'kita', '$2y$10$kliLYSYdmuJ2.8wjJfCzg.b6ZCz5Uc/PxUfTfeNmTCBy3iosCuM/K', 'kita', 0, 'hjgpeuFjE2xFNP2F3ADVqE7KYty6m0665nyU0kOij3LYb1SPsdk2pylAtzI8', '2019-12-11 19:57:11', '2019-12-11 20:16:18', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historys`
--
ALTER TABLE `historys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `historys_pengeluarans_id_foreign` (`pengeluarans_id`),
  ADD KEY `historys_pemasukans_id_foreign` (`pemasukans_id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_username_index` (`username`);

--
-- Indexes for table `pemasukans`
--
ALTER TABLE `pemasukans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemasukans_users_id_foreign` (`users_id`),
  ADD KEY `pemasukans_kategoris_id_foreign` (`kategoris_id`);

--
-- Indexes for table `pengeluarans`
--
ALTER TABLE `pengeluarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengeluarans_users_id_foreign` (`users_id`),
  ADD KEY `pengeluarans_kategoris_id_foreign` (`kategoris_id`);

--
-- Indexes for table `tabungans`
--
ALTER TABLE `tabungans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tabungans_users_id_foreign` (`users_id`),
  ADD KEY `tabungans_kategoris_id_foreign` (`kategoris_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historys`
--
ALTER TABLE `historys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `pemasukans`
--
ALTER TABLE `pemasukans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengeluarans`
--
ALTER TABLE `pengeluarans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tabungans`
--
ALTER TABLE `tabungans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `historys`
--
ALTER TABLE `historys`
  ADD CONSTRAINT `historys_pemasukans_id_foreign` FOREIGN KEY (`pemasukans_id`) REFERENCES `pemasukans` (`id`),
  ADD CONSTRAINT `historys_pengeluarans_id_foreign` FOREIGN KEY (`pengeluarans_id`) REFERENCES `pengeluarans` (`id`);

--
-- Constraints for table `pemasukans`
--
ALTER TABLE `pemasukans`
  ADD CONSTRAINT `pemasukans_kategoris_id_foreign` FOREIGN KEY (`kategoris_id`) REFERENCES `kategoris` (`id`),
  ADD CONSTRAINT `pemasukans_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pengeluarans`
--
ALTER TABLE `pengeluarans`
  ADD CONSTRAINT `pengeluarans_kategoris_id_foreign` FOREIGN KEY (`kategoris_id`) REFERENCES `kategoris` (`id`),
  ADD CONSTRAINT `pengeluarans_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tabungans`
--
ALTER TABLE `tabungans`
  ADD CONSTRAINT `tabungans_kategoris_id_foreign` FOREIGN KEY (`kategoris_id`) REFERENCES `kategoris` (`id`),
  ADD CONSTRAINT `tabungans_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
