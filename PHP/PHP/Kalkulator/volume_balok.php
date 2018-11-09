<?php

	$panjang = $_POST['panjang'];
	$lebar = $_POST['lebar'];
	$tinggi = $_POST['tinggi'];

	include 'class_mtk.php';
	$mtk = new matematika;

	$volume = $mtk->volume($panjang,$lebar,$tinggi);
	$volume_format = number_format($volume,2);
	echo $volume_format;

?>