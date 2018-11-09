<?php
include "../config/koneksi.php";
$n = $_GET['ID_KELAS'];
//SQL untuk nyari isian yang ada di form tampilkan kelas
$sql = "SELECT * FROM KELAS WHERE ID_KELAS=".$n;
//echo $sql;
$data = mysql_query($sql, $konek);
$record = mysql_fetch_array($data);
?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <title>Raport Online</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta name="msapplication-TileColor" content="#00bcd4">
    <link href="assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
</head>
<body>
<form action="AksiEditKelas.php" name="form1" method="post" >
  <div class="row">
<div class="col s12" align="center"><h3>Edit Kelas</h3></div>
</div>
<div class="col s6"></div>
</div>
  <div class="container">
    <div class="row">
      <div class="col s12 m12 m7">

<div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" name="ID_KELAS" id="ID_KELAS" value="<?php echo $record['ID_KELAS'];?>">
      <label class="active" for="first_name2">Kode Kelas</label>
    </div>
  </div>
<div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" name="NIP" id="NIP" value="<?php echo $record['NIP'];?>">
      <label class="active" for="first_name2">NIP Walikelas</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input id="NAMA_KELAS" type="text" class="validate" name="NAMA_KELAS" value="<?php echo $record['NAMA_KELAS'];?>">
      <label class="active" for="first_name2">Nama Kelas</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input id="KETERANGAN" type="text" class="validate" name="KETERANGAN" value="<?php echo $record['KETERANGAN'];?>">
      <label class="active" for="first_name2">Keterangan</label>
    </div>
  </div>
  
      <button class="btn waves-effect waves-light right" type="submit" name="action">Simpan
  </button>
</div>
</div>
</div>

<script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>    
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script>
    $( document ).ready(function(){
        
        $(".button-collapse").sideNav();
        
    })
    </script>
</body>
</html