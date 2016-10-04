
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
</script>
<!--//end-smooth-scrolling-->
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
			<img src="<?=base_url()?>assets/images/cardio_s.png" class="img-responsive wow zoomIn" data-wow-duration="1s" data-wow-delay=".6s" width="100%;">
		</div>
		<div class="col-sm-4 col-md-4 col-xs-12"></div>
		<div class="col-md-6 col-sm-6 col-xs-12 text-left" style="margin-top:2%;"><h2 class="title">Rejuvenesse CardioVitalize Program</h2><br><span class="text-left" style="color: #00984A;font-family: 'arialregular';    margin-left: -12%;
    font-size: 15px;font-weight: bold;">German Non-Surgical Alternative to Bypass Surgery and Angioplasty</span>
       </div>
<div class="col-md-3 col-xs-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".9s" style="margin-left: 4%; margin-top: 4%;">
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
		
		<div class="col-md-8 col-xs-8 about wow fadeInRight" data-wow-duration="1s" data-wow-delay=".13s">
			
		         <p><b><span>What is a heart attack, and when does it occur?</span></b><br>

A heart attack (medical term: myocardial infarction) is a permanent damage to the

heart muscle. A heart attack occurs when the flow of oxygen-rich blood to a section of

the heart gets blocked either because of a narrowing of, or a clot in a coronary artery

— the heart tissue supplied by the coronary artery will not receive oxygen. If the blood

flow isn’t restored quickly, that section of the heart will die. One of the most common

underlying pathologies of a heart attack is atherosclerosis of one or more of the

coronary arteries.<br><br>
<span><b>What is atherosclerosis?</span></b> <br>
Atherosclerosis is a disease where arteries become narrow, blocked and/or hardened

because of an excessive build up of plaque within the artery wall. The disease disrupts

the flow of blood, posing serious cardiovascular complications. When this

hardening/narrowing/blockage occurs inside arteries which supply blood to heart it

causes a ‘heart attack’, inside the brain it causes a ‘stroke’, inside arteries supplying

blood to the penis it causes ‘impotence’; atherosclerosis affects many more areas of

the body — basically, almost every part of the body is supplied by blood via blood

vessels.
<br><br>


<span><b>What are the real cause/s of atherosclerosis and heart attack?</b></span></span><br>
<p><ol class="chronic" style="padding: 0;
    list-style-position: inside;font-family: 'arialregular';font-size: 17px;">
<li>Chronic deficiency of certain vitamins, minerals and antioxidants.</li>
<li> Chronic overconsumption of carbohydrates of all types (simple and complex).</li>
<li>Chronic high stress lifestyles leading to an imbalanced autonomic nervous system. </li>
<li>Chronic inflammation, regardless of cause. </li>
<li>Chronic metabolic acidosis. </li>

</ol></p>

 <div class="col-md-7 col-xs-12 about2" style="padding:0;">
<span><b>Cholesterol does NOT cause heart disease!</b></span><br>
This has been reported in several prestigious<br>

studies in the field, including the Framingham study<br>

that showed that “Our rush to lower total<br>

cholesterol levels may have been in error”. To cite<br>

the Framingham authors: “For each 1 mg/dL<br>

decrease of cholesterol level in blood, there was an<br>

11% increase in coronary and total mortality”(in<br>

other words, low cholesterol level actually<br>

increased the death rate).<br>
</div>
<div class="col-md-5 col-xs-12">
	<img src="<?=base_url()?>assets/images/shutterstock_123206077.jpg" class="img-responsive img-bord">
</div><br>
<div class="clearfix"></div><br><br>

<p>
<div class="col-md-9 col-xs-9" style="padding:0;">
	<p>
<span><b>The CardioVitalize Program</b></span><br>
The CardioVitalize Program is an advanced German non-surgical alternative to bypass

surgery and angioplasty. To remove blockages from “all arteries” of the body and to

