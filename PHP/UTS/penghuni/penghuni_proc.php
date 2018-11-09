<?php

	include 'host.php';

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$kamar = $_POST['kamar'];

	if (isset($_POST['submit_add'])) {
		$sql = "INSERT INTO penghuni
				(id,nama,alamat,kamar_id)
				VALUES ('$id','$nama','$alamat','$kamar')";
		if (!$conn->query($sql))
			die('Simpan penghuni Gagal'.$sql);
		else {
			header("Location: penghuni.php");
			exit();
		}
	}

	if(isset($_POST['submit_edit'])){
		$id_old = $_POST['id_old'];
		$sql = "UPDATE penghuni
				SET id='$id', nama='$nama', alamat='$alamat', kamar_id='$kamar'
				WHERE id='$id_old'";
		if (!$conn->query($sql))
			die('Edit penghuni Gagal'.$sql);
		else{
			header("Location: penghuni.php");
			exit();
		}
	}

	$id = $_GET['id'];
	if((isset($_POST['submit_delete']))||(isset($id))){
		$sql = "DELETE FROM penghuni
				WHERE id='$id';";
		if (!$conn->query($sql))
			die('Hapus penghuni Gagal');
		else{
			header("Location: penghuni.php");
			exit();
		}
	}
?>