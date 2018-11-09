<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM krs WHERE id='$id'";
	$res = $conn->query($sql);
	$dat = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>krs edit</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php include 'menu.php';?>
		<h2>Tabel KRS Mahasiswa</h2>
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
									$sql_npm = "SELECT * FROM mhs ORDER BY nama";
									$res_npm = $conn->query($sql_npm);
									if ($res_npm->num_rows > 0); 
										while($dat_npm = $res_npm->fetch_assoc()){
											if ($dat_npm['npm']==$dat['mhs_npm'])
												$selected = "selected='selected'";
											else
												$selected = "";
											echo "<option value='".$dat_npm['npm']."' $selected>".$dat_npm['nama']."</option>";
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
									$sql_mk = "SELECT * FROM mk ORDER BY nama";
									$res_mk = $conn->query($sql_mk);
									if ($res_mk->num_rows > 0); 
										while($dat_mk = $res_mk->fetch_assoc()){
											if ($dat_mk['kode']==$dat['mk_kode'])
												$selected = "selected='selected'";
											else
												$selected = "";
											echo "<option value='".$dat_mk['kode']."' $selected>".$dat_mk['nama']."</option>";
										}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Semester</td>
						<td>
							<input type="text" name="sem" id="sem" placeholder="GANJIL / GENAP" value="<?php echo $dat['sem']?>">
						</td>
					</tr>
					<tr>
						<td>Tahun AKademik</td>
						<td>
							<select name="ta" id="ta">
								<?php 
									$sql_ta = "SELECT * FROM ta ORDER BY nama";
									$res_ta = $conn->query($sql_ta);
									if ($res_ta->num_rows > 0); 
										while($dat_ta = $res_ta->fetch_assoc()){
											if ($dat_ta['id']==$dat['ta_id'])
												$selected = "selected='selected'";
											else
												$selected = "";
											echo "<option value='".$dat_ta['id']."' $selected>".$dat_ta['nama']."</option>";
										}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Nilai</td>
						<td>
							<input type="text" name="nilai" id="nilai" value="<?php echo $dat['nilai']?>">
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit_edit" id="submit_edit" value="SIMPAN">
							<input type="hidden" name="id_old" id="id_old" value="<?= $dat['id']; ?>">
							<input type="submit" name="submit_delete" id="submit_delete" value="HAPUS"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</body>
</html>