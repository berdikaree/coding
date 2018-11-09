<!DOCTYPE html>
<html>
<head>
	<title>Cairkan Uang Kamu</title>
	<style type="text/css">
		*{margin: 0; padding: 0; font-family: arial;}
		.wrapper{width: 700px; background: #fff; height: 300px}
		.main-wrapper{}
		.head-kop{ overflow: hidden; border-bottom: 1px solid #444; margin-bottom: 10px; padding: 10px; }
		.logo{float: left; font-size: 10px; margin-left: 20px; margin-top: 10px; margin-right: 20px; color: #4689db}
	</style>
</head>
<body style="background: #eee">
<div class="wrapper">
	<div class="main-wrapper">
	<?php 
	include '../root.php';
error_reporting(0);
session_start();
      $article=$db->get_transaksi($_GET['id_tabungan']);
      ?>
		<div class="head-kop">
			<div class="logo">
				<img src="asset/Bank_Central_Asia.png" alt="logo" style="width:80px; height: 40px; margin-right: 10px;">
				<img src="asset/Logo_BRI.png" alt="logo" style="width: 80px; height: 40px;">
			</div>
			<center>
				<div class="logo">
				<h1><u>LAPAKBUKU</u></h1>
				<h2 style="font-size: 10px; color: #444">Bukti Resmi Pembayaran Dari Lapakbuku</h2>
			</div>
			</center>
			<div style="float: right; margin-right: 6%; border-bottom: 1px solid#444;">
				<h3 style="font-size: 13px">NO.76276262</h3>
				<p style="font-size: 12px;">Cek ini Bersifat Resmi</p>
			</div>
		</div>
		<div class="content">
			<p style="font-size: 13px; font-size: 12px; text-align: center;">Dengan ini Lapakbuku mengirim Uang transfer<br>kepada dengan nominal sebagai berikut</p>
			<h1 style="text-align: center; margin-top: 15px; margin-bottom: 15px;">Rp.2.000.000</h1>
			<p style="font-size: 13px; font-size: 12px; text-align: center;">Penarikan Uang ini bisa anda lakukan di Bank BCA dan BRI.<br> Dengan cara Tunjukan Cek ini Kepada Pihak Bank yang Telah Bekersama dengan Lapakbuku</p>
		</div>
	</div>
</div>
</body>
</html>