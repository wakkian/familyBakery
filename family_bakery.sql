-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Jun 2020 pada 16.54
-- Versi Server: 5.7.20-log
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `family_bakery`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahanbaku`
--

CREATE TABLE `bahanbaku` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_expired` date NOT NULL,
  `stok` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bahanbaku`
--

INSERT INTO `bahanbaku` (`id`, `nama`, `tanggal_expired`, `stok`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'telur', '2020-04-21', 1000, NULL, '2020-04-15 07:40:35', '2020-04-15 07:40:35'),
(3, 'mentega', '2020-05-01', 100, NULL, '2020-04-15 07:41:10', '2020-04-15 07:41:10'),
(4, 'Keju', '2020-05-18', 50, NULL, '2020-05-16 00:15:04', '2020-05-16 00:15:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabang`
--

CREATE TABLE `cabang` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cabang`
--

INSERT INTO `cabang` (`id`, `nama`, `alamat`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Surabaya ujung', 'Jl. Romokalisari No.1, Segoromadu, Kec. Benowo', NULL, NULL, '2020-05-29 09:22:12'),
(7, 'gresik', 'GKB, Gresik', NULL, '2020-05-29 08:04:51', '2020-05-29 08:24:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisproduk`
--

CREATE TABLE `jenisproduk` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenisproduk`
--

INSERT INTO `jenisproduk` (`id`, `nama`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'cake', NULL, '2020-04-15 07:36:46', '2020-05-29 08:47:13'),
(2, 'tart', NULL, '2020-04-15 07:39:20', '2020-04-15 07:39:20'),
(4, 'cookies', NULL, '2020-05-29 08:47:39', '2020-05-29 08:47:39'),
(6, 'Bolu', NULL, '2020-06-03 07:24:40', '2020-06-03 07:24:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelebihanproduk`
--

CREATE TABLE `kelebihanproduk` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanggal pengiriman` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2020_02_11_163248_create_Pelanggan_table', 1),
(3, '2020_02_11_163711_create_Pengiriman_table', 1),
(4, '2020_02_11_163751_create_Cabang_table', 1),
(5, '2020_02_11_164056_create_JenisProduk_table', 1),
(6, '2020_02_11_164433_create_BahanBaku_table', 1),
(7, '2014_10_12_000000_create_users_table', 2),
(8, '2020_02_11_164200_create_Produk_table', 2),
(9, '2020_02_12_043939_create_Resep_table', 3),
(11, '2020_02_12_044523_create_KelebihanProduk_table', 4),
(12, '2020_02_12_044801_create_Retur_table', 4),
(13, '2020_02_12_045132_create_Pesanan_table', 5),
(14, '2020_02_13_120320_create_NotaPemesanan_table', 6),
(15, '2020_02_13_120827_create_Penjualan_table', 7),
(16, '2020_02_13_121125_create_NotaPenjualan_table', 8),
(20, '2020_02_24_113304_create_NotaProduksi_table', 9),
(21, '2020_02_24_114115_create_Penjadwalan_table', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notapenjualan`
--

