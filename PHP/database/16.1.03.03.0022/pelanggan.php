<?php 
	include 'host.php';
	$sql = "SELECT P.*, I.jenis as i_nama, K.kota as k_nama
		FROM id_pelanggan P
		JOIN identitas I ON P.jenis_id=I.id
		JOIN kota K ON P.kota=K.id
		ORDER BY P.nama";

	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>16.1.03.03.0022</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<style type="text/css">
		h1:hover {color: blue;}
		button {
			height: 50px;
			font-size: 15px;
			color: white;
			font-weight: bold;
			background-color: #1939FD;
		}
		a {
			color: black;
			text-decoration: none;
		}
		a:hover {color: red;}
		a button:hover {background-color: #00D5FC;color: black}
		th, td {
		    padding: 8px;
		    text-align: center;
		    border-bottom: 1px solid blue;
		    border-right: 1px solid blue;
		}
		tbody tr:hover{background-color:#75FBE7}
	</style>
</head>
<body>

	<div align="center">
		<h1>SONY DWI KURNIAWAN</h1>
		<h1>16.1.03.03.0022</h1>
	
		<a href="index.php"><button><</button></a>
		<h2>Pelanggan</h2>
	</div>
	<br>
	<table width="75%" align="center" style="border-style: solid; border-radius: 10px; border-color: blue;">
		<thead>
			<tr>
				<th>No</th>
				<th>No. Pelanggan</th>
				<th>Nama</th>
				<th>Jenis ID</th>
				<th>Kota</th>
				<th>Alamat</th>
				<th>Telepon</th>
				<th>Tanggal Reg.</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody align="center">
			<?php
				if ($result->num_rows > 0) {
					$i = 0;
					while($row = $result->fetch_assoc()){
						$i++;
						echo "<tr>
								<td>$i</td>
								<td>".$row['id_pelanggan']."</td>
								<td>".$row['nama']."</td>
								<td>".$row['i_nama']."</td>
								<td>".$row['k_nama']."</td>
								<td>".$row['alamat']."</td>
								<td>0".$row['telp']."</td>
								<td>".$row['tanggal']."</td>
								<td><a href='proses.php?id=".$row['id_pelanggan']."'>Hapus</a>||<a href='#.php?id=".$row['id_pelanggan']."'>Edit</a></td>
							</tr>";
					}
				} 
				
			?>
		</tbody>
	</table>
</body>
</html>
<!-- <script type="text/javascript">
	$(document).ready(function() {
		$('#id').keyup(function(){
			//alert("Belajar jQuery");
			var kode = $('#id').val();
			$.ajax({
				type : "POST",
				url  : "barang_ajax.php",
				data : 'kode='+kode,
				success : function(res){
					var hasil = res.split('|');
					if (hasil[0]==0) {
						$('#ket').html('Kode Belum Digunakan');
					}
					else {
						$('#ket').html('Kode Sudah Digunakan || '+hasil[2]);
					}
				}
			})
		})
	})
</script> -->