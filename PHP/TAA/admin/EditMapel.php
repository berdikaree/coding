  <?php
include "../config/koneksi.php";
$n = $_GET['ID_MAPEL'];
//SQL untuk nyari isian yang ada di form tampilkan mapel
$sql = "SELECT * FROM MAPEL WHERE ID_MAPEL= $n";
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
<div class="col s12" align="center"><h3>Edit Mata Pelajaran</h3></div>
</div>
<div class="col s6"></div>
</div>
<form action="" method="post">
  <div class="container">
  <form name="siswa" action="AksiTambahMapel.php" method="post">
    <div class="row">
      <div class="col s12 m12 m7">

<div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" id="ID_MAPEL" name="ID_MAPEL" value="<?php echo $record['ID_MAPEL'];?>">
      <label class="active" for="first_name2">Kode Mapel</label>
    </div>
   </div>

<div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" id="NAMA_MAPEL" name="NAMA_MAPEL" value="<?php echo $record['NAMA_MAPEL'];?>">
      <label class="active" for="first_name2">Nama Mapel</label>
    </div>
   </div>

    <div class="row">
    <div class="input-field col s6">
    <div class="input-field col s12">
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
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input type="text" class="validate" id="KKM" name="KKM" value="<?php echo $record['KKM'];?>">
      <label class="active" for="first_name2">KKM</label>
    </div>
  </div>
  
      <button class="btn waves-effect waves-light right" type="submit" name="action">Simpan
  </button>
</div>
</div>
</div>

<?php
if(isset($_POST['action']))
{
  $sql= "UPDATE MAPEL SET
    NAMA_MAPEL= '".$_POST['NAMA_MAPEL']."',
    JENIS_MAPEL= '".$_POST['JENIS_MAPEL']."',
    KKM= ".$_POST['KKM']."
    WHERE ID_MAPEL= ".$n.";";
//echo $sql;
//Eksekusi sql insert into  
$hasilTambah= mysql_query($sql,$konek);
if($hasilTambah)
  echo "<script> alert('Data BERHASIL diubah!');</script>";
else
  echo "<script> alert('Data GAGAL diubah!');</script>";
echo '<script>
window.location ="media_admin.php?page=mapel";
</script>';
  
}
?>
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
</body>
</html