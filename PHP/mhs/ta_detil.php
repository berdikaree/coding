<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM ta WHERE id='$id'";
	$res = $conn->query($sql);
	$dat = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>ta edit</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php include 'menu.php';?>
		<h2>Tabel Tahun Akademik</h2>
		<button><a href="ta.php">VIEW</a></button>
		<button><a href="ta_add.php">ADD</a></button>
		<br>
		<form name="myform" action="ta_proc.php" method="POST">
			<table align="center" class="left">
				<tbody>
					<tr>
						<td>ID</td>
						<td><input type="text" name="id" id="id" value="<?php echo $dat['id']?>"></td>
					</tr>
					<tr>
						<td>Nama TA</td>
						<td><input type="text" name="nama" id="nama" value="<?php echo $dat['nama']?>"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit_edit" id="submit_edit" value="SIMPAN">
							<input type="hidden" name="id_old" id="id_old" value="<?php echo $dat['id']; ?>">
							<input type="submit" name="submit_delete" id="submit_delete" value="HAPUS"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</body>
</html>