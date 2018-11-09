<?php
include "../config/koneksi.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SIAKAD 2017</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta name="msapplication-TileColor" content="#00bcd4">
    <link href="../assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../assets/css/font.css" rel="stylesheet">
</head>
<body>
<h6>
      <div class="col s12"><h3 align="center">BIODATA</h3><hr class="intro-divider"></div>
      <div class="col s6">
      <table width="453" border="1">
<tr>
   <td width="141">NIP</td>
    <td width="10">:</td>
    <td width="280"><?php echo $_SESSION['NIP']; ?></td>
  </tr>
  <tr>
    <td>Nama Siswa</td>
    <td>:</td>
    <td><?php echo $_SESSION['NAMA']; ?></td>
  </tr>
  <tr>
    <td>Alamat Guru</td>
    <td>:</td>
    <td><?php echo $_SESSION['ALAMAT']; ?></td>
  </tr>
  <tr>
    <td>Tanggal Lahir Guru</td>
    <td>:</td>
    <td><?php echo $_SESSION['TGL_LAHIR_GURU']; ?></td>
  </tr>
</table>
      </div>
    </div>
          </div>
          </h6>


  
<script type="text/javascript" src="../assets/js/jquery-1.11.2.min.js"></script>    
<script type="text/javascript" src="../assets/js/materialize.min.js"></script>
<script>
	$( document ).ready(function(){
		
		$(".button-collapse").sideNav();
		
		
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
      
        
	})
	</script>
</body>
</html>