<?php
//untuk konek ke mysql
$konek = mysql_connect("localhost","root","")
or die("koneksi GAGAL");

//untuk konek ke salah satu DB
mysql_select_db("ta",$konek)
or die ("Database tidak ditemukan!!");
?>