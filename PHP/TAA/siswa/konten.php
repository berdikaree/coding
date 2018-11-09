
<?php
if(empty($_GET['page']))
echo "";
else if ($_GET['page']=='biodata'){
include "Biodata.php";
}
else if ($_GET['page']=='LihatNilai'){
include "lihatnilai.php";
}
else if ($_GET['page']=='logout'){
include "../logout.php";
}
else{
echo "MODUL TIDAK DITEMUKAN!";
}
?>