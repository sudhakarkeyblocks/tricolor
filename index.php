<?php
$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
   $name = $_POST['if_name'];
   $email = $_POST['if_email'];
   $phonenumber = $_POST['if_phonenumber'];
   $contacttype = $_POST['if_contacttype'];
   $message = $_POST['if_message'];

   if (empty($name)) {
       $errors[] = 'Name is empty';
   }

   if (empty($email)) {
       $errors[] = 'Email is empty';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'Email is invalid';
   }

   if (empty($message)) {
       $errors[] = 'Message is empty';
   }

   if (empty($errors)) {
       $toEmail = "ektajhatricolour@gmail.com,contact@tricolour.co.in ";
       $emailSubject = 'Subscription Lead - Footer Form';
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       $bodyParagraphs = ["Name: {$name}","<br/>", "Email: {$email}","<br/>", "phonenumber: {$phonenumber}","<br/>", "Message: {$message}" ];
       $body = join(PHP_EOL, $bodyParagraphs);

       if (mail($toEmail, $emailSubject, $body, $headers)) {
        //  header('Location: thank-you.html');
          echo "<script type='text/javascript'>alert('Thank you for contacting us. We will get back to you soon.');</script>";
       } else {
          //  $errorMessage = 'Oops, something went wrong. Please try again later';
          echo "<script type='text/javascript'>alert('Please try again');</script>";
       }

   } else {

       $allErrors = join('<br/>', $errors);
       $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
   }
}

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<!-- <title>Tricolour Properties Pvt Ltd</title> -->

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>The Leading Real Estate Company in India -  Tricolour Properties</title>
	<meta name="description" content="Tricolour Properties is the leading real estate company in india provides gated community open plots villas flats in Hyderabad Bangalore with best offers at affordable prices. Buy today 100% HMDA verified plots Book Now." />
	
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&amp;family=Rubik:wght@300;400;500&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">
	<!--build:css css/royarch-assets.min.css-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/line-awesome.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/settings.css">
	<link rel="stylesheet" type="text/css" href="css/layers.css">
	<link rel="stylesheet" type="text/css" href="css/navigation.css">
	<!--endbuild-->
	<link rel="stylesheet" href="css/custom.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">

</head>
<style type="">
		.hmr_bnr{
			padding: 20px 50px;
    		border: 1px solid #3d3d3d;
			background: #e52127;
		}
	.frm_btn{
			padding: 7px 34px;
			color: rgba(255, 255, 255, 0.7);
			text-transform: uppercase;
			border: 1px solid #cdcdcd;
			position: relative;
			margin-top: 25px;
			background-color: #000 !important;
		}
		/* .popupCloseButton{
			position: absolute ;
			top: 50px;
			z-index: 99999;
		}
		#get_trained .close {
			transition: all ease .5s;
		}

		.popup-img{
			position: absolute;
			top: 50px;
		}
		
		@media(max-width: 480px){
			.popup-img{
				width: 100%;
				position: absolute;
				right: 0px;
				left: -5px;
				bottom: 300px;
    		}
			.popupCloseButton{
				position: absolute;
				bottom: 300px;
			}
		} */
		.services{
			padding-top: 80px;
			padding-bottom: 10px;
		}
	</style>
<body>

