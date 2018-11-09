<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Merk</title>
</head>
<body>

	<div align="center">
		<h3 align="center">Merk - Tambah</h3>
		<a href="merk_add.php">Tambah</a> | <a href="merk.php">Lihat</a>
	</div>
	<br>
	<form action="merk_proc.php" method="POST" name="myform">
		<table align="center">
			<tr>
				<td>Kode</td>
				<td>
					<input type="text" name="id" id="id" size="5">
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