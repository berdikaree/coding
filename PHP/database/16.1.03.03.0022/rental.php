<?php 
	include 'host.php';
	 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>16.1.03.03.0022</title>
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
		<h2>Registrasi Rental</h2>
	</div>
	<br>
	<div align="center">
		<form action="proccess.php" name="myform" method="post">
			<div>
				No Rental : <br>
				<input type="text" maxlength="5" name="rental" id="rental" placeholder="Masukkan Teks">
			</div>
			<div>
				ID Pelanggan : <br>
				<select name="id" id="id">
					<option value="">Pilih Pelanggan</option>
					<?php 
						$sql = "SELECT * FROM id_pelanggan ORDER BY id_pelanggan";
						$result = $conn->query($sql);
						if ($result->num_rows > 0); 
							while($row = $result->fetch_assoc()){
								echo "<option value='".$row['id_pelanggan']."'>".$row['nama']."</option>";
							}
					?>
				</select>
			</div>
			<div>
				Nama Mobil : <br>
				<select name="mobil" id="Mobil">
					<option value="">Pilih Jenis</option>
					<?php 
						$sql = "SELECT * FROM mobil ORDER BY no_mobil";
						$result = $conn->query($sql);
						if ($result->num_rows > 0); 
							while($row = $result->fetch_assoc()){
								echo "<option value='".$row['no_mobil']."'>".$row['nama_mobil']." - ".$row['warna_mobil']." - Rp. ".$row['harga_sewa']."</option>";
							}
					?>
				</select>
			</div>
			<div>
				Tanggal Rental : <br>
				<input type="date" class="textbox" id="pick_date" name="pick_date">
			</div>
			<div>
				Tanggal Kembali : <br>
				<input type="date" class="textbox" id="drop_date" name="drop_date">
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