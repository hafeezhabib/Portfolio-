    const hamburgerMenu = document.querySelector(".hamburger-menu");
    const nav = document.querySelector(".nav");

    hamburgerMenu.addEventListener("click", () => {
        nav.classList.toggle("active")
    });



    $('#Phone').focusout(() => {
      checkPhoneNumber();
      });
      // Validation on Phone Field.
      let checkPhoneNumber = () => {
          let phoneNumber = $('#Phone').val();
          let Phonecode = $("#phoneNumber").val();
          if (Phonecode != '+undefined') {
              if (phoneNumber.indexOf(Phonecode) == '-1') {
                  $("#Phone").val(phoneNumber.substring(phoneNumber.lastIndexOf('+')+1));
              }; 
          }
          if (phoneNumber == '' || phoneNumber.length < 7) {
              $('#Phone').removeClass('parsley-success');
              $('#Phone').addClass('parsley-error');
              return false;
          } else if (phoneNumber == '+undefined') {
              $('#Phone').removeClass('parsley-success');
              $('#Phone').addClass('parsley-error');
              return false;
          }
          else {
              $('#Phone').addClass('parsley-success');
              $('#Phone').removeClass('parsley-error');
              return true;
          }
      }
      

      $("#Phone").on('keyup', function (e) {
        // console.log(iti);
        //phoneNumbertextChange();
        var ReturnValue = NumbersOnly(e);
        // phoneNumbertextChange();
        return ReturnValue;
        //return true;
        });
        
        // Allow only numbers
        var NumbersOnly = function (e) {
        const inputValue = event.target.value;
        const numericValue = getNumericValue(inputValue);
        
        if (numericValue !== inputValue) {
           event.target.value = numericValue;
           return true;
        } else {
           return false;
        }
        }
        
        function getNumericValue(value) {
        let numericValue = '';
        for (const char of value) {
           if (!isNaN(char)) {
              numericValue += char;
           }
        }
        return numericValue;
        }
        
        // Disable the keys which aren't allowed.
        var CharactersAndNumbers = function (Text) {
        if (Text.keyCode == 8 ||
           Text.keyCode == 9 ||
           Text.keyCode == 32 ||
           Text.keyCode == 35 ||
           Text.keyCode == 36 ||
           Text.keyCode == 37 ||
           Text.keyCode == 39 ||
           Text.keyCode == 46 ||
           Text.keyCode == 0) {
           //Leving backspace, tab, end, home, left arrow, right arrow, delete and period
           return true;
        } else if (Text.keyCode >= 65 && Text.keyCode <= 90) {
           return true;
        } else if (Text.keyCode >= 48 && Text.keyCode <= 57) {
           return true;
        } else if (Text.keyCode >= 96 && Text.keyCode <= 105) {
           return true;
        } else {
           return false;
        }
        }

      $('#submit').on('click', function (e) { 
          var isEnteredNumber = checkPhoneNumber();
          if(isEnteredNumber==true){
               $('#Phone').removeClass('parsley-error');
              $('#Phone').addClass('parsley-success');
          }
          else{
               $('#Phone').removeClass('parsley-success');
              $('#Phone').addClass('parsley-error');
          }
      });
      





    $(document).ready(function(){

      $("#contact-form").submit(function (e) {
        e.preventDefault();
        if($("#Phone").hasClass("parsley-success"))
        {
            //show success message
            $("#auto-response").slideToggle("slow").delay(7000).slideToggle(500);
            
            //form reset
            $("#contact-form")[0].reset();
        }
    });

});





document.addEventListener('DOMContentLoaded', function() {
    const slidrs = document.querySelectorAll('.slidr');
    const cards = document.querySelectorAll('.card.width');
    let currentSlide = 0;
    let slideInterval;

    function isLargeScreen() {
        return window.innerWidth > 670;
    }

    function startSlideInterval() {
        slideInterval = setInterval(function() {
            if (currentSlide < cards.length - (isLargeScreen() ? 3 : 1)) {
                currentSlide++;
            } else {
                currentSlide = 0;
            }
            updateSlideDisplay();
        }, 5000);
    }

    function stopSlideInterval() {
        clearInterval(slideInterval);
    }

    function updateSlideDisplay() {
        slidrs.forEach(function(slidr, index) {
            if (index >= currentSlide && index < currentSlide + (isLargeScreen() ? 1 : 1)) {
                slidr.classList.add('black');
            } else {
                slidr.classList.remove('black');
            }
        });
    
        hideCards();
    
        const start = currentSlide;
        const end = start + (isLargeScreen() ? 3 : 1);
        showCards(start, end);
    }
    

    if (isLargeScreen()) {
        hideCards();
        showCards(0, 3);
    } else {
        hideCards();
        showCards(0, 1);
    }

    startSlideInterval();

    window.addEventListener('resize', function() {
        if (isLargeScreen()) {
          
            hideCards();
            showCards(0, 3);
        } else {
            console.log('mobile');
            hideCards();
            showCards(0, 1);
        }
        updateSlideDisplay();
    });

    slidrs.forEach(function(slidr, index) {
        slidr.addEventListener('click', function() {
            stopSlideInterval();
            currentSlide = index;
            updateSlideDisplay();
            startSlideInterval();
        });
    });

    function hideCards() {
        cards.forEach(function(card) {
            card.style.display = 'none';
        });
    }

    function showCards(start, end) {
        for (let i = start; i < end && i < cards.length; i++) {
            cards[i].style.display = 'flex';
        }
    }







});
