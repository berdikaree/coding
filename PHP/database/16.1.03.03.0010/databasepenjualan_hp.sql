-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2017 at 08:26 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databasepenjualan_hp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabbarang`
--

CREATE TABLE `tabbarang` (
  `kode_barang` varchar(9) NOT NULL,
  `nama_barang` varchar(55) NOT NULL,
  `tanggal` date NOT NULL,
  `harga_beli` decimal(10,0) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `harga_jual` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabbarang`
--

INSERT INTO `tabbarang` (`kode_barang`, `nama_barang`, `tanggal`, `harga_beli`, `jumlah`, `harga_jual`) VALUES
('001', 'Asus Zenfone 4 ', '2017-11-13', '1000000', 1, '950000');

-- --------------------------------------------------------

--
-- Table structure for table `tabhistorystok`
--

CREATE TABLE `tabhistorystok` (
  `kode_barang` varchar(9) NOT NULL,
  `nama_barang` varchar(55) NOT NULL,
  `tanggal` date NOT NULL,
  `harga_beli` decimal(10,0) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `admin` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabhistorystok`
--

INSERT INTO `tabhistorystok` (`kode_barang`, `nama_barang`, `tanggal`, `harga_beli`, `jumlah`, `admin`) VALUES
('001', 'Asus Zenfone 4 ', '2017-11-13', '1000000', 1, 'amaliaf');

-- --------------------------------------------------------

--
-- Table structure for table `tabitemtransaksi`
--

CREATE TABLE `tabitemtransaksi` (
  `nofaktur` varchar(12) NOT NULL,
  `kode_barang` varchar(9) NOT NULL,
  `nama_barang` varchar(56) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabitemtransaksi`
--

INSERT INTO `tabitemtransaksi` (`nofaktur`, `kode_barang`, `nama_barang`, `harga`, `jumlah`, `total`) VALUES
('123', '001', 'Asus Zenfone 4 ', '1000000', 1, '1000000');

-- --------------------------------------------------------

--
-- Table structure for table `tablogin`
--

CREATE TABLE `tablogin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `akses` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablogin`
--

INSERT INTO `tablogin` (`username`, `password`, `nama`, `akses`) VALUES
('Krisnaryokoae', '4646dxd', 'Ersa Krisnaryoko', 'Penjualan Hp Asus');

-- --------------------------------------------------------

--
-- Table structure for table `tabtransaksi`
--

CREATE TABLE `tabtransaksi` (
  `nofaktur` varchar(12) NOT NULL,
  `tanggal` date NOT NULL,
  `item` bigint(20) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `diskon` decimal(10,0) NOT NULL,
  `total_bayar` decimal(10,0) NOT NULL,
  `dibayar` decimal(10,0) NOT NULL,
  `kembali` decimal(10,0) NOT NULL,
  `terbilang` varchar(255) NOT NULL,
  `admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabtransaksi`
--

INSERT INTO `tabtransaksi` (`nofaktur`, `tanggal`, `item`, `total`, `diskon`, `total_bayar`, `dibayar`, `kembali`, `terbilang`, `admin`) VALUES
('123', '2017-11-13', 1, '1', '0', '1000000', '1000000', '0', 'lunas', 'amaliaf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabbarang`
--
ALTER TABLE `tabbarang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `tabhistorystok`
--
ALTER TABLE `tabhistorystok`
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `tabitemtransaksi`
--
ALTER TABLE `tabitemtransaksi`
  ADD KEY `nofaktur` (`nofaktur`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `tablogin`
--
ALTER TABLE `tablogin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tabtransaksi`
--
ALTER TABLE `tabtransaksi`
  ADD PRIMARY KEY (`nofaktur`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabhistorystok`
--
ALTER TABLE `tabhistorystok`
  ADD CONSTRAINT `tabhistorystok_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `tabbarang` (`kode_barang`) ON DELETE CASCADE;

--
-- Constraints for table `tabitemtransaksi`
--
ALTER TABLE `tabitemtransaksi`
  ADD CONSTRAINT `tabitemtransaksi_ibfk_1` FOREIGN KEY (`nofaktur`) REFERENCES `tabtransaksi` (`nofaktur`) ON DELETE CASCADE,
  ADD CONSTRAINT `tabitemtransaksi_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `tabbarang` (`kode_barang`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
