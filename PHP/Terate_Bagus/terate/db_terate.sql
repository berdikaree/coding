-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 29 Nov 2016 pada 19.34
-- Versi Server: 5.5.25a
-- Versi PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_terate`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'jason');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE IF NOT EXISTS `kabupaten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kabupaten` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `kabupaten`) VALUES
(1, 'nganjuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `katalog`
--

CREATE TABLE IF NOT EXISTS `katalog` (
  `id_katalog` int(11) NOT NULL AUTO_INCREMENT,
  `nama_katalog` varchar(10) NOT NULL,
  PRIMARY KEY (`id_katalog`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `katalog`
--

INSERT INTO `katalog` (`id_katalog`, `nama_katalog`) VALUES
(13, 'jaket'),
(14, 'sepatu'),
(15, 'kaos'),
(16, 'jam tangan'),
(17, 'celana'),
(18, 'topi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelompok`
--

CREATE TABLE IF NOT EXISTS `kelompok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `kelompok`
--

INSERT INTO `kelompok` (`id`, `nama`) VALUES
(1, 'elektronik'),
(2, 'pakaian'),
(6, ''),
(7, 'rumah tangga'),
(8, 'ajke'),
(9, 'ddd'),
(10, 'assesoris'),
(11, 'olahraga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE IF NOT EXISTS `konfirmasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pembelian` varchar(15) NOT NULL,
  `nama_bank` varchar(10) NOT NULL,
  `tgl` date NOT NULL,
  `pesan` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`id`, `kode_pembelian`, `nama_bank`, `tgl`, `pesan`, `gambar`) VALUES
(1, '347', 'BCA', '2016-11-29', 'admin/gambar/hider.jpg', 'Saya Sudah Ko'),
(2, '347', 'BRI', '2016-11-29', 'admin/gambar/hider.jpg', 'ND'),
(3, '347', 'BRI', '2016-11-29', 'sjsjs', 'admin/gambar/hider.jpg'),
(4, '347', 'BRI', '2016-11-29', 'sjsjs', 'admin/gambar/hider.jpg'),
(5, '347', 'BRI', '2016-11-29', 'sjsjs', 'admin/gambar/hider.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE IF NOT EXISTS `pembeli` (
  `id_pembeli` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `estimasi` int(11) NOT NULL,
  PRIMARY KEY (`id_pembeli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `username`, `nama_lengkap`, `email`, `password`, `alamat`, `provinsi`, `kabupaten`, `kecamatan`, `kode_pos`, `no_telp`, `estimasi`) VALUES
(1, 'afiq', '', '', '1234', 'jl jati baron nganjuk jawa timur', 'jawa timur', 'nganjuk', 'baron', '', '', 19000),
(2, 'bagus_fever', 'Bagus Dwiky Wicaksono', 'bagusbieber1922@gmail.com', 'bagusfever', 'Dusun Gebangsiwil RT 03 RW 03 ', 'Jawa Timur', 'Nganjuk', 'Nganjuk', '829222', '05608397972', 0),
(3, 'bagus_fever', 'Bagus', 'bagus@yahoo.co.id', 'bagus1922', '', '--Provinsi--', '--Kota--', '--Kecematan--', '', '', 0),
(4, 'baguspsht', 'Bagus Dwiky Wicaksono', 'bagusbieber1922@gmail.com', 'bagus1922', 'Dusun Gabangsiwil Desa Bukur RT 03 RW 03', 'Jawa Timur', 'Nganjuk', 'Patianrowo', '927272', '085608397972', 0),
(5, 'eva', 'eva', 'eva@gmail.com', 'eva1922', 'desa karang tengah rt 02 rw 08', 'Jawa Timur', 'Nganjuk', 'Patianrowo', '88373', '0833736333', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `kelompok` varchar(15) NOT NULL,
  `katalog` varchar(10) NOT NULL,
  `diskon` varchar(10) NOT NULL,
  `ket` varchar(2000) NOT NULL,
  `qty` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `harga`, `gambar`, `kelompok`, `katalog`, `diskon`, `ket`, `qty`, `kategori`) VALUES
