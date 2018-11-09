<?php

$servername = "localhost";
$username = "admin";
$password = "sony";
$dbname = "bootcamp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$nama = $_POST['nama'];
$satuan = $_POST['satuan'];
$kode = $_POST['kode'];
$harga = $_POST['harga'];
$merk = $_POST['merk'];
$tipe = $_POST['tipe'];
$supplier = $_POST['supplier'];

if (isset($_POST['submit_add'])) {
	$sql = "INSERT INTO barang
			(id,nama,satuan,kode,harga,merk,tipe,supplier)
			VALUES ('$id','$nama','$satuan','$kode',$harga,'$merk','$tipe','$supplier')";
	if (!$conn->query($sql))
		die('Simpan Barang Gagal'.$sql);
	else {
		header("Location: barang.php");
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