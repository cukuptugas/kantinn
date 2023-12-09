-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 05:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kantinn`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenismenus`
--

CREATE TABLE `jenismenus` (
  `id` int(30) NOT NULL,
  `jenismenu` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `update_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenismenus`
--

INSERT INTO `jenismenus` (`id`, `jenismenu`, `created_at`, `update_at`) VALUES
(1, 'cemilan/makanan ringan', '', ''),
(2, 'makanan siap saji', '', ''),
(3, 'minuman', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kode_kelas` varchar(30) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kode_kelas`, `nama_kelas`, `updated_at`, `created_at`) VALUES
(1, 'X AK 1', '2023-12-08 08:55:22', '2023-12-08 08:55:22', ''),
(2, 'X AK 2', '2023-12-08 15:53:34', '2023-12-08 15:53:34', ''),
(3, 'X AK 3', '2023-12-08 15:53:56', '2023-12-08 15:53:56', ''),
(4, 'XI AK 1', '2023-12-08 15:54:49', '2023-12-08 15:55:25', ''),
(5, 'XI AK 2', '2023-12-08 15:55:09', '2023-12-08 15:55:09', ''),
(6, 'XII AK1', '2023-12-08 15:55:56', '2023-12-08 15:55:56', ''),
(7, 'XII AK2', '2023-12-08 15:56:11', '2023-12-08 15:56:11', ''),
(8, 'X TI 1', '2023-12-08 15:59:50', '2023-12-08 15:59:50', ''),
(9, 'X TI 2', '2023-12-08 16:04:18', '2023-12-08 16:04:18', ''),
(10, 'XI TI 1', '2023-12-08 16:04:32', '2023-12-08 16:05:10', ''),
(11, 'XII TI 1', '2023-12-08 16:04:43', '2023-12-08 16:08:28', ''),
(13, 'X IPA 1', '2023-12-08 16:08:43', '2023-12-08 16:08:43', ''),
(14, 'X IPA 2', '2023-12-08 16:08:54', '2023-12-08 16:08:54', ''),
(15, 'X IPA 3', '2023-12-08 16:09:11', '2023-12-08 16:09:11', ''),
(16, 'XI IPA 1', '2023-12-08 16:10:09', '2023-12-08 16:10:09', ''),
(17, 'XII IPA 1', '2023-12-08 16:10:25', '2023-12-08 16:10:25', ''),
(18, 'XII IPA 2', '2023-12-08 16:10:39', '2023-12-08 16:10:39', ''),
(19, 'X IPS', '2023-12-08 16:10:53', '2023-12-08 16:10:53', ''),
(20, 'XI IPS', '2023-12-08 16:11:06', '2023-12-08 16:11:06', ''),
(21, 'XII IPS', '2023-12-08 16:11:18', '2023-12-08 16:11:18', ''),
(22, 'IX 1 SMP', '2023-12-08 16:11:39', '2023-12-09 04:14:58', ''),
(23, 'IX 2 SMP', '2023-12-08 16:11:54', '2023-12-09 04:14:43', ''),
(24, 'VIII SMP', '2023-12-08 16:12:26', '2023-12-09 04:14:29', ''),
(25, 'VII 1 SMP', '2023-12-08 16:12:42', '2023-12-09 04:14:12', ''),
(26, 'VII 2 SMP', '2023-12-08 16:12:51', '2023-12-09 04:14:00', ''),
(27, 'VI SD', '2023-12-08 16:13:01', '2023-12-09 04:13:38', ''),
(28, 'V SD', '2023-12-08 16:13:38', '2023-12-09 04:13:24', ''),
(29, 'IV SD', '2023-12-08 16:18:10', '2023-12-09 04:13:09', ''),
(30, 'III SD', '2023-12-08 16:18:40', '2023-12-09 04:12:49', ''),
(32, 'II SD', '2023-12-08 16:18:49', '2023-12-09 04:12:37', ''),
(33, 'I SD', '2023-12-08 16:18:57', '2023-12-09 04:12:21', ''),
(34, 'TK', '2023-12-08 16:19:04', '2023-12-08 16:19:04', ''),
(35, 'PAUD', '2023-12-08 16:19:13', '2023-12-08 16:19:13', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(30) NOT NULL,
  `seller_id` varchar(255) NOT NULL,
  `items` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `buyer` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(30) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `stok` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nama_produk`, `kategori`, `harga`, `gambar`, `stok`, `created_at`, `updated_at`) VALUES
(1, '232', '47', '2', '23', '23', '2023-12-06 06:36:27', '2023-12-06 06:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(30) NOT NULL,
  `nama_warung` varchar(255) NOT NULL,
  `deksripsi` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `nama_warung`, `deksripsi`, `created_at`, `updated_at`) VALUES
(1, 'ae', 'ae\r\n', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `seller` varchar(30) NOT NULL,
  `order` varchar(30) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user`, `seller`, `order`, `created_at`, `updated_at`) VALUES
(1, '23', '2', '25', '2023-12-06 09:24:44', '2023-12-06 09:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Riski yose', 'admin@gmail.com', NULL, '$2y$12$NqB0v7EUqcJ8fvckwwlKJu0qOQNxzCQpm5R9J38EvvrBJPHA/P1Oi', '9S1ZBXnMZDr1NZiRiarRW9vNQI7TdqYQmqM7D9xCTwCC6nhiKFG3BwunqW0t', '2023-11-26 19:43:19', '2023-11-26 19:43:19'),
(2, 'Ry', 'kaufrhhr@gmail.com', NULL, '$2y$10$5UkM/qR.FxEJSeaSIslNaOR4Fnj8PTK5RaccYhIlUaKM2JqM1sSi.', NULL, '2023-12-04 00:37:05', '2023-12-04 00:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(30) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenismenus`
--
ALTER TABLE `jenismenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenismenus`
--
ALTER TABLE `jenismenus`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
