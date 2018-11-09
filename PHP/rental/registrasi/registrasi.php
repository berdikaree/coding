<?php
$servername = "localhost";
$username = "admin";
$password = "sony";
$dbname = "rental";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*else 
	echo "Connection Success";*/

$sql = "SELECT * FROM registrasi ORDER BY no_registrasi";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>REGISTRASI</title>
</head>
<body>

	<br>
	<table width="50%" align="center" border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>No. Registrasi</th>
				<th>No. Pelanggan</th>
				<th>No. Id</th>
				<th>Nama Pelanggan</th>
				<th>Tanggal Registrasi</th>
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
								<td>".$row['no_registrasi']."</td>
								<td>".$row['no_pelanggan']."</td>
								<td>".$row['no_id']."</td>
								<td>".$row['nama']."</td>
								<td>".$row['tgl_registrasi']."</td>
							</tr>";
					}
				} 
				
			?>
		</tbody>
	</table>
	
</body>
</html>