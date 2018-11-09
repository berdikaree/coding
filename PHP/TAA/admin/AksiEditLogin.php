<?php
include "../config/koneksi.php";
$sql= "UPDATE LOGIN SET
		ID_LOGIN=".$_POST['ID_LOGIN'].",
		USERNAME= '".$_POST['USERNAME']."',
		PASSWORD= '".$_POST['PASSWORD']."'
		WHERE ID_LOGIN= ".$_POST['ID_LOGIN'];
//echo $sql;
//Eksekusi sql insert into	
$hasilTambah= mysql_query($sql,$konek);
if($hasilTambah)
	echo "<script> alert('Data BERHASIL di EDIT!');</script>";
else
	echo "<script> alert('Data GAGAL di EDIT!');</script>";
?>
<script>
window.location ="media_admin.php?page=login";
</script>