<html>
<html>
<head>
<title>Rejuvenesse-breathe new life-Programs-Andro</title>
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
					<a href="<?=base_url()?>index.php/home/index"><img<?=base_url()?>assets/ src="<?=base_url()?>assets/images/logo.png" data-wow-delay=".5s" class="img-responsive  wow slideInLeft animated text-center"></a>
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
			<img src="<?=base_url()?>assets/images/andro_s.png" class="img-responsive wow zoomIn" data-wow-duration="1s" data-wow-delay=".6s" width="100%;">
		</div>
		<div class="col-sm-4 col-md-4 col-xs-12"></div>
		<div class="col-md-6 col-sm-6 col-xs-12 text-left" style="margin-top:2%;"><h2 class="title">Rejuvenesse Andro-Revive Program</h2><br><span class="text-left span">Male empowerment through ‘Re-education’ of penis</span></div>
			<div class="col-md-3 col-xs-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".10s" style="margin-left: 4%; margin-top: 4%;">
			<ul class="socials">
				<li>
					<a  href="https://www.facebook.com/Rejuvenesse-1741498832774975/" target="_blank">    			 
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
			
		         <p><span><b>What are impotence, low libido and erectile dysfunction?</b></span><br>

Impotence is an outdated terminology that is no longer used to describe male sexual <br>
problems. The current terminology describes difficulty in achieving and/or maintaining an <br>
erection as “erectile dysfunction”. Erectile dysfunction is one of the most common sexual <br>
problems for men that worsens with ageing, as degenerative changes take place in the <br>penis and it’s associated blood vessels.<br><br>
Low libido or colloquially low sex-drive, is a person’s overall reduced sexual drive or reduced<br> desire for sexual activity. <br> <br>
<span><b>How do erections occur?</b> </span> <br>
The simplest way to describe the process of erection is to think of a washing machine.The  <br>
“on–off” switch (the brain) initiates the process and the wires in the washing machine carry the  <br>
electrical signal (the nerves release chemicals) to the pipes (the blood vessels). When an <br>
appropriate signal arrives, a valve opens to allow water to flow in and fills the tank (the penis  <br>
fills with blood in two spongy chambers called corpus cavernous and becomes erect) and the <br>
drain shuts (the penile veins close) — the wash-cycle initiates (enjoys sexual activity). At the <br>
end of the wash cycle, the process is reversed when the switch goes off (the brain terminates <br>erection).<br><br>

Achieving an erection is, therefore, a complex process involving psychological impulses from <br> the brain, adequate levels of the male sex hormone — testosterone, a well-functioning <br>
nervous system, and adequate and healthy vascular tissue in and around the penis.<br>
Given the complexity of the system, it is not surprising that a wide variety of diverse disorders may<br> result in erectile dysfunction. <br><br>
 <span><b>Disorders that can cause erectile dysfunction:</b></span><br>

 <ul>
 		<li>
 			<b>Vasculogenic causes</b> — That affect blood flowing into (arterial narrowing or blocking) or out of<br> (venous leakage) the penile tissue.<br> 
 		</li>
 </ul>
 <div class="col-md-7 col-xs-12 about2" style="padding:0;">
 <ul>
 <li>
 	<b>Fibrogenic causes</b> — Intracavernosal smooth muscle<br> fibrosis that impedes the oxygen saturation of the blood<br> within the lacunar spaces of the corporeal muscle.<br></li>
<li>
<b>Neurogenic causes</b> — The erectile and ejaculatory<br> systems require intact neural pathways between the<br> brain and the erectile tissue. Several neurological<br> conditions (Parkinson’s disease, multiple sclerosis,<br> diabetic neuropathy, trauma) can affect neural<br> pathways, resulting in erectile dysfunction.<br>
</li>
<li><b>Endocrinological causes </b>—Dysregulation of several hormones — Testosterone, luteinizing hormone — affect sexuality and sexual function. These hormones are required for normal smooth muscle functioning.<br>
</li>
<li><b>Psychogenic causes</b> — In most cases revolve around performance anxiety, or as failure of erection itself that induces anxiety, loss of confidence and sometimes relationship difficulties. The conviction that an erection will not develop when required, therefore, becomes a self-fulfilling prophesy.
 </li>
 </ul>

<!-- <b>Vasculogenic causes</b> — that affect blood flowing into (arterial narrowing or blocking) or out of<br> (venous leakage) the penile tissue.<br>
 <div class="col-md-7 col-xs-12 about2" style="padding:0;">
