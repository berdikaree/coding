<?php 

include 'host.php';

$sql = "SELECT * FROM kamar ORDER BY id";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kamar</title>
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
		<h2 align="center">KAMAR</h2>
		<h3 align="center"><a href="penghuni.php">PENGHUNI</a> || <a href="kamar.php">KAMAR</a></h3>
		<a href="kamar_add.php">TAMBAH</a> | <a href="kamar.php">LIHAT</a>
	</div>
	<br>
	<table width="50%" align="center" style="border-style: solid; border-radius: 10px; border-color: blue;">
		<thead>
			<tr>
				<th width="5%">NO</th>
				<th>ID</th>
				<th>NAMA</th>
				<th width="10%">Action</th>
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
								<td><a href='kamar_proc.php?id=".$row['id']."'>Hapus</a>||<a href='kamar_detil.php?id=".$row['id']."'>Edit</a></td>
							</tr>";
					}
				} 
				
			?>
		</tbody>
	</table>

</body>
</html>