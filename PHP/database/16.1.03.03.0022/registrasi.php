<?php 
	include 'host.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>16.1.03.03.0022</title>
	<script type="text/javascript" src="jquery-3.2.1.js"></script>
	<link rel="stylesheet" href="bootstrap.min.css">
	<style type="text/css">
		h1:hover {color: blue;}
		button {
			height: 50px;
			font-size: 15px;
			color: white;
			font-weight: bold;
			background-color: #1939FD;
		}
		a {
			color: white;
			text-decoration: none;
		}
		a:hover {color: black;}
		button:hover {background-color: #00D5FC;}
		form div {
			font-weight: bold;
		}
		input {
			text-align: center;
		}
	</style>
</head>
<body>

	<div align="center">
		<h1>SONY DWI KURNIAWAN</h1>
		<h1>16.1.03.03.0022</h1>
	
		<a href="index.php"><button><</button></a>
		<h2>Registrasi Pelanggan</h2>
	</div>
	<br>
	<div align="center">
		<form action="proses.php" name="myform" method="post">
			<div>
				ID Pelanggan : <br>
				<input type="text" maxlength="5" name="id" id="id" placeholder="Masukkan Teks">
			</div>
			<div>
				Nama : <br>
				<input type="text" maxlength="20" name="nama" id="nama" placeholder="Masukkan Teks">
			</div>
			<div>
				Kartu Identitas : <br>
				<select name="jenis" id="jenis">
					<option value="">Pilih Jenis</option>
					<?php 
						$sql = "SELECT * FROM identitas ORDER BY id";
						$result = $conn->query($sql);
						if ($result->num_rows > 0); 
							while($row = $result->fetch_assoc()){
								echo "<option value='".$row['id']."'>".$row['jenis']."</option>";
							}
					?>
				</select>
			</div>
			<div>
				Alamat : <br>
				<input type="text" maxlength="50" name="alamat" id="alamat" placeholder="Masukkan Teks">
			</div>
			<div>
				Kota : <br>
				<select name="kota" id="kota">
					<option value="">Pilih Jenis</option>
					<?php 
						$sql = "SELECT * FROM kota ORDER BY id";
						$result = $conn->query($sql);
						if ($result->num_rows > 0); 
							while($row = $result->fetch_assoc()){
								echo "<option value='".$row['id']."'>".$row['kota']."</option>";
							}
					?>
				</select>
			</div>
			<div>
				Telepon : <br>
				<input type="text" maxlength="12" name="telp" id="telp" placeholder="Masukkan Teks">
			</div>
			<div>
				Tanggal : <br>
				<input type="date"  name="tanggal" id="tanggal" placeholder="Masukkan Tanggal">
			</div>
			<br>
			<div>
				<input type="submit" name="submit_add" id="submit_add" value="Submit">
				<input type="reset">
			</div>
			
		</form>
	</div>
	
</body>
</html>
<!-- <script type="text/javascript">
	$(document).ready(function() {
		$('#id').keyup(function(){
			//alert("Belajar jQuery");
			var kode = $('#id').val();
			$.ajax({
				type : "POST",
				url  : "barang_ajax.php",
				data : 'kode='+kode,
				success : function(res){
					var hasil = res.split('|');
					if (hasil[0]==0) {
						$('#ket').html('Kode Belum Digunakan');
					}
					else {
						$('#ket').html('Kode Sudah Digunakan || '+hasil[2]);
					}
				}
			})
		})
	})
</script> -->