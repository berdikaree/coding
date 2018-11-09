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
    <meta name="msapplication-TileColor" content="#00bcd4">
    <link href="assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="assets/font/material-design-icons" rel="stylesheet">
</head>
<body>
<!--navbar-->
<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"><img src="images/bo.png"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Menu</a></li>
        <li><a href="#">Profil</a></li>
        <li><a href="#">Log Out</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="#">Menu</a></li>
        <li><a href="#">Profil</a></li>
        <li><a href="#">Log Out</a></li>
      </ul>
    </div>
  </nav>
</div>
<!--image slide-->
  <div class="slider">
    <ul class="slides">
      <li>
   		<img src="images/slide1.jpg"><!-- random image -->
        <div class="caption center-align">
         <!-- <h3>This is our big Tagline!</h3>-->
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="images/slide2.jpg"> <!-- random image -->
        <div class="caption left-align">
          <!--<h3>Left Aligned Caption</h3>-->
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="images/slide3.jpg"> <!-- random image -->
        <div class="caption right-align">
          <!--<h3>Right Aligned Caption</h3>-->
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="images/slide4.jpg"> <!-- random image -->
        <div class="caption center-align">
         <!-- <h3>This is our big Tagline!</h3>-->
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
 <!--isinya-->
  <div class="row">
    <div class="col s12"><p>s12</p></div>
    <div class="col s12 m4 l2"><p>s12 m4</p></div>
    <div class="col s12 m4 l8"><p>s12 m4</p></div>
    <div class="col s12 m4 l2"><p>s12 m4</p></div>
  </div>
  <div class="row">
    <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
    <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
    <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
    <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
  </div>
  <!--footer-->
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © Powered by SMK Telekomunikasi Darul ''
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
        
<script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>    
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
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