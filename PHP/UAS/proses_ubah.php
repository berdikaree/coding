<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data id yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];

// Ambil Data yang Dikirim dari Form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];

// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	// Ambil data foto yang dipilih dari form
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	
	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	$fotobaru = date('dmYHis').$foto;
	
	// Set path folder tempat menyimpan fotonya
	$path = "images/".$fotobaru;

	// Proses upload
	if((move_uploaded_file($tmp, $path))||(isset($_POST['ubah']))){ // Cek apakah gambar berhasil diupload atau tidak
		// Query untuk menampilkan data harga berdasarkan id yang dikirim
		$query = "SELECT * FROM barang WHERE id='".$id."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		// Cek apakah file foto sebelumnya ada di folder images
		if(is_file("images/".$data['foto'])) // Jika foto ada
			unlink("images/".$data['foto']); // Hapus file foto sebelumnya yang ada di folder images
		
		// Proses ubah data ke Database
		$query = "UPDATE barang SET kode='".$kode."', nama='".$nama."', harga='".$harga."', kategori='".$kategori."', deskripsi='".$deskripsi."', foto='".$fotobaru."' WHERE id='".$id."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			header("location: data.php"); // Redirect ke halaman index.php
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database 1.";
			echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
		}
	}else{
		// Jika gambar gagal diupload, Lakukan :
		echo "Maaf, Gambar gagal untuk diupload.";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
	}
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	// Proses ubah data ke Database
	$query = "UPDATE barang SET kode='".$kode."', nama='".$nama."', harga='".$harga."', kategori='".$kategori."', deskripsi='".$deskripsi."' WHERE id='".$id."'";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: data.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database 2.";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
	}
}
?>
