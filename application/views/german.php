
<!DOCTYPE html>
<html>
<head>
<title>Rejuvenesse-Weight Loss</title>
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
<!--script type="text/javascript">
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
  margin:-65px 73px;
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
				<img src="<?=base_url()?>assets/images/slimming_s.png" class="img-responsive wow zoomIn" data-wow-duration="1s" data-wow-delay=".6s" width="100%;">
			</div>
			<div class="col-sm-4 col-md-4 col-xs-12">
				
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 text-left" style="margin-top:2%;">
				<h2 class="title">Rejuvenesse German Scientific-Slim Program</h2>
			</div>
			<div class="col-md-3 col-xs-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".9s" style="margin-left: 4%; margin-top: 4%;">
				<ul class="socials">
					<li>
						<a id="show_div" href="https://www.facebook.com/Rejuvenesse-1741498832774975/" target="_self">    			 
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
			<div class="col-md-8 col-xs-8 about wow fadeInRight" data-wow-duration="1s" data-wow-delay=".14s">
			
		         <p><span><b>Medically supervised non-surgical permanent weight loss</b></span><br>

				Dieting to achieve sustained weight-loss often fails even before commencement of the program. Why is this? In part, this is because most diets fail to take into account the diverse fundamental reasons of why one puts on weight in the first place, such as:<br>

				<ul class="anti-alig about2">
					<li>Psychological factors such as depression, anxiety & eating disorders</li>
					<li>Behavioral factors such as poor portion control, fast food consumption & learnt eating habits from childhood</li>
					<li>Endocrine disorders including hypothyroidism, insulin resistance, Cushing’s Syndrome</li>
					<li>Stress</li>
					<li>Poor glucose handling</li>
				</ul><br><br>


				<div class="col-md-8 col-xs-10" style="padding:0;">
					<p>Instead of looking for physiological reasons behind an increasing waistline, the popular answer to the challenge is to turn to a number of familiar generic “truisms” of weight-loss. Consequently, you end-up tackling the symptom — weight gain, and not the cause. Our experience prompts us that, while patients do lose few kilograms while on any initial diet-based program, they regain their lost weight very quickly (a yo-yo effect), and most put on more weight than they started with. These diets/methods do not work for patients because they mainly rely only on “dieting”, that is — either cutting down intake, or prohibiting certain food items (quantity and quality); however, the endocrine aspect (hormones), liver detoxification, optimal cellular oxygenation, role of autonomous nervous system, and impact of body pH on energy metabolism are totally ignored.</p>
				</div>

				
			
				<div class="clearfix"></div>
				<br />

				<p>
					<span><b>Relook at weight-loss</b></span><br>
					Our German Scientific-Slim, is a groundbreaking physician-supervised weight loss program that will change your life! More than 20 studies in prestigious German medical journals have documented Scientific-Slim Program’s extraordinary success in helping thousands of overweight patients worldwide. Many diet-and-exercise programs claim results, but where is the proof and published results? Scientists from renowned German universities and many other research institutions have lauded the Scientific-Slim program’s effectiveness in weight-loss.<br><br>
					The German Scientific-Slim is a permanent weight-loss plan that not only helps reduce your abnormal fat banks, but also helps resetting your brain and endocrine system that consequently revamps your eating habits.<br><br>
					
					The German Scientific-Slim is a permanent weight-loss plan that not only helps reduce your abnormal fat banks, but also helps resetting your brain and endocrine system that consequently revamps your eating habits.<br><br>
					<span><b>Apart from the significant weight-loss achievement, the German Scientific-Slim Program has been found to:</b></span>
					<ul class="anti-alig about2">
						<li> Reduce very low density lipoprotein (VLDL, commonly referred to as “bad cholesterol”) by 20%
						</li>
						<!--li>Behavioural factors — poor portion-control, excessive fast-food consumption, and learnt eating habits carried over from childhood.</li-->
						<li>Reduce triglycerides (the fat that you feel when you pinch your abdomen) by 37%
						</li>
						<li>Reduce chronic inflammation by 30% (obesity is considered an inflammatory disease)
						</li>
					</ul>
				</p>
				<p>
				<br>
					<b>Pre-treatment assessment</b><br>
					To determine the suitability of patients to undergo the German Scientific-Slim program - we need the following: <br>
					<b><i>a. Detailed Medical History of the Patient</b></i><br>
					<b><i>b. Essential Set of blood tests required by us</b></i><br>
					<b><i>c. Determine Upper Limit of carbohydrate tolerance  </b></i>
					Our doctor studies and assesses all the above to decide whether the proposed patient is suitable for the program or not. 
					<br><br>
					<span><b>Step by Step look at the Program</b></span><br>
					<b>Phase 1: 6 days at the clinic (fixed-time)</b><br>Daily patient attendance at the clinic is compulsory. A visit will take an hour. What do we do?
				</p>


				 <div class="col-md-7 col-xs-12 about2" style="padding:0;">
					<p>
						<ul class="anti-alig about2">
							<li>Correct hormonal imbalances</li>
							<li>Correct micronutrient imbalances</li>
							<li>Individualize diets</li>
							<li>Correct acid–base imbalances</li>
							<li>Perform general detoxification</li>
							<li>Perform liver detoxification</li>
							<li>Correct autonomic nervous system imbalances</li>
						</ul><br>
						<b>Phase 2: Next 6 weeks at home </b><br>
					</p>
					<p>
						<ul class="anti-alig about2">
							<li>A customized diet as prescribed by the doctor</li>
							<li>Orthomolecular supplements</li>
							<li>Easy to follow — no feeling of starvation.</li>
							<li>Exercise not compulsory while on the program.</li>
							<li>Highly effective.</li>
							<li>Significant weight loss in a short time-period.</li>
							<li>Non-surgical method.</li>
							<li>No side effects.</li>
							<li>Disappearance of cellulite from hips and buttocks.</li>
							<li>Targeted fat loss with no muscle loss (unlike other diets/methods).</li>
						</ul>
					</p>
				</div>
				<div class="col-md-5 col-xs-12">
					<img src="<?=base_url()?>assets/images/shutterstock_432680134_Small.jpg" class="img-responsive img-bord">
				</div><br>
				<div class="clearfix"></div>


				<ul class="anti-alig about2">
					<li>Improvement in skin texture and reduction of wrinkles/double-chin.</li>
					<li>No stretch marks even after losing 15–22 kgs. of weight.</li>
					<li>Significant reduction in the risk of developing diabetes mellitus II later on in life.</li>
					<li>Significant reduction in the risk of developing coronary heart disease later on in life.</li>
					<li> Significant reduction in the risk of developing cancer later on in life.</li>
					<li>Reduction of blood pressure in those having hypertension.</li>
					<li>Improvement in mood and self-esteem.</li>
					<li>Increased chance of delivering healthy non-diabetic babies (in women planning to conceive).</li>
					<li>Increased muscle mass, sexual potency and libido in men.</li>
				</ul><br><br>
				<p>
					<b>Phase 3 : Next 4 weeks Customised maintenance diet as prescribed by the doctor to enable the body to adjust to the weight loss achieved</b><br><br>
					<b><i><span>Benefits and bonus effects</span> of the German Scientific-Slim Program:</b></i>
