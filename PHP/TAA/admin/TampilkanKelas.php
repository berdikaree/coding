

  <div class="row">
<div class="col s12" align="center" style="color: black;"><h2>Tampilkan Kelas</h2></div>
<div class="col s6"></div>
</div>

  <div class="container">
    <div class="row">
      
<a class="waves-effect waves-light btn" href="?page=tambahkelas">Tambah</a>
<p>
<a class="waves-effect waves-light btn" href="?page=backupkelas">Backup</a>
</p></div>
<h6>
<table class=" striped responsive-table">
        <thead>
          <tr>
              <th data-field="no" width="30px">Kode Kelas</th>
              <th data-field="name" width="100px">NIP Walikelas</th>
              <th data-field="kkm" width="40px">Nama Kelas</th>
              <th data-field="price" width="40px">Keterangan</th>
              <th data-field="price" width="40px">Aksi</th>
          </tr>
        </thead>

        <tbody>
        <?php
  $sql= "SELECT * FROM KELAS";
  $data= mysql_query ($sql, $konek);
  while ($record = mysql_fetch_array ($data))
  {
    echo "<tr>";
    echo "<td>$record[ID_KELAS]</td>";
    echo "<td>$record[NIP]</td>";
    echo "<td>$record[NAMA_KELAS]</td>";
    echo "<td>$record[KETERANGAN]</td>";
    echo "<td><a href='EditKelas.php?ID_KELAS=$record[ID_KELAS]'><i class="."material-icons".">mode_edit</i></a><a href='AksiHapusKelas.php?NIP=$record[ID_KELAS]'><i class="."material-icons".">delete</i></a></td>";
    echo "</tr>";
    }
  ?>
        </tbody>
      </table>
</h6>
</div>
</div>
</div>