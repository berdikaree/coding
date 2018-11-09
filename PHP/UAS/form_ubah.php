<html>
<head>
	<title>Aplikasi CRUD dengan PHP</title>
	<link rel="stylesheet" href="admin.css"/>
	<style>
		#color {color: white;}
	</style>
</head>
<body background="gambar/Blue Ocean Scene.jpg">
	
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data kode yang dikirim oleh index.php melalui URL
	$id = $_GET['id'];
	
	// Query untuk menampilkan data siswa berdasarkan kode yang dikirim
	$query = "SELECT * FROM barang WHERE id='$id'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = $sql->fetch_assoc(); // Ambil data dari hasil eksekusi $sql
	?>
	
	<!-- <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Kode</td>
		<td><input type="text" name="kode" value="<?php echo $data['kode']; ?>"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td>
		<input type="text" name="harga" value="<?php echo $data['harga']; ?>">
		</td>
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
		<td><textarea name="deskripsi"><?php echo $data['deskripsi']; ?></textarea></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td>
			<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
			<input type="file" name="foto">
		</td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" name="ubah" value="Ubah">
	<!-- <input type="hidden" name="id_old" id="id_old" value="<?= $data['id']; ?>"> -->
	<!-- <a href="index.php"><input type="button" value="Batal"></a>
	</form> --> -->

	<div class="container">
	    <div class="main">
	    	<h2>TAMBAH BARANG</h2><hr>
	        <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data"> 

	            <label>Kode :</label>
	            <input type="text" name="kode" placeholder="Kode" value="<?php echo $data['kode']; ?>">

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
	            <input type="text" name="nama" placeholder="Nama Barang" value="<?php echo $data['nama']; ?>">

	            <label>Harga :</label>
	            <input type="text" name="harga" placeholder="Harga Barang" value="<?php echo $data['harga']; ?>">

	            <label>Deskripsi :</label>
	            <!-- <input type="textarea" name="deskripsi" placeholder="Deskripsi Barang" value="<?php echo $data['deskripsi']; ?>"> -->
	            <textarea name="deskripsi"><?php echo $data['deskripsi']; ?></textarea>

	            <br>
				<br>

	            <label>Foto :</label>
	            <div id="color">
	            	<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
	            	<input type="file" name="foto">
	            </div>
	            

	            <input type="submit" name="ubah" id="ubah" value="SUBMIT">
	        </form>
	        <a href="data.php"><input type="submit" value="KEMBALI"></a>
	    </div>
	</div>


</body>
</html>
