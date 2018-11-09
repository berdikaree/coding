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
<form action="AksiTambahLogin.php" name="form1" method="post" >
  <div class="row">
<div class="col s12" align="center"><h2>Tambah Login</h2></div>
</div>
<div class="col s6"></div>
</div>
<h5>
  <div class="container">
    <div class="row">
      <div class="col s12 m12 m7">
<div class="row">
    <div class="input-field col s6">
      <input value="" id="ID_LOGIN" type="text" class="validate" name="ID_LOGIN">
      <label class="active" for="first_name2">Kode Login</label>
    </div>
  </div>
<div class="row">
    <div class="input-field col s6">
      <input value="" id="USERNAME" type="text" class="validate" name="USERNAME">
      <label class="active" for="first_name2">USERNAME</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input value="" id="PASSWORD" type="text" class="validate" name="PASSWORD">
      <label class="active" for="first_name2">PASSWORD</label>
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