<div id="ip-container" class="ip-container">
	<!-- initial loader -->
	<div class="ip-header">

		<p class="ip-logo">
			<img src="images/logo-image.png" alt="">
		</p>

		<div class="ip-loader">
			<svg class="ip-inner" width="100px" height="100px" viewBox="0 0 80 80">
				<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
				<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
			</svg>
		</div>

	</div>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
			<header class="clearfix">
				<div class="logo">
					<a href="index.php"><img src="images/logo-image.png" alt=""></a>
				</div>

				<div class="header-line">
					<a class="open-menu-toggle" href="#">
						<span></span>
						<span></span>
						<span></span>
					</a>
					<div class="social-line">
						<ul class="social-list">
							<li>
								<a href="https://www.facebook.com/TricolourGroup" target="_blank"><i class="fab fa-facebook-square"></i></a>
							</li>
							<li>
								<a href="https://www.instagram.com/tricolourgroup/" target="_blank"><i class="fab fa-instagram"></i></a>
							</li>
							
							<li>
								<a href="https://www.linkedin.com/company/tricolourgroup/" target="_blank"><i class="fab fa-linkedin"></i></a>
							</li>
							<li>
								<a href="https://api.whatsapp.com/send?phone=+919611275001&text=Hi." target="_blank"><i class="fab fa-whatsapp"></i></a>
							</li>
							<li>
								<a href="https://www.youtube.com/channel/UCc4NY-q_WUBOZoR2B3Q_U9g" target="_blank"><i class="fab fa-youtube"></i></a>
							</li>
						</ul>
					</div>
					<div class="copyright-line">
						<!-- <span class="copyright">©</span>  -->
						<p><span class="feedback-title">©</span> Tricolour Properties 2023</p>
					</div>
				</div>

				<nav class="nav-menu-box">
					<ul class="navigation-menu-list">
						<li class="active">
							<a href="index.php"><span><em>Home</em></span></a>
							
						</li>
						<li class="menu-item-has-children">
							<a href="#"><span><em>About Us</em></span></a>
							<ul class="sub-menu">
								<li><a href="compansory-vision.php">Company Story </a></li>
								
								<li><a href="our-team.php">Our Team</a></li>
								
							</ul>
						</li>
						<li class="menu-item-has-children ">
							<a href="#"><span><em>Projects</em></span></a>
							<ul class="sub-menu">
								<li><a href="hyderabad-projects.php">Hyderabad</a></li>
								<li><a href="visakhapatnam-projects.php">Visakhapatnam</a></li>
								<li><a href="darbhanga-projects.php">Darbhanga</a></li>
								<li><a href="patna-projects.php">Patna</a></li>
								<li><a href="benguluru-projects.php">Benguluru</a></li>
								<li><a href="mumbai-projects.php">Mumbai</a></li>
								<li><a href="muzaffarpur-projects.php">Muzaffarpur</a></li>
								<li><a href="all-projects.php">All Projects</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#"><span><em>Overseas</em></span></a>
							<ul class="sub-menu">
								<li><a href="https://tricolour.ae/">Dubai</a></li>
							</ul>
						</li>
						<li>
							
							<a href="blog.php"><span><em>Blog</em></span></a>
						</li>
						<li class="menu-item-has-children">
							<a href="#"><span><em>Reach Us</em></span></a>
							<ul class="sub-menu">
								<li><a href="contact-us.php">Contact Us</a></li>
								<!-- <li><a href="corporate.php">Corporate</a></li> -->
								<li><a href="career.php">Career</a></li>
								<li><a href="feedback.php">Feedback</a></li>
								<!-- <li><a href="partner-wth-us.php">Partner with Us</a></li> -->
								
							</ul>
						</li>
						<!-- <li>
							<a href="nri.php"><span><em>NRI's</em></span></a>
							
						</li> -->
						
					</ul>
				</nav>

				</header>
		<!-- End Header -->

		<div id="content">
			
			
			<div class="info-box">
				<p>
					<i class="fa fa-phone-square"></i>
					1800-120-5153
					<span class="divider-line"></span>

					<i class="fa fa-envelope-square"></i>
					contact@tricolour.co.in
				</p>
			</div>

			<!-- slider-section 
				================================================== -->
			<section class="swiper-container loading">
  <div class="swiper-wrapper">
  <div class="swiper-slide" style="background-image:url(images/open-plot-6.jpg)">
		<img src="images/open-plot-6.jpg" class="entity-img" />
		<div class="content text-center">
		  <!-- <a href="all-projects.php" class="carousel-btn">View Projects</a> -->
		  <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Embrance Serene Living</p>
		  <span class="caption" data-swiper-parallax="-20%">Open Plots in Prime Locations!</span>
		</div>
	  </div>
	<div class="swiper-slide" style="background-image:url(images/1600x993__.jpg)">
		<img src="images/1600x993__.jpg" class="entity-img" />
		<div class="content text-center">
		  <!-- <a href="all-projects.php" class="carousel-btn">View Projects</a> -->
		  <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Unparalled Comfort</p>
		  <span class="caption" data-swiper-parallax="-20%">Find Your Ideal Apartment Now! </span>
		</div>
	</div>
	<div class="swiper-slide" style="background-image:url(images/3.jpg)">
		<img src="images/3.jpg" class="entity-img" />
		<div class="content text-center">
		  <!-- <a href="all-projects.php" class="carousel-btn">View Projects</a> -->
		  <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7"> Unlock the Potential</p>
		  <span class="caption" data-swiper-parallax="-20%">Invest in Open Plots for Lucrative Returns!</span>
		</div>
	</div>
	<div class="swiper-slide" style="background-image:url(images/1.jpg)">
		<img src="images/1.jpg" class="entity-img" />
		<div class="content text-center">
		  <!-- <a href="all-projects.php" class="carousel-btn">View Projects</a> -->
		  <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Discover Your Sanctuary</p>
		  <span class="caption" data-swiper-parallax="-20%">Spaces Apartments for Tranquil Living!</span>
		</div>
	  </div>
	<div class="swiper-slide" style="background-image:url(images/open-plot-5.jpg)">
		<img src="images/open-plot-5.jpg" class="entity-img" />
		<div class="content text-center">
		  <!-- <a href="all-projects.php" class="carousel-btn">View Projects</a> -->
		  <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Discover Your Dream Home</p>
		  <span class="caption" data-swiper-parallax="-20%">Open Plots Available Now!</span>
		</div>
	  </div>
    
	
    <div class="swiper-slide" style="background-image:url(images/4.jpg)">
		<img src="images/4.jpg" class="entity-img" />
      <!-- <img src="images/2.jpg" class="entity-img" /> -->
      <div class="content text-center">
	    <!-- <a href="all-projects.php" class="carousel-btn">View Projects</a> -->
        <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Live in Luxury</p>
        <span class="caption" data-swiper-parallax="-20%">Modern Apartments for Elevated Living!</span>
      </div>
    </div>
    
	
	 
	  <!-- <div class="swiper-slide" style="background-image:url(images/4.jpg)">
      <img src="images/4.jpg" class="entity-img" />
      <div class="content">
	    <a href="view-project.php" class="carousel-btn">View Projects</a>
        <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Embrance Serene Living</p>
        <span class="caption" data-swiper-parallax="-20%">Open Plots in Prime Locations!</span>
      </div>
    </div> -->
	 <!-- <div class="swiper-slide" style="background-image:url(images/slide-06.jpg)">
      <img src="images/slide-06.jpg" class="entity-img" />
      <div class="content">
	    <a href="view-project.php" class="carousel-btn">View Projects</a>
        <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Unlock the Potential</p>
        <span class="caption" data-swiper-parallax="-20%">Invest in Open Plots for Lucrative Returns!</span>
      </div>
    </div>
      -->

	  
   
  </div>
  
  <!-- If we need pagination -->
  <!-- <div class="swiper-pagination"></div> -->
  <!-- If we need navigation buttons -->


  <div class="swiper-button-prev swiper-button-white"></div>
  <div class="swiper-button-next swiper-button-white"></div>
