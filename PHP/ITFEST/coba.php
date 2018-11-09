
<!DOCTYPE html>
<html lang="en">
<head>
    <title>IT FEST</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta name="msapplication-TileColor" content="#00bcd4">
    <link href="assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="assets/css/font.css" rel="stylesheet">
</head>
<body>
<!--navbar-->
 <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">SATU</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html"><i class="material-icons">search</i></a></li>
        <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
        <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
        <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
      </ul>
    </div>
  </nav>
<!--image slide-->
  <div class="slider">
    <ul class="slides">
      <li>
   		<img src="images/a.jpg"><!-- random image -->
        <div class="caption center-align">
         <!-- <h3>This is our big Tagline!</h3>-->
          <h5 class="light grey-text text-lighten-3">Universitas Nusantara PGRI Kediri</h5>
        </div>
      </li>
      <li>
        <img src="images/a.jpg"> <!-- random image -->
        <div class="caption left-align">
          <!--<h3>Left Aligned Caption</h3>-->
          <h5 class="light grey-text text-lighten-3">Universitas Nusantara PGRI Kediri</h5>
        </div>
      </li>
      <li>
        <img src="images/a.jpg"> <!-- random image -->
        <div class="caption right-align">
          <!--<h3>Right Aligned Caption</h3>-->
          <h5 class="light grey-text text-lighten-3">Universitas Nusantara PGRI Kediri</h5>
        </div>
      </li>
      <li>
        <img src="images/a.jpg"> <!-- random image -->
        <div class="caption center-align">
         <!-- <h3>This is our big Tagline!</h3>-->
          <h5 class="light grey-text text-lighten-3">Universitas Nusantara PGRI Kediri</h5>
        </div>
      </li>
    </ul>
  </div>
 <!--isinya-->
  
  <!--footer-->
        <div id="footer">
      <div class="container">
        <section>
          <header>
            <h2>Contact Us</h2>
            <span class="byline">Informatics Champions 2017</span>
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
        
<script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>    
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script>function my_html(menu){
if(menu==1){
	$.ajax({
     type: "GET",
     url: 'viewsiswa.php', 
     success: function(data) {
           // data is ur summary
          $('#viewsiswa').html(data);
     }

   });
   	
}else if(menu==2){
	$.ajax({
     type: "GET",
     url: 'viewnilai.php', 
     success: function(data) {
           // data is ur summary
          $('#viewnilai').html(data);
     }

   });
   	
}else{

		document.getElementById("halaman").innerHTML = "Menu "+menu+"!";		}
}</script>
<script>
	$( document ).ready(function(){
		
		$(".button-collapse").sideNav();
		
        
	});
	    $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
	// Pause slider
$('.slider').slider('pause');
// Start slider
$('.slider').slider('start');
// Next slide
$('.slider').slider('next');
// Previous slide
$('.slider').slider('prev');
        
	</script>
</body>
</html>