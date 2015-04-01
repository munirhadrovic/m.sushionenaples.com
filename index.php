<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
		<script src="js/jquery-1.11.2.js"></script>
		<title>SushiOne Japanese Restaurant of Naples Florida</title>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dancing+Script" />
		<link rel="stylesheet" href="css/style-mobile.css">
		<link rel="stylesheet" href="css/styles.css" />
		<link rel="stylesheet" href="touchTouch/touchTouch.css" />
		<script src="touchTouch/touchTouch.jquery.js"></script>
		<script src="js/script.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>			
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
			
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			
			$(function(){
				$('#menu-features').slicknav({
					prependTo:'#navigation-menu-features'
				});
			});
			
			$(function(){
				$('#menu-gallery').slicknav({
					prependTo:'#navigation-menu-gallery'
				});
			});
			$(function(){
				$('#menu-aboutus').slicknav({
					prependTo:'#navigation-menu-aboutus'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-gallery').slicknav({
					prependTo:'#navigation-menu-gallery'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });			
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
		?>

		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><a href="#page1"><img src="img/logo.jpg" alt="LOGO"></a></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>">
			<h1>Powered by <a href="http://mobilegrows.com/">MobileGrows</a> | <a href="http://www.sushionenaples.com/" rel="external">Desktop Site</a></h1>		
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  
		  	<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">

				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn features callfind buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn aboutus callfind buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn aboutus callfind buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn aboutus callfind buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="Find US";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn aboutus callfind buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
					</div>	   
				</fieldset>

				<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/slider.png" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slider1.png" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
				        <img src="img/slider-images/slider2.png" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->

				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn   buttons-radius features" href="#features" data-transition="<?php echo $transitionefect ?>">Our Cuisine</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn  buttons-radius blog" href="#features" data-transition="<?php echo $transitionefect ?>">Lunch Menu</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn  buttons-radius features" href="#features" data-transition="<?php echo $transitionefect ?>">Dinner Menu</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn  buttons-radius aboutus" href="#features" data-transition="<?php echo $transitionefect ?>">Catering</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn  buttons-radius office" href="#features" data-transition="<?php echo $transitionefect ?>">Atmosphere</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn  buttons-radius aboutus" href="#features" data-transition="<?php echo $transitionefect ?>">About Us</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn  buttons-radius office" href="#features" data-transition="<?php echo $transitionefect ?>">Customer Comments</a></div>
				</div>								
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn  buttons-radius aboutus" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></div>
				</div>
				<!--<div class="ui-grid-b marginside">
				    <div class="ui-block-a">
				      <a class="ui-btn  buttons-radius facebook-bk" href="#" data-transition="<?php echo $transitionefect ?>"><img class="social-picture" src="img/facebook.png" alt="Facebook"></a>				      
				    </div>
				    <div class="ui-block-b">
				      <a class="ui-btn  buttons-radius google-bk" href="#" data-transition="<?php echo $transitionefect ?>"><img class="social-picture" src="img/google.png" alt="Google"></a>
				    </div>
				    <div class="ui-block-c">
				      <a class="ui-btn  buttons-radius twitter-bk" href="#" data-transition="<?php echo $transitionefect ?>"><img class="social-picture" src="img/twitter.png" alt="Twitter"></a>
				    </div>				
		 		</div>-->		  
		 		<h2>Welcome to SushiOneNaples</h2>
		 		
		 		<p>We are pleased to offer authentic Japanese sushi and other native dishes; prepared by utilizing only the freshest and the finest ingredients. We utilize only sushi grade fish and seafood in preparing our rolls and entrees.</p>
		 		<p>We pride ourselves on our food quality and taste and our service; our customer's satisfaction is our prime objective. We want our customer's to be happy with their meal and hope they will join our family of regular satisfied customers.</p>
		 		<p>Thank you for visiting our website. Come join us at SushiOne soon!</p>
		 		<p><i>We await your visit!</i></p><br>
		 		<h2>Hours</h2>
		 		<p>Lunch: Monday through Friday - 11:30 a.m. to 2:30 p.m. for lunch; and</p>
				<p>Dinner: Sunday through Thursday - 5:00 to 10:00 p.m.</p>
				<p>Friday and Saturday - 5:00 to 10:30 p.m.</p>

			</div>
		</div>
		
		<!-- page features ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="features" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-features">
						<ul id="menu-features" class="menu-hide">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Our Cuisine</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Lunch Menu</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Dinner Menu</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Catering</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Atmosphere</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Customer Comments</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
					
					<p>This is only a <b>PREVIEW</b> version of your Mobile Website.</p>
                    <hr/>
                    <p>Please contatact our official Sales Representative for <b>Full Functional Version.</b></p>
					  
				</div>

			</div>	
				
				
		</div>
		
	<!-- page features ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- About us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="aboutus" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-aboutus">
						<ul id="menu-aboutus" class="menu-hide">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Our Cuisine</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Lunch Menu</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Dinner Menu</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Catering</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Atmosphere</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Customer Comments</a></li>
						</ul>
					</section>
					<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
						<div class="ui-block-a">					
							<div class="person1">
								<div class="person-text1 person-text">
									<p>Software Developer</p>
								</div>
							</div>
							<div class="person2">
								<div class="person-text2 person-text">
									<p>Web Developer</p>
								</div>
							</div>
							<div class="person3">
								<div class="person-text3 person-text">
									<p>Graphic designer</p>
								</div>
							</div>
							<div class="person4">
								<div class="person-text4 person-text">
									<p>Mobile Developer</p>
								</div>
							</div>
							<div class="person5">
								<div class="person-text5 person-text">
									<p>Mobile Developer</p>
								</div>
							</div>
							<div class="person6">
								<div class="person-text6 person-text">
									<p>Mobile Developer</p>
								</div>
							</div>
							<div class="person7">
								<div class="person-text7 person-text">
									<p>Mobile Developer</p>
								</div>
							</div>
							<div class="person8">
								<div class="person-text8 person-text">
									<p>Mobile Developer</p>
								</div>
							</div>
							<div class="person9">
								<div class="person-text9 person-text">
									<p>Mobile Developer</p>
								</div>
							</div>
							<div class="person10">
								<div class="person-text10 person-text">
									<p>Web Developer</p>
								</div>
							</div>
							<!-- 
							<div class="person11">
								<div class="person-text11 person-text">
									<p>Mobile Developer</p>
								</div>
							</div>
							<div class="person12">
								<div class="person-text12 person-text">
									<p>Mobile Developer</p>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>			
		</div>
		
	<!-- About us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!--contact form///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
						<ul id="menu-contact" class="menu-hide">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Our Cuisine</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Lunch Menu</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Dinner Menu</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Catering</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Atmosphere</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Customer Comments</a></li>
						</ul>
					</section>	
					<div>
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							 <input type="text" id="naam" name="naam" value="" placeholder="Name" required class="inputbtn" />
							 <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required class="inputbtn" />
							 <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone" class="inputbtn" />
							 <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required class="inputbtn" />
							
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> 					
							<input type="submit" value="Submit" name="submit" class="inputformbtn">
						</form>
					</div>
				</div>
			</div>
		
		</div>

		<!--page contact ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		<!--gallery ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="gallery" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-gallery">
						<ul id="menu-gallery" class="menu-hide">
							<li><a href="#features" data-transition="<?php echo $transitionefect ?>">Features</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>" rel="external">Our Team</a></li>
							<li><a href="#gallery" data-transition="<?php echo $transitionefect ?>">Patient Info</a></li>
							<li><a href="#aboutus" data-transition="<?php echo $transitionefect ?>">About US</a></li>
						</ul>
					</section>	
						<div class="thumbs">
	        				<a href="img/imgs/01.jpg" style="background-image:url(img/imgs/pre01.jpg)" title="Panevino"></a>
	        				<a href="img/imgs/05.jpg" style="background-image:url(img/imgs/pre05.jpg)" title="Affiliated Mental Helth"></a>
	        				<a href="img/imgs/06.jpg" style="background-image:url(img/imgs/pre06.jpg)" title="Gator Music"></a>
	        				<a href="img/imgs/07.jpg" style="background-image:url(img/imgs/pre07.jpg)" title="Bice Naples"></a>
	        				<a href="img/imgs/08.jpg" style="background-image:url(img/imgs/pre08.jpg)" title="Island Coast Dentistry"></a>
	        				<a href="img/imgs/09.jpg" style="background-image:url(img/imgs/pre09.jpg)" title="Ultimate Eir Sistems"></a>
	        				<a href="img/imgs/10.jpg" style="background-image:url(img/imgs/pre10.jpg)" title="Caffe-Rcat"></a>
	        				<a href="img/imgs/11.jpg" style="background-image:url(img/imgs/pre11.jpg)" title="Daniela's Restourant"></a>
            				<a href="img/imgs/12.jpg" style="background-image:url(img/imgs/pre12.jpg)" title="Chef Sebastian"></a>
	        				<a href="img/imgs/13.jpg" style="background-image:url(img/imgs/pre13.jpg)" title="Antoine's Restaurant"></a>
        				</div>
					</div>
				</div>
			</div>
		</div>

		<!--page gallery ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


		
		
		
		
	<!--page succes///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->	

		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" >		
			<div data-role="main" class="ui-content" class="inputbtn" >	
			 <p style="color:black;">The contact form was sent succesful!</p>			
		</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" >
		
			<div data-role="main" class="ui-content" class="inputbtn" >	
				<p style="color:black;">The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////-->
	
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>

		<script src="js/easing.js" type="text/javascript"></script>
		<!-- UItoTop plugin -->
		<script src="js/jquery.ui.totop.js" type="text/javascript"></script>
		<!-- Starting the plugin -->
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
		
	</body>
</html>