</section>

			<!-- End slider-section -->
			<!-- <section class="services-section3">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="hmr_bnr">
								<form method="POST" class="row justify-content-center center-title">
									<div class="col-md-3">
										<label class="text-white">Place</label>
										<select class="form-control" name="subject" id="subject">
											<option value="" selected="selected">Select Place</option>
										</select>
									</div>
									<div class="col-md-3">
										<label class="text-white">Property Type</label>
										<select class="form-control" name="topic" id="topic">
											<option value="" selected="selected">Select Property Type</option>
										</select>
									</div>
									<div class="col-md-3">
										<label class="text-white">Project Name</label>
										<select class="form-control" name="chapter" id="chapter">
											<option value="" selected="selected">Select Project</option>
										</select>
									</div>
									<div class="col-md-2">
										<input type="submit" name="submit" value="Submit" onclick="myFunction()" class="btn btn-primary frm_btn">
										<button name="submit" class="btn btn-primary frm_btn" onclick="myFunction()">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section> -->
			<section class="services">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="hmr_bnr">
								<div class="row justify-content-center center-title">
									<div class="col-md-3">
										<label class="text-white">Place</label>
										<select class="form-control" name="optone" id="stateSel" size="1">
											<option value="" selected="selected">Select Place</option>
										</select>
									</div>
									<div class="col-md-3">
										<label class="text-white">Project Type</label>
										<select class="form-control" name="opttwo" id="countySel" size="1">
											<option value="" selected="selected">Select Property Type</option>
										</select>
									</div>
									<div class="col-md-3">
										<label class="text-white">Project Name</label>
										<select class="form-control" name="optthree" id="citySel" size="1">
											<option value="" selected="selected">Select Project</option>
										</select>
									</div>
									<div class="col-md-2">
										<button onclick="myFunction()" class="btn btn-primary frm_btn">Submit</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End services-section3 -->
			<section class="services-section3">

				<div class="container">
					<div class="services-box3">
						<div class="row g-0">
							<div class="col-lg-3">
								<div class="services-post3">
									<i class="fas fa-award"></i>
									<h4><span class="counter-count">13</span><span>+</span></h4>
									<h6  style="color: red; font-size: 16px;" class="animation">Years of Excellence</h6 >
								</div>
							</div>
							<div class="col-lg-3">
								<div class="services-post3">
									<i class="fas fa-home"></i>
									<h4><span class="counter-count">35</span><span>+</span></h4>
									<h6  style="color: red; font-size: 16px;" class="animation">Projects Completed</h6>
									<!-- <p style="color: red; font-size: 16px;" class="animation"><span style="font-weight: 400;">Projects Completed</span></p> -->
								</div>
							</div>
							<div class="col-lg-3">
								<div class="services-post3">
									<i class="far fa-smile"></i>
									<h4><span class="counter-count">30000</span><span>+</span></h4>
									<h6 style="color: red; font-size: 16px;" class="animation">Happy Customers</h6 >
								</div>
							</div>
							<div class="col-lg-3">
								<div class="services-post3">
									<i class="fas fa-map-marker-alt"></i>
									<h4><span class="counter-count">7</span><span>+</span></h4>
									<h6 style="color: red; font-size: 16px;" class="animation">Across Locations</h6>
								</div>
							</div>
						</div>
					</div>
				</div>

			</section>
			<section class="portfolio-section">
				<div class="container">
					<div class="title-box">
									<span  class="custom-sub-title">FEATURED</span>
									<h2>Our Projects</h2>
								</div>
								<div class="portfolio-box iso-call">
    
								<div class="portfolio-post">
									<div class="grid">
										<figure class="effect-lily">
											<img src="images/Palm-Cove-New-Banner.jpg" alt="palm">
											<figcaption>
												<div>
													<p>Hyderabad</p>
													<h4><a href="palm-clove.php">Palm Cove</a></h4>
												</div>
												<a href="palm-clove.php">View more</a>
											</figcaption>
										</figure>
									</div>
								</div>
								<div class="portfolio-post">
									<div class="grid">
										<figure class="effect-lily">
											<img src="images/summer-brook-new-banner.jpg" alt="Summer-Brook">
											<figcaption>
												<div>
													<p>Darbhanga</p>
													<h4><a href="summer_brook.php">Summer Brook</a></h4>
												</div>
												<a href="summer_brook.php">View more</a>
											</figcaption>
										</figure>
									</div>
								</div>
								<div class="portfolio-post">
									<div class="grid">
										<figure class="effect-lily">
											<img src="images/Pleasure-Bay-New-Banner.jpg" alt="los-cabos">
											<figcaption>
												<div>
													<p>Visakhapatnam</p>
													<h4><a href="pleaseure_by_vizag.php">Pleasure Bay</a></h4>
												</div>
												<a href="pleaseure_by_vizag.php">View more</a>
											</figcaption>
										</figure>
									</div>
								</div>
								<div class="portfolio-post">
									<div class="grid">
										<figure class="effect-lily">
											<img src="images/spring-fields-banner-new.jpg" alt="Spring-fields">
											<figcaption>
												<div>
													<p>Patna</p>
													<h4><a href="spring-fields.php">Spring Fields</a></h4>
												</div>
												<a href="spring-fields.php">View more</a>
											</figcaption>
										</figure>
									</div>
								</div>
								<div class="portfolio-post">
									<div class="grid">
										<figure class="effect-lily">
											<img src="images/Sunflower-New-Banner.jpg" alt="sunflower">
											<figcaption>
												<div>
													<p>Bengaluru</p>
													<h4><a href="sun-flower.php">Sunflower</a></h4>
												</div>
												<a href="sun-flower.php">View more</a>
											</figcaption>
										</figure>
									</div>
								</div>
								<div class="portfolio-post">
									<div class="grid">
										<figure class="effect-lily">
											<img src="images/oscar-valley-new-banner.jpg" alt="Oscar Valley">
											<figcaption>
												<div>
													<p>Mumbai</p>
													<h4><a href="oscar-valley.php">Oscar Valley</a></h4>
												</div>
												<a href="oscar-valley.php">View more</a>
											</figcaption>
										</figure>
									</div>
								</div>
								</div>
					<div class="text-center mt-5">
						<a class="button-one" href="all-projects.php"><span>View All Projects</span></a>
						</div>
					</div>
			</section>
			<!-- End portfolio-section -->
			

