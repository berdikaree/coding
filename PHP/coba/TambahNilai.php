
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
<center><h1> Tambah Nilai Siswa </h1></center>
<h6>
      <div class="col s12 m12 m7">
<form class="col s6" method="post" action="">
<div class="input-field col s6" align="center">
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
<br>
<button class="waves-effect waves-light btn left" type="submit" name="tampil_siswa"><i class="material-icons right">cloud</i>Tampilkan Siswa</a></button>
</div>
<?php
$kelas_dipilih = $_POST['pilih_kelas'];
if (isset($_POST['tampil_siswa']))
{
    $sql= "SELECT * FROM SISWA WHERE ID_KELAS = ".$kelas_dipilih." order by NAMA_SISWA";
    $hasil=mysql_query($sql, $konek);
?>
<table striped>
        <thead>
          <tr style='color: black;'>
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

                $cari_nilai[$i]=mysql_query("SELECT * FROM NILAI WHERE NIS='".$NIS[$i]."'AND ID_MAPEL=".$_SESSION['MAPEL']);
                
                $ada_nilai[$i] = mysql_num_rows ($cari_nilai[$i]);
                if($ada_nilai[$i] > 0) //jika nilai sudah pernah diinpputkan
                {
                        $r_nilai = mysql_fetch_array($cari_nilai[$i]);
                        echo "<td> <input type='text' name ='".$i.
                        "' value='".$r_nilai['NILAI']."'</td> </tr>";
                } //jika nilai belum pernah diinputkan
                else
                    echo"<td><input type='text' name='".$i."' value='0'></td></tr>";
                    $i++;
            } //tutup while
            
         ?>
        </tbody>
      </table>
      <button class="waves-effect waves-light btn right" type="submit" name="simpan_nilai"><i class="material-icons right">cloud</i>Simpan Nilai</a></button>';
                <?php
                }//tutup if
                if(isset($_POST['simpan_nilai']))
                {
                    $daftar_siswa= mysql_query("SELECT * FROM SISWA WHERE ID_KELAS = ".$kelas_dipilih." order by NAMA_SISWA");
                    $i=0;
                    while ($r=mysql_fetch_array($daftar_siswa)) {
                        //periksa apakah nilai sudah ada atau belum
                        $cari_nilai[$i]= mysql_query("SELECT *FROM NILAI WHERE NIS = '".$r[0]."' AND ID_MAPEL= ".$_SESSION['MAPEL']);
                        $ada_nilai[$i]= mysql_num_rows($cari_nilai[$i]);
                        if($_POST[$r[0]] > 75)
                            $ketererangan ="Tuntas";
                        else
                            $ketererangan= "Tidak Tuntas";
                        //echo "SELECT * FROM NILAI WHERE NIS='".$r['NIS']."' AND ID_MAPEL=".$_SESSION['MAPEL'];

                        $cari_nilai[$i]=mysql_query("SELECT * FROM NILAI WHERE NIS='".$r['NIS']."' AND ID_MAPEL=".$_SESSION['MAPEL']);
                
                        $ada_nilai[$i] = mysql_num_rows ($cari_nilai[$i]);

                        if($ada_nilai[$i] > 0) //nilai sudah ada, namun diupdate
                        {
                            
                            $update_nilai = mysql_query("UPDATE nilai SET nilai = ".$_POST[$i]." WHERE NIS = '".$r[0]."' AND ID_MAPEL= ".$_SESSION['MAPEL']);
                           // echo "UPDATE nilai SET nilai = ".$_POST[$i]." WHERE NIS = '".$r[0]."' AND ID_MAPEL= ".$_SESSION['MAPEL'];
                        }
                        else //Nilai belum ada, ditambahkan nilai baru mapel_id, nilai, nis, keterangan, tanggal
                        {

                            $tambah_nilai = mysql_query("INSERT INTO NILAI (NIS, ID_MAPEL, ID_KELAS, NIP, NILAI) VALUES ('".$r[0]."', ".$_SESSION['MAPEL'].", ".$_POST['pilih_kelas'].", '".$_SESSION['NIP']."', ".$_POST[$i].");");
                            //echo "INSERT INTO NILAI (NIS, ID_MAPEL, ID_KELAS, NIP, NILAI) VALUES ('".$r[0]."', ".$_SESSION['MAPEL'].", ".$_POST['pilih_kelas'].", '".$_SESSION['NIP']."', ".$_POST[$i].");";
                        }
                        $i++;
                    }
                }
                     ?>
      <br>

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
    $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
    </script>
</body>
</html>