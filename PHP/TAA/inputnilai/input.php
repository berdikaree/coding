<?php

require_once("include/class.user.php");

$hasil ="";

	$infokelas = R::getAll("select kelas, jurusan from kelas where id='1002'");
	foreach( $infokelas as $info ) {
		$hasil .= "<p class='flow-text'>".$info['kelas']." - ". $info['jurusan']."</p>";
	}
	$no=0;
	$data_user = R::getAll("select * from siswa where ID_KELAS = '1002' order by NIS asc");
$hasil .= "
<form action='simpan.php' method='post'>
<input type='text' id='mapelid' name='mapelid' value='101'>
<input type='text' id='nip' name='nip' value='992018030'>
<input type='text' id='idkelas' name='idkelas' value='1002'>

<table class='highlight striped' >";
$hasil .="<thead>
				<tr>
					<th data-field=\"no\" width=\"30\" class='center'>No</th>

					<th data-field=\"nis\" width=\"200\">NIS</th>
					<th data-field=\"nama\" width=\"200\">NAMA SISWA</th>
 					<th data-field=\"nilai\" width=\"100\">NILAI</th>
				</tr>
			</thead>
			<tbody>";
	foreach( $data_user as $siswa ) {

		$no++;
		$hasil .= "<tr><td>$no</td><td>". $siswa['NIS'] ."</td><td>";
		$hasil .= $siswa['NAMA_SISWA'] ."</td><td style='padding:0px;'>

		<input type='text' name='nilai[".$siswa['NIS']."]' value='80'>
		</td>
		</tr>\n";
	}
$hasil .= "</tbody></table>

<input type='submit' value='simpan' id='simpan' class='btn'>
</form>

";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SIAKAD</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <link rel="icon" href="{{ HTTP_SERVER }}/theme/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon-precomposed" href="{{ HTTP_SERVER }}/theme/images/favicon/apple-touch-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="{{ HTTP_SERVER }}/theme/images/favicon/mstile-144x144.png">

    <link href="assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<body>
	
	<header id="header" class="page-topbar">
		<ul id="menu" style="margin-top:60px;" class="dropdown-content">
			<li><a style="padding:15px;" href="#!">one</a></li>
			<li><a style="padding:15px;" href="#!">two</a></li>
			<li class="divider"></li>
			<li><a style="padding:15px;" href="#!">three</a></li>
		</ul>
		<ul id="profile" style="margin-top:60px;" class="dropdown-content">
			<li><a style="padding:15px;" href="#!">Profile</a></li>
			<li><a style="padding:15px;" href="logout.php">Logout</a></li>
        </ul>
        <div class="navbar-fixed">
				<nav class="deep-cyan">
                  	<div class="nav-wrapper">
	                    <a href="#!" class="brand-logo" style="padding-left: 20px;"><span class="hide-on-med-and-down">Raport Online</span><span class="hide-on-large-only" style="padding-top: 5px;font-size: 18px;"> Sistem Informasi Akademik </span></a>
	                    <a href="#" data-activates="mobile-demo" style="padding-left: 20px;" class="button-collapse">
		                <i class="mdi-navigation-menu"></i></a>
		                
	                    <ul class="right hide-on-med-and-down">
							<li><a class="dropdown-button" href="#!" data-activates="menu">MENU<i class="mdi-navigation-arrow-drop-down right"></i></a>
							</li>
							<li><a class="dropdown-button" href="#!" data-activates="profile"> <i class="mdi-navigation-arrow-drop-down right"></i></a>
							</li>
	                    </ul>
	
	                    <ul class="side-nav" id="mobile-demo">
							<li class="no-padding">
				                <ul class="collapsible collapsible-accordion">
				                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-invert-colors"></i> </a>
				                        <div class="collapsible-body">
				                            <ul>
				                                <li><a href="#">Profile</a>
				                                </li>
				                                
				                                <li><a href="logout.php">Logout</a>
				                                </li>
				                            </ul>
				                        </div>
				                    </li>
				                </ul>
		                    </li>
		                    
							<li><a href="#!" >MENU</a>
							</li>
							<li><a href="#!" >MENU</a>
							</li>
							<li><a href="#!" >MENU</a>
							</li>
		                    
	                    </ul>
                    </div>
                </nav>
        </div>
	</header>
<div class="container">
	<div class="section">
		<div class="row">
			<div class="col s12 m12 l12">
			
			<?php
			echo $hasil;
			?>
			
			</div>
		</div>
	</div>
</div>

<footer class="page-footer cyan">
    <div class="footer-copyright cyan">
      <div class="container"> <center><span> SIAKAD </span></center> </div>
    </div>
</footer>
  
<script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>    
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script>
	$( document ).ready(function(){
		
		$(".button-collapse").sideNav();
        
	})
	</script>
</body>
</html>