“regenerate” the damaged/weak or vulnerable heart muscle cells.<br><br>

<b>The therapy involves an individualized synergistic powerful combination of:</b><br>

<ul class="theraphy" style="list-style-position: inside;font-family: 'arialregular';font-size: 17px;">

	<li>Fresh Cell Therapy </li>
	<li>Chelation Therapy </li>
	<li>Ozone Autohaemotherapy </li>
	<li>Laser-induced Angiogenic Therapy (LIAT/Laser treatment of heart) </li>
	<li>Laser revitalization of blood (LRB) </li>
	<li>Orthomolecular (micronutrient) Therapy<br>

This kind of integrative, comprehensive approach reverses atherosclerosis by

removing the root cause/s of disease.</li>

</ul>
<br>

<b>Ideal candidates for undergoing the CardioVitalize Program:</b><br>

<ul class="patient" style="list-style-position: inside;font-family: 'arialregular';font-size: 17px;">

	<li> Any patient suffering from coronary heart disease.</li>
	<li> Patients who have been advised to undergo angioplasty/stents or heart bypass surgery.

Patients with no heart disease but who are at-risk — high blood pressure, diabetes,

obesity, or family history of the same. </li>
</ul>
<br><br>
<p>Generally speaking, patients who suffer from poor blood circulation and arterial

perfusion in any part of the body are ideal candidates. The CardioVitalize Program

benefits each and every blood vessel in the body, from the largest to the tiniest

capillary and artery, most of which are far too small for surgical treatment or too deep

within organs. In many patients, the smallest blood vessels are the most severely

diseased. Another major advantage of the CardioVitalize Program is that the fresh cell

therapy regenerates the weak and damaged heart muscle cells.
</p><br>
<b>The CardioVitalize Program significantly:</b><br>

</div>


 
<br><br>
<p>
	<!-- <span>What Does Andro-Revive Do?</span><br>
	Andro-Revive therapy is “tailored for each patient”, with a combination of highly effective <br>
	German and Russian therapies that are based on several years of research, that specifically <br>
	eliminate the root cause/causes of erectile dysfunction/low-libido without using any <br>
	pharmaceutical drugs or undergoing surgery.<br><br>
	<span>Andro-Revive typically:</span><br>
	<ul class="anti-alig">
		<li>Removes arterial blockages in vessels that supply blood to the penis.</li>
		<li>Normalises sex hormone levels.</li>
		<li>Optimises testicular function.</li>
		<li>Reduces age-related fibrosis of the penis.</li>
		<li>Enhances penile sensitivity to touch.</li>
	</ul>
</p><br><br> -->


<div class="col-md-5 col-xs-12" style="padding:0;">
	<img src="<?=base_url()?>assets/images/shutterstock_181241921_Cropped.jpg" class="img-responsive img-bord">
</div>
<div class="col-md-7 col-xs-12 about2" style="padding-left:24px;">
		<p>
			
		<ul class="improve" style="font-family: 'arialregular';">
		<li>Improves blood supply to all organs (e.g., heart,<br>

brain, liver) and periphery (hands and feet).</li>
		   <li>Improves pulmonary function. </li>
		   <li>Decreases cancer rates. </li>
		   <li>Increases bone density.</li>
		   <li>Mitigates potential amputations.</li>
		   <li>Increases mental clarity. </li>
		   <li>Improves memory. </li>
		   <li>Reduces Alzheimer’s disease symptoms. </li>
		   <li>Decreases insulin requirements in diabetics. </li>
		   <li>Decreases blood pressure. </li>
		   <li>Decreases incidences of cardiac arrhythmias. </li>
		   <li>Decreases allergy symptoms. </li>
		   <li>Decreases intermittent claudication (cramping). </li>
		   <li>Increases senses (taste, vision, and hearing).</li>
		   <li>Increases vision in patients with macular

degeneration.</li>
		   <li>Overcomes symptoms of chronic fatigue syndrome.</li>
	</ul>
