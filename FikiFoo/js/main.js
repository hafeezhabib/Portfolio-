jQuery(function ($) {

    'use strict';
	
	/*==============================================================*/
    // Table of index
    /*==============================================================*/

    /*==============================================================
    # Menu add class
    # Magnific Popup
    # WoW Animation
    ==============================================================*/
	
	// ----------------------------------------------
    // # Demo Chooser
    // ----------------------------------------------

    (function() {

		$('.demo-chooser .toggler').on('click', function(event){
			event.preventDefault();
			$(this).closest('.demo-chooser').toggleClass('opened');
		})

    }());
	
	/*==============================================================*/
    // # Preloader
    /*==============================================================*/
    
    (function () {
        $(window).load(function(){         
            $('.preloader').fadeOut('slow',function(){$(this).remove();});       
        });

    }());
	
	
	/*==============================================================*/
	//Mobile Toggle Control
	/*==============================================================*/
	
	 $(function(){ 
		 var navMain = $("#mainmenu");
		 navMain.on("click", "a", null, function () {
			 navMain.collapse('hide');
		 });
	 });
	 	
		
	/*==============================================================*/
    // Menu add class
    /*==============================================================*/
	(function () {	
		function menuToggle(){
			var windowWidth = $(window).width();
			if(windowWidth > 767 ){
				$(window).on('scroll', function(){
					if( $(window).scrollTop()>650 ){
						$('.navbar').addClass('navbar-fixed-top');
					} else {
						$('.navbar').removeClass('navbar-fixed-top');
					};
					if( $(window)){
						$('#home-three .navbar').addClass('navbar-fixed-top');
					} 
				});
			}else{
				
				$('.navbar').addClass('navbar-fixed-top');
					
			};	
		}

		menuToggle();
	}());
	
	$('#mainmenu').onePageNav({
		currentClass: 'active',
	});
	
	
	/*==============================================================*/
    // WoW Animation
    /*==============================================================*/
	new WOW().init();

	/*==============================================================*/
    // Owl Carousel
    /*==============================================================*/

	$("#team-slider").owlCarousel({ 	
		pagination	: false,	
		navigation:true,
		navigationText: [
		  "<span class='team-slider-left'><i class=' fa fa-angle-left '></i></span>",
		  "<span class='team-slider-right'><i class=' fa fa-angle-right'></i></span>"
		]
	});
	
	$("#screenshot-slider").owlCarousel({ 
		items : 4,
		pagination	: true,	
	});
	
	/*==============================================================*/
    // Magnific Popup
    /*==============================================================*/
	
	(function () {
		$('.image-link').magnificPopup({
			gallery: {
			  enabled: true
			},		
			type: 'image' 
		});
		$('.feature-image .image-link').magnificPopup({
			gallery: {
			  enabled: false
			},		
			type: 'image' 
		});
		$('.image-popup').magnificPopup({	
			type: 'image' 
		});
		$('.video-link').magnificPopup({type:'iframe'});
	}());
	
	
	
});

$('a').on('click' , function(e){
		var targetTo = $(this).attr('href');
		$('.scrollup').scrollTop('slow');
		$('html, body').animate({
		  scrollTop: $(targetTo).offset().top
		}, 1500);	
	});


