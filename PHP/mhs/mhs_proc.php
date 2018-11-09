<?php

	include 'koneksi.php';

	if(isset($_POST['submit_add'])){
		$npm = $_POST['npm'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$sql = "INSERT INTO mhs (npm,nama,alamat) VALUES ('$npm','$nama','$alamat')";
		if(!$conn->query($sql))
			die('Tambah MHS Gagal');
		else
			header("Location: mhs.php");
	}

	if(isset($_POST['submit_edit'])){
		$npm_old = $_POST['npm_old'];
		$npm = $_POST['npm'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$sql = "UPDATE mhs SET npm='$npm', nama='$nama', alamat='$alamat' WHERE npm='$npm_old'";
		if(!$conn->query($sql))
			die('Update MHS Gagal');
		else
			header("Location: mhs.php");
	}

	if(isset($_POST['submit_delete'])){
		$npm = $_POST['npm'];
		$sql = "DELETE FROM mhs WHERE npm='$npm'";
		if(!$conn->query($sql))
			die('Hapus MHS Gagal');
		else
		header("Location: mhs.php");
	}
?>