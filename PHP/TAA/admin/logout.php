<?php
session_start();
session_destroy(); //menghapus session
?>
<script>
alert ("Log out Berhasil");
window.location= "media_admin.php";
</script>