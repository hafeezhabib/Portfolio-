<?php 
if(isset($_POST['submit'])){
    $too = "care@gradeshunt.com";
    $fr = $_POST['email']; 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subj = "Form submission";
    $subj2 = "GradesHunt Contact Form Submission";
    $mesge = " Name : " .$name . "\n Email : " .$email . "\n Phone Number :  " .$phone . "\n  Wrote the following : " . $_POST['message'];
    $mesge2 = "copy of your message " . $name . "\n\n" . $_POST['message'];
    $haders = "From:" . $fr;
    $haders2 = "From:" . $tooo;
    mail($too,$subj,$mesge,$haders);
    mail($fr,$subj2,$mesge2,$haders2); 
	 header('location:?success#contact-us'); die;
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<title>GradesHunt| Home to the Best Editing and Proofreading Online</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="GradesHunt is a place where you get the best editing and proofreading services. We aim to provide you with added benefits and features to ensure satisfaction.">
	<meta name="keywords" content="Editing, reading, proofreading, online editing, online proofreading" />
	<meta name="author" content="GradesHunt">
	<meta name="format-detection" content="telephone=no">

	<!-- STYLE -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="shortcut icon" href="imgs/favicon.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

	<!--Cookie-->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />

	<!-- Main CSS -->
	<link rel="stylesheet" href="css/style.css" />

</head>

<body>
	<div id="hero-area">
		<header>
			<div id="custom-navbar">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="./"><img src="imgs/logo.png" alt="Logo" class="img-fluid"></a>


						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link " href="./">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#services">Benefits</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#skills">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#about-skills">Services</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#news">Features</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#plans">Price Plan</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#contact-us">Contact Us</a>
								</li>
							</ul>

						</div>
					</nav>
				</div>
			</div>
		</header>
		<div class="container">
			<div class="row text-center">
				<div class="hero-content">
					<h1>
						We Offer Exceptional Editing Services
					</h1>
					<p>
						We cater to clientele from around the world and ensure that each client receives the best editing
						services.
					</p>
					<a href="#news" class="hero-btn hero_btncust">Learn More</a>
				</div>

				<!--<div class="col-md-5">
	<div class="hero-img">
		<img src="imgs/hero.jpg" class="img-fluid" alt="Hero Image">
	</div>
</div>-->
			</div>
		</div>
	</div>
	<!-- End Hero Area -->

	<!-- Services section Start -->
	<section id="services">
		<div class="container">
			<div class="section-head">
				<h2>To Ensure Customer Satisfaction,<span style="font-weight: 300;"></span> We Provide Multiple Benefits</h2>
			</div>
			<div class="section-content">
				<div class="row">
					<div class="col-md-4">
						<div class="services-boxes">
							<div class="service-icon">
								<img src="imgs/clock.png" alt="">
							</div>
							<h3>3-Hour Turnaround</h3>
							<p>For urgent orders, we have the quickest turnaround time of 3 hours.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="services-boxes">
							<div class="service-icon">
								<img src="imgs/money.png" alt="">
							</div>
							<h3>Reward Program</h3>
							<p>GradesHunt rewards clients with discounts via reward programs.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="services-boxes">
							<div class="service-icon">
								<img src="imgs/verified.png" alt="">
							</div>
							<h3>Secure Student Area</h3>
							<p>The student area allows you to view the status of your order easily.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="section-btn text-center mt-5">
				<a href="#about-skills" class="btn">Click for Details</a>
			</div>
		</div>
	</section>
	<!-- Services section End -->
	<!-- Skills Section Start -->
	<section id="skills">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-head text-center">
						<h2 class="text-center">Impressive Editing Quality Irrespective of the Deadline</h2>
						<p class="mt-3">Our team contains dedicated and skilled editors and proofreaders; we use the latest
							technology to ensure that your work is up to the mark. The team works together to deliver quality work to
							our customers. Our team prides itself in being customer-friendly, supportive, and dedicated; we support
							our customers 24 hours a day. Feel free to reach out to us if you have any queries</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div id="about-intro">
		<div class="container">
			<div class="section-head text-center text-white">
				<p>Want the best quality editing?</p>
				<h2 class="text-white" style="max-width: 770px;">Place Your Orders Now and Get Amazing Promotional Deals</h2>
				<a href="#contact-us" class="btn mt-5 hero_btncust">Hire Editor</a>
			</div>
		</div>
	</div>
	<div id="counter-main">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="c-icon">
						<img src="imgs/papers-edit.png" alt="Papers Edited" />
					</div>
					<div class="c-details">
						<h3>15k</h3>
						<p>Papers Edited</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="c-icon">
						<img src="imgs/happy-clients.png" alt="happy-clients" />
					</div>
					<div class="c-details">
						<h3>6k</h3>
						<p>Happy Clients</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="c-icon">
						<img src="imgs/skilled-editors.png" alt="skilled-editors.png" />
					</div>
					<div class="c-details">
						<h3>1k</h3>
						<p>Skilled Editors</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Skills Section End -->
	<!--  About Skills Section Start -->
	<section id="about-skills">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="about-skill-img">
						<img src="imgs/skills.png" alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="section-head">
						<h2 class="text-left mb-3">Give Your <br> Work a Boost with Editing</h2>
						<p>Your work will stand out and look exceptional when it is free from errors. If you are looking for ways to
							impress others with your editing, hire our editors to do the job for you. </p>
					</div>
					<div class="section-content">
						<ul class="about-list">
							<li>
								<div class="about-check-i">
									<i class="far fa-check-circle"></i>
								</div>
								Editing
							</li>
							<li>
								<div class="about-check-i">
									<i class="far fa-check-circle"></i>
								</div>
								Proofreading
							</li>
							<li>
								<div class="about-check-i">
									<i class="far fa-check-circle"></i>
								</div>
								Referencing Reviewing
							</li>
							<li>
								<div class="about-check-i">
									<i class="far fa-check-circle"></i>
								</div>
								Styling and Formatting
							</li>
							<li>
								<div class="about-check-i">
									<i class="far fa-check-circle"></i>
								</div>
								Bibliographic Corrections
							</li>
						</ul>
					</div>
					<div class="section-btn text-left mt-5">
						<a href="#" class="btn">Register Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--  About Skills Section End -->
	<section id="news">
		<div class="container">
			<div class="section-head text-center">
				<p>Our Features</p>
				<h2>Enjoy Low-Cost Features</h2>
			</div>
			<div class="section-content showcase">
				<div class="row">
					<div class="col-md-6 text-center showcase-wrapper showcase-1">
						<div class="showcase-1-text">
							<h3>Preferred Editor</h3>
							<h6>Editor of Your Choice</h6>
							<p>You can choose your editor as per your subject area.</p>
						</div>
					</div>
					<div class="col-md-6 text-center showcase-wrapper showcase-2">
						<div class="showcase-1-text">
							<h3>Top Editor</h3>
							<h6>Qualified Experts </h6>
							<p>We will assign the best editors from our panel to you.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-center showcase-wrapper showcase-3">
						<div class="showcase-1-text">
							<h3>Plagiarism Report</h3>
							<h6>Proof of Authenticity </h6>
							<p>This report will add credibility to your work.</p>
						</div>
					</div>
					<div class="col-md-6 text-center showcase-wrapper showcase-4">
						<div class="showcase-1-text">
							<h3>24/7 Customer Support</h3>
							<h6>Online Presence</h6>
							<p>We answer to your requests.</p>
						</div>
					</div>
				</div>
				<div class="section-btn text-center mt-5">
					<a href="#plans" class="btn">Learn More</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Plans Section Start -->
	<section id="plans">
		<div class="container">
			<div class="section-head text-center">
				<p>Prices and Packages</p>
				<h2>Our Perfect Packages</h2>
			</div>
			<div class="section-content">
				<div class="container text-center">
					<div class="row flex-items-xs-middle flex-items-xs-center">

						<!-- Table #1  -->
						<div class="col-xs-12 col-lg-4">
							<div class="card text-xs-center">
								<div class="card-header">
									<h4 class="card-title">
										Basic
									</h4>

									<h3 class="display-2"><span class="currency">$</span>15.00</h3>
								</div>
								<div class="card-block">

									<ul class="list-group">
										<li class="list-group-item">15 Days</li>
										<li class="list-group-item">275 words/page</li>
										<li class="list-group-item">Unlimited Revisions</li>
										<li class="list-group-item"> - </li>
										<li class="list-group-item"> - </li>
										<li class="list-group-item"> - </li>
									</ul>
									<a href="#contact-us" class="btn btn-gradient mt-5">Get it Now</a>
								</div>
							</div>
						</div>

						<!-- Table #2  -->
						<div class="col-xs-12 col-lg-4">
							<div class="card text-xs-center">
								<div class="card-header">
									<h4 class="card-title">
										Standard
									</h4>

									<h3 class="display-2"><span class="currency">$</span>23.40</h3>
								</div>
								<div class="card-block">

									<ul class="list-group">
										<li class="list-group-item">10 Days</li>
										<li class="list-group-item">275 words/page</li>
										<li class="list-group-item">Unlimited Revisions</li>
										<li class="list-group-item">Money-back Guarantee</li>
										<li class="list-group-item"> - </li>
										<li class="list-group-item"> - </li>
									</ul>
									<a href="#contact-us" class="btn btn-gradient mt-5">Get it Now</a>
								</div>
							</div>
						</div>
						<!-- Table #3  -->
						<div class="col-xs-12 col-lg-4">
							<div class="card text-xs-center">
								<div class="card-header">
									<h4 class="card-title">
										Premium
									</h4>

									<h3 class="display-2"><span class="currency">$</span>33.60</h3>
								</div>
								<div class="card-block">

									<ul class="list-group">
										<li class="list-group-item">3 Hours</li>
										<li class="list-group-item">275 words/page</li>
										<li class="list-group-item">Plagiarism Report</li>
										<li class="list-group-item">Unlimited Revisions</li>
										<li class="list-group-item">Money-back Guarantee</li>
										<li class="list-group-item">24/7 Customer Support</li>
									</ul>
									<a href="#contact-us" class="btn btn-gradient mt-5">Get it Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Plans Section End -->

	<!-- Contact Us Start -->
	<section id="contact-us">
		<div class="container">
			<form method="post">
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-md-8">
						<div class="section-head">
							<h2 class="text-left m-0"><span style="color: #e84a64;">Leaders in Maintaining</span> Customer <br>
								Satisfaction and Top-Notch Quality</h2>
							<p>Our team provides you with exceptional, on-time order. We are always ready to help you out.</p>
						</div>
						<div class="section-content">
							<div class="form-row">
								<div class="form-group col-md-6">
									<input type="text" class="form-control" id="name" placeholder="Name" required="">
								</div>
								<div class="form-group col-md-6">
									<input type="tel" class="form-control" id="phone" placeholder="Phone Number" pattern="^[0-9\-\+\s\(\)]*$" minlength="7" maxlength="22" required="">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12">
									<input type="email" class="form-control" id="email" placeholder="Email" required="">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12">
									<textarea class="form-control" id="message" placeholder="Message" rows="7" cols="50" required=""></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="text-center">
									<button type="submit" class="btn btn-primary hero_btncust" name="submit" id="submit-button">Submit</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
			<div id="auto-response" <?php if (isset($_GET['success'])){ echo 'style="display:block !important"'; } ?>>
				<p>Thank you for sending us a message. Our team will be with you shortly.</p>
			</div>
		</div>
	</section>
	<!-- Contact us End -->

	<!--  Brands Section Start -->
	<div id="brands">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="brands-list">
						<div class="owl-carousel owl-theme">
							<div class="item">
								<img src="imgs/uni1.png" alt="Clients">
							</div>
							<div class="item">
								<img src="imgs/uni2.png" alt="Clients">
							</div>
							<div class="item">
								<img src="imgs/uni3.png" alt="Clients">
							</div>
							<div class="item">
								<img src="imgs/uni4.png" alt="Clients">
							</div>
							<div class="item">
								<img src="imgs/uni5.png" alt="Clients">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Brands Section End -->

	<!--  Footer Start -->
	<footer>
		<div class="container text-white">
			<div class="row">
				<div class="col-md-4">
					<div class="footer_logo">
						<a href="./"><img src="imgs/logo.png" alt="Logo" class="img-fluid"></a>
					</div>
					<div class="f-text text-white">
						<p>GradesHunt brings you the best editing and proofreading services that will be customized to your needs at
							affordable prices.</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="footer-links">
						<h4>Quick Links</h4>
						<ul>
							<li><a href="./">Home</a></li>
							<li><a href="#services">Benefits</a></li>
							<li><a href="#skills">About Us</a></li>
							<li><a href="#about-skills">Services</a></li>

						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<div class="footer-links">
						<h4>&nbsp;</h4>
						<ul>
							<li><a href="#news">Features</a></li>
							<li><a href="#plans">Price Plans</a></li>
							<li><a href="#contact-us">Contact Us</a></li>
							<li><a href="privacy-policy.php">Privacy Policy</a></li>

						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="footer-links social-icons f-text ">
						<h4>Follow Us</h4>
						<ul>
							<li>
								<a href="https://www.facebook.com/GradesHunt-109169827642376" target="_blank">
									<i class="fab fa-facebook-square fa-2x"></i>
								</a>
							</li>
							<li>
								<a href="mailto:care@gradeshunt.co.uk">
									<i class="fas fa-envelope-square fa-2x"></i>
								</a>
								<span>care@gradeshunt.co.uk</span>
							</li>
						</ul>
						<h4>Disclaimer</h4>
						<p class="disc">
							We don't provide custom writing services. We only provide editing services to our customers.
						</p>
					</div>
				</div>
			</div>
			<hr>
			<div class="f-bottom-text">
				<div class="row">
					<div class="col-lg-12 text-center">
						<p>Copyright &copy; <script>
								document.write(new Date().getFullYear())

							</script> - GradesHunt All rights reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--  Footer End -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/aos.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
	<script>
		window.cookieconsent.initialise({
			"palette": {
				"popup": {
					"background": "#222"
				},
				"button": {
					"background": "#ee3465"
				}
			},
			"position": "bottom-right",
			"content": {
				"message": "Our website uses cookies. To proceed to the next page, you must agree to our privacy page. If you do not want us to view cookies, you can change your browser settings.",
				"dismiss": "Agree",
				"link": "Privacy Policy",
				"href": "privacy-policy.php"
			}
		});

	</script>

	<script src="js/main.js"></script>

	<script>
		$(document).ready(function() {
			$('#auto-response').fadeOut(12000);
		});

	</script>
</body>

</html>
