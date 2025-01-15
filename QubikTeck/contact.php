<?php
$page_title = 'Contact Us | Qubiktech Efficient Website Solutions';
 $to_email = "care@qubicktech.com";

if(isset($_POST['submit']))

{
   	$subject = "Qubiktech Form submission";
    $result= "";
	$message = " Name: " .$_POST['name'] . "<br> Email: " .$_POST['email']. "<br> Phone: " .$_POST['phone'] ." <br> Message: " . $_POST['message'];
		$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <'.$from.'>' . "\r\n";

	if (mail($to_email, $subject, $message, $headers)) {
		    $result = "Thank you for contacting us. We will get back to you soon. $to_email...";
		} else {
		    $result = "Email sending failed...";
		}
} 
 include 'header.php'; 
?>
<style>
	#auto-response {
    background: #50ba56;
    margin: 10px auto;
    padding: 8px;
    color: #fff;
    text-align: center;
    border-radius: 3px;
	display: none;
}
</style>
	<!--====== PAGE TITLE PART START ======-->
	<div class="page-title-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="page-title-item text-center">
						<h1 class="title text-white">Contact Us</h1>
					</div> <!-- page title -->
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
	</div>
	<!--====== PAGE TITLE PART ENDS ======-->
<!--====== CONTACT DETAILS PART START ======-->
<!--
	<div class="contact-details-area pt-90 pb-120">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="contact-info mr-30 mt-30">
						<div class="contact-item-1">
							<div class="contact-info-item text-center">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<h5 class="title">Phone Number</h5>
								<p>+1-224-385-4943</p>
							</div>
							<a class="contact-info-item text-center" href="" target="_blank">
								<i class="fa fa-map-o" aria-hidden="true"></i>
								<h5 class="title">Office Location</h5>
								<p>Chicago, IL 60660</p>
							</a>
						</div>
						<div class="contact-item-2">
							
							<a class="contact-info-item text-center" href="https://twitter.com/SolyFy" target="_blank">
								<i class="fa fa-twitter" aria-hidden="true"></i>
								<h5 class="title">Social Network</h5>
								<p>Twitter</p>
							</a>
							<a class="contact-info-item text-center" href="https://www.linkedin.com/company/solyfy/" target="_blank">
								<i class="fa fa-linkedin" aria-hidden="true"></i>
								<h5 class="title">Social Network</h5>
								<p>Linkedin</p>
							</a>
							<a class="contact-info-item text-center" href="https://www.facebook.com/SolyFy-108562207238673/" target="_blank">
								<i class="fa fa-facebook" aria-hidden="true"></i>
								<h5 class="title">Social Network</h5>
								<p>Facebook</p>
							</a>
						</div>
					</div>
				</div>
				
			</div> 
		</div> 
	</div>
-->
	<!--====== CONTACT DETAILS PART ENDS ======-->
	<!--====== GET IN TOUCH PART START ======-->
	<div class="get-in-touch-area get-in-touch-area-2" id="contactForm">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="section-title text-left">
						
						<span>LEAVE US A MESSAGE</span>
						<h2 class="title">For a Tech Solution!</h2>
					</div> <!-- section title -->
					<div class="form-area">
						<form method="post" action="" enctype="multipart/form-data">
							<div class="input-box mt-45">
								<input type="text" name="name" id="name" required="" placeholder="Enter your name">
								<i class="fa fa-user-o" aria-hidden="true"></i>
							</div>
							<div class="input-box mt-20">
								<input type="email" name="email" id="email" required="" placeholder="Enter your email">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
							</div>
							<div class="input-box mt-45">
								<input type="tel" name="phone" id="name" required="" placeholder="Enter your Phone Number">
								<i class="fa fa-user-o" aria-hidden="true"></i>
							</div>
							<div class="input-box mt-20">
								<textarea name="message" id="message" cols="30" placeholder="Enter your message" ></textarea>
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								<button class="main-btn" name="submit" type="submit">Submit Now</button>
							</div>
						</form>
						 <?php if  ($result != ''){ ?>
						<div id="auto-response" style="display:block !important"><?php echo $result; ?></div>
					<?php } ?>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="get-map d-none d-lg-block mt-40">
						<img src="assets/images/service/contact-thumb.jpg" name="video play" alt="video play">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--====== footer PART START ======-->
<div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2001.8408527722263!2d-6.487834011729421!3d53.368252661090274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4867721fb81293cf%3A0xa00c7a9973173d0!2sLeixlip%2C%20Co.%20Kildare%2C%20Ireland!5e0!3m2!1sen!2s!4v1577685309684!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>

<?php include 'footer.php'; ?>
