
<h6>
  <div class="row">
<div class="col s12" align="center" style="color: black;"><h2>Tampilkan Login</h2></div>
<div class="col s6"></div>
</div>
  <div class="container">
    <div class="row">
<a class="waves-effect waves-light btn" href="?page=tambahlogin">Tambah</a>
<p>
<a class="waves-effect waves-light btn" href="?page=backuplogin">Backup</a>
</p></div>

<table class=" striped responsive-table">
        <thead>
          <tr>
              <th data-field="no" width="30px">Kode login</th>
              <th data-field="name" width="100px">Username</th>
              <th data-field="kkm" width="40px">Password</th>
              <th data-field="price" width="40px">Aksi</th>
          </tr>
        </thead>

        <tbody>
        <?php
  $sql= "SELECT * FROM LOGIN";
  $data= mysql_query ($sql, $konek);
  while ($record = mysql_fetch_array ($data))
  {
    echo "<tr>";
    echo "<td>$record[ID_LOGIN]</td>";
    echo "<td>$record[USERNAME]</td>";
    echo "<td>$record[PASSWORD]</td>";
    echo "<td><a href='EditLogin.php?ID_LOGIN=$record[ID_LOGIN]'><i class="."material-icons".">mode_edit</i></a><a href='AksiHapusLogin.php?ID_LOGIN=$record[ID_LOGIN]'><i class="."material-icons".">delete</i></a></td>";
    echo "</tr>";
    }
  ?>
        </tbody>
      </table>
</h6>
</div>
</div>
</div>