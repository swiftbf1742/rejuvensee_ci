<!DOCTYPE html>
<html>
<head>
<title>Rejuvenesse-breathe new life-Testimonies</title>
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
  width: 100px;
  float: left;
  text-align: center;
  background: #fff;
  color: #000;
  margin: -60px 62px;
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
					<a href="<?=base_url()?>index.php/home/index"><img src="<?=base_url()?>assets/images/logo.png" data-wow-delay=".5s" class="img-responsive  wow slideInLeft animated text-center"></a>
				</div>
				
					
	
        <div class="col-md-3 logo-right mt4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s">
            <div id="custom-search-input" >
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
					<img src="<?=base_url()?>assets/images/patti.png" class="testimonies-leaf">		
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
		<div class="about-banner">
			<img src="<?=base_url()?>assets/images/testimonial_s.png" class="img-responsive wow zoomIn" data-wow-duration="1s" data-wow-delay=".6s" width="100%;">
		</div>
		<div class="col-sm-4 col-md-4 col-xs-12"></div>
		<div class="col-md-6 col-sm-6 col-xs-12 text-left" style="margin-top:2%;"><h2 class="title">Testimonies</h2></div>
		<div class="col-md-3 col-xs-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".9s" style="margin-left: 4%; margin-top: 4%;">
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
		<div class="col-md-8 col-xs-8 about">
			<?php 
			   foreach ($data as $key => $value) {
			?>
			<div class="col-md-12 col-xs-12" style="margin-top:0.7% !important;padding:0;">
				<img src="<?=base_url()?>assets/uploads/<?=$value['image']?>" class="img-responsive img-bord wow fadeIn" data-wow-duration="1s" data-wow-delay=".11s" style="height:230px;width:290px;">
			</div>
			<div class="clearfix"></div><br>
			<span style="color:#000;font-size:17px;" class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".9s"><i><?=$value['name']?></i></span>
			<p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".9s"><i><?=$value['para']?></i></p>
			<br>
           <?php } ?>
			<!-- <div class="col-md-12 col-xs-12" style="margin-top:3.8% !important;padding:0;">
				<img src="<?=base_url()?>assets/images/Elena.png" class="img-responsive img-bord wow fadeIn" data-wow-duration="1s" data-wow-delay=".14s" style="height:230px;width:210px;">
			</div>
			<div class="clearfix"></div><br>
			<span style="color:#000;font-size:17px;" class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".11s"><i>Elena</i></span>
			<p style="color:#000;" class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".11s"><i>28 year lady from Ukraine had 102 kgs and wanted to reduce as much as possible without any surgery. She approached us. She had problems with conceiving (infertility) due to her obesity,hormonal issues and also menstrual irregularities. Her blood sugar was normal despite of extra weight.She underwent 2 sessions of 40 day weight loss program and within 6-7 months lost 27 kgs. The other beneficial effect was- She successfully conceived and gave birth to a healthy child. Her menstrual cycle problems were resolved too.</i></p>
			<br> -->

			<!-- <div class="col-md-12 col-xs-12" style="margin-top:3.8% !important;padding:0;">
				<img src="<?=base_url()?>assets/images/Ahmet.jpg" class="img-responsive img-bord wow fadeIn" data-wow-duration="1s" data-wow-delay=".18s" style="height:230px;width:290px;">
			</div>
			<div class="clearfix"></div><br>
			<span style="color:#000;font-size:17px;" class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".13s"><i>Ahmet</i></span>
			<p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".13s"><i>This 36 year old man came from Turkey. He weighed 135 kgs when we started treatment on him. He had other problems- High blood pressure( 180/110) , knee joint arthritis, heart palpitations and problems of erectile dysfunction due to Obesity and low testosterone levels. He took 3 course of treatment at our clinic and was able to reduce by 42 kgs. His blood pressure came back to 125/85 and impotency problem was completely cured.</i></p>
			<br> -->
