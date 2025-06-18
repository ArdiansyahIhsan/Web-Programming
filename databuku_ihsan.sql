-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2023 pada 00.45
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
-- Database: `databuku_ihsan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `ID_Buku` varchar(8) DEFAULT NULL,
  `Kategori` varchar(30) DEFAULT NULL,
  `Nama_Buku` varchar(120) DEFAULT NULL,
  `Harga` int(8) DEFAULT NULL,
  `Stok` int(4) DEFAULT NULL,
  `Penerbit` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`ID_Buku`, `Kategori`, `Nama_Buku`, `Harga`, `Stok`, `Penerbit`) VALUES
('K1001', 'Keilmuan', 'Analisis & Perancangan Sistem Informasi', 50, 10, 'Penerbit Informatika'),
('K1002', 'Keilmuan', 'Artifical Intelligence', 45, 50, 'Penerbit Informatika'),
('B002', 'Bisnis', 'BIsnis Online', 75, 15, 'Penerbit Informatika'),
('K2003', 'Keilmuan', 'Autocad 3 Dimensi', 40, 12, 'Penerbit Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE `penerbit` (
  `ID_Penerbit` varchar(8) DEFAULT NULL,
  `Nama` varchar(15) DEFAULT NULL,
  `Alamat` varchar(30) DEFAULT NULL,
  `Kota` varchar(15) DEFAULT NULL,
  `Telepon` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`ID_Penerbit`, `Nama`, `Alamat`, `Kota`, `Telepon`) VALUES
('SP01', 'Penerbit Inform', 'Buah batu', 'Bandung', 2048483647);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
