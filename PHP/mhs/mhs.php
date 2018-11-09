<?php
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>mhs</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php include 'menu.php';?>
		<h2>Tabel Mahasiswa</h2>
		<button><a href="mhs.php">VIEW</a></button>
		<button><a href="mhs_add.php">ADD</a></button>
		<br>
		<table width='50%' border='1' align="center">
			<thead>
				<tr>
					<th width='5%'>No.</th>
					<th width='15%'>NPM</th>
					<th width='25%'>Nama</th>
					<th>Alamat</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql = "SELECT * FROM mhs";
					$res = $conn->query($sql);
					if($res->num_rows > 0){
						$i = 0;
						while($dat = $res->fetch_assoc()){
							$i++;
							echo "<tr>
								<td>$i</td>
								<td><a href='mhs_detil.php?npm=".$dat['npm']."'>".
								$dat["npm"]."</a></td>
								<td>".$dat["nama"]."</td>
								<td>".$dat["alamat"]."</td>
							</tr>";
						}
					}
				?>
			</tbody>
		</table>
	</body>
</html>