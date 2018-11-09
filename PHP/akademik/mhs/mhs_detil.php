<?php
$servername = "localhost";
$username = "admin";
$password = "sony";
$dbname = "unp_akademik";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*else 
	echo "Connection Success";*/

$id = $_GET['npm'];
$sql = "SELECT * FROM mhs WHERE npm = '$id'";
$result = $conn->query($sql);
$dat = $result->fetch_array(MYSQLI_BOTH);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mahasiswa</title>
</head>
<body>

	<div align="center">
		<h3 align="center">Mhs - Detil</h3>
		<a href="mhs_add.php">Tambah</a> | <a href="mhs.php">Lihat</a>
	</div>

	<form action="mhs_proc.php" name="myform" method="post">
		<table width="50%" align="center">
			<tr>
				<td>NPM</td>
				<td>
					<input type="text" name="npm" id="npm" size="10" value="<?= $dat['npm']; ?>">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama" id="nama" size="20" value="<?= $dat['nama']; ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>
					<input type="text" name="alamat" id="alamat" size="20" value="<?= $dat['alamat']; ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit_edit" id="submit_edit" value="Simpan">
					<input type="submit" name="submit_delete" id="submit_delete" value="Hapus">
				</td>
			</tr>
		</table>
	</form>
	
</body>
</html>