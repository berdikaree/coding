<?php
include "../config/koneksi.php";
$n = $_GET['NIP'];
//SQL untuk nyari isian yang ada di form tampilkan guru
$sql = "SELECT * FROM GURU WHERE NIP= '$n'";
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
<h6>
  <div class="row">
<div class="col s12" align="center"><h3>Edit Guru</h3></div>
</div>
<div class="col s6"></div>
</div>
  <div class="container">
  <form name="Guru" action="AksiEditGuru.php" method="post">
    <div class="row">
      <div class="col s12 m12 m7">

      <div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" name="NIP" id="NIP" value="<?php echo $record['NIP'];?>">
      <label class="active" for="first_name2">NIP</label>
    </div>
    </div>

<div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" name="ID_LOGIN" id="ID_LOGIN" value="<?php echo $record['ID_LOGIN'];?>">
      <label class="active" for="first_name2">Kode Login</label>
    </div>
    </div>

    <div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" name="NAMA_GURU" id="NAMA_GURU" value="<?php echo $record['NAMA_GURU'];?>">
      <label class="active" for="first_name2">Nama Guru</label>
    </div>
  </div>

<div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" name="ALAMAT_GURU" id="ALAMAT_GURU" value="<?php echo $record['ALAMAT_GURU'];?>">
      <label class="active" for="first_name2">Alamat Guru</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" name="TGL_LHR_GURU" id="TGL_LHR_GURU" value="<?php echo $record['TGL_LHR_GURU'];?>">
      <label class="active" for="TGL_LHR_GURU">Tanggal Lahir Guru</label>
    </div>
  </div>

<div class="row">
    <div class="input-field col s6" align="left">
<label> Pilih Mata Pelajaran</label><br> <br>
<select class="browser-default" name="pilih_mapel">

<?php
echo"<option> Pilih Mata Pelajaran </option>";
$sql = "SELECT * FROM MAPEL";
$hasil = mysql_query($sql, $konek);
while ($record = mysql_fetch_array($hasil))
{ 
    echo "<option value ='".$record['ID_MAPEL']."'";
    echo isset($_POST['pilih_mapel']) && $_POST ['pilih_mapel']
    == $record['ID_MAPEL']?" selected ='selected'":"";
    echo ">".$record['NAMA_MAPEL']." ".$record['KETERANGAN'].
    "</option>";
}  
?>
</select>
    </div>
  </div>

  
<button class="btn waves-effect waves-light right" type="submit" name="action">Simpan
  </button>
</div>
</div>
</form>
</div>
</h6>

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