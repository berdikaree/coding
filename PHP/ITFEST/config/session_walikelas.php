<?php
session_start();

if (!($SESSION[SES_WALIKELAS]))
{
	echo "<script> window.alert('Untuk mengakses, Anda Harus Login sebagai WALIKELAS ');
			window.location='..index.php')</script>";
}
?>