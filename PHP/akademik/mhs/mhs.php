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

$sql = "SELECT * FROM mhs ORDER BY npm";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mahasiswa</title>
</head>
<body>
	
	<div align="center">
		<h3 align="center">Tabel Mahasiswa</h3>
		<a href="mhs_add.php">Tambah</a> | <a href="mhs.php">Lihat</a>
	</div>
	<br>
	<table width="50%" align="center" border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>NPM</th>
				<th>Nama</th>
				<th>Alamat</th>
			</tr>
		</thead>
		<tbody align="center">
			<?php
				if ($result->num_rows > 0) {
					$i = 0;
					while($row = $result->fetch_assoc()){
						$i++;
						echo "<tr>
								<td>$i</td>
								<td><a href='mhs_detil.php?npm=".$row['npm']."'>".$row['npm']."</a></td>
								<td>".$row['nama']."</td>
								<td>".$row['alamat']."</td>
							</tr>";
					}
				} 
			?>
		</tbody>
	</table>
	
</body>
</html>