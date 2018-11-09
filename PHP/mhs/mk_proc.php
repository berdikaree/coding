<?php

	include 'koneksi.php';

	if(isset($_POST['submit_add'])){
		$kode = $_POST['kode'];
		$nama = $_POST['nama'];
		$sql = "INSERT INTO mk (kode,nama) VALUES ('$kode','$nama')";
		if(!$conn->query($sql))
			die('Tambah Mata Kuliah Gagal');
		else
			header("Location: mk.php");
	}

	if(isset($_POST['submit_edit'])){
		$kode_old = $_POST['kode_old'];
		$kode = $_POST['kode'];
		$nama = $_POST['nama'];
		$sql = "UPDATE mk SET nama='$nama', kode='$kode' WHERE kode='$kode_old'";
		if(!$conn->query($sql))
			die('Edit Mata Kuliah Gagal');
		else
			header("Location: mk.php");
	}

	if(isset($_POST['submit_delete'])){
		$kode = $_POST['kode'];
		$sql = "DELETE FROM mk WHERE kode='$kode'";
		if(!$conn->query($sql))
			die('Hapus Mata Kuliah Gagal');
		else
		header("Location: mk.php");
	}
?>