<!-- Award Winning Section 
				================================================== -->
			<section class="services-section5">

				<div class="container">
					<div class="services-box5">
						<div class="row">
							<div class="col-lg-6">
								<div class="title-box">
									<span  class="custom-sub-title">TRICOLOUR PROPERTIES</span>
									<h2 >Award-Wining Company</h2>
								</div>
								<div class="services-post5">
									<div class="icon ">
										<span class="material-icons-outlined">
											<span class="material-symbols-outlined">
												trending_up
												</span>
										</span>
									</div>
									<div class="serv-content">
										<h4>Proven Track Record</h4>
										<p>Tricolour Properties boasts a long history of completing real estate projects successfully, demonstrating our expertise and reliability.
										</p>
									</div>
								</div>

								<div class="services-post5">
									<div class="icon">
										<!-- <span class="material-symbols-outlined">
											group
											</span> -->
										<span class="material-icons-outlined">
										group
										</span>
									</div>
									<div class="serv-content">
										<h4>Satisfied customers.</h4>
										<p>Our numerous positive customer reviews and testimonials showcase the satisfaction and trust our clients have in our services.</p>
									</div>
								</div>

								<div class="services-post5">
									<div class="icon">
										<span class="material-icons-outlined">
											<span class="material-symbols-outlined">
												<span class="material-symbols-outlined">
													manage_search
													</span>
												</span>
										</span>
									</div>
									<div class="serv-content">
										<h4>Transparent operations</h4>
										<p>We maintain transparency in all dealings, from pricing and contracts to project details, ensuring trust is built on a strong foundation.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="image-holder features-section2">
									<div class="images-box">
										<div class="row">
											<div class="col-md-6 " style="width: 100%;">
												<div class="image-holder" >
													<img src="images/561x525__.jpg" alt="" width="100%">
																								<!-- <a href="">Building &amp; Construction</a> -->
												</div>
											</div>
											
										</div>
									</div>
									<!-- <img src="images/561x525__.jpg" alt="" width="100%"> -->
									<!-- <div class="image-holder " width="100%">
										<img src="images/561x525__.jpg" alt="" width="100%"  class="image">
										<div class="overlay">
											
										</div>
									  
										
									</div> -->
									<!-- <a class="serv-link" href="#"> -->
										<!-- About Us -->
										<!-- <i class="fas fa-long-arrow-alt-right"></i> -->
									<!-- </a> -->
								</div>
							</div>
						</div>
					</div>
				</div>

			</section>
			<!-- End Award Winning -->
				<!-- about-section 
				================================================== -->
			<section class="about-section">

				<div class="container">
					<div class="about-box">
						<div class="row">
							<div class="col-lg-6" style="margin-bottom: 40px;">
								<div class="images">
									<div class="row">
										<div class="image-holder features-section2">
											<div class="images-box">
												<div class="row">
													<div class="col-md-6">
														<!-- <img src="images/268x200__.jpg" alt="about1"> -->
														<div class="image-holder " width="100%">
															 <img src="images/268x200__.jpg" alt="about1">
															
														  
															
														</div>
														<div class="image-holder " width="100%">
															<img src="images/268x200_01_.jpg" class="about-bottom-img" alt="about2">
															
														 
														   
													   </div>
														
														<!-- <img src="images/268x200_01_.jpg" class="about-bottom-img" alt="about2"> -->
													</div>
													<div class="col-md-6">
														<div class="image-holder " width="100%">
															<img class="snd-size" src="images/268x430___.jpg" alt="about3">
														
														</div>
														
													</div>
													
												</div>
											</div>
											<!-- <img src="images/561x525__.jpg" alt="" width="100%"> -->
											<!-- <div class="image-holder " width="100%">
												<img src="images/561x525__.jpg" alt="" width="100%"  class="image">
												<div class="overlay">
													
												</div>
											  
												
											</div> -->
											<!-- <a class="serv-link" href="#"> -->
												<!-- About Us -->
												<!-- <i class="fas fa-long-arrow-alt-right"></i> -->
											<!-- </a> -->
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-lg-6 custom-about-box">
								<div class="animation">
									<div class="about-content">
										<span class="custom-sub-title">WHO ARE WE</span>
										<h3>Tricolour Properties the leading real estate company in India</h3>
										<p>Tricolour Properties Pvt. Ltd. was founded and has proven valuable throughout time. In 2010, we launched our services. Since our inception, we have set the standard for open plots, villas, and apartments in numerous locations, and we are happy to continue adding more.</p>
										<a class="button-one" href="compansory-vision.php"><span>Know More</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</section>
			<!-- End about-section -->
			

			<!-- services-section2 
				================================================== -->
			<section class="services-section2">

				<div class="container">
					<div class="title-box center-title">
						<span class="custom-sub-title">TRICOLOUR PROPERTIES</span>
						<h2>Why Choose Us</h2>
					</div>
					<div class="services-box2">
						<div class="row">
							<div class="col-lg-6">
								<div class="services-post2">
									<div class="icon">
										<span>
										<i class="fas fa-cogs"></i>
										</span>
									</div>
									<div class="serv-content">
										<h4>Quality Services</h4>
										<p>We follow a strict policy to exercise the highest quality, not only in projects but also in the services.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-post2">
									<div class="icon">
										<span>
										<i class="far fa-compass"></i>
										</span>
									</div>
									<div class="serv-content">
										<h4>Vaastu</h4>
										<p>Vaastu directions have great importance in life, especially to buy a Plot. It may help you to live a happy & healthy life.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="services-post2">
									<div class="icon">
										<span>
										<i class="fas fa-ruler-horizontal"></i>
										</span>
									</div>
									<div class="serv-content">
										<h4>Planning</h4>
										<p>At Tricolours, our planning process is meticulous, taking into account various factors and evaluating the ecological impact of our projects. We prioritize comprehensive construction planning for successful ventures.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-post2">
									<div class="icon">
										<span>
										<i class="fas fa-map-marker-alt"></i>
										</span>
									</div>
									<div class="serv-content">
										<h4>Location</h4>
										<p>We chose Tricolours for its strategic location, offering residents both comfort and convenience. Situated near essential facilities and designed with eco-friendliness in mind, our location truly caters to your needs.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</section>
			<!-- End services-section2 -->
			
			<section class="services-section4">

				<div class="services-box4">
					<div class="services-post4" >
						<div class="image-holder features-section2">
							<div class="images-box" style="padding: 0px;">
								<div class="row">
									<div class="col-md-6 " style="width: 100%;">
										<div class="image-holder" >
											<img src="images/416x400__.jpg" alt="" width="100%">
																					
										</div>
									</div>
									
								</div>
							</div>
							
						</div>

						
					</div>
					<!-- <div class="services-post4">
						<img src="images/416x400__.jpg" alt="service1">
						
					</div> -->
					<div class="services-post4">
						
						<div class="serv-content">
						
							<h4 class="counter-heading">Count on us </h4>
							<p>Over the years, Tricolour has demonstrated enduring partnerships and a strong working relationship with elites from across the country.</p>
							<a href="contact-us.php" class="action-btn-two mt-3">Contact Us</a>
						</div>
					</div>
					<div class="services-post4">
						<div class="image-holder features-section2">
							<div class="images-box" style="padding: 0px;">
								<div class="row">
									<div class="col-md-6 " style="width: 100%;">
										<div class="image-holder" >
											<img src="images/416x400_-01__.jpg" alt="" width="100%">
																					
										</div>
									</div>
									
								</div>
							</div>
							
						</div>

						<!-- <img src="images/416x400_-01__.jpg" alt="service3"  class="image">
						<div class="overlay">
							
						</div>
					   -->
						
					</div>
				</div>

			</section>
