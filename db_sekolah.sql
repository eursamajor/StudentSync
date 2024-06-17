-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 17 Jun 2024 pada 13.24
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `foto_siswa` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nisn`, `nama_siswa`, `jenis_kelamin`, `foto_siswa`, `alamat`) VALUES
(1, '112233', 'Alexander Kurniawan', 'Laki-laki', 'img1.jpeg', 'Jl. Imam Bonjol'),
(2, '112244', 'Budi Budi', 'Perempuan', 'img2.jpeg', 'Jl. Wara Wiri'),
(3, '112255', 'Ararara', 'Laki-laki', '112255.jpeg', 'Jl. Nusa'),
(4, '112266', 'Lina Linu', 'Perempuan', 'img4.jpg', 'Jl. Dena Deni'),
(5, '112277', 'Nala Nila', 'Perempuan', 'img5.jpg', 'Jl. Anda Andi'),
(16, '121212', 'Aqilah', 'Perempuan', '121212.png', 'Jalan jalan'),
(17, '131313', 'Risna', 'Perempuan', '131313.jpg', 'Jalan jalan'),
(18, '141414', 'DItha', 'Perempuan', '141414.jpg', 'Jalan jalan'),
(19, '151515', 'Rexcel', 'Laki-laki', '151515.png', 'Jalan jalan'),
(20, '161616', 'Habib', 'Laki-laki', '161616.png', 'Jalan jalan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
