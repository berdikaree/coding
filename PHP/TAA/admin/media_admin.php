

<?php
include "../config/koneksi.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>SIAKAD</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta name="msapplication-TileColor" content="#00bcd4">
    <link href="assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../assets/css/font.css" rel="stylesheet">
	</head>
	<body class="homepage">

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<!--<nav id="nav">
					<ul>
						<li class="active"><a href="index.html">Homepage</a></li>
						<li><a href="left-sidebar.html">Left Sidebar</a></li>
						<li><a href="right-sidebar.html">Right Sidebar</a></li>
						<li><a href="no-sidebar.html">No Sidebar</a></li>
					</ul>
				</nav>-->
			</div>
			<!--<div class="container">  -->
?> 
				
				<!-- Logo -->
				<div id="logo">
					<h6><a href=?module=home>SMK Telekomunikasi Darul 'Ulum</a></h6>
					<span class="tag"></span>
				</div>
			</div>
		</div>

	<!-- Featured -->
<div id="featured">
<div class="container">
<header>
					<h2>Welcome to SISTEM INFORMASI AKADEMIK</h2>
				</header>

	<div class="row">
    <div class="col s2"><p><center><i class="large material-icons">perm_identity</i></p><a class="waves-effect waves-light btn light-blue accent-2" href="?page=guru">Guru</a></center></p></div>
    <div class="col s2"><p><center><i class="large material-icons">supervisor_account</i></p><a class="waves-effect waves-light btn light-blue accent-2" href="?page=siswa">Siswa</a></center></p></div>
    <div class="col s2"><p><center><i class="large material-icons">view_list</i></p><a class="waves-effect waves-light btn light-blue accent-2" href="?page=kelas">Kelas</a></center></p></div>
    <div class="col s2"><p><center><i class="large material-icons">toc</i></p><a class="waves-effect waves-light btn light-blue accent-2" href="?page=mapel"> Mapel</a></center></p></div>
    <div class="col s2"><p><center><i class="large material-icons">web</i></p><a class="waves-effect waves-light btn light-blue accent-2" href="?page=login">User</a></center></p></div>
    <div class="col s2"><p><center><i class="large material-icons">power_settings_new</i></p><a class="waves-effect waves-light btn light-blue accent-2" href="?page=logout">Logout</a></center></p></div>
  </div>
<?php
include "konten.php";
?>
</div>
</div>
	<!-- Main -->

		

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;Seberkas cahaya menjadi begitu luar biasa bukan karena cahayanya, tetapi karena keadaan sekelilingnya. Semakin pekat, semakin bernilailah cahaya itu. Maka nilai itu bukan oleh apa yang di keluarkan, tetapi apa yang telah memberikannya. Karena hanya dengan memberikan dia akan menerima&rdquo;</blockquote>
				</section>
			</div>
		</div>

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2>Contact Us</h2>
						<span class="byline">Sistem Informasi Akademik</span>
					</header>
					<ul class="contact">
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li class="active"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
						<li><a href="#" class="fa fa-tumblr"><span>Google+</span></a></li>
					</ul>
				</section>
			</div>
		</div>

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				 <a href="http://templated.co">© 2017 SMK Telekomunikasi Darul 'Ulum Jombang</a>
			</div>
		</div>

	</body>
</html>