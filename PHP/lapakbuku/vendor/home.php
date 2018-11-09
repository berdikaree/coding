<?php 
error_reporting(0);
session_start();
if(!$_SESSION['pembeli']){
    ?>
    <Script>
    alert("Kamu Harus Login Dahulu Untuk Masuk Ke Akun Vendor Kamu");
    window.location.href="../login.php";
    </script>
    
    <?php

}else{ ?>
<html>
<head>
<title>Home | Dashboard Vendor</title>
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

<nav style="height: 50px;">
<ul class="kiri">
<li><a href="../index.php">Lapakbuku</a></li>
</ul>
<ul class="kanan">
<li><a href="../index.php">Welcome, <?php echo $_SESSION['pembeli'] ?> [ Kembali Ke Lapakcode]</a></li>
</ul><div style="clear:both"></div>
</nav>
<div class="sidebar">
<ul>
<li><a href="home.php?aksi=dashboard_home">Dashboard</a></li>
<li><a href="home.php?aksi=data_buku">Data Penjualan</a></li>
<li><a href="home.php?aksi=member">Partner Pengiriman</a></li>
<li><a href="home.php?aksi=view_konfirmasi">Konfirmasi</a></li>
<li><a href="home.php?aksi=tampil_toko">Data Toko</a></li>
<li><a href="home.php?aksi=tampil_user">user</a></li>
<li><a href="home.php?aksi=pesanan">Data Pesanan</a></li>
<li><a href="home.php?aksi=pendapatan">Pendapatan</a></li>
</ul>
</div>
<div class="main">
<?php 
error_reporting(0);
include "../root.php";
$db=new data();
$aksi=$_GET['aksi'];
if($aksi=='jual_buku'){   
?>  
 <?php 
$katalog=$db->tampil_katalog($_SESSION['id_pembeli']);
$buku_vendor=$db->tampil_buku_vendor($_SESSION['id_pembeli']);
?>
<style>
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse; width: 50%;}
</style>
<div class="isimain">
<span class="span">Jual Barang Kamu</span> 

<form action="../handler.php?aksi=jual" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_vendor" value="<?php echo $_SESSION['id_pembeli'] ?>"><br>
    <input type="text" name="nama_buku" placeholder="Nama Buku" required style="margin: 10px 0 10px 0; padding: 10px; width: 400px; float:none;"><br>
    <input type="text" name="harga" placeholder="Harga" required style="margin: 10px 0 10px 0; padding: 10px; width: 400px; float:none;"><br>
    <span>Pilih gambar </span><input type="file" name="gambar"  required style="margin: 10px 0 10px 0; padding: 10px; width: 400px; float:none;"><br>
    <input type="text" name="pengarang_buku" placeholder="pengarang buku" required style="margin: 10px 0 10px 0; padding: 10px; width: 400px; float:none;"><br>  
    <p style="font-size: 13px; margin-top: 10px; color: #ccc">*Katalog</p>
          <select name="katalog" style="margin: 10px 0 10px 0; padding: 10px; width: 200px; float:none;">
             <?php 
            foreach($katalog as $r){
                ?>
                    <option value="<?php echo $r['nama_katalog']; ?>"><?php echo $r['nama_katalog']; ?></option>
                <?php
            }
       ?>
           </select><br>
    <input type="number" name="diskon" value="%" placeholder="diskon Buku" required style="margin: 10px 0 10px 0; padding: 10px; width: 400px; float:none;"><br>
    <textarea placeholder="Detail barang" name="ket" required style="margin: 10px 0 10px 0; padding: 10px; width: 400px; float:none;"></textarea><br>
    <input type="number" name="qty" placeholder=qty style="margin: 10px 0 10px 0; padding: 10px; width: 400px; float:none;"><br>
     <input type="text" name="kategori" placeholder="Kategori Buku" required style="margin: 10px 0 10px 0; padding: 10px; width: 400px; float:none;"><br>
    <input type="submit" value="Jual Buku">
</form>               
</div>
<?php 
} if ($aksi=="data_buku") {
    ?>
        <div class="isimain">
            <span class="span">Data Buku Kamu</span> 
            <style>
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:5px;cursor:pointer}
</style>
<a href="home.php?aksi=jual_buku"><input type="submit" value="Jual Buku"></a>
<a href="home.php?aksi=tambah_katalog"><input type="submit" value="Tambah Katalog Kamu" style="background: #4689db">
</a>
    <table>
      <th>Nama Buku</th><th>Katalog</th><th>Kategori</th><th>Pengarang</th><th>Harga</th><th>Hapus</th>
      <?php 
      $buku=$db->tampil_buku($_SESSION['id_pembeli']);
            foreach($buku as $r){
                ?>
                    <tr>
                        <td><?php echo $r['nama_buku']; ?></td>
                        <td><?php echo $r['katalog']; ?></td>
                        <td><?php echo $r['kategori'] ?></td>
                        <td><?php echo $r['pengarang_buku']; ?></td>
                        <td>Rp.<?php echo $r['harga']; ?></td>
                        <td>hapus</td>
                    </tr>
                <?php
            }
       ?>
  </table>
        </div>
    <?php
}if ($aksi=="tambah_katalog") {
    ?>
       <div class="isimain">
            <span class="span">Data Buku Kamu</span> 
            <style>
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:5px;cursor:pointer}
</style>
<a href="home.php?aksi=jual_buku"><input type="submit" value="Jual Buku"></a>
<a href="home.php?aksi=lihat_katalog"><input type="submit" value="Lihat Data Katalog" style="background: #4689db">
</a>
     <form action="../handler.php?aksi=tambah_katalog" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_vendor" value="<?php echo $_SESSION['id_pembeli'] ?>" style="margin: 10px 0 10px 0; padding: 10px; width: 200px; float:none;"><br>
    <input type="text" name="nama_katalog" placeholder="Nama Katalog" style="margin: 10px 0 10px 0; padding: 5px; width: 400px;"><br>
    <input type="submit" value ="Simpan">
    </form>
        </div>
    <?php
}if ($aksi=="lihat_katalog") {
    ?>
<div class="isimain">
<span class="span">Data Katalog Buku Kamu</span> 
<style>
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:5px;cursor:pointer}
</style>
<a href="home.php?aksi=jual_buku"><input type="submit" value="Jual Buku"></a>
<a href="home.php?aksi=tambah_katalog"><input type="submit" value="Tambah Katalog" style="background: #4689db">
</a>
<?php $katalog_vendor=$db->tampil_katalog_vendor($_SESSION['id_pembeli']); ?>
     <table>
      <th>Nama Katalog</th><th>Hapus</th>
     <?php 
            foreach($katalog_vendor as $r){
                ?>
                    <tr>
                        <td><?php echo $r['nama_katalog']; ?></td>
                        <td>hapus</td>
                    </tr>
                <?php
            }
       ?>
  </table> 
        </div>
    <?php
}if ($aksi=="tampil_toko") {
    ?>
      <div class="isimain">
        <style>
        td,th{border:1px solid #ccc;padding:10px;}
        table{border-collapse:collapse;}
        input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:5px;cursor:pointer}
        </style>
        <span class="span">Data Detail Toko Kamu</span>
        <a href="home.php?aksi=bayar_pajak"><input type="submit" value="Bayar Pajak"></a>
        <a href="home.php?aksi=data_pajak"><input type="submit" value="Data Pajak" style="background: #4689db">
        <a href="home.php?aksi=riwayat_pembayaran_pajak"><input type="submit" value="Riwayat Bayar Pajak"></a>
    
     <table>
      <th>Nama Toko</th><th>Id Pemilik</th><th>Alamat</th><th>Type Toko</th><th>Hapus</th>
      <?php 
      $toko=$db->tampil_toko($_SESSION['id_pembeli']);

            foreach($toko as $r){
              $id=$r["id_vendor"];
              $kat=mysql_query("SELECT * from pembeli where id_pembeli='$id'");
              $kat2=mysql_fetch_array($kat);
                ?>
                    <tr>
                        <td><?php echo $r['nama_toko']; ?></td>
                        <td><?php echo $kat2['username'];?></td>
                        <td><?php echo $r['alamat']; ?> Kota <?php echo $r['kota']; ?> Kecamatan <?php echo $r['kecamatan']; ?> Provinsi <?php echo "provinsi"; ?></td>
                        <td><?php echo $r['type']; ?></td>

                        <td>hapus</td>
                    </tr>
                <?php
            }
       ?>
  </table>
          
      </div>
    <?php
}if ($aksi=="data_pajak") {
    ?>
    <div class="isimain">
<span class="span">Data Pembayaran Pajak</span> 
<style>
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:5px;cursor:pointer}
</style>
<a href="home.php?aksi=bayar_pajak"><input type="submit" value="Bayar Pajak"></a></a>

     <table>
      <th>Durasi Pajak</th><th>Harga Pajak</th><th>catatan</th>
        <?php 
            $data=mysql_query("select * from pajak_vendor");
            while ($r=mysql_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $r['durasi']; ?></td>
                        <td><?php echo $r['harga_pajak']; ?></td>
                        <td><?php echo $r['catatan']; ?></td>


                    </tr>
                <?php
            }
         ?>
    </table> 
        </div
    <?php
}if ($aksi=="bayar_pajak") {
    ?>
          <div class="isimain">
            <span class="span">Pembayaran Pajak Toko Kamu</span> 

        <style type="text/css">
            .notif{margin-top: 10px; padding: 10px; background: #eee; font-size: 12px; }
        </style>
        <div class="notif">
            <p>Hello <strong><?php echo $_SESSION['pembeli']; ?> </strong>Di form pembayaran Pajak kamu harus dan wajib membayar pajak untuk melakukan perpanjangan buat toko kamu, silah melakukan pembayaran di disini</p>
        </div>
            <style>
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:5px;cursor:pointer}
</style>
<a href="home.php?aksi=jual_buku"><input type="submit" value="Jual Buku"></a>
<a href="home.php?aksi=lihat_katalog"><input type="submit" value="Lihat Data Katalog" style="background: #4689db">
</a>
     <form action="../handler.php?aksi=bayar_pajak" method="post" enctype="multipart/form-data">
    <input type="text" name="id_vendor" placeholder="Nama Toko Kamu" style="margin: 10px 0 10px 0; padding: 10px; width: 400px; float:none;"><br>
    <input type="hidden" name="id_pembeli" value="<?php echo $_SESSION['id_pembeli'] ?>" style="margin: 10px 0 10px 0; padding: 10px; width: 400px;">
    <select name="durasi"  style="margin: 10px 0 10px 0; padding: 10px; width: 400px;">
        <option>Atur Durasi Pajak</option>
            <option value="1 tahun">1 tahun ( Rp.200.000 )</option>
            <option value="2 tahun">2 tahun ( Rp.250.000 )</option>
            <option value="3 tahun">3 tahun ( Rp.400.000 )</option>
            <option value="4 tahun">4 tahun( Rp.500.000 )</option>
    </select><br>
    <input type="text" name="harga_total" placeholder="Maskan Harga Pajak Kamu" " style="margin: 10px 0 10px 0; padding: 10px; width: 400px;"><br>
    <textarea name="catatan" style="margin: 10px 0 10px 0; padding: 10px; width: 400px;">
        Kirimkan catatan atau pesan mengenai Pembayaran pajak kamu
    </textarea><br>
    <input type="file" name="gambar"><br>
    <input type="submit" value ="Bayar Sekarang">
    </form>
        </div>
    <?php
}if ($aksi=="yes_pembayaran_kamu_berhasil") {
    ?>
    <div class="isimain">
        <span class="span">Pembayaran Kamu Berhasil</span> 
        <style type="text/css">
            .notif{margin-top: 10px; padding: 10px; background: #eee; }
        </style>
        <div class="notif">
            <p>Selamat <strong><?php echo $_SESSION['pembeli']; ?> </strong>Kamu telah melakukan pembayaran pajak buat toko kamu, dan otomatis sekarang kamu dapat berjualan di lapakbuku selama durasi pembayaran pajak kamu</p>
        </div>
        <img src="../asset/image/icon/Payments_payment_card_credit.png" style="width: 30%; margin-right: 50%; float: right;">
    </div>
    <?php
}if ($aksi=="riwayat_pembayaran_pajak") {
    ?>
     <div class="isimain">
<span class="span">Riwayat Pembayan Pajak Kamu</span> 
<style>
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
h6{background: red; font-size: 14px; color: #fff; padding: 10px;}
p{background: #486; font-size: 14px; color: #fff; padding: 10px;}
h3{background: #4689DB; font-size: 14px; color: #fff; padding: 10px;}
h4{background: #467; font-size: 18px; color: #fff; padding: 10px;}
input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:5px;cursor:pointer}
</style>
   <style type="text/css">
            .notif{margin-top: 10px; padding: 10px; background: #eee; font-size: 12px; }
        </style>
        <div class="notif">
            <p>Hello <strong><?php echo $_SESSION['pembeli']; ?> </strong>di halaman ini kamu bisa melihat riwayat transaksi pembayaran pajak kamu </p>
        </div>
<a href="home.php?aksi=bayar_pajak"><input type="submit" value="Cetak"></a></a>

     <table>
      <th>Durasi Pajak</th><th>Nama Toko</th><th>Harga Pajak</th><th>Status</th>
       <?php  
        $riwayat_pembayaran_pajak=$db->tampil_riwayat_bayar_pajak_vendor($_SESSION['id_pembeli']); 
        foreach ($riwayat_pembayaran_pajak as $r) { 
            if($r[konfir]=='N'){
            
            $konfir="<h6>Belum Dibayar</h6>";
            }
             elseif($r[konfir]=='Y'){
            $konfir="<p>dibayar</p>";
            }
            ?>
                    <tr>
                        <td><?php echo $r['durasi']; ?></td>
                        <td><?php echo $r['id_vendor']; ?></td>
                        <td>Rp.<?php echo $r['harga_total']; ?></td>
                        <td><?php echo $konfir; ?></td>

                    </tr
            <?php
        }
        ?>
         
    </table> 
        </div
    <?php
} if ($aksi=="pesanan") {
    ?>
    <div class="isimain">
<span class="span">Data Daftar Pesanan Pembeli</span> 
<style type="text/css">
            .notif{margin-top: 10px; padding: 10px; background: #eee; font-size: 12px; margin-bottom: 10px; }
        </style>
        <div class="notif">
            <p>Hello <strong><?php echo $_SESSION['pembeli']; ?> </strong>Dihalaman ini Kamu dapat mengetahui Siapa saja yang telah memesan ataupun membeli buku di toko kamu , kamu hanya perlu mengkorfirmasi pengiriman saja , selanjutnya jika buku kamu telah sampai di tempat tujuan pembeli , uang dari pembeli bisa kamu terima di <a href="#">tabungan kamu</a></p>
        </div>
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
    <th>Status</th><th>Nama</th><th>Kode Pembelian</th><th>Jumlah barang</th><th>Jumlah bayar</th><th>tanggal beli</th><th>alamat</th><th>Dikirim</th><th>Hapus</th>
    </tr>
    <tr>
    <?php $lihat_pesanan=$db->lihat_pesanan($_SESSION['id_pembeli']); 
    foreach($lihat_pesanan as $r){
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
        echo "<tr><td>".$konfir."</td><td>".$r['nama']."</td><td>".$r['kode_pembelian']."</td><td>".$r['jumlah_barang']."</td><td>Rp.".$r['jumlah_bayar']."</td><td>".$r['tanggal_beli']."</td><td>".$r['alamat']."</td><td><a href='../handler.php?aksi=konfir_kirim&id=".$r['id']."'>Dikirim</a></td></tr>";
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
                $member_toko=mysql_query("select * from selesai where id_pembeli='".$_SESSION['id_pembeli']."'");
                $mt=mysql_num_rows($member_toko);
                ?>
            <div class="panel">
                <div class="main_panel">
                    <h1>Data Pesanan</h1>
                    <h2><?php echo $mt; ?></h2>
                </div>
            </div>
             <?php 
                $member_toko=mysql_query("select * from buku where id_vendor='".$_SESSION['id_pembeli']."'");
                $mt=mysql_num_rows($member_toko);
                ?>
            <div class="panel">
                <div class="main_panel">
                    <h1>Buku Kamu</h1>
                    <h2><?php echo $mt; ?></h2>
                </div>
            </div>

            <?php 
                $pengguna=mysql_query("select * from jasa_pengiriman where id_vendor='".$_SESSION['id_pembeli']."'");
                $p=mysql_num_rows($pengguna);
                ?>
                <div class="panel">
                <div class="main_panel">
                    <h1>Partner Pengiriman Kamu</h1>
                    <h2><?php echo $p; ?></h2>
                </div>
                
            </div>
            <?php 
                $pengguna=mysql_query("select * from pesan where id_vendor='".$_SESSION['id_pembeli']."'");
                $p=mysql_num_rows($pengguna);
                ?>
                <div class="panel">
                <div class="main_panel">
                    <h1>Pesan Dari Pembeli</h1>
                    <h2><?php echo $p; ?></h2>
                </div>
                </div>
    <?php
}if ($aksi=="pendapatan") {
    ?>
        <div class="isimain">
            <span class="span">Data Pendapatan Kamu </span>
              <style type="text/css">
            .notif{margin-top: 10px; padding: 10px; background: #eee; font-size: 12px; }
        </style>
        <div class="notif">
            <p>Hello <strong><?php echo $_SESSION['pembeli']; ?> </strong>Disini kamu bisa melihat pendapatan kamu yang kamu terima dari pembeli melalui perantara lapakbuku .</p>
        </div>
        <style>
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
h6{background: red; font-size: 14px; color: #fff; padding: 10px;}
p{background: #486; font-size: 14px; color: #fff; padding: 10px;}
h3{background: #4689DB; font-size: 14px; color: #fff; padding: 10px;}
h4{background: #467; font-size: 18px; color: #fff; padding: 10px;}
input[type=submit]{margin:10px 0 10px 0;outline:0;background:#2ecc71;color:#fff;border:0;padding:5px;cursor:pointer}
</style>
    <table style="margin-top: 10px">
     <th>Status</th><th>Tanggal Transfer</th><th>Pendapatan Asli</th><th>Potongan</th><th>Total Transfer</th><th>Catatan</th><th>Konfirmasi</th><th>Cairkan Dana</th>
       <?php  
        $lihat_pendapatan_vendor=$db->lihat_pendapatan_vendor($_SESSION['id_pembeli']); 
        foreach ($lihat_pendapatan_vendor as $r) { 
            if($r[konfir]=='N'){
            
            $konfir="<h6>Belum Diterima</h6>";
            }
             elseif($r[konfir]=='Y'){
            $konfir="<p>Sudah Diterima</p>";
            }
            ?>
                    <tr>
                        <td><?php echo $konfir; ?></td>
                        <td><?php echo $r['tgl_transfer']; ?></td>
                        <td>Rp.<?php echo $r['pendapatan_asli']; ?></td>
                        <td>Rp.<?php echo $r['potongan']; ?></td>
                        <td>Rp.<?php echo $r['jumlah']; ?></td>
                        <td>Rp.<?php echo $r['catatan']; ?></td>
                        <td><a href="../handler.php?aksi=konfir_terima_tranfer&id=<?php echo $r['id']; ?>"><span style="background: #4689db; padding: 5px; color: #fff">Terima</span></a></td>
                        <td><a href=""><span style="background: #4689db; padding: 5px; color: #fff">Cairkan</span></a></td>

                    </tr
            <?php
        }
        ?>
         
    </table> 
        </div>
    <?php
}
?>
</div>


</div>
</body>
</html>
<?php }?>