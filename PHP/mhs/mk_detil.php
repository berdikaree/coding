<?php
	include 'koneksi.php';
	$kode = $_GET['kode'];
	$sql = "SELECT * FROM mk WHERE kode='$kode'";
	$res = $conn->query($sql);
	$dat = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>mk edit</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php include 'menu.php';?>
		<h2>Tabel Mata Kuliah</h2>
		<button><a href="mk.php">VIEW</a></button>
		<button><a href="mk_add.php">ADD</a></button>
		<br>
		<form name="myform" action="mk_proc.php" method="POST">
			<table align="center" class="left">
				<tbody>
					<tr>
						<td>Kode</td>
						<td><input type="text" name="kode" id="kode" value="<?php echo $dat['kode']?>"></td>
					</tr>
					<tr>
						<td>Mata Kuliah</td>
						<td><input type="text" name="nama" id="nama" value="<?php echo $dat['nama']?>"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit_edit" id="submit_edit" value="SIMPAN">
							<input type="hidden" name="kode_old" id="kode_old" value="<?= $dat['kode']; ?>">
							<input type="submit" name="submit_delete" id="submit_delete" value="HAPUS"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</body>
</html>