<?php

$servername = "localhost";
$username = "admin";
$password = "sony";
$dbname = "bootcamp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$kode=$_POST['kode'];
$sql = "SELECT * FROM barang 
		WHERE id='$kode'";
$res = $conn->query($sql);
$jml = mysqli_num_rows($res);

echo $jml.'|';

if($jml>0){
	while($dat = $res->fetch_assoc()){
		echo $dat['id'].'|'.$dat['nama'].'|'.$dat['satuan'];
	}
}

?>