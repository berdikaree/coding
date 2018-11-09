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

		include 'class_mtk.php';

		$mtk = new matematika;
		$luas = $mtk->luas($tinggi,$lebar,$panjang);
		$volume = $mtk->volume($tinggi,$lebar,$panjang);
		$luas_bola = $mtk->luas_bola($jari);
		$volume_bola = $mtk->volume_bola($jari);
		$huruf = $mtk->konversi($nilai);
	}

	?>

	<form action="luas.php" method="POST">
		<h2>Menghitung Luas Permukaan dan Volume Balok</h2>
		Panjang
		<input type="text" name="panjang" placeholder="Angka" required value="<?php if (isset($panjang)) echo $panjang?>">
		Lebar
		<input type="text" name="lebar" placeholder="Angka" required value="<?php if (isset($lebar)) echo $lebar?>">
		Tinggi
		<input type="text" name="tinggi" placeholder="Angka" required value="<?php if (isset($tinggi)) echo $tinggi?>">
		<input type="submit" name="proses" value="Hitung">
		<br>
		<?php 

			if (isset($_POST['proses'])) {
				
				echo "Luas = ".$luas."<br>";
				echo "Volume = ".$volume;
			}

		?>
		<h2>Menghitung Luas Permukaan dan Volume Bola</h2>
		Jari - Jari
		<input type="text" name="jari" placeholder="Angka" required value="<?php if (isset($jari)) echo $jari?>">
		<input type="submit" name="proses" value="Hitung">
		<br>
		<?php 

			if (isset($_POST['proses'])) {
				
				echo "Luas = ".$luas_bola."<br>";
				echo "Volume = ".$volume_bola;
			}

		?>
		<h2>Mengkonversi Nilai Mata Kuliah Ke Huruf</h2>
		Nilai
		<input type="text" name="nilai" placeholder="Angka" required value="<?php if (isset($nilai)) echo $nilai?>">
		<input type="submit" name="proses" value="Hitung">
		<br>
		<?php 

			if (isset($_POST['proses'])) {
				
				echo "Huruf = ".$huruf."<br>";
			}

		?>
	</form>
	
	
</body>
</html>