<!-- blog-section 
				================================================== -->
			<section class="blog-section">
				<div class="container">
				<div class="col-lg-12">
					<div class="title-box">
									<span class="custom-sub-title">WHAT’S TRENDING NEW</span>
									<h2>Latest Blog & Posts</h2>
								</div>
								</div>
					<div class="blog-box iso-call row">
					
						<div class="col-md-3 ">
						<div class="blog-post">
							<a href="#" class="post-thumbnail">
								<div class="blog-images">
									<img src="images/best-cities-sale-370x245.png" alt="">
									<div class="overlays">
										
									</div>
								  
									
								</div>
								<!-- <img src="images/best-cities-sale-370x245.png" alt=""> -->
							</a>
							<div class="post-content">
								<ul class="meta-list">
								
									<li>
										<a href="#">
											<i class="fas fa-calendar-alt"></i>
											18th Aug
										</a>
									</li>
								</ul>
								<h3><a href="blog-best-cities.php">The Best Cities for First-Time Homebuyers in 2023 ...</a></h3>
								
								<a class="button-one" href="blog-best-cities.php"><span>Read More</span></a>
							</div>
						</div>
						</div>
						<div class="col-md-3 ">
						<div class="blog-post">
							<a href="#" class="post-thumbnail">
								<div class="blog-images">
									<img src="images/investment-370x245.jpg" alt="">
									<div class="overlays">
										
									</div>
								  
									
								</div>
								<!-- <img src="images/investment-370x245.jpg" alt=""> -->
							</a>
							<div class="post-content">
								<ul class="meta-list">
									
									<li>
										<a href="#">
											<i class="fas fa-calendar-alt"></i>
											19th July
										</a>
									</li>
								</ul>
								<h3><a href="blog-timing-key.php">Timing is the Key: When Is the Best Time to Invest ...</a></h3>
								
								<a class="button-one" href="blog-timing-key.php"><span>Read More</span></a>
							</div>
						</div>
							</div>
							<div class="col-md-3 ">
						<div class="blog-post">
							<a href="#" class="post-thumbnail">
								<div class="blog-images">
									<img src="images/vastu-370x245.jpg" alt="">
									<div class="overlays">
										
									</div>
								  
									
								</div>
								<!-- <img src="images/vastu-370x245.jpg" alt=""> -->
							</a>
							<div class="post-content">
								<ul class="meta-list">
									
									<li>
										<a href="#">
											<i class="fas fa-calendar-alt"></i>
											18th July
										</a>
									</li>
								</ul>
								<h3><a href="blog-vaastu.php">A Guide to Understanding Vaastu Shastra ...</a></h3>
								
								<a class="button-one" href="blog-vaastu.php"><span>Read More</span></a>
							</div>
						</div>
						</div>
						<div class="col-md-3 ">
						<div class="blog-post">
							<a href="#" class="post-thumbnail">
								<div class="blog-images">
									<img src="images/stocks-370x245.jpg" alt="">
									<div class="overlays">
										
									</div>
								  
									
								</div>
								<!-- <img src="images/stocks-370x245.jpg" alt=""> -->
							</a>
							<div class="post-content">
								<ul class="meta-list">
									
									<li>
										<a href="#">
										<i class="fas fa-calendar-alt"></i>
											05th July
										</a>
									</li>
								</ul>
								<h3><a href="blog-what-is-dharani.php">What is Dharani Portal and why we should know ...</a></h3>
								
								<a class="button-one" href="blog-what-is-dharani.php"><span>Read More</span></a>
							</div>
						</div>
					</div>
						

					


					</div>
					
				</div>
			</section>
			<!-- End blog-section -->
			
			<!-- Testimonials -->
			<section class="testimonials-section">
			<div class="container">

      <div class="row">
        <div class="col-sm-12">
			<span class="custom-sub-title">TESTIMONIALS</span> <br>
			<!-- <img src="images/google_review-3.png" class="google-review"/> -->
			<div class="title-box">
				
									
									
									<h2>Buyer Stories</h2>
								</div>
								<div class="text-center">
									<img src="images/google_review-3.png" class="google-review"/>
								</div>
          <div id="customers-testimonials" class="owl-carousel">

            <!--TESTIMONIAL 1 -->
            <div class="item">
              <div class="shadow-effect">
                <!-- <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt=""> -->
                <p>Expert in the area with a lot of experience. As I was planning to purchase a property on the outskirts of Hyderabad, I did not have much knowledge of the market. Having been referred by a friend, I have scheduled an appointment with Tricolours. Throughout the process, everything went smoothly. They provided hassle-free pick-up and drop-off services, showed the plot, and explained everything patiently.</p>
              </div>
              <div class="testimonial-name">SREENATH REDDY</div>
            </div>
            <!--END OF TESTIMONIAL 1 -->
            <!--TESTIMONIAL 2 -->
            <div class="item">
              <div class="shadow-effect">
                <!-- <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt=""> -->
                <p>I highly recommend these real estate advisors. The company does not sell properties to people just like that. From beginning to end, they provide excellent service, making the whole process a pleasant experience. The staff is very patient with clarifying all doubts. Property investment services at their best.</p>
              </div>
              <div class="testimonial-name">RAJU KARANGULA</div>
            </div>
            <!--END OF TESTIMONIAL 2 -->
            <!--TESTIMONIAL 3 -->
            <div class="item">
              <div class="shadow-effect">
                <!-- <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt=""> -->
                <p>Reliable and trustworthy company with a strong commitment to delivering on time. Pick-up and drop services are provided, as well as every detail you need to know before purchasing a property. Their properties are located in peaceful areas. Highly recommended.</p>
              </div>
              <div class="testimonial-name">SUNIL REDDY</div>
            </div>
            <!--END OF TESTIMONIAL 3 -->
            <!--TESTIMONIAL 4 -->
            <div class="item">
              <div class="shadow-effect">
                <!-- <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt=""> -->
                <p>Good Company to invest in lands.EMI's facility for Approved layouts is one of the best in the real estate sector, to grow middle people and upper-middle-class people .this company is providing all options.</p>
              </div>
              <div class="testimonial-name">MD ISMAIL</div>
            </div>
            <!--END OF TESTIMONIAL 4 -->
            <!--TESTIMONIAL 5 -->
            <div class="item">
              <div class="shadow-effect">
                <!-- <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt=""> -->
                <p>Excellent company to buy plots with EMI facility from last 10 years in the real estate market. </p>
              </div>
              <div class="testimonial-name">NARESH KUMAR</div>
            </div>
            <!--END OF TESTIMONIAL 5 -->
			
          </div>
        </div>
      </div>
      </div>

				</section>
			<!-- Testimonials -->

		<!-- <div id="get_trained" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					 <div class="popupCloseButton">
						<button type="button" class="close" data-bs-dismiss="modal">×</button>
					</div> 
					<a href="https://tricolour.co.in/contact-us.php"><img class="popup-img" src="images/goldbonanza.jpg" alt="admissions"></a>
				</div>
			</div>
		</div> -->


			<footer class="template-footer">
  <a class="go-top" href="#">
    <i class="far fa-arrow-alt-circle-up"></i>
  </a>
  <!--<div class="instagram-line"><div class="container"><ul class="insta-list"><li><a href="#"><img src="upload/instagram/1.jpg" alt=""></a></li><li><a href="#"><img src="upload/instagram/2.jpg" alt=""></a></li><li><a href="#"><img src="upload/instagram/3.jpg" alt=""></a></li><li><a href="#"><img src="upload/instagram/4.jpg" alt=""></a></li><li><a href="#"><img src="upload/instagram/5.jpg" alt=""></a></li><li><a href="#"><img src="upload/instagram/6.jpg" alt=""></a></li><li><a href="#"><img src="upload/instagram/7.jpg" alt=""></a></li><li><a href="#"><img src="upload/instagram/8.png" alt=""></a></li></ul></div></div> -->
  <div class="widget-part-area">
    <div class="footer-widget-line">
      <h5>Useful Links</h5>
      <ul class="custom-list">
        <li>
          <a href="compansory-vision.php">Company Story</a>
        </li>
        <!-- <li><a href="nri.php">NRI's</a></li> -->
        <li>
          <a href="https://tricolour.ae/">Overseas</a>
        </li>
        <li>
          <a href="blog.php">Blog</a>
        </li>
        <li>
          <a href="career.php">Careers</a>
        </li>
        <li>
          <a href="measurements.php">Measurements</a>
        </li>
      </ul>
      <h5>Head Office Address</h5>
      <ul class="custom-list">
        <li>
          <a href="#">6-3-251/4, Road No.1, Banjarahills, Hyderabad, Telangana – 500 034.</a>
        </li>
      </ul>
      <h5>Follow Us On</h5>
      <ul class="social-list d-flex">
        <li>
          <a href="https://www.facebook.com/TricolourGroup" target="_blank">
            <i class="fab fa-facebook-square"></i>
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/tricolourgroup/" target="_blank">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
        <li>
          <a href="https://www.linkedin.com/company/tricolourgroup/" target="_blank">
            <i class="fab fa-linkedin"></i>
          </a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=+919611275001&text=Hi." target="_blank">
            <i class="fab fa-whatsapp"></i>
          </a>
        </li>
        <li>
          <a href="https://www.youtube.com/channel/UCc4NY-q_WUBOZoR2B3Q_U9g" target="_blank">
            <i class="fab fa-youtube"></i>
          </a>
        </li>
      </ul>
    </div>
    <div class="footer-widget-line">
      <h5>Quick Links</h5>
      <ul class="custom-list">
        <li>
          <a href="on-going-projects.php">Ongoing Projects</a>
        </li>
        <li>
          <a href="completed-projects.php">Completed Projects</a>
        </li>
        <li>
          <a href="climate-change.php">Climate Change</a>
        </li>
        <li>
          <a href="feedback.php">Feedback</a>
        </li>
        <li>
          <a href="e-brochure.php">Download e-brochure</a>
        </li>
      </ul>
      <h5>Corporate Support</h5>
      <ul class="custom-list">
        <li>
          <a href="#">+91 9809515253</a>
        </li>
        <li>
          <a href="mailto:sales@tricolour.co.in;">sales@tricolour.co.in</a>
        </li>
      </ul>
      <h5>Enquiry</h5>
      <ul class="custom-list">
        <li>
          <a href="mailto: contact@tricolour.co.in;">contact@tricolour.co.in</a>
        </li>
        <li>
          <a href="tel: 1800-120-5153;">1800-120-5153</a>
        </li>
      </ul>
    </div>
    <div class="footer-widget-line">
    <div class="contact-form-box">
    <form  method="post" id="contact-form">
                     <h2>Contact us</h2>
                     <?php // echo((!empty($errorMessage)) ? $errorMessage : '') ?>
                     <p>
                       <input name="if_name" type="text" placeholder="Name" required />
                     </p>
                     <p>
                       <input  placeholder="Email Id" name="if_email" type="email" required />
                     </p>
                     <p>
                        <input  placeholder="Phone Number" name="if_phonenumber" type="tel" pattern="[1-9]{1}[0-9]{9}" required />
                     </p>
                     <p>
                       <input name="if_message" type="text" placeholder="Your Query" required />
                     </p>
                     <!-- <p>
                        <select name="contacttype" class="select-options">
                           <option>Select</option>
                           <option value="contact us ">Contact us</option>
                           <option value="corporate">Corporate</option>
                           <option value="partner">Partner With Us</option>
                           <option value="nri">NRI</option>
                           <option value="enquiry">General Enquiry</option>
                           <option value="overseas">Overseas</option>
                        </select>
                     </p> -->
                     <!-- <p>
                       <textarea name="message" placeholder="Message"></textarea>
                     </p> -->
                     <p>
                       <button type="submit" name="if_submit" id="submit" class="btn1"> Submit </button>
                     </p>
                   </form>
					</div>
    </div>
  </div>
  <img src="images/footer-img.png" alt="" width="100%" style="background-color: #1f1f1f;" />
