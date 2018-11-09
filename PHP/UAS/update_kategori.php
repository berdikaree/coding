<?php
	include 'koneksi.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM kategori WHERE id = '$id'";
	$result = $connect->query($sql);
	$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
	<link rel="stylesheet" href="admin.css"/>
</head>
<body background="gambar/Blue Ocean Scene.jpg">

	<div class="container">
        <div class="main" align="center">
        	<h2>INPUT KATEGORI BARANG</h2><hr>
        	<a href="kategori.php" style="text-decoration:none"><input type="submit" value="VIEW DATA"></a>
            <form action="barang_proc.php" method="post">  
				
				<label>ID : </label>
				<input type="text" name="id" size="12" placeholder="Otomatis" disabled value="<?= $row['id']; ?>">
                <label>KATEGORI :</label>
                <input id="kategori" name="kategori" placeholder="Kategori" type="text" value="<?= $row['kategori']; ?>">

                <input type="submit" name="submit_update" value="UPDATE" class="btn btn-primary btn-sm">&nbsp;&nbsp;&nbsp;
                <input type="hidden" name="id_old" id="id_old" value="<?= $row['id']; ?>">
				<input type="reset" name="submit" value="RESET">&nbsp;&nbsp;&nbsp;
            </form>
        </div>
    </div>
</body>
</html>