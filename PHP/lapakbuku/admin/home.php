<?php 
error_reporting(0);
session_start();
if(!$_SESSION['id']){
	?>
    <Script>
    alert("anda harus login terlebih dalulu");
	window.location.href="index.php";
    </script>
    
    <?php

}else{ ?>
<html>
<head>
<title>Home | admin</title>
<style>
*{margin:0;padding:0;font-family:arial}
nav{background:#4689db;position:fixed;width:100%;z-index:3}
.kiri{float:left;}.kiri a{font-weight:bold}
.kanan{float:right}
nav .kanan li{list-style:none;display:inline}
nav ul li a{font-size:17px;}
nav .kanan li a{display:inline-block;padding:18px;color:#fff;}
nav .kiri li a{display:inline-block;padding:18px;color:#fff;text-transform:uppercase}
a{text-decoration:none}
.sidebar{width:20%;background:#444;position:fixed;height:100%;padding-top:70px;overflow:hidden;float:left}
.sidebar ul li{list-style:none;}
.sidebar ul li a{padding:20px;width:100%;color:#ccc;display:block;transition:0.4s}
.sidebar ul li a:hover{background:#fff;color:#444}
.main{float:right;width:80%;}
.span{background:#3498db;color:#fff;padding:10px;display:inherit;margin-bottom:10px;}
.isimain{padding:70px 30px 30px 10px;}
</style>
</head>
<body>
<nav>
<ul class="kiri">
<li><a href="">ADMIN</a></li>
</ul>
<ul class="kanan">
<li><a href="handler.php?aksi=logout">Welcome, <?php echo $_SESSION['nama'] ?> [logout]</a></li>
</ul><div style="clear:both"></div>
</nav>
<div class="sidebar">
<ul>
<li><a href="home.php?aksi=dashboard_home">Dashboard</a></li>
<li><a href="home.php?aksi=view_all_post_blog">Blog</a></li>
<li><a href="home.php?aksi=member">Data Member</a></li>
<li><a href="home.php?aksi=view_konfirmasi">Konfirmasi</a></li>
<li><a href="home.php?aksi=toko">Data Toko</a></li>
<li><a href="home.php?aksi=lihat_data_pajak">Data Pajak</a></li>
<li><a href="home.php?aksi=pesan">Pesanan</a></li>
<li><a href="home.php?aksi=transfer_pendapatan_vendor">Pendapatan Vendor</a></li>
</ul>
</div>
<div class="main">
<?php 
error_reporting(0);
include "root.php";
$db=new admin();
$aksi=$_GET['aksi'];
if($aksi=='toko'){
	
?>	
<style>
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse; width: 50%;}
</style>
<div class="isimain">
<span class="span">Data Seluruh Toko</span> 

<Table>
<tr><th>Nama Toko</th><th>Nama Vendor</th><th>E-Mail</th><th>Status Akun</th><th>Deskripsi</th><th>Aksi</th></tr>
<?php
$toko=$db->tampil_toko();
foreach($toko as $r){
	echo "<tr><td>".$r[nama_toko]."</td><td>".$r[id_vendor]."</td><td>".$r[email]."</td><td>".$r[type]."</td><td>".substr($r[deskripsi],0,20)."...</td><td><a href='handler.php?aksi=hapus_toko&id=".$r['id']."'>Hapus</a></td></td></tr>";
	}
?>
</Table>
</div>
<?php	
}if ($aksi=="dashboard_home") {
	?>
	<style type="text/css">
		.panel{ margin-top: 10px; background: #4689db; float: left; width: 30%; height: 100px; margin-right: 3%;}
		.main_panel{ padding: 10px; }
		.main_panel h1{ color: #fff; font-size: 20px; text-align: center; margin-top: 15px;  }
		.main_panel h2{ color: #fff; font-size: 15px; text-align: center; margin-top: 15px;  }
	</style>
		<div class="isimain">
			<span class="span">Dashboard</span>
			 <?php 
	            $member_toko=mysql_query("select * from toko");
	            $mt=mysql_num_rows($member_toko);
         		?>
			<div class="panel">
				<div class="main_panel">
					<h1>Toko Aktif</h1>
					<h2><?php echo $mt; ?></h2>
				</div>
			</div>
			 <?php 
	            $member_toko=mysql_query("select * from buku");
	            $mt=mysql_num_rows($member_toko);
         		?>
			<div class="panel">
				<div class="main_panel">
					<h1>Buku Jual</h1>
					<h2><?php echo $mt; ?></h2>
				</div>
			</div>

			<?php 
	            $pengguna=mysql_query("select * from pembeli");
	            $p=mysql_num_rows($pengguna);
         		?>
         		<div class="panel">
				<div class="main_panel">
					<h1>Pengguna</h1>
					<h2><?php echo $p; ?></h2>
				</div>
			</div>
			<?php 
	            $pengguna=mysql_query("select * from blog");
	            $p=mysql_num_rows($pengguna);
         		?>
         		<div class="panel">
				<div class="main_panel">
					<h1>Blog Post</h1>
					<h2><?php echo $p; ?></h2>
				</div>
			</div>
			 <?php 
	            $member_toko=mysql_query("select * from selesai where konfir='S'");
	            $mt=mysql_num_rows($member_toko);
         		?>
			<div class="panel">
				<div class="main_panel">
					<h1>Pesanan Selesai</h1>
					<h2><?php echo $mt; ?></h2>
				</div>
			</div>
			
		</div>
		<div style="clear: both;"></div>
		<div class="isimain">
			<span class="span">Report Seluruh Konfirmasi Pembayaran</span>
			<?php 
	            $semua_pesanan=mysql_query("select * from konfirmasi");
	            $sp=mysql_num_rows($semua_pesanan);
         		?>
			<div class="panel">
				<div class="main_panel">
					<h1>Konfirmasi Pesanan</h1>
					<h2><?php echo $sp; ?></h2>
				</div>
			</div>
			<?php 
	            $semua_pesanan=mysql_query("select * from bayar_pajak");
	            $sp=mysql_num_rows($semua_pesanan);
         		?>
			<div class="panel">
				<div class="main_panel">
					<h1>Konfirmasi Bayar Pajak</h1>
					<h2><?php echo $sp; ?></h2>
				</div>
			</div>
			<?php 
	            $semua_pesanan=mysql_query("select * from tabungan_vendor");
	            $sp=mysql_num_rows($semua_pesanan);
         		?>
			<div class="panel">
				<div class="main_panel">
					<h1>Transfer Ke Vendor</h1>
					<h2><?php echo $sp; ?></h2>
				</div>
			</div>
		</div>
		<div style="clear: both;"></div>
		<div class="isimain">
			<span class="span">Report Semua Transaksi Pesanan</span>

			<?php 
	            $semua_pesanan=mysql_query("select * from selesai");
	            $sp=mysql_num_rows($semua_pesanan);
         		?>
			<div class="panel">
				<div class="main_panel">
					<h1>Semua Pesanan</h1>
					<h2><?php echo $sp; ?></h2>
				</div>
			</div>
			<?php 
	            $pesan_terbayar=mysql_query("SELECT * from selesai where konfir='Y'");
	            $pt=mysql_num_rows($pesan_terbayar);
         		?>
			<div class="panel">
				<div class="main_panel">
					<h1>Pesanan Terbayar</h1>
					<h2><?php echo $pt; ?></h2>
				</div>
			</div>
			<?php 
	            $pesan_terkirim=mysql_query("SELECT * from selesai where konfir='K'");
	            $pk=mysql_num_rows($pesan_terkirim);
         		?>
			<div class="panel">
				<div class="main_panel">
					<h1>Pesanan Terkirim</h1>
					<h2><?php echo $pk; ?></h2>
				</div>
			</div>
			<?php 
	            $pesan_terkirim_kota=mysql_query("SELECT * from selesai where konfir='KK'");
	            $pkk=mysql_num_rows($pesan_terkirim_kota);
         		?>
			<div class="panel">
				<div class="main_panel">
					<h1>Pesanan Terkirim Di Kota</h1>
					<h2><?php echo $pkk; ?></h2>
				</div>
			</div>
			<?php 
	            $pesan_terkirim_kota=mysql_query("SELECT * from selesai where konfir='T'");
	            $pkk=mysql_num_rows($pesan_terkirim_kota);
         		?>
			<div class="panel">
				<div class="main_panel">
					<h1 style="font-size: 16px;">Pesanan Sudah Di Terima Pembeli</h1>
					<h2><?php echo $pkk; ?></h2>
				</div>
			</div>
			<?php 
	            $pesan_terkirim_kota=mysql_query("SELECT * from selesai where konfir='S'");
	            $pkk=mysql_num_rows($pesan_terkirim_kota);
         		?>
			<div class="panel">
				<div class="main_panel">
					<h1 style="font-size: 16px;">Pesanan Sudah Selesai Clear</h1>
					<h2><?php echo $pkk; ?></h2>
				</div>
			</div>
		</div>
		<div style="clear: both;"></div>
		<div class="isimain">
			<span class="span">Repost Semua Data Pajak</span>
			<?php 
	            $pesan_terkirim_kota=mysql_query("SELECT * from bayar_pajak ");
	            $pkk=mysql_num_rows($pesan_terkirim_kota);
         		?>
			<div class="panel">
				<div class="main_panel">
					<h1 style="font-size: 16px;">Pembayaran Pajak</h1>
					<h2><?php echo $pkk; ?></h2>
				</div>
			</div>
			<?php 
	            $pesan_terkirim_kota=mysql_query("SELECT * from bayar_pajak ");
	            $pkk=mysql_num_rows($pesan_terkirim_kota);
         		?>
			<div class="panel">
				<div class="main_panel">
					<h1 style="font-size: 16px;">Pembayaran Pajak</h1>
					<h2><?php echo $pkk; ?></h2>
				</div>
			</div>
			<?php 
	            $pesan_terkirim_kota=mysql_query("SELECT * from bayar_pajak where konfir='T' ");
	            $pkk=mysql_num_rows($pesan_terkirim_kota);
         		?>
			<div class="panel">
				<div class="main_panel">
					<h1 style="font-size: 16px;">Belum Bayar Pajak</h1>
					<h2><?php echo $pkk; ?></h2>
				</div>
			</div>
		</div>
		<div style="clear: both;"></div>
		<div class="isimain">
			
		</div>
	<?php
}
if($aksi=='member'){
?>
<style>
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse; width: 50%;}
</style>
<div class="isimain">
<span class="span">Data Memberk</span> 
<Table>
<tr><th>Nama Lengkap</th><th>Akun Username</th><th>E-Mail</th><th>No Telp</th><th>Alamat</th><th>Kota</th><th>Kecamatan</th><th>Provinsi</th></tr>
<?php
$member=$db->tampil_member();
foreach($member as $r){
	echo "<tr><td>".$r[nama_lengkap]."</td><td>".$r[username]."</td><td>".$r[email]."</td><td>".$r[no_telp]."</td><td>".$r[alamat]."</td><td>".$r[kabupaten]."</td><td>".$r[kecamatan]."</td><td>".$r[provinsi]."</td></tr>";
	}
?>
</Table>
</div>
<?php }
if ($aksi=="tambah_kelompok") {
	?>
	<style>
input[type=text],select,textarea{width:400px;margin:10px 0 10px 0;padding:10px;resize:none}
textarea{height:200px;}
input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:10px;cursor:pointer}
</style>
	<div class="isimain">
		<span class="span">Tambah Kelompok Barang</span> 
		<form action="handler.php?aksi=tambah_kelompok" method="post" enctype="multipart/form-data">
		<input type="text" name="nama" placeholder="Nama Kelompok Barang"><br>
		<input type="submit" value ="Simpan">
		</form>
		</div>
	<?php
}
if ($aksi=="tambah_katalog") {
	?>
		<style>
input[type=text],select,textarea{width:400px;margin:10px 0 10px 0;padding:10px;resize:none}
textarea{height:200px;}
input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:10px;cursor:pointer}
</style>
	<div class="isimain">
		<span class="span">Tambah Katalog</span> 
		<form action="handler.php?aksi=tambah_katalog" method="post" enctype="multipart/form-data">
		<input type="text" name="nama_katalog" placeholder="Nama Katalog"><br>
		<input type="submit" value ="Simpan">
		</form>
		</div>
	<?php
}
if ($aksi=="tampil_user") {
	?>
	<style>
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse; width: 50%;}
</style>
<div class="isimain">
<span class="span">Semua Pengguna  Aktif</span> 
<Table>
<tr><th>Foto Profil</th><th>Nama Pengguna</th><th>Alamat</th><th>Qty</th><th>Kategori</th><th>Keterangan</th></tr>
<?php
$barang=$db->lihat_produk();
foreach($barang as $r){
	echo "<tr><td><img style='width:100px;height:100px' src='".$r[gambar]."'></td><td>".$r[nama_produk]."</td><td>".$r[harga]."</td><td>".$r[qty]."</td><td>".$r[kategori]."</td><td>".substr($r[ket],0,20)."...</td></tr>";
	}
?>
</Table>
</div>
<?php	
}
if ($aksi=="view_all_post_blog") {
	?>
<style>
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:10px;cursor:pointer}
</style>
<div class="isimain">
<span class="span">Semua Post Di Blog</span> 
<a href="home.php?aksi=add_new_kategori_blog"><input type="submit" value="Tambah Kategori Blog"></a>
<a href="home.php?aksi=add_new_blog_post"><input type="submit" value="Tambah Blog" style="background: #4689db">
</a>
<Table>
<tr><th>Foto</th><th>Judul</th><th>Kategori</th><th>Tanggal Terbit</th><th>Tulisan</th><th>Detail Isi</th><th>Action</th></tr>
<?php 
$blog=$db->tampil_blog();
foreach ($blog as $r) {
	echo "<tr><td><img style='width:100px;height:100px' src='".$r[gambar]."'></td><td>".$r[judul]."</td><td>".$r[kategori]."</td><td>".$r[tgl]."</td><td>".$r[tulisan]."</td><td>".substr($r[isi_blog],0,20)."...</td><td><a href='handler.php?aksi=hapus_blog&id=".$r['id']."'>Hapus</a></td></tr>";
}
 ?>
</Table>
</div>
	<?php
}
//tautan blog Post
if ($aksi=="add_new_kategori_blog") {
	?>
	<style>
	input[type=text],select,textarea{width:400px;margin:10px 0 10px 0;padding:10px;resize:none}
	textarea{height:200px;}
	input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:10px;cursor:pointer}
	</style>
		<div class="isimain">
		<span class="span">Tambah Kategori Blog</span> 
		<form action="handler.php?aksi=add_blog_kategori" method="post" enctype="multipart/form-data">
		<input type="text" name="nama_kategori" placeholder="Nama Kategori Blog"><br>
		<input type="submit" value ="Post">
		</form>
		</div>
	<?php
}
if ($aksi=="add_new_blog_post") {
	?>
	<style>
	input[type=text],select,textarea{width:400px;margin:10px 0 10px 0;padding:10px;resize:none}
	textarea{height:200px;}
	input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:10px;cursor:pointer}
	input[type=file]{margin:10px 0 10px 0;outline:0;background:#eee;color:#fff;border:0;padding:10px;cursor:pointer}
	</style>
		<div class="isimain">
		<span class="span">Tambah Blog Post</span> 
		<form action="handler.php?aksi=add_blog" method="post" enctype="multipart/form-data">
		<input type="text" name="judul" placeholder="Judul Blog"><br>
		<select name="kategori">
			<?php 
				$data=mysql_query("select * from blog_kategori order by id");
				while ($r=mysql_fetch_array($data)) {
					?>
						<option value="<?php echo $r['nama_kategori']; ?>"><?php echo $r['nama_kategori']; ?></option>
					<?php
					
				}
			 ?>
		</select><br>
		<p style="font-size: 12px;">*Uplode Gambar Blog </p>
		<input type="file" name="gambar"><b><br>
		<p style="font-size: 12px;">*Tulis Artikel Blog disini</p>
		<textarea name="isi_blog" placeholder="Tulisan Saya....."></textarea><br>
		<p style="font-size: 12px;">*Tanggal Terbit </p>
		<input type="date" name="tgl" style="padding: 10px; width: 400px;"><br>
		<input type="text" name="tulisan" placeholder="Post By...."><br>
		<input type="submit" value ="Post">
		</form>
		</div>
	<?php
}if ($aksi=="add_pajak") {
	?>
			<style>
input[type=text],select,textarea{width:400px;margin:10px 0 10px 0;padding:10px;resize:none}
textarea{height:200px;}
input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:10px;cursor:pointer}
</style>
	<div class="isimain">
		<span class="span">Tambah Data Pembayaran Pajak</span> 
		<form action="handler.php?aksi=add_pajak" method="post">
		<select name="durasi">
			<option>Atur Durasi Pajak</option>
			<option value="1 tahun">1 tahun</option>
			<option value="2 tahun">2 tahun</option>
			<option value="3 tahun">3 tahun</option>
			<option value="4 tahun">4 tahun</option>
		</select><br>
		<input type="text" name="harga_pajak" placeholder="Atur Harga Pajak"><br>
		<textarea name="catatan" placeholder="Tulis catatan untuk vendor untuk tokonya "></textarea><br>
		<input type="submit" value ="Simpan">
		</form>
		</div>
	<?php
}if ($aksi=="lihat_data_pajak") {
	?>
	 <div class="isimain">
            <span class="span">Data Pembayaran Pajak Untuk Vendor</span> 
            <style>
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:5px;cursor:pointer}
</style>
<a href="home.php?aksi=add_pajak"><input type="submit" value="Tambah Data Pajak"></a>
<a href="home.php?aksi=Pembayaran_pajak"><input type="submit" value="Lihat Pembayaran Pajak" style="background: #4689db">
</a>
    <table>
      <th>Durasi</th><th>Harga Pajak</th><th>Catatan</th><th>Hapus</th>
      <?php 
      $pajak=$db->tampil_pajak();
            foreach($pajak as $r){
                ?>
                    <tr>
                        <td><?php echo $r['durasi']; ?></td>
                        <td>Rp.<?php echo $r['harga_pajak']; ?></td>
                        <td><?php echo $r['catatan'] ?></td>
          
                        <td>hapus</td>
                    </tr>
                <?php
            }
       ?>
  </table>
        </div>
	<?php
}if ($aksi=="Pembayaran_pajak") {
	?>
	 <div class="isimain">
            <span class="span">Data Pembayaran Pajak Untuk Vendor</span> 
            <style>
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:5px;cursor:pointer}
</style>
<a href="home.php?aksi=add_pajak"><input type="submit" value="Tambah Data Pajak"></a>
</a>
    <style>
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
b{background: red; font-size: 14px; color: #fff; padding: 10px;}
p{background: #486; font-size: 14px; color: #fff; padding: 10px;}
k{background: #4689DB; font-size: 14px; color: #fff; padding: 10px;}
n{background: #467; font-size: 14px; color: #fff; padding: 10px;}
td a{background: #2ecc71; padding: 5px; color: #fff; border-radius: 3px;}

</style>
    <table>
    <tr>
    <th>Status</th><th>Nama Toko</th><th>Durasi Pajak</th><th>Bukti Pembayaran</th><th>Harga Total Pajak</th><th>tanggal bayar</th><th>Catatan</th><th>Konfirmasi</th><th>Masa Tenggang</th><th>Hapus</th>
    </tr>
    <tr>
    <?php $pembayaran_pajak=$db->bayar_pajak(); 
	foreach($pembayaran_pajak as $r){
		if($r[konfir]=='N'){
			
			$konfir="<b>belum</b>";
			}
		elseif($r[konfir]=='Y'){
			$konfir="<p>dibayar</p>";
			}
			elseif($r[konfir]=='T'){
			$konfir="<p>Tenggang</p>";
			}
			elseif($r[konfir]=='KK'){
			$konfir="<k>Sampai</k>";
			}
		echo "<tr><td>".$konfir."</td><td>".$r['id_vendor']."</td><td>".$r['durasi']."</td><td><img style='width:100px;height:100px' src='../".$r[gambar]."'></td><td>Rp.".$r['harga_total']."</td><td>".$r['tanggal_beli']."</td><td>".$r['alamat']."</td><td><a href='handler.php?aksi=konfir_bayar&id=".$r['id']."'>Konfirmasi</a></td><td><a href='handler.php?aksi=konfir_tenggang&id=".$r['id']."'>Tenggang</a></td></tr>";
		?>
		</div></div>
		<?php
		}
	?>
    </table>
        </div>
	<?php
}
if ($aksi=="view_konfirmasi") {
	?>
	<style>
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:10px;cursor:pointer}
</style>
<div class="isimain">
<span class="span">Konfirmasi Bukti Pembayaran</span> 
</a>
<Table>
<tr><th>Bukti</th><th>Username Pembeli</th><th>Kode Pembelian</th><th>Dari Toko</th><th>Tanggal Transfer</th><th>Bank Tranfer</th><th>Pesan Pembeli</th><th>Action</th></tr>
<?php 
$konfirmasi=$db->view_konfirmasi();
foreach ($konfirmasi as $r) {
	echo "<tr><td><img style='width:100px;height:100px' src='../".$r[gambar]."'></td><td>".$r[pembeli]."</td><td>".$r[kode_pembelian]."</td><td>".$r[id_vendor]."</td><td>".$r[tgl]."</td><td>".$r[nama_bank]."</td><td>".$r[pesan]."</td><td>Hapus</td></tr>";
}
 ?>
</Table>
</div
	<?Php

	}if ($aksi=="transfer_pendapatan_vendor") {
		?>
		<div class="isimain">
			<span class="span">Repost Pembayaran Pendapatan Vendor</span>
			 <style type="text/css">
            .notif{margin-top: 10px; padding: 10px; background: #eee; font-size: 12px; }
        </style>
        <style>
        b{background: red; font-size: 14px; color: #fff; padding: 10px;}
p{background: #486; font-size: 14px; color: #fff; padding: 10px;}
k{background: #4689DB; font-size: 14px; color: #fff; padding: 10px;}
n{background: #467; font-size: 14px; color: #fff; padding: 10px;}
td a{background: #2ecc71; padding: 5px; color: #fff; border-radius: 3px;}
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse; margin-top: 10px;}
input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:10px;cursor:pointer}
</style>
        <div class="notif">
            <p>Halaman ini digunakan untuk memberikan komisi pendapatan buat vendor , dimana buku yang di jual dilapakbuku sudah laku terjual dan sudah di bayar</p>
        </div>
        <a href="home.php?aksi=bayar_tranfer_pendapatan_vendor"><input type="submit" value="Transfer Pendapatan Vendor"></a>
        <table>
        	<th>Status</th><th>Nama Toko</th><th>id user</th><th>Pendapatan Asli</th><th>Jumlah Transfer</th><th>Tgl Transfer</th>
        	<?php  
        	$pendatan_vendor=$db->lihat_pendapatan_vendor();
        	foreach ($pendatan_vendor as $r) {
        		if($r[konfir]=='N'){
			
			$konfir="<b>belum Diterima</b>";
			}
		elseif($r[konfir]=='Y'){
			$konfir="<p>Sudah Diterima</p>";
			}

    $id=$r["id_vendor"];
    $kat30=mysql_query("SELECT * from toko where id_vendor='$id'");
    $toko=mysql_fetch_array($kat30);

		echo "<tr><td>".$konfir."</td><td>".$toko['nama_toko']."</td><td>".$r['user_id']."</td><td>Rp.".$r['pendapatan_asli']."</td><td>Rp.".$r['jumlah']."</td><td>.".$r['tgl_transfer']."</td></tr>";
        	}

        	?>
        </table>

		</div>
		<?php
	}if ($aksi=="bayar_tranfer_pendapatan_vendor") {
		?>

			<style>
			input[type=text],select,textarea{width:400px;margin:10px 0 10px 0;padding:10px;resize:none}
			textarea{height:200px;}
			input[type=date]{width:400px;margin:10px 0 10px 0;padding:10px;resize:none}
			input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:10px;cursor:pointer}
			</style>
			 <style type="text/css">
            .notif{margin-top: 10px; padding: 10px; background: #eee; font-size: 12px; }
        </style>
	<div class="isimain">
		<span class="span">Form Transfer Pendapatan Vendor</span> 
		 <div class="notif">
            <p>Halaman ini digunakan untuk memberikan komisi pendapatan buat vendor , dimana buku yang di jual dilapakbuku sudah laku terjual dan sudah di bayar</p>
        </div>
		<form action="handler.php?aksi=add_pajak" method="post">
		<div class="notif" style="width: 200px; background: red; color: #fff">
            <p>*Pilih Nama Toko tujuan tranfer</p>
        </div>
		<select name="id_vendor">
			<?php
				$data=mysql_query("SELECT * from toko");
				while ($r=mysql_fetch_array($data)) {
					?>
					<option value="<?php echo $r['id_vendor']; ?>"><?php echo $r['nama_toko']; ?></option>
					<?php
				}
			 ?>
		</select><br>
		<div class="notif" style="width: 200px; background: red; color: #fff">
            <p>*Masukan Pendapatan Asli Vendor</p>
        </div>
		<input type="text" name="pendapatan_asli" placeholder="Pendapatan Asli Vendor"><br>
		<div class="notif" style="width: 200px; background: red; color: #fff">
            <p>*Pendapatan Vendor Akan di dipotong sebesar Rp.5.000 sesuai dengan kesepakatan dan tertera di aturan vendor di lapakbuku</p>
        </div>
		<input type="text" name="potongan" placeholder="Potongan Pendapatan Vendor Sebesar Rp.5.000"><br>
		<div class="notif" style="width: 200px; background: red; color: #fff">
            <p>*Atur Jumlah Tranfer Pendapatan Vendor yaitu Pendapatan vendor Asli dikurangi potongan Sebesar Rp.5.000 Jadi sisanya yang akan di transfer ke vendor</p>
        </div>
        <input type="text" name="jumlah" placeholder="Atur Jumlah Transfer"><br>
        <div class="notif" style="width: 200px; background: red; color: #fff">
            <p>*Tansfer</p>
        </div>
        <input type="date" name="tgl_transfer"><br>
        <textarea name="catatan">Dear Vendor ?? <br> Terima Kasih atas kepercayaan kamu untuk berjualan di lapakbuku , kami telah mengirim transfer pendapatan kamu . pendapatan kamu bisa di lihat di menu pendapatan , kamu dapat mencairkan pendapatan kamu . terima kasih atas kerja samanya</textarea><br>
		<input type="submit" value ="Transfer">
		</form>
		</div>
		<?php
	}    
?>

</div>
</body>
</html>
<?php 
if($aksi=='pesan'){
	?>
      <div class="main">
    <div class="isimain">
<span class="span">Pesanan</span> 
<style>
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
b{background: red; font-size: 14px; color: #fff; padding: 10px;}
p{background: #486; font-size: 14px; color: #fff; padding: 10px;}
k{background: #4689DB; font-size: 14px; color: #fff; padding: 10px;}
n{background: #467; font-size: 14px; color: #fff; padding: 10px;}
td a{background: #2ecc71; padding: 5px; color: #fff; border-radius: 3px;}

</style>
    <table>
    <tr>
    <th>Status</th><th>Nama</th><th>Kode Pembelian</th><th>Dari Toko</th><th>Jumlah barang</th><th>Jumlah bayar</th><th>tanggal beli</th><th>alamat</th><th>Konfirmasi</th><th>Dikirim</th><th>Sampai Kota</th><th>Diterima</th><th>Selesai</th><th>Hapus</th>
    </tr>
    <tr>
    <?php $transaksi=$db->selesai(); 
	foreach($transaksi as $r){
		if($r[konfir]=='N'){
			
			$konfir="<b>belum</b>";
			}
		elseif($r[konfir]=='Y'){
			$konfir="<p>dibayar</p>";
			}
			elseif($r[konfir]=='K'){
			$konfir="<p>dikirim</p>";
			}
			elseif($r[konfir]=='KK'){
			$konfir="<k>Sampai</k>";
			}
			elseif($r[konfir]=='T'){
			$konfir="<k>Diterima</k>";
			}
			elseif($r[konfir]=='S'){
			$konfir="<n>Selesai</n>";
			}
		echo "<tr><td>".$konfir."</td><td>".$r['nama']."</td><td>".$r['kode_pembelian']."</td><td>".$r['id_vendor']."</td><td>".$r['jumlah_barang']."</td><td>Rp.".$r['jumlah_bayar']."</td><td>".$r['tanggal_beli']."</td><td>".$r['alamat']."</td><td><a href='handler.php?aksi=konfir&id=".$r['id']."'>Konfirmasi</a></td><td><a href='handler.php?aksi=konfir_kirim&id=".$r['id']."'>Dikirim</a></td><td><a href='handler.php?aksi=konfir_kirim_kota&id=".$r['id']."'>Sampai</a></td><td><a href='handler.php?aksi=konfir_terima&id=".$r['id']."'>Diterima</a></td><td><a href='handler.php?aksi=konfir_selesai&id=".$r['id']."'>Selesai</a></td></tr>";
		?>
		</div></div>
		<?php
		}
	?>
    </table>
    <style type="text/css">
    	input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:10px;cursor:pointer}
    </style>
    <input type="submit" value="Cetak">   <input type="submit" value="Kirim Notifikasi">
	<?php
	}
}
?>