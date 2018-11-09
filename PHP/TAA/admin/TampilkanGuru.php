
  <div class="row">
<div class="col s12" align="center" style="color: black;"><h2>Tampilkan Guru</h2></div>
<div class="col s6"></div>
</div>
  <div class="container">
    <div class="row">
<a class="waves-effect waves-light btn" href="?page=tambahguru">Tambah</a>
<p>
<a class="waves-effect waves-light btn" href="?page=backupguru">Backup</a>
</p></div>
<h6>
<table class=" striped responsive-table">
        <thead>
          <tr>
              <th data-field="no" width="100px">NIP</th>
              <th data-field="name" width="100px">Nama</th>
              <th data-field="kkm" width="300px">ALamat</th>
              <th data-field="price" width="100px">Tanggal Lahir</th>
              <th data-field="no" style="width: 100px;">aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php
  $sql= "SELECT NIP,NAMA_GURU,ALAMAT_GURU,TGL_LHR_GURU FROM GURU";
  $data= mysql_query ($sql, $konek);
  while ($record = mysql_fetch_array ($data))
  {
    echo "<tr>";
    echo "<td>$record[NIP]</td>";
    echo "<td>$record[NAMA_GURU]</td>";
    echo "<td>$record[ALAMAT_GURU]</td>";
    echo "<td>$record[TGL_LHR_GURU]</td>";
    echo "<td><a href='EditGuru.php?NIP=$record[NIP]'><i class="."material-icons".">mode_edit</i></a><a href='AksiHapusGuru.php?NIP=$record[NIP]'><i class="."material-icons".">delete</i></a></td>";
    echo "</tr>";
    }
  ?>
        </tbody>
      </table>
</h6>
</div>
</div>
