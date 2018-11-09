
<style type="text/css">
    .wrapper{ margin-left: 6%}
    .wrapper-content{}
    .content{float: left; width: 150px; margin-right: 20px; background: #fff; border:1px solid #ccc; margin-top: 20px}
    .isi{background: #fff; padding: 10px}
    .isi h5{font-size: 12px;  text-align: center;}
    .isi h7{font-size: 12px;  text-align:center; border:1px solid #ccc; padding: 5px; margin-top: 5px; border-radius: 5px;}

    .isi h6{font-size: 12px;  text-align: center; padding: 10px; }
    input[type=submit]:hover{background: #fff; color: orange; outline: 1px solid #ccc;}
</style>
<div class="wrapper">
    <div class="wrapper-content">
<div class="tab" style="margin-left:0; margin-top: 50px; width: 94%">
  <li><a href="javascript:void(0)" class="tablinks">Buku Favorit Kamu</a></li>
</div>
<?php 
$buku_favorit=$db->tampil_buku_favorit($_SESSION['id_pembeli']);
$tampil_buku_favorit=$db->tampil_buku_favorit_pembeli($_SESSION['id_pembeli']);
?>
<?php 
      foreach($buku_favorit as $r){
        $id=$r["id_buku"];
        $kat=mysql_query("SELECT * from buku where id='$id'");
        $kat2=mysql_fetch_array($kat);
         ?>
    <div class="content">
                <center><img src="<?php echo $kat2['gambar'] ?>" style="width: 95%; height: 200px"></center>
                <div class="isi">
                    <h5><?php echo $kat2['nama_buku']; ?></h5>
                    <h5 style="font-size: 13px; color:green; border-radius: 5px;">Penjual <?php echo $kat2['nama_toko'];?></h5>
                    <p style="text-align: center; font-size: 13px; color: yellow">(<?php echo $kat4['type'];?>) Acunt</p>
                    <h5>Rp.<?php echo $kat2['harga']; ?></h5>
                <center>
                    <a href="detail_product.php?id_buku=<?php echo $kat2['id'] ?>"><input type="submit" value="Lihat Dulu" style="margin: 10px 0 10px 0 ; padding: 10px ; background: orange; outline: 0; border:0; color: #fff; font-size: 13px; width: 100%"></a>
                </center> 
                </div>
         </div>  
          <?php
             }
              ?>
   
    </div>
</div>
