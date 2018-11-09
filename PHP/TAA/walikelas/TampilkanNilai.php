
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
<form method="post" name="tampilkannilai" action="">
  <div class="row">
<div class="col s12" align="center"><h1>Tampilkan Nilai</h1></div>
<div class="col s6"></div>
</div>
  <div class="container">
    <div class="row">
      <div class="col s12 m12 m7">
</select>
</div>
<!-- ini untuk tampilkan mata pelajaran -->
<div class="input-field col s6" align="center">
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
<button class="waves-effect waves-light btn left" type="submit" name="tampil_siswa"><i class="material-icons right">cloud</i>Tampilkan Data Nilai</a></button>
</div>
<?php
$kelas_dipilih = $_SESSION['ID_KELAS'];
$mapel_dipilih = $_POST['pilih_mapel'];
if (isset($_POST['tampil_siswa']))
{
    $sql= "SELECT * FROM SISWA WHERE ID_KELAS = ".$_SESSION['ID_KELAS']." ORDER BY NAMA_SISWA";
    $hasil=mysql_query($sql, $konek);
?>
<!-- ini nampilin data tadi yang udah dipilih -->
<table striped>
        <thead>
          <tr style='color:black;'>
              <th data-field="NIS">NIS</th>
              <th data-field="Nama_siswa">Nama Siswa</th>
              <th data-field="nilai">Nilai</th>
          </tr>
        </thead>
        <tbody>
        <?php
            $i=0;
            while($record=mysql_fetch_array($hasil))
            {
                $NIS[$i]=$record ['NIS'];
                echo"
                <tr>
                <td>".$record['NIS']."</td>
                <td>".$record['NAMA_SISWA']."</td>";

                $cari_nilai[$i]=mysql_query("SELECT * FROM NILAI WHERE NIS='".$NIS[$i]."'AND ID_MAPEL=".$mapel_dipilih);
                $r_nilai = mysql_fetch_array($cari_nilai[$i]);
                        echo "<td>".$r_nilai['NILAI']."</td> </tr>";
                
                } //tutup while
              }
         ?>
        </tbody>
      </table>
</form>
</h6>
</div>
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
    $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
    </script>
<script>
    $(document).ready(function() {
    $('select').material_select();
  });
</script>
</body>
</html>