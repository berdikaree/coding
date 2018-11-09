<?php
session_start();

if (!($SESSION[SES_GURU]))
{
	echo "<script> window.alert('Untuk mengakses, Anda Harus Login sebagai GURU !'');
			window.location='..index.php')</script>";
}
?>