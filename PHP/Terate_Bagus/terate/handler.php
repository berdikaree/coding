<?php
include "root.php";
$db=new data();
$aksi=$_GET["aksi"];
if($aksi=='login'){
	$db->login($_POST['username'],$_POST['password']);
	}
if ($aksi=="daftar_pelanggan") {
	$db->daftar_pelanggan($_POST['username'],$_POST['nama_lengkap'],$_POST['email'],$_POST['password'],$_POST['alamat'],$_POST['provinsi'],$_POST['kabupaten'],$_POST['kecamatan'],$_POST['kode_pos'],$_POST['no_telp']);
}

if($aksi=='beli'){
	$db->beli($_POST['id_pembeli'],$_POST['id_barang'],$_POST['nama_produk'],$_POST['gambar'],$_POST['qty'],$_POST['harga'],$_POST['kategori'],$_POST['keterangan'],$_POST['jasa_pengiriman']);
	}
if($aksi=='logout'){
	$db->logout();
	}
if($aksi=='batalkan'){
	$db->batalkan($_GET['id']);
	}
if($aksi=='qtytambah'){
	$db->qtytambah($_GET['id'],$_GET['id_produk'],$_GET['qty'],$_GET['harga']);
	}if($aksi=='qtykurang'){
	$db->qtykurang($_GET['id'],$_GET['id_produk'],$_GET['qty'],$_GET['harga']);
	}
if($aksi=='selesaibelanja'){
	$db->selesaibelanja($_POST['id_pembeli'],$_POST['nama'],$_POST['jumlah'],$_POST['jumlah_bayar'],$_POST['tanggal_beli'],$_POST['alamat'],$_POST['kabupaten'],$_POST['kecamatan'],$_POST['provinsi'],$_POST['kode_pos'],$_POST['no_telp'],$_POST['jasa_pengiriman']);
	
	}
if ($aksi=='konfirmasi') {
	$tmp_name=$_FILES['gambar']['tmp_name'];
	$name=$_FILES['gambar']['name'];
	$type=$_FILES['gambar']['type'];
	$loc="admin/gambar/$name";
	move_uploaded_file($tmp_name,$loc);
	$db->konfirmasi($_POST['kode_pembelian'],$_POST['nama_bank'],$_POST['tgl'],$_POST['pesan'],$loc);
	}
 ?>