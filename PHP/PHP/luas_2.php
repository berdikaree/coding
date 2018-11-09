<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
		input {
			text-align: center;
			width: 6%;
		}
	</style>

</head>
<body>

	<?php

	if (isset($_POST['proses'])) {
		$tinggi = $_POST['tinggi'];
		$lebar = $_POST['lebar'];
		$panjang = $_POST['panjang'];
		$jari = $_POST['jari'];
		$nilai = $_POST['nilai'];

		include 'class_luas.php';

		$mtk = new matematika;
		$luas = $mtk->luas($tinggi,$lebar,$panjang);
		$volume = $mtk->volume($tinggi,$lebar,$panjang);
		$luas_bola = $mtk->luasb($jari);
		$volume_bola = $mtk->volume_bola($jari);
		$huruf = $mtk->konversi($nilai);
	}

	?>

	<button onclick="document.getElementById('ketupat').innerHTML='<input type="text" name="panjang" placeholder="Angka" required value="<?php if (isset($panjang)) echo $panjang?>">'">Pascal</button>
		Lebar
	<div id="ketupat"></div>
	
	
</body>
</html>