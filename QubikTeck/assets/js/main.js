$(function(){"use strict";$(window).on('load',function(event){$('.preloader').delay(500).fadeOut(500)});$(window).on('scroll',function(event){var scroll=$(window).scrollTop();if(scroll<200){$(".navigation").removeClass("sticky")}else{$(".navigation").addClass("sticky")}});$(".navbar-toggler").on('click',function(){$(this).toggleClass('active')});$(".navbar-nav a").on('click',function(){$(".navbar-toggler").removeClass('active')});var subMenu=$(".sub-menu-bar .navbar-nav .sub-menu");if(subMenu.length){subMenu.parent('li').children('a').append(function(){return'<button class="sub-nav-toggler"> <i class="fa fa-angle-down"></i> </button>'});var subMenuToggler=$(".sub-menu-bar .navbar-nav .sub-nav-toggler");subMenuToggler.on('click',function(){$(this).parent().parent().children(".sub-menu").slideToggle();return!1})}
$('.container').imagesLoaded(function(){var $grid=$('.grid').isotope({transitionDuration:'1s'});$('.project-menu ul').on('click','li',function(){var filterValue=$(this).attr('data-filter');$grid.isotope({filter:filterValue})});$('.project-menu ul li').on('click',function(event){$(this).siblings('.active').removeClass('active');$(this).addClass('active');event.preventDefault()})});function mainSlider(){var BasicSlider=$('.banner-active');BasicSlider.on('init',function(e,slick){var $firstAnimatingElements=$('.single-banner:first-child').find('[data-animation]');doAnimations($firstAnimatingElements)});BasicSlider.on('beforeChange',function(e,slick,currentSlide,nextSlide){var $animatingElements=$('.single-banner[data-slick-index="'+nextSlide+'"]').find('[data-animation]');doAnimations($animatingElements)});BasicSlider.slick({autoplay:!0,autoplaySpeed:10000,dots:!1,fade:!0,arrows:!0,prevArrow:'<span class="prev"><i class="fal fa-angle-left"></i></span>',nextArrow:'<span class="next"><i class="fal fa-angle-right"></i></span>',responsive:[{breakpoint:1330,settings:{arrows:!1}}]});function doAnimations(elements){var animationEndEvents='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';elements.each(function(){var $this=$(this);var $animationDelay=$this.data('delay');var $animationType='animated '+$this.data('animation');$this.css({'animation-delay':$animationDelay,'-webkit-animation-delay':$animationDelay});$this.addClass($animationType).one(animationEndEvents,function(){$this.removeClass($animationType)})})}}
mainSlider();$('.portfolio-active').slick({dots:!1,infinite:!0,autoplay:!0,autoplaySpeed:2000,arrows:!0,prevArrow:'<span class="prev"><i class="fal fa-long-arrow-left"></i></span>',nextArrow:'<span class="next"><i class="fal fa-long-arrow-right"></i></span>',speed:1000,slidesToShow:3,slidesToScroll:1,responsive:[{breakpoint:1201,settings:{slidesToShow:3,}},{breakpoint:992,settings:{arrows:!1,slidesToShow:2,}},{breakpoint:768,settings:{arrows:!1,slidesToShow:1,}}]});$('.leadership-active').slick({dots:!1,infinite:!0,autoplay:!0,autoplaySpeed:2000,arrows:!0,prevArrow:'<span class="prev"><i class="fal fa-long-arrow-left"></i></span>',nextArrow:'<span class="next"><i class="fal fa-long-arrow-right"></i></span>',speed:1000,slidesToShow:3,slidesToScroll:1,responsive:[{breakpoint:1201,settings:{slidesToShow:3,}},{breakpoint:992,settings:{arrows:!1,slidesToShow:2,}},{breakpoint:768,settings:{arrows:!1,slidesToShow:1,}}]});$('.brand-active').slick({dots:!1,infinite:!0,autoplay:!0,autoplaySpeed:1000,arrows:!1,speed:1000,slidesToShow:5,slidesToScroll:2,responsive:[{breakpoint:1201,settings:{slidesToShow:5,}},{breakpoint:992,settings:{slidesToShow:4,}},{breakpoint:768,settings:{slidesToShow:3,}},{breakpoint:576,settings:{slidesToShow:2,}}]});$('.case-studies-active').slick({dots:!1,infinite:!0,autoplay:!0,autoplaySpeed:3000,arrows:!0,prevArrow:'<span class="prev"><i class="fal fa-angle-left"></i></span>',nextArrow:'<span class="next"><i class="fal fa-angle-right"></i></span>',speed:1500,slidesToShow:4,slidesToScroll:1,responsive:[{breakpoint:1201,settings:{slidesToShow:3,}},{breakpoint:992,settings:{slidesToShow:3,arrows:!1,}},{breakpoint:768,settings:{slidesToShow:2,arrows:!1,}},{breakpoint:576,settings:{slidesToShow:1,arrows:!1,}}]});$('.shop-active').slick({slidesToShow:1,slidesToScroll:1,arrows:!1,fade:!1,asNavFor:'.shop-thumb-active'});$('.shop-thumb-active').slick({slidesToShow:3,slidesToScroll:1,asNavFor:'.shop-active',dots:!1,centerMode:!0,arrows:!1,centerPadding:"0",focusOnSelect:!0});$('.video-popup').magnificPopup({type:'iframe'});$('.image-popup').magnificPopup({type:'image',gallery:{enabled:!0}});$(window).on('scroll',function(event){if($(this).scrollTop()>600){$('.back-to-top').fadeIn(200)}else{$('.back-to-top').fadeOut(200)}});$('.back-to-top').on('click',function(event){event.preventDefault();$('html, body').animate({scrollTop:0,},1500)});$('#circle1').circleProgress({value:0.75,size:230,lineCap:"round",emptyFill:"#f1f9ff",thickness:"10",fill:{gradient:["#006de8"]}});$('#circle2').circleProgress({value:0.85,size:230,lineCap:"round",emptyFill:"#f1f9ff",thickness:"10",fill:{gradient:["#006de8"]}});$('#circle3').circleProgress({value:0.50,size:230,lineCap:"round",emptyFill:"#f1f9ff",thickness:"10",fill:{gradient:["#006de8"]}});$('#circle4').circleProgress({value:0.65,size:230,lineCap:"round",emptyFill:"#f1f9ff",thickness:"10",fill:{gradient:["#006de8"]}});$('.add').click(function(){if($(this).prev().val()){$(this).prev().val(+$(this).prev().val()+1)}});$('.sub').click(function(){if($(this).next().val()>1){if($(this).next().val()>1)$(this).next().val(+$(this).next().val()-1)}});$('select').niceSelect();$('#simple_timer').syotimer({year:2020,month:5,day:9,hour:20,minute:30,})});$(document).ready(function(){$('#box1').mouseenter(function(){$('#bg_cover').removeClass('bg_cover').addClass('new_bg1');$('.box').addClass('box_hidden');$('#box1').removeClass('box_hidden')});$('#box2').mouseenter(function(){$('#bg_cover').removeClass('bg_cover').addClass('new_bg2');$('.box').addClass('box_hidden');$('#box2').removeClass('box_hidden')});$('#box3').mouseenter(function(){$('#bg_cover').removeClass('bg_cover').addClass('new_bg3');$('.box').addClass('box_hidden');$('#box3').removeClass('box_hidden')});$('#box4').mouseenter(function(){$('#bg_cover').removeClass('bg_cover').addClass('new_bg4');$('.box').addClass('box_hidden');$('#box4').removeClass('box_hidden')});$('#box5').mouseenter(function(){$('#bg_cover').removeClass('bg_cover').addClass('new_bg5');$('.box').addClass('box_hidden');$('#box5').removeClass('box_hidden')});$('#box6').mouseenter(function(){$('#bg_cover').removeClass('bg_cover').addClass('new_bg6');$('.box').addClass('box_hidden');$('#box6').removeClass('box_hidden')});$('#box7').mouseenter(function(){$('#bg_cover').removeClass('bg_cover').addClass('new_bg7');$('.box').addClass('box_hidden');$('#box7').removeClass('box_hidden')});$('#box8').mouseenter(function(){$('#bg_cover').removeClass('bg_cover').addClass('new_bg8');$('.box').addClass('box_hidden');$('#box8').removeClass('box_hidden')});$('.box').mouseleave(function(){$('.box').removeClass('box_hidden');$('#bg_cover').removeClass('new_bg1 new_bg2 new_bg3 new_bg4 new_bg5 new_bg6 new_bg7 new_bg8').addClass('bg_cover')})})

$('.counter').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 3000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });