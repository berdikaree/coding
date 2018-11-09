<?php
include ("koneksi.php");
if(! $konek)
{
die ('Gagal Koneksi:'.mysql_error());
}
$siswa = "siswa";
$backup_file = "C:/xampp/htdocs/TAA/backupdata/datasiswa.sql";
$sql = "SELECT * INTO OUTFILE '$backup_file' FROM $siswa";

mysql_select_db('ta');
$backup = mysql_query ($sql,$konek);
if(! $backup)
{
die('BACK UP DATA GAGAL:'.mysql_error());

} 
mysql_close($konek);
echo "<script> alert ('BACKUP DATA SISWA BERHASIL'); </script>";
echo '<script>
window.location = "media_admin.php?page=siswa";
</script>';
?>