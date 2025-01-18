AOS.init();


$(document).ready(function() {
    $('#testimonial-slide').slick({
        infinite: true,
        slidesToShow: 1, 
        slidesToScroll: 1,
        arrows: false, 
        dots: true,
        responsive: [
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 783,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 585,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      })
    }); 

    







    $(document).ready(function myfunction() {
        calculatePriceHeader();
        $('#level').on('change', function myfunction() {
            DisableTimeForOnlineContent($(this).val());
            calculatePriceHeader();
        });
        $('#level').on('keyup', function myfunction() {

            DisableTimeForOnlineContent($(this).val());
            calculatePriceHeader();
        });
        $('#service_type').on('change', function myfunction() {
            calculatePriceHeader();
        });

        $('#service_type').on('keyup', function myfunction() {
            calculatePriceHeader();
            
        });
        $('#urgency').on('change', function myfunction() {
            calculatePriceHeader();
        });
        $('#urgency').on('keyup', function myfunction() {
            calculatePriceHeader();
        });
        $('.pages1').on('change', function myfunction() {
            
            $('.pages1').val($(this).val());
            calculatePriceHeader();
        });
        $('.pages1').on('keyup', function myfunction() {
            $('.pages1').val($(this).val());
            calculatePriceHeader();
        });
        $('.num.minus').on('click', function myfunction() {

            var Value = (parseInt($('.pages1').val()) - 1) <= 0 ? 1 : parseInt($('.pages1').val()) - 1;
            $('.pages1').val(Value);
            calculatePriceHeader();
            console.log(Value);
        });
        $('.num.plus').on('click', function myfunction() {
            var Value = parseInt($('.pages1').val()) + 1 >= 99 ? 99 : parseInt($('.pages1').val()) + 1;;
            $('.pages1').val(Value);
            calculatePriceHeader();
        });
    });

    function calculatePriceHeader() {
        
        var level = $('#level')[0].selectedIndex; //$('#level').val();
        var urgency = $('#urgency').val();
        var pages = $('.pages1').val();
        var Result = CalculateOrderPrice(urgency, level, 0, 0, pages, 0, 1);
        $('.actual_total').text('$' + Result.lbl_atotal);
        $('#price_div').val("$" +Result.lbl_dtotal);

    }
    function DisableTimeForOnlineContent(selectedLevel) {

        if (selectedLevel == 6) {
            $('#urgency  > option').each(function (key, val) {
                var SelectedVal = $(val).val();
                if (SelectedVal == 8 || SelectedVal == 9 || SelectedVal == 10)
                    $(val).prop("disabled", true);
            });
            $('#urgency').val(0);
        } else {
            $('#urgency  > option').each(function (key, val) {
                $(val).prop("disabled", false);
            })
        }
    }













// AOS.init({
//         easing: 'ease-in-out-sine'
//       });
	  
// $(document).ready(function(){
// 		$("#testimonial-slider").owlCarousel({
// 			items:1,
// 			itemsDesktop:[1000,1],
// 			itemsDesktopSmall:[979,1],
// 			itemsTablet:[768,1],
// 			pagination:true,
// 			navigation:false,
// 			navigationText:["",""],
// 			slideSpeed:1000,
// 			singleItem:true,
// 			autoPlay:true
// 		});
	
	
// 	    /*select*/	
// 		    		function DropDown(el) {
// 				this.dd = el;
// 				this.placeholder = this.dd.children('span');
// 				this.opts = this.dd.find('.dropdown a');
// 				this.val = '';
// 				this.index = -1;
// 				this.initEvents();
// 			}
// 			DropDown.prototype = {
// 				initEvents : function() {
// 					var obj = this;

// 					obj.dd.on('click', function(event){
// 						$(this).toggleClass('active');
// 						return false;
// 					});

// 					obj.opts.on('click',function(){
// 						var opt = $(this);
// 						obj.val = opt.text();
// 						obj.index = opt.index();
// 						obj.placeholder.text(obj.val);
// 					});
// 				},
// 				getValue : function() {
// 					return this.val;
// 				},
// 				getIndex : function() {
// 					return this.index;
// 				}
// 			}

// 			$(function() {

// 				var dd = new DropDown( $('#dd') );



// 			});
			
		
		
		
// 		function DropDown(el) {
// 				this.ded = el;
// 				this.placeholder = this.ded.children('span');
// 				this.opts = this.ded.find('.dropdown a');
// 				this.val = '';
// 				this.index = -1;
// 				this.initEvents();
// 			}
// 			DropDown.prototype = {
// 				initEvents : function() {
// 					var obj = this;

// 					obj.ded.on('click', function(event){
// 						$(this).toggleClass('active');
// 						return false;
// 					});

// 					obj.opts.on('click',function(){
// 						var opt = $(this);
// 						obj.val = opt.text();
// 						obj.index = opt.index();
// 						obj.placeholder.text(obj.val);
// 					});
// 				},
// 				getValue : function() {
// 					return this.val;
// 				},
// 				getIndex : function() {
// 					return this.index;
// 				}
// 			}

// 			$(function() {

// 				var ded = new DropDown( $('#ded') );



// 			});
		
//   /*select*/		
		
// });



