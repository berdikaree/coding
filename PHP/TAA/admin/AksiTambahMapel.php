<?php
include "../config/koneksi.php";
include "TambahMapel.php";
if(isset($_POST['action']))
{
$sql = "INSERT INTO mapel VALUES(".
$_POST['ID_MAPEL'].",'".
$_POST['NAMA_MAPEL']."','".
$_POST['JENIS_MAPEl']."','".
$_POST['KKM']."');";
//echo $sql;
// eksekusi sql INSERT INTO
$hasilTambah = mysql_query($sql,$konek);
if($hasilTambah)
echo "<script>alert('DATA BERHASIL ditambahkan!');</script>";
else
echo "<script>alert('DATA GAGAL ditambahkan!');</script>";
echo '<script>
window.location = "media_admin.php?page=mapel";
</script>';
}
?>