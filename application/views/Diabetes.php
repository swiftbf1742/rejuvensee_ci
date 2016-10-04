
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
			<img src="<?=base_url()?>assets/images/diabities_s.png" class="img-responsive wow zoomIn" data-wow-duration="1s" data-wow-delay=".6s" width="100%;">
		</div>
		<div class="col-sm-4 col-md-4 col-xs-12"></div>
		<div class="col-md-6 col-sm-6 col-xs-12 text-left" style="margin-top:2%;"><h2 class="title">Rejuvenesse Regenerative

Therapy for Diabetes</h2><br><span class="text-left" style="color: #00984A;font-family: 'arialregular';    margin-left: -12%;
    font-size: 15px;font-weight: bold;">Metabolic Stem Cell Therapy for Diabetes</span>
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
			
		         <p><span><b>Reversal of Type II Diabetes without Surgery or Drug</b></span><br>

If you have type 2 diabetes, you certainly need to know that 90% of cases of diabetes<br>
are reversible.<br><br>
As soon as a diagnosis is done, too often doctors prescribe blood-sugar-lowering

drugs and/or insulin prematurely and on an ad hoc basis without recognizing the fact

that, at least in initial stages of disease process, the main problem is "insulin

resistance of body cells and not a deficiency of insulin". Insulin resistance cannot be

reversed by artificially decreasing blood sugar levels with drugs or by injecting insulin

(which eventually add on to the insulin resistance challenge).<br><br>
<span><b>A word about chronically high insulin levels</b></span> <br>
There’s nothing evil about insulin. Insulin is a hormone that has several hundred<br>

different functions in a healthy human body, provided the level of insulin circulating in<br>

the blood remains within a normal, healthful range. But when the body becomes<br>
saturated with far too much insulin, this normally healthy hormone becomes toxic.<br>
<br>
Chronically elevated Insulin can be more dangerous than chronically elevated blood

sugar levels.<br><br>
Over long periods excessive insulin directly causes or contributes to a wide range of

chronic diseases including heart disease, obesity, high blood pressure, osteoporosis,

Alzheimer’s disease, sleep apnoea and even cancer. We do not advice that you stop

insulin right away — that can only be done under proper physician consultation and

guidance. <br><br>
Metabolic Stem Cell Therapy for reversal of diabetes mellitus is a physician-supervised

10-day residential treatment program currently offered at the Juventas Clinic in

Germany.<br><br>

<b>Metabolic Stem Cell Therapy for Diabetes has three objectives:</b><br>
<ul class="diabetes">
<li>Stop the progression of diabetes. </li>
<li>Start the process by which diabetes is reversed. </li>
<li>Treat the damage that was induced by the progression of diabetes before

commencement of the Metabolic Stem Cell Therapy for Diabetes. </li>

</ul>

 <div class="col-md-7 col-xs-12 about2" style="padding:0;">
Metabolic Stem Cell therapy is an intensive,<br>comprehensive, integrative therapeutic<br>approach based on the sound principles of<br>
human physiology and biochemistry to fight<br>diabetes at the cellular–mitochondrial level. For <br> achieving long-lasting therapeutic effect, we<br> combine German biological therapies with an<br> orthomolecular approach, and try to eliminate<br>all possible factors which caused this disease in <br>
the first place.<br><br>
We also use a state-of-the-art photonic device to increase cell-insulin sensitivity, and to

regenerate damaged or dysfunctional beta cells of the pancreas (that secrete insulin).

Simultaneously, we treat diabetes-related pathologies (e.g., high blood pressure,

kidney problems, eye problems). Detoxification procedures will help cleanse the body

of toxins, heavy metals, and pesticides, which will help remove blockages from blood

vessels. The program is non-surgical and without any risk/side-effects.<br><br>
</div>
<div class="col-md-5 col-xs-12">
	<img src="<?=base_url()?>assets/images/shutterstock_283210523_Small.jpg" class="img-responsive img-bord">
</div><br>
<div class="clearfix"></div><br><br>

