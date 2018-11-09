

<div class="row">
<div class="col s12" align="center"><h2>Tampilkan Mata Pelajaran</h2></div>
<div class="col s6"></div>
</div>
  <div class="container">
    <div class="row">
<a class="waves-effect waves-light btn" href="?page=tambahmapel">Tambah</a>
<p>
<a class="waves-effect waves-light btn" href="?page=backupmapel">Backup</a>
<h6>
<table class=" striped responsive-table">
        <thead>
          <tr>
              <th data-field="no" width="30px">Kode Mapel</th>
              <th data-field="name" width="100px">Nama Mata Pelajaran</th>
              <th data-field="kkm" width="40px">Jenis Mapel</th>
              <th data-field="price" width="40px">KKM</th>
              <th data-field="price" width="40px">Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php
  $sql= "SELECT * FROM MAPEL";
  $data= mysql_query ($sql, $konek);
  while ($record = mysql_fetch_array ($data))
  {
    echo "<tr>";
    echo "<td>$record[ID_MAPEL]</td>";
    echo "<td>$record[NAMA_MAPEL]</td>";
    echo "<td>$record[JENIS_MAPEL]</td>";
    echo "<td>$record[KKM]</td>";
    echo "<td><a href='EditMapel.php?ID_MAPEL=$record[ID_MAPEL]'><i class="."material-icons".">mode_edit</i></a><a href='AksiHapusMapel.php?ID_MAPEL=$record[ID_MAPEL]'><i class="."material-icons".">delete</i></a></td>";
    echo "</tr>";
    }
  ?>
            
        </tbody>
      </table>
</h6>
</div>
</div>