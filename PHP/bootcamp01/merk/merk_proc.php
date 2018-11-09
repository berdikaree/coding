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
	$sql = "INSERT INTO merk
			(id,nama) VALUES
			('$id','$nama')";
	if (!$conn->query($sql))
		die('Simpan merk Gagal');
	else{
		header("Location: merk.php");
		exit();
	}
}

if(isset($_POST['submit_edit'])){
	$sql = "UPDATE merk
			SET id='$id', nama='$nama'
			WHERE id='$id';";
	if (!$conn->query($sql))
		die('Edit merk Gagal');
	else{
		header("Location: merk.php");
		exit();
	}
}

if(isset($_POST['submit_delete'])){
	$sql = "DELETE FROM merk
			WHERE id='$id';";
	if (!$conn->query($sql))
		die('Hapus merk Gagal');
	else{
		header("Location: merk.php");
		exit();
	}
}

?>