<!DOCTYPE html>
<html>
	<head>
		<title>mk add</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php include 'menu.php';?>
		<h2>Tabel Mata Kuliah</h2>
		<button><a href="mk.php">VIEW</a></button>
		<button><a href="mk_add.php">ADD</a></button>
		<br>
		<form name="myform" action="mk_proc.php" method="POST">
			<table align="center" class="left">
				<tbody>
					<tr>
						<td>Kode</td>
						<td><input type="text" name="kode" id="kode"></td>
					</tr>
					<tr>
						<td>Nama Mata Kuliah</td>
						<td><input type="text" name="nama" id="nama"></td>
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