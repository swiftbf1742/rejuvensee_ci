
<!DOCTYPE html>
<html>
<head>
<title>Rejuvenesse-breathe new life-Programs-Anti-aging</title>
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
<link rel="icon" href="<?=base_url()?>assets/<?=base_url()?>index.php/home/imagego.png" type="image/png">
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
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
<!--script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script-->
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
  margin: -65px 73px;
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
			<ul class="" style="list-style-type:none;">
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
			<img src="<?=base_url()?>assets/images/antiaging_s.png" class="img-responsive wow zoomIn" data-wow-duration="1s" data-wow-delay=".6s" width="100%;">
		</div>
		<div class="col-sm-4 col-md-4 col-xs-12"></div>
		<div class="col-md-6 col-sm-6 col-xs-12 text-left" style="margin-top:2%;"><h2 class="title">Rejuvenesse Anti-aging Programs</h2></div>
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
			
		         <p>The majority of people start to notice subtle physical changes as they approach middle age. <br>

These changes, that many refer to as the natural ageing process, become more obvious as <br>
people reach their 50’s, 60’s and 70’s. Such age-related physical changes have a lot to do with<br>
one’s energy, mood, mental acuity, quality of sleep, body composition, weight, aches and<br> pains, and sexual function. <br><br>
Is it possible to fine-tune the ageing process with individualised scientific programs? The<br>
answer is a resounding “YES” — in line with our philosophies that lie in extending our client’s <br>
“health span” and “quality of life”. With our scientific intervention, the body will not slide <br>
inexorably downhill after the age of 40. Anti Aging may sound like a dream, but the fact is <br>
Anti Aging therapy will make a big difference as to how you look and how you feel. <br> <br>
<span><b>Our Anti Aging Concept</b></span><br>
Anyone above 28 years of age can immensely benefit from this program. The rejuvenation <br>
process helps you look young, get rid of stress and fatigue, regain good health and the joy of <br>
life, and cleanse your body of toxins. This program uses the latest advances in science, is <br>
effective and totally safe. It allows for a short period of time to achieve the desired and stable result. <br><br>

The effectiveness of the program is that the rejuvenation occurs at the cellular level by means<br> of high-quality, unique injections and detoxification procedures.
<br><br><span><b>Your body and time</b></span><br>
 <div class="col-md-7 col-xs-12 about2" style="padding:0;">
The human body contains some four trillion cells, all of which arise after conception from one unified cell through multiple cycles of division. This process of cellular renewal continues throughout life, as new ones replace old and weak cells. In healthy young individuals, the division of cells takes place regularly in an energetic and balanced bio-terrain. However, as we grow old, this process begins to slow down. Improper nutrition, food additives, a decrease in consumption of organically grown vegetables, lifestyles with heavy smoking, excessive alcohol consumption, and overall increase in stress because of fast-paced lives, pollution with carcinogenic solvents, heavy metals and pesticides suppress cell-renewal. As a result, we tend to age prematurely and can fall ill often ending-up with chronic degenerative diseases or even cancer. 
During earlier years of his training he gained broad<br> clinical experience working in Emergency Medicine,<br> Cardiology, Critical Care Medicine, Endocrinology and<br> other medical subspecialties. Complimenting his<br> hospital work experience he also worked for several<br> years gaining genuine clinical research experience by<br> conducting clinical trials for a major American clinical<br> research organization.</div>
<div class="col-md-5 col-xs-12" style="margin-top:1%;">
	<img src="<?=base_url()?>assets/images/shutterstock_239297989_Small.jpg" class="img-responsive img-bord">
</div><br>
<div class="clearfix"></div><br><br>

<p>
<div class="col-md-9 col-xs-9" style="padding:0;">
	<p>
Our Anti ageing program offers an opportunity to treat many degenerative diseases caused by<br>
premature cell death or malfunction of specific cell types and the body’s failure to replace or <br>
restore them. The Anti Aging program aims to awaken dormant cells within the human body, <br>
thereby stimulating the growth and function of existing tissue and repairing or regenerating old<br>
and malfunctioning cells. <br><br>



