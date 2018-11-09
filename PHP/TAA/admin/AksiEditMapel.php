<?php
include "../config/koneksi.php";
$sql= "UPDATE MAPEL SET
		ID_MAPEL=".$_POST['ID_MAPEL'].",
		NAMA_MAPEL= '".$_POST['NAMA_MAPEL']."',
		JENIS_MAPEL= '".$_POST['JENIS_MAPEL']."'
		KKM= '".$_POST['KKM']."'
		WHERE ID_MAPEL= ".$_POST['ID_MAPEL'];
//echo $sql;
//Eksekusi sql insert into	
$hasilTambah= mysql_query($sql,$konek);
if($hasilTambah)
	echo "<script> alert('Data BERHASIL ditambahkan!');</script>";
else
	echo "<script> alert('Data GAGAL ditambahkan!');</script>";
?>
<script>
window.location ="media_admin.php?page=kelas";
</script>