<br>
<br>
	<span><b>FAQs — German Scientific-Slim Program</b></span><br>
					<b>Q. What is the guarantee that this will work for everyone?</b><br>
					<b>A.</b> The German Scientific-Slim Program is a time-tested, robust program. The success of the program depends entirely on whether the patient adheres to the program guidelines. If the patient adheres to the guidelines of the program, there is no reason why the program will not work.
				</p><br><br>

				<div class="col-md-5 col-xs-12" style="padding:0;">
					<img src="<?=base_url()?>assets/images/shutterstock_140527876_Small.jpg" class="img-responsive img-bord">
				</div>
				<div class="col-md-7 col-xs-12 about2" style="padding:0;">
					<p>
						<b>Q. Will I put on weight after the program?</b>
						</span><br>
						<b>A.</b> The German Scientific-Slim Program is targeted to work on some major areas that are unique to this weight-loss program:
						The program is directed to work on<br>
						<b><i>Fat-loss</b></i> — it does not, unlike other program, reduce body muscle mass and water-content. This is important, because one needs to maintain appropriate muscle mass that will provide the body the ability to maintain the targeted fat-loss.
						<b><i>The appetite centre</b></i> — a physiologically sound appetite centre is crucial in maintaining body weight. This centre regulates the “desire to eat food”, which is a major challenge when it comes to overindulging in food.
						<b><i>Individualised macronutrient balance</b></i> — of carbohydrate, protein and fat will be provided to the patient. Every individual</div>
						<div class="clearfix">
							
						</div>
					</p>
				<br><br>

				<p>
				has a unique threshold to these macronutrients, especially carbohydrates, that are present in food. An imbalance in intake of these macronutrients is one of the reasons for putting on weight in the first place.<br>
				<b><i>The motivational component</b></i> — achieving your target weight is the best motivation for you to maintain your weight.<br><br>
				<b>Q. Can I drink alcohol during the treatment? If yes, how frequently? If yes, which alcohol?</b><br>
				<b>A.</b> We do not encourage alcohol indulgence during the program. Alcohol is a carbohydrate and has empty calories, but most importantly can disrupt hunger signals that the brain requires during food-intake as well as disrupt the metabolic process.
				However, if one wishes to, because of social/business reasons, a limited intake of specific type of alcohols (spirits, not beer) may maybe advised.</p><br><br>

				<p><b>Q. Can I smoke during the treatment?</b><br>
				<b>A.</b> The German Scientific-Slim Program does not encourage smoking — it down-regulates the appetite centre and may affect the outcome of the program.</p>

				<br><br>
				<p>
				<b>Q. Are there any side-effects or long-term effects because of losing weight so fast?</b><br>
				<b>A.</b> None, whatsoever. On the contrary, patients will experience a boost in energy levels and mood, an improvement in skin tone, reduction in metabolic challenges (blood-sugar imbalances), reduction in blood pressure among the hypertensives and an overall feeling of wellness.<br><br>

				<b>Q. How important is the prescribed diet to the program?</b><br>
				<b>A.</b> The German Scientific-Slim Program Diet is crucial to the program. We strongly advice that the prescribed diet be adhered to, whether having a meal at home, at a friend’s, in the office, at a restaurant or while travelling for leisure or business.</p>
				<br><br>
				<p> 
				<b>Q. Will I have any sagging skin after losing so much weight?</b><br>
				<b>A.</b> This is one of the best experiences with the German Scientific-Slim Program — no skin-sag! In fact, the skin tone will improve with the prescribed diet and medications.<br><br>

				<b>Q. What will my diet be post-program? Will I have to be on one?</b><br>
				<b>A.</b> Following the weight-loss German Scientific Slim Program, it makes rudimentary sense to maintain a good diet through out life. In most cases, patients opt for this because of the motivation that they acquire during the program. For patients who wish to lose more weight, we recommend a repeat of the program.
				</p>
			 </div>	
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