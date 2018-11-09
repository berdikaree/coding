
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
<form action="AksiTambahKelas.php" name="form1" method="post" >
  <div class="row">
<div class="col s12" align="center"><h2>Tambah Kelas</h2></div>
</div>
<div class="col s6"></div>
</div>
  <div class="container">
    <div class="row">
      <div class="col s12 m12 m7">
<h5>
<div class="row">
    <div class="input-field col s6">
      <input value="" id="ID_KELAS" type="text" class="validate" name="ID_KELAS">
      <label class="active" for="first_name2">Kode Kelas</label>
    </div>
  </div>
<div class="row">
    <div class="input-field col s6">
      <input value="" id="NIP" type="text" class="validate" name="NIP">
      <label class="active" for="first_name2">NIP Walikelas</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input value="" id="first_name2" type="text" class="validate" name="NAMA_KELAS">
      <label class="active" for="first_name2">Nama Kelas</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input value="" id="first_name2" type="text" class="validate" name="KETERANGAN">
      <label class="active" for="first_name2">Keterangan</label>
    </div>
  </div>
  
      <button class="btn pink darken-4 waves-effect waves-light right" type="submit" name="action">Tambah
  </button>
</div>
</div>
</div>
</h5>

<script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>    
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script>
    $( document ).ready(function(){
        
        $(".button-collapse").sideNav();
        
    })
    </script>
</body>
</html