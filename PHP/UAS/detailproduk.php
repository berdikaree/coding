<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Toko Online Sony</title> 

    <!-- start: CSS --> 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->
	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
	<link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
	<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /> 
	<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
	<!-- //Custom Theme files -->
	<!-- font-awesome icons --> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- //font-awesome icons -->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script> 
	<!-- //js --> 
	<!-- web-fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
	<!-- web-fonts --> 
	<script src="js/owl.carousel.js"></script>  
	<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({ 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds 
		  items :4,
		  itemsDesktop : [640,5],
		  itemsDesktopSmall : [480,2],
		  navigation : true
	 
		}); 
	}); 
	</script>
	<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
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
	<script src="js/bootstrap.js"></script>	
</head>
<body>
    
	<?php include 'header.php'; ?>
	
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner" align="center">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-stats ico-white"></i>Produk Detail Produk</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper">
				
      		<!-- start: Row -->
            
      		<div class="row">
            <div class="col-sm-6">
                <?php                  
				$query = mysqli_query($connect, "SELECT * FROM barang WHERE id='$_GET[kd]'");
				$data  = mysqli_fetch_array($query);

				echo"
                <div class='hero-unit' style='margin-left: 20px;''>
                <table>
					<tr>
						<td rowspan='7'><img src='images/".$data['foto']."' width='200' height='200'></td>
					</tr>
                    <tr>
                    	<td colspan='4'><div class='title'><h3>".$data['nama']."</h3></div></td>
                    </tr>
                    <tr>
	                    <td></td>
	                    <td><h3>Kode</h3></td>
	                    <td><h3>:</h3></td>
	                    <td><div><h3>".$data['kode']."</h3></div></td>
                    </tr>
                    <tr>
	                    <td></td>
	                    <td size='200'><h3>Harga</h3></td>
	                    <td><h3>:</h3></td>
						<td><div><h3>Rp.".number_format($data['harga'],2,",",".")."</h3></div></td>
                    </tr>
                    <tr>
	                    <td></td>
	                    <td><h3>Keterangan</h3></td>
	                    <td><h3>:&nbsp</h3></td>
	                    <td><div><h3>".$data['deskripsi']."</h3></div></td>
                    </tr>
				<!--	<p>
					
					</p> -->
                    <tr>
                    <td></td>
                    <td></td>
                    <td></td>
					<td><div class='clear'> <a href='index.php' class='btn btn-lg btn-danger'>Kembali &raquo;</a></div></td>
                    </tr>
 
                </table>
                </div>
                    <!--</div> -->
        		<!--</div> -->
<!---->
      		</div>"
      		?>
			<!-- end: Row -->
					
					
				</div>	
				
					
				</div>
				
                </div>
			</div>
			<!--end: Row-->
	
		</div>
		<!--end: Container-->
				

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>	