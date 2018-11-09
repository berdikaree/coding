<?php

	if (isset($_POST['a']) && isset($_POST['b'])) {
		$a = $_POST['a'];
		$b = $_POST['b'];

		if (isset($_POST['tambah'])) {
			$c = $a + $b;
		}
		if (isset($_POST['kurang'])) {
			$c = $a - $b;
		}
		if (isset($_POST['kali'])) {
			$c = $a * $b;
		}
		if (isset($_POST['bagi'])) {
			$c = $a / $b;
		}
		if (isset($_POST['mod'])) {
			$c = $a % $b;
		}
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>16.1.03.03.0022</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		.lebar {
			width: 6.5%;
			text-align: center;
			font-weight: bold;
		}
		.tebal {
			font-weight: bold;
		}
		input {
            text-align: center;
            text-align: center;
            font-weight: bold;
        }
	</style>
</head>
<body>

	<table border="1">
		<tr>
			<td>
                <div align="center">
                    <h2  class="tebal">Menghitung Luas dan Volume Balok</h2>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: blue; color: white; font-weight: bold;">Panjang</span>
                        <input placeholder="Panjang" required="" class="form-control" type="text" name='panjang' id="panjang" value="<?php if (isset($panjang)) echo $panjang ?>" >
                        <span class="input-group-addon" style="font-weight: bold;">cm</span>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: blue; color: white; font-weight: bold;">Lebar&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <input placeholder="Lebar" required="" class="form-control" type="text" name='lebar' id="lebar" value="<?php if (isset($lebar)) echo $lebar ?>">
                        <span class="input-group-addon" style="font-weight: bold;">cm</span>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: blue; color: white; font-weight: bold;">Tinggi&nbsp;&nbsp;&nbsp;</span>
                        <input placeholder="Tinggi" required="" class="form-control" type="text" name='tinggi' id="tinggi" value="<?php if (isset($tinggi)) echo $tinggi ?>">
                        <span class="input-group-addon" style="font-weight: bold;">cm</span>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: blue; color: white; font-weight: bold;">Volume&nbsp;</span>
                        <input placeholder="Volume" class="form-control" type="text" name="vol" id="vol" value="<?php if (isset($vol)) echo $vol ?>">
                        <span class="input-group-addon" style="font-weight: bold;">cm^3</span>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: blue; color: white; font-weight: bold;">Luas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <input placeholder="Luas" class="form-control" type="text" name="luas" id="luas" value="<?php if (isset($luas)) echo $luas ?>">
                        <span class="input-group-addon" style="font-weight: bold;">cm^2</span>
                    </div>
                </div>
			</td>
			<td>
				<div align="center">
					<h2 class="tebal">Kalkulator Sederhana</h2>
					<form action="kalkulator.php" method="POST">
						<h4 class="tebal">Input</h4>
						<input type="text" name="a" value="<?php if (isset($a)) echo $a?>" class="lebar form-inline" required placeholder="Angka"> 
						<input type="text" name="b" value="<?php if (isset($b)) echo $b?>" class="lebar form-inline" required placeholder="Angka">
						=
						<input type="text" name="c" value="<?php if (isset($c)) echo $c?>" class="lebar form-inline" placeholder="Angka">
						<br><br>
						<h4 class="tebal">Operator</h4>
						<input type="submit" name="tambah" value="+" class="btn btn-primary tebal">
						<input type="submit" name="kurang" value="-" class="btn btn-primary tebal">
						<input type="submit" name="kali" value="x" class="btn btn-primary tebal">
						<input type="submit" name="bagi" value=":" class="btn btn-primary tebal">
						<input type="submit" name="mod" value="mod" class="btn btn-primary tebal">
					</form>

					<h2 class="tebal">Konversi Nilai Mata Kuliah</h2>
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: blue; color: white; font-weight: bold;">Nilai Angka</span>
                        <input placeholder="Nilai Angka" required="" class="form-control" type="text" name='nilai' id="nilai" value="<?php if (isset($nilai)) echo $nilai ?>" >
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: blue; color: white; font-weight: bold;">Luas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <input placeholder="Konversi" class="form-control" type="text" name="konversi" id="konversi" value="<?php if (isset($konversi)) echo $konversi ?>">
                    </div>
				</div>
			</td>
			<td>
				<div align="center">
                    <h2 class="tebal">Menghitung Luas dan Volume Bola</h2>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: blue; color: white; font-weight: bold;">Jari - Jari</span>
                        <input placeholder="Jari - Jari" required="" class="form-control" type="text" name='jari' id="jari" value="<?php if (isset($jari)) echo $jari ?>" >
                        <span class="input-group-addon" style="font-weight: bold;">cm</span>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: blue; color: white; font-weight: bold;">Volume&nbsp;&nbsp;</span>
                        <input placeholder="Volume" class="form-control" type="text" name="vol2" id="vol2" value="<?php if (isset($vol2)) echo $vol2 ?>">
                        <span class="input-group-addon" style="font-weight: bold;">cm^3</span>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: blue; color: white; font-weight: bold;">Luas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <input placeholder="Luas" class="form-control" type="text" name="luas2" id="luas2" value="<?php if (isset($luas2)) echo $luas2 ?>">
                        <span class="input-group-addon" style="font-weight: bold;">cm^2</span>
                    </div>
                </div>
			</td>
		</tr>
	</table>
	
</body>
</html>
<script type="text/javascript">
    $(document).ready(function() {
        $('input').keyup(function() {
            hitung();
        })
        function hitung() {
            var panjang=$('#panjang').val();
            var lebar=$('#lebar').val();
            var tinggi=$('#tinggi').val();
            var jari=$('#jari').val();
            var nilai=$('#nilai').val();
            $.ajax({
                url: 'konversi.php',
                type: 'POST',
                data: 'nilai='+nilai,
                success : function (res) {
                    $('#konversi').val(res);
                }
            })
            $.ajax({
                url: 'luas_balok.php',
                type: 'POST',
                data: 'panjang='+panjang+'&lebar='+lebar+'&tinggi='+tinggi,
                success : function (res) {
                    $('#luas').val(res);
                }
            })
            $.ajax({
                url: 'volume_balok.php',
                type: 'POST',
                data: 'panjang='+panjang+'&lebar='+lebar+'&tinggi='+tinggi,
                success : function (res) {
                    $('#vol').val(res);
                }
            })
            $.ajax({
                url: 'luas_bola.php',
                type: 'POST',
                data: 'jari='+jari,
                success : function (res) {
                    $('#luas2').val(res);
                }
            })
            $.ajax({
                url: 'volume_bola.php',
                type: 'POST',
                data: 'jari='+jari,
                success : function (res) {
                    $('#vol2').val(res);
                }
            })
        }
    })
</script>