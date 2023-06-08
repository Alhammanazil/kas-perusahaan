-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2023 pada 17.46
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kas`
--

CREATE TABLE `tb_kas` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `uraian` varchar(200) NOT NULL,
  `masuk` int(11) NOT NULL,
  `keluar` int(11) NOT NULL,
  `jenis` enum('Masuk','Keluar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_kas`
--

INSERT INTO `tb_kas` (`id`, `tanggal`, `uraian`, `masuk`, `keluar`, `jenis`) VALUES
(0, '2023-03-20', 'Pendapatan Lainnya', 500000, 0, 'Masuk'),
(2, '2023-03-20', 'Modal Tambahan', 10000000, 0, 'Masuk'),
(4, '2023-05-05', 'Biaya Operasional', 0, 2000000, 'Keluar'),
(5, '2023-05-07', 'Biaya Produksi', 0, 5000000, 'Keluar'),
(6, '2023-03-05', 'Pendapatan Bunga', 1000000, 0, 'Masuk'),
(7, '2023-03-15', 'Penjualan Produk atau Jasa', 20000000, 0, 'Masuk'),
(8, '2023-05-27', 'Pembelian Bahan Baku', 0, 8000000, 'Keluar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('Administrator','Bendahara') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'Admin Perusahaan', 'admin', 'admin', 'Administrator'),
(3, 'Bendahara', 'bendahara', 'bendahara', 'Bendahara'),
(4, 'Saka Perdana', 'saka', 'saka321', 'Bendahara');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kas`
--
ALTER TABLE `tb_kas`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
