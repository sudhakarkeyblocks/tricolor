<?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phonenumber = $_POST['phonenumber'];
   $message = $_POST['message'];

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
       $toEmail = 'ektajhatricolour@gmail.com,contact@tricolour.co.in';
       $emailSubject = 'Project Leads - Loureal Park Annex';
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       $bodyParagraphs = ["Name: {$name}","<br/>", "Email: {$email}","<br/>", "phonenumber: {$phonenumber}","<br/>", "Location: {$message}" ];
       $body = join(PHP_EOL, $bodyParagraphs);

       if (mail($toEmail, $emailSubject, $body, $headers)) {

         //   header('Location: thank-you.html');
         echo "<script type='text/javascript'>alert('Thank you for contacting us. We will get back to you soon.');</script>";
       } else {
         //   $errorMessage = 'Oops, something went wrong. Please try again later';
         echo "<script type='text/javascript'>alert('Please try again');</script>";
       }

   } else {

       $allErrors = join('<br/>', $errors);
       $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Buy residential open Plots for Sale near Yadagirigutta, Hyderabad.</title>
	<meta name="description" content="Loreal Park Annex residential open plots for sale near Yadagirigutta, Sri Lakshmi Narasimha Swamy Temple.The project is surrounded by some of the big companies like Infosys, Nims, K. Raheja IT Park, Singapore Town Ship, etc. Book your plot now."/>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
</head>
<body>
<?php include'mainheader.php'; ?>

<!-- single-project-section 
================================================== -->
<section class="single-project-section">

	<div class="container-full">
		<div class="row">
			<div class="row" style="margin-bottom: 50px; margin-top: 60px;">
				<div class="col-md-8 " style="padding-right: 0px;">
					<img src="images/loureal-park-annex-new-banner-1.jpg" width="100%"
						height="500px" />

				</div>
				<div class="col-md-4 pl-0 formE1" style="background-color: #0A0a0a;">
					<h2>Loureal Park Annex</h2>
					<div class="form-heading">
						<p>Plots</p>
						<p><span><i class="fa-solid fa-location-dot"
									style="color: #f21a02;"></i></span> Hyderabad</p>
					</div>
					<h3>ENQUIRE NOW</h3>
					<form class="form" method="post">

						<input type="text" name="name"  placeholder="  Name" required />

						<input type="email" name="email"  placeholder="  Email" required />

						<input type="text" name="phonenumber"  placeholder="  Phone Number" required />

						<input type="text" name="message"  placeholder="  Location" required />
						<br><br>

						<button type="submit" name="submit" id="submit" class="btn1">Submit</button>
						
					</form>


				</div>

			</div>
		</div>

	</div>


	<div class="container">
		<div class="single-project-content">
			<div class="row">
				
				<div class="col-md-12">
					<div class="project-content">
						<h2>Buy Residential Open Plots For Sale Near Yadagirigutta, Hyderabad.
						</h2>
						<ul class="project-data-list">
							<li>
								<span class="data-name ">
									Location
								</span>
								<span class="data-text ">
									Hyderabad
								</span>
							</li>
							<li>
								<span class="data-name ">
									Category
								</span>
								<span class="data-text">
									Open Plots
								</span>
							</li>
							<li>
								<span class="data-name">
									Brouchure
								</span>
								<span class="data-text">
									<a href="assets/Broucher/loureal_park_annex.pdf"
										target="_blank"><i style="color: red;" class="fa fa-download" aria-hidden="true"></i> Download</a>
								</span>
							</li>
							<li>
								<span class="data-name ">
									Layout
								</span>
								<span class="data-text">
									<a href="assets/Layout/loreal_park_annex_layout.pdf"
										target="_blank"><i style="color: red;" class="fa fa-download" aria-hidden="true"></i> Download</a>
								</span>
							</li>
						</ul>

					</div>
				</div>
				<!-- <div class="col-md-6">
					<div class="section-image">
						<div class="feature-image">
							<img src="images/loreal-park-1.jpg" alt="project-img">
						</div>
					</div>
				</div> -->
				<div class="col-md-12">
					<p>Loreal Park Annex sits close to the renowned Sri Lakshmi Narasimha Swamy Temple at Yadagirigutta, a significant Hindu temple dedicated to Lord Vishnu’s incarnation, Narasimha Swamy. The temple, situated on a picturesque hillock in the Yadadri Bhuvanagiri district of Telangana State, attracts a large number of devotees year-round.</p>

					<p>This impressive location is also surrounded by major companies such as Infosys, Nims, K. Raheja IT Park, and Singapore Town Ship, creating a vibrant and dynamic environment. </p>

						<p>Furthermore, Loureal Park Annex benefits from its accessibility to the Multi-Modal Transport System (MMTS), a commuter rail system in Hyderabad, which is expected to complete its phase-II project by 2012, capable of accommodating 3 lakh passengers daily, including the Secunderabad-Ghatkesar-Bhongir route.</p>

					<p>Additionally, National Highway 202 (NH 202) is a prominent link connecting Hyderabad in Telangana State to Bhopalpatnam in Chhattisgarh. As it passes through various key locations, such as Golnaka, Amberpet, Ramanthapur, Uppal Kalan, Bhongir, Jangaon, Ghanpur, Warangal, Atmakur, Mallampalli, Mulug, Nagaram, Chandrupatla, and Bhadrakali, the government is heavily investing in improving its infrastructure. This investment is set to elevate the potential of the Warangal Highway, making it a promising opportunity for investors.</p>

					<p>For a secure future, consider investing in Loureal Park Annex, thoughtfully developed by Tricolour Properties Pvt. Ltd. Its strategic location near Yadagirigutta and major companies, combined with its easy access to Warangal Highway NH-202, makes it an appealing choice for a prosperous and fulfilling lifestyle.</p>

				   

					
				</div>
			</div>
		</div>
		<section class="services-section7">

			<div class="container">
				<div class="title-box">

					<h2 style="color: red;">Project Highlights</h2>
				</div>
				<div class="services-box7">
					<div class="row">
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/road.png" class="icons"/>
								<div class="serv-cont">
									<h4>“40” feet and 30″ feet Road with Footpath</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/A 5-minute drive from MMTS Shadnagar.png" class="icons"/>
								<div class="serv-cont">
									<h4>A 5-minute drive from MMTS Shadnagar</h4>

								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/road.png" class="icons"/>

								<div class="serv-cont">
									<h4>All blacktop roads with curving stones on the roadside</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Avenue Plantation.png" class="icons"/>

								<div class="serv-cont">
									<h4>Avenue Plantation</h4>

								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Electricity system.png" class="icons"/>

								<div class="serv-cont">
									<h4>Electricity with poles</h4>

								</div>
							</a>
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Wire fencing for the entire project.png" class="icons"/>

								<div class="serv-cont">
									<h4>Fencing for the entire layout</h4>

								</div>
							</a>

						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/gated community.png" class="icons"/>

								<div class="serv-cont">
									<h4>Gated community</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/road.png" class="icons"/>

								<div class="serv-cont">
									<h4>Venture located on Hyderabad – Srisailam Highway</h4>

								</div>
							</a>
							
						</div>
						<div class="col-lg-4 " >
							<a class="services-post7" href="#">
								<img src="assets/tricolours_icons/Water Pipeline.png" class="icons"/>

								<div class="serv-cont">
									<h4>Water Pipeline</h4>

								</div>
							</a>
							
						</div>

					</div>
				</div>
			</div>

		</section>

	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="project-content">
					<h2 style="color: red;">Location Highlights</h2>
					<ol style="color : white ; list-style: none; line-height: 31px;">
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> On the Way to Yadagiri Gutta  </li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Warangal Highway NH-202
						</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Metro Railway Station</li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> 5 Minutes Drive to  Metro Rail Station</li>
						
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Near Singapore Township</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Metro Railway Station</li>
						<li style="font-weight: 400;"><span
								style="font-weight: 400; margin-right: 10px; "><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> Raheja Mind Space I.T. Park </li>
						<li style="font-weight: 400;"><span
										style="font-weight: 400; margin-right: 10px; "><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> Infosys</li>
						<li style="font-weight: 400"><span
								style="margin-right: 10px;font-weight: 400"><i
									class="fa-solid fa-circle-arrow-right"
									style="color: #fe1706;"></i></span> IICT and MNJ Cancer Hospital</li>
						<li style="font-weight: 400"><span
										style="margin-right: 10px;font-weight: 400"><i
											class="fa-solid fa-circle-arrow-right"
											style="color: #fe1706;"></i></span> NIMS Hospital</li>
						<li style="font-weight: 400"><span
												style="margin-right: 10px;font-weight: 400"><i
													class="fa-solid fa-circle-arrow-right"
													style="color: #fe1706;"></i></span> Close to the outer ring road</li>
						</ol>

				</div>
			</div>
			<!-- <div class="col-md-8">
				<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d7606.285962803849!2d78.978!3d17.595944!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTfCsDM1JzQ1LjQiTiA3OMKwNTgnNDAuOCJF!5e0!3m2!1sen!2sin!4v1695488358947!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div> -->

			<div class="col-md-12" style="margin-top: 50px;">
				<h2>Gallery</h2>
				<ul class="gallery-list">
					<li>
						<a href="images/lourel-park-anex--1.jpg" class="zoom">
							<img src="images/lourel-park-anex--1.jpg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/lourel-park-anex--2.jpg" class="zoom">
							<img src="images/lourel-park-anex--2.jpg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/lourel-park-anex--8.jpg" class="zoom">
							<img src="images/lourel-park-anex--8.jpg" alt="gallery1">
						</a>
					</li>
					
					<li>
						<a href="images/lourel-park-anex--5.jpg" class="zoom">
							<img src="images/lourel-park-anex--5.jpg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/lourel-park-anex--6.jpg" class="zoom">
							<img src="images/lourel-park-anex--6.jpg" alt="gallery1">
						</a>
					</li>
					<li>
						<a href="images/lourel-park-anex--7.jpg" class="zoom">
							<img src="images/lourel-park-anex--7.jpg" alt="gallery1">
						</a>
					</li>
					
					<li>
						<a href="images/lourel-park-anex--3.jpg" class="zoom">
							<img src="images/lourel-park-anex--3.jpg" alt="gallery1">
						</a>
					</li>

				</ul>

			</div>

		</div>
	</div>


</section>
<!-- End single-project-section -->


<?php include'mainfooter.php'; ?>
</body>
</html>
