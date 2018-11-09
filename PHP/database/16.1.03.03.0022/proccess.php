<?php

$servername = "localhost";
$username = "admin";
$password = "sony";
$dbname = "rental";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

include 'class_tanggal.php';

$tanggal = new tanggal;

$rental = $_POST['rental'];
$id = $_POST['id'];
$mobil = $_POST['mobil'];

$berangkat = $_POST['pick_date'];
$tgl_1 = $tanggal->jin_date_sql($berangkat);

$kembali = $_POST['drop_date'];
$tgl_2 = $tanggal->jin_date_sql($kembali);

$datetime1 = new DateTime($berangkat);
$datetime2 = new DateTime($kembali);
$difference = $datetime1->diff($datetime2);
$selisih = $difference->days;

if (isset($_POST['submit_add'])) {
	$sql = "INSERT INTO rental(no_rental, id_pelanggan, no_mobil, tgl_rental, tgl_kembali, selisih) 
			VALUES ('$rental','$id','$mobil',$tgl_1,$tgl_2,$selisih)";
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