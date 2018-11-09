
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
  <div class="row">
<div class="col s12" align="center"><h2>Tambah Mata Pelajaran</h2></div>
</div>
<div class="col s6"></div>
</div>
<form method="post" action="AksiTambahMapel.php" name="tambahmapel">
<h5>
  <div class="container">
    <div class="row">
      <div class="col s12 m12 m7">

<div class="row">
    <div class="input-field col s6">
      <input value="" id="ID_MAPEL" type="text" class="validate" name="ID_MAPEL">
      <label class="active" for="first_name2">Kode Mata Pelajaran</label>
    </div>
  </div>
    <div class="row">
    <div class="input-field col s6">
      <input value="" id="NAMA_MAPEL" type="text" class="validate" name="NAMA_MAPEL">
      <label class="active" for="first_name2">Nama Mata Pelajaran</label>
    </div>
  </div>
      <div class="row">
      <div class="input-field col s6">
      <name="JENIS_MAPEL" value="<?php echo $record['JENIS_MAPEL'];?>">
    <select name="JENIS_MAPEL">
      <option value="" disabled selected>Pilih Jenis Mata Pelajaran</option>
      <option value="NORMATIF">NORMATIF</option>
      <option value="ADAPTIF">ADAPTIF</option>
      <option value="PRODUKTIF">PRODUKTIF</option>
    </select>
    <label>Jenis Mata Pelajaran</label>
  </div>
  </div>
    

  <div class="row">
    <div class="input-field col s6">
      <input value="" id="KKM" type="text" class="validate" name="KKM">
      <label class="active" for="first_name2">KKM</label>
    </div>
  </div>
  
      <button class="btn waves-effect waves-light right" type="submit" name="action">Tambah
  </button>
</div>
</div>
</div>
</form>

<script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>    
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script>
    $( document ).ready(function(){
        
        $(".button-collapse").sideNav();
        
    })
    </script>
    <script>
      $(document).ready(function() {
    $('select').material_select();
  });
    </script>