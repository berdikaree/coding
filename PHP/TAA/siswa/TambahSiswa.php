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
<form method="post" name="TambahSiswa" action="AksiTambahSiswa.php">
  <div class="row">
<div class="col s12" align="center"><h3>Tambah Siswa</h3></div>
</div>
<div class="col s6"></div>
</div>
  <div class="container">
    <div class="row">
      <div class="col s12 m12 m7">

      <div class="row">
    <div class="input-field col s6">
      <input value="" id="first_name2" type="text" class="validate" name="NIS">
      <label class="active" for="first_name2">NIS</label>
    </div>
    </div>

<div class="row">
    <div class="input-field col s6">
      <input value="" id="first_name2" type="text" class="validate" name="ID_LOGIN">
      <label class="active" for="first_name2">Kode Login</label>
    </div>
    </div>

    <div class="row">
    <div class="input-field col s6">
      <input value="" id="first_name2" type="text" class="validate" name="NAMA_SISWA">
      <label class="active" for="first_name2">Nama Siswa</label>
    </div>
  </div>

<div class="row">
    <div class="input-field col s6">
      <input value="" id="first_name2" type="text" class="validate" name="ALAMAT_SISWA">
      <label class="active" for="first_name2">Alamat Siswa</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input value="" id="first_name2" type="date" class="datepicker" name="TGL_LAHIR_SISWA">
      <label class="active" for="first_name2">Tanggal Lahir Siswa</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input value="" id="first_name2" type="text" class="validate" name="NAMA_WALI">
      <label class="active" for="first_name2">Nama Wali</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input value="" id="first_name2" type="text" class="validate" name="ALAMAT_WALI">
      <label class="active" for="first_name2">Alamat Wali</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input value="" id="first_name2" type="text" class="validate" name="ID_LOGIN">
      <label class="active" for="first_name2">Kode Kelas</label>
    </div>
  </div>

      <button class="btn waves-effect waves-light right" type="submit" name="action">Tambah
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
<script>
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
  </script>
</body>
</html>