<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>
<html>
<head>
	<title>Aplikasi CRUD dengan PHP</title>
	<link rel="stylesheet" href="admin.css"/>
</head>
<body background="gambar/Blue Ocean Scene.jpg">
	<!-- <h1>Tambah Data Barang</h1>
	<form method="post" action="proc_simpan.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Kode</td>
		<td><input type="text" name="kode"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td>
		<input type="text" name="harga" value="">
		
	</tr>
	<tr>
		<td>Kategori</td>
		<td>
			<select name="kategori" id="kategori">
						<option value="">Pilih Kategori</option>
						<?php 
							$sql = "SELECT * FROM kategori ORDER BY kategori";
							$result = $connect->query($sql);
							if ($result->num_rows > 0); 
								while($row = $result->fetch_assoc()){
									echo "<option value='".$row['kategori']."'>".$row['kategori']."</option>";
								}
						?>
					</select>
		</td>
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td><textarea name="deskripsi"></textarea></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td><input type="file" name="foto"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" name="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form> -->

	<div class="container">
	    <div class="main">
	    	<h2>TAMBAH BARANG</h2><hr>
	        <form method="post" action="proc_simpan.php" enctype="multipart/form-data"> 

	            <label>Kode :</label>
	            <input type="text" name="kode" placeholder="Kode">

	            <label>Kategori :</label>
	            <select name="kategori" id="kategori">
					<option value="">Pilih Kategori</option>
					<?php 
						$sql = "SELECT * FROM kategori ORDER BY kategori";
						$result = $connect->query($sql);
						if ($result->num_rows > 0); 
							while($row = $result->fetch_assoc()){
								echo "<option value='".$row['kategori']."'>".$row['kategori']."</option>";
							}
					?>
				</select>
				<br>
				<br>

	            <label>Nama :</label>
	            <input type="text" name="nama" placeholder="Nama Barang">

	            <label>Harga :</label>
	            <input type="text" name="harga" placeholder="Harga Barang">

	            <label>Deskripsi :</label>
	            <input type="textarea" name="deskripsi" placeholder="Deskripsi Barang">

	            <br>
				<br>

	            <label>Foto :</label>
	            <input type="file" name="foto">

	            <input type="submit" name="submit" id="submit" value="SUBMIT">
	        </form>
	        <a href="data.php"><input type="submit" value="KEMBALI"></a>
	    </div>
	</div>

</body>
</html>