</footer>
			<!-- footer 
				================================================== -->
			<!-- <footer class="template-footer">
				<a class="go-top" href="#">
					<i class="far fa-arrow-alt-circle-up"></i>
				</a>

				<div class="instagram-line">
					<div class="container">
						<ul class="insta-list">
							<li><a href="#"><img src="upload/instagram/1.jpg" alt=""></a></li>
							<li><a href="#"><img src="upload/instagram/2.jpg" alt=""></a></li>
							<li><a href="#"><img src="upload/instagram/3.jpg" alt=""></a></li>
							<li><a href="#"><img src="upload/instagram/4.jpg" alt=""></a></li>
							<li><a href="#"><img src="upload/instagram/5.jpg" alt=""></a></li>
							<li><a href="#"><img src="upload/instagram/6.jpg" alt=""></a></li>
							<li><a href="#"><img src="upload/instagram/7.jpg" alt=""></a></li>
							<li><a href="#"><img src="upload/instagram/8.png" alt=""></a></li>
						</ul>
					</div>
				</div> 
				<div class="widget-part-area">
			
					<div class="footer-widget-line">
						<h5>Useful Links</h5>
						<ul class="custom-list">
							<li><a href="compansory-vision.php">Company Story</a></li>
							<li><a href="nri.php">NRI's</a></li>
							<li><a href="https://tricolour.ae/">Overseas</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="career.php">Careers</a></li>
							<li><a href="measurements.php">Measurements</a></li>
						</ul>
						<h5>Head Office Address</h5>
						<ul class="custom-list">
							<li><a href="#">6-3-251/4, Road No.1, Banjarahills, Hyderabad, Telangana – 500 034.</a></li>
							
						</ul>
						<h5>Follow Us On</h5>
						<ul class="social-list d-flex">
						<li>
							<a href="https://www.facebook.com/TricolourGroup" target="_blank"><i class="fab fa-facebook-square"></i></a>
						</li>
						<li>
							<a href="https://www.instagram.com/tricolourgroup/" target="_blank"><i class="fab fa-instagram"></i></a>
						</li>
						<li>
							<a href="https://www.linkedin.com/company/tricolourgroup/" target="_blank"><i class="fab fa-linkedin"></i></a>
						</li>
						<li>
							<a href="https://api.whatsapp.com/send?phone=+919611275001&text=Hi." target="_blank"><i class="fab fa-whatsapp"></i></a>
						</li>
						<li>
							<a href="https://www.youtube.com/channel/UCc4NY-q_WUBOZoR2B3Q_U9g" target="_blank"><i class="fab fa-youtube"></i></a>
						</li>
					</ul>
						
					</div>
					<div class="footer-widget-line">
						<h5>Quick Links</h5>
						<ul class="custom-list">
							<li><a href="on-going-projects.php">Ongoing Projects</a></li>
							<li><a href="completed-projects.php">Completed Projects</a></li>
							<li><a href="climate-change.php">Climate Change</a></li>
							<li><a href="feedback.php">Feedback</a></li>
							<li><a href="all-projects.php">Download e-brochure</a></li>
						</ul>
						<h5>Corporate Support</h5>
						<ul class="custom-list">
							<li><a href="#">+91 9809515253</a></li>
							<li><a href="#">+91 9573400059</a></li>
						</ul>
						<h5>Enquiry</h5>
						<ul class="custom-list">
							<li><a href="mailto: contact@tricolour.co.in;">contact@tricolour.co.in</a></li>
							<li><a href="tel: 1800-120-5153;">1800-120-5153</a></li>
						</ul>
					</div>
					<div class="footer-widget-line">
						<div class="contact-form-box">
						<form  method="post" id="contact-form">
                     <h2>Contact us</h2>
                   
                     <p>
                       <input name="name" type="text" placeholder="Name"/>
                     </p>
                     <p>
                       <input  placeholder="Email Id" name="email" type="text"/>
                     </p>
                     <p>
                        <input  placeholder="Phone Number" name="phonenumber" type="text"/>
                     </p>
                     <p>
                       <input name="message" type="text" placeholder="Your Query"/>
                     </p>
                      <p>
                        <select name="contacttype" class="select-options">
                           <option>Select</option>
                           <option value="contact us ">Contact us</option>
                           <option value="corporate">Corporate</option>
                           <option value="partner">Partner With Us</option>
                           <option value="nri">NRI</option>
                           <option value="enquiry">General Enquiry</option>
                           <option value="overseas">Overseas</option>
                        </select>
                     </p> 
               <p>
                       <textarea name="message" placeholder="Message"></textarea>
                     </p> 
                     <p>
                       <button type="submit" name="submit" id="submit" > Submit </button>
                     </p>
                   </form>
								
					</div>
					</div>
				
				
			
				</div>
				<img src="images/footer-img.png" alt="" width="100%" style="background-color: #1f1f1f;"/>
			</footer> -->
			<!-- End footer 

			
		</div>

	</div>
	<!-- End Container -->
