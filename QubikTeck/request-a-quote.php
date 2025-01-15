<?php
$page_title = 'Request A Quote |  QubikTech Efficient Website Solutions';
$result= "";
if(isset($_POST['submit']) && isset($_POST['email'])){
	$to = "";
	$from = $_POST['email']; 
	$subject = "Form-submission";
	$messsage = " Name : " .$_POST['name'] . "\n Email : " .$_POST['email'] . "\n Phone Number :  " .$_POST['phone'] . "\n Subject : ".$mysubject . "\n  Wrote the following : " . $_POST['message'];

	mail($to,$subject,$messsage,$from); 
	// header('location:?success#contact'); 
	die;
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
					<h1 class="title text-white">Request A Quote</h1>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div>
<!--====== PAGE TITLE PART ENDS ======-->
<!--====== CONTACT DETAILS PART START ======-->

<!--====== CONTACT DETAILS PART ENDS ======-->
<!--====== GET IN TOUCH PART START ======-->
<div class="get-in-touch-area get-in-touch-area-2" id="contactForm">
	<div class="container">
		<div class="section-title_3 section-title_4 text-center">
			<p> Please complete the form below to send us your business requirements and one of our representatives
				shall get in touch with you shortly.
				All the information provided by you below will be kept strictly confidential and will not be shared with
			anyone.</p>
		</div>

		<form id="contact-form" class="requst-a-quote">
			<div class="form-row">
				<div class="form-group col-md-6 pr-4">
					<label for="name">Name*</label>
					<input type="text" class="form-control" id="name" placeholder="John Doe" required>
				</div>
				<div class="form-group col-md-6 pl-4">
					<label for="email">Email ID*</label>
					<input type="email" class="form-control" id="email" placeholder="JohnDoe@example.com" required>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6 pr-4">
					<label for="company">Company Name*</label>
					<input type="text" class="form-control" id="company" placeholder="Your Company Name" required>
				</div>
				<div class="form-group col-md-6 pl-4">
					<label for="website">Website</label>
					<input type="text" class="form-control" id="website" placeholder="Your Website If Not Leave Empty" required>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6 pr-4">
					<label for="country">Country*</label>
					<select id="country" class="form-control" required value="please select">
						<option  selected="selected">Select Your Country</option>
						<option>...</option>
                        <option>...</option>
                        <option>...</option>
                        <option>...</option>
                        <option>...</option>
					</select>
				</div>
				<div class="form-group col-md-6 pl-4">
					<label for="phone">Phone*</label>
					<input type="text" class="form-control" id="phone" placeholder="XXX-XXX-XXXXXX" pattern="^[0-9\-\+\s\(\)]*$" minlength="7" maxlength="22" required>
				</div>
			</div>
			<!-- <div class="form-group">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck">
					<label class="form-check-label" for="gridCheck">
						Check me out
					</label>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Sign in</button> -->
			<div class="section-title_3 section-title_4 text-center">
				<h2 class="head">What kind of Project do you need ?</h2>
			</div>
			<div class="form-row">
				<div class="form-check form-check-inline col-sm-12 col-md-6 col-lg-4">
					<div class="checkbox-m">
						 <div class="kind-need-porject">
						  	<input type="checkbox" id="fruit14" name="fruit-14" value="Apple">
						 	 <label for="fruit14" class="text-white">Web Design and Development</label>
						  </div>
					</div>
				</div>
				<div class="form-check form-check-inline col-sm-12 col-md-6 col-lg-4">
					<div class="checkbox-m">
						 <div class="kind-need-porject">
						  	<input type="checkbox" id="fruit15" name="fruit-15" value="Apple">
						 	 <label for="fruit15" class="text-white">Mobile App Development</label>
						  </div>
					</div>
				</div>
				<div class="form-check form-check-inline col-sm-12 col-md-6 col-lg-4">
					<div class="checkbox-m">
						 <div class="kind-need-porject">
						  	<input type="checkbox" id="fruit16" name="fruit-16" value="Apple">
						 	 <label for="fruit16" class="text-white">Software Development</label>
						  </div>
					</div>
				</div>

			</div>
			<div class="section-title_3  text-center mt-40 mb-40">
				<h2 class="head">About Project</h2>
				<p>Give us some information about your product, company service or something else you want to create.
				The more, the better.</p>
			</div>
			<div class="form-row">
				<!-- <div class="form-group">
					<label for="exampleFormControlFile1">Example file input</label>
					<input type="file" class="form-control-file" id="exampleFormControlFile1">
				</div> -->
				<div class="custom-file col-sm-12 col-md-6 col-lg-4">
					<input type="file" class="custom-file-input" id="validatedCustomFile" required>
					<label class="custom-file-label" for="validatedCustomFile">Upload File*</label>
					<div class="invalid-feedback">Example invalid custom file feedback</div>
				</div>
				<div class="progress col-sm-12 col-md-6 col-lg-8 mb-60">
					<div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60"
					aria-valuemin="0" aria-valuemax="100">60%</div>
				</div>
			</div>
			<div class="form-group">

				<label for="exampleFormControlTextarea1" class="mb-25 text-dark">Project Description</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
			
			<div class="row">
			<div class="col-md-6">
				<div class="section-title_3 section-title_4 col-md-12">
					<h2 class="sub_head">Time Frame</h2>
				</div>
				<div  class="checkbox-border">
					<div class="time_frame_inner time_frame_inner-mobile">
							<div class="form-row">
								<div class="request-a-quote col-sm-12 col-md-12 col-lg-4">
									<input type="checkbox" id="fruit1" name="fruit-1" value="Apple">
									<label for="fruit1">&nbsp;&nbsp; Undetermined</label>
								</div>
								<div class="request-a-quote col-sm-12 col-md-12 col-lg-4">
									<input type="checkbox" id="fruit2" name="fruit-2" value="Strawberry">
									<label for="fruit2">&nbsp; &nbsp;Immediately</label>
								</div>
								<div class="request-a-quote col-sm-12 col-md-12 col-lg-4">
									<input type="checkbox" id="fruit3" name="fruit-3" value="Apple">
									<label for="fruit3">&nbsp; &nbsp;One week</label>
								</div>
							</div>
							<div class="form-row">
								<div class="request-a-quote col-sm-12 col-md-12 col-lg-4">
									<input type="checkbox" id="fruit4" name="fruit-4" value="Apple">
									<label for="fruit4" >&nbsp;&nbsp; One month  &nbsp;&nbsp; &nbsp;&nbsp;</label>
								</div>	
								<div class="request-a-quote col-sm-12 col-md-12 col-lg-4">
									<input type="checkbox" id="fruit13" name="fruit-13" value="Apple"> 
									<label for="fruit13" > Within 6 months  </label>
								</div>	
							</div>
							<div class="form-row">
								<div class="trans-request-a-quote col-sm-12 col-md-12 col-lg-4 d-none d-sm-block">
									<input type="checkbox" id="fruit5" name="fruit-5" value="Apple" disabled="">
									<label for="fruit5"> </label>
								</div>
								
							</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="section-title_3 section-title_4 col-md-12">
					<h2 class="sub_head">Estimated Budget</h2>
				</div>
				<div  class="checkbox-border">
					<div class="time_frame_inner">
							<div class="form-row">
								<div class="request-a-quote col-sm-12 col-md-12 col-lg-4">
									<input type="checkbox" id="fruit6" name="fruit-6" value="Apple">
									<label for="fruit6">&nbsp;&nbsp;  Less Than 5,000$</label>
								</div>
								<div class="request-a-quote col-sm-12 col-md-12 col-lg-4">
									<input type="checkbox" id="fruit7" name="fruit-7" value="Strawberry">
									<label for="fruit7">&nbsp; &nbsp; 5,000$ - 10,000$</label>
								</div>
								<div class="request-a-quote col-sm-12 col-md-12 col-lg-4">
									<input type="checkbox" id="fruit8" name="fruit-8" value="Apple">
									<label for="fruit8">&nbsp; &nbsp; 5,000$ - 10,000$</label>
								</div>
							</div>
							<div class="form-row">
								<div class="request-a-quote col-sm-12 col-md-12 col-lg-4">
									<input type="checkbox" id="fruit9" name="fruit-9" value="Apple">
									<label for="fruit9">&nbsp;&nbsp;  5,000$ - 10,000$</label>
								</div>
								<div class="request-a-quote col-sm-12 col-md-12 col-lg-4">
									<input type="checkbox" id="fruit10" name="fruit-10" value="Apple">
									<label for="fruit10">&nbsp;&nbsp;  5,000$ - 10,000$</label>
								</div>
								<div class="request-a-quote col-sm-12 col-md-12 col-lg-4">
									<input type="checkbox" id="fruit11" name="fruit-11" value="Apple">
									<label for="fruit11">&nbsp;&nbsp;  5,000$ - 10,000$</label>
								</div>
							</div>
							<div class="form-row">
								<div class="request-a-quote col-sm-12 col-md-12 col-lg-4">
									<input type="checkbox" id="fruit12" name="fruit-12" value="Apple">
									<label for="fruit12">&nbsp;&nbsp;  5,000$ - 10,000$</label>
								</div>
								
							</div>
					</div>
				</div>
			</div>
		</div>
			<div class="mt-50"><button type="submit" class="btn btn-primary btn-lg btn-contact">Submit</button></div>
		</form>
		<div id="auto-response" style="display:none" > <p> Thank you for reaching out. Our team will get back to you soon. </div>
		</div>
	</div>


	<div class="container">
		
	</div>


	<!--====== footer PART START ======-->


	<?php include 'footer.php'; ?>
	<script>
		$("#contact-form").submit(function(event){
	event.preventDefault(); //prevent default action 
	var form_data = $(this).serialize(); //Encode form elements for submission
	
	$.ajax({
		url : 'index.php',
		data : form_data
	}).done(function(response){
		$('#auto-response').show();
		$('#name').val('');
		$('#phone').val('');
		$('#email').val('');
		$('#company').val('');
		$('#website').val('');
		$('#country').val('');
		$('#message').val('');

	});

});
		$("#submit").click(function(){
			setTimeout(function(){
				$('#auto-response').hide();
			},4000);
		});
	</script>
	<script>
		$(function() {
			$("select option").addClass("highlight");
		});
	</script>