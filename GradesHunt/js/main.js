 AOS.init({
 	duration: 800,
 	easing: 'slide',
 	once: false
 });
 //Sticky Navbar
 $(window).scroll(function () {
 	var scrollPos = $(window).scrollTop();
 	if (scrollPos > 120) {
 		$('#custom-navbar').addClass('sticky');
 	} else {
 		$('#custom-navbar').removeClass('sticky');
 	}
 });

 //Close Menu
 $('.nav-item a').on("click", function (e) {
 	$('.collapse').removeClass("show");
 });


 /*
 $('.navbar-toggler').click(function (event) {
 	$(".navbar-collapse").removeClass('show');
 });*/

 $(".navbar a").click(function (event) {
 	// check if window is small enough so dropdown is created
 	var toggle = $(".navbar-toggler").is(":visible");
 	if (toggle) {
 		$(".navbar-collapse").collapse('hide');
 	}
 });
 //smoot scroll
 $(document).on('click', 'a[href^="#"]', function () {
 	$('html, body').animate({
 		scrollTop: $($.attr(this, 'href')).offset().top - 75
 	}, 700);
 	return false;
 });


 $(document).ready(function () {
 	var owl = $('.owl-carousel');
 	owl.owlCarousel({
 		margin: 0,
 		nav: false,
 		dots: false,
 		loop: true,
 		autoplay: true,
 		responsive: {
 			0: {
 				items: 1
 			},
 			600: {
 				items: 3
 			},
 			1000: {
 				items: 5
 			}
 		}
 	})
 });
