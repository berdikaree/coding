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

$sql = "SELECT * FROM supplier ORDER BY nama";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Supplier</title>
</head>
<body>

	<div align="center">
		<h3 align="center">Supplier</h3>
		<a href="supplier_add.php">Tambah</a> | <a href="supplier.php">Lihat</a>
	</div>
	<br>
	<table width="50%" align="center" border="1">
		<thead>
			<tr>
				<th width="5%">No.</th>
				<th width="10%">ID</th>
				<th>Nama</th>
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
								<td><a href='supplier_detil.php?id=".$row['id']."'>".$row['id']."</a></td>
								<td>".$row['nama']."</td>
							</tr>";
					}
				} 
				
			?>
		</tbody>
	</table>
	
</body>
</html>