<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mata Uang</title>
</head>
<body>

	<div align="center">
		<h3 align="center">Mata Uang - Tambah</h3>
		<a href="mata_uang_add.php">Tambah</a> | <a href="mata_uang.php">Lihat</a>
	</div>
	<br>

	<form action="mata_uang_proc.php" name="myform" method="post">
		<table align="center">
			<tr>
				<td>Kode</td>
				<td>
					<input type="text" name="kode" id="kode" size="5">
				</td>
			</tr>
			<tr>
				<td>Nama Uang</td>
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