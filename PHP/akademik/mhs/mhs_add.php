<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mahasiswa</title>
</head>
<body>

	<div align="center">
		<h3 align="center">Mhs - Tambah</h3>
		<a href="mhs_add.php">Tambah</a> | <a href="mhs.php">Lihat</a>
	</div>
	<br>
	<form action="mhs_proc.php" method="POST" name="myform">
		<table align="center">
			<tr>
				<td>NPM</td>
				<td>
					<input type="text" name="npm" id="npm" size="10">
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
				<td></td>
				<td>
					<input type="submit" name="submit_add" id="submit_add" value="Simpan">
				</td>
			</tr>
		</table>
	</form>
	
</body>
</html>