</div>

	<!--build:js js/plugins.min.js -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.migrate.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.nouislider.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.imagesloaded.min.js"></script>
  	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/pathLoader.js"></script>
	<!-- <script src="js/jquery.themepunch.tools.min.js"></script>
	<script src="js/jquery.themepunch.revolution.min.js"></script> -->
	<script src="js/jquery.appear.js"></script>
	<!-- endbuild -->
	<script src="js/jquery.countTo.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/script.js"></script>

	<!-- <script type="text/javascript">
    $(window).on('load', function() {
        $('#get_trained').modal('show');
    });
	</script> -->


	<script>
	jQuery(document).ready(function($) {
        		"use strict";
        		//  TESTIMONIALS CAROUSEL HOOK
		        $('#customers-testimonials').owlCarousel({
		            loop: true,
		            center: true,
		            items: 2,
		            margin: 0,
		            autoplay: true,
		            dots:true,
		            autoplayTimeout: 8500,
		            smartSpeed: 450,
		            responsive: {
		              0: {
		                items: 1
		              },
		              768: {
		                items: 2
		              },
		              1170: {
		                items: 2
		              }
		            }
		        });
        	});
	</script>
	<script>
        $('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
          
          //chnage count up speed here
            duration: 10000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    </script>
	<!-- <script>
	// Params
var sliderSelector = '.swiper-container',
    isMove = false,
    options = {
      init: false,
      loop: true,
      speed:1500,
      autoplay:{
        delay:15000
      },
      effect: 'cube', // 'cube', 'fade', 'coverflow',
      cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 40,
        shadowScale: 0.94,
      },
      grabCursor: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      },
      // Events
      on: {
        init: function(){
          this.autoplay.stop();
        },
        imagesReady: function(){
          this.el.classList.remove('loading');
          this.autoplay.start();
        },
        touchMove: function(event){
          if (!isMove) {
            this.el.classList.remove('scale-in');
            this.el.classList.add('scale-out');
            isMove = true;
          }
        },
        touchEnd: function(event){
          this.el.classList.remove('scale-out');
          this.el.classList.add('scale-in');
          setTimeout(function(){
            isMove = false;
          }, 300);
        },
        slideChangeTransitionStart: function(){
          console.log('slideChangeTransitionStart '+this.activeIndex);
          if (!isMove) {
            this.el.classList.remove('scale-in');
            this.el.classList.add('scale-out');
          }
        },
        slideChangeTransitionEnd: function(){
          console.log('slideChangeTransitionEnd '+this.activeIndex);
          if (!isMove) {
            this.el.classList.remove('scale-out');
            this.el.classList.add('scale-in');
          }
        },
        transitionStart: function(){
          console.log('transitionStart '+this.activeIndex);
        },
        transitionEnd: function(){
          console.log('transitionEnd '+this.activeIndex);
        },
        slideChange:function(){
          console.log('slideChange '+this.activeIndex);
          console.log(this);
        }
      }
    },
    mySwiper = new Swiper(sliderSelector, options);

// Initialize slider
mySwiper.init();
	</script> -->

	<script>
	// Params
var sliderSelector = ".swiper-container",
  isMove = false,
  options = {
    init: false,
    loop: true,
    speed: 800,
    autoplay: {
      delay: 3000
    },
    effect: "cube", // 'cube', 'fade', 'coverflow',
    cubeEffect: {
      shadow: true,
      slideShadows: true,
      shadowOffset: 40,
      shadowScale: 0.94
    },
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    // Events
    on: {
      init: function () {
        this.autoplay.stop();
      },
      imagesReady: function () {
        this.el.classList.remove("loading");
        this.autoplay.start();
      },
      touchMove: function (event) {
        if (!isMove) {
          this.el.classList.remove("scale-in");
          this.el.classList.add("scale-out");
          isMove = true;
        }
      },
      touchEnd: function (event) {
        this.el.classList.remove("scale-out");
        this.el.classList.add("scale-in");
        setTimeout(function () {
          isMove = false;
        }, 300);
      },
      slideChangeTransitionStart: function () {
        console.log("slideChangeTransitionStart " + this.activeIndex);
        if (!isMove) {
          this.el.classList.remove("scale-in");
          this.el.classList.add("scale-out");
        }
      },
      slideChangeTransitionEnd: function () {
        console.log("slideChangeTransitionEnd " + this.activeIndex);
        if (!isMove) {
          this.el.classList.remove("scale-out");
          this.el.classList.add("scale-in");
        }
      },
      transitionStart: function () {
        console.log("transitionStart " + this.activeIndex);
      },
      transitionEnd: function () {
        console.log("transitionEnd " + this.activeIndex);
      },
      slideChange: function () {
        console.log("slideChange " + this.activeIndex);
        console.log(this);
      }
    }
  },
  mySwiper = new Swiper(sliderSelector, options);

// Initialize slider
mySwiper.init();

</script>
<script>
  var chatbot_id = 10967;
  ! function() {
    var t, e, a = document,
      s = "smatbot-chatbot";
    a.getElementById(s) || (t = a.createElement("script"), t.id = s, t.type = "text/javascript", t.src = "https://smatbot.s3.amazonaws.com/files/smatbot_plugin.js.gz", e = a.getElementsByTagName("script")[0], e.parentNode.insertBefore(t, e))
  }();
