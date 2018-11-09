<?php

include 'host.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telp = $_POST['telp'];
$tanggal = $_POST['tanggal'];

if (isset($_POST['submit_add'])) {
	$sql = "INSERT INTO id_pelanggan(id_pelanggan, jenis_id, nama, alamat, kota, telp, tanggal) 
			VALUES ('$id','$jenis','$nama','$alamat','$kota','$telp','$tanggal')";
	
	if (!$conn->query($sql))
		die('Edit Gagal'.$sql);
	else{
		header("Location: index.php");
		exit();
	}
}

if(isset($_POST['submit_edit'])){
	$id_old = $_POST['id_old'];
	$sql = "UPDATE barang
			SET id='$id', nama='$nama', satuan='$satuan', harga='$harga',
			merk='$merk', tipe='$tipe', supplier='$supplier'
			WHERE id='$id_old'";
	if (!$conn->query($sql))
		die('Edit Barang Gagal'.$sql);
	else{
		header("Location: barang.php");
		exit();
	}
}

if(isset($_POST['submit_delete'])){
	$sql = "DELETE FROM barang
			WHERE id='$id';";
	if (!$conn->query($sql))
		die('Hapus Barang Gagal');
	else{
		header("Location: barang.php");
		exit();
	}
}

?>