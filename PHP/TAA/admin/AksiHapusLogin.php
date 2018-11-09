<?php
include "../config/koneksi.php";
$sql = "DELETE FROM LOGIN WHERE ID_LOGIN = $_GET[ID_LOGIN]";
//echo $_GET[NIP];
$berhasil = mysql_query($sql, $konek);
if($berhasil)
	echo "<script> alert('Data Berhasil Dihapus');</script>";
else
	echo "<script> alert('Data Gagal Dihapus');</script>";
?>
<script>
window.location ="media_admin.php?page=login";
</script>