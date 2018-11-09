<?php

if(empty($_GET['page']))
echo 
"";
else if ($_GET['page']=='guru'){
include "TampilkanGuru.php";
}
else if ($_GET['page']=='siswa'){
include "TampilkanSiswa.php";
}
else if ($_GET['page']=='kelas'){
include "TampilkanKelas.php";
}
else if ($_GET['page']=='mapel'){
include "TampilkanMapel.php";
}
else if ($_GET['page']=='login'){
include "TampilkanLogin.php";
}
else if ($_GET['page']=='logout'){
include "../logout.php";
}
else if ($_GET['page']=='backupsiswa'){
include "backup.php";
}
else if ($_GET['page']=='backupguru'){
include "backupguru.php";
}
else if ($_GET['page']=='backupkelas'){
include "backupkelas.php";
}
else if ($_GET['page']=='backupmapel'){
include "backupmapel.php";
}
else if ($_GET['page']=='backuplogin'){
include "backuplogin.php";
}
else if ($_GET['page']=='tambahguru'){
include "TambahGuru.php";
}
else if ($_GET['page']=='tambahsiswa'){
include "TambahSiswa.php";
}
else if ($_GET['page']=='tambahmapel'){
include "TambahMapel.php";
}
else if ($_GET['page']=='tambahkelas'){
include "TambahKelas.php";
}
else if ($_GET['page']=='tambahlogin'){
include "TambahLogin.php";
}
else{
echo "MODUL TIDAK DITEMUKAN!";
}
?>