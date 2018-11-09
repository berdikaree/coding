<!DOCTYPE html>
<html>
	<head>
		<title>ta add</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php include 'menu.php';?>
		<h2>Tabel Tahun Akademik</h2>
		<button><a href="ta.php">VIEW</a></button>
		<button><a href="ta_add.php">ADD</a></button>
		<br>
		<form name="myform" action="ta_proc.php" method="POST">
			<table align="center" class="left">
				<tbody>
					<tr>
						<td>ID</td>
						<td><input type="text" name="id" id="id"></td>
					</tr>
					<tr>
						<td>Nama TA</td>
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