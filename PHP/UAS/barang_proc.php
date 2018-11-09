<?php

	include 'koneksi.php';

	$nama = $_POST['kategori'];

	if (isset($_POST['submit'])) {
		$sql = "INSERT INTO kategori
				(kategori)
				VALUES ('$nama')";
		if (!$connect->query($sql))
			die('Simpan Kategori Gagal'.$sql);
		else {
			header("Location: kategori.php");
			exit();
		}
	}

	if(isset($_POST['submit_update'])){
		$id_old = $_POST['id_old'];
		$sql = "UPDATE kategori
				SET kategori='$nama'
				WHERE id='$id_old'";
		if (!$connect->query($sql))
			die('Update Kategori Gagal'.$sql);
		else{
			header("Location: kategori.php");
			exit();
		}
	}

	$id = $_GET['id'];
	if(isset($id)){
		$sql = "DELETE FROM kategori
				WHERE id='$id';";
		if (!$connect->query($sql))
			die('Hapus Kategori Gagal');
		else{
			header("Location: kategori.php");
			exit();
		}
	}
?>