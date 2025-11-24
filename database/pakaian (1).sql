-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2025 pada 23.19
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakaian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_transaksi` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `kode_produk` int(20) NOT NULL,
  `tangal_transaksi` date NOT NULL,
  `jenis_produk` varchar(255) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `harga` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_transaksi`, `id_user`, `kode_produk`, `tangal_transaksi`, `jenis_produk`, `jumlah`, `harga`) VALUES
(3, 1, 1, '2025-11-23', 'Celana Krem', 1, '100000'),
(6, 1, 1, '2025-11-23', 'Celana Krem', 3, '145000'),
(7, 3, 1, '2025-11-23', 'Kaos Hitam', 6, '120000'),
(10, 3, 1, '2025-11-23', 'Kaos Hitam', 9, '120000'),
(12, 1, 9, '2025-11-23', 'Celana Krem', 3, '145000'),
(13, 2, 4, '2025-11-23', 'Jaket Hitam', 8, '230000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `kode_produk` int(20) NOT NULL,
  `jenis_produk` varchar(150) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kode_produk`, `jenis_produk`, `ukuran`, `harga`, `gambar`) VALUES
(1, 'Celana Krem', '32', 145000, '../asset/Celana_Krem.jpg'),
(2, 'Jaket Hitam', 'M', 230000, '../asset/Jaket_Hitam.jpeg'),
(3, 'Kaos Hitam', 'L', 120000, '../asset/Kaos_Hitam.jpeg'),
(4, 'Kaos Hitam', 'L', 230000, '../asset/Kaos_Hitam_Bermotif.webp'),
(5, 'Kaos Merah', 'M', 105000, '../asset/Kaos_Merah.jpeg'),
(6, 'Kemeja Putih Panjang', 'XL', 210000, '../asset/Kemeja_Panjang_Putih.jpg'),
(7, 'Kemeja Pendek Biru', 'L', 190000, '../asset/Kemeja_Pendek_Biru.jpg'),
(8, 'Sweater Biru', 'L', 320000, '../asset/Sweater_Biru.webp'),
(9, 'Topi Hitam', '17', 230000, '../asset/Topi_Hitam.jpeg'),
(10, 'Topi Hitam Bermotif', '19', 150000, '../asset/Topi_Hitam.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(20) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `email`, `no_telepon`, `alamat`, `role`) VALUES
(1, 'Bagas', '$2y$10$6wj6fbRY8vXM2LlDX.VJa.qkg5C1kBrQFDPv6UWlW/zvbiTTRToT6', 'silabankael1145@gmail.com', '0821300827991', 'bandung', 'user'),
(2, 'ADMIN_BESAR', '$2y$10$eUet9TvGz6bssQ24DdNlSusPTVq7c93YcuLyHvdbTDEq0qvOyobPW', 'admin@gmail.com', '082130897281', 'bandung 6', 'admin'),
(3, 'USER', '$2y$10$wEZ0QWDJ4MTcpo0aH5/ZgO4Y6cfKA/0fcmatCTeL1C1CzyofUdVxW', 'silabankael1145@gmail.com', '3333', 'uus', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produk` (`kode_produk`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_transaksi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `Pemesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `Pemesanan_ibfk_2` FOREIGN KEY (`kode_produk`) REFERENCES `produk` (`kode_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
