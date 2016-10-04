
<!DOCTYPE html>
<html>
<head>
<title>Rejuvenesse-breathe new life-About Us</title>
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
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
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
					<a href="index.php"><img src="<?=base_url()?>assets/images/logo.png" data-wow-delay=".5s" class="img-responsive  wow slideInLeft animated text-center"></a>
				</div>
				
					
	
        <div class="col-md-3 logo-right mt4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
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
					<img src="<?=base_url()?>assets/images/patti.png" class="about-leaf">
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
			<img src="<?=base_url()?>assets/images/abtus_s.png" class="img-responsive wow zoomIn" data-wow-duration="1s" data-wow-delay=".9s" width="100%;">
		</div>
		<div class="col-sm-4 col-md-4 col-xs-12"></div>
		<div class="col-md-6 col-sm-6 col-xs-12 text-left" style="margin-top:2%;"><h2 class="title">About us</h2></div>
		<div class="col-md-3 col-xs-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".12s" style="margin-left: 4%; margin-top: 4%;">
			<ul class="socials2" style="">
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
		<div class="col-md-8 col-xs-8 about wow fadeIn" data-wow-duration="1s" data-wow-delay=".14s">
			
		         <p><b>OUR COMMITMENT:</b><br>
 
At Rejuvenesse, our commitment to breathing new life into our patients is founded on a unique combination of science and care.
 <br>
 <br>
We genuinely want our clients to experience life anew. We constantly work towards fostering a collaboration with our clients, understanding their body and its needs and matching that with our scientific know-how. We believe this collaboration will help us empower you to make sound, critical decisions that affect your health.
Our patient care is supported by the highest levels  of compassion, innovation, science, and technology.
				 
				 <br>
				 <br>
				 
				 Until recently, special, highly efficacious treatments which genuinely reversed the damage of aging were available to only a few of the rich and famous. The reason was the astronomical price of the treatments that was carried out in private, exclusive clinics in countries like Germany.<br><br>

But now, we at Rejuvenesse, led by Dr. Shams Scheik, who is at the forefront of global regenerative therapies, have brought these treatments to India for the first time, making these highly efficacious treatments more accessible to all.<br><br>

At Rejuvenesse, we offer programs for Rejuvenation, Revitalization & Youth Restoration. These are exclusive therapies focused specifically on the renewal of the body, mind and soul.<br><br>

Our programs are one of the most comprehensive and effective anti-ageing programs currently offered, being specifically designed for people who want to look and feel younger by 7 to 10 years by extending their youth, improving the quality of life and significantly slowing down the aging process.<br><br><br>

<!-- Dr. Shams Scheik - The Man behind the Medicine -->
<span><b>The Man Leading the Sciece. Dr. Shams Scheik - The Man behind the Medicine</b></span><br>
<b>MD, ABAARM, Dip. Orthomol Med (Germany) American Board Certified in Anti-Aging & Regenerative Medicine</b><br><i>Certified Chelation therapist | Certified Ozone therapist Certified as Clinical Research Professional- Kriger Research Center Inc. USA | Certified in Laser Medicine- Laser Medical Research Center, Russia Certified in GCP-ICH- USA</i><br><br></p>
 <div class="col-md-7 col-xs-12 about2 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".16s" style="padding:0 !important;">
After completing his post-graduate training program in<br> Internal Medicine, Dr. Scheik did further specialization<br> in Anti-Aging and Regenerative Medicine in USA and<br> practical training at renowned clinics in Munich and<br> Baden-Baden in Germany.<br><br>
 
During earlier years of his training he gained broad<br> clinical experience working in Emergency Medicine,<br> Cardiology, Critical Care Medicine, Endocrinology and<br> other medical subspecialties. Complimenting his<br> hospital work experience he also worked for several<br> years gaining genuine clinical research experience by<br> conducting clinical trials for a major American clinical<br> research organization.</div>
<div class="col-md-5 col-xs-12" style="margin-top:1%;">
	<img src="<?=base_url()?>assets/images/ss6.jpg" class="img-responsive wow fadeInRight img-bord" data-wow-duration="1s" data-wow-delay=".17s">
</div><br>
<div class="clearfix"></div>
 
<p><br><br>Dr. Scheik has taught many medical students, residents and nurse practitioners in a hospital setting, long term care facility and in his outpatient clinical practice.<br><br>
 
He is an active member of the American Academy of Anti-Aging and Regenerative Medicine, World Society of Anti-aging Medicine, International Hormone Society, Forum of Orthomolecular Medicine and many other medical research institutes and associations.<br><br>
 
Dr. Scheik is the founder and medical director of Juventas Revitalization Clinic, one of the leading Anti-Aging and Functional Medicine specialty clinics in Southern Germany. Currently he manages clinics in Germany and Russia and is visiting specialist in London and Monaco.<br><br>
 
Dr Scheik has been a pioneer in bringing an integrative approach to patient care that merges the latest in scientifically-validated treatment protocols with the best of conventional medical therapies and German biological therapies. His rich educational background and vast experience has led him to devise the perfect combination of therapies, nutrition and medicines in a unique way which extends itself to give his patients a much higher level of results. All treatments offered by Dr. Scheik are completely non-surgical and non-invasive and without the use of pharmaceutical  drugs.<br><br>
 
Dr. Scheik's areas of specialization include revitalization therapies, regenerative medicine, weight loss treatment, a functional approach to treating and preventing chronic disease, therapies to reverse the symptoms of ageing and enhance overall wellness and longevity.<br><br>

Dr. Scheik has been successfully carrying out these treatments for the past 10 years and has treated over 5000 patients from 20 countries including Germany, Russia, Australia, UK, Turkey, Luxembourg, UAE, to name a few.<br><br>
 
<b>Dr. Scheik has also treated patients from India in his clinic in Germany. These include housewives, businesswomen, politicians, hailing from Delhi, Bangalore, Chandigarh, Mumbai.</b>

</p>
 
		        

       
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