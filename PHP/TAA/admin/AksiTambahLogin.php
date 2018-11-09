<?php
include "../config/koneksi.php";
$sql= "INSERT INTO LOGIN VALUES(".
		$_POST['ID_LOGIN'].",'".
		$_POST['USERNAME']."','".
		$_POST['PASSWORD']."');";
//echo $sql;
//Eksekusi sql insert into	
$hasilTambah= mysql_query($sql,$konek);
if($hasilTambah)
	echo "<script> alert('Data BERHASIL ditambahkan!');</script>";
else
	echo "<script> alert('Data GAGAL ditambahkan!');</script>";
?>
<script>
window.location ="media_admin.php?page=login";
</script>