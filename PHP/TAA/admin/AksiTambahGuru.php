<?php
include "../config/koneksi.php";
include "TambahGuru.php";
$tanggal = date('Y-m-d',strtotime($_POST['TGL_LHR_GURU']));
if(isset($_POST['action']))
{
$sql = "INSERT INTO guru VALUES('".
	$_POST['NIP']."',".
	$_POST['ID_LOGIN'].",'".
	$_POST['NAMA_GURU']."','".
	$_POST['ALAMAT_GURU']."','".
	$tanggal."',".
	$_POST['pilih_mapel'].");";
//echo $sql;
// eksekusi sql INSERT INTO
$hasilTambah = mysql_query($sql,$konek);
if($hasilTambah)
echo "<script>alert('DATA BERHASIL ditambahkan!');</script>";
else
echo "<script>alert('DATA GAGAL ditambahkan!');</script>";
}
?>
<script>
window.location = "media_admin.php?page=guru";
</script>
