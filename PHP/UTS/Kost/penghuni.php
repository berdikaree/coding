<?php
	include 'host.php';

	$sql = "SELECT P.*, K.nama as k_nama
			FROM penghuni P
			JOIN kamar K ON P.kamar_id=K.id
			ORDER BY P.id";
	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Penghuni</title>
	<style>
		th, td {
		    padding: 8px;
		    text-align: center;
		    border-bottom: 1px solid blue;
		    border-right: 1px solid blue;
		}
		tbody tr:hover{background-color:#75FBE7}
		a:hover{background-color: #1A39F3; color: white;}
		div h3 a:hover{background-color: #FF0000; color: white;}
	</style>
</head>
<body>

	<div align="center">
		<h2 align="center">PENGHUNI</h2>
		<h3 align="center"><a href="penghuni.php">PENGHUNI</a> || <a href="kamar.php">KAMAR</a></h3>
		<a href="penghuni_add.php">TAMBAH</a> | <a href="penghuni.php">LIHAT</a>
	</div>
	<br>
	<table width="50%" align="center" style="border-style: solid; border-radius: 10px; border-color: blue;">
		<thead>
			<tr>
				<th>No.</th>
				<th>ID</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Kamar</th>
				<th>Action</th>
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
								<td>".$row['id']."</td>
								<td>".$row['nama']."</td>
								<td>".$row['alamat']."</td>
								<td>".$row['k_nama']."</td>
								<td><a href='penghuni_proc.php?id=".$row['id']."'>Hapus</a>||<a href='penghuni_detil.php?id=".$row['id']."'>Edit</a></td>
							</tr>";
					}
				} 
				
			?>
		</tbody>
	</table>
	
</body>
</html>