<?php
include 'host.php';

$id = $_POST['id'];
$nama = $_POST['nama'];

if(isset($_POST['submit_add'])){
	$sql = "INSERT INTO kamar
			(id,nama) VALUES
			('$id','$nama')";
	if (!$conn->query($sql))
		die('Simpan kamar Gagal');
	else{
		header("Location: kamar.php");
		exit();
	}
}

if(isset($_POST['submit_edit'])){
	$id_old = $_POST['id_old'];
	$sql = "UPDATE kamar
			SET id='$id', nama='$nama'
			WHERE id='$id_old';";
	if (!$conn->query($sql))
		die('Edit kamar Gagal'.$sql);
	else{
		header("Location: kamar.php");
		exit();
	}
}

$id = $_GET['id'];
if((isset($_POST['submit_delete']))||(isset($id))){
	$sql = "DELETE FROM kamar
			WHERE id='$id';";
	if (!$conn->query($sql))
		die('Hapus kamar Gagal');
	else{
		header("Location: kamar.php");
		exit();
	}
}

?>