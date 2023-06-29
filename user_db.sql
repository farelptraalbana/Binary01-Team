-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2023 pada 16.08
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id_pelanggan` int(255) NOT NULL,
  `no_resi` int(255) NOT NULL,
  `nama_pengirim` varchar(255) NOT NULL,
  `nama_penerima` varchar(255) NOT NULL,
  `asal_kiriman` varchar(255) NOT NULL,
  `tujuan_barang` varchar(255) NOT NULL,
  `waktu_pengiriman` varchar(255) NOT NULL,
  `biaya` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id_pelanggan`, `no_resi`, `nama_pengirim`, `nama_penerima`, `asal_kiriman`, `tujuan_barang`, `waktu_pengiriman`, `biaya`) VALUES
(3, 144, 'Farel Bana', 'Rehan', 'Tanjungpinang Kota', 'Medan', '1 Jam', '30.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kurir`
--

CREATE TABLE `data_kurir` (
  `id_kurir` int(255) NOT NULL,
  `nama_kurir` varchar(255) NOT NULL,
  `no_kurir` varchar(255) NOT NULL,
  `plat_nomor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_kurir`
--

INSERT INTO `data_kurir` (`id_kurir`, `nama_kurir`, `no_kurir`, `plat_nomor`) VALUES
(1, 'Amanda', '08114565456', 'BP 4554 WA'),
(2, 'Ezy', '081234567577', 'BP 1405 CC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(3, 'Farel Putra Albana', 'farelptraalbana@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(4, 'REHAN', 'rehan@gmail.com', '698d51a19d8a121ce581499d7b701668', 'kurir'),
(5, 'rehan', 'rehan1212@gmail.com', '698d51a19d8a121ce581499d7b701668', 'admin'),
(6, 'Farel Putra Albana 12121212', 'rehan1212@gmail.com', '14c879f3f5d8ed93a09f6090d77c2cc3', 'admin'),
(7, 'rehan121', 'rehan3434@gmail.com', '1c9ac0159c94d8d0cbedc973445af2da', 'kurir'),
(8, 'REHAN33', 'rehan33@gmail.com', 'ac627ab1ccbdb62ec96e702f07f6425b', 'kurir'),
(9, 'ezy', 'ezy1@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(10, 'Farel Putra Albana1212', 'farelptraalbana1212@gmail.com', 'a01610228fe998f515a72dd730294d87', 'admin'),
(11, 'Farel Putra Albana', 'farelptraalbana3434@gmail.com', '14c879f3f5d8ed93a09f6090d77c2cc3', 'kurir'),
(12, 'Farel Putra Albana 21', 'farelptraalbana2121@gmail.com', '02b1be0d48924c327124732726097157', 'admin'),
(13, 'Saya Kurir', 'kurir1212@gmail.com', 'a01610228fe998f515a72dd730294d87', 'kurir');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `data_kurir`
--
ALTER TABLE `data_kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indeks untuk tabel `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id_pelanggan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_kurir`
--
ALTER TABLE `data_kurir`
  MODIFY `id_kurir` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
