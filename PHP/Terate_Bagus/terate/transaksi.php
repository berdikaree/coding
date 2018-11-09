<?php 
error_reporting(0);
session_start();
if(!$_SESSION['pembeli']){
	?>
    <Script>
    alert("anda harus login terlebih dalulu");
	window.location.href="index.php";
    </script>
    
    <?php

}else{ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Situs Penjualan aman mudah & terpercaya</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /><!-- animation -->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script><!-- fixed nav js -->
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'> 
<!-- web-fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="welcome"> 
		<div class="container"> 
			<div class="welcome-info">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class=" nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" >
							<i class="fa fa-money" aria-hidden="true"></i> 
							<h5>Di Bayar</h5>
						</a></li>
						<li role="presentation" class="active"><a href="#carl" role="tab" id="carl-tab" data-toggle="tab"> 
							<i class="fa fa-truck" aria-hidden="true"></i>
							<h5>Dikirim</h5>
						</a></li>
						<li role="presentation" class="active"><a href="#james" role="tab" id="james-tab" data-toggle="tab"> 
							<i class="fa fa-gift" aria-hidden="true"></i>
							<h5>Diterima</h5>
						</a></li>
						<li role="presentation" class="active"><a href="#decor" role="tab" id="decor-tab" data-toggle="tab"> 
							<i class="fa fa-home" aria-hidden="true"></i>
							<h5>Selesai</h5>
						</a></li>
						
					</ul>
					<div class="clearfix"> </div>
					</div>
					</div>
					</div>
					</div>
					<style>
td,th{border:1px solid #ccc;padding:10px; width: 550px}
table{border-collapse:collapse; margin-bottom: 199px}
h6{background: red; font-size: 14px; color: #fff; padding: 10px;}
p{background: #486; font-size: 14px; color: #fff; padding: 10px;}
h3{background: #4689DB; font-size: 14px; color: #fff; padding: 10px;}
h4{background: #467; font-size: 18px; color: #fff; padding: 10px;}
td a{background: #2ecc71; padding: 5px; color: #fff; border-radius: 3px;}

</style>
<center>
	  <table>
    <tr>
    <th>Status & Trafik Pengiriman</th>
    </tr>
    <tr>
    <?php $transaksi=$db->selesai($_SESSION['id_pembeli']); 
	foreach($transaksi as $r){
		if($r[konfir]=='N'){
			
			$konfir="<h6>Belum Dibayar</h6>";
			}
		elseif($r[konfir]=='Y'){
			$konfir="<p>dibayar</p>";
			}
			elseif($r[konfir]=='K'){
			$konfir="<p>dikirim</p>";
			}
			elseif($r[konfir]=='KK'){
			$konfir="<h3>Sampai</h3>";
			}
			elseif($r[konfir]=='T'){
			$konfir="<h3>Diterima</h3>";
			}
			elseif($r[konfir]=='S'){
			$konfir="<h4>Selesai</h4>";
			}
		echo "<tr><td>".$konfir."</td></tr>";
		?>
		</div></div>
		<?php
		}
	
	?>
    </table>
</center>
  
	<?php include 'fotter.php'; ?>
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js --> 	 
	<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>
	<?php
	}
?>