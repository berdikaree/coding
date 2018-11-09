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

$sql = "SELECT B.*, S.nama as s_nama, M.nama as m_nama, T.nama as t_nama, P.nama as p_nama
		FROM barang B
		JOIN satuan S ON B.satuan=S.id
		JOIN merk M ON B.merk=M.id
		JOIN tipe T ON B.tipe=T.id
		JOIN supplier P ON B.supplier=P.id
		ORDER BY B.nama";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Barang</title>
</head>
<body>

	<div align="center">
		<h3 align="center">Barang</h3>
		<a href="barang_add.php">Tambah</a> | <a href="barang.php">Lihat</a>
	</div>
	<br>
	<table width="50%" align="center" border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>ID</th>
				<th>Nama</th>
				<th>Satuan</th>
				<th>Harga</th>
				<th>Merk</th>
				<th>Tipe</th>
				<th>Supplier</th>
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
								<td><a href='barang_detil.php?id=".$row['id']."'>".$row['id']."</a></td>
								<td>".$row['nama']."</td>
								<td>".$row['s_nama']."</td>
								<td>".$row['harga']."</td>
								<td>".$row['m_nama']."</td>
								<td>".$row['t_nama']."</td>
								<td>".$row['p_nama']."</td>
							</tr>";
					}
				} 
				
			?>
		</tbody>
	</table>
	
</body>
</html>