(9, 'LG led tv 20"', 3000000, 'gambar/3.jpg', 'elektronik', '', '', 'LG 32 inch LED TV 32LN-4900, hadir dengan desain frame dan bezelnya tipis. LED TV ini memiliki Smart Energy Saving \r\n(SES) sehingga dapat menghemat 30% energi. Smart Energy Saving (SES) memiliki beragam fungsi seperti fungsi standby \r\nmode zero membuat TV Anda tidak menggunakan listrik saat standby.', -1, 'Elektronik'),
(10, 'LG led tv 90"', 5000000, 'gambar/6.jpg', 'elektronik', '', '', 'TV LED berukuran 90 inch yang memiliki resolusi Full HD 1080 (1920 x 1080) dengan rasio 16:9 serta dilengkapi \r\nDolby Digital. KLV32EX43A disupport dengan teknologi BRAVIA Engine 3, yang memiliki kemampuan menganalisis setiap \r\ngambar atau adegan, dan mengolahnya sehingga memberikan warna dan kontras yang optimal.', 53, 'Elektronik'),
(12, 'SHARP LED TV 24 inch LC-24DC50M', 4000000, 'gambar/4.jpg', 'elektronik', '', '', 'SHARP LED TV 24 inch LC-24DC50M, LED TV Full HD berukuran 24 inch yang mengedepankan teknologi yang ramah lingkungan. \r\nDengan fitur OPC, konsumsi listrik dapat diatur otomatis sesuai dengan pencahayaan ruangan sehingga konsumsi \r\nlistrik SHARP AQUOS menjadi hemat. Ditunjang dengan SRS TruSurrond HD and Bass Enhancer yaitu Audio speaker \r\nberkualitas SRS TruSurround High Definition dengan suara bass yang mengagumkan.\r\n', 55, 'Elektronik'),
(13, 'Nikon Camera Mirrorless S1 10-30 Red', 5000000, 'gambar/5.jpg', 'elektronik', '', '', 'Nikon Camera Mirrorless S1 10-30 adalah kamera mirrorless yang didesain compact dan stylish dan dilengkapi dengan \r\nInterchangeable Lens System 10 - 30 mm. Kamera dengan teknologi CMOS sensor Nikon CX-format ini ditunjang dengan \r\ndisplay TFT LCD 3 inch, kemampuan full HD dan resolusi 10.1 untuk memudahkan Anda berekspresi melalui hasil jepretan \r\nAnda.\r\n', 75, 'Elektronik'),
(15, 'Canon EOS 7D KIT 18-135mm', 6000000, 'gambar/5.jpg', 'elektronik', '', '', 'Canon EOS 7D KIT 18-135 mm yang didesain compact untuk kenyamanan Anda juga didukung dengan performa maksimal. \r\nKamera 18 MP ini dilengkapi layar Clear View II LCD 3 inch, Integrated Speedlite Transmitter dan fitur EOS Movie \r\nuntuk merekam Full HD movie dengan full manual control and selectable frame rates.', 65, 'Elektronik'),
(18, 'Samsung Galaxy Note 8.0 - N5100 Brown', 9000000, 'gambar/1f0.jpg', 'elektronik', '', '', 'Samsung Galaxy Note 8.0 - N5100 Brown, hadir dengan layar sebesar 8 inch dengan resolusi 1280x800 dan tidak \r\nhanya sekedar tablet Android yang terhubung dengan jaringan internet, Samsung Galaxy Note 8.0 bahkan bisa\r\nmelakukan panggilan telepon dan SMS. Galaxy Note 8.0 diperkuat dengan prosesor Quad Core 1.6 GHz Cortex-A9, \r\nOS Android Jelly Bean V4.1.2, memori internal 16 GB, dan dual kamera (kamera depan 5 MP, dan kamera belakang 1.3 MP).\r\nUntuk konektivitas Galaxy Note 8.0 sudah didukung Wi-Fi, Wi-Fi hotspot, dan Bluetooth V4.0.', 3, 'Elektronik'),
(19, 'Sony Xperia V LT25i White', 5300000, 'gambar/wdaw.jpg', 'elektronik', '', '', 'Sony Xperia V LT25i, hadir dengan desain stylish, dan unik. Smartphone ini juga ditunjang dengan \r\nOS Android Ice Cream Sandwich v4.0 dan prosesor Dual-core 1.5 GHz Qualcomm MSM8960 Snapdragon, serta Adreno 225. \r\nDilengkapi dengan layar touchscreen 4,3 inch, kamera 13 MP dengan autofocus dan LED flash, memori internal 8 GB \r\ndengan slot kartu memori serta konektivitas Wi-Fi 802.11 b/g/n, dengan kemampuan Wi-Fi Direct, DLNA, Wi-Fi hotspot, \r\nBluetooth v4.0, dan NFC. Xperia V LT25i ini juga mampu bertahan di medan ekstrim karena memiliki fitur water proof \r\ndan water resistant, sehingga sangat cocok untuk Anda yang suka berpetualang.', 71, 'Elektronik'),
(20, 'Kaos PSHT', 90000, 'kaos', '8', 'gambar/192', '', 'sjjsssssssssssssssss', 0, 'Pakaian'),
(21, 'Kaos PSHT', 90000, 'gambar/192.jpg', 'pakaian', 'kaos', '', 'sjjsssssssssssssssssddd', 3, 'Pakaian'),
(22, 'kaos psht terate hijau', 90000, 'gambar/TERA IJO.jpg', 'kaos', '', '', 'Kaos KaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaos', 30, 'kaos psht'),
(23, 'kaos psht terate hijau', 90000, 'gambar/TERA IJO.jpg', 'kaos', '', '', 'Kaos KaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaos', 30, 'kaos psht'),
(24, 'kaos psht tendangan t', 90000, 'gambar/10687026_538818476251791_5192189108266288028_n.jpg', 'pakaian', 'kaos', '', 'KaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaosKaos', 7, 'kaos psht'),
(26, 'jaket holding sweter  psht ', 120000, 'gambar/Alan-Walker.jpg', 'pakaian', 'jaket', '', 'jaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaket', 30, 'jaket dj'),
(27, 'kaos silat psht terate', 120000, 'gambar/Kaos PSHT Kode SH 50 Persaudaraan setia hati Terate  Kaos Psht Kode Sh keren Persaudaraan Setia Hati Terate.jpg', 'pakaian', 'kaos', '10%', 'jaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaket', 26, 'kaos psht'),
(28, '', 0, 'gambar/', '', '', '10%', '', 0, ''),
(29, 'kaos silat psht terate 1922', 100000, 'gambar/Kaos_PSHT_Kode_SH_43_Persaudaraan_setia_hati_Terate.jpg', 'pakaian', 'kaos', '10%', 'jaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaket', 9, 'kaos psht'),
(30, 'sepatu nike sport', 300000, 'gambar/nav_img.jpg', 'olahraga', 'sepatu', '', 'jaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaket', 10, 'sepatu nike'),
(31, 'sepatu nike sport', 300000, 'gambar/pic3.jpg', 'olahraga', 'sepatu', '', 'jaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaket', 10, 'sepatu nike'),
(32, 'sepatu nike sport', 300000, 'gambar/pic5.jpg', 'olahraga', 'sepatu', '', 'jaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaket', 10, 'sepatu nike'),
(33, 'sepatu nike sport', 300000, 'gambar/banner1.jpg', 'olahraga', 'sepatu', '', 'jaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaketjaket', 9, 'sepatu nike');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_temp`
--

CREATE TABLE IF NOT EXISTS `produk_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pembeli` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `qty_beli` int(11) NOT NULL,
  `qty_asli` int(11) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `ket` int(11) NOT NULL,
  `jasa_pengiriman` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data untuk tabel `produk_temp`
--

INSERT INTO `produk_temp` (`id`, `id_pembeli`, `id_produk`, `nama_produk`, `harga`, `total_harga`, `gambar`, `qty_beli`, `qty_asli`, `kategori`, `ket`, `jasa_pengiriman`) VALUES
(50, 0, 18, 'Samsung Galaxy Note 8.0 - N5100 Brown', 9000000, 9000000, 'gambar/1f0.jpg', 1, 6, 'Elektronik', 0, ''),
(51, 0, 33, 'sepatu nike sport', 300000, 300000, 'gambar/banner1.jpg', 1, 10, 'sepatu nike', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `selesai`
--

CREATE TABLE IF NOT EXISTS `selesai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `tanggal_beli` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kabupaten` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `jasa_pengiriman` varchar(20) NOT NULL,
  `konfir` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data untuk tabel `selesai`
--

INSERT INTO `selesai` (`id`, `id_pembeli`, `nama`, `jumlah_barang`, `jumlah_bayar`, `tanggal_beli`, `alamat`, `kabupaten`, `kecamatan`, `provinsi`, `kode_pos`, `no_telp`, `jasa_pengiriman`, `konfir`) VALUES
(14, 1, 'afiq', 1, 6000000, '29-11-2016', 'jl jati baron nganjuk jawa timur', 'nganjuk', 'baron', 'jawa timur', '', '', '', 'Y'),
(15, 1, 'afiq', 1, 5000000, '29-11-2016', 'jl jati baron nganjuk jawa timur', 'nganjuk', 'baron', 'jawa timur', '', '', '', 'N'),
(16, 1, 'afiq', 1, 6000000, '29-11-2016', 'jl jati baron nganjuk jawa timur', 'nganjuk', 'baron', 'jawa timur', '', '', '', 'N'),
(17, 1, 'afiq', 1, 9000000, '29-11-2016', 'jl jati baron nganjuk jawa timur', 'nganjuk', 'baron', 'jawa timur', '', '', '', 'N'),
(18, 1, 'afiq', 1, 5300000, '29-11-2016', 'jl jati baron nganjuk jawa timur', 'nganjuk', 'baron', 'jawa timur', '', '', '', 'N'),
(19, 5, 'eva', 1, 9000000, '29-11-2016', 'desa karang tengah rt 02 rw 08', 'Nganjuk', 'Patianrowo', 'Jawa Timur', '88373', '0833736333', '', 'N'),
(20, 5, 'eva', 2, 10000000, '29-11-2016', 'desa karang tengah rt 02 rw 08', 'Nganjuk', 'Patianrowo', 'Jawa Timur', '88373', '0833736333', 'POS REGULER', 'N'),
(21, 5, 'eva', 1, 8000000, '29-11-2016', 'desa karang tengah rt 02 rw 08', 'Nganjuk', 'Patianrowo', 'Jawa Timur', '88373', '0833736333', 'POS KILAT', 'N');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