<!-- 
			<div class="col-md-12 col-xs-12" style="margin-top:3.8% !important;padding:0;">
				<img src="images/Ahmet.jpg" class="img-responsive img-bord wow fadeIn" data-wow-duration="1s" data-wow-delay=".18s" style="height:230px;width:290px;"-->
			<!-- </div>
			<div class="clearfix"></div><br>
			<span style="color:#000;font-size:17px;" class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".13s"><i>Svetlana</i></span>
			<p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".13s"><i>After trying to lose weight for quite some time and always seeming to gain and lose the same 10 kgs, I was introduced to the Fat2Fit weight loss programme. The program was simple to follow and the progress I saw on a daily basis was motivating. At the end of 30 days, I lost 12 kgs. and 8 inches! I have been off the programme for a few months, but have begun exercising and eating healthier and my weight has fluctuated very little (1-2 kgs). I know this programme can work for others as well as it worked for me.</i></p>
			<br> --> 
			
			<!-- <div class="col-md-12 col-xs-12" style="margin-top:3.8% !important;padding:0;">
				<!img src="images/Ahmet.jpg" class="img-responsive img-bord wow fadeIn" data-wow-duration="1s" data-wow-delay=".18s" style="height:230px;width:290px;"-->
			<!-- </div>
			<div class="clearfix"></div><br>
			<span style="color:#000;font-size:17px;" class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".13s"><i>Saleh al fawzan</i></span>
			<p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".13s"><i>Fat2Fit programme offered at Juventas Clinic is the best weight loss program I have ever used. I lost about 22 kgs two years ago and I am managing to keep it off by still eating my usual foodstuff. I am following their advice to eat lots of green vegetables, which I love. My health has significantly improved. My high blood pressure lowered to normal levels and so did my high cholesterol..</i></p>
			<br>  -->

			<!-- <div class="col-md-12 col-xs-12" style="margin-top:3.8% !important;padding:0;"> -->
				<!--img src="images/Ahmet.jpg" class="img-responsive img-bord wow fadeIn" data-wow-duration="1s" data-wow-delay=".18s" style="height:230px;width:290px;"-->
			<!-- </div>
			<div class="clearfix"></div><br>
			<span style="color:#000;font-size:17px;" class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".13s"><i>Demir</i></span>
			<p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".13s"><i>It came on rather gradually, I think my wife thought it was her, but it really wasn’t. I was losing interest in sex. I tried Viagra, Cealis, all the pills out there, but they really didn’t quite work the way I wanted them to. Then I heard about the Androboost programme and after just 18 days’ treatment it changed my life, and my relationship.</i></p>
			<br>
		        
			<div class="col-md-12 col-xs-12" style="margin-top:3.8% !important;padding:0;"> -->
				<!--img src="images/Ahmet.jpg" class="img-responsive img-bord wow fadeIn" data-wow-duration="1s" data-wow-delay=".18s" style="height:230px;width:290px;"-->
			<!-- </div>
			<div class="clearfix"></div><br>
			<span style="color:#000;font-size:17px;" class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".13s"><i>Heidi Klein</i></span>
			<p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".13s"><i>My blood pressure was as high as 220/165 with severe angina, loss of sight in one eye, and I was headed for bypass surgery. I had heard of CR therapy and chose to try it instead of the bypass surgery. Now my blood pressure holds steady at a normal level of 120/78, the angina was gone after only the 5th treatment, and my vision is better than ever. I have a healthy and active life ahead of me!</i></p>
			<br> -->
			
			<!-- <div class="col-md-12 col-xs-12" style="margin-top:3.8% !important;padding:0;"> -->
				<!--img src="images/Ahmet.jpg" class="img-responsive img-bord wow fadeIn" data-wow-duration="1s" data-wow-delay=".18s" style="height:230px;width:290px;"-->
			<!-- </div>
			<div class="clearfix"></div><br>
			<span style="color:#000;font-size:17px;" class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".13s"><i>Ingrid Braun</i></span>
			<p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".13s"><i>16 years ago my doctor recommended that I do cardiac regenerative therapy for PREVENTION, and I continue with periodical booster-maintenance treatments. Since then I have had excellent health, and have so much energy that people in their 20s ask me how I do it! I still work and lead a very active life. I owe it all to CRT!</i></p>
			<br> -->
			
			<!-- <div class="col-md-12 col-xs-12" style="margin-top:3.8% !important;padding:0;"> -->
				<!--img src="images/Ahmet.jpg" class="img-responsive img-bord wow fadeIn" data-wow-duration="1s" data-wow-delay=".18s" style="height:230px;width:290px;"-->
			<!-- </div>
			<div class="clearfix"></div><br>
			<span style="color:#000;font-size:17px;" class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".13s"><i>Albrecht Schuster</i></span>
			<p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".13s"><i>Before CR therapy I had such angina that I would need 5-6 Nitroglycerin Sprays daily. After only my 10th treatment I no longer have pain or need the medicine. I can now walk the dogs and feel great!</i></p>
			<br> -->
			
			<!-- <div class="col-md-12 col-xs-12" style="margin-top:3.8% !important;padding:0;"> -->
				<!--img src="images/Ahmet.jpg" class="img-responsive img-bord wow fadeIn" data-wow-duration="1s" data-wow-delay=".18s" style="height:230px;width:290px;"-->
			<!-- </div>
			<div class="clearfix"></div><br>
			<span style="color:#000;font-size:17px;" class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".13s"><i>Heinrich Bauer</i></span>
			<p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".13s"><i>Two years ago I had a stroke and my doctor said there was a good chance I wouldn’t speak, walk or use my arm again. After CR Therapy I now walk and exercise almost normally, and often speak in front of large groups of people. I am off Coumadin and Lasix, my cholesterol dropped 100 points, and we travel. CR therapy has given me my life back!</i></p>
			<br> -->
			
			<!-- <div class="col-md-12 col-xs-12" style="margin-top:3.8% !important;padding:0;"> -->
				<!--img src="images/Ahmet.jpg" class="img-responsive img-bord wow fadeIn" data-wow-duration="1s" data-wow-delay=".18s" style="height:230px;width:290px;"-->
			<!-- </div>
			<div class="clearfix"></div><br>
			<span style="color:#000;font-size:17px;" class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".13s"><i>Светлана</i></span>
			<p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".13s"><i>После достаточно продолжительных попыток похудеть и постоянно набирая и теряя одни и те же 10 кг, я открыла программу потери веса ” Fat2Fit”. Программа была простой с использовании и прогресс, который я увидела изо дня в день хорошо мотивировал. Через 30 дней, я потеряла 12 килограммов и 8 дюймов! Я уже несколько месяцев как закончила программу, но я начала делать упражнения и есть здоровую пищу и мой вес колеблется всего лишь на 1-2 кг. Я знаю, что эта программа может помочь и остальным,также как она помогла мне.

</i></p>
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