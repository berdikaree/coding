<?php
	include 'koneksi.php';
	$npm = $_GET['npm'];
	$sql = "SELECT * FROM mhs WHERE npm='$npm'";
	$res = $conn->query($sql);
	$dat = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>mhs edit</title>
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
						<td><input type="text" name="npm" id="npm" value="<?php echo $dat['npm']?>"></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama" id="nama" value="<?= $dat['nama']?>"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input type="text" name="alamat" id="alamat" value="<?= $dat['alamat']?>"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit_edit" id="submit_edit" value="SIMPAN">
							<input type="hidden" name="npm_old" id="npm_old" value="<?php echo $dat['npm']; ?>">
							<input type="submit" name="submit_delete" id="submit_delete" value="HAPUS"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</body>
</html>