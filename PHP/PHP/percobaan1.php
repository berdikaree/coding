<?php 

include 'class_matematika.php';

$math = new matematika();
$jari = 10;
$kel_lingkaran = $math­->keliling_lingkaran($jari);
$luas_lingkaran = $math­->luas_lingkaran($jari);
echo "Menghitung Keliling dan Luas Lingkaran <br>";
echo "Jari­Jari : ".$jari."<br>";
echo "Tambah = ".$math->tambah(5,9);
echo "Keliling = .$math­->$kel_lingkaran(10).<br>";
echo "Luas = ".$luas_lingkaran;
?>