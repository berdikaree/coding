<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.7.4
 */

/**
 * Database `rental`
 */

/* `rental`.`id_pelanggan` */
$id_pelanggan = array(
  array('no_id' => '2190','jenis_id' => 'KTP','nama' => 'Hafiz','alamat' => 'Trenggalek','no_tlp' => '81567772032'),
  array('no_id' => '2323','jenis_id' => 'KTP','nama' => 'Huda','alamat' => 'Kediri','no_tlp' => '81267239965'),
  array('no_id' => '2673','jenis_id' => 'KTP','nama' => 'Gery','alamat' => 'Kediri','no_tlp' => '82285439823'),
  array('no_id' => '2732','jenis_id' => 'KTP','nama' => 'Angga','alamat' => 'Trenggalek','no_tlp' => '85798012674'),
  array('no_id' => '2734','jenis_id' => 'KTP','nama' => 'Aris','alamat' => 'Kediri','no_tlp' => '85699216645')
);

/* `rental`.`mobil` */
$mobil = array(
  array('no_mobil' => 'M01','no_polisi' => 'AG3453BD','nama_mobil' => 'Alphard','warna_mobil' => 'Putih','harga_sewa' => '500000'),
  array('no_mobil' => 'M02','no_polisi' => 'AG6732PK','nama_mobil' => 'Avanza','warna_mobil' => 'Hitam','harga_sewa' => '250000'),
  array('no_mobil' => 'M03','no_polisi' => 'AG9832KH','nama_mobil' => 'Jazz','warna_mobil' => 'Merah','harga_sewa' => '200000'),
  array('no_mobil' => 'M04','no_polisi' => 'AG9037MN','nama_mobil' => 'Xenia','warna_mobil' => 'Biru','harga_sewa' => '220000'),
  array('no_mobil' => 'M05','no_polisi' => 'AG7852BN','nama_mobil' => 'Fortuner','warna_mobil' => 'Putih','harga_sewa' => '350000'),
  array('no_mobil' => 'M06','no_polisi' => 'B7645PKL','nama_mobil' => 'Mobilio','warna_mobil' => 'Hitam','harga_sewa' => '350000'),
  array('no_mobil' => 'M07','no_polisi' => 'B9856DES','nama_mobil' => 'Luxio','warna_mobil' => 'Putih','harga_sewa' => '500000'),
  array('no_mobil' => 'M08','no_polisi' => 'B7645KLH','nama_mobil' => 'Expander','warna_mobil' => 'Hitam','harga_sewa' => '450000'),
  array('no_mobil' => 'M09','no_polisi' => 'L8066JKL','nama_mobil' => 'Vios','warna_mobil' => 'Hitam','harga_sewa' => '600000'),
  array('no_mobil' => 'M10','no_polisi' => 'L2423KMN','nama_mobil' => 'Ertiga','warna_mobil' => 'Silver','harga_sewa' => '320000')
);

/* `rental`.`pelanggan` */
$pelanggan = array(
  array('no_pelanggan' => '002','nama' => 'Angga'),
  array('no_pelanggan' => '005','nama' => 'Aris'),
  array('no_pelanggan' => '001','nama' => 'Gery'),
  array('no_pelanggan' => '004','nama' => 'Hafiz'),
  array('no_pelanggan' => '003','nama' => 'Huda')
);

/* `rental`.`registrasi` */
$registrasi = array(
  array('no_registrasi' => 'TRX343','no_pelanggan' => '001','no_id' => '2673','nama' => 'Gery','tgl_registrasi' => '2017-10-20'),
  array('no_registrasi' => 'TRX423','no_pelanggan' => '002','no_id' => '2732','nama' => 'Angga','tgl_registrasi' => '2017-10-22'),
  array('no_registrasi' => 'TRX232','no_pelanggan' => '003','no_id' => '2323','nama' => 'Huda','tgl_registrasi' => '2017-08-08'),
  array('no_registrasi' => 'TRX124','no_pelanggan' => '004','no_id' => '2190','nama' => 'Hafiz','tgl_registrasi' => '2017-06-20'),
  array('no_registrasi' => 'TRX547','no_pelanggan' => '005','no_id' => '2734','nama' => 'Aris','tgl_registrasi' => '2017-10-23')
);

/* `rental`.`rental` */
$rental = array(
  array('no_transaksi' => 'A23','no_pelanggan' => '004','no_mobil' => 'M04','tgl_rental' => '2017-06-21','tgl_kembali' => '2017-06-23','harga_sewa' => '440000'),
  array('no_transaksi' => 'A97','no_pelanggan' => '003','no_mobil' => 'M03','tgl_rental' => '2017-08-10','tgl_kembali' => '2017-08-13','harga_sewa' => '600000'),
  array('no_transaksi' => 'B36','no_pelanggan' => '001','no_mobil' => 'M01','tgl_rental' => '2017-10-22','tgl_kembali' => '2017-10-24','harga_sewa' => '1000000'),
  array('no_transaksi' => 'B92','no_pelanggan' => '002','no_mobil' => 'M02','tgl_rental' => '2017-10-23','tgl_kembali' => '2017-10-29','harga_sewa' => '1500000'),
  array('no_transaksi' => 'C28','no_pelanggan' => '005','no_mobil' => 'M05','tgl_rental' => '2017-10-24','tgl_kembali' => '2017-10-30','harga_sewa' => '2100000')
);
