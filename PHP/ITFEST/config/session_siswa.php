<?php
session_start();

if (!($SESSION[SES_SISWA]))
{
	echo "<script> window.alert('Untuk mengakses, Anda Harus Login sebagai SISWA !'');
			window.location='..index.php')</script>";
}
?>