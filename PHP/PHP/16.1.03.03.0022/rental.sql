-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 02:59 PM
-- Server version: 10.1.26-MariaDB
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
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `id_pelanggan`
--

CREATE TABLE `id_pelanggan` (
  `no_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `jenis_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_tlp` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `id_pelanggan`
--

INSERT INTO `id_pelanggan` (`no_id`, `jenis_id`, `nama`, `alamat`, `no_tlp`) VALUES
('2190', 'KTP', 'Hafiz', 'Trenggalek', 81567772032),
('2323', 'KTP', 'Huda', 'Kediri', 81267239965),
('2673', 'KTP', 'Gery', 'Kediri', 82285439823),
('2732', 'KTP', 'Angga', 'Trenggalek', 85798012674),
('2734', 'KTP', 'Aris', 'Kediri', 85699216645);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `no_mobil` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_polisi` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nama_mobil` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `warna_mobil` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `harga_sewa` decimal(12,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`no_mobil`, `no_polisi`, `nama_mobil`, `warna_mobil`, `harga_sewa`) VALUES
('M01', 'AG3453BD', 'Alphard', 'Putih', '500000'),
('M02', 'AG6732PK', 'Avanza', 'Hitam', '250000'),
('M03', 'AG9832KH', 'Jazz', 'Merah', '200000'),
('M04', 'AG9037MN', 'Xenia', 'Biru', '220000'),
('M05', 'AG7852BN', 'Fortuner', 'Putih', '350000'),
('M06', 'B7645PKL', 'Mobilio', 'Hitam', '350000'),
('M07', 'B9856DES', 'Luxio', 'Putih', '500000'),
('M08', 'B7645KLH', 'Expander', 'Hitam', '450000'),
('M09', 'L8066JKL', 'Vios', 'Hitam', '600000'),
('M10', 'L2423KMN', 'Ertiga', 'Silver', '320000');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `no_pelanggan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`no_pelanggan`, `nama`) VALUES
('002', 'Angga'),
('005', 'Aris'),
('001', 'Gery'),
('004', 'Hafiz'),
('003', 'Huda');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `no_registrasi` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_pelanggan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_registrasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`no_registrasi`, `no_pelanggan`, `no_id`, `nama`, `tgl_registrasi`) VALUES
('TRX343', '001', '2673', 'Gery', '2017-10-20'),
('TRX423', '002', '2732', 'Angga', '2017-10-22'),
('TRX232', '003', '2323', 'Huda', '2017-08-08'),
('TRX124', '004', '2190', 'Hafiz', '2017-06-20'),
('TRX547', '005', '2734', 'Aris', '2017-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `no_transaksi` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_pelanggan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_mobil` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_rental` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `harga_sewa` decimal(12,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`no_transaksi`, `no_pelanggan`, `no_mobil`, `tgl_rental`, `tgl_kembali`, `harga_sewa`) VALUES
('A23', '004', 'M04', '2017-06-21', '2017-06-23', '440000'),
('A97', '003', 'M03', '2017-08-10', '2017-08-13', '600000'),
('B36', '001', 'M01', '2017-10-22', '2017-10-24', '1000000'),
('B92', '002', 'M02', '2017-10-23', '2017-10-29', '1500000'),
('C28', '005', 'M05', '2017-10-24', '2017-10-30', '2100000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `id_pelanggan`
--
ALTER TABLE `id_pelanggan`
  ADD PRIMARY KEY (`no_id`),
  ADD KEY `id_pelanggan_ibfk_2` (`nama`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`no_mobil`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`no_pelanggan`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`no_pelanggan`),
  ADD KEY `no_id` (`no_id`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `rental_ibfk_1` (`no_mobil`),
  ADD KEY `rental_ibfk_2` (`no_pelanggan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `id_pelanggan`
--
ALTER TABLE `id_pelanggan`
  ADD CONSTRAINT `id_pelanggan_ibfk_1` FOREIGN KEY (`no_id`) REFERENCES `registrasi` (`no_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_pelanggan_ibfk_2` FOREIGN KEY (`nama`) REFERENCES `pelanggan` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`no_pelanggan`) REFERENCES `registrasi` (`no_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelanggan_ibfk_2` FOREIGN KEY (`nama`) REFERENCES `registrasi` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rental`
--
ALTER TABLE `rental`
  ADD CONSTRAINT `rental_ibfk_1` FOREIGN KEY (`no_mobil`) REFERENCES `mobil` (`no_mobil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rental_ibfk_2` FOREIGN KEY (`no_pelanggan`) REFERENCES `pelanggan` (`no_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
