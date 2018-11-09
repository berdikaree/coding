<?php
include "../config/koneksi.php";
$tanggal = date('Y-m-d',strtotime($_POST['TGL_LAHIR_SISWA']));
if(isset($_POST['action']))
{
$sql = "INSERT INTO SISWA VALUES('".
$_POST['NIS']."',".
$_POST['ID_LOGIN'].",'".
$_POST['NAMA_SISWA']."','".
$_POST['ALAMAT_SISWA']."','".
$tanggal."','".
$_POST['NAMA_WALI']."','".
$_POST['ALAMAT_WALI']."',".
$_POST['pilih_kelas'].");";
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
window.location = "media_admin.php?page=siswa";
</script>