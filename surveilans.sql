-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 24 Jul 2020 pada 02.20
-- Versi server: 5.7.24
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surveilans`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pasien`
--

CREATE TABLE `data_pasien` (
  `nik` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `id_kasus` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_telp` int(50) NOT NULL,
  `tgl_kejala` date NOT NULL,
  `tgl_sample` date NOT NULL,
  `tgl_hasil` date NOT NULL,
  `hasil_lab` varchar(50) NOT NULL,
  `diagnosa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pasien`
--

INSERT INTO `data_pasien` (`nik`, `nama`, `tanggal_lahir`, `usia`, `jenis_kelamin`, `id_kasus`, `kecamatan`, `desa`, `alamat`, `no_telp`, `tgl_kejala`, `tgl_sample`, `tgl_hasil`, `hasil_lab`, `diagnosa`) VALUES
(15120, 'bayu', '2020-07-01', '1', 'L', '1', 'cipayu', 'dsad', 'sdasd', 43432, '2020-07-15', '2020-07-09', '2020-07-09', 'gfgdf', 'ffg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`id_kasus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
