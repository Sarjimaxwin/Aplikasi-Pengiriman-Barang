-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2024 pada 13.58
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_1eb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `lauk_utama` varchar(255) NOT NULL,
  `lauk_tambahan_satu` varchar(255) DEFAULT NULL,
  `lauk_tambahan_dua` varchar(255) DEFAULT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `nama_pemesan`, `lauk_utama`, `lauk_tambahan_satu`, `lauk_tambahan_dua`, `catatan`) VALUES
(1, 'sarji1', 'sop tahu', 'gorengan', 'Salad', 'Tidak pedas'),
(2, 'sarji2', 'ikan', 'sate', 'sayur sop', 'kerupuk jangan lupa'),
(3, 'sarji3', 'Nasi Goreng', 'telor', 'Acar', 'kerupuk si'),
(4, 'sarji4', 'Mie Goreng', 'esteh', 'Sosis', 'jangan dingin'),
(5, 'sarji5', 'Nasi Uduk', 'Ayam bakar', 'Kerupuk', 'es campur'),
(6, 'sarji6', 'Bubur Ayam', 'Kacang', 'Cakwe', 'Lebih banyak kuah'),
(7, 'sarji7', 'Gado-Gado', 'Kerupuk Udang', 'ayam goreng', 'Kurangi sambel'),
(8, 'sarji8', 'tahu', 'ikan asin', 'lalapan', 'sambelnya lebih'),
(9, 'Sarjibn', 'mie', 'kikil', 'kacang panjang', 'bala bala'),
(14, 'Sarjibn\'', '\'dd', '\'s', '\'s', '\'ss'),
(15, 'Sarjibn', 'Ijas', 'Ayam bakar', 'Kerupuk', 'es campur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `nama_lengkap` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `no_HP` text NOT NULL,
  `alamat` text NOT NULL,
  `hobby` text NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`nama_lengkap`, `email`, `password`, `no_HP`, `alamat`, `hobby`, `tanggal_lahir`) VALUES
('', '', '', '', '', '', '0000-00-00'),
('ma\'wa', '10@10.com', '10', '09888', 'h gang a\'li', 'yyy', '2024-07-26'),
('ma\'wa', '1@1.com', '1', '', '123', '123', '2024-07-19'),
('iz\'as', '1@gmail.com', '1', '', '1', '1', '2024-07-08'),
('UIFUAFULIRF', '3@3.COM', '1', '1', 'DDDDD', 'DFED', '2024-07-17'),
('SARJI', '8@8.COM', '1', '111', '1', '1', '2024-07-17'),
('NENGAH', '9@9.COM', '1', '11', 'EGRDGHD', 'FDFTH', '2024-07-25'),
('1', 'bintang@gmail.com', '1', '', '1', '1', '2024-07-18'),
('3', 'i@gmail.com', '8', '9', 'y', 'u', '2024-07-24'),
('J', 'J@gmail.com', '1', '87867767676', 'BUMI', 'L', '2024-07-17'),
('6', 'ji@gmail.com', '11111', '', '1', '2', '2024-07-16'),
('q', 'q@gmail.com', '1', '', 'bumi', 'sepeda', '2024-07-19'),
('RIDWW\'AB', 'RIDWAN@gmail.com', '123', '', '123', '1', '2024-07-30'),
('i', 'sa@gmail.com', '11111', '', 'k', 'k', '2024-07-18'),
('maxwin\'', 'sarji\'@gmail.com', '11111', '', 'jalanindulu\'', '111\'', '2024-07-24'),
('sarji', 'sarji12222@gmail.com', 'ganteng', '', '34', '56', '2024-06-19'),
('1234', 'sarji123@gmail.com', '12345', '', '123', '123', '2024-07-23'),
('sarj\'i', 'sarji14@gmail.com', '12345', '', '123', '123', '2024-07-30'),
('balaraja', 'sarji1@gmail.com', '12345', '', '34', '56', '2024-06-25'),
('1', 'sarji7@gmail.com', '1', '', '1', '1', '2024-07-30'),
('iii', 'sarji@gail.com', '11111', '', 'uuuu', 'jjjjj', '2024-07-18'),
('anto', 'sarji@gmail.com', '11111', '0123456789', 'jalanindulu', 'awdqwd', '2024-06-05'),
('iz\'as', 'sarji@gmail.come', '11111', '', '1', '12', '2024-07-26'),
('HH', 'sarji@gmail.comRRR', '11111', 'HYYH', 'HH', 'HH', '2024-07-18'),
('iz\'as', 'sarji@gmail.coms', '11111', '', '1', '22', '2024-07-18'),
('as', 'sarji@gmail.comsWEQW', '11111', 'qw', 'qwqw', 'qw', '2024-07-19'),
('sarjinie', 'sarjiganteng@gmail.com', '12345', '', '123', '56', '2024-07-17'),
('uiigiua', 'satji@gmail.com', 'ganteng', '0123456789', '878', 'kk', '2024-06-29'),
('T', 'T@gmail.com', '1', '', '00', '9898', '2024-07-17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