CREATE TABLE `notapenjualan` (
  `idproduk` int(10) UNSIGNED NOT NULL,
  `idpenjualan` int(10) UNSIGNED NOT NULL,
  `sub total` double NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `notapesanan`
--

CREATE TABLE `notapesanan` (
  `idproduk` int(10) UNSIGNED NOT NULL,
  `idpesanan` int(10) UNSIGNED NOT NULL,
  `sub total` double NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `notaproduksi`
--

CREATE TABLE `notaproduksi` (
  `noNota` int(10) UNSIGNED NOT NULL,
  `tanggal mulai` date NOT NULL,
  `tanggal selesai` date NOT NULL,
  `kelebihan produksi` int(11) NOT NULL,
  `produk gagal` int(11) NOT NULL,
  `stok pengembalian bahan baku` int(11) NOT NULL,
  `jumlah produksi` int(11) NOT NULL,
  `idpesanan` int(10) UNSIGNED NOT NULL,
  `idkaryawan` int(10) UNSIGNED NOT NULL,
  `idprodukPesanan` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_HP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `no_HP`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'rani', 'lmg', '11', NULL, '2020-06-01 11:58:25', '2020-06-01 12:10:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanggal pengiriman` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjadwalan`
--

CREATE TABLE `penjadwalan` (
  `id` int(10) UNSIGNED NOT NULL,
  `jam mulai` time NOT NULL,
  `jam selesai` time NOT NULL,
  `alat yang digunakan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idnotaProduksi` int(10) UNSIGNED NOT NULL,
  `idProduk` int(10) UNSIGNED NOT NULL,
  `idBahanBaku` int(10) UNSIGNED NOT NULL,
  `idkaryawan` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `noNota` int(10) UNSIGNED NOT NULL,
  `tanggal pembelian` date NOT NULL,
  `qty` int(11) NOT NULL,
  `grand total` double NOT NULL,
  `pembayaran 1` double NOT NULL,
  `pembayaran 2` double NOT NULL,
  `idcabang` int(10) UNSIGNED NOT NULL,
  `idkaryawan` int(10) UNSIGNED NOT NULL,
  `idpelanggan` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `noNota` int(10) UNSIGNED NOT NULL,
  `tanggal pemesanan` date NOT NULL,
  `tanggal diambil` date NOT NULL,
  `qty` int(11) NOT NULL,
  `pengiriman` enum('y','n') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status pembayran` enum('lunas','dp') COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand total` double NOT NULL,
  `pembayaran 1` double NOT NULL,
  `pembayaran 2` double NOT NULL,
  `idcabang` int(10) UNSIGNED NOT NULL,
  `idkaryawan` int(10) UNSIGNED NOT NULL,
  `idpelanggan` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `hargaSatuan` int(11) NOT NULL,
  `idjenis` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `stok`, `hargaSatuan`, `idjenis`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'cake coklat', 100, 3000, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `idproduk` int(10) UNSIGNED NOT NULL,
  `idbahan_baku` int(10) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `retur`
--

CREATE TABLE `retur` (
  `idproduk` int(10) UNSIGNED NOT NULL,
  `idkelebihan_produk` int(10) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idcabang` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `jabatan`, `password`, `idcabang`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rani', 'pemilik', '123', 1, NULL, NULL, NULL),
(3, 'budii', 'produksi', '123', 1, NULL, '2020-05-29 09:44:42', '2020-05-29 10:06:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahanbaku`
--
ALTER TABLE `bahanbaku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenisproduk`
--
ALTER TABLE `jenisproduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelebihanproduk`
--
ALTER TABLE `kelebihanproduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notapenjualan`
--
ALTER TABLE `notapenjualan`
  ADD KEY `notapenjualan_idproduk_foreign` (`idproduk`),
  ADD KEY `notapenjualan_idpenjualan_foreign` (`idpenjualan`);

--
-- Indexes for table `notapesanan`
--
ALTER TABLE `notapesanan`
  ADD KEY `notapesanan_idproduk_foreign` (`idproduk`),
  ADD KEY `notapesanan_idpesanan_foreign` (`idpesanan`);

--
-- Indexes for table `notaproduksi`
--
ALTER TABLE `notaproduksi`
  ADD PRIMARY KEY (`noNota`),
  ADD KEY `notaproduksi_idpesanan_foreign` (`idpesanan`),
  ADD KEY `notaproduksi_idkaryawan_foreign` (`idkaryawan`),
  ADD KEY `notaproduksi_idprodukpesanan_foreign` (`idprodukPesanan`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjadwalan`
--
ALTER TABLE `penjadwalan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penjadwalan_idnotaproduksi_foreign` (`idnotaProduksi`),
  ADD KEY `penjadwalan_idproduk_foreign` (`idProduk`),
  ADD KEY `penjadwalan_idbahanbaku_foreign` (`idBahanBaku`),
  ADD KEY `penjadwalan_idkaryawan_foreign` (`idkaryawan`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`noNota`),
  ADD KEY `penjualan_idcabang_foreign` (`idcabang`),
  ADD KEY `penjualan_idkaryawan_foreign` (`idkaryawan`),
  ADD KEY `penjualan_idpelanggan_foreign` (`idpelanggan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`noNota`),
  ADD KEY `pesanan_idcabang_foreign` (`idcabang`),
  ADD KEY `pesanan_idkaryawan_foreign` (`idkaryawan`),
  ADD KEY `pesanan_idpelanggan_foreign` (`idpelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produk_idjenis_foreign` (`idjenis`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD KEY `resep_idproduk_foreign` (`idproduk`),
  ADD KEY `resep_idbahan_baku_foreign` (`idbahan_baku`);

--
-- Indexes for table `retur`
--
ALTER TABLE `retur`
  ADD KEY `retur_idproduk_foreign` (`idproduk`),
  ADD KEY `retur_idkelebihan_produk_foreign` (`idkelebihan_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_idcabang_foreign` (`idcabang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahanbaku`
--
ALTER TABLE `bahanbaku`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jenisproduk`
--
ALTER TABLE `jenisproduk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kelebihanproduk`
--
ALTER TABLE `kelebihanproduk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notaproduksi`
--
ALTER TABLE `notaproduksi`
  MODIFY `noNota` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjadwalan`
--
ALTER TABLE `penjadwalan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `noNota` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `noNota` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `notapenjualan`
--
ALTER TABLE `notapenjualan`
  ADD CONSTRAINT `notapenjualan_idpenjualan_foreign` FOREIGN KEY (`idpenjualan`) REFERENCES `penjualan` (`noNota`),
  ADD CONSTRAINT `notapenjualan_idproduk_foreign` FOREIGN KEY (`idproduk`) REFERENCES `produk` (`id`);

--
-- Ketidakleluasaan untuk tabel `notapesanan`
--
ALTER TABLE `notapesanan`
  ADD CONSTRAINT `notapesanan_idpesanan_foreign` FOREIGN KEY (`idpesanan`) REFERENCES `pesanan` (`noNota`),
  ADD CONSTRAINT `notapesanan_idproduk_foreign` FOREIGN KEY (`idproduk`) REFERENCES `produk` (`id`);

--
-- Ketidakleluasaan untuk tabel `notaproduksi`
--
ALTER TABLE `notaproduksi`
  ADD CONSTRAINT `notaproduksi_idkaryawan_foreign` FOREIGN KEY (`idkaryawan`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `notaproduksi_idpesanan_foreign` FOREIGN KEY (`idpesanan`) REFERENCES `pesanan` (`noNota`),
  ADD CONSTRAINT `notaproduksi_idprodukpesanan_foreign` FOREIGN KEY (`idprodukPesanan`) REFERENCES `notapesanan` (`idproduk`);

--
-- Ketidakleluasaan untuk tabel `penjadwalan`
--
ALTER TABLE `penjadwalan`
  ADD CONSTRAINT `penjadwalan_idbahanbaku_foreign` FOREIGN KEY (`idBahanBaku`) REFERENCES `resep` (`idbahan_baku`),
  ADD CONSTRAINT `penjadwalan_idkaryawan_foreign` FOREIGN KEY (`idkaryawan`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `penjadwalan_idnotaproduksi_foreign` FOREIGN KEY (`idnotaProduksi`) REFERENCES `notaproduksi` (`noNota`),
  ADD CONSTRAINT `penjadwalan_idproduk_foreign` FOREIGN KEY (`idProduk`) REFERENCES `resep` (`idproduk`);

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_idcabang_foreign` FOREIGN KEY (`idcabang`) REFERENCES `cabang` (`id`),
  ADD CONSTRAINT `penjualan_idkaryawan_foreign` FOREIGN KEY (`idkaryawan`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `penjualan_idpelanggan_foreign` FOREIGN KEY (`idpelanggan`) REFERENCES `pelanggan` (`id`);

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_idcabang_foreign` FOREIGN KEY (`idcabang`) REFERENCES `cabang` (`id`),
  ADD CONSTRAINT `pesanan_idkaryawan_foreign` FOREIGN KEY (`idkaryawan`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pesanan_idpelanggan_foreign` FOREIGN KEY (`idpelanggan`) REFERENCES `pelanggan` (`id`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_idjenis_foreign` FOREIGN KEY (`idjenis`) REFERENCES `jenisproduk` (`id`);

--
-- Ketidakleluasaan untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `resep_idbahan_baku_foreign` FOREIGN KEY (`idbahan_baku`) REFERENCES `bahanbaku` (`id`),
  ADD CONSTRAINT `resep_idproduk_foreign` FOREIGN KEY (`idproduk`) REFERENCES `produk` (`id`);

--
-- Ketidakleluasaan untuk tabel `retur`
--
ALTER TABLE `retur`
  ADD CONSTRAINT `retur_idkelebihan_produk_foreign` FOREIGN KEY (`idkelebihan_produk`) REFERENCES `kelebihanproduk` (`id`),
  ADD CONSTRAINT `retur_idproduk_foreign` FOREIGN KEY (`idproduk`) REFERENCES `produk` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_idcabang_foreign` FOREIGN KEY (`idcabang`) REFERENCES `cabang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
