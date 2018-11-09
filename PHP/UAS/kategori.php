<?php
	include 'koneksi.php';

	$sql = "SELECT * FROM kategori ORDER BY id";
	$result = $connect->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Penghuni</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		button {
            height: 50px;
            font-size: 15px;
            color: white;
            font-weight: bold;
            background-color: #1939FD;
        }
        div a {
            color: white;
            text-decoration: none;
        }
        a button:hover {background-color: #00D5FC;color: black;}
		th, td {
		    padding: 8px;
		    text-align: center;
		    border-bottom: 1px solid blue;
		    border-right: 1px solid blue;
		}
		tbody tr:hover{background-color:#75FBE7}
		a:hover{background-color: #1A39F3; color: white;}
		div h3 a:hover{background-color: #FF0000; color: white;}
		.logout {
            height: 50px;
            font-size: 15px;
            color: white;
            font-weight: bold;
        }
        thead {
            background-color: #75FBE7;
        }
        table {
            font-weight: bold;
        }
        tbody {background-color: #00FF1E;}
	</style>
</head>
<body background="gambar/triangle_light_blurred_88541_1366x768.jpg">

	<div align="center">
		<h2 align="center">KATEGORI</h2>
		<a href="menu_admin.php"><button class="btn btn-info logout"><</button></a>
		<a href="tambah_kategori.php"><button class="btn btn-info logout">TAMBAH</button></a>
	</div>
	<br>
	<table width="50%" align="center" style="border-style: solid; border-radius: 10px; border-color: blue;">
		<thead>
			<tr>
				<th>ID</th>
				<th>Kategori Barang</th>
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
								<td>".$row['id']."</td>
								<td>".$row['kategori']."</td>
								<td><a href='barang_proc.php?id=".$row['id']."'><button class='btn btn-primary logout btn-sm'>Hapus</button></a>||<a href='update_kategori.php?id=".$row['id']."'><button class='btn btn-info logout btn-sm'>Edit</button></a></td>
							</tr>";
					}
				} 
				
			?>
		</tbody>
	</table>
	
</body>
</html>