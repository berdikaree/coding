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

if(isset($_POST['submit_add'])){
	$sql = "INSERT INTO tipe
			(id,nama) VALUES
			('$id','$nama')";
	if (!$conn->query($sql))
		die('Simpan Tipe Gagal'.$sql);
	else{
		header("Location: tipe.php");
		exit();
	}
}

if(isset($_POST['submit_edit'])){
	$sql = "UPDATE tipe
			SET id='$id', nama='$nama'
			WHERE id='$id';";
	if (!$conn->query($sql))
		die('Edit Tipe Gagal');
	else{
		header("Location: satuan.php");
		exit();
	}
}

if(isset($_POST['submit_delete'])){
	$sql = "DELETE FROM tipe
			WHERE id='$id';";
	if (!$conn->query($sql))
		die('Hapus Tipe Gagal');
	else{
		header("Location: tipe.php");
		exit();
	}
}

?>