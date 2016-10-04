
<!DOCTYPE html>
<html>
<head>
<title>Rejuvenesse-breathe new life-Programs</title>
<!--mobile apps-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Reallocate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--mobile apps-->
<!--Custom Theme files -->
<link href="<?=base_url()?>assets/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?=base_url()?>assets/css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="<?=base_url()?>assets/css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/swipebox.css">
<link rel="icon" href="<?=base_url()?>assets/images/logo.png" type="image/png">
<!-- //Custom Theme files -->
<!-- js -->
<script src="<?=base_url()?>assets/js/jquery-1.11.1.min.js"></script> 
<!-- //js -->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Quintessential' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<!--animate-->
<link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="<?=base_url()?>assets/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!--ResponsiveTabs-->
<script src="<?=base_url()?>assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
<!--//ResponsiveTabs-->
<!-- start-smooth-scrolling-->
<script type="text/javascript" src="<?=base_url()?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->
<style>


.socials1 li:first-child a:hover { background: #3b5998 }
.socials1 li:nth-child(2) a:hover { background: #00acee }
.socials1 li:nth-child(3) a:hover { background: #825747 }

.socials1 li:first-child a { border-radius: 50px }
.socials1 li:last-child a { border-radius: 50px }
    
.socials1 li a span {
  width: 100px;
  float: left;
  text-align: center;
  background: #fff;
  color: #000;
  margin: -45px 68px;
  padding: 6px;
  transform-origin: 0;
  visibility: hidden;
  opacity: 0;
  transform: rotateY(45deg);
  border-radius: 3px;
  transition: all .5s ease .300ms
}

.socials1 li span:after {
  content: '';
  display: block;
  width: 0;
  height: 0;
  position: absolute;
  left: -20px;
  top: 7px;
  border-left: 10px solid transparent;
  border-right: 10px solid #fff;
  border-bottom: 10px solid transparent;
  border-top: 10px solid transparent;
}

.socials1 li a:hover span {
  visibility: visible;
  opacity: 1;
  transform: rotateY(0)
}
</style>
</head>
<body>
	<!--banner-->
	<div  id="home">
		<div class="container">
			<div class="banner-top">
				<div class="logo-left">
					<a href="<?=base_url()?>"><img src="<?=base_url()?>assets/images/logo.png" data-wow-delay=".5s" class="img-responsive  wow slideInLeft animated text-center"></a>
				</div>
				
					
	
        <div class="col-md-3 logo-right mt4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s">
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
	

				
				<div class="clearfix"> </div>

			</div>
			<div class="top-nav header wow fadeInDown animated" data-wow-delay=".5s">
				<span class="menu wow fadeInDown animated" data-wow-delay=".5s">Menu</span>	
				<ul class="nav1" style="position:relative;">
					<img src="<?=base_url()?>assets/images/right-leaf.png" class="left-leaf">
					<img src="<?=base_url()?>assets/images/patti.png" class="program-leaf">
					<li class="active"><a href="<?=base_url()?>index.php/home/about">About us</a></li>
					<li><a href="<?=base_url()?>index.php/home/breath">Breathe new life</a></li>
					<li><a href="<?=base_url()?>index.php/home/programs">Programs</a></li>
					<li><a href="<?=base_url()?>index.php/home/testimonies">Testimonies</a></li>
					<li><a href="<?=base_url()?>index.php/home/faq">Genral FAQs</a></li>
					<li><a href="<?=base_url()?>index.php/home/contact">Contact us</a></li>
					<img src="<?=base_url()?>assets/images/right-leaf.png" class="right-leaf">
				</ul>
				<!-- script-for-menu -->
				<script>
				   $( "span.menu" ).click(function() {
					 $( "ul.nav1" ).slideToggle( 300, function() {
					 // Animation complete.
					  });
					 });
				</script>
				<!-- /script-for-menu -->
			</div>
			
		</div>
	</div>
	<!--//banner-->
	<!--welcome-->
<div class="background">
	<div class="welcome container" id="welcome">
		<!-- <div class="about-banner">
			<img src="images/banner2.jpg" class="img-responsive">
		</div> -->
		<div class="col-sm-4 col-md-3 col-xs-12"></div>

		<div class="col-md-8 col-sm-12 col-xs-12 text-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s" style="margin-top:2%;">
			 <p class="pr"> All our treatments are non-surgical, without use of anaesthesia or any synthetic drugs. All our treatments are a combination of Intramuscular injections, IV drips and special medical equipment. </p>
		</div>
		
		<div class="col-md-3 col-xs-2 wow fadeIn" data-wow-duration="1s" data-wow-delay=".9s" style="margin-top: 1%;">
			<ul class="socials1" style="">
				<li>
					<a  href="https://www.facebook.com/Rejuvenesse-1741498832774975/" target="_self">    			 
					<img src="<?=base_url()?>assets/images/facebook.png" class="img-responsive">
					 <span>Facebook</span>
				</li></a>
				<li>
					<a href="mailto:contact@rejuvenesse.in" target="_top"> 
					<img src="<?=base_url()?>assets/images/email.png" class="img-responsive">
					<span>Gmail</span>
				</li></a>
				<li>
					<a  href="#">
					<img src="<?=base_url()?>assets/images/print1.png" class="img-responsive">
					<span>Print</span>
				</li></a>
			</ul>
		</div>

		<div class="col-md-8 col-xs-10 program wow zoomIn" data-wow-duration="1s" data-wow-delay=".13s" style="padding:0;margin-top:4%;">

	       <div class="col-md-12 col-xs-10 sub-program" style="padding:0;margin-top:5%;">
	       <?php
	         foreach ($data as $key => $value) {
	       ?>
		       <a href="<?=$value['link']?>"><div class="col-md-4 col-xs-12 text-center">
	 					<img src="<?=base_url()?>assets/uploads/<?=$value['image']?>" class="img-responsive">
	 					  <p style="margin-bottom:24px;"><b style="color: #000;"><?=$value['name']?></b></p>
	  				</div></a>
	  		<?php } ?>
  				<!-- <a href="<?=base_url()?>index.php/home/antiaging"><div class="col-md-4 col-xs-12 text-center">
 					<img src="<?=base_url()?>assets/images/antiaging_s.png" class="img-responsive">
 					  <p><b style="color: #000;">Anti-aging</b></p>
  				</div></a>
  				<a href="<?=base_url()?>index.php/home/german"><div class="col-md-4 col-xs-12 text-center">
 					<img src="<?=base_url()?>assets/images/slimming_s.png" class="img-responsive">
 					  <p><b style="color: #000;">Slimming</b></p>

  				</div></a>
  				<a href="<?=base_url()?>index.php/home/andro"><div class="col-md-4 col-xs-12 text-center">
 					<img src="<?=base_url()?>assets/images/andro_s.png" class="img-responsive">
 					  <p><b style="color: #000;">Andro-revive</b></p>

  				</div></a>
 -->
	       </div>

	       <!-- <div class="col-md-12 col-xs-10 sub-program wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".14s" style="padding:0;margin-top:5%;">
  				<a href="<?=base_url()?>index.php/home/Diabetes"><div class="col-md-4 col-xs-12 text-center">
 					<img src="<?=base_url()?>assets/images/diabities_s.png" class="img-responsive">
 					  <p><b style="    color: #000;">Diabetes</b></p>
  				</div></a>
  				<a href="<?=base_url()?>index.php/home/cardio"><div class="col-md-4 col-xs-12 text-center">
 					<img src="<?=base_url()?>assets/images/cardio_s.png" class="img-responsive">
 					  <p><b style="    color: #000;">CardioVitalize</b></p>

  				</div></a>
  				<a href="<?=base_url()?>index.php/home/incurable"><div class="col-md-4 col-xs-12 text-center">
 					<img src="<?=base_url()?>assets/images/incurable_s.png" class="img-responsive">
 					  <p><b style="    color: #000;">Incurable Diseases</b></p>

  				</div></a>

	       </div> -->


			
			
			<!-- <div class="clearfix"></div><br>
			<span style="color:#00984A;"><i>Ahmet</i></span>
			<p><i>This 36 year old man came from Turkey. He weighed 135 kgs when we started treatment on him. He had other problems- High blood pressure( 180/110) , knee joint arthritis, heart palpitations and problems of erectile dysfunction due to Obesity and low testosterone levels. He took 3 course of treatment at our clinic and was able to reduce by 42 kgs. His blood pressure came back to 125/85 and impotency problem was completely cured.</i></p>
			<br> -->
 

		        

       
        </div>

     </div>
</div>
	
	
	<!-- //gallery -->
	
	
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>assets/js/bootstrap.js"></script>
</body>
</html>