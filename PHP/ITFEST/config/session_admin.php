<?php
session_start();

if (!($SESSION[SES_ADM]))
{
	echo "<script> window.alert('Untuk mengakses, Anda Harus Login sebagai ADMIN ');
			window.location='..index.php')</script>";
}
?>