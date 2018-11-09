-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 02:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(5) NOT NULL,
  `judul` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `kode_pengarang` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `penerbit` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `id_klasifikasi` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `jenis` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `jumlah` int(10) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `kode_pengarang`, `penerbit`, `id_klasifikasi`, `jenis`, `jumlah`, `tanggal_masuk`) VALUES
(101, 'Mencari Jati Diri', '201', 'Gramedia', '301', 'Motivasi', 20, '2017-11-14'),
(102, 'Bermimpi Besar ', '202', 'Sinar Dunia', '302', 'Motivasi', 50, '2017-11-04'),
(103, 'Membuat Bom', '203', 'Cahaya Surya', '303', 'Teknologi', 15, '2017-11-08'),
(104, 'Programing', '204', 'Media Now', '304', 'teknologi', 25, '2017-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `terlambat` date NOT NULL,
  `harga` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`terlambat`, `harga`) VALUES
('2017-12-07', 50000.00),
('2017-12-11', 30000.00),
('2017-12-14', 20000.00),
('2017-12-15', 70000.00);

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `id_klasifikasi` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `jenis` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `lokasi` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `klasifikasi`
--

INSERT INTO `klasifikasi` (`id_klasifikasi`, `jenis`, `lokasi`) VALUES
('301', 'Motivasi', 'Surabaya'),
('302', 'Motivasi', 'Jakarta'),
('303', 'Teknologi', 'Jogjakarta'),
('304', 'Teknologi', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama`, `alamat`, `no_telp`) VALUES
('0002', 'Kiki Firmansyah', 'Kediri', '081678432982'),
('0007', 'Salsabila', 'Tulungagung', '085674329821'),
('0013', 'Iqbal Farazi', 'Nganjuk', '085234678651'),
('0021', 'Widya Ell', 'Trenggalek', '081783429100');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjam` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `id_buku` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `judul` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `id_mahasiswa` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `penerbit` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tahun_terbit` varchar(5) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengarang`
--

CREATE TABLE `pengarang` (
  `kode_pengarang` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `nama_pengarang` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pengarang`
--

INSERT INTO `pengarang` (`kode_pengarang`, `nama_pengarang`) VALUES
('201', 'Tere Liye'),
('202', 'Andika S');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `id_peminjam` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `terlambat` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(10) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `password`) VALUES
('111', 'agus setyawan', '123'),
('222', 'yeti yulfi', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`terlambat`);

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id_klasifikasi`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`kode_pengarang`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
