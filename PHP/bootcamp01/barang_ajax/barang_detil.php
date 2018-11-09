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

$id = $_GET['id'];
$sql = "SELECT * FROM barang WHERE id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Barang</title>
</head>
<body>

	<div align="center">
		<h3 align="center">Barang - Detil</h3>
		<a href="barang_add.php">Tambah</a> | <a href="barang.php">Lihat</a>
	</div>

	<form action="barang_proc.php" name="myform" method="post">
		<table width="50%" align="center">
			<tr>
				<td>Kode</td>
				<td>
					<input type="text" name="id" id="id" size="5" value="<?= $row['id']; ?>">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama" id="nama" size="20" value="<?= $row['nama']; ?>">
				</td>
			</tr>
			<tr>
				<td>Satuan</td>
				<td>
					<select name="satuan" id="satuan">
						<option value="">Pilih Satuan</option>
						<?php 
							$sql_sat = "SELECT * FROM satuan ORDER BY nama";
							$result_sat = $conn->query($sql_sat);
							if ($result_sat->num_rows > 0); 
								while($row_sat = $result_sat->fetch_assoc()){
									if ($row_sat['id']==$row['satuan'])
										$selected = "selected='selected'";
									else
										$selected = "";
									echo "<option value='".$row_sat['id']."' $selected>".$row_sat['nama']."</option>";
								}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>Rp.
					<input type="text" name="harga" id="harga" size="20" value="<?= $row['harga']; ?>">
				</td>
			</tr>
			<tr>
				<td>Merk</td>
				<td>
					<select name="merk" id="merk">
						<option value="">Pilih Merk</option>
						<?php 
							$sql_merk = "SELECT * FROM merk ORDER BY nama";
							$result_merk = $conn->query($sql_merk);
							if ($result_merk->num_rows > 0); 
								while($row_merk = $result_merk->fetch_assoc()){
									if ($row_merk['id']==$row['merk'])
										$selected = "selected='selected'";
									else
										$selected = "";
									echo "<option value='".$row_merk['id']."' $selected>".$row_merk['nama']."</option>";
								}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tipe</td>
				<td>
					<select name="tipe" id="tipe">
						<option value="">Pilih Tipe</option>
						<?php 
							$sql_tipe = "SELECT * FROM tipe ORDER BY nama";
							$result_tipe = $conn->query($sql_tipe);
							if ($result_tipe->num_rows > 0); 
								while($row_tipe = $result_tipe->fetch_assoc()){
									if ($row_tipe['id']==$row['tipe'])
										$selected = "selected='selected'";
									else
										$selected = "";
									echo "<option value='".$row_tipe['id']."' $selected>".$row_tipe['nama']."</option>";
								}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Supplier</td>
				<td>
					<select name="supplier" id="supplier">
						<option value="">Pilih Supplier</option>
						<?php 
							$sql_sup = "SELECT * FROM supplier ORDER BY nama";
							$result_sup = $conn->query($sql_sup);
							if ($result_sup->num_rows > 0); 
								while($row_sup = $result_sup->fetch_assoc()){
									if ($row_sup['id']==$row['supplier'])
										$selected = "selected='selected'";
									else
										$selected = "";
									echo "<option value='".$row_sup['id']."' $selected>".$row_sup['nama']."</option>";
								}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit_edit" id="submit_edit" value="Simpan">
					<input type="hidden" name="id_old" id="id_old" value="<?= $row['id']; ?>">
					<input type="submit" name="submit_delete" id="submit_delete" value="Hapus">
				</td>
			</tr>
		</table>
	</form>
	
</body>
</html>