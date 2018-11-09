<?php
$servername = "localhost";
$username = "admin";
$password = "sony";
$dbname = "bootcamp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*else 
	echo "Connection Success";*/

$id = $_GET['id'];
$sql = "SELECT * FROM merk WHERE id = '$id'";
$result = $conn->query($sql);
$dat = $result->fetch_array(MYSQLI_BOTH);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Merk</title>
</head>
<body>

	<div align="center">
		<h3 align="center">Merk - Detil</h3>
		<a href="merk_add.php">Tambah</a> | <a href="merk.php">Lihat</a>
	</div>
	<br>
	<form action="merk_proc.php" method="POST" name="myform">
		<table align="center">
			<tr>
				<td>Kode</td>
				<td>
					<input type="text" name="id" id="id" size="5" value="<?= $dat['id']; ?>">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama" id="nama" size="20" value="<?= $dat['nama']; ?>">
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