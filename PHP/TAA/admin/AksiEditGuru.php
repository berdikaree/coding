<?php
include "../config/koneksi.php";
include "EditGuru.php";
$tanggal = date('Y-m-d',strtotime($_POST['TGL_LHR_GURU']));
if(isset($_POST['action']))
{
$sql= "UPDATE GURU SET ".
		"NIP ='".$_POST['NIP']."',".
		"ID_LOGIN=".$_POST['ID_LOGIN'].",".
		"NAMA_GURU= '".$_POST['NAMA_GURU']."',".
		"ALAMAT_GURU= '".$_POST['ALAMAT_GURU']."',".
		"TGL_LHR_GURU= '".$tanggal."',".
		"ID_MAPEL= ".$_POST['pilih_mapel']." ".
		"WHERE NIP= '".$_POST['NIP']."';";
//echo $sql;
//Eksekusi sql insert into	
$hasilTambah= mysql_query($sql,$konek);
if($hasilTambah)
	echo "<script> alert('Data BERHASIL di EDIT!');</script>";
else
	echo "<script> alert('Data GAGAL Di EDIT!');</script>";

echo '<script>
window.location ="media_admin.php?page=guru";
</script>';
}
?>