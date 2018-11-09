<?php
	include 'host.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM penghuni WHERE id = '$id'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Penghuni</title>
	<style>
		a:hover{background-color: #1A39F3; color: white;}
		div h3 a:hover{background-color: #FF0000; color: white;}
	</style>
</head>
<body>

	<div align="center">
		<h2 align="center">PENGHUNI - DETAIL</h2>
		<h3 align="center"><a href="penghuni.php">PENGHUNI</a> || <a href="kamar.php">KAMAR</a></h3>
		<a href="penghuni_add.php">TAMBAH</a> | <a href="penghuni.php">LIHAT</a>
	</div>

	<form action="penghuni_proc.php" name="myform" method="post">
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
				<td>Alamat</td>
				<td>
					<input type="text" name="alamat" id="alamat" size="20" value="<?= $row['alamat']; ?>">
				</td>
			</tr>
			<tr>
				<td>Kamar</td>
				<td>
					<select name="kamar" id="kamar">
						<option value="">Pilih Kamar</option>
						<?php 
							$sql_kam = "SELECT * FROM kamar ORDER BY nama";
							$result_kam = $conn->query($sql_kam);
							if ($result_kam->num_rows > 0); 
								while($row_kam = $result_kam->fetch_assoc()){
									if ($row_kam['id']==$row['kamar_id'])
										$selected = "selected='selected'";
									else
										$selected = "";
									echo "<option value='".$row_kam['id']."' $selected>".$row_kam['nama']."</option>";
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