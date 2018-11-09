<?php
include ("koneksi.php");
if(! $konek)
{
die ('Gagal Koneksi:'.mysql_error());
}
$kelas = "kelas";
$backup_file = "C:/xampp/htdocs/TAA/backupdata/datakelas.sql";
$sql = "SELECT * INTO OUTFILE '$backup_file' FROM $kelas";

mysql_select_db('ta');
$backup = mysql_query ($sql,$konek);
if(! $backup)
{
die('BACK UP DATA GAGAL:'.mysql_error());

} 
mysql_close($konek);
echo "<script> alert ('BACKUP DATA KELAS BERHASIL'); </script>";
echo '<script>
window.location = "media_admin.php?page=kelas";
</script>';
?>