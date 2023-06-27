-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2022 pada 13.02
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fgig`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(200) NOT NULL,
  `isi_berita` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `tanggal` date NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre_peme`
--

CREATE TABLE `genre_peme` (
  `id_peme` int(11) NOT NULL,
  `np_putra` varchar(200) NOT NULL,
  `np_wanita` varchar(200) NOT NULL,
  `tahun` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `genre_peme`
--

INSERT INTO `genre_peme` (`id_peme`, `np_putra`, `np_wanita`, `tahun`) VALUES
(1, 'Iqbal Naim, S.Ap.\r\n', 'Fidya Felinda Ilahude, S.Pd.', '2020'),
(2, 'Adi Junaidi Rahman Daud\r\n', 'Astri Hidayatullah Arief Azis', '2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pikr`
--

CREATE TABLE `pikr` (
  `id_pikr` int(11) NOT NULL,
  `nama_pikr` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nama_ketua` varchar(100) NOT NULL,
  `jumlah_anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pikr`
--

INSERT INTO `pikr` (`id_pikr`, `nama_pikr`, `asal_sekolah`, `nama_ketua`, `jumlah_anggota`) VALUES
(1, 'Pik-Remaja \r\n', 'MTsN 1 Kota Gorontalo', 'Naylah putri tsabitah', 168),
(2, 'PIK-R Adwiyata', 'SMP NEGERI 2 KOTA GORONTALO', 'Dhia Tasmirah', 14),
(3, 'PIK-R Perisai', 'SMA Negeri 1 Paguat', 'Moh. Fatur Dwiyansyah', 38);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `level`) VALUES
(1, 'wahida', 'whdgfur@gmail.com', 'gorontalo99', 'admin'),
(2, 'acid', 'acidbande@gmail.com', '123', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `genre_peme`
--
ALTER TABLE `genre_peme`
  ADD PRIMARY KEY (`id_peme`);

--
-- Indeks untuk tabel `pikr`
--
ALTER TABLE `pikr`
  ADD PRIMARY KEY (`id_pikr`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `genre_peme`
--
ALTER TABLE `genre_peme`
  MODIFY `id_peme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pikr`
--
ALTER TABLE `pikr`
  MODIFY `id_pikr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
