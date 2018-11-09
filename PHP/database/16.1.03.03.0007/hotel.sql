-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2017 at 09:11 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
  `no_kamar` int(90) NOT NULL,
  `tipe_kamar` varchar(100) NOT NULL,
  `harga` int(90) NOT NULL,
  PRIMARY KEY (`no_kamar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`no_kamar`, `tipe_kamar`, `harga`) VALUES
(1, 'VIP', 500000),
(2, 'VVIP', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id_registrasi` int(90) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `alamat` varchar(170) NOT NULL,
  `no_telepon` int(30) NOT NULL,
  PRIMARY KEY (`id_registrasi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_registrasi`, `nama_pelanggan`, `alamat`, `no_telepon`) VALUES
(1111, 'Winda', 'Kediri', 21474),
(1112, 'siapa ya', 'Malang', 48537847);

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE IF NOT EXISTS `sewa` (
  `id_registrasi` int(100) NOT NULL,
  `no_kamar` int(30) NOT NULL,
  `pilihan_paket` varchar(10) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `lama_menginap` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id_registrasi`, `no_kamar`, `pilihan_paket`, `tgl_masuk`, `tgl_keluar`, `lama_menginap`) VALUES
(1111, 1, 'VIP', '2017-11-08', '2017-11-09', '1'),
(1112, 2, 'VVIP', '2017-11-06', '2017-11-10', '4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
