<?php
include "root.php";
$db=new admin();
$aksi=$_GET['aksi'];
if($aksi=='login'){
	$db->login($_POST['username'],$_POST['password']);
	}
if ($aksi=="tambah_kelompok") {
	$db->tambah_kelompok($_POST['nama']);
}
if ($aksi=="add_blog_kategori") {
	$db->add_blog_katagori($_POST['nama_kategori']);
}
if ($aksi=="add_blog") {
	$tmp_name=$_FILES['gambar']['tmp_name'];
	$name=$_FILES['gambar']['name'];
	$type=$_FILES['gambar']['type'];
	$loc="gambar/$name";
	move_uploaded_file($tmp_name,$loc);
	$db->tambah_blog($_POST['judul'],$_POST['kategori'],$loc,$_POST['isi_blog'],$_POST['tgl'],$_POST['tulisan']);
}
if ($aksi=="add_pajak") {
	$db->add_pajak($_POST['durasi'],$_POST['harga_pajak'],$_POST['catatan']);
}
if ($aksi=="tambah_katalog") {
	$db->tambah_katalog($_POST['nama_katalog']);
}
if($aksi=='tambah_produk'){
	$tmp_name=$_FILES['gambar']['tmp_name'];
	$name=$_FILES['gambar']['name'];
	$type=$_FILES['gambar']['type'];
	$loc="gambar/$name";
	move_uploaded_file($tmp_name,$loc);
	$db->tambah_produk($_POST['nama_produk'],$_POST['harga'],$_POST['qty'],$loc,$_POST['kelompok'],$_POST['katalog'],$_POST['kategori'],$_POST['ket']);
	}
if($aksi=='logout'){
	$db->logout();
	}
if($aksi=='konfir'){
	$db->konfir($_GET['id']);
	}
if($aksi=='konfir_kirim'){
	$db->konfir_kirim($_GET['id']);
	}
if($aksi=='konfir_kirim_kota'){
	$db->konfir_kirim_kota($_GET['id']);
	}
if($aksi=='konfir_terima'){
	$db->konfir_terima($_GET['id']);
	}
if($aksi=='konfir_selesai'){
	$db->konfir_selesai($_GET['id']);
	}
if($aksi=='konfir_bayar'){
	$db->konfir_bayar($_GET['id']);
	}
if($aksi=='konfir_tenggang'){
	$db->konfir_tenggang($_GET['id']);
	}
if ($aksi=="transfer_pendapatan_vendor") {
	$db->transfer_pendapatan_vendor($_POST['id_vendor'],$_POST['tgl_transfer'],$_POST['pendapatan_asli'],$_POST['potongan'],$_POST['jumlah'],$_POST['catatan']);
}
if($aksi == "hapus_toko"){ 	
 	$db->hapus_toko($_GET['id']);
 }
if($aksi == "hapus_blog"){ 	
 	$db->hapus_blog($_GET['id']);
 }


?>