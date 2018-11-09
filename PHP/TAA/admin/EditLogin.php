<?php
include "../config/koneksi.php";
$n = $_GET['ID_LOGIN'];
//SQL untuk nyari isian yang ada di form tampilkan kelas
$sql = "SELECT * FROM LOGIN WHERE ID_LOGIN=".$n;
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
<form action="AksiEditLogin.php" name="form1" method="post" >
  <div class="row">
<div class="col s12" align="center"><h3>Edit Login</h3></div>
</div>
<div class="col s6"></div>
</div>
  <div class="container">
    <div class="row">
      <div class="col s12 m12 m7">

<div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" name="ID_LOGIN" id="ID_LOGIN" value="<?php echo $record['ID_LOGIN'];?>">
      <label class="active" for="first_name2">Kode Login</label>
    </div>
  </div>
<div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" name="USERNAME" id="USERNAME" value="<?php echo $record['USERNAME'];?>">
      <label class="active" for="first_name2">USERNAME</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input id="PASSWORD" type="text" class="validate" name="PASSWORD" value="<?php echo $record['PASSWORD'];?>">
      <label class="active" for="first_name2">PASSWORD</label>
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