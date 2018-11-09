<?php
$servername = "localhost";
$username = "admin";
$password = "sony";
$dbname = "unp_akademik";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

if(isset($_POST['submit_add'])){
	$sql = "INSERT INTO mhs
			(npm,nama,alamat) VALUES
			('$npm','$nama','$alamat')";
	if (!$conn->query($sql))
		die('Simpan Mhs Gagal'.$sql);
	else{
		header("Location: mhs.php");
		exit();
	}
}

if(isset($_POST['submit_edit'])){
	$sql = "UPDATE mhs
			SET npm='$npm', nama='$nama', alamat='$alamat'
			WHERE npm='$npm';";
	if (!$conn->query($sql))
		die('Edit Mhs Gagal'.$sql);
	else{
		header("Location: mhs.php");
		exit();
	}
}

if(isset($_POST['submit_delete'])){
	$sql = "DELETE FROM mhs
			WHERE npm='$npm';";
	if (!$conn->query($sql))
		die('Hapus Mhs Gagal'.$sql);
	else{
		header("Location: mhs.php");
		exit();
	}
}

?>