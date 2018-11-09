<?php 
	include 'host.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Penghuni</title>
	<script type="text/javascript" src="jquery-3.2.1.js"></script>
	<style>
		a:hover{background-color: #1A39F3; color: white;}
		div h3 a:hover{background-color: #FF0000; color: white;}
	</style>
</head>
<body>

	<div align="center">
		<h2 align="center">PENGHUNI - TAMBAH</h2>
		<h3 align="center"><a href="penghuni.php">PENGHUNI</a> || <a href="kamar.php">KAMAR</a></h3>
		<a href="penghuni_add.php">TAMBAH</a> | <a href="penghuni.php">LIHAT</a>
	</div>
	<br>
	<form action="penghuni_proc.php" name="myform" method="post">
		<table align="center">
			<tr>
				<td>ID</td>
				<td>
					<input type="text" name="id" id="id" size="20">
					<span id="ket"></span>
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama" id="nama" size="20">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>
					<input type="text" name="alamat" id="alamat" size="20">
				</td>
			</tr>
			<tr>
				<td>Kamar</td>
				<td>
					<select name="kamar" id="kamar">
						<option value="">Pilih Kamar</option>
						<?php 
							$sql = "SELECT * FROM kamar ORDER BY nama";
							$result = $conn->query($sql);
							if ($result->num_rows > 0); 
								while($row = $result->fetch_assoc()){
									echo "<option value='".$row['id']."'>".$row['nama']."</option>";
								}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit_add" id="submit_add" value="Simpan">
				</td>
			</tr>
		</table>
	</form>
	
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
		$('#id').keyup(function(){
			//alert("Belajar jQuery");
			var kode = $('#id').val();
			$.ajax({
				type : "POST",
				url  : "penghuni_ajax.php",
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
</script>