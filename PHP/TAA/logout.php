<?php
session_start();
session_destroy(); //menghapus session
?>
<script>
alert ("Log out Berhasil");
window.location= "../index.php";
</script>