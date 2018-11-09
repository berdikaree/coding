<?php
	
	require_once("include/class.user.php");
	
$mapelid = $_POST['mapelid'];
$nip = $_POST['nip'];
$idkelas = $_POST['idkelas'];
$data = $_POST['nilai'];

/*
echo $mapelid ."<br>";
echo $nip ."<br>";
echo $idkelas ."<br>";
*/
/*
	foreach( $data as $nilai ) {

echo $nilai."<br>";
}
*/
//echo json_encode($data) ."<br>";


foreach ($data as $nis => $nilai) {
				$user = R::dispense('nilai');
				$user->ID_MAPEL = $mapelid;
				$user->NIS = $nis;
				$user->ID_KELAS = $idkelas;
				$user->NIP = $nip;
				$user->NILAI = $nilai;
				$id = R::store($user);

echo "MAPEL  : " . $mapelid ."<br>";
echo "NIS : " . $nis ."<br>";
echo "ID KELAS : " . $idkelas ."<br>";
echo "NIP : " . $nip ."<br>";
echo "NILAI : " . $nilai ."<br>";
echo "<br>";
}
?>

