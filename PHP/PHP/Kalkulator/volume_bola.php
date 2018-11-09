<?php

	$jari = $_POST['jari'];

	include 'class_mtk.php';
	$mtk = new matematika;

	$volume = $mtk->volume_bola($jari);
	$volume_format = number_format($volume,2);
	echo $volume_format;

?>