</script>
<script>
       var stateObject = {
"Hyderabad": {
	"Plots": ["Autumn Exotica", "Rising Courtyard", "Saffron Rise", "Brown Valley", "Treasure Hunt", "Silver Coast", "Blue Heaven", "Hill Waves", "Loureal Park Annex", "Loureal Park", "Los Cabos"],
    "Apartments": ["Palm Cove"],
},
"Visakhapatnam": {
    "Plots": ["Corals bay", "Sea Walk", "Pleasure Bay"],
    "Apartments": ["-Nil-"],
	"Villa": ["Salt Box"]
  },
  "Darbhanga": {
    "Plots": ["Valentine Key", "Imperial Park", "Central Park", "Sparrow Woods", "Summer Brook"],
    "Apartments": ["-Nil-"]
  },
  "Patna": {
    "Plots": ["Spring Fields Cosmos", "Spring Fields"],
    "Apartments": ["-Nil-"]
  },
  "Benguluru": {
    "Plots": ["Lakeshore", "Clay Groove"],
    "Apartments": ["Sunflower"]
  },
  "Mumbai": {
    "Plots": ["Oscar Valley"],
    "Apartments": ["-Nil-"]
  },
  "Muzaffarpur": {
	"Plots": ["Republic Square"]
  }
}
window.onload = function () {
var stateSel = document.getElementById("stateSel"),
    countySel = document.getElementById("countySel"),
    citySel = document.getElementById("citySel");
for (var state in stateObject) {
    stateSel.options[stateSel.options.length] = new Option(state, state);
}
stateSel.onchange = function () {
    countySel.length = 1; // remove all options bar first
    citySel.length = 1; // remove all options bar first
    if (this.selectedIndex < 1) {
      countySel.options[0].text = "select project type"
      citySel.options[0].text = "select project name"
      return; // done   
    }  
    countySel.options[0].text = "select property type"
    for (var county in stateObject[this.value]) {
        countySel.options[countySel.options.length] = new Option(county, county);
    }
    if (countySel.options.length==2) {
      countySel.selectedIndex=1;
      countySel.onchange();
    }  

}
stateSel.onchange(); // reset in case page is reloaded
countySel.onchange = function () {
    citySel.length = 1; // remove all options bar first
    if (this.selectedIndex < 1) {
      citySel.options[0].text = "select property type"
      return; // done   
    }  
    citySel.options[0].text = "select project name"

    var cities = stateObject[stateSel.value][this.value];
    for (var i = 0; i < cities.length; i++) {
        citySel.options[citySel.options.length] = new Option(cities[i], cities[i]);
    }
    if (citySel.options.length==2) {
      citySel.selectedIndex=1;
      citySel.onchange();
    }  
 }   
}
function myFunction(){

if(document.getElementById("citySel").value == "Autumn Exotica"){
location.href = "https://tricolour.co.in/Autumn-exotica.php";
}else if(document.getElementById("citySel").value == "Rising Courtyard"){
location.href = "https://tricolour.co.in/rising-coutyard.php";
}else if(document.getElementById("citySel").value == "Saffron Rise"){
location.href = "https://tricolour.co.in/safron-rise.php";
}else if(document.getElementById("citySel").value == "Brown Valley"){
location.href = "https://tricolour.co.in/brown-valley.php";
}else if(document.getElementById("citySel").value == "Treasure Hunt"){
location.href = "https://tricolour.co.in/treasure_hunt.php";
}else if(document.getElementById("citySel").value == "Silver Coast"){
location.href = "https://tricolour.co.in/silver-coast.php";
}else if(document.getElementById("citySel").value == "Blue Heaven"){
location.href = "https://tricolour.co.in/blue-heaven.php";
}else if(document.getElementById("citySel").value == "Hill Waves"){
location.href = "https://tricolour.co.in/Hill-Waves.php";
}else if(document.getElementById("citySel").value == "Loureal Park Annex"){
location.href = "https://tricolour.co.in/Loureal-Park-Annex.php";
}else if(document.getElementById("citySel").value == "Loureal Park"){
location.href = "https://tricolour.co.in/loureal-park.php";
}else if(document.getElementById("citySel").value == "Los Cabos"){
location.href = "https://tricolour.co.in/Los-Cabos.php";
}else if(document.getElementById("citySel").value == "Palm Cove"){
location.href = "https://tricolour.co.in/palm-clove.php";
}else if(document.getElementById("citySel").value == "Corals bay"){
location.href = "https://tricolour.co.in/coral-bay.php";
}else if(document.getElementById("citySel").value == "Sea Walk"){
location.href = "https://tricolour.co.in/sea_walk.php";
}else if(document.getElementById("citySel").value == "Pleasure Bay"){
location.href = "https://tricolour.co.in/pleaseure_by_vizag.php";
}else if(document.getElementById("citySel").value == "Salt Box"){
location.href = "https://tricolour.co.in/salt-box.php";
}else if(document.getElementById("citySel").value == "Valentine Key"){
location.href = "https://tricolour.co.in/valentine-key.php";
}else if(document.getElementById("citySel").value == "Imperial Park"){
location.href = "https://tricolour.co.in/imperial-park.php";
}else if(document.getElementById("citySel").value == "Central Park"){
location.href = "https://tricolour.co.in/centrel-park.php";
}else if(document.getElementById("citySel").value == "Sparrow Woods"){
location.href = "https://tricolour.co.in/sparrow-woods.php";
}else if(document.getElementById("citySel").value == "Summer Brook"){
location.href = "https://tricolour.co.in/summer_brook.php";
}else if(document.getElementById("citySel").value == "Spring Fields Cosmos"){
location.href = "https://tricolour.co.in/spring-comos.php";
}else if(document.getElementById("citySel").value == "Spring Fields"){
location.href = "https://tricolour.co.in/spring-fields.php";
}else if(document.getElementById("citySel").value == "Lakeshore"){
location.href = "https://tricolour.co.in/lake-shore.php";
}else if(document.getElementById("citySel").value == "Clay Groove"){
location.href = "https://tricolour.co.in/clay-groove.php";
}else if(document.getElementById("citySel").value == "Sunflower"){
location.href = "https://tricolour.co.in/sun-flower.php";
}else if(document.getElementById("citySel").value == "Oscar Valley"){
location.href = "https://tricolour.co.in/oscar-valley.php";
}else if(document.getElementById("citySel").value == "Republic Square"){
location.href = "https://tricolour.co.in/republic-square.php";
}
}
    </script>
<!-- <script>
var subjectObject = {
  "Hyderabad": {
    "Plots": ["Autumn Exotica", "Rising Courtyard", "Saffron Rise", "Brown Valley", "Treasure Hunt", "Silver Coast", "Blue Heaven", "Hill Waves", "Loureal Park Annex", "Loureal Park", "Los Cabos"],
    "Apartments": ["Palm Cove"],
  },
  "Visakhapatnam": {
    "Plots": ["Corals bay", "Sea Walk", "Pleasure Bay"],
    "Apartments": ["UPDATE", "DELETE"],
	"Villa": ["Salt Box"]
  },
  "Darbhanga": {
    "Plots": ["Valentine Key", "Imperial Park", "Central Park", "Sparrow Woods", "Summer Brook"],
    "Apartments": ["--"]
  },
  "Patna": {
    "Plots": ["Spring Fields Cosmos", "Spring Fields"],
    "Apartments": ["--"]
  },
  "Benguluru": {
    "Plots": ["Lakeshore", "Clay Groove"],
    "Apartments": ["Sunflower"]
  },
  "Mumbai": {
    "Plots": ["Oscar Valley"],
    "Apartments": ["--"]
  }
}
window.onload = function() {
  var subjectSel = document.getElementById("subject");
  var topicSel = document.getElementById("topic");
  var chapterSel = document.getElementById("chapter");
  for (var x in subjectObject) {
    subjectSel.options[subjectSel.options.length] = new Option(x, x);
  }
  subjectSel.onchange = function() {
  //empty Chapters- and Topics- dropdowns
  chapterSel.length = 1;
  topicSel.length = 1;
    //display correct values
    for (var y in subjectObject[this.value]) {
      topicSel.options[topicSel.options.length] = new Option(y, y);
    }
  }
  topicSel.onchange = function() {
  //empty Chapters dropdown
  chapterSel.length = 1;
    //display correct values
    var z = subjectObject[subjectSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
function myFunction(){
	if (document.getElementById("chapter").value == "Autumn Exotica"){
		location.href="https://tricolour.co.in/Autumn-exotica.php";
	}
	else if (document.getElementById("chapter").value == "Rising Courtyard"){
		location.href="https://tricolour.co.in/Autumn-exotica.php";
	}
}
</script> -->
</body>

</html>