</div>

<div class="clearfix"></div></p>
<br><br>

<p>
<span><b>Application of the CardioVitalize Program</b></span><br><br>
The CardioVitalize Program involves a course of intravenous infusions, laser<br>

treatments, ozone treatments, and fresh cell therapy injections, over a period of 10<br>

weeks (full course) along with scientific information/counseling on lifestyle from<br>

cardiology perspective. The treatment is totally non-surgical, painless and without any<br>

side-effects. It is given on an outpatient basis (1–3 hours, 3–4 times per week) without<br>

a need to hospitalize a patient. The “State of the art” medical equipment, injections and<br>

medicines used in CardioVitalize Program are made in Germany.<br><br>

<span><b>Time required for the CardioVitalize Program</b></span><br>
<b>This depends on the stage of the illness.</b><br>

	<ul class="treatment" style="list-style-position: inside;">
		<li><i><b>For prevention(4 weeks treatment)</b></i>— <span style="font-family: 'arialregular';color: #333;font-size:16px;">for patients with atherosclerosis in the family,

with genetic disposition of atherosclerosis or other risk factors but without symptoms.

Moderate illness(8–10 weeks treatment) — for patients with angina (without

myocardial infarction), diabetes and peripheral vascular disease.</li></span>
		<li><i><b>Advanced stages(10–14 weeks treatment)</b></i>—<span style="font-family: 'arialregular';color: #333;font-size:16px;">for patients with bypass

surgery/angioplasty or patients who want to avoid amputation and patients who are too

ill for surgery.</li></span>
	</ul><br><br>

	<span><b>FAQs — CardioVitalize Program</b></span><br>
	<b>Is there any proof that the CardioVitalize Program really works?</b><br>
	<p>Yes! Significant improvement or total disappearance of symptoms (chest pain,<br>

breathlessness, leg pain, leg swelling, etc.) is observed by majority of patients after full<br>

course (10 weeks) of treatment. Ninety percent of patients are able to avoid<br>

angioplasty/stents/bypass surgery. In most patients, it takes a minimum of 4 weeks<br>

after start of treatment course to notice subjective improvement. After undergoing a full<br>

course of CR therapy an objective evidence of improvement in cardiac and general<br>

circulation can be confirmed by performing a HeartMap Diagnostic System test<br>

(Germany; surpasses standard ECG analysis by 10 – 20 times.), Myocardial perfusion<br>

study, Thallium Stress test, and other non-invasive tests. Blood tests done after the<br>

CardioVitalize Program show significant reduction or total elimination of 17 risk factors<br>

for heart disease.</p><br><br>

	

	<span><b>A man is as old as his arteries</b><br>

<i>–<b> Dr. Thomas Sydenham, 1680 AD</b></i></span><br>
<br>

<b>Did you know...</b><br>

<p>Since atherosclerosis is a generalized condition, a person who has had a heart attack<br>

may also have narrowing of arteries in other parts of body. It is, therefore, extremely<br>

important to fight and reverse processes involved in atherosclerosis in an integra<br>

and holistic way at every organ level and throughout the whole vascular system.</p><br><br>

<b>Did you know...</b><br>

<p>Erectile dysfunction in men is the earliest warning sign of an impending heart disease.<br>

Since penile arteries are relatively smaller in diameter in comparison with coronary<br>

arteries, they are prone to cause ED with even comparatively lesser degree of<br>

atherosclerosis.</p><br><br>

<b>Did you know...</b><br>

<p>A highly revered German physician of the 19th century (150 years ago) acknowledged<br>

that atherosclerosis is an inflammatory disease — based on his observations of<br>

autopsies of the very rare number of people who had actually died of a heart attack at<br>

that time.</p><br><br>

<b>Did you know...</b><br>

<p>We have over 96,000 km of blood vessels — and they are not just rigid tubes.</p><br>












 
		        

       
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