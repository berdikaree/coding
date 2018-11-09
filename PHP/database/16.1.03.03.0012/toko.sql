-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2017 at 06:25 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_barang`
--

INSERT INTO `tabel_barang` (`kode_barang`, `nama_barang`, `satuan`, `harga`) VALUES
(1, 'rinso', 'bungkus', 3000),
(2, 'daia', 'bungkus', 2000),
(3, 'indomie', 'bungkus', 3000),
(4, 'saus abc', 'botol', 3000),
(5, 'kecap abc', 'botol', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_h_penj`
--

CREATE TABLE `tabel_h_penj` (
  `no_faktur` int(11) NOT NULL,
  `tgl_faktur` date NOT NULL,
  `nik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_h_penj`
--

INSERT INTO `tabel_h_penj` (`no_faktur`, `tgl_faktur`, `nik`) VALUES
(3001, '2017-11-02', 801),
(3002, '2017-11-14', 805);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_karyawan`
--

CREATE TABLE `tabel_karyawan` (
  `nik` int(11) NOT NULL,
  `nama_karyawan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_karyawan`
--

INSERT INTO `tabel_karyawan` (`nik`, `nama_karyawan`) VALUES
(801, 'fuat'),
(802, 'reni'),
(803, 'yuni'),
(804, 'kidi'),
(805, 'eko');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_penjualan`
--

CREATE TABLE `tabel_penjualan` (
  `no_faktur` int(11) NOT NULL,
  `kode_barang` int(5) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `satuan` varchar(11) NOT NULL,
  `harga` int(20) NOT NULL,
  `jumlah` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_penjualan`
--

INSERT INTO `tabel_penjualan` (`no_faktur`, `kode_barang`, `nama_barang`, `satuan`, `harga`, `jumlah`) VALUES
(3001, 1, 'rinso', 'bungkus', 3000, 2),
(3001, 3, 'indomie', 'bungkus', 3000, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `tabel_h_penj`
--
ALTER TABLE `tabel_h_penj`
  ADD PRIMARY KEY (`no_faktur`,`nik`),
  ADD KEY `no_faktur` (`no_faktur`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tabel_penjualan`
--
ALTER TABLE `tabel_penjualan`
  ADD PRIMARY KEY (`no_faktur`,`kode_barang`),
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `no_faktur` (`no_faktur`,`kode_barang`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_h_penj`
--
ALTER TABLE `tabel_h_penj`
  ADD CONSTRAINT `tabel_h_penj_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tabel_karyawan` (`nik`) ON UPDATE CASCADE;

--
-- Constraints for table `tabel_penjualan`
--
ALTER TABLE `tabel_penjualan`
  ADD CONSTRAINT `tabel_penjualan_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `tabel_barang` (`kode_barang`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_penjualan_ibfk_2` FOREIGN KEY (`no_faktur`) REFERENCES `tabel_h_penj` (`no_faktur`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
