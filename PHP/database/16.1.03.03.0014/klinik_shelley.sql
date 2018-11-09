-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 02:15 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik_shelley`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE `data_pasien` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `ttl` date NOT NULL,
  `jenis_kelamin` varchar(1) COLLATE latin1_general_cs NOT NULL,
  `pekerjaan` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `nikah` varchar(15) COLLATE latin1_general_cs NOT NULL,
  `alamat` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `kodepos` int(6) NOT NULL,
  `member` varchar(7) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`id`, `nama`, `ttl`, `jenis_kelamin`, `pekerjaan`, `nikah`, `alamat`, `kodepos`, `member`) VALUES
(1, 'Silvany Muqnita', '2006-09-18', 'P', 'Pelajar', 'Single', 'RT/RW 02/02 Kempleng', 64154, 'Kelas 1'),
(2, 'Diana Lestari', '1998-09-29', 'P', 'Mahasiswa', 'Single', 'RT/RW 01/01 Papar', 64153, 'Kelas 2');

-- --------------------------------------------------------

--
-- Table structure for table `kodepos`
--

CREATE TABLE `kodepos` (
  `kodepos` int(6) NOT NULL,
  `kecamatan` varchar(15) COLLATE latin1_general_cs NOT NULL,
  `kabupaten` varchar(15) COLLATE latin1_general_cs NOT NULL,
  `provinsi` varchar(15) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `kodepos`
--

INSERT INTO `kodepos` (`kodepos`, `kecamatan`, `kabupaten`, `provinsi`) VALUES
(64153, 'Papar', 'Kediri', 'Jawa Timur'),
(64154, 'Purwoasi', 'Kediri', 'Jawa Timur'),
(64155, 'Plemahan', 'Kediri', 'Jawa Timur'),
(64156, 'Kunjang', 'Kediri', 'Jawa Timur');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(10) NOT NULL,
  `member` varchar(7) COLLATE latin1_general_cs NOT NULL,
  `typekamar` varchar(10) COLLATE latin1_general_cs NOT NULL,
  `vasilitas` varchar(30) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `member`, `typekamar`, `vasilitas`) VALUES
(1, 'Kelas 1', 'VIP', 'AC , TV , Kamar isi 1 '),
(2, 'Kelas 2', 'Mawar', 'AC, TV, Kamar isi 2'),
(3, 'Kelas 3', 'Melati', 'AC, TV, Kamar isi 3');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(10) NOT NULL,
  `nama_obat` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `kegunaan` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `dosis` varchar(30) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `kegunaan`, `dosis`) VALUES
(2, 'Asam Mefenamat', 'Pereda Nyeri gigi', '2x1 sesudah makan'),
(4, 'B;acmores', 'Vitamin Untuk Kandungan', '2x1 sebeleum makan'),
(1, 'Dexametaxone', 'Pereda Nyeri Perut', '3x1 sesudah makan'),
(3, 'SANMOL Paracetamol', 'Pereda Demam', '3x1 sesudah makan');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(3) NOT NULL,
  `nama` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `jabatan` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `tahunkerja` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `jabatan`, `tahunkerja`) VALUES
(1, 'Adriani', 'Dokter Umum', '2000-06-21'),
(2, 'Muamalan', 'Dokter anak', '2003-12-01'),
(3, 'Karimah', 'Dokter Kandungan', '2000-01-01'),
(4, 'Jumainah', 'Perawat', '2003-03-03'),
(5, 'Dalimah', 'Perawat', '2005-05-01'),
(6, 'Majmuah', 'Perawat', '2008-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `periksa`
--

CREATE TABLE `periksa` (
  `id` int(10) NOT NULL,
  `tanggal_periksa` date NOT NULL,
  `keluhan` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `tindakan` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `obat` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `id_pegawai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `periksa`
--

INSERT INTO `periksa` (`id`, `tanggal_periksa`, `keluhan`, `tindakan`, `obat`, `id_pegawai`) VALUES
(1, '2017-11-02', 'Batuk', 'Di beri obat', 'SANMOL Paracetamol', 5),
(2, '2017-11-02', 'Sakit di bagian Perut', 'Periksa + Di beri obat', 'Dexametaxone', 1);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(10) NOT NULL,
  `guladarah` int(3) NOT NULL,
  `tensi` varchar(6) COLLATE latin1_general_cs NOT NULL,
  `penyakit` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `tanggal_periksa` date NOT NULL,
  `keluhan` varchar(30) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id`, `guladarah`, `tensi`, `penyakit`, `tanggal_periksa`, `keluhan`) VALUES
(1, 110, '110/90', '-', '2017-11-02', 'Batuk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kodepos` (`kodepos`),
  ADD KEY `member` (`member`);

--
-- Indexes for table `kodepos`
--
ALTER TABLE `kodepos`
  ADD PRIMARY KEY (`kodepos`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`nama_obat`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `periksa`
--
ALTER TABLE `periksa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `obat` (`obat`),
  ADD UNIQUE KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `tanggal_periksa` (`tanggal_periksa`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tanggal_periksa` (`tanggal_periksa`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD CONSTRAINT `data_pasien_ibfk_1` FOREIGN KEY (`member`) REFERENCES `member` (`member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_pasien_ibfk_2` FOREIGN KEY (`kodepos`) REFERENCES `kodepos` (`kodepos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_pasien_ibfk_3` FOREIGN KEY (`id`) REFERENCES `periksa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `periksa`
--
ALTER TABLE `periksa`
  ADD CONSTRAINT `periksa_ibfk_1` FOREIGN KEY (`id`) REFERENCES `data_pasien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `periksa_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `periksa_ibfk_3` FOREIGN KEY (`obat`) REFERENCES `obat` (`nama_obat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `riwayat_ibfk_1` FOREIGN KEY (`id`) REFERENCES `periksa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `riwayat_ibfk_2` FOREIGN KEY (`tanggal_periksa`) REFERENCES `periksa` (`tanggal_periksa`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
