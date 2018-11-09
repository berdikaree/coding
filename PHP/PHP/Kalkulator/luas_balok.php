<?php

	$panjang = $_POST['panjang'];
	$lebar = $_POST['lebar'];
	$tinggi = $_POST['tinggi'];

	include 'class_mtk.php';
	$mtk = new matematika;

	$luas = $mtk->luas($panjang,$lebar,$tinggi);
	$luas_format = number_format($luas,2);
	echo $luas_format;

?>