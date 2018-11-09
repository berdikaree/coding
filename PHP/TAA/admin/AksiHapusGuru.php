<?php
include "../config/koneksi.php";
//echo $_GET[NIP];
$sql = "DELETE FROM GURU WHERE NIP = $_GET[NIP]";
//echo $_GET[NIP];
$berhasil = mysql_query($sql, $konek);
if($berhasil)
	echo "<script> alert('Data Berhasil Dihapus');</script>";
else
	echo "<script> alert('Data Gagal Dihapus');</script>";
?>
<script>
window.location ="media_admin.php?page=guru";
</script>