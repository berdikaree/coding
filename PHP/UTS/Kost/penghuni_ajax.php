<?php

include 'host.php';

$kode=$_POST['kode'];
$sql = "SELECT * FROM penghuni 
		WHERE id='$kode'";
$res = $conn->query($sql);
$jml = mysqli_num_rows($res);

echo $jml.'|';

if($jml>0){
	while($dat = $res->fetch_assoc()){
		echo $dat['id'].'|'.$dat['nama'].'|'.$dat['alamat'].'|'.$dat['kamar_id'];
	}
}

?>