<?php
include "../config/koneksi.php";
$sql= "UPDATE KELAS SET
		ID_KELAS=".$_POST['ID_KELAS'].",
		NIP= '".$_POST['NIP']."',
		NAMA_KELAS= '".$_POST['NAMA_KELAS']."',
		KETERANGAN= '".$_POST['KETERANGAN']."'
		WHERE ID_KELAS= ".$_POST['ID_KELAS'];
//echo $sql;
//Eksekusi sql insert into	
$hasilTambah= mysql_query($sql,$konek);
if($hasilTambah)
	echo "<script> alert('Data BERHASIL di EDIT!');</script>";
else
	echo "<script> alert('Data GAGAL di EDIT!');</script>";
?>
<script>
window.location ="media_admin.php?page=kelas";
</script>