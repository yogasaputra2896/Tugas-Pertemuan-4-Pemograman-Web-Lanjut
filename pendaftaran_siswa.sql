-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2025 pada 12.43
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
-- Database: `pendaftaran_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `sekolah_asal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `calon_siswa`
--

INSERT INTO `calon_siswa` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`) VALUES
(70, 'Yoga Saputra', 'Jl Kramat Jaya Blok R', 'laki-laki', 'Islam', 'Smk Sejahtera'),
(71, 'Yoga Saputra', 'Jl Kramat Jaya Blok R', 'laki-laki', 'Islam', 'Smk Sejahtera'),
(72, 'Yoga Saputra', 'Jl Kramat Jaya Blok R', 'laki-laki', 'Islam', 'Smk Sejahtera'),
(73, 'Yoga Saputra', 'Jl Kramat Jaya Blok R', 'laki-laki', 'Islam', 'Smk Sejahtera'),
(74, 'Yoga Saputra', 'Jl Kramat Jaya Blok R', 'laki-laki', 'Islam', 'Smk Sejahtera'),
(75, 'Yoga Saputra', 'Jl Kramat Jaya Blok R', 'laki-laki', 'Islam', 'Smk Sejahtera'),
(76, 'Yoga Saputra', 'Jl Kramat Jaya Blok R', 'laki-laki', 'Islam', 'Smk Sejahtera'),
(77, 'Yoga Saputra', 'Jl Kramat Jaya Blok R', 'laki-laki', 'Islam', 'Smk Sejahtera'),
(78, 'Yoga Saputra', 'Jl Kramat Jaya Blok R', 'laki-laki', 'Islam', 'Smk Sejahtera'),
(79, 'Yoga Saputra', 'Jl Kramat Jaya Blok R', 'laki-laki', 'Islam', 'Smk Sejahtera'),
(80, 'Yoga Saputra', 'Jl Kramat Jaya Blok R', 'laki-laki', 'Islam', 'Smk Sejahtera'),
(81, 'Yoga Saputra 1', 'Jl Kramat Jaya Blok R', 'laki-laki', 'Islam', 'Smk Sejahtera');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
