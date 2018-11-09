-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2018 at 09:35 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id` int(11) NOT NULL,
  `mhs_npm` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `mk_kode` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `sem` enum('GANJIL','GENAP') COLLATE latin1_general_ci NOT NULL,
  `ta_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id`, `mhs_npm`, `mk_kode`, `sem`, `ta_id`, `nilai`) VALUES
(1, '005', 'SIM3201', 'GANJIL', 'TA05', 89),
(3, '002', 'UNI1005', 'GENAP', 'TA03', 88);

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `npm` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(500) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`npm`, `nama`, `alamat`) VALUES
('001', 'Bahrul', 'Nganjuk'),
('002', 'Aris', 'Kediri'),
('003', 'Windarti', 'Riau'),
('004', 'Eko', 'Tulungagung'),
('005', 'Hafis', 'Trenggalek');

-- --------------------------------------------------------

--
-- Table structure for table `mk`
--

CREATE TABLE `mk` (
  `kode` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mk`
--

INSERT INTO `mk` (`kode`, `nama`) VALUES
('SIM3102', 'Matematika Diskrit'),
('SIM3201', 'Logika dan Algoritma'),
('SIM3207', 'Struktur Data'),
('SIM3209', 'Pemrograman Web'),
('SIM3601', '	Jaringan Komputer'),
('SIM3701', 'Basis Data'),
('SIM3802', 'Pengantar Sistem Informasi'),
('SIM3803', 'Sistem Informasi Manajemen'),
('UNI1001', 'Pendidikan Agama'),
('UNI1005', 'ke-PGRI-an');

-- --------------------------------------------------------

--
-- Table structure for table `ta`
--

CREATE TABLE `ta` (
  `id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `ta`
--

INSERT INTO `ta` (`id`, `nama`) VALUES
('TA01', '2014/2015'),
('TA02', '2015/2016'),
('TA03', '2016/2017'),
('TA04', '2017/2018'),
('TA05', '2018/2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id`,`mhs_npm`,`mk_kode`,`sem`,`ta_id`),
  ADD KEY `mhs_npm` (`mhs_npm`),
  ADD KEY `mk_kode` (`mk_kode`),
  ADD KEY `ta_id` (`ta_id`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `mk`
--
ALTER TABLE `mk`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `ta`
--
ALTER TABLE `ta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `krs`
--
ALTER TABLE `krs`
  ADD CONSTRAINT `krs_ibfk_1` FOREIGN KEY (`mhs_npm`) REFERENCES `mhs` (`npm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `krs_ibfk_2` FOREIGN KEY (`mk_kode`) REFERENCES `mk` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `krs_ibfk_3` FOREIGN KEY (`ta_id`) REFERENCES `ta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
