-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2021 pada 15.58
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemparkir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `IDKendaraan` varchar(25) NOT NULL,
  `Keterangan` text NOT NULL,
  `Deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`IDKendaraan`, `Keterangan`, `Deleted`) VALUES
('L3750DG', 'bayar kredit', 1),
('L6982IR', 'bayar cicilan', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasiparkir`
--

CREATE TABLE `lokasiparkir` (
  `IDLokasi` varchar(25) NOT NULL,
  `NamaLokasi` text NOT NULL,
  `Keterangan` text NOT NULL,
  `Status` text NOT NULL,
  `Deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `parkir`
--

CREATE TABLE `parkir` (
  `IDParkir` varchar(25) NOT NULL,
  `TglParkir` date NOT NULL,
  `JamMasuk` time NOT NULL,
  `JamKeluar` time NOT NULL,
  `JenisKendaraan` text NOT NULL,
  `Biaya` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `parkir`
--

INSERT INTO `parkir` (`IDParkir`, `TglParkir`, `JamMasuk`, `JamKeluar`, `JenisKendaraan`, `Biaya`) VALUES
('L3750DG', '2021-12-18', '17:04:00', '19:05:00', 'Motor', 6000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `staf`
--

CREATE TABLE `staf` (
  `IDStaf` varchar(25) NOT NULL,
  `NamaStaf` text NOT NULL,
  `Alamat` text NOT NULL,
  `Posisi` text NOT NULL,
  `Keterangan` text NOT NULL,
  `Deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `staf`
--

INSERT INTO `staf` (`IDStaf`, `NamaStaf`, `Alamat`, `Posisi`, `Keterangan`, `Deleted`) VALUES
('AX01010', 'Ani', 'Surabaya', 'Admin', 'Aktif', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`IDKendaraan`);

--
-- Indeks untuk tabel `lokasiparkir`
--
ALTER TABLE `lokasiparkir`
  ADD PRIMARY KEY (`IDLokasi`);

--
-- Indeks untuk tabel `parkir`
--
ALTER TABLE `parkir`
  ADD PRIMARY KEY (`IDParkir`);

--
-- Indeks untuk tabel `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`IDStaf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
