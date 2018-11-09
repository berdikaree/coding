<?php
include 'koneksi.php';
$username= $_POST['username'];
$password=$_POST['password'];

$query = "SELECT * FROM admin WHERE user='$username' and pass='$password'";
$result = $connect->query($query) or die($connect->error.__LINE__);
if($result->num_rows > 0) {
header("Location: menu_admin.php");
exit();
}
else {
echo 'username/password yang anda masukkan salah. Silahkan ulang kembali';
echo "<a href='admin.php'><input type='submit' id='submit' value='Kembali'></a>";	
}
?>
