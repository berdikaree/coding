<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kamar</title>
	<script type="text/javascript" src="jquery-3.2.1.js"></script>
	<style>
		a:hover{background-color: #1A39F3; color: white;}
		div h3 a:hover{background-color: #FF0000; color: white;}
	</style>
</head>
<body>

	<div align="center">
		<h2 align="center">KAMAR - TAMBAH</h2>
		<h3 align="center"><a href="penghuni.php">PENGHUNI</a> || <a href="kamar.php">KAMAR</a></h3>
		<a href="kamar_add.php">TAMBAH</a> | <a href="kamar.php">LIHAT</a>
	</div>
	<br>
	<form action="kamar_proc.php" method="POST" name="myform">
		<table align="center">
			<tr>
				<td>Kode</td>
				<td>
					<input type="text" name="id" id="id" size="5">
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
				url  : "kamar_ajax.php",
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