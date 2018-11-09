<?php
include "../config/koneksi.php";
//echo $_GET[NIP];
$sql = "DELETE FROM SISWA WHERE NIS = $_GET[NIS]";
//echo $_GET[NIP];
$berhasil = mysql_query($sql, $konek);
if($berhasil)
	echo "<script> alert('Data Berhasil Dihapus');</script>";
else
	echo "<script> alert('Data Gagal Dihapus');</script>";
?>
<script>
window.location ="media_admin.php?page=siswa";
</script>