<?php
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>mk</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php include 'menu.php';?>
		<h2>Tabel Mata Kuliah</h2>
		<button><a href="mk.php">VIEW</a></button>
		<button><a href="mk_add.php">ADD</a></button>
		<br>
		<table width='50%' border='1' align="center">
			<thead>
				<tr>
					<th width='5%'>No.</th>
					<th width='5%'>Kode</th>
					<th>Mata Kuliah</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql = "SELECT * FROM mk";
					$res = $conn->query($sql);
					if($res->num_rows > 0){
						$i = 0;
						while($dat = $res->fetch_assoc()){
							$i++;
							echo "<tr>
								<td>$i</td>
								<td><a href='mk_detil.php?kode=".$dat['kode']."'>".
								$dat["kode"]."</a></td>
								<td>".$dat["nama"]."</td>
							</tr>";
						}
					}
				?>
			</tbody>
		</table>
	</body>
</html>