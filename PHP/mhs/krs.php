<?php
	include 'koneksi.php';

	$sql = "SELECT krs.id as id, mhs.nama as npm, mk.nama as mk, krs.sem as sem, ta.nama as ta, krs.nilai as nilai
			FROM mhs,krs,mk,ta 
			WHERE mhs.npm=krs.mhs_npm AND mk.kode=krs.mk_kode AND ta.id=krs.ta_id";
	$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>krs</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php include 'menu.php';?>
		<h2>Tabel KRS Mahasiswa</h2>
		<button><a href="krs.php">VIEW</a></button>
		<button><a href="krs_add.php">ADD</a></button>
		<br>
		<table width='75%' border='1' align="center">
			<thead>
				<tr>
					<th width='5%'>No.</th>
					<th width='5%'>ID</th>
					<th width='20%'>Mahasiswa</th>
					<th width='20%'>Mata Kuliah</th>
					<th width="10%">Semester</th>
					<th width="10%">Tahun Akademik</th>
					<th width="5%">Nilai</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if ($result->num_rows > 0) {
					$i = 0;
					while($row = $result->fetch_assoc()){
						$i++;
						echo "<tr>
								<td>$i</td>
								<td><a href='krs_detil.php?id=".$row['id']."'>".$row["id"]."</a></td>
								<td>".$row['npm']."</td>
								<td>".$row['mk']."</td>
								<td>".$row['sem']."</td>
								<td>".$row['ta']."</td>
								<td>".$row['nilai']."</td>
							</tr>";
					}
				} 
				
			?>
			</tbody>
		</table>
	</body>
</html>