It can provide the exact components necessary for injured or diseased tissue to heal and <br>
regenerate. While most pharmaceutical drugs work by suppressing certain symptoms over a <br>
short period of time and only for as long as they are taken, our Anti Aging program stimulates<br>
 the body’s own healing and revitalizing powers and exerts a long-term health effect.</p></div>




		
<div class="clearfix"></div><br><br>
 <p><span><b>What does the anti-aging program include?</b></span><br>
 We offer 2 programs.<br><br>

 <i><b>8 days Outpatient treatment in our clinic for 1 hour a day + 6 months maintenance program</b></i><br>
 The Program includes first 8 days of daily intensive treatment sessions in our clinic , followed<br> 6 months of high-quality German Anti Aging
preparations + special Anti Aging face creams + monthly consultations for 6 months.
<br><br>
<i><b>14 days in Clinic for 1 hour a day + 12 month revitalization program.</b></i><br> 
The Program includes first 14 days of daily intensive treatment sessions in our clinic , followed<br> 12 months of high-quality German anti-
ageingpreparations + special Anti Aging face creams + monthly consultations for 1 year.</p>
<br><br>
<b>The program includes:</b> Complete diagnosis of the physical condition of the body, including Daily physician consultations,
<ul class="anti-alig about2">
		
	<li>Complete history taking and physical examination,</li>
	<li>Special diagnostics for the measurement of biomarkers of aging</li>
	<li>Anti-aging analysis of blood (blood chemistry, hematology blood test, metabolic profile, blood test for hormones)</li>
	<li>Testing for metabolic syndrome for early diagnosis of Diabetes/Heart disease</li>

	<!-- <li>Daily physician consultations,</li>
	<li>Complete history taking and physical examination,</li>
	<li>Special diagnostics for the measurement of biomarkers of aging,</li>
	<li>Anti-aging analysis of blood (blood chemistry, hematology blood test, metabolic profile, blood test for hormones),</li>
	<li>Testing for brain age,</li>
	<li>Testing for blood vessel age,</li>
	<li>Testing for heavy metal load and other body toxic load,</li> -->
</ul>
<div class="col-md-5 col-xs-12" style="margin-top:1%;padding:0;">
	<img src="<?=base_url()?>assets/images/Before_After.jpg" class="img responsive img-bord">
</div>
<div class="col-md-7 col-xs-12 about2" style="padding:0;">
	<ul class="anti-alig about2">
	<li>Testing for brain age</li>
	<li>Testing for blood vessel age</li>
	<li>Testing for heavy metal load and other body toxic load</li>
	<li>Special CardioSkan, which pictorially shows weak/normal areas of heart as red and green areas</li>
	<li>Assessment of the body’s stress levels by special tests</li>
	<li>Assessment of the functional state of the nervous system,</li>
	<li>Testing for the risk factors of premature aging,</li>
	<!-- <li>Testing for metabolic syndrome for early diagnosis of Diabetes/Heart disease,</li>
	<li>Special CardioSkan, which pictorially shows weak/normal areas of heart as red and green areas,</li>
	<li>Testing for the risk factors of premature aging,</li>
	<li>Assessment of the functional state of the nervous system,</li>
	<li>Assessment of the body’s stress levels by special tests.</li> -->
</ul></div>
<div class="clearfix"></div></p>
<br><br>

<p>
The program is totally non-surgical and consists of the most effective

combination of following<br> treatments customized for each patient:

<!-- The program is totally non-surgical and consists of the most effective combination of following<br> treatments (injections/drips) customized for each patient: --><br><br>

<b>1.The German-Oxidation Therapy:</b> To bring O2 and CO2 levels to a 25-year olds (ideal age).<br> With ageing, the human body’s basal (at-rest) oxygen and carbon-dioxide levels become<br> misbalanced which negatively affect all cells.<br><br>

<b>2.Immunotherapy:</b> For powerful stimulation of the immune system. Weakening of immune system greatly accelerates ageing process.<br><br>

<b>3.Intravenous injections and drips of ‘Anti Aging’ cocktails:</b> For replenishment of<br> micronutrients and life-prolonging anti-oxidants vital for the body’s optimum functioning.<br><br>