<b>Fibrogenic causes</b> — intracavernosal smooth muscle<br> fibrosis that impedes the oxygen saturation of the blood<br> within the lacunar spaces of the corporeal muscle.<br>
<b>Neurogenic causes</b> — the erectile and ejaculatory<br> systems require intact neural pathways between the<br> brain and the erectile tissue. Several neurological<br> conditions (Parkinson’s disease, multiple sclerosis,<br> diabetic neuropathy, trauma) can affect neural<br> pathways, resulting in erectile dysfunction.<br>
<b>Endocrinological causes </b>—dysregulation of several hormones — testosterone, luteinizing hormone — affect sexuality and sexual function. These hormones are required for normal smooth muscle functioning.<br>
<b>Psychogenic causes</b> — in most cases revolve around performance anxiety, or as failure of erection itself that induces anxiety, loss of confidence and sometimes relationship difficulties. The conviction that an erection will not develop when required, therefore, becomes a self-fulfilling prophesy. -->
</div>
<div class="col-md-5 col-xs-12">
	<img src="<?=base_url()?>assets/images/shutterstock_411127888.jpg" class="img-responsive img-bord">
</div><br>
<div class="clearfix"></div><br><br>

<p>
<div class="col-md-9 col-xs-9" style="padding:0;">
	<p>
<span><b>Role of patented drugs in treatment of erectile dysfunction</b></span><br>
The popularity of patented drugs has skyrocketed over the past year.The problem with a  short-term solution by using drugs, is that it encourages people to forget about seeking treatment — instead of visiting a doctor to address the root cause/causes of the penile dysfunction, most men just pop in a pill for instant (thirty minute) results.Patented drugs do not cure erectile dysfunction, nor do they treat the root cause/causes of the problem. It just temporarily increases penile
nitric oxide levels for achieving an artificial erection.<br><br>
</p></div>

<div class="clearfix"></div><br><br>
 <p><span><b>What do patented drugs do?</b></span><br>

<ul class="anti-alig about2">
	<li>They do not increase libido (sexual desire).</li>
	<li>Numb penis response — penis becomes erect with little or no sensation in it</li>
	<li>Cause difficulty in achieving orgasms, due to prolonged “artificial erection”.</li>
	<li>Commonly cause headaches and blurred vision for at least 2–3 hours.</li>
	<li>Result in psychological dependence.</li>
	<li>Are not recommended for people having heart disease and high blood pressure.</li>
	<li>May cause life-threatening hypotension, sudden hearing loss, heart attack or stroke.</li>
</ul><br><br>
<p>
	<span><b>What Does Andro-Revive Do?</b></span><br>
	Andro-Revive therapy is “tailored for each patient”, with a combination of highly effective <br>
	German and Russian therapies that are based on several years of research, that specifically <br>
	eliminate the root cause/causes of erectile dysfunction/low-libido without using any <br>
	pharmaceutical drugs or undergoing surgery.<br><br>
	<span><b>Andro-Revive typically:</b></span><br>
	<ul class="anti-alig about2">
		<li>Removes arterial blockages in vessels that supply blood to the penis.</li>
		<li>Normalises sex hormone levels.</li>
		<li>Optimises testicular function.</li>
		<li>Reduces age-related fibrosis of the penis.</li>
		<li>Enhances penile sensitivity to touch.</li>
	</ul>
</p><br><br>


<div class="col-md-5 col-xs-12" style="padding:0;">
	<img src="<?=base_url()?>assets/images/shutterstock_155680070_Small.jpg"  class="img-responsive img-bord">
</div>
<div class="col-md-7 col-xs-12 about2">
	<p>
		<span><b>What does the Andro-Revive Program include?</b></span><br>
		<b>Phase 1 — 8 days in Clinic for 1 hour a day + 12 months maintenance program.</b><br>
		The Program includes first 8 days of daily intensive treatment sessions in our clinic , followed by 12 months of high-quality German preperations<br>
		<b>What do we do:</b>
	<ul class="anti-alig about2">
			<li><b>German ozone protocol for treating erectile dysfunction —</b>increases basal oxygen levels in penile cells, decreases blood viscosity (clumping/clotting) in penis, dilates blood vessels,removes hidden focus of infection.</li>
			<li><b>Photonic treatment of penis and surrounding tissue with a special medical device —</b>gently and effectively removes blockages in small arteries of the penis, degrades (or liquefies) fibrotic tissue in penis, increases natural production of nitric oxide inside penis, and also increases penis sensitivity.</li>
			<li><b> Specific low-molecular peptide therapy —</b> causes natural rejuvenation of testes, increased production of natural testosterone and increased new blood vessel formation in the penis.</li>
			<li><b> Extra-corporal laser atherotomy —</b> involves removal of blockages from common iliac and internal iliac arteries (large arteries supplying blood to penis) with the help of a monochromatic laser equipment.</li>
			<li><b> Orthomolecular therapy — </b> specific micronutrients for optimal testicular health that will increase semen production.</li>
			<li><b> Endovascular laser therapy – </b>improves overall blood circulation and nitric oxide levels, liquefies arterial blockages throughout the body, stimulates the immune system, has anti-inflammatory effects, activates both cell metabolism and the production of new cells.</li>
			<li><b>Bio-identical replacement of testosterone and DHEA –</b> to correct hormonal imbalance, if needed.</li>
	<!-- <li>Correct autonomic nervous system imbalances</li>
	<li>Improve blood supply in the genital region</li> -->
	</ul>
