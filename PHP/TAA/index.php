

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Raport Online</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta name="msapplication-TileColor" content="#00bcd4">
    <link href="assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
</head>
<body background="images/header.jpg">
<div class="signin-form">
	<div class="container">
		          <div class="section">
		<div class="row hide-on-med-and-down" style="height: 50px;"> </div>
		<div class="row">
<div class="col s12 m6 l4"><p></p></div>			
<div class="col s12 m6 offset-m3 card ">
	<div style="padding:20px 20px 40px 20px;">
    <center><p class="flow-text"> Laporan Hasil Belajar Siswa  </p></center>
		
       <form method="post" id="login-form" action="aksiLogin.php" >
        <div id="error"></div>
                <div class="row">
                <div class="col s12">
                <center><img class="materialboxed" align="center" width="100" src="images/logo.png"></center></div>
                </div>

        
        <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="NISN / NIP" required />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="PASSWORD" />
        </div>
  </div>
        <div class="form-group">
            <button type="submit" name="btn-login" class="btn pink darken-4 waves-effect waves-light right">
             LOGIN <i class="mdi-content-send right"></i>
            </button>
        </div
      ></form></div>
</div>
      <div class="col s12 m12 l4"><p></p>
      </div>

	</div></div>
    </div>
    
</div>
  
<script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>    
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script>
	$( document ).ready(function(){
		
		$(".button-collapse").sideNav();
        
	})
	</script>
<script>
    $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
    </script>
</body>
</html>