<p>
<div class="col-md-9 col-xs-9" style="padding:0;">
	<p>
<span><b>Metabolic Stem Cell Therapy Program for Diabetes — who has this Program

been designed for?</b></span><br>
<b>For all diabetes patients over the age of 18 years</b> <br>
<b>Duration of the Metabolic Stem Cell Therapy Program for Diabetes</b><br>

<i><b>10 days of treatment — everyday, 2 to 4 hours in-clinic based intensive</b></i><br>

treatment sessions.<br>
<p><b>What is included in the Metabolic Stem Cell Therapy Program for Diabetes:</b></p><br>
<ul class="anti-alig about2">

	<li>Detailed patient review and specialist examination.</li>
	<li>Specific blood tests to assess current diabetes status.</li>
	<li>Functional diagnostics to assess brain, kidneys, heart and pancreas functions.</li>
	<li>Several sessions of intravenous LASER revitalization of blood for regeneration of

blood cells.</li>
	<li>Several sessions of intravenous ozone therapy to remove hidden foci of infection in

the body. </li>
	<li>10 intramuscular injections of "stem cells for diabetes". </li>
	<li>Several sessions of LASER scanning of pancreas with special equipment for

regeneration of insulin secreting beta cells. </li>
<li> Several sessions of German intravenous oxygen therapy with special equipment to

increase oxygen supply to body organs.</li>
<li>Take-home 6-months pack of oral German orthomolecular capsules. </li>
<li>Take-home orthomolecular injections for achieving weight loss of 5–12 kg (for obese

patients). </li>
<li> Individualized diet recommendation with a scientifically balanced ratio of

carbohydrates, fats and proteins.</li>
</ul>
</p><br>
<span><b>Metabolic Stem Cell Therapy Program for Diabetes — who has this Program

been designed for?</b></span><br>

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
	<img src="<?=base_url()?>assets/images/shutterstock_136759886_Small.jpg" class="img-responsive img-bord">
</div>
<div class="col-md-7 col-xs-12 about2">
		<p>
			
		<ul class="anti-alig about2">
		<li>Normalization of blood sugar levels.</li>
		<li>Significant decrease or complete stoppage of diabetes

	medications (including insulin) </li>
		<li>Weight loss of 5–12 kg within 2 months (if overweight). </li>
		<li>Significant improvement of general symptoms<br>
		experienced by diabetics — e.g., fatigue, blurry vision,<br>

	increased thirst, pain and numbness in hands and feet,<br>

	frequent urinary tract infections, slow healing of wounds.<br> </li>
	<li>Significant reduction in the risk of developing future<br>

	complications of diabetes — e.g., gangrene, blindness,<br>

	kidney failure, heart attack, stroke.<br></li>
	<li>In most cases, complete stoppage of diabetes

	medications (including insulin).</li>
	</ul>
</div>

<div class="clearfix"></div></p>
<br><br>

<p>
<span><b>Additional long-term benefits of the Metabolic Stem Cell Therapy Program for

Diabetes</b></span><br><br>

	<ul class="anti-alig about2">
		<li>Significantly reduced chance of suffering from cancer in later life — diabetics are 3

	times more likely to be diagnosed with cancer than normal people.</li>
		<li>Significantly reduced chance of suffering from a heart attack or stroke later-in-life —

	diabetics are 4 times more likely to get a heart attack or stroke than normal people.</li>
	</ul></p><br><br>

	<span><b>Who will benefit most from the Metabolic Stem Cell Therapy Program for

	Diabetes?</b></span><br>
	<b>Any person (male or female) with diabetes mellitus:</b>

	<ul class="anti-alig about2">
		<li>Suffering from the disease for not more than 20 years. </li>
		<li>Taking blood-sugar-lowering drugs.</li>
		<li> On insulin therapy.</li>

	</ul></p><br><br>

	<p><span><b>Will I suffer from diabetes after the Metabolic Stem Cell Therapy Program for

	Diabetes?</b></span><br>
	No! Not if you follow the specific medical advice given at the end of treatment program.<br></p>












 
		        

       
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