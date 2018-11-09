<?php
include ("koneksi.php");
if(! $konek)
{
die ('Gagal Koneksi:'.mysql_error());
}
$mapel = "mapel";
$backup_file = "C:/xampp/htdocs/TAA/backupdata/datamapel.sql";
$sql = "SELECT * INTO OUTFILE '$backup_file' FROM $mapel";

mysql_select_db('ta');
$backup = mysql_query ($sql,$konek);
if(! $backup)
{
die('BACK UP DATA GAGAL:'.mysql_error());

} 
mysql_close($konek);
echo "<script> alert ('BACKUP DATA MAPEL BERHASIL'); </script>";
echo '<script>
window.location = "media_admin.php?page=mapel";
</script>';
?>