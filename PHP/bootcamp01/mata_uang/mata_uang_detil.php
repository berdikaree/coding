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

$kode = $_GET['kode'];
$sql = "SELECT * FROM mata_uang WHERE kode = '$kode'";
$result = $conn->query($sql);
$dat = $result->fetch_array(MYSQLI_BOTH);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mata Uang</title>
</head>
<body>

	<div align="center">
		<h3 align="center">Mata Uang - Detil</h3>
		<a href="mata_uang_add.php">Tambah</a> | <a href="mata_uang.php">Lihat</a>
	</div>

	<form action="mata_uang_proc.php" name="myform" method="post">
		<table width="50%" align="center">
			<tr>
				<td>Kode</td>
				<td>
					<input type="text" name="kode" id="kode" size="5" value="<?= $dat['kode']; ?>">
				</td>
			</tr>
			<tr>
				<td>Nama Uang</td>
				<td>
					<input type="text" name="nama" id="nama" size="20" value="<?= $dat['nama_uang']; ?>">
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