<?php
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];
$tinggi = $_POST['tinggi'];

$volume=(int)$panjang*(int)$lebar*(int)$tinggi;
echo $volume;
  ?>
