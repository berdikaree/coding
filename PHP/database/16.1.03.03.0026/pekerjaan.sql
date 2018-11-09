-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Nov 2017 pada 05.19
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pekerjaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pajak`
--

CREATE TABLE `pajak` (
  `ID` int(10) NOT NULL,
  `ID_Pengawasan` int(10) NOT NULL,
  `ID_Perencanaan` int(10) NOT NULL,
  `No. Bukti Pelaporan` int(10) NOT NULL,
  `Paket Pekerjaan` varchar(200) NOT NULL,
  `Tahun` year(4) NOT NULL,
  `Nilai Kontrak` int(20) NOT NULL,
  `PPN` int(20) NOT NULL,
  `PPH` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengawasan`
--

CREATE TABLE `pengawasan` (
  `ID_Pengawasan` int(10) NOT NULL,
  `Paket Pekerjaan` varchar(200) NOT NULL,
  `Lokasi` varchar(40) NOT NULL,
  `Instansi Pemberi Kerja` varchar(50) NOT NULL,
  `Periode Pekerjaan` varchar(40) NOT NULL,
  `No. Kontrak` varchar(20) NOT NULL,
  `Tanggal Kontrak` date NOT NULL,
  `Nilai Kontrak` int(20) NOT NULL,
  `Tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perencanaan`
--

CREATE TABLE `perencanaan` (
  `ID_Perencanaan` int(11) NOT NULL,
  `Paket Pekerjaan` char(50) NOT NULL,
  `Lokasi` varchar(20) NOT NULL,
  `Instansi Pemberi Tugas` varchar(50) NOT NULL,
  `Periode Pekerjaan` varchar(15) NOT NULL,
  `No. Kontrak` char(20) NOT NULL,
  `Tanggal Kontrak` date NOT NULL,
  `Nilai Kontrak` int(11) NOT NULL,
  `Tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pajak`
--
ALTER TABLE `pajak`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID Pajak` (`No. Bukti Pelaporan`),
  ADD UNIQUE KEY `Paket Pekerjaan` (`Paket Pekerjaan`),
  ADD UNIQUE KEY `Nilai Kontrak` (`Nilai Kontrak`),
  ADD KEY `Tahun` (`Tahun`),
  ADD KEY `ID_Pengawasan` (`ID_Pengawasan`),
  ADD KEY `ID_Perencanaan` (`ID_Perencanaan`);

--
-- Indexes for table `pengawasan`
--
ALTER TABLE `pengawasan`
  ADD PRIMARY KEY (`ID_Pengawasan`),
  ADD UNIQUE KEY `Paket Pekerjaan` (`Paket Pekerjaan`),
  ADD UNIQUE KEY `Nilai Kontrak` (`Nilai Kontrak`),
  ADD UNIQUE KEY `Tahun` (`Tahun`);

--
-- Indexes for table `perencanaan`
--
ALTER TABLE `perencanaan`
  ADD PRIMARY KEY (`ID_Perencanaan`),
  ADD UNIQUE KEY `Paket Pekerjaan` (`Paket Pekerjaan`),
  ADD UNIQUE KEY `Nilai Kontrak` (`Nilai Kontrak`),
  ADD UNIQUE KEY `Tahun` (`Tahun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pajak`
--
ALTER TABLE `pajak`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pajak`
--
ALTER TABLE `pajak`
  ADD CONSTRAINT `pajak_ibfk_1` FOREIGN KEY (`ID_Pengawasan`) REFERENCES `pajak` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pajak_ibfk_2` FOREIGN KEY (`ID_Perencanaan`) REFERENCES `pajak` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
