// sticky header
window.onscroll = function () {
    myFunction()
};
var header = document.getElementById("header");
var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}
//  Hide topbar on scroll
$("#header").length && $(window).scroll(function () {
    $(window).scrollTop() ? ($("#header").addClass("navbar_fixed"), $("#header .topbar").slideUp(350)) : ($("#header").removeClass("navbar_fixed"), $("#header .topbar").slideDown(350))
})

// Stats section number count Start
var a = 0;
$(window).scroll(function() {

  var oTop = $('.state-box').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.total').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },
        {
          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }
        });
    });
    a = 1;
  }
});
// Stats section number count end

$('#portfolio-slider').owlCarousel({
  stagePadding: 10,
  loop:true,
  margin:10,
  nav:false,
  dots: false,
  autoPlay: true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:2
      },
      1200:{
          items:2
      }
  }
})
// 
var owl = $('#portfolio-slider .owl-carousel');
owl.owlCarousel();
$('.custom-NextBtn').click(function() {
    owl.trigger('next.owl.carousel');
})
$('.custom-PrevBtn').click(function() {
    owl.trigger('prev.owl.carousel');
})


// Testimonials Slider
$('#testimonials-slider').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots: false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      },
      1200:{
          items:1
      }
  }
})


var owl = $('#testimonials-slider.owl-carousel');
owl.owlCarousel();
$('.custom-NextBtn').click(function() {
    owl.trigger('next.owl.carousel');
})
$('.custom-PrevBtn').click(function() {
    owl.trigger('prev.owl.carousel');
})

$('#clients-slider').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  autoPlay: true,
  dots: false,
  responsive:{
      0:{
          items:2
      },
      600:{
          items:2
      },
      1000:{
          items:4
      },
      1200:{
          items:5
      }
  }
})