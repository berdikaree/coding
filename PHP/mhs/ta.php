<?php
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>ta</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php include 'menu.php';?>
		<h2>Tabel Tahun Akademik</h2>
		<button><a href="ta.php">VIEW</a></button>
		<button><a href="ta_add.php">ADD</a></button>
		<br>
		<table width='50%' border='1' align="center">
			<thead>
				<tr>
					<th width='5%'>No.</th>
					<th width='5%'>ID</th>
					<th>Tahun Akademik</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql = "SELECT * FROM ta";
					$res = $conn->query($sql);
					if($res->num_rows > 0){
						$i = 0;
						while($dat = $res->fetch_assoc()){
							$i++;
							echo "<tr>
								<td>$i</td>
								<td><a href='ta_detil.php?id=".$dat['id']."'>".$dat["id"]."</a></td>
								<td>".$dat["nama"]."</td>
							</tr>";
						}
					}
				?>
			</tbody>
		</table>
	</body>
</html>