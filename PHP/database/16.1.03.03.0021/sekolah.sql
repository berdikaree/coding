-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 Nov 2017 pada 19.47
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `Id` int(4) NOT NULL,
  `Semester_Ke` int(1) NOT NULL,
  `Kode_Pelajaran` char(3) NOT NULL,
  `Kode_Siswa` char(4) NOT NULL,
  `Nilai_Tugas` int(4) NOT NULL,
  `Nilai_Uts` int(4) NOT NULL,
  `Nilai_Uas` int(4) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`Id`, `Semester_Ke`, `Kode_Pelajaran`, `Kode_Siswa`, `Nilai_Tugas`, `Nilai_Uts`, `Nilai_Uas`, `Keterangan`) VALUES
(1, 1, 'P01', 'S001', 90, 85, 90, 'Tingkatkan belajarnya'),
(2, 1, 'P01', 'S002', 80, 85, 90, 'Tingkatkan belajarnya'),
(3, 1, 'P01', 'S003', 80, 80, 85, 'Tingkatkan belajarnya'),
(4, 1, 'P01', 'S004', 90, 90, 95, 'Tingkatkan belajarnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajaran`
--

CREATE TABLE `pelajaran` (
  `Kode_Pelajaran` char(3) NOT NULL,
  `Nama_Pelajaran` varchar(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelajaran`
--

INSERT INTO `pelajaran` (`Kode_Pelajaran`, `Nama_Pelajaran`, `Keterangan`) VALUES
('P01', 'Matematika', '-'),
('P02', 'Bahasa Indonesia', '-'),
('P03', 'Bahasa Inggris', '-'),
('P04', 'Ipa', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `Kode_Siswa` char(4) NOT NULL,
  `Nama_Siswa` varchar(100) NOT NULL,
  `NIS` varchar(20) NOT NULL,
  `Kelamin` char(1) NOT NULL,
  `Agama` varchar(20) NOT NULL,
  `Tempat_Lahir` varchar(200) NOT NULL,
  `Tanggal_Lahir` varchar(20) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `No_Telepon` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`Kode_Siswa`, `Nama_Siswa`, `NIS`, `Kelamin`, `Agama`, `Tempat_Lahir`, `Tanggal_Lahir`, `Alamat`, `No_Telepon`) VALUES
('S001', 'Dinds', '150001', 'P', 'islam', 'Kediri', '13 januari 1997', 'Kediri', '081234654789'),
('S002', 'Robbin', '150002', 'L', 'Islam', 'Jombang', '10 mei 1997', 'Kediri', '085267345987'),
('S003', 'Afia', '150003', 'P', 'Islam', 'Kediri', '24 Maret 1998', 'Kediri', '089478547262'),
('S004', 'Fito', '150004', 'L', 'Islam', 'Kediri', '02 Oktober 1997', 'Kediri', '081323244748');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`Kode_Pelajaran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`Kode_Siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
