<?php

	$nilai = $_POST['nilai'];

	include 'class_mtk.php';
	$mtk = new matematika;

	$konversi = $mtk->konversi($nilai);
	echo $konversi;

?>