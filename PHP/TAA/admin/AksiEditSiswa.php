<?php
include "../config/koneksi.php";
include "EditSiswa.php";

$tanggal = date('Y-m-d',strtotime($_POST['TGL_LAHIR_SISWA']));
if(isset($_POST['action']))
{
$sql= "UPDATE SISWA SET ".
		"NIS='".$_POST['NIS']."',".
		"ID_LOGIN= ".$_POST['ID_LOGIN'].",".
		"NAMA_SISWA= '".$_POST['NAMA_SISWA']."',".
		"ALAMAT_SISWA= '".$_POST['ALAMAT_SISWA']."',".
		"TGL_LAHIR_SISWA= '".$tanggal."',".
		"NAMA_WALI= '".$_POST['NAMA_WALI']."',".
		"ALAMAT_WALI= '".$_POST['ALAMAT_WALI']."',".
		"ID_KELAS= ".$_POST['pilih_kelas']." ".
		"WHERE NIS= '".$_POST['NIS']."';";
//echo $sql;
//Eksekusi sql insert into	
$hasilTambah= mysql_query($sql,$konek);
if($hasilTambah)
	echo "<script> alert('Data BERHASIL di EDIT!');</script>";
else
	echo "<script> alert('Data GAGAL di EDIT!');</script>";
echo'<script>
window.location ="media_admin.php?page=siswa";
</script>';
}
?>