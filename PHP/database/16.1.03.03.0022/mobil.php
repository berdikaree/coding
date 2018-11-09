<?php 

	include 'host.php';

	$sql = "SELECT * FROM mobil ORDER BY no_mobil";
	$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>16.1.03.03.0022</title>
	<style type="text/css">
		h1:hover {color: blue;}
		button {
			height: 50px;
			font-size: 15px;
			color: white;
			font-weight: bold;
			background-color: #1939FD;
		}
		a {
			color: white;
			text-decoration: none;
		}
		a button:hover {background-color: #00D5FC;color: black;}
		th, td {
		    padding: 8px;
		    text-align: center;
		    border-bottom: 1px solid blue;
		    border-right: 1px solid blue;
		}
		tbody tr:hover{background-color:#75FBE7}
		div h3 a:hover{background-color: #FF0000; color: white;}
	</style>
</head>
<body>
	
	<div align="center">
		<h1>SONY DWI KURNIAWAN</h1>
		<h1>16.1.03.03.0022</h1>
	
		<a href="index.php"><button><</button></a>

		<h2 align="center">MOBIL</h2>
	</div>
	<br>
	<table width="50%" align="center" style="border-style: solid; border-radius: 10px; border-color: blue;">
		<thead>
			<tr>
				<th>No Mobil</th>
				<th>No Polisi</th>
				<th>Nama Mobil</th>
				<th>Warna Mobil</th>
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
								<td>".$row['no_mobil']."</td>
								<td>".$row['no_polisi']."</td>
								<td>".$row['nama_mobil']."</td>
								<td>".$row['warna_mobil']."</td>
								<td>".$row['harga_sewa']."</td>
							</tr>";
					}
				} 
				
			?>
		</tbody>
	</table>

</body>
</html>