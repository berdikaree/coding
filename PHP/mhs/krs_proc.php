<?php

	include 'koneksi.php';

	if(isset($_POST['submit_add'])){
		$npm = $_POST['npm'];
		$mk = $_POST['mk'];
		$sem = $_POST['sem'];
		$ta = $_POST['ta'];
		$nilai = $_POST['nilai'];
		$sql = "INSERT INTO krs (mhs_npm,mk_kode,sem,ta_id,nilai) VALUES ('$npm','$mk','$sem','$ta','$nilai')";
		if(!$conn->query($sql))
			die('Tambah KRS Gagal.'.$sql);
		else
			header("Location: krs.php");
	}

	if(isset($_POST['submit_edit'])){
		$id_old = $_POST['id_old'];
		$npm = $_POST['npm'];
		$mk = $_POST['mk'];
		$sem = $_POST['sem'];
		$ta = $_POST['ta'];
		$nilai = $_POST['nilai'];
		$sql = "UPDATE krs SET mhs_npm='$npm', mk_kode='$mk', sem='$sem', ta_id='$ta', nilai='$nilai' WHERE id='$id_old'";
		if(!$conn->query($sql))
			die('Update KRS Gagal'.$sql);
		else
			header("Location: krs.php");
	}

	// $id = $_GET['id'];
	if(isset($_POST['submit_delete'])){
		$id_old = $_POST['id_old'];
		$sql = "DELETE FROM krs
				WHERE id='$id_old';";
		if (!$conn->query($sql))
			die('Hapus KRS Gagal'.$sql);
		else{
			header("Location: krs.php");
			exit();
		}
	}
?>