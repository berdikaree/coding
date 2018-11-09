<?php

	include 'koneksi.php';

	if(isset($_POST['submit_add'])){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$sql = "INSERT INTO ta (id,nama) VALUES ('$id','$nama')";
		if(!$conn->query($sql))
			die('Tambah Tahun Akademik Gagal');
		else
			header("Location: ta.php");
	}

	if(isset($_POST['submit_edit'])){
		$id_old = $_POST['id_old'];
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$sql = "UPDATE ta SET nama='$nama', id='$id' WHERE id='$id_old'";
		if(!$conn->query($sql))
			die('Edit Tahun Akademik Gagal');
		else
			header("Location: ta.php");
	}

	if(isset($_POST['submit_delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM ta WHERE id='$id'";
		if(!$conn->query($sql))
			die('Hapus Tahun Akademik Gagal');
		else
		header("Location: ta.php");
	}
?>