<?php 
$page_title = 'Error |  Solyfy Efficient Website Solutions';
include 'header.php';?>
<div class="page-title-area-error"></div>
<div class="error mb-50">
	<div class="container-floud">
		<div class="col-xs-12 ground-color text-center">
			<div class="container-error-404">
				<div class="clip"><div class="shadow"><span class="digit thirdDigit"></span></div></div>
				<span class="error-man"> <img src="assets/images/man.png" alt=""></span>
				<div class="clip"><div class="shadow"><span class="digit secondDigit"></span></div></div>
				<div class="clip"><div class="shadow"><span class="digit firstDigit"></span></div></div>
				<div class="msg animated infinite bounce delay-2s">OH!<span class="triangle"></span></div>
			</div>
			<h2 class="h1">Sorry! the Page not found</h2>
			<span>Don’t be fret. We are here.</span>

			<ul class="list-inline mt-30">
				<li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href="https://solyfy.com/"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a></li>
				<li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href="https://solyfy.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>
<script async>
	function randomNum()
	{
		"use strict";
		return Math.floor(Math.random() * 9)+1;
	}
	var loop1,loop2,loop3,time=100, i=0, number, selector3 = document.querySelector('.thirdDigit'), selector2 = document.querySelector('.secondDigit'),
		selector1 = document.querySelector('.firstDigit');
	loop3 = setInterval(function()
						{
		"use strict";
		if(i > 40)
		{
			clearInterval(loop3);
			selector3.textContent = 4;
		}else
		{
			selector3.textContent = randomNum();
			i++;
		}
	}, time);
	loop2 = setInterval(function()
						{
		"use strict";
		if(i > 80)
		{
			clearInterval(loop2);
			selector2.textContent = 0;
		}else
		{
			selector2.textContent = randomNum();
			i++;
		}
	}, time);
	loop1 = setInterval(function()
						{
		"use strict";
		if(i > 100)
		{
			clearInterval(loop1);
			selector1.textContent = 4;
		}else
		{
			selector1.textContent = randomNum();
			i++;
		}
	}, time);
</script>

<?php include 'footer.php';?>