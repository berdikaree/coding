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

$sql = "SELECT * FROM rental ORDER BY no_transaksi";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RENTAL</title>
</head>
<body>

	<br>
	<table width="50%" align="center" border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>No. Transaksi</th>
				<th>No. Pelanggan</th>
				<th>No. Mobil</th>
				<th>Tanggal Rental</th>
				<th>Tanggal Kembali</th>
				<th>Harga Sewa</th>
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
								<td>".$row['no_transaksi']."</td>
								<td>".$row['no_pelanggan']."</td>
								<td>".$row['no_mobil']."</td>
								<td>".$row['tgl_rental']."</td>
								<td>".$row['tgl_kembali']."</td>
								<td>".$row['harga_sewa']."</td>
							</tr>";
					}
				} 
				
			?>
		</tbody>
	</table>
	
</body>
</html>