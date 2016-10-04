
<!DOCTYPE html>
<html>
<head>
<title>Rejuvenesse-breathe new life-Programs-Diabetes</title>
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
<!--script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script-->

<style>


.socials li:first-child a:hover { background: #3b5998 }
.socials li:nth-child(2) a:hover { background: #00acee }
.socials li:nth-child(3) a:hover { background: #825747 }

.socials li:first-child a { border-radius: 50px }
.socials li:last-child a { border-radius: 50px }
    
.socials li a span {
  width: 100px;
  float: left;
  text-align: center;
  background: #fff;
  color: #000;
  margin:  -65px 73px;
  padding: 6px;
  transform-origin: 0;
  visibility: hidden;
  opacity: 0;
  transform: rotateY(45deg);
  border-radius: 3px;
  transition: all .5s ease .300ms
}

.socials li span:after {
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

.socials li a:hover span {
  visibility: visible;
  opacity: 1;
  transform: rotateY(0)
}

@media (max-width: 768px){
	.res-img{
		width: 60%;
	}
	
	.res-img1{
		    right: -45px;
	}
}
</style>

<!--//end-smooth-scrolling-->
</head>
<body>
	<!--banner-->
	<div  id="home">
		<div class="container">
			<div class="banner-top">
				<div class="logo-left">
					<a href="index.php"><img src="<?=base_url()?>assets/images/logo.png" data-wow-delay=".5s" class="img-responsive  wow slideInLeft animated text-center"></a>
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
	
		<div id="cust-back-top" class="col-sm-1 rest" >
		<!--<div class="scroll"></div>-->
			<ul  class="" style="list-style-type:none;">
				<a href="#home"> 
					<li class="a kaypan">
						<img src="<?=base_url()?>assets/images/back-top.png"  class="img-responsive">
					</li>
				</a>
				<a href="programs.php">
					<li class="a kaypan">
						<img src="<?=base_url()?>assets/images/back-prog.png" class="img-responsive">
					</li>
				</a>
			</ul>
		</div>
	
		<div class="about-banner">
			<img src="<?=base_url()?>assets/images/incurable_s.png" class="img-responsive wow zoomIn" data-wow-duration="1s" data-wow-delay=".6s" width="100%;">
		</div>
		<div class="col-sm-4 col-md-4 col-xs-12"></div>
		<div class="col-md-6 col-sm-6 col-xs-12 text-left" style="margin-top:2%;"><h2 class="title">Treatment of ‘Incurable’ Diseases</h2>
       </div>

		<div class="col-md-3 col-xs-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".10s" style="margin-left: 4%; margin-top: 4%;">
			<ul class="socials">
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
		
		<div class="col-md-8 col-xs-8 about wow fadeInRight" data-wow-duration="1s" data-wow-delay=".18s">
			
		         <p><span>Is there such a thing as an incurable disease?</span><br>

From a conventional (pharmaceutical) medical standpoint many diseases are “incurable”. The medical profession is bent on providing symptomatic relief only through biochemical intervention (pharmaceutical drugs). In so doing, they not only hinder all or most healing activity of the body, but actually produce a more stressful condition for the body, lowering its immune system, leading to a more serious diseased condition.<br><br>

Just as the body does not get diseased overnight, it also cannot “clean house” and rebuild itself overnight. A person may spend years tearing their body down, so an immediate healing is impossible especially in rare diseases of long-standing duration.
Our treatment approach to these diseases is based on the principles of German biological medicine which involves individualized combination of the latest regenerative medical technology with Stem cell therapy, Thymus therapy, IV Ozone therapy, Orthomolecular medicine, Laser revitalization of blood, External laser therapy, Intravenous oxygen therapy, Bio-identical(natural) hormone replacement, specific diet, and other methods. In many cases the functional capacity of a patient can be improved, symptoms can be reduced, physical disability can be decreased. While in certain diseases the progression of disease can be halted at least.<br><br>

Every individual case is unique in its own sense and responds differently to treatment. We do not claim to cure any of the below-mentioned diseases. Having said that, patient gets an opportunity to undergo an integrated “root-cause focused” treatment for diseases which conventional medicine has long declared as “hopeless” diseases or has nothing to offer except “palliative” treatment.<br><br>



<div class="col-md-12 col-xs-12" style="padding:0;">
	<img src="<?=base_url()?>assets/images/shutterstock_213302872_Small.jpg" class="img-responsive img-bord">
</div><br>
<div class="clearfix"></div><br><br>

<p>
<div class="col-md-9 col-xs-9" style="padding:0;">
	<div class="col-md-6 col-xs-12">
		<ul class="anti-alig font" style="color:#00984A;">
		<li>Juvenile Diabetes (Type 1)</li>
		<li>Down syndrome</li>
		<li>Multiple sclerosis</li>
		<li>Autism</li>
		<li>Cerebral palsy</li>
		<li>Bi-polar Disease</li>
		<li>Schizophrenia</li>
		<li>Muscular dystrophy</li>
		<li>Polycystic ovarian disease</li>
		<li>Osteoarthritis</li>
		<li>Rheumatoid arthritis</li>
	</ul>
	</div>
	<div class="col-md-6 col-xs-12">
			<ul class="anti-alig font"  style="color:#00984A;">
		<li>Psoriasis</li>
		<li> Depression</li>
		<li>High blood pressure</li>
		<li>Herpes zoster</li>
		<li>Osteoporosis</li>
		<li> Brain damage (Stroke)</li>
		<li>Degenerative diseases of brain</li>
		<li>Systemic Lupus Erythematosus (Lupus)</li>
		<li>Gout</li>
		<li>Alzheimer’s disease</li>
		<li>Gastroesophageal Reflux Disease (GERD)</li>
	</ul><br>

	</div>


<p>If you suffer from any of the abovementioned diseases please send us your detailed case history, list of current medications, list of surgeries, etc. We will review the provided information, formulate an individualized treatment program and discuss with you what could be possible in your particular case.</p>

</div>


 
<br><br>
<p>
	






       
        </div>	
     </div>
</div>
	

	
	<!-- //gallery -->
	
	
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
			
							$('.a').fadeOut();
							$('.a').css("display","none");
			
			
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
	<script type="text/javascript">
	
	
		
	
	

	
	   $(window).scroll(function() {
		   
	
				
			if ($(this).scrollTop()>1)
			{

		
			$('.a').css("display","block");
				$('.a').fadeIn();
				
				

				
			}
			else
			{
				
			  $('.a').fadeOut();
			}
		 
		 
		});

	
	</script>
	
	<!--a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>assets/js/bootstrap.js"></script>
</body>
</html>