-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 10:37 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gery`
--

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_pegawai`
--

CREATE TABLE `jabatan_pegawai` (
  `id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `posisi` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `jabatan_pegawai`
--

INSERT INTO `jabatan_pegawai` (`id`, `posisi`) VALUES
('J1', 'Kasir'),
('J3', 'Kebersihan'),
('J2', 'Pelayan Pelanggan'),
('J4', 'Satpam');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id` int(10) NOT NULL,
  `jenis_kelamin_pegawai` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id`, `jenis_kelamin_pegawai`) VALUES
(201, 'Laki - Laki (L)'),
(202, 'Perempuan (P)');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `nama_kota` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `kode_pos` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `provinsi` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama_kota`, `kode_pos`, `provinsi`) VALUES
('JKT', 'Jakarta', '10120', 'Jawa Barat'),
('KDR', 'Kediri', '64115', 'Jawa Timur'),
('NGK', 'Nganjuk', '64462', 'Jawa Timur'),
('PKU', 'Pekan Baru', '28111', 'Riau'),
('SMG', 'Semarang', '50111', 'Jawa Tengah');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(10) NOT NULL,
  `nama_pegawai` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `jabatan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama_pegawai`, `jenis_kelamin`, `jabatan`, `alamat`, `status`) VALUES
(1231, 'Roland Lois', 'Laki - Laki (L)', 'Kasir', 'Kediri', 'Menikah'),
(4123, 'Mery Ana', 'Perempuan (P)', 'Pelayan Pelanggan', 'Jakarta', 'Menikah'),
(12413, 'Ponijo', 'Laki - Laki (L)', 'Kebersihan', 'Nganjuk', 'Belum Menikah'),
(21323, 'Ahmad Yasir', 'Laki - Laki (L)', 'Kasir', 'Jakarta', 'Belum Menikah'),
(41231, 'Lusiana', 'Perempuan (P)', 'Pelayan Pelanggan', 'Pekan Baru', 'Menikah'),
(51232, 'Supri yono', 'Laki - Laki (L)', 'Satpam', 'Nganjuk', 'Menikah'),
(54532, 'Aji Suroso', 'Laki - Laki (L)', 'Satpam', 'Kediri', 'Belum Menikah'),
(412343, 'Ika novita', 'Perempuan (P)', 'Pelayan Pelanggan', 'Semarang', 'Menikah'),
(513123, 'Slamet', 'Laki - Laki (L)', 'Satpam', 'Nganjuk', 'Belum Menikah');

-- --------------------------------------------------------

--
-- Table structure for table `status_nikah_pegawai_id`
--

CREATE TABLE `status_nikah_pegawai_id` (
  `id` int(11) NOT NULL,
  `status_nikah` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `status_nikah_pegawai_id`
--

INSERT INTO `status_nikah_pegawai_id` (`id`, `status_nikah`) VALUES
(1010, 'Belum Menikah'),
(1011, 'Menikah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jabatan_pegawai`
--
ALTER TABLE `jabatan_pegawai`
  ADD PRIMARY KEY (`posisi`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`jenis_kelamin_pegawai`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`nama_kota`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jabatan` (`jabatan`),
  ADD KEY `alamat` (`alamat`),
  ADD KEY `pegawai_ibfk_3` (`jenis_kelamin`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `status_nikah_pegawai_id`
--
ALTER TABLE `status_nikah_pegawai_id`
  ADD PRIMARY KEY (`status_nikah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`jabatan`) REFERENCES `jabatan_pegawai` (`posisi`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`alamat`) REFERENCES `kota` (`nama_kota`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawai_ibfk_3` FOREIGN KEY (`jenis_kelamin`) REFERENCES `jenis_kelamin` (`jenis_kelamin_pegawai`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawai_ibfk_4` FOREIGN KEY (`status`) REFERENCES `status_nikah_pegawai_id` (`status_nikah`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