</div>
<div class="clearfix"></div></p>
<br><br>

<!-- <p>
Phase 2 — next 12 months at your home with regular follow-ups at the clinic<br>
<ul class="anti-alig  about2">
	<li>Maintain hormonal balance</li>
	<li>Orthomolecular supplements</li>
	<li> Correct general health and well-being</li>
</ul></p> --><br><br>

<p>At the end of program patients will receive appropriate information on ‘How to maintain the achieved results’ with simple strategies — specific exercises, lifestyle advice, natural ways to enhance testosterone and growth hormone levels, how to prolong the sexual intercourse duration,penis hygiene, specific foods, prohibited food items list, etc.</p>


<!-- <br><br>
<p>
<b>Andro-Revive includes:</b><br>
<b><i>• German ozone protocol for treating erectile dysfunction</b></i> — increases basal oxygen levels in penile cells, decreases blood viscosity (clumping/clotting) in penis, dilates blood vessels, removes hidden focus of infection.<br>


• <b><i>Photonic treatment of penis and surrounding tissue with a special medical device</b></i> —<br> gently and effectively removes blockages in small arteries of the penis, degrades (or liquefies) fibrotic tissue in penis, increases natural production of nitric oxide inside penis, and also increases penis sensitivity.<br>

•<b><i> Specific low-molecular peptide therapy </b></i>— causes natural rejuvenation of testes, increased production of natural testosterone and increased new blood vessel formation in the penis.<br>

• <b><i>Extra-corporal laser atherotomy —</b></i> involves removal of blockages from common iliac and internal iliac arteries (large arteries supplying blood to penis) with the help of a monochromatic laser equipment.<br>

• <b><i>Orthomolecular therapy</b></i> — specific micronutrients for optimal testicular health that will increase semen production.<br>

• <b><i>Endovascular laser therapy </b></i>– improves overall blood circulation and nitric oxide levels, liquefies arterial blockages throughout the body, stimulates the immune system, has anti-inflammatory effects, activates both cell metabolism and the production of new cells.<br>
• <b><i>Bio-identical replacement of testosterone and DHEA</b></i> – to correct hormonal imbalance, if needed.<br><br>

<span><b>What will you experience after ‘Andro-Revive?</b></span><br>

<ul class="anti-alig about2">
	<li>Increased ease of acquiring and maintaining erections.</li>
	<li>‘Return’ of early-morning erections.</li>
	<li> Increased sexual desire (libido).</li>
	<li> Increased penis sensitivity to touch and temperature.</li>
	<li>Increased sperm (semen) production.</li>
	<li> Increased confidence and self-esteem.</li>
</ul></p>

<br><br> -->
<p>
<span><b>FAQs — Andro-Revive</b></span><br>
<b>Q. What are the chances of failure or non-success of Andro-Revive?<br>
A.</b> The chances of failure of the treatment are very slim. The cause for the loss of libido or sexual potency could be varied, ranging from hormonal to metabolic to vascular conditions. We will access all patients with extensive laboratory and physical tests prior to commencement of the program, so that optimal treatment can be provided. <br><br>
The degree of success may vary from person-to-person — which largely depends on absence of challenging conditions like hypertension, type 2 diabetes mellitus, obesity, etc.<br><br>
<b>Q. How long do the effects of Andro-Revive last?<br>
A.</b> The time period cannot be defined because the degeneration of body cannot be determined. After the program, the patient is given guidelines to follow. As much a patient follows them, it helps to keep the results.<br><br>
<b>Q. Are there any side effects of Andro-Revive?<br>
A.</b> No, there are no side-effects. On the contrary, patients will feel energetic and agile following a boost of hormones and virility.<br><br>
<b>Q. How soon will I start seeing results of the treatment?<br>
A.</b> As soon as 3 weeks from the commencement of the treatment.
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