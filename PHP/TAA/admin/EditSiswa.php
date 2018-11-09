<?php
include "../config/koneksi.php";
$n = $_GET['NIS'];
//SQL untuk nyari isian yang ada di form tampilkan obat
$sql = "SELECT * FROM SISWA WHERE NIS= '$n'";
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
  <div class="row">
<div class="col s12" align="center"><h3>Edit Siswa</h3></div>
</div>
<div class="col s6"></div>
</div>
  <div class="container">
  <form name="siswa" action="AksiEditSiswa.php" method="post">
    <div class="row">
      <div class="col s12 m12 m7">

      <div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" name="NIS" id="NIS" value="<?php echo $record['NIS'];?>">
      <label class="active" for="first_name2">NIS</label>
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
      <input type="text" class="validate" name="NAMA_SISWA" id="NAMA_SISWA" value="<?php echo $record['NAMA_SISWA'];?>">
      <label class="active" for="first_name2">Nama Siswa</label>
    </div>
  </div>

<div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" name="ALAMAT_SISWA" id="ALAMAT_SISWA" value="<?php echo $record['ALAMAT_SISWA'];?>">
      <label class="active" for="first_name2">Alamat Siswa</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input type="date" class="datepicker" name="TGL_LAHIR_SISWA" id="TGL_LAHIR_SISWA" value="<?php echo $record['TGL_LAHIR_SISWA'];?>">
      <label class="active" for="first_name2">Tanggal Lahir Siswa</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" name="NAMA_WALI" id="NAMA_WALI" value="<?php echo $record['NAMA_WALI'];?>">
      <label class="active" for="first_name2">Nama Wali</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" name="ALAMAT_WALI" id="ALAMAT_WALI" value="<?php echo $record['ALAMAT_WALI'];?>">
      <label class="active" for="first_name2">Alamat Wali</label>
    </div>
  </div>
  <div class="row">
  <div class="input-field col s6" align="left">
<label> Pilih Kelas</label><br> <br>
<select class="browser-default" name="pilih_kelas">

<?php
echo"<option> Pilih Kelas </option>";
$sql = "SELECT * FROM KELAS";
$hasil = mysql_query($sql, $konek);
while ($record = mysql_fetch_array($hasil))
{ 
    echo "<option value ='".$record['ID_KELAS']."'";
    echo isset($_POST['pilih_kelas']) && $_POST ['pilih_kelas']
    == $record['ID_KELAS']?" selected ='selected'":"";
    echo ">".$record['NAMA_KELAS']." ".$record['KETERANGAN'].
    "</option>";
}
    
?>
</select>
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
<script>
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
  </script>
</body>
</html>