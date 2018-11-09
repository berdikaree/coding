<?php
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>mhs add</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php include 'menu.php';?>
		<h2>Tabel Mahasiswa</h2>
		<button><a href="krs.php">VIEW</a></button>
		<button><a href="krs_add.php">ADD</a></button>
		<br>
		<form name="myform" action="krs_proc.php" method="POST">
			<table align="center" class="left">
				<tbody>
					<tr>
						<td>NPM</td>
						<td>
							<select name="npm" id="npm">
								<?php 
									$sql = "SELECT * FROM mhs ORDER BY nama";
									$result = $conn->query($sql);
									if ($result->num_rows > 0); 
										while($row = $result->fetch_assoc()){
											echo "<option value='".$row['npm']."'>".$row['nama']."</option>";
										}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Mata Kuliah</td>
						<td>
							<select name="mk" id="mk">
								<?php 
									$sql = "SELECT * FROM mk ORDER BY nama";
									$result = $conn->query($sql);
									if ($result->num_rows > 0); 
										while($row = $result->fetch_assoc()){
											echo "<option value='".$row['kode']."'>".$row['nama']."</option>";
										}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Semester</td>
						<td><input type="text" name="sem" id="sem" placeholder="GANJIL / GENAP"></td>
					</tr>
					<tr>
						<td>Tahun AKademik</td>
						<td>
							<select name="ta" id="ta">
								<?php 
									$sql = "SELECT * FROM ta ORDER BY nama";
									$result = $conn->query($sql);
									if ($result->num_rows > 0); 
										while($row = $result->fetch_assoc()){
											echo "<option value='".$row['id']."'>".$row['nama']."</option>";
										}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Nilai</td>
						<td>
							<input type="text" name="nilai" id="nilai">
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit_add" id="submit_add" value="SIMPAN"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</body>
</html>