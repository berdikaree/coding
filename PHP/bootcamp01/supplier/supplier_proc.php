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
	$sql = "INSERT INTO supplier
			(id,nama) VALUES
			('$id','$nama')";
	if (!$conn->query($sql))
		die('Simpan Supplier Gagal'.$sql);
	else{
		header("Location: supplier.php");
		exit();
	}
}

if(isset($_POST['submit_edit'])){
	$sql = "UPDATE supplier
			SET id='$id', nama='$nama'
			WHERE id='$id';";
	if (!$conn->query($sql))
		die('Edit Supplier Gagal');
	else{
		header("Location: supplier.php");
		exit();
	}
}

if(isset($_POST['submit_delete'])){
	$sql = "DELETE FROM supplier
			WHERE id='$id';";
	if (!$conn->query($sql))
		die('Hapus Supplier Gagal');
	else{
		header("Location: supplier.php");
		exit();
	}
}

?>