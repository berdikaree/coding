<?php
include "../config/koneksi.php";
$sql= "INSERT INTO KELAS VALUES(".
		$_POST['ID_KELAS'].",'".
		$_POST['NIP']."','".
		$_POST['NAMA_KELAS']."','".
		$_POST['KETERANGAN']."');";
//echo $sql;
//Eksekusi sql insert into	
$hasilTambah= mysql_query($sql,$konek);
if($hasilTambah)
	echo "<script> alert('Data BERHASIL ditambahkan!');</script>";
else
	echo "<script> alert('Data GAGAL ditambahkan!');</script>";
?>
<script>
window.location ="TambahKelas.php";
</script>