<b>4.The ‘Cyto-rejuvene’ Therapy:</b> The ‘Beauty secret’ of Hollywood stars and celebrities- for<br> regeneration of body’s internal organs. The biologically active regenerative injections are<br> produced in a GMP and government certified special laboratory in South Germany on special demand for each patient.<br><br>

<b>5.ATP Optimisation Therapy:</b> Adenosine Triphosphate (ATP) is the “molecular energy<br> currency” of life. ATP is the molecule that stores the energy. The ageing processes (especially<br> after 35 years) significantly decrease ATP stores inside our body.<br><br>

<b>6.Laser Revitalisation of Blood:</b> Russian innovation in medicine, commonly practiced in<br> Russia and Germany even today. This therapy significantly increases Superoxide Dismutase <br>(SoD) levels inside our body. SoD serves a key antioxidant role and is an extremely important<br> antioxidant defense in nearly all cells.<br><br>

<b>7.Individual Anti Aging Nutritional Program:</b> Individualised nutritional programmes will be<br> developed that will also include antioxidants, vitamins, minerals, trace elements for slowing<br> down and reversing the ageing process by 50%.<br><br>
<div class="col-md-7 col-xs-12 about2" style="padding:0;">
<span><b>Your body and time</b></span><br>
Patients report the following:<br>
<ul class="anti-alig about2">
	<li>A general sensation of feeling younger</li>
	<li>Improvement in blood circulation to the hands and feet</li>
	<li> Lower blood pressure</li>
	<li>Highly-improved sex drive and potency</li>
	<li>Relief from sexual dysfunction</li>
	<li>Skin looks younger and hydrated</li>
	<li>Lightening of blemishes and facial pigmentation</li>
	<li>Refining of facial pores and a fresh glow to the skin</li>
	<li>Skin elasticity and thickness improved</li>
	<li>Wrinkles are reduced</li>
	<li>Improvement of sleep quality</li>
	<li> Improvement of digestion</li>
	<li>Improvement in the immune system</li>
	<li>A feeling of being awake and alert</li>
	<li>Higher energy levels</li>
	<li>Increase in joint flexibility and agility</li>
	<li>Decrease in weight</li>
	<li>Improvement of blood parameters</li>
	<li>Feeling of being alive again</li>
	<li>Improved memory retention</li>
</ul></p>
</div>
<div class="col-md-5 col-xs-12" style="margin-top: 10%;">
	<img src="<?=base_url()?>assets/images/shutterstock_138420443_Small.jpg" class="img-responsive img-bord">
</div>
<div class="clearfix"></div>
<br><br>
<p>
<span><b>FAQs — Anti Aging</b></span><br>
<b>Q. What is the guarantee that this program will work for everyone?<br>
A:</b>Our Anti Aging Program is a time-tested, robust program that has a very high success rate.<br> This success, however, depends entirely on whether the patient adheres to the<br> program guidelines. If the patient adheres to the guidelines of the program, there is no reason why the<br> program will not work.<br><br>
<b>Q.  How young will I feel at the end of the program?<br>
A. </b> Our Anti Aging Program is designed to make you feel at least 7–10 years younger.<br><br>
<b>Q. Are there any side effects during and after the program?<br>
A. </b> No, there are no side-effects. On the contrary, patients will feel energetic and agile following a<br>boost of hormones and virility.<br><br>
<b>Q. When will I start seeing the effects of the treatment?<br>
A. </b> As soon as 3 weeks from the commencement of the treatment.<br><br>
<b>Q. Will my hair-loss improve?<br>
A.</b> The Anti Aging treatment will certainly slowdown hair loss.<br><br>
<b>Q. Are there any medications to be taken for this treatment?<br>
A. </b> Yes, the treatment includes oral as well as intramuscular/intravenous injections that need to be<br> taken on a regular basis till the end of the treatment.<br><br>
<b>Q. Can I drink alcohol during the treatment? If yes, how frequently? If yes, which alcohol?<br>
A. </b> We do not encourage alcohol indulgence during the program.<br>
However, if one wishes to, because of social/business reasons, a limited intake of specific type<br> of alcohols (spirits, not beer) may be advised.
Can I smoke during the treatment?<br>
Our Program does not encourage smoking — it down-regulates healing processes and may<br> affect the outcome of the program.
</p>








 
		        

       
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