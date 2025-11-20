-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2023 pada 12.56
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblkamar`
--

CREATE TABLE `tblkamar` (
  `idroom` int(100) NOT NULL,
  `typeroom` varchar(50) NOT NULL,
  `facilities` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblkamar`
--

INSERT INTO `tblkamar` (`idroom`, `typeroom`, `facilities`) VALUES
(1, 'Standard Room', 'AC, TV, Wifi, Perlengkapan Mandi, Free Mineral Water, 1 Ranjang Besar'),
(2, 'Superior Room', 'AC, TV, Wifi, Perlengkapan Mandi, Free Mineral Water, 2 Ranjang Besar'),
(3, 'Deluxe Room', 'AC, TV, Wifi, Perlengkapan Mandi, Free Mineral Water, Free Tea/Coffee, Refrigerator, 1 Ranjang Besar'),
(4, 'Twin Room', 'AC, TV, Wifi, Perlengkapan Mandi, Free Mineral Water, 2 Tempat Tidur Terpisah'),
(5, 'Single Room', 'AC, TV, Wifi, Perlengkapan Mandi, Free Mineral Water, 1 Single Bed');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblreservasi`
--

CREATE TABLE `tblreservasi` (
  `id_rsv` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nohp` varchar(35) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `datecheckin` date NOT NULL,
  `datecheckout` date NOT NULL,
  `typeroom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblreservasi`
--

INSERT INTO `tblreservasi` (`id_rsv`, `name`, `nohp`, `address`, `email`, `datecheckin`, `datecheckout`, `typeroom`) VALUES
(1, 'Andre', '085740753047', 'Semarang', 'andre@gmail.com', '2022-12-27', '2022-12-30', 'Standard Room'),
(2, 'Oka', '081229187778', 'Solo', 'masbento@gmail.com', '2022-12-30', '2023-01-01', 'Superior Room'),
(3, 'Gerry', '082136830415', 'Ungaran', 'kehilau@gmail.com', '2022-12-31', '2023-01-03', 'Deluxe Room'),
(4, 'Marchelino', '08893311606', 'Jepara', 'kristiandi@gmail.com', '2023-01-01', '2023-01-04', 'Twin Room'),
(5, 'Devi', '085870550021', 'Ambarawa', 'devi@gmail.com', '2022-12-29', '2022-12-02', 'Single Room'),
(6, 'Andre Dwiyanto', '+6285740753047', 'Surabaya', 'dwiyantoandre99@gmail.com', '2023-01-16', '2023-01-25', 'Standard Room');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nohp` varchar(35) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbluser`
--

INSERT INTO `tbluser` (`id`, `name`, `username`, `nohp`, `address`, `email`, `password`) VALUES
(0, 'Andre', 'andredc', '2147483647', 'Semarang', 'andre@gmail.com', 'andre123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tblkamar`
--
ALTER TABLE `tblkamar`
  ADD PRIMARY KEY (`idroom`);

--
-- Indeks untuk tabel `tblreservasi`
--
ALTER TABLE `tblreservasi`
  ADD PRIMARY KEY (`id_rsv`);

--
-- Indeks untuk tabel `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tblkamar`
--
ALTER TABLE `tblkamar`
  MODIFY `idroom` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tblreservasi`
--
ALTER TABLE `tblreservasi`
  MODIFY `id_rsv` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
