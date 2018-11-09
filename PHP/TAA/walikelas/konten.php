
<?php
if(empty($_GET['page']))
echo "";
else if ($_GET['page']=='lihatnilai'){
include "TampilkanNilai.php";
}
else if ($_GET['page']=='datanilai'){
include "TampilkanSiswa.php";
}
else if ($_GET['page']=='logout'){
include "../logout.php";
}
else{
echo "MODUL TIDAK DITEMUKAN!";
}
?>