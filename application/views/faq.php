
<!DOCTYPE html>
<html>
<head>
<title>Rejuvenesse-breathe new life-Contact Us</title>
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


.socials2 li:first-child a:hover { background: #3b5998 }
.socials2 li:nth-child(2) a:hover { background: #00acee }
.socials2 li:nth-child(3) a:hover { background: #825747 }

.socials2 li:first-child a { border-radius: 50px }
.socials2 li:last-child a { border-radius: 50px }
    
.socials2 li a span {
  width: 21%;
  float: left;
  text-align: center;
  background: #fff;
  color: #000;
  margin: -65px 73px;
  padding: 6px;
  transform-origin: 0;
  visibility: hidden;
  opacity: 0;
  transform: rotateY(45deg);
  border-radius: 3px;
  transition: all .5s ease .300ms
}

.socials2 li span:after {
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

.socials2 li a:hover span {
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
			<div class="top-nav header wow fadeInDown animated" data-wow-delay=".5s" bottom:0;>
				<span class="menu wow fadeInDown animated" data-wow-delay=".5s">Menu</span>	
				<ul class="nav1" style="position:relative;">
					<img src="<?=base_url()?>assets/images/right-leaf.png" class="left-leaf">
					<img src="<?=base_url()?>assets/images/patti.png" class="faq-leaf">
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
<div class="" style="background-color:#F1F2F3 !important;">
	<div class="welcome container" id="welcome" style=" bottom: 0;background-color:#F1F2F3;width:100%;height:580px">
		<!--div class="about-banner">
			<img src="images/" class="img-responsive wow zoomIn" data-wow-duration="1s" data-wow-delay=".6s" width="100%;">
		</div-->
		<div class="col-sm-12 col-md-12 col-xs-12">
		
			<div class="col-md-3 col-xs-3 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".9s" style="margin-left: 4%;margin-top:3%;">
				<ul class="socials2">
					<li>
						<a  href="https://www.facebook.com/Rejuvenesse-1741498832774975/" target="_self">    			 
						<img src="<?=base_url()?>assets/images/facebook.png" class="img-responsive">
						 <span>Facebook</span>
					</li></a>
					<li>
						<a href="mailto:contact@rejuvenesse.in" target="_top"> 
						<img src="<?=base_url()?>assets/images/email.png" class="img-responsive img-circle">
						<span>Gmail</span>
					</li></a>
					<li>
						<a  href="#">
						<img src="<?=base_url()?>assets/images/print1.png" class="img-responsive">
						<span>Print</span>
					</li></a>
				</ul>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-8 text-center" style="margin-top:3%;"><p class="title comming_faq" >Coming Soon...</p></div>
			</div>
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
	<!-- <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a> -->
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>assets/js/bootstrap.js"></script>
</body>
</html>