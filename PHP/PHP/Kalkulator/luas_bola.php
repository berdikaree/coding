<?php

	$jari = $_POST['jari'];

	include 'class_mtk.php';
	$mtk = new matematika;

	$luas = $mtk->luas_bola($jari);
	$luas_format = number_format($luas,2);
	echo $luas_format;

?>