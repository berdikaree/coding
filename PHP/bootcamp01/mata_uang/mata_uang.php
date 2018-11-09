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

$sql = "SELECT * FROM mata_uang ORDER BY kode";
$result = $conn->query($sql);

?>

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
	<table width="50%" align="center" border="1">
		<thead>
			<tr>
				<th width="5%">No.</th>
				<th width="20%">Kode</th>
				<th>Nama Uang</th>
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
								<td><a href='mata_uang_detil.php?kode=".$row['kode']."'>".$row['kode']."</a></td>
								<td>".$row['nama_uang']."</td>
							</tr>";
					}
				} 
				
			?>
		</tbody>
	</table>
	
</body>
</html>