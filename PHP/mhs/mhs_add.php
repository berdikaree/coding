<!DOCTYPE html>
<html>
	<head>
		<title>mhs add</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php include 'menu.php';?>
		<h2>Tabel Mahasiswa</h2>
		<button><a href="mhs.php">VIEW</a></button>
		<button><a href="mhs_add.php">ADD</a></button>
		<br>
		<form name="myform" action="mhs_proc.php" method="POST">
			<table align="center" class="left">
				<tbody>
					<tr>
						<td>NPM</td>
						<td><input type="text" name="npm" id="npm"></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama" id="nama"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input type="text" name="alamat" id="alamat"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit_add" id="submit_add" value="SIMPAN"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</body>
</html>